
<?php
/**
 * Description of LoginManager
 *
 * @author fred
 */

session_start();

class LoginManager {

    static function isLogged() {
        return isset($_SESSION['login']);
    }

    static function logout() {
        unset($_SESSION['login']);
    }

    static function login($login) {
        $_SESSION['login'] = $login;
    }

    static function getLogin() {
        return $_SESSION['login'];
    }

}
?>

