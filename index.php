<?php get_header(); ?>
<div id="main">
<div id="content">
<h1>Main Area</h1>
//Display posts
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="posts">
<!-- Gets Title of the post-->
<h1><?php the_title(); ?></h1>
<!-- Gets Time of the post -->
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<!-- Gets Content of the post-->
<p><?php the_content(__('(more...)')); ?></p>
<hr>
</div>
<!-- Ends while statement starts else statement for posts -->
<?php endwhile; else: ?>
<div class="posts">
<!-- This gives an error if no posts exist on your page -->
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
</div>
<?php endif; ?>    

</div>
<?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>