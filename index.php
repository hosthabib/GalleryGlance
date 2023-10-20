<?php get_header();?>
            <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <?php get_template_part('content',get_post_format()); ?>
            <?php endwhile; ?>
        <?php else: ?>
            <?php echo wpautop('Sorry, There are no posts');?>
        <?php endif; ?>
        <div class="w3-col m4 l4 pic">
		  	<a href="single.html">
		   		<img src="images/1.jpg" class="w3-animate-opacity">
		   	</a>
		   	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		  </div>
		  <div class="w3-col m4 l4 pic">
		   <img src="images/2.jpg" class="w3-animate-opacity">
		   	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		  </div>
		  <div class="w3-col m4 l4 pic">
		   <img src="images/3.jpg" class="w3-animate-opacity">
		   	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		  </div>

		  <div class="w3-col m4 l4 pic">
		   	<img src="images/4.jpg" class="w3-animate-opacity">
		   	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		  </div>
		  <div class="w3-col m4 l4 pic">
		   <img src="images/5.jpg" class="w3-animate-opacity">
		   	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		  </div>
		  <div class="w3-col m4 l4 pic">
		   <img src="images/6.jpg" class="w3-animate-opacity">
		   	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		 </div>
<?php get_footer();?>