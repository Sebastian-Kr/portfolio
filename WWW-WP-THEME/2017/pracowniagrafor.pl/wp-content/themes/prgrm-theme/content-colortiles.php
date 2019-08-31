<?php
////////////////// ADD ALL COURSES LOOP ///////////////////

if (is_page(217)) {$current_cat = 4;}
if (is_page(23)) {$current_cat = 5;}

$query = new WP_Query( array( 'category__and' => array( $current_cat ), 'order' => 'DSC', ) );
$current_id = get_the_ID();
$count = (int) 0;
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();


// VARIABLE GENARATE
$count++;
$id_post = get_the_ID();
$color = get_field('progremo_color');
$stock = (int) get_field('progremo_instock', $id_post);




?>

<?php if (is_page(23)): ?>

    <div id="k<?php if ($stock > 0) echo $id_post ?>_till" class="<?php if (!($stock > 0)) echo 'disabled'?> courses-tilles" style="background-color: <?php echo $color ?>">

<?php endif; ?>


<?php if (is_page(217)): ?>

    <div id="k<?php echo $id_post ?>_till" class="courses-tilles" style="background-color: <?php echo $color ?>">

<?php endif; ?>



<div class="courses_data">
  <h4><?php echo the_field('progremo_title_k').'</h4><p>'; echo the_field('progremo_date_k2') ?></p>
</div>
<div class="in_stock">
<div class="glass"></div>
  <h4>
    <?php if ($stock > 0)
    echo the_field("progremo_instock");
     else echo '0';
     ?>
  </h4><p>Wolnych <br>miejsc</p></div>
</div>

<?php endwhile;
wp_reset_postdata();
endif;
////////////////// ADD ALL COURSES LOOP END ///////////////////////
?>

<?php if (is_page(217)): ?>
  <div id="k999_till" class="courses-tilles" style="background-color: black">
<div class="courses_data">
<h4>pokaż wszystkie kursy</h4>
</div>
</div>
<?php endif; ?>
