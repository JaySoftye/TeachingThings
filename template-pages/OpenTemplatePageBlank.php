<?php
/**
 * Template Name: Open Blank Template
 * The template blank pages outside of TeachingThings Branding
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
  </head>

	<body>
    <main id="main-content" role="main">

      <?php the_content(); ?>

    </main>
	</body>

</html>
