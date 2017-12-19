<?php
//------------------------Variable for Server name,Database,User name,Password--------------------------------
error_reporting(0);
//------------------------Variable for Server name,Database,User name,Password--------------------------------
    $adb ="albatoolmdcdb";
    $db_server ="localhost";
    $db_user = "root";
    $db_password = "";
 $link_db=mysql_connect($db_server,$db_user,$db_password);
 if(!$link_db) {
        die('Failed to connect to server: ' . mysql_error());
    }
 $db=mysql_select_db($adb,$link_db);    
    if(!$db) {
        die('Unable to select database:'.mysql_error());
    }
date_default_timezone_set("Asia/Karachi");


function generateCardNumber()
{
    //set the random id length 

}

function generatePIN($digits = 4){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
 

function registerUser($patient_name,$patient_age,$father_name,$patient_gender,$contact_number,$address,$patient_card)
{
    $createdAt=  date("Y-m-d h:i:s");
    $updatedAt=  date("Y-m-d h:i:s");
    $query="insert into batool_patients(patient_name,patient_age,father_name,conact_number,patient_address,patient_card_number,patient_gender,createdAt,updatedAt) values('$patient_name','$patient_age','$father_name','$contact_number','$address','$patient_card','$patient_gender','$createdAt','$updatedAt')";
    mysql_query($query) or die(mysql_error());
    return mysql_insert_id();
}

function getLastInsertedPatient()
{
    
}

function getPatientById($patient_id)
{
    $query="select patient_id,patient_name,patient_age,father_name,conact_number,patient_address,patient_card_number,patient_gender,createdAt,updatedAt from batool_patients where patient_id=$patient_id";
    $result=  mysql_query($query) or die(mysql_error());
    return $result;
}

function getPatientByCard($patient_card)
{
    $query="select patient_id,patient_name,patient_age,father_name,conact_number,patient_address,patient_card_number,patient_gender,createdAt,updatedAt from batool_patients where patient_card_number='$patient_card'";
    $result=  mysql_query($query) or die(mysql_error());
    return $result;    
}

function getPatientByContactNumber($conact_number)
{
    $query="select patient_id,patient_name,patient_age,father_name,conact_number,patient_address,patient_card_number,patient_gender,createdAt,updatedAt from batool_patients where conact_number='$conact_number'";
    $result=  mysql_query($query) or die(mysql_error());
    return $result;  
}

function addPatientGrowthParameters($patient_id,$patient_weight,$patient_height,$patient_circumference)
{
     $createdAt=  date("Y-m-d h:i:s");
     $query="insert into patient_growthparameters(patient_id,patient_weight,patient_height,patient_cirumference,createdAt) values($patient_id,'$patient_weight','$patient_height','$patient_circumference','$createdAt')";
     mysql_query($query) or die(mysql_error());
}

function addPatientProgressiveNotes($patient_id,$patient_progressive_notes)
{
    $createdAt=  date("Y-m-d h:i:s");
     $query="insert into patient_progressive_notes(patient_id,patient_progressive_notes,createdAt) values($patient_id,'$patient_progressive_notes','$createdAt')";
     mysql_query($query) or die(mysql_error());
}

function addPatientPatientDiagonsis($patient_id,$patient_diagonsis)
{
    $createdAt=  date("Y-m-d h:i:s");
     $query="insert into patient_diagonsis(patient_id,patient_diagonsis,createdAt) values($patient_id,'$patient_diagonsis','$createdAt')";
     mysql_query($query) or die(mysql_error());
}

function addPatientLaborities($patient_id,$patients_laborities)
{
    $createdAt=  date("Y-m-d h:i:s");
     $query="insert into patients_laborities(patient_id,patients_laborities,createdAt) values($patient_id,'$patients_laborities','$createdAt')";
     mysql_query($query) or die(mysql_error());
}

function addPatientMedication($patient_id,$patients_medication)
{
    $createdAt=  date("Y-m-d h:i:s");
    $query="insert into patients_medications(patient_id,patients_medication,createdAt) values($patient_id,'$patients_medication','$createdAt')";
    mysql_query($query) or die(mysql_error());
}


function getPatientGrowthParameters($patient_id)
{
    $query="select patient_id,patient_weight,patient_height,patient_cirumference,createdAt from patient_growthparameters where patient_id=$patient_id order by createdAt DESC";
    $result=  mysql_query($query) or die(mysql_error());
    return $result; 
}

function getPatientProgressNotes($patient_id)
{    
    $query="select patient_id,patient_progressive_notes,createdAt from patient_progressive_notes where patient_id=$patient_id order by createdAt DESC";
    $result=  mysql_query($query) or die(mysql_error());
    return $result;
}

function getPatientDiagonsis($patient_id)
{
    $query="select patient_id,patient_diagonsis,createdAt from patient_diagonsis where patient_id=$patient_id order by createdAt DESC";
    $result=  mysql_query($query) or die(mysql_error());
    return $result;
}

function getPatientLaborties($patient_id)
{
    $query="select patient_id,patients_laborities,createdAt from patients_laborities where patient_id=$patient_id order by createdAt DESC";
    $result=  mysql_query($query) or die(mysql_error());
    return $result;
}


function getPatientMedication($patient_id)
{
    $query="select patient_id,patients_medication,createdAt from patients_medications where patient_id=$patient_id order by createdAt DESC";
    $result=  mysql_query($query) or die(mysql_error());
    return $result;
}

function addPatientPastHistory($patient_id,$present_complain,$presentcomplain_text,$past_history,$pasthistory_text,$birthyhistory_text,$feeding_text,$vaccination_text,$weaning_text,$nutrition_text,$development_text,$familyhistory_text)
{
    $createdAt=  date("Y-m-d h:i:s");
    $query="insert into patient_pasthistory(patient_id,present_complain,presentcomplain_text,past_history,pasthistory_text,birthyhistory_text,feeding_text,vaccination_text,weaning_text,nutrition_text,development_text,familyhistory_text,createdAt) values($patient_id,'$present_complain','$presentcomplain_text','$past_history','$pasthistory_text','$birthyhistory_text','$feeding_text','$vaccination_text','$weaning_text','$nutrition_text','$development_text','$familyhistory_text','$createdAt')";
    mysql_query($query) or die(mysql_error());
}

function getPatientPastHistory($patient_id)
{
    $query="select patient_id,present_complain,presentcomplain_text,past_history,pasthistory_text,feeding_text,vaccination_text,weaning_text,nutrition_text,development_text,familyhistory_text,createdAt from patient_pasthistory where patient_id=$patient_id order by createdAt DESC";
    $result=  mysql_query($query) or die(mysql_error());
    return $result;
}