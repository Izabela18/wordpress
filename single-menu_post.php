<?php get_header();?>

<div class="container-single">
 <?php if(have_posts()):
while (have_posts()):
the_post();
the_content();
?>

  <?php

  // check if the repeater field has rows of data
  if( have_rows('allergy') ):

   	// loop through the rows of data
    get_template_part('layout/slide');


echo '<table>';
echo '<caption>';
echo "Menu";
echo '</caption>';
echo '<tr>';
echo '<th>';
echo "Item";
echo '</th>';
echo '<th>';
echo "Dish";
echo '</th>';
echo '<th>';
echo "Price";
echo '</th>';
echo '<th>';
echo "Allergy";
echo '</th>';
echo '</tr>';
echo '</thead>';

  while ( have_rows('allergy') ) : the_row();

echo '<tr>';
echo '<td>';

      // display a sub field value
      the_sub_field('item');
echo '</td>';
echo '<td>';

    the_sub_field('dish');

echo '</td>';
echo '<td>';

      the_sub_field('price');
      echo '</td>';

echo '<td>';
          $term = get_sub_field('allergy_type');
          if( $term ):  ?>
          	<?php echo $term->name;?>
          <?php endif;
echo '</td>';
echo '</tr>';
      endwhile;
      echo '</table>';

      $images = get_field('gallery');
      $size = 'custom-size'; // (thumbnail, medium, large, full or custom size)

      if( $images ): ?>
          <ul>
              <?php foreach( $images as $image ): ?>
                  <li class="gallery_space">
                  	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                  </li>
              <?php endforeach; ?>
          </ul>
      <?php endif;

  elseif( have_rows('sports_nutrition') ):
    // loop through the rows of data
    get_template_part('layout/slide');

echo '<table>';
echo '<caption>';
echo "Menu";
echo '</caption>';
echo '<tr>';
echo '<th>';
echo "Item";
echo '</th>';
echo '<th>';
echo "Dish";
echo '</th>';
echo '<th>';
echo "Price";
echo '</th>';
echo '<th>';
echo "Diet type";
echo '</th>';
echo '</tr>';
echo '</thead>';

  while ( have_rows('sports_nutrition') ) : the_row();

echo '<tr>';
echo '<td>';

      // display a sub field value
      the_sub_field('item');
echo '</td>';
echo '<td>';

    the_sub_field('dish');

echo '</td>';
echo '<td>';

      the_sub_field('price');
      echo '</td>';

echo '<td>';
          $term = get_sub_field('diet_type');
          if( $term ):  ?>
            <?php echo $term->name;?>
          <?php endif;
echo '</td>';
echo '</tr>';
      endwhile;
      echo '</table>';

      $images = get_field('gallery');
      $size = 'custom-size'; // (thumbnail, medium, large, full or custom size)

      if( $images ): ?>
          <ul>
              <?php foreach( $images as $image ): ?>
                  <li class="gallery_space">
                    <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                  </li>
              <?php endforeach; ?>
          </ul>
      <?php endif;
      // no rows found

  elseif( have_rows('vegan') ):

        get_template_part('layout/slide');


    echo '<table>';
    echo '<caption>';
    echo "Vegan menu";
    echo '</caption>';
    echo '<tr>';
    echo '<th>';
    echo "Item";
    echo '</th>';
    echo '<th>';
    echo "Dish";
    echo '</th>';
    echo '<th>';
    echo "Price";
    echo '</th>';
    echo '</tr>';
    echo '</thead>';

      while ( have_rows('vegan') ) : the_row();

echo '<tr>';
echo '<td>';

          // display a sub field value
          the_sub_field('item');
echo '</td>';
echo '<td>';

        the_sub_field('dish');

echo '</td>';
echo '<td>';

          the_sub_field('price');
          echo '</td>';
echo '</tr>';


      endwhile;
      echo '</table>';



    $images = get_field('gallery');
    $size = 'custom-size'; // (thumbnail, medium, large, full or custom size)

    if( $images ): ?>
        <ul>
            <?php foreach( $images as $image ): ?>
                <li class="gallery_space">
                	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>


    <?php elseif( have_rows('lacto-ovo-vegetarian') ):

          get_template_part('layout/slide');


      echo '<table>';
      echo '<caption>';
      echo "Vegetarian menu";
      echo '</caption>';
      echo '<tr>';
      echo '<th>';
      echo "Item";
      echo '</th>';
      echo '<th>';
      echo "Dish";
      echo '</th>';
      echo '<th>';
      echo "Price";
      echo '</th>';
      echo '</tr>';
      echo '</thead>';

        while ( have_rows('lacto-ovo-vegetarian') ) : the_row();

  echo '<tr>';
  echo '<td>';

            // display a sub field value
            the_sub_field('item');
  echo '</td>';
  echo '<td>';

          the_sub_field('dish');

  echo '</td>';
  echo '<td>';

            the_sub_field('price');
            echo '</td>';
  echo '</tr>';


        endwhile;
        echo '</table>';



      $images = get_field('gallery');
      $size = 'custom-size'; // (thumbnail, medium, large, full or custom size)

      if( $images ): ?>
          <ul>
              <?php foreach( $images as $image ): ?>
                  <li class="gallery_space">
                  	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                  </li>
              <?php endforeach; ?>
          </ul>
      <?php endif;

      // no rows found


  elseif( have_rows('gluten-free') ):

   	// loop through the rows of data
    get_template_part('layout/slide');


echo '<table>';
echo '<caption>';
echo "Gluten-free menu";
echo '</caption>';
echo '<tr>';
echo '<th>';
echo "Item";
echo '</th>';
echo '<th>';
echo "Dish";
echo '</th>';
echo '<th>';
echo "Price";
echo '</th>';
echo '</tr>';
echo '</thead>';

  while ( have_rows('gluten-free') ) : the_row();

echo '<tr>';
echo '<td>';

      // display a sub field value
      the_sub_field('item');
echo '</td>';
echo '<td>';

    the_sub_field('dish');

echo '</td>';
echo '<td>';

      the_sub_field('price');
      echo '</td>';
echo '</tr>';


  endwhile;
  echo '</table>';



$images = get_field('gallery');
$size = 'custom-size'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li class="gallery_space">
              <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif;?>
<?php endif;?>

<?php endwhile;?>
<?php endif;
?>
</div>
 <?php get_footer();?>
