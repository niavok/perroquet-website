
<?php
/**
 * Description of RessourceManager
 *
 * @author fred
 */
class RessourceManager {

    static function getImage($key, $alt) {
        
    }

    static function getInnerLink($key, $alt) {

    }

    static function getExternLink($url, $title, $lang) {
        return "<a href=\"$url\" hreflang=\"$lang\">$title</a>";
    }

}
?>

