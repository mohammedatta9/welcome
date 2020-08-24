<?php session_start();//طالما صفحتنا ناوية تتعامل مع السيشن يجب وجودة هالامر
    $msg = "";
    if(isset($_POST["username"])){
        if($_POST["username"]=="120001090" && $_POST["password"]=="aa"){
            $_SESSION["username"] = "Basel Mohammed";
            $_SESSION["email"] = "basel1090@aa.com";
            header("location:secure.php");
        }
        else
            $msg = "Invalid Username or Password";
    }
?>


<html>
    <head>
        <title>Session Login Page</title>
    </head>
    <body>
        <h1>Session Login Page</h1>
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
