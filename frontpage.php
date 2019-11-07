<?php
/*
Template Name: Frontpage
*/
get_header(); ?>


<!-- <div class="orbit-container">
    <ul class="example-orbit back-of-house" data-orbit 
                data-options="
                timer_speed: 5000;
                timer: true;
                pause_on_hover:false;
                slide_number: false;
                animation_speed:500;
                navigation_arrows:true;
                bullets:false;">
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/ram-slider-pic-1.jpg" alt="slide 1" />
        </li>
        <li class="active">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/ram-slider-pic-2.jpg" alt="slide 2" />
        </li>
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/ram-slider-pic-3.jpg" alt="slide 3" />
        </li>
    </ul>
</div> -->

<div class="row">
    <div class="large-12 columns text-center ram-title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/ram-title-bg.png" alt="Ram Fitness Title" />
    </div>
</div>

<div class="gray-bg">
    <div class="row">
        <div class="medium-7 columns">
            <div class="info-box inner-spacing text-center">

                <?php /* Start loop */ ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                        <footer>
                            <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
                            <p><?php the_tags(); ?></p>
                        </footer>
                    </article>
                <?php endwhile; // End the loop ?>
            </div>
        </div>

        <div class="medium-5 columns space-bot">
            <div class="img-spacing-2 text-center border-and-shadow">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/raymond-mouzon-3.jpg" alt="Raymond Mouzon Picture" />

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="large-12 columns home-video text-center">
        <div class="flex-video">
            <iframe class="shadow" width="420" height="315" src="//www.youtube.com/embed/jtaRKapuv2A?autoplay=1&cc_load_policy=1." frameborder="0" allowfullscreen></iframe>
            <!-- Add  ?autoplay=1&cc_load_policy=1.  after youtube link for auto play -->
        </div>
    </div>
</div>

<div class="row">
    <div class="large-4 columns">
        <div class="flex-video">
            <iframe width="420" height="315" src="//www.youtube.com/embed/zgqcrMczHbU" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <div class="large-4 columns">
        <div class="flex-video">
            <iframe width="420" height="315" src="//www.youtube.com/embed/tJAyElypNZE" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <div class="large-4 columns">
        <div class="flex-video">
            <iframe width="420" height="315" src="//www.youtube.com/embed/VprrLzXOFNU" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>



<?php get_footer(); ?>
