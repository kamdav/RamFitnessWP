<?php
/*
Template Name: Videos
*/
get_header(); ?>



<div class="row">
  <div class="large-12 columns text-center">
    <h4 class="b-title">Videos</h4>      
  </div>
</div>

<div class="row space-top">
    <div class="large-6 columns">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/IxPgPZ0fej4" frameborder="0" allowfullscreen></iframe>        
    </div>
    <div class="large-6 columns">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Zy3KNblBREI" frameborder="0" allowfullscreen></iframe>        
    </div>

    <div class="large-12 columns">
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


<div class="row">
    <div class="large-6 columns">
        <div class="panel">
            <h5>RAM Fitness UK Training Videos</h5>

            <a href="#" data-reveal-id="ram-video-1">RAM Fitness UK 2012</a>
            <br><a href="#" data-reveal-id="ram-video-2">RAM Fitness UK 2013</a>
            <br><a href="#" data-reveal-id="ram-video-3">RAM Fitness UK Body Transformation 2013</a>
            <br><a href="#" data-reveal-id="ram-video-4">RAM Fitness UK Boot Camp - 2013</a>
            <br><a href="#" data-reveal-id="ram-video-5">RAM Fitness UK Success & Memories</a>


            <h5 class="space-top">RAM Fitness UK Boxercise Videos</h5>

            <a href="#" data-reveal-id="ram-video-8">RAM Fitness UK on the pads</a>


            <h5 class="space-top">RAM Fitness UK Boxercise For All Ages</h5>

            <a href="#" data-reveal-id="ram-video-12">RAM Fitness UK Granny Boxercise</a>
            <br><a href="#" data-reveal-id="ram-video-13">RAM Fitness UK Granny Boxercise</a>
        </div>
    </div>

    <div class="large-6 columns">
        <div class="panel">
            <h5>RAM Fitness UK White Collar Boxing Fights</h5>

            <a href="#" data-reveal-id="ram-video-9">Raymond Anthony Mouzon White Collar Boxing Fight</a>
            <br><a href="#" data-reveal-id="ram-video-11">Hannah Marshall White Collar Boxing Fight</a>

            
            <h5 class="space-top">RAM Fitness UK Kids Parties</h5>

            <a href="#" data-reveal-id="ram-video-7">RAM Fitness UK Kids Party 2013</a>


            <h5 class="space-top">Other</h5>

            <a href="#" data-reveal-id="ram-video-10">The Journey Of Raymond Anthony Mouzon</a>
            <br><a href="#" data-reveal-id="ram-video-6">RAM Fitness UK Interview Tony Woodcock 2013</a>
            <br><a href="#" data-reveal-id="ram-video-14">RAM Legends</a>
        </div>
    </div>
</div>


<div id="ram-video-1" class="reveal-modal youtube" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <iframe width="1400" height="1000" src="https://www.youtube.com/embed/QUHOCyjPy6A" frameborder="0" allowfullscreen></iframe>
</div>
<div id="ram-video-2" class="reveal-modal youtube" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <iframe width="1400" height="1000" src="https://www.youtube.com/embed/Zy3KNblBREI" frameborder="0" allowfullscreen></iframe>
</div>
<div id="ram-video-3" class="reveal-modal youtube" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <iframe width="1400" height="1000" src="https://www.youtube.com/embed/IxPgPZ0fej4" frameborder="0" allowfullscreen></iframe>
</div>
<div id="ram-video-4" class="reveal-modal youtube" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <iframe width="1400" height="1000" src="https://www.youtube.com/embed/WmstAbg839o" frameborder="0" allowfullscreen></iframe>
</div>
<div id="ram-video-5" class="reveal-modal youtube" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <iframe width="1400" height="1000" src="https://www.youtube.com/embed/7-jKYh3R4og" frameborder="0" allowfullscreen></iframe>
</div>
<div id="ram-video-6" class="reveal-modal youtube" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <iframe width="1400" height="1000" src="https://www.youtube.com/embed/DcGkuYSOKHI" frameborder="0" allowfullscreen></iframe>
</div>
<div id="ram-video-7" class="reveal-modal youtube" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <iframe width="1400" height="1000" src="https://www.youtube.com/embed/Yr21mICm-LM" frameborder="0" allowfullscreen></iframe>
</div>

<div id="ram-video-8" class="reveal-modal youtube" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <iframe width="1400" height="1000" src="https://www.youtube.com/embed/zgqcrMczHbU" frameborder="0" allowfullscreen></iframe>
</div>
<div id="ram-video-9" class="reveal-modal youtube" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <iframe width="1400" height="1000" src="https://www.youtube.com/embed/eGRl9qZwhfU" frameborder="0" allowfullscreen></iframe>
</div>
<div id="ram-video-10" class="reveal-modal youtube" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <iframe width="1400" height="1000" src="https://www.youtube.com/embed/jtaRKapuv2A" frameborder="0" allowfullscreen></iframe>
</div>
<div id="ram-video-11" class="reveal-modal youtube" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <iframe width="1400" height="1000" src="https://www.youtube.com/embed/46vMGWlMd7k" frameborder="0" allowfullscreen></iframe>
</div>
<div id="ram-video-12" class="reveal-modal youtube" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <iframe width="1400" height="1000" src="https://www.youtube.com/embed/tJAyElypNZE" frameborder="0" allowfullscreen></iframe>
</div>
<div id="ram-video-13" class="reveal-modal youtube" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <iframe width="1400" height="1000" src="https://www.youtube.com/embed/VprrLzXOFNU" frameborder="0" allowfullscreen></iframe>
</div>
<div id="ram-video-14" class="reveal-modal youtube" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <iframe width="1400" height="1000" src="https://www.youtube.com/embed/_SOIH5c-uSg" frameborder="0" allowfullscreen></iframe>
</div>



<?php get_footer(); ?>
