<?php

/**
 * Description of index
 *
 * @author fred
 */

require_once $_SERVER["DOCUMENT_ROOT"].'/page/documentation/documentation_page.php';

class CurrentPage extends DocumentationPage {
        function __construct() {
        $this->id = 'documentation/use/navigate';
        $this->title = _('Documentation - Use - Navigate');
    }
    function execute() {

    }

    function generateContent() {
        $content ='';
        $content .= '
        <h1>'._('Documentation - Use - Navigate').'</h1>';

        $content .= '<p>'._('For the chapter, you can open an exercise. Open the exercise manager (Edit > Exercise Manager), Select "Alison" exercise and click on Install button. Wait the end of the installation of the exercise the click on the Use button.').'</p>';

        $content .= '<p>'._('At the right of the exercise slider, you can see the current position and the lenght of the exercise. The first number is the current sequence and the second is the sequence count. For exemple, in the "Alison" exercise, there is 8 sequences and the exercise begin at the first sequence.').'</p>';

        $content .= '<p>'._('You are not obligated to answer to sequences in order. You can go directly to a sequence using the exercise slider. You can also use the "Previous sequence" and "Next sequence" button but the complete sequence will be skipped.').'</p>';

        $content .= '<p>'._('With the sequence slider, you can listen the end of the current sequence. This is useful to focalise your listening on one word or when sequence are too long.').'</p>';


        $content .= '<p>'._('When the sequences are not completed, it\'s not easily possible to see the video part located between 2 sequences because Perroquet stop the video at the end of the sequences. When you complete a sequence, Perroquet will not stop the playback at the end of sequence but continue to play until the end of the next uncomplete sequence. If you really want to see the video after an uncomplete sequence, you have to activate the Play/Pause button : Edit > Settings > Advanced tab > Show play and pause buttons. Then wait that the video stop at the and of the uncomplete sequence and use the Play button. Use the repeat button to return at the beginning of the current sequence.').'</p>';



        return $content;
    }
}

?>
