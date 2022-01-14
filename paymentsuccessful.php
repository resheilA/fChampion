<?php 

include("header.php");
include("payment/razorpay-php/Razorpay.php");
include("connect.php");

use Razorpay\Api\Api;

$api = new Api($api_key, $api_secret);
$attributes  = array('razorpay_signature'  => $_POST["razorpay_signature"],  'razorpay_payment_id'  => $_POST["razorpay_payment_id"] ,  'razorpay_order_id' => $_SESSION["current_order_id"]);

try
{
$order  = $api->utility->verifyPaymentSignature($attributes);
}
//catch exception
catch(Exception $e) {
  $order = $e->getMessage();
}
?>
<br><br><br><br>
<div class="col-12 mt-5">
<center>
<?php 
if($order == null){
	
$sql = "INSERT INTO paymentgateway_details(razorpay_payment_id, razorpay_order_id,razorpay_signature)
VALUES ('".$_POST["razorpay_payment_id"]."', '".$_POST["razorpay_order_id"]."', '".$_POST["razorpay_signature"]."')";

if (mysqli_query($conn, $sql)) {
//  echo "New record created successfully";
}
mysqli_close($conn);	
	
$status = 0;	
}
else
{
echo "here";
$status = 1;		
}
//var_dump($order);
//var_dump($_SESSION);
//die();
?>
<img class="img-fluid" src="<?php echo $_POST["checkout_logo"]; ?>"/>
<?php 
if($status == 0)
{
	echo '
			<h3>Thanks For Using RazorPay.</h3>
			<h3>Your payment has been successful.</h3><br>
			<a href="viewprofile.php?player='.$_SESSION["player_id"].'">
			<button class="btn btn-success">View Profile</button></a>
			</center>
			</div>
		';	
}
else {
		echo '			
			<h3>Your payment has been unsuccessful. Please try again.</h3><br>
			<a href="viewprofile.php?player='.$_SESSION["player_id"].'"><button class="btn btn-success">View Profile</button></a>
			</center>
			</div>
		';	
}		

?>
<br><br><br><br>
<?php
$url    = 'http://localhost/fchampion/invoice.php';
$img    = 'miki.png';
$file   = file($url);
$result = file_put_contents($img, $file);
?>

<?php include("footer.php"); ?>