

<!-- This is a loop to print out our content -->
<?php get_header(); ?>
<section id="page-template">
    <div class="container p-5 mt-4">
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    
    <?php endwhile; endif;?>
    <?php the_content();?>
    </div>
</section>
<?php get_footer(); ?>

<!-- ? This file is used for all non-specific pages -->