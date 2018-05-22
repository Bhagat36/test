<?php
/*
Template name: home
*/
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('name'); if(wp_title('', false)) { echo '|'; } else { echo bloginfo('description'); } wp_title(''); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php blogInfo('stylesheet_directory'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php blogInfo('stylesheet_directory'); ?>/css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><?php bloginfo('name'); if(wp_title('', false)) { echo '|'; } else { echo bloginfo('description'); } wp_title(''); ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto">
                    <?php
               $default = array(
               'theme_location' =>'header_main',
               'menu' => 'top-menu',
                'menu_class'=> "navbar-nav ml-auto",     
               'container' => 'false',
               'container_class' => '',
               'container_id' => '',
               'echo' => 'true',
               'fallback_cb' => 'wp_page_menu',
               'before' => '',
               'after' => '',
               'link_before' => '',
               'depth' => '',
               'walker' => '',
               'item_wrap' => '%3$s'
               );
               wp_nav_menu($default);
               ?>
          </ul>
        </div>
      </div>
    </nav>
