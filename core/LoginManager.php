
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

    static function login($login, $email) {
        $_SESSION['login'] = $login;
        $_SESSION['email'] = $email;
    }

    static function getLogin() {
        return $_SESSION['login'];
    }

    static function getEmail() {
        return $_SESSION['email'];
    }


    static function isRegistered() {

        $login = sqlite_escape_string(LoginManager::getLogin());
        
        $results = DatabaseManager::getQuery("SELECT * FROM users WHERE openid='$login';");
        
        return($results->fetchArray() != false);
    }

    static function isAdministrator() {


        $login = sqlite_escape_string(LoginManager::getLogin());

        $results = DatabaseManager::getQuery("SELECT * FROM users WHERE openid='$login';");

        $user = $results->fetchArray();

        return ($user && $user['admin'] == 1);

    }

    static function register() {

        if(!LoginManager::isRegistered()) {

            $login = sqlite_escape_string(LoginManager::getLogin());
            $email = sqlite_escape_string(LoginManager::getEmail());

            DatabaseManager::setQuery("INSERT INTO users VALUES(
                '$login',
                '',
                '$email',
                0
                );");
        }

    }

}
?>

