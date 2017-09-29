<?php
/**
 * The template for displaying the 404 pages.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

  <div id="primary" class="missing-site-content">
    <div class="missing">
      <aside class="missing-sidebar"> 
      <h1>404</h1>
      <h2>Whoops, The Page not found..</h2>
      <p>Sorry, this page no longer exists, never existed or has been moved.<br> We feel like complete jerks for totally misleading you.</p>
      <p>Feel free to take a look around our <span><a href="<?php echo site_url('/blog')?>">blog</a></span> or our featured <span><a href="<?php echo site_url('/case-studies')?>">work</a></span>.</p>
      </aside>
    </div><!-- .missing -->

  </div><!-- #primary -->

<?php get_footer(); ?>
