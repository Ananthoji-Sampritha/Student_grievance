<?php
$name=$_POST['name'];
$mail=$_POST['mail'];
echo $name; 
echo $mail;

$con=mysqli_connect("localhost","root","","user");
 $sql="SELECT * FROM new where name='$name'" ;
 $records=mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($records))
 {
 	$nm=$row[0];
 	$dp=$row[2];

 	echo $nm;
 	echo $dp;
 } 	

?>