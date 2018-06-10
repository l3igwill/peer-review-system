<?php
 function validateInputs($questions, $categories){
     unset($_SESSION['errors']);
     $flag = true;
     $Message ="";



    foreach($questions as $question){

        if(!isset($_POST['Q'.$question['question_id']])){
            $flag=false;
            $Message = "All questions are required, to continue.<br>";
        }
    }
    foreach ($categories as $category) {
        if(!isset($_POST['F'.$category['category_id']])){
            $flag=false;
            if($_POST['F'.$category['category_id']].lenth < 100){
                $Message.="You must submit a minimum of 100 characters.<br>";
            }
            $Message.="Please enter your feedback in the text boxes.<br>";
            break;
        }

    }
    if(!isset($_POST['reviewer'])){
        $flag=false;
        $Message .= "You must select yourself as the reviewer.\n";
    }
     if(!isset($_POST['reviewee'])){
         $flag=false;
         $Message .= "You must select who your reviewing.\n";
     }
     if(!isset($_POST['teamName'])){
         $flag=false;
         $Message .= "You must select your team.\n";
     }

     $_SESSION['errors'] = $Message;
     return $flag;
 }
 function RetrieveLastID(){
     global $db;

     $query="SELECT LAST_INSERT_ID()";
     $statement=$db ->prepare($query);

     $statement ->execute();
     $statement ->closeCursor();
     return $statement->fetch(PDO::FETCH_ASSOC);
 }
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
function validateCustomerInputs(){
    $p=$_POST;
    $array=['1','1a','1b','1c','2','2a','2b','2c','2d','3','3a','3b','3c','3d','3e','4','5'];
    //need check for question5, email, projectName, name
    $flag=true;

    //check multiple choice customer questions.
    foreach($array as $a){
        if(!isset($p['question'.$a])){
            $flag=false;
        }
    }
    if(!isset($p['email'])){
        $flag=false;
    }
    if(!isset($p['projectName'])){
        $flag=false;
    }
    if(!isset($p['name'])){
        $flag=false;
    }

    return $flag;
}
?>
