<?php

print_r(Sqlite3::version());
echo '<br/>';

$dbname=$_SERVER["DOCUMENT_ROOT"].'/database/perroquet.sqlite';

if(is_file($dbname)) {
    echo "Database already exists.\n".'<br/>';
} else {
    echo "Database doesn't exist.\n".'<br/>';
}

$base=new SQLite3($dbname);
if ($base == null)
{
  echo "SQLite NOT supported.\n".'<br/>';
  exit();
}
else
{
  echo "SQLite supported. Base opened.\n".'<br/>';
}


echo 'Existing tables :'.'<br/>';

$query = "SELECT name FROM sqlite_master WHERE type='table' ORDER BY name;";
$results = $base->query($query);

$existingTables = array();

if($results)
{
   while ($result = $results->fetchArray()) {
       echo 'Table \''.$result['name'].'\'<br/>';
       $existingTables[] = $result['name'];
   }
} else {
    echo 'No tables found.'.'<br/>';
}

echo '<br/>';


if(array_search('users', $existingTables) === FALSE) {
    echo 'Table \'users\' not found. Create it.'.'<br/>';
    $query = "CREATE TABLE users(
            openid TEXT NOT NULL PRIMARY KEY,
            name TEXT NOT NULL,
            email TEXT,
            admin INTEGER DEFAULT 0
            )";
    $results = $base->exec($query);
}

if(array_search('repositories', $existingTables) === FALSE) {
    echo 'Table \'repositories\' not found. Create it.'.'<br/>';
    $query = "CREATE TABLE repositories(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            code TEXT NOT NULL,
            name TEXT NOT NULL,
            description TEXT
            )";
    $results = $base->exec($query);
}


if(array_search('exercise_groups', $existingTables) === FALSE) {
    echo 'Table \'exercise_groups\' not found. Create it.'.'<br/>';
    $query = "CREATE TABLE exercise_groups(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            code TEXT NOT NULL,
            repository_id INTEGER NOT NULL,
            name TEXT NOT NULL,
            description TEXT
            )";
    $results = $base->exec($query);
}

if(array_search('exercises', $existingTables) === FALSE) {
    echo 'Table \'exercises\' not found. Create it.'.'<br/>';
    $query = "CREATE TABLE exercises(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            group_id INTEGER NOT NULL,
            proposer TEXT,
            state TEXT,
            code TEXT NOT NULL,
            name TEXT NOT NULL,
            description TEXT,
            word_count INTEGER,
            licence TEXT,
            language TEXT,
            media_type TEXT,
            exercise_version TEXT,
            author TEXT,
            author_website TEXT,
            author_contact TEXT,
            packager TEXT,
            packager_website TEXT,
            packager_contact TEXT,
            translations TEXT,
            file TEXT            
            )";
    $results = $base->exec($query);
}


if(array_search('proposed_exercises', $existingTables) === FALSE) {
    echo 'Table \'proposed_exercises\' not found. Create it.'.'<br/>';
    $query = "CREATE TABLE proposed_exercises(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT NOT NULL,
            description TEXT,
            links TEXT,
            user TEXT,
            state TEXT,
            code TEXT NOT NULL,
            name TEXT NOT NULL,
            description TEXT,
            word_count INTEGER,
            licence TEXT,
            language TEXT,
            media_type TEXT,
            exercise_version TEXT,
            author TEXT,
            author_website TEXT,
            author_contact TEXT,
            packager TEXT,
            packager_website TEXT,
            packager_contact TEXT,
            translations TEXT,
            file TEXT  
            )";
    $results = $base->exec($query);
}
/*


*/

?>
