<?php
include("functions.php");
$patient_id = mysql_real_escape_string($_POST["patient_id"]);
$patients_laborities = mysql_real_escape_string($_POST["patients_laborities"]);
addPatientLaborities($patient_id, $patients_laborities);
$laborties = getPatientLaborties($patient_id);
if ($laborties > 0) {
    while ($laborty = mysql_fetch_array($laborties)) {
        ?>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="product-box candidate">

                <div class="matter">
                    <h1>Date:<?php echo date("d-M-Y h:i:s", strtotime($laborty["createdAt"])); ?>
                        <button type="button" class="rotate1">
                            <i class="fa fa-link" aria-hidden="true"></i>
                        </button>
                    </h1> 								
                    <p><?php echo $laborty["patients_laborities"]; ?></p>

                </div>
            </div>
        </div>
        <?php
    }
}
?>