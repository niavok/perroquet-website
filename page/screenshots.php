<?php

/**
 * Description of index
 *
 * @author fred
 */
class CurrentPage extends HtmlPage{
        function __construct() {
        $this->id = 'screenshots';
        $this->title = _('Screenshots');
    }

    function generateContent() {
        $content = '
        <h1>'._('Screenshots').'</h1>
                <h2>'._('Perroquet in use').'</h2>
                <p>'.RessourceManager::getImage('perroquet_screenshot1.png',_('Perroquet in use')).'</p>
                    <h2>'._('Perroquet exercises manager').'</h2>
                <p>'.RessourceManager::getImage('perroquet_exercises_manager1.png',_('Perroquet exercises manager')).'</p>
        ';
        return $content;
    }
}

?>
