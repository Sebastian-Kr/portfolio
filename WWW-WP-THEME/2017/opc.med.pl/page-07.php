<?php
/*
Template Name: 07 Lista galerii
*/
?>





<?php get_header(); ?>
<?php get_template_part( 'content', 'header' );?>
<?php get_template_part( 'content', 'baner' );?>


  <section class="bg1">
            <div class="container-fluid section-item">
            <div class="row">


                <div class="col-sm-6 col-md-4 el-item">
                   <?php if (get_field('kafelek_1_ikona_nfz')): ?>
                    <img class="nfz" src="<?php echo get_template_directory_uri();?>/img/nfz.png">
                    <?php endif; ?>

                  <a href="<?php the_field('k1_link'); ?>" >

                   <div class="plus-item" style="background-image: url('<?php the_field('k1_foto'); ?>')"></div>
                    <div class="title-item"><img src="<?php echo get_template_directory_uri();?>/img/plus.png"><?php the_field('k1_title'); ?></div> </a>
                </div>


                <?php if (!(get_field('k2_hide'))): ?>


                <div class="col-sm-6 col-md-4 el-item">
                   <?php if (get_field('kafelek_2_ikona_nfz')): ?>
                    <img class="nfz" src="<?php echo get_template_directory_uri();?>/img/nfz.png">
                    <?php endif; ?>

                  <a href="<?php the_field('k2_link'); ?>" >

                   <div class="plus-item" style="background-image: url('<?php the_field('k2_foto'); ?>')"></div>
                    <div class="title-item"><img src="<?php echo get_template_directory_uri();?>/img/plus.png"><?php the_field('k2_title'); ?></div> </a>
                </div>


<?php endif ?>

<?php if (!(get_field('k3_hide'))): ?>

                <div class="col-sm-6 col-md-4 el-item">
                   <?php if (get_field('kafelek_3_ikona_nfz')): ?>
                    <img class="nfz" src="<?php echo get_template_directory_uri();?>/img/nfz.png">
                    <?php endif; ?>

                  <a href="<?php the_field('k3_link'); ?>" >

                   <div class="plus-item" style="background-image: url('<?php the_field('k3_foto'); ?>')"></div>
                    <div class="title-item"><img src="<?php echo get_template_directory_uri();?>/img/plus.png"><?php the_field('k3_title'); ?></div> </a>
                </div>


<?php endif ?>

<?php if (!(get_field('k4_hide'))): ?>
                <div class="col-sm-6 col-md-4 el-item">
                   <?php if (get_field('kafelek_4_ikona_nfz')): ?>
                    <img class="nfz" src="<?php echo get_template_directory_uri();?>/img/nfz.png">
                    <?php endif; ?>

                  <a href="<?php the_field('k4_link'); ?>" >

                   <div class="plus-item" style="background-image: url('<?php the_field('k4_foto'); ?>')"></div>
                    <div class="title-item"><img src="<?php echo get_template_directory_uri();?>/img/plus.png"><?php the_field('k4_title'); ?></div> </a>
                </div>
<?php endif ?>

<?php if (!(get_field('k5_hide'))): ?>


                <div class="col-sm-6 col-md-4 el-item">
                   <?php if (get_field('kafelek_5_ikona_nfz')): ?>
                    <img class="nfz" src="<?php echo get_template_directory_uri();?>/img/nfz.png">
                    <?php endif; ?>

                  <a href="<?php the_field('k5_link'); ?>" >

                   <div class="plus-item" style="background-image: url('<?php the_field('k5_foto'); ?>')"></div>
                    <div class="title-item"><img src="<?php echo get_template_directory_uri();?>/img/plus.png"><?php the_field('k5_title'); ?></div> </a>
                </div>

<?php endif ?>

<?php if (!(get_field('k6_hide'))): ?>

                <div class="col-sm-6 col-md-4 el-item">
                   <?php if (get_field('kafelek_6_ikona_nfz')): ?>
                    <img class="nfz" src="<?php echo get_template_directory_uri();?>/img/nfz.png">
                    <?php endif; ?>

                  <a href="<?php the_field('k6_link'); ?>" >

                   <div class="plus-item" style="background-image: url('<?php the_field('k6_foto'); ?>')"></div>
                    <div class="title-item"><img src="<?php echo get_template_directory_uri();?>/img/plus.png"><?php the_field('k6_title'); ?></div> </a>
                </div>

<?php endif ?>


<?php if (!(get_field('k7_hide'))): ?>

                <div class="col-sm-6 col-md-4 el-item">
                   <?php if (get_field('kafelek_7_ikona_nfz')): ?>
                    <img class="nfz" src="<?php echo get_template_directory_uri();?>/img/nfz.png">
                    <?php endif; ?>

                  <a href="<?php the_field('k7_link'); ?>" >

                   <div class="plus-item" style="background-image: url('<?php the_field('k7_foto'); ?>')"></div>
                    <div class="title-item"><img src="<?php echo get_template_directory_uri();?>/img/plus.png"><?php the_field('k7_title'); ?></div> </a>
                </div>

<?php endif ?>


<?php if (!(get_field('k8_hide'))): ?>

                <div class="col-sm-6 col-md-4 el-item">
                   <?php if (get_field('kafelek_8_ikona_nfz')): ?>
                    <img class="nfz" src="<?php echo get_template_directory_uri();?>/img/nfz.png">
                    <?php endif; ?>

                  <a href="<?php the_field('k8_link'); ?>" >

                   <div class="plus-item" style="background-image: url('<?php the_field('k8_foto'); ?>')"></div>
                    <div class="title-item"><img src="<?php echo get_template_directory_uri();?>/img/plus.png"><?php the_field('k8_title'); ?></div> </a>
                </div>

<?php endif ?>

<?php if (!(get_field('k9_hide'))): ?>

                <div class="col-sm-6 col-md-4 el-item">
                   <?php if (get_field('kafelek_9_ikona_nfz')): ?>
                    <img class="nfz" src="<?php echo get_template_directory_uri();?>/img/nfz.png">
                    <?php endif; ?>

                  <a href="<?php the_field('k9_link'); ?>" >

                   <div class="plus-item" style="background-image: url('<?php the_field('k9_foto'); ?>')"></div>
                    <div class="title-item"><img src="<?php echo get_template_directory_uri();?>/img/plus.png"><?php the_field('k9_title'); ?></div> </a>
                </div>

<?php endif ?>






            </div>



            </div>
        </section>

<?php get_footer(); ?>
