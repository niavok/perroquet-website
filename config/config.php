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
        'index' => array('path' => 'index'),
        );

    static $languageList = array(
        'en' => array('key' => 'en_US.utf8', 'choosable' => True, 'label' => 'English', 'code' => 'en'),
        'fr' => array('key' => 'fr_FR.utf8', 'choosable' => True, 'label' => 'Français', 'code' => 'fr'),
        'fr-fr' => array('key' => 'fr_FR.utf8', 'choosable' => False),
        'fr-be' => array('key' => 'fr_FR.utf8', 'choosable' => False),
        'fr-ca' => array('key' => 'fr_FR.utf8', 'choosable' => False),
        'fr-lu' => array('key' => 'fr_FR.utf8', 'choosable' => False),
        'fr-ch' => array('key' => 'fr_FR.utf8', 'choosable' => False),
        );

    public function getPageList() {
        return self::$pageList;
    }

    public function getLanguageList() {
        return self::$languageList;
    }
}

?>
