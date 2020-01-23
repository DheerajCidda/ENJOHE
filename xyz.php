<!DOCTYPE html>
<html lang="en">
  <head>
    <title>How to Integrate Google “No CAPTCHA reCAPTCHA” on Your Website</title>
 
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
    <script>
    window.onload = function() {
    var $recaptcha = document.querySelector('#g-recaptcha-response');

    if($recaptcha) {
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
 
    <form action="xyz.php" method="post">
 
      <label for="name">Name:</label>
      <input name="name" required><br />
 
      <label for="email">Email:</label>
      <input name="email" type="email" required><br />
  <br>
  <br>
      <div class="g-recaptcha" data-sitekey="6LfKAJcUAAAAAM--m76LCYWbSEV4OSh4yDFwZU8d" ></div>
 <br>
 <br>
      <button type="submit">Submit</button>
 
    </form>
 
   
 
  </body>
</html>


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
/*else{
    echo '<script language="javascript">';
    echo 'alert("PLease check recpatcha")';
    echo '</script>';
}*/



//echo "this is response: ",$response ;

if ($response != null && $response->success) 
    {
    echo "Hi " . $_POST["name"] . " (" . $_POST["email"] . "), thanks for submitting the form!";
    }
    else
     { echo 'failed!';
    }
?>