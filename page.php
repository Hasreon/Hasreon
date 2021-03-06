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

  <title>Hasreon</title>
  <meta content="" name="description">
  <meta content="" name="author"><!-- Mobile Specific Metas
  ================================================== -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name=
  "viewport"><!-- CSS
  ================================================== -->
  <link href="/assets/css/skeleton/base.css" rel="stylesheet">
  <link href="/assets/css/skeleton/skeleton.css" rel="stylesheet">
  <link href="/assets/css/skeleton/layout.css" rel="stylesheet"><!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
  <div class="container">
    
<?php
echo file_get_contents("header.html");
?>

<?php
function removeslashes($string) {
	$string = implode("",explode("\\",$string));
	return stripslashes(trim($string));
}
$path = "pages/".removeslashes($_SERVER['PATH_INFO']).".php";
if (file_exists($path)) {
	include($path);
} else {
	echo "The page requested does not exist";
}
?>

  </div>
</body>
</html>
