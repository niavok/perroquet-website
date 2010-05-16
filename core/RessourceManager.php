
<?php
/**
 * Description of RessourceManager
 *
 * @author fred
 */
class RessourceManager {

    static function getImage($key, $alt) {
        return '<img class="img_left" src="/ressources/common/'.$key.'" alt="'.$alt.'" />';
    }

    static function getInnerUrl($key) {
        return '/'.LanguageManager::getLanguage().'/'.$key;
    }

}
?>

