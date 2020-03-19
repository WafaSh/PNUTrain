
<?php include "db_conn.php"; ?>
<html  id="udd">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>أين كليتي</title>
<link rel="shortcut icon" href="img/log.png" />
</head>
<style>
    .size{
        font-size: 25px;
        color: #aa3e3e;
        
    }
	#udd{
background-image:url('img/background.JPG');
  background-size: 700px 900px;
background-repeat: no-repeat;
}
    </style>
<body>
	<?php 
	
$station="";
   $Nstation="";
   $nn=" ";
  

$sql = "SELECT ID ,Station_name ,NeStation FROM college WHERE ID=".$_GET['FindMyCollege']."";
$results = mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($results)){
   $ef=$row['ID'];
   if( $ef =='10'){
    $station= "<p>".$row['Station_name']." و A7 </p>";
   $Nstation="<p>".$row['NeStation']. "و A4 </p>";
   
   break;
   }
   $station= "<p>".$row['Station_name']." </p>";
   $Nstation="<p>".$row['NeStation']." </p>";

}



?>
<center>
<br/>
<br/>
<br/>
<p class="size"  >:المحطة القريبة لهذه الكلية  </p>
<?php echo  $station ?>
<?php echo $Nstation ?>


<br/>
<br/>
<br/>
</center>

</body>
</html>
