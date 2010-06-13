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
                    '.RessourceManager::getImageLeft('perroquet_screenshot1_400.png',_('Perroquet in use')).'
                    <p>'._('Perroquet is a educational program to improve playfully your listening in a foreign language').'</p>
                <h2>'._('How it works').'</h2>
                    <p>'._('The principe of Perroquet is to use a video or audio file and the associated subtitles to make you listen and understand the dialogue or lyrics. After having idendified the files to use, Perroquet will read a piece of video then pause. It will show you the number of words to find and you will have to type them to continue. You can listen a sequence as many times as necessary. If you do not understand, Perroquet offers several means to help you.').'</p>

                <h2>'._('Try now').'</h2>
                    <p>'._('Perroquet work with every media file your computer can read. Choose one video ou a audio book in the language you want to work and download the corresponding subtitle in the same language (srt format). <a href="'.RessourceManager::getInnerUrl('download').'" >Download</a>, install and launch perroquet.').'</p>
                    <p>'._('You must then  Perroquet, run it, create a new exercise and put the video file in the first field, the file of English subtitles in the second file and the subtitle in the French final. To learn to use all the features of parrot, see the <a href='.RessourceManager::getInnerUrl('documentation').' >documentation</a>.').'</p>
                    <p>'._('If you want to test perroquet but you have no video available, you can use the integrated exercises manager. You can find it in "Edit > Exercices Manager" and provide a easy way to install exercises from a online database.').'</p>
                    <p>'._('If you want plan to test perroquet without internet connection, you also can an exercises now from the online exercise repository and import it in perroquet later (File > Import): <a href="/exercises/" >Exercises repository</a>').'</p>
                    <p>'._('For now, the online exercises only allows you to practice understanding English.').'</p>

                    

                <h2>'._('News').'</h2>

                    <h3>'._('Version 1.1.0 - 2010-07-01').'</h3>
                    <ul>
                        <li>'._('Add repository manager').'</li>
                        <li>'._('Packages import and export').'</li>
                        <li>'._('Refactoring most of the code').'</li>
                        <li>'._('Add others exercise languages').'</li>
                        <li>'._('Added aliases and synonyms').'</li>
                        <li>'._('Show last open files').'</li>
                        <li>'._('Add many teaching tools').'</li>
                        <li>'._('Change exercise properties').'</li>
                        <li>'._('Add many navigation toots').'</li>
                        <li>'._('Add many new help tools').'</li>
                        <li>'._('Support multi files exercises').'</li>
                        <li>'._('Automatic move of wrong placed words').'</li>
                        <li>'._('Fix various bugs').'</li>
                        <li>'._('Translation updates').'</li>
                    </ul>

                    <h3>'._('Version 1.0.1 - 2010-01-13').'</h3>
                    <ul>
                        <li>'._('Improve window resize').'</li>
                        <li>'._('Add new shortcuts').'</li>
                        <li>'._('Remove html tags in srt files').'</li>
                        <li>'._('Replace | by new line in srt').'</li>
                        <li>'._('Handle perroquet file, add mime type and icons on perroquet exercise').'</li>
                        <li>'._('Improve exercice creation dialog').'</li>
                        <li>'._('Add tooltips').'</li>
                        <li>'._('Reimplement input system to support specials characters').'</li>
                        <li>'._('Fix various bugs').'</li>
                        <li>'._('Translation updates').'</li>
                    </ul>
                <h2>'._('Licence').'</h2>
                    <p>'._('Perroquet  is a free software distributed under the GNU Public License version 3 or higher. The source code of this software is available here: <a href="https://launchpad.net/perroquet/+download" >Download page at launchpad</a>').'</p>

                    <p>'._('The full text of the license is available here <a href="http://www.gnu.org/licenses/gpl.html">GPL</a>.').'</p>
        ';
        return $content;
    }
}

?>
