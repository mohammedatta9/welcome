<?php session_start();
    //ما معه سيشن
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }

    if(isset($_GET["signout"])){
        session_destroy();
        header("location:login.php");
    }
?>
<html>
    <head>
        <title>Secure Page</title>
    </head>
    <body>
        <h1 style="color:red">Secure Page</h1>
        <b>Welcome <?php echo $_SESSION["username"] ?></b>
        <p><a href="Secure.php?signout=true">Sign out</a></p>
    </body>
</html>
