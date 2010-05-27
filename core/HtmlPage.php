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

    function execute() {
        
    }

    function generateHeader() {
        $this->content.= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="'.LanguageManager::getLanguage().'" >
           <head>
               <title>'._("Perroquet — Listening comprehension tutor — ").$this->title.'</title>
               <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="stylesheet" media="screen" type="text/css" title="Design" href="/style/default.css" />
            <link rel="icon" type="image/png" href="/ressources/style/favicon.png" />
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
        ';
        if(LoginManager::isLogged()) {
            $this->content.='
            <div id="login_panel">
            '.sprintf(_('Logged as %s'),LoginManager::getLogin()).'
            </div>
        ';

        }
        
        $this->content.='<div id="lang_menu">
            <ul>
                <li><a href="'.RessourceManager::getInnerUrl('special/language/choose').'">'._('Change language').'</a></li>
                    ';
        if(LoginManager::isLogged()) {
        $this->content.='    <li><a href="'.RessourceManager::getInnerUrl('special/login/logout').'">'._('Logout').'</a></li>';
        } else {
        $this->content.='    <li><a href="'.RessourceManager::getInnerUrl('special/login/login_form').'">'._('Login').'</a></li>';
        }
        $this->content.='
            </ul>
        </div>

        <div id="head">
            <h1>'._('Perroquet').'</h1>
            '._('Listening comprehension tutor').'
        </div>
        ';
        
        $this->content.= $this->generateMenu();

        $this->content.='
        <div id="corps">
        ';

        $this->content.=$this->generateContent();

        $this->content.='</div>
        <div id="bottom">
            Perroquet web site — Copyright ® Perroquet Team — <a href="mailto:perroquet-team@lists.launchpad.net" >perroquet-team@lists.launchpad.net</a>  — Licence : AGPL v3 or highter
        </div>
        </div>';
    }

    function generateMenu() {
        $menu='
        <div id="menu">
            <ul>
                <li '.($this->id=='index'?'class= "active"':'').'><a href="'.RessourceManager::getInnerUrl('index').'/">'._('Presentation').'</a></li>
                <li '.($this->id=='download'?'class= "active"':'').'><a href="'.RessourceManager::getInnerUrl('download').'/">'._('Download').'</a></li>
                <li '.($this->id=='screenshots'?'class= "active"':'').'><a href="'.RessourceManager::getInnerUrl('screenshots').'/">'._('Screenshots').'</a></li>
                <li '.($this->startswith($this->id,'documentation')?'class= "active"':'').'><a href="'.RessourceManager::getInnerUrl('documentation/index').'/">'._('Documentation').'</a></li>
                <li '.($this->startswith($this->id,'exercises')?'class= "active"':'').'><a href="'.RessourceManager::getInnerUrl('exercises/index').'/">'._('Exercises').'</a></li>
                <li '.($this->id=='contribute'?'class= "active"':'').'><a href="'.RessourceManager::getInnerUrl('contribute').'/">'._('Contribute').'</a></li>
                <li '.($this->id=='contacts'?'class= "active"':'').'><a href="'.RessourceManager::getInnerUrl('contacts').'/">'._('Contacts').'</a></li>
            </ul>

        </div>';
        return $menu;
    }

    function startswith($hay, $needle) {
      return substr($hay, 0, strlen($needle)) === $needle;
    }


}
?>
