<?php 

if(isset($_GET["sport"]))
{
	if($_GET["sport"] == "football")
	{
			//echo "football";
	}
}

$rows = array();
if(isset($_GET["package"]))
{
	include("connect.php");
		
	  $sql = "SELECT * FROM packages 
				 RIGHT JOIN trainers ON packages.packages_trainer = trainers.trainers_id
				 RIGHT JOIN physiotherapists ON packages.packages_physiotherapist = physiotherapists.physiotherapists_id
				 RIGHT JOIN venues ON packages.packages_venue = venues.venues_id				 
				 RIGHT JOIN mentors ON packages.packages_mentor = mentors.mentors_id				 
				 RIGHT JOIN kits ON packages.packages_kits = kits.kits_id				 
				 RIGHT JOIN dieticians ON packages.packages_dietician = dieticians.dieticians_id				 
				 WHERE packages_id= '".$_GET["package"]."'
				";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	//	  echo "<pre>";
		//var_dump($row);
		$rows[] = $row;
	//	echo "</pre>";
	  }
	} else {
	//  echo "0 results";
	}
	$conn->close();
}
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
 <!-- //header -->
 <?php include("header.php"); ?>
  <!--/grids-->
  <section class="w3l-grids-3 mt-5 pt-5" id="about">
    <div class="container py-md-5">
      <div class="row bottom-ab-grids align-items-center">
	   <div class="col-lg-6 bottom-ab-right mt-lg-0 mt-5">
          <img src="<?php echo "admin/".$rows[0]["packages_image"]; ?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 bottom-ab-left pr-lg-5">
          <h6 class="sub-title">For the Champion in you !</h6>
          <h3 class="hny-title">
           <?php echo $rows[0]["packages_name"]; ?> </h3>
          <p class="my-3 pr-lg-4"><?php echo $rows[0]["packages_about"]; ?></p>
		  	<h4>Rs 2500 / per month </h4>
          <button class="btn btn-secondary dropdown-toggle mt-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Register today
			  </button>
        </div>      
      </div>
    </div>

<section class="w3l-content-6" id="why">
    <div class="container py-lg-5">
      <div class="row">      <center>
	   <img src="<?php echo "admin/".$rows[0]["venues_image"]; ?>" class="img-fluid p-2"  style="max-height:400px;" alt="">          
	   <div class="col-lg-9 content-6-right mt-lg-0 mt-4">
		<h3 class="hny-title"><?php echo $rows[0]["venues_name"]; ?></h3>		  
		<h6 class="sub-title">Venue</h6>		
		<h5>
		<?php 
		$tags = explode(",",$rows[0]["venues_tags"]); 
		
		foreach($tags as $tag )
		{
			echo '<span class="badge badge-secondary m-1">'.$tag.'</span>';
		}
		
		?>
		</h6>
	
          <p class="mb-3 mt-1"><?php echo $rows[0]["venues_about"]; ?></p>               		  
        </div>       	
      </div>
    </div>
</section>

<div class="container py-md-5">
      <div class="row bottom-ab-grids align-items-center">
	   <div class="col-lg-6 bottom-ab-right mt-lg-0 mt-5">
          <img src="<?php echo "admin/".$rows[0]["kits_image"]; ?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 bottom-ab-left pr-lg-5">
          <h6 class="sub-title">For the Champion in you !</h6>
          <h3 class="hny-title">
           <?php echo $rows[0]["kits_name"]; ?> </h3>		   
          <p class="my-3 pr-lg-4"><?php echo $rows[0]["kits_about"]; ?></p>		            
		  <h5>
			<?php 
			$tags = explode(",",$rows[0]["kits_tags"]); 
			
			foreach($tags as $tag )
			{
				echo '<span class="badge badge-secondary m-1">'.ucwords($tag).'</span>';
			}
			
			?>
		  </h5>
        </div>      
      </div>
</div>




<section class="w3l-cta4 mt-3 mb-3">
      <div class="container py-lg-5">
        <div class="ab-section text-center">          
          <h2 class="title"><span class="fa fa-star" aria-hidden="true"></span> OUR CHAMPION TEAM <span class="fa fa-star" aria-hidden="true"></span></h1>          
        </div>

      </div>
  </section>
<section class="w3l-content-6" id="why">
    <div class="container py-lg-5">
      <div class="row">      
	   <div class="col-lg-3 content-6-left mt-lg-0"><center>
		<img src="<?php echo "admin/".$rows[0]["trainers_image"]; ?>" class="img-fluid rounded-circle"  style="height:14em;" alt="">
          <h6 class="sub-title"><?php echo $rows[0]["trainers_name"]; ?></h6>		  
        </div>
        <div class="col-lg-9 content-6-right mt-lg-0 mt-4">
		<h3 class="hny-title"><?php echo $rows[0]["trainers_name"]; ?></h3>		  
		<h6 class="sub-title">Trainer / Coach</h6>		
		<h5>
		<?php 
		$tags = explode(",",$rows[0]["trainers_tags"]); 
		
		foreach($tags as $tag )
		{
			echo '<span class="badge badge-secondary m-1">'.$tag.'</span>';
		}
		
		?>
		</h6>
	
          <p class="mb-3 mt-1"><?php echo $rows[0]["trainers_about"]; ?></p>               		  
        </div>       	
      </div>
    </div>
</section>    
  
<section class="w3l-content-6" id="why">
    <div class="container py-lg-5">
      <div class="row">      
	   <div class="col-lg-3 content-6-left mt-lg-0"><center>
		<img src="<?php echo "admin/".$rows[0]["physiotherapists_image"]; ?>" class="img-fluid rounded-circle"  style="height:14em;" alt="">
          <h6 class="sub-title"><?php echo $rows[0]["physiotherapists_name"]; ?></h6>
		  </center>
        </div>
        <div class="col-lg-9 content-6-right mt-lg-0 mt-4">
		<h3 class="hny-title"><?php echo $rows[0]["physiotherapists_name"]; ?></h3>		  
		<h6 class="sub-title">Physiotherapist</h6>		
		<h5>
		<?php 
		$tags = explode(",",$rows[0]["physiotherapists_tags"]); 
		
		foreach($tags as $tag )
		{
			echo '<span class="badge badge-secondary m-1">'.ucwords($tag).'</span>';
		}
		
		?>
		</h5>
	
          <p class="mb-3 mt-1"><?php echo $rows[0]["physiotherapists_about"]; ?></p>               		  
        </div>       	
      </div>
    </div>
</section>    
	
  

<section class="w3l-content-6" id="why">
    <div class="container py-lg-5">
      <div class="row">      
	   <div class="col-lg-3 content-6-left mt-lg-0"><center>
		<img src="<?php echo "admin/".$rows[0]["dieticians_image"]; ?>" class="img-fluid rounded-circle"  style="height:14em;" alt="">
          <h6 class="sub-title"><?php echo $rows[0]["dieticians_name"]; ?></h6>
		  </center>
        </div>
        <div class="col-lg-9 content-6-right mt-lg-0 mt-4">
		<h3 class="hny-title"><?php echo $rows[0]["dieticians_name"]; ?></h3>		  
		<h6 class="sub-title">Dietician</h6>		
		<h5>
		<?php 
		$tags = explode(",",$rows[0]["dieticians_tags"]); 
		
		foreach($tags as $tag )
		{
			echo '<span class="badge badge-secondary m-1">'.ucwords($tag).'</span>';
		}
		
		?>
		</h5>
	
          <p class="mb-3 mt-1"><?php echo $rows[0]["dieticians_about"]; ?></p>               		  
        </div>       	
      </div>
    </div>
</section>    
	 
<section class="w3l-content-6" id="why">
    <div class="container py-lg-5">
      <div class="row">      
	   <div class="col-lg-3 content-6-left mt-lg-0"><center>
		<img src="<?php echo "admin/".$rows[0]["mentors_image"]; ?>" class="img-fluid rounded-circle"  style="height:14em;" alt="">
          <h6 class="sub-title"><?php echo $rows[0]["mentors_name"]; ?></h6>
		  </center>
        </div>
        <div class="col-lg-9 content-6-right mt-lg-0 mt-4">
		<h3 class="hny-title"><?php echo $rows[0]["mentors_name"]; ?></h3>		  
		<h6 class="sub-title">Mentor</h6>		
		<h5>
		<?php 
		$tags = explode(",",$rows[0]["mentors_tags"]); 
		
		foreach($tags as $tag )
		{
			echo '<span class="badge badge-secondary m-1">'.ucwords($tag).'</span>';
		}
		
		?>
		</h5>
	
          <p class="mb-3 mt-1"><?php echo $rows[0]["mentors_about"]; ?></p>               		  
        </div>       	
      </div>
    </div>
</section>    

<section class="w3l-cta4">
      <div class="container py-lg-5">
        <div class="ab-section text-center">          
          <h2 class="title"><button class="btn-secondary p-4">Register For This Sport</button></h2>    
        </div>

      </div>
  </section>
  <!--//grids-->
 <?php include("footer.php"); ?>