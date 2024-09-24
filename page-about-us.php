<?php 
/* Template Name: About Us Page */

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

<div class="pb-120 border-bottom"></div>

<!-- Start About Us Area -->
<div class="about-us-area bg-f3f3f3 position-relative z-1 ptb-120">
    <div class="container">
        <div class="row align-items-center" data-cues="slideInUp" data-group="aboutUsContent">
            <div class="col-lg-6 col-md-12">
                <div class="about-us-image text-center">
                    <img src="<?php echo get_field('about_us_section_for_about_page')['main_image_of_section']; ?>"
                        alt="about-image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-us-content">
                    <div class="video-box position-relative">
                        <img src="<?php echo get_field('about_us_section_for_about_page')['image_of_vid']; ?>"
                            alt="about-image">
                        <div class="content">
                            <div>
                                <span class="d-block fw-medium">
                                    <?php echo get_field('about_us_section_for_about_page')['title_of_vid']; ?>
                                </span>
                                <p>
                                    <?php echo get_field('about_us_section_for_about_page')['subtitle_of_vid']; ?>
                                </p>
                            </div>
                            <a href="<?php echo get_field('about_us_section_for_about_page')['link_of_vid']; ?>"
                                class="video-btn popup-youtube rounded-circle d-flex align-items-center justify-content-center">
                                <img src="<?php echo get_theme_file_uri(get_field('about_us_section_for_about_page')['icon_of_vid']); ?>"
                                    alt="play">
                            </a>
                        </div>
                    </div>
                    <h2 class="fw-semibold text-uppercase">
                        <?php echo get_field('about_us_section_for_about_page')['main_title_of_section']; ?>
                    </h2>
                    <p>
                        <?php echo get_field('about_us_section_for_about_page')['description_of_section']; ?>
                    </p>
                    <a href="<?php echo get_post_type_archive_link('course') ?>" class="default-btn">
                        <?php echo get_field('about_us_section_for_about_page')['title_of_button']; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-down-text text-uppercase d-flex align-items-center">
        <div>
            <img src="<?php echo get_theme_file_uri(get_field('about_us_section_for_about_page')['icon_of_mouse_scroll']); ?>"
                alt="bx-mouse">
            <?php echo get_field('about_us_section_for_about_page')['title_of_mouse_scroll']; ?>
        </div>
    </div>
</div>
<!-- End About Us Area -->

<!-- Start Team Area -->
<div class="team-area border-top pt-120 pb-95">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="fw-semibold mx-auto mb-0 text-uppercase">
                <?php echo get_field('main_title_of_team_section') ?>
            </h2>
        </div>
        <div class="row justify-content-center" data-cues="slideInUp" data-group="teamContent">
            <?php $team_posts = new wp_query(array(
                'post_type' => 'team',
                'posts_per_page' => 4
            ));
            while($team_posts->have_posts()){
                $team_posts->the_post(); ?>
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-member text-center mb-25 position-relative">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="team-image">
                    <div class="content">
                        <h3 class="fw-semibold">
                            <a href="team-details.html">
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
            <?php } wp_reset_postdata();
            ?>

        </div>
    </div>
</div>
<!-- End Team Area -->

<!-- Start Contact Area -->
<div class="contact-area bg-f3f3f3 border-top ptb-120">
    <div class="container" data-cues="slideInUp" data-group="contactContent">
        <div class="section-title text-center">
            <h2 class="fw-semibold mx-auto mb-0 text-uppercase">
                Have any question?
            </h2>
            <p>
                Your email address will not be published. Required field are marked*
            </p>
        </div>
        <div class="contact-form text-center mx-auto">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="text" placeholder="Full name *" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="text" placeholder="Email address *" class="form-control">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="form-group mb-0">
                        <textarea class="form-control" placeholder="Write your message *"></textarea>
                    </div>
                </div>
            </div>
            <button class="default-btn" type="submit">
                Send Message
            </button>
        </div>
    </div>
</div>
<!-- End Contact Area -->


<?php get_footer(); ?>