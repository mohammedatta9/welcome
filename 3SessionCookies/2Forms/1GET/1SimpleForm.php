<?php
    //$_GET Global Variable contains URL data (Query String) 
    echo "<p>Welcome <b>".$_GET["user"]."</b>!</p>";
    echo "<p>Your message is:<br/><b>".$_GET["message"]."</b></p>";
?>
