<!DOCTYPE html>
  <html <?php language_attributes(); ?>>
    <head>
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/inc/images/teachingthings_favicon.png'; ?>"/>
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/inc/images/teachingthings_favicon.png'; ?>"/>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <meta name="viewport" content="width=device-width" />
      <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
      <?php wp_body_open(); ?>
      <?php if ( is_front_page() ) : ?>
        <div id="jukebox" class="hide-tablet" onclick="modal_visibility('WhatsYourThing');">
          <img class="hover-notes" src="<?php echo get_template_directory_uri() . '/inc/images/what_your_thing_music-notes.gif'; ?>" />
          <img class="jukebox-static" src="<?php echo get_template_directory_uri() . '/inc/images/what_your_thing_jukebox.png'; ?>" alt="What's your thing?" />
        </div>
        <div class="modal" id="WhatsYourThing">
          <img class="jukebox-lyrics" src="<?php echo get_template_directory_uri() . '/inc/images/what_your_thing_jukebox_POPUP.png'; ?>" />
          <div class="modal-background" id="modalClose"></div>
        </div>
      <?php endif; ?>
        <div id="wrapper" class="hfeed">
          <header id="header" role="banner">
            <nav class="navbar" role="navigation" aria-label="main navigation">
              <div class="navbar-brand">
                <a class="navbar-item" href="<?php echo home_url(); ?>">
                  <img src="<?php echo get_template_directory_uri() . '/inc/images/TeachingThings_BRAND-logo.png'; ?>" />
                </a>
                <div id="mobileNavButton" class="navbar-mobileTrigger">
                  <span class="bar1"></span>
                  <span class="bar2"></span>
                  <span class="bar3"></span>
                </div>
              </div>
              <div id="mainNav" class="navbar-menu">
                <?php wp_nav_menu(array(
									'menu'       => 'Teaching-Things-Menu', // specify the menu name
									'menu_class' => '',
									'container'  => '',
									'items_wrap' => '<ul class="navbar-end" role="menu" >%3$s</ul>'
								));?>
              </div>
            </nav>
          </header>
        </div>
        <aside id="mobileMainNav" class="menu mobile-menu">
          <?php wp_nav_menu(array(
            'menu'       => 'Teaching-Things-Menu', // specify the menu name
            'menu_class' => '',
            'container'  => '',
            'items_wrap' => '<ul class="menu-list" role="menu" >%3$s</ul>'
          ));?>
        </aside>
