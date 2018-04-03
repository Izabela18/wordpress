<?php get_header(); ?>
<main>
  <section class="standard">
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1>Arkiv</h1>
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

        <aside id="secondary" class="col-xs-12 col-md-3">
          <ul role="navigation">
            <li>
            <?php dynamic_sidebar( 'custom-widget-main' ); ?>
          </li>
          </ul>
        </aside>
      </div>
    </div>
  </section>
</main>
<?php get_footer();?>
