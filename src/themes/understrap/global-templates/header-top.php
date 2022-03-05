<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="<?php echo esc_attr( $container ); ?> d-none d-lg-block">
  <div class="row">
    <!-- Logo -->
    <div class="col-md-4 py-4">
      <!-- Your site title as branding in the menu -->
      <?php if ( ! has_custom_logo() ) { ?>

      <?php if ( is_front_page() && is_home() ) : ?>

      <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
          itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

      <?php else : ?>

      <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
        itemprop="url"><?php bloginfo( 'name' ); ?></a>

      <?php endif; ?>

      <?php
      } else {
        the_custom_logo();
      }
      ?>
      <!-- end custom logo -->
    </div>
    <!-- end logo -->
    <!-- social links -->
    <div class="col-md-8 py-4 d-flex align-items-center justify-content-end">algo va a ir aqui</div>
    <!-- end social links -->
  </div>
</div>