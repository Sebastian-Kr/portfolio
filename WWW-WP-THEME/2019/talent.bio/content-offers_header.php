
<section class=" home_header header" style="background-image: url(<?php echo get_the_post_thumbnail_url(101) ?>)">
<div class="container"><div class="row">
  <div class="col-md-12">

<div class="main_content">
  <?php
  $post = get_post( 101,ARRAY_A );
  echo do_shortcode($post['post_content']);
  ?>
</div>

  <div id="offers_search">
      <?php echo do_shortcode('[ivory-search id="68" title="Default Search Form"]') ?>
  </div>
  </div>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12 ">
<div class="filters_box">
      <form  method="POST" action="<?php echo get_permalink(101)?>">

<div class="options_box">
  <div class="single_filter_box">
        <lebel class="main_label">Dziedzina</lebel>
        <select class="select" name='areas_value'>
        <option class="option" value="">Pokaż wszystkie</option>
        <?php create_options('areas', $_SESSION['offers_filter']['areas']); ?>
        </select>
  </div>


  <div class="single_filter_box">
        <lebel class="main_label">Forma zatrudnienia</lebel>
        <select class="select" name='forms_value'>
        <option class="option" value="">Pokaż wszystkie</option>
        <?php create_options('forms', $_SESSION['offers_filter']['forms']); ?>
        </select>
  </div>

  <div class="single_filter_box">
        <lebel class="main_label">Stanowisko</lebel>
        <select class="select" name='position_value'>
        <option class="option" value="">Pokaż wszystkie</option>
        <?php create_options('position', $_SESSION['offers_filter']['position']); ?>
        </select>
  </div>

  <div class="single_filter_box">
        <lebel class="main_label">Miejsce pracy</lebel>
        <select class="select" name='place_value'>
        <option class="option" value="">Pokaż wszystkie</option>
        <?php create_options('place', $_SESSION['offers_filter']['place']); ?>
        </select>
  </div>
</div>

      <input class="submit_button btn-std" type="submit" value="Filtruj oferty">
      </form>
      </div>
    </div>
  </div>
</div>




</section>
