<?php get_header(); 
while(have_posts()){
    the_post(); ?>

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

<!-- Start Blog Details Area -->
<div class="blog-details-area bg-f3f3f3 ptb-120">
    <div class="container" data-cues="slideInUp" data-group="blogDetailsContent">
        <div class="blog-details-header">
            <h2 class="fw-semibold">
                <?php the_title(); ?>
            </h2>
            <div class="d-md-flex align-items-center justify-content-between">
                <div class="user d-flex align-items-center">
                    <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" class="rounded-circle"
                        alt="User Image">
                    <div>
                        <h3 class="fw-semibold">
                            <?php the_author(); ?>
                        </h3>
                        <span class="d-block">
                            <?php the_time('d M Y') ?>
                        </span>
                    </div>
                </div>
                <div class="socials d-flex align-items-center">
                    <span class="d-block">
                        <?php echo get_field('title_of_first_social_section') ? get_field('title_of_first_social_section') : 'Share Post On:' ; ?>
                    </span>
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
        <div class="blog-details-image text-center">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="blog-details-image">
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <p>
                        <?php the_content(); ?>
                    </p>
                    <div class="info d-md-flex align-items-end justify-content-between">
                        <div class="socials">
                            <span class="d-block">
                                <?php echo get_field('title_of_second_social_section') ? get_field('title_of_second_social_section') : 'Share This Post' ; ?>
                            </span>
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
                        <div class="tags">
                            <?php 
                            $post_tags = get_the_tags();
                            if ($post_tags) {
                                foreach($post_tags as $tag) { ?>
                            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="d-inline-block">
                                <?php echo $tag->name; ?>
                            </a>
                            <?php } 
                            } ?>
                        </div>

                    </div>
                </div>
                <div class="blog-details-author border-top d-flex align-items-center">
                    <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" class="rounded-circle"
                        alt="user-image">
                    <div>
                        <h3 class="fw-semibold">
                            <?php the_author(); ?>
                        </h3>
                        <span class="d-block">
                            <?php echo get_the_author_meta('description'); ?>

                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="blog-widgets-area">
                    <div class="widget search-box">
                        <form>
                            <input type="text" class="form-control shadow-none" placeholder="Search here...">
                            <button type="button" class="d-inline-block p-0 border-0 bg-transparent">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                    <div class="widget post-category">
                        <h3 class="fw-semibold widget-title">
                            <?php echo get_field('title_of_category_section') ? get_field('title_of_category_section') : 'Post Category:' ; ?>
                        </h3>
                        <ul class="p-0 mb-0 list-unstyled">
                            <?php $postCategory = get_categories(array(
                                'number' => 6,
                            )); 
                            if($postCategory){
                                foreach($postCategory as $category){ ?>
                            <li>
                                <a href="<?php echo get_category_link($category->term_id) ?>"
                                    class="d-block w-100 position-relative">
                                    <?php echo $category->name ?>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                            <?php }
                            }
                            ?>

                        </ul>
                    </div>
                    <div class="widget recent-post">
                        <h3 class="fw-semibold widget-title">
                            <?php echo get_field('title_of_recent_posts_section') ? get_field('title_of_recent_posts_section') : 'Recent Post:' ; ?>
                        </h3>
                        <ul class="p-0 mb-0 list-unstyled">
                            <?php $blog_Posts = new wp_query(array(
                                'post_type' => 'post',
                                'posts_per_page' => 3
                            ));
                            while($blog_Posts->have_posts()){
                                $blog_Posts->the_post(); ?>
                            <li class="d-flex align-items-center">
                                <a href="<?php the_permalink(); ?>" class="image d-block">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="blog-image">
                                </a>
                                <div>
                                    <h4 class="fw-semibold">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title() ?>
                                        </a>
                                    </h4>
                                    <span class="d-block">
                                        <?php the_time('d M, Y') ?>
                                    </span>
                                </div>
                            </li>
                            <?php } wp_reset_postdata();
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Details Area -->

<!-- Start Blog Area -->
<div class="blog-area bg-f3f3f3 border-top pt-120 pb-95">
    <div class="container">
        <div class="section-title mb-40 text-center">
            <h2 class="fw-semibold mx-auto mb-0 text-uppercase">
                <?php echo get_field('title_of_blog_section') ? get_field('title_of_blog_section') : 'More Blogs' ; ?>
            </h2>
        </div>
        <div class="row" data-cues="slideInUp" data-group="blogContent">
            <?php $blog_Posts_Two = new wp_query(array(
                                'post_type' => 'post',
                                'posts_per_page' => 3
                            ));
                            while($blog_Posts_Two->have_posts()){
                                $blog_Posts_Two->the_post(); ?>
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
            <?php } wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<!-- End Blog Area -->

<?php }  get_footer(); ?>