<?php

/**
 * Description of index
 *
 * @author fred
 */

require_once $_SERVER["DOCUMENT_ROOT"].'/page/documentation/documentation_page.php';

class CurrentPage extends DocumentationPage{
        function __construct() {
        $this->id = 'documentation/xercise_creation/index';
        $this->title = _('Documentation - Exercise creation');
    }
    function execute() {

    }

    function generateContent() {
        $content ='';
        $content .= '<h1>'._('Documentation - Exercise creation').'</h1>';


        $content .= '<p>'._('To create an exercise, click on the button "New exercise" in the tools bar or on "File > New exercise" in the menu bar.').'</p>';


        $content .= '<p>'._('A dialog appears with 4 field:').'</p>';

        $content .= '<ul>
            <li>'._(' Exercise video or audio: this field must be set to the media file in the language you want to work.').'</li>
            <li>'._('Exercise subtitle: this field must be set to the subtitle file corresponding to the media file, in the same language. The subtitles format must be srt.').'</li>
            <li>'._('Translation subtitles: this field can be set to another subtitle in another language. This field is optionnal. The subtitles format must be srt.').'</li>
            <li>'._('Language: language to work. This field determines the list of character you have to guess.').'</li>
                </ul>';

        $content .= '<p>'._('Once these fields have been filled, click on "ok" button. Interface\'s components will be activated and the media file will begin to play.').'</p>';



       

        return $content;
    }
}

?>
