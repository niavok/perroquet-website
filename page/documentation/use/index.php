<?php

/**
 * Description of index
 *
 * @author fred
 */

require_once $_SERVER["DOCUMENT_ROOT"].'/page/documentation/documentation_page.php';

class CurrentPage extends DocumentationPage{
        function __construct() {
        $this->id = 'documentation/use/index';
        $this->title = _('Documentation - Use');
    }
    function execute() {

    }

    function generateContent() {
        $content ='';
        $content .= '
        <h1>'._('Documentation - use').'</h1>';


        $content .= '<p>'._('In this part, you will lear to works with perroquet.').'</p>';

        $content .= '<p>'._('The principle of perroquet is to transform a vidéo or audio file in a cloze test with the help of a subtitles  file.').'</p>';

        $content .= '<p>'._('Perroquet works with exercises. An exercise is a set of video or audio sequences that we will just call sequences. A sequence last only few seconds and correspond to a part of a dialog. The part of a video without dialogue can be in none sequence.').'</p>';

        $content .= '<p>'._('For each sequence of an exercise, you will listen it then type words you hear. Perroquet show you the number of word to found and show the punctuation, you must complete the cloze test.').'</p>';


        $content .= '<p>'._('This part is subdivised in three chapters: ').'</p><ul>';

        $content .= '<li>'.sprintf(_('<a href="%s">Interface</a> : this chapter descripte the interface.'),RessourceManager::getInnerUrl('documentation/installation/index')).'</li>';
        $content .= '<li>'.sprintf(_('<a href="%s">Navigate</a> : this chapter explain how to navigate in an exercise.'),RessourceManager::getInnerUrl('documentation/use/index')).'</li>';
        $content .= '<li>'.sprintf(_('<a href="%s">Works</a> : this chapter explain how to work on an exercise.'),RessourceManager::getInnerUrl('documentation/help/index')).'</li>';
        
        $content .= '</ul>';

        return $content;
    }
}

?>
