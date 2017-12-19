<?php
include("functions.php");
$patient_id = mysql_real_escape_string($_POST["patient_id"]);
$patients_medication = mysql_real_escape_string($_POST["patients_medication"]);
addPatientMedication($patient_id, $patients_medication);
$medications = getPatientMedication($patient_id);
if ($medications > 0) {
    while ($medication = mysql_fetch_array($medications)) {
        ?>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="product-box candidate">

                <div class="matter">
                    <h1>Date:<?php echo date("d-M-Y h:i:s", strtotime($medication["createdAt"])); ?>
                        <button type="button" class="rotate1">
                            <i class="fa fa-link" aria-hidden="true"></i>
                        </button>
                    </h1> 								
                    <p><?php echo $medication["patients_medication"]; ?></p>

                </div>
            </div>
        </div>
        <?php
    }
}
?>