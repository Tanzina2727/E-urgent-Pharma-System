<!DOCTYPE html>
<html>
<head>
	<title>searchPrecription</title>
	<link rel="stylesheet" href="style.css">
	<?php
session_start();
if (isset($_SESSION['name']))
{require 'resources/header2.php';}
else{require 'resources/header.php';}
 ?>
 <script type="text/javascript" src="scripts/searchPrescription.js"></script>
 <style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
</head>
<body class="banner">
	<div class="div">
<center>
    <div><br>
        <input style="width:350px; margin-right: 10px; font-size:20px;" type="text" id="search" name="search" placeholder="Search Prescriptions By Patient Name" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {if(!empty($_POST["search"])){echo $_POST["search"];}}?>" onkeyup="search(this.value)" onblur="search(this.value)">
    <br><br>
    </div></center>
    <div id="searchResults">
    
    </div>
<br><br><br>

</div>
<?php require 'resources/footer.php';?>
</body>
</html>