<?php 

// Gets the article name.
$article_name = basename(__FILE__, '.php'); 

// Gets the article id from the DB.
include("includes/get_article_id.php");
$id = get_article_id($article_name);

// Includes the logic for inserting new comments into the DB
include("includes/post_comment.php");

?>
<!DOCTYPE HTML>
<html>
<head>

	<meta charset="UTF-8">
	<?php include("../includes/title.php"); ?>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	
	<?php include("includes/character_counter.php"); ?>
	
</head>
<body>
	<div id="header">
		<div class="clearfix">
			<?php include 'includes/navigation.php'; ?>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>Article contents:</h2>
					<ul>
						<li>
							<a href="#sub-heading-one">Sub-heading one</a>
						</li>
						<li>
							<a href="#sub-heading-two">Sub-heading two</a>
						</li>
						<li>
							<a href="#sub-heading-three">Sub-heading three</a>
						</li>
					</ul>
				</div>
				<div>
					<h2>Mailing list</h2>
					<p>
						Enjoy reading this article? Why not sign up to our <strong>free</strong> mailing list and never miss out on future articles. 
						(Don't worry, we hate spam as much as you do!)
					</p>
					<?php include("includes/mail_form.php"); ?>
				</div>
			</div>
			<div class="main">
				<h1>Example heading (Usually be article title)</h1>
				
				<div class="frame3">
					<div class="box">
						<img src="../images/laughing.jpg" alt="Img" height="199" width="584">
					</div>
				</div>

				<p>
					This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p>
				<p>
					You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p>
				<p>
					This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p>
				<p>
					You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p>
				<div class="frame3">
					<div class="box">
						<img src="../images/thumb-up.jpg" alt="Img" height="199" width="584">
					</div>
				</div>
				<a name="sub-heading-one"><h2>Sub-heading one</h2></a>
				<p>
					This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p>
				<p>
					You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p>
				<p>
					This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p>
				<p>
					You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p>
				<a name="sub-heading-two"><h2>Sub-heading two</h2></a>
				<p>
					This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p>
				<p>
					You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p>
				<p>
					This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p>
				<p>
					You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p>
				<a name="sub-heading-three"><h2>Sub-heading three</h2></a>
				<p>
					This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p>
				<p>
					You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p>
				<p>
					This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p>
				<p>
					You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p>
			</div>
			<br>
			
			<div class = "comment-section">
				<h1>Comments section</h1>
				<p>Like what you read? Or have you got any thoughts? If so, drop us a comment!</p>
					
				<?php 
				
					include("includes/comments_form.php"); 
					display_form($article_name);
								
					include("includes/get_comments.php");
					
					// Retrieves the comments from the database and loads them onto the page.
					get_comments($id);
				
				?>
			</div>
		</div>
	</div>
	<?php include("../includes/footer.php"); ?>
</body>
</html>