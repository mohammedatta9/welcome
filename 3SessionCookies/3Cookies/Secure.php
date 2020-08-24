<?php 
    //ما معه كوكي
    if(!isset($_COOKIE["username"])){
        header("location:login.php");
    }

    if(isset($_GET["signout"])){
        setcookie("username",NULL);
        setcookie("email",NULL);
        header("location:login.php");
    }
?>
<html>
    <head>
        <title>Secure Page</title>
    </head>
    <body>
        <h1 style="color:red">Secure Page</h1>
        <b>Welcome <?php echo $_COOKIE["username"] ?></b>
        <p><a href="Secure.php?signout=true">Sign out</a></p>
    </body>
</html>
