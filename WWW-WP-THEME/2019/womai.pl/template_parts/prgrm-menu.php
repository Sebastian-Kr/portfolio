<div id="top_menu_box">

<div class="sidebox_left">


  <a class="icon home_icon" href="<?php echo home_url() ?>"></a>
  <a class="icon blog_icon" href="<?php echo get_permalink(51) ?>"></a>
  <div class="lang-box toggler_icon">
      <div id="lang"><?php if ( function_exists ( 'wpm_language_switcher' ) ) wpm_language_switcher (); ?></div>
  </div>
</div>

  <div class="menu_logo">
    <a href="<?php echo home_url() ?>">
      <img src="<?php echo get_template_directory_uri() ?>/img/LOGO_WOMAI_S.png" alt="">
    </a>
  </div>

<div class=" sidebox_right">

  <?php if (is_home()): ?>
    <a href="http://rezerwacja.womai.pl" id="buy_ticket" class="btn">
      <?php echo __('[:en]BUY TICKET[:pl]KUP BILET[:de]TICKET KAUFEN[:es]COMPRAR BILLETE[:ru]КУПИТЬ БИЛЕТ'); ?>
    </a>
  <?php endif; ?>

  <?php if (is_page(51)): ?>
    <?php  echo get_template_part( 'content', 'blogSubmenu' ) ?>
  <?php endif; ?>

  <?php if (is_single()): ?>
    <a href="<?php echo get_permalink(51); ?>"
     style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/BACK_GRAY.png')"
     class="icon" id="back_arrow"></a>
  <?php endif; ?>

</div>

</div>
