<?php 
include("connect.php");
include("includes/header.php");
include("savedata.php");

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add new physiotherapist</h1><hr>
						<?php if(isset($error_mysql)){echo $error_mysql;} ?>
							<form method="post" enctype="multipart/form-data">							
							<input type="hidden" name="physiotherapists|physiotherapists_id" value="<?php echo rand(1000,999999999); ?>" value="" class="form-control"></br>
							<input type="text" name="physiotherapists|physiotherapists_name" value="" placeholder="Enter your name" value="" class="form-control"></br>									
							<input type="text" name="physiotherapists|physiotherapists_contact" value="" placeholder="Enter your contact number" value="" class="form-control">	</br>		<input type="text" name="physiotherapists|physiotherapists_email" value="" placeholder="Enter your email" value="" class="form-control">		</br>
							<textarea  class="form-control" name="physiotherapists|physiotherapists_address" placeholder="Enter your address"></textarea></br>
							<input type="text" name="physiotherapists|physiotherapists_pincode" value="" placeholder="Enter your pincode" value="" class="form-control">							</br>
							<textarea  class="form-control" name="physiotherapists|physiotherapists_about" placeholder="Enter summary about the you in about 100 words"></textarea></br>
							<textarea  class="form-control" name="physiotherapists|physiotherapists_achievements" placeholder="Enter your achievments"></textarea></br>
							<textarea  class="form-control" name="physiotherapists|physiotherapists_certification" placeholder="Enter your certification"></textarea><br>
							<b> Current Photo </b>
							<img src="<?php if(isset($image_bg)){echo $image_bg;}; ?>"/><br>
							Upload a latest photo :
							<input type="file" name="physiotherapists|physiotherapists_image|0|physiotherapists" id="fileToUpload">
							<hr>
							<b> Upload the undertaking file by scanning. Click here to download the form. </b> 
							<img src="<?php if(isset($image_bg)){echo $image_bg;}; ?>"/><br>
							Image file of your undertaking:
							<input type="file" name="physiotherapists|physiotherapists_undertaking|0|physiotherapists" id="fileToUpload">
							<hr>
							<input type="submit" value="Submit"  class="btn btn-primary">
							</form>
							<!-- Button to Open the Modal -->
					</div>					
				</main>					

<?php 
include_once("includes/footer.php");
?>