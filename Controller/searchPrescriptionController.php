<?php
require_once '../model/model.php';
$q=$_GET["q"];
    try {
    	
    	$searchedPrescription = searchPrescription($q);

    	echo "<br><center><table>
	<thead>
		<tr>
			<th>Prescription ID</th>
			<th>Name</th>
			<th>Age</th>
			<th>Medicine</th>
		</tr>
	</thead>
	<tbody>";
		foreach ($searchedPrescription as $i => $prescription):
			echo "<tr>

				<td>".$prescription['ID']."</td>
				<td>".$prescription['Name']."</td>
				<td>".$prescription['Age']."</td>
				<td>".$prescription['Medicine']."</td>
			</tr>";
		endforeach;
		
	echo "</tbody>
</table></center>";

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }

