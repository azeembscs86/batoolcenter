<?php
include("functions.php");
$patient_id = mysql_real_escape_string($_POST["patient_id"]);
$patient_diagonsis = mysql_real_escape_string($_POST["patients_diagonsis"]);
addPatientPatientDiagonsis($patient_id, $patient_diagonsis);
$diagonsis = getPatientDiagonsis($patient_id);
if ($diagonsis > 0) {
    while ($diagons = mysql_fetch_array($diagonsis)) {
        ?>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="product-box candidate">

                <div class="matter">
                    <h1>Date:<?php echo date("d-M-Y h:i:s", strtotime($diagons["createdAt"])); ?>
                        <button type="button" class="rotate1">
                            <i class="fa fa-link" aria-hidden="true"></i>
                        </button>
                    </h1> 								
                    <p><?php echo $diagons["patient_diagonsis"]; ?></p>

                </div>
            </div>
        </div>
        <?php
    }
}
?>