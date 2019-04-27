<?php
	$fonts="verdana";
	$bgcolor="#444";
	$fontcolor="#FCBC41";
	$errnames=$errmail=$errweb=$errcomments=$errgender="";	



						$names=$mail=$website=$gender="";
					

					if ($_SERVER["REQUEST_METHOD"]=="POST") {

						if (empty( $_POST["name"])) {
							$errnames="<span style='color:red';>Name is required<span/>";
						} else {
							$names 		= $_POST["name"];
						}
						
						if (empty( $_POST["mail"])) {
							$errmail="<span style='color:red';>Mail is required<span/>";
						} elseif(!filter_var( $_POST["mail"],FILTER_VALIDATE_EMAIL)){
							$errmail="<span style='color:red';>Invalaid Email Address<span/>";	
						}else{
							$mail 		= $_POST["mail"];
						}

						if (empty( $_POST["web"])) {
							$errweb="<span style='color:red';>Web is required<span/>";
						} elseif(!filter_var( $_POST["web"],FILTER_VALIDATE_URL)){
							$errweb="<span style='color:red';>Invalaid Web Address<span/>";	
						}else{
							$website 	= $_POST["web"];
						}

						if (empty( $_POST["gender"])) {
							$errgender="<span style='color:red';>Gender is required<span/>";
						} else {
							$gender 	= $_POST["gender"];
						}						
						$comments 	= $_POST["comments"];

						/*echo $names."<br/>";
						echo $mail."<br/>";
						echo $website."<br/>";
						echo $comments."<br/>";
						echo $gender."<br/>";*/
					}
?>


<!doctype html>
<html>
	<head>
		<title>TAIYOB</title>
		<style type="text/css">
			body{font-family: <?php echo $fonts;?>}
			.phpcoding{width:900px ;margin:0 auto ;background:#ddd ;}
			.header,.footer{background:<?php echo "$bgcolor";?> ;color:<?php echo "$fontcolor";?> ;text-align:center;padding:20px;}
			.phpcoding h3{text-align:center;}
			.header h2,.footer h2{margin:0;}
			.content{min-height:400px;}
			p{margin: 0px}
		</style>
	</head>
	<body>
		<div class="phpcoding">
			<section class="header">
				<h2><?php echo "LET'S START";?></h2>
			</section>