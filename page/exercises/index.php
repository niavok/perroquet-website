<?php

/**
 * Description of index
 *
 * @author fred
 */

require_once $_SERVER["DOCUMENT_ROOT"].'/page/exercises/exercise_page.php';

class CurrentPage extends ExercisePage{
        function __construct() {
        $this->id = 'exercises/index';
        $this->title = _('Exercises');
    }
    function execute() {
        
    }

    function generateContent() {
        $content ='';
        $content .= '
        <h1>'._('Exercises').'</h1>
            <p>Although perroquet works with every media file with a subtile file un the same language, a exercise manager in perroquet provide an exercises\'s online database.</p>';

            $content .= '<p><a href="'.RessourceManager::getInnerUrl('exercises/propose_form').'">'._('Propose a new exercise or an update of an existing exercise.').'</a></p>';
            $content .= '<p><a href="'.RessourceManager::getInnerUrl('exercises/search').'">'._('Browse, not and comments exercises.').'</a></p>';
            $content .= '<p><a href="'.RessourceManager::getInnerUrl('exercises/search').'">'._('Signal a problem on an exercise.').'</a></p>';

            $content .= '<p><a href="'.RessourceManager::getInnerUrl('exercises/search').'">'._('Find others exercises.').'</a></p>';
            

        $content .= '<p>The perroquet team provide a test repository : http://perroquet.b219.org/exercises/1.1.0/exercises_test.xml. To learn to add a new repository in perroquet, read this page : <a href="'.RessourceManager::getInnerUrl('documentation/repositories/add_new repository').'">'._('Add new repository').'</a>.</p>';

        return $content;
    }
}

?>
