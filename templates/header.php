<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img class="visible-xs visible-sm mobil" src="<?php bloginfo('template_directory'); ?>/dist/images/JPS-H-web-sm.png" alt=""><img class="hidden-xs hidden-sm desk" src="<?php bloginfo('template_directory'); ?>/dist/images/JPS-H-web.png" alt=""> <span class="jpsh-brand sr-only"><?php bloginfo('name'); ?></span></a>

		</div>

		<nav class="collapse navbar-collapse" role="navigation">
			<?php
if (has_nav_menu('primary_navigation')) :
wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
endif;
			?>
		</nav>
	</div>
</header>


