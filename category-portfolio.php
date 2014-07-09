<?php get_header(); ?>

<div id="content-wrap">
<!-- START CONTENT -->
<h1 class="pagetitle"><?php single_cat_title(); ?></h1>
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
      <div class="portfolio-wrap">

        <div class="post-feature-image">
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_post_thumbnail('full'); ?></a>
        </div>
        <!-- End Portfolio Image -->
      </div>
        <!-- End portfolio-wrap -->
    <?php endwhile; ?>



<?php endif; ?>
</div>
<!-- END CONTENT -->

<!-- START SIDEBAR -->
<?php get_sidebar('secondary'); ?>
<!-- END SIDEBAR -->

<?php get_footer(); ?>
