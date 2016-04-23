<?php
/**
 * Created by IntelliJ IDEA.
 * User: nkosi
 * Date: 4/23/16
 * Time: 2:39 PM
 */

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];

include 'connect.php';


$sql = "INSERT INTO users (firstname, lastname, age) VALUES ('$firstname', '$lastname', '$age')";

if(mysqli_query($db, $sql)){
    echo '{"message": "success"}';
}else{
     die("could not insert " . mysqli_errno($db));
}

mysqli_close($db);

