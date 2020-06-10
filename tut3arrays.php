<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$friends = array('Joy', 'Willow', 'Ivy');
echo 'Wife :  ' . $friends[0] . '<br>';
$friend[3] = 'Steve';
forEach($friends as $f) {
    printf("Friend : %s<br>", $f);
}
$me_info = array('Name'=> 'Silas', 'Street'=> '789 Ahhhh');
forEach($me_info as $k => $v){
    printf("%s : %s<br>", $k, $v);
}
$friends2 = array('Doug');
$friends = $friends + $friends2;
forEach($friends2 as $f) {
    printf("Friend : %s<br>", $f);
}
sort($friends);
rsort($friends);
asort($me_info);
krsort($me_info); 
$customers = array(array('Derek', '123 Main'),
                   array('Sally', '122 Main'));
for($row = 0; $row < 2; $row++){
    for($col = 0; $col < 2; $col++){
      echo $customers[$row][$col] . ', ';
    }
      echo '<br>'; 
}
$let_str = "A B C D";
$let_arr = explode(' ', $let_str);
forEach($let_arr as $l) {
printf("Letter : %s<br>", $l);
}

$let_str_2 = implode(' ', $let_arr);
echo "String : $let_str_2<br>";
printf("Key Exists : %d<br>", 
array_key_exists('Name', $me_info));
printf("In Array : %d<br>", 
in_array('Joy', $friends));

    ?>


</body>
</html>