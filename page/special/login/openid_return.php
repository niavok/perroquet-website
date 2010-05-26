<?php

/**
 * Description of index
 *
 * @author fred
 */
class CurrentPage extends HtmlPage{

    var $error='';

    function __construct() {
        $this->id = 'login/perform_login';
        $this->title = _('Login');

    }

    function execute() {

        require_once "Auth/OpenID/Consumer.php";
        require_once "Auth/OpenID/FileStore.php";

        // démarre la session (requsi pour YADIS)
        session_start();

        // crée une zone de stockage pour les données OpenID
        $store = new Auth_OpenID_FileStore($_SERVER["DOCUMENT_ROOT"].'/openid_store');

        // crée un consommateur OpenID
        // Lit la réponse du fournisseur OpenID
        $consumer = new Auth_OpenID_Consumer($store);
        $response = $consumer->complete(RessourceManager::getInnerUrl('special/login/openid_return'));

        // renseigne les valeurs en fonction de celles de l'authentification
        if ($response->status == Auth_OpenID_SUCCESS) {
          $_SESSION['OPENID_AUTH'] = true;
        } else {
          $_SESSION['OPENID_AUTH'] = false;
        }




        if (!isset($_SESSION['OPENID_AUTH']) || $_SESSION['OPENID_AUTH'] !== true) {
            $this->error = _("Login failed.");
        }

     

    }

    function generateContent() {


        $content = '
            <h1>'._('Login').'</h1>';

        if($this->error == '') {
            $content .= '
                <p>'.$this->error.'</p>';

            $content .= '
            <p><a href="'.RessourceManager::getInnerUrl('special/login/login_form').'">'._('Return to login page').'</a></p>';
        } else {
            $content .= '
                <p>'._('Login success.').'</p>';

            $content .= '
            <p><a href="'.RessourceManager::getInnerUrl('index').'">'._('Return to index').'</a></p>';
        }

        return $content;
    }
}

?>
