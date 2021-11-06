<?php  
require_once 'controller/PrescriptionInfo.php';

$prescription = fetchPrescription($_GET['id']);
 

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;  
    overflow: hidden;  
    margin: 100px;
	margin-left: 400px;  
    padding: 5px;  
    background: whitesmoke; 
    justify-content: center;
	font-size: 25px;
	
		}
		table{
			background: rgb(137, 145, 155);;
			padding: 250px;
			background-image: url("resources/background.png");
			background-size: cover;
			 
		}
	</style>
</head>
<body >
<table>
	<tr  >
		<th>Name</th>
		<th>Age</th>
		<th>Medicine</th>
		 
	</tr>
	<tr  >
		<td><a href="showPrescription.php?id=<?php echo $prescription['ID'] ?>"><?php echo $prescription['Name'] ?></a></td>
		<td><?php echo $prescription['Age'] ?></td>
		<td><?php echo $prescription['Medicine'] ?></td>
		<!-- <td><?php echo $prescription['Password'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['Name'] ?>"></td> -->
	</tr>

</table>
</body>
</html>