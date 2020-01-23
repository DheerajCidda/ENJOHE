<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="Keywords" content="php ajax country state city dropdown">
        <meta name="Description" content="php ajax country state city dropdown">
<title>sign up</title>

<style type="text/css"></style>
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
$companyname = $_POST['companyname'];
$website = $_POST['website'];
$address = $_POST['address'];
$countryId = $_POST['country'];
$stateId = $_POST['state'];
$cityId = $_POST['city'];
$zip = $_POST['zip'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$password = $_POST['password'];
$phonenumber = $_POST['phonenumber'];
$jobtitle = $_POST['jobtitle'];


//echo "$lastname";

//echo "$healthcaresector";
 // $name1 = $_POST['comment'];
  //$name2 = $_POST['mail'];
  //$pcode= $_POST['pcode'];
  
  //$Today=date('y:m:d');
  //echo "$Today";
  //echo "$pcode";
  //echo "$name";
  //echo "$name1";
  //echo "$name2";


if ($response != null && $response->success) 
{

$link = mysqli_connect('sql313.epizy.com', 'epiz_23473265', '4IPhKumUMMbtG');
                mysqli_select_db($link,"epiz_23473265_test");
                if (!$link) {
                                die('Could not connect: ' . mysql_error());
                            }

$sql="select name from countries where id='$countryId';";
if ($result=mysqli_query($link,$sql))
  { 
      $number_rows=mysqli_num_rows($result);
	//echo $number_rows;
	//echo "<form action='insert3.php' method='post'>";
  while ($row=mysqli_fetch_row($result))
    {   $countryname=$row["0"];
    }
	//echo $countryname;
    // Free result set
  mysqli_free_result($result);
  }
mysqli_close($link);

$link = mysqli_connect('sql313.epizy.com', 'epiz_23473265', '4IPhKumUMMbtG');
                mysqli_select_db($link,"epiz_23473265_test");
                if (!$link) {
                                die('Could not connect: ' . mysql_error());
                            }
                
$sql="select name from states where id='$stateId';";
if ($result=mysqli_query($link,$sql))
  { //echo " <table class='tableclass'><tr><th><h2>Product Code - Device Type</h2></th></tr>";
    // Fetch one and one row
	$number_rows=mysqli_num_rows($result);
	//echo $number_rows;
    //echo "<form action='insert3.php' method='post'>";
  while ($row=mysqli_fetch_row($result))
    {   $statename=$row["0"];
    }
	//echo "</form></div>";
    // Free result set
  mysqli_free_result($result);
  }
mysqli_close($link);

$link = mysqli_connect('sql313.epizy.com', 'epiz_23473265', '4IPhKumUMMbtG');
                mysqli_select_db($link,"epiz_23473265_test");
                if (!$link) {
                                die('Could not connect: ' . mysql_error());
                            }
                
$sql="select name from cities where id='$cityId';";
if ($result=mysqli_query($link,$sql))
  { //echo " <table class='tableclass'><tr><th><h2>Product Code - Device Type</h2></th></tr>";
    // Fetch one and one row
	$number_rows=mysqli_num_rows($result);
	//echo $number_rows;
    //echo "<form action='insert3.php' method='post'>";
  while ($row=mysqli_fetch_row($result))
    {   $cityname=$row["0"];
    }
	//echo "</form></div>";
    // Free result set
   mysqli_free_result($result);
  }
mysqli_close($link);

//echo $countryname,$statename,$cityname;

$servername = "sql313.epizy.com";
$username = "epiz_23473265";
$password = "4IPhKumUMMbtG";
$dbname = "epiz_23473265_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
  
//echo "connected";

$sql = "INSERT INTO employer (`companyname`, `website`, `address`,`country`, `state`, `city`, `zip`,`lastname`,`firstname`,`email`,`password`,`phonenumber`,`jobtitle`)
                VALUES('$companyname','$website','$address','$countryname','$statename','$cityname','$zip','$lastname','$firstname','$email','$password','$phonenumber','$jobtitle')";

//echo "$sql";

if ($conn->query($sql) === TRUE) 
{
    echo '<h3 style="margin-top: 200px;" align="center"> Thank You<br> Your Details have been Registered Successfully!!!!</h3>';
    echo '<div  align="center">
	<span style="text-align:center; font-size:20px;" ><a class="font1" href="login.php" style="text-decoration:none; color:blue;"> <b> Login here</b></a>.</span>
</div>
';
    //echo "New record created successfully";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
else
{
    echo '<h3 style="margin-top: 200px;" align="center"> Failed Captcha!!!!</h3>';
}

$conn->close();

?>

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

  </body>
  
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

</html>