<?php while (have_posts()) : the_post(); ?>
<?php // get_template_part('templates/page', 'header'); ?>
<aside class="buy-search">
	<?php the_field('buy_page_search'); ?>
</aside>
<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
