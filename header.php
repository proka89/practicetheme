<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Practice Theme</title>
    <?php wp_head(); ?>
	</head>
	<?php
		if(is_front_page()):
			$practice_classes = array('practice-class', 'my-class');
		else:
			$practice_classes = array('not-practice-class');
		endif;
	 ?>
	<body <?php body_class($practice_classes); ?>>
		<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
