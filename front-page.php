<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Kjelds Cykler
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<section id="banner">
  <div class="banner-btn">
    <button id="banner-btn">Byt til nyt</button>
  </div>
</section>
<section id="spotlight">
  <div class="">
    <p>Spotlight cykel 1zzzzz</p>
  </div>
  <div class="">
    <p>Spotlight cykel 2</p>
  </div>
  <div class="">
    <p>Spotlight cykel 3</p>
  </div>
  <div class="">
    <p>Spotlight cykel 4</p>
  </div>
</section>
<section id="values">
  <div class="">
    <div id="value-icon1" class="value-icon"></div>
    <h4>Faglig stolthed</h4>
    <p>The new editor will be enabled by default in the next major release of WordPress. If you’re not sure how compatible your current themes and plugins are, we’ve got you covered.</p>
  </div>
  <div class="">
    <div id="value-icon1" class="value-icon"></div>
    <h4>Faglig stolthed</h4>
    <p>The new editor will be enabled by default in the next major release of WordPress. If you’re not sure how compatible your current themes and plugins are, we’ve got you covered.</p>
  </div>
  <div class="">
    <div id="value-icon1" class="value-icon"></div>
    <h4>Faglig stolthed</h4>
    <p>The new editor will be enabled by default in the next major release of WordPress. If you’re not sure how compatible your current themes and plugins are, we’ve got you covered.</p>
  </div>
</section>
<section id="personal">
  <div class="info">
    <div class="">
      <img src="http://localhost:8888/wordpress/wp-content/uploads/2018/11/staff.png">
    </div>
    <div class="infotext">
      <h2>Din personlige cykelhandler</h2>
      <h4>Overskrift 1</h4>
      <p>The new editor will be enabled by default in the next major release of WordPress. If you’re not sure how compatible your current themes and plugins are, we’ve got you covered.</p>
      <h4>Overskrift 2</h4>
      <p>The new editor will be enabled by default in the next major release of WordPress. If you’re not sure how compatible your current themes and plugins are, we’ve got you covered.</p>
    </div>
  </div>
  <div class="videos">
    <div class="">
      <p>Video 1</p>
    </div>
    <div class="">
      <p>Video 2</p>
    </div>
    <div class="">
      <p>Video 3</p>
    </div>
  </div>
  <div class="fb-link">
    <div class="">
      <p>Knap til FB side</p>
    </div>
  </div>
</section>
<section id="instagram">
  <div class="insta-feed">
      <p>instagram feed</p>
  </div>
  <div class="insta-btn">
      <p>instagram knap</p>
  </div>
</section>


<?php get_footer(); ?>
