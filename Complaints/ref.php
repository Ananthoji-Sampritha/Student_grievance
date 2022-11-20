<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"samp");
?>

<?php
$name=$_POST['name'];
$mail=$_POST['mail'];
$phno=$_POST['phno'];

$sql="INSERT into aji values('$name','$mail','$phno')";
$qry=mysqli_query($con,$sql);

if(!$qry){
	echo mysqli_error($con);
		}	
else
{
	//echo "data stored sucees fully...!";
}

?>

<?php
$sql="SELECT * FROM aji";
$qry=mysqli_query($con,$sql);
	
	while ($row=mysqli_fetch_assoc($qry)) {
	  	$name=$row['name'];
  		$mail=$row['email'];
  		$ph=$row['phno'];
	}

?>
<table>
	<tr>
		<td><?php echo "$name"; ?></td></tr>
		<tr><td><?php echo "$mail"; ?></td></tr>
		<tr><td><?php echo "$ph"; ?></td></tr>
	</tr>
</table>