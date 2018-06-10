<?php
function FetchAssociatedQuestions($surveyId){
    global $db;

    $query = "SELECT * FROM surveyquestion where survey_id = :id";

    $s = $db -> prepare($query);
    $s -> bindValue(':id',$surveyId);
    $s->execute();
    $results = $s ->fetchAll(2);
    $s->closeCursor();
    return $results;


}