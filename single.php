<?php get_header(); ?>

<div id="content-wrap">
<!-- START CONTENT -->
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
    	<div class="tag-wrap">
    	<h1 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
        <div class="post-text">


           <p>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?>
 with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
        </div>
		<?php the_content();('More &raquo;'); ?>
     	<?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
        </div>
    <?php endwhile; ?>
	<?php comments_template(); ?></div>
<?php endif; ?>
<!-- END CONTENT -->

<!-- START SIDEBAR -->
<?php get_sidebar('secondary'); ?>
<!-- END SIDEBAR -->

<?php get_footer(); ?>
