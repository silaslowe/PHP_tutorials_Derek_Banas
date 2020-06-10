<?php
$f_name = "Derek";
$l_name = "Loeb";
$age = 44;
$height = 1.87;
$can_vote = true;
$address = array('street' => '123 Main St.', 'city' => 'Austin');
$state = NULL;
define('PI', 3.1415)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <p>Name : <?php echo $f_name . ' ' . $l_name; ?></p>
    <form action = 'tut1.php' method='get'>
        <label> Your State : </label>
        <input type="text" name="state"/><br> 
        <label> Num 1 : </label>
        <input type="text" name="num-1"/><br> 
        <label> Num 2 : </label>
        <input type="text" name="num-2"/><br>
        <input type="submit" value="submit"> 
</form>

<?php 
if(isset($_GET) && array_key_exists('state', $_GET)){
    $state = $_GET['state'];
    if(isset($state) && !empty($state)){
        echo 'You live in ' . $state . '<br>';
        echo "$f_name lives in $state<br>";
    } 
    if(count($_GET) >= 3) {
        $num_1 = $_GET['num-1'];
        $num_2 = $_GET['num-2'];
        echo "$num_1 + $num_2 = " . ($num_1 + $num_2) . 
        "<br>";
        echo "$num_1 - $num_2 = " . ($num_1 - $num_2) . 
        "<br>";
        echo "$num_1 * $num_2 = " . ($num_1 * $num_2) . 
        "<br>";
        echo "$num_1 / $num_2 = " . ($num_1 / $num_2) . 
        "<br>";
        echo "$num_1 % $num_2 = " . ($num_1 % $num_2) . 
        "<br>";
        echo "$num_1 / $num_2 = " . (intdiv($num_1, $num_2)) . 
        "<br>";

        echo "Increment $num_1 = " . ($num_1++) . 
        "<br>";
        echo "Decrement $num_1 = " . ($num_1--) . 
        "<br>";
         
        echo "rand(1,4000) = " . rand(1,4000) . "<br>";
    echo number_format(2345.6789, 2) . "<br>";
    }
}
?>
</body>
</html>