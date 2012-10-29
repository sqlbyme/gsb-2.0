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
a {color: #e6317e;}
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
            <a href="mangement.php" class="active">Management</a>
            <a href="press.php">Press</a>
            <a href="jobs.php">Jobs</a>
        </div>
    </div>
    <div id="content">
        <div id="left_column" style="width:790px; margin-top:0">
        	<h1>Senior Management</h1>
             	<div class="board_member expander">
	            	<img src="../images/headshots/ewittman_headshot_color_small.png" border="0" width="139" height="139" style="float:left; margin:0 20px 10px 0">
	                <h1>Eric Wittman</h1>
	                <p>Eric Wittman has worked in the technology industry for over 20 years satisfying his hunger to create products that are loved by everyone. When people are passionate about the products they use, companies are successful and the teams that build those products are proud of their accomplishments. </p>
                   <p>As CEO and President of Songbird, Eric is responsible for driving the strategy, vision and creation of a next generation social music experience. He’s blessed to be working with an exceptionally talented team who have decades of experience building successful products. He works tirelessly to ensure great product experiences and businesses are created and does whatever it takes to keep the team inspired so that they can continue create the next great thing.</p>
                   <p>Growing up in Silicon Valley, Eric was exposed many new technologies at an early age which fueled his passion for building products. His early entrepreneurial spirit started at age seven when he began delivering three newspaper routes (doing so through a revenue share with a 14 year old neighbor because he was legally too young) and learned early on to always strive to create great experiences for his customers. His official career in technology began right after high school when he joined an intriguing startup called Macromedia. The biggest attraction to Macromedia was not only the innovative products but also the company’s tagline, “Experience Matters”, which mirrored his product development philosophy.</p>
                   <p>With 20 years of tech experience under his belt, Eric has been involved in creating some of the industries most groundbreaking products including Director (the standard for multimedia CD-ROM development), Shockwave (the first multimedia technology for the web), Dreamweaver (de facto standard for WYSIWYG HTML editing) and Flash. Flash was the most significant experience for Eric where he led the business and product strategy and took an acquired animation technology (FutureSplash) and turned it into the de facto standard for rich experiences on the web which amassed a base of over 3 million developers, install base of over 2 billion computers and devices and inspired the development of HTML 5.</p>

                 <div class="clearfix"></div>
	            </div>
	 
	         <div class="clearfix pink_border"></div>
            
            <div class="board_member expander">
            	<img src="../images/headshots/dan_brongiel.jpg" border="0" width="139" height="139" style="float:left; margin:0 20px 10px 0">
                <h1>Dan Brongiel</h1>
                <p>Daniel Brongiel brings more than 20 years of global high-tech industry experience to his role as EVP of WorldWide Field Operations and board member of POTI Inc (dba. Songbird).  Having lived throughout Asia-Pacific, Japan, and the United States, Daniel brings an extensive background in international business planning and business development.</p>


<p>Mr. Brongiel leads Songbird’s sales and marketing efforts to capitalize on long-term growth opportunities and align the company with key strategic partners. In this role he is responsible for the strategy and direction of Songbird’s sales and marketing operations, including all customer-facing functions such as field marketing, go-to-market partners, e-commerce, and customer support.</p>


<p>Prior to joining Songbird, Daniel held executive level positions across a diverse range of business’s during his 12 years at Adobe Systems, Inc.  During his successful tenure at Adobe, he was responsible for leading the overall strategy, including go-to-market plans, marketing, business development, and sales execution for Adobe’s North American Education business,  WorldWide OEM/Bundle business, and Mobile & Device Business Unit.  Daniel led teams of people up to 50 staff and $350m annual revenue.</p>


<p>Prior to Adobe, Daniel held a sales management position with a startup, Andromedia Inc. and held various roles within EMC and Computer Associates with a focus on sales, business development, and global account management.
</p>

<p>Daniel holds a BS in Electrical Engineering and Technology from Sothern Illinois University and has completed several executive programs focused on strategy, planning, operations, and sales.  He is also active with his local charities and education groups in IL. </p>
                <div class="clearfix"></div>
            </div>
       
        <div class="clearfix pink_border"></div>
        
        <div class="clearfix"></div>
		        <div class="board_member expander">
            	<img src="../images/headshots/calaprice_bio_pic.png" border="0" width="139" height="139" style="float:left; margin:0 20px 10px 0">
                <h1>Dave Calaprice</h1>
                <p>Dave Calaprice has been building innovative, industry-leading products, services, and teams for over 22 years.  With a hands-on approach and comprehensive technical background in digital media and mobile development, Dave has helped start-ups and established companies successfully navigate the rapidly-changing software and web technology landscape with cutting-edge solutions and experiences. The resulting products and services have been enjoyed by hundreds of millions of users worldwide. </p>
                <p>As VP of Engineering & CTO at Songbird, Dave is responsible for product development and engineering direction for the company's new music discovery platform encompassing mobile, cloud, and desktop.</p>
                <p>Prior to Songbird, Dave headed up mobile software development as VP of Client Engineering at Cellmania, a global provider of content and app ecosystems infrastructure for mobile operators, and joined Research In Motion through its acquisition of the company in 2010.  Earlier, in 2005, he became an advisor and then executive at mobile experience technology start-up MSX, leading product development and operations as VP of Engineering.  Cellmania acquired MSX in 2008.</p>
                <p>Before MSX, Dave held key engineering roles at Macromedia including VP of Engineering, Director of Engineering, Software Architect, and Principal Engineer, spanning the company's evolution from start-up through IPO to a mature, highly successful public company.  Here, he developed his passion for creating rich media technologies and platforms, having spent over a dozen years building the company’s pioneering and widely acclaimed products including Director, Shockwave, and Central -- the Flash Platform-based precursor to Adobe AIR.  (Macromedia was subsequently acquired by Adobe Systems.)</p>
                <p>Earlier, at Oracle, Dave helped engineer the company's 1.0 enterprise solutions as part of Oracle's newly-established Applications Division.</p>
                <p>Dave has a B.S. in Information and Decision Systems, Computer Science Concentration from Carnegie Mellon University.</p>
                
                <div class="clearfix"></div>
            </div>    
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
