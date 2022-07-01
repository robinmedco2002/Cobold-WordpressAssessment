
<?php

/**
 * Template Name:   Home
 * 
 * Displays Only Home template
 * 
 * @package WordPress
 * @subpackage Cobold-WordpressAssessment
 * @since Cobold-WordpressAssessment 1.0
 
 */
get_header(); ?>

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

    <?php $posts = new WP_Query( array('post_type' => 'slider' , 'posts_per_page' => 1, 'order => ASC'));
    while($posts-> have_posts()) : $posts->the_post();?>

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">

                    <?php echo get_the_content();?>

                    
                        <a href="#features" class="main-button-slider">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
        <?php endwhile; ?>
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

            <?php $posts = new WP_Query(array('post_type' => 'feature' , 'posts_per_page' => 6, 'order' => 'ASC'));
             while($posts-> have_posts()) : $posts->the_post();?>

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt=""></i>
                                </div>
                                <h5 class="features-title"><?php echo get_the_title();?> </h5>
                                <p> <?php echo get_the_content();?>  </p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                        <?php endwhile; ?>


                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">

            <?php $posts = new WP_Query(array('post_type' => 'about' , 'order' => 'ASC'));
             while($posts-> have_posts()) : $posts->the_post();?>

                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title"><?php echo get_the_title();?> </h2>
                    </div>
                    <div class="left-text">
                        <p><?php echo get_the_content();?></p>
                    </div>
                </div>
                <?php endwhile; ?>
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">

            <?php $posts = new WP_Query(array('post_type' => 'aboutright' , 'order' => 'ASC'));
             while($posts-> have_posts()) : $posts->the_post();?>

                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title"><?php echo get_the_title();?></h2>
                    </div>
                    <div class="left-text">
                        <p> <?php echo get_the_content();?> </p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                <?php $posts = new WP_Query(array('post_type' => 'workprocess' , 'order' => 'ASC'));
             while($posts-> have_posts()) : $posts->the_post();?>

                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1><?php echo get_the_title();?></h1>
                            <p> <?php echo get_the_content();?> </p>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
                <div class="row">
                <?php $posts = new WP_Query(array('post_type' => 'work' , 'posts_per_page' => 6, 'order' => 'ASC'));
             while($posts-> have_posts()) : $posts->the_post();?>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt=""></i>
                            <strong> <?php echo get_the_title();?> </strong>
                            <span>  <?php echo get_the_content();?> </span>
                        </a>
                    </div>
                    <?php endwhile; ?>
                </div>
                <!-- ***** Mini Box End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Home Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
            <?php $posts = new WP_Query(array('post_type' => 'reviewtitle' , 'posts_per_page' => 3, 'order' => 'ASC'));
             while($posts-> have_posts()) : $posts->the_post();?>
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title"> <?php echo get_the_title();?> </h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p> <?php echo get_the_content();?> </p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
            <?php $posts = new WP_Query(array('post_type' => 'review' , 'posts_per_page' => 3, 'order' => 'ASC'));
             while($posts-> have_posts()) : $posts->the_post();?>
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt=""></i>
                            
                            <p><?php echo get_the_content();?></p>


                              <div class="user-image">
                                <img src="" alt="">
                            </div> 
                            <div class="team-info">
                                <h3 class="user-name"><?php echo get_the_title();?></h3>
                                <span> <?php echo get_the_excerpt();?> </span>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <?php endwhile; ?>
                <!-- ***** Testimonials Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Testimonials End ***** -->

    <!-- ***** Pricing Plans Start ***** -->
    <section class="section colored" id="pricing-plans">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">

            <?php $posts = new WP_Query(array('post_type' => 'pricetitle' , 'order' => 'ASC'));
             while($posts-> have_posts()) : $posts->the_post();?>

                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title"><?php echo get_the_title();?></h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p> <?php echo get_the_content();?> </p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">

            <?php $posts = new WP_Query(array('post_type' => 'price' , 'posts_per_page' => 3, 'order' => 'ASC'));
             while($posts-> have_posts()) : $posts->the_post();?>


                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title"> <?php echo get_the_title();?> </h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency"> <?php echo the_field('currency');?>  </span>
                                <span class="price"><?php echo the_field('price');?> </span>
                                <span class="period"><?php echo the_field('period');?> </span>
                            </div>
                            <ul class="list">
                                <li class="active"><?php echo the_field('active1');?> </li>
                                <li class="active"><?php echo the_field('active2');?> </li>
                                <li class="active"><?php echo the_field('active3');?> </li>
                                <li class="active"><?php echo the_field('active4');?> </li>
                                <li class="active"><?php echo the_field('active5');?> </li>
                                <li class="active"><?php echo the_field('active6');?> </li>
                                <li><?php echo the_field('unactive1');?> </li>
                                <li><?php echo the_field('unactive2');?> </li>
                                <li><?php echo the_field('unactive3');?> </li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="main-button"><?php echo the_field('main-button');?></a>
                        </div>
                    </div>
                </div>
                
                <?php endwhile; ?>
                <!-- ***** Pricing Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plans End ***** -->



    <!-- ***** Counter Parallax Start ***** -->
    <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                <?php $posts = new WP_Query(array('post_type' => 'counter' , 'posts_per_page' => 4, 'order' => 'ASC'));
             while($posts-> have_posts()) : $posts->the_post();?>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong> <?php echo get_the_title();?> </strong>
                            <span> <?php echo get_the_content();?> </span>
                        </div>
                    </div>
                  
                    <?php endwhile; ?>
               
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->   

    <!-- ***** Blog Start ***** -->
    <section class="section" id="blog">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">

            <?php $posts = new WP_Query(array('post_type' => 'blogtitle' , 'order' => 'ASC'));
             while($posts-> have_posts()) : $posts->the_post();?>

                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title"> <?php echo get_the_title();?> </h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p> <?php echo get_the_content();?> </p>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>

            <!-- ***** Section Title End ***** -->

            <div class="row">
            <?php $posts = new WP_Query(array('post_type' => 'blog' , 'posts_per_page' => 3, 'order' => 'ASC'));
             while($posts-> have_posts()) : $posts->the_post();?>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#"><?php echo get_the_title();?></a>
                            </h3>
                            <div class="text">
                            <?php echo get_the_content();?>
                            </div>
                            <a href="#" class="main-button"> <?php echo the_field('main-button');?> </a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
               
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->






    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Talk To Us</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Maecenas pellentesque ante faucibus lectus vulputate sollicitudin. Cras feugiat hendrerit semper.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Contact Text Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h5 class="margin-bottom-30">Keep in touch</h5>
                    <div class="contact-text">
                        <p>110-220 Quisque diam odio, maximus ac consectetur eu, 10260
                        <br>auctor non lorem</p>
                        <p>You are NOT allowed to re-distribute Softy Pinko template on any template collection websites. Thank you.</p>
                    </div>
                </div>
                <!-- ***** Contact Text End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                          <div class="row">

<!--                           
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail Address" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div> -->

                            <?php echo do_shortcode( '[contact-form-7 id="84" title="Contact form 1"]'); ?>
                          
                          </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->
    
   




    <?php


get_footer(); ?>