<html>
    <head>
        <title>Hasreon</title>
        <link rel="stylesheet" type="text/css" href="/assets/css/base.css" />
    </head>
    <body>
        <div class="clear">
          <div class="col col-8 tablet-col-9 mobile-col-1-2">
            <h1>Hasreon</h1>
          </div>
          <div class="col col-4 tablet-col-3 mobile-col-1-2">
            <?php
                if($_GET['r']==$_ENV["INV"]){
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
          <div class="col col-4 tablet-col-4 mobile-full">
            <a href="http://bit.ly/hasreon">Github</a>
          </div>
          <div class="col col-8 tablet-col-3 mobile-full">
            <p>Hasreon is an open-source RPG/MUD game, on Github.</p>
          </div>
        </div>
    </body>
</html>