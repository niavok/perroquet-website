<?php

/**
 * Description of index
 *
 * @author fred
 */
require_once $_SERVER["DOCUMENT_ROOT"].'/page/exercises/exercise_page.php';

class CurrentPage extends ExercisePage{
        function __construct() {
        $this->id = 'exercises/propose_form';
        $this->title = _('Propose new exercise');
    }

    function execute() {

        if(isset($_POST['propose_name']) &&  $_SESSION['form_enabled']) {
            

         
            LoginManager::register();

            $name = sqlite_escape_string($_POST['propose_name']);
            $description = sqlite_escape_string($_POST['propose_description']);
            $links = sqlite_escape_string($_POST['propose_links']);

            $user = sqlite_escape_string(LoginManager::getLogin());

            $state = 'waiting';

            DatabaseManager::setQuery("INSERT INTO proposed_exercises VALUES(
                NULL,
                '$name',
                '$description',
                '$links',
                '$user',
                '$state',
                '',
                '',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                );");

            $this->message = "Exercise proposed.";

            $_SESSION['form_enabled'] = false;
            
        } else {
            $_SESSION['form_enabled'] = true;
        }


        
    }

    function generateContent() {
        $content = '
        <h1>'._('Propose new exercise').'</h1>
        ';

        if(LoginManager::isLogged()) {

            if($_SESSION['form_enabled']) {
                $content .= $this->displayForm();
            } else {
                $content .= '
            <p>'.$this->message.'<p/>';
            $content .= '<p><a href="'.RessourceManager::getInnerUrl('exercises/index').'">'._('Return to exercises index.').'</a></p>';
            }

                            
        } else {
            $content .= "<p>You must be logged to propose an exercise.</p>";
            $content .= '<p><a href="'.RessourceManager::getInnerUrl('special/login/login_form').'">'._('Go to login page').'</a></p>';

        }

        return $content;
    }

    function displayForm() {
            $content='';

            $content .= '
            <p>'._('Propose an exercise permit to help to full the official perroquet exercises\'s repository.').'</p>
            <p>'._('Before beeing accessible from the exercise manager, the proposed exercise will be examinated. Also, be sure that you use free licenced file as public domain, CC-by-sa, GPL, Free Art, ...').'</p>';

            $content.='
        <form action="'.RessourceManager::getInnerUrl('exercises/propose_form').'"  method="post">
              <label for="name">'._('Name: ').'</label><input id="name" type="text" name="propose_name" /><br />
              <label for="description">'._('Short description: ').'</label><input type="text" id="description"  name="propose_description"  /><br />
              <label for="links">'._('Others informations : links to ressources, comments, authors, licence, ... : ').'</label><br /><textarea id="links"  name="propose_links"  ></textarea><br />
              <br />
              <input type="submit" value="'._('Propose').'" />
        </form>
        ';
        return $content;
    }
}

?>
