<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

</head>
<body>

<?php
require_once("../../../vendor/autoload.php");
use App\City\City;

$bookObject = new City();
$bookObject->setData($_GET);
$oneData = $bookObject->view("obj");
echo "<div class='book_elemet'>";
echo "ID : ".$oneData->id .'<br>';
echo "Name : " . $oneData->name .'<br>';
echo "City : " .$oneData->city .'<br>';
echo "</div>";

?>
</body>
</html>