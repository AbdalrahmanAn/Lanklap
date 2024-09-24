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

<!-- Start Course Details Area -->
<div class="course-details-area bg-f3f3f3 ptb-120">
    <div class="container">
        <div class="row" data-cues="slideInUp" data-group="courseDetailsContent">
            <div class="col-lg-4 col-md-12">
                <div class="course-details-sidebar">
                    <div class="course-list">
                        <h3 class="fw-semibold">
                            <?php echo get_field('course_list_title'); ?>
                        </h3>
                        <ul class="p-0 m-0 list-unstyled">
                            <?php $courseQuery = new wp_query(array(
                            'post_type' => 'course',
                            'posts_per_page' => 5,
                            'orderby' => 'date',
                            'order' => 'ASC'
                        ));
                        while($courseQuery->have_posts()) :
                            $courseQuery->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>" class="fw-medium d-block">
                                    <?php the_title() ?>
                                </a>
                            </li>
                            <?php endwhile; wp_reset_postdata();
                        ?>
                        </ul>
                    </div>
                    <div class="enroll-form">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control shadow-none bg-transparent"
                                    placeholder="Enter Your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control shadow-none bg-transparent"
                                    placeholder="Enter Your Email">
                            </div>
                            <div class="form-group">
                                <select class="form-select shadow-none bg-transparent">
                                    <option selected>Select Course</option>
                                    <option value="1">English Speaking</option>
                                    <option value="2">Hindi Speaking</option>
                                    <option value="3">Urdu Speaking</option>
                                    <option value="4">German Speaking</option>
                                    <option value="5">Arabic Speaking</option>
                                </select>
                            </div>
                            <button type="submit" class="default-btn d-block w-100">
                                Enroll Now
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="course-details-desc">
                    <div class="image">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="course-details-image">
                    </div>
                    <h2 class="fw-semibold">
                        <?php the_title(); ?>
                    </h2>
                    <p>
                        <?php the_content(); ?>
                    </p>
                    <?php if(get_field('course_duration')['main_title']) { ?>
                    <h3 class="fw-semibold">
                        <?php echo get_field('course_duration')['main_title']; ?>
                    </h3>
                    <ul>
                        <?php if(get_field('course_duration')['first_date']) { ?>
                        <li>
                            <?php echo get_field('course_duration')['first_date']; ?>
                        </li>
                        <?php } ?>
                        <?php if(get_field('course_duration')['second_date']) { ?>
                        <li>
                            <?php echo get_field('course_duration')['second_date']; ?>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                    <?php if(get_field('course_objectives')['main_title']) { ?>
                    <h3 class="fw-semibold">
                        <?php echo get_field('course_objectives')['main_title']; ?>
                    </h3>
                    <ol>
                        <?php if(get_field('course_objectives')['first_objective']) { ?>
                        <li>
                            <?php echo get_field('course_objectives')['first_objective']; ?>
                        </li>
                        <?php } ?>
                        <?php if(get_field('course_objectives')['second_objective']) { ?>
                        <li>
                            <?php echo get_field('course_objectives')['second_objective']; ?>
                        </li>
                        <?php } ?>
                        <?php if(get_field('course_objectives')['third_objective']) { ?>
                        <li>
                            <?php echo get_field('course_objectives')['third_objective']; ?>
                        </li>
                        <?php } ?>
                        <?php if(get_field('course_objectives')['fourth_objective']) { ?>
                        <li>
                            <?php echo get_field('course_objectives')['fourth_objective']; ?>
                        </li>
                        <?php } ?>
                        <?php if(get_field('course_objectives')['fifth_objective']) { ?>
                        <li>
                            <?php echo get_field('course_objectives')['fifth_objective']; ?>
                        </li>
                        <?php } ?>
                    </ol>
                    <?php } ?>
                    <div class="instructor d-flex align-items-center">
                        <?php $relateTeamOnCourse = get_field('related_team');
                        if($relateTeamOnCourse){
                            foreach($relateTeamOnCourse as $relTeam){ ?>
                        <img src="<?php echo get_the_post_thumbnail_url($relTeam); ?>" class="rounded-circle"
                            alt="user-image">
                        <div>
                            <h4 class="fw-medium">
                                <?php echo get_the_title($relTeam); ?>
                            </h4>
                            <span class="d-block">
                                <?php echo get_the_excerpt($relTeam); ?>, <?php the_title() ?>
                            </span>
                        </div>
                        <?php }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Course Details Area -->

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

<?php 
}
get_footer(); ?>