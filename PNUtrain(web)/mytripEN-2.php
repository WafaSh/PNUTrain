<?php include 'headerLogout.php';?>

<html>
<head>
<meta charset="utf-8">
<title>My Trip</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="img/log.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<style>
.line{
	margin-top: 5px;
    padding: 20px;
    background-color: white;
    border: 2px solid #111;
	border-radius: 5px;
    width: 48%;
	font-size:30px;
}
</style>
<center>
<body>

<?php
include 'db_conn.php'; 

$departure= $_POST['departure'];
$arrival= $_POST['arrival'];

$departureName="SELECT station_name FROM station where station_id='$departure'";
$arrivalName="SELECT station_name FROM station where station_id='$arrival'";
echo "<p>Your Trip From << ";
echo FROM_To($departureName)." >> To << ";
FROM_To($arrivalName);
echo " >></p>";
if($departure==0 || $arrival==0){
	header("Location: mytripEN.php");
}
//echo "Your Trip From  ".$rows1['station_name']."  To  ".$rows2['station_name']."<br><br>";
if($departure != $arrival){


// -------------------- With Green Line --------------------- //
if($departure==11 && $arrival==12){
   echo "<br><div class=\"line\" style=\"color:green \">Green Line</Div><br><div class=\"line\">";
   echo "- F1 - F2 </div>";
}
else if($departure==12 || $departure==11){ //IF Departure is --- F1 OR F2 ---
$sqlF="SELECT station_name FROM station where station_id <=$departure  AND  station_id>10  ORDER BY station_id DESC ";
 echo "<br><div class=\"line\" style=\"color:green\">Green Line</Div><br>";
 
if($arrival==8){echo "<div class=\"line\">"; print_route($sqlF); echo "- A8 </div>";}
else if($arrival==9){echo "<div class=\"line\">";  print_route($sqlF); echo " - A8 </div></div><br> NEXT:<br><div class=\"line\"  style=\"color:blue\">Blue Line</Div><br> <div class=\"line\">- A8 - A9 </div> <br>";}
else if($arrival==10){echo "<div class=\"line\">"; print_route($sqlF); echo " - A8 </div><br> NEXT:<br><div class=\"line\"  style=\"color:blue\">Blue Line</Div><br><div class=\"line\"> - A8 - A9 - A10</div>  <br>";}
else if($arrival==1){echo "<div class=\"line\">"; print_route($sqlF); echo " - A8</div> <br> NEXT: <br><div class=\"line\"  style=\"color:blue\">Blue Line</Div><br><div class=\"line\" >- A8 - A9 - A10 - A1</div> <br>";}
else if($arrival==2){echo "<div class=\"line\">"; print_route($sqlF); echo " - A8</div> <br> NEXT: <br><div class=\"line\" style=\"color:blue\">Blue Line</Div><br><div class=\"line\" >- A8 - A9 - A10 - A1 - A2 </div><br>";}
else if($arrival==13 || $arrival==14){
	$sqlS_="SELECT station_name FROM station where station_id <=$arrival  AND  station_id>12  ORDER BY station_id ASC ";
	echo "<div class=\"line\">";
	print_route($sqlF);
	echo " - A8</div> <br> NEXT:<br><div class=\"line\" style=\"color:red \">Red Line</Div> <br><div class=\"line\"> - A8 - A7 - A6 - A5 ";
    print_route($sqlS_);
	echo "</div>";
}
else if($arrival<=7 && $arrival>=3){
	$sqlF_="SELECT station_name FROM station where station_id >=$arrival  AND  station_id<9  ORDER BY station_id DESC ";
	echo "<div class=\"line\">";
	print_route($sqlF);
    print_route($sqlF_);
	echo "</div>";
}


}

else if($arrival==12 || $arrival==11){ //IF Arrival is ---F1 OR F2 ---
	
  $sql2="SELECT station_name FROM station where station_id <=$arrival AND station_id>10 ORDER BY station_id ASC ";
   if($departure<=5){
   echo "<br> <div class=\"line\" style=\" color:green \">Green Line</Div><br><div class=\"line\">";
   $sql="SELECT station_name FROM station where station_id <=$departure ORDER BY station_id DESC ";
   print_route($sql);
   echo " - A10 - A9 ";
    print_route($sql2);
	echo "</div>";
                    }
					
   else if($departure==9 || $departure==10){
   echo "<br> <div class=\"line\" style=\" color:green \">Green Line</Div> <br><div class=\"line\">";
   $sql="SELECT station_name FROM station where station_id <=$departure AND  station_id>8 ORDER BY station_id DESC ";
   print_route($sql);
     print_route($sql2);
	 echo "</div>";
   }
   
     else if($departure==13 || $departure==14){
	echo "<br><div class=\"line\" style=\"color:red \">Red Line</Div> <br><div class=\"line\">";
    $sql="SELECT station_name FROM station where station_id >=$departure AND  station_id<15 ORDER BY station_id ASC ";
    print_route($sql);
    echo " - A4 </div><br> NEXT:<br><div class=\"line\" style=\"color:green \">Green Line</Div><br><div class=\"line\"> - A4 - A3 - A2 - A1 - A10 - A9 "; 
	print_route($sql2);
	   echo"</div>";
   }
   
   else if($departure>=6 && $departure<=8){
	echo "<br> <div class=\"line\" style=\"color:blue\">Blue Line</Div><br><div class=\"line\">";
   $sql="SELECT station_name FROM station where station_id >=$departure AND  station_id<10 ORDER BY station_id ASC ";
   print_route($sql);
    echo "</div><br> NEXT:<br><div class=\"line\" style=\"color:green\">Green Line</Div><br><div class=\"line\"> - A9 "; 
	  print_route($sql2);
	  echo "</div>";
   }

}
// -------------------- Red Line --------------------- //
if($departure==13 && $arrival==14){
	echo "<br><div class=\"line\" style=\"color:red \">Red Line</Div><br> <div class=\"line\">- S1 -S2 </div>";
}
else if($departure==14 && $arrival==13){
	echo "<br><div class=\"line\" style=\"color:red \">Red Line</Div><br><div class=\"line\"> - S2 -S1 </div>";
}
else if ($arrival!=11 && $arrival!=12  ){
 if($departure==13 || $departure==14  ){ //IF Departure is --- S1 OR S2 ---
$sqlS="SELECT station_name FROM station where station_id >=$departure  AND  station_id<15  ORDER BY station_id ASC ";
echo "<br><div class=\"line\" style=\"color:red \">Red Line</Div> <br>";
 
if($arrival<=4){
$sqlB="SELECT station_name FROM station where station_id <5 AND  station_id>=$arrival  ORDER BY station_id DESC ";	
echo "<div class=\"line\">";
print_route($sqlS); 
print_route($sqlB);
echo "</div>";}

else if($arrival==9){echo "<div class=\"line\">"; print_route($sqlS); echo " - A4 - A3 - A2 - A1 - A10 - A9 </div> <br>";}
else if($arrival==10){echo "<div class=\"line\">"; print_route($sqlS); echo" - A4 - A3 - A2 - A1 - A10 </div> <br>";}
else if($arrival>=5 && $arrival<=8){
	$sqlS_="SELECT station_name FROM station where station_id >4  AND  station_id<=$arrival ORDER BY station_id ASC ";
	echo "<div class=\"line\">";
	print_route($sqlS);
	echo " -A4</div> <br> Next:<br><div class=\"line\" style=\"color:blue\">Blue Line</Div> <br><div class=\"line\"> - A4 ";
    print_route($sqlS_);
	echo "</div>";
}
}
}
if($arrival==13 || $arrival==14){ //IF Arrival is ---S1 OR S2 ---
	
 $sql2="SELECT station_name FROM station where station_id >=$arrival AND station_id<15 ORDER BY station_id DESC ";
    if($departure<5){
	$sql="SELECT station_name FROM station where station_id >=$departure AND station_id<6 ORDER BY station_id ASC ";
	echo "<br><div class=\"line\" style=\"color:blue\">Blue Line</Div><br>";
		echo "<div class=\"line\">";
		print_route($sql);
	echo "</div><br> Next: <br><div class=\"line\" style=\"color:red \">Red Line</Div><br><div class=\"line\"> - A5  ";
	print_route($sql2); 
	echo "</div>";
}

    else if($departure<=10 && $departure>=4){
	echo "<br><div class=\"line\" style=\"color:red \">Red Line</Div><br>";
	$sql="SELECT station_name FROM station where station_id <=$departure AND station_id>4 ORDER BY station_id DESC ";
	echo "<div class=\"line\">";
	print_route($sql);
	print_route($sql2); 
	echo "</div>";
}


}
// -------------------- Blue Line And Purple Line --------------------- //
else if($departure>=8 && $departure<11 && $arrival>=1 && $arrival<4 ){
	$sql="SELECT station_name FROM station where station_id<11  AND  station_id>=$departure ORDER BY station_id ASC ";
	$sql2="SELECT station_name FROM station where station_id >=1  AND  station_id<=$arrival ORDER BY station_id ASC ";
	echo "<br><div class=\"line\" style=\"color:blue\">Blue Line</Div><br>";
		echo "<div class=\"line\">";
		print_route($sql);
		print_route($sql2); 
	echo "</div>";

}
else if($departure==7 && $arrival==1 ){
	echo "<br><div class=\"line\" style=\"color:blue\">Blue Line</Div><br>";
		echo "<div class=\"line\"> - A7 - A8 - A9 - A10 - A1</div>";

}
else if($departure>1 && $departure<4  && $arrival<11 && $arrival>7){

$sql="SELECT station_name FROM station where station_id <=$departure ORDER BY station_id DESC";
$sql2="SELECT station_name FROM station where station_id >=$arrival AND station_id<11 ORDER BY station_id DESC";
echo "<br> <div class=\"line\" style=\"color:#800080\">Purple Line</Div><br><div class=\"line\">";	
print_route($sql);	
print_route($sql2);	
echo "</div>";	
}
else if($departure==1  && $arrival<11 && $arrival>=6){

$sql2="SELECT station_name FROM station where station_id >=$arrival AND station_id<11 ORDER BY station_id DESC";
echo "<br> <div class=\"line\" style=\"color:#800080\">Purple Line</Div><br><div class=\"line\"> - A1 ";	
print_route($sql2);	
echo "</div>";	
}
 else if($departure < $arrival){
if($departure<=10 && $arrival<=10  ){
$sql="SELECT station_name FROM station where station_id BETWEEN $departure AND $arrival ORDER BY station_id ASC";
echo "<br> <div class=\"line\" style=\"color:blue\">Blue Line</Div><br><div class=\"line\">";	
print_route($sql);	
echo "</div>";
}
}


else if($departure > $arrival){
if($departure<=10 && $arrival<=10 && $arrival!=1 &&  $arrival!=2 &&  $arrival!=3){
$sql="SELECT station_name FROM station where station_id BETWEEN $arrival AND $departure ORDER BY station_id DESC ";
echo "<br><div class=\"line\" style=\"color:#800080\">Purple Line</Div><br><div class=\"line\">";
print_route($sql);	
echo "</div>";	

}
else if($departure!=8 && $departure!=9 && $departure!=10  && $arrival==1 ||  $arrival==2 ||  $arrival==3){
$sql="SELECT station_name FROM station where station_id BETWEEN $arrival AND $departure ORDER BY station_id DESC ";
echo "<br><div class=\"line\" style=\"color:#800080\">Purple Line</Div><br><div class=\"line\">";
print_route($sql);	
echo "</div>";	
}
}


}else{
	echo " Please Check Your Selecting And Select Stations Again..";
}

function print_route($sql){ 
include 'db_conn.php'; 
$stations=mysqli_query($conn,$sql);

     while($rows=mysqli_fetch_array($stations)){
     echo " - ".$rows["station_name"];
}
}
function FROM_To($sql){ 
include 'db_conn.php'; 
$stations=mysqli_query($conn,$sql);
     while($rows=mysqli_fetch_array($stations)){
    echo $rows["station_name"]."</div>";
}
}
 include "footer.html";?>