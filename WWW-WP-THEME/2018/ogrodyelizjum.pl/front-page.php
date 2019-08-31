<?php get_header(); ?>





<div class="static_header">
  <div id="home"></div>


    <div class="container">
      <div class="row">

        <div class="textbg">
                    <?php
                    if ( have_posts() ) {
                      while ( have_posts() ) {
                        the_post();
                    if (get_the_content()){ ?>
                              <?php the_content(); ?>
                <?php
                    } // end is content statment
                      } // end while
                    } // end if
                    ?>
               </div>

      </div>

    </div>
</div>

</header>



<div class="pages-wrapper">
<section id="inwestycja" class="layout layout-texttable layout-1">
	<div class="layout-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="textbg">
                    <h2><?php the_field('section1_title')?></h2>
                    <div><p><?php the_field('section1_subtitle')?>
      </p>
</div>                </div>
            </div>
        </div>
        <div class="row texttable">
            <div class="col-md-6 tl">
<?php the_field('section1_desc1')?>

</div>
            <div class="col-md-6 tr">

<?php the_field('section1_desc2')?>
</div>
        </div>
    </div>
</div></section>

<section id="lokalizacja" class="layout layout-map layout-2">
	<div class="layout-wrapper">
    <div class="container textbg-abs">
        <div class="row">
            <div class="col-md-12">
                <div class="textbg">
                    <h2><?php the_field('section2_title')?></h2>
                    <div><p>

<?php the_field('section2_subtitle')?>
                    </p></div>                </div>
            </div>
        </div>
    </div>
    <div class="map-wrapper">
       <img class="img-responsive map" src="<?php the_field('section2_map')?>" width="1920" height="1080" alt="img-78">
    </div>
</div></section>

<section id="" class="layout layout-slice layout-3">
	</section>
  

<div id="okolica2"></div>
<section id="okolica" class="layout layout-maplegend layout-4">
	<div class="layout-wrapper">
    <div class="container textbg-abs">
        <div class="row">
            <div class="col-md-12">
                <div class="textbg">
                    <h2><?php the_field('section3_title')?></h2>
                    <div><p>

<?php the_field('section3_subtitle')?>
                    </p>
</div>                </div>
            </div>
        </div>
    </div>
    <div class="map-wrapper">
       <img class="img-responsive map" src="<?php the_field('section3_map')?>" width="1920" height="1080" alt="img-258">
    </div>
    <div class="map-legend">
        <div class="container">
            <div class="ml-wrapper">
                <h3>Legenda</h3>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-12 ml-left">
                                        <div class="ml-elem">
                        <div class="ml-elem-icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/ikony/0.svg" width="32" height="40" alt="icon-126">
                        </div>
                        <div class="ml-elem-title">Ogrody Elizjum</div>
                    </div>
                                        <div class="ml-elem">
                        <div class="ml-elem-icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/ikony/1.svg" width="33" height="32" alt="icon-142">
                        </div>
                        <div class="ml-elem-title">Sklep</div>
                    </div>
                                        <div class="ml-elem">
                        <div class="ml-elem-icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/ikony/2.svg" width="34" height="32" alt="icon-128">
                        </div>
                        <div class="ml-elem-title">Edukacja</div>
                    </div>
                                        <div class="ml-elem">
                        <div class="ml-elem-icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/ikony/3.svg" width="34" height="33" alt="icon-140">
                        </div>
                        <div class="ml-elem-title">Przedszkole</div>
                    </div>
                                        <div class="ml-elem">
                        <div class="ml-elem-icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/ikony/4.svg" width="34" height="32" alt="icon-134">
                        </div>
                        <div class="ml-elem-title">Żłobek</div>
                    </div>
                                        <div class="ml-elem">
                        <div class="ml-elem-icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/ikony/5.svg" width="33" height="32" alt="icon-127">
                        </div>
                        <div class="ml-elem-title">Apteka</div>
                    </div>
                                        </div>
                    <div class="col-xs-6 col-sm-6 col-md-12 ml-right">
                                        <div class="ml-elem">
                        <div class="ml-elem-icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/ikony/6.svg" width="34" height="33" alt="icon-131">
                        </div>
                        <div class="ml-elem-title">Kościół</div>
                    </div>
                                        <div class="ml-elem">
                        <div class="ml-elem-icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/ikony/7.svg" width="34" height="32" alt="icon-130">
                        </div>
                        <div class="ml-elem-title">Gastronomia</div>
                    </div>
                                        <div class="ml-elem">
                        <div class="ml-elem-icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/ikony/8.svg" width="34" height="32" alt="icon-129">
                        </div>
                        <div class="ml-elem-title">Fryzjer</div>
                    </div>
                                        <div class="ml-elem">
                        <div class="ml-elem-icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/ikony/9.svg" width="31" height="30" alt="icon-141">
                        </div>
                        <div class="ml-elem-title">Boisko sportowe</div>
                    </div>
                                        <div class="ml-elem">
                        <div class="ml-elem-icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/ikony/10.svg" width="31" height="29" alt="icon-143">
                        </div>
                        <div class="ml-elem-title">Ścieżka rowerowa</div>
                    </div>

                    <div class="ml-elem">
      <div class="ml-elem-icon">
        <img src="<?php echo get_template_directory_uri() ?>/img/ikony/11.svg" width="31" height="29" alt="icon-143">
      </div>
      <div class="ml-elem-title">Basen</div>
      </div>

      <div class="ml-elem">
<div class="ml-elem-icon">
<img src="<?php echo get_template_directory_uri() ?>/img/ikony/12.svg" width="31" height="29" alt="icon-143">
</div>
<div class="ml-elem-title">Przystanek autobusowy</div>
</div>


<div class="ml-elem">
<div class="ml-elem-icon">
<img src="<?php echo get_template_directory_uri() ?>/img/ikony/13.svg" width="31" height="29" alt="icon-143">
</div>
<div class="ml-elem-title">Stacja benzynowa</div>
</div>

                                        </div>
                </div>
            </div>
        </div>
    </div>
</div></section>
<section id="galeria" class="layout layout-gallery layout-5">
	<div class="layout-wrapper">
    <div class="container textbg-abs">
        <div class="row">
            <div class="col-md-12">
                <div class="textbg">
                    <h2><?php the_field('section4_title')?></h2>
                    <div><p><?php the_field('section4_subtitle')?></p>
</div>                </div>
            </div>
        </div>
      </div>


<div class="container-fluid">
  <div class="gallery row">

<?php if ( have_rows('section4_gallery') ): ?>
<?php while ( have_rows('section4_gallery') ) : the_row(); ?>
<?php
$img_id = get_sub_field('section4_gallery_item');
$img_id_min = get_sub_field('section4_gallery_item_min');
$img_full = wp_get_attachment_image_src($img_id, 'full');
$img_min = wp_get_attachment_image_src($img_id_min, 'medium');



?>

<div class="col-md-4 col-sm-6">
  <div class="item">
<a class="item-wrapper fancy" rel="group1" href="<?php echo wp_get_attachment_image_src( $img_id, 'full')[0];?>">
<img class="img-responsive" src="<?php echo wp_get_attachment_image_src( $img_id_min, 'gallery-min')[0];?>"  alt="icon-411">
</a>
</div></div>

<?php endwhile; ?>
<?php endif; ?>

</div></div>

</div></section>



<section id="mieszkania" class="layout layout-aparts layout-6">
	<div class="layout-wrapper">
    <div class="container textbg-abs">
        <div class="row">
            <div class="col-md-12">
                <div class="textbg">
                    <h2><?php the_field('section5_title')?></h2>
                    <div>
<?php the_field('section5_subtitle')?>
</div>                </div>
            </div>
        </div>

    <div class="aparts">
                <div class="aparts-header">
            <div class="parent-col">
                <div class="child-col">nr lokalu</div>
                <div class="child-col">budynek</div>
                <div class="child-col">powierzchnia</div>
            </div>
            <div class="parent-col">
                <div class="child-col">kondygnacja</div>
                <div class="child-col">liczba pokoi</div>
            </div>
            <div class="parent-col">
                <div class="child-col">cena za m2 brutto</div>
                <div class="child-col">cena lokalu brutto</div>
            </div>
            <div class="parent-col">
                <div class="child-col">status</div>
                <div class="child-col">rzut</div>
            </div>
        </div>


        <?php $counter=0;
        if ( have_rows('section5_flats') ): ?>
          <?php while ( have_rows('section5_flats') ) : the_row(); ?>

<?php $counter++; ?>
                        <a href="<?php the_sub_field('section5_flat_rzut')?>" class="aparts-content <?php if (get_sub_field('section5_flat_status')=="sprzedane") echo "sold"; ?>">
                <div class="parent-col">
                    <div class="child-col">
                        <div class="vbl">nr lokalu</div>
                        <div class="ovl"><?php echo $counter; ?></div>
                    </div>
                    <div class="child-col">
                        <div class="vbl">budynek</div>
                        <div class="ovl"><?php the_sub_field('section5_flats_build')?></div>
                    </div>
                    <div class="child-col">
                        <div class="vbl">powierzchnia</div>
                        <div class="ovl"><?php the_sub_field('section5_flat_pow')?></div>
                    </div>
                </div>
                <div class="parent-col">
                    <div class="child-col">
                        <div class="vbl">kondygnacja</div>
                        <div class="ovl"><?php the_sub_field('section5_flat_kond')?></div></div>
                    <div class="child-col">
                        <div class="vbl">liczba pokoi</div>
                        <div class="ovl"><?php the_sub_field('section5_flat_lpok')?></div></div>
                </div>
                <div class="parent-col">
                    <div class="child-col">
                        <div class="vbl price">cena za m2 brutto</div>
                        <div class="ovl"><?php if (get_sub_field('section5_flat_status')=="wolne") {
                          the_sub_field('section5_flat_cen');
                        }
                        else {echo '-';}?></div>
                    </div>
                    <div class="child-col">
                        <div class="vbl price">cena lokalu brutto</div>
                        <div class="ovl"><?php if (get_sub_field('section5_flat_status')=="wolne") {
                          the_sub_field('section5_flat_cen2');
                        }
                        else {echo '-';}?></div>
                    </div>
                </div>
                <div class="parent-col">
                    <div class="child-col">
                        <div class="vbl ">status</div>
                        <div class="ovl"><?php the_sub_field('section5_flat_status') ?></div>
                    </div>
                    <div class="child-col">
                        <div class="vbl">rzut</div>
                        <div class="ovl"><span class="throw">zobacz rzut</span></div>
                    </div>
                </div>
            </a>



    <?php endwhile; ?>
<?php endif; ?>
            <!-- ////////

            /////// -->
                </div>


    </div>

</div></section>
<div id="rozbudowa"></div>
<section id="pakiet" class="">
	<div class="layout-wrapper">
    <div class="container textbg-abs">
        <div class="row">
            <div class="col-md-12">
                <div class="textbg">
                    <h2><?php the_field('section6_title')?></h2>
                    <div><p><?php the_field('section6_subtitle')?></p>
</div>                </div>
            </div>
        </div>
      </div>


      <div class="container loop">

<?php if ( have_rows('section6_pak') ): ?>
    <?php while ( have_rows('section6_pak') ) : the_row(); ?>

<div class="row">
<div class="col-md-5 col-lg-5 "><img src="<?php the_sub_field('section6_pak_img')?>" alt=""></div>
<div class="col-md-7 col-lg-7 content">
  <h3><?php the_sub_field('section6_pak_title')?></h3>
  <p><?php the_sub_field('section6_pak_desc')?></p>
</div>
</div>

    <?php endwhile; ?>
<?php endif; ?>

      </div>


</div>
<div class="clearfix"></div>
</section>

<div id="standard"></div>
<section id="standards" class="">
	<div class="layout-wrapper">
    <div class="container textbg-abs">
        <div class="row">
            <div class="col-md-12">
                <div class="textbg">
                    <h2><?php the_field('section7_title')?></h2>
                    <div><p><?php the_field('section7_subtitle')?></p>
</div>                </div>
            </div>
        </div>
      </div>


      <div class="container loop">
<div class="row">
<?php if ( have_rows('section7_standards') ): ?>
    <?php while ( have_rows('section7_standards') ) : the_row(); ?>

<div class="col-md-6">
<div class="standards_item">  <?php the_sub_field('section7_standards_item')?></div>
</div>

    <?php endwhile; ?>
<?php endif; ?>

</div>

      </div>


</div>
<div class="clearfix"></div>
</section>




<section id="wnetrza" class="layout layout-galleryarrangements layout-7">
	<div class="layout-wrapper">
    <div class="container textbg-abs">




        <div class="row">
            <div class="col-md-12">
                <div class="textbg">
                    <h2><?php the_field('section8_title')?></h2>
                                    </div>
            </div>
        </div>
      </div>
      <div class="container-fluid">
                    <div class="gallery row">

                      <?php if ( have_rows('section8_gallery') ): ?>
                      <?php while ( have_rows('section8_gallery') ) : the_row(); ?>
                      <?php
                      $img_id = get_sub_field('section8_gallery_item');
                      $img_id_min = get_sub_field('section8_gallery_item_min');
                      $img_full = wp_get_attachment_image_src($img_id, 'full');
                      $img_min = wp_get_attachment_image_src($img_id_min, 'medium');



                      ?>

                      <div class="col-md-4 col-sm-6">
                        <div class="item">
                      <a class="item-wrapper fancy" rel="group1" href="<?php echo wp_get_attachment_image_src( $img_id, 'full')[0];?>">
                      <img class="img-responsive" src="<?php echo wp_get_attachment_image_src( $img_id_min, 'gallery-min')[0];?>"  alt="icon-411">
                      </a>
                      </div></div>

                      <?php endwhile; ?>
                      <?php endif; ?>

                        </div>
                </div>

</div></section>

<section id="kontakt" class="layout layout-contact layout-8">
	<div class="layout-wrapper">
    <div class="container textbg-abs">
        <div class="row">
            <div class="col-md-6">
                <div class="textbg">
                    <h2>Apartamenty<span> OGRODY ELIZJUM</span></h2>
                    <div class="col-md-12 nplr"><p>ul. Gaik 45/2, 31-338 Kraków</p></div>


<div class="left-col col-md-6 nplr">


  <img class="mb30 alignnone wp-image-223 size-full" src="<?php echo get_template_directory_uri() ?>/img/logo_kontakt.svg" alt="" width="112" height="31">

<?php the_field('section9_desc1')?>
</div>



 <div class="right-col col-md-6 nplr">
<?php the_field('section9_desc2')?>

</div>


<div class="clear"></div>
                </div>
            </div>
            <div class="col-md-6">
            <div class="form-wrapper">
              <h3>Formularz kontaktowy</h3>
<?php echo do_shortcode('[contact-form-7 id="96" title="Formularz 1"]') ;?>
</div>            </div>
        </div>
    </div>

</div></section>

</div>


<div id="end"></div>


  <?php get_footer(); ?>
