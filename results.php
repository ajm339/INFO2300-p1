<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

	<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Results</title>
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
			<div id="results">
			
				<fieldset>
					<legend id="titleRESULTS">Results</legend>
					
					<?php
					
					if(isset($_POST['sport']))
						$sport = $_POST['sport'];
					
					if( isset($_POST['phone']))
						$phone = $_POST['phone'];
						
					$websites=array();
					if( isset($_POST['site']))
						$websites = $_POST['site'];
						
					function IsChecked($chkname, $value){
						if(isset($_POST[$chkname])){
							foreach($_POST[$chkname] as $chkval){
								if($chkval==$value){
									return true;
								}
							}
						}
						return false;
					}/*Help from html-form-guide.com*/
					
					
					if($sport!="Basketball"){
						print("<p>Incorrect.  You answered $sport but the correct answer was Basketball.</p>");
					}
					else{
						print("<p>Correct! I did not mention $sport in the \"My Sports Tab\".</p>");
					}
					
					if($phone!="Samsung Galaxy Nexus"){
						print("<p>Incorrect.  You answered $phone but the correct answer was Samsung Galaxy Nexus.</p>");
					}
					else{
						print("<p>Correct! The $phone was one of the gadgets I mentioned that I purchased as an early adopter.</p>");
					}
					
					
					$websitesSTRING = "";
					foreach($websites as $j){
						$websitesSTRING = $websitesSTRING . $j . " ";
					}
					
					$correct=true;
					if((IsChecked('site', 'PhoneArena'))||(IsChecked('site', 'TheNewYorkTimes'))){
						print("<p>You did not answer this entire question correctly.  You answered that I read the following source(s): $websitesSTRING but I read Engadget and BGR.</p>");
						$correct=false;
					}//end if
				
					if($correct==true)
						print("<p>Correct! I check the following sources: $websites to catch up on my technology news!</p>");
						
					?>
					
					<p>
						<input type="button" value="Try Again" onclick="window.history.back()" />
					</p>
				</fieldset>
			</div><!--end results-->
		
		
		</div><!--end main-->
		
		
	</body>
</html>