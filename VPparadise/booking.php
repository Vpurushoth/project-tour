<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phno1 = $_POST['phno1']; 
$phno2 = $_POST['phno2'];
$email = $_POST['email'];
$date1 = $_POST['date1']; 
$date2 = $_POST['date2'];
$guide = $_POST['guide'];
$hotel = $_POST['hotel'];
$adult = $_POST['adult'];
$child = $_POST['child']; 


$conn = new mysqli('localhost','root','','vpparadise');
if($conn->connect_error){
    die('connection Failed: '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into booking(fname,lname,phno1,phno2,email,date1,date2,guide,hotel,adult,child) values(?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssiisssssii",$fname,$lname,$phno1,$phno2,$email,$date1,$date2,$guide,$hotel,$adult,$child);
    $stmt->execute();
    header("Location: http://localhost/VPparadise/booksuc.html");
    $stmt->close();
    $conn->close();
}
?>