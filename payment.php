<?php 
ob_start();
include("header.php");
if(!isset($_SESSION["player_id"]))
{
	header("Location:login.php");
}

include("payment/razorpay-php/Razorpay.php");
use Razorpay\Api\Api;


if($_SERVER["REQUEST_METHOD"] == "POST")
{

  include("connect.php");
   
  $sql = "SELECT * FROM packages_price WHERE packages_id= '".$_POST["packageid"]."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	//	  echo "<pre>";
		//var_dump($row);
		if($_POST["choosepack"] == 1)
		{
		$package_price = $row["packages_price"];
		}
		else if($_POST["choosepack"] == 2)
		{
		$package_price = $row["package_price_accom"];		
		}
	//	echo "</pre>";
	  }
	} else {
	//  echo "0 results";
	}

  $sql = "SELECT players_email, players_contact_number,players_name FROM players WHERE players_id= '".$_POST["playerid"]."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	//	  echo "<pre>";
		//var_dump($row);
		$players_email = $row["players_email"];
		$players_contact = $row["players_contact_number"];
		$players_name = $row["players_name"];
	//	echo "</pre>";
	  }
	} else {
	//  echo "0 results";
	}
	$conn->close();


/////////////////////////////////////////////////////////
$amount = $package_price*100;

$api = new Api($api_key, $api_secret);
$order = $api->order->create(array('receipt' => '123', 'amount' => $amount, 'currency' => 'INR', 'notes'=> array('packageid'=> $_POST["packageid"],'playerid'=> $_POST["playerid"])));

$order_id = $order->id;
$_SESSION["current_order_id"] = $order_id;
//$api->payment->fetch($paymentId)->capture(array('amount'=>$amount,'currency' => 'INR'));


include("connect.php");

$sql = "INSERT INTO players_orders(players_id,order_id,package_id,payment)
VALUES ('".$_POST["playerid"]."', '".$order_id."', '".$_POST["packageid"]."' , '".($amount/100)."')";

if (mysqli_query($conn, $sql)) {
  //echo "New record created successfully";
} else {
  //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



}

?>
<Br><br><BR><BR><Br><br>
<div class="col-lg-8">
<center>
Hello <?php echo $players_name; ?>! You are going to make a payment to Champion.in of Rs <?php echo $amount/100; ?> (inclusive of GST) 
<button id="rzp-button1" style="margin:1em;">Pay</button>
</div>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": <?php echo '"'.$api_key.'"'; ?>, // Enter the Key ID generated from the Dashboard
    "amount": <?php echo '"'.$amount.'"'; ?>, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Champion.in",
    "description": "Champion Course",
    "image": "https://champion.in/wp-content/uploads/2021/11/logo-1-1.png",
    "order_id": <?php echo '"'.$order_id.'"'; ?>, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "paymentsuccessful.php",
    "prefill": {
        "name": <?php echo '"'.$players_name.'"'; ?>,
        "email":  <?php echo '"'.$players_email.'"'; ?>,
        "contact":  <?php echo '" +91 '.$players_contact.'"'; ?>
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>

<?php 
include("footer.php");
?>