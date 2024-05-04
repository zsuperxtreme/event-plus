<?php

$conn = mysqli_connect('43.239.233.248',
'zack', // username
'110681' // password
) or die(mysqli_error());
mysqli_select_db($conn,'misc');

$action     = $_REQUEST["action"];
$question   = $_REQUEST["question"];

if($action == "new")
{
    $sql = "
        INSERT INTO lundbeck(
            question
        )
        VALUES(
            '$question'
        )
    ";

    $result = mysqli_query($conn,$sql);
}


?>
