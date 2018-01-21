<?php

function display_form($article_name){
	
	$textarea_max_char = 400;
	
	echo "
		<a name='comments-section'>
			<form action='./".$article_name.".php' method='post' class='message'>
				<table>
					<tr>
						<td>
							<label>Your name:</label>
						</td>
						<td>
							<input type='text' name='poster_name'>
						</td>
					</tr>
					<tr>
						<td>
							<label>Your email:</label>
						</td>
						<td>
							<input type='text' name='poster_email'>
						</td>
					</tr>
					<tr>
						<td>
							<label>Comment: <label>(Max $textarea_max_char characters)</label></label>
						</td>
						<td>
							<textarea id='comment' name='comment' maxlength='$textarea_max_char' onKeyUp='count_it()'></textarea>
							<label>Characters <span id='counter'></span></label>
						</td>
					</tr>
					<tr>
						<td>
							<input type='submit' value='Post comment' name='submit'>
						</td>
					</tr>
					
				</table>	
			</form>
		</a>
		<br>
	";	
}

?>