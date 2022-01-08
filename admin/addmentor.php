<?php 
include("connect.php");
include("includes/header.php");
include("savedata.php");
?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add new mentor</h1><hr>
						<?php if(isset($error_mysql)){echo $error_mysql;} ?>
							<form method="post" enctype="multipart/form-data">							
							<input type="hidden" name="mentors|mentors_id" value="<?php echo rand(1000,999999999); ?>" value="" class="form-control"></br>
							<input type="text" name="mentors|mentors_name" value="" placeholder="Enter mentor name" value="" class="form-control"></br>
							<textarea  class="form-control" name="mentors|mentors_address" placeholder="Enter mentor address"></textarea></br>	
							<input type="text" name="mentors|mentors_pincode" value="" placeholder="Enter mentor pincode" value="" class="form-control"></br>
							<textarea  class="form-control" name="mentors|mentors_about" placeholder="Enter summary about the mentors in about 100 words"></textarea></br>	
							<textarea  class="form-control" name="mentors|mentors_tags" placeholder="Enter tags for the mentor"></textarea></br>	
							<b> Current Image </b><br><br>
							<img src="<?php if(isset($image_bg)){echo $image_bg;}; ?>"/><br><br>
							Upload a new image to change it :
							<input type="file" name="mentors|mentors_image|0|mentors" id="fileToUpload">
							<hr>
							<input type="submit" value="Submit"  class="btn btn-primary">
							<!-- Button to Open the Modal -->
					</div>					
				</main>					

<?php 
include_once("includes/footer.php");
?>