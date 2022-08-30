<?php get_header(); ?>

<section class="info">
    <div class="chunk covid">
        <i class="fa-solid fa-virus-covid"></i>
        <div>
            <h2><?php the_field('covid_header'); ?></h2>
            <p><?php the_field('covid_text'); ?></p>
        </div>
    </div>

    <div class="chunk">
        <i class="fa-solid fa-moon"></i>
        <div>
            <h2><?php the_field('booking_header'); ?></h2>
            <p><?php the_field('booking_text_01'); ?></p>
        </div>
    </div>
    <div class="chunk">
        <i class="fa-solid fa-clock"></i>
        <div>
            <h2><?php the_field('booking_sub_header'); ?></h2>
            <p><?php the_field('booking_text_02'); ?></p>
        </div>
    </div>
    <a class="continue" href="<?php the_field('booking_url'); ?>" target="_blank"><?php the_field('booking_url_text'); ?></a>
</section>

<section class="flex-row">
    <div class="chunk flex-column flex-1">
        <h2><?php the_field('address_header'); ?></h2>
        <p><?php the_field('address_text'); ?></p>
    </div>

    <div class="chunk flex-column flex-1">
        <h2><?php the_field('hours_header'); ?></h2>
        <table>
            <tr>
                <td><?php the_field('day_01'); ?></td>
                <td><?php the_field('hours_01'); ?></td>
            </tr>
            <tr>
                <td><?php the_field('day_02'); ?></td>
                <td><?php the_field('hours_02'); ?></td>
            </tr>
            <tr>
                <td><?php the_field('day_03'); ?></td>
                <td><?php the_field('hours_03'); ?></td>
            </tr>
            <tr>
                <td><?php the_field('day_04'); ?></td>
                <td><?php the_field('hours_04'); ?></td>
            </tr>
        </table>
    </div>
</section>

<section>
    <div class="chunk">
        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3063.1343978611453!2d-86.3996798487771!3d39.848821079334265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886cade07e4c37cb%3A0xb1a22c65a04ab0ee!2sGents%20by%20Genna!5e0!3m2!1sen!2sus!4v1599447607702!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> </iframe>
    </div>

</section>

<section>
    <div class="chunk flex-column">
        <h2>Some of my work</h2>
        <div class="gallery">
            <?php
            $gallery  = get_field('crb_media_gallery');

            foreach ($gallery  as $i => $image) { ?>
                <img src="<?php echo wp_get_attachment_url($image); ?>" class="myImages">
            <?php } ?>
        </div>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-caption">
            <p>Click on the image to close.</p>
        </div>
        <img id="modal-img" class="modal-img">
    </div>
</section>

<?php get_footer(); ?>