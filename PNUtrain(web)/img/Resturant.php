
<? include('header.php') ?>

 <div class="left_content">
 
       <div class="title_box">Restaurant</div>

 
    <div class="center_content">
      <div class="center_title_bar"> View Restaurant </div>
   
    
<label> Enter Your Station</label>
<input  type="text" name="RestaurantName">
       
	   <br> <br>
       
		 <br><br>

		 
		 <label>Choose Restaurant Name: </label>
		 
		 <select name="selectR">
		  <option selected="selected">-- Choose Restaurant -- </option>
				       <?
      	include("RestaurantDB.php");
		$query1 = mysql_query("Select * From `Restaurant` "); 
		while ($Restaurant = @mysql_fetch_array($query1)){
					$Restaurantname= $Restaurant['RName'];
					$RStation= $Restaurant['RStation'];	
				echo  "<option value= $RStation>$RName</option>";
				}
				?>
		 </select>
		 <br><br>
	   <label> Show Menu:</label>
<br>
<br>

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 
      </form>
	   <?php
if(isset($_GET['msg']))
{
	$err = $_GET['msg'];
	if($err == 1)echo "<script> window.alert('This is Restaurant near your location');</script>";
	
}

?>
<br>
<hr>

	   </div>
  
    </div>
<? include('footer.php'); ?>
 