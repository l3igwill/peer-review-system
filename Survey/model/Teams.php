<?php

function GetListTeams()
{
    global $db;
    $query = 'select * from team order by team_name ASC';
    $statement = $db->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();

    return $results;
}