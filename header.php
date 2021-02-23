<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Wordpress admin header/nav -->
     <?php wp_head( ) ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/app.css">
    <title><?php echo get_bloginfo('name'); ?></title>
</head>
<body>
    <div id="nav-wrapper">
        <div class="row d-none d-lg-flex align-items-center pr-5 py-2 mr-3">
            <div class="col-7 d-flex justify-content-start">
                <div class="d-flex justify-content-end mr-2" >
                    <img id="logo" src="/img/livesaverslogo.webp">
                </div>
                <div class="d-flex flex-column jusitfy-content-between">
                    <p class="bold mb-5 fs-sm">Licensed By Commission on Post Secondary Education</p>
                    <a class="highlight-text-brighter fs-md mt-5" href="tel:7026238616"><u class="mt-5">702-623-8616</u></a>
                </div>
            </div>
            <div class="col-5">
                <p class="mb-0 header-address">Live Savers Training Center 4660 S. Eastern Avenue</p>
                <p class="header-address ">Suite #100 Las Vegas NV, 89119</p>
                <p class="highlight-text">Healthcare Training & Education</p>
            </div>
    
        </div>
    
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light custom-navbar d-flex ">
            <?php $element= do_shortcode("[mepr-login-link]"); ?>
            <a class="navbar-brand navbar-brand-custom d-lg-none custom-navbar-brand" href="#"><img id="logo" src="/img/livesaverslogo.webp"></a>
            <a href="/" class="navbar-brand d-none"> Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse p-4 p-lg-0 justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active ">
                    <a class="nav-link" href="/"> Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active ">
                    <a class="nav-link" href="/course-info"> Course Info<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/community-calender">Community Calender</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php get_site_url(); ?>/account/?action=courses">My Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Practice Skills</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item user-icon"> <?php echo do_shortcode("[mepr-login-link]");?> 
                    </li>

                </ul>
    
            </div>
        </nav>
    
    </div>