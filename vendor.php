<!DOCTYPE html>
<html>
<head>
<style>
ul#menu {
	padding: 0;
}
ul#menu li {
	display: inline-block;
}
ul#menu li a {
	display: inline-block;
	background-color: #0A56A2;
	color: white;
	padding: 10px 70px;
	text-decoration: none;
	border-radius: 10px 10px 0 0;
}
ul#menu li a:hover {
	background-color: orange;
}
h2 {
	background-color: #ebe8e8;
	font-size: 36pt;
	text-align: center;
}
h1 {
	background-color: #23b6eb;
	font: arial;
	font-size: 36pt;
	color: #0e5d7a;
	text-align: center;
	text-decoration: bold;
}
table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 100%;
    border-collapse: collapse;
}
td, th {
	font-size: 1em;
    border: 1px solid #98bf21;
    padding: 3px 7px 2px 7px;
}
th {
    font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #F8A12D;
    color: #ffffff;
}
tr.alt td {
	color: #000000;
	background-color: #EAF2D3;
}

</style>
</head>
<body>
<h2>IT Asset Procurement DSS</h2>

<ul id='menu'>
	<li><a href="index.php">HOME</a></li>
	<li><a href="keuangan.php">DATA KEUANGAN PERUSAHAAN</a></li>
	<li><a href="vendor.php">INFORMASI VENDOR</a></li>
	<li><a href="newreq.php">PERMINTAAN BARU</a></li>
</ul>
<h>
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "dbvendor";

$conn = new mysqli($server,$username,$password,$database);
if ($conn->connect_error) {
	die("Connection failed : " . $conn->connect_error);
}

$query = "SELECT * FROM infovendor";
$result = $conn->query($query);
?>

<table border="2" style="background-color: #84ed86; color: #761a9b; margin: 0 auto;">
	<thead>
		<tr>
			<th>Id</th>
			<th>Vendor Name</th>
			<th>Warranty</th>
			<th>Sparepart Availability</th>
			<th>Specification</th>
			<th>Price</th>
			<th>Kontak</th>
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