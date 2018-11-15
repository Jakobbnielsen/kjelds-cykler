<!DOCTYPE HTML>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?></title>
    <meta name="description" content="">
    <?php wp_head(); ?>
  </head>
  <body>
    <main>
      <header id="menu">
        <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
      </header>
      <section id="banner">
        <p>header</p>
      </section>
