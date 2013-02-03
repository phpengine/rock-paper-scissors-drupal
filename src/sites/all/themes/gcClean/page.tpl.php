  <?php print render($page['header']); ?>

    <header class="clearfix">
        <div id="upper-wrap" class="clearfix">
            <div id="logo-outer">
                <a href="<?php print $front_page ?>"><img src="<?php print $logo ?>" alt="<?php echo $site_name_and_slogan ?> "></a>
                <!-- END #logo -->
            </div>
            <div id="slogan-right">
                <h1>D-Testable from Golden Contact</h1>
            </div>
            <div id="logocaption">
                <?php print ""; //$site_name_and_slogan ?>
            </div>
            <nav id="primary-nav">
                <div class="menu-main-container">
                    <ul id="menu-main" class="menu sf-js-enabled">
                        <?php print render($page['headerRight']); ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!--BEGIN .recent-wrap -->
    <article class="recent-wrap" style="width:940px; text-align:center; padding-top:0px; border:none;" >
        <!--BEGIN .hentry-wrap -->
        <div class="hentry-wrap clearfix" style="width:940px; ">

          <?php // print $breadcrumb; ?>
          <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>

          <?php print $messages; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <?php print render($page['content']); ?>
          <?php print render($page['footer']); ?>

    <!--END .hentry-wrap clearfix -->
        </div>
    <!--END .recent-wrap -->
    </article>

    <!-- BEGIN #footer-container -->
    <footer id="footer-container">
        <!-- BEGIN #footer -->
        <div id="footer" class="clearfix" style="padding:10px 0px; border:none;">
            <p class="copyright">Brought to you by David Amanshia, <a href="http://www.golden-contact-computing.co.uk">Golden Contact Computing</a>, <a href="http://www.gcsoftshop.co.uk">Golden Contact Software Shop</a></p>

        <!-- END #footer -->
        </div>
    <!-- END #footer-container -->
    </footer>
