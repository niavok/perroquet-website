<?php

/**
 * Description of HtmlPageLoader
 *
 * @author fred
 */
class HtmlPageLoader {

    var $pageId = 'index';
    var $page;
    var $language = 'en';

    public function load() {
        if(isset($_GET['page'])){
            if(array_key_exists($_GET['page'], Config::getPageList())){
                $this->pageId = $_GET['page'];
            }
            else {
                $this->pageId = 'not_found';
            }
        }

        if(isset($_GET['lang'])){
            if(array_key_exists($_GET['lang'], Config::getLanguageList())){
                $this->language = $_GET['lang'];
            }
        }

        LanguageManager::loadLocales($this->language);

        $pageList = Config::getPageList();
        require_once $_SERVER["DOCUMENT_ROOT"].'/page/'.$pageList[$this->pageId]['path'].'.php';
        $this->page = new CurrentPage();

    }

    public function getPage(){
        return $this->page;
    }

    public function getLanguage(){
        return $this->language;
    }
}
?>
