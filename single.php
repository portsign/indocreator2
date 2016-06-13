<?php get_header(); ?>	
<div id="content">
	<div class="container">
	
		<div id="single_cont">
		
			<!--<div class="single_left single_full">-->
			<div class="single_left">
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="next_prev_cont next_prev_cont_top_right">
						<div class="left">
							 <?php //previous_post_link('%link', '<i>Previous post</i><br />%title'); ?> 
							 <?php previous_post_link('%link', ''); ?> 
						</div>
						<div class="right">
							 <?php //next_post_link('%link', '<i>Next post</i><br />%title'); ?> 
							 <?php next_post_link('%link', ''); ?> 
						</div>
						<div class="clear"></div>
					</div><!--//next_prev_cont-->				
			
					<h1 class="single_title"><?php the_title(); ?></h1>
					
					<div class="single_inside_content">
					
						<?php the_content(); ?>
						
					</div><!--//single_inside_content-->
					
					<br /><br />
					
					<script>
					  window.fbAsyncInit = function() {
					    FB.init({
					      appId      : '104501219977666',
					      xfbml      : true,
					      version    : 'v2.6'
					    });
					  };

					  (function(d, s, id){
					     var js, fjs = d.getElementsByTagName(s)[0];
					     if (d.getElementById(id)) {return;}
					     js = d.createElement(s); js.id = id;
					     js.src = "//connect.facebook.net/en_US/sdk.js";
					     fjs.parentNode.insertBefore(js, fjs);
					   }(document, 'script', 'facebook-jssdk'));
					</script>

												
				
				<?php endwhile; else: ?>
				
					<h3>Sorry, no posts matched your criteria.</h3>
				<?php endif; ?>                    																
			
			</div><!--//single_left-->
						
			<div class="clear"></div>
		
		</div><!--//single_cont-->
		
	</div><!--//container-->
</div><!--//content-->
<?php get_footer(); ?> 		