<?php 
ob_start();
session_start();

if(!isset($_SESSION["player_id"]))
{
	header("location:login.php");	
}
?>
<?php 
	include("connect.php");
	$rows[] = array(); 
	
	$sql = "SELECT *, paymentgateway_details.id as mainid, paymentgateway_details.timeadded as maintime FROM players_orders
			INNER JOIN paymentgateway_details ON players_orders.order_id = paymentgateway_details.razorpay_order_id 
			RIGHT JOIN packages ON packages.packages_id = players_orders.package_id 
			RIGHT JOIN players ON players.players_id = players_orders.players_id 
			WHERE players_orders.order_id = '".$_GET["inv"]."' AND players_orders.players_id= '".$_SESSION["player_id"]."'";
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
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Champion.in<?php if(isset($rows[0]["packages_name"])){echo " - ".$rows[0]["packages_name"];} ?></title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
</head>
<p><button onclick="window.print()">Print this page</button></p>

<style>
.padding {
    padding: 2rem !important
}

.card {
    margin-bottom: 30px;
    border: none;
    -webkit-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
    -moz-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
    box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22)
}

.card-header {
    background-color: #fff;
    border-bottom: 1px solid #e6e6f2
}

h3 {
    font-size: 20px
}

h5 {
    font-size: 15px;
    line-height: 26px;
    color: #3d405c;
    margin: 0px 0px 15px 0px;
    font-family: 'Circular Std Medium'
}

.text-dark {
    color: #3d405c !important
}
</style>
 <div id= "inv" class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
     <div class="card">
         <div class="card-header p-4">
             <a class="pt-2 d-inline-block img-fluid" href="index.html" data-abc="true"><img src="assets/images/logo.png" height="50" /></a>
             <div class="float-right">
                 <h3 class="mb-0">Invoice #CHM10<?php echo $rows[1]["mainid"]; ?></h3>
                 Date: <?php echo date('M jS, Y', strtotime($rows[1]["maintime"])); ?>
             </div>
         </div>
         <div class="card-body">
             <div class="row mb-4">
                 <div class="col-sm-6">
                     <h5 class="mb-3">From:</h5>                     
                     <h3 class="text-dark mb-1">UPACA Shiksha Pariwar</h3>
                     <div>478, Nai Sadak</div>
                     <div>Chandni chowk, New delhi, 110006</div>
                     <div>Email: info@tikon.com</div>
                     <div>Phone: +91 9895 398 009</div>
                 </div>
                 <div class="col-sm-6 ">
                     <h5 class="mb-3">To:</h5>
					 <h3 class="text-dark mb-1"><?php echo $rows[1]["players_name"]; ?></h3>
                     <div><?php echo $rows[1]["players_address"]; ?></div>
                     <div>Pincode - <?php echo $rows[1]["players_pincode"]; ?></div>
                     <div>Email: <?php echo $rows[1]["players_email"]; ?></div>
                     <div>Phone: +91 <?php echo $rows[1]["players_contact_number"]; ?></div>
                 </div>
             </div>
             <div class="table-responsive-sm">
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th class="center">#</th>
                             <th>Item</th>
                             <th>Description</th>
                             <th class="right">Price</th>
                             <th class="center">Qty</th>
                             <th class="right">Total</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td class="center">1</td>
                             <td class="left strong"><?php echo $rows[1]["packages_name"]; ?></td>
                             <td class="left"><?php echo $rows[1]["packages_about"]; ?></td>
                             <td class="right">Rs.<?php echo $rows[1]["payment"]; ?></td>
                             <td class="center">1</td>
                             <td class="right">Rs.<?php echo $rows[1]["payment"]; ?></td>
                         </tr>                     
                     </tbody>
                 </table>
             </div>
             <div class="row">
                 <div class="col-lg-4 col-sm-5">
                 </div>
                 <div class="col-lg-4 col-sm-5 ml-auto">
                     <table class="table table-clear">
                         <tbody>
                             <tr>
                                 <td class="left">
                                     <strong class="text-dark">Subtotal</strong>
                                 </td>
                                 <td class="right">Rs. <?php echo $rows[1]["payment"]; ?></td>
                             </tr>                             
                             <tr>
                                 <td class="left">
                                     <strong class="text-dark">GST (18%)</strong>
                                 </td>
                                 <td class="right">Rs. <?php echo $rows[1]["payment"]*0.18; ?></td>
                             </tr>
                             <tr>
                                 <td class="left">
                                     <strong class="text-dark">Total</strong> </td>
                                 <td class="right">
                                     <strong class="text-dark">Rs. <?php echo $rows[1]["payment"] + ($rows[1]["payment"] * 0.18); ?></strong>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
         <div class="card-footer bg-white">
             <p class="mb-0">Champion.in, Sounth Block, New delhi, 110034</p>
         </div>
     </div>
 </div>