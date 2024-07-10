<?php
$name=$_POST['name'];
$contact=$_POST['contact'];
$massage=$_POST['massage'];
require_once 'config.php';        
$con = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB);

	$result = mysqli_query($con,"insert into data (name,contact,massage)
		values('$name','$contact','$massage')");
	
	$studid=mysqli_insert_id($con);
	if($studid>0)
	{
	echo 'Massage Send Successfully';
	}

?>