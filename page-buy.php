<?php while (have_posts()) : the_post(); ?>
<?php // get_template_part('templates/page', 'header'); ?>

<section class="buy-search">
	<div class="buy-header">
		<img class="img-responsive" src="<?php the_field("buy_page_header_img"); ?>" alt="luxury kitchen">
	</div>
<aside class="search-box">
	<?php the_field('buy_page_search'); ?>
</aside>
</section>
<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
