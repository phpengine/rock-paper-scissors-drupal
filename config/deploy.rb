require ‘capistrano/php’

# Rock, Paper, Scissors script (Capistrano)

set :application, "rock-paper-scissors-drupal"
set :repository,  "/var/www/gitRepos/rock-paper-scissors-drupal"
set :scm, :git

default_run_options[:pty] = true
set :deploy_to, "/var/www/"

## multi-stage deploy process ###

task :dev do
  role :web, "dev.davegardner.me.uk", :primary => true
  set :app_environment, "dev"
  set :branch, "master"
end

task :staging do
  role :web, "staging.davegardner.me.uk", :primary => true
  set :app_environment, "staging"
  set :branch, `git tag | xargs -I@ git log --format=format:"%ci %h @%n" -1 @ | sort | awk '{print  $5}' | egrep '^b[0-9]+$' | tail -n 1`
end

task :production do
  role :web, "rock-paper-scissors-drupal.demo.golden-contact-computing.co.uk", :primary => true
  set :app_environment, "production"
end

## tag selection ##

# we will ask which tag to deploy; default = latest
# http://nathanhoad.net/deploy-from-a-git-tag-with-capistrano
set :branch do
  default_tag = `git describe --abbrev=0 --tags`.split("\n").last
  tag = Capistrano::CLI.ui.ask "Tag to deploy (make sure to push the tag first): [#{default_tag}] "
  tag = default_tag if tag.empty?
  tag
end unless exists?(:branch)

## php cruft ##

# https://github.com/mpasternacki/capistrano-documentation-support-files/raw/master/default-execution-path/Capistrano%20Execution%20Path.jpg
# https://github.com/namics/capistrano-php

namespace :deploy do

  task :finalize_update, :except => { :no_release => true } do
    transaction do
      run "chmod -R g+w #{releases_path}/#{release_name}"
      # run our build script
      run "echo '#{app_environment}' > #{releases_path}/#{release_name}/config/environment.txt"
      run "cd #{releases_path}/#{release_name} && phing build"
    end
  end

  task :migrate do
    # do nothing
  end

  task :restart, :except => { :no_release => true } do
    # reload nginx config
    run "sudo service httpd reload"
  end

  after "deploy", :except => { :no_release => true } do
    run "cd #{releases_path}/#{release_name} && phing spawn-workers > /dev/null 2>&1 &", :pty => false
  end
end


