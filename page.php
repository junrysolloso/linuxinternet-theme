<?php get_header(); ?>
<?php get_template_part('page-header'); ?>

<section id="page">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>