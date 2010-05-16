<?php

/**
 * Description of index
 *
 * @author fred
 */
class CurrentPage extends HtmlPage{
        function __construct() {
        $this->id = 'not_found';
        $this->title = _('Page not found');
    }

    function generateContent() {
        $content = '
        <h1>'._('Page not found').'</h1>';
        return $content;
    }
}

?>
