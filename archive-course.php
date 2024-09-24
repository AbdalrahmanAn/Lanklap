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

<!-- Start Courses Area -->
<div class="courses-area bg-f3f3f3 pt-120 pb-95">
    <div class="container">
        <div class="row justify-content-center" data-cues="slideInUp" data-group="coursesContent">

            <?php 
            while(have_posts()){
                the_post(); ?>
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
                        <?php $relatedTeamCourse = get_field('related_team'); 
                        if($relatedTeamCourse) {
                            foreach($relatedTeamCourse as $teamCourse){ ?>
                        <img src="<?php echo get_the_post_thumbnail_url($teamCourse) ?>" class="rounded-circle"
                            alt="user-image">
                        <div>
                            <h4 class="fw-medium">
                                <?php echo get_the_title($teamCourse) ?>
                            </h4>
                            <span class="d-block">
                                <?php echo get_the_excerpt($teamCourse) ?>
                            </span>
                        </div>
                        <?php } } ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="default-btn">
                        <?php echo get_field('button_enroll') ?>
                    </a>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</div>
<!-- End Courses Area -->

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


<?php get_footer(); ?>