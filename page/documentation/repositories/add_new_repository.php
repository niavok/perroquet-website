<?php

/**
 * Description of index
 *
 * @author fred
 */

require_once $_SERVER["DOCUMENT_ROOT"].'/page/documentation/documentation_page.php';

class CurrentPage extends DocumentationPage{
        function __construct() {
        $this->id = 'documentation/repositories/add_new_repository';
        $this->title = _('Documentation - Add new Repository');
    }
    function execute() {

    }

    function generateContent() {
        $content ='';
        $content .= '
        <h1>'._('Documentation - Add new Repository').'</h1>
            <p>'._('No documentation available.').'</p>';

        return $content;
    }
}

?>
