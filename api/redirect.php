<?php 
$pageTitle='welcome'; //THIS MUST BE SET FOR EACH PAGE
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>

<style>
	.redirect-overlay{
		position:absolute;
		height: 100%;
		width: 100%;
		opacity: 0.8;
		top:0;
		left:0;
		background:#ccc;
	}

	.overlay-box{

		position:absolute;
		height: 20%;
		width: 60%;
		opacity: 1;
		top:0;
		left:0;
		background:white;
		margin-left:20%;
		margin-top: 200px;
		z-index: 9999;
		padding:10px;
		text-align: center;
		font-size: 15px;
		box-shadow: 1px 1px 1px 1px gray;
		line-height: 30px;
		min-height: 300px;
	}

	.overlay-text{
		font-size: 14px;
		padding-left: 10%;
		padding-right: 10%;
		padding-top: 20px;
	}

	#redirect-title{
		float:left;
		width: 50%;
		padding-right: 20px;
		padding-left:20px;
	}

	@media screen and (max-width: 600px){
		.overlay-box{
			margin-top: 100px;
			width: 100%;
			margin-left:0;
			line-height: 30px;
			min-height: 600px;
			margin-right: 50px;
		}

		#ieeelogo{
			display: none;
		}

		#csslogo{
			display: none;
		}
		#redirect-title{
			width: 80%;
		}
	}

</style>

<script type="text/javascript">
	
 	var count = 30

 	window.setInterval(function(){
 		count = count - 1;
 		document.getElementById("count").innerHTML = count
 	}, 1000);

	window.setTimeout(function() {
		location.href = 'index.php';
		}, 30000);
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84916499-1', 'auto');
  ga('send', 'pageview');

</script>

<div class="redirect-overlay"></div> 
<div class="overlay-box" style="padding-top: 50px;font-size: 25px;padding-bottom:50px;">
	<img id="ieeelogo" src="images/ieee-logo.png" style="width:20%;float:left;margin-left:5%;margin-top:1%;"></img>
	<div id="redirect-title">Looking for 2024 IEEE International Conference on Advanced Video and Signal-Based Surveillance? </div>
	<img id="csslogo" src="images/SPS_Logo_Color_RGB.png" width="80px" style="float:left"></img>
	<br><br>
	<div class="overlay-text" style="clear:both;line-height: 20px;text-align: left">
		are encouraged to consider the new <strong>2024 IEEE International Conference on Advanced Video and Signal-Based Surveillance</strong>, which is to be held in Niagara Falls, Canada.

	</div>

	<div style="font-size: 18px;margin-right: 10px">
		For more information <a style="color:red;text-decoration: underline;" href="index.php">go to the AVSS2024 website.</a> 
	</div>
	<div style="font-size: 12px;font-style:italic;margin-right: 10px;">You will be redirected to the AVSS2024 website in <span id="count">30</span> seconds...</div>

</div>


<div class="text">
	The 2024 IEEE International Conference on Advanced Video and Signal-Based Surveillance will be held at Niagara Falls, Canada. This new conference, sponsored by the IEEE Signal Processing Society. The AVSS 2024 technical program will feature the presentation of contributed and invited papers, as well as tutorial sessions and workshops, focusing on technological advances and applications of control engineering. This focus includes all aspects of control engineering for practical control systems, from analysis and design, through simulation and hardware. Major themes of energy, healthcare, manufacturing, and transportation will feature applications of control technology for robotic, automotive, biomechanical, aerospace, power and energy systems, control of networks, and many others.
	<br><br>
	AVSS 2024 will be held at Niagara Falls, Canada. The venue is...
</div>


<?php 
// replace the image files below with your own (you can keep the filenames if you want and rename your own).  Or, just delete the entire <div> below
?>
<div id="images" class="flex flex-wrap justify-center">
	<div class="about-image" style="background: url(images/hotel/hotel1.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/hotel/hotel2.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/hotel/hotel3.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/hotel/hotel4.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/hotel/hotel5.jpg) 150px 150px"></div>
</div>	


<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>