<?php   session_start();  ?>

<?php
      if(!isset($_SESSION['username']) && !isset($_SESSION['email'])) // If session is not set then redirect to Login Page
       {
           header("Location:login.php");  
       }
       $username = $_SESSION['username'];

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="Keywords" content="php ajax country state city dropdown">
        <meta name="Description" content="php ajax country state city dropdown">
<title>sign up</title>

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
  <a id="on-hover" class="dropbtn font1" onmouseover="bigImg()" onmouseout="normalImg()" style="color:black" href="index.html">Home </a>
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
    <a href="search_job.php">Find a job</a>
    <a href="submit_info.php">Submit Details</a>
		   </div>
    
  </div>
</div>
	<div class="dropdown">
  <button class="dropbtn">Employer</button>
  <div class="dropdown-content" >
	   <div class="font1">
         <a href="register.php">Sign Up | Login</a>
        <a href="postjob.php">Post Job </a>
        <a href="find_seekers.php">Find Candidates</a>
  </div>
</div>
	</div>

     <div class="dropdown">
     <a id="on-hover-course" class="dropbtn font1" onmouseover="bigImg1()" onmouseout="normalImg1()" style="color:black" href="short_course.html">Short Courses </a>
     <div class="dropdown-content">
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
<?php

require_once "recaptchalib.php";

  // your secret key
$secret = "6LfKAJcUAAAAAL5k9nhOi8vsRc_DUMXmA_ULqRdO";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);
$captch = $_POST["g-recaptcha-response"];

//echo $_POST["g-recaptcha-response"];

if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );

}

 //echo "here";
	/*
$healthcaresector = $_POST['healthcaresector'];
$jobfunction = $_POST['jobfunction'];
$jobtitle = $_POST['jobtitle'];
$companyname = $_POST['companyname'];
$countryId = $_POST['country'];
$stateId = $_POST['state'];
$cityId = $_POST['city'];
$zipcode = $_POST['zipcode'];
$jobtype = $_POST['jobtype'];
$minimumsalary =$_POST['minimumsalary'];
$maximumsalary = $_POST['maximumsalary'];
$negotiable = $_POST['negotiable'];
$postdate = $_POST['postdate'];
$startdate= $_POST['startdate'];
$degree = $_POST['degree'];
$major = $_POST['major'];
$experience = $_POST['experience'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mail = $_POST['email'];
$contactno = $_POST['contactno'];
$streetaddress = $_POST['streetaddress'];
$deadline = $_POST['deadline'];
$description = $_POST['description'];
*/

	$link = mysqli_connect('sql313.epizy.com', 'epiz_23473265', '4IPhKumUMMbtG');
                mysqli_select_db($link,"epiz_23473265_test");
                if (!$link) {
                                die('Could not connect: ' . mysql_error());
                            }

	
if ($response != null && $response->success) 
{

$sql="SELECT `healthcaresector`, `jobfunction`,`degree`, `major`, `university` FROM `Applier_data` where ";

if(!empty($_POST['healthcaresector']))
{   $healthcaresector=$_POST['healthcaresector'];
    
	$where1="healthcaresector='".$healthcaresector."'";
    
}

if(!empty($_POST['jobfunction']))
{   $jobfunction=$_POST['jobfunction'];
    
	$where1="jobfunction='".$jobfunction."'";
    
}

$sql=$sql.$where1;

if ($result=mysqli_query($link,$sql))
  { //echo " <table class='tableclass'><tr><th><h2>Product Code - Device Type</h2></th></tr>";
  // Fetch one and one row
	$number_rows=mysqli_num_rows($result);
	//echo $number_rows;
	



//echo "<form action='insert3.php' method='post'>";
  while ($row=mysqli_fetch_row($result))
    {   $healthcaresector=$row["0"]; $jobfunction=$row["1"];  $degree=$row["2"]; $major=$row["3"]; $university=$row["4"]; $jobtype=$row["5"]; 
       
     
         echo "

               <div style=' padding:10px; background:rgb(242,242,242);width:50%;  border-radius:10px;'>
                <ul style='list-style-type:none;'>
                <li style='color:blue; font-weight:bold; text-decoration: underline;'>Healthcare Industry Sector: $healthcaresector</li>
                <li><b>Job Function:</b> $jobfunction<br></li>
                <li><b>Degree:</b> $degree<br></li>
                <li><b>Major:</b> $major<br></li>
                <li><b>University:</b> $university<br></li>
                <li><b>Employment:</b> $jobtype<br></li>
               </ul>
               <hr>
               </div>";
 


        
  }
	//echo "</form></div>";
  // Free result set
  mysqli_free_result($result);
  }
}
else
{
    echo 'failed Captcha!';
}

$conn->close();

 ?>
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

</script>

  </body>

</html>


        <!-- echo "<div style='margin-top:50px; margin-left:auto; margin-right:auto; background:rgb(242,242,242);  width:900px; height:auto; padding:15px; border-radius:10px;'>
                <h4 style='float:left;'>Job title: $jobtitle.</h4> 
                <h4 style='float:right;'>Company: $companyname</h4><br>
                <p style='margin-top:20px;'>Posted: $postdate.<br><br>
                <b>Location:</b> $state, $country, $city.<br>
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
 -->