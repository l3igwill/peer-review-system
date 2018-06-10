<?php
function GetListQuestions()
{
    global $db;
    $query = 'select * from question order by question_id ASC ';
    $statement = $db->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();

    return $results;
}

function AddQuestions($key,$value,$id){
    global $db;

    $query="INSERT INTO surveyquestion (survey_id,question_id,user_selection) Values (:surveyid,:questionid,:selection)";
    $statement=$db ->prepare($query);
    $statement ->bindValue(':surveyid',$id['LAST_INSERT_ID()']);
    $statement ->bindValue(':questionid',substr($key,1));
    $statement -> bindValue(':selection',$value);
    $statement ->execute();
    $statement ->closeCursor();
    return $statement ->rowCount();

}