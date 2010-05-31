<?php

/**
 * Description of HtmlPageLoader
 *
 * @author fred
 */
class Config {

    static $pageList = array(
        'not_found' => array('path' => 'special/not_found'),
        'special/language/choose' => array('path' => 'special/language/choose'),
        'special/language/select' => array('path' => 'special/language/select'),
        'special/login/login_form' => array('path' => 'special/login/login_form'),
        'special/login/perform_login' => array('path' => 'special/login/perform_login'),
        'special/login/openid_return' => array('path' => 'special/login/openid_return'),
        'special/login/logout' => array('path' => 'special/login/logout'),

        'exercises/index' => array('path' => 'exercises/index'),
        'exercises/external_repo' => array('path' => 'exercises/external_repo'),
        'exercises/propose_form' => array('path' => 'exercises/propose_form'),
        'exercises/propose_list' => array('path' => 'exercises/propose_list'),
        'exercises/my_propose_list' => array('path' => 'exercises/my_propose_list'),
        'exercises/browse' => array('path' => 'exercises/browse'),
        
        'admin/user_list' => array('path' => 'admin/user_list'),

        
        'index' => array('path' => 'index'),
        );

    static $languageList = array(
        'en' => array('key' => 'en_US.utf8', 'choosable' => True, 'label' => 'English', 'code' => 'en'),
        'fr' => array('key' => 'fr_FR.utf8', 'choosable' => True, 'label' => 'Français', 'code' => 'fr'),
        'fr-fr' => array('key' => 'fr_FR.utf8', 'choosable' => False, 'ref' => 'fr'),
        'fr-be' => array('key' => 'fr_FR.utf8', 'choosable' => False, 'ref' => 'fr'),
        'fr-ca' => array('key' => 'fr_FR.utf8', 'choosable' => False, 'ref' => 'fr'),
        'fr-lu' => array('key' => 'fr_FR.utf8', 'choosable' => False, 'ref' => 'fr'),
        'fr-ch' => array('key' => 'fr_FR.utf8', 'choosable' => False, 'ref' => 'fr'),
        );

    public function getPageList() {
        return self::$pageList;
    }

    public function getLanguageList() {
        return self::$languageList;
    }
}

?>
