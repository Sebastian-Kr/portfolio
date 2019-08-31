
  <!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
 <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
  <script src="../js/jquery.viewportchecker.min.js"></script>


          <?php wp_head(); ?> 

    </head>
    <body>
       <!--  [if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif] -->
   
 <!-- -------------------------    -->

  <script>
$(document).ready(function(){

    $('*[data-animate]').addClass('hider').each(function(){
      $(this).viewportChecker({
        classToAdd: 'show animated ' + $(this).data('animate'),
        classToRemove: 'hider',
        offset: '30%'
      });
    });
 
  });</script>

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo  home_url() ;?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Bieżnia w Twoim domu"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      <ul class="nav navbar-nav navbar-right">
    <li><a href="<?php echo  home_url() ;?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><br>HOME</a></li>
    <li><a href="<?php echo  home_url() ;?>/korzysci-z-treningu-na-biezni"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><br>KORZYŚCI</a></li>
    <li><a href="<?php echo  home_url() ;?>/wielki-test-biezni/"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span><br>TEST BIEŻNI</a></li>
    <li><a href="<?php echo  home_url() ;?>/polecane-modele-biezni/"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span><br>POLECANE MODELE</a></li>
    <li><a href="<?php echo  home_url() ;?>/plan-treningu/"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><br>PLAN TRENINGU</a></li>
    <li><a href="<?php echo home_url();?>/blog"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><br>BLOG</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div style="height:35px;"></div>