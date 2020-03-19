<?php
include 'db_conn.php'; 
?>

<html id="udd">
<head>
<meta charset="utf-8">
<title>My Trip</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
#search {
 background-image: url('img/searchicon.png');
 background-position: 7px 13px; 
  background-size: 20px 20px;
background-repeat: no-repeat;

}
#udd{
background-image:url('img/background.JPG');
  background-size: 700px 900px;
background-repeat: no-repeat;

}
   </style>
</head>

<body >
<center style="padding-top: 100px;">
 
   
<form method="post" action="mytripEN-2.php" >
 <label style="font-size: 20px;">Departure Station</label><br><br>
  <select  name="departure">
    
<?php
$stations=mysqli_query($conn,"select station_id,station_name from station ");
while($rows=mysqli_fetch_array($stations))
	{	?>
					
<option value="<?php echo $rows["station_id"]; ?>"  ><?php echo $rows["station_name"]; ?></option>

<?php  }  ?>
 </select><br><br>
     
<label style="font-size: 20px;">Arrival Station </label><br><br>
		 
 <select name="arrival" >
	        
<?php 

$stations=mysqli_query($conn,"select station_id,station_name from station ");
while($rows=mysqli_fetch_array($stations)){
?>
				
<option value="<?php echo $rows["station_id"]; ?>"><?php echo $rows["station_name"]; ?></option>

<?php }  ?>
</select><br><br>
  <input type="submit" id="search" value="  Search"/>

</form>
</br>
</center>
</body>
</html>
