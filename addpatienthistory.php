<?php
include("functions.php");
$patient_id           = mysql_real_escape_string($_POST["patient_id"]);
$present_complain     = mysql_real_escape_string($_POST["present_complain"]);
$presentcomplain_text = mysql_real_escape_string($_POST["presentcomplain_text"]);
$past_history         = mysql_real_escape_string($_POST["past_history"]);
$pasthistory_text     = mysql_real_escape_string($_POST["pasthistory_text"]);
$feeding_text         = mysql_real_escape_string($_POST["feeding_text"]);
$vaccination_text     = mysql_real_escape_string($_POST["vaccination_text"]);
$weaning_text         = mysql_real_escape_string($_POST["weaning_text"]);
$nutrition_text       = mysql_real_escape_string($_POST["nutrition_text"]);
$development_text     = mysql_real_escape_string($_POST["development_text"]);
$familyhistory_text   = mysql_real_escape_string($_POST["familyhistory_text"]);
$birthyhistory_text    = mysql_real_escape_string($_POST["birthyhistory_text"]);
addPatientPastHistory($patient_id,$present_complain,$presentcomplain_text,$past_history,$pasthistory_text,$birthyhistory_text,$feeding_text,$vaccination_text,$weaning_text,$nutrition_text,$development_text,$familyhistory_text);
$patient_history = getPatientPastHistory($patient_id);
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