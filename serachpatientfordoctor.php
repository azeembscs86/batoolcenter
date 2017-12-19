<?php
include("functions.php");
$patient_search = mysql_real_escape_string($_POST["patient_number"]);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Batool Medical Center Ranipur</title>
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
        <?php
        $patient_str = substr($patient_search, 0, 2);
        if ($patient_str == "03") {
            $patient = getPatientByContactNumber($patient_search);
            if ($patient > 0) {
                $patientw = mysql_fetch_array($patient);
                ?>
<div id="job">
                    <div class="container">
                        <div class="row">
                            <div class="canditate-profile">
                                <ul class="nav nav-tabs list-inline">
                                    <li class="">
                                        <a href="#pasthistory" data-toggle="tab" aria-expanded="false">HISTORY</a>
                                    </li>
                                    <li class="">
                                        <a href="#grothparameters" data-toggle="tab" aria-expanded="false">GROWTH PARAMETERS</a>
                                    </li>
                                    <li class="">
                                        <a href="#progressivenotes" data-toggle="tab" aria-expanded="false">PROGRESSIVE NOTES</a>
                                    </li>
                                    <li class="">
                                        <a href="#patientdiagonsis" data-toggle="tab" aria-expanded="false">DIAGONSIS</a>
                                    </li>
                                    <li class="">
                                        <a style="padding:22px 25px;" href="#patientlaborities" data-toggle="tab" aria-expanded="false">LABORTIES</a>
                                    </li>
                                    <li class="">
                                        <a style="padding:22px 25px;" href="#patientmedication" data-toggle="tab" aria-expanded="false">MEDICATIONS</a>
                                    </li>
                                </ul>
                            </div>




                           
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

                                
                                
                                <div class="tab-pane" id="pasthistory">                                    
                                                                      
                                 <div id="patientpasthistory">
                                        <?php
                                        $patient_history = getPatientPastHistory($patientw["patient_id"]);
                                        if($patient_history>0)
                                        {
                                            while($patients_history=mysql_fetch_array($patient_history))
                                            {
                                        ?>
                                     <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-box candidate">
									
							<div class="matter">
                                                            <h1>Date:<?php echo date("d-M-Y h:i:s", strtotime($patients_history["createdAt"])) ;  ?>
									<button type="button" class="rotate1">
										<i class="fa fa-link" aria-hidden="true"></i>
									</button>
								</h1> 
								<ul class="list-inline">
									<li>
                                                                            <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Present Complain:<strong><?php echo $patients_history["present_complain"];  ?></strong></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Present Complain Text:<?php echo $patients_history["presentcomplain_text"];  ?></a>
									</li>
								</ul>
								<p>Past history:<?php echo $patients_history["past_history"];  ?>,<?php echo $patients_history["pasthistory_text"];  ?></p>
                                                                <p>Birth History:<?php echo $patients_history["feeding_text"];  ?></p>
                                                                <p>Feeding:<?php echo $patients_history["feeding_text"];  ?></p>
                                                                <p>Vaccination:<?php echo $patients_history["vaccination_text"];  ?></p>
                                                                <p>Weaning:<?php echo $patients_history["weaning_text"];  ?></p>
                                                                <p>Nutrition:<?php echo $patients_history["nutrition_text"];  ?></p>
                                                                <p>Development:<?php echo $patients_history["development_text"];  ?></p>
                                                                <p>Family & Social History:<?php echo $patients_history["familyhistory_text"];  ?></p>
                                                                
                                                                
							</div>
						</div>
                                        </div>
                                        <?php
                                                
                                            }
                                                
                                        }
                                        ?>
                                        
                                 
                                    </div>   
                                        
                                        
                                        
						
					
           <div id="login-form">
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-2 col-md-8 col-sm-8 col-xs-12">
                        <div class="form">
                            <div class="border"></div>
                            <div class="border1"></div>
                            <form class="form-horizontal" method="post" id="complainpresent">
                                <input type="hidden" id="patient_id" name="patient_id" value="<?php echo $patientw["patient_id"]; ?>">
                                <fieldset>
                                    <div class="form-group">
                                        <label>Present Complain</label>
                                        <div class="col-sm-12 confirmation">
                                            
                                            <h3>General Symptoms</h3>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" type="checkbox" value="Fever">Fever  
                                            </label>

                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Ear ache" type="checkbox">Ear ache   
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Ear Discharge" type="checkbox">Ear Discharge
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Eye Discharge" type="checkbox">Eye Discharge  
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Thyroid Swelling" type="checkbox">Thyroid Swelling
                                            </label>
                                           
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Pallor" type="checkbox">Pallor
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Sweating" type="checkbox">Sweating
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Bone Pain" type="checkbox">Bone Pain
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Rashes" type="checkbox">Rashes
                                            </label>
                                            
                                            <h3>Systemic Review  <br><br>CNS</h3>
                                            
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Haedache" type="checkbox">Haedache
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Fits" type="checkbox">Fits 
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Unconsciousness" type="checkbox">Unconsciousness  
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Weakness" type="checkbox">  Weakness
                                            </label>
                                            
                                            
                                            <h3>Respiratory System</h3>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Sore Throat" type="checkbox">Sore Throat
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Cough" type="checkbox">Cough
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="SoB" type="checkbox">SoB   
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Cyanosis" type="checkbox">Cyanosis   
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Chest Pain" type="checkbox">Chest Pain  
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Excerse intolarence" type="checkbox">Excerse intolarence  
                                            </label>
                                            
                                            <h3>
                                                CVS
                                            </h3>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Palpitation" type="checkbox">Palpitation
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Tachycardia" type="checkbox">Tachycardia
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Bradycardia" type="checkbox">Bradycardia  
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Dysnea" type="checkbox">Dysnea  
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Cyanosis" type="checkbox">Cyanosis  
                                            </label>
                                            <h3>GIT</h3>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Vomiting" type="checkbox">Vomiting
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Diarrhea" type="checkbox">Diarrhea
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Jaundice" type="checkbox">Jaundice
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Melena" type="checkbox">Melena
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="A/Distension" type="checkbox">A/Distension
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Haematamsis" type="checkbox">Haematamsis
                                            </label>
                                            <h3>Pancreas</h3>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Excessive Eating" type="checkbox">Excessive Eating
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Weight Loss" type="checkbox">Weight Loss
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Polyurea" type="checkbox">Polyurea
                                            </label>
                                             
                                            <h3>
                                                Urinary System
                                            </h3>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Urination" type="checkbox">Urination 
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Dysurea" type="checkbox">Dysurea
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Haematuria" type="checkbox">Haematuria
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Lumbar pain" type="checkbox">Lumbar pain  
                                            </label>
                                            
                                            <h3>Auto Immune</h3>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Rashes" type="checkbox">Rashes
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Hair Loss" type="checkbox">Hair Loss
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Joint pain" type="checkbox">Joint pain  
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Joint swolen" type="checkbox">Joint swolen  
                                            </label>
                                            
                                            <textarea class="form-control" id="presentcomplain_text" rows="5" name="presentcomplain_text" placeholder="" required=""></textarea>
                                            
                                            
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Past History</label>
                                                        <select class="selectpicker form-control" name="past_history" id="past_history">
                                                <option value="0">Select Past History</option>
                                                <option value="Medical">Medical</option>
                                                <option value="Surgical">Surgical</option>
                                            </select>
                                               <textarea class="form-control" id="pasthistory_text" rows="5" name="pasthistory_text" placeholder="" required=""></textarea>         
                                                    </div>
                                                </div>
                                    
                                    <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Birth History</label>
                                                        
                                               <textarea class="form-control" id="birthyhistory_text" rows="5" name="birthyhistory_text" placeholder="" required=""></textarea>         
                                                    </div>
                                                </div>
                                    
                                    <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Feeding</label>
                                                        
                                               <textarea class="form-control" id="feeding_text" rows="5" name="feeding_text" placeholder="" required=""></textarea>         
                                                    </div>
                                                </div>
                                    
                                    <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Vaccination</label>
                                                        
                                               <textarea class="form-control" id="vaccination_text" rows="5" name="vaccination_text" placeholder="" required=""></textarea>         
                                                    </div>
                                                </div>
                                    
                                    <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Weaning</label>
                                                        
                                               <textarea class="form-control" id="weaning_text" rows="5" name="weaning_text" placeholder="" required=""></textarea>         
                                                    </div>
                                                </div>
                                    
                                    <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Nutrition</label>
                                                        
                                               <textarea class="form-control" id="nutrition_text" rows="5" name="nutrition_text" placeholder="" required=""></textarea>         
                                                    </div>
                                                </div>
                                    
                                    <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Development (e.g Gross Motors,Hearing & Speech)</label>
                                                     
                                            
                                               <textarea class="form-control" id="development_text" rows="5" name="development_text" placeholder="" required=""></textarea>         
                                                    </div>
                                                </div>
                                    
                                    <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Family & Social History</label>
                                                        
                                               <textarea class="form-control" id="familyhistory_text" rows="5" name="familyhistory_text" placeholder="" required=""></textarea>         
                                                    </div>
                                                </div>
                                    
                                    <div class="button">
                                        <input type="submit" value="Submit" id="pasthistoryform" class="btn btn-primary btnus">
                                    </div>

                                    
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                </div>
                                
                                
                                
                                
                                <div class="tab-pane" id="grothparameters">                                    
                                                                      
                                    <div id="parametergrowth">
                                        <?php
                                        $growth_parameters = getPatientGrowthParameters($patientw["patient_id"]);
                                        if($growth_parameters>0)
                                        {
                                            while($growth_parameter=mysql_fetch_array($growth_parameters))
                                            {
                                        ?>
                                     <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-box candidate">
									
							<div class="matter">
                                                            <h1>Date:<?php echo date("d-M-Y h:i:s", strtotime($growth_parameter["createdAt"])) ;  ?>
									<button type="button" class="rotate1">
										<i class="fa fa-link" aria-hidden="true"></i>
									</button>
								</h1> 
								<ul class="list-inline">
									<li>
										<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Weight:<?php echo $growth_parameter["patient_weight"];  ?></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Weight:<?php echo $growth_parameter["patient_height"];  ?></a>
									</li>
								</ul>
								<p>Circumference:<?php echo $growth_parameter["patient_cirumference"];  ?></p>
								
							</div>
						</div>
                                        </div>
                                        <?php
                                                
                                            }
                                                
                                        }
                                        ?>
                                        
                                 
                                    </div>
                                        
                                        
                                        
						
					
                                    <div class="col-sm-offset-3 col-md-6 col-sm-6  col-xs-12">
                                        <form class="form-horizontal password" method=	"post" id="patient_growth_parameters">
                                            <input type="hidden" id="patient_id" name="patient_id" value="<?php echo $patientw["patient_id"]; ?>">
                                            
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Weight</label>
                                                        <input class="form-control" id="patient_weight" value="" name="patient_weight" required="" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Height</label>
                                                        <input class="form-control" id="patient_height" value="" name="patient_height" required="" type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Circumference
                                                        </label>
                                                        <input class="form-control" id="patient_circumference" value="" name="patient_circumference" required="" type="text">
                                                    </div>
                                                </div>

                                                <div class="button">
                                                    <button type="submit" value="Submit" class="btn btn-primary btnus" id="patientgrowthform">SAVE</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>

                                
                                <div class="tab-pane" id="progressivenotes">
                                    <div id="notesprogressive">
                                    <?php
                                        $progress_notes = getPatientProgressNotes($patientw["patient_id"]);
                                        if($progress_notes>0)
                                        {
                                            while($progress_note=mysql_fetch_array($progress_notes))
                                            {
                                        ?>
                                     <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-box candidate">
									
							<div class="matter">
                                                            <h1>Date:<?php echo date("d-M-Y h:i:s", strtotime($progress_note["createdAt"])) ;  ?>
									<button type="button" class="rotate1">
										<i class="fa fa-link" aria-hidden="true"></i>
									</button>
								</h1> 								
								<p><?php echo $progress_note["patient_progressive_notes"];  ?></p>
								
							</div>
						</div>
                                        </div>
                                        <?php
                                                
                                            }
                                                
                                        }
                                        ?>
                                     </div>
                                    
                                    
                                    <div class="col-sm-offset-3 col-md-6 col-sm-6  col-xs-12">
                                        <form class="form-horizontal password" method=	"post" id="patient_progressive_notes">
                                            <input type="hidden" id="patient_id" name="patient_id" value="<?php echo $patientw["patient_id"]; ?>">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Progressive Notes</label>
                                                        <textarea class="form-control" id="progressive_notes" rows="10" name="progressive_notes" placeholder="" required=""></textarea>
                                                        
                                                    </div>
                                                </div>
                                                

                                                

                                                <div class="button">
                                                    <button type="submit" value="Submit" class="btn btn-primary btnus" id="progressivenotesform">SAVE</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                
                                
                                <div class="tab-pane" id="patientdiagonsis">
                                    
                                    <div id="diagonsispatient">
                                    <?php
                                        $diagonsis = getPatientDiagonsis($patientw["patient_id"]);
                                        if($diagonsis>0)
                                        {
                                            while($diagons=mysql_fetch_array($diagonsis))
                                            {
                                        ?>
                                     <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-box candidate">
									
							<div class="matter">
                                                            <h1>Date:<?php echo date("d-M-Y h:i:s", strtotime($diagons["createdAt"])) ;  ?>
									<button type="button" class="rotate1">
										<i class="fa fa-link" aria-hidden="true"></i>
									</button>
								</h1> 								
								<p><?php echo $diagons["patient_diagonsis"];  ?></p>
								
							</div>
						</div>
                                        </div>
                                        <?php
                                                
                                            }
                                                
                                        }
                                        ?>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-sm-offset-3 col-md-6 col-sm-6  col-xs-12">
                                        <form class="form-horizontal password" method=	"post" id="patient_diagonsis">
                                         <input type="hidden" id="patient_id" name="patient_id" value="<?php echo $patientw["patient_id"]; ?>">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Diagonsis</label>
                                                        <textarea class="form-control" id="patients_diagonsis" rows="10" name="patients_diagonsis" placeholder="" required=""></textarea>
                                                        
                                                    </div>
                                                </div>
                                                

                                                

                                                <div class="button">
                                                    <button type="submit" value="Submit" class="btn btn-primary btnus" id="patientdiagonsisform">SAVE</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                
                                
                                <div class="tab-pane" id="patientlaborities">
                                    <div id="labortiesfor">
                                    <?php
                                        $laborties = getPatientLaborties($patientw["patient_id"]);
                                        if($laborties>0)
                                        {
                                            while($laborty=mysql_fetch_array($laborties))
                                            {
                                        ?>
                                     <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-box candidate">
									
							<div class="matter">
                                                            <h1>Date:<?php echo date("d-M-Y h:i:s", strtotime($laborty["createdAt"])) ;  ?>
									<button type="button" class="rotate1">
										<i class="fa fa-link" aria-hidden="true"></i>
									</button>
								</h1> 								
								<p><?php echo $laborty["patients_laborities"];  ?></p>
								
							</div>
						</div>
                                        </div>
                                        <?php
                                                
                                            }
                                                
                                        }
                                        ?>
                                    </div>
                                    
                                    <div class="col-sm-offset-3 col-md-6 col-sm-6  col-xs-12">
                                        <form class="form-horizontal password" method=	"post" id="patient_laborities">
                                    <input type="hidden" id="patient_id" name="patient_id" value="<?php echo $patientw["patient_id"]; ?>">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Laborties</label>
                                                        <textarea class="form-control" id="patients_laborities" rows="10" name="patients_laborities" placeholder="" required=""></textarea>
                                                        
                                                    </div>
                                                </div>
                                                

                                                

                                                <div class="button">
                                                    <button type="submit" value="Submit" class="btn btn-primary btnus" id="patientlabortiesform">SAVE</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="tab-pane" id="patientmedication">
                                    
                                    <div id="medicationfor">
                                    
                                    <?php
                                        $medications = getPatientMedication($patientw["patient_id"]);
                                        if($medications>0)
                                        {
                                            while($medication=mysql_fetch_array($medications))
                                            {
                                        ?>
                                     <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-box candidate">
									
							<div class="matter">
                                                            <h1>Date:<?php echo date("d-M-Y h:i:s", strtotime($medication["createdAt"])) ;  ?>
									<button type="button" class="rotate1">
										<i class="fa fa-link" aria-hidden="true"></i>
									</button>
								</h1> 								
								<p><?php echo $medication["patients_medication"];  ?></p>
								
							</div>
						</div>
                                        </div>
                                        <?php
                                                
                                            }
                                                
                                        }
                                        ?>
                                    
                                        
                                    </div>
                                    
                                    
                                    <div class="col-sm-offset-3 col-md-6 col-sm-6  col-xs-12">
                                        <form class="form-horizontal password" method=	"post" id="patient_medication">
                                       <input type="hidden" id="patient_id" name="patient_id" value="<?php echo $patientw["patient_id"]; ?>">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Medication</label>
                                                        <textarea class="form-control" id="patients_medication" rows="10" name="patients_medication" placeholder="" required=""></textarea>
                                                        
                                                    </div>
                                                </div>
                                                

                                                

                                                <div class="button">
                                                    <button type="submit" value="Submit" class="btn btn-primary btnus" id="patientmedicationform">SAVE</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>
                

                <?php
            } else {
                ?>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="match">
                        <p>No Record Found. </p>
                    </div>
                </div>
        <?php
    }
} else {
    $patients = getPatientByCard($patient_search);
    if ($patients > 0) {
        $patientw = mysql_fetch_array($patients);
        ?>    
                <div id="job">
                    <div class="container">
                        <div class="row">
                            <div class="canditate-profile">
                                <ul class="nav nav-tabs list-inline">
                                    <li class="">
                                        <a href="#pasthistory" data-toggle="tab" aria-expanded="false">HISTORY</a>
                                    </li>
                                    <li class="">
                                        <a href="#grothparameters" data-toggle="tab" aria-expanded="false">GROWTH PARAMETERS</a>
                                    </li>
                                    <li class="">
                                        <a href="#progressivenotes" data-toggle="tab" aria-expanded="false">PROGRESSIVE NOTES</a>
                                    </li>
                                    <li class="">
                                        <a href="#patientdiagonsis" data-toggle="tab" aria-expanded="false">DIAGONSIS</a>
                                    </li>
                                    <li class="">
                                        <a style="padding:22px 25px;" href="#patientlaborities" data-toggle="tab" aria-expanded="false">LABORTIES</a>
                                    </li>
                                    <li class="">
                                        <a style="padding:22px 25px;" href="#patientmedication" data-toggle="tab" aria-expanded="false">MEDICATIONS</a>
                                    </li>
                                </ul>
                            </div>




                           
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

                                
                                
                                <div class="tab-pane" id="pasthistory">                                    
                                                                      
                                 <div id="patientpasthistory">
                                        <?php
                                        $patient_history = getPatientPastHistory($patientw["patient_id"]);
                                        if($patient_history>0)
                                        {
                                            while($patients_history=mysql_fetch_array($patient_history))
                                            {
                                        ?>
                                     <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-box candidate">
									
							<div class="matter">
                                                            <h1>Date:<?php echo date("d-M-Y h:i:s", strtotime($patients_history["createdAt"])) ;  ?>
									<button type="button" class="rotate1">
										<i class="fa fa-link" aria-hidden="true"></i>
									</button>
								</h1> 
								<ul class="list-inline">
									<li>
                                                                            <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Present Complain:<strong><?php echo $patients_history["present_complain"];  ?></strong></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Present Complain Text:<?php echo $patients_history["presentcomplain_text"];  ?></a>
									</li>
								</ul>
								<p>Past history:<?php echo $patients_history["past_history"];  ?>,<?php echo $patients_history["pasthistory_text"];  ?></p>
                                                                <p>Birth History:<?php echo $patients_history["feeding_text"];  ?></p>
                                                                <p>Feeding:<?php echo $patients_history["feeding_text"];  ?></p>
                                                                <p>Vaccination:<?php echo $patients_history["vaccination_text"];  ?></p>
                                                                <p>Weaning:<?php echo $patients_history["weaning_text"];  ?></p>
                                                                <p>Nutrition:<?php echo $patients_history["nutrition_text"];  ?></p>
                                                                <p>Development:<?php echo $patients_history["development_text"];  ?></p>
                                                                <p>Family & Social History:<?php echo $patients_history["familyhistory_text"];  ?></p>
                                                                
                                                                
							</div>
						</div>
                                        </div>
                                        <?php
                                                
                                            }
                                                
                                        }
                                        ?>
                                        
                                 
                                    </div>   
                                        
                                        
                                        
						
					
           <div id="login-form">
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-2 col-md-8 col-sm-8 col-xs-12">
                        <div class="form">
                            <div class="border"></div>
                            <div class="border1"></div>
                            <form class="form-horizontal" method="post" id="complainpresent">
                                <input type="hidden" id="patient_id" name="patient_id" value="<?php echo $patientw["patient_id"]; ?>">
                                <fieldset>
                                    <div class="form-group">
                                        <label>Present Complain</label>
                                        <div class="col-sm-12 confirmation">
                                            
                                            <h3>General Symptoms</h3>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" type="checkbox" value="Fever">Fever  
                                            </label>

                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Ear ache" type="checkbox">Ear ache   
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Ear Discharge" type="checkbox">Ear Discharge
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Eye Discharge" type="checkbox">Eye Discharge  
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Thyroid Swelling" type="checkbox">Thyroid Swelling
                                            </label>
                                           
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Pallor" type="checkbox">Pallor
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Sweating" type="checkbox">Sweating
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Bone Pain" type="checkbox">Bone Pain
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Rashes" type="checkbox">Rashes
                                            </label>
                                            
                                            <h3>Systemic Review  <br><br>CNS</h3>
                                            
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Haedache" type="checkbox">Haedache
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Fits" type="checkbox">Fits 
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Unconsciousness" type="checkbox">Unconsciousness  
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Weakness" type="checkbox">  Weakness
                                            </label>
                                            
                                            
                                            <h3>Respiratory System</h3>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Sore Throat" type="checkbox">Sore Throat
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Cough" type="checkbox">Cough
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="SoB" type="checkbox">SoB   
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Cyanosis" type="checkbox">Cyanosis   
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Chest Pain" type="checkbox">Chest Pain  
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Excerse intolarence" type="checkbox">Excerse intolarence  
                                            </label>
                                            
                                            <h3>
                                                CVS
                                            </h3>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Palpitation" type="checkbox">Palpitation
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Tachycardia" type="checkbox">Tachycardia
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Bradycardia" type="checkbox">Bradycardia  
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Dysnea" type="checkbox">Dysnea  
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Cyanosis" type="checkbox">Cyanosis  
                                            </label>
                                            <h3>GIT</h3>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Vomiting" type="checkbox">Vomiting
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Diarrhea" type="checkbox">Diarrhea
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Jaundice" type="checkbox">Jaundice
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Melena" type="checkbox">Melena
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="A/Distension" type="checkbox">A/Distension
                                            </label>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Haematamsis" type="checkbox">Haematamsis
                                            </label>
                                            <h3>Pancreas</h3>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Excessive Eating" type="checkbox">Excessive Eating
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Weight Loss" type="checkbox">Weight Loss
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Polyurea" type="checkbox">Polyurea
                                            </label>
                                             
                                            <h3>
                                                Urinary System
                                            </h3>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Urination" type="checkbox">Urination 
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Dysurea" type="checkbox">Dysurea
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Haematuria" type="checkbox">Haematuria
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Lumbar pain" type="checkbox">Lumbar pain  
                                            </label>
                                            
                                            <h3>Auto Immune</h3>
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Rashes" type="checkbox">Rashes
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Hair Loss" type="checkbox">Hair Loss
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Joint pain" type="checkbox">Joint pain  
                                            </label>
                                            
                                            <label>
                                                <input name="present_complain[]" id="present_complain" value="Joint swolen" type="checkbox">Joint swolen  
                                            </label>
                                            
                                            <textarea class="form-control" id="presentcomplain_text" rows="5" name="presentcomplain_text" placeholder="" required=""></textarea>
                                            
                                            
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Past History</label>
                                                        <select class="selectpicker form-control" name="past_history" id="past_history">
                                                <option value="0">Select Past History</option>
                                                <option value="Medical">Medical</option>
                                                <option value="Surgical">Surgical</option>
                                            </select>
                                               <textarea class="form-control" id="pasthistory_text" rows="5" name="pasthistory_text" placeholder="" required=""></textarea>         
                                                    </div>
                                                </div>
                                    
                                    <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Birth History</label>
                                                        
                                               <textarea class="form-control" id="birthyhistory_text" rows="5" name="birthyhistory_text" placeholder="" required=""></textarea>         
                                                    </div>
                                                </div>
                                    
                                    <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Feeding</label>
                                                        
                                               <textarea class="form-control" id="feeding_text" rows="5" name="feeding_text" placeholder="" required=""></textarea>         
                                                    </div>
                                                </div>
                                    
                                    <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Vaccination</label>
                                                        
                                               <textarea class="form-control" id="vaccination_text" rows="5" name="vaccination_text" placeholder="" required=""></textarea>         
                                                    </div>
                                                </div>
                                    
                                    <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Weaning</label>
                                                        
                                               <textarea class="form-control" id="weaning_text" rows="5" name="weaning_text" placeholder="" required=""></textarea>         
                                                    </div>
                                                </div>
                                    
                                    <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Nutrition</label>
                                                        
                                               <textarea class="form-control" id="nutrition_text" rows="5" name="nutrition_text" placeholder="" required=""></textarea>         
                                                    </div>
                                                </div>
                                    
                                    <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Development (e.g Gross Motors,Hearing & Speech)</label>
                                                     
                                            
                                               <textarea class="form-control" id="development_text" rows="5" name="development_text" placeholder="" required=""></textarea>         
                                                    </div>
                                                </div>
                                    
                                    <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Family & Social History</label>
                                                        
                                               <textarea class="form-control" id="familyhistory_text" rows="5" name="familyhistory_text" placeholder="" required=""></textarea>         
                                                    </div>
                                                </div>
                                    
                                    <div class="button">
                                        <input type="submit" value="Submit" id="pasthistoryform" class="btn btn-primary btnus">
                                    </div>

                                    
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                </div>
                                
                                
                                
                                
                                <div class="tab-pane" id="grothparameters">                                    
                                                                      
                                    <div id="parametergrowth">
                                        <?php
                                        $growth_parameters = getPatientGrowthParameters($patientw["patient_id"]);
                                        if($growth_parameters>0)
                                        {
                                            while($growth_parameter=mysql_fetch_array($growth_parameters))
                                            {
                                        ?>
                                     <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-box candidate">
									
							<div class="matter">
                                                            <h1>Date:<?php echo date("d-M-Y h:i:s", strtotime($growth_parameter["createdAt"])) ;  ?>
									<button type="button" class="rotate1">
										<i class="fa fa-link" aria-hidden="true"></i>
									</button>
								</h1> 
								<ul class="list-inline">
									<li>
										<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Weight:<?php echo $growth_parameter["patient_weight"];  ?></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Weight:<?php echo $growth_parameter["patient_height"];  ?></a>
									</li>
								</ul>
								<p>Circumference:<?php echo $growth_parameter["patient_cirumference"];  ?></p>
								
							</div>
						</div>
                                        </div>
                                        <?php
                                                
                                            }
                                                
                                        }
                                        ?>
                                        
                                 
                                    </div>
                                        
                                        
                                        
						
					
                                    <div class="col-sm-offset-3 col-md-6 col-sm-6  col-xs-12">
                                        <form class="form-horizontal password" method=	"post" id="patient_growth_parameters">
                                            <input type="hidden" id="patient_id" name="patient_id" value="<?php echo $patientw["patient_id"]; ?>">
                                            
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Weight</label>
                                                        <input class="form-control" id="patient_weight" value="" name="patient_weight" required="" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Height</label>
                                                        <input class="form-control" id="patient_height" value="" name="patient_height" required="" type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Circumference
                                                        </label>
                                                        <input class="form-control" id="patient_circumference" value="" name="patient_circumference" required="" type="text">
                                                    </div>
                                                </div>

                                                <div class="button">
                                                    <button type="submit" value="Submit" class="btn btn-primary btnus" id="patientgrowthform">SAVE</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>

                                
                                <div class="tab-pane" id="progressivenotes">
                                    <div id="notesprogressive">
                                    <?php
                                        $progress_notes = getPatientProgressNotes($patientw["patient_id"]);
                                        if($progress_notes>0)
                                        {
                                            while($progress_note=mysql_fetch_array($progress_notes))
                                            {
                                        ?>
                                     <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-box candidate">
									
							<div class="matter">
                                                            <h1>Date:<?php echo date("d-M-Y h:i:s", strtotime($progress_note["createdAt"])) ;  ?>
									<button type="button" class="rotate1">
										<i class="fa fa-link" aria-hidden="true"></i>
									</button>
								</h1> 								
								<p><?php echo $progress_note["patient_progressive_notes"];  ?></p>
								
							</div>
						</div>
                                        </div>
                                        <?php
                                                
                                            }
                                                
                                        }
                                        ?>
                                     </div>
                                    
                                    
                                    <div class="col-sm-offset-3 col-md-6 col-sm-6  col-xs-12">
                                        <form class="form-horizontal password" method=	"post" id="patient_progressive_notes">
                                            <input type="hidden" id="patient_id" name="patient_id" value="<?php echo $patientw["patient_id"]; ?>">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Progressive Notes</label>
                                                        <textarea class="form-control" id="progressive_notes" rows="10" name="progressive_notes" placeholder="" required=""></textarea>
                                                        
                                                    </div>
                                                </div>
                                                

                                                

                                                <div class="button">
                                                    <button type="submit" value="Submit" class="btn btn-primary btnus" id="progressivenotesform">SAVE</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                
                                
                                <div class="tab-pane" id="patientdiagonsis">
                                    
                                    <div id="diagonsispatient">
                                    <?php
                                        $diagonsis = getPatientDiagonsis($patientw["patient_id"]);
                                        if($diagonsis>0)
                                        {
                                            while($diagons=mysql_fetch_array($diagonsis))
                                            {
                                        ?>
                                     <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-box candidate">
									
							<div class="matter">
                                                            <h1>Date:<?php echo date("d-M-Y h:i:s", strtotime($diagons["createdAt"])) ;  ?>
									<button type="button" class="rotate1">
										<i class="fa fa-link" aria-hidden="true"></i>
									</button>
								</h1> 								
								<p><?php echo $diagons["patient_diagonsis"];  ?></p>
								
							</div>
						</div>
                                        </div>
                                        <?php
                                                
                                            }
                                                
                                        }
                                        ?>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-sm-offset-3 col-md-6 col-sm-6  col-xs-12">
                                        <form class="form-horizontal password" method=	"post" id="patient_diagonsis">
                                         <input type="hidden" id="patient_id" name="patient_id" value="<?php echo $patientw["patient_id"]; ?>">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Diagonsis</label>
                                                        <textarea class="form-control" id="patients_diagonsis" rows="10" name="patients_diagonsis" placeholder="" required=""></textarea>
                                                        
                                                    </div>
                                                </div>
                                                

                                                

                                                <div class="button">
                                                    <button type="submit" value="Submit" class="btn btn-primary btnus" id="patientdiagonsisform">SAVE</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                
                                
                                <div class="tab-pane" id="patientlaborities">
                                    <div id="labortiesfor">
                                    <?php
                                        $laborties = getPatientLaborties($patientw["patient_id"]);
                                        if($laborties>0)
                                        {
                                            while($laborty=mysql_fetch_array($laborties))
                                            {
                                        ?>
                                     <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-box candidate">
									
							<div class="matter">
                                                            <h1>Date:<?php echo date("d-M-Y h:i:s", strtotime($laborty["createdAt"])) ;  ?>
									<button type="button" class="rotate1">
										<i class="fa fa-link" aria-hidden="true"></i>
									</button>
								</h1> 								
								<p><?php echo $laborty["patients_laborities"];  ?></p>
								
							</div>
						</div>
                                        </div>
                                        <?php
                                                
                                            }
                                                
                                        }
                                        ?>
                                    </div>
                                    
                                    <div class="col-sm-offset-3 col-md-6 col-sm-6  col-xs-12">
                                        <form class="form-horizontal password" method=	"post" id="patient_laborities">
                                    <input type="hidden" id="patient_id" name="patient_id" value="<?php echo $patientw["patient_id"]; ?>">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Laborties</label>
                                                        <textarea class="form-control" id="patients_laborities" rows="10" name="patients_laborities" placeholder="" required=""></textarea>
                                                        
                                                    </div>
                                                </div>
                                                

                                                

                                                <div class="button">
                                                    <button type="submit" value="Submit" class="btn btn-primary btnus" id="patientlabortiesform">SAVE</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="tab-pane" id="patientmedication">
                                    
                                    <div id="medicationfor">
                                    
                                    <?php
                                        $medications = getPatientMedication($patientw["patient_id"]);
                                        if($medications>0)
                                        {
                                            while($medication=mysql_fetch_array($medications))
                                            {
                                        ?>
                                     <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-box candidate">
									
							<div class="matter">
                                                            <h1>Date:<?php echo date("d-M-Y h:i:s", strtotime($medication["createdAt"])) ;  ?>
									<button type="button" class="rotate1">
										<i class="fa fa-link" aria-hidden="true"></i>
									</button>
								</h1> 								
								<p><?php echo $medication["patients_medication"];  ?></p>
								
							</div>
						</div>
                                        </div>
                                        <?php
                                                
                                            }
                                                
                                        }
                                        ?>
                                    
                                        
                                    </div>
                                    
                                    
                                    <div class="col-sm-offset-3 col-md-6 col-sm-6  col-xs-12">
                                        <form class="form-horizontal password" method=	"post" id="patient_medication">
                                       <input type="hidden" id="patient_id" name="patient_id" value="<?php echo $patientw["patient_id"]; ?>">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Medication</label>
                                                        <textarea class="form-control" id="patients_medication" rows="10" name="patients_medication" placeholder="" required=""></textarea>
                                                        
                                                    </div>
                                                </div>
                                                

                                                

                                                <div class="button">
                                                    <button type="submit" value="Submit" class="btn btn-primary btnus" id="patientmedicationform">SAVE</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>

        <?php
    } else {
        ?>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="match">
                        <p>No Record Found. </p>      </div>
                </div>
                <?php
            }
        }
        ?>
        
        
        
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
       
        <script>
     $(document).ready(function(){
  $("#pasthistoryform").click(function() {
   
  var patient_id=$("#patient_id").val();
  var presentcomplain_text=$("#presentcomplain_text").val();
  var past_history=$( "#past_history option:selected" ).val();
  var pasthistory_text=$("#pasthistory_text").val();
  var birthyhistory_text = $("#birthyhistory_text").val();
  var feeding_text=$("#feeding_text").val();
  var vaccination_text=$("#vaccination_text").val();
  var weaning_text=$("#weaning_text").val();
  var nutrition_text=$("#nutrition_text").val();
  var development_text=$("#development_text").val();
  var familyhistory_text=$("#familyhistory_text").val(); 
  var present_complain = [];
        $(':checkbox:checked').each(function(i){
          present_complain[i] = $(this).val();
        });
  var dataString = 'present_complain='+ present_complain + '&patient_id=' + patient_id+'&presentcomplain_text='+presentcomplain_text+''+'&past_history='+past_history+'&pasthistory_text='+pasthistory_text+'&feeding_text='+feeding_text+'&vaccination_text='+vaccination_text+'&weaning_text='+weaning_text+'&nutrition_text='+nutrition_text+'&development_text='+development_text+'&familyhistory_text='+familyhistory_text+'&birthyhistory_text='+birthyhistory_text;
  $.ajax({
    type: "POST",
    url: "addpatienthistory.php",
    data: dataString,
    cache: false,
    success: function(response){
    $("#patientpasthistory").html(response);
    $("#presentcomplain_text").val("");
    $("#past_history").val("");
    $("#pasthistory_text").val("");
    $("#feeding_text").val("");
    $("#vaccination_text").val("");
    $("#weaning_text").val("");
    $("#nutrition_text").val("");
    $("#development_text").val("");
    $("#familyhistory_text").val(""); 
    },complete:function(){
                        $('body, html').animate({scrollTop:$('#patientpasthistory').offset().top}, 'slow');
                    }
  });
return false;
});
});         
            
      $(document).ready(function(){
  $("#patientgrowthform").click(function() {
  var patient_weight = $("#patient_weight").val();
  var patient_height = $("#patient_height").val();
  var patient_circumference = $("#patient_circumference").val();
  var patient_id=$("#patient_id").val();
  var dataString = 'patient_weight='+ patient_weight + '&patient_height=' + patient_height + '&patient_circumference=' + patient_circumference+ '&patient_id=' + patient_id;
  $.ajax({
    type: "POST",
    url: "addpatientgrowth.php",
    data: dataString,
    cache: false,
    success: function(response){
    $("#parametergrowth").html(response);
    $("#patient_weight").val("");
    $("#patient_height").val(""); 
    $("#patient_circumference").val("");   
    },complete:function(){
                        $('body, html').animate({scrollTop:$('#parametergrowth').offset().top}, 'slow');
                    }
  });
return false;
});
});

$(document).ready(function(){
$("#progressivenotesform").click(function() {
  var progressive_notes = $("#progressive_notes").val();
  var patient_id=$("#patient_id").val();
  var dataString = 'patient_id='+ patient_id + '&progressive_notes=' + progressive_notes;
  $.ajax({
    type: "POST",
    url: "addprogressivenotes.php",
    data: dataString,
    cache: false,
    success: function(response){
     $("#notesprogressive").html(response);
     $("#progressive_notes").val(""); 
    },complete:function(){
                        $('body, html').animate({scrollTop:$('#notesprogressive').offset().top}, 'slow');
                    }
  });
return false;
});
});

$(document).ready(function(){
$("#patientdiagonsisform").click(function() {
  var patients_diagonsis = $("#patients_diagonsis").val();
  var patient_id=$("#patient_id").val();
  var dataString = 'patient_id='+ patient_id + '&patients_diagonsis=' + patients_diagonsis;
  $.ajax({
    type: "POST",
    url: "adddiagonsis.php",
    data: dataString,
     cache: false,
    success: function(response){
    $("#diagonsispatient").html(response);
     $("#patients_diagonsis").val(""); 
    },complete:function(){
                        $('body, html').animate({scrollTop:$('#diagonsispatient').offset().top}, 'slow');
                    }
  });
return false;
});



});
      
      
$(document).ready(function(){
$("#patientlabortiesform").click(function() {
  var patients_laborities = $("#patients_laborities").val();
  var patient_id=$("#patient_id").val();
  var dataString = 'patient_id='+ patient_id + '&patients_laborities=' + patients_laborities;
  $.ajax({
    type: "POST",
    url: "addlaborities.php",
    data: dataString,
      cache: false,
    success: function(response){
     $("#labortiesfor").html(response);
     $("#patients_laborities").val(""); 
    },complete:function(){
                        $('body, html').animate({scrollTop:$('#labortiesfor').offset().top}, 'slow');
                    }
  });
return false;
});



});      

$(document).ready(function(){
$("#patientmedicationform").click(function() {
  var patients_medication = $("#patients_medication").val();
  var patient_id=$("#patient_id").val();
  var dataString = 'patient_id='+ patient_id + '&patients_medication=' + patients_medication;
  $.ajax({
    type: "POST",
    url: "addmedications.php",
    data: dataString,
     cache: false,
    success: function(response){
     $("#medicationfor").html(response);
     $("#patients_medication").val(""); 
    },complete:function(){
                        $('body, html').animate({scrollTop:$('#medicationfor').offset().top}, 'slow');
                    }
  });
return false;
});



});   

        
        </script>
    </body>
</html>

