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


    public function getPageList() {
        return self::$pageList;
    }
}

?>
