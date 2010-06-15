<?php

/**
 * Description of index
 *
 * @author fred
 */
class CurrentPage extends HtmlPage{
        function __construct() {
        $this->id = 'contacts';
        $this->title = _('Contacts');
    }

    function generateContent() {
        $content = '<h1>'._('Contacts').'</h1>';


        $content .= '<p>'._('If you want to participate to Perroquet or report a problem, begin to visit the "contribute" page: ').'<a href="'.RessourceManager::getInnerUrl('contribute').'">'._('Contribute to Perroquet').'</a>.</p>';

        $content .= '<p>'._('For general or public questions:  <a href="mailto:perroquet-team@lists.launchpad.net">perroquet-team@lists.launchpad.net</a>.').'</p>';

        $content .= '<p>'._('For private questions:  <a href="mailto:pfred.bertolus@gmail.com">fred.bertolus@gmail.com</a>.').'</p>';

        return $content;
    }
}

?>
