<?php

/**
 * Description of HtmlPageLoader
 *
 * @author fred
 */
class Config {

    static $pageList = array(
        'not_found' => array('path' => 'special/not_found'),
        'index' => array('path' => 'index'),
        );

    static $languageList = array(
        'en' => array('key' => 'en_US.utf8'),
        'fr' => array('key' => 'fr_FR.utf8'),
        );

    public function getPageList() {
        return self::$pageList;
    }

    public function getLanguageList() {
        return self::$languageList;
    }
}

?>
