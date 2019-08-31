<?php
/*
Template Name: Specjalizacja
*/
session_start();
?>
<?php get_header() ?>

<?php $hide = 'style="display: inherit"' ?>

<div id="spec-section">

<div id="spec-related">


<?php
$_SESSION["cat"] = '10';
$_SESSION["box_id"] = '10';
?>

<div <?php echo $hide ?>class="box" id="10">
<h2>PROWADZONE SPRAWY</h2>
<?php get_template_part('content', 'related') ?>
</div>



<?php
 $_SESSION["cat"] = '9';
 $_SESSION["box_id"] = '9';
 ?>


 <div class="box" id="9">
 <h2>MEDIA</h2>
<?php get_template_part('content', 'related') ?>
</div>


<?php
 $_SESSION["cat"] = '8';
 $_SESSION["box_id"] = '8';
 ?>

 <div class="box" id="8">
 <h2>PUBLIKACJE</h2>
<?php get_template_part('content', 'related') ?>
</div>


</div>




<div id="spec-content" class="news-info mt100">
                <!-- MAIN CONTENT  -->
          <div class="content ">
                  <div class="title"><h1><?php the_title() ?></h1></div>

                               <div class="sep mb50"></div>

                  <?php
                  if ( have_posts() ) {
                    while ( have_posts() ) {
                      the_post();
                  if (get_the_content()){
                            the_content();

                  } // end is content statment
                    } // end while
                  } // end if


                  ?>
                  <!-- END MAIN CONTENT -->


<div class="button_std"><a href="<?php echo  get_home_url()?>/specjalizacje/">Zobacz wszystkie specjalizacje >></a></div>

</div></div></div>





<?php get_footer() ?>
