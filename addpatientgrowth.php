<?php
include("functions.php");
$patient_id = mysql_real_escape_string($_POST["patient_id"]);
$patient_weight = mysql_real_escape_string($_POST["patient_weight"]);
$patient_height = mysql_real_escape_string($_POST["patient_height"]);
$patient_circumference = mysql_real_escape_string($_POST["patient_circumference"]);
addPatientGrowthParameters($patient_id, $patient_weight, $patient_height, $patient_circumference);
$growth_parameters = getPatientGrowthParameters($patient_id);
if ($growth_parameters > 0) {
    while ($growth_parameter = mysql_fetch_array($growth_parameters)) {
        ?>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="product-box candidate">

                <div class="matter">
                    <h1>Date:<?php echo date("d-M-Y h:i:s", strtotime($growth_parameter["createdAt"])); ?>
                        <button type="button" class="rotate1">
                            <i class="fa fa-link" aria-hidden="true"></i>
                        </button>
                    </h1> 
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Weight:<?php echo $growth_parameter["patient_weight"]; ?></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Weight:<?php echo $growth_parameter["patient_height"]; ?></a>
                        </li>
                    </ul>
                    <p>Circumference:<?php echo $growth_parameter["patient_cirumference"]; ?></p>

                </div>
            </div>
        </div>
        <?php
    }
}
?>