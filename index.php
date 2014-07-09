<?php get_header(); ?>

<div id="content-wrap">
<!-- START CONTENT -->
<h1><?php bloginfo('name'); ?></h1>
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
    	<div class="post-wrap">
    	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <div class="post-meta">


           <p>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?>by <?php the_author_posts_link(); ?>
with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
        </div>
        <!-- End Post Meta -->
        <div class="post-feature-image">
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_post_thumbnail(array(130,130)); ?></a>
        </div>
        <!-- End Post Feature Image -->

        <div class="post-excerpt">
        <?php the_excerpt();('More &raquo;'); ?>
        </div>
     	<?php edit_post_link('Edit this entry.', '<p class="clear">', '</p>'); ?>
        </div>
        <!-- End post-wrap -->
    <?php endwhile; ?>


</div>
<?php endif; ?>
<!-- END CONTENT -->

<!-- START SIDEBAR -->
<?php get_sidebar('secondary'); ?>
<!-- END SIDEBAR -->

<?php get_footer(); ?>
