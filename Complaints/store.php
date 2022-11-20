<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		#prof
		{	margin-top:px;
			width:20%;
			height:600px;
			border-bottom: 700px;
			text-align: center;
			min-height: 0px;
			background-size:cover; 
			background-image: url(img/bg/prf.jpg);
   	 		color: white;
   	 		float: left;
		}
		#prof1
		{
			text-align: center;

		}
		table
		{
			text-align:left;
			margin-left: 25px;

		}
	#ser img
	{	
		
		margin-top: 100px;
		width:250px;
		height:180px;
		margin-left:5px;
		padding:5px;
	}
	#prof div div h2 {
	font-size: 10px;
}
    #prof div div h2 {
	font-size: 18px;
}
    #prof div div h2 {
	font-size: 18px;
	color: #FF0;
}
    </style>
    <script type="text/javascript">
    function popwin()
    {
      window.open("aser.php", "myWindow", "width=600,height=800");
    }

</script>
	<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
    </script>
    <script type="text/javascript">
    function popwin()
    {
      window.open("aser.php", "myWindow", "width=600,height=800");
    }

</script>
</head>

	<body onLoad="MM_preloadImages('https://tse2.mm.bing.net/th?id=OIP.Q21YVFrZGSpEAtZRusqsRQHaE7&pid=Api&P=0','img/serve/h2.jpg','img/serve/h3.jpg','img/serve/h4.jpg','img/serve/h5.jpg','img/serve/h6.jpg','img/serve/h7.jpg','img/serve/h8.jpg')" style="background-image:url(img/bg/comp.jpg);background-size:cover">
	<div  style="background-color: #eee; height:70px;padding-top:5px">
	<center>
	  <h2>Categories Of Grievance</h2></center>
</div>

<div id="prof" >
	<div>
		<div >
			<?php
				if(isset($_GET['roll']))
					{
					$roll=$_GET['roll'];
					$pass=$_GET['pass'];
				 	$con=mysqli_connect("localhost","root","")or die("could not connect");
					$db=mysqli_select_db($con,"user") or die("Could not connect database");
					$qry=mysqli_query($con,"SELECT * FROM `new` WHERE RollNO='$roll'AND pass1='$pass'") or die("please check the query");
				if(mysqli_num_rows($qry)!=1)
					{
			
						header("location:login.php?mes=<p class='crt'>.That Rollno is not be found or wrong password <br> Please Login Here..</p>");

					}
				while ($row=mysqli_fetch_array($qry))
					 {
						$name=$row[0];
						$Depart=$row[2];
						$email=$row[3];
					}

			?>
<?php
		}
		else 
			{
			header("location:login.php?mes=<p class='crt'>.Please Login Here..</p>");
			
		}
?>
			<br><br><br>
			<h2><?php echo $roll?>'s profile</h2><br></div>
				<table >
				<div>
					<img src="https://tse1.mm.bing.net/th?id=OIP.02WoLK7Xiw-BAESNOIPbfQHaI1&pid=Api&P=0" width="100px" height="70px"><br><br>
					<tr><td>Name :</td><td><?php echo $name ?></td></tr>
					<tr><td>Department :</td><td><?php echo $Depart ?></td></tr>
					<tr><td>email :</td><td><?php echo $email ?></td></tr>
				</table><br>
				<button type="button" class="btn btn-warning"><a href="comp.php?rn=<?php echo $roll ?>" style="text-decoration: none; color: white;" > Make Complaint</a></button><br><br>
				 <button type="button" class="btn btn-info"><a   href="aser.php?rn=<?php echo $roll ?>" style="text-decoration: none; color: white; ">Status Of Complaint</a></button><br><br>
				<button type="button" class="btn btn-danger"><a href="logout.php" style="text-decoration: none; color: white;">Logout</a></button>
				</table>
				</div>
</div></div></div>



<div class="col-sm-4">
<div id="ser">
<table>
	<tr>
		<TD><a href="srve.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','https://tse3.mm.bing.net/th?id=OIP._maqrJXVk6cs5lWt8IlLagHaCl&pid=Api&P=0',1)"><img src="https://tse3.mm.bing.net/th?id=OIP._maqrJXVk6cs5lWt8IlLagHaCl&pid=Api&P=0" name="Image2" width="1200" height="800" border="0"></a></TD>
		<TD><a href="fn.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','http://www.picpedia.org/clipboard/images/accounts.jpg',1)"><img src="http://www.picpedia.org/clipboard/images/accounts.jpg',1)" name="Image3" width="278" height="182" border="0"></a></TD>
		<TD><a href="lib.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','https://tse4.mm.bing.net/th?id=OIP.vIwI6AE4uN6X5dxIpNA5fwHaDE&pid=Api&P=0',1)"><img src="https://tse4.mm.bing.net/th?id=OIP.vIwI6AE4uN6X5dxIpNA5fwHaDE&pid=Api&P=0" name="Image4" width="600" height="387" border="0"></a></TD>
		<td><a href="bus.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','https://tse2.mm.bing.net/th?id=OIP.Q21YVFrZGSpEAtZRusqsRQHaE7&pid=Api&P=0',1)"><img src="https://tse2.mm.bing.net/th?id=OIP.Q21YVFrZGSpEAtZRusqsRQHaE7&pid=Api&P=0" name="Image5" width="800" height="532" border="0"></a></td>
	</tr>
	<tr>
		<td><a href="exm.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','https://tse3.mm.bing.net/th?id=OIP.ZfF5ByxGqucCF9fwR5h7mgHaEU&pid=Api&P=0',1)"><img src="https://tse3.mm.bing.net/th?id=OIP.ZfF5ByxGqucCF9fwR5h7mgHaEU&pid=Api&P=0" name="Image6" width="1200" height="450" border="0"></a></td>
		<td><a href="placement.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','https://2.bp.blogspot.com/-6GS_zeLJFDA/V07h0cGfQbI/AAAAAAAALz8/Xc5iBeM3zs0Hb9FCAHCk0ynsBU6UVJ5xwCKgB/s1600/Taining%2Band%2BPlacemnet.png',1)"><img src="https://2.bp.blogspot.com/-6GS_zeLJFDA/V07h0cGfQbI/AAAAAAAALz8/Xc5iBeM3zs0Hb9FCAHCk0ynsBU6UVJ5xwCKgB/s1600/Taining%2Band%2BPlacemnet.png" name="Image7" width="273" height="185" border="0"></a></td>
		<td><a href="lab.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','https://tse3.mm.bing.net/th?id=OIP.Ziguw9p-1ACC3Zz_5-e9cAHaE8&pid=Api&P=0',1)"><img src="https://tse3.mm.bing.net/th?id=OIP.Ziguw9p-1ACC3Zz_5-e9cAHaE8&pid=Api&P=0" name="Image8" width="800" height="532" border="0"></a></td>
		<td><a href="can.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image9','','https://tse4.mm.bing.net/th?id=OIP.m23hdkYV1RnPZdfzwEpyswHaE9&pid=Api&P=0',1)"><img src="https://tse4.mm.bing.net/th?id=OIP.m23hdkYV1RnPZdfzwEpyswHaE9&pid=Api&P=0" name="Image9" width="342" height="266" border="0"></a></td>
	</tr>
</table>	
</div></div>
 </body>
</html>
