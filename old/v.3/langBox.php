<?php
    function lang2Language($lang)
    {
        switch($lang)
        {
            case 'en':
                return 'English';
            case 'fa':
                return 'فارسی';
            case 'de':
                return 'Deutsch';
            case 'es':
                return 'Español';
            case 'tr':
                return 'Türkçe';
            case 'ru':
                return 'Русский';
            default:
                return '';
        }
    }
    
    function lang2Pos($lang)
    {
        switch($lang)
        {
            case 'en':
                return 0;
            case 'fa':
                return -20;
            case 'de':
                return -40;
            case 'es':
                return -60;
            case 'tr':
                return -80;
            case 'ru':
                return -100;
            default:
                return '';
        }
    }
    
    function langLink($lang, $currentLang)
    {
        echo '<li style="height: 21px;"><a ';
        if ($lang==$currentLang)
            echo 'style="color: black;" href="#"';
        else
            echo 'href="?lang=' . $lang . '"';
        
        echo '><span class="flagbox" style="margin-right: 3px; background-position-y: ' . lang2Pos($lang) . 'px;" >&nbsp;</span>';
        
        if ($lang==$currentLang)
            echo '<b><u>';

        echo lang2Language($lang);

        if ($lang==$currentLang)
            echo '</u></b>';

        echo '</a></li>';
    }
?>

<style>
    #langbox {
        margin: 2px;
        margin-top: 100px;
        position: absolute;
        top: 0;
        left: 0;
        text-align: left;
        font-size: smaller;
        width: 160px;
    }
    
    .flagbox {
        display: block;
        background:url(images/flags.png) no-repeat; 
        width: 30px;
        height: 20px;
        margin: 0;
        float: left;
    }
    
    #langul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    
    #langul li {
        margin: 2px;
    }
</style>
<div id="langbox">
    <ul id="langul">
<?php
    langLink('en', $lang);
    langLink('fa', $lang);
    langLink('de', $lang);
    langLink('es', $lang);
    langLink('tr', $lang);
    //langLink('ru', $lang);
	
	echo '<li style="height: 21px;"><a id="ruLink" href="#"><span class="flagbox" style="margin-right: 3px; background-position-y: ' . lang2Pos('ru') . 'px;" >&nbsp;</span>' . lang2Language('ru') . '</a></li>';
?>
    </ul>
	
	<div id="ruText" style="width: 100px; text-align:center; border: thin gray solid; padding: 3px; border-radius: 5px; display: none;"><i>Sorry! I am still learning Russian and it's too hard...!</i></div>
</div>

<script>
	document.getElementById("ruLink").onclick = function() {
		document.getElementById("ruText").style.display = "block";
	}
</script>