<?php

/**
 * Description of index
 *
 * @author fred
 */

require_once $_SERVER["DOCUMENT_ROOT"].'/page/documentation/documentation_page.php';

class CurrentPage extends DocumentationPage{
        function __construct() {
        $this->id = 'documentation/index';
        $this->title = _('Documentation');
    }
    function execute() {
        
    }

    function generateContent() {
        $content ='';
        $content .= '
        <h1>'._('Documentation').'</h1>
            <p>'._('You will find here the documentation of Perroquet. This documentation is far to be complete but don\'t hesitate to contact us for question.').'</p>';




        $content .= '<p>'._('This documentation is subdivised in six section: ').'</p><ul>';

        $content .= '<li>'.sprintf(_('<a href="%s">Installation</a> : explains how install, compile or only run perroquet.'),RessourceManager::getInnerUrl('documentation/installation/index')).'</li>';
        $content .= '<li>'.sprintf(_('<a href="%s">Use perroquet</a> : describe the user interface and explains how to create an simple exercise and work on it.'),RessourceManager::getInnerUrl('documentation/use/index')).'</li>';
        $content .= '<li>'.sprintf(_('<a href="%s">Help tools</a> : if an exercise is too difficult for you, you can use help tools to give you hint or speed down the playback. This part also explain how to increase the difficulty of an exercise.'),RessourceManager::getInnerUrl('documentation/help/index')).'</li>';
        $content .= '<li>'.sprintf(_('<a href="%s">Repositories</a> : this part explain how to add a new exercise source or create it own exercise repository.'),RessourceManager::getInnerUrl('documentation/repositories/index')).'</li>';
        $content .= '<li>'.sprintf(_('<a href="%s">Exercise creation</a> : explains how to create an exercise using advanced features as teacher locks or multi files exercises.'),RessourceManager::getInnerUrl('documentation/exercise_creation/index')).'</li>';
        $content .= '<li>'.sprintf(_('<a href="%s">Development</a> : installation from source, code global structure.'),RessourceManager::getInnerUrl('documentation/development/index')).'</li>';

        $content .= '</ul>';

        $content .= '<p>'._('There is also 2 special documentation page: ').'</p><ul>';

        $content .= '<li>'.sprintf(_('<a href="%s">FAQ</a> : for common or strange questions.'),RessourceManager::getInnerUrl('documentation/faq')).'</li>';
        $content .= '<li>'.sprintf(_('<a href="%s">Shortcuts</a> : to stop to use the mouse.'),RessourceManager::getInnerUrl('documentation/shortcuts')).'</li>';
        
        $content .= '</ul>';

        return $content;
    }
}

?>
