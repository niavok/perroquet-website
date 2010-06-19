<?php

/**
 * Description of index
 *
 * @author fred
 */

require_once $_SERVER["DOCUMENT_ROOT"].'/page/documentation/documentation_page.php';

class CurrentPage extends DocumentationPage{
        function __construct() {
        $this->id = 'documentation/index';
        $this->title = _('Documentation - Developement');
    }
    function execute() {

    }

    function generateContent() {
        $content ='';
        $content .= '
        <h1>'._('Documentation - Developement').'</h1>
            <p>'._('Perroquet is developed with python, it use GTK (with pyGTK) for the GUI and Gstreamer as media player').'</p>';


        $content .= '<h2>'._('Build from sources').'</h2>';

        $content .= '<h3>'._('Download and run').'</h3>';

        $content .= '<p>'._('First, download the last development version on launchpad with bazaar:').'</p>';

        $content .= '
<pre>
bzr branch lp:perroquet
</pre>';

        $content .= '<p>'._('You can directly run perroquet without any build or install:').'</p>';
        $content .= '
<pre>
cd perroquet
./perroquet
</pre>';

        $content .= '<h3>'._('Build locales').'</h3>';

        $content .= '<p>'._('Without built, perroquet will be in english. Without install, the best integration with your system will not be available: no icon, no entry in menu, no handle on *.perroquet.').'</p>';

        $content .= '<p>'._('You can build others languages easily:').'</p>';

         $content .= '
<pre>
python setup.py build
</pre>';

         $content .= '<p>'._('The language files should now be build. If you run Perroquet again and if your system language is one of translation language, the text in Perroquet wil be translated.').'</p>';

         $content .= '<h3>'._('Install').'</h3>';

         $content .= '<p>'._('To install perroquet, type with root rigths:').'</p>';

         $content .= '
<pre>
python setup.py install --record=install-files.txt
</pre>';

        $content .= '<p>'._('or with sudo').'</p>';
        $content .= '
<pre>
sudo python setup.py install --record=install-files.txt
</pre>';

        $content .= '<p>'._('The install-files.txt file is optionnal. It is needed to uninstall Perroquet.').'</p>';
        $content .= '<p>'._('Once installed, you should be able to launch Perroquet from anywhere:').'</p>';
        $content .= '
<pre>
cd
perroquet
</pre>';

        $content .= '<h3>'._('Uninstall').'</h3>';

         $content .= '<p>'._('To uninstall perroquet, type with root rigths:').'</p>';

         $content .= '
<pre>
python setup.py uninstall --manifest=install-files.txt
</pre>';

        $content .= '<p>'._('or with sudo').'</p>';
        $content .= '
<pre>
sudo python setup.py uninstall --manifest=install-files.txt
</pre>';

        return $content;
    }
}

?>
