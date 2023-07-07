<section class="grid_banner">
    <div class="grid_banner__content" data-aos="fade-right">
        <div class="container">
            <?php echo ($title = get_sub_field('title'))? '<div class="grid_banner__title h1">'.$title.'</div>':'';?>
            
                <?php if($proyectos = get_sub_field('proyectos')):?>
                    <div class="grid_banner__grid">
                        <?php foreach( $proyectos as $post ): 
                            setup_postdata($post); 
                            $link = get_field('link')?>
                            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="grid_banner__item">
                                <div class="image-background"><?php the_post_thumbnail(); ?></div>
                               <?php /* <div class="grid_banner__link"><?php the_title(); ?></div> */ ?>
                            </a>
                        <?php endforeach; wp_reset_postdata(); ?>
                    </div>
                <?php endif; ?>
            
        </div>
    </div>
</section>