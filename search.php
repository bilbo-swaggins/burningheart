<?php get_header(); ?>


<!-- START CONTENT -->

<div id="content-wrap" class="search">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>
		<ul>
		<?php while (have_posts()) : the_post(); ?>
		<li id="post-<?php the_ID(); ?>"><?php the_time('F jS, Y') ?> - <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; ?>
		</ul>
	<?php else : ?>

		<h2>No posts found. Try a different search?</h2>
    	<div><?php get_search_form(); ?></div>

	<?php endif; ?>

</div>
<!-- END CONTENT -->
<?php get_sidebar('search');?>
<?php get_footer(); ?>
