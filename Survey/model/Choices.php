<?php
function GetListChoices()
{
    global $db;
    $query = 'select * from choice order by choice_id ASC ';
    $statement = $db->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();

    return $results;
}