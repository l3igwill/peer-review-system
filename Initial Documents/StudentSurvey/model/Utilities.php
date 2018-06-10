<?php
 function validateInputs(){ 
     unset($_SESSION['errors']);
     $flag = true;
     $Message ="";
     
    if(!isset($_POST['studCompEval'])){
         $flag = false;
         $Message .= "You must enter your name in the 'Student completeing evaluation' box.\n";
     } 
     if(!isset($_POST['reviewee'])){
         $flag = false;
         $Message .= "You must enter yourself or other students name as the reviewee.\n";
     } 
     if(!isset($_POST['teamName'])){
         $flag = false;
         $Message .= "You must enter a team or project name.\n";
     } 
     if(!isset($_POST['className'])){
         $flag = false;
         $Message .= "You must enter a the name of your class.\n";
     } 
     //table one questions check
     if(!isset($_POST['p1'])){
         $flag = false;
         $Message .= "You must make a selection for Working Productiviy question 1.\n";
     } 
     if(!isset($_POST['p2'])){
         $flag = false;
         $Message .= "You must make a selection for Working Productiviy question 2.\n";
     } 
     if(!isset($_POST['p3'])){
         $flag = false;
         $Message .= "You must make a selection for Working Productiviy question 3.\n";
     } 
     if(!isset($_POST['p4'])){
         $flag = false;
         $Message .= "You must make a selection for Working Productiviy question 4.\n";
     } 
     if(!isset($_POST['p5'])){
         $flag = false;
         $Message .= "You must not leave Working Productivity Things I/They do well empty.\n";
     } 
     if(!isset($_POST['p6'])){
         $flag = false;
         $Message .= "You must not leave Working Productivity Things I/They should improve upon empty.\n";
     }
     
     //table two question checks
    if(!isset($_POST['c1'])){
         $flag = false;
         $Message .= "You must make a selection for Communicating Clearly question 1.\n";
     } 
     if(!isset($_POST['c2'])){
         $flag = false;
         $Message .= "You must make a selection for Communicating Clearly question 2.\n";
     } 
     if(!isset($_POST['c3'])){
         $flag = false;
         $Message .= "You must make a selection for Communicating Clearly question 3.\n";
     } 
     if(!isset($_POST['c4'])){
         $flag = false;
         $Message .= "You must make a selection for Communicating Clearly question 4.\n";
     } 
     if(!isset($_POST['c5'])){
         $flag = false;
         $Message .= "You must make a selection for Communicating Clearly question 5.\n";
     } 
     if(!isset($_POST['c6'])){
         $flag = false;
         $Message .= "You must not leave Communicating Clearly Things I/They do well empty.\n";
     } 
     if(!isset($_POST['c7'])){
         $flag = false;
         $Message .= "You must not leave Communicating Clearly Things I/They should improve upon empty.\n";
     } 
     
     //table three question check
     if(!isset($_POST['w1'])){
         $flag = false;
         $Message .= "You must make a selection for Working Cooperatively question 1.\n";
     } 
     if(!isset($_POST['w2'])){
         $flag = false;
         $Message .= "You must make a selection for Working Cooperatively question 2.\n";
     } 
     if(!isset($_POST['w3'])){
         $flag = false;
         $Message .= "You must make a selection for Working Cooperatively question 3.\n";
     } 
     if(!isset($_POST['w4'])){
         $flag = false;
         $Message .= "You must make a selection for Working Cooperatively question 4.\n";
     } 
     if(!isset($_POST['w5'])){
         $flag = false;
         $Message .= "You must not leave Working Cooperatively Things I/They do well empty.\n";
     } 
     if(!isset($_POST['w6'])){
         $flag = false;
         $Message .= "You must not leave Working Cooperatively Things I/They should improve upon empty.\n";
     } 
     
     //table four question check.
     
    if(!isset($_POST['a1'])){
         $flag = false;
         $Message .= "You must make a selection for Acting Responsibly / Acting with Integrity question 1.\n";
     } 
     if(!isset($_POST['a2'])){
         $flag = false;
         $Message .= "You must make a selection for Acting Responsibly / Acting with Integrity question 2.\n";
     } 
     if(!isset($_POST['a3'])){
         $flag = false;
         $Message .= "You must make a selection for Acting Responsibly / Acting with Integrity question 3.\n";
     } 
     if(!isset($_POST['a4'])){
         $flag = false;
         $Message .= "You must make a selection for Acting Responsibly / Acting with Integrity question 4.\n";
     } 
     if(!isset($_POST['a5'])){
         $flag = false;
         $Message .= "You must not leave Acting Responsibly / Acting with Integrity Things I/They do well empty.\n";
     } 
     if(!isset($_POST['a6'])){
         $flag = false;
         $Message .= "You must not leave Acting Responsibly / Acting with Integrity Things I/They should improve upon empty.\n";
     } 
     
     //table five question check.
     if(!isset($_POST['t1'])){
         $flag = false;
         $Message .= "You must make a selection for Thinking Critically and Creatively question 1.\n";
     }
     if(!isset($_POST['t2'])){
         $flag = false;
         $Message .= "You must make a selection for Thinking Critically and Creatively question 2.\n";
     }
     if(!isset($_POST['t3'])){
         $flag = false;
         $Message .= "You must not leave Thinking Critically and Creatively Things I/They do well empty.\n";
     }
     if(!isset($_POST['t4'])){
         $flag = false;
         $Message .= "You must not leave Thinking Critically and Creatively Things I/They should improve upon empty.\n";
     }
     
     //table six question check.
     if(!isset($_POST['aa1'])){
         $flag = false;
         $Message .= "You must make a selection for Applying Technology question 1.\n";
     }
     if(!isset($_POST['aa2'])){
         $flag = false;
         $Message .= "You must make a selection for Applying Technology question 2.\n";
     }
     if(!isset($_POST['aa3'])){
         $flag = false;
         $Message .= "You must not leave Applying Technology Things I/They do well empty.\n";
     }
     if(!isset($_POST['aa4'])){
         $flag = false;
         $Message .= "You must not leave Applying Technology Things I/They should improve upon empty.\n";
     }
     
     
     $_SESSION['errors'] = $Message;
     return $flag;
 }
?>
