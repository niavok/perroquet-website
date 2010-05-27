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
        require_once 'openid.php';
        $openid = new SimpleOpenID;
        $openid->SetIdentity($_GET['openid_identity']);
        $openid_validation_result = $openid->ValidateWithServer();
        if ($openid_validation_result == true){         // OK HERE KEY IS VALID
            LoginManager::login($_GET['openid_identity']);
        }else if($openid->IsError() == true){            // ON THE WAY, WE GOT SOME ERROR
            LoginManager::logout();
            $error = $openid->GetError();
            $this->error = _("Login failed.").'<br />';
            $this->error .= "Error code: " . $error['code'] . "<br/>";
            $this->error .= "Error description: " . $error['description'] . "<br/>";
        }else{
            LoginManager::logout();// Signature Verification Failed
            $this->error = _("Login failed.");
        }


        /*require_once "Auth/OpenID/Consumer.php";
        require_once "Auth/OpenID/FileStore.php";

        // démarre la session (requsi pour YADIS)

        // crée une zone de stockage pour les données OpenID
        $store = new Auth_OpenID_FileStore($_SERVER["DOCUMENT_ROOT"].'/openid_store');

        // crée un consommateur OpenID
        // Lit la réponse du fournisseur OpenID
        $consumer = new Auth_OpenID_Consumer($store);
        
        //$response = $consumer->complete('http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
        //$response = $consumer->complete('http://'.$_SERVER['SERVER_NAME'].'/index.php');

        
        $params = $_GET;
        unset($params['lang']);
        unset($params['path']);
        print_r($params);
        echo '<br><br>';

        
        echo '<br><br>';
        $response = $consumer->complete(RessourceManager::getExternUrl('special/login/openid_return'), $params);
        //$response = $consumer->complete($_REQUEST);

        print_r($response);

        die();

        echo '<br><br>';
                print "plop2";
        // renseigne les valeurs en fonction de celles de l'authentification
        if ($response->status == Auth_OpenID_SUCCESS) {
            print "plop3";
          print_r($response);
          //LoginManager::connect($login);
          $_SESSION['OPENID_AUTH'] = false;
        } else {
            print "plop3.5";
          $_SESSION['OPENID_AUTH'] = false;
        }




        if (!isset($_SESSION['OPENID_AUTH']) || $_SESSION['OPENID_AUTH'] !== true) {
            $this->error = _("Login failed.");
        }*/

     
    }

    function generateContent() {


        $content = '
            <h1>'._('Login').'</h1>';

        if($this->error != '') {
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
