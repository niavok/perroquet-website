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

        $openid = new Dope_OpenID($_GET['openid_identity']);
        $validate_result = $openid->validateWithServer();

        if ($validate_result === TRUE) {

            $userinfo = $openid->filterUserInfo($_GET);

            LoginManager::login($_GET['openid_identity'], $userinfo['email']);
	}
	else if ($openid->isError() === TRUE){
		LoginManager::logout();
            $error = $openid->GetError();
            $this->error = _("Login failed.").'<br />';
            $this->error .= "Error code: " . $error['code'] . "<br/>";
            $this->error .= "Error description: " . $error['description'] . "<br/>";
	}
	else{
		LoginManager::logout();// Signature Verification Failed
            $this->error = _("Login failed.");
	}


/*
        $openid = new SimpleOpenID;
        $openid->SetIdentity($_GET['openid_identity']);

        $openid_validation_result = $openid->ValidateWithServer();
        if ($openid_validation_result == true){         // OK HERE KEY IS VALID
            print_r($openid->fields['required']);
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
*/
     
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
