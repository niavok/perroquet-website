<?php

/**
 * Description of index
 *
 * @author fred
 */

require_once $_SERVER["DOCUMENT_ROOT"].'/page/documentation/documentation_page.php';

class CurrentPage extends DocumentationPage{
        function __construct() {
        $this->id = 'documentation/shortcuts';
        $this->title = _('Documentation - Shortcuts');
    }
    function execute() {

    }

    function generateContent() {
        $content ='';
        $content .= '<h1>'._('Documentation - Shortcuts').'</h1>';



        $content .= '<h2>'._('Perroquet 1.0').'</h2>';

        $content .= '<p>'._('These shortcuts are available when the focus is on the response area, ie there is a cursor:').'</p><ul>';

        $content .= '<li>'._('F1 : Hint').'</li>';
        $content .= '<li>'._('shift+F1 : Reveal the current word').'</li>';
        $content .= '<li>'._('ctrl+shift+F1 : Reveal the current sequence').'</li>';
        $content .= '<li>'._('F2 : Show/hide translation').'</li>';
        $content .= '<li>'._('Enter : Replay sequence').'</li>';
        $content .= '<li>'._('Page Up : Next sequence suivante').'</li>';
        $content .= '<li>'._('Page Down : Previous sequence').'</li>';

        $content .= '</ul>';


        return $content;
    }
}

?>
