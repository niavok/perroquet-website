<?php
/**
 * Description of LanguageManager
 *
 * @author fred
 */
class LanguageManager {
    
    static function loadLocales($lang) {
        setlocale( LC_ALL, 'fr_FR.utf8');
        bindtextdomain("perroquet-website", dirname(__FILE__).'/po');
        bind_textdomain_codeset("perroquet-website", 'UTF-8');
        textdomain("perroquet-website");
        echo dirname(__FILE__).'/po';
    }
}
?>
