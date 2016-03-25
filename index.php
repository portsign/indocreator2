<?php get_header(); ?>	
<div class="container">	
	<?php if(get_option($shortname.'_disable_slideshow','') != "Yes") { ?>
	<div id="slideshow_cont">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide-prev.png" alt="prev" class="slide_prev" />
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide-next.png" alt="next" class="slide_next" />
		
		<?php
		$slider_arr = array();
		$x = 0;
		$args = array(
			 //'category_name' => 'blog',
			 'post_type' => 'post',
			 'meta_key' => 'ex_show_in_slideshow',
			 'meta_value' => 'Yes',
			 'posts_per_page' => 99
			 );
		query_posts($args);
		while (have_posts()) : the_post(); ?>                        
			<div class="slide_box <?php if($x == 0) { echo 'slide_box_first'; } ?>">
			
				<?php if(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'youtube') { ?>
					<iframe width="1180" height="492" src="http://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?wmode=transparent" frameborder="0" allowfullscreen></iframe>
				<?php } elseif(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'vimeo') { ?>
					<iframe src="http://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=03b3fc" width="1180" height="492" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<?php } else { ?>				
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('slide-image'); ?></a>
				<?php } ?>
				<!--
				<div class="slider_text" onclick="location.href='<?php the_permalink(); ?>';">
					<div class="slider_text_inside">
						<?php the_title(); ?>
					</div> <!-- //slider_text_inside 
				</div> --><!-- //slider_text -->
				
			</div>
		<?php array_push($slider_arr,get_the_ID()); ?>
		<?php $x++; ?>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>                                    
		
	</div><!--//slideshow_cont-->
	<div class="widget_top">
			<div class="home_bottom_box">
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Homepage 1') ) : ?>
				<?php endif; ?>
			</div> <!-- //home_bottom_box -->
			<div class="home_bottom_box">
				
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Homepage 2') ) : ?>
				<?php endif; ?>
			</div> <!-- //home_bottom_box -->
			
			<div class="home_bottom_box">
				
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Homepage 3') ) : ?>
				<?php endif; ?>
			</div> <!-- //home_bottom_box -->
			
			
			<div class="clear"></div>
	</div>
	<div class="clear"></div>
	
	<?php } ?>
	<div id="posts_cont" class="home_posts_cont">
		<?php
		if(!is_paged()) {
			echo '<div class="gutter-sizer"></div>';
			echo '<div class="grid-sizer"></div>';
		}
		$category_ID = get_category_id('blog');
		$args = array(
		'category_name' => 'none',
			 'post_type' => 'post',
			 'posts_per_page' => 1,
			 'post__not_in' => $slider_arr,
			 //'meta_key' => 'ex_show_in_homepage',
			 //'meta_value' => 'Yes',			 
			'meta_query' => array(
				'relation' => 'OR',
				array(
					'key'     => 'ex_show_in_homepage',
					'value'   => 'Yes',
					'compare' => '=',
				),
				array(
					'key'     => 'ex_show_in_slideshow',
					'value'   => 'Yes',
					'compare' => '!=',
				),
			),
			 //'cat' => '-' . $category_ID,
			 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
			 );
		query_posts($args);
		$x = 0;
		while (have_posts()) : the_post(); ?>
			<div class="home_box">
				<div class="box_right">
					<?php if(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'youtube') { ?>
						<iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?wmode=transparent" frameborder="0" allowfullscreen></iframe>
					<?php } elseif(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'vimeo') { ?>
						<iframe src="http://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=03b3fc" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					<?php } else { ?>								
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('neue-home-post'); ?></a>
					<?php } ?>
				</div>
				<div class="box_left">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><?php echo ds_get_excerpt('335'); ?></p>
				</div>
				<div class="clear"></div>
				
			</div> <!-- //home_box -->
			<div class="clear"></div>
		<?php $x++; ?>
		<?php endwhile; ?>
	</div> <!-- //posts_cont -->
	<div class="clear"></div>
	<div class="load_more_cont">
		<div align="center"><div class="load_more_text">
		<?php
/*
		ob_start();
		next_posts_link('<img src="' . get_bloginfo('stylesheet_directory') . '/images/loading-button.png" />');
		$buffer = ob_get_contents();
		ob_end_clean();
		if(!empty($buffer)) echo $buffer;
*/
		?>
		</div></div>
	</div><!--//load_more_cont-->     					
	<?php wp_reset_query(); ?>                                    		
	
	<div class="clear"></div>			
</div> <!-- //container -->	
<script type="text/javascript">
/*
$(document).ready(function($){
//jQuery(window).load(function($) {
	var $container = $('.home_posts_cont');
  $('#posts_cont').infinitescroll({
 
    navSelector  : "div.load_more_text",            
		   // selector for the paged navigation (it will be hidden)
    nextSelector : "div.load_more_text a:first",    
		   // selector for the NEXT link (to page 2)
    itemSelector : "#posts_cont .home_box"
		   // selector for all items you'll retrieve
  },function(arrayOfNewElems){
  
	  $('#posts_cont').append('<div class="clear"></div>');
	    var $newElems = $( arrayOfNewElems );
	    $container.imagesLoaded( function() {
		    $container.masonry( 'appended', $newElems );	  
		});
  
      //$('.home_post_cont img').hover_caption();
 
     // optional callback when new content is successfully loaded in.
 
     // keyword `this` will refer to the new DOM content that was just added.
     // as of 1.5, `this` matches the element you called the plugin on (e.g. #content)
     //                   all the new elements that were found are passed in as an array
 
  });  
});
*/
</script>	
<?php get_footer(); ?> 		