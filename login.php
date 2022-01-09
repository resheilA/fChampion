<?php 
ob_start();
include("connect.php");
include("header.php");

if(isset($_SERVER['HTTP_REFERER'])){
if(!isset($_SESSION["backpage"]))
{
	if(!strstr($_SERVER['HTTP_REFERER'], 'login.php'))
	{
		$_SESSION["backpage"] = $_SERVER['HTTP_REFERER'];
	}
}
}

if(isset($_SESSION["player_id"]))	
{
	if(isset($_SESSION["backpage"]))
	{		
		header("location:".$_SESSION["backpage"]);
	}
	else
	{
		header("location:listcourse.php?sport=tennis");
	}
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
			 header("location:".$_SERVER['HTTP_REFERER']);
		  }
		} else {
			$error_mysql = '<div class="alert alert-danger">
					<strong>Error!</strong> Please enter correct details to continue.
					</div>';						
		}
	
}
?>

<!--/grids-->
  <section class="w3l-grids-3 py-5" id="about">
    <div class="container py-md-5">
      <div class="row bottom-ab-grids align-items-center">
        <div class="col-lg-6 bottom-ab-left pr-lg-5 mt-5">
          <h6 class="sub-title">Transforming Champions</h6>
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
							<center>								
							<div style='border:1px solid black;' class="">
							<p class="p-2">Not Registered With Champions Yet ?
							&nbsp <a href="signup.php"><button class="btn btn-primary">Signup Now !</button></a>
							</div>
							
        </div>
		
      </div>
    </div>
  </section>
  <!--//grids-->
  
 		
							
							
							
							
							
<?php 
include("footer.php");
?>