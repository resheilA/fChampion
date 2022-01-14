<?php 
include("connect.php");
include("includes/header.php");
include("savedata.php");
?>	

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Create new package</h1><hr>
						<?php if(isset($error_mysql)){echo $error_mysql;}  ?><?php $packageid = rand(1000,999999999);?>
							<form method="post" enctype="multipart/form-data">							
							<input type="hidden" name="packages|packages_id" value="<?php echo $packageid; ?>" value="" class="form-control">
							<input type="hidden" name="packages_price|packages_id" value="<?php echo $packageid; ?>" value="" class="form-control">
							<input type="text" name="packages|packages_name" value="" placeholder="Enter package name" value="" class="form-control"></br>
							<textarea  class="form-control" name="packages|packages_about" placeholder="Enter summary about the packages in about 100 words"></textarea></br>	
							<textarea  class="form-control" name="packages|packages_tags" placeholder="Enter tags for the package"></textarea></br>	
							Upload a new image to change it :
							<input type="file" name="packages|packages_image|0|packages" id="fileToUpload">
							<hr>
							
							Choose a dietician
							<select class="form-control" name="packages|packages_dietician" >
							<option></option>
							<?php 
							
							///////////////////////////////////////////////
							// CHOOSE DIETICIAN //
							//////////////////////////////////////////////
							
							include("connect.php");
								
							$sql = "SELECT dieticians_id,dieticians_name FROM dieticians";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
								echo "<option value=".$row["dieticians_id"].">".$row["dieticians_name"]."</option>";
							  }
							} else {
							//  echo "0 results";
							}
							$conn->close();
							?>
							</select></br>							
							
							Choose a kit
							<select class="form-control" name="packages|packages_kits" >
							<option></option>
							<?php 
							
							///////////////////////////////////////////////
							// CHOOSE Kits //
							//////////////////////////////////////////////
							
							include("connect.php");
								
							$sql = "SELECT kits_id,kits_name FROM kits";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
								echo "<option value=".$row["kits_id"].">".$row["kits_name"]."</option>";
							  }
							} else {
							//  echo "0 results";
							}
							$conn->close();
							?>
							</select></br>					

							Choose a mentor
							<select class="form-control" name="packages|packages_mentor" >
							<option></option>
							<?php 
							
							///////////////////////////////////////////////
							// CHOOSE mentor //
							//////////////////////////////////////////////
							
							include("connect.php");
								
							$sql = "SELECT mentors_id,mentors_name FROM mentors";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
								echo "<option value=".$row["mentors_id"].">".$row["mentors_name"]."</option>";
							  }
							} else {
							//  echo "0 results";
							}
							$conn->close();
							?>
							</select></br>			
								
							
							Choose a venue
							<select class="form-control" name="packages|packages_venue" >
							<option></option>
							<?php 
							
							///////////////////////////////////////////////
							// CHOOSE DIETICIAN //
							//////////////////////////////////////////////
							
							include("connect.php");
								
							$sql = "SELECT venues_id,venues_name FROM venues";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
								echo "<option value=".$row["venues_id"].">".$row["venues_name"]."</option>";
							  }
							} else {
							//  echo "0 results";
							}
							$conn->close();
							?>
							</select></br>	

							
							Choose a trainer
							<select class="form-control" name="packages|packages_trainer" >
							<option></option>
							<?php 
							
							///////////////////////////////////////////////
							// CHOOSE Trainer //
							//////////////////////////////////////////////
							
							include("connect.php");
								
							$sql = "SELECT trainers_id,trainers_name FROM trainers";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
								echo "<option value=".$row["trainers_id"].">".$row["trainers_name"]."</option>";
							  }
							} else {
							//  echo "0 results";
							}
							$conn->close();
							?>
							</select></br>	
								
							
							Choose a physiotherapist
							<select class="form-control" name="packages|packages_physiotherapist" >
							<option></option>
							<?php 
							
							///////////////////////////////////////////////
							// CHOOSE DIETICIAN //
							//////////////////////////////////////////////
							
							include("connect.php");
								
							$sql = "SELECT physiotherapists_id,physiotherapists_name FROM physiotherapists";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
								echo "<option value=".$row["physiotherapists_id"].">".$row["physiotherapists_name"]."</option>";
							  }
							} else {
							//  echo "0 results";
							}
							$conn->close();
							?>
							</select></br>

							
							Choose a Sport
							<select class="form-control" name="packages|packages_sport" >
							<option value=""></option>
							<option value="Cricket">Cricket</option>
							<option value="Football">Football</option>
							<option value="Tennis">Tennis</option>
							</select></br>								
							
							<input type="number" name="packages_price|trainers_price" value="" placeholder="Enter trainer price" value="" class="form-control"></br>
							<input type="number" name="packages_price|physiotherapists_price" value="" placeholder="Enter physiotherapist price" value=""  onkeyup="sumall()" class="form-control"></br>
							<input type="number" name="packages_price|venues_price" value="" placeholder="Enter venue price" value="" class="form-control"  onkeyup="sumall()"></br>
							<input type="number" name="packages_price|kits_price" value="" placeholder="Enter kits price" value="" class="form-control"  onkeyup="sumall()"></br>
							<input type="number" name="packages_price|mentors_price" value="" placeholder="Enter mentors price" value="" class="form-control"  onkeyup="sumall()"></br>
							<input type="number" name="packages_price|dieticians_price" value="" placeholder="Enter dieticians price" value="" class="form-control"  onkeyup="sumall()"></br>
							<input type="number" name="packages_price|accommodation_price" value="" placeholder="Enter accommodation price" value="" class="form-control"  onkeyup="sumall()"></br>
							<input type="number" name="packages_price|packages_others" value="" placeholder="Enter others price" value="" class="form-control"  onkeyup="sumall()"></br>
							<input type="number" name="packages_price|packages_profit" value="" placeholder="Enter profit" value="" class="form-control" onkeyup="sumall()"></br>
							Total Price 
							<input type="number" name="packages_price|packages_price" class="form-control" ></br>
							Total Price With Accomodation
							<input type="number" name="packages_price|package_price_accom" class="form-control"  ></br>
							<input type="submit" value="Submit"  class="btn btn-primary">
							</form>
											
					</div>					
				</main>					
				<script>
					function sumall()
					{					
					var a = 0;
					var b = 0;
					var c = 0;
					var d = 0;
					var e = 0;
					var f = 0;
					var g = 0;
					var h = 0;
					var i = 0;					
					
					 a = parseInt(document.getElementsByName("packages_price|trainers_price")[0].value);
					 b = parseInt(document.getElementsByName("packages_price|venues_price")[0].value);
					 c = parseInt(document.getElementsByName("packages_price|kits_price")[0].value);
					 d = parseInt(document.getElementsByName("packages_price|mentors_price")[0].value);
					 e = parseInt(document.getElementsByName("packages_price|physiotherapists_price")[0].value);
					 f = parseInt(document.getElementsByName("packages_price|dieticians_price")[0].value);
					 g = parseInt(document.getElementsByName("packages_price|accommodation_price")[0].value);
					 h = parseInt(document.getElementsByName("packages_price|packages_others")[0].value);
					 i = parseInt(document.getElementsByName("packages_price|packages_profit")[0].value);
					
					total_accom = a + b + c + d + e + f + g + h + i;
					total = a + b + c + d + e + f + h + i;
					document.getElementsByName("packages_price|packages_price")[0].value = total;
					document.getElementsByName("packages_price|package_price_accom")[0].value = total_accom;
					
					}
				</script>
					
<?php 
include_once("includes/footer.php");
?>