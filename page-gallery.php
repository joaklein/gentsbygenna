<?php get_header(); ?>


<?php
if (have_posts()) : while (have_posts()) : the_post(); ?>

<!--         <section class="blog-post">
            <?php the_title(sprintf('<h2><a href="%s">', esc_url(get_permalink())), '</a></h2>');
            the_excerpt('<p>', '</p>'); ?>
            <h5>Posted by: <?php the_author(); ?> on <?php the_date(); ?></h5>
        </section>
 -->
        <section class="gallery">
            <?php
                $gallery  = carbon_get_post_meta( get_the_ID(), 'crb_media_gallery' );

                foreach( $gallery  as $i => $image ){
                
                  echo '<img src="'.wp_get_attachment_url( $image ).'" >';
                 
                }
            ?>
        </section>


    <?php endwhile; ?>


<?php else : ?>


    <section class="section section--not-found | js-smooth-section">
        <div class="not-found">
            <h1 class="not-foundheading o-title--large">Whoops!<br /> We can't find that.</h1>
            <p class="not-foundcontent">
                404 not found. Please try navigating again
            </p>

        </div>
    </section>


<?php endif;

get_footer();
