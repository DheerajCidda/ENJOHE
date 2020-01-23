<?php   session_start();  ?>

<?php
      if(isset($_SESSION['username']) && isset($_SESSION['email'])) // If session is not set then redirect to Login Page
       {
           header("Location:home.php");  
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


	<style type="text/css">
		input, select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
        margin-left:auto;
        margin-right:auto;
}

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


<link rel="stylesheet" href="sheet.css" type="text/css">

	</head>
<body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <script src="js/location.js"></script>   


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
  <a id="on-hover-course" class="dropbtn font1" onmouseover="bigImg1()" onmouseout="normalImg1()" style="color:black" href="short_course.html">Short Course </a>
  <div class="dropdown-content">
  </div>
</div>

  </div>
</div>


<div class="font1">
	<h1 style="text-align:center">Employer SignUp</h1>
</div>

   

<div  align="center">
	<span style="text-align:center; font-size:20px;" ><b class="font1">Already have an account</b><b> ? </b><a class="font1" href="login.php" style="text-decoration:none; color:blue;"> <b> Login here</b></a>.</span>
</div>
<br>
<div style=" width:700px; height:auto; margin-left:auto; margin-right:auto; margin-top:5px;">
<div class="container1">

<form action="employee_signup.php" method="POST">
    
<h3 style=" width:100%; height:40px;background:rgb(34,128,178); text-align:center; vertical-align:middle; padding-top:11px; border-radius: 15px; color:white;">About Your Company</h3>
    <p> <span class="font1" style="color:red;">*required field</span></p>
    <label for="comp">Company Name<span style="color:red;">* </span></label>
    <input type="text" id="comp" name="companyname" placeholder="" required>
    
    <label for="comp">Company Website<span style="color:red;">* </span> </label>
    <input type="text" id="comp" name="website" placeholder="" required><br>
    
    
    
    <label for="reason">Company Street Address<span style="color:red;">* </span></label>
    <input  type="text" id="reason" name="address" placeholder="" required>
    


<label style="margin-bottom:0px; margin-top:5px;">Country<span style="color:red;">* </span></label>
<select name="country" class="form-control countries" id="countryId" required>
<option value="">Select Country</option>
</select>

<label style="margin-bottom:0px; margin-top:5px;">State<span style="color:red;">* </span></label>
<select name="state" class="form-control states" id="stateId" required>
<option value="">Select State</option>
</select>

<label style="margin-bottom:0px; margin-top:5px;">City<span style="color:red;">* </span></label>
<select name="city" class="form-control cities" id="cityId" required>
<option value="">Select City</option>
</select>


    
<label for="reason">Zip</label><span style="color:red;"> </span><br>
<input class="sakura1" type="text" pattern="[0-9]{5}" id="reason" name="zip" placeholder=""  style="width:100%" required><br>
    
<h3 style=" width:100%; height:40px;background:rgb(34,128,178); text-align:center; vertical-align:middle; padding-top:11px; border-radius: 15px; color:white;">About You</h3>
 
  
<label for="name">Last Name<span style="color:red;">* </span></label>
    <input class="sakura1" type="text" id="fname" name="lastname" placeholder="" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <label for="name">First Name<span style="color:red;">* </span> </label>
    <input class="sakura1" type="text" id="fname" name="firstname" placeholder="" required><br>

    <label for="email">E-mail Address<span style="color:red;">* </span></label>
    <input type="email" id="email" name="email" placeholder=""  required>

    <label for="password">Password<span style="color:red;">* </span></label>
    <input type="password" id="email" name="password" placeholder=""  required>


    <label for="numb">Phone Number<span style="color:red;">* </span></label>
    <input type="tel" id="numb" name="phonenumber" placeholder="" required>
    
     <label for="name">Job Title<span style="color:red;">* </span></label>
    <input type="text" id="fname" name="jobtitle" placeholder=""  required> <br>


<div align="center" class="g-recaptcha" data-sitekey="6LfKAJcUAAAAAM--m76LCYWbSEV4OSh4yDFwZU8d"></div>
 
 <br>

<div  align="center">
  <div class="font1">
	<button  type="submit" class="button1"  > Submit</button>
  </div>
</div>

</form>
</div>   
</div>

	
	<div>
	<footer>
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
