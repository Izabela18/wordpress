<?php acf_form_head(); ?>
<?php get_header(); ?>


<div class="build_main">

	<div id="primary">

		<div id="content" role="main">
			<?php
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
			?>
			<div class="hero" style="background: url(<?php echo $src[0]; ?> ) no-repeat center center; background-size: cover;">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<h1 class="build_title" style="background-color: #7e8951; height: 100px;" ><?php the_title(); ?></h1>

				<div><?php the_content(); ?></div>

				<?php

				acf_form(array(
					'submit_value'	=> 'Send'
				));

				?>


			<?php endwhile; ?>
</div>
		</div><!-- #content -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
