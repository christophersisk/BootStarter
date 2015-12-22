	<!-- BEGIN FACEBOOK LIKE BUTTON -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=<?php echo $facebookAppID;?>";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
			<!-- FACEBOOK BUTTON CODE TO USE
			<div class="fb-share-button" data-layout="button" data-href="<?php echo $shareURL;?>"></div>
			-->
	
	<!-- END FACEBOOK LIKE BUTTON -->

	<!-- BEGIN GOOGLE PLUS ONE & PAGE LINK -->
	<script src="https://apis.google.com/js/platform.js" aync defer></script>
			
			<!-- GOOGLE+ BUTTON CODE TO USE
			<div class="g-plus" data-action="share" data-annotation="none" data-href="<?php echo $shareURL; ?>"></div>
			-->
			
	<!-- END GOOGLE PLUS ONE & PAGE LINK -->
	
	<!-- BEGIN TWEET BUTTON -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	
			<!-- TWEET BUTTON CODE TO USE
			<a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-text="<?php echo $shareTitle;?> - <?php echo $shareDescription;?>" data-url="<?php echo $shareURL;?>">Tweet</a> 
			-->
			
	<!-- END TWEET BUTTON -->
		
	<!-- BEGIN TUMBLR BUTTON -->
	<script src="http://platform.tumblr.com/v1/share.js"></script>
	<!-- Set these variables wherever convenient -->
	<script type="text/javascript">
		var tumblr_link_url = "<?php echo $shareURL;?>";
		var tumblr_link_name = "<?php echo $shareTitle;?>";
		var tumblr_link_description = "<?php echo $shareDescription;?>";
	</script>

	<!-- Put this code at the bottom of your page -->
	<script type="text/javascript">
		var tumblr_button = document.createElement("a");
		tumblr_button.setAttribute("href", "http://www.tumblr.com/share/link?url=" + encodeURIComponent(tumblr_link_url) + "&name=" + encodeURIComponent(tumblr_link_name) + "&description=" + encodeURIComponent(tumblr_link_description));
		tumblr_button.setAttribute("title", "Share on Tumblr");
		tumblr_button.setAttribute("style", "display:inline-block; text-indent:-9999px; overflow:hidden; width:61px; height:20px; background:url('http://platform.tumblr.com/v1/share_2.png') top left no-repeat transparent;");
		tumblr_button.innerHTML = "Share on Tumblr";
		document.getElementById("tumblr_button_abc123").appendChild(tumblr_button);
	</script>
	<!-- END TUMBLR BUTTON -->