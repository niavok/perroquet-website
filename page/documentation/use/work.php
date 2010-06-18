<?php

/**
 * Description of index
 *
 * @author fred
 */

require_once $_SERVER["DOCUMENT_ROOT"].'/page/documentation/documentation_page.php';

class CurrentPage extends DocumentationPage{
        function __construct() {
        $this->id = 'documentation/use/work';
        $this->title = _('Documentation - Work');
    }
    function execute() {

    }

    function generateContent() {
        $content ='';
        $content .= '
        <h1>'._('Documentation - Work').'</h1>';
           
        $content .= '<p>'._('In the response zone, each word you have to found are symbolised by a blue rectangle. Before typing a response you must verify that a cursor is present in the response zone. If no cursor are present, click on the zone.').'</p>';

        $content .= '<p>'._('In the response zone, each word you have to found are symbolised by a blue rectangle. Before typing a response you must verify that a cursor is present in the response zone. If no cursor are present, click on the zone near the word you want to type.').'</p>';

        $content .= '<p>'._('If you place the cursor at the wrong place but the word you type is right, the word will be moved automatically.').'</p>';

        $content .= '<p>'._('You don\'t have to uppercase letters, Perroquet ignore case.').'</p>';

        $content .= '<p>'._('When a word is correct, it is display in green and cannot be modified.').'</p>';

        $content .= '<p>'._('To change the current word, you can use arrow keys, the mouse or the space key. These keys will skipped the completed words.').'</p>';

        $content .= '<p>'._('The punctuation is already displayed so you don\'t have to type it. However, characters as apostrophe in english exercises have to be guess. In english exercise, characters to find are : "a" to "z", "0" to "9" and "apostrophe".').'</p>';

        return $content;
    }
}

?>
