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
	<h6>New Request</h6>

	<form id='newreq' action='result.php' method='post'>
		<label for='specification'>Specification :</label><br>
		<textarea id='specification' rows='10' cols='70'></textarea><br>

		<label for='quantity'>Quantity : </label><br>
		<input type='number' name='quantity' id='quantity' /><br><br>

		<input type='submit' name='Submit' value='Submit'>
	</form>

</body>
</html>