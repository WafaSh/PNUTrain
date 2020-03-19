<?php 

session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}

?>
<html>
<head>
<link rel="stylesheet" href="style/style.css" type="text/css" media="all" />
<head>



        <?php
			if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
				include 'user.php';
				$user = new User();
				$conditions['where'] = array(
					'id' => $sessData['userID'],
				);
				$conditions['return_type'] = 'single';
				$userData = $user->getRows($conditions);
			
		?>

<header>
<nav>
<div id="header">
PNU Train
<br/>
 <a href="userAccount.php?logoutSubmit=1" class="logout">Logout</a>
</div>
<ul >
 <li><a href="EN.php">Home</a></li>
  <li><a href="SignIn.php">Sign In</a></li>
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">More</a>
    <div class="dropdown-content">
      <a href="PNUMap.php">PNU Map</a>
      <a href="#">Aboute Train</a>
	  <a href="#">Rasturant Info</a>
 </div>

<li><a href="HomeAR.php">ع</a></li>

 <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">MERCH</a>
</div>
  </li>
</ul>
</nav>
</header>

<?php  } else {include "header.html"; }  ?>