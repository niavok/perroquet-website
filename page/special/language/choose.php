<?php

/**
 * Description of index
 *
 * @author fred
 */
class CurrentPage extends HtmlPage{
        function __construct() {
        $this->id = 'not_found';
        $this->title = _('Page not found');
    }

    function generateContent() {
        $content = '
        <h1>'._('Select language').'</h1>';

        $langs = Config::getLanguagelist();

        $content.='<form action="'.RessourceManager::getInnerUrl('special/language/select').'" method="GET">';

        $content.='
                <label for="language">'._('Choose the new language : ').'</label>
                <select name="language" id="language">';

        foreach($langs as $lang) {
            if( $lang['choosable']) {
                 $content.='
                <option value="'.$lang['code'].'" '.($lang['code']==LanguageManager::getLanguage()?'selected="selected"':'').'>'.$lang['label'].'</option>';
            }
        }


        $content.='</select><br /><input type="submit" value="'._("Select").'"></form>';

        return $content;
    }
}

?>
