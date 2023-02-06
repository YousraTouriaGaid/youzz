<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$descr = mysqli_real_escape_string($mysqli, $_POST['descr']);

	
	// checking empty fields
	if(empty($descr) ) {	
			
		if(empty($$descr)) {
			echo "<font color='red'>DESCRIPTION field is empty.</font><br/>";
		}
		
		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE about SET descr='$descr' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM about WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$descr = $res['descr'];
	
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="descr" value="<?php echo $descr;?>"></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
