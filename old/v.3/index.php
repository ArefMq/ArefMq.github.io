<?php

    $lang='';
    $language='';
    @$lang=strtolower($_GET['lang']);
    switch($lang)
    {
        case 'en':
            $language='English';
            break;
        case 'fa':
            $language='Persian';
			require_once("fa/index_fa.php");
			die();
            break;
        case 'de':
            $language='German';
            break;
        case 'es':
            $language='Spanish';
            break;
        case 'tr':
            $language='Turkish';
            break;
        /*case 'ru':
            $language='Russian';
            break;*/
        default:
            $lang='en';
            $language='English';
            break;
    }
    
    require_once($lang . '/titles.php');

?><!DOCTYPE html>

<!-- Designed by My friend, Novin Shahroudi -->
<html lang="en-US">
	<head>
	<meta charset="UTF-8">
    <meta name="author" content="Aref Moqadam Mehr" />
    <meta name="description" content="I am a Computer Vision Researcher and I am currently team leader of NAO biped lab in Mechatronics Research Lab. Formerly, I was working at SRC.Systems. " />
    <meta name="keywords" content="Aref Moqadam Mehr, Computer Vision, Convolutional Neural Network, neural network, Image Processing, Robotics, Nao, Programming, AI, Artifical Intelligence, Software Engineer, Persornal Website" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Aref Moqadam Mehr's Personal Page :: <?php echo $language; ?></title>

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
				<h1 itemprop="name"><?php require_once($lang . "/name.php"); ?></h1>
			</div>

      <!-- Menu -->
			<div id="cover_links">
    		    <?php require_once($lang . "/menu.php"); ?>
			</div>
			<?php require_once("langBox.php"); ?>
		</div>

    <!-- Logo -->
        <div id="iconic">
    		<img src="images/me.jpg" alt="Aref Moqadam Mehr" id="portrait" itemprop="image" />
    		<div id="mission">
    		    <?php require_once($lang . "/mission.php"); ?>
    		</div>
        </div>

    <!-- Contents START -->
		<div id="about">
			<h2><?php echo about(); ?></h2>
			<hr/>
			<div id="about_text" itemprop="description">
				<?php require_once($lang . "/about.php"); ?>
			</div>
		</div>

		<div id="publications">
			<h2><?php echo publications(); ?></h2>
		<hr/>
			<div id="media_text">
    			<?php require_once($lang . "/publication.php"); ?>
				<?php require_once("./publication.htm"); ?>
			</div>
		</div>
		
		<div id="contact">
			<h2><?php echo contacts(); ?></h2>
		<hr/>
			<div id="contact_text">
				<?php require_once($lang . "/contacts.php"); ?>
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
			  &copy; 2016 - Designed by <a target="_blank" href="http://novinshahroudi.ir" style="color: #333;">Novin Shahroudi</a>, Refined by <a href="http://mrl-spl.ir/~moqadam/" style="color: #333;">Aref Moqadam Mehr</a>!<br />
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
