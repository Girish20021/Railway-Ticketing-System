<?php 

$con=mysqli_connect('localhost','root','','railway');
if(isset($_POST['submit'])){
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$age = $_POST['age'];
$mobilenumber = $_POST['mobilenumber'];
$IDNumber = $_POST['IDNumber'];

if($con->connect_error){
        die("No connection");}
$result=$con->query("INSERT INTO `passenger`(`fname`, `lname`, `age`, `mobile`, `IDNumber`) 
VALUES ('$fname','$lname','$age','$mobilenumber','$IDNumber')");
if($result){
   echo " 
   <script> alert('Ticket Booked Successfully.')
   window.location.replace('home.php');
   </script>
   ";
}else{
   echo "Failed.";
}
}
?>