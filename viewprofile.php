<?php 
include("header.php"); 

if(!isset($_SESSION["player_id"]))
{
	header("location:login.php");	
}

if(isset($_SESSION["player_id"]))
{
	include("connect.php");
		
	  $sql = "SELECT * FROM players				 
				 WHERE players_id= '".$_SESSION["player_id"]."'
				";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		//  echo "<pre>";
		//var_dump($row);
		$rows[] = $row;
		//echo "</pre>";
	  }
	} else {
	//  echo "0 results";
	}
	$conn->close();
}

?>
<section class="w3l-content-6 mt-3 pt-5" id="why">
    <div class="container py-lg-5">
	<div class="py-lg-5"><center>        
			</div>
      <div class="row">      
	   <div class="col-lg-12 content-6-right mt-lg-0 mt-4"><center>
	   <img src="<?php echo $rows[0]["players_image"]; ?>" class="img-fluid rounded-circle"  style="max-height:12em;max-width:12em;" alt="">          		  
		<h3 class="hny-title"><?php echo $rows[0]["players_name"]; ?></h3>		  
		<h6 class="sub-title">Player</h6>		
		<h5>		
		</h5>
	
          <p class="mb-3 mt-1"><?php echo $rows[0]["players_school"]; ?></p>      
 <a href="#url" class="btn btn-style btn-primary mb-4">Edit Profile</a>
 <a href="#url" class="btn btn-style btn-primary mb-4">Manage Payment</a>
 <a href="#url" class="btn btn-style btn-primary mb-4">Your Coaching</a>
         		  
        </div>       	
      </div>
    </div>
</section>  
<?php include("footer.php"); ?>