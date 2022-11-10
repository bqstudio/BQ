<section class="hero-home">        
  <div class="hero-home__cont">
    <?php $media_type = get_field('media_type');?>
    <?php if ($media_type == ('video_file') && $video_file = get_field('video_file')): ?>
      <div class="hero-home__cont">
          <video playsinline autoplay muted loop>
            <source src="<?php echo $video_file; ?>#t=0.1" type="video/mp4">
          </video>
      </div>
    <?php elseif($image = get_field('image')): ?>
          <div class="hero-home__cont">
            <img 
                srcset="<?php echo esc_url($image['sizes']['thumbnail']); ?> 500w,
                        <?php echo esc_url($image['sizes']['medium']); ?> 800w,
                        <?php echo esc_url($image['sizes']['large']); ?> 2000w"
                src="<?php echo esc_url($image['sizes']['full-width']); ?>" 
                alt="<?php echo esc_attr($image['alt']); ?>"
            />
          </div>
    <?php endif; ?>

    <div class="hero-home__content">
      <div class="container">
        <div class="hero-home__big_text"></div>
        <?php echo ($description = get_field('description'))? '<div class="hero-home__bottom_text">'.$description.'</div>':''; ?>
      </div>
      <div class="block-hidden">
        <h2>Nosotros</h2>
        <div>Hola somos una empresa joven con amplia experiencia en el desarrollo web. Creemos que hoy en día es fundamental tener un sitio online para potenciar tu emprendimiento, negocio o empresa y para eso estamos para acompañarte en este proceso, focalizando en posicionar tu marca en el mundo digital. </div>
      </div>
    </div>
  </div>
</section>