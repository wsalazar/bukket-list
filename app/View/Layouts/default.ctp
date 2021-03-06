<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>My List | Bukket List</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">

	<?php echo $this->Html->css('style.css'); ?>
	<?php echo $this->Html->css('custom.css'); ?>

	<?php echo $this->Html->script('libs/jquery-1.7.1.min.js'); ?>
	<?php echo $this->Html->script('libs/modernizr-2.5.3-respond-1.1.0.min.js'); ?>
	<?php echo $this->Html->script('libs/jquery.prompt.js'); ?>
	<?php echo $this->Html->script('script.js'); ?>
	
	<style type="text/css" media="screen">
		article section{ font-size: 1.5em; line-height: 2em; }
		article footer p { font-size: .7em; }
		#main table{ width: 100%; }
		#main table thead tr th{ text-align: left; }
	</style>

</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	<div id="header-container">
		<header class="wrapper clearfix">
			<a href="/"><h1 id="title">Bukket List</h1></a>
			<nav>
				<ul>
					<li><?php echo $this->Html->link('Manage Lists', array('controller' => 'BukketLists', 'action' => 'index')); ?>
					</li>
					<li><a href="#" class="beta_disabled">Settings</a></li>
					<li><a href="#" class="beta_disabled">Log Out</a></li>
				</ul>
			</nav>
		</header>
	</div>
	<div id="main-container">
		<div id="main" class="wrapper clearfix">
			
			<?php echo $content_for_layout; ?>
			
		</div> <!-- #main -->
	</div> <!-- #main-container -->

	<div id="footer-container">
		<footer class="wrapper">
			<h3>&copy; Brite Ideas Solutions and Services, LLC</h3>
		</footer>
	</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
