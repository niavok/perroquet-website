<?php

/**
 * Description of index
 *
 * @author fred
 */
class DocumentationPage extends HtmlPage{
        
    function generateSubMenu() {
        $menu = HtmlPage::generateSubMenu();
        
        $menu .= '
            <li '.($this->startswith($this->id,'documentation/installation')?'class= "active"':'').'><a href="'.RessourceManager::getInnerUrl('documentation/installation/index').'/">'._('Installation').'</a></li>
            <li '.($this->startswith($this->id,'documentation/use')?'class= "active"':'').'><a href="'.RessourceManager::getInnerUrl('documentation/use/index').'/">'._('Use perroquet').'</a></li>
            <li '.($this->startswith($this->id,'documentation/help')?'class= "active"':'').'><a href="'.RessourceManager::getInnerUrl('documentation/help/index').'/">'._('Help tools').'</a></li>
            <li '.($this->startswith($this->id,'documentation/repositories')?'class= "active"':'').'><a href="'.RessourceManager::getInnerUrl('documentation/repositories/index').'/">'._('Reporitories').'</a></li>
            <li '.($this->startswith($this->id,'documentation/exercise_creation')?'class= "active"':'').'><a href="'.RessourceManager::getInnerUrl('documentation/exercise_creation/index').'/">'._('Exercise creation').'</a></li>
            <li '.($this->startswith($this->id,'documentation/development')?'class= "active"':'').'><a href="'.RessourceManager::getInnerUrl('documentation/development/index').'/">'._('Development').'</a></li>
            ';

        return $menu;
    }


   

}

?>
