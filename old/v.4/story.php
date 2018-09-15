<!DOCTYPE html>
<html lang="en-US">
	<head>
	<meta charset="UTF-8">
    <meta name="author" content="Aref Moqadam Mehr" />

		<title>Aref Moqadam Mehr's :: Story</title>

		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
				
		<style>
            @import 'images/design.css';
		</style>
	</head>

	<body>
    <!-- Header -->
		<div id="cover">
			<div id="cover_title">
				<h1 itemprop="name"><?php require_once("name.php"); ?></h1>
			</div>
		</div>

    <!-- Logo -->
        <div id="iconic">
    		<img src="images/me.jpg" alt="Aref Moqadam Mehr" id="portrait" />
        </div>

    <!-- Contents START -->
		<div id="about">
			<h2>My Story</h2>
			<hr/>
			<div id="story_text">
<p>
The story of the computer in my life stems from my childhood almost like every other kid in my
age. However, it became my life passion when I was introduced to computer programming.
Since then, as days passed, I realized I want to do more and more with computers. In high
school, a couple of my friends and I crew up to form a team participating in RoboCup
competitions. Even though we did not score a goal in any games, we built innovative robots,
which become a quite remarkable experience for us. Those experiences followed by my
experiences in college assured me that I want to be a computer scientist for the rest of my life.
</p>
<p>
If I want to conclude the past few years of my life, I do divide it into two sections: the first one is
my life as a researcher in robotics field and the other is the part of my life exploring for my
desire. I chose to study at Qazvin Azad University since it was one of the few universities
providing opportunities for undergraduate students to research in the robotics field. Shortly after
I attended the university, I joined the Mechatronics Research Laboratories (MRL-Qazvin). In
MRL I was working on a computer vision system for detecting objects in a soccer field for
bipedal NAO robots. At first, we solved the problems by programming tricks, and then we moved
toward scientific solutions as the challenges were becoming more difficult. During this period I
learned image processing basics such as different image segmentation methods. Besides, I
practiced working with different tools and APIs. Recently I have started to implement machine
learning methods for the mentioned vision system.
</p>
<p>
Along with studying computer vision in this past few years, I was working in few startups and I
did few part-time employments as a computer specialist. I have tried several curricula due this
time from mobile application development to project management and marketing. But the more I
tried new things, the more I understood my personality and my passions. Finally, I realized that I
wish to work in on a more technical layer where the things are actually been done rather than
being an entrepreneur. After these experiences, I have focused and studied on computer vision
and machine learning. I have some attempts to utilize machine learning for the purpose of
recognizing soccer field objects; however, some of them failed and the others are still in
progress. Hence, I have learned to work with multitude tools and implementation of numerous
methodologies including Convolutional Neural Networks.
</p>
<p>
During these years, there was plenty of joyful times together with the times full of deadline
stress. There were many sleepless nights and many more working conflicts. But today, as I look
back, all that nights have become fascinating memories to me, and I am sure I want to continue
this path. I am dying to start a new lifelong research career. My lifetime mission is to work on
computer vision and machine learning since the visual perception is one of the essential ways
that computers interact with the world. Particularly, I would like to work on image understandingand scene recognition. This desire originated from the challenges I was faced with in soccer
object recognition and my attempts to find a general solution for this problem. The other idea I
loved to get involved in, is the methods to interpret a 3D model from single images via machine
learning. New approaches try to solve this problem - just like the way human eyes looks a
photograph and understand the depth in it - by utilizing learning systems.
</p>
<p>
In future, I want to study Computer Science and I want to research in the field of Computer
Vision. After I complete my M.S. and Ph.D. degrees, I want to pursue an academic career
involving teaching and research at a university.
</p>
			</div>
		</div>

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
