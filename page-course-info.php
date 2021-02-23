<?php /* Template Name: Course Info Template */ ?>
<html lang="en">
<?php get_header(); ?>
<?php
    //here we are using a built in function by pods to find posts with name service 
    $mypod= pods('flagship_course');
    // this function will take the pod instance find all the pods, and then sort them in ascending order by name (A-Z)
    $mypod->find('name ASC');
    $loopIndex=0;
    $loop_index
    ?>
    <?php while($mypod->fetch()) : ?>
    <?php 
        $name = $mypod->field('name');
        $course_background_image = $mypod->field('course_background_image');
        $intro_heading = $mypod->field('intro_heading');
        $requirement_1 = $mypod->field('requirement_1');
        $requirement_2 = $mypod->field('requirement_2');
        $requirement_3 = $mypod->field('requirement_3');
        $requirement_4 = $mypod->field('requirement_4');
        $requirement_5 = $mypod->field('requirement_5');
        $intro_image = $mypod->field('intro_image');
        $intro_description = $mypod->field('intro_description');
        $course_description = $mypod->field('course_description');
        $course_description_image = $mypod->field('course_description_image');
        $course_detail_1 = $mypod->field('course_detail_1');
        $course_detail_2 = $mypod->field('course_detail_2');
        $course_detail_3 = $mypod->field('course_detail_3');
        $course_detail_4 = $mypod->field('course_detail_4');
        $included_course_materials_1= $mypod->field('included_course_materials_1');
        $included_course_materials_2= $mypod->field('included_course_materials_2');
        $included_course_materials_3= $mypod->field('included_course_materials_3');
        $included_course_materials_4= $mypod->field('included_course_materials_4');
        $course_price= $mypod->field('course_price');

        // permalink in wordpress is a link to the individual post
        $permalink = $mypod->field('permalink');
        $loopIndex +=1;

    ?>
        <header class=" mt-5 d-flex align-items-end justify-content-center" id="course-info-header" style="background: url(<?php echo $course_background_image; ?>) no-repeat center center/cover;">
            <div id="featured-course-heading" class="p-2">
                <h1 class="text-center"><?php echo $name;?></h1>
            </div>
        
        </header>
        <section id="featured-course-info">
            <div class="container p-5">
                <div class="row">
                    <div class="col-12 col-md-6 mb-4  d-flex align-items-center h-100">
                        <img src="<?php echo $intro_image;?>" alt="featured course image" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <h4><?php echo $intro_heading;?> </h4>
                        <ul>
                            <li><?php echo $requirement_1;?></li>
                            <li><?php echo $requirement_2;?></li>
                            <li><?php echo $requirement_3;?></li>
                            <li><?php echo $requirement_4;?></li>
                            <li><?php echo $requirement_5;?></li>
                        </ul>
                        <p>
                        <?php echo $intro_description;?>
                        </p>
                    </div>
                </div>
                <h5>Course Description</h5>
                <p><?php echo $course_description;?></p>
                
                <div class="row">
                    <div class="col-12 col-md-6 d-flex flex-column justify-content-center order-2 order-md-1">
                        <h5>Course Details</h5>
                        <ul class="mb-4">
                            <li><?php echo $course_detail_1;?></li>
                            <li><?php echo $course_detail_2;?></li>
                            <li><?php echo $course_detail_3;?></li>
                            <li><?php echo $course_detail_4;?></li>
                        </ul>
                        <h4>This Course Includes The Following</h4>
                        <ul>
                            <li>
                                <?php echo $included_course_materials_1; ?>
                            </li>
                            <li>
                                <?php echo $included_course_materials_2; ?>
                            </li>
                            <li>
                                <?php echo $included_course_materials_3; ?>
                            </li>
                            <li>
                                <?php echo $included_course_materials_4; ?>
                            </li>
                        </ul>
                        <h3 class="text-center">
                            Tuition: <?php echo $course_price; ?>
                        </h3>

                        <a href="/community-calendar" class="btn btn-large btn-secondary"> View Course Calendar</a>
                    </div>
                    <div class="col-12 col-md-6 order-1 order-md-2 mb-4 mb-md-0 ">
                        <img id="featured-course-img" src="<?php echo $course_description_image;?>" alt="course description image" class="img-fluid">
                        

                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?> 
    
    <?php get_footer(); ?>
</html>