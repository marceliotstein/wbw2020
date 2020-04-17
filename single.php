<?php get_header(); ?>
<?php $template = get_post_meta($post->ID, 'wpzoom_post_template', true); ?>

<?php
/* debug marceliotstein 2019 */
$admin_debug = false;
if (is_user_logged_in()) {
  $admin_debug = true;
}
if ($admin_debug) {
  //print "single";
}
?>

<div id="main"<?php if ($template == 'full') {echo " class=\"full-width\"";} ?>>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();	?>
			
 		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="article-categories">
                          <?php 
                             $categories = get_the_category();
                             $n = 0;
                             foreach ($categories as $category) {

                               // exclude certain categories from display

                               $exclude_category = false;
                               if ($category->name=="Uncategorized") {
                                 $exclude_category = true;
                               } 
                               if (($category->name=="Alternatives") ||
                                   ($category->name=="Campaigns") ||
                                   ($category->name=="Chapters and Affiliates") ||
                                   ($category->name=="Online Actions")) {
                                 $exclude_category = true;
                               } 
                               $parent = get_category($category->category_parent);
			       if (isset($parent->slug)) {
                                 if ($parent->slug=="alternatives") {
                                   $exclude_category = true;
                                 } 
                               } 
              
                               // if not excluded, display category

                               if (!$exclude_category) {
                                 $cat_link = get_category_link($category->cat_ID);
                                 if ($n > 0) {
                                   echo ', ';
                                 }
                                 echo '<a href="' . $cat_link . '">' . $category->name . '</a>';
                                 $n++;
                               }
                             }
                          ?>
                        </div>

			<?php if (option::get('post_category') == 'on') { ?><span class="category"><?php the_category(' / '); ?></span><?php } ?>
			
			<h1 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

			<span class="post-meta">

				<?php if (option::get('post_author') == 'on') { ?><?php _e('Posted by', 'wpzoom'); ?> <?php the_author_posts_link(); ?><?php } ?>

				<?php if (option::get('post_date') == 'on') { ?><?php printf( __('on %s at %s', 'wpzoom'),  get_the_date(), get_the_time()); ?><?php } ?>

				<?php edit_post_link( __('Edit', 'wpzoom'), ' <span class="separator">&times;</span>  ', '' ); ?>
			
			</span>
			
			<div class="entry">

				<?php the_content(); ?>
				<div class="clear"></div>

 				<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'wpzoom' ) . '</span>', 'after' => '</div>' ) ); ?>

				<div class="clear"></div>
			
			</div>
			<div class="clear"></div>

			<?php if (option::get('post_tags') == 'on') {  the_tags( __( '<span class="tag-links">Tags: ', 'wpzoom' ), ", ", "</span>\n" ); } ?>

			<div class="clear"></div>

			<?php if ( option::get('post_share') == 'on' ) {

				?><div id="socialicons">

					<ul class="wpzoomSocial">
						<li><a href="http://twitter.com/share" data-url="<?php the_permalink(); ?>" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></li>
						<li><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=110&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:21px;" allowTransparency="true"></iframe></li>
						<li><g:plusone size="medium"></g:plusone></li>

					</ul>

				</div><div class="clear"></div><?php

			} ?>

			<?php if (option::get('post_authorbio') == 'on') { ?>		
				<div class="post_author">
					<?php echo get_avatar( get_the_author_meta('ID') , 70 ); ?>
					<span><?php _e('Author:', 'wpzoom'); ?> <?php the_author_posts_link(); ?></span>
					<?php the_author_meta('description'); ?><div class="clear"></div>
				</div>
			<?php } ?>
                        <div class="similar-posts-ontology">
                          <table class="similar-posts-table">
                            <tr class="similar-posts-tr">
                              <?php

                                // add Similar Posts Ontology widget 

                                $pk_args = array (
                                  'posts_per_page' => 2,
                                  'thumbnail_size' => 'medium',
                                  'sort_prefer' => 'closest'
                                );
                                $pk_related = pk_related_return($post->ID, $pk_args);
                                $num_related = sizeof($pk_related);
                                $n = 0;
                                
                                foreach ($pk_related as $related_post) {
                              
                                  // display related posts header first time thru

                                  if ($n==0) {
                                    print '<div class="related-post-header">Related Articles ...</a>';
                                  }

                                  $rel_title = $related_post->post_title;
				  if (isset($related_post->thumbnail)) {
                                    $rel_thumb = $related_post->thumbnail;
				  } else {
			            $rel_thumb = null;
				  }
                                  $rel_link = $related_post->permalink;

                                  // handle special case of only a single related post found
                                  if ($num_related<2) {
                                    $td_class = "similar-posts-td similar-posts-td-singleton";
                                  } else {
                                    $td_class = "similar-posts-td";
                                  }
                                  print '<td class="' . $td_class . '">';
                                  print '<div class="related-post-title">';
                                  print '<a href="' . $rel_link . '">'. $rel_title . '</a>';
                                  print '</div>';

				  if (isset($rel_thumb)) {
                                    print '<div class="related-post-thumb">';
                                    print '<a href="' . $rel_link . '"><img src="'. $rel_thumb . '" /></a>';
                                    print '</div>';
                                    print '</td>';
				  }
                                  $n++;
                                }
                              ?>
                            </tr>
                          </table>
                        </div>

                        <div class="custom_page_promo">
                          <?php
                            // use Sidebar (half right) to hold promo for single page	
                            dynamic_sidebar('Sidebar (half right)');
                          ?>
			</div>


		</div><!-- /.post -->

		<?php if (option::get('post_comments') == 'on') { 
			comments_template();
		} ?>
		
		<?php endwhile; 

			else:

		?><p><?php _e('Sorry, no posts matched your criteria.', 'wpzoom');?></p><?php

	endif;
	?>

</div><!-- /#main -->

<?php if ($template != 'full') { 
	get_sidebar(); 
} else { echo "<div class=\"clear\"></div>"; } ?>

<?php get_footer(); ?>
