<section class="grid_banner">
    <div class="grid_banner__content" data-aos="fade-right">
        <div class="container">
            <?php echo ($title = get_sub_field('title'))? '<div class="grid_banner__title h1">'.$title.'</div>':'';?>
            <div class="grid_banner__grid">
                <div class="grid_banner__item">
                    <div class="image-background">
                        <img src="<?php echo get_template_directory_uri();?>/images/staff.jpg">
                    </div>
                <a href="#" class="grid_banner__link"></a>
                </div>
            </div>
        </div>
    </div>
</section>