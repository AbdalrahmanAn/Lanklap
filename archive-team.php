<?php get_header(); ?>
<!-- Start Page Banner Area -->
<div class="page-banner-area text-center position-relative z-1">
    <div class="container">
        <h1 class="mb-0 text-white text-uppercase" data-cue="slideInUp">
            <?php the_archive_title(); ?>
        </h1>
    </div>
</div>
<!-- End Page Banner Area -->

<div class="pb-120 border-bottom"></div>

<!-- Start Team Area -->
<div class="team-area bg-f3f3f3 pt-120 pb-95 border-bottom">
    <div class="container">
        <div class="row justify-content-center" data-cues="slideInUp" data-group="teamContent">
            <?php while(have_posts()){
                the_post(); ?>
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-member text-center mb-25 position-relative">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="team-image">
                    <div class="content">
                        <h3 class="fw-semibold">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <span class="d-block">
                            <?php the_excerpt(); ?>
                        </span>
                        <ul class="socials p-0 mb-0 list-unstyled">
                            <?php if(get_field('teams_social_media')['first_app']) {?>
                            <li class="d-inline-block">
                                <a href="<?php echo get_field('teams_social_media')['first_app'] ?>" target="_blank"
                                    class="d-block rounded-circle">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if(get_field('teams_social_media')['second_app']) {?>
                            <li class="d-inline-block">
                                <a href="<?php echo get_field('teams_social_media')['second_app'] ?>" target="_blank"
                                    class="d-block rounded-circle">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if(get_field('teams_social_media')['third_app']) {?>
                            <li class="d-inline-block">
                                <a href="<?php echo get_field('teams_social_media')['third_app'] ?>" target="_blank"
                                    class="d-block rounded-circle">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</div>
<!-- End Team Area -->

<div class="pb-120 pt-40 text-center">
    <div class="container">
        <a href="contact.html" class="default-btn" data-cue="slideInUp">
            Join With Us
        </a>
    </div>
</div>

<?php get_footer(); ?>