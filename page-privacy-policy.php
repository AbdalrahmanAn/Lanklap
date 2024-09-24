<?php 
/* Template Name: Praivacy Policy Page */

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

<!-- Start Privacy Policy Area -->
<div class="privacy-policy-area ptb-120 border-bottom">
    <div class="container">
        <div class="privacy-policy-content" data-cue="slideInUp">
            <p><?php the_content(); ?></p>
        </div>
    </div>
</div>
<!-- End Privacy Policy Area -->

<?php get_footer(); ?>