<?php /*Template Name: Dodaj ogłoszenie*/?>

<?php get_header(); ?>


<section style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')" class="employer_list_search_header">
<div class="container">
<div class="row">
<div class="col-md-12 content_box">
  <?php get_template_part('content', 'main_content');?>
</div>

</div></div>
</section>

<section>

  <div class="container text-center"><div class="row">
    <div class="col-md-12">
      <!-- BEGIN Podio web form -->

      <script src="https://podio.com/webforms/21965833/1536679.js"></script>

      <script type="text/javascript">

        _podioWebForm.render("1536679")

      </script>

      <noscript>

        <a href="https://podio.com/webforms/21965833/1536679" target="_blank">Please fill out the form</a>

      </noscript>

        <div class="podio-webform-container">

        A webform by Podio - <a href="https://podio.com" class="podio-webform-inner" rel="nofollow">click here</a> to get yours

        </div>

      <!-- END Podio web form -->
    </div>
  </div></div>

</section>
  <?php get_footer(); ?>
