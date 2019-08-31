<div>
<?php
if (get_field('section_on_s1')){
for ($i=1; $i < 15 ; $i++) {

$is = 'section_on_s'.$i;
if (get_field($is)): ?>

<?php
// Zmienne dla jednego wykonania pętli
$section_head =  'section_head_s'.$i;
$section_exerpt = 'section_exerpt_s'.$i;
$section_alltext = 'section_alltext_s'.$i;
$section_foto = 'section_foto_s'.$i;
$foto_id = get_field($section_foto);
$foto = wp_get_attachment_image_src($foto_id, 'full');
// echo $foto[0];
?>
<?php //html dla jednej sekcji ?>

<div class="container-fluid maxw std-section"><div class="row">
<hr class="hr2 hr-margin">
<div class="col-md-4"><img src="<?php echo $foto[0] ?>" alt=""></div>
<div class="col-md-8">
<h3><?php echo the_field($section_head) ?></h3>

<div class="offer-part visual-editor ">
    <?php echo the_field($section_exerpt) ?>


      <div class="offer-head offer-head-open" data-panelid="<?php echo 'panel'.$i ?>"></div>
        <div id="<?php echo 'panel'.$i ?>" class="offer-dest"><?php echo the_field($section_alltext) ?></div>
</div>

</div>

</div>
</div>


<?php //html dla jednej sekcji - koniec?>
<?php endif; ?>

<?php }?>
<div class="b62"></div>
<?php }?>
</div>
