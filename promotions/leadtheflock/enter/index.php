<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Lead the Flock with Songbird and Win!</title>
	<link rel="stylesheet" href="/css/style.css" />
	<link rel="stylesheet" media="screen" href="../css/screen.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="../js/leadtheflock.js"></script>
	<script src="http://widgets.awe.sm/v3/widgets.js?key=28123dd8b63f9f93f462317cdca33acdc761db3cd437d29dfc3a20219ecaa4bf"></script>
	<!--[if lt IE9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script>
		// Facebook Page Like is conversion goal 4
		window.fbAsyncInit = function() {
			FB.Event.subscribe('edge.create',
				function(response) {
					AWESM.convert('goal_4', 0);
				}
			);
		};
		
		// Include Twitter Follow script
		window.twttr = (function (d,s,id) {
			var t, js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return; js=d.createElement(s); js.id=id;
			js.src="//platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs);
			return window.twttr || (t = { _e: [], ready: function(f){ t._e.push(f) } });
		}(document, "script", "twitter-wjs"));
		
		// A Twitter Follow is conversion goal 5
		twttr.ready(function (twttr) {
			twttr.events.bind('follow', function(event) {
				AWESM.convert('goal_5', 0);
			});
		});
	</script>
</head>

<body id="create">
	<div id="fb-root"></div> <!-- Required for Facebook Like Button -->
	
	<header>
		<div class="container">
<div class="span-2"><a href="/"><img src="../images/logo.png" /></a></div>
			<div class="span-20 center last">
				<h2>Lead the Flock with Songbird and Win!</h2>
			</div>
		</div>
	</header>

	<div class="container">
		<!--<div class="span-23 prepend-1">
			<div class="span-20">
			<h3>Do you love to discover new music?<br />
			Share Songbird with your flock on Twitter and Facebook<br />
			and be entered to see your favorite new musicians LIVE!</h3><br />
			</div>

			<div class="span-3 last"><img src="../images/gamepic2.png" width="120" /></div>
		</div>-->


<div class="span-23 bigBottom center">
			<h3>30 days to play, 3 prizes to win!</h3>

			<h2>Share the Most</h2>

			<h3>Lead the biggest flock to Songbird and win <strong>$1000 in Ticketmaster Gift Cards!</strong></h3>

			<h2>Share a Little</h2>

			<h3>Be entered in a random drawing for one of two <strong>$250 Ticketmaster Gift Cards!</strong></h3>

<h5>From June 12 to July 11, every time you share Songbird with your flock you are entered to win one of our prizes.
<br /> Follow us on Facebook and Twitter for more daily chances to enter!<br />
				3 winners will be announced on July 12, 2012.</h5>
<img src="../images/gamepic1.png"> <br />
<h2>How to Play</h2>


</div>
		<div class="span-23 prepend-1">

		<div class="span-8">
				<h3 class="subhead">Share to Win</h3>

				<h5><strong>Lead the largest flock to Songbird</strong> by July 11 and win $1000 in Ticketmaster gift cards! Not the Flock Leader? Every time you share, you're still entered to win our random drawing for one of two $250 Ticketmaster prizes.</h5>

				<div class="center bigBottom">
					<div id="share-user">
						<h3 class="subhead">email address for game ID:</h3>
						<input id="email" name="email" type="text" class="bigInput" /> <input id="email-next" type="button" value="Enter to Play" class="enter" /> <a id="email-skip" href="#skip">Share without entering</a>
					</div>
					
					<div id="share-buttons" class="hide">
						<h3 class="subhead">Use these buttons to share</h3>
						
						<span id="share-facebook"></span>
						<span id="share-twitter"></span>
						<span class="email">
							<a id="share-email" href="#">Email</a>
						</span>
					</div>
				</div>
			</div>



			<div class="span-7">
				<h3 class="subhead">Download to Win</h3>

				<h5>If your friends download Songbird from this page, you'll get another game entry and so will they! So share and download to earn even more entries toward our $1000 grand prize.</h5>

				<div class="center bigBottom">
					<h3 class="subhead">Web App&nbsp;&#183;&nbsp;Mac/Pc&nbsp;&#183;&nbsp;Android</h3>
					<a class="convert-exit" data-goal="goal_1" href="http://www.songbird.me/" target="_blank"><img src="../images/sbm.png" height="20px" /></a>
					<a class="convert-exit" data-goal="goal_2" href="http://getsongbird.com/product/songbird-desktop.php" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/desktop.png" height="20px" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a class="convert-exit" data-goal="goal_3" href="https://play.google.com/store/apps/details?id=com.songbirdnest.mediaplayer" target="_blank"><img src="../images/google.png" height="20px" /></a>
				</div>
			</div>

	

			<div class="span-8 last">
				<h3 class="subhead">Follow to Win</h3>
				<h5>"Like" us on Facebook and follow us on Twitter for more entries. Every day of the contest we will also post and tweet music-related mini-challenges to our followers. Winners earn more contest entries towards our prizes! </h5>
			</div>

			<div class="center bigBottom">
				<h3 class="subhead">Follow us for daily chances to win</h3>
				
				<!-- Facebook Like Button -->
				<div class="fb-like" data-href="https://www.facebook.com/Songbird" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div>
								
				<!-- Twitter Follow Button -->
				<a href="https://twitter.com/songbird" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @songbird</a>
			</div>

			<div class="span-23 bigBottom center">
				<h3 class="subhead">Front row seats to your dream concert? General admission to intimate shows?<br />
				Songbird will get you there!<br />
				Now <strong>that's</strong> effortless music discovery!</h3>
			</div>

			<div class="span-8 smallBottom">
				<p>Please read our contest <a href="../rules/index.html">Rules and Regulations</a>.</p>
			</div>
		</div>
	</div>
	<div id="footer">
	  <div id="footer-content">
	    <p>2012 &copy; All Rights Reserved &nbsp;&nbsp; | &nbsp;</p>
	      <ul>
	        <li><a href="../help/">Help</a></li>
	        <li><a href="../partners/">Partners</a></li>
	        <li><a href="#">Products</a></li>
	        <li><a href="#">Support</a></li>
	        <li><a href="../about/overview.php">About Us</a></li>
	        <li><a href="#">Jobs</a></li>
	        <li><a href="../about/eula.php">License</a></li>
	        <li><a href="../about/privacy.php">Privacy</a></li>
	        <li><a href="../about/terms.php">Terms of Use</a></li>
	      </ul> 
	    <a class="facebook" href="http://www.facebook.com/Songbird?ref=search&sid=648331437.2719007091..1" target="_blank"></a><a class="twitter" href="https://twitter.com/#!/songbird" target="_blank"></a>
	  </div><!--footer-content -->
	  <div class="clearfix"></div>
	</div><!--footer -->

	<!-- <footer>
		<div class="container">
			<div class="span-3 last right poweredBy">
				Powered by<a href="http://totally.awe.sm/" target="_blank"><img class="vCenter" src="../images/awesmlogo.png" alt="awe.sm" height="8" /></a>
			</div>
		</div>
	</footer> -->
	
	<script>
		var awesmKey = '28123dd8b63f9f93f462317cdca33acdc761db3cd437d29dfc3a20219ecaa4bf';
		var awesmCampaign = 'lead-the-flock';
		var awesmOriginalUrl = 'http://getsongbird.com/promotions/leadtheflock/enter/';
		var emailShareMessage = "Check out Songbird and one of us could win $1000 in Ticketmaster gift cards! AWESM_URL";	// Must include AWESM_URL
		var emailShareSubject = "I'm sharing Songbird with you! Let's win free concert tickets!";
		
		function showShareButtons(skip) {
			var userDiv = document.getElementById('share-user');
			var shareDiv = document.getElementById('share-buttons');
			var emailInput = document.getElementById('email');
			
			// Check if there's an email address in input#email
			// or if an email address was sent to this page
			var email = emailInput.value || getUrlVar('email');
			
			if (email || skip) {
				userDiv.className = 'hide';
				shareDiv.className = '';
				
				// Instantiate Facebook Like Button
				AWESM.fbshare({
					'href': awesmOriginalUrl,
					'size': 'small',
					//'send': 'true',
					//'layout': 'button_count',
					//'width': 90,
					
					'awesm_buttonid': 'share-facebook',
					'awesm_user_id': email,
					'awesm_campaign': awesmCampaign
				});
				
				// Instantiate Twitter Tweet Button
				AWESM.tweet({
					'data-url': awesmOriginalUrl,
					'data-via': 'songbird',
					'data-text': 'Share Songbird to win $1000 to see your favorite bands live!',
					'awesm_buttonid': 'share-twitter',
					'awesm_user_id': email,
					'awesm_campaign': awesmCampaign
				});
				
				// Instantiate email button
				document.getElementById('share-email').setAttribute('href', 
						'http://api.awe.sm/url/share?v=3&tool=RHj6GI&channel=email&key=' + awesmKey
					+	'&campaign=' + encodeURI(awesmCampaign)
					+	'&url=' + encodeURIComponent(awesmOriginalUrl)
					+	'&destination=mailto%3A%3Fbody%3D' + encodeURIComponent(emailShareMessage) + '%26subject%3D' + encodeURIComponent(emailShareSubject)
				);
				
			} else {
				userDiv.className = '';
				shareDiv.className = 'hide';
			}
		}
		
		// Check onload
		showShareButtons();
		
		// Attach to click event on Next button
		$('#email-next').click(showShareButtons);
		
		// Attach to click event of skip link
		$('#email-skip').click(function() {
			showShareButtons(true);
		});
		
		// Capture conversion on download click
		$('.convert-exit').click(function(e) {
			var destination = e.currentTarget.href;
			
			if (AWESM.parentAwesm) {
				AWESM.conversionRegistered = function() {
					window.location.href = destination;
				}
				AWESM.convert($(this).data('goal'), 0);
				return false;
			} else {
				return true;
			}
		});
		
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
</body>
</html>