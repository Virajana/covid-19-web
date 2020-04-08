<?php

$url = "https://hpb.health.gov.lk/api/get-current-statistical";


$contents = file_get_contents($url);
$clima=json_decode($contents);

$local_new_cases=$clima->data->local_new_cases;
$local_active_cases	=$clima->data->local_active_cases;
$local_total_cases=$clima->data->local_total_cases;
$local_deaths=$clima->data->local_deaths;
$local_recovered=$clima->data->local_recovered;
$local_total_number_of_individuals_in_hospitals=$clima->data->local_total_number_of_individuals_in_hospitals;
$global_new_cases=$clima->data->global_new_cases;
$global_total_cases=$clima->data->global_total_cases;
$global_deaths=$clima->data->global_deaths;
$global_new_deaths=$clima->data->global_new_deaths;
$global_recovered=$clima->data->global_recovered;

/*echo "<br>Try my app: " . $clima->data->local_active_cases."<br>";
echo "<br>Try my app: " . $local_new_cases."<br>";*/

?>
<!DOCTYPE html PUBLIC>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Covid-19</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="css/default.css" rel="stylesheet"/>
<link href="css/fonts.css" rel="stylesheet"/>

</head>
<body>
<div id="header">
	<div id="menu" class="container">
	
		<ul>
			<li class="current_page_item"><a href="#" accesskey="1" title="">Homepage</a></li>
			<li><a href="#" accesskey="1" title="">Services</a></li>
			<li><a href="#" accesskey="2" title="">Our Clients</a></li>
			<li><a href="#" accesskey="3" title="">About Us</a></li>
			<li><a href="#" accesskey="5" title="">Contact Us</a></li>
		</ul>
		</div>
		
</div>
<div id="page-wrapper">
<div id="page" class="container">
<div class="w3-content w3-section">
  <img class="mySlides" src="img/Header1.jpg" style="width:1400px; height:600px" >
  <img class="mySlides" src="img/Header3.jpg" style="width:1400px; height:600px" >
  <img class="mySlides" src="img/Header4.jpg" style="width:1400px; height:600px">
</div>
<div id="content">
		<div class="title">
		<span class="byline">Coronavirus disease 2019 (COVID-19)</span>
		</div>
		<p>Coronaviruses are a large family of viruses which may cause illness in animals or humans. In humans, several coronaviruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19. </p>
	</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>
</div>
<div id="featured-wrapper">
	<div id="featured" class="container">
		<div class="major">
			<h2>Covid-19 Report</h2>
			    <span class="byline"><p>Date/Time: <span id="datetime"></span></p>
                    <script>
                    var dt = new Date();
                    document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
                    </script>
                </span>
		</div>
		
		<div class="column1">
			<span class><img src="img/magnifying-glass.png" width=150px height=150px/></span>
			<div class="title">
				<h2>Total Confirmed Cases</h2>
                <span class="byline"> <?php echo "<Strong>Sri Lanka " . $clima->data->local_total_cases."</Strong> <br>"?> 
                                      <?php echo "<Strong>Global " . $clima->data->global_total_cases."</Strong>"?> </span>
			</div>
		</div>
		<div class="column2">
			<span class><img src="img/coronavirus1.png" width=150px height=150px/></span>
			<div class="title">
				<h2>Active Cases</h2>
				<span class="byline"><?php echo "<Strong>Sri Lanka  " . $clima->data->local_active_cases."</Strong> <br>"?> 
                                      </span>
			</div>
		</div>
		<div class="column3">
			<span><img src="img/pain.png" width=150px height=150px/></span>
			<div class="title">
				<h2>New Cases</h2>
				<span class="byline"><?php echo "<Strong>Sri Lanka " . $clima->data->local_new_cases."</Strong> <br>"?> 
                                      <?php echo "<Strong>Global " . $clima->data->global_new_cases."</Strong>"?> </span>
			</div>
		</div>
        <div class="column4">
			<span><img src="img/heart-rate.png" width=150px height=150px/></span>
			<div class="title">
				<h2>Deaths</h2>
				<span class="byline"><?php echo "<Strong>Sri Lanka  " . $clima->data->local_deaths	."</Strong> <br>"?> 
                                      <?php echo "<Strong>Global " . $clima->data->global_deaths."</Strong>"?></span>
			</div>
        </div>
        <div class="column5">
			<span><img src="img/health.png" width=150px height=150px/></span>
			<div class="title">
				<h2>Recovered & Discharged</h2>
				<span class="byline"><?php echo "<Strong>Sri Lanka " . $clima->data->local_total_cases."</Strong> <br>"?> 
                                      <?php echo "<Strong>Global " . $clima->data->global_recovered."</Strong>"?></span>
			</div>
        </div>
        <div class="column6">
			<span><img src="img/hospital.png" width=150px height=150px/></span>
			<div class="title">
				<h2>Total number of individuals in hospitals</h2>
				<span class="byline"><?php echo "<Strong>Sri Lanka  " . $clima->data->local_total_number_of_individuals_in_hospitals."</Strong> <br>"?> 
                                    </span>
			</div>
        </div>
		    
        
	</div>
</div>
<div id="portfolio-wrapper">
	<div id="portfolio" class="container">
	</div>
<div id="contact" class="container">
		<div class="major">
			<h2>Stay at home,be Safe</h2>
            <span class="byline">For further information contact "Suwasariya"<h3>Call 1999</h3></span>
            
		</div>
		<ul class="contact">
			<li><p>TEL: +9411 2696 606 / +9411 269 6142</p></li>
			<li><p>EMAIL: healthpromo@sltnet.lk</p></li>
			<li><p>FAX: +9411 2692 613</p></li>
		</ul>
</div>
<div id="copyright" class="container">
	<p>&copy; 2020 All rights reserved. | Design by Rajith619</a>.</p>
</div>
</body>
</html>
