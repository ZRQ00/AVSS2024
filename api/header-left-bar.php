<?php 
ini_set('error_reporting', E_ALL);
error_reporting(-1);
$json = json_decode(file_get_contents('configuration/config.json'), true);
?>

<html>
<head>
	<title>AVSS 2024</title>
	<link rel="icon" href="../images/AVSS2024_Logo.jpg">
	<link href="css/reset.css" rel='stylesheet' type='text/css'>
	<link href="css/basscss.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/../css/sponsors.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/../css/navbar.css">
	<link rel="stylesheet" href="/../css/gallery.css">
	<link rel="stylesheet" href="/../css/mobilenav.css">
	<script
  		src="https://code.jquery.com/jquery-3.1.1.min.js"
  		integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  		crossorigin="anonymous">
  	</script>
	<link rel="stylesheet" href="css/main-styles.css">
	<?php 
		if(isset($stylesheet)){
			echo '<link rel="stylesheet" type="text/css" href="'.$stylesheet.'">'; 
		}
	?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="keywords" content="AVSS2024,Conference,IEEE">

	<style type="text/css">

		#header:after{
		    background-image: url(<?php echo $json['header']['bannerImage'];?>); 
		    background-position:bottom;
			background-repeat: no-repeat;
		}
	</style>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-84971641-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			
			var newsCounter = 0

			$('#news-ticker-link').attr('href', config.newsTicker[0].link)
			$('#news-ticker-link').html(config.newsTicker[0].content)

			setInterval(function(){
				
				if(newsCounter + 1 > config.newsTicker.length-1){
					newsCounter = 0
				}else{
					newsCounter++
				}
				
				$('#news-ticker-link').fadeOut(500, function(){
					$('#news-ticker-link').attr('href', config.newsTicker[newsCounter].link)
					if(config.newsTicker[newsCounter].openInNewWindow){
						$('#news-ticker-link').attr('target', '_blank')
					}else{
						$('#news-ticker-link').attr('target', '')
					}
					$('#news-ticker-link').html(config.newsTicker[newsCounter].content)
					$('#news-ticker-link').fadeIn(500, function(){
					})
				})
				
			}, 5000)

			
		})
	</script>
	<?php 
		echo '<script>var config='.file_get_contents('configuration/config.json').'</script>';
	?>
</head>
<body>
	<div class="flex-column main-container">
		<div id="header" class="flex flex-columm flex-auto">
			<div class="flex-auto" style="width: 85%">
				<div class="dates"><a href="dates.php"><i class="fa fa-2x fa-calendar"></i></a></div>
				<div id="header-title-container">
					<!-- Logos -->
					<div class="header-title bold flux-auto" style=""><a href="index.php">
					<img style="margin-top:1%;width:120px;height:120px; object-fit:contain" src="images/AVSS2024_Logo.jpg">
				<img style="margin-top:1%;width:200px;height:120px; object-fit:contain" src="images/SPS_Logo_Color_RGB.png">
				
				</div>
					<div class="header-title bold" style="font-size: x-large;"><?php echo $json['header']['subtitle'];?></div>
					<div class="header-title bold" style="font-size: large;"><?php echo $json['header']['dateTitle'];?> <a href="https://2024.ieeeicme.org/" style="text-decoration: underline;"><?php echo $json['header']['ICME2024'];?></a></div>
					<div class="header-title bold" style="font-size: medium;"><?php echo $json['header']['locationPlaceName'];?> <br> <?php echo $json['header']['locationAreaName'];?></div>
				</div>
				<div id="header-quick-links" class="flex flex-wrap">
					<button onclick="location.href='index.php';">HOME</button>
					<button onclick="location.href='hotel.php';">HOTEL</button>
					<button onclick="location.href='dates.php';">DATES</button>
				</div>
				<div id="news-ticker" class="flex flex-wrap news-ticker">
					<p style="padding-bottom:10;margin:0;font-size:smaller">
						<i style="color:red;margin-right:10px" class="fa fa-1x fa-newspaper-o"></i> 
						<span id="news-ticker-content">
							<a id="news-ticker-link" href="#">Paper submission opens March 15, 2024, Anytime on Earth (AoE)</a>
						</span>
					</p>
				</div>
			</div>
			<!-- UPDATE SPONSORS FOR HEADER HERE-->
			<!--
			<div class="flex flex-wrap logos" style="width: 15%">
				
				<img style="margin-top:1%;width:220px;height:100px; object-fit:contain" src="images/ieee-logo blue.png" style="padding:10px;"></img>
				<img style="margin-top:1%;width:220px;height:100px; object-fit:contain" src="images/SPS_Logo_Color_RGB.png" syle="padding:10px;"></img>
				
			</div>
			-->
		</div>
		<!-- Desktop Navbar -->
		<header>
			<nav>
				<ul>
					<li><a href="organizers.php">ORGANIZERS</a></li>
					<li><a href="call-for-papers.php">CALL FOR PAPERS</a></li>
					<!--<li><a href="submission.php">SUBMISSION</a></li>-->
					<li><a href="workshops.php">WORKSHOPS</a></li>
					<li><a href="speakers.php">SPEAKERS</a></li>
					<li><a href="sponsors.php">SPONSORS</a></li>
				</ul>
			</nav>
		</header>
		<!-- Mobile Navbar -->
		<div class="topnav">
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
				</a>
				<div id="myLinks">
					<a href="organizers.php">ORGANIZERS</a>
					<a href="call-for-papers.php">CALL FOR PAPERS</a>
					<a href="workshops.php">WORKSHOPS</a>
					<a href="speakers.php">SPEAKERS</a>
					<a href="sponsors.php">SPONSORS</a>
				</div>
			</div>
		<script>
			function myFunction() {
    	var x = document.getElementById("myLinks");
    	if (x.style.display === "block") {
      		x.style.display = "none";
    	} else {
      		x.style.display = "block";
    	}
  		}
		</script>
		<div id="content-container" class="flex flex-auto flex-space-between">
			<div id="center-content" class="flex flex-auto flex-column col-7">
				<div class="flex">
					<div style="height:80px;color:black;width: 100%">
						<div id="page-title" style="padding:3%;font-weight:bold;font-size: x-large;text-transform: uppercase;"><i class="fa fa-3 fa-long-arrow-right" aria-hidden="true"></i> <?php echo $pageTitle ?></div>
					</div>
				</div>
				<div class="main-content flex-auto">