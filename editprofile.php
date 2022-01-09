<?php 
ob_start();
include("header.php"); 
include("saveupdatedata.php"); 

if(!isset($_SESSION["player_id"]))
{
	header("location:login.php");	
}

if(isset($_SESSION["player_id"]))
{
	include("connect.php");
		
	$sql = "SELECT * FROM players WHERE players_id= '".$_SESSION["player_id"]."'";
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
}

?>
<br><br><br><br><br>
<center>
<div class="col-10 col-lg-5" style="border:1px solid black;">
							<br>							 
							<h3>Edit Your Profile</h3><hr>
							<?php if(isset($error_mysql)){echo $error_mysql;} ?>
							<form method="post" class="form" enctype="multipart/form-data">
							<input type="hidden" name="players|players_id" value="<?php echo $rows[0]["players_id"] ?>" class="form-control">
							<input type="text" name="players|players_name" placeholder="Enter player name" value="<?php echo $rows[0]["players_name"] ?>" class="form-control"><br>
							<textarea  class="form-control" name="players|players_address" placeholder="Enter address"><?php echo $rows[0]["players_address"] ?></textarea><br>
							<input type="number" name="players|players_pincode" placeholder="Enter pincode" value="<?php echo $rows[0]["players_pincode"] ?>" class="form-control">	<br>						
							Select Your Gender :
							<select name="players|players_gender" value="<?php echo $rows[0]["players_gender"] ?>" class="form-control">
							<option value="<?php echo $rows[0]["players_gender"] ?>"><?php echo $rows[0]["players_gender"] ?></option>
							<option value="M">Male</option>
							<option value="F">Female</option>
							</select></br>
							
							<input type="text" name="players|players_email" value="<?php echo $rows[0]["players_email"] ?>" placeholder="Enter email" value="" class="form-control"></br>
																				
							<input type="number" name="players|players_contact_number" value="<?php echo $rows[0]["players_contact_number"] ?>" placeholder="Enter your contact number" value="" class="form-control"></br>
							
							<input type="date" name="players|players_birthday"  placeholder="Enter player name" value="<?php echo $rows[0]["players_birthday"] ?>" class="form-control"></br>
							
							<input type="text" name="players|players_school" placeholder="Enter player school name" value="<?php echo $rows[0]["players_school"] ?>" class="form-control"></br>
							Profile Picture<br><img src="<?php echo $rows[0]["players_image"] ?>" height="100"/><br><br>
							Upload a new profile picture &nbsp&nbsp
							<input type="file" name="players|players_image|0|players" id="fileToUpload">
							
							<input type="submit" value="Submit"  class="btn btn-primary m-3">
							<!-- Button to Open the Modal -->
							</form>
</div>
<?php include("footer.php"); ?>		