<?php get_header(); ?>

 <main id="main-content" role="main">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     <div class="container padding-top paddingobottom" id="post-<?php the_ID(); ?>">
       <article class="columns is-centered" id="post-<?php the_ID(); ?>">

         <header class="column is-4">
           <?php if ( is_singular() ) { echo '<h1 class="entry-title" itemprop="headline">'; } else { echo '<h2 class="entry-title">'; } ?>
             <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
           <?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
           <?php if ( !is_search() ) { get_template_part( 'entry', 'meta' ); } ?>
           <br /><br />
           <?php if ( has_post_thumbnail() ) : ?>
             <a href="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false ); echo esc_url( $src[0] ); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); ?></a>
           <?php endif; ?>
         </header>
         <div class="column is-5 is-offset-1">
           <?php the_content(); ?>
         </div>

       </article>

     </div>
   <?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
   <?php endwhile; endif; ?>
 </main>

<?php get_footer(); ?>
