<?php 

$con=mysqli_connect('localhost','root','','railway');
if(isset($_POST['submit'])){
$fname=$_POST['from'];
$tname=$_POST['to'];
$dates = date('Y-m-d',strtotime($_POST['doj']));
$category = $_POST['category'];
$classes = $_POST['classes'];
$ans = $_POST['ans'];

if($con->connect_error){
        die("No connection");}
$result=$con->query("INSERT INTO `booking`(`source`, `dest`, `dates`, `category`, `classes`, `radio`) 
VALUES ('$fname', '$tname', '$dates', '$category', '$classes', '$ans' )");
if($result){
   header('Location: details.php');
}else{
   echo "Failed.";
}
}
?>