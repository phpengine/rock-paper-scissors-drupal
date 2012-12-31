<!-- BEGIN html -->
			<!DOCTYPE html>
			<html>
			<!-- BEGIN head -->


  <?php print render($page['header']); ?>

			<!-- BEGIN body -->
			<body class="home page page-id-9 page-template page-template-template-home-php gecko layout-2cr">
				<!-- BEGIN #container -->
				<div id="container">
					<!-- BEGIN #header -->
					<div id="header" class="clearfix">
						<!-- BEGIN #upper-wrap -->
						<div id="upper-wrap" class="clearfix">			
							<!-- BEGIN #logo -->
							<div id="logo">
							 <a href="<?php print $front_page ?>"><img src="<?php print $logo ?>" alt="<?php echo $site_name_and_slogan ?> "></a>
							<!-- END #logo -->
							</div>		
							<!-- BEGIN #logocaption -->
							<div id="logocaption">
								<?php print ""; //$site_name_and_slogan ?>
							<!-- END #logo -->
							</div>
							<!-- BEGIN #primary-nav -->
							<div id="primary-nav">
						                <div class="menu-main-container"><ul id="menu-main" class="menu sf-js-enabled">
		
										  <?php print render($page['headerright']); ?>

								</div>
							<!-- END #primary-nav -->
							</div>
					    	<!-- END #upper-wrap -->
						</div>
					<!-- END #header -->
					</div>

				<!--BEGIN #content -->
				<div id="content" class="clearfix">
				    <!--BEGIN #home-message -->
				    <div id="home-message" style=" margin: 10px 0 20px 0;color:#afafaf;">
				    	<h2 style="padding:20px 0 20px 0;">We should hire <b> dave </b> ...</h2>
				    <!--END #home-message -->
				    </div>
						                        
				    <!--BEGIN #slider .clearfix -->
				    <!--BEGIN #recent-portfolio .home-recent -->
				    <div id="recent-portfolio" class="home-recent clearfix ">
                <!--BEGIN .recent-wrap -->
                <div class="recent-wrap" style="width:940px; text-align:center; padding-top:0px; border:none;" >	                        
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
                </div>
		
			           <!--END #recent-portfolio .home-recent -->
				    </div>
				<!-- END #content -->
				</div>
			    <!-- END #container -->
			    </div> 	
			    
			    <!-- BEGIN #footer-container -->
			    <div id="footer-container">
				<!-- BEGIN #footer -->
				<div id="footer" class="clearfix" style="padding:10px 0px; border:none;">
				    <p class="copyright">Brought to you by David Amanshia, <a href="http://www.golden-contact-computing.co.uk">Golden Contact Computing</a>, <a href="http://www.gcsoftshop.co.uk">Golden Contact Software Shop</a></p>
		
				<!-- END #footer -->
				</div>
	
			    <!-- END #footer-container -->
				</div>

			
			<!--END body-->



			</body><!--END html--></html>
