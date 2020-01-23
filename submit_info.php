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
<link

 rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
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
	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
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
	
<div align="center" style="border:solid; border-color: white;visibility:hidden;">
    <!--This is empty Div-->!
</div>


<div  class="font1" align="center">
	
     <div class="strip1" style="text-align: center; font-size: 20pt; padding-top: 3px; width: 500px; height:60px"><p style="margin-top:5px;">Submit Your Qualifications</p>
     </div>
				
</div>

<div class="font1" align="center">
     <div   align="center" style="background:rgba(0,120,125,1.00); color: white; margin-top: 40px; text-align: center; font-size: 14pt; border: 2px solid rgb(0,107,130);border-radius: 8px;width: 500px;height: 110px;
     	box-shadow: inset 2px 2px 2px rgba(255, 255, 255, .4); inset -2px -2px 2px rgba(0, 0, 0, .4);"> 
         <p style="margin-top:-17px;"><br>Job Seeker:<br> Use the form below to send us your <br>qualifications and resume.</p>
     </div>
</div>

<div style=" width:800px; height:auto; margin-left:auto; margin-right:auto; margin-top:30px;">
<div class="container">
<form action="submit_data.php" method="POST" enctype="multipart/form-data" >

<p> <span class="font1" style="color:red;">*required field</span></p>
	
<div class="font1">

<div style="display:inline-flex; width:100%;">
<span style="padding-top:6px;"> First Name <span style="color:red;">* </span> </span> &nbsp; <input class="form-control input-lg" type="text"
												id="firstname:"  autocomplete="off"
												name="firstname"  style="width: 37%;" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span style="padding-top:6px;">	Last Name<span style="color:red;">* </span> </span> &nbsp; <input class="form-control input-lg" 
					   id="lastname: " name="lastname"  style="width: 37%;" required>
</div>                       
<br>

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
</div>

	<div class="font1">
										<label style="margin-bottom:0px; margin-top:5px;" id="degree1">Degree <span style="color:red;">* </span></label>
											<div class="dropdown" style="width:100%"><input class="form-control input-lg" id="degree" name="degree"	placeholder="" list="degreemain" autocomplete="off" >
		 <div class="dropdown-hover">
            <a onclick="degree1()"> Bachelor	 </a>
            <a onclick="degree2()"> Master	 </a>
            <a onclick="degree3()"> PhD		 </a>
            <a onclick="degree4()"> Other	 </a>   
	    </div>
		</div> 
                                            <!--
                                                <select class="form-control input-lg" id="degree" name="degree"
												placeholder="" required >
												<option></option>
												<option value="Bachelor">Bachelor</option>
												<option value="Master">Master</option>
												<option value="PhD">PhD</option>
												<option value="Other">Other</option>
								  </select> -->
												
  </div>

  <div class="font1">
              <label style="margin-bottom:0px; margin-top:5px;" id="major1">Major in Engineering <span style="color:red;">* </span></label>
              <div class="dropdown" style="width:100%"> <input class="form-control input-lg" id="major" name="major" placeholder="" list="majoreng" autocomplete="off">
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
      </div>	
<!-- 
    <select class="form-control input-lg" id="major" name="major" placeholder="" required>
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
										  </select>  -->
												
										</div>	

<div class="font1">
				<label style="margin-bottom:0px; margin-top:5px;">University/School <span style="color:red;">* </span></label>
				<input type="text" name="university" id="university" class="form-control  input-lg" required>
				</div>


<label class="font1" style="margin-bottom:0px; margin-top:5px;">Experience</label><br>

<div  class="font1"  >

<div style="display:inline-flex; width:100%;">
<span style="margin-top:6px;" for="fromdate">From<span style="color:red; visibility:hidden">*</span> </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="form-control input-lg" type="text"  id="fromdate" name="fromdate" style="width:21%; height:40px;" required onfocus="(this.type='month')"  placeholder="Month, Year">&nbsp;&nbsp;
<span style="margin-top:6px;">To<span style="color:red;visibility:hidden">* </span> </span> &nbsp;&nbsp;&nbsp; <input class="form-control input-lg" type="text" id="todate " name="todate"  style="width:21%; height:40px;" required onfocus="(this.type='month')"  placeholder="Month, Year">&nbsp;&nbsp;
<span style="margin-top:6px;"> Job Title<span style="color:red;visibility:hidden">* </span> </span>&nbsp;<input class="form-control  input-lg" id="jobtitle" name="jobtitle"  style="width:21%; height:40px;" required> 
</div>

<div style="display:inline-flex; width:100%; padding-top:3px;">
<span style="margin-top:6px;">Company<span style="color:red;visibility:hidden">* </span> </span> &nbsp; <input class="form-control  input-lg" id="company" name="companyname"  style="width:21%; height:40px;" required>&nbsp;&nbsp;   
<span style="margin-top:6px;">City<span style="color:red; margin-top:10px;visibility:hidden">* </span> </span> &nbsp; <input class="form-control  input-lg" id="city" name="city"  style="width:21%; height:40px;" required>&nbsp;&nbsp;
<span style="margin-top:6px;">Country<span style="color:red; margin-top:10px;visibility:hidden">* </span> </span> &nbsp; <input class="form-control  input-lg" id="country" name="country"  style="width:21%; height:40px;" required>  &nbsp;&nbsp;&nbsp;
<label id="add_more" class="noselect" style="margin-bottom:0px; margin-top:10px; align:left; font-weight:bold; color:blue; font-size:15px">Add More</label><br>
</div>

 </div>                    

<div class="font1"  id="exp1" style="display:none; visibility:hidden; margin-top:10px; ">

<div style="display:inline-flex; width:100%;">
<span style="margin-top:6px;">From<span style="color:red;visibility:hidden">*</span> </span> &nbsp; <input class="form-control  input-lg" type="text" id="fromdate1" autocomplete="on" name="fromdate1" style="width:26%; height:40px;" onfocus="(this.type='month')"  placeholder="Month, Year" >&nbsp;&nbsp;
<span style="margin-top:6px;">To<span style="color:red;visibility:hidden">* </span> </span> &nbsp; <input class="form-control  input-lg" type="text" id="todate1" name="todate1"  style="width:26%; height:40px;" onfocus="(this.type='month')"  placeholder="Month, Year" >&nbsp;&nbsp;
<span style="margin-top:6px;">Job Title<span style="color:red;visibility:hidden">* </span> </span> &nbsp; <input class="form-control  input-lg" id="jobtitle1" name="jobtitle1"  style="width:27.5%; height:40px;" > 
</div>
<div style="display:inline-flex; width:100%; padding-top:3px;">
<span style="margin-top:6px;">Company<span style="color:red;visibility:hidden">* </span> </span> &nbsp; <input class="form-control  input-lg" id="company1" name="companyname1"  style="width:22%; height:40px;" >&nbsp;&nbsp;   
<span style="margin-top:6px;">City<span style="color:red; margin-top:10px;visibility:hidden">* </span> </span> &nbsp; <input class="form-control  input-lg" id="city1" name="city1"  style="width:20%; height:40px;" >&nbsp;&nbsp;
<span style="margin-top:6px;">Country<span style="color:red; margin-top:10px;visibility:hidden">* </span> </span> &nbsp; <input class="form-control  input-lg" id="country1" name="country1"  style="width:22%; height:40px;" >  &nbsp;&nbsp;&nbsp;
<label  onclick="changeVisibility_exp1()" class="noselect" style="margin-bottom:0px; margin-top:10px; align:left; font-weight:bold; color:blue; font-size:15px">Delete</label>
</div>

</div>        

<div class="font1" id="exp2" style="display:none; visibility:hidden; margin-top:10px;">

<div style="display:inline-flex; width:100%;">
<span style="margin-top:6px;">From<span style="color:red;visibility:hidden">*</span> </span> &nbsp; <input class="form-control  input-lg" type="text" id="fromdate2" autocomplete="on" name="fromdate2" style="width:26%; height:40px;" onfocus="(this.type='month')"  placeholder="Month, Year">&nbsp;&nbsp;
<span style="margin-top:6px;">To<span style="color:red;visibility:hidden">*</span> </span> &nbsp; <input class="form-control  input-lg" type="text" id="todate2" name="todate2"  style="width:26%; height:40px;"onfocus="(this.type='month')"  placeholder="Month, Year" >&nbsp;&nbsp;
<span style="margin-top:6px;">Job Title<span style="color:red;visibility:hidden">* </span> </span> &nbsp; <input class="form-control  input-lg" id="jobtitle2" name="jobtitle2"  style="width:27.5%; height:40px;" > 
</div>
<div style="display:inline-flex; width:100%; padding-top:3px;">
<span style="margin-top:6px;">Company<span style="color:red;visibility:hidden">*</span> </span> &nbsp; <input class="form-control  input-lg" id="company2" name="companyname2"  style="width:22%; height:40px;" >&nbsp;&nbsp;   
<span style="margin-top:6px;">City<span style="color:red; margin-top:10px;visibility:hidden">*</span> </span> &nbsp; <input class="form-control  input-lg" id="city2" name="city2"  style="width:20%; height:40px;" >&nbsp;&nbsp;
<span style="margin-top:6px;">Country<span style="color:red; margin-top:10px;visibility:hidden">*</span> </span> &nbsp; <input class="form-control  input-lg" id="country2" name="country2"  style="width:22%; height:40px;" >  &nbsp;&nbsp;&nbsp;
<label  onclick="changeVisibility_exp2()" class="noselect" style="margin-bottom:0px; margin-top:10px; align:left; font-weight:bold; color:blue; font-size:15px">Delete</label><br>
</div>

 </div>        


<div class="font1"  id="exp3" style="display:none; visibility:hidden; margin-top:10px;">

<div style="display:inline-flex; width:100%;">
<span style="margin-top:6px;">From<span style="color:red; visibility:hidden">*</span> </span> &nbsp; <input class="form-control  input-lg" type="text" id="fromdate3"  autocomplete="on" name="fromdate3" style="width:26%; height:40px;"onfocus="(this.type='month')"  placeholder="Month, Year" >&nbsp;&nbsp;
<span style="margin-top:6px;">To<span style="color:red; visibility:hidden">*</span> </span> &nbsp; <input class="form-control  input-lg" type="text" id="todate3" name="todate3"  style="width:26%; height:40px;" onfocus="(this.type='month')"  placeholder="Month, Year" >&nbsp;&nbsp;
<span style="margin-top:6px;">Job Title<span style="color:red; visibility:hidden">*</span> </span> &nbsp; <input class="form-control  input-lg" id="jobtitle3" name="jobtitle3"  style="width:27.5%; height:40px;" > 
</div>

<div style="display:inline-flex; width:100%; padding-top:3px;">
<span style="margin-top:6px;">Company<span style="color:red; visibility:hidden">*</span> </span> &nbsp; <input class="form-control  input-lg" id="company3" name="companyname3"  style="width:22%; height:40px;" >&nbsp;&nbsp;   
<span style="margin-top:6px;">City<span style="color:red; visibility:hidden">*</span> </span> &nbsp; <input class="form-control  input-lg" id="city3" name="city3"  style="width:20%; height:40px;" >&nbsp;&nbsp;
<span style="margin-top:6px;">Country<span style="color:red; visibility:hidden">*</span> </span> &nbsp; <input class="form-control  input-lg" id="country3" name="country3"  style="width:22%; height:40px;" >  &nbsp;&nbsp;&nbsp;
<label  onclick="changeVisibility_exp3()"  class="noselect" style="margin-bottom:0px; margin-top:10px; align:left; font-weight:bold; color:blue; font-size:15px">Delete</label><br>
</div>

</div>        




<label class="font1" style="margin-bottom:0px; margin-top:5px;">Interest:</label>		
<div class="font1">
	
<label style="margin-bottom:0px; margin-top:5px;">Healthcare Industry Sector (<a href="search.html" style="color:blue;">see table</a>)</label> <br>

<div class="dropdown" style="width:100%"><input  type="text" class="form-control  input-lg"  id="healthcaresector" name="healthcaresector" placeholder=" " autocomplete="off"> 
<div class="dropdown-hover">
    <a onclick="healthcare1()">Healthcare Providers</a>
    <a onclick="healthcare2()">Manufacturers of Medical Devices/Equipment/Supplies</a>
    <a onclick="healthcare3()">Healthcare Systems</a>
    <a onclick="healthcare4()">Biotechnology & Pharmaceuticals</a>
    <a onclick="healthcare5()">Healthcare Consulting, Support and Education</a>

  </div>
  </div>


<!--
<input  type="text" class="form-control  input-lg"  id="healthcaresector" name="healthcaresector" placeholder=" " list="test" autocomplete="off">
<datalist  id="test">
<option  value="Healthcare Providers" data-id="01">Healthcare Providers</option>
<option value="Manufacturers of Medical Devices/Equipment/Supplies" data-id="02">Manufacturers of Medical Devices/Equipment/Supplies</option>
<option value="Healthcare Systems" data-id="03">Healthcare Systems</option>
<option value="Biotechnology & Pharmaceuticals" data-id="04">Biotechnology & Pharmaceuticals</option>
<option value="Healthcare Consulting, Support and Education" data-id="05">Healthcare Consulting, Support and Education</option>

</datalist>
</div>									
				

    									
<div class="font1">
<label style="margin-bottom:0px; margin-top:5px;" id="job1">Job Function (<a href="search.html" style="color:blue;">see table</a>) </label>
<input class="form-control  input-lg"  id="jobfunction" name="jobfunction" placeholder="">
				
<!--<option></option><option value='Automation engineering' data-id='01'>Automation engineering</option><option value="Biomedical engineering" data-id='02'>Biomedical engineering</option><option value='Chemical engineering' data-id='03'>Chemical engineering</option><option value='Civil engineering' data-id='04'>Civil engineering</option><option value='Civil/construction engineering' data-id='05'>Civil/construction engineering</option><option value='Clinical engineering' data-id='06'>Clinical engineering</option><option value='Computer science/engineering' data-id='07'>Computer science/engineering</option><option value='Consulting/support engineering' data-id='08'>Consulting/support engineering</option><option value='Control engineering' data-id='09'>Control engineering</option><option value='Data science/engineering' data-id='10'>Data science/engineering</option><option value='Design engineering' data-id='11'>Design engineering</option><option value='Electronic engineering' data-id='12'>Electronic engineering</option><option value='Energy engineering' data-id='13'>Energy engineering</option><option value='Environmental engineering' data-id='14'>Environmental engineering</option><option value='Facilities engineering' data-id='15'>Facilities engineering</option><option value='Field engineering' data-id='16'>Field engineering</option><option value='Industrial engineering' data-id='17'>Industrial engineering</option><option value='Information technology/engineering' data-id='18'>Information technology/engineering</option><option value='Infrastructure engineering' data-id='19'>Infrastructure engineering</option><option value='Manufacturing engineering' data-id='20'>Manufacturing engineering</option><option value='Materials science/engineering' data-id='21'>Materials science/engineering</option><option value='Mechanical engineering' data-id='22'>Mechanical engineering</option><option value='Medical device service engineering' data-id='23'>Medical device service engineering</option><option value='Process engineering' data-id='24'>Process engineering</option><option value='Product engineering' data-id='25'>Product engineering</option><option value='Quality engineering' data-id='26'>Quality engineering</option><option value='Research & development engineering' data-id='27'>Research & development engineering</option><option value='Safety engineering' data-id='28'>Safety engineering</option><option value='Sales engineering' data-id='29'>Sales engineering</option><option value='Software engineering' data-id='30'>Software engineering</option><option value='Supply chain engineering' data-id='31'>Supply chain engineering</option><option value='Surgery engineering' data-id='32'>Surgery engineering</option><option value='Systems engineering' data-id='33'>Systems engineering</option><option value='Telecommunication engineering' data-id='34'>Telecommunication engineering</option><option value='Testing engineering' data-id='35'>Testing engineering</option><option value='Training/education engineering' data-id='36'>Training/education engineering</option><option value='Others' data-id='37'>Others</option>								
</select>--></div>						

										

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

    <!--
	<input class="form-control  input-lg"	id="jobtype" name="jobtype" placeholder="" list="employementtype" autocomplete="off">
                        <datalist id="employementtype" >      
              <option value="Full Time" data-id="01">Full Time</option>
              <option value="Part Time" data-id="02">Part Time</option>
              <option value="Temporary" data-id="03">Temporary</option>
              <option value="Contract" data-id="04">Contract</option>
              <option value="Internship" data-id="05">Internship</option>
              <option value="Commission" data-id="06">Commission</option>

          </datalist>   
    -->
                    											
	  </div>
										

      <div class="font1">
          <label style="margin-bottom:0px; margin-top:15px;">Attach Resume (Word or PDF file only)<span style="color:red; margin-top:10px;">* </span></label>&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="file" name="file" value="file" id="file" required>
      </div>
		
    
    <div align="center" valign="middle" class="divselection">
		<div class="font1">

		</div>
    </div>					
										
<br>										

 <div align="center" class="g-recaptcha" data-sitekey="6LfKAJcUAAAAAM--m76LCYWbSEV4OSh4yDFwZU8d"></div>
     									
	<br>	
    	
<div  align="center">
	<div class="font1">
			<button  type="submit" class="button1" onclick="submit_data.php">Submit</button>
            
	</div>								
  </div>
  </form>
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

<script>

  count = 0;
  document.getElementById("add_more").onclick = function() {
  //document.getElementById("add_more").innerHTML = "Click me: " + count;
  if (count%3==0)
  {
    document.getElementById("exp1").style.display = "block";
    document.getElementById("exp1").style.visibility = "visible";
    document.getElementById("fromdate1").required = true;
    document.getElementById("todate1").required = true;
    document.getElementById("jobtitle1").required = true;
    document.getElementById("company1").required = true;
    document.getElementById("city1").required = true;
    document.getElementById("country1").required = true;
    
  }
  else if(count%3==1)
  {
     document.getElementById("exp2").style.display = "block";
     document.getElementById("exp2").style.visibility = "visible";
     document.getElementById("fromdate2").required = true;
    document.getElementById("todate2").required = true;
    document.getElementById("jobtitle2").required = true;
    document.getElementById("company2").required = true;
    document.getElementById("city2").required = true;
    document.getElementById("country2").required = true;
  }
  else if(count%3==2){
     document.getElementById("exp3").style.display = "block";
     document.getElementById("exp3").style.visibility = "visible";
     document.getElementById("fromdate3").required = true;
    document.getElementById("todate3").required = true;
    document.getElementById("jobtitle3").required = true;
    document.getElementById("company3").required = true;
    document.getElementById("city3").required = true;
    document.getElementById("country3").required = true;       
  }
  count += 1;

  
};

function changeVisibility_exp1() {
  document.getElementById("exp1").style.display = "none";
  document.getElementById("exp1").style.visibility = "hidden";
  document.getElementById("exp1").value="";
  document.getElementById("fromdate1").value="";
  document.getElementById("todate1").value="";
  document.getElementById("jobtitle1").value="";
  document.getElementById("company1").value="";
  document.getElementById("city1").value="";	
  document.getElementById("country1").value="";
  

}

function changeVisibility_exp2() {
  document.getElementById("exp2").style.display = "none";
  document.getElementById("exp2").style.visibility = "hidden";
  document.getElementById("exp2").value="";
  document.getElementById("fromdate2").value="";
  document.getElementById("todate2").value="";  
  document.getElementById("jobtitle2").value="";
  document.getElementById("company2").value="";
  document.getElementById("city2").value="";	
  document.getElementById("country2").value="";

}
function changeVisibility_exp3() {
  document.getElementById("exp3").style.display = "none";
  document.getElementById("exp3").style.visibility = "hidden";
  document.getElementById("exp3").value="";
  document.getElementById("fromdate3").value="";
  document.getElementById("todate3").value=""; 
  document.getElementById("jobtitle3").value="";
  document.getElementById("company3").value="";
  document.getElementById("city3").value="";	
  document.getElementById("country3").value="";

  
}

</script>





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

<script>
$( document ).ready(function() {
	populate("countries.php",{},"countries");	
	$('#countries').change(function () {
		 let data = {country_id : $(this).val() } ;	
		 populate("states.php",data,"states");		 
	 }); 
	 
	$('#states').change(function () {				
		 let data = {state_id : $(this).val() } ;		
		 populate("cities.php",data,"cities");	 
		 	 });		 
   function populate(ajaxUrl,data,selector){   
	 $.ajax( {
			  type: "POST",
			  url:ajaxUrl, //gameCreateform.attr( 'action' ),
			  dataType: 'json',
			  data: data,
			  success: function( response ) {
			  $("#"+selector).empty();
			  $("#"+selector).append($('<option></option>').val(0).html("Please Select"));
				 $.each(response, function (key, value) {
					$("#"+selector).append($('<option></option>').val(value.id).html(value.name));
				});
	
			  }
			});   
   }	
   
});
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
    $sec.val("Healthcare Providers");
      $jfun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $fun = $('#jobtype');  
$('a[href="#Healthcareprovider1"]').click(
	function (){
    $sec.val("Healthcare Providers");
      $fun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $degr = $('#degree');  
$('a[href="#Healthcareprovider2"]').click(
	function (){
    $sec.val("Healthcare Providers");
      $degr.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $majo = $('#major');  
$('a[href="#Healthcareprovider3"]').click(
	function (){
    $sec.val("Healthcare Providers");
      $majo.val( $(this).data('select') ); 
});
</script>


<script type="text/javascript">
var $sec = $('#healthcaresector');
var $jfun = $('#jobfunction');  
$('a[href="#Manufacturers of medical devices/equipment/supplies"]').click(
	function (){
    $sec.val("Manufacturers of Medical Devices/Equipment/Supplies");
      $jfun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $fun = $('#jobtype');  
$('a[href="#Manufacturers of medical devices/equipment/supplies1"]').click(
	function (){
    $sec.val("Manufacturers of Medical Devices/Equipment/Supplies");
      $fun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $degr = $('#degree');  
$('a[href="#Manufacturers of medical devices/equipment/supplies2"]').click(
	function (){
    $sec.val("Manufacturers of Medical Devices/Equipment/Supplies");
      $degr.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $majo = $('#major');  
$('a[href="#Manufacturers of medical devices/equipment/supplies3"]').click(
	function (){
    $sec.val("Manufacturers of Medical Devices/Equipment/Supplies");
      $majo.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $jfun = $('#jobfunction');  
$('a[href="#Healthvcare systems"]').click(
	function (){
    $sec.val("Healthcare Systems");
      $jfun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $fun = $('#jobtype');  
$('a[href="#Healthvcare systems1"]').click(
	function (){
    $sec.val("Healthcare Systems");
      $fun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $degr = $('#degree');  
$('a[href="#Healthvcare systems2"]').click(
	function (){
    $sec.val("Healthcare Systems");
      $degr.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $majo = $('#major');  
$('a[href="#Healthvcare systems3"]').click(
	function (){
    $sec.val("Healthcare Systems");
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
    $sec.val("Healthcare Consulting, Support and Education");
      $jfun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $fun = $('#jobtype');  
$('a[href="#Healthcare consulting, support, and education1"]').click(
	function (){
    $sec.val("Healthcare Consulting, Support and Education");
      $fun.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $degr = $('#degree');  
$('a[href="#Healthcare consulting, support, and education2"]').click(
	function (){
    $sec.val("Healthcare Consulting, Support and Education");
      $degr.val( $(this).data('select') ); 
});
</script>

<script type="text/javascript">
var $sec = $('#healthcaresector');
var $majo = $('#major');  
$('a[href="#Healthcare consulting, support, and education3"]').click(
	function (){
    $sec.val("Healthcare Consulting, Support and Education");
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

