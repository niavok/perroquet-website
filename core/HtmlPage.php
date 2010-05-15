<?php
/**
 * Description of HtmlPage
 *
 * @author fred
 */
require_once $_SERVER["DOCUMENT_ROOT"].'/core/LanguageManager.php';

class HtmlPage {

    private $content;
    protected $id;
    protected $title;


    public function display() {

        $this->content = '';

        $this->generateHeader();
        $this->generateBody();
        $this->generateFooter();

        echo $this->content;
    }

    function generateHeader() {
        $this->content.= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="'.LanguageManager::getLanguage().'" >
           <head>
               <title>'._("Perroquet — Listening comprehension tutor — ").$this->title.'</title>
               <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="stylesheet" media="screen" type="text/css" title="Design" href="/style/default.css" />
            <link rel="icon" type="image/png" href="/ressources/favicon.png" />
           </head>
           <body>';
    }

    function generateFooter() {
        $this->content.= '<script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));
        </script>
        <script type="text/javascript">
        try {
        var pageTracker = _gat._getTracker("UA-3378479-5");
        pageTracker._trackPageview();
        } catch(err) {}</script>
           </body>
        </html>';
    }

    function generateBody() {

        $this->content.='<div id="content">

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
        <div id="corps">
        ';

        $this->content.=$this->generateContent();

        $this->content.='</div>
        <div id="bottom">
            Perroquet web site — Copyright ® Perroquet Team — <a href="mailto:perroquet-team@lists.launchpad.net" >perroquet-team@lists.launchpad.net</a>  — Licence : AGPL v3 or highter
        </div>
        </div>';
    }


}
?>
