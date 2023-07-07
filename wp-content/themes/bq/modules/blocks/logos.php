<section class="logos">
    <div class="container">
        <?php echo ($title = get_sub_field('title'))? '<div class="logos__title h1">'.$title.'</div>':'';
        echo ($text = get_sub_field('text'))? '<div class="logos__text">'.$text.'</div>':'';

        if ( have_rows('logos') ): ?>
            <div class="logos__cont">
                <?php while( have_rows('logos') ): the_row(); ?>
                    <div class="logos__item">
                        <?php get_template_part('modules/components/image',NULL,array('image' => get_sub_field('image')) ); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>