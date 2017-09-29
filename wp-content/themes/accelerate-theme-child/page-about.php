<?php
/**
 * Template Name: About Custom Page
 * Description: Custom About Page for Accelerate Marketing. 
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

  <section class="about-content">
    <div class="about-main-content">
      <?php while ( have_posts() ) : the_post();
       $service_name = get_field('service_name');
       $service_content = get_field('service_content');
       $image_4 = get_field('image_4');
       $service_name_2 = get_field('service_name_2');
       $service_content_2 = get_field('service_content_2');
       $image_5 = get_field('image_5');
       $service_name_3 = get_field('service_name_3');
       $service_content_3 = get_field('service_content_3');
       $image_6 = get_field('image_6');
       $service_name_4 = get_field('service_name_4');
       $service_content_4 = get_field('service_content_4');
       $image_7 = get_field('image_7');
       $size = 'full';
       $contact_us = get_field('contact_us');
      ?>

    <div class="about">
      <h2 class="mission">Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h2>

      <h3>Our Services</h3>
      <p>We take pride in our clients and the content we create for them. <br> Here's a brief overview of our offered services.</p>
    </div> <!--.about-->

    <aside class="about-sidebar">
      <h2><?php echo $service_name; ?></h2>
      <h6><?php echo $service_content; ?></h6>
      <?php the_content(); ?>
    </aside><!--about-sidebar-->

     <div class="about-images">
      <figure>
      <?php if($image_4) {
        echo wp_get_attachment_image($image_4, $size); 
       } ?> 
      </figure>
     </div> <!--about-images-4-->

    <aside class="about-sidebar-2">
      <h2><?php echo $service_name_2; ?></h2>
      <h6><?php echo $service_content_2; ?></h6>
      <?php the_content(); ?>
    </aside> <!--aside about-sidebar-->
      
    <div class="about-images-2">  
     <figure>
       <?php if($image_5) {
        echo wp_get_attachment_image($image_5, $size); 
       } ?>
     </figure> 
    </div> <!--about-images-5-->

    <aside class="about-sidebar">
      <h2><?php echo $service_name_3; ?></h2>
      <h6><?php echo $service_content_3; ?></h6>
      <?php the_content(); ?>
    </aside>

    <div class="about-images"> 
     <figure>
       <?php if($image_6) {
        echo wp_get_attachment_image($image_6, $size); 
       } ?>
     </figure>
    </div> <!--about-images-6--> 

    <aside class="about-sidebar-2">
      <h2><?php echo $service_name_4; ?></h2>
      <h6><?php echo $service_content_4; ?></h6>
      <?php the_content(); ?>
    </aside>
      
    <div class="about-images-2"> 
     <figure> 
       <?php if($image_7) {
        echo wp_get_attachment_image($image_7, $size); 
       } ?>
     </figure>
    </div> <!--about-images-7-->

    <?php endwhile; // end of the loop. ?>
     
    <div class="site-content">
      <div class="about-contact">
        <h2><?php echo $contact_us; ?></h2>
        <a class="button" href="<?php echo site_url('/contact-us')?>">Contact Us</a>
      </div>  
    </div><!-- main-content -->
  </section><!-- #primary -->

<?php get_footer(); ?>
