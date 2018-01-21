<?php

function get_headlines(){
	
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "project-dusk";
	
	$connection = mysqli_connect($host, $username, $password) or die("Could not connect to the database!");
	
	mysqli_select_db($connection, $database) or die("Could not connect to the table within the database!");
	
	$get_data = mysqli_query($connection, "SELECT * FROM article_headlines ORDER BY date DESC");
	
	
	while($row = mysqli_fetch_assoc($get_data)){
		
		echo "
			<li>
				<div class='box'>
					<img src='../images/".$row['cover_image']."' alt='Img' height='245' width='213'>
				</div>
				<p class='info'>Posted on: ".$row['date']."</p>
				<h2>".$row['title']."</h2>
				<p>
					".$row['description']."
				</p>
				<span class='tags'>".$row['tags']."</span>
				<a href='".$row['article_name'].".php' class='more'>Read more...</a>
			</li>
		";
	}
}

?>