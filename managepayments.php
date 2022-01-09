<?php 
ob_start();
include("header.php"); 

if(!isset($_SESSION["player_id"]))
{
	header("location:login.php");	
}
?>
<br><br><br><br><br>
<?php 
	include("connect.php");
		
	$sql = "SELECT * FROM players_orders
			INNER JOIN paymentgateway_details ON players_orders.order_id = paymentgateway_details.razorpay_order_id 
			RIGHT JOIN packages ON packages.packages_id = players_orders.package_id 
			WHERE players_id= '".$_SESSION["player_id"]."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		//  echo "<pre>";
		//var_dump($row);
		$rows[] = $row;
		//echo "</pre>";
	  }
	} else {
	//  echo "0 results";
	}
	$conn->close();
?>
<div class="col-sm-12">
 <h2>Manage Payments</h2>
 <p>Download your payment invoice by clicking on the download button</p>            
 <table class="table table-responsive p-1">
    <thead>
      <tr>
        <th>Course Name</th>
        <th>Order id</th>
        <th>Price</th>
		<th>Invoice</th>
      </tr>
    </thead>
    <tbody>
	<?php 
	  foreach($rows as $row)	
	  {
			echo '
			 <tr>
				<td>'.$row["packages_name"].'</td>
				<td>'.$row["order_id"].'</td>
				<td>'.$row["payment"].'</td>
				<td><a href="invoice.php?inv='.$row["order_id"].'" target="_blank">Download Invoice</a></td>
			 </tr>
			';
	  }
	?>
    </tbody>
  </table>
</div>  
<?php include("footer.php"); ?>