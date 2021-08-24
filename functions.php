
<?php
  add_action( 'after_setup_theme', 'teachingthings_setup' );
    function teachingthings_setup() {
        load_theme_textdomain( 'teachingthings', get_template_directory() . '/languages' );
          add_theme_support( 'title-tag' );
          add_theme_support( 'post-thumbnails' );
          add_theme_support( 'responsive-embeds' );
          add_theme_support( 'automatic-feed-links' );
          add_theme_support( 'html5', array( 'search-form' ) );

          global $content_width;
      if ( !isset( $content_width ) ) { $content_width = 1920; }
        register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'teachingthings' ) ) );
      }

  add_action( 'admin_notices', 'teachingthings_admin_notice' );

    function teachingthings_admin_notice() {
      $user_id = get_current_user_id();
        if ( !get_user_meta( $user_id, 'teachingthings_notice_dismissed_3' ) && current_user_can( 'manage_options' ) )
          echo '<div class="notice notice-info"><p>' . __( '<big><strong>teachingthings</strong></big> uses the Bulma CSS Framework <a href="?notice-dismiss" class="alignright">Dismiss</a> <a href="https://bulma.io/documentation/" class="button-primary" target="_blank">Bulma Documentation</a>', 'teachingthings' ) . '</p></div>';
        }

  add_action( 'admin_init', 'teachingthings_notice_dismissed' );

    function teachingthings_notice_dismissed() {
      $user_id = get_current_user_id();
        if ( isset( $_GET['notice-dismiss'] ) )
          add_user_meta( $user_id, 'teachingthings_notice_dismissed_3', 'true', true );
        }
      add_action( 'wp_enqueue_scripts', 'teachingthings_enqueue' );

    function teachingthings_enqueue() {
      wp_enqueue_style( 'teachingthings-style', get_stylesheet_uri() );
      wp_enqueue_script( 'jquery' );
    }
    add_action( 'wp_footer', 'teachingthings_footer' );
    function teachingthings_footer() {
  }

  function teachingthings_v1_scripts() {
    wp_deregister_script( 'siteFonts' );
	  wp_enqueue_style( 'siteFonts', 'https://use.typekit.net/wko7vcn.css');

	  wp_deregister_script('jquery');
	  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), null, true);

    wp_deregister_script( 'teachingthings_v1_framework-css-source' );
    wp_deregister_script( 'teachingthings_v1_shared_styles' );
    wp_deregister_script( 'teachingthings_v1_layout_styles' );
    wp_deregister_script( 'teachingthings_v1_mobile_styles' );

    wp_enqueue_style( 'teachingthings_v1_style', get_stylesheet_uri() );
    wp_enqueue_style( 'teachingthings_v1_framework-css-source', get_template_directory_uri() . '/inc/css/framework-css-source.css');
    wp_enqueue_style( 'teachingthings_v1_shared_styles', get_template_directory_uri() . '/inc/css/shared_styles.css');
    wp_enqueue_style( 'teachingthings_v1_layout_styles', get_template_directory_uri() . '/inc/css/layout_styles.css');
    wp_enqueue_style( 'teachingthings_v1_mobile_styles', get_template_directory_uri() . '/inc/css/mobile_styles.css');

    wp_deregister_script( 'angular' );
    wp_deregister_script( 'angular_animate' );
    wp_deregister_script( 'ngSanitize' );
    wp_enqueue_script( 'angular', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js', '', '1.6.9', true );
    wp_enqueue_script( 'angular_animate', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.js', '', '1.6.9', true );
    wp_enqueue_script( 'ngSanitize', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-sanitize.js', '', '1.6.9', true );

    wp_deregister_script( 'app-js' );
    wp_enqueue_script( 'app-js', get_template_directory_uri() . '/inc/js/app.js', '', '', true );

  }
add_action( 'wp_enqueue_scripts', 'teachingthings_v1_scripts' );

  add_filter( 'document_title_separator', 'teachingthings_document_title_separator' );
    function teachingthings_document_title_separator( $sep ) {
      $sep = '|';
        return $sep;
    }
    add_filter( 'the_title', 'teachingthings_title' );
      function teachingthings_title( $title ) {
        if ( $title == '' ) {
          return '...';
        } else {
          return $title;
        }
      }

      add_filter( 'nav_menu_link_attributes', 'teachingthings_schema_url', 10 );
      function teachingthings_schema_url( $atts ) {
        $atts['itemprop'] = 'url';
          return $atts;
      }
      if ( !function_exists( 'teachingthings_wp_body_open' ) ) {
        function teachingthings_wp_body_open() {
          do_action( 'wp_body_open' );
        }
      }

        add_filter( 'the_content_more_link', 'teachingthings_read_more_link' );
          function teachingthings_read_more_link() {
            if ( !is_admin() ) {
              return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">' . sprintf( __( '...%s', 'teachingthings' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
            }
          }

        add_filter( 'excerpt_more', 'teachingthings_excerpt_read_more_link' );
          function teachingthings_excerpt_read_more_link( $more ) {
            if ( !is_admin() ) {
              global $post;
              return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">' . sprintf( __( '...%s', 'teachingthings' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
            }
          }

        add_filter( 'big_image_size_threshold', '__return_false' );
        add_filter( 'intermediate_image_sizes_advanced', 'teachingthings_image_insert_override' );

        function teachingthings_image_insert_override( $sizes ) {
          unset( $sizes['medium_large'] );
          unset( $sizes['1536x1536'] );
          unset( $sizes['2048x2048'] );
            return $sizes;
        }

      add_action( 'widgets_init', 'teachingthings_widgets_init' );
        function teachingthings_widgets_init() {
          register_sidebar( array(
            'name' => esc_html__( 'Sidebar Widget Area', 'teachingthings' ),
            'id' => 'primary-widget-area',
            'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</li>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
          ) );
        }

      add_action( 'wp_head', 'teachingthings_pingback_header' );
        function teachingthings_pingback_header() {
          if ( is_singular() && pings_open() ) {
            printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
          }
        }

      add_action( 'comment_form_before', 'teachingthings_enqueue_comment_reply_script' );
        function teachingthings_enqueue_comment_reply_script() {
          if ( get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
          }
        }

      function teachingthings_custom_pings( $comment ) {
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo esc_url( comment_author_link() ); ?></li>
<?php
  }

  add_filter( 'get_comments_number', 'teachingthings_comment_count', 0 );
    function teachingthings_comment_count( $count ) {
      if ( !is_admin() ) {
        global $id;
          $get_comments = get_comments( 'status=approve&post_id=' . $id );
          $comments_by_type = separate_comments( $get_comments );
        return count( $comments_by_type['comment'] );
      } else {
        return $count;
      }
    }

/**
  * Login Page Edits.
  */
  function my_login_logo() { ?>
    <style type="text/css">
  		body.login {
  			background-color: rgb(255,255,255);
  		}
      #login h1 a, .login h1 a {
        width: 300px;
        background-image: url('<?php echo get_template_directory_uri();?>/inc/images/teachingthings-brand-logo.svg');
        background-size: 210px;
      }
    </style>
  <?php }
  	add_action( 'login_enqueue_scripts', 'my_login_logo' );
