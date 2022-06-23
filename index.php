<?php
// include('validation/validation.php');

// use validation\validation;


// if(isset($_POST['username'])){
//     $v= new validation();
//     $v->input('username')->required();
//     $v->show();
// }
require "vendor/autoload.php";
use Ahmed\Package\validation;
if (isset($_POST['username'])) {
    $v=new validation();
    $v->input('username')->required();
    $v->show();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="username">
        <input type="submit" name="validation">
    </form>
</body>
</html>