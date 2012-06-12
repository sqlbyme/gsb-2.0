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
a {color: #e6317e;}
</style>
</head>

<body class="sub">
<div id="container">
	<div id="header">
    	<a href="../index.php" id="logo"></a>
        <div id="nav_about">
        	About
            <img src="../images/divider.jpg" border="0" width="1" height="31" style="position:relative; top:10px; margin:0 0 0 45px">
            <a href="overview.php">Overview</a>
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
            	<img src="../images/headshots/les_schmidt.jpg" border="0" width="139" height="139" style="float:left; margin:0 20px 10px 0">
                <h1>Les Schmidt</h1>
                <p>Board Member and CEO, Les Schmidt is a seasoned startup/emerging growth company executive. His specialty is growing and scaling companies and has traversed the Venture-backed startup to IPO road four times. Les has over 20 years of experience of technology and emerging growth company experience.</p>


<p>He joined Songbird to lead the transformation of the Company’s products into a rich music experience platform. Prior to taking on the CEO role at POTI, Les was the Chief Operating Officer of GlobalEnglish. In this role, Schmidt lead the design and development of next-generation, world class SaaS elearning services for the Global 2000 customers that need English to sustain and expand their ability to compete globally.</p>


<p>Recently, Les was the vice president of worldwide Custom Solutions and business operations for the Mobile and Devices business unit of Adobe Systems. In this role, Schmidt was responsible for the successful launch of Adobe’s mobile solutions for wireless operators around the world, working with Verizon, TMobile, DoCoMo, ChungHua Telecom, Telenor and others to create better user experiences on mobile devices. Schmidt joined Adobe when Macromedia was acquired in 2005. Schmidt joined Macromedia in 2003 to lead the redesign of the macromedia.com website to coincide with the launch of the MX 2004 products.</p>


<p>His other experiences included: founding The Information Privacy Company (consumer identity theft protection), COO for the San Francisco 49ers, executive vice president and chief financial officer for Quokka Sports (digital sports entertainment), president and CEO of MECON, Inc. (health care information services), COO of The Learning Company (educational software) and CFO for Applied Immune Services (aphaeresis devices).</p>


<p>Schmidt graduated from Antioch College with a degree in political science and economics in 1976. He earned his master’s degree in taxation from Golden Gate University in 1981. Schmidt was elected to the Board of Trustees of Golden Gate University in 2004 and served as Chairman of the Board from 2007 to 2011. </p>
                <div class="clearfix"></div>
            </div>
            
            <div class="clearfix pink_border"></div>
            
            <div class="board_member expander">
            	<img src="../images/headshots/dan_brongiel.jpg" border="0" width="139" height="139" style="float:left; margin:0 20px 10px 0">
                <h1>Dan Brongiel</h1>
                <p>Daniel Brongiel brings more than 20 years of global high-tech industry experience to his role as EVP of WorldWide Field Operations and board member of Songbird.  Having lived throughout Asia-Pacific, Japan, and the United States, Daniel brings an extensive background in international business planning and business development.</p>


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
		            	<img src="../images/headshots/ewittman_headshot_color_small.png" border="0" width="139" height="139" style="float:left; margin:0 20px 10px 0">
		                <h1>Eric Wittman</h1>
		                <p>Eric Wittman has worked in the technology industry for over 20 years satisfying his hunger to create products that are loved by everyone. When products are loved, companies can be successful and the teams that build the products can be proud of their accomplishments. </p>


		<p>As Senior Vice President of Product, Eric is responsible for shaping the strategy and vision for creating differentiated product experiences. Overseeing the user experience design through development, he orchestrates the product development organization to successfully deliver on that strategy. He works tirelessly to ensure great product experiences are created and keeps the teams inspired so that they can continue create the next great thing.</p>


		<p>Growing up in Silicon Valley, Eric was exposed to a lot of new technology at an early age and fueled a passion for building products. His early entrepreneurial spirit started at age seven when he began delivering three newspaper routes (doing so through a revenue share with a 14 year old neighbor because he was legally too young) and learned early on to always strive to create great experiences for his customers. His official career in technology began right after high school when he joined an intriguing startup called Macromedia. The biggest attraction to Macromedia was not only the innovative products but also the company’s tagline, “Experience Matters”, which mirrored his product development philosophy.</p>


		<p>With 20 years of tech experience under his belt, Eric has been involved in creating some of the industries most groundbreaking products including Director (the standard for multimedia CD-ROM development), Shockwave (the first multimedia technology for the web), Dreamweaver (defector standard for WYSIWYG HTML editing) and Flash. Flash was the most significant experience for Eric where he led the product strategy and took an acquired animation technology (FutureSplash) and turned it into the de facto standard for rich experiences on the web which amassed a base of over 3 million developers, install base of over 2 billion computers and devices and inspired the development of HTML 5.
		</p>

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
