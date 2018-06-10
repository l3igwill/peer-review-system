<?php
//Controller for Student surveys
session_start();
$action =(isset($_POST['action'])) ? $_POST['action']:"StudentEvaluation";
include("model/Utilities.php");

switch(true){
    case strpos($action,"StudentEvaluation")===0:
        include("views/Header.html");
        include("views/StudentEvaluation.php");
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
            include("views/StudentEvaluation.php");
            include("views/Footer.html");
        }
        
        break;
}
?>
