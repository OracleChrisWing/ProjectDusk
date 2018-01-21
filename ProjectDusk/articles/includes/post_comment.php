<?php

if(isset($_POST['submit'])){
	
	$name = addslashes(strip_tags($_POST['poster_name']));
	$comment = addslashes(strip_tags($_POST['comment']));
	$email = addslashes(strip_tags($_POST['poster_email']));
	
	if($name && $comment){
		
		$time = date('H:i:s');
		$date = date('o-m-d');
		
		$host = "localhost";
		$username = "root";
		$password = "";
		$database = "project-dusk";

		$connection = mysqli_connect($host, $username, $password) or die("Could not connect to the database!");
		mysqli_select_db($connection, $database) or die("Could not connect to the table within the database!");
				
		/*	POST COMMENT */

		$comment_sql = "INSERT INTO comments (article_id, poster_name, comment, post_date, post_time) VALUES ('$id', '$name', '$comment', '$date', '$time')";
		
		if(!mysqli_query($connection, $comment_sql)){
			
			echo "Error";
			header("Location: ./");
		}
		
		/*	ADD-TO EMAIL LIST (IF NON-EXISTING)	*/
			
		$email_sql = "SELECT * FROM email_list WHERE email = '$email'";
		$query = mysqli_query($connection, $email_sql);
		
		if(!$query){
			
			echo "Error";
			header("Location: ./");
		}
		
		$count = mysqli_num_rows($query);
		
		if($count >= 1){
			
			echo "Error";
			header("Location: ./");
		}
		else{
			
			echo $count;
			
			$email_insert_sql = "INSERT INTO email_list (name, email) VALUES ('$name', '$email')";
			
			if(!mysqli_query($connection, $email_insert_sql)){
				
				header("Location: ./");
			}
		}
		
		header("Location: #comments-section");
	}
}
?>