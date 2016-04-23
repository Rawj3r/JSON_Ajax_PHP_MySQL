<?php
/**
 * Created by IntelliJ IDEA.
 * User: nkosi
 * Date: 4/23/16
 * Time: 1:23 PM
 */

include 'connect.php';



$sql = "SELECT * FROM users";

$result = mysqli_query($db, $sql) or die("Query error " . mysqli_erro($db));

$data = array();

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

mysqli_close($db);

header('Content-Type: application/json');



//$json = file_get_contents('http://127.0.0.1:8888/JSON_Ajax_PHP_MySQL_nkosi/js/json.json');

//$data = array("user1" => array("firstName" => "Roger", "lastName" => "Nkosi", "age" => 25),
//    "user2" => array("firstName" => "Knowledge", "lastName" => "Nkosi", "age" => 17),
//    "user3" => array("firstName" => "Mane", "lastName" => "Nkosi", "age" => 12),
//    "user4" => array("firstName" => "Gloria", "lastName" => "Nkosi", "age" => 40));

$json = json_encode($data);


echo $json;
