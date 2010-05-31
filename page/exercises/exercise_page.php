<?php

/**
 * Description of index
 *
 * @author fred
 */
class ExercisePage extends HtmlPage{
        
    function generateSubMenu() {
        $menu = HtmlPage::generateSubMenu();

        $menu .= '
            <li '.($this->startswith($this->id,'exercises/browse')?'class= "active"':'').'><a href="'.RessourceManager::getInnerUrl('exercises/browse').'/">'._('Browse exercises').'</a></li>
            <li '.($this->startswith($this->id,'exercises/propose_form')?'class= "active"':'').'><a href="'.RessourceManager::getInnerUrl('exercises/propose_form').'/">'._('Propose an exercise').'</a></li>

            ';
        return $menu;
    }

    function generateUserMenu() {
        $menu = HtmlPage::generateSubMenu();

        $menu .= '
            <li '.($this->startswith($this->id,'exercises/my_propose_list')?'class= "active"':'').'><a href="'.RessourceManager::getInnerUrl('exercises/my_propose_list').'/">'._('My proposed exercises').'</a></li>

            ';
        return $menu;
    }

   

}

?>
