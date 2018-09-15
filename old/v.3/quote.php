<?php
	$qoutes = array(array("text" => "We have to see the world in colors, while we can!", "by" => "Me"),
		
		array("text" => "Intelligence is the ability to adapt to change.", "by" => "Stephen Hawking"),
		array("text" => "Life would be tragic if it weren't funny..", "by" => "Stephen Hawking"),
		array("text" => "We are just an advanced breed of monkeys on a minor planet of a very average star. But we can understand the Universe. That makes us something very special.", "by" => "Stephen Hawking"),
		array("text" => "Not only does God play dice, but... he sometimes throws them where they cannot be seen.", "by" => "Stephen Hawking"),
		array("text" => "To confine our attention to terrestrial matters would be to limit the human spirit.", "by" => "Stephen Hawking"),
		array("text" => "It is not clear that intelligence has any long-term survival value.", "by" => "Stephen Hawking"),
		
		array("text" => "All truths are easy to understand once they are discovered; the point is to discover them.", "by" => "Galileo Galilei"),
		array("text" => "You cannot teach a man anything; you can only help him find it within himself.", "by" => "Galileo Galilei"),
		array("text" => "The sun, with all those planets revolving around it and dependent on it, can still ripen a bunch of grapes as if it had nothing else in the universe to do.", "by" => "Galileo Galilei"),
		array("text" => "In questions of science, the authority of a thousand is not worth the humble reasoning of a single individual.", "by" => "Galileo Galilei"),
		array("text" => "Measure what is measurable, and make measurable what is not so.", "by" => "Galileo Galilei"),
		array("text" => "I have never met a man so ignorant that I couldn't learn something from him.", "by" => "Galileo Galilei"),
		
		array("text" => "I think the thing to do is enjoy the ride while you're on it.", "by" => "Johnny Depp"),
		array("text" => "Me, I’m dishonest, and you can always trust a dishonest man to be dishonest. Honestly, it’s the honest ones you have to watch out for.", "by" => "Johnny Depp"),
		array("text" => "Life's pretty good, and why wouldn't it be? I'm a pirate, after all.", "by" => "Johnny Depp"),
		array("text" => "It's just better to be yourself than to try to be some version of what you think the other person wants.", "by" => "Matt Damon"),
		
		array("text" => "The only failure is not to try.", "by" => "George Clooney"),
		
		array("text" => "Nothing ends nicely, that's why it ends.", "by" => "Tom Cruise"),
		array("text" => "The scientists of today think deeply instead of clearly. One must be sane to think clearly, but one can think deeply and be quite insane.", "by" => "Nikola Tesla"),
		array("text" => "Our virtues and our failings are inseparable, like force and matter. When they separate, man is no more.", "by" => "Nikola Tesla"),
		
		array("text" => "Our virtues and our failings are inseparable, like force and matter. When they separate, man is no more.", "by" => "Nikola Tesla"),
		array("text" => "The present is theirs; the future, for which I really worked, is mine.", "by" => "Nikola Tesla"),
		array("text" => "Simplicity is the ultimate sophistication.", "by" => "Leonardo da Vinci"),
		array("text" => "Art is never finished, only abandoned.", "by" => "Leonardo da Vinci"),
		array("text" => "When once you have tasted flight, you will forever walk the earth with your eyes turned skyward, for there you have been, and there you will always long to return.", "by" => "Leonardo da Vinci"),
		array("text" => "The noblest pleasure is the joy of understanding.", "by" => "Leonardo da Vinci"),
		array("text" => "Two things are infinite: the universe and human stupidity; and I'm not sure about the universe.", "by" => "Albert Einstein"),
		array("text" => "The most beautiful thing we can experience is the mysterious. It is the source of all true art and science.", "by" => "Albert Einstein"),
		array("text" => "If you can't explain it simply, you don't understand it well enough.", "by" => "Albert Einstein"),
		array("text" => "Logic will get you from A to B. Imagination will take you everywhere.", "by" => "Albert Einstein"),
		array("text" => "There are only two ways to live your life. One is as though nothing is a miracle. The other is as though everything is a miracle.", "by" => "Albert Einstein"),
		array("text" => "Everything should be made as simple as possible, but not simpler.", "by" => "Albert Einstein"),
		
		array("text" => "Experience without theory is blind, but theory without experience is mere intellectual play.", "by" => "Immanuel Kant"),
		array("text" => "Science is organized knowledge. Wisdom is organized life.", "by" => "Immanuel Kant"),
		array("text" => "Thoughts without content are empty, intuitions without concepts are blind.", "by" => "Immanuel Kant"),
		array("text" => "Live your life as though your every act were to become a universal law.", "by" => "Immanuel Kant"),
		array("text" => "Morality is not properly the doctrine of how we may make ourselves happy, but how we may make ourselves worthy of happiness.", "by" => "Immanuel Kant"),
		
		array("text" => "You have your way. I have my way. As for the right way, the correct way, and the only way, it does not exist.", "by" => "Friedrich Neitzsche"),
		array("text" => "That which does not kill us makes us stronger.", "by" => "Friedrich Neitzsche"),
		array("text" => "One must still have chaos in oneself to be able to give birth to a dancing star.", "by" => "Friedrich Neitzsche"),
		array("text" => "There is always some madness in love. But there is also always some reason in madness.", "by" => "Friedrich Neitzsche"),
		array("text" => "There are no facts, only interpretations.", "by" => "Friedrich Neitzsche"),
		array("text" => "Reason has always existed, but not always in a reasonable form.", "by" => "Karl Marx")
	);
	

	function geneterateRandomQuote($lang) {
		$qoutes = $GLOBALS['qoutes'];
		$r = rand(0, count($qoutes)-1);
		return '<span>' . $qoutes[$r]["text"] . '<span><br><span>' . $qoutes[$r]['by'] . '</span>';
	}
?>