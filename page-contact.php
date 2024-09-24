<?php 
/* Template Name: Contact Page */

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

<!-- Start Contact Info Area -->
<div class="contact-info-area bg-f3f3f3 ptb-120">
    <div class="container-fluid px-0">
        <div class="row mx-0">
            <div class="col-lg-8 col-md-12 px-0">
                <div class="contact-info-content">
                    <div class="content">
                        <?php $contactInfo = get_field('contact_info', 'option');
                        if(count($contactInfo) > 0){ ?>
                        <div class="row" data-cues="slideInUp" data-group="contactInfoContent">
                            <?php foreach($contactInfo as $info){ 
                            $title = $info['title'];
                            $areaIcon = $info['area_icon'];
                            $areaAdress = $info['area_adress'];
                            $emailIcon = $info['email_icon'];
                            $firstEmail = $info['first_email'];
                            $secondEmail = $info['second_email'];
                            $telIcon = $info['tel_icon'];
                            $firstNum = $info['first_num'];
                            $secondNum = $info['second_num'];
                            ?>
                            <div class="col-lg-6 col-sm-6">
                                <div class="box">
                                    <h3 class="fw-semibold">
                                        <?php echo $title ?>
                                    </h3>
                                    <ul class="p-0 m-0 list-unstyled">
                                        <li class="position-relative">
                                            <img src="<?php echo get_theme_file_uri($areaIcon); ?>" alt="office">
                                            <?php echo $areaAdress  ?>
                                        </li>
                                        <li class="position-relative">
                                            <img src="<?php echo get_theme_file_uri($emailIcon); ?>" alt="office">
                                            <a href="mailto:<?php echo $firstEmail ?>"><?php echo $firstEmail ?></a>
                                            <br>
                                            <a href="mailto:<?php echo $secondEmail ?>"><?php echo $secondEmail ?></a>
                                        </li>
                                        <li class="position-relative">
                                            <img src="<?php echo get_theme_file_uri($telIcon); ?>" alt="office">
                                            <a href="tel:<?php echo $firstNum ?>"><?php echo $firstNum ?></a>
                                            <br>
                                            <a href="tel:<?php echo $secondNum ?>"><?php echo $secondNum ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php }
                    }
                    ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 px-0">
                <div class="contact-info-image">
                    <img src="assets/images/contact.jpg" alt="contact-info-image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Info Area -->

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