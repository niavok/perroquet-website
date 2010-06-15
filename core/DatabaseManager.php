
<?php
/**
 * Description of LoginManager
 *
 * @author fred
 */

class DatabaseManager {

    static $isInit = false;
    static $base;
    static function init() {
        if(!DatabaseManager::$isInit) {
            $dbname=$_SERVER["DOCUMENT_ROOT"].'/database/perroquet.sqlite';
            DatabaseManager::$base=new SQLite3($dbname);
            if (DatabaseManager::$base == null)
            {
              echo "SQLite NOT supported.\n".'<br/>';
              exit($err);
            }
            DatabaseManager::$isInit = true;
        }
    }

    static function setQuery($query) {
        DatabaseManager::init();
        return DatabaseManager::$base->exec($query);
    }

    static function getQuery($query) {
        DatabaseManager::init();
        return DatabaseManager::$base->query($query);
    }


}
?>