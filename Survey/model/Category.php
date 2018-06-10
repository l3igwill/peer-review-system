<?php
function GetListCategories()
{
    global $db;
    $query = 'select * from questioncategory order by category_id ASC ';
    $statement = $db->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();

    return $results;
}