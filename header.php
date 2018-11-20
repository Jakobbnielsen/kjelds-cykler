<!DOCTYPE HTML>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?></title>
    <meta name="description" content="">
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
    <main>
      <header>
        <div id="menu"></div>
        <div class="logo">
          <a href="<?php echo home_url(); ?>"><img src="http://localhost:8888/wordpress/wp-content/uploads/2018/11/logo.png" alt="Logo"></a>
        </div>
        <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
      </header>
