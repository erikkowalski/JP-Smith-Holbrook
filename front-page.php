<?php // get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
<div class="alert alert-warning">
	<?php _e('Sorry, no results were found.', 'sage'); ?>
</div>
<?php get_search_form(); ?>
<?php endif; ?>

<section class="home-search">
	<aside class="search-box">
	<h2>Search Listings</h2>
		<?php the_field('idx_search');?>
	</aside>
	<!-- Carousel
================================================== -->
	<div id="myCarousel" class="carousel fade" data-ride="carousel">
		<!-- Indicators -->

		<div class="carousel-inner" role="listbox">

			<div class="item active">
				<img  src="<?php the_field('silder_img_one'); ?>" alt="First slide">
			</div>


			<div class="item">
				<img  src="<?php  the_field('silder_img_two'); ?>" alt="Second slide">
			</div>

			<div class="item">
				<img  src="<?php  the_field('silder_img_three'); ?>" alt="Second slide">
			</div>
		</div>

	</div><!-- /.carousel -->
</section>

<section class="featured-properties ">
	<div class="headline container">
		<h3>Luxury Residences</h3>
	</div>
	<div class="container">
		<div class="col-md-6 property"><?php the_field('featured_property_one') ?></div>
		<div class="col-md-6 property"><?php the_field('featured_property_two') ?></div>
		<div class="col-md-6 property"><?php the_field('featured_property_three') ?></div>
		<div class="col-md-6 property"><?php the_field('featured_property_four') ?></div>
	</div>
</section>


<section class="top-widget container" >


<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>





