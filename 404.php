<?php
if($_REQUEST['go']==home){
    header('Location: /');
}else{
?>
Page not found. Fancy going <a href='?go=home'>home?</a>";
<?php
}
?>