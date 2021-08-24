<?php get_header();?>

  <main id="main-content" role="main">
		<object type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/inc/images/page-tear_bottom-position-white.svg'; ?>" class="page-tear top"></object>
		<div class="container is-fluid white-background">
    	<div class="container padding-bottom" style="min-height:75vh;">

        <div class="columns is-centered">
          <div class="column is-10 has-text-centered">
            <img src="<?php echo get_template_directory_uri() . '/inc/images/404.jpg'; ?>" />
            <h1 class="headline sub-header">well, This clearly this isn’t right.</h1>
            <h6>The page you are looking for might have been moved, had its named change, or is temporarily unavailable.You can <a href="mailto:info@teachingthings.com"><u>contact us</u></a> about this issue directly or return to the <a href="<?php echo home_url(); ?>"><strong><u>home page</u></strong></a>.</h6>
            <h1>
          </div>
        </div>

    	</div>
		</div>
  </main>

<?php get_footer(); ?>
