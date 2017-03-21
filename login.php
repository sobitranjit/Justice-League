<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8' />
  <title>Basic template</title>
  <meta name='robots' content='noindex, nofollow' />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!--  
    Use the following CDN hosted CSS and JS files or down the jQueryMobile files from
	http://jquerymobile.com/download/	
  -->
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
</head>
<body>
<div data-role='page'>

<div data-role='header'>
  <h1>Group Game</h1>
   
</div>  <!-- end id=header-->

  <?php 
date_default_timezone_set('Australia/Darwin');
 
  $t2 = date_default_timezone_get();
  
 
  $date = date('m/d/Y h:i:s a', time());
  echo $date;
  

  
  ?>
<div data-role='content'>
<form data-role ='form'>
<input type ="text" name="email" value ="email address"/>
<br>
<input type = "password"/ value = "password">
<ul data-role >
<li type = "button" id ="signIn"><a href="sign-in.html" >Sign In</a></li>
<li type = "button"><a href="sign-in.html" >Sign up</a></li>

<style>
#signIn {
	float:left;
	width:10px;
}
</style>
</form>



</div> <!-- end id=content -->

<div data-role="footer">
  <p>&copyjusticleague2017</p>
</div> <!-- end id=footer -->

</div> <!-- end id=page -->
</body>
</html>