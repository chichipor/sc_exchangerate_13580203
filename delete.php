<!DOCTYPE html> 
<html> 
<head> 
<title>Calculator</title> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, intitial-scale-1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head> 
<body> 
	<div class="container center-block text-center" style="height: 190px; width: 200px; margin-top: 200px; margin-bottom: 200px; border: 1px solid #ded8d8; border-radius: 5px;"> 
		<div class="row">
				
					<?php 

				$id = $_REQUEST['id']; 
				$thb = $_REQUEST['thb']; 


				$sql = "DELETE FROM exch302_history WHERE recordID = $id"; 

				require 'connect.php'; 

				$sql_exe = $conn -> query($sql); 

				if($sql_exe) { 
				echo "<br><br>Delete complete <br>"; 
				echo "Delete ID ".$id; 
				echo "<br>";
				echo "THB ".$thb; 
				header("Refresh:,url=index.php",true,5); 
				}else{ 
				echo "Delete failed"; 
				//	echo $sql; 
				} 

				?> 

				<br><br><a href="index.php?" style="margin-top: 200px; border:1px solid #eee; border-radius: 5px; padding: 10px;">BACK</a> 

				</div>

				</div> 

</body> 
</html