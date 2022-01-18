<?php 
include("header.php"); 
 
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
				 RIGHT JOIN packages_price ON packages.packages_id = packages_price.packages_id					 
				 WHERE packages.packages_id= '".$_GET["package"]."'
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



  <section class="w3l-grids-3 mt-5 pt-5" id="about">
    <div class="container py-md-5">
      <div class="row bottom-ab-grids align-items-center">
	   <div class="col-lg-6 bottom-ab-right mt-lg-0 mt-5">
          <img src="assets/images/acl.jpeg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 bottom-ab-left pr-lg-5">
          <h6 class="sub-title">For the Champion in you !</h6>
          <h3 class="hny-title">ABU CHAMPION's LEAGUE - Tennis</h3>
          <p class="my-3 pr-lg-4">fjermfkerj fkerjfkrej fknrekjfnkrejfnkrej kjenfkrejnkjfnme kjrfkrenf ekrnfrek jfnrekjf nerkfjnre fkjrnfkrej nfkjre nfkrejnfek fkje nfkjrenfkj ejfnrek fjne</p>
		  	<h4>Prizes Worth Rs 1,00,000 </h4>
          <input type="submit" class="btn btn-secondary dropdown-toggle mt-2" type="button" value="Coming Soon">			  		 
        </div>      
      </div>
    </div>
	</section>

<?php include("footer.php"); ?>