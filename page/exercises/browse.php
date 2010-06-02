<?php

/**
 * Description of index
 *
 * @author fred
 */
require_once $_SERVER["DOCUMENT_ROOT"].'/page/exercises/exercise_page.php';

class CurrentPage extends ExercisePage{
        function __construct() {
        $this->id = 'exercises/browse';
        $this->title = _('Exercise list');
    }

    function generateContent() {
        $content = '
        <h1>'._('Exercises list').'</h1>
        ';


        $results = DatabaseManager::getQuery("SELECT * FROM exercises  ");

            $content .='<table>
                <thead>
                    <th>'._('Name').'</th>
                    <th>'._('Description').'</th>
                    <th>'._('Language').'</th>
                    <th>'._('Action').'</th>
                    
                </thead>
                <tbody>
            ';

            while($result = $results->fetchArray()) {
                $content .= '<tr>';


                $content .= '<td>'.$result['name'].'</td>';
                $content .= '<td>'.$result['description'].'</td>';
                $content .= '<td>'.$result['language'].'</td>';
                $content .= '<td>
                    <a href="'.RessourceManager::getInnerUrl('exercises/show').'?id='.$result['id'].'">'._('Details').'</a><br/>
                    <a href="'.$result['file'].'">'._('Download').'</a>
                        </td>';
                


                $content .= '</tr>';
            }

            $content .='<tbody></table>';

        return $content;
    }
}

?>
