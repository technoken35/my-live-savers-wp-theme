<?php /* Template Name: Registration Template */ ?>
<?php get_header(); ?>
<section id="page-template">
    <div id="registration-wrapper" class="container p-5 my-3">
    <!-- using php function to get our custom sidebar 
    <?php echo do_shortcode("[mepr-unauthorized-message]");?> -->
    <?php the_content();?>
</section>
<?php get_footer(); ?>