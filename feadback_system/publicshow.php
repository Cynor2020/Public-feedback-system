<?php
$userserach=$_POST['userserach'];


require_once 'config.php';        
$con = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB);
$result =  mysqli_query($con,"select * from data  where name like '$userserach%' ");
	$row_count=mysqli_num_rows($result);
	echo "<table border='1'>";
	  if($row_count!=0)
	{
	while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>
	<td>".$row['id']."</td>
	<td>".$row['name']."</td>
	<td>".$row['contact']."</td>
	<td>".$row['massage']."</td>
	
	 </tr>";
	}
    }
	
?>