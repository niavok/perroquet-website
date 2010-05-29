<?php

echo sqlite_libversion().'<br/>';

$dbname=$_SERVER["DOCUMENT_ROOT"].'/database/perroquet.sqlite';

if(is_file($dbname)) {
    echo "Database already exists.\n".'<br/>';
} else {
    echo "Database doesn't exist.\n".'<br/>';
}

$base=new SQLiteDatabase($dbname, 0666, $err);
if ($err)
{
  echo "SQLite NOT supported.\n".'<br/>';
  exit($err);
}
else
{
  echo "SQLite supported. Base opened.\n".'<br/>';
}


echo 'Existing tables :'.'<br/>';

$query = "SELECT name FROM sqlite_master WHERE type='table' ORDER BY name;";
$results = $base->arrayQuery($query, SQLITE_ASSOC);

$existingTables = array();

if($results)
{
   foreach($results as $result) {
       echo 'Table \''.$result['name'].'\'<br/>';
       $existingTables[] = $result['name'];
   }
} else {
    echo 'No tables found.'.'<br/>';
}

echo '<br/>';

if(array_search('repositories', $existingTables) === FALSE) {
    echo 'Table \'repositories\' not found. Create it.'.'<br/>';
    $query = "CREATE TABLE repositories(
            id TEXT NOT NULL PRIMARY KEY,
            name TEXT NOT NULL,
            description TEXT
            )";
    $results = $base->queryexec($query);
}

if(array_search('users', $existingTables) === FALSE) {
    echo 'Table \'users\' not found. Create it.'.'<br/>';
    $query = "CREATE TABLE users(
            openid TEXT NOT NULL PRIMARY KEY,
            name TEXT NOT NULL,
            email TEXT,
            admin INTEGER DEFAULT 0
            )";
    $results = $base->queryexec($query);
}

if(array_search('exercise_groups', $existingTables) === FALSE) {
    echo 'Table \'exercise_groups\' not found. Create it.'.'<br/>';
    $query = "CREATE TABLE exercise_groups(
            id TEXT NOT NULL PRIMARY KEY,
            repository_id TEXT NOT NULL,
            name TEXT NOT NULL,
            description TEXT
            )";
    $results = $base->queryexec($query);
}

if(array_search('exercises', $existingTables) === FALSE) {
    echo 'Table \'exercises\' not found. Create it.'.'<br/>';
    $query = "CREATE TABLE exercises(
            id TEXT NOT NULL PRIMARY KEY,
            group_id TEXT NOT NULL,
            name TEXT NOT NULL,
            description TEXT,
            word_count INTEGER,
            licence TEXT,
            language TEXT
            )";
    $results = $base->queryexec($query);
}
/*


*/

?>
