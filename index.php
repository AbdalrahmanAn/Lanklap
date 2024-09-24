<?php get_header(); ?>
<!-- Start Banner Area -->
<div class="banner-area position-relative z-1">
    <div class="container">
        <div class="banner-text">
            <h1 class="text-uppercase" data-cues="slideInUp" data-group="bannerContent">
                <span class="d-block"><?php echo get_field('banner_section_of_home')['banner_title']; ?></span>
            </h1>
        </div>
        <div class="banner-image text-center" data-cue="slideInUp">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="banner-image">
        </div>
        <div class="banner-content">
            <div class="row align-items-center" data-cues="slideInUp" data-group="bannerText">
                <div class="col-lg-6 col-md-8">
                    <p><?php echo get_field('banner_section_of_home')['banner_content']; ?></p>
                    <div class="btn-box d-flex align-items-center">
                        <a href="<?php echo get_field('banner_section_of_home')['button_link']; ?>" class="default-btn">
                            <?php echo get_field('banner_section_of_home')['button']; ?>
                        </a>
                        <a href="<?php echo get_field('banner_section_of_home')['video']; ?>"
                            class="video-btn popup-youtube fw-medium d-flex align-items-center">
                            <span class="d-block text-center rounded-circle">
                                <img src="<?php echo get_theme_file_uri(get_field('banner_section_of_home')['video_icon']); ?>"
                                    alt="play">
                            </span>
                            <?php echo get_field('banner_section_of_home')['video_button_title']; ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="text-md-end">
                        <a href="<?php echo get_post_type_archive_link('course') ?>"
                            class="link-btn d-inline-block text-center rounded-circle fw-medium">
                            <span class="d-block">
                                <?php echo get_field('banner_section_of_home')['second_button']; ?>
                            </span>
                            <img src="<?php echo get_theme_file_uri(get_field('banner_section_of_home')['second_button_icon']); ?>"
                                alt="diagonal-arrow-right-up">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape1">
        <img src="<?php echo get_theme_file_uri(get_field('banner_section_of_home')['section_shape']['shape_1']); ?>"
            alt="shape1">
    </div>
    <div class="shape2">
        <img src="<?php echo get_theme_file_uri(get_field('banner_section_of_home')['section_shape']['shape_2']); ?>"
            alt="shape2">
    </div>
</div>
<!-- End Banner Area -->

<!-- Start Features Area -->
<div class="features-area pt-120 pb-95 position-relative z-1 border-top border-bottom bg-f6ffeb">
    <div class="container">
        <div class="row justify-content-center" data-cues="slideInUp" data-group="featuresContent">
            <?php

            $terms = get_terms( array(
                'taxonomy' => 'language',
                'hide_empty' => false,
                'orderby'    => 'term_id',
                'order'      => 'ASC',
                'number' => 4
            ) );

            if ( !empty( $terms ) && !is_wp_error( $terms ) ) :
                foreach ( $terms as $term ) : ?>
            <div class="col-lg-3 col-sm-6">
                <div class="single-feature-box text-center mb-25 position-relative z-1">
                    <h3 class="fw-semibold"><?php echo esc_html( $term->name ); ?></h3>
                    <p class="mx-auto"><?php echo strip_tags( term_description( $term->term_id, 'language' ) ); ?></p>
                    <a href="<?php echo get_post_type_archive_link('course') ?>"
                        class="link-btn position-relative z-1 d-inline-block rounded-circle text-center">
                        <img src="<?php echo get_theme_file_uri(get_field('features_section')['feature_icon']); ?>"
                            alt="diagonal-arrow-right-up">
                    </a>
                </div>
            </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
    <div class="shape3">
        <img src="<?php echo get_theme_file_uri(get_field('features_section')['sections_feature_shape']['shape_3']); ?>"
            alt="shape3">
    </div>
</div>

<!-- End Features Area -->

<!-- Start About Us Area -->

<div class="about-us-area position-relative z-1 ptb-120">
    <div class="container">
        <div class="row align-items-center" data-cues="slideInUp" data-group="aboutUsContent">
            <div class="col-lg-6 col-md-12">
                <?php 
                $about_us_section = get_field('about_us_section');
                if ( $about_us_section && !empty( $about_us_section['image_of_section'] ) ) { ?>
                <div class="about-us-image text-center">
                    <img src="<?php echo get_field('about_us_section')['image_of_section']; ?>" alt="about-image">
                </div>
                <?php } ?>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-us-content">
                    <?php if ( $about_us_section && !empty( $about_us_section['video_link'] ) ) { ?>
                    <div class="video-box position-relative">
                        <img src="<?php echo get_field('about_us_section')['image_of_video']; ?>" alt="about-image">
                        <div class="content">
                            <div>
                                <span class="d-block fw-medium">
                                    <?php echo get_field('about_us_section')['title_of_image']; ?>
                                </span>
                                <p>
                                    <?php echo get_field('about_us_section')['description_of_image']; ?>
                                </p>
                            </div>
                            <a href="<?php echo get_field('about_us_section')['video_link']; ?>"
                                class="video-btn popup-youtube rounded-circle d-flex align-items-center justify-content-center">
                                <img src="<?php echo get_theme_file_uri(get_field('about_us_section')['video_icon']); ?>"
                                    alt="play">
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <h2 class="fw-semibold text-uppercase">
                        <?php echo get_field('about_us_section')['title_of_section']; ?>
                    </h2>
                    <p>
                        <?php echo get_field('about_us_section')['first_description_of_section']; ?>
                    </p>
                    <p>
                        <?php echo get_field('about_us_section')['second_description_of_section']; ?>
                    </p>
                    <a href="<?php echo get_post_type_archive_link('course'); ?>" class="default-btn">
                        <?php echo get_field('about_us_section')['button']; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-down-text text-uppercase d-flex align-items-center">
        <div>
            <img src="<?php echo get_theme_file_uri(get_field('about_us_section')['scroll_icon']); ?>" alt="bx-mouse">
            <?php echo get_field('about_us_section')['scroll_down']; ?>
        </div>
    </div>
</div>

<!-- End About Us Area -->

<!-- Start Courses Area -->
<div class="courses-area border-bottom border-top bg-f3f3f3 pt-120 pb-95">
    <div class="container">
        <div class="section-title position-relative">
            <h2 class="mb-0 fw-semibold text-uppercase">
                <?php echo get_field('courses_section')['section_title']; ?>
            </h2>
            <a href="<?php echo get_post_type_archive_link('course') ?>" class="default-btn">
                <?php echo get_field('courses_section')['button_courses']; ?>
            </a>
        </div>
        <div class="row justify-content-center" data-cues="slideInUp" data-group="CoursesContent">
            <?php $coursesPosts = new wp_query(array(
                'post_type' => 'course',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'ASC',
            ));
            while($coursesPosts ->have_posts()){
                $coursesPosts ->the_post(); ?>

            <div class="col-xl-4 col-md-6">
                <div class="single-course-box mb-25 position-relative">
                    <h3 class="fw-semibold">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                    <div class="instructor d-flex align-items-center">
                        <?php $relatedTeam = get_field('related_team'); 
                        if($relatedTeam) {
                            foreach($relatedTeam as $team){ ?>
                        <img src="<?php echo get_the_post_thumbnail_url($team); ?>" class="rounded-circle"
                            alt="user-image">
                        <div>
                            <h4 class="fw-medium">
                                <?php echo get_the_title($team); ?>
                            </h4>
                            <span class="d-block">
                                <?php echo get_the_excerpt($team); ?>
                            </span>
                        </div>
                        <?php } } ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="default-btn">
                        <?php echo get_field('button_enroll') ?>
                    </a>
                </div>
            </div>
            <?php } wp_reset_postdata();
            ?>

        </div>
    </div>
</div>
<!-- End Courses Area -->

<!-- Start Why Us Area -->
<div class="why-us-area">
    <div class="container-fluid px-0">
        <div class="row mx-0">
            <div class="col-lg-6 col-md-12 px-0">
                <div class="why-us-image">
                    <img src="<?php echo get_field('why_us_section')['section_image']; ?>" alt="why-us-image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 px-0">
                <div class="why-us-content">
                    <div class="content">
                        <h2 class="fw-semibold text-uppercase" data-cue="slideInUp">
                            <?php echo get_field('why_us_section')['section_title']; ?>
                        </h2>
                        <?php if(count(get_field('why_us_section')['features_list']) > 0) { ?>
                        <ul class="features-list ps-0 mb-0 list-unstyled" data-cues="slideInUp"
                            data-group="whyUsContent">
                            <?php foreach(get_field('why_us_section')['features_list'] as $featureWhyUs) { 
                                $iconWhyus = $featureWhyUs['icon'];
                                $titleWhyus = $featureWhyUs['title'];
                                $descriptionWhyus = $featureWhyUs['description'];
                                ?>
                            <li class="d-flex align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <img src="<?php echo get_theme_file_uri($iconWhyus) ?>" alt="expert">
                                </div>
                                <div>
                                    <h3 class="fw-semibold">
                                        <?php echo $titleWhyus; ?>
                                    </h3>
                                    <p>
                                        <?php echo $descriptionWhyus; ?>
                                    </p>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Why Us Area -->

<!-- Start Upcoming Courses Area -->
<div class="upcoming-courses-area border-top border-bottom bg-f3f3f3 ptb-120">
    <div class="container" data-cues="slideInUp" data-group="upcomingCoursesContent">
        <div class="section-title text-center">
            <h2 class="fw-semibold mx-auto mb-0 text-uppercase">
                <?php echo get_field('upcoming_courses_main_title'); ?>
            </h2>
        </div>
        <div class="upcoming-courses-slides owl-carousel owl-theme mx-auto">
            <?php 
            $today = date('Ymd');
            $upcomingCourses = new wp_query(array(
                'post_type' => 'course', 
                'posts_per_page' => 3,
                'meta_key' => 'upcoming_course',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'upcoming_course',
                        'compare' => '>=',
                        'value' => $today,
                        'type' => 'numeric'
                    )
                )
                    )); 
                    while($upcomingCourses->have_posts()){
                        $upcomingCourses->the_post(); ?>
            <div class="single-upcoming-course-box position-relative">
                <div class="image position-relative">
                    <img src="<?php echo get_theme_file_uri('assets/images/shapes/bg-shape1.png') ?>" class="bg-image"
                        alt="bg-image">
                    <img src="<?php echo get_theme_file_uri('assets/images/shapes/bg-shape2.png') ?>" class="bg-image"
                        alt="bg-image">
                </div>
                <div class="content">
                    <h3 class="fw-semibold">
                        <?php the_title() ?>
                    </h3>
                    <ul class="p-0 list-unstyled">
                        <li class="fw-medium">
                            <?php echo get_field('ubcoming_courses_only')['lang_level']; ?> <span
                                class="fw-normal"><?php echo get_field('ubcoming_courses_only')['level']; ?></span>
                        </li>
                        <li class="fw-medium">
                            <?php $courseDate = new DateTime(get_field('upcoming_course')); ?>
                            <?php echo get_field('ubcoming_courses_only')['start_date']; ?><span
                                class="fw-normal"><?php echo $courseDate->format('d M, Y') ?></span>
                        </li>
                    </ul>
                    <div class="instructor d-flex align-items-center">
                        <?php $relatedTeam = get_field('related_team'); 
                        if($relatedTeam) {
                            foreach($relatedTeam as $team){ ?>
                        <img src="<?php echo get_the_post_thumbnail_url($team) ?>" class="rounded-circle"
                            alt="user-image">
                        <div>
                            <h4 class="fw-medium">
                                <?php echo get_the_title($team) ?>
                            </h4>
                            <span class="d-block">
                                <?php echo get_the_excerpt($team) ?>
                            </span>
                        </div>
                        <?php }
                        }
                        ?>
                    </div>
                </div>
                <a href="<?php the_permalink(); ?>" class="default-btn">
                    <?php echo get_field('button_enroll') ?>
                </a>
            </div>
            <?php }; 
            wp_reset_postdata();
            ?>

        </div>
    </div>
</div>
<!-- End Upcoming Courses Area -->

<!-- Start Feedback Area -->
<div class="feedback-area ptb-120 position-relative z-1">
    <div class="container" data-cues="slideInUp" data-group="feedbackContent">
        <div class="section-title text-center">
            <h2 class="fw-semibold mx-auto mb-0 text-uppercase">
                <?php echo get_field('feedback_section')['section_title']; ?>
            </h2>
        </div>
        <div class="feedback-slides mx-auto owl-carousel owl-theme">
            <?php $feedbackPosts = new wp_query(array(
                'post_type' => 'feedback',
            ));
            while($feedbackPosts->have_posts()){
                $feedbackPosts->the_post();?>
            <div class="single-feedback-item text-center">
                <p class="fw-medium">
                    <?php the_content(); ?>
                </p>
                <div class="info">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="rounded-circle" alt="user-image">
                    <h3 class="fw-semibold">
                        <?php the_title(); ?>
                    </h3>
                    <span class="d-block">
                        <?php the_excerpt(); ?>
                    </span>
                </div>
            </div>
            <?php }; wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="scroll-down-text left text-uppercase d-flex align-items-center">
        <div>
            <img src="<?php echo get_theme_file_uri(get_field('feedback_section')['section_scroll_icon']); ?>"
                alt="bx-mouse">
            <?php echo get_field('feedback_section')['section_scroll']; ?>
        </div>
    </div>
</div>
<!-- End Feedback Area -->

<!-- Start CTA Area -->
<div class="cta-area border-bottom border-top">
    <div class="container-fluid px-0">
        <div class="row mx-0">
            <div class="col-lg-6 col-md-12 px-0">
                <div class="cta-content">
                    <div class="content" data-cues="slideInUp" data-group="ctaContent">
                        <h2 class="text-uppercase fw-semibold">
                            <?php echo get_field('cta_section')['section_title']; ?>
                        </h2>
                        <p>
                            <?php echo get_field('cta_section')['section_description']; ?>
                        </p>
                        <div class="btn-box">
                            <a href="<?php echo get_post_type_archive_link('course') ?>" class="default-btn">
                                <?php echo get_field('cta_section')['first_button_title']; ?>
                            </a>
                            <a href="<?php echo site_url('contact') ?>" class="default-btn">
                                <?php echo get_field('cta_section')['second_button_title']; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 px-0">
                <div class="cta-image">
                    <img src="<?php echo get_field('cta_section')['section_image']; ?>" alt="cta-image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End CTA Area -->

<!-- Start Team Area -->
<div class="team-area pt-120 pb-95">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="fw-semibold mx-auto mb-0 text-uppercase">
                <?php echo get_field('main_title_of_team_section'); ?>
            </h2>
        </div>
        <div class="row justify-content-center" data-cues="slideInUp" data-group="teamContent">
            <?php $teamPosts = new wp_query(array(
                'post_type' => 'team',
                'posts_per_page' => 4
            ));
            while($teamPosts->have_posts()){
                $teamPosts->the_post(); ?>
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
                            <li class="d-inline-block">
                                <a href="<?php echo get_field('teams_social_media')['first_app'] ?>" target="_blank"
                                    class="d-block rounded-circle">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="<?php echo get_field('teams_social_media')['second_app'] ?>" target="_blank"
                                    class="d-block rounded-circle">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="<?php echo get_field('teams_social_media')['third_app'] ?>" target="_blank"
                                    class="d-block rounded-circle">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php }; wp_reset_postdata();
            ?>

        </div>
    </div>
</div>
<!-- End Team Area -->

<!-- Start Contact Area -->
<div class="contact-area bg-f3f3f3 border-top border-bottom ptb-120">
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

<!-- Start Blog Area -->
<div class="blog-area pt-120 pb-95">
    <div class="container">
        <div class="section-title position-relative">
            <h2 class="mb-0 fw-semibold text-uppercase">
                <?php echo get_field('blog_section')['main_title']; ?>
            </h2>
            <a href="<?php echo site_url('blog') ?>" class="default-btn">
                <?php echo get_field('blog_section')['title_of_link']; ?>
            </a>
        </div>
        <div class="row justify-content-center" data-cues="slideInUp" data-group="blogContent">
            <?php $blogPosts = new wp_query(array(
                'post_type' => 'post',
                'posts_per_page' => 3
            ));
            while($blogPosts->have_posts()){
                $blogPosts->the_post(); ?>
            <div class="col-xl-4 col-md-6">
                <div class="single-blog-post mb-25">
                    <a href="<?php the_permalink(); ?>" class="image d-block">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="blog-image">
                    </a>
                    <div class="content">
                        <div class="info position-relative">
                            <ul class="d-flex align-items-center p-0 mb-0 list-unstyled">
                                <li class="d-inline-block position-relative">
                                    <?php the_time('d'); echo "<br>" ; the_time('M') ?>
                                </li>
                                <li class="d-inline-block position-relative">
                                    <i class="fa-regular fa-circle-user"></i> By
                                    <a href="blog.html">
                                        <?php the_author(); ?>
                                    </a>
                                </li>
                                <li class="d-inline-block position-relative">
                                    <i class="fa-regular fa-comment-dots"></i>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo "Comments ";  echo get_comments_number()?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="fw-semibold">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <div class="text-end">
                            <a href="<?php the_permalink(); ?>" class="default-btn">
                                Continue Reading
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }; wp_reset_postdata();
            ?>

        </div>
    </div>
</div>
<!-- End Blog Area -->
<?php get_footer(); ?>