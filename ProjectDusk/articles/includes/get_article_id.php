<?php
	
$article_id = NULL;
/**
This function returns only the associated comments for this article.
**/
function get_article_id($article_name){
	
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "project-dusk";
	
	$connection = mysqli_connect($host, $username, $password) or die("Could not connect to the database!");
	
	mysqli_select_db($connection, $database) or die("Could not connect to the table within the database!");
	
	$get_data = mysqli_query($connection, "SELECT id FROM article_headlines WHERE article_name = '$article_name'");
	
	$data = mysqli_fetch_assoc($get_data);
	
	$id = $data['id'];
	
	// Saves the article for later, then users post comments it will be needed.
	$article_id = $id;
	
	// Return the id so the comments can load.
	return $id;
}
	
?>