<?php 
include("connect.php");
include("includes/header.php");
include("savedata.php");

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Sports Player</h1><hr>
						<?php if(isset($error_mysql)){echo $error_mysql;} ?>
							<form method="post" enctype="multipart/form-data">							
							<input type="hidden" name="players|players_id" value="<?php echo rand(1000,999999999); ?>" value="" class="form-control"></br>
							<input type="text" name="players|players_name" value="" placeholder="Enter player name" value="" class="form-control"></br>
							<textarea  class="form-control" name="players|players_address" placeholder="Enter address"></textarea></br>	
							
							<input type="number" name="players|players_pincode" value="" placeholder="Enter pincode" value="" class="form-control"></br>
							
							Select Your Gender :
							<select name="players|players_gender" value="" class="form-control">
							<option value=""></option>
							<option value="M">Male</option>
							<option value="F">Female</option>
							</select></br>
							
							<input type="text" name="players|players_email" value="" placeholder="Enter email" value="" class="form-control"></br>
							
													
							<input type="number" name="players|players_contact_number" value="" placeholder="Enter your contact number" value="" class="form-control"></br>
							
							<input type="date" name="players|players_birthday" value="" placeholder="Enter player name" value="" class="form-control"></br>
							
							<input type="text" name="players|players_school" value="" placeholder="Enter player school name" value="" class="form-control"></br>
							
							
							<b> Current Image </b><br><br>
							<img src="<?php if(isset($image_bg)){echo $image_bg;}; ?>"/><br><br>
							Upload a new image to change it :
							<input type="file" name="players|players_image|0|players" id="fileToUpload">
							<hr>
							<input type="submit" value="Submit"  class="btn btn-primary">
							<!-- Button to Open the Modal -->
					</div>					
				</main>					

<?php 
include_once("includes/footer.php");
?>