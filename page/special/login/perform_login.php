<?php

/**
 * Description of index
 *
 * @author fred
 */
class CurrentPage extends HtmlPage{

    var $error;

    function __construct() {
        $this->id = 'login/perform_login';
        $this->title = _('Login');

    }

    function execute() {

        if(isset($_GET['openid'])){
               if (trim($_GET['openid'] == '')) {
                $this->error = _("Provide a valid OpenID.");
            }

             // fichiers inclus
            require_once 'Auth/OpenID/Consumer.php';
            require_once 'Auth/OpenID/FileStore.php';
            // démarrage de la session (requis pour YADIS)
            session_start();

            // crée une zone de stockage pour les données OpenID
            $store = new Auth_OpenID_FileStore($_SERVER["DOCUMENT_ROOT"].'/openid_store');

            // crée un consommateur OpenID
            $consumer = new Auth_OpenID_Consumer($store);

            // commence le process d'authentification
            // crée une requête d'authentification pour le fournisseur OpenID
            $auth = $consumer->begin($_GET['openid']);
            if (!$auth) {
                $this->error = _("OpenID provider not found. Verify your OpenId.");
                return;
            }

            // redirige vers le fournisseur OpenID pour l'authentification

            $url = $auth->redirectURL(RessourceManager::getServerName(), RessourceManager::getExternUrl('special/login/openid_return'));
            
            header('Location: ' . $url);

        }
        else
        {
            $this->error = _("Login error.");
        }


    }

    function generateContent() {


        $content = '
            <h1>'._('Login').'</h1>';

        
        $content .= '
            <p>'.$this->error.'</p>';
        
        $content .= '
        <p><a href="'.RessourceManager::getInnerUrl('special/login/login_form').'">'._('Return to login page').'</a></p>';

        return $content;
    }
}

?>
