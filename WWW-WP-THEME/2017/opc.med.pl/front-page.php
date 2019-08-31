<?php get_header(); ?>


<div class="main-fold">

   <div id="main-bg">

        <section id="front-header">

              <div id="wrapper" class="active" >


    <div id="sidebar-wrapper">
        <div class="container-fluid">
         <div class="row">
                      <nav id="spy menu-menu-glowne" class="nav">
                       <a id="home-menu-logo" class="header-logo" href="<?php echo home_url(); ?>">
                    <div class="logo2"></div>

                </a>

                <ul class="sidebar-nav navbar-nav nav ">
                    <li class="sidebar-brand">
                        <a href="<?php echo home_url() ?>"><span class="fa fa-home solo">Home</span></a>
                    </li>
                    <li>
                        <a href="<?php echo home_url() ?>/wydarzenia" data-scroll>
                            <span class="fa fa-anchor solo">Wydarzenia</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url() ?>/o-nas" data-scroll>
                            <span class="fa fa-anchor solo">O Nas</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url() ?>/galerie" data-scroll>
                            <span class="fa fa-anchor solo">Galerie</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url() ?>/interaktywna-mapa-polski" data-scroll>
                            <span class="fa fa-anchor solo">Interaktywna mapa Polski</span>
                        </a>
                    </li>
                    <li id="menu-item-380">
                            <a href="javascript:void();" data-scroll onclick="scroll_to('#kontakt-hook');"><span class="fa fa-anchor solo">Kontakt</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    </div>




    <div class="content-header">
        <h1 id="hsome">
        <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
            <i class="fa fa-bars"></i>
        </a>
        </h1>
        <a class="header-logo" href="<?php echo home_url(); ?>">
            <div class="logo"></div>

        </a>
    </div>

    <div class="hr hr1 hr-hidden">
    <div></div>
</div>
<!-- end  -->
</div>

<!--END NAWIGATION-->



            <div class="container-fluid" >
                <div class="row">
                    <div class="col-md-6">
                        <div class="front-logo"></div>
                        <div class="tagline">
                            <?php the_field('content1'); ?>
                        </div>
                    </div>
                    <div class="col-md-6"></div>

                    <div class="col-md-6"></div>

                </div>
            </div>




             <div id="sublogo-container" >


                            <div class="sublogo"> <embed src="<?php echo get_template_directory_uri();?>/img/krew24-logo.svg" type="image/svg+xml" /></embed>
                            </div>


                            <div class="sublogo">
                            <embed  src="<?php echo get_template_directory_uri();?>/img/ambulans24-logo.svg" type="image/svg+xml" /></embed>
                            </div>

                            <div class="sublogo">
                            <embed  src="<?php echo get_template_directory_uri();?>/img/wizytydomowe24-logo.svg" type="image/svg+xml" /></embed>
                            </div>

                            <div class="sublogo">
                            <embed  src="<?php echo get_template_directory_uri();?>/img/ambulatorium24-logo.svg" type="image/svg+xml" /></embed>
                            </div>





                        </div>
        </section >

        <div class="hr">
            <div>

        </div>
        </div>
        </div>
        <!-- end main background -->

          <!-- BREADCRUMBS -->
          <div style="display: none;">
<?php
$reset=true;
    function seb_reset_variable()
    {
            $_SESSION['breadcrumb']=null;
    }


seb_reset_variable(); // dopisek seba
$trail = new Breadcrumb();
$output=$trail->add( get_the_title(), get_permalink());

echo $output;
?>

</div>
<!-- END BREADCRUMBS -->
        <div class="container-fluid">

        <div class="section-item front-item row">

                    <div class="col-md-4 ">
                        <a href="<?php the_field('k1-link'); ?>"><div class="plus-item" style="background-image: url('<?php the_field('k1-foto'); ?>')"></div>
                        <div class="title-item"><img src="<?php echo get_template_directory_uri();?>/img/plus.png"><?php the_field('k1-title'); ?></div></a>
                    </div>
                    <div class="col-md-4 ">
                        <a href="<?php the_field('k2-link'); ?>"><div class="plus-item" style="background-image: url('<?php the_field('k2-foto'); ?>')"></div>
                        <div class="title-item"><img src="<?php echo get_template_directory_uri();?>/img/plus.png"><?php the_field('k2-title'); ?></div></a>
                    </div>
                    <div class="col-md-4">

                        <a href="<?php the_field('k3-link'); ?>"><div class="plus-item" style="background-image: url('<?php the_field('k3-foto'); ?>')"></div>
                        <div class="title-item"><img src="<?php echo get_template_directory_uri();?>/img/plus.png"><?php the_field('k3-title'); ?></div></a>
                    </div>

            </div>
            </div>

</div>
<!-- end main-fold -->

            <section class="bg1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 center">
                            <?php the_field('content2'); ?>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>

            </section>



            <?php get_footer(); ?>
