<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>

    <div id="banner-image">
      <img src="<?php bloginfo('template_directory'); ?>/images/bhbannercomp.png" alt="This is a Banner">
    </div>
    <!-- End Banner image  -->
        <div id="main-content">
          <img src="<?php bloginfo('template_directory'); ?>/images/mainpic.png" alt="Eric Willis Picture" />
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

     <div class="main-body-text">
       <h1><?php bloginfo('name'); ?></h1>
       <?php the_content('<p class="serif">More &raquo;</p>'); ?>


  <?php endwhile; endif; ?>

             <div id="social-wrap">
            <a href="https://www.facebook.com/ewillis182" target="#" id="facebook-icon"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.svg" alt="Facebook Link"></a>
            <a href="https://www.linkedin.com/pub/eric-willis/73/877/957" target="#" id="linkedin-icon"><img src="<?php bloginfo('template_directory'); ?>/images/indeed.svg" alt="LinkedIn Link"></a>
            <a href="https://twitter.com/e_r_i_c_willis" target="#" id="twitter-icon"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.svg" alt="Twitter Link"></a>
            </div>
            <!-- End social wrap -->
          </div>
          <!-- End body text -->
        </div>
        <!-- End content -->

<?php get_footer(); ?>
