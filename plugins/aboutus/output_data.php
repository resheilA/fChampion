<?php 
$sql = "SELECT * FROM plug_about_us where domain_id='".$domain_id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $domain_id = $row["domain_id"];
	$heading = $row["heading"];
	$sub_heading = $row["sub_heading"];
	$content = $row["content"];	
	$image_bg = $row["image_bg"];	
	$rows[]=$row;
  }
} else {
  echo "0 results";
}

?>
