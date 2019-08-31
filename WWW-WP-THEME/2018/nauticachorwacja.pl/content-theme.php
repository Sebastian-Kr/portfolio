
<?php

for ($i=1; $i < 12 ; $i++) {

$is = 'is_s'.$i;
if (get_field($is)): ?>

<?php
// Zmienne dla jednego wykonania pętli

$col =  'iscol_s'.$i;
$isfull = 'isfull_s'.$i;
$isbg = 'isbg_s'.$i;
$image = 'prgrm_bg_s'.$i;
$isheader = 'isheader_s'.$i;
$prgrm_header = 'prgrm_header_s'.$i;
$img_position = 'prgrm_img_position_s'.$i;
$prgrm_content1 ='prgrm_content1_s'.$i;
$prgrm_content2 ='prgrm_content2_s'.$i;
$prgrm_content3 ='prgrm_content3_s'.$i;
$prgrm_content4 ='prgrm_content4_s'.$i;
$prgrm_content5 ='prgrm_content5_s'.$i;
$prgrm_content6 ='prgrm_content6_s'.$i;
$id ='id_s'.$i;
$class = 'class_s'.$i;
$prgrm_img1 = 'prgrm_img1_s'.$i;
$prgrm_img2 = 'prgrm_img2_s'.$i;
$prgrm_img3 = 'prgrm_img3_s'.$i;
$prgrm_img4 = 'prgrm_img4_s'.$i;
$prgrm_img5 = 'prgrm_img5_s'.$i;
$prgrm_img6 = 'prgrm_img6_s'.$i;
$ssname = 'ssname_s'.$i;
$isss = 'isss_s'.$i;
$gridcol = 'gridcol_s'.$i;
$customhtml ='customhtml_s'.$i;
$bgcolor = 'bg-color_s'.$i;
$progremo_iscenter = 'progremo_iscenter_s'.$i;
$prgrm_col_class1 = 'prgrm_col_class1_s'.$i;
$prgrm_col_class2 = 'prgrm_col_class2_s'.$i;
$prgrm_col_class3 = 'prgrm_col_class3_s'.$i;
$prgrm_col_class4 = 'prgrm_col_class4_s'.$i;
$prgrm_col_class5 = 'prgrm_col_class5_s'.$i;
$prgrm_col_class6 = 'prgrm_col_class6_s'.$i;
$colhead1 = 'colhead1_s'.$i;
$colhead2 = 'colhead2_s'.$i;

if (get_field($progremo_iscenter) == '1') {
  $vcc = 'vcc';
  $vhc = 'vhc';
  $center_v = 'center';
}
else {
  $vcc = '';
  $vhc = '';
  $center_v = '';

}

// Generowanie właściwości kontenera section
echo '<section id="';
echo the_field($id).'" class="  ';
echo the_field($class).' '.$vcc.'"';
if ((get_field($bgcolor))) {echo ' style="background-color: '.get_field($bgcolor).'"';}
if ((get_field($isbg))) {echo ' style="background-color: '.get_field($bgcolor).'; background-image: url(\''.get_field($image).'\')"';}
echo'><div ';
// Generowanie właściwości div container
if(get_field($isfull)) echo 'class="container-fluid '.$vhc.'"';
else echo 'class="container-fluid maxw '.$vhc.'"';


echo '>';
// Generowanie zawartości kontenera

if (get_field($isheader)) {
  echo the_field($prgrm_header);
}
?>
<?php //echo the_field('prgrm_img1_s1') ?>
<div class="row <?php echo $center_v ?>">
<?php if (get_field($col)==1): ?>

  <div class="col-sm-12 <?php the_field($prgrm_col_class1)?>">

    <?php if (get_field($img_position) == 'up'){echo '<img alt=" "  src="'; echo the_field($prgrm_img1).'">';}
    echo the_field($prgrm_content1) ;
      if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img1).'">';}
    ?>
</div>
  </div>

<?php endif; ?>




<?php if (get_field($col)==2): ?>

  <div class="col-sm-6 <?php the_field($prgrm_col_class1)?>"

  <?php if ((get_field($img_position) == 'full-background') and ((get_field($prgrm_img1)))) { echo 'style="background-image: url(\''.get_field($prgrm_img1).'\')"';} ?>>
     <?php echo the_field($colhead1)?>
  <?php
      if ((get_field($img_position) == 'up') and ((get_field($prgrm_img1)))){echo '<img alt=" " src="'; echo the_field($prgrm_img1).'">';}
      // if ((get_field($img_position) == 'up-zoom') and ((get_field($prgrm_img1)))){ echo '<div class="zoombox"><div style="background-image: url(\''.get_field($prgrm_img1).'\')"></div></div>';}

    ?>
    <!-- zoom module -->
        <?php if ((get_field($img_position) == 'up-zoom') and ((get_field($prgrm_img1)))): ?>
              <div class="zoom_cont" id="<?php echo $i.'t' ?>">
                <div class="controls_buttons">
                  <div class="plus" data-boxid="<?php echo $i.'t' ?>"></div>
                  <div class="minus" data-boxid="<?php echo $i.'t' ?>"></div>
                </div>
                <div class="zoom_img">
                <img class="max500" src="<?php echo the_field($prgrm_img1) ?>">
                </div>
              </div>
        <?php endif; ?>
    <!-- end zoom module -->
<?php
if ((get_field($img_position) == 'anime-border') and ((get_field($prgrm_img1)))){  echo '<div class="rotate"><img alt=" " src="'.get_field($prgrm_img1).'"><div class="border-turned"></div></div>';}
echo the_field($prgrm_content1);
if ((get_field($img_position)) == 'down'){echo '<img alt=" " src="'; echo the_field($prgrm_img1).'">';}

 ?>
  </div>

  <div class="col-sm-6 <?php the_field($prgrm_col_class2)?>"<?php if ((get_field($img_position) == 'full-background') and ((get_field($prgrm_img2)))) { echo 'style="background-image: url(\''.get_field($prgrm_img2).'\')"';} ?>>
 <?php echo the_field($colhead2)?>
    <?php
    if ((get_field($img_position) == 'up') and ((get_field($prgrm_img2)))){echo '<img alt=" " src="'; echo the_field($prgrm_img2).'">';}
    // if ((get_field($img_position) == 'up-zoom') and ((get_field($prgrm_img2)))){ echo '<div class="zoombox"><div style="background-image: url(\''.get_field($prgrm_img2).'\')"></div></div>';}

    ?>


    <!-- zoom module -->
        <?php if ((get_field($img_position) == 'up-zoom') and ((get_field($prgrm_img2)))): ?>
              <div class="zoom_cont" id="<?php echo $i.'z'?>">
                <div class="controls_buttons">
                  <div class="plus" data-boxid="<?php echo $i.'z'?>"></div>
                  <div class="minus" data-boxid="<?php echo $i.'z'?>"></div>
                </div>
                <div class="zoom_img">
                <img class="max500" src="<?php echo the_field($prgrm_img2)?>">
                </div>
              </div>
        <?php endif; ?>
    <!-- end zoom module -->
<?php     if ((get_field($img_position) == 'anime-border') and ((get_field($prgrm_img2)))){ echo '<div class="rotate"><img alt=" " src="'.get_field($prgrm_img2).'"><div class="border-turned"></div></div>';}
    echo the_field($prgrm_content2);
    if ((get_field($img_position)) == 'down'){echo '<img alt=" " src="'; echo the_field($prgrm_img2).'">';} ?>
  </div>


<?php endif; ?>



<?php if (get_field($col)==3): ?>
  <div class="col-sm-4 <?php the_field($prgrm_col_class1)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img  alt=" " src="'; echo the_field($prgrm_img1).'">';}
      if ((get_field($img_position) == 'up-zoom') and ((get_field($prgrm_img1)))){ echo '<div class="zoombox  zoombox-x3"><div style="background-image: url(\''.get_field($prgrm_img1).'\')"></div></div>';}
    echo the_field($prgrm_content1) ;
          if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img1).'">';}
          ?>
  </div>

  <div class="col-sm-4 <?php the_field($prgrm_col_class2)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img  alt=" " src="'; echo the_field($prgrm_img2).'">';}
      if ((get_field($img_position) == 'up-zoom') and ((get_field($prgrm_img2)))){ echo '<div class="zoombox zoombox-x3"><div style="background-image: url(\''.get_field($prgrm_img2).'\')"></div></div>';}
    echo the_field($prgrm_content2) ;
          if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img2).'">';}
          ?>
  </div>

  <div class="col-sm-4 <?php the_field($prgrm_col_class3)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img  alt=" " src="'; echo the_field($prgrm_img3).'">';}
      if ((get_field($img_position) == 'up-zoom') and ((get_field($prgrm_img3)))){ echo '<div class="zoombox zoombox-x3"><div style="background-image: url(\''.get_field($prgrm_img3).'\')"></div></div>';}
    echo the_field($prgrm_content3);
          if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img3).'">';}
          ?>
  </div>

<?php endif; ?>



<?php if (get_field($col)==4): ?>

  <div class="col-sm-3 <?php the_field($prgrm_col_class1)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img  alt=" " src="'; echo the_field($prgrm_img1).'">';}
    echo the_field($prgrm_content1) ;
          if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img1).'">';}
          ?>
  </div>

  <div class="col-sm-3 <?php the_field($prgrm_col_class2)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img alt=" "  src="'; echo the_field($prgrm_img2).'">';}
    echo the_field($prgrm_content2) ;
          if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img2).'">';}
          ?>
  </div>

  <div class="col-sm-3 <?php the_field($prgrm_col_class3)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img alt=" "  src="'; echo the_field($prgrm_img3).'">';}
    echo the_field($prgrm_content3);
          if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img3).'">';}
           ?>
  </div>

  <div class="col-sm-3 <?php the_field($prgrm_col_class4)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img  alt=" " src="'; echo the_field($prgrm_img4).'">';}
    echo the_field($prgrm_content4);
          if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img4).'">';}
          ?>
  </div>

<?php endif; ?>


<?php if (get_field($col)==5): ?>
  <div class="col-sm-1"></div>

  <div class="col-sm-2 <?php the_field($prgrm_col_class1)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img  alt=" " src="'; echo the_field($prgrm_img1).'">';}
    echo the_field($prgrm_content1) ;
          if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img1).'">';}
          ?>
  </div>

  <div class="col-sm-2 <?php the_field($prgrm_col_class2)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img alt=" "  src="'; echo the_field($prgrm_img2).'">';}
    echo the_field($prgrm_content2) ;
          if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img2).'">';}
          ?>
  </div>

  <div class="col-sm-2 <?php the_field($prgrm_col_class3)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img alt=" "  src="'; echo the_field($prgrm_img3).'">';}
    echo the_field($prgrm_content3);
          if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img3).'">';}
           ?>
  </div>

  <div class="col-sm-2 <?php the_field($prgrm_col_class4)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img  alt=" " src="'; echo the_field($prgrm_img4).'">';}
    echo the_field($prgrm_content4);
          if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img4).'">';}
          ?>
  </div>

  <div class="col-sm-2 <?php the_field($prgrm_col_class5)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img  alt=" " src="'; echo the_field($prgrm_img5).'">';}
    echo the_field($prgrm_content5);
          if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img5).'">';}
          ?>
  </div>
  <div class="col-sm-1"></div>

<?php endif; ?>




<?php if (get_field($col)==6) :?>

  <?php
  if (get_field($gridcol)=='2w3k') {$colclass='col-sm-4';}
  if (get_field($gridcol)=='3w2k'){$colclass='col-sm-6';}
  ?>

  <div class="<?php echo $colclass ?> <?php the_field($prgrm_col_class1)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img  alt=" " src="'; echo the_field($prgrm_img1).'">';}
    echo the_field($prgrm_content1) ;
          if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img1).'">';}
          ?>
  </div>

  <div class="<?php echo $colclass ?> <?php the_field($prgrm_col_class2)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img alt=" "  src="'; echo the_field($prgrm_img2).'">';}
    echo the_field($prgrm_content2) ;
          if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img2).'">';}
          ?>
  </div>

  <?php if (get_field($gridcol)=='3w2k') echo '</div><div class="row">' ?>

  <div class="<?php echo $colclass ?> <?php the_field($prgrm_col_class3)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img  alt=" " src="'; echo the_field($prgrm_img3).'">';}
    echo the_field($prgrm_content3);
          if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img3).'">';}
          ?>
  </div>


<?php if (get_field($gridcol)=='2w3k') echo '</div><div class="row">' ?>

  <div class="<?php echo $colclass ?> <?php the_field($prgrm_col_class4)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img alt=" "  src="'; echo the_field($prgrm_img4).'">';}
    echo the_field($prgrm_content4);
          if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img4).'">';}
           ?>
  </div>

  <?php if (get_field($gridcol)=='3w2k') echo '</div><div class="row">' ?>

  <div class="<?php echo $colclass ?> <?php the_field($prgrm_col_class5)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img alt=" "  src="'; echo the_field($prgrm_img5).'">';}
    echo the_field($prgrm_content5);
          if ((get_field($img_position)) == 'down'){echo '<img  alt=" " src="'; echo the_field($prgrm_img5).'">';}
          ?>
  </div>

  <div class="<?php echo $colclass ?> <?php the_field($prgrm_col_class6)?>">
    <?php if (get_field($img_position) == 'up'){echo '<img  alt=" " src="'; echo the_field($prgrm_img6).'">';}
    echo the_field($prgrm_content6);
          if ((get_field($img_position)) == 'down'){echo '<img alt=" "  src="'; echo the_field($prgrm_img6).'">';}
          ?>
  </div>

<?php  endif; ?>



  </div>
</div>
<!-- end container -->

<?php echo the_field($customhtml) ?>


</section>
<!-- end section -->

<?php if (get_field($isss)) {get_template_part('content', get_field($ssname));} ?>
<?php endif; // koniec warunku wyświetlającego sekcję?>
<?php } //koniec pętli generującej sekcje?>
