<?php

/* @MwebAdmin/filemanager/include/ftp_class.php */
class __TwigTemplate_a0e119daaaa5f399d337e1bd5c9574b73d3a4a0fad5e4bde7c3d97a830d58a80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d763b0c1f9be114ee8933bc131af1b8f7b3fc42841711f2b1bffc63e1d6f430e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d763b0c1f9be114ee8933bc131af1b8f7b3fc42841711f2b1bffc63e1d6f430e->enter($__internal_d763b0c1f9be114ee8933bc131af1b8f7b3fc42841711f2b1bffc63e1d6f430e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/include/ftp_class.php"));

        // line 1
        echo "<?php

Class FTPClient
{
\t// *** Class variables
\tprivate \$connectionId;
\tprivate \$loginOk = false;
\tprivate \$messageArray = array();

\tpublic function __construct() { }

\tprivate function logMessage(\$message) 
\t{
\t\t\$this->messageArray[] = \$message;
\t}

\tpublic function getMessages()
\t{
\t\treturn \$this->messageArray;
\t}

\tpublic function connect (\$server, \$ftpUser, \$ftpPassword, \$isPassive = false)
\t{

\t\t// *** Set up basic connection
\t\t\$this->connectionId = ftp_connect(\$server);

\t\t// *** Login with username and password
\t\t\$loginResult = ftp_login(\$this->connectionId, \$ftpUser, \$ftpPassword);

\t\t// *** Sets passive mode on/off (default off)
\t\tftp_pasv(\$this->connectionId, \$isPassive);

\t\t// *** Check connection
\t\tif ((!\$this->connectionId) || (!\$loginResult)) {
\t\t\t\$this->logMessage('FTP connection has failed!');
\t\t\t\$this->logMessage('Attempted to connect to ' . \$server . ' for user ' . \$ftpUser, true);
\t\t\treturn false;
\t\t} else {
\t\t\t\$this->logMessage('Connected to ' . \$server . ', for user ' . \$ftpUser);
\t\t\t\$this->loginOk = true;
\t\t\treturn true;
\t\t}
\t}
\tpublic function makeDir(\$directory)
\t{
\t\t// *** If creating a directory is successful...
\t\tif (ftp_mkdir(\$this->connectionId, \$directory)) {

\t\t\t\$this->logMessage('Directory \"' . \$directory . '\" created successfully');
\t\t\treturn true;

\t\t} else {

\t\t\t// *** ...Else, FAIL.
\t\t\t\$this->logMessage('Failed creating directory \"' . \$directory . '\"');
\t\t\treturn false;
\t\t}
\t}

\tpublic function changeDir(\$directory)
\t{
\t    if (ftp_chdir(\$this->connectionId, \$directory)) {
\t        \$this->logMessage('Current directory is now: ' . ftp_pwd(\$this->connectionId));
\t        return true;
\t    } else { 
\t        \$this->logMessage('Couldn\\'t change directory');
\t        return false;
\t    }
\t}

\tpublic function getDirListing(\$directory = '.', \$parameters = '-la')
\t{
\t\techo shell_exec('whoami').\" is who i am </br>\";
\t\techo \"Current directory is now: \" . ftp_pwd(\$this->connectionId) . \"</br>\";

\t    // get contents of the current directory
\t    \$contentsArray = ftp_rawlist(\$this->connectionId, \$parameters . '  ' . \$directory);
\t \techo error_get_last();
\t    return \$contentsArray;
\t}
}";
        
        $__internal_d763b0c1f9be114ee8933bc131af1b8f7b3fc42841711f2b1bffc63e1d6f430e->leave($__internal_d763b0c1f9be114ee8933bc131af1b8f7b3fc42841711f2b1bffc63e1d6f430e_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/include/ftp_class.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php

Class FTPClient
{
\t// *** Class variables
\tprivate \$connectionId;
\tprivate \$loginOk = false;
\tprivate \$messageArray = array();

\tpublic function __construct() { }

\tprivate function logMessage(\$message) 
\t{
\t\t\$this->messageArray[] = \$message;
\t}

\tpublic function getMessages()
\t{
\t\treturn \$this->messageArray;
\t}

\tpublic function connect (\$server, \$ftpUser, \$ftpPassword, \$isPassive = false)
\t{

\t\t// *** Set up basic connection
\t\t\$this->connectionId = ftp_connect(\$server);

\t\t// *** Login with username and password
\t\t\$loginResult = ftp_login(\$this->connectionId, \$ftpUser, \$ftpPassword);

\t\t// *** Sets passive mode on/off (default off)
\t\tftp_pasv(\$this->connectionId, \$isPassive);

\t\t// *** Check connection
\t\tif ((!\$this->connectionId) || (!\$loginResult)) {
\t\t\t\$this->logMessage('FTP connection has failed!');
\t\t\t\$this->logMessage('Attempted to connect to ' . \$server . ' for user ' . \$ftpUser, true);
\t\t\treturn false;
\t\t} else {
\t\t\t\$this->logMessage('Connected to ' . \$server . ', for user ' . \$ftpUser);
\t\t\t\$this->loginOk = true;
\t\t\treturn true;
\t\t}
\t}
\tpublic function makeDir(\$directory)
\t{
\t\t// *** If creating a directory is successful...
\t\tif (ftp_mkdir(\$this->connectionId, \$directory)) {

\t\t\t\$this->logMessage('Directory \"' . \$directory . '\" created successfully');
\t\t\treturn true;

\t\t} else {

\t\t\t// *** ...Else, FAIL.
\t\t\t\$this->logMessage('Failed creating directory \"' . \$directory . '\"');
\t\t\treturn false;
\t\t}
\t}

\tpublic function changeDir(\$directory)
\t{
\t    if (ftp_chdir(\$this->connectionId, \$directory)) {
\t        \$this->logMessage('Current directory is now: ' . ftp_pwd(\$this->connectionId));
\t        return true;
\t    } else { 
\t        \$this->logMessage('Couldn\\'t change directory');
\t        return false;
\t    }
\t}

\tpublic function getDirListing(\$directory = '.', \$parameters = '-la')
\t{
\t\techo shell_exec('whoami').\" is who i am </br>\";
\t\techo \"Current directory is now: \" . ftp_pwd(\$this->connectionId) . \"</br>\";

\t    // get contents of the current directory
\t    \$contentsArray = ftp_rawlist(\$this->connectionId, \$parameters . '  ' . \$directory);
\t \techo error_get_last();
\t    return \$contentsArray;
\t}
}", "@MwebAdmin/filemanager/include/ftp_class.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/include/ftp_class.php");
    }
}
