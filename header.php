<!DOCTYPE HTML>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="description" content="">
    <?php wp_head(); ?>
  </head>
  <body>
    <main>
      <section id="menu">
        <p>menu</p>
        <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
      </section>
      <section id="header">
        <p>header</p>
      </section>
