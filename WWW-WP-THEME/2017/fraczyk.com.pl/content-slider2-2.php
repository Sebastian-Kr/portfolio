<div>



     <div   id="main-slider2-2" class="carousel slide" data-ride="carousel">
       <!-- Indicators -->
       <ol class="carousel-indicators">
         <li data-target="#main-slider2-2" data-slide-to="0" class="active"></li>
         <?php if (get_field('pcf-ref-7')) :?>
          <li data-target="#main-slider2-2" data-slide-to="1"></li>
        <?php endif;?>

        <?php if (get_field('pcf-ref-13')) :?>
         <li data-target="#main-slider2-2" data-slide-to="2"></li>

<?php endif;?>
       </ol>
       <div class="carousel-inner" role="listbox">

         <div class="item active">
             <div id="partners">
           <div class="img-table">

           <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-1'), array('auto', '300')); ?></div>
           <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-2'), array('auto', '300')); ?></div>
           <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-3'), array('auto', '300')); ?></div>
           <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-4'), array('auto', '300')); ?></div>
           <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-5'), array('auto', '300')); ?></div>
           <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-6'), array('auto', '300')); ?></div>
           </div>
           </div>
         </div>


<?php if (get_field('pcf-ref-7')) :?>

         <div class="item">
             <div id="partners">
               <div class="img-table">

               <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-7'), array('auto', '300')); ?></div>
               <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-8'), array('auto', '300')); ?></div>
               <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-9'), array('auto', '300')); ?></div>
               <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-10'), array('auto', '300')); ?></div>
               <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-11'), array('auto', '300')); ?></div>
               <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-12'), array('auto', '300')); ?></div>
               </div>
           </div>
         </div>
<?php endif;?>

<?php if (get_field('pcf-ref-13')) :?>
         <div class="item">
             <div id="partners">
               <div class="img-table">

               <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-13'), array('auto', '300')); ?></div>
               <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-14'), array('auto', '300')); ?></div>
               <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-15'), array('auto', '300')); ?></div>
               <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-16'), array('auto', '300')); ?></div>
               <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-17'), array('auto', '300')); ?></div>
               <div class="ref"><?php echo wp_get_attachment_image(get_field('pcf-ref-18'), array('auto', '300')); ?></div>
               </div>
           </div>
         </div>

<?php endif;?>

       </div>
<!-- end slider container -->
     </div>
</div>
