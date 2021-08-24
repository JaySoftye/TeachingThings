<?php
/**
 * Template Name: Build
 * The template for the Build, iBlocks Page
 */

get_header();
?>
  <main id="main-content" role="main">
		<object type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/inc/images/page-tear_bottom-position-royal-blue.svg'; ?>" class="page-tear top"></object>
		<div class="container is-fluid royal-blue-background">
    	<div class="container padding-bottom">
				 <?php the_content(); ?>
    	</div>
		</div>
    <div class="build-learn-deliver royal-blue-background">
      <object type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/inc/images/page-tear_top-position-royal-blue.svg'; ?>" class="page-tear"></object>
      <img class="page-bottom left" src="<?php echo get_template_directory_uri() . '/inc/images/teachingthings_buildElectricCar.png'; ?>" />
      <img class="page-bottom right" src="<?php echo get_template_directory_uri() . '/inc/images/teachingthings_buildRobotics.png'; ?>" />
      <div class="container">
        <div class="columns is-centered">
          <div class="column is-two-fifths">
            <h2>Learn</h2>
            <div class="content-card">
              <object type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/inc/images/OTIS-for-educators.svg'; ?>"></object>
              <p>Our staff of state-certified classroom teachers will help you continue learning for the 21st century classroom with courses, micro-credentials, and more on OTIS for educators, our online PD platform.</p>
              <h5 class="has-text-centered margin-bottom"><a href="/learn/" class="button-pill blue">Learn More</a></h5>
            </div>
          </div>
          <div class="column is-two-fifths">
            <h2>Deliver</h2>
            <div class="content-card">
              <object type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/inc/images/Onsite-Professional-Development.svg'; ?>"></object>
              <p>We deliver virtual and in-person training training that’s personalized for the unique needs of teachers, administrators, schools, and districts so they can deliver meaningful learning to students.</p>
              <h5 class="has-text-centered margin-bottom"><a href="/deliver/" class="button-pill blue">Learn More</a></h5>
            </div>
          </div>
        </div>
      </div>
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
