<?php 
$pageTitle='Important Dates'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/dates.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>
<div class="text">
<div class="dates-container">
	<ul>
		<?php 
			//Print out all the deadlines from the config file
			$dates = $json['dates'];
			for ($i = 0; $i < count($dates); $i++) {
		    echo '<li>
					<div class="title">'.$dates[$i]['title'].'</div>
					<div class="date"><i class="fa fa-lg fa-calendar" aria-hidden="true"></i> 
						'.$dates[$i]['date'].'</div>
				</li>';
		} 
		?>
		<li style="font-size:medium;color:red;text-transform:uppercase;cursor:pointer"><a target="_blank" href="https://cmt3.research.microsoft.com/AVSS2024/">Submit Here</a></li>
		<li style="font-size:medium;color:red;text-transform:uppercase;cursor:pointer"><a target="_blank" href="https://drive.google.com/file/d/17Ra8zMLyO9h4yMlBmzvTB9ZwdOJP_gzS/view?usp=sharing">Download Call-For-Papers flyer</a></li>
	</ul>

</div>
</div>


<?php require 'right-bar-footer.php'; //THIS MUST BE INCLUDED FOR EACH PAGE ?>