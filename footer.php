		<div class="clear"></div>
		</div> <!-- /#content-wrap -->

	<div class="clear"></div>
	</div> <!-- /#main-wrap -->

        <div class="wbwdevspace">
          <h3>A bunch of other stuff goes here. This is a demo of a redesign in progress.</h3>
        </div>
	<div id="footer">

		<div class="widget-area">
		
			<div class="column">
				<?php if (function_exists('dynamic_sidebar')) { dynamic_sidebar('Footer (column 1)'); } ?>
			</div><!-- / .column -->
			
			<div class="column">
				<?php if (function_exists('dynamic_sidebar')) { dynamic_sidebar('Footer (column 2)'); } ?>
			</div><!-- / .column -->
			
			<div class="column last">
				<?php if (function_exists('dynamic_sidebar')) { dynamic_sidebar('Footer (column 3)'); } ?>
			</div><!-- / .column -->
 
			<div class="clear"></div>
		</div><!-- /.widget-area-->		
		<div class="clear"></div>
<!--
                  Website built with open source <a target="_blank" href="http://wordpress.org">WordPress</a> and hosted by union shop at <a target="_blank" href="http://mayfirst.org">MayFirst.org</a>.
-->
		</div>

	</div> <!-- /#footer -->

	<div class="clear"></div>

</div> <!-- /#page-wrap -->

<?php 
if ( is_home() && $paged < 2 && option::get('featured_enable') == 'on' ) { 
	ui::js("slider");
	?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#navi ul").tabs("#panes > div", {
			effect: 'fade',
			rotate: true
		}).slideshow({
			clickable: false,
			autoplay: <?php echo option::get('featured_rotate') == 'on' ? "true" : "false"; ?>,
			interval: <?php echo option::get('featured_interval'); ?>
		});
		jQuery("#gtranslate_selector").attr('placeholder','Translate to ... &nbsp;');
		/*
		jQuery(".wbw-topside-search").mouseover(function() {
		  jQuery(".is-search-form").css('visibility', 'visible');
		})
		jQuery(".wbw-topside-search").mouseout(function() {
		  jQuery(".is-search-form").css('visibility', 'hidden');
		})
		*/
	});
	</script>
	<?php 
}

wp_reset_query();
if ( is_single() ) { ?><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><?php } // Google Plus button

wp_footer();
?>
</body>
</html>
