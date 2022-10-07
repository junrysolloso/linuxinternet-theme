<?php get_header(); ?>

<section class="title-page service" id="page" style="background:#000;">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="col-8">
					<h4 class="intro-big"><?php the_title(); ?></h4>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="title-page" id="page">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php if (have_posts()) : ?>
						<?php woocommerce_content(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>