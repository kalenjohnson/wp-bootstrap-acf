<div class="container">
	<ul class="nav nav-tabs" role="tablist">
		<?php $this->tab_count = 0; ?>
		<?php while ( have_rows( 'tab_section' ) ) : the_row(); ?>
			<li <?php if ( $this->tab_count == 0 ) echo 'class="active"'; ?>>
				<a
					href="#<?php echo sanitize_html_class( get_sub_field( 'title' ) ); ?>"
					role="tab"
					data-toggle="tab"
					>
					<?php the_sub_field( 'title' ); ?>
				</a>
			</li>
			<?php $this->tab_count++; endwhile; ?>
	</ul>

	<div class="tab-content">
		<?php $this->tab_count = 0; ?>
		<?php while ( have_rows( 'tab_section' ) ) : the_row(); ?>
			<div
				class="tab-pane fade <?php if ( $this->tab_count == 0 ) echo 'active in'; ?>"
				id="<?php echo sanitize_html_class( get_sub_field( 'title' ) ); ?>"
				>
				<?php the_sub_field( 'content' ); ?>
			</div>
			<?php $this->tab_count++; endwhile; ?>
	</div>
</div>
