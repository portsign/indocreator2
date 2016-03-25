<?php get_header(); ?>	
	<?php /*
	<div class="container">
	<?php if(is_category()) { ?>
	<div class="archive_title">
		<?php printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
		<div class="clear"></div>
	</div><!--//archive_title-->
	<?php } ?>	
	</div> */ ?>
	<div class="container">
		<div id="posts_cont" class="home_posts_cont">
			<?php
			if(!is_paged()) {
				echo '<div class="gutter-sizer"></div>';
				echo '<div class="grid-sizer"></div>';
			}
			$args = array_merge( $wp_query->query, array( 'posts_per_page' => 4 ) );
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
					<p><?php echo ds_get_excerpt('310'); ?></p>
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
				ob_start();
				
				next_posts_link('LOAD &#9660; MORE');
				$buffer = ob_get_contents();
				ob_end_clean();
				if(!empty($buffer)) echo $buffer;
				?>
				</div></div>
			</div><!--//load_more_cont-->     	
		
		  	
			<?php
			global $wp_query;
			//echo '**' . $wp_query->max_num_pages . '**';	
			$max_pages = $wp_query->max_num_pages;
			?>			
			<div id="max_pages_id" style="display: none;"><?php echo ceil($wp_query->found_posts / 4); //echo $max_pages-1; ?></div>							
		<div class="clear"></div>
	</div> <!-- //container -->
<script type="text/javascript">
$(document).ready(function($){
//jQuery(window).load(function($) {
var curPage = 1;
var pagesNum = $("#max_pages_id").html();   // Number of pages		
	var $container = $('.home_posts_cont');
if(pagesNum == 1)
	$('.load_more_text a').css('display','none');		
  $('#posts_cont').infinitescroll({
 
    navSelector  : "div.load_more_text",            
		   // selector for the paged navigation (it will be hidden)
    nextSelector : "div.load_more_text a:first",    
		   // selector for the NEXT link (to page 2)
    itemSelector : "#posts_cont .home_box",
		   // selector for all items you'll retrieve
	behavior: "twitter",
    maxPage: <?php echo $max_pages; ?>		   
  },function(arrayOfNewElems){
  
	  $('#posts_cont').append('<div class="clear"></div>');
      $('.load_more_text a').css('visibility','visible');
            curPage++;
            //alert(curPage + pagesNum);
//            alert(curPage + '**' + pagesNum);
            if(curPage == pagesNum) {
                //$(window).unbind('.infscr');
                $('.load_more_text a').css('display','none');
            } else {}  		      	  
/*
	    var $newElems = $( arrayOfNewElems );
	    $container.imagesLoaded( function() {
		    $container.masonry( 'appended', $newElems );	  
		});
  */
      //$('.home_post_cont img').hover_caption();
 
     // optional callback when new content is successfully loaded in.
 
     // keyword `this` will refer to the new DOM content that was just added.
     // as of 1.5, `this` matches the element you called the plugin on (e.g. #content)
     //                   all the new elements that were found are passed in as an array
 
  });  
});
</script>	
<?php get_footer(); ?> 		