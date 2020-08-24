<?php
    $msg = "";
    if(isset($_POST["username"])){
        if($_POST["username"]=="aa" && $_POST["password"]=="aa"){
            header("location:secure.php");
        }
        else
            $msg = "Invalid Username or Password";
    }
?>


<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <h1>Login Page</h1>
        <b style="color:red"><?php echo $msg ?></b>
        <form method="POST">
            <p><strong>Username:</strong>
                <input type="text" name="username" /></p>
            <p><strong>Password:</strong>
                <input type="password" name="password" /></p>
            <p><input type="submit" value="Login" /></p>
        </form>
    </body>
</html>
