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
<h3>Financial Data</h3>
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

$query = "SELECT * FROM keuangan";
$result = $conn->query($query);
?>

<h4><a href="keuanganbaru.php">New Transaction</a></h4>

<h5>Balance : </h5>
<?php
	$qDebit = "SELECT SUM(debit) AS sumDebit FROM keuangan";
	$sumDebitRes = $conn->query($qDebit);
	$sumDebitRow = mysqli_fetch_assoc($sumDebitRes);
	$sumDebit = $sumDebitRow['sumDebit'];
	$qCredit = "SELECT SUM(credit) AS sumCredit FROM keuangan";
	$sumCreditRes = $conn->query($qCredit);
	$sumCreditRow = mysqli_fetch_assoc($sumCreditRes);
	$sumCredit = $sumCreditRow['sumCredit'];

	echo $sumDebit - $sumCredit;	
?>


<table border="2" style="background-color: #84ed86; color: #761a9b; margin: 0 auto;">
	<thead>
		<tr>
			<th>No</th>
			<th>Description</th>
			<th>Debit</th>
			<th>Credit</th>
		</tr>
	</thead>

	<tbody>
		<?php
			$rown=0;
			while ($row = mysqli_fetch_assoc($result)) {
				if($rown%2==0) {
				echo "<tr>
	              <td>{$row['no']}</td>
	              <td>{$row['description']}</td>
	              <td>{$row['debit']}</td>
	              <td>{$row['credit']}</td>
	              </tr>";
		  		}
		  		else {
		  			echo "<tr class='alt'>
	              <td>{$row['no']}</td>
	              <td>{$row['description']}</td>
	              <td>{$row['debit']}</td>
	              <td>{$row['credit']}</td>
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