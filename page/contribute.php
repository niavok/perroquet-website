<?php

/**
 * Description of index
 *
 * @author fred
 */
class CurrentPage extends HtmlPage{
        function __construct() {
        $this->id = 'contribure';
        $this->title = _('Contribute');
    }

    function generateContent() {
        $content = '<h1>'._('Contribute').'</h1>';
        $content .= '<p>'._('Perroquet is open to extern contribution. There is a lot of things beside programming that can help us. There is work on the Perroquet software, but also on exercise repository and on this website.').'</p>';
        $content .= '<p>'._('If no special link is provide, please contact us: ').'<a href="'.RessourceManager::getInnerUrl('contacts').'">'._('Contact perroquet team</a>.').'</p>';


        $content .= '<h2>'._('Help on Perroquet software').'</h2>';

         $content .= '<ul>
             <li>'._('Signal a bug, or a translation error in Perroquet: <a href="https://bugs.launchpad.net/perroquet" >Perroquet bugtracker</a>').'</li>
             <li>'._('Packaging or adding in distributions').'</li>
             <li>'._('Send a patch: <a href="https://code.launchpad.net/~perroquet-team/perroquet/trunk2" >Perroquet code</a>').'</li>
             <li>'._('Help to translate Perroquet: <a href="https://translations.launchpad.net/perroquet" >Perroquet online translation</a>').'</li>
             <li>'._('Suggest a new feature or make a suggestion').'</li>
                 </ul>';

        
        
        $content .= '<h2>'._('Help on exercise repositoy').'</h2>';
        $content .= '<ul>
             <li>'._('Signal error on exercise').'</li>
             <li>'._('Signal usable video or audio file (with or without subtitles)').'</li>
             <li>'._('Propose an exercise:').'<a href="'.RessourceManager::getInnerUrl('exercises/propose_form').'">'._('propose a new exercise').'</a></li>
             <li>'._('Write subtitles').'</li>
                 </ul>';

        $content .= '<h2>'._('Help on Perroquet website').'</h2>';
         $content .= '<ul>
             <li>'._('Write documentation').'</li>
             <li>'._('Signal a bug, or a translation error in this website: <a href="https://bugs.launchpad.net/perroquet/website" >Perroquet website bugtracker</a>').'</li>
             <li>'._('Help to translate the website: <a href="https://translations.launchpad.net/perroquet/website/+translations" >Perroquet website online translation</a>').'</li>
             <li>'._('Improve this website: <a href="https://code.launchpad.net/~perroquet-team/perroquet/website" >Perroquet website code</a> ').'</li>
                 </ul>';


        $content .= '<h2>'._('Others helps').'</h2>';

            $content .= '<p>'._('All others help is welcome. If you want to participate more to perroquet, you can ask to join the team.').'</p>';

        return $content;
    }
}

?>
