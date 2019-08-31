<div id="navigation-container">
<!-- =============MAIN MENU ============== -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">


<a class="navbar-brand" href="<?php echo get_permalink(2) ?>">
    <img src="<?php echo get_template_directory_uri() ?>/img/logo-menu.png" alt="">
  </a>


  <div id="nav-icon2">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  </div>

  <div class="collapse navbar-collapse" id="navbarNav">


<?wp_nav_menu( array(
  'menu_class' => 'open-menu nav',
  'menu_id' => 'menu-menu-glowne',

) ); ?>

</div>
<div id="gtranslate">

  <?php
  // echo do_shortcode('[gtranslate]');
  ?>
  <!-- GTranslate: https://gtranslate.io/ -->
  <a href="#" onclick="doGTranslate('pl|pl');return false;" title="Polski" class="glink nturl notranslate">
    <img src="http://talent.bio/wp-content/plugins/gtranslate/flags/24/pl.png" height="24" width="24" alt="Polski" />
  </a>
    <a href="#" onclick="doGTranslate('pl|en');return false;" title="English" class="glink nturl notranslate">
      <img src="http://talent.bio/wp-content/plugins/gtranslate/flags/24/en.png" height="24" width="24" alt="English" /></a>

      <style type="text/css">
  #goog-gt-tt {display:none !important;}
  .goog-te-banner-frame {display:none !important;}
  .goog-te-menu-value:hover {text-decoration:none !important;}
  .goog-text-highlight {background-color:transparent !important;box-shadow:none !important;}
  body {top:0 !important;}
  #google_translate_element2 {display:none!important;}
  </style>

  <div id="google_translate_element2"></div>
  <script type="text/javascript">
  function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'pl',autoDisplay: false}, 'google_translate_element2');}
  </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


  <script type="text/javascript">
  function GTranslateGetCurrentLang() {var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;}
  function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}
  function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(/goog-te-combo/.test(sel[i].className)){teCombo=sel[i];break;}if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
  </script>



</div>
</nav>
</div>
