<?php


require_once "Request.php";

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

$_POST['123']='42';
$_GET['page']='32';
$_SESSION['222']=34;
$cookies = new Cookies($_COOKIE);
$session = new Sessions($_SESSION);
$test = new Request($_GET,$_POST,$_SERVER,$session,$cookies);
print_r( $test->session->all());



?>

</body>
</html>