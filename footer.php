<footer>

        <div class="container ">
            <?php
            
            $contact_pod= pods('contact_info');
            $contact_pod->find('name ASC');
            $loopIndex=0;
            $loop_index
            ?>
            <?php while($contact_pod->fetch()) : ?>
            <?php 
                $phone_number = $contact_pod->field('phone_number');
                $email = $contact_pod->field('email');
                $street_address = $contact_pod->field('street_address');
                $city_state_zip = $contact_pod->field('city_state_zip');
                $business_name = $contact_pod->field('business_name');
                $facebook= $contact_pod->field('facebook');
                $instagram= $contact_pod->field('instagram');
                // permalink in wordpress is a link to the individual post
                $permalink = $contact_pod->field('permalink');
                $loopIndex +=1;
            ?>
            <div class="row d-flex justify-content-around py-3">
                <div class="col-6 col-md-4 text-center">
    
                    <div class="footer-item">
                        <a href="#">Home</a>
                    </div>
                    <div class="col-12 footer-item">
                        <a href="#">Course Info</a>
                    </div>
                    <div class="footer-item">
                        <a href="#">Course Calender</a>
                    </div>
                    <div class="footer-item">
                        <a href="#">My Courses</a>
                    </div>
                    <div class=" footer-item">
                        <a href="#">Practice Skills</a>
                    </div>
                    <div class="footer-item">
                        <a href="#">About</a>
                    </div>
                </div>
                <div class="col-6 col-md-4 text-center d-flex flex-column">
                    <div class=" footer-item">
                        <a href="tel:<?php echo $phone_number;?>"><i class="fas fa-phone-volume"></i> <?php echo $phone_number;?></a>
                    </div>
                    <div class="footer-item">
                        <a href="mailto:<?php echo $email;?>"> <i class="fas fa-paper-plane"></i> <?php echo $email;?></a>
                    </div>
                        <p class="footer-item"><i class="fas fa-map-marked-alt"></i> <?php echo $street_address;?></p>
                        <p class="footer-item"><?php echo $city_state_zip;?></p>
                    <div class="footer-item">
                        <a href="<?php echo $facebook;?>"><i class="fab fa-facebook fa-2x"></i></a>
                    </div>
                    <div class=" footer-item">
                        <a href="<?php echo $instagram;?>"><i class="fab fa-instagram fa-2x"></i></a>
                    </div>
                </div>
                <div class="d-none col-6 col-md-4 text-center d-md-flex flex-column align-items-center">
                    <p class="footer-item">Sign Up For Our Newsletter</p>
    
                    <form class="form-inline my-lg-0">
                        <input class="form-control mr-sm-2" type="email" placeholder="Enter Email" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-plus-circle"></i></button>
                    </form>
                    <p class="footer-item">We won't share your email with anyone else</p>
    
                </div>
            </div>
            <p class="footer-item text-center">© <span class="date"></span> <?php echo $business_name;?></p>
            <p class="footer-item text-center pb-3">Licensed By Commission on Post Secondary Education | Approved By The Nevada State Board of Nursing</p>

            <?php endwhile; ?>    
        </div>
    </footer>
     <!-- Wordpress admin footer -->
    <?php wp_footer( ); ?>
    <script type="module" src="<?php echo get_bloginfo('template_directory'); ?>/js/app.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>