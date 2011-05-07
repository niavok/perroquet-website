<?php

/**
 * Description of index
 *
 * @author fred
 */
class CurrentPage extends HtmlPage{
        function __construct() {
        $this->id = 'download';
        $this->title = _('Download');
    }

    function generateContent() {
        $content = '<h1>'._('Download').'</h1>';


        $content .= '<p>'._('Last release : ').'1.1.1<br />2011-05-08</p>';

        $content .= '<p>'._('Currently, Perroquet is only available for Linux, but it uses multi-platform technology. It should be easily portable to other systems.').'</p>';

        $content .= '<p>'._('Generally, the downloads are available here: <a href="https://launchpad.net/perroquet/+download" >Download page on launchpad</a>.').'</p>';

        $content .= '<h2>'._('Ubuntu').'</h2>';
        $content .= '<h3>'._('Installer').'</h3>';
        $content .= '<p>'._('Using the installer, you\'ll miss the updates of Perroquet. If you want to make the updates, install Perroquet with the PPA').'</p>';
        $content .= '<p>'._('The installer for Ubuntu is available here: <a href="http://launchpad.net/perroquet/1.1/1.1.1/+download/perroquet_1.1.1-0ubuntu1_all.deb" >Ubuntu Perroquet 1.1.1 installer</a>').'</p>';
        $content .= '<p>'._('It is possible that this link is not updated. Go to this page to see all downloads:<a href="https://launchpad.net/perroquet/+download" >Download page on launchpad</a>').'</p>';

        $content .= '<h3>'._('PPA').'</h3>';
        $content .= '<p>'._('PPA mean Personal Package Archives. Adding the PPA in your ubuntu software sources, Perroquet will be upgraded by the system.').'</p>';
        $content .= '<p>'._('The details of the PPA are available at this address: <a href="https://launchpad.net/~fred-bertolus/+archive/perroquet" >PPA Perroquet</a>').'</p>';

        $content .= '<h2>'._('Archlinux').'</h2>';
        $content .= '<h3>'._('Version 1.1.0').'</h3>';
        $content .= '<p>'._('An AUR package is available here: <a href="http://aur.archlinux.org/packages.php?ID=33388" >AUR package for Perroquet 1.1.0</a>.').'</p>';
        $content .= '<h3>'._('Developement version').'</h3>';
        $content .= '<p>'._('An AUR package is available here: <a href="http://aur.archlinux.org/packages.php?ID=33389" >AUR package for Perroquet using Bazaar</a>').'</p>';
        $content .= '<p>'._('Using this package, Perroquet can be instable but will have the last features.').'</p>';
        $content .= '<h3>'._('Exercise Elephant dream').'</h3>';
        $content .= '<p>'._('You can find here package for an exercise based on Elephant Dream : <a href="http://aur.archlinux.org/packages.php?ID=33400" >AUR package for Elephant Dream exercise</a>.').'</p>';

        $content .= '<h2>'._('Mandriva').'</h2>';
        $content .= '<p>'._('A perroquet 1.0.1 package for Mandriva is available for Mandriva 2010. You can also download it here: <a href="http://rpmfind.unity-linux.org/Mandriva%20Cooker%20-%20Contrib/perroquet-1.0.1-2mdv2010.1.noarch.html" >Perroquet 1.0.0 rpm </a>').'</p>';

        $content .= '<h2>'._('Others linux').'</h2>';
       
        $content .= '<p>'._('If you make a package for another distribution, send me it, I\'ll add it on this page.').'</p>';
        
        $content .= '<h3>'._('Source tarball').'</h3>';
        $content .= '<p>'._('The tarball containing the sources of installable software can be found here: <a href="http://launchpad.net/perroquet/1.1/1.1.1/+download/perroquet-1.1.1.tar.gz" >Tarball Perroquet 1.1.1</a>.').'</p>';
        $content .= '<p>'._('Read INSTALL file to installation instructions.').'</p>';
        $content .= '<p>'._('It is possible that this link is not updated. Go to this page to see all downloads: <a href="https://launchpad.net/perroquet/+download" >Download page on launchpad</a>').'</p>';
        $content .= '<h3>'._('Bazaar repository').'</h3>';
        $content .= '<p>'._('The code for the version of development and the means to recover it are available at the following address: <a href="https://code.launchpad.net/~perroquet-team/perroquet/trunk2" >Development branch of Perroquet</a>.').'</p>';
           

        return $content;
    }
}

?>
