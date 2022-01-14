<?php 
include("connect.php");
include("includes/header.php");
include("savedata.php");
?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add new dietician</h1><hr>
						<?php if(isset($error_mysql)){echo $error_mysql;} ?>
							<form method="post" enctype="multipart/form-data">							
							<input type="hidden" name="dieticians|dieticians_id" value="<?php echo rand(1000,999999999); ?>" value="" class="form-control"></br>
							<input type="text" name="dieticians|dieticians_name" value="" placeholder="Enter dietician name" value="" class="form-control"></br>
							<textarea  class="form-control" name="dieticians|dieticians_address" placeholder="Enter dietician address"></textarea></br>	
							<input type="text" name="dieticians|dieticians_pincode" value="" placeholder="Enter dietician pincode" value="" class="form-control"></br>
							<textarea  class="form-control" name="dieticians|dieticians_about" placeholder="Enter summary about the dieticians in about 100 words"></textarea></br>	
							<textarea  class="form-control" name="dieticians|dieticians_tags" placeholder="Enter tags for the dietician"></textarea></br>	
							<textarea  class="form-control" name="dieticians|dieticians_achievements" placeholder="Enter your achievments"></textarea><br>
							<textarea  class="form-control" name="dieticians|dieticians_certifications" placeholder="Enter your certification"></textarea><br>
							<b> Current Photo </b>
							<img src="<?php if(isset($image_bg)){echo $image_bg;}; ?>"/><br>
							Upload a latest photo :
							<input type="file" name="dieticians|dieticians_image|0|dieticians" id="fileToUpload">
							<hr>
							<b> Upload the undertaking file by scanning. Click here to download the form. </b> 
							<img src="<?php if(isset($image_bg)){echo $image_bg;}; ?>"/><br>
							Image file of your undertaking:
							<input type="file" name="dieticians|dieticians_image|0|dieticians" id="fileToUpload">
							<hr>
					</div>					
				</main>					

<?php 
include_once("includes/footer.php");
?>