<?php   session_start();  ?>

<?php
      if(!isset($_SESSION['username']) && !isset($_SESSION['email'])) // If session is not set then redirect to Login Page
       {
           header("Location:register.php");  
       }
       
$username = $_SESSION['username'];
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="Keywords" content="php ajax country state city dropdown">
        <meta name="Description" content="php ajax country state city dropdown">
<title>ENJOHE Engineering Jobs In Healthcare</title>

	<style type="text/css">
</style>
<link rel="stylesheet" href="sheet.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src='https://www.google.com/recaptcha/api.js'> </script>   

<script>
    window.onload = function() 
    {
        var $recaptcha = document.querySelector('#g-recaptcha-response');
        if($recaptcha)
         {
            $recaptcha.setAttribute("required", "required");
          }
    };
</script>

<style>
 #g-recaptcha-response {
    display: block !important;
    position: absolute;
    margin: -78px 0 0 0 !important;
    width: 302px !important;
    height: 76px !important;
    z-index: -999999;
    opacity: 0;
}

 </style>

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
  <a id="on-hover" class="dropbtn font1" onmouseover="bigImg()" onmouseout="normalImg()" style="color:black" href="index.html">Home </a>
  <div class="dropdown-content">
  </div>
</div>
	
	
<div class="dropdown">
  <button class="dropbtn font1">Job Seeker</button>
  <div class="dropdown-content">
	   <div class="font1">
    <a href="search_job.php">Find a Job</a>
    <a href="submit_info.php">Submit My Qualifications</a>
		   
           </div>
    
  </div>
</div>
	<div class="dropdown">
  <button class="dropbtn font1">Employer</button>
  <div class="dropdown-content" >
	   <div class="font1">
       <a href="register.php">Sign Up | Login</a>
       <a href="postjob.php">Post Job</a>   
       <a href="find_seekers.php">Find Candidates</a> </div>
  </div>
</div>

 <div class="dropdown">
  <a id="on-hover-course" class="dropbtn font1" onmouseover="bigImg1()" onmouseout="normalImg1()" style="color:black" href="short_course.html">Short Courses </a>
  <div class="dropdown-content">
  </div>
</div>

<?php

echo "
<link rel='stylesheet' href='sheet.css' type='text/css'>

<div class='dropdown font1'>
  <button class='dropbtn font1'>$username</button>
  <div class='dropdown-content' style='right:0px;'>
	  <div class='font1' >
        <a href='logout.php'>Logout</a>
    </div>
  </div>
</div>";
      //    echo "<a href='logout.php'> Logout</a> "; 
?>

	</div>
	</div>
	</div>
	
   
		<div class="font1" align="center">
			
<div align="center" style="border:solid; border-color: white; visibility:hidden;">
    <!--This is empty Div-->!
</div>


 <div align="center" class="strip1" style="text-align: center; font-size: 20pt; padding-top: 3px; width: 500px; height:60px"><p style="margin-top:5px">Post a Job</p></div>

				<div align="center"><div style="width: 1000px; text-align:justify; padding-top: 15px;">The table below is an overall view of engineering/technology jobs in healthcare. The unique multi-dimensional mega-menu design allows both employers and job seekers to see all their choices in one glance. The purposes are to direct employers to enter job data into the right categories, to enable job seekers to quickly find dream jobs, and to facilitate employers to easily identify qualified candidates and access their resumes. This proves to be a highly efficient and user-friendly job search mechanism.</div></div>

		<div align="center"><div style=" background:rgba(0,120,125,1.00);
    color: white;
    margin-top: 40px;
    text-align: center;
    display: inline-block;
    font-size: 14pt;
	border: 2px solid rgb(0,107,130);
	border-radius: 8px;
	width: 500px;
    box-shadow: inset 2px 2px 2px rgba(255, 255, 255, .4), inset -2px -2px 2px rgba(0, 0, 0, .4); "><p style="padding-top: 10px;">Employer: <br> In the table below, select those best describe your opening.</p></div>
			</p></div>
			</div>

		</div>

<div class="font1">

<div class="containertable">
<table align="center" style="margin-left: %; margin-top: 20px; border-collapse: collapse; border: none; background:#E6EDF9	; " width="1000">
									<tr valign="middle">
									<td rowspan="2" align="center"><h5><strong>Healthcare Industry <br> Sector</strong></h5></td>
									<td rowspan="2" align="center"><h5><strong>Employer</strong></h5></td>
									<td colspan ="2" align="center"><h5><strong>Job</strong></h5></td>
									
									<td align="center" colspan="2"><h5><strong>Candidate Qualifications Required/Preferred</strong></h5></td>
									</tr>
									<tr>
									<td align="center"><h5><b>Job Function</b></h5></td>
									<td align="center"><h5><b>&nbsp;Employment&nbsp;</b></h5></td>
									<td align="center"><h5><b>&nbsp;Degree&nbsp;</b></h5></td>	
									<td align="center"><h5><b>Major in Engineering</b></h5></td>	
									<!-- <td align="center"><b>Years of Experience</b></td>	 -->															
									</tr>

									
<tr> 							
<td align="center" valign="middle"><strong><em><a href="#providers" style="color: #0000FF" data-select="Healthcare providers">Healthcare Providers</a></em></strong></td>
<td align="left"   width="20%" style="line-height:13px; padding: 5px; ">

Hospital<br><br>
Clinic<br><br>
Dentist<br><br>
Allied health<br> <br>
Optician<br><br>
Nursing home<br><br>
Rehabilitation facility<br><br>
Retirement center<br><br>
Other healthcare organizations
</td>
<td align="left" valign="top" style="line-height:8px; padding-top: 20px;">

  <p><a href= "#Healthcareprovider" style="color: #0000FF" data-select="Biomedical engineering">Biomedical engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Chemical engineering">Chemical engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Civil engineering">Civil engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Clinical engineering">Clinical engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Computer science/engineering">Computer science/engineering </a><br> 
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Consulting engineering">Consulting engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Data science/engineering">Data science/engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Electrical engineering">Electrical engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Energy engineering">Energy engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Environmental engineering">Environmental engineering</a><br> 
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Facilities engineering">Facilities engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Field engineering">Field engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Industrial engineering">Industrial engineering</a><br> 
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Information technology/engineering"><span style="line-height: 15px;">Information technology/engineering </span></a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Infrastructure engineering">Infrastructure engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Mechanical engineering">Mechanical engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Medical device service engineering"><span style="line-height: 15px;">Medical device service <br>engineering </span>  </a><br> 
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Quality engineering">Quality engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Safety engineering">Safety engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Software engineering">Software engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Supply chain engineering">Supply chain engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Surgery engineering">Surgery engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Systems engineering">Systems engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Telecommunication engineering">Telecommunication engineering </a><br>
    <a href= "#Healthcareprovider" style="color: #0000FF" data-select="Others">Other </a></p>
</td>
	
<td align="left"  style="line-height:4px;">
<div style="padding-top: 50% ">
<a href="#Healthcareprovider1" style="color: #0000FF" data-select="Full Time">Full Time</a><br><br><br>
<a href="#Healthcareprovider1" style="color: #0000FF" data-select="Part Time">Part Time</a><br><br><br>
<a href="#Healthcareprovider1" style="color: #0000FF" data-select="Temporary">Temporary</a><br><br><br>
<a href="#Healthcareprovider1" style="color: #0000FF" data-select="Contract">Contract</a><br><br><br>
<a href="#Healthcareprovider1" style="color: #0000FF" data-select="Internship">Internship</a><br><br><br>
<a href="#Healthcareprovider1" style="color: #0000FF" data-select="Commission">Commission</a>
	</div>
	</td> 
<td align="left"  style="line-height:4px;">
	<div style="padding-top: 50%">

<a href="#Healthcareprovider2" style="color: #0000FF" data-select="Bachelor">Bachelor</a><br><br><br><br>
<a href="#Healthcareprovider2" style="color: #0000FF" data-select="Master">Master </a><br><br><br><br>
<a href="#Healthcareprovider2" style="color: #0000FF" data-select="PhD">PhD</a><br><br><br><br>
<a href="#Healthcareprovider2" style="color: #0000FF" data-select="Other">Other</a>
	</div>
</td>
<td align="left" style="line-height:8px;">

<a href="#Healthcareprovider3" style="color: #0000FF" data-select="Biomedical">Biomedical</a><br>
<a href="#Healthcareprovider3" style="color: #0000FF" data-select="Chemical">Chemical</a><br>
<a href="#Healthcareprovider3" style="color: #0000FF" data-select="Civil">Civil</a><br>
<a href="#Healthcareprovider3" style="color: #0000FF" data-select="Computer">Computer</a><br>
<a href="#Healthcareprovider3" style="color: #0000FF" data-select="Electrical">Electrical</a><br>
<a href="#Healthcareprovider3" style="color: #0000FF" data-select="Environmental">Environmental</a><br>
<a href="#Healthcareprovider3" style="color: #0000FF" data-select="Industrial">Industrial</a><br>
<a href="#Healthcareprovider3" style="color: #0000FF" data-select="Information">Information</a><br>
<a href="#Healthcareprovider3" style="color: #0000FF" data-select="Materials">Materials</a><br>
<a href="#Healthcareprovider3" style="color: #0000FF" data-select="Mechanical">Mechanical</a><br>
<a href="#Healthcareprovider3" style="color: #0000FF" data-select="Software">Software</a><br>
<a href="#Healthcareprovider3" style="color: #0000FF" data-select="Systems">Systems </a><br>
<a href="#Healthcareprovider3" style="color: #0000FF" data-select="Other">Other</a>
</td>
</tr>
<tr>
<td align="center" valign="middle"><strong><em><br>
      <a href="#providers" style="color: #0000FF" data-select="Manufacturers of medical devices/equipment/supplies">Manufacturers of Medical Devices/Equipment/Supplies</a></em></strong></td>
<td align="left" valign="top" style="line-height:15px; padding-top: 20px;">

Medical device /equipment/supplies manufacturer/distributor in:
<ul><li>Anesthesiology</li>
<li>Cardiovascular</li>
<li>Clinical Chemistry</li>
<li>Dental</li>
<li>Ear, Nose and Throat</li>
<li>Gastroenterology and Urology</li>
<li>General and Plastic Surgery</li>
<li>General Hospital and Personal Use</li>
<li>Hematology</li>
<li>Immunology</li>
<li>Microbiology</li>
<li>Neurology</li>
<li>Obstetrical and Gynecological</li>
<li>Ophthalmic</li>
<li>Orthopedic</li>
<li>Pathology</li>
<li>Physical Medicine</li> 
<li>Radiology</li>
<li>Toxicology</li>
<li>Others</li></ul>

</td>
<td align="left" valign="top" style="line-height:8px; padding-top: 20px;">

<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Automation engineering">Automation engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Biomedical engineering">Biomedical engineering </a><br> 
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Chemical engineering">Chemical engineering</a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Clinical engineering">Clinical engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Computer science/engineering">Computer science/engineering </a><br> 
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Consulting engineering">Consulting engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Control engineering">Control engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Data science/engineering">Data science/engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Design engineering">Design engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Electrical engineering">Electrical engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Electronic engineering">Electronic engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Field engineering">Field engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Industrial engineering">Industrial engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Manufacturing engineering">Manufacturing engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Materials science/engineering">Materials science/engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Mechanical engineering">Mechanical engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Product engineering">Product engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Quality engineering">Quality engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Research & development engineering"><span style="line-height: 15px;">Research & development<br> engineering</span> </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Sales engineering">Sales engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Safety engineering">Safety engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Software engineering">Software engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Supply chain engineering">Supply chain engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Systems engineering">Systems engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Telecommunication engineering">Telecommunication engineering</a><br> 
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Testing engineering">Testing engineering </a><br>
<a href= "#Manufacturers of medical devices/equipment/supplies" style="color: #0000FF" data-select="Others">Other  </a>

</td>

<td align="left"  style="line-height:4px;">

<a href="#Manufacturers of medical devices/equipment/supplies1" style="color: #0000FF" data-select="Full Time">Full Time</a><br><br><br>
<a href="#Manufacturers of medical devices/equipment/supplies1" style="color: #0000FF" data-select="Part Time">Part Time</a><br><br><br>
<a href="#Manufacturers of medical devices/equipment/supplies1" style="color: #0000FF" data-select="Temporary">Temporary</a><br><br><br>
<a href="#Manufacturers of medical devices/equipment/supplies1" style="color: #0000FF" data-select="Contract">Contract</a><br><br><br>
<a href="#Manufacturers of medical devices/equipment/supplies1" style="color: #0000FF" data-select="Internship">Internship</a><br><br><br>
<a href="#Manufacturers of medical devices/equipment/supplies1" style="color: #0000FF" data-select="Commission">Commission</a>
</td>

<td align="left"  style="line-height:4px;">

<a href="#Manufacturers of medical devices/equipment/supplies2" style="color: #0000FF" data-select="Bachelor">Bachelor</a><br><br><br><br>
<a href="#Manufacturers of medical devices/equipment/supplies2" style="color: #0000FF" data-select="Master">Master </a><br><br><br><br>
<a href="#Manufacturers of medical devices/equipment/supplies2" style="color: #0000FF" data-select="PhD">PhD</a><br><br><br><br>
<a href="#Manufacturers of medical devices/equipment/supplies2" style="color: #0000FF" data-select="Other">Other</a>
</td>

<td align="left"  style="line-height:8px;">

<a href="#Manufacturers of medical devices/equipment/supplies3" style="color: #0000FF" data-select="Biomedical">Biomedical</a><br>
<a href="#Manufacturers of medical devices/equipment/supplies3" style="color: #0000FF" data-select="Chemical">Chemical</a><br>
<a href="#Manufacturers of medical devices/equipment/supplies3" style="color: #0000FF" data-select="Civil">Civil</a><br>
<a href="#Manufacturers of medical devices/equipment/supplies3" style="color: #0000FF" data-select="Computer">Computer</a><br>
<a href="#Manufacturers of medical devices/equipment/supplies3" style="color: #0000FF" data-select="Electrical">Electrical</a><br>
<a href="#Manufacturers of medical devices/equipment/supplies3" style="color: #0000FF" data-select="Environmental">Environmental</a><br>
<a href="#Manufacturers of medical devices/equipment/supplies3" style="color: #0000FF" data-select="Industrial">Industrial</a><br>
<a href="#Manufacturers of medical devices/equipment/supplies3" style="color: #0000FF" data-select="Information">Information</a><br>
<a href="#Manufacturers of medical devices/equipment/supplies3" style="color: #0000FF" data-select="Materials">Materials</a><br>
<a href="#Manufacturers of medical devices/equipment/supplies3" style="color: #0000FF" data-select="Mechanical">Mechanical</a><br>
<a href="#Manufacturers of medical devices/equipment/supplies3" style="color: #0000FF" data-select="Software">Software</a><br>
<a href="#Manufacturers of medical devices/equipment/supplies3" style="color: #0000FF" data-select="Systems">Systems </a><br>
<a href="#Manufacturers of medical devices/equipment/supplies3" style="color: #0000FF" data-select="Other">Other</a>
</td>


</tr>
<tr>
<td align="center" valign="middle"><b><i><a href="#providers" style="color: #0000FF" data-select="Healthcare systems">Healthcare Systems</a></i></b></td>
<td align="left" valign="middle"><br>Companies that specialize in healthcare systems including facilities, information, financial and other systems.</td>
<td align="left" valign="top" style="line-height:9px; padding-top: 20px;">

<a href= "#Healthvcare systems" style="color: #0000FF" data-select="Civil/construction engineering">Civil/construction engineering</a><br> 
<a href= "#Healthvcare systems" style="color: #0000FF" data-select="Computer science/engineering">Computer science/engineering</a><br> 
<a href= "#Healthvcare systems" style="color: #0000FF" data-select="Consulting engineering">Consulting engineering</a><br> 
<a href= "#Healthvcare systems" style="color: #0000FF" data-select="Data science/engineering">Data science/engineering</a><br> 
<a href= "#Healthvcare systems" style="color: #0000FF" data-select="Energy engineering">Energy engineering</a><br> 
<a href= "#Healthvcare systems" style="color: #0000FF" data-select="Facilities engineering">Facilities engineering</a><br> 
<a href= "#Healthvcare systems" style="color: #0000FF" data-select="Industrial engineering">Industrial engineering</a><br> 
<a href= "#Healthvcare systems" style="color: #0000FF" data-select="Information technology/engineering"><span style="line-height: 15px;">Information <br>technology/engineering</span></a><br>  
<a href= "#Healthvcare systems" style="color: #0000FF" data-select="Infrastructure engineering">Infrastructure engineering</a><br> 
<a href= "#Healthvcare systems" style="color: #0000FF" data-select="Quality engineering">Quality engineering</a><br> 
<a href= "#Healthvcare systems" style="color: #0000FF" data-select="Safety engineering">Safety engineering</a><br> 
<a href= "#Healthvcare systems" style="color: #0000FF" data-select="Software engineering">Software engineering</a><br> 
<a href= "#Healthvcare systems" style="color: #0000FF" data-select="Systems engineering">Systems engineering</a><br> 
<a href= "#Healthvcare systems" style="color: #0000FF" data-select="Telecommunication engineering">Telecommunication engineering</a><br> 
<a href= "#Healthvcare systems" style="color: #0000FF" data-select="Others">Other </a>
 </td>

<td align="left"  style="line-height:5px;">

<a href="#Healthvcare systems1" style="color: #0000FF" data-select="Full Time">Full Time</a><br><br>
<a href="#Healthvcare systems1" style="color: #0000FF" data-select="Part Time">Part Time</a><br><br>
<a href="#Healthvcare systems1" style="color: #0000FF" data-select="Temporary">Temporary</a><br><br>
<a href="#Healthvcare systems1" style="color: #0000FF" data-select="Contract">Contract</a><br><br>
<a href="#Healthvcare systems1" style="color: #0000FF" data-select="Internship">Internship</a><br><br>
<a href="#Healthvcare systems1" style="color: #0000FF" data-select="Commission">Commission</a>
</td>

<td align="left" style="line-height:4px;">

<a href="#Healthvcare systems2" style="color: #0000FF" data-select="Bachelor">Bachelor</a><br><br><br>
<a href="#Healthvcare systems2" style="color: #0000FF" data-select="Master">Master </a><br><br><br>
<a href="#Healthvcare systems2" style="color: #0000FF" data-select="PhD">PhD</a><br><br><br>
<a href="#Healthvcare systems2" style="color: #0000FF" data-select="Other">Other</a>
</td>

<td align="left"  style="line-height:9px;">

<a href="#maj" style="color: #0000FF" data-select="Biomedical">Biomedical</a><br>
<a href="#Healthvcare systems3" style="color: #0000FF" data-select="Chemical">Chemical</a><br>
<a href="#Healthvcare systems3" style="color: #0000FF" data-select="Civil">Civil</a><br>
<a href="#Healthvcare systems3" style="color: #0000FF" data-select="Computer">Computer</a><br>
<a href="#Healthvcare systems3" style="color: #0000FF" data-select="Electrical">Electrical</a><br>
<a href="#Healthvcare systems3" style="color: #0000FF" data-select="Environmental">Environmental</a><br>
<a href="#Healthvcare systems3" style="color: #0000FF" data-select="Industrial">Industrial</a><br>
<a href="#Healthvcare systems3" style="color: #0000FF" data-select="Information">Information</a><br>
<a href="#Healthvcare systems3" style="color: #0000FF" data-select="Materials">Materials</a><br>
<a href="#Healthvcare systems3" style="color: #0000FF" data-select="Mechanical">Mechanical</a><br>
<a href="#Healthvcare systems3" style="color: #0000FF" data-select="Software">Software</a><br>
<a href="#Healthvcare systems3" style="color: #0000FF" data-select="Systems">Systems </a><br>
<a href="#Healthvcare systems3" style="color: #0000FF" data-select="Other">Other</a>

<!-- <td align="left">
<br>
<a href="#exp" style="color: #0000FF" data-select="1"  id="link1">1</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="2" id="link2">2</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="3" id="link3">3</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="4" id="link4">4</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="5" id="link5">5</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="6" id="link6">6</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="7" id="link7">7</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="8" id="link8">8</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="9" id="link9">9</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="10" id="link10">10</a><br><br>
<a href="#exp" style="color: #0000FF" data-select=">10" id="link>10">> 10</a><br><br>
</td> -->
</tr>									
<tr>

<td align="center" valign="middle"><b><i><a href="#providers" style="color: #0000FF" data-select="Biotechnology & Pharmaceuticals">Biotechnology & Pharmaceuticals</a></i></b> </td>
<td align="left" valign="middle">
<br>Companies engaged in research into and development of biological substances leading to new drugs and/or medical procedures.<br>
 <br>Manufacturers of prescription or over-the-counter drugs<br>
 </td>
<td align="left" valign="top" style="line-height:8px; padding-top: 20px;">

  <p><a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Automation engineering">Automation engineering</a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Biomedical engineering">Biomedical engineering </a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Chemical engineering">Chemical engineering </a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Computer science/engineering">Computer science/engineering </a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Consulting engineering">Consulting engineering </a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Data science/engineering">Data science/engineering </a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Electrical engineering">Electrical engineering </a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Field engineering">Field engineering </a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Industrial engineering">Industrial engineering  jobs</a><br> 
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Information technology/engineering"><span style="line-height: 15px;">Information<br>technology/engineering</span> </a><br> 
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Manufacturing engineering">Manufacturing engineering </a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Materials science/engineering">Materials science/engineering </a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Mechanical engineering">Mechanical engineering </a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Process engineering">Process engineering </a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Product engineering">Product engineering  </a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Quality engineering">Quality engineering </a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Research & development engineering"><span style="line-height: 15px;">Research & development <br>engineering</span> </a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Safety engineering">Safety engineering </a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Software engineering">Software engineering </a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Systems engineering">Systems engineering </a><br>
    <a href= "#Biotechnology & Pharmaceuticals" style="color: #0000FF" data-select="Others">Other </a></p>
  </td>
<td align="left"  style="line-height:5px">

<a href="#Biotechnology & Pharmaceuticals1" style="color: #0000FF" data-select="Full Time">Full Time</a><br><br>
<a href="#Biotechnology & Pharmaceuticals1" style="color: #0000FF" data-select="Part Time">Part Time</a><br><br>
<a href="#Biotechnology & Pharmaceuticals1" style="color: #0000FF" data-select="Temporary">Temporary</a><br><br>
<a href="#Biotechnology & Pharmaceuticals1" style="color: #0000FF" data-select="Contract">Contract</a><br><br>
<a href="#Biotechnology & Pharmaceuticals1" style="color: #0000FF" data-select="Internship">Internship</a><br><br>
<a href="#Biotechnology & Pharmaceuticals1" style="color: #0000FF" data-select="Commission">Commission</a>

</td>
<td align="left"  style="line-height:5px;">

<a href="#Biotechnology & Pharmaceuticals2" style="color: #0000FF" data-select="Bachelor">Bachelor</a><br><br><br>
<a href="#Biotechnology & Pharmaceuticals2" style="color: #0000FF" data-select="Master">Master</a><br><br><br>
<a href="#Biotechnology & Pharmaceuticals2" style="color: #0000FF" data-select="PhD">PhD</a><br><br><br>
<a href="#Biotechnology & Pharmaceuticals2" style="color: #0000FF" data-select="Other">Other</a>

</td>
<td align="left"  style="line-height:8px;">

<a href="#Biotechnology & Pharmaceuticals3" style="color: #0000FF" data-select="Biomedical">Biomedical</a><br>
<a href="#Biotechnology & Pharmaceuticals3" style="color: #0000FF" data-select="Chemical">Chemical</a><br>
<a href="#Biotechnology & Pharmaceuticals3" style="color: #0000FF" data-select="Civil">Civil</a><br>
<a href="#Biotechnology & Pharmaceuticals3" style="color: #0000FF" data-select="Computer">Computer</a><br>
<a href="#Biotechnology & Pharmaceuticals3" style="color: #0000FF" data-select="Electrical">Electrical</a><br>
<a href="#Biotechnology & Pharmaceuticals3" style="color: #0000FF" data-select="Environmental">Environmental</a><br>
<a href="#Biotechnology & Pharmaceuticals3" style="color: #0000FF" data-select="Industrial">Industrial</a><br>
<a href="#Biotechnology & Pharmaceuticals3" style="color: #0000FF" data-select="Information">Information</a><br>
<a href="#Biotechnology & Pharmaceuticals3" style="color: #0000FF" data-select="Materials">Materials</a><br>
<a href="#Biotechnology & Pharmaceuticals3" style="color: #0000FF" data-select="Mechanical">Mechanical</a><br>
<a href="#Biotechnology & Pharmaceuticals3" style="color: #0000FF" data-select="Software">Software</a><br>
<a href="#Biotechnology & Pharmaceuticals3" style="color: #0000FF" data-select="Systems">Systems </a><br>
<a href="#Biotechnology & Pharmaceuticals3" style="color: #0000FF" data-select="Other">Other</a>

</td>
<!-- <td align="left">
<br>
<a href="#exp" style="color: #0000FF" data-select="1"  id="link1">1</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="2" id="link2">2</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="3" id="link3">3</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="4" id="link4">4</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="5" id="link5">5</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="6" id="link6">6</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="7" id="link7">7</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="8" id="link8">8</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="9" id="link9">9</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="10" id="link10">10</a><br><br>
<a href="#exp" style="color: #0000FF" data-select=">10" id="link>10">> 10</a><br><br>
</td> -->
</tr>	
<tr >
<td align="center" valign="middle"><b><i><a href="#providers" style="color: #0000FF" data-select="Healthcare consulting, support, and education">Healthcare Consulting, Support and Education</a></i></b></td>
<td align ="left" valign="middle"><br>Companies that provide consulting service and support to healthcare, as well as continued education to healthcare personnel.</td>
<td align ="left" valign="top" style="line-height:13px; padding-top: 20px;">

<a href= "#Healthcare consulting, support, and education" style="color: #0000FF; padding-bottom:5px " data-select="Consulting/support engineering" >Consulting/support engineering</a>
<ul><li style="padding-bottom: 0px;">Healthcare providers</li>
<li style="padding-bottom: 0px; line-height:normal;">Manufacturers of medical devices/equipment/supplies</li>
<li style="padding-bottom: 0px;">Healthcare systems</li>
<li style="padding-bottom: 0px; line-height:normal;">Biotechnology & Pharmaceuticals</li>
</ul><a href= "#Healthcare consulting, support, and education" style="color: #0000FF; padding-bottom:5px;" data-select="Training & education engineering">Training & education engineering</a>
<ul><li style="padding-bottom: 0px;">Healthcare providers</li>
<li style="padding-bottom: 0px; line-height:normal;">Manufacturers of medical devices/equipment/supplies</li>
<li style="padding-bottom: 0px;">Healthcare systems</li>
<li style="padding-bottom: 0px; line-height:normal;">Biotechnology & Pharmaceuticals</li>
</ul>
<a href= "#Healthcare consulting, support, and education" style="color: #0000FF" data-select="Others">Other </a>

</td>
<td align="left"  style="line-height:5px;">

<a href="#Healthcare consulting, support, and education1" style="color: #0000FF" data-select="Full Time">Full Time</a><br><br>
<a href="#Healthcare consulting, support, and education1" style="color: #0000FF" data-select="Part Time">Part Time</a><br><br>
<a href="#Healthcare consulting, support, and education1" style="color: #0000FF" data-select="Temporary">Temporary</a><br><br>
<a href="#Healthcare consulting, support, and education1" style="color: #0000FF" data-select="Contract">Contract</a><br><br>
<a href="#Healthcare consulting, support, and education1" style="color: #0000FF" data-select="Internship">Internship</a><br><br>
<a href="#Healthcare consulting, support, and education1" style="color: #0000FF" data-select="Commission">Commission</a>

</td>
<td align="left"  style="line-height:4px;">

<a href="#Healthcare consulting, support, and education2" style="color: #0000FF" data-select="Bachelor">Bachelor</a><br><br><br>
<a href="#Healthcare consulting, support, and education2" style="color: #0000FF" data-select="Master">Master</a><br><br><br>
<a href="#Healthcare consulting, support, and education2" style="color: #0000FF" data-select="PhD">PhD</a><br><br><br>
<a href="#Healthcare consulting, support, and education2" style="color: #0000FF" data-select="Other">Other</a>

</td>
<td align="left" valign="top" style="line-height:8px;">
<div style="padding-top: 80px;">
<a href="#Healthcare consulting, support, and education3" style="color: #0000FF" data-select="Biomedical">Biomedical</a><br>
<a href="#Healthcare consulting, support, and education3" style="color: #0000FF" data-select="Chemical">Chemical</a><br>
<a href="#Healthcare consulting, support, and education3" style="color: #0000FF" data-select="Civil">Civil</a><br>
<a href="#Healthcare consulting, support, and education3" style="color: #0000FF" data-select="Computer">Computer</a><br>
<a href="#Healthcare consulting, support, and education3" style="color: #0000FF" data-select="Electrical">Electrical</a><br>
<a href="#Healthcare consulting, support, and education3" style="color: #0000FF" data-select="Environmental">Environmental</a><br>
<a href="#Healthcare consulting, support, and education3" style="color: #0000FF" data-select="Industrial">Industrial</a><br>
<a href="#Healthcare consulting, support, and education3" style="color: #0000FF" data-select="Information">Information</a><br>
<a href="#Healthcare consulting, support, and education3" style="color: #0000FF" data-select="Materials">Materials</a><br>
<a href="#Healthcare consulting, support, and education3" style="color: #0000FF" data-select="Mechanical">Mechanical</a><br>
<a href="#Healthcare consulting, support, and education3" style="color: #0000FF" data-select="Software">Software</a><br>
<a href="#Healthcare consulting, support, and education3" style="color: #0000FF" data-select="Systems">Systems </a><br>
<a href="#Healthcare consulting, support, and education3" style="color: #0000FF" data-select="Other">Other</a>

	</div>
</td>
</tr>								
</table>
</div>

</div>
		

		<div class="font1">
	<div align="center"><div style=" background:rgba(0,120,125,1.00);
    color:white;
    margin-top: 40px;
    text-align: center;
    display: inline-block;
    font-size: 14pt;
	border: 2px solid rgb(0,107,130);
	border-radius: 8px;
	width: 500px;
		box-shadow: inset 2px 2px 2px rgba(255, 255, 255, .4), inset -2px -2px 2px rgba(0, 0, 0, .4); "><p style="padding-top: 10px;">Employer: <br> Provide more details about your job opening below.</p></div>
			</div>
			</div>
		<div style=" width:800px; height:auto; margin-left:auto; margin-right:auto; margin-top:30px;">
<div class="container"><form action="form_action.php" method="POST" novalidate>
<div class="font1">

<div align="center" valign="middle" class="divselection">
   
    <label class="divselection" style=" Width:100%;height:55px;background:rgb(34,128,178); text-align:center; vertical-align:middle; padding-top:15px; border-radius: 15px; color:white;" valign="middle"><h4><b >JOB SPECIFICS</b></h4></label>
   
 </div>
					
<div class="font1">
<p> <span style="color:red;">*required field</span></p>
<label style="margin-bottom:0px; ">Healthcare Industry Sector (see table above)<span style="color:red;">* </span></label> <br>
<div class="dropdown" style="width:100%"><input  type="text" class="form-control  input-lg"  id="healthcaresector" name="healthcaresector" placeholder=" " required>
<div class="dropdown-hover">
    <a onclick="healthcare1()">Healthcare Providers</a>
    <a onclick="healthcare2()">Manufacturers of Medical Devices/Equipment/Supplies</a>
    <a onclick="healthcare3()">Healthcare Systems</a>
    <a onclick="healthcare4()">Biotechnology & Pharmaceuticals</a>
    <a onclick="healthcare5()">Healthcare Consulting, Support and Education</a>

  </div>
  </div>
<!--
     <option></option>
<option value="Healthcare providers" data-id="01">Healthcare providers</option>
<option value="Manufacturers of medical devices/equipment/supplies" data-id="02">Manufacturers of medical devices/equipment/supplies</option>
<option value="Healthcare systems" data-id="03">Healthcare systems</option>
<option value="Biotechnology & Pharmaceuticals" data-id="04">Biotechnology & Pharmaceuticals</option>
<option value="Healthcare consulting, support, and education" data-id="05">Healthcare consulting, support, and education</option>
</select> -->
<!--
    <div class="dropdown-content">
    <a >Healthcare providers</a>
    <a >Manufacturers of medical devices/equipment/supplies</a>
    <a >Healthcare systems</a>
    <a >Biotechnology & Pharmaceuticals</a>
    <a >Healthcare consulting, support, and education</a>

  </div>
  </div> -->

<!--<input  type="text" class="form-control  input-lg" id="healthcaresector"  name="healthcaresector" placeholder=" " list="test" autocomplete="off"> 
<datalist  id="test">
<option  value="Healthcare Providers" data-id="01">Healthcare Providers</option>
<option value="Manufacturers of Medical Devices/Equipment/Supplies" data-id="02">Manufacturers of Medical Devices/Equipment/Supplies</option>
<option value="Healthcare Systems" data-id="03">Healthcare Systems</option>
<option value="Biotechnology & Pharmaceuticals" data-id="04">Biotechnology & Pharmaceuticals</option>
<option value="Healthcare Consulting, Support and Education" data-id="05">Healthcare Consulting, Support and Education</option>

</datalist>
-->
</div>									
				
<div class="font1">
<label style="margin-bottom:0px; margin-top:5px;" id="job1">Job Function (see table above)<span style="color:red;">* </span></label>
<input class="form-control  input-lg"  id="jobfunction" name="jobfunction" placeholder="" required>

				
<!--<option></option><option value='Automation engineering' data-id='01'>Automation engineering</option><option value="Biomedical engineering" data-id='02'>Biomedical engineering</option><option value='Chemical engineering' data-id='03'>Chemical engineering</option><option value='Civil engineering' data-id='04'>Civil engineering</option><option value='Civil/construction engineering' data-id='05'>Civil/construction engineering</option><option value='Clinical engineering' data-id='06'>Clinical engineering</option><option value='Computer science/engineering' data-id='07'>Computer science/engineering</option><option value='Consulting/support engineering' data-id='08'>Consulting/support engineering</option><option value='Control engineering' data-id='09'>Control engineering</option><option value='Data science/engineering' data-id='10'>Data science/engineering</option><option value='Design engineering' data-id='11'>Design engineering</option><option value='Electronic engineering' data-id='12'>Electronic engineering</option><option value='Energy engineering' data-id='13'>Energy engineering</option><option value='Environmental engineering' data-id='14'>Environmental engineering</option><option value='Facilities engineering' data-id='15'>Facilities engineering</option><option value='Field engineering' data-id='16'>Field engineering</option><option value='Industrial engineering' data-id='17'>Industrial engineering</option><option value='Information technology/engineering' data-id='18'>Information technology/engineering</option><option value='Infrastructure engineering' data-id='19'>Infrastructure engineering</option><option value='Manufacturing engineering' data-id='20'>Manufacturing engineering</option><option value='Materials science/engineering' data-id='21'>Materials science/engineering</option><option value='Mechanical engineering' data-id='22'>Mechanical engineering</option><option value='Medical device service engineering' data-id='23'>Medical device service engineering</option><option value='Process engineering' data-id='24'>Process engineering</option><option value='Product engineering' data-id='25'>Product engineering</option><option value='Quality engineering' data-id='26'>Quality engineering</option><option value='Research & development engineering' data-id='27'>Research & development engineering</option><option value='Safety engineering' data-id='28'>Safety engineering</option><option value='Sales engineering' data-id='29'>Sales engineering</option><option value='Software engineering' data-id='30'>Software engineering</option><option value='Supply chain engineering' data-id='31'>Supply chain engineering</option><option value='Surgery engineering' data-id='32'>Surgery engineering</option><option value='Systems engineering' data-id='33'>Systems engineering</option><option value='Telecommunication engineering' data-id='34'>Telecommunication engineering</option><option value='Testing engineering' data-id='35'>Testing engineering</option><option value='Training/education engineering' data-id='36'>Training/education engineering</option><option value='Others' data-id='37'>Others</option>								
</select>--></div>						

										
<div class="font1">
 	<label style="margin-bottom:0px; margin-top:5px;">Job Title<span style="color:red;">* </span></label>
	<input class="form-control input-lg" type="text" id="jobtitle" name="jobtitle" placeholder=" " required>
</div></div>

<div class="font1">
<label style="margin-bottom:0px; margin-top:5px;">Company Name<span style="color:red;">* </span></label>
<input class="form-control input-lg" type="text" id="companyname" name="companyname" placeholder=" " required> 

</div>
<div class="font1">
<label style="margin-bottom:0px; margin-top:5px;">Company Website<span style="color:red;">* </span></label>
<input class="form-control input-lg" type="text" id="companywebsite" name="companywebsite"placeholder=" " required > 

</div>
<div class="font1">
<label style="margin-bottom:0px; margin-top:5px;">Job Description Website</label>
<input class="form-control input-lg" type="text" id="jobdiscriptionwebsite" name="jobdiscriptionwebsite" > 

</div>


<div class="container2">
<label class="font1" style="margin-bottom:0px; margin-top:10px;">Job Location:</label> <br>
<div class="font1">
				<label style="margin-bottom:0px; margin-top:5px;">Country<span style="color:red;">* </span></label>
	<form action="#" role="form" class="form-horizontal" id="location" method="post" accept-charset="utf-8" placeholder=" " required>
              
				
       
        <select name="country"  class="form-control countries" id="country"  >
<option  value="">Select Country</option>
</select>
   <label style="margin-bottom:0px; margin-top:5px;">State<span style="color:red;">* </span></label>

        <select name="state" class="form-control states" id="state" placeholder=" " required >
<option  value="">Select State</option>
</select>

 
 <label style="margin-bottom:0px; margin-top:5px;">Select City<span style="color:red;">* </span></label>
        <select name="city"  class="form-control cities" id="city" placeholder=" " required >
<option  value="">Select City</option>
</select>
   
</form>

<div class="font1">
    <label style="margin-bottom:0px; margin-top:5px;">Postal Code</label>
	<input type="text" name="zipcode" id="zipcode" class="form-control  input-lg"><p></p>
</div>
</div>
</div>	 	

<div class="font1">
	<label style="margin-bottom:0px; margin-top:5px;">Employment</label><section id="#dref"></section>
    <div class="dropdown" style="width:100%"> <input class="form-control  input-lg"	id="jobtype" name="jobtype" placeholder="" autocomplete="off">
                        <div class="dropdown-hover">
                                    <a onclick="jobtype1()">Full Time</a>
                                    <a onclick="jobtype2()">Part Time</a>
                                    <a onclick="jobtype3()">Temporary</a>
                                    <a onclick="jobtype4()">Contract</a>
                                    <a onclick="jobtype5()">Internship</a>
                                    <a onclick="jobtype6()">Commission</a>
                        </div>
                    </div>  
	<!--<div class="dropdown" style="width:100%"> <input class="form-control  input-lg"	id="jobtype" name="jobtype" placeholder="">
                        <div class="dropdown-content">
                                    <a >Full Time</a>
                                    <a >Part Time</a>
                                    <a >Temporary</a>
                                    <a >Contract</a>
                                    <a >Internship</a>
                                    <a >Commission</a>
                        </div>
                    </div>	-->	
                  <!--  <input class="form-control  input-lg" list="employementtype" id="jobtype" name="jobtype" placeholder="" autocomplete="off">
          <datalist id="employementtype" >      
              <option value="Full Time" data-id="01">Full Time</option>
              <option value="Part Time" data-id="02">Part Time</option>
              <option value="Temporary" data-id="03">Temporary</option>
              <option value="Contract" data-id="04">Contract</option>
              <option value="Internship" data-id="05">Internship</option>
              <option value="Commission" data-id="06">Commission</option>

          </datalist>    -->												
	  </div>

				
										
										
	<div class="font1">
				<label style="width: 300px; margin-bottom:0px; margin-top:5px;">Annual Salary (US$ or equivalent):  </label><br>
				
				<div  style="padding-top:5px; width:100%;">
				<span style="width: 20%;"> Minimum: US$ </span> <input class="input-box" type="number"
												id="minimumsalary" min="1000" autocomplete="off"
												name="minimumsalary" placeholder="" style="width: 34.25%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span style="width: 20%;"> Maximum: US$ </span>
				<input class="input-box" type="number"
					   id="maximumsalary" name="maximumsalary"  placeholder="" style="width: 34.0%;">
				</div>      
					<div style="padding-top:10px; display:inline-flex; width: 100%;">
												<div style="padding-top:6px; width:22%;"> Other (e.g., negotiable) </div>
												<div style="width:78%;"><input class="input-box" id="negotiable" autocomplete="off" name="negotiable" placeholder="" style="width:100%;"></div>
                                                </div>
												
	</div>
										
	
											
						
										
<div class="font1">
<label style="margin-bottom:0px; margin-top:5px;">Date Job Posted</label>
<input class='form-control input-lg' type='date' id='postdate' name="postdate">
</div>
 <div class="font1">
<label style="margin-bottom:0px; margin-top:5px;">Position Start Date</label>
<input class='form-control input-lg' type='date' id="startdate" name="startdate"></input></div>



<div align="center" valign="middle" class="divselection">
	
    <div class="font1">
<h4 style=" width:100%; height:50px;background:rgb(34,128,178); text-align:center; vertical-align:middle; padding-top:11px; border-radius: 15px; color:white; margin-top: 10px;" valign="middle"><b>CANDIDATE QUALIFICATIONS</b></h4> </div>
  
 </div>

<label class="font1" style="margin-bottom:0px; margin-top:5px;" id="degree1">Degree</label> <br>
			
<div class="font1" style="width:100%; display:inline-flex;"> 
    <div class="dropdown" style="width:70%"><input class="form-control input-lg" id="degree" name="degree"	placeholder="" list="degreemain" autocomplete="off" > 
		 <div class="dropdown-hover">
            <a onclick="degree1()"> Bachelor	 </a>
            <a onclick="degree2()"> Master	 </a>
            <a onclick="degree3()"> PhD		 </a>
            <a onclick="degree4()"> Other	 </a>   
	    </div>
		</div> 	 &nbsp;&nbsp;&nbsp;&nbsp                 
	 <!--
         <input class="form-control input-lg" id="degree" name="degree"style="width: 70%;" list="degreemain" autocomplete="off">	&nbsp;&nbsp;&nbsp;&nbsp
     <datalist id="degreemain">	
            <option value="Bachelor">Bachelor</option>
			<option value="Master">Master</option>
			<option value="PhD">PhD</option>
			<option value="Other">Other</option>									
		  </datalist>  	-->
		 <span style="padding-top:6px;"> Preferred  &nbsp; <input type="checkbox" name="preferred1" value="preferred" ></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <span style="padding-top:6px;"> Required  &nbsp; <input type="checkbox" name="preferred1" value="required" ></span>
         				
</div>

<label class="font1" style="margin-bottom:0px; margin-top:5px;" id="major1">Major in Engineering</label><br>

<div class="font1" style="width:100%; display:inline-flex;">
    <div class="dropdown font1" style="width:70%"> <input class="form-control input-lg" id="major" name="major" placeholder="" list="majoreng" autocomplete="off"> 
		 <div class="dropdown-hover">
            <a onclick="major1()"> Biomedical        </a>
            <a onclick="major2()"> Chemical		     </a>
            <a onclick="major3()"> Civil			 </a>
            <a onclick="major4()"> Computer Science  </a>
            <a onclick="major5()"> Electrical		 </a>
	        <a onclick="major6()"> Environmental	 </a>
	        <a onclick="major7()"> Industrial		 </a>
	        <a onclick="major8()"> Information		 </a>
	        <a onclick="major9()"> Materials		 </a>
	        <a onclick="major10()">Mechanical		 </a>
	        <a onclick="major11()">Software		     </a>
	        <a onclick="major12()">Systems			 </a>
	        <a onclick="major13()">Other			 </a>
		 </div>
      </div> &nbsp;&nbsp;&nbsp;&nbsp	
     <!--
          <input class="form-control input-lg" id="major" name="major" placeholder="" style="width: 70%;" list="majoreng" autocomplete="off">	&nbsp;&nbsp;&nbsp;&nbsp	
      <datalist id="majoreng">	
            <option></option>
			<option value='Biomedical'>Biomedical</option>
			<option value='Chemical'>Chemical</option>
			<option value='Civil'>Civil</option>
			<option value='Computer Science'>Computer Science</option>
			<option value='Electrical'>Electrical</option>
			<option value='Environmental'>Environmental</option>
			<option value='Industrial'>Industrial</option>
			<option value='Information'>Information</option>
			<option value='Materials'>Materials</option>
			<option value='Mechanical'>Mechanical</option>
			<option value='Software'>Software</option>
			<option value='Systems'>Systems</option> 
			<option value='Other'>Other</option>
		 </datalist> -->
		<span style="padding-top:6px;">	Preferred  &nbsp; <input type="checkbox" name="preferred2" value="preferred"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span style="padding-top:6px;"> Required  &nbsp; <input type="checkbox" name="required2" value="required"></span>
		 
</div>

<label class="font1" style="margin-bottom:0px; margin-top:5px;">Minimum Number of Years of Experience</label><br>    				
<div class="font1" style="width:100%; display:inline-flex;">
	<input class="form-control input-lg" id="experience" name="experience" placeholder="" style="width: 70%;"> &nbsp;&nbsp;&nbsp;&nbsp	
		<span style="padding-top:6px;">	Preferred  &nbsp; <input type="checkbox" name="preferred3" value="preferred"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span style="padding-top:6px;">	Required  &nbsp; <input type="checkbox" name="required3" value="required"></span>
		 
</div>
										
	<div align="center" valign="middle" class="divselection">
		<div class="font1">
<h4 style=" width:100%; height:50px;background:rgb(34,128,178); text-align:center; vertical-align:middle; padding-top:11px; border-radius: 15px; color:white;margin-top: 10px; font-size: 20pt;" valign="middle"><b>APPLICATION </b></h4>
		</div>
 </div>			


	
    <div class="font1">
<label style="margin-bottom:0px; margin-top:8px;">Application Website</label>
<input class="form-control input-lg"  type="text" id="appweb" name="appweb">
</div>

<div class="container2">
<label class="font1" style="margin-bottom:0px; margin-top:10px;">Contact Person</label><br>

<div class="font1" style="display:inline-flex; padding-top:1px; width:100%;">

<span style="padding-top:6px; width: 12%;"> First Name: </span>  <input class="form-control input-lg" type="text"
												id="firstname:" autocomplete="off"
												name="firstname:"  style="width: 38%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
			<span style="padding-top:6px; width: 12%;">	Last Name:  </span> <input class="form-control input-lg" 
					   id="lastname: " name="lastname:"  style="width: 38%;"><br>
</div>				

 
 <div class="font1">
<label style="margin-bottom:0px; margin-top:5px;">Email</label>
<input class="form-control input-lg" type="text" id="email" name="email">
</div>
  <div class="font1">
<label style="margin-bottom:0px; margin-top:5px;">Phone</label>
<input class="form-control input-lg" type="text" id="contactno" name="contactno">
</div>
 
 
<div class="font1">
<label style="margin-bottom:0px; margin-top:5px;">Address</label>
	<input class="form-control input-lg" type="text" id="streetaddress" name="streetaddress"><p></p>
</div>	
</div>

    <div class="font1">
<label style="margin-bottom:0px; margin-top:5px;">Application Deadline</label>
<input class="form-control input-lg" type="date" id="appdeadline" data-id="appdeadline" name="deadline">
</div>								
										
										
										
										
										<br>
										
			<div align="center" valign="middle" class="divselection">
                <div class="font1">
				  <h6 style=" width:100%; height:90px;background:rgb(34,128,178); text-align:center; vertical-align:middle; padding-top:11px; border-radius: 15px; color:white;" valign="middle"><b style="font-size: 20pt;"> BRIEF JOB DESCRIPTION</b><br>
Additional information not covered above (e.g., role summary, responsibilities, desired characteristics) <br> in 120 characters for search listing.</h6>
				</div>
                <div class="form-group">
				
				<textarea class="form-control input-lg" style="height: 200px" id="info" name="info" placeholder=""></textarea>
	  </div>
				<div class="font1">
				  <h6 style=" width:100%; height:80px;background:rgb(34,128,178); text-align:center; vertical-align:middle; padding-top:11px; border-radius: 15px; color:white;" valign="middle"><b style="font-size: 20pt;">COMPLETE JOB OPENING STATEMENT</b><span style="color:red; font-size:30px;">* </span><br>

Including all details. No character limit.</h6>
				</div>
  
 </div>							
										
			<div class="form-group">
				
				<textarea class="form-control input-lg" style="height: 200px" id="description" name="description" placeholder="" re></textarea>
	  </div>
      <div align="center" valign="middle" class="divselection">
		<div class="font1">
<h6 style=" width:100%; height:80px;background:MediumTurquoise; text-align:center; vertical-align:middle; padding-top:11px; border-radius: 15px; color:black; margin-top: 10px;" valign="middle"><span style="font-size: 20pt;">Employer Contact</span><br>(for ENJOHE office to contact employer only)</h6>
		</div>
 </div>			


	
    
<div class="font1">

<label style="margin-bottom:0px; margin-top:5px;">Contact Person</label><br>

<div style="display:inline-flex; width:100%;">
<span style="padding-top:6px;"> First Name <span style="color:red;">* </span> </span> &nbsp; <input class="form-control input-lg" type="text"
												id="firstname:"  autocomplete="off"
												name="firstname"  style="width: 37%;" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span style="padding-top:6px;">	Last Name<span style="color:red;">* </span> </span> &nbsp; <input class="form-control input-lg" 
					   id="lastname: " name="lastname"  style="width: 37%;" required>
</div>      
<br>
</div>

<div class="font1">
<label style="margin-bottom:0px; margin-top:5px;">Email<span style="color:red;">* </span></label>
<input class="form-control input-lg"  type="text" id="appweb" name="mail" required>
</div>

<div class="font1">
<label style="margin-bottom:0px; margin-top:5px;">Phone<span style="color:red;">* </span></label>
<input class="form-control input-lg"  type="text" id="appweb" name="contactno" required>
</div>

<div class="font1">
<label style="margin-bottom:0px; margin-top:5px;">Address<span style="color:red;">* </span></label>
<input class="form-control input-lg"  type="text" id="appweb" name="streetaddress" required>
</div>

<br>

<div align="center" class="g-recaptcha" data-sitekey="6LfKAJcUAAAAAM--m76LCYWbSEV4OSh4yDFwZU8d"></div>
 
<div  align="center">
	<div class="font1" style=" padding-top:15px">
    <button  type="submit" class="button1" onclick="form_action.php">Submit</button>
</div> 
</div> 

    </form>								
  </div>
</div>
	</div>
	</div>
</div>


<div>
	<footer>
		<div align="center"> 
           <div style="padding-top:10px; display:inline-flex; ">
            <div style="padding-left: 5px; width:120px">
                <a href="index.html" class="bottombut">Home</a>
            </div>
            <div style="padding-left: 5px; display:block; width:120px; text-align:left">
                <div> <a class="bottombut" href="search_job.php">Job Seeker</a></div>
                <div style="padding-top:8px"><a href="search_job.php" style=" text-decoration: none; color:black; " >Find a Job</a></div>
                <div style="padding-top:8px"><a href="submit_info.php" style=" text-decoration: none; color:black; padding-top:5px" >Submit My <br> Qualifications</a></div>
            </div>
            <div style="padding-left:5px; display:block; width:120px; text-align:left">
                <a class="bottombut" href="postjob.php">Employer</a>
                <div style="padding-top:8px"><a href="postjob.php" style="text-decoration: none; color:black;  padding-top:5px">Post Job</a></div>
                <div style="padding-top:8px"><a href="register.php" style="text-decoration: none; color:black;padding-top:5px ">Sign Up | Login</a> </div>
                <div style="padding-top:8px"><a href="find_seekers.php" style="text-decoration: none; color:black;padding-top:5px ">Find Candidates</a></div>
            </div>

        </div>
       </div>
		<p ><br></p>
    <div align="center">
     <img  src="footerlog.png" width="200" height="40" alt="">
    </div>
</footer>
		</div>
<script
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- AdminLTE App -->
	<script src="../js/adminlte.min.js"></script>
<script>
$( document ).ready(function() {
	pupulate("categories.php",{},"categories");	
	$('#categories').change(function () {
		 let data = {category_id : $(this).val() } ;	
		 pupulate("subcategory.php",data,"subcategory");		 
	 }); 
	 
	$('#subcategory').change(function () {				
		 let data = {hcsubcategory_id : $(this).val() } ;		
		 pupulate("subcategorytype.php",data,"subcategorytype");	 
		 	 });		 
   function pupulate(ajaxUrl,data,selector){   
	 $.ajax( {
			  type: "POST",
			  url:ajaxUrl, //gameCreateform.attr( 'action' ),
			  dataType: 'json',
			  data: data,
			  success: function( response ) {
			  $("#"+selector).empty();
			  $("#"+selector).append($('<option></option>').val(0).html("Select Healthcare Engineering Categories:"));
				 $.each(response, function (key, value) {
					$("#"+selector).append($('<option></option>').val(value.id).html(value.name));
				});
	
			  }
			});   
   }	
   
});
</script>

<script>
function bigImg() {
  document.getElementById("on-hover").style.color = "white";
}

function normalImg() {
  document.getElementById("on-hover").style.color = "black";
}

function bigImg1() {
  document.getElementById("on-hover-course").style.color = "white";
}

function normalImg1() {
    document.getElementById("on-hover-course").style.color = "black";
}

function healthcare1() {
  document.getElementById("healthcaresector").value = "Healthcare Providers";
}function healthcare2() {
  document.getElementById("healthcaresector").value = "Manufacturers of Medical Devices/Equipment/Supplies";
}function healthcare3() {
  document.getElementById("healthcaresector").value = "Healthcare Systems";
}function healthcare4() {
  document.getElementById("healthcaresector").value = "Biotechnology & Pharmaceuticals";
}function healthcare5() {
  document.getElementById("healthcaresector").value = "Healthcare Consulting, Support and Education";
}

function jobtype1() {
  document.getElementById("jobtype").value = "Full Time";
}function jobtype2() {
  document.getElementById("jobtype").value = "Part Time";
}function jobtype3() {
  document.getElementById("jobtype").value = "Temporary";
}function jobtype4() {
  document.getElementById("jobtype").value = "Contract";
}function jobtype5() {
  document.getElementById("jobtype").value = "Internship";
}function jobtype6() {
  document.getElementById("jobtype").value = "Commission";
}

function major1() {
  document.getElementById("major").value = "Biomedical";
}function major2() {
  document.getElementById("major").value = "Chemical";
}function major3() {
  document.getElementById("major").value = "Civil";
}function major4() {
  document.getElementById("major").value = "Computer Science";
}function major5() {
  document.getElementById("major").value = "Electrical";
}function major6() {
  document.getElementById("major").value = "Environmental";
}function major7() {
  document.getElementById("major").value = "Industrial";
}function major8() {
  document.getElementById("major").value = "Information";
}function major9() {
  document.getElementById("major").value = "Materials";
}function major10() {
  document.getElementById("major").value = "Mechanical";
}function major11() {
  document.getElementById("major").value = "Software";
}function major12() {
  document.getElementById("major").value = "Systems";
}function major13() {
  document.getElementById("major").value = "Other";
}

function degree1() {
  document.getElementById("degree").value = "Bachelor";
}function degree2() {
  document.getElementById("degree").value = "Master";
}function degree3() {
  document.getElementById("degree").value = "PhD";
}function degree4() {
  document.getElementById("degree").value = "Other";
}

</script>

<script type="text/javascript">
var $sec = $('#providers');
$('a[href="#providers"]').click(
	function (){
    $sec.val("Healthcare Providers");
      $sec.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#providers'); 
$('a[href="#providers"]').click(
	function (){
    $sec.val("Manufacturers of Medical Devices/Equipment/Supplies");
      $sec.val( $(this).data('select') ); 
});
</script>


<script type="text/javascript">
var $sec = $('#providers'); 
$('a[href="#providers"]').click(
	function (){
    $sec.val("Healthcare Systems");
      $sec.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#providers'); 
$('a[href="#providers"]').click(
	function (){
    $sec.val("Biotechnology & Pharmaceuticals");
      $sec.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#providers'); 
$('a[href="#providers"]').click(
	function (){
    $sec.val("Healthcare Consulting, Support and Education");
      $sec.val( $(this).data('select') ); 
});
</script>



<script type="text/javascript">
var $sec = $('#healthcaresector');
var $jfun = $('#jobfunction');  
$('a[href="#Healthcareprovider"]').click(
	function (){
    $sec.val("Healthcare Provider");
      $jfun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $fun = $('#jobtype');  
$('a[href="#Healthcareprovider1"]').click(
	function (){
    $sec.val("Healthcare Provider");
      $fun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $degr = $('#degree');  
$('a[href="#Healthcareprovider2"]').click(
	function (){
    $sec.val("Healthcare Provider");
      $degr.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $majo = $('#major');  
$('a[href="#Healthcareprovider3"]').click(
	function (){
    $sec.val("Healthcare Provider");
      $majo.val( $(this).data('select') ); 
});
</script>


<script type="text/javascript">
var $sec = $('#healthcaresector');
var $jfun = $('#jobfunction');  
$('a[href="#Manufacturers of medical devices/equipment/supplies"]').click(
	function (){
    $sec.val("Manufacturers of medical devices/equipment/supplies");
      $jfun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $fun = $('#jobtype');  
$('a[href="#Manufacturers of medical devices/equipment/supplies1"]').click(
	function (){
    $sec.val("Manufacturers of medical devices/equipment/supplies");
      $fun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $degr = $('#degree');  
$('a[href="#Manufacturers of medical devices/equipment/supplies2"]').click(
	function (){
    $sec.val("Manufacturers of medical devices/equipment/supplies");
      $degr.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $majo = $('#major');  
$('a[href="#Manufacturers of medical devices/equipment/supplies3"]').click(
	function (){
    $sec.val("Manufacturers of medical devices/equipment/supplies");
      $majo.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $jfun = $('#jobfunction');  
$('a[href="#Healthvcare systems"]').click(
	function (){
    $sec.val("Healthvcare systems");
      $jfun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $fun = $('#jobtype');  
$('a[href="#Healthvcare systems1"]').click(
	function (){
    $sec.val("Healthvcare systems");
      $fun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $degr = $('#degree');  
$('a[href="#Healthvcare systems2"]').click(
	function (){
    $sec.val("Healthvcare systems");
      $degr.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $majo = $('#major');  
$('a[href="#Healthvcare systems3"]').click(
	function (){
    $sec.val("Healthvcare systems");
      $majo.val( $(this).data('select') ); 
});	
</script>



<script type="text/javascript">
var $sec = $('#healthcaresector');
var $jfun = $('#jobfunction');  
$('a[href="#Biotechnology & Pharmaceuticals"]').click(
	function (){
    $sec.val("Biotechnology & Pharmaceuticals");
      $jfun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $fun = $('#jobtype');  
$('a[href="#Biotechnology & Pharmaceuticals1"]').click(
	function (){
    $sec.val("Biotechnology & Pharmaceuticals");
      $fun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $degr = $('#degree');  
$('a[href="#Biotechnology & Pharmaceuticals2"]').click(
	function (){
    $sec.val("Biotechnology & Pharmaceuticals");
      $degr.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $majo = $('#major');  
$('a[href="#Biotechnology & Pharmaceuticals3"]').click(
	function (){
    $sec.val("Biotechnology & Pharmaceuticals");
      $majo.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $jfun = $('#jobfunction');  
$('a[href="#Healthcare consulting, support, and education"]').click(
	function (){
    $sec.val("Healthcare consulting, support, and education");
      $jfun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $fun = $('#jobtype');  
$('a[href="#Healthcare consulting, support, and education1"]').click(
	function (){
    $sec.val("Healthcare consulting, support, and education");
      $fun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $degr = $('#degree');  
$('a[href="#Healthcare consulting, support, and education2"]').click(
	function (){
    $sec.val("Healthcare consulting, support, and education");
      $degr.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $majo = $('#major');  
$('a[href="#Healthcare consulting, support, and education3"]').click(
	function (){
    $sec.val("Healthcare consulting, support, and education");
      $majo.val( $(this).data('select') ); 
});	
</script>
<!--<script type="text/javascript">
var $emp = $('#healthcaresector_employer');
$('a[href="#employer"]').click(function () {
    $emp.val( $(this).data('select') );
});
</script>
<script type="text/javascript">
var $majo = $('#major');
$('a[href="#maj"]').click(function () {
    $majo.val( $(this).data('select') );
});
</script>
<script type="text/javascript">
var $degr = $('#degree');
$('a[href="#deg"]').click(function () {
    $degr.val( $(this).data('select') );
});
</script>
<script type="text/javascript">
var $expe = $('#experience');
$('a[href="#exp"]').click(function () {
    $expe.val( $(this).data('select') );
});
</script>
<script type="text/javascript">
 var $jfun = $('#jobfunction');
$('a[href="#fjobs"]').click(function () {
    $jfun.val( $(this).data('select') );
});
	
</script>


<script type="text/javascript">
var $fun = $('#jobtype');
$('a[href="#emp"]').click(function() {
    $fun.val( $(this).data('select') );
});
</script>-->
	</body>
										</html>