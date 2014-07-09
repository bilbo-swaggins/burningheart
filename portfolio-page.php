<?php
/*
Template Name: Portfolio Page
*/
?>
<?php get_header(); ?>

<div id="content-wrap">
<!-- START CONTENT -->
<h1 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
    	<div class="portfolio-post">

    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_post_thumbnail(array(130,130)); ?></a>
    600
      </div>
    <?php endwhile; ?>


</div>
<?php endif; ?>
<!-- END CONTENT -->

<!-- START SIDEBAR -->
<?php get_sidebar('secondary'); ?>
<!-- END SIDEBAR -->

<?php get_footer(); ?>
