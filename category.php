<?php get_header(); ?>
<main>
  <section class="standard">
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1><?php the_category(); ?></h1>
          <?php if (have_posts()) : ?>

              <?php while (have_posts()) :?>


                <?php get_template_part( 'posts/inlagg' ); ?>

              <?php endwhile; ?>
             <?php the_posts_pagination(array(
            'prev_text' => __( 'Föregående', 'textdomain' ),
              'next_text' => __( 'Nästa', 'textdomain' ),
                )); ?>
              </div>
            <?php endif; ?>

      </div>
    </div>
  </section>
</main>
<?php get_footer();?>
