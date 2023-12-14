<?php
 // get all the field
 $name = $_GET['name'];
 $email = $_GET['email'];
 $age = $_GET['age'];
 $courses = $_GET['courses'];
 $address = $_GET['address'];
 $password = $_GET['password'];
 $gender = 0;
 $society = 0;
 // society
 if (isset($_GET["sanganika"])){
 $society = "sanganika";
 }
 if (isset($_GET["enactus"])){
 $society = "enactus"; }
 if (isset($_GET["sangyaan"])){
 $society = "sangyaan";
 }
 if (isset($_GET["kalamkaar"])){
 $society = "kalamkaar";
 }
 // gender
 if (isset($_GET["male"])){
 $gender = "male";
 }
 if (isset($_GET["female"])){
 $gender = "female";
 }
 if (isset($_GET["others"])){
 $gender = "others";
 }
 // validate age
 if ($age < 16 or $age > 22){
 echo '<script>alert("invalid age!")</script>';
 return;
 }
 // validate password
 if (strlen($password) < 8){
 echo '<script>alert("password too short!")</script>';
 return;
 }
 // perform insertion.
 $sql = "INSERT INTO `student_details`(`name`, `password`, `email`, 
`age`, `gender`, `society`, `course`, `address`) VALUES 
('".$name."','".$password."','".$email."','".$age."','".$gender."','".$soci
ety."','".$courses."','".$address."')";
 
 // assuming i have a database callesd logins where student_details 
tabel is stored
 $connector = mysqli_connect("localhost","root","","logins");
 $result = mysqli_query($connector, $sql);
 echo '<script>alert("data stored succesfully!")</script>';
?>