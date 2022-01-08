<?php 
include("connect.php");
include("includes/header.php");
include("savedata.php");
?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add new trainer</h1><hr>
						<?php if(isset($error_mysql)){echo $error_mysql;} ?>
							<form method="post" enctype="multipart/form-data">							
							<input type="hidden" name="trainers|trainers_id" value="<?php echo rand(1000,999999999); ?>" placeholder="Enter trainer name" value="" class="form-control"></br>
							<input type="text" name="trainers|trainers_name" value="" placeholder="Enter trainer name" value="" class="form-control"></br>
							<textarea  class="form-control" name="trainers|trainers_address" placeholder="Enter trainer address"></textarea></br>	
							<input type="text" name="trainers|trainers_pincode" value="" placeholder="Enter trainer pincode" value="" class="form-control"></br>							
							<textarea  class="form-control" name="trainers|trainers_about" placeholder="Enter summary about the trainers in about 100 words"></textarea></br>	
							<textarea  class="form-control" name="trainers|trainers_tags" placeholder="Enter tags for the trainers"></textarea></br>	
							<b> Current Image </b><br><br>
							<img src="<?php if(isset($image_bg)){echo $image_bg;}; ?>"/><br><br>
							Upload a new image to change it :
							<input type="file" name="trainers|trainers_image|0|trainers" id="fileToUpload">
							<hr>
							<input type="submit" value="Submit"  class="btn btn-primary">
							<!-- Button to Open the Modal -->
					</div>					
				</main>					

<?php 
include_once("includes/footer.php");
?>