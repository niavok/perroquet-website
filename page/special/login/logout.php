<?php

/**
 * Description of index
 *
 * @author fred
 */
class CurrentPage extends HtmlPage{
        function __construct() {
        $this->id = 'login/logout';
        $this->title = _('Logout');
    }

    function execute() {
        $this->content = '
        <h1>'._('Logout').'</h1>';

        if(LoginManager::isLogged()) {
            $this->content .= '
                <p>'.sprintf(_('Logout from \'%s\' success.'),LoginManager::getLogin()).'</p>';


        } else {
            $this->content .= '
                <p>'._('You are not logged.').'</p>';
        }


        $this->content .= '
            <p><a href="'.RessourceManager::getInnerUrl('index').'">'._('Return to index').'</a></p>';

         LoginManager::logout();
    }

    function generateContent() {
        

        return $this->content;
    }
}

?>
