<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package teachingthings_v1-0
 */

 get_header();
 ?>
 <main id="main-content" role="main">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     <div class="container is-fluid entry-content" itemprop="mainContentOfPage" id="post-<?php the_ID(); ?>">

       <?php the_content(); ?>

     </div>
   <?php endwhile; endif; ?>
 </main>
 <?php get_footer(); ?>
