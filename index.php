<?php get_header(); ?>
<section id="content" role="main">

  <?php if (have_posts()) : ?>
    <div class="articles">
      <?php while (have_posts()) : the_post(); ?>
        <article>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <span class="skribent"><?php the_author(); ?></span>
          <?php the_content('Read more', true); ?>
          <?php the_category(); ?>
          <?php the_date(); ?>

        </article>
      <?php endwhile; ?>
    </div>
  <?php else : ?>
    <p>Inga poster hittades.</p>
  <?php endif; ?>

</section>

<?php get_footer(); ?>
