<?php
session_start();
$username=$_POST['username'];
$con=mysqli_connect('localhost','root','','railway');
if(isset($_POST['submit'])){
$result = mysqli_query($con,"SELECT * from login WHERE username='" .$username. "'");
$row=mysqli_fetch_array($result);
if($_POST["currentPassword"] == $row["password"] && $_POST["newPassword"] == $_POST["confirmPassword"] ) {
mysqli_query($con,"UPDATE login set password='" . $_POST["newPassword"] . "' WHERE username='" . $username . "'");
header("location:login.php");
} else{
    echo "No Match Username";
}
}
?>