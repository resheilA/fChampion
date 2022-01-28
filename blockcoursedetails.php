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

<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
 <!-- //header -->
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
		  <form method="post" action="payment.php">		
			<?php 
			 if($rows[0]["package_price_accom"] != $rows[0]["packages_price"])
			 {
				 echo '
		  	<select name="choosepack" class="form-control">			
			<option value="1"><h4>Rs '.$rows[0]["packages_price"].' / per month without accommodation</h4></option>			
			<option value="2"><h4>Rs '.$rows[0]["package_price_accom"].' / per month with accommodation</h4></option>
			</select>         ';
			 }
			 else
			 {
				 echo '<h4>Rs '.$rows[0]["packages_price"].' / per month</h4>';
			 }
			?> 
		  <input type="hidden" name="packageid"	value="<?php echo $_GET["package"]; ?>">
		  <input type="hidden" name="playerid"	value="<?php echo $_SESSION["player_id"]; ?>">
		  <input type="submit" class="btn btn-secondary dropdown-toggle mt-2" type="button" value="Register today">			  
		  </form>	  
        </div>      
      </div>
    </div>
	</section>
<!-- /call to action 5 -->
  <section class="w3l-features14">  
    <div class="w3l-feature-6-main py-5" style='background-image: url("<?php echo "admin/".$rows[0]["venues_image"]; ?>")'>
	 <div class="header-section text-center">
       
      </div>
      <div class="container">
        <div class="wrapper-max">          
          <div class="grid mt-lg-4">		  
            <div class="w3l-feature-6-gd">			
              <!---- 
			  <div class="icon"><img src="<?php echo "admin/".$rows[0]["venues_image"]; ?>" class="img-fluid p-2"  style="max-height:400px;" alt="">          
			  </div>
			  --->
			  <div id="demo" class="carousel slide" data-ride="carousel" data-interval="2500">

				  <!-- Indicators -->
				  <ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				  </ul>
				  
				  <!-- The slideshow -->
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img src="<?php echo "admin/".$rows[0]["venues_image"]; ?>" alt="Los Angeles" width="100%">
					</div>
					<div class="carousel-item">
					  <img src="<?php echo "admin/".$rows[0]["venues_image"]; ?>" alt="Chicago" width="100%">
					</div>
					<div class="carousel-item">
					  <img src="<?php echo "admin/".$rows[0]["venues_image"]; ?>" alt="New York" width="100%" >
					</div>
				  </div>
				  
				    <!-- Left and right controls -->
					  <a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					  </a>
					  <a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					  </a>
			  </div>
              <div class="w3l-feature-6-gd-info">               
              </div>
            </div>
            <div class="w3l-feature-6-gd">
              <div class="w3l-feature-6-gd-info">	
       <h6 class="sub-title">Where will you be trained ?</h6>			  
                <h1 class="hny-title two"><?php echo $rows[0]["venues_name"]; ?></h1>                  
					<h5>
				<?php 
				$tags = explode(",",$rows[0]["venues_tags"]); 
				
				foreach($tags as $tag )
				{
					echo '<span class="badge badge-secondary m-1">'.$tag.'</span>';
				}
				
				?>
				</h5>
				<p class="pr-lg-5"><?php echo $rows[0]["venues_about"]; ?>				
				
				</p>
              </div>
            </div>            
        </div>
      </div>
    </div>
  </section>
  <!--/-->
  
  


 <!--/services-->
  <section class="w3l-services1">
    <div id="content-with-photo4-block" class="py-5">
      <div class="container py-md-5">
        <div class="header-section text-center">
          <h6 class="sub-title"> Who Will Train You ?</h6>
          <h3 class="hny-title">
            <h2 class="title"><span class="fa fa-star" aria-hidden="true"></span> OUR CHAMPION TEAM <span class="fa fa-star" aria-hidden="true"></span></h2> 
          </h3>
        </div>
        <div class="cwp4-two row">
          <div class="cwp4-image col-lg-4 col-md-6 mt-4">
            <div class="grids4-info"><center>
              <a href="#"><img src="<?php echo "admin/".$rows[0]["trainers_image"]; ?>" class="img-fluid rounded-circle" style="width:12em;height:12em;" alt=""></a>
              <div class="info-bg">
                <h5><a href="#"><?php echo $rows[0]["trainers_name"]; ?></a></h5>
				<span class="price">Champion Trainer</span> <button data-toggle="modal" data-target="#trainerModal" class="btn-secondary rounded" style="height:30px;"><span class="fa fa-info"></span></button>
                <p><?php echo $rows[0]["trainers_about"]; ?><br>					
				<h5>		
						<?php 
						$tags = explode(",",$rows[0]["trainers_tags"]); 
						
						foreach($tags as $tag )
						{
							echo '<span class="badge badge-secondary m-1">'.ucwords($tag).'</span>';
						}
						
						?>
						
				</h5>		              
				</p>				
              </div>
            </div>
          </div>
        
           <div class="cwp4-image col-lg-4 col-md-6 mt-4">
            <div class="grids4-info"><center>
              <a href="#"><img src="<?php echo "admin/".$rows[0]["physiotherapists_image"]; ?>" class="img-fluid rounded-circle" style="width:12em;height:12em;"  alt=""></a>
              <div class="info-bg">
                <h5><a href="#"><?php echo $rows[0]["physiotherapists_name"]; ?></a></h5>
                <span class="price">Champion Physiotherapist</span> <button class="btn-secondary rounded" style="height:30px;"><span class="fa fa-info"></span></button>
				
                <p><?php echo mb_strimwidth($rows[0]["physiotherapists_about"], 0, 220, '...'); ?>
					<u><a href="">Know More</a></u>
					</p>
				<h5>		
						<?php 
						$tags = explode(",",$rows[0]["physiotherapists_tags"]); 
						
						foreach($tags as $tag )
						{
							echo '<span class="badge badge-secondary m-1">'.ucwords($tag).'</span>';
						}
						
						?>
				</h5>		                
              </div>
            </div>
          </div>			
			<div class="cwp4-image col-lg-4 col-md-6 mt-4">
				<div class="grids4-info"><center>
				  <a href="#"><img src="<?php echo "admin/".$rows[0]["dieticians_image"]; ?>" class="img-fluid rounded-circle" style="width:12em;height:12em;" alt=""></a>
				  <div class="info-bg">
					<h5><a href="#"><?php echo $rows[0]["dieticians_name"]; ?></a></h5>
					<span class="price">Champion Dietician</span> <button class="btn-secondary rounded" style="height:30px;"><span class="fa fa-info"></span></button>
					<p><?php echo mb_strimwidth($rows[0]["dieticians_about"], 0, 220, '...'); ?>
					<u><a href="">Know More</a></u>
					</p>
					<h5>		
							<?php 
							$tags = explode(",",$rows[0]["dieticians_tags"]); 
							
							foreach($tags as $tag )
							{
								echo '<span class="badge badge-secondary m-1">'.ucwords($tag).'</span>';
							}
							
							?>
					</h5>		                
				  </div>
				</div>
			  </div>
			  
</section> 

<section class="w3l-content-6" id="why">
    <div class="container py-lg-5">
	<div class="py-lg-5"><center>
 <h6 class="sub-title"> Under the mentorship </h6>
          <h3 class="hny-title">
            <h2 class="title"><span class="fa fa-star" aria-hidden="true"></span> OUR STAR ATHLETE <span class="fa fa-star" aria-hidden="true"></span></h2> 
          </h3>
			</div>
      <div class="row">      
	   <div class="col-lg-12 content-6-right mt-lg-0 mt-4"><center>
	   <img src="<?php echo "admin/".$rows[0]["mentors_image"]; ?>" class="img-fluid rounded-circle"  style="height:12em;width:12em;" alt="">          		  
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
 <a href="#url" class="btn btn-style btn-primary mb-4">Read More</a>
         		  
        </div>       	
      </div>
    </div>
</section>    


<!-----------------------KIT -------------------------->

<section class="w3l-grids-3 py-5" id="about">
    <div class="container py-md-5">
      <div class="row bottom-ab-grids align-items-center">
        <div class="col-lg-6 bottom-ab-left pr-lg-5">
          <h6 class="sub-title">Be A Professional</h6>
          <h3 class="hny-title">
           <?php echo $rows[0]["kits_name"]; ?></h3>
          <p class="my-3 pr-lg-4"><?php echo $rows[0]["kits_about"]; ?></p>
          <a href="about.html" class="btn btn-style btn-secondary mt-4">Read More</a>
        </div>
        <div class="col-lg-6 bottom-ab-right mt-lg-0 mt-5">
          <img src="<?php echo "admin/".$rows[0]["kits_image"]; ?>" class="img-fluid" alt="">
        </div>

      </div>
    </div>
  </section>






<section class="w3l-cta5">
    <div class="call-to-action-5 py-5">
      <div class="container py-lg-5">
        <div class="call-to-action-5-content text-center">
          <h3 class="hny-title">The better way to buy real estate.</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sapiente commodi maiores ullam est
            nostrum aliquam!</p>
          <div class="three-grids row">
            <div class="col-lg-4 col-md-6 grid mt-md-0 mt-4">
              <div class="icon">
                <span class="fa fa-rebel" aria-hidden="true"></span>
              </div>
              <div class="icon-info">
                <h4><a href="#">Design</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sapiente commodi maiores ullam est
                  nostrum aliquam!</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 grid mt-md-0 mt-4">
              <div class="icon">
                <span class="fa fa-line-chart" aria-hidden="true"></span>
              </div>
              <div class="icon-info">
                <h4><a href="#">Strategy</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sapiente commodi maiores ullam est
                  nostrum aliquam!</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 grid">
              <div class="icon">
                <span class="fa fa-rocket" aria-hidden="true"></span>
              </div>
              <div class="icon-info">
                <h4><a href="#">Marketing</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sapiente commodi maiores ullam est
                  nostrum aliquam!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<section class="w3l-cta4 mb-5">
      <div class="container">
        <div class="ab-section text-center">          
          <h2 class="title"><button class="btn-secondary p-4">Register Now !</button></h2>    
        </div>
      </div>
  </section>
  <!--//grids-->
  
  <!-- The Modal -->
<div class="modal" id="trainerModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
		<h1 class="sub-title">Trainer Details</h1>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <div class="cwp4-image col-lg-12 col-md-6 mt-4">
            <div class="grids4-info"><center>
              <a href="#"><img src="<?php echo "admin/".$rows[0]["trainers_image"]; ?>" class="img-fluid rounded-circle" style="width:8em;height:8em;" alt=""></a>
              <div class="info-bg">
                <h5><a href="#"><?php echo $rows[0]["trainers_name"]; ?></a></h5>
				<span class="price">Champion Trainer</span>                
              </div>
            </div>
          </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

 <?php include("footer.php"); ?>