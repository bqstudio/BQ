<div class="socials">
  <?php if (get_field('mail','option')) { ?>
    <a href="<?php the_field('mail','option') ?>" target="_blank" title="email">
      <?php get_template_part('images/socials/email'); ?>
    </a>
  <?php }  ?>
  <?php if (get_field('instagram','option')) { ?>
    <a href="<?php the_field('instagram','option') ?>" target="_blank"  title="Visit our Instagram Page">
      <?php get_template_part('images/socials/instagram'); ?>
    </a>
  <?php }  ?>
  <?php if (get_field('linkedin','option')) { ?>
    <a href="<?php the_field('linkedin','option') ?>" target="_blank" title="Visit our linkedin Page">
      <?php get_template_part('images/socials/linkedin'); ?>
    </a>
  <?php }  ?>
</div>	<!--/socials -->
