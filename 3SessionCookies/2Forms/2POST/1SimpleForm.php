<?php
    //$_POST Global Variable contains POSTED data (Form Data)
    echo "<p>Welcome <b>".$_POST["user"]."</b>!</p>";
    echo "<p>Your message is:<br/><b>".$_POST["message"]."</b></p>";
?>
