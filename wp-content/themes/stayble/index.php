<?php get_header(); ?>
<section id="content" role="main">	
<div class="wrapper">
<div id="postWrapper">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div id="post">
<?php get_template_part( 'entry' ); ?>
<!-- <?php comments_template(); ?> -->
</diV>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
</div>
</div>
<?php get_sidebar(); ?> 
 <?php get_footer(); ?>