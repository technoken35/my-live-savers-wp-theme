<?php /* Template Name: Practice Test Template */ ?>
<?php get_header(); ?>
<section id="page-template">
    <div class="container p-5 my-3">
    <!-- using php function to get our custom sidebar -->
    <?php dynamic_sidebar('practice-test'); ?>
    <?php the_content();?>
    </div>
</section>
<?php get_footer(); ?>
