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

<section id="contact" class="contact text-center  section bg-2 section-divider">
	<div class="center" style="width:95%;" >	
		<h2>Messages From Clients</h2>
		<table class="messages_table" border="1" width="100%" >
			<?php
				$username = $_POST['username'];
				$password = $_POST['password'];
				if($username=='ashoyon' && $password=='bs546496')
				{
					print "<tr>";
						print "<th style='text-align:center;'>First Name</th>";
						print "<th style='text-align:center;'>Last Name</th>";
						print "<th style='text-align:center;'>Email</th>";
						print "<th style='text-align:center;'>Phone</th>";
						print "<th style='text-align:center;'>Contact Date</th>";
						print "<th style='text-align:center;'>Comments</th>";
					print "</tr>";
					
					//read guestbook information from file 
				
				$display = "";
				$line_ctr = 0;
				
				$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
				$filename = $DOCUMENT_ROOT.'responsive_single_page_2/data/'.'guestbook.txt';
				
				if(file_exists($filename))
				{
					$fp = fopen($filename, 'r');
						while(true)
					{
						$line = fgets($fp);
						
						if (feof($fp))
						{
							break;
						}
						$line_ctr++;
						$line_ctr_remainder = $line_ctr % 2;
						
						if ($line_ctr_remainder == 0)
						{
							$style = "style='background-color: #FFFFCC;'";
						}
						else
						{
							$style = "style='background-color: #fff;'";
						}
						list($firstname, $lastname, $email, $phone, $contact_date, $comments) = explode('|',$line);
						$display .="<tr $style>";
							$display .="<td>".$firstname."</td>";
							$display .="<td>".$lastname."</td>";
							$display .="<td>".$email."</td>";
							$display .="<td>".$phone."</td>";
							$display .="<td>".$contact_date."</td>";
							
							if(empty($comments))
							{
								$comments = '&nbsp';
							}
							$display .="<td>".$comments."</td>";
						$display .="</tr>\n";
					}
					fclose($fp);
					print $display;
				}else{
					print "<p>There are no names in the guestbook</p>";
				}
					
				}else{
					print "Sorry, its for admin only";
				}
				
				
				
			?>
		</table>
	</div>
</section>

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
