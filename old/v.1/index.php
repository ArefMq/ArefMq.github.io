<html>
	<head>
		<title>Basic HTML</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>

	<body>
		<div id="cover">
			<div id="cover_title">
				<h1>Aref Moqadam Mehr</h1>
				(My name is "Aref" and "Moqadam Mehr" is my last name!)
			</div>
			<div id="cover_links">
				<ul>
					<li><a href="#about">About me</a></li>
					<li><a href="#media">Media</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="#contacts">Contacts</a></li>
				</ul>
			</div>
		</div>

		<div id="about">
			<h2>About me</h2>
			<hr/>
			<div id="about_text">
				<?php require_once("./about.htm"); ?>
			</div>
		</div>
		
		<div id="media">
			<h2>Media</h2>
		<hr/>
			</div id="media_text">
				<?php require_once("./publication.htm"); ?>
			</div>
		</div>
		
		<div id="contacts">
			<h2>Contacts</h2>
		<hr/>
			<div id="contacts_text">
				Mechatronics Research Laboratory (MRL), Qazvin Azad University, Qazvin, Iran <br />
				To contacts me you can mail me at Aref dot Moqadam at gmail dot com <br />
				Or you can find me on:
				<ul>
					<li>Google+</li>
					<li>Linkedin</li>
					<li>Academia.edu</li>
				</ul>
			</div>
		</div>
		
		<div id="footer">
			<hr />
			I'm not an organization, but you can still donate me bitcoin:
			<a href="#">394wHnsG2aZwrYQx9DL3tvcm8nX9W6B37P</a><br />
			&copy; 2014 - Designed by myself! | <a href="#top">top</a>
		</div>
	</body>
</html>
