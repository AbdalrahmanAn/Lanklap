<!DOCTYPE html>
<html>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body>
        <!-- Start Navbar Area -->
        <div class="navbar-area position-fixed top-0 start-0 end-0">
            <div class="lanklub-responsive-nav">
                <div class="container">
                    <div class="lanklub-responsive-menu">
                        <div class="logo">
                            <a href="<?php echo site_url('') ?>">
                                <img src="<?php echo get_theme_file_uri('assets/images/logo.svg') ?>" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lanklub-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="<?php echo site_url('') ?>">
                            <img src="<?php echo get_theme_file_uri('assets/images/logo.svg') ?>" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="dropdown-toggle nav-link active">
                                        Home
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="<?php echo site_url('') ?>" class="nav-link active">Home Demo -
                                                1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-2.html" class="nav-link">Home Demo - 2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3.html" class="nav-link">Home Demo - 3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('about-us') ?>" class="nav-link">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="dropdown-toggle nav-link">
                                        Courses
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="<?php echo get_post_type_archive_link('course') ?>"
                                                class="nav-link">
                                                Courses
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo get_permalink(101); ?>" class="nav-link">
                                                Course Details
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="dropdown-toggle nav-link">
                                        Pages
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="<?php echo get_post_type_archive_link('team') ?>" class="nav-link">
                                                Team
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo get_permalink(160) ?>" class="nav-link">
                                                Team Details
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="dropdown-toggle nav-link">
                                                Blog
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="<?php echo site_url('blog') ?>" class="nav-link">
                                                        Blog
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?php echo get_permalink(199); ?>" class="nav-link">
                                                        Blog Details
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo site_url('login') ?>" class="nav-link">
                                                Login
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo site_url('register') ?>" class="nav-link">
                                                Register
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo site_url('privacy') ?>" class="nav-link">
                                                Privacy Policy
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo site_url('terms-conditions') ?>" class="nav-link">
                                                Terms & Conditions
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="not-found.html" class="nav-link">
                                                404 Error Page
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('contact') ?>" class="nav-link">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                            <div class="others-option">
                                <a href="<?php echo get_post_type_archive_link('course') ?>" class="default-btn">
                                    Enroll Now
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->