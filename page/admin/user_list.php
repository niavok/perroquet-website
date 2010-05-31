<?php

/**
 * Description of index
 *
 * @author fred
 */
require_once $_SERVER["DOCUMENT_ROOT"].'/page/exercises/exercise_page.php';

class CurrentPage extends ExercisePage{
        function __construct() {
        $this->id = 'admin/user_list';
        $this->title = _('User list');
    }

    function execute() {
        if(LoginManager::isLogged() && LoginManager::isAdministrator()) {
            if(isset($_GET['remove_rights'])) {
                $openid = $_GET['remove_rights'];
                DatabaseManager::setQuery("UPDATE users SET admin=0 WHERE openid='$openid'");
            }elseif(isset($_GET['add_rights'])) {
                $openid = $_GET['add_rights'];
                DatabaseManager::setQuery("UPDATE users SET admin=1 WHERE openid='$openid'");
            }elseif(isset($_GET['delete'])) {
                $openid = $_GET['delete'];
                DatabaseManager::setQuery("DELETE FROM users WHERE openid='$openid'");
            }

        }
    }

    function generateContent() {
        $content = '
        <h1>'._('User list').'</h1>
        ';

        if(LoginManager::isLogged() && LoginManager::isAdministrator()) {


            $content .= $this->displayContent();


        } else {
            $content .= "<p>You must be logged as administrator to access to user list.</p>";
            $content .= '<p><a href="'.RessourceManager::getInnerUrl('special/login/login_form').'">'._('Go to login page').'</a></p>';

        }

        return $content;
    }

    function displayContent() {
            $content='';

            $content .= '
            <h2>'._('Administrators').'</h2>';

            
            $results = DatabaseManager::getQuery("SELECT * FROM users WHERE admin=1 ");

            $content .='<table>
                <thead>
                    <th>'._('OpenID').'</th>
                    <th>'._('Name').'</th>
                    <th>'._('Email').'</th>
                    <th>'._('Admin rights').'</th>
                    <th>'._('Delete').'</th>
                </thead>
                <tbody>
            ';

            while($result = $results->fetchArray()) {
                $content .= '<tr>';


                $content .= '<td>'.$result['openid'].'</td>';
                $content .= '<td>'.$result['name'].'</td>';
                $content .= '<td>'.$result['email'].'</td>';
                $content .= '<td><a href="'.RessourceManager::getInnerUrl('admin/user_list').'?remove_rights='.$result['openid'].'">'._('Remove').'</a></td>';
                $content .= '<td><a href="'.RessourceManager::getInnerUrl('admin/user_list').'?delete='.$result['openid'].'">'._('Delete').'</a></td>';


                $content .= '</tr>';
            }

            $content .='<tbody></table>';

            $content .= '
            <h2>'._('Users').'</h2>';


            $results = DatabaseManager::getQuery("SELECT * FROM users WHERE admin=0 ");

            $content .='<table>
                <thead>
                    <th>'._('OpenID').'</th>
                    <th>'._('Name').'</th>
                    <th>'._('Email').'</th>
                    <th>'._('Admin rights').'</th>
                        <th>'._('Delete').'</th>
                </thead>
                <tbody>
            ';

            while($result = $results->fetchArray()) {
                $content .= '<tr>';


                $content .= '<td>'.$result['openid'].'</td>';
                $content .= '<td>'.$result['name'].'</td>';
                $content .= '<td>'.$result['email'].'</td>';
                $content .= '<td><a href="'.RessourceManager::getInnerUrl('admin/user_list').'?add_rights='.$result['openid'].'">'._('Add').'</a></td>';
                $content .= '<td><a href="'.RessourceManager::getInnerUrl('admin/user_list').'?delete='.$result['openid'].'">'._('Delete').'</a></td>';

                $content .= '</tr>';
            }

            $content .='<tbody></table>';


        return $content;
    }
}

?>
