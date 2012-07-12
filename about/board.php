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
            <a href="index.php">Overview</a>
            <a href="board.php" class="active">Board</a>
            <a href="management.php">Management</a>
            <a href="press.php">Press</a>
            <a href="jobs.php">Jobs</a>
        </div>
    </div>
    <div id="content">
	<div id="left_column" style="width:790px; margin-top:0">
	  <h1>Board of Directors</h1>
	<div class="board_member expander">
	  <img src="../images/headshots/mark_jung.jpg" border="0" width="139" height="139" style="float:left; margin:0 20px 20px 0">
	  <h1>Mark Jung</h1>
	  <p>Chairman of the Board Mark Jung has spent the last 20 years as a successful internet media CEO and entrepreneur. Most recently, Mark was the CEO at Vudu, a leading provider of digital home entertainment and interactive television services. Prior to Vudu, Mark was the Chief Operating Officer of Fox Interactive Media (FIM) where he was responsible for all of its internet properties including MySpace, IGN Entertainment, FoxSports.com, AmericanIdol.com, and Scout Media. Prior to Fox Interactive Media, Mark was the co-founder and CEO of IGN Entertainment, an internet media and services company for video-gaming and other forms of digital entertainment that he took public in 2000 and then private in 2003. Mark led IGN's sale to NewsCorp, the parent company of Fox Interactive Media, in 2005.</p>
	  <p>Mark currently serves as the Chairman of the Board of Epic Advertising, as well as the Chairman of the Board of Songbird. He is a member of the Board of Directors of 3PAR (NYSE: PAR), the Management Board of the Stanford Graduate School of Business, the Leadership Council for the Princeton School of Engineering and Applied Science, the Board of Directors of the League of American Orchestras, the Board of Governors of the San Francisco Symphony, as well as the Young Presidents Organization (YPO).</p>
	  <p>Mark holds an MBA from Stanford Business School and a B.S. in Electrical Engineering from Princeton University.</p>

	<div class="clearfix"></div>
	</div>

	<div class="clearfix pink_border"></div>

	<div class="board_member expander">
	  <img src="../images/headshots/jeff_fagnan.jpg" border="0" width="139" height="139" style="float:left; margin:0 20px 10px 0">
	  <h1>Jeff Fagnan</h1>
	  <p>Jeff Fagnan, investor, is a partner in the technology group, and focuses on emerging companies in enterprise and internet infrastructure as well as alternative energy technologies / advanced material science. He works closely with MIT, Harvard University, Boston University and other innovation engines, to commercialize technologies developed in technical labs.</p>
	  <p>Before joining Atlas Venture, Jeff was a Partner with Seed Capital Partners and he opened the firm's Boston office. While at Seed Capital, Jeff was the lead and founding investor in DataPower Technologies, Way Systems, and Polychromix. Before venture, Jeff worked for Booz Allen &amp; Hamilton and Nortel Networks. He also started a coffee business in Rochester, New York.</p>
	  <p>Since joining Atlas Venture, Jeff led the Atlas investment in DataPower Technologies which was acquired by IBM in 2005. He was the founding investor, and currently sits on the boards, of Atlas portfolio companies AEB, Bit9, DataXu, Keas, Songbird, and Veracode. He also sits on the Board of portfolio company SimpleTuition and led the firm's investments in Mascoma.</p>
	  <p>Jeff received his M.B.A. from the William E. Simon Graduate School of Business at the University of Rochester, and a B.S. from the University of Alaska.</p>
	<div class="clearfix"></div>
	</div>

	<div class="clearfix pink_border"></div>

	<div class="board_member expander">
	  <img src="../images/headshots/Jim.png" border="0" width="139" height="139" style="float:left; margin:0 20px 10px 0">
	  <h1>Jim Pitkow</h1>
	  <p>Jim Pitkow brings wide media connections, a deep technology background, and Silicon Valley entrepreneurial experience to his role as Songbird board member. CEO and co-founder of Attributor, Jim also serves as the Chairman of Anchor Intelligence. Prior to Attributor, Jim was CEO and Chairman of Moreover Technologies, where he successfully restructured the company through acquisition by VeriSign in October of 2005. Before Moreover, Jim was the President and Chairman of Outride Inc., a spinout from the Xerox Palo Alto Research Center (PARC), which was acquired by Google.</p>
	  <p>Jim received his Ph.D. in Computer Science from the Georgia Institute of Technology, and graduated Cum Laude in Psychology from the University of Colorado.</p>
	<div class="clearfix"></div>
	</div>

	<div class="clearfix pink_border"></div>

	<div class="board_member expander">  
	  <img src="../images/headshots/al_ramadan.jpg" border="0" width="139" height="139" style="float:left; margin:0 20px 20px 0">
	  <h1>Al Ramadan</h1>
	  <p>Al Ramadan is an Australian-born American. Al has experienced first-hand what it takes to be a leader in the technology industry - from early stage VC backed companies through to mature public companies. He started his career as a Mathematician / Computer Scientist before moving into Executive Management and Leadership positions. He has deep insights into the technology and mobile markets, and was selected by TIME as one of the most influential people in the digital economy.</p>
	  <p>Today he is focused on developing early stage companies into category leaders. He participates as a Board Member, a Strategic Advisor and in some cases an Angel Investor in companies wanting to change the world. He served as senior vice president of the Mobile and Device Solutions Business Unit at Adobe Systems through 2008. Al joined Adobe through the company’s acquisition of Macromedia in 2005. At Macromedia, Al was the executive vice president and general manager of mobile and devices.  He previously served as chief marketing officer at Macromedia from 2002 to 2003. He was a member of Macromedia’s Board of Directors for two years before joining Macromedia in 2001.</p>
	  <p>Prior to joining Macromedia, Al was chairman co-founder, president and CEO of Quokka Sports from 1996 to 2000. Al served as CTO for the Australia America’s Cup Challenge from 1992-1995, and founded OzWare - an Australian software development company - in 1990.  Prior to 1990, Al was a mathematician and computer scientist at BHP Steel.</p>
	  <p>Al graduated from Monash University a dual degree in computer science and applied mathematics, and later graduated from Stanford University’s Executive Program for Growing Companies.</p>
	<div class="clearfix"></div>
	</div>

	<div class="clearfix pink_border"></div>

	<div class="board_member expander">
	  <img src="../images/headshots/betsey_nelson.jpg" border="0" width="139" height="139" style="float:left; margin:0 20px 10px 0">
	  <h1>Betsey Nelson</h1>
	  <p>Betsey Nelson brings more than 20 years experience in the technology and digital media market to the Songbird board, previously serving as executive vice president, chief financial officer, and a member of the Board of Directors at Macromedia until its acquisition by Adobe in December 2005. As chief financial officer, Betsey helped Macromedia grow to more than $500 million in annual revenues and increased its market value tenfold during that period. She was also responsible for leading the company's key operational and administrative functions, including business development, customer care, finance, investor relations, information technology, legal, operations and real estate.</p>
	  <p>Prior to Macromedia, Betsey spent eight years at Hewlett-Packard, where she held a variety of positions in international finance and corporate development. Before that, she worked as an economist with the firm of Robert Nathan Associates in Washington DC.</p>
	  <p>Betsey currently serves on the Board of Directors for several public and private companies (Ancestry.com, Brightcove, Nokia, LivingSocial, DAI, and Yodlee).</p>
	  <p>Betsey holds an MBA in Finance with distinction from the Wharton School at the University of Pennsylvania, and a BS in Foreign Service from Georgetown University.</p>

	<div class="clearfix"></div>
	</div>

	<div class="clearfix pink_border"></div>

	<div class="board_member expander">
	  <img src="../images/headshots/ewittman_headshot_color_small.png" border="0" width="139" height="139" style="float:left; margin:0 20px 10px 0">
	  <h1>Eric Wittman</h1>
	  <p>Eric Wittman has worked in the technology industry for over 20 years satisfying his hunger to create products that are loved by everyone. When people are passionate about the products they use, companies are successful and the teams that build those products are proud of their accomplishments.</p>
	  <p>As CEO and President of Songbird, Eric is responsible for driving the strategy, vision and creation of a next generation social music experience. He’s blessed to be working with an exceptionally talented team who have decades of experience building successful products. He works tirelessly to ensure great product experiences and businesses are created and does whatever it takes to keep the team inspired so that they can continue create the next great thing.</p>
	  <p>Growing up in Silicon Valley, Eric was exposed many new technologies at an early age which fueled his passion for building products. His early entrepreneurial spirit started at age seven when he began delivering three newspaper routes (doing so through a revenue share with a 14 year old neighbor because he was legally too young) and learned early on to always strive to create great experiences for his customers. His official career in technology began right after high school when he joined an intriguing startup called Macromedia. The biggest attraction to Macromedia was not only the innovative products but also the company’s tagline, “Experience Matters”, which mirrored his product development philosophy.</p>
	  <p>With 20 years of tech experience under his belt, Eric has been involved in creating some of the industries most groundbreaking products including Director (the standard for multimedia CD-ROM development), Shockwave (the first multimedia technology for the web), Dreamweaver (de facto standard for WYSIWYG HTML editing) and Flash. Flash was the most significant experience for Eric where he led the business and product strategy and took an acquired animation technology (FutureSplash) and turned it into the de facto standard for rich experiences on the web which amassed a base of over 3 million developers, install base of over 2 billion computers and devices and inspired the development of HTML 5.</p>

	<div class="clearfix"></div>
	</div>

	<div class="clearfix pink_border"></div>

	<div class="board_member expander">
	  <img src="../images/headshots/les_schmidt.jpg" border="0" width="139" height="139" style="float:left; margin:0 20px 10px 0">
	  <h1>Les Schmidt</h1>
	  <p>Les Schmidt is a seasoned startup/emerging growth company executive. His specialty is growing and scaling companies, and has traversed the Venture-backed startup to IPO road four times. Les has over 20 years of experience of technology and emerging growth company experience.</p>
	  <p>He joined Songbird to lead the transformation of the Company’s products into a rich music experience platform. Prior to taking on the CEO role at POTI Inc (dba. Songbird), Les was the Chief Operating Officer of GlobalEnglish. In this role, Les lead the design and development of next-generation, world class SaaS elearning services for the Global 2000 customers that need English to sustain and expand their ability to compete globally.</p>
	  <p>Recently, Les was the vice president of worldwide Custom Solutions and business operations for the Mobile and Devices business unit of Adobe Systems. In this role, Les was responsible for the successful launch of Adobe’s mobile solutions for wireless operators around the world, working with Verizon, TMobile, DoCoMo, ChungHua Telecom, Telenor and others to create better user experiences on mobile devices. Les joined Adobe when Macromedia was acquired in 2005. Les joined Macromedia in 2003 to lead the redesign of the macromedia.com website to coincide with the launch of the MX 2004 products.</p>
	  <p>His other experiences include: founding The Information Privacy Company (consumer identity theft protection), COO for the San Francisco 49ers, executive vice president and chief financial officer for Quokka Sports (digital sports entertainment), president and CEO of MECON, Inc. (health care information services), COO of The Learning Company (educational software) and CFO for Applied Immune Services (aphaeresis devices). Les was elected to the Board of Trustees of Golden Gate University in 2004, and served as Chairman of the Board from 2007 to 2011.</p>
	  <p>Les graduated from Antioch College with a degree in political science and economics in 1976. He earned his master’s degree in taxation from Golden Gate University in 1981.</p>
	<div class="clearfix"></div>
	</div>

	<div class="clearfix pink_border"></div>

	<div class="board_member expander">
	  <img src="../images/headshots/dan_brongiel.jpg" border="0" width="139" height="139" style="float:left; margin:0 20px 10px 0">
	  <h1>Dan Brongiel</h1>
	  <p>Daniel Brongiel brings more than 20 years of global high-tech industry experience to his role as EVP of WorldWide Field Operations and board member of POTI Inc (dba. Songbird). Having lived throughout the Asia-Pacific area (including an extended stay in Japan) and the United States, Daniel brings an extensive background in international business planning and business development.</p>
	  <p>Daniel leads Songbird’s sales and marketing efforts to capitalize on long-term growth opportunities and align the company with key strategic partners. In this role, he is responsible for the strategy and direction of Songbird’s sales and marketing operations, including all customer-facing functions such as field marketing, go-to-market partners, e-commerce, and customer support.</p>
	  <p>Prior to joining Songbird, Daniel held executive level positions across a diverse range of business’s during his 12 years at Adobe Systems, Inc. During his successful tenure at Adobe, he was responsible for leading the overall strategy, including go-to-market plans, marketing, business development, and sales execution for Adobe’s North American Education business, WorldWide OEM/Bundle business, and Mobile & Device Business Unit. Daniel led teams of people up to 50 staff and $350m annual revenue.</p>
	  <p>Prior to Adobe, Daniel held a sales management position with a startup, Andromedia Inc. and held various roles within EMC and Computer Associates with a focus on sales, business development, and global account management.</p>
	  <p>Daniel holds a BS in Electrical Engineering and Technology from Sothern Illinois University, and has completed several executive programs focused on strategy, planning, operations, and sales. He is also active with his local charities and education groups in IL. </p>
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
