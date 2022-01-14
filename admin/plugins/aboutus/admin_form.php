<?php 
include_once("includes/header.php");
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">About us Details</h1><hr>
						<?php echo $error_mysql; ?>
							<form method="post" enctype="multipart/form-data">
							<input type="hidden" name="plug_about_us|domain_id" value="<?php echo $domain_id; ?>">
							<input type="text" name="plug_about_us|heading" value="<?php echo $heading; ?>" placeholder="Enter a heading. Example : About us" value="" class="form-control"></br>
							<textarea  class="form-control" name="plug_about_us|sub_heading" placeholder="Enter summary about your company / yourself in about 100 words"><?php echo $sub_heading; ?></textarea></br>
							<textarea placeholder="About your company / yourself" name="plug_about_us|content" class="form-control"><?php echo $content; ?></textarea><br>
							<b> Current Image </b><br><br>
							<img src="<?php echo $image_bg; ?>"/><br><br>
							Upload a new image to change it :
							<input type="file" name="plug_about_us|image_bg|0|<?php echo $domain_id; ?>" id="fileToUpload" value="<?php echo $image_bg; ?>">
							<hr>
							<input type="submit" value="Submit"  class="btn btn-primary">
							<!-- Button to Open the Modal -->
					</div>					
				</main>					

<?php 
include_once("includes/footer.php");
?>