<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient Information</title>
   <link rel="stylesheet" href="css/sm.css">
   <link rel="stylesheet" href="css/All_registration.css">
</head>
<body>
	<div class="width_and_clear">
		<!-- Header-->
		<div>
			<?php include 'Header.php' ?>			
		</div>
		<!-- Header2 -->
		<div>
			<?php include 'Header2.php' ?>			
		</div>
	</div>
		<!-------------------------------------------------------------------------------------------------->
	<div class="width">
		<div>
			<div class="final_ref" style="height: 100px;">
				<?php include 'Doctor_Reference.php'?>
			</div>
			<!-- -------------------------------------------------------->
			<div class="final_main_dctr">
				<?php include 'Doctor_See_Patient.php' ?>
			</div>
	
		</div>
	</div>	
		<!-------------------------------------------------------------------------------------------------->
		<!-- Footer-->
	<div class="width">
		<div class="final_footer">
			<?php include 'Footer.php' ?>	
		</div>
	</div>
</body>
</html>