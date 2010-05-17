<?php

/**
 * Description of index
 *
 * @author fred
 */
class CurrentPage extends HtmlPage{
    
    var $language;

    function __construct() {
        $this->id = 'language/selected';
        $this->title = _('Select language');

    }

    function execute() {

        $this->language="None";

        

        if(isset($_GET['language'])){
            if(array_key_exists($_GET['language'], Config::getLanguageList())){
                LanguageManager::loadLocales($_GET['language']);
                $this->language = $_GET['language'];
            } else {
                $this->language="Invalid";
            }
        }
        
        $this->title = _('Select language');

    }

    function generateContent() {

        
        $content = '
            <h1>'._('Select language').'</h1>';

        if($this->language=="None") {
            $content .= '
            <p>'._('No language selected.').'</p>';
        } else if ($this->language=="Invalid") {
            $content .= '
            <p>'._('Invalid language selected.').'</p>';
        } else {
             $langList = Config::getLanguageList();

             $content .= '
            <p>'.sprintf('Language \'%s\' selected.',$langList[$this->language]['label']).'</p>';
        }

        $content .= '
        <p><a href="'.RessourceManager::getInnerUrl('index').'">'._('Return to index').'</a></p>';

        return $content;
    }
}

?>
