<?php 
/* Template Name: Login Page */

get_header(); ?>

<!-- Start Page Banner Area -->
<div class="page-banner-area text-center position-relative z-1">
    <div class="container">
        <h1 class="mb-0 text-white text-uppercase" data-cue="slideInUp">
            <?php the_title(); ?>
        </h1>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Login Area -->
<div class="login-area bg-fbfbfb ptb-120">
    <div class="container">
        <div class="row align-items-center" data-cues="slideInUp" data-group="loginContent">
            <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                <div class="login-image text-center">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="login-image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-1 order-lg-2">
                <div class="login-content">
                    <ul class="links p-0 list-unstyled">
                        <li class="d-inline-block">
                            <a href="<?php the_permalink(); ?>" class="d-block position-relative active">
                                <?php the_title(); ?>
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="<?php echo site_url('register') ?>" class="d-block position-relative">
                                <?php echo get_the_title(306) ?>
                            </a>
                        </li>
                    </ul>
                    <h3 class="fw-medium">
                        Log in to your account
                    </h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control shadow-none" placeholder="Email">
                        </div>
                        <div class="form-group position-relative">
                            <input type="password" id="passwordInput" class="form-control shadow-none"
                                placeholder="Password">
                            <button type="button" class="p-0 bg-transparent border-0" id="togglePassword">
                                <i class="fa-regular fa-eye-slash"></i>
                            </button>
                        </div>
                        <a href="#" class="forgot-password">
                            Forgot your Password?
                        </a>
                        <button type="submit" class="default-btn d-block w-100">
                            Log in
                        </button>
                        <p class="text-center">
                            Or log in with an account
                        </p>
                        <div class="socials text-center">
                            <button type="button" class="d-inline-block border-0 p-0 position-relative">
                                <i class="fa-brands fa-apple"></i>
                            </button>
                            <button type="button" class="d-inline-block border-0 p-0 position-relative">
                                <i class="fa-brands fa-github"></i>
                            </button>
                            <button type="button" class="d-inline-block border-0 p-0 position-relative">
                                <i class="fa-brands fa-google"></i>
                            </button>
                            <button type="button" class="d-inline-block border-0 p-0 position-relative">
                                <i class="fa-brands fa-facebook-f"></i>
                            </button>
                            <button type="button" class="d-inline-block border-0 p-0 position-relative">
                                <i class="fa-brands fa-windows"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login Area -->

<?php get_footer(); ?>