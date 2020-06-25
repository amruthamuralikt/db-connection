<?php
include_once 'connect.php';

	

if(isset($_POST['register']))
{
	$usname=$conn->real_escape_string($_POST['uname']);
	
  $cnum=$conn->real_escape_string($_POST['number']);
  $email=$conn->real_escape_string($_POST['email']);

}


$sql = "INSERT INTO nregister (name,cnumber,mail) VALUES ('$usname', '$cnum','$email')";

if (mysqli_query($conn, $sql)) 
{
  echo "Welcome  ".$usname ."  you have registered successfully..."."<br><br>";
  
} 
else
 {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$re="SELECT * FROM nregister WHERE name='$usname'";
$result=mysqli_query($conn,$re);
while($res=mysqli_fetch_assoc($result))
{
  echo "<br><br> <b>Name</b>: " . $res['name']."<br><br>";   
         
  echo "<b>Contact Number</b>: " . $res['cnumber']."<br><br>";
 
  echo "<b>Email</b>: " . $res['mail']."<br><br>";
 
}
					
mysqli_close($conn);
?>