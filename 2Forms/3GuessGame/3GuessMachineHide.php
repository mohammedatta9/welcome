<?php
    $num_to_guess = 42;
    $counter = 0;
    //يعني مش عامل بوست الاخ
    if (!isset($_POST["guess"])) {// New visitor to Page
        $message = "Welcome to the guessing machine!";
    } else if ($_POST["guess"] > $num_to_guess) {
        $message = $_POST["guess"]." is too big! Try a smaller number.";
        $counter=$_POST["counter"]+1;
    } else if ($_POST["guess"] < $num_to_guess) {
        $message = $_POST["guess"]." is too small! Try a larger number.";
        $counter=$_POST["counter"]+1;
    } else { // must be equivalent
        $message = "Well done!";
        $counter=$_POST["counter"]+1;
    }

    if($counter>3)
        $message = "Stop";
?>


<html>
    <head>
        <title>A PHP number guessing script</title>
    </head>
    <body>
        <h1><?php echo $message; ?></h1>
        <b>Number of tries: <?php echo $counter ?></b>
        <?php if($counter<=3) { ?>
        <form action="<?php echo $_SERVER["PHP_SELF"];//الصفحة التي نحن بها ?>" method="POST">
            <p><strong>Type your guess here:</strong>
                <input type="text" name="guess" /></p>
            <p><input  type="submit" value="submit your guess" /></p>
            <input type="hidden" name="counter" value="<?php echo $counter ?>" />
        </form>
        <?php } ?>
    </body>
</html>
