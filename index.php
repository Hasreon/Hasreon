<html>
    <head>
        <title>Hasreon</title>
        <!--<link rel="stylesheet" type="text/css" href="/assets/css/base.css" />-->
    </head>
    <body>
    <!--
<div class="header dark-blue-row">
  <div class="container row-4 tablet-row-3 mobile-row-3">
    <div class="clear mobile-center-text">
      <a href="/" class="left mobile-no-float uppercase">Hasreon</a>
      <ul class="navigation inline-list right no-mobile">
        <li><a class="active" href="/">Home</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="row">
  <div class="container introduction-block clear thin">

  </div>
</div>

<div class="footer">
  <div class="container clear">
    <div class="left col-6 left-text mobile-full mobile-left-text">
      A simple site..
    </div>
    <div class="right col-6 right-text mobile-full mobile-left-text">
      <ul class="inline-list footer-list">
      <li><a href="/base/docs/">Docs</a></li>
      </ul>
    </div>
  </div>
</div>-->
        <h1>Hi!</h1>
        <?php
        $reqInv=$_GET['r'];
        $truInv=$_ENV["INVITE_CODE"];
        if($reqInv==$truInv){
        ?>
        <p>Goto <a href="/client/">client</a>?</p>
        <?php
        }else{
        ?>
        <p></p>
        <?php        
        }
        ?>

    </body>
</html>
