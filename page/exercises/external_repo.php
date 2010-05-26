<?php

/**
 * Description of index
 *
 * @author fred
 */
class CurrentPage extends HtmlPage{
        function __construct() {
        $this->id = 'index';
        $this->title = _('Presentation');
    }

    function generateContent() {
        $content = '
        <h1>'._('Presentation').'</h1>
                    '.RessourceManager::getImage('perroquet_screenshot1_400.png',_('Perroquet in use')).'
                    <p>Perroquet is a educational program to improve playfully your listening in a foreign language</p>
                <h2>'._('How it works').'</h2>
                    <p>The principe of Perroquet is to use a video or audio file and the associated subtitles to make you listen and understand the dialogue or lyrics. After having idendified the files to use, Perroquet will read a piece of video then pause. It will show you the number of words to find and you will have to type them to continue. You can listen a sequence as many times as necessary. If you do not understand, Perroquet offers several means to help you.</p>

                <h2>'._('Try now').'</h2>
                    <p>If you want to test parrot but you have no video available, here is an  archive containing the film Elephant Dream with English subtitles match: <a href="/ressources/elephant_dream_en.tar.gz" >Files demo pages Elephant Dream</a></p>
                    <p>For now, this demo only allows you to practice understanding English.</p>


                    <p>You must then <a href="'.RessourceManager::getInnerUrl('download').'" >download and install</a> Perroquet, run it, create a new exercise and put the video file in the first field, the file of English subtitles in the second file and the subtitle in the French final. To learn to use all the features of parrot, see the <a href="/en/documentation.html" >documentation</a>.</p>

                <h2>'._('News').'</h2>

                    <h3>Version 1.0.1</h3>
                    <ul>
                        <li>Improve window resize</li>
                        <li>Add new shortcuts</li>
                        <li>Remove html tags in srt files</li>
                        <li>Replace | by new line in srt</li>
                        <li>Handle perroquet file, add mime type and icons on perroquet exercise</li>
                        <li>Improve exercice creation dialog</li>
                        <li>Add tooltips</li>
                        <li>Reimplement input system to support specials characters</li>
                        <li>Fix various bugs</li>
                        <li>Translation updates</li>
                    </ul>
                <h2>Licence</h2>
                    <p>Perroquet  is a free software distributed under the GNU Public License version 3 or higher. The source code of this software is available here: <a href="https://launchpad.net/perroquet/+download" >Download page at launchpad</a></p>

                    <p>The full text of the license is available here <a href="http://www.gnu.org/licenses/gpl.html">GPL</a>.</p>
        ';
        return $content;
    }
}

?>
