<div id="floor_panel">


  <div class="container mt30">
    <div class="row">
      <div class="col-sm-6">
        <h2 class="special_header"><span>05</span>
          <?php the_field('section5_title')?>
        </h2>
      </div>

      <div class="col-sm-6 just_right">

        <h2 id="floor_title"></h2>


      </div>
    </div>
  </div>


<div class="container">
  <div class="row">
    <div class="col-lg-7 col-xl-8">
      <div id="floor_shema_box" >

        <div id="tooltip-box"></div>



        <svg version="1.1" id="Warstwa_1"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px" y="0px"
        viewBox="0 0 919 737"
        enable-background="new 0 0 919 737">

          <image
          id="floor_img"
     xlink:href="<?php echo get_template_directory_uri() ?>/img/app_foto.jpg"
           overflow="visible"
           width="919"
           height="737"

           >
          </image>

           <polygon id="lp_1"></polygon>
           <polygon id="lp_2"></polygon>
           <polygon id="lp_3"></polygon>
           <polygon id="lp_4"></polygon>
           <polygon id="lp_5"></polygon>
           <polygon id="lp_6"></polygon>


        </svg>
      </div>
    </div>

<div class="col-lg-5 col-xl-4 floor_info">

    <div class="mobile_flex">
    <div>
      <h6><?php echo __('[:pl]Orientacja:[:en]Orientation:'); ?></h6>
      <img src="<?php echo get_template_directory_uri() ?>/img/compas.svg" alt="">
    </div>

<div>
  <h6><?php echo __('[:pl]Dostępna powierzchnia:[:en]Available area:'); ?></h6>
  <h2 id="floor_size"></h2>
</div>
      </div>

    <div id="floor_desc"></div>
    <a class="btn" id="floor_pdf" target="blank" href=""><?php echo __('[:pl]Pobierz rzut[:en]Download projection'); ?></a>
    <h6  id="close"><?php echo __('[:pl]Powrót do budnynku[:en]Back to building'); ?></h6>
</div>

  </div>
</div>

</div>
