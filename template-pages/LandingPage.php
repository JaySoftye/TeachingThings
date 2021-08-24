<?php
/**
 * Template Name: Landing Page
 * The template for Landing Pages
 */

get_header();
?>

  <main id="main-content" role="main">
		<div class="container is-fluid">
    	<?php the_content(); ?>
		</div>

    <div class="build-learn-deliver">
      <img class="page-bottom left" src="<?php echo get_template_directory_uri() . '/inc/images/teachingthings_lightbulbhotairballoon.png'; ?>" />
      <img class="page-bottom right" src="<?php echo get_template_directory_uri() . '/inc/images/teachingthings_missiontomars.png'; ?>" />
      <div class="container">
        <div class="columns is-centered padding-top padding-bottom">
          <div class="column is-10">
            <h3 class="headline green-text has-text-centered">Transforming teaching and learning through ingenious real-world experiences that prepare today’s students for tomorrow’s world.</h3>
          </div>
        </div>
      </div>
    </div>

  </main>

<?php get_footer(); ?>
