<?php

require_once $_SERVER["DOCUMENT_ROOT"].'/config/config.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/core/HtmlPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/core/HtmlPageLoader.php';


$loader = new HtmlPageLoader();
$loader->load();
$page = $loader->getPage();
$page->display();

?>
<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title><?php echo _("Perroquet — Listening comprehension tutor") ?></title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" media="screen" type="text/css" title="Design" href="/style/default.css" />
    <link rel="icon" type="image/png" href="/ressources/favicon.png" />
   </head>
   <body>
    <div id="content">

        <div id="lang_menu">
            <ul>
                <li class= "active"><a href="/index.html">English</a></li>
                <li ><a href="/fr/index.html">Français</a></li>

            </ul>
        </div>

        <div id="head">
            <h1>Perroquet</h1>
            Listening comprehension tutor
        </div>

        <div id="menu">
            <ul>
                <li class= "active" ><a href="/index.html">Presentation</a></li>
                <li ><a href="/en/download.html">Download</a></li>
                <li ><a href="/en/screenshots.html">Screenshots</a></li>
                <li ><a href="/en/documentation.html">Documentation</a></li>
                <li ><a href="/en/contribute.html">Contribute</a></li>
                <li ><a href="/en/contacts.html">Contacts</a></li>
            </ul>

            Last release : 1.0.1<br />
            13/01/2010
        </div>

        <div id="corps">
            <h1>Presentation</h1>
                <img class="img_left" src="/ressources/perroquet_screenshot1_400.png" alt="Perroquet en cours d'utilisation" />
                <p>Perroquet is a educational program to improve playfully your listening in a foreign language</p>
            <h2>How it works</h2>
                <p>The principe of Perroquet is to use a video or audio file and the associated subtitles to make you listen and understand the dialogue or lyrics. After having idendified the files to use, Perroquet will read a piece of video then pause. It will show you the number of words to find and you will have to type them to continue. You can listen a sequence as many times as necessary. If you do not understand, Perroquet offers several means to help you.</p>

            <h2>Try now</h2>
                <p>If you want to test parrot but you have no video available, here is an  archive containing the film Elephant Dream with English subtitles match: <a href="/ressources/elephant_dream_en.tar.gz" >Files demo pages Elephant Dream</a></p>
                <p>For now, this demo only allows you to practice understanding English.</p>


                <p>You must then <a href="/en/download.html" >download and install</a> Perroquet, run it, create a new exercise and put the video file in the first field, the file of English subtitles in the second file and the subtitle in the French final. To learn to use all the features of parrot, see the <a href="/en/documentation.html" >documentation</a>.</p>

            <h2>News</h2>

                <h3>Version 1.0.1</h3>
                <ul>
                    <li>Improve window resize</li>
                    <li>Add new shortcuts</li>
                    <li>Remove html tags in srt files</li>
                    <li>Replace | by new line in srt</li>
                    <li>Handle perroquet file, add mime type and icons on perroquet exercise</li>
                    <li>Improve exercice creation dialog</li>
                    <li>Add tooltips</li>
                    <li>Reimplement input system to support specials characters</li>
                    <li>Fix various bugs</li>
                    <li>Translation updates</li>
                </ul>
            <h2>Licence</h2>
                <p>Perroquet  is a free software distributed under the GNU Public License version 3 or higher. The source code of this software is available here: <a href="https://launchpad.net/perroquet/+download" >Download page at launchpad</a></p>

                <p>The full text of the license is available here <a href="http://www.gnu.org/licenses/gpl.html" >GPL</a>.</p>
        </div>
        <div id="bottom">
            Perroquet — Copyright ® Frédéric Bertolus — <a href="mailto:fredb219@gmail.com" >fredb219@gmail.com</a>  — Licence : AGPL v3 or highter
        </div>
    </div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-3378479-5");
pageTracker._trackPageview();
} catch(err) {}</script>
   </body>
</html>-->

