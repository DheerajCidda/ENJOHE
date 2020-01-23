<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="Keywords" content="php ajax country state city dropdown">
        <meta name="Description" content="php ajax country state city dropdown">
<title>ENJOE</title>

	<style type="text/css">
</style>
<link rel="stylesheet" href="sheet.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	</head>
<body>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <script src="js/location.js"></script>   
	
	
<div style="border-bottom: 3px  #000000;">	
	<div style="margin-bottom: 10px">
<span style="padding-left: 15px" ><img src="logo2.png" width="250" height="50" alt=""/> </span>
<div class="nav">
	<div class="dropdown">
  <button class="dropbtn"><a href="index.html">Home </a></button>
  <div class="dropdown-content">
  </div>
</div>
	
	<div class="dropdown">
  <button class="dropbtn">About Us</button>
  <div class="dropdown-content">
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Job Seeker</button>
  <div class="dropdown-content">
	   <div class="font1">
    <a href="findajob.html">Find a job</a>
		   </div>
    
  </div>
</div>
	<div class="dropdown">
  <button class="dropbtn">Employer</button>
  <div class="dropdown-content">
	   <div class="font1">
    <a href="postjob.html">Post job login</a>
		   <a href="sign.html">Sign Up</a></div>
  </div>
</div>
	</div>
	</div>
	</div>
<?php
 $link = mysqli_connect('sql313.epizy.com', 'epiz_23473265', '4IPhKumUMMbtG');
                mysqli_select_db($link,"epiz_23473265_test");
                if (!$link) {
                                die('Could not connect: ' . mysql_error());
                            }
                
$sql="SELECT `healthcaresector`, `jobfunction`, `jobtitle`, `companyname`, `countryId`, `stateId`, `cityId`, `zipcode`, `jobtype`, `minimumsalary`, `maximumsalary`, `postdate`, `startdate`, `degree`, `major`, `experience`, `firstname`, `lastname`, `mail`, `contactno`, `streetaddress`, `deadline`, `description` FROM `test` where healthcaresector='Healthcare providers';";
if ($result=mysqli_query($link,$sql))
  { //echo " <table class='tableclass'><tr><th><h2>Product Code - Device Type</h2></th></tr>";
  // Fetch one and one row
	$number_rows=mysqli_num_rows($result);
	//echo $number_rows;
	



//echo "<form action='insert3.php' method='post'>";
  while ($row=mysqli_fetch_row($result))
    {   $healthcaresector=$row["0"]; $jobfunction=$row["1"]; $jobtitle=$row["2"]; $companyname=$row["3"]; $country=$row["4"]; $state=$row["5"]; $city=$row["6"];
        $zipcode=$row["7"]; $jobtype=$row["8"]; $minimumsalary=$row["9"]; $maximumsalary=$row["10"]; $postdate=$row["11"]; $startdate=$row["12"]; $degree=$row["13"];
        $major=$row["14"]; $experience=$row["15"]; $firstname=$row["16"]; $lastname=$row["17"]; $email=$row["18"]; $contactno=$row["19"]; $streetaddress=$row["20"];
        $deadline=$row["21"]; $description=$row["22"];
       
     
         echo "<div style='margin-top:50px; margin-left:auto; margin-right:auto; background:rgb(242,242,242);  width:900px; height:auto; padding:15px; border-radius:10px;'>
         <h4 style='float:left;'>Job title: $jobtitle.</h4> <h4 style='float:right;'>Company: $companyname</h4><br>
         <p style='margin-top:20px;'>Posted: $postdate.<br><br><b>Location:</b> $state, $country.<br>
            <b>Job function:</b> $jobfunction.<br>
            <b>Job description:</b><br>$description.</p><br>
            <h5><b>Preferred Qualifications</b></h5>
            <p><b>Degree:</b> $degree.<br>
            <b>Major:</b> $major.<br>
            <b>Experience:</b> $experience year/years.<br>
            <b>Salary:</b> $minimumsalary - $maximumsalary.<br>
            <b>Deadline:</b> $deadline.
            
            </p>
            
            
            
         
         
         
         
         
         
         
         </div>"; 
     
        
  }
	//echo "</form></div>";
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($link);


?>
<footer>
		<div style="padding-top:10px;"><table align="center"><tr><th><a href="index.html" class="bottombut">Home</a></th><th style="padding-left: 5px; "><a class="bottombut" href="findajob.html">Job Seeker</a></th><th><a class="bottombut" href="postjob.html">Employer</a></th></tr> 
			
			<tr><td></td><td style="padding-left: 9px; padding-top: 5px;"><a href="findajob.html" style=" text-decoration: none; color:black;" >Find a Job</a></td><td style="padding-left: 9px; padding-top: 5px;"><a href="postjob.html" style="padding-left:%; text-decoration: none; color:black;">Post Job Login</a></td></tr>
			<tr><td></td><td></td><td style="padding-left: 9px; padding-top: 5px;"><a href="sign.html" style="; text-decoration: none; color:black;">Sign Up</a></td></tr>
		</table></div>
		<p ><br></p>
 <div align="center"><img  src="footerlog.png" width="200" height="40" alt=""></div>
</footer>
</body>
  </html>