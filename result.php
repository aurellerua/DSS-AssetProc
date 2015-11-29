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
<h3> SAW </h3>
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
$minwarr ="SELECT MIN(warranty) FROM infovendor";
$minAvail ="SELECT MIN(spavailability) FROM infovendor";
$minspec ="SELECT MIN(Test) FROM infovendor";
$result = $conn->query($query);


	function intdiv_1($a, $b){
    
	return ($a - $a % $b) / $b;
	
	}
	echo "($minwarr)";
?>



<table border="2" style="background-color: #84ed86; color: #761a9b; margin: 0 auto;">
	<thead>
		<tr>
			<th>Alternative Id</th>
			<th>Vendor Name</th>
			<th>Warranty</th>
			<th>Sparepart Availability</th>
			<th>Specification</th>
			<th>Quantity</th>
			<th>Alternative rating</th>
		</tr>
	</thead>
	
	<tbody>
		<?php
			$rown=0;
			$budget= 50000000;
			$quantity= 5;
			$minamount = 0;
			$altscore =0.00;
			$minwarr = mysqli_fetch_assoc($minwarr);
			echo "{$minwarr}";
			while ($row = mysqli_fetch_assoc($result)) {
				$amount = intdiv_1($budget , $row['price']);
				if($amount > $quantity){
					$amount = $quantity;
				}
				if($minamount > $amount){
					$minamount = $amount;
				}
				$altscore= (($row['warranty']/$minwarr)* 0.2 );
				if($rown%2==0) {
				echo "<tr>
	              <td>{$row['id']}</td>
	              <td>{$row['vendorname']}</td>
	              <td>{$row['warranty']}</td>
	              <td>{$row['spavailability']}</td>
	              <td>{$row['specification']}</td>
				  <td>{$amount}</td>
				  <td>{$altscore}</td>
			      </tr>";
		  		}
		  		else {
		  			echo "<tr class='alt'>
	              <td>{$row['id']}</td>
	              <td>{$row['vendorname']}</td>
	              <td>{$row['warranty']}</td>
	              <td>{$row['spavailability']}</td>
	              <td>{$row['specification']}</td>
	              <td>{$amount}</td>
				  <td>{$altscore}</td>
			      </tr>";
		  		}
		  		$rown++;	
		  	}
			echo "<tr class='alt'>
	              <td>Weighteight</td>
	              <td>-</td>
	              <td>20%</td>
	              <td>20%</td>
	              <td>35%</td>
	              <td>25%</td>
				  <td>100%</td>
			      </tr>";
		?>
	</tbody>
</table>
	
	
<?php $conn->close(); ?>
</h>
</body>
</html>