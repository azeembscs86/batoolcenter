<?php
include("functions.php");
$patient_name     =  mysql_real_escape_string($_POST["patient_name"]);
$patient_age      =  mysql_real_escape_string($_POST["patient_age"]);
$father_name      =  mysql_real_escape_string($_POST["father_name"]);
$patient_gender   =  mysql_real_escape_string($_POST["patient_gender"]);
$contact_number   =  mysql_real_escape_string($_POST["contact_number"]);
$address          =  mysql_real_escape_string($_POST["address"]);
$digits = 5;
$patient_card     = rand(pow(10, $digits-1), pow(10, $digits)-1);
$patient_id=registerUser($patient_name,$patient_age,$father_name,$patient_gender,$contact_number,$address,$patient_card);
header("location:printpatient.php?patient_id=$patient_id");