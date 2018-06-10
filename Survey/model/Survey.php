<?php
function AddSurvey($surveyTime){
    global $db;
    extract($_POST);
    $query ="INSERT INTO survey (survey_id,student_id, student_reviewed,team_id, survey_time) VALUES (NULL ,:studentid,:studentreview,:teamid,:time)";
    $query2="SELECT LAST_INSERT_ID();";

    $statement = $db->prepare($query);
    $statement ->bindValue(':studentid',$reviewer);
    $statement ->bindValue(':studentreview',$reviewee);
    $statement ->bindValue(':teamid',$teamName);
    $statement -> bindValue(":time",$surveyTime);
    $statement->execute();

    $statement2 = $db->prepare($query2);
    $statement2->execute();
    $result = $statement2-> fetch(PDO::FETCH_ASSOC);
    $statement->closeCursor();

    return $result;
}
function FetchSurveys(){
    global $db;
    extract($_POST);
    $query ="SELECT * FROM survey WHERE student_reviewed = :student_id ORDER BY submit_time DESC;";

    $statement = $db -> prepare($query);
    $statement -> bindValue(':student_id',$student);
    $statement -> execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement ->closeCursor();
    return $results;
}
function FetchSurveysBy(){
    global $db;
    extract($_POST);
    $query ="SELECT * FROM survey WHERE student_id = :student_id ORDER BY submit_time DESC;";

    $statement = $db -> prepare($query);
    $statement -> bindValue(':student_id',$student);
    $statement -> execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement ->closeCursor();
    return $results;
}
function FetchSurvey($id){
    global $db;

    $query = "SELECT * FROM survey WHERE survey_id= :id";

    $statement =$db -> prepare($query);
    $statement -> bindValue(':id',$id);
    $statement -> execute();

    $results = $statement -> fetch(2);
    $statement -> closeCursor();
    return $results;
}