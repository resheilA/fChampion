<?php 
ob_start();
include("connect.php");
include("header.php");

if(isset($_SESSION["player_id"]))
{
	header("location:listcourse.php?sport=cricket");
}
else
{
	//echo "Here";
}


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$username = $_POST["players_email"];
	$password = $_POST["players_password"];
	
	$sql = "SELECT players_email, players_id, players_password FROM players WHERE players_email = '".$username."' AND players_password = '".$password."'";
	$result = mysqli_query($conn, $sql);
		 

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row		   

		  while($row = mysqli_fetch_assoc($result)) {
			 $_SESSION["username"] = $username;
			 $_SESSION["player_id"] = $row["players_id"];
			 header("location:listcourse.php?sport=cricket");
		  }
		} else {
			$error_mysql = '<div class="alert alert-danger">
					<strong>Error!</strong> Please enter correct details to continue.
					</div>';						
		}
	
}
?>
<?php if(isset($error_mysql)){echo "<script>alert('".$error_mysql."');</script>";} ?>
<!--/grids-->
  <section class="w3l-grids-3 py-5" id="about">
    <div class="container py-md-5">
      <div class="row bottom-ab-grids align-items-center">
        <div class="col-lg-6 bottom-ab-left pr-lg-5 mt-5">
          <h6 class="sub-title">Tranforming Champions</h6>
          <h3 class="hny-title">Welcome Champion !</h3>
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
							<input type="text" name="players_email" value="" placeholder="Enter email" value="" class="form-control"></br>
							<input type="password" name="players_password" value="" placeholder="Enter password" value="" class="form-control">
							<input type="submit" value="Submit"  class="btn btn-primary m-3">
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