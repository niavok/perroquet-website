<?php
/**
 * Description of LanguageManager
 *
 * @author fred
 */
class LanguageManager {
   
    static $lang;

    static function loadLocales($lang) {
        bindtextdomain("perroquet-website", dirname($_SERVER['SCRIPT_FILENAME']).'/locales');
        bind_textdomain_codeset("perroquet-website", 'UTF-8');
        textdomain("perroquet-website");

        $languageList = Config::getLanguageList();

        if(!$languageList[$lang]['choosable']) {
            $lang = $languageList[$lang]['ref'];
        }
        
        setlocale( LC_ALL, $languageList[$lang]['key']);

        LanguageManager::$lang = $lang;
    }

    static function getLanguage() {
        return LanguageManager::$lang;
    }
}
?>