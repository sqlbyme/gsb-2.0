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
<meta name="apple-itunes-app" content="app-id=561535312">
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
					<p style="text-transform:uppercase; font-weight:normal;">Senior Ruby on Rails Developer - Songbird Cloud Platform </p>
					<p>We are looking for a talented and creative senior developer to join the server team building the next generation of Songbird’s social music platform.  We're leveraging the latest frameworks and services including Rails 3, Backbone.js, MongoDB, and Redis. </p>
					<p>Responsibilities:</p>
					<p>This is a unique opportunity to create a new social music experience platform that will define how people enjoy their music interests with friends anywhere.  As a member of the technical team, you will drive the core architecture for Songbird’s products and participate in all phases of development from product definition to architecture to coding.  You will work closely with product management, experience design, network operations, desktop and mobile teams to design, build and deploy products to millions of users.</p>
					<p>Required Skills and Experience:
					  <ul style="list-style: circle; font-size: 14px;">
					    <li>5+ years server-side development experience with large scale deployments under your belt</li>
						<li>2+ years of experience working with Ruby on Rails</li>
						<li>Proven technical leadership skills involving the architecture and coding of complex back-end systems</li>
						<li>Deep understanding of web services, service oriented architectures, and the principles which guide key architectural styles</li>
						<li>Comfortable designing and implementing elegant, consistent, and highly performant web service APIs for consumption by web, mobile, and desktop clients</li>
						<li>Thorough understanding of network architecture and availability/performance trade-offs</li>
						<li>Experience working with front-end languages and frameworks such as JavaScript/jQuery/Backbone.js and HTML5</li>
						<li>Thrives in a challenging, fast-paced startup environment</li>
						<li>BS or MS in Computer Science or related technical field</li>
						</ul>
					</p>
					<p>Preferred Skills and Experience:
					  <ul style="list-style: circle; font-size: 14px;">
					    <li>Familiarity with Facebook or Twitter APIs</li>
						<li>Experience with Scrum/agile development</li>
						<li>Strives to stay current on existing and emerging development tools, platforms, and delivery models</li>
						<li>Passionate about your music and video, at home and on the go</li>
						<li>Excited about building incredible media experiences for millions of people around the world!</li>
						<li>Experience with Scrum/agile development</li>
						<li>Strives to stay current on existing and emerging development tools, platforms, and delivery models</li>
						<li>Passionate about your music and video, at home and on the go</li>
						<li>Excited about building incredible media experiences for millions of people around the world!</li>
						</ul>
					</p>
					</div>
					<p>Interested? Click <a href="mailto:rails-jobs@songbirdnest.com">here</a> to send us an email.</p>
					
				</div>
				<div>
					<div class="board_member expander">
					<p style="text-transform:uppercase; font-weight:normal;">Senior Front-End Developer  - Songbird Cloud Platform </p>
					<p>We are looking for a talented and creative senior front-end developer to join the server team building the next generation of Songbird’s social music platform.  We're leveraging the latest frameworks and services including Rails 3, Backbone.js, jQuery, MongoDB, and Redis. </p>
					<p>Responsibilities:</p>
					<p>This is a unique opportunity to create new social music applications and an associated platform that will define how people enjoy their music interests with friends anywhere.  As a member of the technical team, you will drive the core architecture for Songbird’s products and participate in all phases of development from product definition to architecture to coding.  You will work closely with product management, experience design, network operations, desktop and mobile teams to design, build and deploy products to millions of users.</p>
					<p>Required Skills and Experience:
					  <ul style="list-style: circle; font-size: 14px;">
					    <li>5+ years front-end web development experience with HTML, CSS and JavaScript</li>
						<li>1+ years experience working with JS frameworks such as jQuery, Backbone.js, Ember.js, Underscore.js, and Node.js.  </li>
						<li>Proven technical leadership skills architecting and building complex front-ends</li>
						<li>Thrives in a challenging, fast-paced environment</li>
						<li>BS or MS in Computer Science or related technical field</li>
						</ul>
					</p>
					<p>Preferred Skills and Experience:
					  <ul style="list-style: circle; font-size: 14px;">
					    <li>Familiarity with Facebook platform and APIs</li>
						<li>Familiarity with HTML5 and CSS3</li>
						<li>Comfortable with concepts and structure of Rails-based apps (Ruby coding experience a plus!)</li>
						<li>Familiarity with testing frameworks and tools including Jasmine and Selenium</li>
						<li>Experience with Scrum/agile development</li>
						<li>Strives to stay current on existing and emerging development tools, platforms, and delivery models</li>
						<li>Passionate about your music and video, at home and on the go</li>
						<li>Excited about building incredible media experiences for millions of people around the world!</li>
						</ul>
					</p>
					</div>
					<p>Interested? Click <a href="mailto:jobs-fed@songbirdnest.com">here</a> to send us an email.</p>
					
				</div>
				<div class="clearfix pink_border"></div>
				<br />           
        
</div>
        
        <div id="sidebar" style="margin-top:0">
        	<h1 style="margin:0 0 10px 0;">Contact</h1>            
            <br/>
            <!-- <div style="text-transform:uppercase; font-weight:bold;">Songbird</div>
            2 Shaw Alley, 2nd Floor<br/>
            San Francisco, CA 94105<br/> -->
            <a href="mailto:jobs@songbirdnest.com" class="pink">jobs@songbirdnest.com</a> <br />
            415.357.9800<br/>
            
            <!--<a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=2+Shaw+Alley+san+francisco&sll=37.788969,-122.398568&sspn=0.006902,0.011555&ie=UTF8&hq=&hnear=2+Shaw+Alley,+San+Francisco,+California+94105&z=17&iwloc=A" target="_blank"><img src="../images/map.png" border="0" width="229" height="229" style="margin:12px 0 12px 0;"></a><br>
            
            <a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=2+Shaw+Alley+san+francisco&sll=37.788969,-122.398568&sspn=0.006902,0.011555&ie=UTF8&hq=&hnear=2+Shaw+Alley,+San+Francisco,+California+94105&z=17&iwloc=A" class="pink" target="_blank">Get directions/View map</a> -->
            
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
