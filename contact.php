<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ad&Tech</title>

    <!-- CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.css">
	<link href="css/nivo-lightbox-theme/default/nivo-lightbox.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<!-- js -->
	<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>


</head>


<body id="page-top" data-spy="scroll" data-target="">


<?php
//gather data from the form
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$comments = $_POST['comments'];
	if (!is_numeric($phone))
	{
		print"Phone number must be numeric..";
		print"Go back and try again latter.. ";
	}else{
		//add name and information to file
		
		$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
		$filename = $DOCUMENT_ROOT.'responsive_single_page_2/data/'.'guestbook.txt';
		
		$fp = fopen($filename, 'a');
		$contact_date = date('Y-m-d');
		$output_line = $firstname. '|'.$lastname.'|'.$email.'|'.$phone.'|'.$contact_date.'|'.$comments."\n";
		fwrite($fp, $output_line);
		fclose($fp);
		
		
		//display new page
		
		$fullname = $firstname. ' '.$lastname;
		print "<p>Thank u . we will contact u soon</p>";
		print "<p>Information submitted for $fullname</p>";
		print "<p>your contact is $email and $phone</p>";
		print "<p>And u said :</p>";
		
		if (empty($comments))
		{
			print "<p>nothing</p>";
		}else{
			print "<p>......$comments</p>";
		}
	}
	
	
	
?>	


<!-- js -->
<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/agency.js"></script>
<script src="js/scroll-speed.js"></script>
<script src="js/img-slider.js"></script> 
<script src="js/slippry.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script>



</body>

</html>
