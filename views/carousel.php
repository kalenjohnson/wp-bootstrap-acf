<?php if ( ! get_sub_field( 'full_width' )) : ?>
<div class="container">
<?php endif; ?>

<div id="bootstrap-carousel-<?php echo $this->count; ?>" class="carousel slide" data-ride="carousel">

	<?php if ( get_sub_field( 'carousel_indicators' ) ) : ?>
		<ol class="carousel-indicators">
			<?php for ($i = 0; $i < count( $this->slides ); $i++ ) : ?>
				<li
					data-target="#bootstrap-carousel-<?php echo $this->count; ?>"
					data-slide-to="<?php echo $i; ?>"
					<?php if ( $i == 0 ) echo 'class="active"'; ?>
				></li>
			<?php endfor; ?>
		</ol>
	<?php endif; ?>

	<div class="carousel-inner">
		<?php $this->slide_count = 0; while ( have_rows( 'slides' ) ) : the_row(); ?>
			<div class="item <?php if ( $this->slide_count == 0 ) echo 'active'; ?>">

				<img
					src="<?php echo get_sub_field('image')['url']; ?>"
					alt="<?php echo get_sub_field('image')['title']; ?>"
				>

				<?php if ( get_sub_field( 'caption' ) ) : ?>
					<div class="carousel-caption">
						<?php the_sub_field( 'caption' ); ?>
					</div>
				<?php endif; ?>

			</div>
		<?php $this->slide_count++; endwhile; ?>
	</div>

	<?php if ( get_sub_field( 'carousel_controls' ) ) : ?>
		<a class="left carousel-control" href="#bootstrap-carousel-<?php echo $this->count; ?>" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#bootstrap-carousel-<?php echo $this->count; ?>" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	<?php endif; ?>
</div>

<?php if ( ! get_sub_field( 'full_width' )) : ?>
</div>
<?php endif; ?>