<?php 
/* Template Name: Blog Page */

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

<!-- Start Blog Area -->
<div class="blog-area bg-f3f3f3 pt-120 pb-95">
    <div class="container">
        <div class="row" data-cues="slideInUp" data-group="blogContent">
            <?php 
            $postQuery = new wp_query(array(
                'post_type' => 'post'
            ));

            while($postQuery->have_posts()) {
                $postQuery->the_post();
                ?>
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
                                    <a href="<?php the_permalink(); ?>">
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
            <?php };  wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<!-- End Blog Area -->

<!-- Start Feedback Area -->
<div class="feedback-area ptb-120 position-relative z-1">
    <div class="container" data-cues="slideInUp" data-group="feedbackContent">
        <div class="section-title text-center">
            <h2 class="fw-semibold mx-auto mb-0 text-uppercase">
                <?php echo get_field('feedback_section_of_blog_page')['main_title']; ?>
            </h2>
        </div>
        <div class="feedback-slides mx-auto owl-carousel owl-theme">
            <?php $feedbackPostsquery = new wp_query(array(
                'post_type' => 'feedback',
                'posts_per_page' => 3
            ));
            while($feedbackPostsquery->have_posts()) {
                $feedbackPostsquery->the_post(); ?>
            <div class="single-feedback-item text-center">
                <p class="fw-medium">
                    <?php the_content(); ?>
                </p>
                <div class="info">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="user-image">
                    <h3 class="fw-semibold">
                        <?php the_title(); ?>
                    </h3>
                    <span class="d-block">
                        <?php the_excerpt(); ?>
                    </span>
                </div>
            </div>
            <?php 
            }; wp_reset_postdata();
            ?>

        </div>
    </div>
    <div class="scroll-down-text left text-uppercase d-flex align-items-center">
        <div>

            <img src="<?php echo get_theme_file_uri(get_field('feedback_section_of_blog_page')['scroll_icon']); ?>"
                alt="bx-mouse">
            <?php echo get_field('feedback_section_of_blog_page')['scroll_down_title']; ?>
        </div>
    </div>
</div>
<!-- End Feedback Area -->

<?php get_footer(); ?>