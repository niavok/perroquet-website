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
            <p>'._('Perroquet works the exercises. And exercises in perroquet is the association of one or more media files and the corresponding subtitles files.').'</p>
            <p>'._('There is various way to get an exercices.').'</p>

            <h2>'._('Manual exercises creation').'</h2>
                <p>'._('If you have a media file with an audio track in the language you want to works and a subtitle in the same language, you can manually create an exercises.').'</p>
                    <p>'._('Read the documentation to lear to create an exercise: ').'<a href='.RessourceManager::getInnerUrl('documentation').' >'._('documentation').'</a>.</p>

            <h2>'._('Online exercises repositories').'</h2>
            <p>'._('Although perroquet works with every media file with a subtile file in the same language, a exercise manager in perroquet provide the access to an exercises\'s online database.').'</p>';
             $content .= '<p>'._('The exercises manager (Edit>Exercise Manager) contains by default only one repository and this repository contains few exercises but no configuration is needed for these exercises.').'</p>';

             $content .= '<p>'._('Your help is welcome to fill the repositories with others exercises: ').'<a href="'.RessourceManager::getInnerUrl('exercises/propose_form').'">'._('Propose a new exercise or an update of an existing exercise.').'</a></p>';

            //$content .= '<p><a href="'.RessourceManager::getInnerUrl('exercises/search').'">'._('Browse, not and comments exercises.').'</a></p>';
            //$content .= '<p><a href="'.RessourceManager::getInnerUrl('exercises/search').'">'._('Signal a problem on an exercise.').'</a></p>';

            //$content .= '<p><a href="'.RessourceManager::getInnerUrl('exercises/search').'">'._('Find others exercises.').'</a></p>';
            

        $content .= '<p>The perroquet team provide a test repository : http://perroquet.b219.org/exercises/1.1.0/exercises_test.xml. To learn to add a new repository in perroquet, read this page : <a href="'.RessourceManager::getInnerUrl('documentation/repositories/add_new repository').'">'._('Add new repository').'</a>.</p>';

        return $content;
    }
}

?>
