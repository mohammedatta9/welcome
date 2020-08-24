<?php
    echo "<p>Welcome <b>".$_GET["fullname"]."</b>!</p>";
    echo "<p>Your product choices are:<br/>";
    if (!empty($_GET["products"])) {
        echo "<ul>";
        foreach ($_GET["products"] as $value) {
            echo "<li>$value</li>";
        }
        echo "</ul>";
    }
    else
        echo "<b>There is no selected products</b>"
?>
