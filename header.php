<?php 
session_start();
if(isset($_SESSION["player_id"]))
{	
	$login = 1;			
}
else
{
	$login = 0;
}

?>
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Champion.in<?php if(isset($rows[0]["packages_name"])){echo " - ".$rows[0]["packages_name"];} ?></title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
</head>

<body>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        <!----
		<h1><a class="navbar-brand mr-lg-5" href="index.html">
            Champ<span>i</span>on
          </a></h1>
		 --->
      <a class="navbar-brand" href="index.php">
          <img src="assets/images/logo.png" alt="champion logo" title="Your logo" style="width:305px;" />
      </a> 
	    <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto">		  		
				
			<li class="nav-item mt-2">
			<div class="dropdown">
			  <button class="btn btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				About
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="about.php">About</a>
				<a class="dropdown-item" href="team.php">Team</a>
				<a class="dropdown-item" href="ouratheletes.php">Our Athletes</a>								
			  </div>
			</div>
			</li>
						
			<li class="nav-item mt-2">
			<div class="dropdown">
			  <button class="btn btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Champion's Club
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="championclub.php">CA Pariwar Club</a>				
			  </div>
			</div>
			</li>
			
			
			<li class="nav-item mt-2">
			<div class="dropdown">
			  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Sports
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="listcourse.php?sport=kickboxing">Kick-boxing</a>
				<a class="dropdown-item" href="listcourse.php?sport=tennis">Lawn Tennis</a>
				<a class="dropdown-item" href="listcourse.php?sport=cricket">Cricket</a>
				<a class="dropdown-item" href="listcourse.php?sport=football">Football</a>
			  </div>
			</div>
			</li>
		
			
            <li class="nav-item mt-2">         
			  <div class="dropdown">
			  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Events
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="acltennis.php">ACL - Tennis</a>
				<a class="dropdown-item" href="aclkickboxing.php">ACL - Kick-boxing</a>				
			  </div>
			</div>
			</li>

             <li class="nav-item">         
			  <?php 
			  if($login == 1)	
			  {
			  echo '<a class="nav-link" href="viewprofile.php?player='.$_SESSION['player_id'].'">View Profile</a></li>
					<li class="nav-item">         
					  <a class="nav-link" href="logout.php">Logout</a>
					</li>';
			  }
			  else
			  {
			  echo '<a class="nav-link" href="login.php">Login</a></li>
			  ';
			  }
			  ?>
			
		
            <div class="search-right">
              <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
              <!-- search popup -->
              <div id="search" class="pop-overlay">
                <div class="popup">

                  <form action="#" method="GET" class="search-box">
                    <input type="search" placeholder="Enter Keyword" name="search" required="required" autofocus="">
                    <button type="submit" class="btn">Search Now</button>
                  </form>

                </div>
                <a class="close" href="#close">×</a>
              </div>
              <!-- /search popup -->
            </div>
          </ul>
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
 