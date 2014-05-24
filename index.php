<html>
    <head>
        <title>Hasreon</title>
        <!--<link rel="stylesheet" type="text/css" href="/assets/css/base.css" />-->
    </head>
    <body>
        <h1>Hi!</h1>
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
    </body>
</html>
