<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->

<html lang="en">
<!--<![endif]-->

<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">

  <title>Your Page Title Here :)</title>
  <meta content="" name="description">
  <meta content="" name="author"><!-- Mobile Specific Metas
  ================================================== -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name=
  "viewport"><!-- CSS
  ================================================== -->
  <link href="assets/css/skeleton/base.css" rel="stylesheet">
  <link href="assets/css/skeleton/skeleton.css" rel="stylesheet">
  <link href="assets/css/skeleton/layout.css" rel="stylesheet"><!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
  <div class="container">
    
    <div class="sixteen columns">
      <h1 class="remove-bottom" style="margin-top: 40px">Hasreon</h1>

      <h5>Version 0.5 beta</h5>
      <hr>
    </div>

    <div class="two-thirds column">
      <?php
$reqInv=$_GET['r'];
$truInv=$_ENV["INVITE_CODE"]; // Set via heroku website
if($reqInv==$truInv){
?>
    <p>Goto <a href="/client/">client</a>?</p>
<?php
}else{
?>
      <form action="/" method="get">
        <label for="r">Referral code</label>
        <input type="text" name="r"><br>
        <input type="submit" value="Submit">
      </form>
<?php        
}
?>
    </div>

    <div class="one-third column">
      <h3>Links</h3>
      <ul>
        <li><a href="/session.php">Session manager</a></li>
        <li><a href="https://github.com/Hasreon/Hasreon">Github</a></li>
      </ul>
    </div>

  </div>
</body>
</html>