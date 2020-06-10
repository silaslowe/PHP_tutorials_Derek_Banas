<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial printF</title>
</head>
<body>
    <?php 
    printf("%c %d %.2f %s<br>", 65, 65, 1.234, "string");
$rand_str = "        random string       ";
printf("Length : %d<br>", strlen($rand_str));
printf("Length : %d<br>", strlen(ltrim($rand_str)));
printf("Length : %d<br>", strlen(rtrim($rand_str)));
$rand_str = trim($rand_str);
printf("Upper : %s<br>", strtoupper($rand_str));
printf("Lower : %s<br>", strtolower($rand_str));
printf("Upper : %s<br>", ucfirst($rand_str));
printf("1st 6 : %s<br>", substr($rand_str, 0, 6));
printf("Index : %s<br>", strpos($rand_str, "string"));
$rand_str = str_replace("string", "Characters", $rand_str);
printf("Replace : %s<br>", $rand_str);
printf("A == B : %d<br>", strcmp("A", "B")); 

    ?>
</body>
</html>