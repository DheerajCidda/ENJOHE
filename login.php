<?php  session_start(); //session starts with the help of this function   ?> 

<?php


if(isset($_SESSION['username']) && isset($_SESSION['email'] ))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:home.php"); 
    //header("Location:search_job.php"); 
     }


if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $email = $_POST['user'];
     $pass = $_POST['pass'];

//echo "username: ", $email, "\n"; 
//echo $pass;

$link = mysqli_connect('sql313.epizy.com', 'epiz_23473265', '4IPhKumUMMbtG');
                mysqli_select_db($link,"epiz_23473265_test");
                if (!$link) {
                                die('Could not connect: ' . mysql_error());
                            }

$sql = "select email, password, firstname from employer where email='$email' and password='$pass'";

//echo $sql;

if ($result=mysqli_query($link,$sql))
{ 
    $number_rows=mysqli_num_rows($result);

     $row=mysqli_fetch_row($result);
     $username = $row[2];
//echo $username;

//echo $number_rows;

     if($number_rows > 0)
      { 
         $_SESSION['username']=$username;
         $_SESSION['email']=$email;

         echo '<script type="text/javascript"> window.open("home.php","_self");</script>';            //  On Successful Login redirects to home.php
      }
     else
        {
            //echo "Invalid UserName or Password";        
        }

 mysqli_free_result($result);
}
else
{
  echo "User Dosen't Exist!!! Please enter right credentials";
}

}
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
	<div class="font1" >
    <a href="search_job.php">Find a Job</a>
    <a href="submit_info.php">Submit My Qualifications</a>
	</div>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn font1">Employer</button>
  <div class="dropdown-content" >
	<div class="font1" >
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


<div  style="margin-top:50px; width: 500px;
	height:auto; margin-left:auto; margin-right:auto; margin-top:50px;
	border-radius: 15px;
    background-color: #f2f2f2;
    padding: 20px;
    font-family:din;">
        <h2 class="font1">Login</h2>
        <p>  </p>
<form action="" method="post" class="font1">
   
   <div class="form-group">
      <label>E-mail</label>
      <input type="text" name="user" class="form-control" >
    </div>    

    <div class="form-group">
      <label>Password</label>
      <input type="password" name="pass" class="form-control">
    </div>
    
    <div class="form-group">
       <input type="submit" class="btn btn-primary" value="Login" name="login">
    </div>
    
    <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
   </form>
</div>    
  


<div>
	<footer style="position: fixed; left: 0; bottom: 0;">
		<div align="center" class="font1" > 
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
                <div style="padding-top:8px"><a href="postjob.php" style="text-decoration: none; color:black;  padding-top:5px">Post Job </></div>
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
</html>
