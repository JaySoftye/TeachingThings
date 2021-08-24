<?php
/**
 * Template Name: Deliver
 * The template for the Deliver, Onsite/Virtual PD Page
 */

get_header();
?>
  <main id="main-content" role="main">
		<object type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/inc/images/page-tear_bottom-position-green.svg'; ?>" class="page-tear top"></object>
		<div class="container is-fluid green-background">
    	<div class="container padding-bottom">
				 <?php the_content(); ?>
    	</div>
		</div>
    <div class="build-learn-deliver green-background">
      <object type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/inc/images/page-tear_top-position-green.svg'; ?>" class="page-tear"></object>
      <img class="page-bottom left" src="<?php echo get_template_directory_uri() . '/inc/images/teachingthings_deliverARVR.png'; ?>" />
      <img class="page-bottom right" src="<?php echo get_template_directory_uri() . '/inc/images/teachingthings_deliverCoding.png'; ?>" />
      <div class="container">
        <div class="columns is-centered">
          <div class="column is-two-fifths">
            <h2>Build</h2>
						<div class="content-card">
              <object type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/inc/images/iBlocks.svg'; ?>"></object>
              <p>With iBlocks, we create project-based learning activities that center on the engineering design process and inspire critical thinking, next-level creative skills, and get students learning STEAM hands-on.</p>
              <h5 class="has-text-centered margin-bottom"><a href="/build/" class="button-pill green">Learn More</a></h5>
            </div>
          </div>
          <div class="column is-two-fifths">
            <h2>Learn</h2>
						<div class="content-card">
              <object type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/inc/images/OTIS-for-educators.svg'; ?>"></object>
              <p>Our staff of state-certified classroom teachers will help you continue learning for the 21st century classroom with courses, micro-credentials, and more on OTIS for educators, our online PD platform.</p>
              <h5 class="has-text-centered margin-bottom"><a href="/learn/" class="button-pill green">Learn More</a></h5>
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
