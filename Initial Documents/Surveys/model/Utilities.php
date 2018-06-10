<?php
 function validateInputs(){ 
     unset($_SESSION['errors']);
     $flag = true;
     $Message ="";
     
     if(!isset($_POST['question1'])){
         $flag = false;
         $Message .= "Question 1 needs a selection.\n";
     }
     if(!isset($_POST['question1a'])){
         $flag = false;
         $Message .= "Question 1a needs a selection.\n";
     }
     if(!isset($_POST['question1b'])){
         $flag = false;
         $Message .= "Question 1b needs a selection.\n";
     }
     if(!isset($_POST['question1c'])){
         $flag = false;
         $Message .= "Question 1c needs a selection.\n";
     }
     if(!isset($_POST['question2'])){
         $flag = false;
         $Message .= "Question 2 needs a selection.\n";
     }
     if(!isset($_POST['question2a'])){
         $flag = false;
         $Message .= "Question 2a needs a selection.\n";
     }
     if(!isset($_POST['question2b'])){
         $flag = false;
         $Message .= "Question 2b needs a selection.\n";
     }
     if(!isset($_POST['question2c'])){
         $flag = false;
         $Message .= "Question 2c needs a selection.\n";
     }
     if(!isset($_POST['question2d'])){
         $flag = false;
         $Message .= "Question 2d needs a selection.\n";
     }
     if(!isset($_POST['question3'])){
         $flag = false;
         $Message .= "Question 3 needs a selection.\n";
     }
     if(!isset($_POST['email'])){
         $flag = false;
         $Message .= "You are required to enter an email\n";
     }
     if(!isset($_POST['projectName'])){
         $flag = false;
         $Message .= "You are required to enter the project name.\n";
     }
     if(!isset($_POST['name'])){
         $flag = false;
         $Message .= "You are required to enter your name.\n";
     }
     $_SESSION['errors'] = $Message;
     return $flag;
 }
?>
