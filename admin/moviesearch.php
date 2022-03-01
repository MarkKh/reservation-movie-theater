<?php
include 'inc/session.php';

if(isset($_POST['search']))
{
    $search = $_POST['search'];

    $query = "SELECT name FROM movie LIKE '%".$search."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM movie";
    $search_result = filterTable($query);
}

function filterTable($query)
{
    include 'inc/session.php';
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}

?>