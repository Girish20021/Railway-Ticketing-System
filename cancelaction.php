<?php
$con=mysqli_connect('localhost','root','','railway') or die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
if(isset($_POST['submit']))
{
	$idnum = $_POST['ticketid'];
	$query = "DELETE FROM passenger WHERE SLNO='$idnum'";
	$data = mysqli_query($con,$query);
	echo $idnum;
	if($data)
	{
		echo "<script> alert('Ticket Cancelled.')
				window.location='book.php' ;
	                     </script>";
		
	}
	else
	{
		echo "<script> alert('User not deleted.')
				window.location='home.php';
	                     </script>";
	}
}


?>