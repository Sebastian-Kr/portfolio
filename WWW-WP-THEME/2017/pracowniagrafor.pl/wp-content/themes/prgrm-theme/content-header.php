

<section id="header">

    <div class="bgheader"></div>




<div class="container caption">
<div class="row"><div class="col-lg-12">
  <h1 class="dum">
    <?php if (in_category('nasze-kursy')) {echo get_the_title(8);} elseif (in_category('blog')) {echo get_the_title(673);}  else {echo get_the_title();}?>

  </h1>
  <h5 class="dum">
    <?php if (in_category('nasze-kursy')) {echo the_field('progremo_subtitle_nk1', 8);}
    elseif (in_category('blog')) {echo the_field('progremo_subtitle_nk1', 673);}
    else {echo the_field('progremo_subtitle_nk1');}?>
  </h5>
</div></div>
</div>
</section>
