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
        </div>
        <div class="col-lg-6 mt-lg-0">
		<style>
		.form-control{margin:0.5em;}
		</style><br>
          	<?php if(isset($error_mysql)){echo $error_mysql;} ?>
							<form method="post" class="form-inline" enctype="multipart/form-data">
							<input type="hidden" name="redirect_to" value="login.php" class="form-control">
							<input type="hidden" name="players|players_id" value="<?php echo rand(1000,999999999); ?>" class="form-control">
							<input type="text" name="players|players_name" value="" placeholder="Enter player name" value="" class="form-control">
							<textarea  class="form-control" name="players|players_address" placeholder="Enter address"></textarea>
							<input type="number" name="players|players_pincode" value="" placeholder="Enter pincode" value="" class="form-control">							
							Select Your Gender :
							<select name="players|players_gender" value="" class="form-control">
							<option value=""></option>
							<option value="M">Male</option>
							<option value="F">Female</option>
							</select></br>
							
							<input type="text" name="players|players_email" value="" placeholder="Enter email" value="" class="form-control"></br>
																				
							<input type="number" name="players|players_contact_number" value="" placeholder="Enter your contact number" value="" class="form-control"></br>
							
							<input type="password" name="players|players_password" value="" placeholder="Enter password" value="" class="form-control">
							<input type="password" name="vpassword" value="" placeholder="Enter your password again" value="" class="form-control">
							
							<input type="date" name="players|players_birthday" value="" placeholder="Enter player name" value="" class="form-control"></br>
							
							<input type="text" name="players|players_school" value="" placeholder="Enter player school name" value="" class="form-control"></br>
							Upload a profile picture &nbsp&nbsp
							<input type="file" name="players|players_image|0|players" id="fileToUpload">
							
							<input type="submit" value="Submit"  class="btn btn-primary m-3">
							<!-- Button to Open the Modal -->
							</form>
							<div style='border:1px solid black;' class="col-lg-10">
							<p class="p-2">Already Registered With Us ?
							&nbsp <a href="login.php"><button class="btn btn-primary">Signin Here !</button></a>
							</div>
					
        </div>
		
      </div>
    </div>
  </section>
  <!--//grids-->
  
 		
							
							
							
							
							
<?php 
include("footer.php");
?>