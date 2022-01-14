<?php 
include("connect.php");
include("header.php");
include("savedata.php");

?>
<?php if(isset($error_mysql)){echo "<script>alert('".$error_mysql."');</script>";} ?>
<!--/grids-->
  <section class="w3l-grids-3 py-5" id="about">
    <div class="container py-md-5">
      <div class="row bottom-ab-grids align-items-center">
        <div class="col-lg-6 bottom-ab-left pr-lg-5 mt-5">
          <h6 class="sub-title">Tranforming Champions</h6>
          <h3 class="hny-title">Register For champion.in</h3>
          <p class="my-3 pr-lg-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur hic odio
            voluptatem
            tenetur consequatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
            voluptate rem ullam dolore nisi voluptatibus esse quasi.Integer sit amet mattis quam.</p>          
			<div class="col-lg-12 col-md-6 grid mt-md-2 mt-4">            
              <div class="icon-info">
                <h4><a href="#">Strategy</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sapiente commodi maiores ullam est
                  nostrum aliquam!</p>
              </div>
            </div>
			<div class="col-lg-12 col-md-6 grid mt-md-2 mt-4">            
              <div class="icon-info">
                <h4><a href="#">Strategy</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sapiente commodi maiores ullam est
                  nostrum aliquam!</p>
              </div>
            </div>
			<div class="col-lg-12 col-md-6 grid mt-md-2 mt-4">            
              <div class="icon-info">
                <h4><a href="#">Strategy</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sapiente commodi maiores ullam est
                  nostrum aliquam!</p>
              </div>
            </div>
        </div>
        <div class="col-lg-6 mt-lg-0">
		<style>
		.form-control{margin:0.5em;}
		</style><br>
          <h1 class="mt-4">Journey to Coach India!</h1><hr>
						<?php if(isset($error_mysql)){echo $error_mysql;} ?>
							<form method="post" enctype="multipart/form-data">							
							<input type="hidden" name="physiotherapists|physiotherapists_id" value="<?php echo rand(1000,999999999); ?>" placeholder="Enter your name" value="" class="form-control">
							<input type="text" name="physiotherapists|physiotherapists_name" value="" placeholder="Enter your name" value="" class="form-control">										
							<input type="text" name="physiotherapists|physiotherapists_contact" value="" placeholder="Enter your contact number" value="" class="form-control">				<input type="text" name="physiotherapists|physiotherapists_email" value="" placeholder="Enter your email" value="" class="form-control">		
							<textarea  class="form-control" name="physiotherapists|physiotherapists_address" placeholder="Enter your address"></textarea>
							<input type="text" name="physiotherapists|physiotherapists_pincode" value="" placeholder="Enter your pincode" value="" class="form-control">							
							<textarea  class="form-control" name="physiotherapists|physiotherapists_about" placeholder="Enter summary about the you in about 100 words"></textarea>
							<textarea  class="form-control" name="physiotherapists|physiotherapists_achievements" placeholder="Enter your achievments"></textarea>
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
							<!-- Button to Open the Modal -->
							</form>												
        </div>
		
      </div>
    </div>
  </section>
  <!--//grids-->
  
 		
							
							
							
							
							
<?php 
include("footer.php");
?>