<?php
function AddFeedback($key,$value,$id){
    global $db;

    $value = filter_var($value,FILTER_SANITIZE_SPECIAL_CHARS);

    $query="INSERT INTO feedback (survey_id,category_id,feedback_given) Values (:surveyid,:categoryid,:feedback)";
    $statement=$db ->prepare($query);
    $statement ->bindValue(':surveyid',$id['LAST_INSERT_ID()']);
    $statement ->bindValue(':categoryid',substr($key,1));
    $statement -> bindValue(':feedback',$value);
    $statement ->execute();
    $statement ->closeCursor();
    return $statement ->rowCount();
}
function FetchAssociatedFeedback($surveyId){
    global $db;
    $query= "SELECT * FROM feedback WHERE survey_id = :id";
    $s = $db ->prepare($query);
    $s -> bindValue(':id',$surveyId);
    $s->execute();
    $results = $s ->fetchAll(2);
    $s ->closeCursor();
    return $results;
}