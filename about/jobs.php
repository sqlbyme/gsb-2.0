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
    	<a href="../index.php" id="logo_sm"></a>
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
            <p>At Songbird, music is our passion and we work tirelessly to create products that people love. </p>
            
            <p>Right now we are working on an exciting new generation of music experiences that will help fans and artists connect in a new era of digital music. Our products are music-focused, consumer-oriented, socially-driven, and chock filled with cutting-edge new technology.</p>
            
            <p>At Songbird, our team is small, filled with rock star talent and focused on frequently shipping products. We work closely with music fans, artists, industry luminaries and consumer electronics companies to build products that are used by millions of people. </p>
            
            <p>Our work environment is open, fun and a place where everyone's opinion and contribution matters. Our office is located in one of the coolest buildings in the SOMA district of San Francisco.</p>

            <p>Want to make a big impact with an awesome team developing the next big consumer music experience? Join us!</p>

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
