<!DOCTYPE html>
<html lang="en-US">
	<head>
	<meta charset="UTF-8">
    <meta name="author" content="Aref Moqadam Mehr" />
    <meta name="description" content="I am a computer vision enthusiast, graduated from Qazvin Azad University. Formerly, I was team leader of NAO biped lab in Mechatronics Research Lab. And before that, I was working at SRC.Systems. " />
    <meta name="keywords" content="Aref Moqadam Mehr, Computer Vision, Convolutional Neural Network, neural network, Image Processing, Robotics, Nao, Programming, AI, Artifical Intelligence, Software Engineer, Persornal Website" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Aref Moqadam Mehr's Personal Page</title>

		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
        <script type="application/ld+json">
        {
          "@context" : "http://schema.org",
          "@type" : "Person",
          "jobTitle": "Researcher",
          "name" : "Aref Moqadam Mehr",
          "url" : "http://mrl-spl.ir/~moqadam",
          "sameAs" : [
            "https://plus.google.com/+ArefMoqadam",
            "https://twitter.com/aref_mq",
            "http://github.com/ArefMq",
            "http://ir.linkedin.com/in/moqadam",
            "https://qiau.academia.edu/ArefMoqadam"
          ]
        }
        </script>
		
		<style>
            @import 'images/design.css';
		</style>
	</head>

	<body itemscope itemtype="http://schema.org/Person">
<?php include_once('analytics.php'); ?>
    <!-- Header -->
		<div id="cover">
			<div id="cover_title">
				<h1 itemprop="name"><?php require_once("name.php"); ?></h1>
			</div>
		</div>

    <!-- Logo -->
        <div id="iconic">
    		<img src="images/me.jpg" alt="Aref Moqadam Mehr" id="portrait" itemprop="image" />
        </div>

    <!-- Contents START -->
		<div id="about">
			<h2>About me</h2>
			<hr/>
			<div id="about_text" itemprop="description">
				<?php require_once("about.php"); ?>
			</div>
		</div>

		<div id="interests">
			<h2>Research Interests</h2>
			<hr/>
			<div id="interests_text">
				<?php require_once("interests.php"); ?>
			</div>
		</div>
		
		<div id="publications">
			<h2>Publications</h2>
			<hr/>
			<div id="media_text">
				<?php require_once("publication.htm"); ?>
			</div>
		</div>
		
		<div id="contact">
			<h2>Contacts</h2>
			<hr/>
			<div id="contact_text">
				<?php require_once("contacts.php"); ?>
			</div>
		</div>
    <!-- Contents END -->

    <!-- Footer -->
		<div id="footer">
			<hr class="symmetry" />
		
			<div id="cover_links">
				<?php require_once("menu.php");  ?>
			</div>
			
			<div id="modificationTime">
			  &copy; 2017 - Aref Moqadam Mehr
				| Last Update on 
				<?php

				$index_page = 'index.php';
				if (file_exists($index_page)) {
						echo date ("F d, Y.", filemtime($index_page));
				}
				else
				{
					echo "some time in past, which I can't remember...";
				}
				?>
				</div>
			</div>
		</div>

    <!-- Place all other js here -->
    <!-- Google Font -->
		<script type="text/javascript">
			WebFontConfig = {
				google: { families: [ 'Titillium+Web::latin' ] }
			};
			(function() {
				var wf = document.createElement('script');
				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
				  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
				wf.type = 'text/javascript';
				wf.async = 'true';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(wf, s);
			})(); 
		</script>

	</body>
</html>
