<?php

function GetListStudents()
{
    global $db;
    $query = 'select * from student order by student_name ASC';
    $statement = $db->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();

    return $results;
}