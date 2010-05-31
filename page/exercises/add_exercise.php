<?php

/**
 * Description of index
 *
 * @author fred
 */
require_once $_SERVER["DOCUMENT_ROOT"].'/page/exercises/exercise_page.php';

class CurrentPage extends ExercisePage {
    function __construct() {
        $this->id = 'exercises/add_exercise';
        $this->title = _('Add new exercise');
    }

    function execute() {

        if(LoginManager::isLogged() && LoginManager::isAdministrator()) {

            if(isset($_POST['propose_name']) &&  $_SESSION['form_enabled']) {


                LoginManager::register();


                LoginManager::register();

                $group = sqlite_escape_string($_POST['exercise_group']);
                $code = sqlite_escape_string($_POST['exercise_code']);
                $name = sqlite_escape_string($_POST['exercise_name']);
                $description = sqlite_escape_string($_POST['propose_description']);
                $proposer = sqlite_escape_string($_POST['exercise_proposer']);
                $state = sqlite_escape_string($_POST['exercise_state']);
                $word_count = sqlite_escape_string($_POST['exercise_word_count']);
                $licence = sqlite_escape_string($_POST['exercise_licence']);
                $language = sqlite_escape_string($_POST['exercise_language']);
                $media_type = sqlite_escape_string($_POST['exercise_media_type']);
                $exercise_version = sqlite_escape_string($_POST['exercise_exercise_version']);
                $author = sqlite_escape_string($_POST['exercise_author']);
                $author_website = sqlite_escape_string($_POST['exercise_author_website']);
                $author_contact = sqlite_escape_string($_POST['exercise_author_contact']);
                $packager = sqlite_escape_string($_POST['exercise_packager']);
                $packager_website = sqlite_escape_string($_POST['exercise_packager_website']);
                $packager_contact = sqlite_escape_string($_POST['exercise_packager_contact']);
                $translations = sqlite_escape_string($_POST['exercise_translations']);
                $file = sqlite_escape_string($_POST['exercise_file']);

                $state = 'waiting';

                DatabaseManager::setQuery("INSERT INTO exercises VALUES(
                        '',
                        '$group',
                        '$proposer',
                        '$state',
                        '$code',
                        '$name',
                        '$description',
                        '$word_count',
                        '$licence',
                        '$language',
                        '$media_type',
                        '$exercise_version',
                        '$author',
                        '$author_website',
                        '$author_contact',
                        '$packager',
                        '$packager_website',
                        '$packager_contact',
                        '$translations',
                        '$file',
                        );");

                $this->message = "Exercise add.";

                $_SESSION['form_enabled'] = false;

            } else {
                $_SESSION['form_enabled'] = true;
            }

        }


    }

    function generateContent() {
        $content = '
        <h1>'._('Add a new exercise').'</h1>
        ';

        if(LoginManager::isLogged() && LoginManager::isAdministrator()) {

            if($_SESSION['form_enabled']) {
                $content .= $this->displayForm();
            } else {
                $content .= '
            <p>'.$this->message.'<p/>';
                $content .= '<p><a href="'.RessourceManager::getInnerUrl('exercises/index').'">'._('Return to exercises index.').'</a></p>';
            }


        } else {
            $content .= "<p>You must be logged as administrator to add an exercise.</p>";
            $content .= '<p><a href="'.RessourceManager::getInnerUrl('special/login/login_form').'">'._('Go to login page').'</a></p>';

        }

        return $content;
    }

    function displayForm() {
        $content='';

        $group = sqlite_escape_string($_POST['exercise_group']);
        $code = sqlite_escape_string($_POST['exercise_code']);
        $name = sqlite_escape_string($_POST['exercise_name']);
        $description = sqlite_escape_string($_POST['propose_description']);
        $proposer = sqlite_escape_string($_POST['exercise_proposer']);
        $state = sqlite_escape_string($_POST['exercise_state']);
        $word_count = sqlite_escape_string($_POST['exercise_word_count']);
        $licence = sqlite_escape_string($_POST['exercise_licence']);
        $language = sqlite_escape_string($_POST['exercise_language']);
        $media_type = sqlite_escape_string($_POST['exercise_media_type']);
        $exercise_version = sqlite_escape_string($_POST['exercise_exercise_version']);
        $author = sqlite_escape_string($_POST['exercise_author']);
        $author_website = sqlite_escape_string($_POST['exercise_author_website']);
        $author_contact = sqlite_escape_string($_POST['exercise_author_contact']);
        $packager = sqlite_escape_string($_POST['exercise_packager']);
        $packager_website = sqlite_escape_string($_POST['exercise_packager_website']);
        $packager_contact = sqlite_escape_string($_POST['exercise_packager_contact']);
        $translations = sqlite_escape_string($_POST['exercise_translations']);
        $file = sqlite_escape_string($_POST['exercise_file']);

        $content.='
        <form action="'.RessourceManager::getInnerUrl('exercises/add_exercise').'"  method="post">
              <label for="exercise_name">'._('Name: ').'</label><input id="exercise_name" type="text" name="exercise_name"  /><br />
              <label for="exercise_group">'._('Group: ').'</label><input type="text" id="exercise_group"  name="exercise_group"  /><br />
              <label for="exercise_code">'._('Id: ').'</label><input type="text" id="exercise_code"  name="exercise_code"  /><br />
              <label for="propose_description">'._('Description: ').'</label><input type="text" id="propose_description"  name="propose_description"  /><br />
              <label for="exercise_word_count">'._('Word count: ').'</label><input type="text" id="exercise_word_count"  name="exercise_word_count"  /><br />
              <label for="exercise_licence">'._('Licence: ').'</label><input type="text" id="exercise_licence"  name="exercise_licence"  /><br />
              <label for="exercise_language">'._('Languague (en, fr, ...): ').'</label><input type="text" id="exercise_language"  name="exercise_language"  /><br />
              <label for="exercise_media_type">'._('Media type (video, audio, ...): ').'</label><input type="text" id="exercise_media_type"  name="exercise_media_type"  /><br />
              <label for="exercise_exercise_version">'._('Exercise version: ').'</label><input type="text" id="exercise_exercise_version"  name="exercise_exercise_version"  /><br />
              <label for="exercise_author">'._('Author: ').'</label><input type="text" id="exercise_author"  name="exercise_author"  /><br />
              <label for="exercise_author_website">'._('Author website: ').'</label><input type="text" id="exercise_author_website"  name="exercise_author_website"  /><br />
              <label for="exercise_author_contact">'._('Author contact: ').'</label><input type="text" id="exercise_author_contact"  name="exercise_author_contact"  /><br />
              <label for="exercise_packager">'._('Packager: ').'</label><input type="text" id="exercise_packager"  name="exercise_packager"  /><br />
              <label for="exercise_packager_website">'._('Packager website: ').'</label><input type="text" id="exercise_packager_website"  name="exercise_packager_website"  /><br />
              <label for="exercise_packager_contact">'._('Packager contact: ').'</label><input type="text" id="exercise_packager_contact"  name="exercise_packager_contact"  /><br />
              <label for="exercise_translations">'._('Translation (en, fr, ...): ').'</label><input type="text" id="exercise_translations"  name="exercise_translations"  /><br />
              <label for="exercise_file">'._('Package file: ').'</label><input type="text" id="exercise_file"  name="exercise_file"  /><br />

              <br />
              <input type="submit" value="'._('Propose').'" />
        </form>
        ';
        return $content;
    }
}

?>
