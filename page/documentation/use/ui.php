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
        $this->title = _('Documentation - Use - Interface');
    }
    function execute() {

    }

    function generateContent() {
        $content ='';
        $content .= '
        <h1>'._('Documentation - Use - Interface').'</h1>';


        $content .= '<p>'._('Perroquet\'s user interface has as goal to make easy to navigate between different sequences and inside a sequence. Perroquet doesn\'t aim to be a great video player but be good to learn foreign languages.').'</p>';

        $content .= '<p>'._('This is the interface with annotation showing the differents components of the interface:').'</p>';


         $content .= '<p>'.RessourceManager::getImage('perroquet_ui_zones.png',_('Annotated Perroquet interface')).'</p>';




         $content .= '<ul>'._('These components are:');
         $content .= '<li>'._('1 - Title bar. It display the project name and the current save state of the exercise.').'</li>';
         $content .= '<li>'._('2 - Menu bar. It permit an access to most of Perroquet\'s features.').'</li>';
         $content .= '<li>'._('3 - Tools bar. It permet a fast access to important of Perroquet\'s features.').'</li>';
         $content .= '<li>'._('4 - Video zone. The video is displayed in this zone.').'</li>';
         $content .= '<li>'._('5 - Statistic\'s zone. It displays informations about exercise progress.').'</li>';
         $content .= '<li>'._('6 - Filter field. Allow to filter words in words list.').'</li>';
         $content .= '<li>'._('7 - Words list. It contains all words you have to find in the whole exercise.').'</li>';
         $content .= '<li>'._('8 - Response zone. It displays the cloze test.').'</li>';
         $content .= '<li>'._('9 - Translation zone. It displays the translation of the current sequence. This zone is hidden by default').'</li>';
         $content .= '<li>'._('10 - Sequence slider. It permit to navigate in the current sequence.').'</li>';
         $content .= '<li>'._('11 - Exercise slider. It permit to navigate in the exercise.').'</li>';
         $content .= '</ul>';

         $content .= '<ul>'._('The tools bar button are (from left to right):');
         $content .= '<li>'._('New exercise.').'</li>';
         $content .= '<li>'._('Open en exercise.').'</li>';
         $content .= '<li>'._('Save the exercise.').'</li>';
         $content .= '<li>'._('Previous sequence.').'</li>';
         $content .= '<li>'._('Next sequence.').'</li>';
         $content .= '<li>'._('Listen the sequence again.').'</li>';
         $content .= '<li>'._('Hint.').'</li>';
         $content .= '<li>'._('Show/hide translation.').'</li>';
         $content .= '<li>'._('Show/hide correction.').'</li>';
         $content .= '<li>'._('Slow down playback.').'</li>';
         $content .= '<li>'._('Exercise properties.').'</li>';
         $content .= '<li>'._('Reset the exercise.').'</li>';
         $content .= '</ul>';


        return $content;
    }
}

?>
