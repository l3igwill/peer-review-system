<?php
function AddCustomerSurvey(){
    global $db;
    extract($_POST);

    $query="INSERT INTO customersurvey (survey_id,email,project_name,customer_name,question1,question1a,question1b,question1c,question2,question2a,question2b,question2c,question2d,question3,question3a,question3b,question3c,question3d,question3e,question4,question5) 
                VALUES (null,:email,:project_name,:customer_name,:question1,:question1a,:question1b,:question1c,:question2,:question2a,:question2b,:question2c,:question2d,:question3,:question3a,:question3b,:question3c,:question3d,:question3e,:question4,:question5);";

    $s = $db -> prepare($query);

    $s ->bindValue(':email',$email);
    $s ->bindValue(':project_name',$projectName);
    $s ->bindValue(':customer_name',$name);
    $s ->bindValue(':question1',$question1);
    $s ->bindValue(':question1a',$question1a);
    $s ->bindValue(':question1b',$question1b);
    $s ->bindValue(':question1c',$question1c);
    $s ->bindValue(':question2',$question2);
    $s ->bindValue(':question2a',$question2a);
    $s ->bindValue(':question2b',$question2b);
    $s ->bindValue(':question2c',$question2c);
    $s ->bindValue(':question2d',$question2d);
    $s ->bindValue(':question3',$question3);
    $s ->bindValue(':question3a',$question3a);
    $s ->bindValue(':question3b',$question3b);
    $s ->bindValue(':question3c',$question3c);
    $s ->bindValue(':question3d',$question3d);
    $s ->bindValue(':question3e',$question3e);
    $s ->bindValue(':question4',$question4);
    $s ->bindValue(':question5',$question5);
    $s->execute();
    $s ->closeCursor();
    $result = $s -> rowCount();
    return $result;
}
function FetchAllCustomerSurveys(){
    global $db;
    $query = "SELECT survey_id,email,project_name,customer_name,submit_time FROM customersurvey ORDER BY submit_time DESC";
    $s = $db -> prepare($query);
    $s -> execute();
    $results = $s -> fetchAll(2);
    $s -> closeCursor();
    return $results;
}
function FetchCustomerSurvey($given_id){
    global $db;
    $query = "SELECT * FROM customersurvey where survey_id = :id";
    $s = $db -> prepare($query);
    $s -> bindValue(':id', $given_id);
    $s -> execute();
    $result = $s -> fetch(2);
    $s -> closeCursor();
    return $result;
}