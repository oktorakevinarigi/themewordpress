<?php
// The default header file
global $themeurl;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Oktora Kevin Arigi</title>
    <?php wp_head(); ?>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="1">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="<?php echo home_url(); ?>" style="padding:0; padding-left:40px; padding-right:40px;" >
            <div class="row">
              <div class="col-xs-4 col-sm-4 col-md-4" style="padding-bottom:0">
                <img src="<?php echo get_stylesheet_directory_uri();?>/asset/img/logo-atom.png" alt="" style="max-width:50px; max-height:50px; margin:0; padding:0;" />
              </div>
              <div class="col-xs-8 col-sm-8 col-md-8" style="padding-top:15px; padding-right:0; ">
                <?php bloginfo('name'); ?>
              </div>
            </div>


          </a>
        </div>
    <?php
            wp_nav_menu( array(
                'menu'              => 'menu-utama',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
      </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <!-- <img src="http://placehold.it/1350x677"> -->
        <img src="<?php echo get_stylesheet_directory_uri();?>/asset/img/4.jpg" alt="New York" style="max-height:678px; width:100%;">
        <div class="carousel-caption">
          <h3>Yogyakarta</h3>
          <p>Bukit Paralayang</p>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo get_stylesheet_directory_uri();?>/asset/img/2.jpg" alt="Chicago" style="max-height:678px; width:100%;">
        <div class="carousel-caption">
          <h3>Yogyakarta</h3>
          <p>Pantai Pok Tunggal</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
