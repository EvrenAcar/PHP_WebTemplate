<!-- Web Template Project - Chapter 4 -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web Template</title>
</head>
<body>
	<?php include("Inc_Header.html"); ?>

	<div style="width: 20%; text-align: center; float: left;">
		<?php include("Inc_ButtonNav.html") ?>
	</div>
	<?php 
		if (isset($_GET["content"])) {
			switch($_GET["content"]) {
				case 'About Me':
					include("Inc_about.html");
					break;
				case 'Contact Us':
					include("Inc_contact.html");
					break;
				default:
					include("Inc_Home.html");
					break;
			} // End of switch
		} else {
			// We're here because No button was clicked
			include("Inc_Home.html");
		} // End of the IF/ELSE
	 ?>
	 <hr/>
	 <?php include('Inc_footer.php'); ?>
</body>
</html>