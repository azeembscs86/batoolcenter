<?php
include("functions.php");
$patient_id = mysql_real_escape_string($_REQUEST["patient_id"]);
$patients=  getPatientById($patient_id);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Al Batool Medical Center</title>
  <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="images/apple-touch-icon-72x72-precomposed.png" sizes="72x72" />
  <!-- Bootstrap stylesheet -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700%7CSource+Sans+Pro:300,400,600,700" rel="stylesheet"> 
<!-- stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/style_cyan.css" title="style_cyan" rel="alternate stylesheet" type="text/css"/>
<link href="css/style_red.css" title="style_red" rel="alternate stylesheet" type="text/css"/>
<link href="css/style_green.css" title="style_green" rel="alternate stylesheet" type="text/css"/>
<link href="css/style_blue.css" title="style_blue" rel="alternate stylesheet" type="text/css"/>
<!-- font-awesome -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- crousel css -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
<!--bootstrap select-->
<link href="js/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<style>
    
    
</style>
</head>
<body>
    <header>
		<!-- header container start here-->
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3 col-xs-12">
					<!-- logo start here-->
					<div id="logo">
						<a href="">
							<img class="img-responsive logochange" alt="logo" title="logo" src="images/logo.png" />
						</a>
					</div>
					<!-- logo end here-->
				</div>
				
			    <div class="col-sm-6 col-md-6 col-xs-12 padd0">
					<!-- menu start here-->
					
					<!-- menu end here -->
				</div>
			    <div class="col-sm-3 col-md-3 col-xs-12 hidden-xs">
					<!-- button-login start here -->
					
					<!-- button-login end here -->
				</div>
			</div>
		</div>
		<!-- header container end here -->
	</header>
<?php
if($patients>0)
{
    $patient=  mysql_fetch_array($patients);
 ?>
<table align="center">
    <tbody>
        <tr>
            <td colspan="2" align="center"><h1>Batool Medical Center</h1></td>
        </tr>
        <tr>
            <td><strong>Card Number: <?php echo $patient["patient_card_number"]; ?></strong></td> <td align="right"><strong>Date:<?php echo $patient["createdAt"]; ?></strong></td>
        </tr>
        <tr>
            <td><strong>Name: <?php echo $patient["patient_name"]; ?></strong></td><td align="right"><strong>Age: <?php echo $patient["patient_age"]; ?></strong></td>
        </tr>
        <tr>
            <td><strong>Father's Name: <?php echo $patient["father_name"]; ?></strong></td>  <td align="right"><strong>Sex: <?php echo $patient["patient_gender"]; ?></strong></td>
        </tr>
        <tr>
            <td><strong>Contact Number: <?php echo $patient["conact_number"]; ?></strong></td> <td align="right"><strong>Address: <?php echo $patient["patient_address"]; ?></strong></td>
        </tr>
        <tr>
            <td colspan="2"><strong>Contact Number: <?php echo $patient["conact_number"]; ?></strong></td> <td align="right"><strong>Address: <?php echo $patient["patient_address"]; ?></strong></td>
        </tr>
       
    </tbody>
    
</table>
 
 <?php 
}
?>
    
    
    <script>
function myFunction() {
    window.print();
}
</script>