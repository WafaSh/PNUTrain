<?php
$DB_USER="root";
$DB_PASS="";
$DB_HOST="localhost";
$DB_Name="arriva";
$mysqli=new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_Name);
if(mysqli_connect_errno()){
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}


 
 $id  = $_GET['id'];

 $sql = "SELECT Station_name ,NeStation FROM college WHERE id='".$id."'";

 
 $r = mysqli_query($mysqli,$sql);

    while($row=mysqli_fetch_array($r)){

 $flag["Station_name"]=$row['Station_name'];
 $flag["NeStation"]=$row['NeStation'];
 $flag["starion_name"]=" and A7";
 $flag["nestation"]=" and A4";
  // echo $row['NeStation'];
}

 print(json_encode($flag));

// echo json_encode(array("result"=>$result));
 
 mysqli_close($mysqli);
 
 
?>