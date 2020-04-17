<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152340963-1"></script>
    <script>
       window.dataLayer = window.dataLayer || [];
       function gtag(){dataLayer.push(arguments);}
       gtag('js', new Date());

       gtag('config', 'UA-152340963-1');
    </script>

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( option::get('sidebar_pos') == 'Left' ) { ?><style type="text/css">#sidebar{float:left;margin-right:20px;} #articles, #main {float:right;}</style><?php } ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page-wrap">

 		<div id="main-wrap">

			<div id="header">
                          <div class="wbw-topside">
				<table class="wbw-topside-table">
                                  <tr class="wbw-topside-tr">
                                    <td class="wbw-topside-td wbw-topside-td-translate">        
                                      <?php echo do_shortcode("[do_widget id=gtranslate-2]"); ?>
                                    </td>
                                    <td class="wbw-topside-td wbw-topside-td-translate-icon">        
                                      <a href="#"><i class="fas fa-language"></i></a> &nbsp;
                                    </td>
                                  </tr>
                                  <tr class="wbw-topside-tr">
                                    <td class="wbw-topside-td wbw-topside-td-signup">       
                                      Sign Up &nbsp;&nbsp;
                                     </td>
                                    <td class="wbw-topside-td wbw-topside-td-signup-icon">       
                                      <a href="#"><i alt="Sign up" class="fas fa-envelope"></i></a>
                                     </td>
                                  </tr>
                                  <tr class="wbw-topside-tr">
                                    <td class="wbw-topside-td wbw-topside-td-search">       
				      <?php echo do_shortcode('[ivory-search id="32210" title="Default Search Form"]'); ?>
                                    </td>
                                    <td class="wbw-topside-td wbw-topside-td-search-icon">       
                                      <i class="fa fa-search"></i>
                                    </td>
                                  </tr>
                                  <tr class="wbw-topside-tr">
                                    <td class="wbw-topside-td wbw-topside-td-social" colspan="2">       
                                      <a href="#"><i class="fab fa-facebook"></i></a> &nbsp;
                                      <a href="#"><i class="fab fa-twitter"></i></a> &nbsp;
                                      <a href="#"><i class="fab fa-instagram"></i></a> &nbsp;
                                      <a href="#"><i class="fab fa-youtube"></i></a> &nbsp;
                                      <a href="#"><i class="fas fa-podcast"></i></a>
                                    </td>
                                  </tr>
                                </table>
                              </div>

 				<!-- <div id="search"><?php get_template_part('searchform'); ?></div> -->

 				<div id="topmenu">

					<?php if (has_nav_menu( 'secondary' )) {
						wp_nav_menu(array(
						'container' => '',
						'container_class' => '',
						'menu_class' => 'dropdown',
						'menu_id' => 'nav',
						'sort_column' => 'menu_order',
						'theme_location' => 'secondary'
						));
					}

					if ( option::get('head_rss_show') == 'on' ) { ?> <a href="<?php ui::rss(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/feed.png" alt="RSS" /></a><?php }
					if ( option::get('head_twitter_show') == 'on' && strlen(option::get('head_twitter_user')) > 1 ) { ?> <a href="http://twitter.com/<?php echo option::get('head_twitter_user'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/twitter.png" alt="Twitter" /></a><?php }
					if ( option::get('head_facebook_show') == 'on' && strlen(option::get('head_facebook_url')) > 1 ) { ?> <a href="<?php echo option::get('head_facebook_url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook.png" alt="Facebook" /></a><?php }

 					?>

				</div> <!-- /#topmenu -->

				<div id="logo">
					<?php if (!option::get('misc_logo_path')) { echo "<h1>"; } ?>

					<a href="<?php echo home_url(); ?>" title="<?php bloginfo('description'); ?>">
						<?php if (!option::get('misc_logo_path')) { bloginfo('name'); } else { ?>
							<img src="<?php echo ui::logo(); ?>" alt="<?php bloginfo('name'); ?>" />
						<?php } ?>
					</a><div class="clear"></div>

					<?php if (!option::get('misc_logo_path')) { echo "</h1>"; } ?>

					<?php if (option::get('logo_desc') == 'on') {  ?><span><?php bloginfo('description'); ?></span><?php } ?>
				</div><!-- / #logo -->


				<?php if (option::get('ad_head_select') == 'on') { ?>
 					<div class="banner banner-head">

 					<?php if ( option::get('ad_head_code') <> "") {
						echo stripslashes(option::get('ad_head_code'));
					} else { ?>
						<a href="<?php echo option::get('ad_head_imgurl'); ?>"><img src="<?php echo option::get('ad_head_imgpath'); ?>" alt="<?php echo option::get('ad_head_imgalt'); ?>" /></a>
					<?php } ?>
					</div><!-- /.adv -->

 				<?php } ?>


				<div id="mainmenu">

					<?php if (has_nav_menu( 'primary' )) {
							wp_nav_menu(array(
							'container' => '',
							'container_class' => '',
							'menu_class' => 'dropdown',
							'menu_id' => 'menu',
							'sort_column' => 'menu_order',
							'theme_location' => 'primary'
							));
						}
						else
							{
								echo '<p>Please set your Main navigation menu on the <strong><a href="'.get_admin_url().'nav-menus.php">Appearance > Menus</a></strong> page.</p>
							 ';
							}

						?>

				</div> <!-- /#menu -->

			</div> <!--/#header -->
			<div class="clear"></div>

 			<div id="content-wrap">
