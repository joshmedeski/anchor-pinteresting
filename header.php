
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width" />

	<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

	<meta name="description" content="<?php echo site_description(); ?>">

	<link rel="stylesheet" href="<?php echo theme_url('/stylesheets/normalize.css'); ?>">
	<link rel="stylesheet" href="<?php echo theme_url('/stylesheets/app.css'); ?>">

	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
	<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script>var base = '<?php echo theme_url(); ?>';</script>

	<script src="<?php echo theme_url('javascripts/vendor/custom.modernizr.js'); ?>"></script>

  <meta name="generator" content="Anchor CMS">
  <meta property="og:title" content="<?php echo site_name(); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo current_url(); ?>">
  <!-- <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>"> -->
  <meta property="og:site_name" content="<?php echo site_name(); ?>">
  <meta property="og:description" content="<?php echo site_description(); ?>">

	<?php if(customised()): ?>
	    <!-- Custom CSS -->
  		<style><?php echo article_css(); ?></style>

  		<!--  Custom Javascript -->
  		<script><?php echo article_js(); ?></script>
	<?php endif; ?>
</head>

<body class="<?php echo body_class(); ?>">		
<!-- header -->
	<div class="row">
		<header>
				<a href="<?php echo base_url(); ?>"><img src="<?php echo theme_url('images/profile.jpg'); ?>" alt="Josh Medeski Profile Picture"></a>
			<div class="title">
				<h1><?php echo site_name(); ?></h1>
				<h3 class="subheader"><?php echo site_description(); ?></h3>
			<!-- Start Twitter -->
			<span class="hide-for-small">
			<a href="https://twitter.com/joshmedeski" class="twitter-follow-button" data-show-count="false">Follow @joshmedeski</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</span>
			<!-- End Twitter -->
			</div>
		</header>
	</div>

<!-- Navigation -->
<?php if(has_menu_items()): ?>
	<div class="row">
		<div class="bar">
			<nav id="navigation">
				<ul>
					<?php while(menu_items()): ?>
						<li>
							<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>" <?php echo (menu_active() ? 'class="active"' : ''); ?>><?php echo menu_name(); ?></a>
						</li>
					<?php endwhile; ?>
				</ul>
			</nav>
			<nav class="categories hide-for-small">
									<ul>
<?php while(categories()): ?>
    <!-- Loop through the categories. -->
    <li><a href="<?php echo category_url(); ?>"><?php echo category_title(); ?></a></li>
<?php endwhile; ?>
				</ul>
			</nav>
		</div>
	</div>
<?php endif; ?>
