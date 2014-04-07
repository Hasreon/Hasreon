<html>
    <head>
        <title>Hasreon</title>
        <link rel="stylesheet" type="text/css" href="/assets/css/base.css" />
    </head>
    <body>
<div class="header dark-blue-row">
  <div class="container row-4 tablet-row-3 mobile-row-3">
    <div class="clear mobile-center-text">
      <a href="/" class="left mobile-no-float uppercase">{{site.title}}</a>
      <ul class="navigation inline-list right no-mobile">
        <li><a class="active" href="/">Home</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="row">
  <div class="container introduction-block clear thin">
    <h1>{{page.title}}</h1>
    <?php
    $reqInv=$_GET['r'];
    $truInv=$_ENV["INV"];
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
</div>
       <!--<div class="clear">
          <div class="col col-8 tablet-col-9 mobile-col-1-2">
            <h1>Hasreon</h1>
          </div>
          <div class="col col-4 tablet-col-3 mobile-col-1-2">
            
          </div>
        </div>
        <div class="clear">
          <div class="col col-4 tablet-col-4 mobile-full">
            <a href="http://bit.ly/hasreon">Github</a>
          </div>
          <div class="col col-8 tablet-col-3 mobile-full">
            <p>Hasreon is an open-source RPG/MUD game, on Github.</p>
          </div>
        </div>-->
    </body>
</html>
