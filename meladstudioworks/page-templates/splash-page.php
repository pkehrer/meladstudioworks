<?php
/**
 * Template Name: Splash Page
 *
 * Description: A static splash page.
 */
wp_head(); ?>
  
<html>
<head>
</head>
<body id="splash-page-body">
	<div id="splash-page-div">
		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Home' ) ) ); ?>">
			<img src="/wp-content/themes/meladstudioworks/images/logo.jpeg" />
		</a>
		<br/>
		<br/>
		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Home' ) ) ); ?>">
			Continue to site.
		</a>
	</div>
</body>
</html>