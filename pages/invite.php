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
      <form action="" method="get">
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