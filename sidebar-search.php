<div id="sidebar"> 	<?php /*?> the aside's id is used for CSS styling <?php */?>
	<?php if ( is_active_sidebar( 'search' ) ) : ?>

		<?php dynamic_sidebar( 'search' ); ?>

	<?php else : ?>

<?php /*?>
Replace the code below with whatever default code you want to display in the sidebar when no widgets are active.
Here are some examples:
<?php */?>

      <h3>Primary Sidebar</h3>
        <p>Look, it's the Primary Sidebar!</p>

        <!-- Begin Categories -->

		<h3>Categories</h3>
		<ul>
			<?php wp_list_categories('title_li='); ?>
		</ul>
    	<!-- End Categories -->

<?php /*?> end default code to display in the sidebar when no widgets are active. <?php */?>

	<?php endif; ?>
</div><!-- End Sidebar -->
