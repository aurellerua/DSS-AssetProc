<!DOCTYPE html>
<?php
include("database.php");

if (isset($_POST['Submit'])) {
	
		$vendorname = $_POST['vendorname'];
		$warranty = $_POST['warranty'];
		$spavailability = $_POST['spavailability'];
		$price = $_POST['price'];
		$specification = $_POST['specification'];
		$contact = $_POST['contact'];

		$query = "INSERT INTO infovendor (id, vendorname, warranty, spavailability, price, specification, contact) VALUES ('','$vendorname','$warranty','$spavailability', '$price', '$specification', '$contact')";
		$result = $conn->query($query);

		header("Location: vendor.php");
}
?>

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
	<h6>New Vendor</h6>

	<form id='vendorbaru' action='vendorbaru.php' method='post'>
		<label for='vendorname'>Vendor Name :</label><br>
		<input type='text' name='vendorname' id='vendorname' maxlength='1000' /><br>

		<label for='warranty'>Warranty :</label><br>
		<input type='number' name='warranty' id='warranty' /><br>

		<label for='spavailability'>Sparepart Availability :</label><br>
		<input type='radio' name='spavailability' value='1' />Yes<br>
		<input type='radio' name='spavailability' value='0' />No<br><br>

		<label for='specification'>Specification :</label><br>
		<input type='text' name='specification' id='specification' maxlength='1000' /><br>
		
		<label for='price'>Price :</label><br>
		<input type='number' name='price' id='price' /><br>
		
		<label for='contact'>Contact :</label><br>
		<input type='text' name='contact' id='contact' maxlength='1000' /><br><br>
		
		<input type='submit' name='Submit' value='Submit'>
	</form>

</body>
</html>