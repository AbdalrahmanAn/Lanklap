<?php 
/* Template Name: Register Page */

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

<!-- Start Register Area -->
<div class="register-area bg-fbfbfb ptb-120">
    <div class="container">
        <div class="row align-items-center" data-cues="slideInUp" data-group="registerContent">
            <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                <div class="register-image text-center">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="register-image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-1 order-lg-2">
                <div class="register-content">
                    <ul class="links p-0 list-unstyled">
                        <li class="d-inline-block">
                            <a href="<?php echo site_url('login') ?>" class="d-block position-relative">
                                <?php echo get_the_title(304) ?>
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="<?php the_permalink(); ?>" class="d-block position-relative active">
                                <?php the_title(); ?>
                            </a>
                        </li>
                    </ul>
                    <h3 class="fw-medium">
                        Create account
                    </h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control shadow-none" placeholder="Name">
                        </div>
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
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Agree to <a href="#">Terms & Conditions and Privacy Policy</a>
                            </label>
                        </div>
                        <button type="submit" class="default-btn d-block w-100">
                            Register
                        </button>
                        <p class="text-center">
                            Or register with an account
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
<!-- End Register Area -->

<?php get_footer(); ?>