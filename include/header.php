<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
		ob_start("ob_gzhandler");
	else 
		ob_start(); 
    
    $offset = 60 * 60;
    $expire = "expires: " . gmdate ("D, d M Y H:i:s", time() + $offset) . " GMT";
    header ($expire);

	date_default_timezone_set('GMT');
?>
<html lang="en-US" itemtype="http://schema.org/WebPage" dir="ltr">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta http-equiv="content-type" content="text/html;" />
	<meta name="robots" content="index,follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<title><?php echo $title; ?></title>

	<meta name="description" content="<?php echo $description; ?>"/>

	<!-- Open Graph -->
	<meta property="og:title" content="<?php echo $title; ?>" />
	<meta property="og:image" content="" />
	<meta property="og:site_name" content="Mobiopush" />
	<meta property="og:description" content="<?php echo $description; ?>"/>
	<meta property="og:type" content="article">

	<!-- Twitter -->
	<meta name="twitter:title" content="<?php echo $title; ?>" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:site" content="@mobiopush" />
	<meta name="twitter:creator" content="@mobiopush" />
	<meta name="twitter:domain" content="mobiopush.com" />
    <meta name="twitter:description" content="<?php echo $description; ?>"/>

    <link rel="stylesheet" type="text/css" href="css/normalize.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/foundation.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/fonts.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/default.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
</head>
<body>
	<div class="wide">
		<div id="top"></div>  	<!-- used to bring users to top -->
		<div id="header">
			<div class="row">
				<div class="small-12 medium-4 large-3 columns small-centered medium-uncentered">
					<a href="http://mobiopush.com" class="logo"></a>
				</div>
				<div class="small-12 medium-8 large-5 columns main-menu">
					<nav>
						<ul class="menu hide-for-small-only align-right">
							<li><a href="Documentation.php">Documentation</a></li>
							<li><a href="Pricing.php">Pricing</a></li>
							<li><a href="Features.php">Features</a></li>
							<li><a href="Contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
				<div class="small-12 medium-5 large-4 columns main-menu small-uncentered">
					<ul class="menu align-center">
						<li class=""><a href="https://mobiopush.com/Dashboard">Login</a></li>
						<li class="signup"><a href="https://mobiopush.com/Dashboard/Register.php">Signup for free</a></li>
					</ul>
				</div>
			</div>
		</div>