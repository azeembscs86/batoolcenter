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
					<div class="button-login pull-right">
						
						<button type="button" class="btn btn-primary btn-lg" onclick="location.href='searchfordoctors.php'">For Doctor</button>
					</div>
					<!-- button-login end here -->
				</div>
			</div>
		</div>
		<!-- header container end here -->
	</header>
    
		<div class="item">		
			
				<div class="container">
					<div class="slider-caption">
						<div class="off"></div>
						<h1>Welcome To Batool Medical Center</h1>
						
                                                <form method="post" action="serachpatient.php">
						<div class="col-md-4 col-sm-4 col-xs-12" style="float:right">
							
                                                    <div class="input-group" >
						   
                                                        <input name="patient_number" id="patient_number" class="form-control" value="" placeholder="Patient Number Or Mobile Number" type="text">
								
                                                               <span>
                                                                   <button type="submit" class="btnsrch"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
						</form>
					</div>
				</div>
			
		
		
			
	</div>
    <div class="clearfix" style="height:15px"></div>
    <div id="submit-job">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- submit-job-content start here -->
                        <div class="submit-job-content">
                            <h1>Batool Center Patients</h1>
                            
                        </div>
                        <!-- submit-job-content end here -->
                    </div>
                </div>
            </div>
        </div>
    
    <div id="submit-job-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- submit-form start here -->
                        <div class="submit-form">
                            <div class="border"></div>
                            <div class="border1"></div>
                            <form class="form-horizontal" method="post" id="patient_form" name="patient_form" action="addnewpatient.php">
                                <fieldset>
                                   <h1>Bio Data</h1>
                                   <div class="clearfix" style="height:15px"></div>
                                   
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label>Name</label>
                                            <input class="form-control" id="input-email" placeholder="e.g. Gayoor Abbass" value="" name="patient_name" required="" type="text">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Age</label>
                                            <input class="form-control" placeholder="e.g. 12 Years" id="input-jobtitle" value="" name="patient_age" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label>Father's Name</label>
                                            <input class="form-control" id="input-location" placeholder="e.g. Mureed Abbass *" value="" name="father_name" required="" type="text">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Sex</label>
                                            <select class="selectpicker form-control" name="patient_gender">
                                                <option selected="" value="0">Select Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label>Contact Number</label>
                                            <input class="form-control" id="input-job" placeholder="e.g. 03003157212 *" value="" name="contact_number" required="" type="text">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Address</label>
                                            <textarea class="form-control" id="input-enquiry" rows="10" name="address" placeholder="Address *" required=""></textarea>
                                        </div>
                                    </div>
                                                                        
                                    <div class="button">
                                        <input type="submit" class="btn btn-primary btnus" id="submit_btn" value="ADD PATIENT">
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <!-- submit-form end here -->
                    </div>
                </div>
            </div>
        </div>
    
	
   
    
<!-- Footer end here -->
<!-- jquery -->
<script src="js/jquery.2.1.1.min.js" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--bootstrap select-->
<script src="js/dist/js/bootstrap-select.js" type="text/javascript"></script>
<!-- owlcarousel js -->
<script src="js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<!--internal js-->
<script src="js/internal.js" type="text/javascript"></script>
<!-- color switcher-->
<script src="js/switcher.js" type="text/javascript"></script>

</body>
</html>