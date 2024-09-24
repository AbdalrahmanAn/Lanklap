<?php
get_header();
while(have_posts()){
    the_post(); ?>
<div class="page-banner-area text-center position-relative z-1">
    <div class="container">
        <h1 class="mb-0 text-white text-uppercase" data-cue="slideInUp">
            <?php the_title(); ?>
        </h1>
    </div>
</div>
<!-- Start Team Details Area -->
<div class="team-details-area ptb-120">
    <div class="container">
        <div class="team-details-box" data-cue="slideInUp">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="image text-center">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="team-image">
                        <div class="socials">
                            <a href="<?php echo get_field('teams_social_media')['first_app']; ?>"
                                class="d-inline-block position-relative rounded-circle text-center">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="<?php echo get_field('teams_social_media')['second_app']; ?>"
                                class="d-inline-block position-relative rounded-circle text-center">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="<?php echo get_field('teams_social_media')['third_app']; ?>"
                                class="d-inline-block position-relative rounded-circle text-center">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="content">
                        <h3 class="text-uppercase fw-semibold">
                            <?php the_title(); ?>
                        </h3>
                        <?php $relatedCourses = get_field('related_course');
                        if($relatedCourses){
                            foreach($relatedCourses as $relateCourse){ ?>
                        <span class="d-block designation">
                            <?php echo get_the_title($relateCourse); the_excerpt(); ?>
                        </span>
                        <?php }
                        }
                        ?>

                        <p>
                            <?php the_content(); ?>
                        </p>
                        <ul class="info mb-0 p-0 list-unstyled">
                            <li class="d-inline-block position-relative">
                                <img src="<?php echo get_theme_file_uri(get_field('team_contact')['phone_icon']); ?>"
                                    alt="phone-call">
                                <a href="tel:<?php echo get_field('team_contact')['phone_number']; ?>">
                                    <?php echo get_field('team_contact')['phone_number']; ?>
                                </a>
                            </li>
                            <li class="d-inline-block position-relative">
                                <img src="<?php echo get_theme_file_uri(get_field('team_contact')['mail_icon']); ?>"
                                    alt="email">
                                <a href="mailto:<?php echo get_field('team_contact')['mail']; ?>">
                                    <?php echo get_field('team_contact')['mail']; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Team Details Area -->

<!-- Start Team Area -->
<div class="team-area bg-f3f3f3 pt-120 pb-95 border-top border-bottom">
    <div class="container">
        <div class="row justify-content-center" data-cues="slideInUp" data-group="teamContent">
            <?php $teamQuery = new wp_query(array(
                'post_type' => 'team',
                'posts_per_page' => 8
            ));
            while($teamQuery->have_posts()) :
                $teamQuery->the_post(); ?>
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
            <?php
            endwhile; wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<!-- End Team Area -->
<?php if(get_field('btn_of_team_page')) {?>
<div class="pb-120 pt-40 text-center">
    <div class="container">
        <a href="contact.html" class="default-btn" data-cue="slideInUp">
            <?php echo get_field('btn_of_team_page') ?>
        </a>
    </div>
</div>
<?php } ;?>
<?php } ;
get_footer();
?>