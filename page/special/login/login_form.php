<?php

/**
 * Description of index
 *
 * @author fred
 */
class CurrentPage extends HtmlPage{
        function __construct() {
        $this->id = 'login/login_form';
        $this->title = _('Login');
    }

    function generateContent() {
        $content = '
        <h1>'._('Login').'</h1>';

        $content.='
<form action="'.RessourceManager::getInnerUrl('special/login/perform_login').'"  method="get">
      '._('OpenID: ').'<input type="text" name="openid" size="30" />
      <br />
      <input type="submit" value="'._('Log In').'" />
</form>
';

        return $content;
    }
}

?>
