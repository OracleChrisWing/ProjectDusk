<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<?php include("../includes/title.php"); ?>
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
			<div class="sidebar">
				<div>
					<h2>Recent News</h2>
					<p>
						This area is deticated to logging our progress on current projects. Typically a small entry will be written once a new project is discussed, then 
						once the project has been confirmed a full article will be written.
					</p>
					<p>
						This area also doubles as an online archive/ portfolio highlighting our past responsibilities and capabilities.
					</p>
					<p>
						Lastly, this area may be used to post news articles relating to the company. 
					</p>
				</div>
			</div>
			<div class="main">
				<h1>Blog headlines</h1>
				<ul class="news">
					<?php
						include("../includes/get_headlines.php"); 
						get_headlines();
					?>
				</ul>
			</div>
		</div>
	</div>
	<?php include("../includes/footer.php"); ?>
</body>
</html>