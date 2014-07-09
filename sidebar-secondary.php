<div id="sidebar">
	<div class="sidebar-nav">
		<aside>

		<?php if ( is_active_sidebar( 'sticky-nav' ) ) : ?>

			<?php dynamic_sidebar( 'sticky-nav' ); ?>


		<?php else : ?>

	<?php /*?> replace the code below with whatever default code you want to display in Secondary Sidebar <?php */?>
	      <!-- Begin Categories -->
			<h3>Categories</h3>
			<ul>
				<?php wp_list_categories('title_li='); ?>
			</ul>
	    	<!-- End Categories -->

	<?php /*?> end default code to display in Secondary Sidebar <?php */?>

		<?php endif; ?>
	</aside>

	</div><!-- /secondary -->
</div>
