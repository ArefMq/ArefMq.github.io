<!DOCTYPE html>

<!-- Designed by My friend, Novin Shahroudi -->
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
    <meta name="author" content="Aref Moqadam Mehr" />
    <meta name="description" content="I am a Software Engineer and Designer and I am currently working on humanoid platform in MRL. Beside that I am also working in Distributed Systems Lab. and Smart Home Lab. in QIAU." />
    <meta name="keywords" content="Aref Moqadam Mehr, Robotics, Nao, Programming, AI, Artifical Intelligence, Software Engineer, Persornal Website" />
		<meta name=viewport content="width=device-width, initial-scale=1">

		<title>Aref Moqadam's Personal Page</title>

		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<style>
			body {
				margin-left: 10%;
				margin-right: 10%;
				font-family: 'Titillium Web', sans-serif;
			}

			p {
				text-align: justify;
			}

			a {
				text-decoration: none;
                                color: gray;
                                font-weight: bold;
			}

                        a:visited {
                                color: darkgray;
                        }

			a:hover {
				color: #CC0033;
			}

			h1, h2, h3 {
				text-transform: uppercase;
			}

			hr {
				border: 0;
				height: 1px;
				background: #333;
				background-image: -webkit-linear-gradient(left, #333, #333, #ccc); 
				background-image:    -moz-linear-gradient(left, #333, #333, #ccc); 
				background-image:     -ms-linear-gradient(left, #333, #333, #ccc); 
				background-image:      -o-linear-gradient(left, #333, #333, #ccc); 
				margin-top: -15px;
				margin-bottom: 20px;
			}

			hr.symmetry {
				border: 0;
				height: 1px;
				background: #333;
				background-image: -webkit-linear-gradient(left, #ccc, #333, #ccc); 
				background-image:    -moz-linear-gradient(left, #ccc, #333, #ccc); 
				background-image:     -ms-linear-gradient(left, #ccc, #333, #ccc); 
				background-image:      -o-linear-gradient(left, #ccc, #333, #ccc); 
				margin: 0;
			}

			#cover {
				text-align: center;
			}
			#cover_links {
				list-style-type: none;
				text-align: center;
			}

			#cover_links ul {
				padding: 0;
				margin: 0 auto;
				width: 55%;
			}

			#cover_links ul li {
				display: inline;
			}

			#cover_links ul li:after {
				content: "|"; 
				padding: 0 .5em;
			}

			#cover_links ul li:last-child:after {
				content: ''; 
			}

			#footer	{
				margin-bottom: 30px;
				margin-top: 75px;
			}

			#copyright {
				float: left;
				width: 40%;
				line-height: 1;
				margin-top: 7px;
				font-size: small;
			}

			#fastLink {
				float: left;
				width: 20%;
				text-align: center;
			}

			#modificationTime {
			  font-size: small;
			  text-align: right;
				float: right;
				width: 40%;
			}

			#ValidationButtons {
				font-size: small;
			}

			#portrait {
				display: block;
				position: relative;
				float: left;
				margin: 25px 30px 20px 0px;
				width: 200px;
				height: 200px;
				border-radius: 150px;
				-webkit-border-radius: 150px;
				-moz-border-radius: 150px;
				/*background: url(me.jpg) no-repeat;*/
				box-shadow: 0 0 8px rgba(0, 0, 0, .8);
				-webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
				-moz-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
			}		

			.cse .gsc-control-cse, .gsc-control-cse {
				padding: 0px;
			}
			
			#publications {
				clear: both;
			}

                        #cover_title span {
                                display: inline-block;
                        }

                        #cover_title span:first-letter {
                                font-size: 1.6em;
                        }
			
			@media screen and (max-width: 500px) {
				body {
					margin-left: 5%;
					margin-right: 5%;
				}
				
				#cover_links ul {
					padding: 0;
					margin: 0 auto;
					width: 95%;
					font-size: 1.3em;
					line-height: 1.8em;
				}
				
				#portrait {
					float: none;
					margin: 0 auto;
					margin-top: 30px;
				}
			}
		</style>
	</head>

	<body itemtype="http://schema.org/Person">
<?php include_once('analytics.php'); ?>
    <!-- Header -->
		<div id="cover">
			<div id="cover_title">
				<h1 itemprop="name"><span>Aref</span> <span>Moqadam Mehr</span></h1>
			</div>

      <!-- Menu -->
			<div id="cover_links">
				<ul>
					<li><a href="#about">About me</a></li>
					<li><a href="courses">Courses</a></li>
					<li><a href="#publications">Publications</a></li>
					<li><a href="projects">Projects</a></li>
					<li><a href="http://arefmq.blogspot.com">Blog</a></li>
					<li><a href="http://mehrazarm.blogspot.com">Poems</a></li>
					<li><a href="links">Links</a></li>
					<li><a target="_blank" href="full-cv">Full C.V.</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>

    <!-- Logo -->
		<img src="me.jpg" id="portrait" itemprop="image" />

    <!-- Contents START -->
		<div id="about">
			<h2>About me</h2>
			<hr/>
			<div id="about_text" itemprop="description">
				<?php require_once("./about.htm"); ?>
			</div>
		</div>

		<div id="publications">
			<h2>Publications</h2>
		<hr/>
			<div id="media_text">
				<?php require_once("./publication.htm"); ?>
			</div>
		</div>
		
		<div id="contact">
			<h2>Contact</h2>
		<hr/>
			<div id="contact_text">
				Address:
				<address itemprop="address">
				Mechatronics Research Laboratory (MRL),<br>
				Qazvin Azad University,<br>
				Qazvin, Iran. <br>
				</address>
				<br />
				I can be reached by email at <span style="background-color:#eee; padding:0;">a dot moqadammehr at mrl-spl dot ir</span>.<br />
				You can also find me on:
				<ul>
				  <li><a target="_blank" href="https://plus.google.com/+ArefMoqadam">Google+</a></li>
				  <li><a target="_blank" href="http://github.com/ArefMq">github</a></li>
				  <li><a target="_blank" href="http://ir.linkedin.com/in/moqadam">Linked-in</a></li>
          			  <li><a target="_blank" href="https://qiau.academia.edu/ArefMoqadam">Academia.edu</a></li>
				</ul>
			</div>
		</div>
    <!-- Contents END -->

    <!-- Footer -->
		<div id="footer">
			<hr class="symmetry" />
			<div id="copyright">
				<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0; vertical-align:bottom;" src="https://i.creativecommons.org/l/by-sa/4.0/80x15.png" /></a>&nbsp;This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>. This includes all images, documents, texts and any other medium that I have used on my website.
			</div>
			
			<div id="fastLink">
				<a href="#top">&#x2b06;top</a>
			</div>
			
			<div id="modificationTime">
			  &copy; 2015 - Designed by my friend, <a target="_blank" href="http://novinshahroudi.ir" style="color: #333;">Novin Shahroudi</a>!<br />
				Last Update on 
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

				<div id="ValidationButtons">
					<a href="http://validator.w3.org/check?uri=<?php echo(($_SERVER['HTTPS'] ? 'https://' : 'http://').$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]); ?>">VALID HTML!</a>&nbsp;&&nbsp;
					<a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo(($_SERVER['HTTPS'] ? 'https://' : 'http://').$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]); ?>">VALID CSS!</a>&nbsp;&nbsp;
          <!-- Find a workaround for blocking nature of the following script -->
          <script type="text/javascript" src="validation.js"></script>
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
