<?php
/*	require_once("secure.php");
	
	if (!checkSession()) {
		header("Location: login.php");
		die();
	}
*/

    file_put_contents("people.log", "\n" . $_SERVER['REMOTE_ADDR'] . "\n", FILE_APPEND);

    $page = "";
    @$page = $_GET['page'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Mehrazarm Notes</title>
<style>
    body {
        background: url(p3x.jpg);
        background-size: 100% 435px;
    }
    div, p {
        margin: 0 auto;
        width:80%;"
    }

    #title {
        margin: 0 10%;
        color: black;
    }

    #title > a {
        color: black;
        text-decoration: inherit;
        cursor: default;
    }

    h1 {
        margin-bottom: 0;
    }

    #forlink {
        font-size: smaller;
    }

    #here {
        color: -webkit-link;
        text-decoration: underline;
        cursor: auto;
    }
</style>
</head>
<body>
<div id="title"><a href="http://mehrazarm.blogspot.com"><h1>My Notes:</h1><span id="forlink">For Original Blog Click <span id="here">Here</span>!</span></a></div>

<?php
	
	$rss = new DOMDocument();
	$rss->load("http://mehrazarm.blogspot.com/feeds/posts/default?alt=rss");

	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}

	//for($x=0;$x<$limit;$x++) {
        foreach($feed as $f) {
		$title = str_replace(' & ', ' &amp; ', $f['title']);
		$link = $f['link'];
		$description = $f['desc'];
		$date = date('l F d, Y', strtotime($f['date']));
		echo '<p style="text-align:center;"><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
		echo '<small><em>Posted on '.$date.'</em></small></p>';
		echo '<p class="textitem">'.$description.'<hr/></p>';
	}
?>

<div id="more" style="text-align: center; margin: 10px auto;">
<a href="http://mehrazarm.blogspot.com"><span style="text-decoration:none; color: black;">For more please go to:</span> http://mehrazarm.blogspot.com</a>
</div>

<div id="copy" style="position: fixed; bottom: 0; left:0; width: 100%; text-align:center; font-size:x-small; color:gray;">&copy; 2016 - Aref Moqadam</div>

</body>
</html>