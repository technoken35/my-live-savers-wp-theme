<html lang="en">
<?php get_header(); ?>
<?php
    //here we are using a built in function by pods to find posts with name service 
    $mypod= pods('home_page');
    // this function will take the pod instance find all the pods, and then sort them in ascending order by name (A-Z)
    $mypod->find('name ASC');
    $loopIndex=0;
    $loop_index
    ?>
    <?php while($mypod->fetch()) : ?>
    <?php 
        $register_prompt_background = $mypod->field('register_prompt_background');
        $featured_background_image = $mypod->field('featured_background_image');
        // permalink in wordpress is a link to the individual post
        $permalink = $mypod->field('permalink');
        $loopIndex +=1;
    ?>
    <header class=" mt-2 mt-lg-" id="welcome-header" style="background: url('<?php echo $featured_background_image['guid']; ?>') no-repeat center center/cover;">
        <div class=" background-overlay home-overlay">
            <div class="w-100 h-100 container p-4 d-flex justify-content-center align-items-center" id="welcome-header-content ">
                <a href="/register">
                    <div class="img-wrapper rounded-pill p-4 text-center ">
                        <img class="img-fluid" alt="register now" src="<?php echo $register_prompt_background['guid']; ?>">
                        <a id="registration-link-home" class="ml-1" href="/register">Click Here</a>
                    </div>
                </a>
            </div>
        </div>
    </header>

    <?php endwhile; ?>   
    
    <section id="home-feature">
        <div id="home-feature-content" class="d-flex flex-column align-items-center justify-content-center">
            <h1 class="mb-5">Courses</h1>
            <!-- Desktop Accordion -->
            <div class="row w-100 ">
                <div class="tabs d-none d-md-block container">
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
                                <!-- Creating div with service information inside of while loop -->
                    <div class="col-12">
                        
                        <div class="tab">
                            <input type="checkbox" id="chck-<?php echo $loopIndex?>">
                            <label class="tab-label" for="chck-<?php echo $loopIndex?>">
                
                                    <div class="date-wrapper d-flex ">
                                        <div class="img-wrapper-sm mr-2"><img alt="<?php echo $image_properties['alt'];?>" class="img-fluid" src="<?php echo $image_properties['url'];?>"></div>
                                        <span class="date-lg"><?php echo $start_date;?></span>
                                        <div>
                                            <p class="mb-0 day"><?php echo $start_day;?></p>
                                            <p class="mb-0 month"><?php echo $start_month;?></p>
                                        </div>
                                    </div>
                                    <?php echo $name;?>
                                
                                    
                
                                </label>
                
                            <div class="tab-content">
                                <p><?php echo $course_dates;?></p>
                                <p><?php echo $course_location;?></p>
                                <p><?php echo $course_description;?> </p>
                                <a href="<?php echo $membership_url;?>" class="btn btn-primary">Register Now</a>
                            </div>
                        </div>
                    </div>
                
                <?php endwhile; ?>    
            </div>

            <!-- Mobile Accordion -->
            <div class=" d-block d-md-none container">
                <div class="tabs d-md-none">

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

                    <div class="col-12 row p-3 mb-5 d-md-none">
                        <div class="col-12 d-flex flex-column align-items-center justify-content-end" >
        
                            <div style="background: url('<?php echo $image_properties['url']?>') no-repeat center center/cover"  class="d-flex course-date course-bg">
                                <div class="date-content-overlay p-1 d-flex align-items-end">
                                    <p class="date-lg mb-1  ml-3"><?php echo $start_date?></p>
                                    <div class="mt-4">
                                        <p class="mb-0"><?php echo $start_day?></p>
                                        <p><?php echo $start_month?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <input type="checkbox" id="chck-mb-<?php echo $loopIndex?>">
                                <label class="tab-label" for="chck-mb-<?php echo $loopIndex?>">
                                    <?php echo $name;?>
                                </label>
        
                                <div class="tab-content">
                                    <p><?php echo $course_dates?></p>
                                    <p><?php echo $course_location?></p>
                                    <p><?php echo $course_description?> </p>
                                    <a href="<?php echo $membership_url ?>" class="btn btn-primary">Register Now</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>  

                    <?php endwhile; ?>    
                </div>
            </div>
        </div>
    </section>
    <section class="container" id="sponsors-feature">
    <?php
    //here we are using a built in function by pods to find posts with name service 
    $mypod= pods('home_page');
    $contact_pod= pods('contact_info');
    // this function will take the pod instance find all the pods, and then sort them in ascending order by name (A-Z)
    $mypod->find('name ASC');
    $contact_pod->find('name ASC');
    $loopIndex=0;
    $loop_index
    ?>
    <?php while($mypod->fetch() || $contact_pod->fetch()) : ?>
    <?php
        $sponsors_background = $mypod->field('sponsors_background'); 
        $sponsor_1 = $mypod->field('sponsor_1');
        $sponsor_2 = $mypod->field('sponsor_2');
        $sponsor_3 = $mypod->field('sponsor_3');
        $sponsor_4 = $mypod->field('sponsor_4');
        $sponsor_5 = $mypod->field('sponsor_5');
        $sponsor_6 = $mypod->field('sponsor_6');
        $sponsor_7 = $mypod->field('sponsor_7');
        $sponsor_8 = $mypod->field('sponsor_8');
        $sponsor_9 = $mypod->field('sponsor_9');
        $message_heading = $mypod->field('message_heading');
        $message_background = $mypod->field('message_background');
        $message = $mypod->field('message_content');
        $image_test = $mypod->field('image_test');
        $about_background_1=$mypod->field('about_background_1');
        $about_background_2=$mypod->field('about_background_2');
        $about_heading=$mypod->field('about_heading');
        $about_sub_heading=$mypod->field('about_sub_heading');
        $about_paragraph=$mypod->field('about_paragraph');
        $program_director=$mypod->field('program_director');
        $program_director_description=$mypod->field('program_director_description');
        $clinic_gif=$mypod->field('clinic_gif');
        $contact_background_1=$mypod->field('contact_background_image_1');
        $contact_background_2=$mypod->field('contact_background_image_2');

        $linkedin= $contact_pod->field('linkedin');


        // permalink in wordpress is a link to the individual post
        $permalink = $mypod->field('permalink');
        $loopIndex +=1;
    ?>
        <div class="mt-5" id="sponsors-bg" style="background: url('<?php echo $sponsors_background['guid']; ?>') no-repeat center center;"></div>
        <h2 class="text-center mt-5">Backed By The Best Partners In The Valley</h2>
        <div  class="d-lg-none">
            <div id="sponsers-feature-content">
                <div class="row py-3">
                    <div class="col-3">
                        <img class="img-fluid" alt="<?php echo $sponsor_1['post_title'] ?>" src="<?php echo $sponsor_1['guid'] ?>">
                    </div>
                    <div class="col-3">
                        <img class="img-fluid" alt="<?php echo $sponsor_2['post_title'] ?>" src="<?php echo $sponsor_2['guid'] ?>">
                    </div>
                    <div class="col-3">
                        <img class="img-fluid" alt="<?php echo $sponsor_3['post_title'] ?>" src="<?php echo $sponsor_3['guid'] ?>">
                    </div>
                    <div class="col-3">
                        <img class="img-fluid" alt="<?php echo $sponsor_4['post_title'] ?>" src="<?php echo $sponsor_4['guid']?>">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="carousel-wrapper" class="d-none d-lg-block">
        <div class="container" style="position: relative;">
            <div id="carousel">
                <div> <img alt="<?php echo $sponsor_1['post_title'] ?>" src="<?php echo $sponsor_1['guid'] ?>"></div>
                <div> <img  alt="<?php echo $sponsor_2['post_title'] ?>" src="<?php echo $sponsor_2['guid'] ?>"></div>
                <div> <img  alt="<?php echo $sponsor_3['post_title'] ?>" src="<?php echo $sponsor_3['guid'] ?>"></div>
                <div> <img  alt="<?php echo $sponsor_4['post_title'] ?>" src="<?php echo $sponsor_4['guid'] ?>"></div>
                <div> <img  alt="<?php echo $sponsor_5['post_title'] ?>" src="<?php echo $sponsor_5['guid'] ?>"></div>
                <div> <img  alt="<?php echo $sponsor_6['post_title'] ?>" src="<?php echo $sponsor_6['guid'] ?>"></div>
                <div> <img  alt="<?php echo $sponsor_7['post_title'] ?>" src="<?php echo $sponsor_7['guid'] ?>"></div>
                <div> <img  alt="<?php echo $sponsor_8['post_title'] ?>" src="<?php echo $sponsor_8['guid'] ?>"></div>
                <div> <img  alt="<?php echo $sponsor_9['post_title'] ?>" src="<?php echo $sponsor_9['guid'] ?>"></div>
            </div>
        </div>
    </div>

    <section id="home-message" style="background: url('<?php echo $message_background['guid']?>') no-repeat center center/cover;">
        <div class="container">
            <h3 class="text-center"><?php echo $message_heading;?></h3>
            <p><?php echo $message;?></p>
        </div>
    </section>
    <section id="clinic-feature">
        <div class="d-none d-md-block" style="background: url('<?php echo $about_background_1['guid']; ?>') no-repeat center center/cover;"></div>
        <div style="background: #FCF8ED;" class="p-5 d-flex flex-column justify-content-center">
            <h3 class="text-center"><?php echo $about_heading;?></h3>
            <h4 class="text-center mb-4"><?php echo $about_sub_heading; ?></h4>
            <p class="text-center"><?php echo $about_paragraph; ?></p>
        </div>
        <div class="d-none d-md-block" style="background: url('<?php echo $about_background_2['guid']; ?>') no-repeat center center/cover;"></div>
    </section>
    <section id="about">
        <div class="row">
            <div class="col-12 col-md-6 p-5 align-items-center d-flex flex-column">
                <h3 class="text-center mb-5"><?php echo $program_director; ?> </h3>
                
                <p class="mb-5"><?php echo $program_director_description; ?></p>
                <div class="section-border mb-4"></div>
                <a href="<?php echo $linkedin;?>"><i class="fab fa-linkedin fa-2x"></i></a>
            </div>
            <div id="gif" class="col-12 col-md-6 p-5" style=" background: url('<?php echo $clinic_gif['guid']; ?>') no-repeat center center/cover; min-height:19.5rem">
            </div>
        </div>
        <?php endwhile; ?>    
    </section>
    <?php
    //here we are using a built in function by pods to find posts with name service 
    $contact_pod= pods('contact_info');
    // this function will take the pod instance find all the pods, and then sort them in ascending order by name (A-Z)
    $contact_pod->find('name ASC');
    $loopIndex=0;
    $loop_index
    ?>
    <?php while($contact_pod->fetch()) : ?>
    <?php 
        $phone_number = $contact_pod->field('phone_number');
        $email = $contact_pod->field('email');
        $facebook= $contact_pod->field('facebook');
        $instagram= $contact_pod->field('instagram');
        // permalink in wordpress is a link to the individual post
        $permalink = $contact_pod->field('permalink');
        $loopIndex +=1;
    ?>
    <section class="p-2" id="contact">
        <div class="container">
            <h1 class="text-center text-uppercase pt-5">Get In Touch</h1>
            <p class="text-center font-italic ">We'd love to hear from you</p>
            <div class="row">
                <div id="email" class="col-12 col-md-4 border d-flex align-items-center justify-content-center flex-column p-4">
                <p> <i class="far fa-paper-plane fa-3x"></i></p>
                    <a class="font-italic" href="mailto:<?php echo $email;?>"><?php echo $email;?></a>
                </div>
                <div id="phone" class="col-12 col-md-4" style="background: url('<?php echo $contact_background_1['guid'] ?>') no-repeat center center/cover;">
                    <div class="d-flex align-items-center justify-content-center flex-column" id="phone-content">
                        <p><i class="fas fa-mobile-alt fa-3x"></i></p>
                        <a class="font-italic" href="tel:<?php echo $phone_number;?>"><?php echo $phone_number;?></a>
                    </div>
                </div>
                <div id="facebook" class="col-12 col-md-4" style="background: url('<?php echo $contact_background_2['guid']; ?>') no-repeat center center/cover;">
                    <div class="d-flex align-items-center justify-content-center flex-column" id="facebook-content">
                        <p><i class="fab fa-facebook-f fa-3x"></i></p>
                        <a class="font-italic" href="<?php echo $facebook;?>">Find us on Facebook</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>    
    </section>


    <?php get_footer(); ?>
</html>