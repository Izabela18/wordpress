<?php get_header(); ?>

<main>

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

<div class="row">
<div class="content-box">
  <h2 class="front">About us</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<p>
    <ul role="navigation">
      <li>
      <?php dynamic_sidebar( 'custom-widget-below' ); ?>
    </li>
    </ul>
    <div id="we">
    <?php
        get_template_part('layout/slide');
    ?>
  </div>
  <h2 class="front">Our team</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<p>
    <?php $images = get_field('gallery2');
    $size = 'custom-size'; // (thumbnail, medium, large, full or custom size)

    if( $images ): ?>
        <ul style="margin: 20px 100px 20px 100px">
            <?php foreach( $images as $image ): ?>
                <li class="gallery_space">
                  <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>
    </div>
    <div class="content-gallery">
      <h2 class="front middle">Gallery</h2>
    </div>
    <div class="galeri">
      <?php

  $images = get_field('gallery');
  $size = 'custom-size'; // (thumbnail, medium, large, full or custom size)

  if( $images ): ?>
      <ul>
          <?php foreach( $images as $image ): ?>
              <li>
              	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
              </li>
          <?php endforeach; ?>
      </ul>
  <?php endif; ?>

</div>

<div class="3kolumner">
  <h2 class="front middle">Testimonials</h2>
<?php
    get_template_part('layout/kolumner');
?>
</div>
<div class="2kolumner">

  <div class="col-xs-6">
    <h2 class="front">Contact us</h2>

    <form>
      <?php echo do_shortcode('[contact-form-7 id="82" title="Contact form 1"]') ?>
    </form>
    </div>
  <div class="col-xs-6">
    <h2 class="front">Contact details</h2><br>
    <p>
      <?php the_field('address'); ?>
    </p>
    <p>
      Tel: <?php the_field('telefon'); ?><br>
      E-post:  <a href="<?php the_field('email'); ?>" target="_blank"><?php the_field('email'); ?></a>
    </p>
    

<?php
$location = get_field('karta');

if( !empty($location) ):
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
  <?php the_field('karta'); ?>
</div>

<?php endif; ?>

  </div>
</div>
        <?php endwhile; ?>
      </div>
    <?php else : ?>
      <p>Inga poster hittades.</p>
    <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer();?>
