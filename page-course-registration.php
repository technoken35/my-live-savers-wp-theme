<?php /* Template Name: Registration Template */ ?>
<?php get_header(); ?>
<section id="page-template">
    <div id="registration-wrapper" class="container p-5 my-3">

    
    
    <h2 class="text-center mb-5">Registration</h2>
    <?php
    //here we are using a built in function by pods to find posts with name service 
    $mypod= pods('featured_courses');
    // this function will take the pod instance find all the pods, and then sort them in ascending order by name (A-Z)
    $mypod->find('name ASC');
    $loopIndex=0;
    $loop_index
    ?>
    <?php while($mypod->fetch()) : ?>
    <!-- Looping over each pod instance and pulling variables off the array -->
    <?php 
        $name = $mypod->field('name');
        $course_dates = $mypod->field('course_dates');
        $course_location = $mypod->field('course_location');
        $course_description = $mypod->field('course_description');
        $membership_url = $mypod->field('membership_url');
        $start_date = $mypod->field('start_date');
        $start_day = $mypod->field('start_day');
        $start_month = $mypod->field('start_month');

        // permalink in wordpress is a link to the individual post
        $permalink = $mypod->field('permalink');
        $loopIndex +=1;


        $row = $mypod->row();
        $post_id = $row['ID'];
        if (!function_exists('get_post_featured_image')) {
            function get_post_featured_image($post_id, $size) {
            $return_array = [];
            $image_id = get_post_thumbnail_id($post_id);
            $image = wp_get_attachment_image_src($image_id, $size);
            $image_url = $image[0];
            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
            $image_post = get_post($image_id);
            $image_caption = $image_post->post_excerpt;
            $image_description = $image_post->post_content;
            $return_array['id'] = $image_id;
            $return_array['url'] = $image_url;
            $return_array['alt'] = $image_alt;
            $return_array['caption'] = $image_caption;
            $return_array['description'] = $image_description;
            return $return_array;
        }
        }
        $image_properties = get_post_featured_image($post_id, 'full');
    ?>
        <div class="row mb-4 mb-md-2 p-2 justify-content-center">
            <div class="col-12 col-md-3 mb-2 mb-md-0 ">
                <img class="img-fluid" src="<?php echo $image_properties['url'];?>" alt="<?php echo $image_properties['alt'];?>">
            </div>
            <div class="col-12 col-md-4 d-flex align-items-center mb-1 mb-md-0"><h4><?php echo $name;?></h4></div>
            <div class="col-12 col-md-3 d-flex align-items-center">
                <a class="btn btn-secondary" href="<?php echo $membership_url?>">Register Now</a>
            </div>
        </div>
    <?php endwhile; ?>
        
    <?php the_content();?>
</section>
<?php get_footer(); ?>