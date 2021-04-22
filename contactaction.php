<?php 
$con=mysqli_connect('localhost','root','','railway');
if(isset($_POST['submit'])){
$Name=$_POST['N'];
$Emailid=$_POST['email'];
$Contact=$_POST['Mob'];
$Message=$_POST['msg'];
if($con->connect_error){
        die("No connection");}
$result=$con->query("INSERT INTO `cont`(`Name`, `Email`,`Contact`, `Message`) 
VALUES ('$Name','$Emailid','$Contact','$Message')");
if($result ==TRUE){
    echo " 
    <script> alert('Feedback Submitted Successfully.')
    window.location.replace('home.php');
    </script>
    ";
}else{
    echo "Failed";
}
}
?>