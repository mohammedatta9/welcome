<?php
if(1){
    echo " to PHP";
    echo "<br>";
?>
<hr>
<?php
    $testing; // declare without assigning
    echo "is null? ".is_null($testing); // checks if null
    echo "<br/>";
    $testing = 5;
    echo "is an integer? ".is_int($testing); // checks if integer
    echo "<br/>";
    $testing = "five";
    echo "is a string? ".is_string($testing); // checks if string
    echo "<br/>";
    $testing = 5.024;
    echo "is a double? ".is_double($testing); // checks if double
    echo "<br/>";
    $testing = true;
    echo "is boolean? ".is_bool($testing); // checks if boolean
    echo "<br/>";
    $testing = array('apple', 'orange', 'pear');
    echo "is an array? ".is_array($testing); // checks if array
    echo "<br/>";
    echo "is numeric? ".is_numeric($testing); // checks if is numeric
    echo "<br/>";
    echo "is a resource? ".is_resource($testing); // checks if is a resource
    echo "<br/>";
    echo "is an array? ".is_array($testing); // checks if is an array
    echo "<br/>";
?>
<hr>
<?php
    $undecided = 3.14;
    $holder = (double) $undecided;
    echo "is $holder a double? ".is_double($holder)."<br/>"; // double
    $holder = (string) $undecided;
    echo "is ".$holder." a string? ".is_string($holder)."<br/>"; // string
    $holder = (integer) $undecided;
    echo "is ".$holder." an integer? ".is_integer($holder)."<br/>"; // integer
    $holder = (double) $undecided;
    echo "is ".$holder." a double? ".is_double($holder)."<br/>"; // double
    $holder = (boolean) $undecided;
    echo "is ".$holder." a boolean? ".is_bool($holder)."<br/>"; // boolean
    echo "<hr/>";
    echo "original variable type of $undecided: ";
    echo gettype($undecided); // double
?>
<hr>
<?php
    echo "30cm" + "40cm"
?>
<hr>
<?php
    $mood = "sad";
    if ($mood == "happy") {
        echo "Hooray, I'm in a good mood!";
    } elseif ($mood == "sad") {
        echo "Awww. Don't be down!";
    } else {
        echo "Neither happy nor sad but $mood.";
    }
?>
<hr>
<?php
    echo "<table style=\"border: 1px solid black;\"> \n";
    for ($y=1; $y<=12; $y++) {
        echo "<tr> \n";
        for ($x=1; $x<=12; $x++) {
            echo "<td style=\"border: 1px solid black;width: 25px; padding: 4px;
            text-align:center;\">";
            echo ($x * $y);
            echo "</td> \n";
        }
        echo "</tr> \n";
    }
    echo "</table>";
?>
<hr>
<?php
    $display_prices = 1;
    if ($display_prices) {
        echo "<table border=\"1\" cellpadding=\"4\" cellspacing=\"4\">\n";
        echo "<tr><td colspan=\"3\">";
        echo "today's prices in dollars";
        echo "</td></tr>";
        echo "<tr><td>\$14.00</td><td>\$32.00</td><td>\$71.00</td></tr>\n";
        echo "</table>";
    }
?>


<?php if($display_prices) { ?>
<table border="1" cellpadding="4" cellspacing="4">
<tr><td colspan="3">today's prices in dollars</td></tr><tr><td>$14.00</td><td>$32.00</td><td>$71.00</td></tr>
</table>
<?php } ?>
<hr>
<?php
    $x = 50;
    function bighello() {
        echo "<h1>HELLO!</h1>";
    }
    echo $x;
    bighello();
    bighello();
    bighello();
?>
<hr>
<?php
    $life = 42;
    function meaningOfLife() {
        global $life;
        //$life=50;
        echo "The meaning of life is ".$life;
    }
    meaningOfLife();
    //echo "<hr>$life";
?>
<hr>
<?php
    function fontWrap($txt, $fontsize = "12pt") {
        echo "<span style=\"font-size:$fontsize\">".$txt."</span>";
    }
    fontWrap("A Heading<br/>","24pt");
    fontWrap("some body text<br/>","18pt");
    fontWrap("smaller body text<br/>");
    fontWrap("even smaller body text<br/>");
?>
<hr>
<h3>Pass By Value</h3>
<?php
    function addFive($num) {
        $num += 5;
    }
    $orignum = 10;
    addFive($orignum);
    echo $orignum;
?>

<h3>Pass By Reference</h3>
<?php
    function addFiveRef(&$num) {
        $num += 5;
    }
    $orignum = 10;
    addFiveRef($orignum);
    echo $orignum;
?>
<hr>
<?php
    $rainbow = array("red", "orange", "yellow", "green", "blue", "indigo", "violet");
    $characters = array(
        array(
            "name" => "Bob",
            "occupation" => "superhero",
            "age" => 30,
            "special power" => "x-ray vision"
        ),
        array(
            "name" => "Sally",
            "occupation" => "superhero",
            "age" => 24,
            "special power" => "superhuman strength"
        ),
        array(
            "name" => "Jane",
            "occupation" => "arch villain",
            "age" => 45,
            "special power" => "nanotechnology"
        )
    );
    echo '$characters[1]["name"] = ' . $characters[1]["name"];
    echo "<br>";
    foreach($rainbow as $r)
        echo $r.", ";
    /*for($i=0;$i<sizeof($rainbow);$i++)
        echo $rainbow[$i].", ";*/
    echo "<hr>";
    foreach($characters as $character){
        foreach($character as $x=>$y){
            echo "$x ....... $y <br>";
        }
        /*while (list($k, $v) = each ($character)) {
               echo "$k ... $v <br/>";
        }*/
        echo "<br>";
    }
?>


<?php } ?>