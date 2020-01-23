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
    <a href="search_job.php">Find a Job</a>
    <a href="submit_info.php">Submit My Qualifications</a>
		   </div>
    
  </div>
</div>

	<div class="dropdown">
  <button class="dropbtn">Employer</button>
  <div class="dropdown-content" >
	   <div class="font1">
        <a href="register.php">Sign Up | Login</a>
        <a href="postjob.php">Post Job</a>
	    <a href="find_seekers.php">Find Candidates</a>
        </div>
   </div>
   </div>
 <div class="dropdown">
     <a id="on-hover-course" class="dropbtn font1" onmouseover="bigImg1()" onmouseout="normalImg1()" style="color:black" href="short_course.html">Short Courses </a>
     <div class="dropdown-content">
     </div>
    
   </div>
	</div>
	</div>
<h3 style="margin-top: 200px;" align="center"> Thank you<br> Your Job has been Submitted</h3>
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


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mail = $_POST['mail'];
$contactno = $_POST['contactno'];
$streetaddress = $_POST['streetaddress'];
$degree = $_POST['degree'];
$major = $_POST['major'];
$university = $_POST['university'];

$fromdate = $_POST['fromdate'];
$todate = $_POST['todate'];
$jobtitle = $_POST['jobtitle'];
$companyname = $_POST['companyname'];
$city = $_POST['city'];
$country = $_POST['country'];

$healthcaresector = $_POST['healthcaresector'];
$jobfunction = $_POST['jobfunction'];
$jobtype = $_POST['jobtype'];


$servername = "sql313.epizy.com";
$username = "epiz_23473265";
$password = "4IPhKumUMMbtG";
$dbname = "epiz_23473265_test";

//echo "From Date: "$fromdate ",To Date: " $todate;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if ($response != null && $response->success) 
{

$main = "SELECT `mail` FROM `Applier_data` WHERE mail='".$mail."'";
$result=mysqli_query($conn,$main);
// Fetch one and one row
$number_rows=mysqli_num_rows($result);
//echo $number_rows;

if ( $number_rows > 0)
{
    echo "User Already Exists!!!"; 
}

else
{

$sql = "INSERT INTO `Applier_data`(`firstname`, `lastname`, `mail`, `contactno`, `streetaddress`, `degree`, `major`, `university`, `healthcaresector`, `jobfunction`, `jobtype`) VALUES ('$firstname','$lastname','$mail','$contactno','$streetaddress','$degree','$major','$university','$healthcaresector','$jobfunction','$jobtype')";

//echo $sql;
	
$sql1="INSERT INTO `experience`(`fromdate`, `todate`, `jobtitle`, `companyname`, `city`, `country`, `email`) VALUES (DATE '$fromdate',DATE '$todate','$jobtitle','$companyname','$city','$country','$mail')";

//echo $sql1;

if(!empty($_POST['fromdate1']) && !empty($_POST['todate1']) && !empty($_POST['jobtitle1']) && !empty($_POST['companyname1']) && !empty($_POST['city1']) && !empty($_POST['country1']))
{   
    $date1 = $_POST['fromdate1'];
    $fromdate1 = $date1."-01";
    $date2 = $_POST['todate1'];
    $todate1 = $date2."-01";
    $jobtitle1 = $_POST['jobtitle1'];
    $companyname1 = $_POST['companyname1'];
    $city1 = $_POST['city1'];
    $country1 = $_POST['country1'];
    //$test = $fromdate1."-01";
    //echo $test;
	$values=",(DATE '".$fromdate1."',DATE '".$todate1."','".$jobtitle1."','".$companyname1."','".$city1."','".$country1."','".$mail."')";
   //echo $values;   
}

if(!empty($_POST['fromdate2']) && !empty($_POST['todate2']) && !empty($_POST['jobtitle2']) && !empty($_POST['companyname2']) && !empty($_POST['city2']) && !empty($_POST['country2']))
{   
    $date3 = $_POST['fromdate2'];
    $fromdate2 = $date3."-01"
    $date4 = $_POST['todate2'];
    $todate2 = $date4."-01"
    $jobtitle2 = $_POST['jobtitle2'];
    $companyname2 = $_POST['companyname2'];
    $city2 = $_POST['city2'];
    $country2 = $_POST['country2'];  
  
  if(strcmp($values,'')==0)
    {
        $values=$values.",(DATE '".$fromdate2."',DATE '".$todate2."','".$jobtitle2."','".$companyname2."','".$city2."','".$country2."','".$mail."')";
        //echo "when cmp ==0  " ,$values;
    }
    else
    {
	    $values=$values.",(DATE '".$fromdate2."',DATE '".$todate2."','".$jobtitle2."','".$companyname2."','".$city2."','".$country2."','".$mail."')";
        //echo "else  " ,$values;
    }
}

if(!empty($_POST['fromdate3']) && !empty($_POST['todate3']) && !empty($_POST['jobtitle3']) && !empty($_POST['companyname3']) && !empty($_POST['city3']) && !empty($_POST['country3']))
{ 
    $date5 = $_POST['fromdate3'];
    $fromdate3 = $date5."-01";
    $date6 = $_POST['todate3'];
    $todate3 = $date6."-01";
    $jobtitle3 = $_POST['jobtitle3'];
    $companyname3 = $_POST['companyname3'];
    $city3 = $_POST['city3'];
    $country3 = $_POST['country3'];
  
  if(strcmp($values,'')==0)
    {
        $values=$values.",(DATE '".$fromdate3."',DATE '".$todate3."','".$jobtitle3."','".$companyname3."','".$city3."','".$country3."','".$mail."')";
    }
    else
    {
	    $values=$values.",(DATE '".$fromdate3."',DATE '".$todate3."','".$jobtitle3."','".$companyname3."','".$city3."','".$country3."','".$mail."')";
    }
}


$sql1=$sql1.$values;

$name= $_FILES['file']['name'];
$tmp_name= $_FILES['file']['tmp_name'];
//$submitbutton= $_POST['submit'];
$position= strpos($name, "."); 
$fileextension= substr($name, $position + 1);
$fileextension= strtolower($fileextension);
//$description= $_POST['description_entered'];

if (isset($name)) {

$path= 'resumeuploads/';

if (!empty($name))
    {
        if (move_uploaded_file($tmp_name, $path.$name)) 
         {
            //echo 'Uploaded!';
         }
    }
}

$sql2 = "INSERT INTO `resume`(`filename`, `mail`) VALUES ('".$name."','".$mail."')";


//echo $sql1;	

if (($conn->query($sql) === TRUE) && ($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE))
 {
    echo "New record created successfully";
 } 
 else if($conn->query($sql) === FALSE)
  {
     echo "Error: " . $sql . "<br>" . $conn->error;
}
else if($conn->query($sql1) === FALSE)
{
     echo "Error: " . $sql1 . "<br>" . $conn->error;
} 
else if ($conn->query($sql2) === FALSE)
{
     echo "Error: " . $sql2 . "<br>" . $conn->error;
}


        
  
  mysqli_free_result($result);
}

}
else
{
    echo 'failed Captcha!';
}

$conn->close();

 ?>
<div>
	<footer style="position: fixed; left: 0; bottom: 0;">
		<div align="center" class="font1"> 
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
                <a class="bottombut" href="postjob.html">Employer</a>
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

