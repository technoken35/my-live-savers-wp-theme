<?php /* Template Name: Account Template */ ?>
<?php get_header(); ?>
<section id="page-template">
    <div id="courses" class="container p-5 my-3">

        <div id="my-courses"></div>
        <?php the_content();?> 
        <div id="courses-home"></div>
    </div>
    <div id="coming-soon">
        <h2 class="text-center mt-5">Video Content Coming Soon!</h2>
    </div>
</section>
<?php get_footer(); ?>
