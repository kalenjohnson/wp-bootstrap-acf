<div class="container">
	<div class="panel-group" id="accordion-<?php echo $this->count; ?>">

		<?php $this->accordion_count = 0; ?>
		<?php while ( have_rows( 'accordion_section' ) ) : the_row(); ?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse"
						   data-parent="#accordion-<?php echo $this->count; ?>"
						   href="#collapse-<?php echo $this->count; ?>-<?php echo $this->accordion_count; ?>"
							<?php if ( $this->accordion_count != 0 ) : ?>
								class="collapsed"
							<?php endif; ?>
							>
							<?php the_sub_field( 'title' ); ?>
						</a>
					</h4>
				</div>
				<div
					id="collapse-<?php echo $this->count; ?>-<?php echo $this->accordion_count; ?>"
					class="panel-collapse collapse <?php if ( $this->accordion_count == 0 ) echo 'in'; ?>"
					>
					<div class="panel-body">
						<?php the_sub_field( 'content' ); ?>
					</div>
				</div>
			</div>
			<?php $this->accordion_count++; endwhile; ?>

	</div>
</div>