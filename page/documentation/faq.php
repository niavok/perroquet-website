<?php

/**
 * Description of index
 *
 * @author fred
 */

require_once $_SERVER["DOCUMENT_ROOT"].'/page/documentation/documentation_page.php';

class CurrentPage extends DocumentationPage{
        function __construct() {
        $this->id = 'documentation/faq';
        $this->title = _('Faq');
    }
    function execute() {

    }

    function generateContent() {
        $content ='';
        $content .= '
        <h1>'._('Faq').'</h1>';


        $content .= '<h2>'._('General').'</h2>';
        $content .= '<h3>'._('Where to download Windows version ?').'</h3>';
        $content .= '<p>'._('There is no Windows version but only a Linux version.').'</p>';
        $content .= '<p>'._('However, perroquet use cross platform library will may have a Windows version if someone develop it.').'</p>';



        return $content;
    }
}

?>
