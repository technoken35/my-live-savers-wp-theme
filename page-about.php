
<?php /* Template Name: About Template */ ?>
<?php get_header(); ?>
<html lang="en">
<?php
    //here we are using a built in function by pods to find posts with name service 
    $mypod= pods('about_page');
    // this function will take the pod instance find all the pods, and then sort them in ascending order by name (A-Z)
    $mypod->find('name ASC');
    $loopIndex=0;
    $loop_index
    ?>
    <?php while($mypod->fetch()) : ?>
    <?php 
        $name = $mypod->field('name');
        $about_video = $mypod->field('about_video');
        $about_featured_image = $mypod->field('about_featured_image');
        $about_heading_1 = $mypod->field('about_heading_1');
        $about_paragraph_1= $mypod->field('about_paragraph_1');
        $about_heading_2 = $mypod->field('about_heading_2');
        $about_paragraph_2 = $mypod->field('about_paragraph_2');
        $about_heading_3 = $mypod->field('about_heading_3');
        $about_paragraph_3 = $mypod->field('about_paragraph_3');
        $background_image = $mypod->field('background_image');
        // permalink in wordpress is a link to the individual post
        $permalink = $mypod->field('permalink');
        $loopIndex +=1;
    ?>
    <header class=" my-5" id="video-header">
        <div class="container mt-3">
            <div align="center" class="embed-responsive embed-responsive-16by9">
                <video controls class="embed-responsive-item">
                    <source src="<?php echo $about_video; ?>" type="video/mp4">
                </video>
            </div>
            
        </div>
    </header>
    <section id="about-info" >
        <div class="container p-4">
            <div class="row">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <img class="content-logo" src="<?php echo $about_featured_image;?>">
                </div>
                <div class="col-12 col-md-6">
                    <h4>
                        <?php echo $about_heading_1; ?>
                    </h4>
                    <p>
                        <?php echo $about_paragraph_1; ?>
                    </p>
                    <h4>
                        <?php echo $about_heading_2; ?>
                    </h4>
                    <p>
                        <?php echo $about_paragraph_2; ?>
                    </p>
                    <h4>
                        <?php echo $about_heading_3; ?>
                    </h4>
                    <p>
                        <?php echo $about_paragraph_3; ?>
                    </p>
                </div>
            </div>            
        </div>
    </section>
    <section id="about-sign-up"  style="background: url('<?php echo $background_image; ?>') no-repeat center center/cover";>
        <div id="about-content-overlay">
            <div class="container p-5 d-flex align-items-center justify-content-center align-middle h-100 w-100">
                <a class="btn btn-lg btn-secondary"  href="/course-calendar">View Course Calendar</a>
            </div>
        </div>
    </section>

    <?php endwhile; ?> 

    <?php get_footer(); ?>
</html>