<?php
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>	
<div id="content">
	<div class="container">
	
		<div class="single_full_cont single_full_cont2">
		
			<div id="posts_cont">
		
				<?php
				$args = array(
					 'category_name' => 'blog',
					 'post_type' => 'post',
					 'posts_per_page' => 3,
					 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
					 );
				query_posts($args);
				$x = 0;
				while (have_posts()) : the_post(); ?>                                            		
					<div class="home_blog_box home_blog_box_full home_blog_box_only">
						<div class="feat_item">
							<?php if(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'youtube') { ?>
								<iframe width="900" height="500" src="http://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>" frameborder="0" allowfullscreen></iframe>
							<?php } elseif(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'vimeo') { ?>
								<iframe src="http://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=03b3fc" width="1180" height="492" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							<?php } else { ?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('modern-blog'); ?></a>
							<?php } ?>
							<div class="feat_item_title">
								<div class="home_blog_meta"> <?php the_time('F j, Y'); ?></div>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							</div>
						</div>
						<div class="center_cont text">
							<p><?php echo ds_get_excerpt('600'); ?></p>
							<a class="readmore" href="<?php the_permalink(); ?>"> READ MORE </a>
						</div>
						<div class="clear"></div>
					</div> <!-- //home_blog_box -->	
									
					
				<?php $x++; ?>
				<?php endwhile; ?>
				
				<div class="clear"></div>			
				
			</div><!--//posts_cont-->
			
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
			<div id="max_pages_id" style="display: none;"><?php echo ceil($wp_query->found_posts / 3); //echo $max_pages-1; ?></div>					
			
			<?php wp_reset_query(); ?>                        
		
		</div><!--//single_full_cont-->
		
		<?php //get_sidebar(); ?>
		
		<div class="clear"></div>	
		
		
	</div><!--//container-->
</div><!--//content-->
<script type="text/javascript">
$(document).ready(
function($){
var curPage = 1;
var pagesNum = $("#max_pages_id").html();   // Number of pages	
if(pagesNum == 1)
	$('.load_more_text a').css('display','none');	
  $('#posts_cont').infinitescroll({
 
    navSelector  : "div.load_more_text",            
		   // selector for the paged navigation (it will be hidden)
    nextSelector : "div.load_more_text a:first",    
		   // selector for the NEXT link (to page 2)
    itemSelector : "#posts_cont .home_blog_box",
		   // selector for all items you'll retrieve
	behavior: "twitter",
    maxPage: <?php echo $max_pages; ?>
  },function(arrayOfNewElems){
  
  $('#posts_cont').append('<div class="clear"></div>');
  
      //$('.home_post_cont img').hover_caption();
      $('.load_more_text a').css('visibility','visible');
            curPage++;
//            alert(curPage + '**' + pagesNum);
            if(curPage == pagesNum) {
                //$(window).unbind('.infscr');
                $('.load_more_text a').css('display','none');
            } else {}  		      
 
     // optional callback when new content is successfully loaded in.
 
     // keyword `this` will refer to the new DOM content that was just added.
     // as of 1.5, `this` matches the element you called the plugin on (e.g. #content)
     //                   all the new elements that were found are passed in as an array
 
  });  
}  
);
</script>	
<?php get_footer(); ?> 		