<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html dir="ltr" lang="en-US">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Songbird</title>
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
<meta name="viewport" content="width=1000">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.expander.min.js"></script>
<script>
$(document).ready(function() {
  var opts = {collapseTimer: 4000};

  $.each(['beforeExpand', 'afterExpand', 'onCollapse'], function(i, callback) {
    opts[callback] = function(byUser) {
      var by, msg = '<div class="success">' + callback;

      if (callback == 'onCollapse') {
        msg += ' (' + (byUser ? 'user' : 'timer') + ')';
      }
      msg += '</div>';

      $(this).parent().parent().append(msg)
    }
  });

  $('div.expander').expander({
  	slicePoint: 280, 
	expandEffect: 'show',  
	expandSpeed: 0,
    collapseEffect: 'hide',
    collapseSpeed: 0,
	lessClass: 'pink'
	});
});

</script>
<style>
ul#bullets li {
	background:url(../images/pink_bullet_lg.gif) no-repeat top left;
	list-style:none;
	padding:0 0 0 15px;
	font-size:14px;
	margin:0 0 20px 0;
}
</style>
</head>

<body class="sub">
<div id="container">
	<div id="header">
    	<a href="../index.php" id="logo"></a>
        <div id="nav_about">
        	About
            <img src="../images/divider.jpg" border="0" width="1" height="31" style="position:relative; top:10px; margin:0 0 0 45px">
            <a href="index.php">Overview</a>
            <a href="board.php">Board</a>
            <a href="management.php">Management</a>
            <a href="press.php">Press</a>
            <a href="jobs.php" class="active">Jobs</a>
        </div>
    </div>
    <div id="content">
        <div id="left_column" style="margin-top:0">
        	<h1 style="margin:0 0 10px 0;">Jobs at Songbird</h1>
            <p>At Songbird we're as passionate about music as you are. Your music is the soundtrack to your life. Our unique technology merges your music with all the devices in your world. From your computer to your smartphone, tablet or TV, Songbird media players pioneer the way you listen, acquire, manage, discover, and share your music experience. </p>
            
            <p>Songbird's open, flexible platform integrates various Internet e-commerce and media services with our next-generation media software, to provide our partners and users with this incredible entertainment experience. In fact, Songbird has been named to FastCompany's Top 10 Music companies for Innovation.<a href="http://www.fastcompany.com/most-innovative-companies/2011/top-10-music.php" class="pink" target="_blank">Check out the story.</a></p>
            
            <p>At Songbird, our team is small and focused, working closely with music technology enthusiasts and experts. Our environment is collegial and open, a place where everyone's opinion and contribution matters. Our atmosphere is relaxed and flexible, but our energy is high. And our kitchen is stocked, so you'll immediately feel like you're working in a startup. </p>
            
            <p>We're building an extraordinary team to help us craft the technology behind our next-generation entertainment platform. If you love music, video and creating products used by millions of people across multiple devices, then Songbird is the place for you.</p>

        <div class="clearfix pink_border"></div>
				<div>
					<br />
					<h1>We're Hiring!</h1>
					<br />
					<div style="text-transform:uppercase; font-weight:bold;">Current Openings</div>
					<div class="board_member expander">
					<p style="text-transform:uppercase; font-weight:normal;">Senior Developer - Songbird Cloud Platform </p>
					<p>We are looking for a talented and creative Senior Developer to join the team developing the next generation of Songbird’s social music platform. </p>
					<p>Responsibilities:</p>
					<p>Technical lead and subject matter expert for the development of cloud based API's and software applications including high-availability, consumer-facing web applications using web frameworks and technologies including Ruby on Rails, MongoDB, MySQL, Redis, JavaScript, jQuery, HTML, CSS, and AWS (EC2 and S3). Research and evaluate software and hardware, and work with product management team to define features and identify innovative solutions. Leverage test driven development with test frameworks such as Rspec and Cucumber. Use knowledge of different caching layers including HTTP and proxy caching, and agile processes such as Scrum, to drive development activities. Mentor and coach junior engineers and contract development engineers.</p>
					<p>Required Skills and Experience:
					  <ul style="list-style: circle; font-size: 14px;">
					    <li>Bachelor of Science in Computer Science or a related technical field, and 5 years of progressive experience in job offered.</li>
						<li>Proven technical leadership skills architecting and building complex systems.</li>
						<li>Can design and implement elegant, consistent, and highly performing web service APIs -- to be consumed by multiple web, mobile, and desktop clients.</li>
						<li>Thrives in a challenging, fast-paced environment.</li>
						</ul>
					</p>
					</div>
					<p>Interested? Click <a href="mailto:rails-jobs@songbirdnest.com">here</a> to send us an email.</p>
					
				</div>
				<div class="clearfix pink_border"></div>
				<br />           
        
</div>
        
        <div id="sidebar" style="margin-top:0">
        	<h1 style="margin:0 0 10px 0;">Contact</h1>            
            <br/>
            <div style="text-transform:uppercase; font-weight:bold;">Songbird</div>
            2 Shaw Alley, 2nd Floor<br/>
            San Francisco, CA 94105<br/>
            415.357.9800<br/>
            
            <a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=2+Shaw+Alley+san+francisco&sll=37.788969,-122.398568&sspn=0.006902,0.011555&ie=UTF8&hq=&hnear=2+Shaw+Alley,+San+Francisco,+California+94105&z=17&iwloc=A" target="_blank"><img src="../images/map.png" border="0" width="229" height="229" style="margin:12px 0 12px 0;"></a><br>
            
            <a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=2+Shaw+Alley+san+francisco&sll=37.788969,-122.398568&sspn=0.006902,0.011555&ie=UTF8&hq=&hnear=2+Shaw+Alley,+San+Francisco,+California+94105&z=17&iwloc=A" class="pink" target="_blank">Get directions/View map</a>
            
        </div>
        
        <div class="clearfix"></div>
        
    </div><!--content -->
    <div class="clearfix"></div>

<?php include('../includes/footer.php'); ?>

    <div class="clearfix"></div>
</div><!--container -->

<!-- include Google Analytics Tracking Code -->
<?php include('../includes/ga.php'); ?>
<!-- End GA Include -->
</body>
</html>
