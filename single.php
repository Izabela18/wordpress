<?php get_header(); ?>

<main>
  <section>
    <div class="container">
      <div class="row">
          <div class="archive_widget"><?php dynamic_sidebar( 'custom-widget-main' ); ?></div>
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>
        <div id="primary" class="col-xs-12 col-md-9">
          <article class="inlagg_full">
            <h2 class="title">
              <a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a>
            </h2>
            <img class="post_img" <?php the_post_thumbnail();?>
            <ul class="meta">
              <li class="tags">
              <i class="fa fa-calendar"></i>  <?php the_time('j F, Y'); ?>  <?php echo "&nbsp;"?>
            </li>
            <li class="tags"><i class="fa fa-user"></i>  <?php  the_author_posts_link(); ?> <?php echo "&nbsp;"?>
            </li>
               <li class="tags" ><i class="fa fa-tag"></i> <?php echo "&nbsp;"?> <?php the_category(); ?>
            </li>
          </ul><br>
            <p><?php the_content(); ?><p>
          </article>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
  <?php else : ?>
  <p>Inga poster hittades.</p>
  <?php endif; ?>
  </section>
  </main>

<?php get_footer(); ?>
