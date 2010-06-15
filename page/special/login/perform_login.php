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
            require_once 'openid.php';

            $openid = new Dope_OpenID($_GET['openid']);
            $openid->setReturnURL(RessourceManager::getExternUrl('special/login/openid_return'));
            $openid->SetTrustRoot(RessourceManager::getServerName());
            $openid->setRequiredInfo(array('email', 'fullname'));

            $endpoint_url = $openid->getOpenIDEndpoint();
            if($endpoint_url){
                    // If we find the endpoint, you might want to store it for later use.
                    $_SESSION['openid_endpoint_url'] = $endpoint_url;
                    // Redirect the user to their OpenID Provider
                    $openid->redirect();
            }
            else{
                    $error = $openid->getError();
                    $this->error = '';

                    $this->error .= "ERROR CODE: " . $error['code'] . "<br>";
                    $this->error .= "ERROR DESCRIPTION: " . $error['description'] . "<br>";
            }

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
