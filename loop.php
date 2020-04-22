<?php while (have_posts()) : the_post();?>
  <div class="article" id="post-<?php the_ID(); ?>">

    <table class="wbw-front-articles-table">
      <tr>
        <td class="wbw-front-articles-image">
	  <?php if ( option::get('display_thumb') == 'on' ) {

 		$custom_field = ( option::get( 'cf_use' ) == 'on' ) ? get_post_meta( $post->ID, option::get( 'cf_photo' ), true ) : '';
 		$args = array(  'size' => 'thumbnail', 'width' => option::get('thumb_width'), 'height' => option::get('thumb_height'), 'before' => '<div class="post-thumb">', 'after' => '</div>'  );
		if ($custom_field) {
		    $args['meta_key'] = option::get( 'cf_photo' );
  		    get_the_image( $args );

                } elseif ( has_post_thumbnail() ) { ?>
                    <div class="post-thumb">
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                    </div>
                    <?php
                } else {
                    get_the_image( $args );
                }

          } ?>
        <td>
        <td class="wbw-front-articles-text">

	  <div class="post-content">

		<h2 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

		<div class="clear"></div>
	  </div><div class="clear"></div>

        </td>
      </tr>
    </table>
  </div> <!-- /.article -->

<?php endwhile; ?>
<!--
<div class="wbw-front-article-topics">
  <h2>Article Topics</h2>
  <a href="https://worldbeyondwar.org/category/why-end-war/environment/">Environment</a> &#8226; 
  <a href="https://worldbeyondwar.org/category/conflict-management/">Conflict Management</a> &#8226; 
  <a href="https://worldbeyondwar.org/category/culture-of-peace/">Culture of Peace</a> &#8226; 
  <a href="https://worldbeyondwar.org/category/demilitarization/">Demilitarization</a><br />
  <a href="/topics">All Topics</a>
</div>
-->
<?php //get_template_part( 'pagination'); ?>
<div class="navigation"><p><?php posts_nav_link(); ?></p></div>
<?php wp_reset_query(); ?>
