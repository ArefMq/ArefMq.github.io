<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Soift is the story of two friend dreaming to change the world.">
    <meta name="author" content="Aref Moqadam Mehr">

    <title>Soift</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <!--h1 class="brand-heading">Grayscale</h1-->
                        <span class="intro-text">
                          <?php
                            $X = 1484395200;
                            $time = time();
                            if ($X > $time) {
                              $left = $X - $time;
                              $phrase = "";
                              
                              if ($left < 60)
                                $phrase = "in less than a minute";
                              elseif ($left < 120)
                                $phrase = "in a minute";
                              elseif ($left < 3600)
                                $phrase = "in " . (int)($left/60) . " minutes";
                              elseif ($left < 7200)
                                $phrase = "in an hour";
                              elseif ($left < 43200)
                                $phrase = "in " . (int)($left/3600) . " hours";
                              elseif ($left < 86400)
                                $phrase = "in less than a day";
                              elseif ($left < 172800)
                                $phrase = "tomorrow";
                              else
                                $phrase = "in " . (int)($left/86400) . " days";
                                
                              echo "Please wait, the website will be up $phrase.";
                            } else {
                              require_once('./content');
                              echo '<div style="width: 100px; height: 100px; background: url(img/sig.png) no-repeat; background-size: contain;">&nbsp;</div>';
                              echo '<p>Aref M. Mehr,<br/>One of those kids.</p>';
                            }
                           ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>

</html>
