<?php

echo "
	<br>
	<h2>Comments</h2>
	<br>
";

function get_comments($article_id){
	
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "project-dusk";
	
	$connection = mysqli_connect($host, $username, $password) or die("Could not connect to the database!");
	
	mysqli_select_db($connection, $database) or die("Could not connect to the table within the database!");
	
	$get_data = mysqli_query($connection, "SELECT * FROM comments WHERE article_id = $article_id ORDER BY post_date DESC, post_time DESC");
	
	$count = mysqli_num_rows($get_data);
	
	if($count == 0){
		
		echo "<h2>Sorry, no comments yet! :/ </h2>";
	}
	
	while($row = mysqli_fetch_assoc($get_data)){
		
		$name = addslashes(strip_tags($row['poster_name']));
		$comment = addslashes(strip_tags($row['comment']));
		
		echo "
			<div class='comments'>
				<p class='author'>".$name." wrote:</p>
				<p>
				".$comment."
				</p>
				<p class='info'>Posted on: ".$row['post_date']." @ ".$row['post_time']."</p>
			</div>
			<br>
		";
	}
}?>