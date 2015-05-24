<?php use Roots\Sage\Nav\NavWalker; ?>

<header class="banner navbar navbar-default navbar-static-top header800" role="banner">
  <div class="container mainWidth">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        
    <div id = "sm-header">   
        <div id="sm-logo">
      <a href="<?= esc_url(home_url('/')); ?>"><img src="http://wp:8888/wp-content/uploads/2015/05/studio_logo1.png"></a>
        </div>    
   
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
        </div>
   <?php /* wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); */ ?>
  </div>
</header>
