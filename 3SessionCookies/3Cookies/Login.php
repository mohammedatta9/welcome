<?php
    $msg = "";
    if(isset($_POST["username"])){
        if($_POST["username"]=="120001090" && $_POST["password"]=="aa"){
            //في حال لم يتم تحديد تاريخ انتهاء للكوكي تعتبر
            //سيشن كوكي وتنتهي بباغلاق المتصفح
            setcookie("username","Basel Mohammed",time()+60*60*24*14);
            setcookie("email","b1090@aa.com",time()+60*60*24*14);
            header("location:secure.php");
        }
        else
            $msg = "Invalid Username or Password";
    }
?>


<html>
    <head>
        <title>Cookies Login Page</title>
    </head>
    <body>
        <h1>Cookies Login Page</h1>
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
