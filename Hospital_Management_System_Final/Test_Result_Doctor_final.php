<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Result</title>
   <link rel="stylesheet" href="css/sm.css">
   <link rel="stylesheet" href="css/common.css">
   <style type="text/css">
   	.clearfix 
   	{
	  overflow: auto;
	}

   </style>
</head>
<body>
	<div style="width:100%">
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
	<div style="width:100%;">
		<div>
			<div class="welcome1" style="float: left;height: 800px">
				<?php include 'Doctor_Reference.php' ?>
			</div>
			<!-- -------------------------------------------------------->
			<div class="welcome2 " style="height:750px;padding-bottom: 0px;" align="center">
				<?php include 'Test_Result.php' ?>
			</div>
			
	
		</div>
	</div>	
		
		<!-------------------------------------------------------------------------------------------------->
		<!-- Footer-->
	<div style="width:100%;">
		<div style="background-color: #4CAF50;margin-top: 100px;">
			<?php include 'Footer.php' ?>	
		</div>
	</div>
</body>
</html>

