<?php
// GENERAL CONFIGURATION
// ======================================
// 
// INSTRUCTIONS:
// Fill out the information below. (ex. $siteURL = "http://example.com";)
//
// Create two images for social sharing and save them to the /assets/img/ folder.
// og-image.jpg - 1200x630 pixels
// twitter-card-image.jpg - 600x450 pixels

// DEFAULT SITE INFORMATION:
// ======================================
	$siteURL = "";
	$siteTitle = ""; 
	$siteName = "";
	$siteDescription = ""; 
	$siteAuthor = "";
	$pageURL = $siteURL;
	
	// SOCIAL SHARING INFORMATION:
	// ======================================
	$shareURL = $siteURL;
	$shareTitle = $siteTitle;
	$shareDescription = $siteDescription;
	
	// OPEN GRAPH IMAGE
	// 1200X630 px FOR GOOGLE+ & FACEBOOK
	// ======================================
	$openGraphImage = "assets/img/og-image.jpg";
	$openGraphImageType = "image/jpg";
	
	// TWITTER CARD INFORMATION:
	// ======================================
	$twitterUserName = "";
	$twitterCardImage = "assets/img/twitter-card-image.jpg";
		 // Twitter Card Image must be 4:3 ratio (recommend 600x450 pixels) for basic "summary" style card.

	// SCHEMA.ORG INFORMATION:
	// ======================================
	$schemaImage = $openGraphImage;

	 // GOOGLE ANALYTICS
	// ======================================
	$googleAnalyticsID = ""; // ex. UA-12345-1
	
	// OPEN GRAPH SITE-SPECIFIC:
	// ======================================
	$googlePlusID = "";
	// $googlePlusPageID = "";
	$facebookAdminID = "";
	$facebookAppID = "";
	
	// WEBMASTER VALIDATION IDS:
	// ======================================
	$googleValidateID = "";
	$bingValidateID = "";
	
	
// PAGE SPECIFIC INFORMATION
// ======================================
	$page = $_GET['page'];

// SPECIAL URL-BASED VARIABLES
// ======================================
	// These allow you to create special call-back URLs to display
	// information based on an outside action.
	// Ex. http://example.com/?donation=success
	// Ex. http://example.com/?donation=cancel

// ALERTS
// ======================================
// HAS AN ALERT OCCURED?	
	$alert = $_GET['alert']; // "success" or "cancel"
// BUILD THE MESSAGE TO BE SHOWN
	// Successful Donation
	if($alert=="donatesuccess") {
		$alertClass = "success";
		$alertHeading = "You donation was successful!";
		$alertMsg = "";
	}

 ?>