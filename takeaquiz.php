<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

	<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Take A Quiz</title>
		<link rel="stylesheet" type="text/css" href="p1.css" />
	</head>

	<body>
	
		<div class="title">
			<img src="Banner.png" alt="Banner" title="banner" width="1200" height="45" />
		</div><!--end title-->
		
		<div class="nav">
			<ul class = "navbar">
				<li><a href="index.php">Home</a></li>
				<li><a href="mysports.php">My Sports</a></li>
				<li><a href="myhobbies.php">My Hobbies</a></li>
				<li><a href="takeaquiz.php" class = "current">Take a Quiz!</a></li>
			</ul>
		</div><!--end nav-->
		
		<div class="main">
			<h2>Take a quiz and see how much you remember about me!</h2>
			
			
			<form action="results.php" method="post">
				<fieldset>
					<legend>Which of the following sports was not mentioned under the "My Sports" tab?</legend>
						<input type = "radio" name = "sport" value="Soccer" class="option" /><span class="option">Soccer</span><br/>
						<input type = "radio" name = "sport" value="Tennis" class="option" /><span class="option">Tennis</span><br/>
						<input type = "radio" name = "sport" value="Basketball" class="option" /><span class="option">Basketball</span><br/>
						<input type = "radio" name = "sport" value="Weight Lifting" class="option" /><span class="option">Weight Lifting</span>
				</fieldset>
				
				<fieldset>
					<legend>Which phone below did I purchase as an early adopter?</legend>
						<select name="phone">
							<option value="Samsung Galaxy Nexus">Samsung Galaxy Nexus</option>
							<option value="Apple iPhone 5">Apple iPhone 5</option>
							<option value="Motorola Droid Razr">Motorola Droid Razr</option>	
						</select>
				</fieldset>
				
				<?php
				$site=array();
				?>
				<fieldset>
					<legend>Which of the following websites do I enjoy reading technology news from?</legend>
						<input type="checkbox" name="site[]" value="Engadget" />Engadget
						<input type="checkbox" name="site[]" value="PhoneArena" />Phone Arena
						<input type="checkbox" name="site[]" value="BGR" />BGR
						<input type="checkbox" name="site[]" value="TheNewYorkTimes" />The New York Times
				</fieldset>
				
				<fieldset>
					<input type="submit" value="Submit" />
					<input type="reset" value="Reset Form" />
				</fieldset>
			
			</form>
				
		
		</div><!--end main-->
		
		
	</body>
</html>