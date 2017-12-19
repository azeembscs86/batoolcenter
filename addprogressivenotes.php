<?php
include("functions.php");
$patient_id = mysql_real_escape_string($_POST["patient_id"]);
$patient_progressive_notes = mysql_real_escape_string($_POST["progressive_notes"]);
addPatientProgressiveNotes($patient_id, $patient_progressive_notes);
$progress_notes = getPatientProgressNotes($patient_id);
if ($progress_notes > 0) {
    while ($progress_note = mysql_fetch_array($progress_notes)) {
        ?>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="product-box candidate">

                <div class="matter">
                    <h1>Date:<?php echo date("d-M-Y h:i:s", strtotime($progress_note["createdAt"])); ?>
                        <button type="button" class="rotate1">
                            <i class="fa fa-link" aria-hidden="true"></i>
                        </button>
                    </h1> 								
                    <p><?php echo $progress_note["patient_progressive_notes"]; ?></p>

                </div>
            </div>
        </div>
        <?php
    }
}
?>