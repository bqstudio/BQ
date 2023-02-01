<section class="stay_informed">
    <div class="stay_informed__content" data-aos="fade-right">
        <div class="container">
            <div class="stay_informed__text-cont">
                <?php echo ($title = get_sub_field('title'))? '<div class="stay_informed__title h1">'.$title.'</div>':'';?>
                <div class="button js-popup">Escribinos</div>
            </div>
            <?php if ($form_id = get_sub_field('form_id')): ?> 
                <div class="popup">
                    <button class="close_popup"></button>
                    <div class="stay_informed__form" ><?php echo do_shortcode('[gravityform id="'.$form_id.'" title="false" description="false" ajax="true"]'); ?></div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>