<?php

/**
 * Description of index
 *
 * @author fred
 */

require_once $_SERVER["DOCUMENT_ROOT"].'/page/documentation/documentation_page.php';

class CurrentPage extends DocumentationPage{
        function __construct() {
        $this->id = 'documentation/instalation/index';
        $this->title = _('Documentation - Installation');
    }
    function execute() {

    }

    function generateContent() {
        $content ='';
        $content .= '
        <h1>'._('Documentation - Installation').'</h1>
            <p>'._('No documentation available.').'</p>';


        return $content;
    }
}

?>
<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
