<footer class="footer-area bg-f6ffeb pt-120 border-top">
    <div class="container">
        <div class="subscribe-box row" data-cues="slideInUp" data-group="subscribeContent">
            <div class="col-lg-6 col-md-12">
                <div class="subscribe-content">
                    <h3 class="fw-semibold">
                        Subscribe to Newsletter
                    </h3>
                    <p>
                        Stay updated with our latest news and offers
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="subscribe-form">
                    <form>
                        <input type="text" class="form-control" placeholder="Enter email address">
                        <button type="button">
                            Subscribe
                        </button>
                    </form>
                    <p>
                        By subscribing, you agree to our Privacy Policy
                    </p>
                </div>
            </div>
        </div>
        <div class="row" data-cues="fadeIn" data-group="footerContent">
            <div class="col-md-3 col-sm-6">
                <div class="single-footer-widget mb-25">
                    <a href="<?php echo site_url('') ?>" class="logo mb-0 d-inline-block">
                        <img src="<?php echo get_theme_file_uri('assets/images/logo.svg') ?>" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-footer-widget mb-25">
                    <h3 class="fw-medium">
                        About Us
                    </h3>
                    <ul class="custom-links p-0 mb-0 list-unstyled">
                        <li>
                            <a href="<?php echo site_url('contact'); ?>">
                                Contact
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('contact'); ?>">
                                Support
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('blog'); ?>">
                                Resources
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('privacy-policy') ?>">
                                Help Center
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('blog'); ?>">
                                Blog
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-footer-widget mb-25">
                    <h3 class="fw-medium">
                        Courses
                    </h3>
                    <ul class="custom-links p-0 mb-0 list-unstyled">
                        <li>
                            <a href="<?php echo get_post_type_archive_link('course') ?>">
                                Language Learning
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Testimonials
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Events
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Partners
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Careers
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-footer-widget mb-25">
                    <h3 class="fw-medium">
                        Terms
                    </h3>
                    <ul class="custom-links p-0 mb-0 list-unstyled">
                        <li>
                            <a href="<?php echo site_url('privacy-policy'); ?>">
                                Privacy
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('privacy-policy'); ?>">
                                Cookies
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('terms-conditions'); ?>">
                                Sitemap
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('terms-conditions'); ?>">
                                Accessibility
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('terms-conditions'); ?>">
                                Terms of Service
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright-area border-top">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-6">
                    <p class="mb-0">
                        © 2024 Lanklub. All rights reserved.
                    </p>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <ul class="custom-links mb-0 list-unstyled">
                        <li class="d-inline-block">
                            <a href="<?php echo site_url('privacy-policy'); ?>">
                                Privacy Policy
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="<?php echo site_url('terms-conditions'); ?>">
                                Terms of Service
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="<?php echo site_url('privacy-policy'); ?>">
                                Cookies Settings
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="socials">
                        <a href="#" class="d-inline-block position-relative rounded-circle text-center">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="d-inline-block position-relative rounded-circle text-center">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="#" class="d-inline-block position-relative rounded-circle text-center">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="d-inline-block position-relative rounded-circle text-center">
                            <i class="fa-brands fa-google"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>