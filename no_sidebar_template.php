<?php
/*
Template Name: Page Without Side Bar
*/
?>

<?php get_header();?>

<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1 class="page_header"><?php the_title(); ?></h1>
<div id="content">
<p><?php the_content(__('(more...)')); ?></p> 
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
	</div>
</div>

<?php get_footer();?>