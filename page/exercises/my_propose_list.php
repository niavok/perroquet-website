<?php

/**
 * Description of index
 *
 * @author fred
 */
require_once $_SERVER["DOCUMENT_ROOT"].'/page/exercises/exercise_page.php';

class CurrentPage extends ExercisePage{
        function __construct() {
        $this->id = 'exercises/my_propose_list';
        $this->title = _('My proposed exercises');
    }
    
    function generateContent() {
        $content = '
        <h1>'._('My proposed exercised').'</h1>
        ';

        if(LoginManager::isLogged()) {

           
            $content .= $this->displayContent();
           
                            
        } else {
            $content .= "<p>You must be logged to access to your proposed exercises.</p>";
            $content .= '<p><a href="'.RessourceManager::getInnerUrl('special/login/login_form').'">'._('Go to login page').'</a></p>';

        }

        return $content;
    }

    function displayContent() {
            $content='';

            $content .= '
            <h2>'._('Current propositions').'</h2>';

            $user = LoginManager::getLogin();

            $results = DatabaseManager::getQuery("SELECT * FROM proposed_exercises WHERE user='$user' and (state='waiting' OR state='processing')");

            while($result = $results->fetchArray()) {
                $content .= '<div class="subblock" ><ul>';


                $content .= '<li>'._('Name: ').$result['name'].'</li>';
                $content .= '<li>'._('Description: ').$result['description'].'</li>';
                $content .= '<li>'._('Links: ').$result['links'].'</li>';
                
                $state = $result['state'];

                $stateStr = _('Unknown state');
                if($state == 'waiting') {
                    $stateStr = _('Waiting for processing');
                }elseif($state == 'processing') {
                    $stateStr = _('Processing');
                }elseif($state == 'accepted') {
                    $stateStr = _('Accepted');
                }
                $content .= '<li>'._('State: ').$stateStr.'</li>';


                $content .= '</ul></div>';
            }

            $content .= '
            <h2>'._('Old propositions').'</h2>';

            $results = DatabaseManager::getQuery("SELECT * FROM proposed_exercises WHERE user='$user' and not (state='waiting' OR state='processing')");

            while($result = $results->fetchArray()) {
                $content .= '<div class="subblock" ><ul>';


                $content .= '<li>'._('Name: ').$result['name'].'</li>';
                $content .= '<li>'._('Description: ').$result['description'].'</li>';
                $content .= '<li>'._('Links: ').$result['links'].'</li>';

                $state = $result['state'];

                $stateStr = _('Unknown state');
                if($state == 'waiting') {
                    $stateStr = _('Waiting for processing');
                }elseif($state == 'processing') {
                    $stateStr = _('Processing');
                }elseif($state == 'accepted') {
                    $stateStr = _('Accepted');
                }
                $content .= '<li>'._('State: ').$stateStr.'</li>';


                $content .= '</ul></div>';
            }

            
        return $content;
    }
}

?>
