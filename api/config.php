<?php

$conn = mysql_connect('43.239.233.248',
  'zack', 
  '110681' 
) or die(mysql_error());
mysql_select_db('misc');

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

    mysql_query($sql, $conn);
}

if($action == "list")
{
    $sql = "SELECT * FROM player ORDER BY id DESC";	        
    $result = mysql_query($sql, $conn);
    while($row = mysql_fetch_assoc($result))
    {
        $data[] = array(
            "id" => $row["id"],
            "user" => $row["user"],
            "datetime" => $row["datetime"]
        );
    }

    echo json_encode($data, JSON_PRETTY_PRINT);
}


if($action == "delete")
{
    $sql = "DELETE FROM player WHERE id=$id";	        
    mysql_query($sql, $conn);
}
?>
