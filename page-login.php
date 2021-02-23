<?php /* Template Name: Login Template */ ?>
<?php get_header(); ?>
<section id="page-template">
    <div class="container p-5 my-3">
    <!-- using php function to get our custom sidebar -->
    <?php dynamic_sidebar('login-form'); ?>
    <?php the_content();?>
</section>
<?php get_footer(); ?>
