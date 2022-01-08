<?php 
if(isset($_GET["sport"]))
{
	if($_GET["sport"] == "football")
	{
			//echo "football";
	}
}

if(isset($_GET["sport"]))
{
	
	include("connect.php");
		
	$sql = "SELECT * FROM packages 
				 RIGHT JOIN trainers ON packages.packages_trainer = trainers.trainers_id
				 RIGHT JOIN physiotherapists ON packages.packages_physiotherapist = physiotherapists.physiotherapists_id
				 RIGHT JOIN venues ON packages.packages_venue = venues.venues_id				 
				 RIGHT JOIN mentors ON packages.packages_mentor = mentors.mentors_id				 
				 RIGHT JOIN kits ON packages.packages_kits = kits.kits_id				 
				 RIGHT JOIN dieticians ON packages.packages_dietician = dieticians.dieticians_id				
				 WHERE packages_sport = '".$_GET["sport"]."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	//	  echo "<pre>";
	// 	  var_dump($row);
	//	echo "</pre>";
			$rows[] = $row;
	  }
	} else {
	//  echo "0 results";
	}
	$conn->close();
}

?>
<?php include("header.php"); ?>
  <!--/services-->
  <section class="w3l-services1">  
  <div id="content-with-photo4-block" class="py-5">
      <div class="container py-md-5">	  		
        <div class="w3l-header mb-md-5 mt-5 mb-4 text-center">
          <h6 class="sub-title">Our Plans</h6>
          <h3 class="hny-title"><?php echo ucfirst($_GET["sport"]); ?> packages</h3>
        </div>
		
        <div class="cwp4-two row">
			
		  <?php //var_dump($rows); ?>
		  <?php 
		  if(isset($rows))
		  {
			foreach($rows as $row)
			{
				//var_dump($row);
				echo 
				'
				<div class="cwp4-image col-lg-4 col-md-6">
					<div class="grids4-info">
					  <a href="blockcoursedetails.php?package='.$row["packages_id"].'"><img src="assets/images/g1.jpg" class="img-fluid" alt="">
					  <div class="info-bg">
						  <h5>'.$row["packages_name"].'</h5>
						  <span class="price">Rs 2400/month</span>
						  <p>'.$row["packages_about"].'</p>
						  <ul>
							  <li><span class="fa fa-user"></span> '.$row["trainers_name"].'</li>
							  <li><span class="fa fa-star"></span> '.$row["mentors_name"].'</li>
							  <li><span class="fa fa-university"></span> '.$row["venues_name"].'</li>
						  </ul>
					  </div>
				  </div>
				  </div>
				  </a>	
				';
			}
		  }
		  else
		  {
				echo "<div class='col-12'><center><h1>Coming Soon !<h1></div>";
		  }
		  ?>
		    
		 

        </div>
      </div>
    </div>
  </section>

 <?php include("footer.php"); ?>