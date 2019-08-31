<?php /*Template Name: Program*/?>

<?php get_header(); ?>
<?php get_template_part( 'special_modules/prgrm', 'main' );?>


<section class="header_text">
  <div class="container"><div class="row">
    <div class=" col-lg-12">
      <h1><?php the_title() ?></h1>
    </div>
  </div></div>
</section>

    <section>
<div class="container"><div class="row">
  <div class="col-md-12">
    <div class="legend_box">
      <p><?php echo __('[:pl]Kiedy[:en]When'); ?>?</p>
      <p><?php echo __('[:pl]Jaki spektakl[:en]What spectacle'); ?></p>
      <p><?php echo __('[:pl]Gdzie[:en]Where'); ?>?</p>
      <p><?php echo __('[:pl]Bilety[:en]Tickets'); ?></p>
    </div>
  </div>
<div class="col-md-12">

  <?php if ( have_rows('program_loop') ): ?>
      <?php while ( have_rows('program_loop') ) : the_row();
       $id = get_sub_field('program_loop_spektakl');
      ?>

        <div class="program_item_box">
          <div class="time_box">
            <h3><?php the_sub_field('program_loop_day')?></h3>
            <div>
              <p><?php the_sub_field('program_loop_month')?></p>
              <p><?php the_sub_field('program_loop_hour')?></p>
            </div>
          </div>
            <a href="<?php echo get_permalink($id) ?>" class="foto_box hover_zoom_box">
                <div class="hover_zoom_bg" style="background-image: url('<?php echo get_the_post_thumbnail_url($id); ?>')"></div>
            </a>


          <div class="title_box">
  <a href="<?php echo get_permalink($id) ?>">
            <strong><?php echo get_the_title($id)?></strong>
            <p><?php the_field('subtitle', $id)?></p>
</a>
          </div>

          <div class="address_box">

              <?php the_field('address', $id)?>

          </div>

          <div class="price_box">
            <strong><?php echo __('[:pl]Bilet:[:en]Ticket:'); ?> <?php the_sub_field('program_loop_price')?></strong>
            <a target="blank"  href="<?php the_sub_field('program_loop_link')?>">
              <div class="btn_orange"><?php echo __('[:pl]KUP BILET[:en]BUY A TICKET'); ?></div>
            </a>
          </div>
        </div>


      <?php endwhile; ?>
  <?php endif; ?>
</div></div></div>

<div class="container mt50">
  <div class="row">
    <div class="col-md-4 text-sm-center text-md-left"><?php the_field('add_contentbox1')?></div>
    <div class="col-md-4 text-sm-center text-md-left"><?php the_field('add_contentbox2')?></div>
    <div class="col-md-4 text-sm-center text-md-left"><?php the_field('add_contentbox3')?></div>
  </div>
</div>

    </section>




  <?php get_footer(); ?>
