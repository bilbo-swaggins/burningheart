<?php get_header(); ?>

<div id="content-wrap">
  <img src="<?php bloginfo('template_directory'); ?>/images/404.jpg" alt="Webpage not found" class="error-page">

  <h3><a href="<?php echo home_url(); ?>">Home</a></h3>
</div>

<!-- END CONTENT -->
<?php get_sidebar('secondary'); ?>


<?php get_footer(); ?>
