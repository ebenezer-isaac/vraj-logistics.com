<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<?php include "admin/parser.php"; ?>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="author" content="SemiColonWeb">
	<style>@charset "UTF-8";@font-face{font-display: swapfont-family:Lato;font-style:italic;font-weight:400;font-display:swap;src:local('Lato Italic'),local('Lato-Italic'),url(https://fonts.gstatic.com/s/lato/v16/S6u8w4BMUTPHjxsAXC-v.ttf) format('truetype')}@font-face{font-display: swapfont-family:Lato;font-style:normal;font-weight:300;font-display:swap;src:local('Lato Light'),local('Lato-Light'),url(https://fonts.gstatic.com/s/lato/v16/S6u9w4BMUTPHh7USSwiPHA.ttf) format('truetype')}@font-face{font-display: swapfont-family:Lato;font-style:normal;font-weight:400;font-display:swap;src:local('Lato Regular'),local('Lato-Regular'),url(https://fonts.gstatic.com/s/lato/v16/S6uyw4BMUTPHjx4wWw.ttf) format('truetype')}@font-face{font-display: swapfont-family:Lato;font-style:normal;font-weight:700;font-display:swap;src:local('Lato Bold'),local('Lato-Bold'),url(https://fonts.gstatic.com/s/lato/v16/S6u9w4BMUTPHh6UVSwiPHA.ttf) format('truetype')}@font-face{font-display: swapfont-family:Poppins;font-style:normal;font-weight:300;font-display:swap;src:local('Poppins Light'),local('Poppins-Light'),url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLDz8Z1xlEA.ttf) format('truetype')}@font-face{font-display: swapfont-family:Poppins;font-style:normal;font-weight:400;font-display:swap;src:local('Poppins Regular'),local('Poppins-Regular'),url(https://fonts.gstatic.com/s/poppins/v9/pxiEyp8kv8JHgFVrJJfedw.ttf) format('truetype')}@font-face{font-display: swapfont-family:Poppins;font-style:normal;font-weight:500;font-display:swap;src:local('Poppins Medium'),local('Poppins-Medium'),url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLGT9Z1xlEA.ttf) format('truetype')}@font-face{font-display: swapfont-family:Poppins;font-style:normal;font-weight:600;font-display:swap;src:local('Poppins SemiBold'),local('Poppins-SemiBold'),url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLEj6Z1xlEA.ttf) format('truetype')}@font-face{font-display: swapfont-family:Poppins;font-style:normal;font-weight:700;font-display:swap;src:local('Poppins Bold'),local('Poppins-Bold'),url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLCz7Z1xlEA.ttf) format('truetype')}:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%}section{display:block}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}h2{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}a{color:#007bff;text-decoration:none;background-color:transparent}img{vertical-align:middle;border-style:none}svg{overflow:hidden;vertical-align:middle}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}h2{margin-bottom:.5rem;font-weight:500;line-height:1.2}h2{font-size:2rem}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.clearfix::after{display:block;clear:both;content:""}.d-none{display:none!important}@media (min-width:576px){.d-sm-block{display:block!important}}::-webkit-selection{background:#156c30;color:#fff;text-shadow:none}:active,:focus{outline:0!important}body{line-height:1.5;color:#555;font-family:Lato,sans-serif}a{text-decoration:none!important;color:#156c30}a img{border:none}img{max-width:100%}h2{color:#444;font-weight:600;line-height:1.5;margin:0 0 30px 0;font-family:Poppins,sans-serif}h2{font-size:30px}@media (max-width:767.98px){h2{font-size:1.5rem}}p{margin-bottom:30px}#wrapper{position:relative;float:none;width:100%;margin:0 auto;background-color:#fff;box-shadow:0 0 10px rgba(0,0,0,.1);-moz-box-shadow:0 0 10px rgba(0,0,0,.1);-webkit-box-shadow:0 0 10px rgba(0,0,0,.1)}.min-vh-60{min-height:60vh!important}@media (min-width:768px){.min-vh-md-100{min-height:100vh!important}}@media (min-width:992px){#logo img{max-height:100%}}#logo a{color:#000;font-family:Poppins,sans-serif;font-size:36px}#logo img{display:block;max-width:100%;max-height:100%;height:100px}#logo a.retina-logo{display:none}@media only screen and (-webkit-min-device-pixel-ratio:2),only screen and (min--moz-device-pixel-ratio:2),only screen and (-o-min-device-pixel-ratio:2/1),only screen and (min-device-pixel-ratio:2),only screen and (min-resolution:192dpi),only screen and (min-resolution:2dppx){#logo a.retina-logo{display:-ms-flexbox;display:flex}}#primary-menu-trigger{display:-ms-flex;display:flex;opacity:1;z-index:1;font-size:.875rem;width:50px;height:50px;line-height:50px;justify-content:center;align-items:center}.svg-trigger{width:30px;height:30px}.svg-trigger path{fill:none;stroke:#333;stroke-width:5;stroke-linecap:round}.svg-trigger path:nth-child(1){stroke-dasharray:40 160}.svg-trigger path:nth-child(2){stroke-dasharray:40 142;transform-origin:50%}.svg-trigger path:nth-child(3){stroke-dasharray:40 85;transform-origin:50%}@media (min-width:992px){#primary-menu-trigger{display:none;opacity:0;z-index:0}}.slider-element{position:relative;width:100%;overflow:hidden}.slider-parallax{position:relative}.slider-parallax,.slider-parallax .swiper-container{visibility:visible;-webkit-backface-visibility:hidden}.slider-inner{position:absolute;overflow:hidden;opacity:1;visibility:visible;width:100%;height:100%;background-position:center center;background-repeat:no-repeat;background-size:cover}.slider-parallax .slider-inner{position:fixed}body:not(.side-header) .slider-parallax .slider-inner{left:0}.slider-parallax .slider-caption,.slider-parallax .slider-inner{will-change:transform;-webkit-transform:translate3d(0,0,0);-webkit-backface-visibility:hidden}@media (max-width:991.98px){#slider{display:-ms-flexbox!important;display:flex!important;flex-direction:column;justify-content:center}#slider .slider-inner{position:relative;display:-ms-flexbox;display:flex;flex-grow:1;align-items:center}}.swiper_wrapper{position:relative;width:100%;overflow:hidden}.swiper_wrapper .swiper-container{position:absolute;width:100%;height:100%;margin:0}.swiper_wrapper .swiper-slide{position:relative;margin:0;overflow:hidden}.swiper-slide-bg{background-position:center center;background-repeat:no-repeat;background-size:cover}.swiper-slide-bg{position:absolute;width:100%;height:100%;z-index:-1;top:0;left:0}.slider-element .container{position:relative;height:100%}.slider-caption{position:relative;display:-ms-flexbox;display:flex;height:100%;flex-flow:column;justify-content:center;z-index:20;max-width:550px;color:#eee;font-size:1.375rem;font-weight:300;text-shadow:1px 1px 1px rgba(0,0,0,.15)}.slider-caption:not(.dark),.slider-caption:not(.dark) h2{color:#222;text-shadow:none}.slider-caption h2{font-size:4rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;line-height:1;margin-bottom:0}.slider-caption p{margin-top:30px;margin-bottom:10px;font-size:1.5rem}@media (max-width:991.98px){.swiper_wrapper .slider-caption h2{font-size:5.5vw}.swiper_wrapper .slider-caption p{font-size:2.6vw}}.slider-caption.slider-caption-center{position:relative;max-width:800px;text-align:center;margin:0 auto;left:0;right:0}.slider-arrow-left,.slider-arrow-right{position:absolute;z-index:10;top:50%;left:0;background-color:rgba(0,0,0,.3);width:52px;height:52px;border:0;border-radius:0 3px 3px 0;transform:translateY(-50%)}.slider-arrow-right{left:auto;right:0;border-radius:3px 0 0 3px}.slider-arrow-left i,.slider-arrow-right i{line-height:50px;width:100%;height:100%;color:#ddd;color:rgba(255,255,255,.8);text-shadow:1px 1px 1px rgba(0,0,0,.1);font-size:34px;text-align:center}.slide-number{position:absolute;opacity:0;top:auto;right:20px;bottom:20px;z-index:20;width:36px;height:40px;text-align:center;color:rgba(255,255,255,.8);text-shadow:1px 1px 1px rgba(0,0,0,.15);font-size:18px;font-weight:300}.slide-number-current,.slide-number-total{position:absolute;line-height:1;top:5px;left:0}.slide-number-total{top:auto;bottom:5px;left:auto;right:0}.slide-number span{display:block;font-size:32px;line-height:40px}#gotoTop{display:none;z-index:599;position:fixed;width:40px;height:40px;background-color:#333;background-color:rgba(0,0,0,.3);font-size:1.25rem;line-height:36px;text-align:center;color:#fff;top:auto;left:auto;right:30px;bottom:50px;border-radius:2px}.stretched #gotoTop{bottom:30px}.slider-logo{max-width:100px;height:auto}.stretched #wrapper{width:100%;margin:0;box-shadow:none}:root{--swiper-theme-color:#007aff}.swiper-container{margin-left:auto;margin-right:auto;position:relative;overflow:hidden;list-style:none;padding:0;z-index:1}.swiper-wrapper{position:relative;width:100%;height:100%;z-index:1;display:flex;box-sizing:content-box}.swiper-wrapper{transform:translate3d(0,0,0)}.swiper-slide{flex-shrink:0;width:100%;height:100%;position:relative}:root{--swiper-navigation-size:44px}.dark,.dark h2{color:#eee}.dark .slider-caption:not(.not-dark),.dark .slider-caption:not(.not-dark) h2{color:#f7f7f7}@font-face{font-display: swapfont-family:font-icons;src:url(/css/fonts/font-icons.eot);src:url(/css/fonts/font-icons.eot) format('embedded-opentype'),url(/css/fonts/font-icons.woff) format('woff'),url(/css/fonts/font-icons.ttf) format('truetype'),url(/css/fonts/font-icons.svg) format('svg');font-weight:400;font-style:normal}[class^=icon-]{display:inline-block;font-family:font-icons;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:inherit;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.icon-angle-left:before{content:"\e7a4"}.icon-angle-right:before{content:"\e7a5"}.icon-angle-up:before{content:"\e7a6"}:root{--animate-duration:1s;--animate-delay:1s;--animate-repeat:1}[data-animate]:not(.animated){opacity:0}html{scroll-behavior:smooth}.slider-bg-images{display:table;width:100%;filter:blur(4px);-webkit-filter:blur(4px);background-position:center top;background-repeat:no-repeat;background-size:cover}</style>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap" rel="stylesheet" type="text/css" media="print" onload="this.media='all'">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="print" onload="this.media='all'">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="print" onload="this.media='all'">
	<link rel="stylesheet" href="css/swiper.css" type="text/css" media="print" onload="this.media='all'">
	<link deferrel="stylesheet" href="css/dark.css" type="text/css" media="print" onload="this.media='all'">
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" media="print" onload="this.media='all'">
	<link rel="stylesheet" href="css/animate.css" type="text/css" media="print" onload="this.media='all'">
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" media="print" onload="this.media='all'">
	<link rel="stylesheet" href="css/custom.css" type="text/css" media="print" onload="this.media='all'">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="MUI4GEpXPWqN3alZWDZk5JT7bYk7Jwstw1Njr5UbLAQ">
	<meta property="og:title" content="<?php echo $data["title"]; ?>">
    <meta property="og:site_name" content="Click To Know More">
    <meta property="og:url" content="https://demo.mycrolinks.com/vrajlogistics.in">
    <meta property="og:description" content="Fleet Owners and Transport Contractors">
    <meta property="og:image" content="https://demo.mycrolinks.com/vrajlogistics.in/images/logo.png">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="500">
    <meta property="og:type" content="website">
    <meta name="description" content="Most Sought Goods Transportation Service in Gujarat and Maharastra">
    <meta name="author" content="Ebenezer Isaac">
    <meta name="theme-color" content="#000000">
    <meta name="google-site-verification" content="GUFBW5od3qQmuDAG8G1_GbYftsnLK9i2bgWdOxthNlQ">
	<meta name="keywords" content="vraj logistics, vraj logistics vadodara, fleet owners vadodara ,goods transportation vadodara, goods transportation gujarat, vraj fleet owners">
	<title><?php echo $data["title"]; ?></title>
</head>
<body class="stretched">
	<div id="wrapper" class="clearfix">
		<div id="section-home" class="page-section" style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>
		<section id="slider" class="slider-element slider-parallax min-vh-60 min-vh-md-100 with-header swiper_wrapper">
			<div class="slider-inner">
				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-center">

									<h2 data-animate="fadeInUp"><img src="images/logo.png" alt="Image" class="slider-logo"><br><?php echo $data["index_heading1"]; ?></h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200"><?php echo $data["index_subheading1"]; ?></p>
								</div>
							</div>
							<div class="swiper-slide-bg slider-bg-images" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('images/slider1.jpg');"></div>
						</div>
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption">
									<h2 data-animate="fadeInUp"><img src="images/logo.png" alt="Image" class="slider-logo"><br><?php echo $data["index_heading2"]; ?></h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200"><?php echo $data["index_subheading2"]; ?></p>
								</div>
							</div>
							<div class="swiper-slide-bg slider-bg-images" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('images/slider2.jpg'); background-position: center top;"></div>
						</div>
					</div>
					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
				</div>
			</div>
		</section>
		<header id="header" class="full-header">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">
						<div id="logo">
							<a href="index.html" class="standard-logo" data-dark-logo="images/logo.png"><img src="images/logo.png" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo" data-dark-logo="images/logo.png"><img src="images/logo.png" alt="Canvas Logo"></a>
						</div>
						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>
						<nav class="primary-menu">
							<ul class="menu-container one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
								<li class="menu-item"><a class="menu-link" href="#section-home" data-href="#section-home"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#section-about" data-href="#section-about"><div>About</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#section-services" data-href="#section-services"><div>Services</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#section-contact" data-href="#section-contact"><div>Contact</div></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header>
		<section id="content">
			<div class="content-wrap">
				<section id="section-about" class="page-section">
					<div class="container clearfix">
						<div class="heading-block center">
							<h2>We are <span><?php echo $data["summary_heading"]; ?></span></h2>
							<span><?php echo $data["summary_subheading"]; ?></span>
						</div>
						<div class="row justify-content-center col-mb-50">
							<div class="col-sm-6 col-lg-4">
								<div class="feature-box media-box">
									<div class="fbox-media">
										<img src="images/reliable.png" alt="Why choose Us?">
									</div>
									<div class="fbox-content px-0">
										<h3><?php echo $data["summary_pheading1"]; ?><span class="subtitle"><?php echo $data["summary_psubheading1"]; ?></span></h3>
										<p><?php echo $data["summary_ptext1"]; ?></p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="feature-box media-box">
									<div class="fbox-media">
										<img src="images/safety.png" alt="Why choose Us?">
									</div>
									<div class="fbox-content px-0">
										<h3><?php echo $data["summary_pheading2"]; ?><span class="subtitle"><?php echo $data["summary_psubheading2"]; ?></span></h3>
										<p><?php echo $data["summary_ptext2"]; ?></p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="feature-box media-box">
									<div class="fbox-media">
										<img src="images/customer-satisfaction.png" alt="Why choose Us?">
									</div>
									<div class="fbox-content px-0">
										<h3><?php echo $data["summary_pheading3"]; ?><span class="subtitle"><?php echo $data["summary_psubheading3"]; ?></span></h3>
										<p><?php echo $data["summary_ptext3"]; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="section-services" class="page-section topmargin-lg">
					<div class="clear bottommargin-lg"></div>
					<div id="section-features" class="heading-block text-center page-section">
						<h2><?php echo $data["features_heading"]; ?></h2>
					</div>
					<div class="row justify-content-center col-mb-50 mb-0" style="margin: 20px 20px;"> 
						<div class="col-md-6 col-lg-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="400">
									<a href="#"><img src="images/performance.png" alt="Powerful Performance"></a>
								</div>
								<div class="fbox-content">
									<h3><?php echo $data["feature_heading1"]; ?></h3>
									<p><?php echo $data["feature_text1"]; ?></p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="600">
									<a href="#"><img src="images/flag.png" alt="Responsive Layout"></a>
								</div>
								<div class="fbox-content">
									<h3><?php echo $data["feature_heading2"]; ?></h3>
									<p><?php echo $data["feature_text2"]; ?></p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="800">
									<a href="#"><img src="images/tick.png" alt="Retina Graphics"></a>
								</div>
								<div class="fbox-content">
									<h3><?php echo $data["feature_heading3"]; ?></h3>
									<p><?php echo $data["feature_text3"]; ?></p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="1200">
									<a href="#"><img src="images/map.png" alt="Responsive Layout"></a>
								</div>
								<div class="fbox-content">
									<h3><?php echo $data["feature_heading4"]; ?></h3>
									<p><?php echo $data["feature_text4"]; ?></p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="1400">
									<a href="#"><img src="images/seo.png" alt="Retina Graphics"></a>
								</div>
								<div class="fbox-content">
									<h3><?php echo $data["feature_heading5"]; ?></h3>
									<p><?php echo $data["feature_text5"]; ?></p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="1600">
									<a href="#"><img src="images/support.png" alt="Powerful Performance"></a>
								</div>
								<div class="fbox-content">
									<h3><?php echo $data["feature_heading6"]; ?></h3>
									<p><?php echo $data["feature_text6"]; ?></p>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</section>
		<section id="section-contact" class="googleMapSection">
			<div class="clear bottommargin-lg"></div>
					<div id="section-features" class="heading-block text-center page-section">
						<h2>Reach Us</h2>
					</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 noPadding">
						<div class="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.6496058555053!2d73.25111617480448!3d22.32908774185228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fcf6cf04d9daf%3A0x4b91c892a3acccd7!2sV-Raj%20Logistics!5e0!3m2!1sen!2sin!4v1718297102325!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="row col-mb-50">
						<div class="col-md-12 col-lg-6">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-map-marker2"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Our Headquarters
										<span class="subtitle">
											<?php echo $data["address"]; ?>
										</span>
									</h3>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-phone3"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Speak to Us
										<span class="subtitle">
											<br>
											<a href="tel:+919327506799"><?php echo $data["phone1"]; ?></a><br>
											<a href="tel:+919375195111"><?php echo $data["phone2"]; ?></a><br>
											<a href="tel:+916358757886"><?php echo $data["phone3"]; ?></a><br>
										</span>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer id="footer" class="dark" style="background-color: #0d0d0d;">
			<div class="container">
				<div class="footer-widgets-wrap">
					<div class="row">
						<div class="col-xl-6 col-md-12">
							<div class="widget clearfix">
								<img src="images/logo.png" alt="Image" class="footer-logo">
								<p><?php echo $data["footer_heading"]; ?></p>
								<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>Our Office:</strong><br>
										<?php echo $data["address"]; ?>
									</address>
									<address>
										<strong>Phone:</strong><br>
										<a href="tel:+919327506799"><?php echo $data["phone1"]; ?></a><br>
										<a href="tel:+919375195111"><?php echo $data["phone2"]; ?></a><br>
										<a href="tel:+916358757886"><?php echo $data["phone3"]; ?></a><br>
									</address>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-md-12">
							<div class="widget widget_links clearfix" style="text-align:right;">
								<h4>Links</h4>
								<ul>
									<li><a href="#section-home">Home</a></li>
									<li><a href="#section-about">About</a></li>
									<li><a href="#section-services">Services</a></li>
									<li><a href="#section-contact">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div id="copyrights">
				<div class="container">
					<div class="row col-mb-30">
						<div class="col-md-6 text-center text-md-left" id="copyrightsTag">
						</div>
						<script>
							var d = new Date();
							var curr_year = d.getFullYear();
							document.getElementById("copyrightsTag").innerHTML = "Copyright By &COPY; <?php echo $data["title"]; ?> - "+curr_year+"<br><div class='copyright-links'><a href='https://mycrolinks.com'>Website Designed and Maintained by MycroLinks</a>";
						</script>
						<div class="col-md-6 text-center text-md-right">
							<div class="clear"></div>
							<br>
							<span class="middot"><i class="icon-headphones"></i><a href="tel:+919327506799"><?php echo $data["phone1"]; ?></a>&middot;</span>
							<span class="middot"><i class="icon-headphones"></i><a href="tel:+919375195111"><?php echo $data["phone2"]; ?></a>&middot;</span>
							<span class="middot"><i class="icon-headphones"></i><a href="tel:+916358757886"><?php echo $data["phone3"]; ?></a>&middot;</span> 
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<div id="gotoTop" class="icon-angle-up"></div>
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>
	<script src="js/functions.js"></script>
</body>
<?php
$page = "VRajLogistics";
include "logger.php"; 
?>
</html>