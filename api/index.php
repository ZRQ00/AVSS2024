<?php 
$pageTitle='welcome'; //THIS MUST BE SET FOR EACH PAGE
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>

 
<?php 
	echo '<script>var config='.file_get_contents('configuration/config.json').'</script>';
?>

<script type="text/javascript">
	$(document).ready(function(){
		
		var newsCounter = 0

		setInterval(function(){
			
			if(newsCounter + 1 > config.newsTicker.length-1){
				newsCounter = 0
			}else{
				newsCounter++
			}
			
			$('#news-ticker-link').fadeOut(500, function(){
				$('#news-ticker-link').attr('href', config.newsTicker[newsCounter].link)
				$('#news-ticker-link').html(config.newsTicker[newsCounter].content)
				$('#news-ticker-link').fadeIn(500, function(){
				})
			})
			
		}, 5000)

		
	})
</script>

<!-- <div id="news-ticker" style="color:gray;background:white;padding:15px;margin:10px;border-radius:10px;box-shadow:2px 2px 2px 2px #ccc;margin-top:-20px;margin-bottom:20px; ">
		<p style="padding:0;margin:0;font-size:smaller">
			<i style="color:red;margin-right:10px" class="fa fa-1x fa-newspaper-o"></i> 
			<span id="news-ticker-content">
				<a id="news-ticker-link" href="#">Click here for nomination for best student papers</a>
			</span>
		</p>
</div> -->

<div class="text">

<!-- 	<div style="font-size:30px;color:red;padding:20px; line-height: 30px;"> Paper Submission Deadline Extended to March 10!</div> -->
<h2 style="font-size:30px">Introduction</h2>
AVSS 2024 is the 20th edition of the IEEE International Conference on Advanced Video and Signal-Based Surveillance. AVSS is the premier international conference in the field of video and signal-based surveillance. The goal is to provide a game-changing and cross-disciplinary forum that brings together experts from academia, industry, and government to advance the frontiers of theories, methods, systems, and applications.There will be a main conference as well as multiple associated workshops.
 This year AVSS is collocated with <u><a href="https://2024.ieeeicme.org/"><url>IEEE International Conference on Multimedia & Expo (ICME)</a></u>.
	<br><br>
	AVSS 2024 will be organized by the team from University at Buffalo, State University of New York at the Niagara Falls at July 2024. AVSS 2024 will be collocating with the IEEE International Conference on Multimedia and Expo (ICME) which will be held back-to-back at the Canadian side of the Niagara Falls.	
<br><br>
We invite submissions of up to eight pages, including references. A paper submission implies that, if the paper is accepted, one of the authors will present the paper/poster at the conference. We warmly invite your contributions to the AVSS 2024.
<br><br><br>
<h2 style="font-size:30px;">Topics of Interest</h2>
<table class="important-dates" style="width:100%">
    <tr>
        <td>Real-time Video Processing</td> 
    </tr>
    <tr>
        <td>Model Security, Privacy and Robustness</td> 
    </tr>
    <tr>
        <td>Multi-modal Analytics</td>
    </tr>
    <tr>
        <td>Multi-camera Video Analytics</td>
    </tr>
	<tr>
        <td>Survillance Systems and Applications</td>
    </tr>
</table>
</div>




<?php 
// replace the image files below with your own (you can keep the filenames if you want and rename your own).  Or, just delete the entire <div> below
?>
<!--
<div id="images" class="flex flex-wrap justify-center">
	<div class="about-image" style="background: url(images/hotel/hotel1.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/hotel/hotel2.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/hotel/hotel3.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/hotel/hotel4.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/hotel/hotel5.jpg) 150px 150px"></div>
</div>	
-->
<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>