<?php

require "Request.php"
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$_POST['page']='321';
$_GET['page']='2';
$test = new Request($_GET,$_POST);
echo $test->get('page');
var_dump($test->all([1,2]));
print_r($test->query);
?>

</body>
</html>