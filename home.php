<?php   session_start();  ?>

<!doctype html>
<html>
<head>
<title>ENJOHE Engineering Jobs In Healthcare</title>

<link rel="stylesheet" href="sheet.css" type="text/css">

	</head>
<body>

<meta charset="UTF-8">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 


<div style="border-bottom: 3px #000000;">	
<span style="padding-left: 15px" ><img src="logo2.png" width="250" height="50" alt=""/> </span>

<div class="nav">


<div class="dropdown">
  <a id="on-hover" class="dropbtn font1" onmouseover="bigImg()" onmouseout="normalImg()" style="color:black" href="index.html">Home </a>
  <div class="dropdown-content">
  </div>
</div>
	
<div class="dropdown">
  <button class="dropbtn font1">Job Seeker</button>
  <div class="dropdown-content font1">
	  <a href="search_job.php">Find a Job</a>
      <a href="submit_info.php">Submit My Qualifications</a>
    
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn font1">Employer</button>
  <div class="dropdown-content">
	  <div class="font1">
    	<a href="register.php">Sign Up | Login</a>
        <a href="postjob.php">Post Job</a>
        <a href="find_seekers.php">Find Candidates</a>
    </div>
  </div>
</div>

<div class="dropdown">
  <a id="on-hover-course" class="dropbtn font1" onmouseover="bigImg1()" onmouseout="normalImg1()" style="color:black" href="index.html">Short Course </a>
  <div class="dropdown-content">
  </div>
</div>

<div class="dropdown">
 <div  >
<?php
      if(!isset($_SESSION['username']) && !isset($_SESSION['email'])) // If session is not set then redirect to Login Page
       {
           header("Location:login.php");  
       }

$username = $_SESSION['username'];

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
</div>

<?php

echo "<h3 style='margin-top: 200px;font-size:55px;' align='center'> Welcome<br> $username</h3>";
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