<?php

/**
 * Description of index
 *
 * @author fred
 */

require_once $_SERVER["DOCUMENT_ROOT"].'/page/documentation/documentation_page.php';

class CurrentPage extends DocumentationPage{
        function __construct() {
        $this->id = 'documentation/use/interface';
        $this->title = _('Documentation - use - Interface');
    }
    function execute() {

    }

    function generateContent() {
        $content ='';
        $content .= '
        <h1>'._('Documentation - Use - Interface').'</h1>';




        $content .= '<p>'._('This documentation is subdivised in six section: ').'</p>';

        return $content;
    }
}

?>
