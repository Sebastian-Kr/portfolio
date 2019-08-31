<?php get_header(); ?>


<div id="homepage_content_container" class="scroll_content_container">
  <img class="main-logo" src="<?php echo get_template_directory_uri() ?>/img/LOGO_WOMAI_L.png" alt="">

<div class="content_part1 arrow_hide">
  <div id="content_part1_target"></div>
  <div class="content_part_text"></div>
  <div data-target="content_part2_target" class="scroll_arrow scroll_arrow_down"></div>
</div>

<div class="content_part2 ">
  <div id="content_part2_target"></div>
<div class="content_part_text"></div>
<div data-target="content_part1_target" class="scroll_arrow scroll_arrow_top"></div>
</div>

</div>



<div class="tiles_sidebar_menu tiles_nav tiles_nav_left">
  <div id="why" class="tile_box"><?php echo __('[:en]WHY[:pl]CZEMU[:de]WARUM[:es]POR QUÉ[:ru]почему'); ?></div>
  <div id="where" class="tile_box"><?php echo __('[:en]WHERE[:pl]GDZIE[:de]WO[:es]DÓNDE[:ru]ГДЕ'); ?></div>
</div>


<div class="tiles_sidebar_menu tiles_nav tiles_nav_right">
  <div id="what" class="tile_box"><?php echo __('[:en]WHAT[:pl]CO[:de]WAS[:es]QUÉ[:ru]ЧТО'); ?></div>
  <div id="how" class="tile_box"><?php echo __('[:en]HOW[:pl]JAK[:de]WIE[:es]CÓMO[:ru]КАК'); ?></div>
</div>

  <a href="http://rezerwacja.womai.pl" id="buy_ticket" class="d-block d-md-none btn">
    <?php echo __('[:en]BUY TICKET[:pl]KUP BILET[:de]TICKET KAUFEN[:es]COMPRAR BILLETE[:ru]КУПИТЬ БИЛЕТ'); ?>
  </a>

<?php get_footer(); ?>
