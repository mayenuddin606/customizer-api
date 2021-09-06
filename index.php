<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<img src="<?php echo get_theme_mod('logo-uploader'); ?>" alt="image">

<?php if(true === get_theme_mod('copyright-show')) : ?>

<h2 class="copyright-text">Copyright: <?php echo get_theme_mod('copyright-text'); ?></h2>

<?php endif; ?>
<h2 class="heroine">Select Heroine: <?php echo get_theme_mod('select-heroine'); ?></h2>


<?php wp_footer(); ?>
</body>
</html>
