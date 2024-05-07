<?php
session_start();
require_once("common/connect.php");
require_once("Post.php");

function listMovies(){
$db= dbconnect();
$movies = [];
$query = "SELECT * FROM table_movies";
$result = $db->query($query);
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $movies[] = new Movie($row['MOVIE'], $row['DESCRIPTION'], $row['IS_AVAILABLE']);
    }
    return $movies;
}
?>