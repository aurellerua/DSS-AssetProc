<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>IT Asset Procurement DSS</title>
</head>
<body>
	<p><a href="login.php">Logout</a></p>
	<h2>IT Asset Procurement DSS</h2>

	<ul id='menu'>
		<li><a href="index.php">HOME</a></li>
		<li><a href="keuangan.php">FINANCIAL DATA</a></li>
		<li><a href="vendor.php">VENDOR INFORMATION</a></li>
		<li><a href="newreq.php">NEW REQUEST</a></li>
	</ul>
	<h3>New Transaction</h3>

	<form id='keuanganbaru' action='keuanganbaru.php' method='post'>
		<label for='description'>Description :</label>
		<input type='text' name='description' id='description' maxlength='1000' />

		<label for='debit'>Debit :</label>
		<input type='number' name='debit' id='debit' />

		<label for='credit'>Credit :</label>
		<input type='number' name='credit' id='credit' />

		<input type='submit' name='Submit' value='Submit'>
	</form>


<?php
include("database.php");

$description = $_POST['description'];
$debit = $_POST['debit'];
$credit = $_POST['credit'];

$query = "INSERT INTO keuangan (no, description, debit, credit) VALUES ('',$description,$debit,$credit)";
$result = $conn->query($query);

?>
</body>
</html>