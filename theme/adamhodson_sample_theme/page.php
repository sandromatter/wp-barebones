<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

<div id="page-wrapper"> 
    <div class="container">
    	<?php the_content(); ?>    	
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer();
