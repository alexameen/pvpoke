<?php require_once 'modules/config.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
if(! isset($META_TITLE)){
	$META_TITLE = 'PvPoke | Open-Source Battle Simulator, Rankings &amp; Team Building for Pokemon GO PvP';
} else{
	$META_TITLE = $META_TITLE . ' | PvPoke';
}

if(! isset($META_DESCRIPTION)){
	$META_DESCRIPTION = 'Looking for an edge in Pokemon GO Trainer Battles? Become a master with our open-source Pokemon battle simulator, explore the top Pokemon rankings, and get your team rated for PvP battles.';
}
	
if(! isset($OG_IMAGE)){
	$OG_IMAGE = 'https://pvpoke.com/img/og.jpg';
}
?>

<title><?php echo $META_TITLE; ?></title>
<meta name="description" content="<?php echo $META_DESCRIPTION; ?>" />

<?php if(isset($CANONICAL)): ?>
	<link rel="canonical" href="<?php echo $CANONICAL; ?>" /><!--Prevents Google from indexing hundreds of different versions of the same page-->
<?php endif; ?>

<!--OG tags for social-->
<meta property="og:title" content="<?php echo $META_TITLE; ?>" />
<meta property="og:description" content="<?php echo $META_DESCRIPTION; ?>" />
<meta property="og:image" content="<?php echo $OG_IMAGE; ?>" />

<meta name="apple-mobile-web-app-capable">
<meta name="mobile-web-app-capable">
<link rel="manifest" href="<?php echo $WEB_ROOT; ?>data/manifest.json">

<link rel="icon" href="<?php echo $WEB_ROOT; ?>img/favicon.png">
<link rel="stylesheet" type="text/css" href="<?php echo $WEB_ROOT; ?>css/style.css?v=22">
<script src="<?php echo $WEB_ROOT; ?>js/libs/jquery-3.3.1.min.js"></script>

<?php require_once('modules/analytics.php'); ?>

<script>
	// Host for link reference

	var host = "<?php echo $WEB_HOST; ?>";
	var webRoot = "<?php echo $WEB_ROOT; ?>";
</script>

</head>

<body>
	<header>
		<div class="header-wrap">
			<div class="hamburger">
				<!--Because I'm too lazy to make a graphic-->
				<div class="meat"></div>
				<div class="meat"></div>
				<div class="meat"></div>
			</div>
			<h1 class="title"><a href="/">PvPoke.com</a></h1>
			<div class="menu">
				<a class="icon-battle" href="<?php echo $WEB_ROOT; ?>battle/">Battle</a>
				<a class="icon-rankings" href="<?php echo $WEB_ROOT; ?>rankings/">Rankings</a>
				<a class="icon-team" href="<?php echo $WEB_ROOT; ?>team-builder/">Team Builder</a>
				<a class="icon-articles" href="<?php echo $WEB_ROOT; ?>articles/"><span>Articles</a>
				<a class="icon-contribute" href="<?php echo $WEB_ROOT; ?>contribute/">Contribute</a>
				<a class="icon-twitter" href="https://twitter.com/pvpoke" target="_blank"><span>Follow on Twitter!</span></a>
			</div>
			<div class="clear"></div>
		</div>
	</header>
	<div class="main-wrap">
		<div id="main">