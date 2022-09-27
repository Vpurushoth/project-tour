<?php
$name = $_POST['name'];
$textarea = $_POST['textarea'];



$conn = new mysqli('localhost','root','','vpparadise');
if($conn->connect_error){
    die('connection Failed: '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into review(name,textarea) values(?,?)");
    $stmt->bind_param("ss",$name,$textarea);
    $stmt->execute();
    header("Location: http://localhost/VPparadise/revsuc.html");
    $stmt->close();
    $conn->close();
}
?>