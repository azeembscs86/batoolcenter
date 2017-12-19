<?php
include("functions.php");
$patient_search =  mysql_real_escape_string($_POST["patient_number"]);
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
</head>
<body>
<?php
$patient_str=substr($patient_search, 0, 2);
if($patient_str=="03")
{
  $patient=  getPatientByContactNumber($patient_search);
  if($patient>0){      
        $patientw = mysql_fetch_array($patient);
        ?>
        <div id="job">
		<div class="container">
			<div class="row">
                            <div align="center" style="margin-right:335px"><h1>Batool Medical Center</h1></div>
                            <div style="height: 15px;"></div>
				<div class="tab-content">
					<div class="tab-pane active" id="profile">
						<div class="col-md-12">
						<div class="form-horizontal candidate-single">
						<fieldset>
							<div class="form-group">
								
								<div class="col-sm-8">
                                                                    <div class="matter">
										<label>Card Number
										<button type="submit" value="Submit" class="icon" ><i class="fa fa-pencil-square-o" aria-hidden="false"></i></button>
										</label>
										<span><?php echo $patientw["patient_card_number"]; ?></span>
									</div>
                                                                    
									<div class="matter">
										<label>NAME 
										<button type="submit" value="Submit" class="icon" ><i class="fa fa-pencil-square-o" aria-hidden="false"></i></button>
										</label>
										<span><?php echo $patientw["patient_name"]; ?></span>
									</div>	
									<div class="matter">
										<label>GENDER
										<button type="submit" value="Submit" class="icon" ><i class="fa fa-pencil-square-o" aria-hidden="false"></i></button>
										</label>
										<span><?php echo $patientw["patient_gender"]; ?></span>
									</div>	
                                                                    
                                                                    
                                                                    
                                                                    <div class="matter">
										<label>Age
										<button type="submit" value="Submit" class="icon" ><i class="fa fa-pencil-square-o" aria-hidden="false"></i></button>
										</label>
										<span><?php echo $patientw["patient_age"]; ?></span>
									</div>
                                                                    
                                                                    <div class="matter">
										<label>Father's Name
										<button type="submit" value="Submit" class="icon" ><i class="fa fa-pencil-square-o" aria-hidden="false"></i></button>
										</label>
										<span><?php echo $patientw["father_name"]; ?></span>
							            </div>
                                                                    
                                                                    <div class="matter">
										<label>Contact Number
										<button type="submit" value="Submit" class="icon" ><i class="fa fa-pencil-square-o" aria-hidden="false"></i></button>
										</label>
										<span><?php echo $patientw["conact_number"]; ?></span>
							           </div>
                                                                    
                                                                    <div class="matter">
										<label>Address
										<button type="submit" value="Submit" class="icon" ><i class="fa fa-pencil-square-o" aria-hidden="false"></i></button>
										</label>
										<span><?php echo $patientw["patient_address"]; ?></span>
							           </div>
                                                                    
                                                                    
								</div>
							</div>
							
						</fieldset>
                                                </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 <?php
  }else
  {
   ?>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="match">
	<p>No Record Found. </p>
      </div>
    </div>
    <?php
  }   
}else
{
  $patients =  getPatientByCard($patient_search);
  if($patients>0)
  {
      $patient = mysql_fetch_array($patients);
  ?>    
    <div id="job">
		<div class="container">
			<div class="row">
                            <div align="center" style="margin-right:335px"><h1>Batool Medical Center</h1></div>
                            <div style="height: 15px;"></div>
				<div class="tab-content">
					<div class="tab-pane active" id="profile">
						<div class="col-md-12">
						<div class="form-horizontal candidate-single">
						<fieldset>
							<div class="form-group">
								
								<div class="col-sm-8">
                                                                    <div class="matter">
										<label>Card Number
										<button type="submit" value="Submit" class="icon" ><i class="fa fa-pencil-square-o" aria-hidden="false"></i></button>
										</label>
										<span><?php echo $patient["patient_card_number"]; ?></span>
									</div>
                                                                    
									<div class="matter">
										<label>NAME 
										<button type="submit" value="Submit" class="icon" ><i class="fa fa-pencil-square-o" aria-hidden="false"></i></button>
										</label>
										<span><?php echo $patient["patient_name"]; ?></span>
									</div>	
									<div class="matter">
										<label>GENDER
										<button type="submit" value="Submit" class="icon" ><i class="fa fa-pencil-square-o" aria-hidden="false"></i></button>
										</label>
										<span><?php echo $patient["patient_gender"]; ?></span>
									</div>	
                                                                    
                                                                    
                                                                    
                                                                    <div class="matter">
										<label>Age
										<button type="submit" value="Submit" class="icon" ><i class="fa fa-pencil-square-o" aria-hidden="false"></i></button>
										</label>
										<span><?php echo $patient["patient_age"]; ?></span>
									</div>
                                                                    
                                                                    <div class="matter">
										<label>Father's Name
										<button type="submit" value="Submit" class="icon" ><i class="fa fa-pencil-square-o" aria-hidden="false"></i></button>
										</label>
										<span><?php echo $patient["father_name"]; ?></span>
							            </div>
                                                                    
                                                                    <div class="matter">
										<label>Contact Number
										<button type="submit" value="Submit" class="icon" ><i class="fa fa-pencil-square-o" aria-hidden="false"></i></button>
										</label>
										<span><?php echo $patient["conact_number"]; ?></span>
							           </div>
                                                                    
                                                                    <div class="matter">
										<label>Address
										<button type="submit" value="Submit" class="icon" ><i class="fa fa-pencil-square-o" aria-hidden="false"></i></button>
										</label>
										<span><?php echo $patient["patient_address"]; ?></span>
							           </div>
                                                                    
                                                                    
								</div>
							</div>
							
							
							
							
							
							
							
							
							
						</fieldset>
                                                </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
  }else
  {
    ?>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="match">
	<p>No Record Found. </p>      </div>
    </div>
    <?php
  }
}
?>

