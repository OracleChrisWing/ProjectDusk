<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<?php include("includes/title.php"); ?>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="clearfix">
			<?php include("includes/navigation.php"); ?>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
			<div class="main">
				<h1>Contact us</h1>
				<p>
					If you would like to get in contact with us to arrange a meeting or discuss potential business, please use this form below. Please note that all correspondance
					through this form is saved for future reference.
				</p>
				<form action="index.html" method="post" class="message">
					<label>First Name</label>
					<input type="text" value="" name="first_name">
					<label>Last Name</label>
					<input type="text" value="" name="last_name">
					<label>Company name</label>
					<input type="text" value="" name="company_name">
					<label>Email Address</label>
					<input type="text" value="" name="email_address">
					<label>Message</label>
					<textarea></textarea>
					<input type="submit" value="Send Message" name="message">
				</form>
			</div>
		</div>
	</div>
	<?php include("includes/footer.php"); ?>
</body>
</html>