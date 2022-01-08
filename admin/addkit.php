<?php 
include("connect.php");
include("includes/header.php");
include("savedata.php");
?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add new kit</h1><hr>
						<?php if(isset($error_mysql)){echo $error_mysql;} ?>
							<form method="post" enctype="multipart/form-data">							
							<input type="hidden" name="kits|kits_id" value="<?php echo rand(1000,999999999); ?>" value="" class="form-control"></br>
							<input type="text" name="kits|kits_name" value="" placeholder="Enter kit name" value="" class="form-control"></br>
							<textarea  class="form-control" name="kits|kits_about" placeholder="Enter summary about the kits in about 100 words"></textarea></br>	
							<textarea  class="form-control" name="kits|kits_tags" placeholder="Enter tags for the kit"></textarea></br>	
							<b> Current Image </b><br><br>
							<img src="<?php if(isset($image_bg)){echo $image_bg;}; ?>"/><br><br>
							Upload a new image to change it :
							<input type="file" name="kits|kits_image|0|kits" id="fileToUpload">
							<hr>
							<input type="submit" value="Submit"  class="btn btn-primary">
							<!-- Button to Open the Modal -->
					</div>					
				</main>					

<?php 
include_once("includes/footer.php");
?>