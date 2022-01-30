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
  <section>  
      <div class="container">	  <br><br>		<br><br>	
        <div class="w3l-header mb-md-5 mt-5 mb-4 text-center">
          <h6 class="sub-title">Our Plans</h6>
          <h3 class="hny-title"><?php echo ucfirst($_GET["sport"]); ?> packages</h3>
        </div>
		
		 <?php 
		  if(isset($rows))
		  {
			foreach($rows as $row)
			{
				//var_dump($row);
				echo '
					<div class="row">
					<div class="col-lg-4">
						  <a href="blockcoursedetails.php?package='.$row["packages_id"].'"><img src="admin/'.$row["packages_image"].'" class="img-fluid" alt="">
						</div>
						<div class="col-lg-8">
						<a href="blockcoursedetails.php?package='.$row["packages_id"].'">
						   <div class="info-bg">
									  <h1>'.$row["packages_name"].'</h1>									  
									  <p>'.$row["packages_about"].'</p>
									  <span class="fa fa-user mt-2"></span> '.$row["trainers_name"].'
										  <span class="fa fa-star  ml-3"></span> '.$row["mentors_name"].'
										  <span class="fa fa-university ml-3"></span> '.$row["venues_name"].'
									  </ul>
							<h3 class="py-2"><span class="price">Rs 2400/month</span></h3>									  
							</div>  
						</a>	
						</div>						
					</div>
					<hr>
					';
				}
		  }
		  else
		  {
				echo "<div class='col-12'><center><h1>Coming Soon !<h1></div>";
		  }
		  
?>				
	
			<br><Br><br>	
		 
      </div>
    </div>
  </section>

 <?php include("footer.php"); ?>