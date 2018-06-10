<?php
session_start();
$action =(isset($_POST['action'])) ? $_POST['action']:"custSatisfaction";
include("model/Utilities.php");

switch(true){
    case strpos($action,"custSatisfaction")===0:
        include("views/Header.html");
        include("views/CustomerSatisfactionSurvey.php");
        include("views/Footer.html");
        break;
    case strpos($action,"sendsurvey")===0:
        if(validateInputs()){
            include("views/Header.html");
            include("views/sendsurvey.php");
            include("views/Footer.html");  
            session_destroy();
        }else{
            
            include("views/Header.html");
            include("views/CustomerSatisfactionSurvey.php");
            include("views/Footer.html");
        }
        
        break;
    case strpos($action, "studentSurvey")===0:
        include("views/StudentHeader.html");
        include("views/StudentEvaluation.php");
        include("views/Footer.html");
        break;
        
}
?>
