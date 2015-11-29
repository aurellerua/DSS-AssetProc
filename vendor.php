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
<h3>Vendor Information</h3>
<h>

<?php
include("database.php");

$query = "SELECT * FROM infovendor";
$result = $conn->query($query);
?>

<h4><a href="vendorbaru.php">New Vendor</a></h4>

<table border="2" style="background-color: #84ed86; color: #761a9b; margin: 0 auto;">
	<thead>
		<tr>
			<th>Id</th>
			<th>Vendor Name</th>
			<th>Warranty</th>
			<th>Sparepart Availability</th>
			<th>Specification</th>
			<th>Price</th>
			<th>Contact</th>
		</tr>
	</thead>

	<tbody>
		<?php
			$rown=0;
			while ($row = mysqli_fetch_assoc($result)) {
				if($rown%2==0) {
				echo "<tr>
	              <td>{$row['id']}</td>
	              <td>{$row['vendorname']}</td>
	              <td>{$row['warranty']}</td>
	              <td>{$row['spavailability']}</td>
	              <td>{$row['specification']}</td>
	              <td>{$row['price']}</td>
	              <td>{$row['contact']}</td>
			      </tr>";
		  		}
		  		else {
		  			echo "<tr class='alt'>
	              <td>{$row['id']}</td>
	              <td>{$row['vendorname']}</td>
	              <td>{$row['warranty']}</td>
	              <td>{$row['spavailability']}</td>
	              <td>{$row['specification']}</td>
	              <td>{$row['price']}</td>
	              <td>{$row['contact']}</td>
			      </tr>";
		  		}
		  		$rown++;	
		  	}
		?>
	</tbody>
</table>

<?php $conn->close(); ?>
</h>
</body>
</html>