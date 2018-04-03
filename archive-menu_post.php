<?php get_header(); ?>

  <div class="content_archive" style="display:flex;">
    <?php if (have_posts()) : ?>
<div class="menu_sign" style="margin: 180px 300px 0px 0px;">
<img src="<?php echo get_template_directory_uri(); ?>/img/sign.jpg" />
</div>
<div class="types" style="margin-top: 150px;">
<?php while (have_posts()) : the_post(); ?>

     <a href="<?php the_permalink(); ?>"> <?php the_title('<h2>', '</h2>'); ?></a>
<?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>

<?php get_footer(); ?>
