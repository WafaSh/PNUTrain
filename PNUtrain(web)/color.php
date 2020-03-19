<?php
include "db_conn.php";

function alertTime($sql){ 
include 'db_conn.php'; 
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
return $row['Time'];
}
function arrival($sql){ 
include 'db_conn.php'; 
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
echo $row['Path'];
}

function departure($sql){ 
include 'db_conn.php'; 
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
echo " ,NEXT: ".$row['Path']." [ ".$row['Time']." ] ".$row['Station'];
}
date_default_timezone_set('Asia/Riyadh');	

//--            --      A1      --     --//
$aa1_1="select Time from arrivaltrain where Time=CURTIME() and Path!='Blue' and Station='A1'";
$aa1_2="select Time from arrivaltrain where Time=CURTIME() and Path='Blue' and Station='A1'";

$aa1_1d="select Time from departure where Time=CURTIME() and Path!='Blue' and Station='A1'";
$aa1_2d="select Time from departure where Time=CURTIME() and Path='Blue' and Station='A1'";



//--            --      A2      --     --//
$aa2_1="select Time from arrivaltrain where Time=CURTIME() and Path!='Blue' and Station='A2'";
$aa2_2="select Time from arrivaltrain where Time=CURTIME() and Path='Blue' and Station='A2'";

$aa2_1d="select Time from departure where Time=CURTIME() and Path!='Blue' and Station='A2'";
$aa2_2d="select Time from departure where Time=CURTIME() and Path='Blue' and Station='A2'";


//--            --      A3      --      --//
$aa3_1="select Time from arrivaltrain where Time=CURTIME() and Path!='Blue' and Station='A3'";
$aa3_2="select Time from arrivaltrain where Time=CURTIME() and Path='Blue' and Station='A3'";


$aa3_1d="select Time from departure where Time=CURTIME() and Path!='Blue' and Station='A3'";
$aa3_2d="select Time from departure where Time=CURTIME() and Path='Blue' and Station='A3'";


//--            --      A4      --       --//
$aa4_1="select Time from arrivaltrain where Time=CURTIME() and Path!='Blue' and Station='A4'";
$aa4_2="select Time from arrivaltrain where Time=CURTIME() and Path='Blue' and Station='A4'";

$aa4_1d="select Time from departure where Time=CURTIME() and Path!='Blue' and Station='A4'";
$aa4_2d="select Time from departure where Time=CURTIME() and Path='Blue' and Station='A4'";


//--            --      A5      --     --//
$aa5_1="select Time from arrivaltrain where Time=CURTIME() and Path!='Blue' and Station='A5'";
$aa5_2="select Time from arrivaltrain where Time=CURTIME() and Path='Blue' and Station='A5'";

$aa5_1d="select Time from departure where Time=CURTIME() and Path!='Blue' and Station='A5'";
$aa5_2d="select Time from departure where Time=CURTIME() and Path='Blue' and Station='A5'";


//--            --      A6      --       --//
$aa6_1="select Time from arrivaltrain where Time=CURTIME() and Path!='Blue' and Station='A6'";
$aa6_2="select Time from arrivaltrain where Time=CURTIME() and Path='Blue' and Station='A6'";

$aa6_1d="select Time from departure  where Time=CURTIME() and Path!='Blue' and Station='A6'";
$aa6_2d="select Time from departure  where Time=CURTIME() and Path='Blue' and Station='A6'";


//--            --      A7      --        --//
$aa7_1="select Time from arrivaltrain where Time=CURTIME() and Path!='Blue' and Station='A7'";
$aa7_2="select Time from arrivaltrain where Time=CURTIME() and Path='Blue' and Station='A7'";

$aa7_1d="select Time from departure where Time=CURTIME() and Path!='Blue' and Station='A7'";
$aa7_2d="select Time from departure where Time=CURTIME() and Path='Blue' and Station='A7'";


//--            --      A8      --       --//
$aa8_1="select Time from arrivaltrain where Time=CURTIME() and Path!='Blue' and Station='A8'";
$aa8_2="select Time from arrivaltrain where Time=CURTIME() and Path='Blue' and Station='A8'";

$aa8_1d="select Time from departure where Time=CURTIME() and Path!='Blue' and Station='A8'";
$aa8_2d="select Time from departure where Time=CURTIME() and Path='Blue' and Station='A8'";

//--            --      A9      --       --//
$aa9_1="select Time from arrivaltrain where Time=CURTIME() and Path!='Blue' and Station='A9'";
$aa9_2="select Time from arrivaltrain where Time=CURTIME() and Path='Blue' and Station='A9'";

$aa9_1d="select Time from departure where Time=CURTIME() and Path!='Blue' and Station='A9'";
$aa9_2d="select Time from departure where Time=CURTIME() and Path='Blue' and Station='A9'";

//--            --      A10      --       --//
$aa10_1="select Time from arrivaltrain where Time=CURTIME() and Path!='Blue' and Station='A10'";
$aa10_2="select Time from arrivaltrain where Time=CURTIME() and Path='Blue' and Station='A10'";

$aa10_1d="select Time from departure where Time=CURTIME() and Path!='Blue' and Station='A10'";
$aa10_2d="select Time from departure where Time=CURTIME() and Path='Blue' and Station='A10'";


//--            --      F1      --       --//

$aF1="select Time from arrivaltrain where Time=CURTIME() and Path='Green' and Station='F1'";
$aF1d="select Time from departure where Time=CURTIME() and Path='Green' and Station='F1'";

//--            --      F2      --       --//
$aF2="select Time from arrivaltrain where Time=CURTIME() and Station='F2'";
$aF2d="select Time from departure where Time=CURTIME() and Station='F2'";

//--            --      S1      --       --//
$aS1="select Time from arrivaltrain where Time=CURTIME() and Path='Red' and Station='S1'";
$aS1d="select Time from departure where Time=CURTIME() and Path='Red' and Station='S1'";

//--            --      S2      --       --//
$aS2="select Time from arrivaltrain where Time=CURTIME() and Path='Red' and Station='S2'";
$aS2d="select Time from departure where Time=CURTIME() and Path='Red' and Station='S2'";


//////ToolTip///////////Tooltip///////////////Tooltip////////////////Tooltip//////////////
//////ToolTip///////////Tooltip///////////////Tooltip////////////////Tooltip//////////////

//--------------------------A1 Station  -------------------------->
$A1_1a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path!='Blue' and Station='A1'";
$A1_1d="SELECT Time,Path,Station FROM  arrivaltrain where Time >CURTIME() and Path!='Blue' and  Station='A10'" ;  


 
$A1_2a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path='Blue' and Station='A1'";
$A1_2d="SELECT Time,Path,Station FROM  arrivaltrain where Time >CURTIME() and Path='Blue' and  Station='A2'" ;  

//-------------------------A2 Station NOT Blue -------------------------->
 
$A2_1a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path!='Blue' and Station='A2'";
$A2_1d="SELECT Time,Path,Station FROM  arrivaltrain where Time >CURTIME() and Path!='Blue' and  Station='A1'" ; 

$A2_2a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path='Blue' and Station='A2'";
$A2_2d="SELECT Time,Path,Station FROM  arrivaltrain where Time >CURTIME() and Path='Blue' and  Station='A3'" ;

//--------------------------A3 Station-------------------------->

$A3_1a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path!='Blue' and Station='A3'";
$A3_1d="SELECT Time,Path,Station FROM  arrivaltrain where Time >CURTIME() and Path!='Blue' and  Station='A2'" ;

$A3_2a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path='Blue' and Station='A3'";
$A3_2d="SELECT Time,Path,Station FROM  arrivaltrain where Time >CURTIME() and Path='Blue' and  Station='A4'" ;

//-------------------------A4 Station-------------------------->

$A4_1a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path!='Blue' and Station='A4'";
$A4_1d="SELECT Time,Path,Station FROM  departure where Time >CURTIME() Path!='Blue' and  Station='A3'" ;

$A4_2a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path='Blue' and Station='A4'";
$A4_2d="SELECT Time,Path,Station FROM  arrivaltrain where Time >CURTIME() and Path='Blue'  and  Station='A5'" ;


//-------------------------A5 Station-------------------------->

$A5_1a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path!='Blue' and Station='A5'";
$A5_1d="SELECT Time,Path,Station FROM  arrivaltrain where Time >CURTIME() and Path!='Blue' and Station IN ('A4','S2')" ; 



$A5_2a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path='Blue' and Station='A5'";
$A5_2d="SELECT Time,Path,Station FROM arrivaltrain where Time >CURTIME() and Path='Blue' and  Station='A6'" ;



///-------------------------A6 Station -------------------------->

 
$A6_1a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path='Blue' and Station='A6'";
$A6_1d="SELECT Time,Path,Station FROM   arrivaltrain where Time >CURTIME() and Path='Blue'  and  Station='A7'" ;


$A6_2a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path!='Blue' and Station='A6'";
$A6_2d="SELECT Time,Path,Station FROM   arrivaltrain where Time >CURTIME() and Path!='Blue' Station='A5'" ;


//--------------------------A7 Station  -------------------------->

$A7_1a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path='Blue' and Station='A7'";
$A7_1d="SELECT Time,Path,Station FROM   arrivaltrain where Time >CURTIME() and Path='Blue' and  Station='A8'" ;


$A7_2a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path!='Blue' and Station='A7'";
$A7_2d="SELECT Time,Path,Station FROM   arrivaltrain where Time >CURTIME() and Path!='Blue' and  Station='A6'" ;


//--------------------------A8 Station -------------------------->


$A8_1a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path='Blue' and Station='A8'";
$A8_1d="SELECT Time,Path,Station FROM   arrivaltrain where Time >CURTIME() and Path='Blue'  and  Station='A9'" ;




$A8_2a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path!='Blue' and Station='A8'";
$A8_2a="SELECT Time,Path,Station FROM   arrivaltrain where Time >CURTIME() and  Station='A7'" ;



//-------------------------A9 Station  -------------------------->


$A9_1a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path='Blue' and Station='A9'";
$A9_1d="SELECT Time,Path,Station FROM  arrivaltrain where Time >CURTIME() and Path='Blue' and  Station='A10'" ;


$A9_2a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path!='Blue' and Station='A9'";
$A9_2d="SELECT Time,Path,Station FROM  arrivaltrain where Time >CURTIME() and Path!='Blue' and  Station IN ('A8','F1') " ;





//--------------------------A10 Station  -------------------------->

 
$A10_1a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path='Blue' and Station='A10'";
$A10_1d="SELECT Time,Path,Station FROM  arrivaltrain where Time >CURTIME() and Path='Blue' and  Station='A1'" ;



$A10_2a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path!='Blue' and Station='A10'";
$A10_2d="SELECT Time,Path,Station FROM arrivaltrain where Time >CURTIME() and Path!='Blue' and  Station='A9'" ;




//--------------------------F1 Station-------------------------->

$F1a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path='Green' and Station='F1'";
$F1d="SELECT Time,Path,Station FROM  arrivaltrain where Time >CURTIME() and Path='Green' and Station IN ('F2','A8')" ; 



//--------------------------F2 Station-------------------------->

$F2a="SELECT Path FROM  arrivaltrain where Time = CURTIME()  and Station='F2'";
$F2d="SELECT Time,Path,Station FROM  arrivaltrain where Time >CURTIME()  and Station='F1'" ;


//-------------------------S1 Station-------------------------->

$S1a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path='Red' and Station='S1'";
$S1d="SELECT Time,Path,Station FROM  arrivaltrain where Time >CURTIME() and Station='S2'" ;

//-------------------------S2 Station-------------------------->
 
$S2a="SELECT Path FROM  arrivaltrain where Time = CURTIME() and Path='Red' and Station='S2'";
$S2d="SELECT Time,Path,Station FROM  arrivaltrain where Time >CURTIME() and Path='Red' and Station IN ('S1','A4')" ; 


####################################0000000000000 A1 000000000000000#######################################
if (date('H:i:s') <= alertTime($aa1_1)){?>
<script>document.getElementById("A1-1").style.backgroundColor ="#ff820d";
        document.getElementById("A1-1").title="<?php arrival($A1_1a); departure($A1_1d); ?>";
</script>
<?php } else if (date('H:i:s') <= alertTime($aa1_1d)){?>
<script>document.getElementById("A1-1").style.backgroundColor ="#e4e5de";
        document.getElementById("A1-1").title="";
</script>
<?php }

	if (date('H:i:s') <= alertTime($aa1_2)){?>
<script>document.getElementById("A1-2").style.backgroundColor ="#ff820d";
        document.getElementById("A1-2").title="<?php arrival($A1_2a); departure($A1_2d); ?>";
 </script>
	<?php }else if (date('H:i:s') <= alertTime($aa1_2d)) {?>
	<script>document.getElementById("A1-2").style.backgroundColor ="#e4e5de";
	        document.getElementById("A1-2").title="";
	</script>
	<?php }
####################################0000000000000 A2 000000000000000#######################################	

	
	if (date('H:i:s') <= alertTime($aa2_1)){?>
<script>document.getElementById("A2-1").style.backgroundColor ="#ff820d";
         document.getElementById("A2-1").title="<?php arrival($A2_1a); departure($A2_1d); ?>";
  </script>
	<?php }else if (date('H:i:s') <= alertTime($aa2_1d)){ ?>
	<script>document.getElementById("A2-1").style.backgroundColor ="#e4e5de";
	       document.getElementById("A2-1").title="";
</script>
	
	<?php } 
	

	if (date('H:i:s') <= alertTime($aa2_2)){?>
<script>document.getElementById("A2-2").style.backgroundColor ="#ff820d";
        document.getElementById("A2-2").title="<?php arrival($A2_2a); departure($A2_2d); ?>";
</script>
	<?php }else if (date('H:i:s') <= alertTime($aa2_2d)){ ?>
	<script>document.getElementById("A2-2").style.backgroundColor ="#e4e5de";
	        document.getElementById("A2-2").title="";
	 </script>
	
	<?php }
####################################0000000000000 A3 000000000000000#######################################	
	if (date('H:i:s') <= alertTime($aa3_1)){?>
<script>document.getElementById("A3-1").style.backgroundColor ="#ff820d";
        document.getElementById("A3-1").title="<?php arrival($A3_1a); departure($A3_1d); ?>";
 </script>
	<?php }else if (date('H:i:s') <= alertTime($aa3_1d)){?>
<script>document.getElementById("A3-1").style.backgroundColor ="#e4e5de";
	    document.getElementById("A3-1").title="";
</script>
	<?php}
	
	if (date('H:i:s') <= alertTime($aa3_2)){?>
<script>document.getElementById("A3-2").style.backgroundColor ="#ff820d";
        document.getElementById("A3-2").title="Blue <?php  departure($A3_2d); ?>";
 </script>
	<?php }else if (date('H:i:s') <= alertTime($aa3_2d)){?>
<script>document.getElementById("A3-2").style.backgroundColor ="#e4e5de";
	 document.getElementById("A3-2").title="";
</script><?php }
	
####################################0000000000000 A4 000000000000000#######################################	
	

	if (date('H:i:s') <= alertTime($aa4_1)){?>
<script>document.getElementById("A4-1").style.backgroundColor ="#ff820d";
        document.getElementById("A4-1").title="<?php arrival($A4_1a); departure($A4_1d); ?>";
 </script>
	<?php } else if (date('H:i:s') <= alertTime($aa4_1d)){?>
<script>document.getElementById("A4-1").style.backgroundColor ="#e4e5de";
	    document.getElementById("A4-1").title="";
</script><?php }
	
	
	if (date('H:i:s') <= alertTime($aa4_2)){?>
<script>document.getElementById("A4-2").style.backgroundColor ="#ff820d";
        document.getElementById("A4-2").title="<?php arrival($A4_2a); departure($A4_2d); ?>";
 </script>
	<?php }else if (date('H:i:s') <= alertTime($aa4_2d)){?>
<script>document.getElementById("A4-2").style.backgroundColor ="#e4e5de";
	 document.getElementById("A4-2").title="";
</script><?php }
	

####################################0000000000000 A5 000000000000000#######################################	
	
	if (date('H:i:s') <= alertTime($aa5_1)){?>
<script>document.getElementById("A5-1").style.backgroundColor ="#ff820d";
        document.getElementById("A5-1").title="<?php arrival($A5_1a); departure($A5_1d); ?>";
</script>
	<?php }else if (date('H:i:s') <= alertTime($aa5_1d)){?>
	<script>document.getElementById("A5-1").style.backgroundColor ="#e4e5de";
	        document.getElementById("A5-1").title="";
	 </script><?php }
	
	if (date('H:i:s') <= alertTime($aa5_2)){?>
<script>document.getElementById("A5-2").style.backgroundColor ="#ff820d";
        document.getElementById("A5-2").title="<?php arrival($A5_2a); departure($A5_2d); ?>";
 </script>
	<?php } else if (date('H:i:s') <= alertTime($aa5_2d)){?>
	<script>document.getElementById("A5-2").style.backgroundColor ="#e4e5de";
	        document.getElementById("A5-2").title="";
	</script><?php }


####################################0000000000000 A6 000000000000000#######################################	
	if (date('H:i:s') <= alertTime($aa6_2)){?>
<script>document.getElementById("A6-1").style.backgroundColor ="#ff820d";
        document.getElementById("A6-1").title="<?php arrival($A6_1a); departure($A6_1d); ?>";
 </script>
	<?php }else if (date('H:i:s') <= alertTime($aa6_2d)){?>
	<script>document.getElementById("A6-1").style.backgroundColor ="#e4e5de";
	 document.getElementById("A6-1").title="";
</script><?php }
	
	
	if (date('H:i:s') <= alertTime($aa6_1)){?>
<script>document.getElementById("A6-2").style.backgroundColor ="#ff820d";
        document.getElementById("A6-2").title="<?php arrival($A6_2a); departure($A6_2d); ?>";
 </script>
	<?php }else if (date('H:i:s') <= alertTime($aa6_1d)){?>
	<script>document.getElementById("A6-2").style.backgroundColor ="#e4e5de";
	        document.getElementById("A6-2").title="";
	 </script><?php }
	

####################################0000000000000 A7 000000000000000#######################################	
	if (date('H:i:s') <= alertTime($aa7_2)){?>
<script>document.getElementById("A7-1").style.backgroundColor ="#ff820d";
        document.getElementById("A7-1").title="<?php arrival($A7_1a); departure($A7_1d); ?>";
 </script>
	<?php }else if (date('H:i:s') <= alertTime($aa7_2d)){?>
<script>document.getElementById("A7-1").style.backgroundColor ="#e4e5de";
	        document.getElementById("A7-1").title="";
</script><?php }
	
	
	if (date('H:i:s') <= alertTime($aa7_1)){?>
<script>document.getElementById("A7-2").style.backgroundColor ="#ff820d";
        document.getElementById("A7-2").title="<?php arrival($A7_2a); departure($A7_2d); ?>";
</script>
	<?php }else if (date('H:i:s') <= alertTime($aa7_1d)){?>
	<script>document.getElementById("A7-2").style.backgroundColor ="#e4e5de";
	        document.getElementById("A7-2").title="";
	</script><?php }


####################################0000000000000 A8 000000000000000#######################################	
	if (date('H:i:s') <= alertTime($aa8_2)){?>
<script>document.getElementById("A8-1").style.backgroundColor ="#ff820d";
         document.getElementById("A8-1").title="<?php arrival($A8_1a); departure($A8_1d); ?>";
</script>
	<?php }else if (date('H:i:s') <= alertTime($aa8_2d)){?>
	<script>document.getElementById("A8-1").style.backgroundColor ="#e4e5de";
	        document.getElementById("A8-1").title="";
	 </script><?php }
	
	
	if (date('H:i:s') <= alertTime($aa8_1)){?>
<script>document.getElementById("A8-2").style.backgroundColor ="#ff820d";
        document.getElementById("A8-2").title="<?php arrival($A8_2a); departure($A8_2d); ?>";
</script>
	<?php }else if (date('H:i:s') <= alertTime($aa8_1d)){?>
	<script>document.getElementById("A8-2").style.backgroundColor ="#e4e5de";
	 document.getElementById("A8-2").title="";
</script><?php }


####################################0000000000000 A9 000000000000000#######################################	
	if (date('H:i:s') <= alertTime($aa9_2)){?>
<script>document.getElementById("A9-1").style.backgroundColor ="#ff820d";
        document.getElementById("A9-1").title="<?php arrival($A9_1a); departure($A9_1d); ?>";
 </script>
	<?php }else if (date('H:i:s') <= alertTime($aa9_2d)){?>
	<script>document.getElementById("A9-1").style.backgroundColor ="#e4e5de";
	        document.getElementById("A9-1").title="";
</script><?php }
	
	
	if (date('H:i:s') <= alertTime($aa9_1)){?>
<script>document.getElementById("A9-2").style.backgroundColor ="#ff820d";
        document.getElementById("A9-2").title="<?php arrival($A9_2a); departure($A9_2d); ?>";
</script>
	<?php }else if (date('H:i:s') <= alertTime($aa9_1d)){?>
	<script>document.getElementById("A9-2").style.backgroundColor ="#e4e5de";
	        document.getElementById("A9-2").title="";
</script><?php }
	

####################################0000000000000 A10 000000000000000#######################################	
	if (date('H:i:s') <= alertTime($aa10_2)){?>
<script>document.getElementById("A10-1").style.backgroundColor ="#ff820d";
        document.getElementById("A10-1").title="<?php arrival($A10_1a); departure($A10_1d); ?>";
</script>
	<?php }else if (date('H:i:s') <= alertTime($aa10_2d)){?>
	<script>document.getElementById("A10-1").style.backgroundColor ="#e4e5de";
	document.getElementById("A10-1").title="";
	</script><?php }
	
	if (date('H:i:s') <= alertTime($aa10_1)){?>
<script>document.getElementById("A10-2").style.backgroundColor ="#ff820d";
        document.getElementById("A10-2").title="<?php arrival($A10_2a); departure($A10_2d); ?>";
</script>
	<?php }else if (date('H:i:s') <= alertTime($aa10_1d)){?>
	<script>document.getElementById("A10-2").style.backgroundColor ="#e4e5de";
        	document.getElementById("A10-2").title="";
</script><?php }


####################################0000000000000 F1 000000000000000#######################################	
	if (date('H:i:s') <= alertTime($aF1)){?>
<script>document.getElementById("F1").style.backgroundColor ="#ff820d";
        document.getElementById("F1").title="<?php arrival($F1a); departure($F1d); ?>";
</script>
	<?php }else if (date('H:i:s') <= alertTime($aF1d)){?>
	<script>document.getElementById("F1").style.backgroundColor ="#e4e5de";
	         document.getElementById("F1").title="";
</script><?php }
	
####################################0000000000000 F2 000000000000000#######################################	

	if (date('H:i:s') <= alertTime($aF2)){?>
<script>document.getElementById("F2").style.backgroundColor ="#ff820d";
       document.getElementById("F2").title="<?php arrival($F2a); departure($F2d); ?>";
 </script>
	<?php }else if (date('H:i:s') <= alertTime($aF2d)){?>
	<script>document.getElementById("F2").style.backgroundColor ="#e4e5de";
        	 document.getElementById("F2").title="";
</script><?php }
####################################0000000000000 S1 000000000000000#######################################	

	if (date('H:i:s') <= alertTime($aS1)){?>
<script>document.getElementById("S1").style.backgroundColor ="#ff820d";
 document.getElementById("S1").title="<?php arrival($S1a); departure($S1d); ?>";
 </script>
	<?php }else if (date('H:i:s') <= alertTime($aS1d)){?>
	<script>document.getElementById("S1").style.backgroundColor ="#e4e5de";
	 document.getElementById("S1").title="";
	 </script><?php }
####################################0000000000000 S2 000000000000000#######################################	

	if (date('H:i:s') <= alertTime($aS2)){?>
<script>document.getElementById("S2").style.backgroundColor ="#ff820d";
document.getElementById("S2").title="<?php arrival($S2a); departure($S2d); ?>";
</script>
	<?php }else if (date('H:i:s') <= alertTime($aS2d)){?>
	<script>document.getElementById("S2").style.backgroundColor ="#e4e5de";
	document.getElementById("S2").title="";
	</script><?php }
	
