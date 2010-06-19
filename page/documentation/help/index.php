<?php

/**
 * Description of index
 *
 * @author fred
 */

require_once $_SERVER["DOCUMENT_ROOT"].'/page/documentation/documentation_page.php';

class CurrentPage extends DocumentationPage{
        function __construct() {
        $this->id = 'documentation/help/index';
        $this->title = _('Documentation - Help tools');
    }
    function execute() {

    }

    function generateContent() {
        $content ='';
        $content .= '<h1>'._('Documentation - Help tools').'</h1>';
            

        $content .= '<p>'._('In some cases, you may fail to understand what is said. Sometimes nothing is said (if there are subtitles for the deaf). Sometimes, the subtitles are broken. In these case, there is multiple ways to get help.').'</p>';

        $content .= '<p>'._('Most of these help tools can be accessed by the help menu.').'</p>';

        $content .= '<ul>
            <li>'._('Autocoloration').'</li>
            <li>'._('Hint').'</li>
            <li>'._('Translation').'</li>
            <li>'._('Words list').'</li>
            <li>'._('Complete words').'</li>
            <li>'._('Show correction').'</li>
            </ul>';

        $content .= '<h2>'._('Autocoloration').'</h2>';

        $content .= '<p>'._('Perroquet change the background color of words when you are editing a word. If the color turn to green, you are near of the good word. If the color turn to red, you are wrong or misplaced.').'</p>';

        $content .= '<h2>'._('Hint').'</h2>';

        $content .= '<p>'._('Click on Hint button will give you help on the word where the cursor is. At fisrt hiny, le character count of the word will be displayed with some "~" (you don\'t have to delete these "~", they will be automaticaly replaced on typing). For each other hint, a new letter of the word will be displayed. Before ask a hint, don\'t delete your word: the corrects character will be preserved.').'</p>';

        $content .= '<h2>'._('Translation').'</h2>';

        $content .= '<p>'._('The translation button show or hide the translation zone. If a translation file has been choose at exercise creation, the translation of the current sequence is displayed in the translation zone. Perroquet translate sometimes more text then necessary to be sure the the interresting part is present.').'</p>';

        $content .= '<h2>'._('Words list').'</h2>';

        $content .= '<p>'._('The words list contains the list of words to find in whole exercise. It can serve to find the exact spell of a word.').'</p>';

        $content .= '<p>'._('The filter can help to display less words. To use the filter, you just have to type the pattern in the filter field. The filter use regexp, so typing "^s.{3}r$" select only words of 5 letters beginning with s and ending with "r".').'</p>';

        $content .= '<h2>'._('Complete words').'</h2>';

        $content .= '<p>'._('You can use complete the current word or the current sequence using "Reveal the word" or "Reveal the sequence" in the help menu.').'</p>';

        $content .= '<h2>'._('Show correction').'</h2>';


        $content .= '<p>'._('Clicking on the Show correction button, you activate the correction mode. In this mode you show the correction without have to reveal au sequences. Also, you can easily hide the correction.').'</p>';

        return $content;
    }
}

?>
