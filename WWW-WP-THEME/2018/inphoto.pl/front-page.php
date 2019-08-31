<?php get_header(); ?>



<div class="banner1" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/home/inphoto-header.jpg')">
<div class="fade-in-element3">
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
  <div  id="portfiliolink" class="btn btn-full"><?php echo __('[:pl]Poznaj nas[:en]Get to know us'); ?></div>


</div>
</div>

  <div id="portfilio"></div>

<div class="grid1">
<div class="grid1-row ">

<?php $counter=1;

if ( have_rows('category_foto') ): ?>
    <?php while ( have_rows('category_foto') ) : the_row(); ?>
      <div class=" till_v1   <?php if (($counter==4) || ($counter==5)) {echo 'bg-600';} ?>">
  <a href="<?php the_sub_field('category_link') ?>">
  <div class="content animate">
    <h4><?php the_sub_field('category_title') ?></h4>
      <p><?php the_sub_field('category_desc') ?></p>
    <div class=" btn "><?php echo __('[:pl]Zobacz więcej[:en]See more'); ?></div>
  </div>
           <div class="bg" style="background-image: url('<?php the_sub_field('category_foto') ?>')"></div>
           </a>
      </div>

      <?php if ($counter == 3): ?>
        <!-- <div class="clearfix"></div> -->
      </div><div class="grid1-row animate">
      <?php endif; ?>
      <?php $counter++ ?>
    <?php endwhile; ?>
<?php endif; ?>
<!-- <div class="clearfix"></div> -->
</div>

</div>
<div class="special_mark"><div class="line"></div></div>


  <div class="container onas"><div class="row animate pt100 pb100">
    <div class="col-md-6 ">
      <h2 class="ta-left mb30 "><?php echo __('[:pl]O NAS[:en]ABOUT US'); ?></h2>
      <p><?php the_field('o_nas') ?>
</p>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-5"><img class="mt20" src="<?php the_field('o_nas_foto') ?>" alt=""></div>
  </div></div>


<div class="container-fluidv ">
  <div class="row icons-sec dark-bg">

    <div class="item col-lg-4  ">
<img src="<?php echo get_template_directory_uri() ?>/img/home/icon-01.svg" alt="">
      <div class="content-icons ">
        <?php the_field('opis1') ?>
      </div>
</div>

    <div class="item col-lg-4 ">
  <img src="<?php echo get_template_directory_uri() ?>/img/home/icon-02.svg" alt="">
        <div class="content-icons ">

  <?php the_field('opis2') ?>

          </div>
    </div>

    <div class="item col-lg-4 ">
  <img src="<?php echo get_template_directory_uri() ?>/img/home/icon-03.svg" alt="">
    <div class="content-icons ">
  <?php the_field('opis3') ?>

    </div>
    </div>

  </div>
</div>

<?php get_template_part('content', 'add_desc') ?>



  <?php get_footer(); ?>
