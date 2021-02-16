<?php
require_once 'lib/config.php';
$page = $_SERVER['REQUEST_URI'];
$page = explode("/", $page);
$page = $page[1];


if ($page  == "" || $page == "home") {
	$title = "FemCode Africa - HOME | Building the next era of female software entrepreneurs by Bringing Affordable Learning to Your Doorstep";
}elseif($page == "about"){
    $title = "FemCode Africa - ABOUT US | FemCode Africa is your No.1 Virtual Hub with the vision of educating and empowering all females across Africa with on demand tech skills for free or at very affordable prices without them having to leave the comfort of their homes.";
}elseif($page == "fem-hub"){
    $title = "FemCode Africa - Fem Hub | Fem Hub is a division of FemCode Africa which handles clients projects ranging from web development, andriod app development, digital marketing, graphics design and other tech skills.
";
}elseif($page == "fem-boot"){
    $title = "FemCode Africa - Fem Boot | With online classes taught by professional instructors and one-on-one mentoring on different on demand tech skills, Fem Boot is every females gateway to a new career in just few months.
";
}elseif($page == "fem-lancer"){
    $title = "FemCode Africa - Fem Lancer | Fem Lancer is your No.1 freelance platform for ladies. FemLancer is a division of Femcode Africa that consists of a network of professional female lancers who are at your beck and call to give you the right touch of professionalism to your work.
";
}elseif($page == "sponsor"){
    $title = "FemCode Africa - Sponsor A Lady | We have impacted the lives of over a thousand females across Africa through our different programmes and activities. Through your donations, partnership, sponsorship and support, we can extend the reach of our impact across more underserved ladies in Africa.
";
}elseif($page == "tte"){
    $title = "FemCode Africa - Teach To Earn | The Teach To Earn (TTE) program is to help us train more ladies in tech through partnerships with instructors, instructors get to host a training for a slash fee having free slots for females. (Training fee must not exceed $25).
";
}elseif($page == "offers"){
    $title = "FemCode Africa - Offers | handles the 30days trainning that is open to every one( Male and Females) to a paticular language or skill for 30days(1 month).  We partner with Tech/brands to make this training as low as and affordable to those that wants to better or learn a new skill or stat a career in Tech like our boot camp trainings. This event is only done twice a year covering seven(7) tracks or language.
";
}elseif($page == "affiliate"){
    $title = "FemCode Africa - Affiliate | Make 20% of from every contract/project you bring/refer to us. FemCode Africa is giving you the opportunity to make some extra money at your own free time.
";
}elseif($page == "support"){
    $title = "FemCode Africa - Support A Lady | Support 1000 Ladies To Get Access To On Demand Tech And Digital Skills. FemCode Africa is an organization centered on training women with on demand tech skills either for free or at a very low price through an initiative known as Fem-Boot (Female Boot-camp). Over the years this boot-camp has been for FREE and has empowered over 1,700 women with tech skills ranging from web development, android app development and digital marketing.
";
}
else{
	$title = "FemCode Africa - Building the next era of female software entrepreneurs by Bringing Affordable Learning to Your Doorstep";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Building the next era of female software entrepreneurs by Bringing Affordable Learning to Your Doorstep." />
	<meta name="keywords" content="Fem Code,FemCode, Fem Code Africa, FemCode Africa,bootcamp, academy coding, web development, mobile development, FemCode, abia" />
	<meta name="author" content="FemCode Africa" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="FemCode Africa"/>
	<meta property="og:image" content="<?php echo MULTIPATH ?>img/bg-logo.jpg"/>
	<meta property="og:url" content="<?php echo SITEURL ?>"/>
	<meta property="og:site_name" content="FemCode Africa"/>
	<meta property="og:description" content="Building the next era of female software entrepreneurs by Bringing Affordable Learning to Your Doorstep."/>
	<meta name="twitter:title" content="FemCode Africa" />
	<meta name="twitter:image" content="<?php echo MULTIPATH ?>img/bg-logo.jpg" />
	<meta name="twitter:url" content="<?php echo SITEURL ?>" />
	<meta name="twitter:card" content="<?php echo MULTIPATH ?>img/bg-logo.jpg" />
	
	<meta name="google-site-verification" content="kKHm_g6piWS24efRkQf3h-MCGQAkzWl_ZRYJBax1G6A" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo MULTIPATH ?>img/bg-logo.jpg">

	
	
	<link rel="stylesheet" href="<?php echo MULTIPATH ?>/css/font-awesome/css/font-awesome.min.css">
	<link href="<?php echo MULTIPATH ?>/css/compiled.min.css" rel="stylesheet">
	<link href="<?php echo MULTIPATH ?>/css/fancybox.min.css" rel="stylesheet">
	<link href="<?php echo MULTIPATH ?>/css/style.css" rel="stylesheet">

	<!-- switch title based on page -->
	<title><?php echo $title ?></title> 
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115741716-4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-115741716-4');
    </script>
</head>

<body class="fixed-sn white-skin">
	<header>
		<!-- Side Nav -->
		<ul id="slide-out" class="side-nav fixed sn-bg-4 custom-scrollbar">
			<li>
				<div class="logo-wrapper waves-light">
					<a href="<?php echo SITEURL?>home"><img src="<?php echo MULTIPATH?>img/logo.png" class="img-fluid flex-center"></a>
				</div>
			</li>
			<li><h5 class="icons-s fb-i fem-dark-text text-center font-weight-bold"><a class="fem-dark-text" href="<?php echo SITEURL?>home"> <?php echo FULL_NAME ?> </a></h5></li>
			

			<ul class="collapsible collapsible-accordion font-weight-bold">	
				<li>
					<a href="<?php echo SITEURL?>home"  class="collapsible-header fem-dark-text font-weight-bold waves-effect arrow-r"><i class="fa fa-home fem-dark-text"></i>Home </a> 
				</li>
				<li>
					<a href="<?php echo SITEURL?>about"  class="collapsible-header font-weight-bold fem-dark-text waves-effect arrow-r"><i class="fa fa-archive fem-dark-text"></i>About Us </a> 
				</li>

				<li>
					<a href="<?php echo SITEURL?>fem-hub"  class="collapsible-header font-weight-bold fem-dark-text waves-effect arrow-r"><i class="fa fa-institution fem-dark-text"></i>Fem Hub </a> 
				</li>

				<li>
					<a href="<?php echo SITEURL?>fem-boot"  class="collapsible-header font-weight-bold fem-dark-text waves-effect arrow-r"><i class="fa fa-graduation-cap fem-dark-text"></i>Fem Boot </a> 
				</li>

				<li>
					<a href="<?php echo SITEURL?>fem-lancer"  class="collapsible-header font-weight-bold fem-dark-text waves-effect arrow-r"><i class="fa fa-laptop fem-dark-text"></i>Fem Lancer </a> 
				</li>
				<li>
					<a href="<?php echo SITEURL?>sponsor"  class="collapsible-header font-weight-bold fem-dark-text waves-effect arrow-r"><i class="fa fa-tint fem-dark-text"></i>Become a Partner/Sponsor </a> 
				</li>
				<li>
					<a href="https://www.facebook.com/groups/FemCodeAfrica/?ref=share"  class="collapsible-header font-weight-bold fem-dark-text waves-effect arrow-r"><i class="fa fa-users fem-dark-text"></i>Join Our Community</a> 
				</li>
				<li>
					<a href="<?php echo SITEURL?>offers"  class="collapsible-header font-weight-bold fem-dark-text waves-effect arrow-r"><i class="fa fa-certificate fem-dark-text"></i>Fem 30Days </a> 
				</li>
				<li>
					<a target="_blank" href="https://femcodeafrica.org/blog/"  class="collapsible-header font-weight-bold fem-dark-text waves-effect arrow-r"><i class="fa fa-star fem-dark-text"></i>Blog/Updates </a> 
				</li>
				
				<li>
					<a href="<?php echo SITEURL?>courses"  class="collapsible-header font-weight-bold fem-dark-text waves-effect arrow-r"><i class="fa fa-book fem-dark-text"></i>Fem Courses</a> 
				</li>
				
				
				<li>
					<a href="<?php echo SITEURL?>affiliate"  class="collapsible-header font-weight-bold fem-dark-text waves-effect arrow-r"><i class="fa fa-credit-card fem-dark-text"></i>Our Affliate Program</a> 
				</li>
				
				
				
				<li class="b"><h5 class="icons-sm fb-ic fem-dark-text text-center font-weight-bold">Contact Us</h5></li>
				
				<li>
					<a href="tel:<?php echo CONTACT_PHONE?>" class="collapsible-header fem-dark-text waves-effect arrow-r"><i class="fa fa-phone fem-dark-text"></i>Call Now </a> 
				</li>
				<li>
					<a target="_blank" href="https://wa.me/2349017434810" class="collapsible-header fem-dark-text waves-effect arrow-r"><i class="fa fa-whatsapp fem-dark-text"></i>Chat Now</a>
					
				</li>
				<li>
					<a href="<?php echo SITEURL?>contact" class="collapsible-header fem-dark-text waves-effect arrow-r"><i class="fa fa-envelope fem-dark-text"></i>Send A Message</a> 
				</li>
			</ul>
			<div class="sidenav-bg mask-strong"></div>
		</ul>

		<!-- Top Nav-->

		<nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
			<div class="float-left">
				<a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars fem-dark-text"></i></a>
			</div>
			<div class="breadcrumb-up mr-auto">
				<p class="font-weight-bold fem-dark-text"> 
					<a href="<?php echo SITEURL?>home"><img src="<?php echo MULTIPATH?>img/logo.png" class="img-fluid mt-3 ml-3" width="100px" style="position: ;"> </a>
				</p>
			</div>
			<ul class="nav navbar-nav nav-flex-icons ml-auto ">
				<li class="nav-item">
					<a href="<?php echo SITEURL?>home"  class="nav-link fem-dark-text font-weight-bold"><i class="fa fa-home "></i> <span class="clearfix d-none d-md-inline-block">Home </span></a> 
				</li>

				<li>
					<a href="<?php echo SITEURL?>about"  class="nav-link fem-dark-text font-weight-bold"><i class="fa fa-archive fem-dark-text"></i>About Us </a> 
				</li>

				<li class="nav-item">
					<a href="<?php echo SITEURL?>fem-hub"  class="nav-link fem-dark-text font-weight-bold d-none d-sm-inline-block"><i class="fa fa-institution "></i> <span class="clearfix d-none d-sm-inline-block">Fem Hub </span></a> 
				</li>

				<li class="nav-item">
					<a href="<?php echo SITEURL?>fem-boot"  class="nav-link fem-dark-text font-weight-bold d-none d-sm-inline-block"><i class="fa fa-graduation-cap "></i> <span class="clearfix d-none d-sm-inline-block">Fem Boot </span></a> 
				</li>

				<li>
					<a href="<?php echo SITEURL?>offers"  class="nav-link fem-dark-text font-weight-bold d-none d-sm-inline-block"><i class="fa fa-certificate fem-dark-text"></i>Fem 30Days </a> 
				</li>

				<li class="nav-item">
					<a href="<?php echo SITEURL?>fem-lancer"  class="nav-link fem-dark-text font-weight-bold d-none d-sm-inline-block"><i class="fa fa-laptop "></i> <span class="clearfix d-none d-sm-inline-block">Fem Lancer </span></a> 
				</li>

				<li>
					<a href="<?php echo SITEURL?>courses"  class="nav-link fem-dark-text font-weight-bold d-none d-sm-inline-block"><i class="fa fa-book fem-dark-text"></i>Fem Courses</a> 
				</li>

				<li class="nav-item">
					<a href="<?php echo SITEURL?>sponsor"  class="nav-link fem-dark-text font-weight-bold d-none d-sm-inline-block"><i class="fa fa-tint "></i> <span class="clearfix d-none d-sm-inline-block">Become A Sponsor/Partner </span></a> 
				</li>
				
				
				<li class="nav-item">
					<a href="<?php echo SITEURL?>contact" class="nav-link fem-dark-text font-weight-bold"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block"></span></a>
				</li>
				<li class="nav-item">
					<a href="tel:<?php echo CONTACT_PHONE?>" class="nav-link fem-dark-text font-weight-bold">
						<i class="fa fa-phone"></i> <span class="clearfix d-none d-sm-inline-block"></span>
					</a>
				</li>
				<li class="nav-item">
					<a target="_blank" href="https://wa.me/2349017434810"class="nav-link fem-dark-text font-weight-bold"><i class="fa fa-whatsapp"></i><span class="clearfix d-none d-sm-inline-block"></span>
					</a>
					
				</li>
			</ul>
		</nav>
	</header>
	

