


<footer id="prgrm-footer" class="">
  <div class="social_media_box">
    <a target="_blank" class="social_icon facebook_icon" href="<?php the_field('facebook_link', 6)?>"></a>
    <a target="_blank" class="social_icon twitter_icon" href="<?php the_field('twitter_link', 6)?>"></a>
    <a target="_blank" class="social_icon instagram_icon" href="<?php the_field('instagram_link', 6)?>"></a>
    <a target="_blank" class="social_icon linkedin_icon" href="<?php the_field('linkedin_link', 6)?>"></a>
    <a target="_blank" class="social_icon youtube_icon" href="<?php the_field('youtube_link', 6)?>"></a>
  </div>


<div class="container-fluid">
<div class="row">
<div class="col-lg-4 footer_copyright">
  <div>copyright © 2019 by womai</div>
</div>

<div class="col-lg-4 footer_menu <?php if (is_home()) {echo 'tiles_nav';} ?>">
  <a  href="<?php echo home_url()?>">HOME</a>
  |
  <a id="why" class="tile_box" href="<?php echo home_url()?>/#why"><?php echo __('[:en]WHY[:pl]CZEMU[:de]WARUM[:es]POR QUÉ[:ru]почему'); ?></a>
  |
  <a id="what" class="tile_box" href="<?php echo home_url()?>/#what"><?php echo __('[:en]WHAT[:pl]CO[:de]WAS[:es]QUÉ[:ru]ЧТО'); ?></a>
  |
  <a id="where" class="tile_box" href="<?php echo home_url()?>/#where"><?php echo __('[:en]WHERE[:pl]GDZIE[:de]WO[:es]DÓNDE[:ru]ГДЕ'); ?></a>
  |
  <a id="how" class="tile_box" href="<?php echo home_url()?>/#how"><?php echo __('[:en]HOW[:pl]JAK[:de]WIE[:es]CÓMO[:ru]КАК'); ?></a>
  |
  <a id="blog" class="tile_box" href="<?php echo get_permalink(51) ?>"><?php echo __('[:en]BLOG[:pl]BLOG[:de]BLOG[:es]BLOG[:ru]БЛОГ'); ?></a>
</div>

<!-- <div class="col-lg-4 footer_author">

    <a href="https://emiliawojcik.pl">Design by Art-e.pl</a>
    |
    <a href="https://progremo.pl">Powered by Progremo.pl</a>

</div> -->



</div>
</div>


<?php if (get_field('cookies_module_active', 6)): ?>
  <div id="cookies_box">
    <div class="cookies_content">
      <?php the_field('cookies_text', 6)?>
    </div>
    <div class="cookies_close"></div>
  </div>
<?php endif; ?>

</footer>


<?php wp_footer(); ?>
<!-- <script  src="http://localhost:35729/livereload.js"></script> -->
</body>
</html>
