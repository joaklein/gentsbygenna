<?php get_header(); ?>

<section>
    <div class="chunk">
        <h2><?php the_field('book_chunk_header'); ?></h2>
        <p><?php the_field('book_chunk_text_01'); ?></p>
        <h3><?php the_field('book_chunk_sub_header'); ?></h3>
        <p><?php the_field('book_chunk_text_02'); ?></p>
        <?php
        $book_link = get_field('book_link');
        if ($book_link) : ?>
            <a class="continue" href="<?php echo esc_url($book_link['url']); ?>" target="_blank">CONTINUE</a>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>