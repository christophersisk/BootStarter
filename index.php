<?php include_once "config.php";?>
<!DOCTYPE html>
<!-- 
================================================== 
CODE:	This site uses the following code:
	----------------------------------
	Bootstrap 3.3.6 - HTML, CSS, and JS (http://getbootstrap.com)
	LESS.js - JS (http://lesscss.org/)
	Google Fonts - CSS (http://fonts.google.com)
	FontAwesome 4.5.0 Icons - CSS (http://fontawesome.io/icons/)
	Open Graph - HTML
	Schema.org Markup - HTML
==================================================
-->

<!-- 
CHECKLIST: 
-->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
	<head>
    <meta charset="utf-8" />
    <title><?php echo $siteTitle;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php echo $siteDescription;?>" />
    <meta name="author" content="<?php echo $siteAuthor;?>" />
	
	<meta name="google-site-verification" content="<?php echo $googleValidateID;?>" />
	<meta name="msvalidate.01" content="<?php echo $bingValidateID;?>" />
	
    <!-- Google Authorship  
	================================================== -->
	<link href="https://plus.google.com/<?php echo $googlePlusID;?>/posts" rel="author" />

    <!-- Bootstrap 3.3.6 
	================================================== -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
	
    <!-- FontAwesome 4.5.0 
	================================================== -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
	
	<!-- Custom styles 
    ================================================== -->
    <link rel="stylesheet" href="<?php echo $siteURL;?>/screen.css" type="text/css" />
	<link rel="stylesheet/less" href="<?php echo $siteURL;?>/assets/less/screen.less" type="text/css" />
	
	<style type="text/css">
	</style>	
	
	<!-- Google Fonts 
    ================================================== -->
	<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,900" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet" type="text/css" />
	
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons
	================================================== -->
    <link rel="shortcut icon" href="<?php echo $siteURL;?>/assets/img/favicon.jpg" />	
		
	<!-- Schema.org Markup
    ================================================== -->
		<meta itemprop="name" content="<?php echo $siteTitle;?>" />
		<meta itemprop="description" content="<?php echo $siteDescription;?>" />
		<meta itemprop="image" content="<?php echo $siteURL;?>/<?php echo $openGraphImage;?>" />
		
	<!-- Open Graph
    ================================================== -->	
		<meta property="og:title" content="<?php echo $siteTitle;?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo $siteURL;?>/" />
		<meta property="og:image" content="<?php echo $siteURL;?>/<?php echo $openGraphImage;?>" />
		<meta property="og:description" content="<?php echo $siteDescription;?>" />
		<meta property="og:site_name" content="<?php echo $siteName;?>" />
		
	<!-- Facebook Specific Open Graph
    ================================================== -->	
		<meta property="fb:admins" content="<?php echo $facebookAdminID;?>" />
		<meta property="fb:app_id" content="<?php echo $facebookAppID;?>" />
		
	<!-- Twitter Cards
    ================================================== -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="<?php echo $siteTitle;?>" />
		<meta name="twitter:site" content="<?php echo $twitterUserName;?>" />
		<meta name="twitter:creator" content="<?php echo $twitterUserName;?>" />
		<meta name="twitter:description" content="<?php echo $siteDescription;?>" />
		<meta name="twitter:image:src" content="<?php echo $siteURL;?>/<?php echo $twitterCardImage;?>" />
		
	<!-- Schema.org Markup
    ================================================== -->
		<meta itemprop="author" content="<?php echo $siteAuthor;?>" />
		<meta itemprop="description" content="<?php echo $siteDescription;?>" />
		<meta itemprop="image" content="<?php echo $schemaImage;?>" />
	
	</head>
	<body>
	
	<!-- RESPONSOVIE SIZE GUIDE -->
	<div class="sizeGuide">
	<div class="col-xs-12 hidden-sm hidden-md hidden-lg"> XS </div>
	<div class="col-sm-12 hidden-xs hidden-md hidden-lg"> SM </div>
	<div class="col-md-12 hidden-xs hidden-sm hidden-lg"> MD </div>
	<div class="col-lg-12 hidden-xs hidden-sm hidden-md"> LG </div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 siteAlerts">			
			<?php	// ALERTS 
				if (isset($alert)) { include_once "inc/inc-alert.php";	} 
			?>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 siteHeader">
			</div>
		</div>
	<!-- 
		IF YOU NEED TO MAKE THE HEADER A SEPARATE FILE
		SAVE EVERYTHING ABOVE THIS POINT TO A FILE CALLED "header.php" 
		AND THEN REPLACE WITH THE FOLLOWING CODE
		<?php include "header.php"; ?>	
	-->	
		
		<div class="row">
			<div class="col-xs-12 siteBody">
			<?php 
			// DISPLAY THE PROPER CONTENT DEPENDING ON $page
				if ($page=="" || $page=="home"){
				include "inc/page-home.php";
				}
				elseif ($page=="about"){
				include "inc/page-about.php";
				}
			?>
			</div>
		</div>
		
		<!-- 
		IF YOU NEED TO MAKE THE FOOTER A SEPARATE FILE
		SAVE EVERYTHING BELOW THIS POINT TO A FILE CALLED "footer.php" 
		AND THEN REPLACE WITH THE FOLLOWING CODE
		<?php include "footer.php"; ?>	
		-->	
	
		<div class="row">
			<div class="col-xs-12 siteFooter">
				<p class="center-block">Copyright &copy; <?php echo $siteTitle;?> - <?php echo date(Y); ?></p>
			</div>
		</div>
	</div>
	
<!-- -------------------------------------------------------
	END OF PAGE CODE
	BEGIN EXTERNAL SCRIPTS
---------------------------------------------------------- -->
	
	<?php include_once "assets/analytics.php"; ?>
	
	<?php include_once "assets/socialScripts.php"; ?>
	
	<!-- JQuery 
    ================================================== -->
    <script src="https://code.jquery.com/jquery.js"></script>
	
	<!-- Less.js
    ================================================== -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js"></script>
	
    <!-- Bootstrap Javascripts
    ================================================== -->	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
		
<!-- -------------------------------------------------------
	END OF EXTERNAL SCRIPTS
---------------------------------------------------------- -->	
	</body>
</html>