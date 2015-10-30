<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="<?php echo get_template_directory_uri() . '/css/common_sp.css'; ?>" rel="stylesheet" media="screen and (max-width: 1023px)" />
  <link href="<?php echo get_template_directory_uri() . '/css/second_sp.css'; ?>" rel="stylesheet" media="screen and (max-width: 1023px)" />
	<?php wp_head(); ?>
	<style type="text/css">
	@charset "UTF-8";
	:root {
	  font-size: 62.5%;
	}
	</style>
</head>

<body>
  <div id="header_contents">
    <div class="header">
      <p class="logo"><a href="<?php echo esc_url(home_url('/'));?>">風に立つライオン基金</a><span class="slogon">一人一人の小さな思いが、沢山の小さな生命を支えられることを信じます。</span></p>
    </div>
  </div>
