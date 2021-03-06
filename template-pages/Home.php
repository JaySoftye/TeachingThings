<?php
/**
 * Template Name: Home Page
 * The template for the Home Page
 */
?>

<!DOCTYPE html>
  <html <?php language_attributes(); ?>>
    <head>
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/inc/images/teachingthings_favicon.png'; ?>"/>
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/inc/images/teachingthings_favicon.png'; ?>"/>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <meta name="viewport" content="width=device-width" />
      <?php wp_head(); ?>
    </head>

    <body class="home blog logged-in wp-embed-responsive">
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


	<div id="intro-content">
    <div class="wrap-container middle"></div>
    <object type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/inc/images/page-tear_bottom-position-black.svg'; ?>" class="page-tear bottom"></object>
  </div>
  <main id="main-content" class="black-background" role="main">
    <div class="container padding-bottom">
      <div class="columns is-centered">
        <div class="column">
          <h1 class="headline purple-text has-text-centered">Teaching Things</h1>
          <h5 class="white-text has-text-centered">We bring our joy for hands-on, experiential education to the entire learning community. Our services include project-based learning pathways that inspire infectious creativity, a robust library of online learning courses & micro-credentialing, and onsite/virtual professional learning.</h5>
        </div>
      </div>
    </div>
	<div class="build-learn-deliver">
		<object type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/inc/images/page-tear_top-position-black.svg'; ?>" class="page-tear"></object>
		<img class="page-bottom left" src="<?php echo get_template_directory_uri() . '/inc/images/teachingthings_lightbulbhotairballoon.png'; ?>" />
		<img class="page-bottom right" src="<?php echo get_template_directory_uri() . '/inc/images/teachingthings_missiontomars.png'; ?>" />
		<div class="container">
			<div class="columns">
				<div class="column is-one-third">
					<h2>Build</h2>
					<div class="content-card">
						<object type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/inc/images/iBlocks.svg'; ?>"></object>
						<p>With iBlocks, we create project-based learning activities that center on the engineering design process and inspire critical thinking, next-level creative skills, and get students learning STEAM hands-on.</p>
						<h5 class="has-text-centered margin-bottom"><a href="/build/" class="button-pill blue">Learn More</a></h5>
					</div>
				</div>
				<div class="column is-one-third">
					<h2>Learn</h2>
					<div class="content-card">
						<object type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/inc/images/OTIS-for-educators.svg'; ?>"></object>
						<p>Our staff of state-certified classroom teachers will help you continue learning for the 21st century classroom with courses, micro-credentials, and more on OTIS for educators, our online PD platform.</p>
						<h5 class="has-text-centered margin-bottom"><a href="/learn/" class="button-pill purple">Learn More</a></h5>
					</div>
				</div>
				<div class="column is-one-third">
					<h2>Deliver</h2>
					<div class="content-card">
						<object type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/inc/images/Onsite-Professional-Development.svg'; ?>"></object>
						<p>We deliver virtual and in-person training that???s personalized for the unique needs of teachers, administrators, schools, and districts so they can deliver meaningful learning to students.</p>
						<h5 class="has-text-centered margin-bottom"><a href="/deliver/" class="button-pill green">Learn More</a></h5>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="columns is-centered padding-top padding-bottom">
				<div class="column is-10">
					<h3 class="headline green-text has-text-centered">Transforming teaching and learning through ingenious real-world experiences that prepare today???s students for tomorrow???s world.</h3>
				</div>
			</div>
		</div>
	</div>
</main>

  <footer id="footer" role="contentinfo">
    <div class="container">
      <div class="columns is-centered is-multiline">
        <div class="column is-3">
          <asid class="menu">
            <ul class="menu-list footer">
              <li class="headline">Teaching Things<sup>TM</sup></li>
              <li>7 Norden Lane</li>
              <li>Huntington Station, NY 11746</li>
              <li>(844)414-1851</li>
              <li><a href="mailto:info@teachingthings.com">info@teachingthings.com</a></li>
              <li><a href="<?php echo home_url(); ?>">Teachingthings.com</a></li>
            </ul>
          </aside>
        </div>
        <div class="column is-half">
          <div class="footer">
            <div class="columns is-vcentered mwbe">
              <div class="column is-2-mobile is-2">
                <img src="<?php echo get_template_directory_uri() . '/inc/images/mwbe_badge.svg'; ?>" alt="Minority Women Own Business" />
              </div>
              <div class="column"><span class="small-text">As a Minority - and Women-Owned Business Enterprise (MWBE), diversity is not only important to us ??? it???s who we are.</span> <a href>LEARN MORE</a></div>
            </div>
          </div>
        </div>
        <div class="column is-8-mobile">
          <asid class="menu">
            <div class="footer">
              <svg version="1.1" viewBox="0 0 396 164.8">
          <a href="https://www.facebook.com/myTeq/">
          	<path d="M40.33,8.902c-15.453,0-27.982,12.529-27.982,27.982c0,15.456,12.529,27.982,27.982,27.982 c15.454,0,27.982-12.525,27.982-27.982C68.312,21.431,55.784,8.902,40.33,8.902z M46.325,36.894h-3.921c0,6.264,0,13.98,0,13.98 h-5.81c0,0,0-7.637,0-13.98h-2.763v-4.939h2.763v-3.197c0-2.289,1.086-5.865,5.863-5.865l4.304,0.017v4.796c0,0-2.616,0-3.124,0 c-0.509,0-1.233,0.253-1.233,1.346v2.903h4.43L46.325,36.894z"/>
          </a>
          <a href="https://twitter.com/OTIS4educators">
          	<path d="M113.933,8.902c-15.453,0-27.982,12.529-27.982,27.982c0,15.456,12.529,27.982,27.982,27.982s27.982-12.525,27.982-27.982 C141.916,21.431,129.386,8.902,113.933,8.902z M125.06,31.18c0.012,0.246,0.017,0.492,0.017,0.741 c0,7.586-5.774,16.334-16.334,16.334c-3.243,0-6.259-0.95-8.801-2.579c0.451,0.051,0.907,0.079,1.37,0.079 c2.692,0,5.165-0.915,7.129-2.456c-2.511-0.048-4.632-1.708-5.361-3.986c0.35,0.065,0.709,0.102,1.079,0.102 c0.524,0,1.032-0.072,1.512-0.201c-2.623-0.53-4.604-2.849-4.604-5.629c0-0.024,0-0.048,0-0.072c0.775,0.43,1.66,0.687,2.601,0.717 c-1.541-1.028-2.553-2.787-2.553-4.779c0-1.052,0.284-2.039,0.777-2.886c2.83,3.474,7.062,5.759,11.832,5.998 c-0.097-0.42-0.149-0.857-0.149-1.308c0-3.17,2.57-5.738,5.742-5.738c1.65,0,3.143,0.697,4.189,1.81 c1.307-0.256,2.536-0.734,3.646-1.394c-0.43,1.342-1.339,2.466-2.524,3.177c1.161-0.137,2.268-0.447,3.296-0.902 C127.155,29.359,126.183,30.37,125.06,31.18z"/>
          </a>
          <a href="https://www.linkedin.com/company/teq/">
          	<path d="M189.213,34.828V34.77c-0.01,0.02-0.026,0.041-0.039,0.058H189.213z"/>
          	<path d="M187.536,8.902c-15.454,0-27.982,12.529-27.982,27.982c0,15.456,12.527,27.982,27.982,27.982 c15.453,0,27.982-12.525,27.982-27.982C215.518,21.431,202.989,8.902,187.536,8.902z M179.899,50.257h-6V32.215h6V50.257z M176.898,29.749h-0.039c-2.012,0-3.313-1.387-3.313-3.119c0-1.769,1.342-3.119,3.392-3.119c2.053,0,3.317,1.349,3.354,3.119 C180.291,28.362,178.991,29.749,176.898,29.749z M201.527,50.257h-5.998v-9.653c0-2.425-0.868-4.082-3.04-4.082 c-1.655,0-2.644,1.12-3.077,2.196c-0.159,0.386-0.198,0.919-0.198,1.462v10.076h-5.996c0,0,0.077-16.351,0-18.042h5.996v2.555 c0.799-1.233,2.224-2.979,5.407-2.979c3.945,0,6.907,2.576,6.907,8.119v10.348H201.527z"/>
          </a>
          <a href="https://www.instagram.com/edteq/">
          	<path d="M268.975,25.182c-3.818-0.005-7.637-0.004-11.455,0.001c-0.913,0.001-1.834-0.04-2.737,0.061 c-2.506,0.28-4.301,2.314-4.304,4.819c-0.007,4.55-0.008,9.101,0.001,13.651c0.005,2.715,2.168,4.868,4.887,4.872 c4.529,0.006,9.059,0.006,13.588,0c2.778-0.004,4.917-2.147,4.925-4.927c0.006-2.255,0.001-4.51,0.001-6.765 c0-2.265,0.004-4.53-0.001-6.795C273.873,27.343,271.724,25.186,268.975,25.182z M262.04,43.724 c-3.603-0.051-6.686-3.132-6.688-6.802c-0.002-3.807,3.029-6.855,6.826-6.865c3.668-0.032,6.723,2.996,6.83,6.621 C269.124,40.583,265.862,43.778,262.04,43.724z M269.928,31.032c-1.042-0.005-1.908-0.903-1.9-1.969 c0.008-1.085,0.896-1.942,2.001-1.931c1.048,0.011,1.905,0.9,1.898,1.97C271.92,30.191,271.043,31.037,269.928,31.032z"/>
          	<path d="M262.205,32.007c-2.685-0.013-4.898,2.184-4.903,4.865c-0.005,2.675,2.179,4.876,4.849,4.888 c2.684,0.012,4.898-2.184,4.903-4.865C267.059,34.222,264.875,32.02,262.205,32.007z"/>
          	<path d="M261.138,8.902c-15.453,0-27.982,12.529-27.982,27.982c0,15.456,12.529,27.982,27.982,27.982 c15.454,0,27.982-12.525,27.982-27.982C289.12,21.431,276.593,8.902,261.138,8.902z M275.827,36.897 c0,2.336,0.008,4.672-0.002,7.008c-0.014,3.082-2.441,5.996-5.486,6.487c-1.033,0.166-2.102,0.137-3.155,0.141 c-3.96,0.014-7.921,0-11.881,0.006c-3.188,0.005-6.076-2.353-6.635-5.499c-0.144-0.811-0.133-1.656-0.135-2.486 c-0.012-4.185-0.007-8.369-0.003-12.554c0.004-3.225,2.358-6.085,5.533-6.63c0.921-0.158,1.879-0.131,2.82-0.134 c4.021-0.013,8.043-0.002,12.064-0.006c3.379-0.004,6.255,2.394,6.79,5.722c0.114,0.705,0.084,1.437,0.088,2.156 c0.011,1.93,0.004,3.86,0.004,5.789C275.828,36.897,275.828,36.897,275.827,36.897z"/>
          </a>
              </svg>
            </div>
          </aside>
        </div>
        <div class="column is-3 footer small-text">??2021 Teaching Things, Inc.<sup>TM</sup></div>
        <div class="column footer small-text"><a href="https://iblocks.com/">iBlocks</a>, <a href="https://www.otispd.com">OTIS for educators</a>, and <a href="https://www.teq.com/browse/professional-development/onsite-professional-development/">Onsite PD</a> are the intellectual property of Teaching Things, Inc., read our <a href="/terms-and-conditions/"><u>terms and conditions</u></a> for more information. <a href="/privacy-policy/"><u>Privacy Policy.</u></a></div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

</body>
</html>
