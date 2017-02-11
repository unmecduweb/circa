<?php

/* @MwebAdmin/filemanager/include/FtpWrapper.php */
class __TwigTemplate_1a79e470c41ab163279388e21d601f7da5e7a05647fac544a9cf04cbf0a40b72 extends Twig_Template
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
        $__internal_c6a4a032555d534c60b29ec94bba1d79e3ca840be87138377cede8503833fb73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a4a032555d534c60b29ec94bba1d79e3ca840be87138377cede8503833fb73->enter($__internal_c6a4a032555d534c60b29ec94bba1d79e3ca840be87138377cede8503833fb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/include/FtpWrapper.php"));

        // line 1
        echo "<?php
/*
 * This file is part of the `nicolab/php-ftp-client` package.
 *
 * (c) Nicolas Tallefourtane <dev@nicolab.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Nicolas Tallefourtane http://nicolab.net
 */
namespace FtpClient;

/**
 * Wrap the PHP FTP functions
 *
 * @method bool alloc() alloc(int \$filesize, string &\$result = null) Allocates space for a file to be uploaded
 * @method bool cdup() cdup() Changes to the parent directory
 * @method bool chdir() chdir(string \$directory) Changes the current directory on a FTP server
 * @method int chmod() chmod(int \$mode, string \$filename) Set permissions on a file via FTP
 * @method bool close() close() Closes an FTP connection
 * @method bool delete() delete(string \$path) Deletes a file on the FTP server
 * @method bool exec() exec(string \$command) Requests execution of a command on the FTP server
 * @method bool fget() fget(resource \$handle, string \$remote_file, int \$mode, int \$resumepos = 0) Downloads a file from the FTP server and saves to an open file
 * @method bool fput() fput(string \$remote_file, resource \$handle, int \$mode, int \$startpos = 0) Uploads from an open file to the FTP server
 * @method mixed get_option() get_option(int \$option) Retrieves various runtime behaviours of the current FTP stream
 * @method bool get() get(string \$local_file, string \$remote_file, int \$mode, int \$resumepos = 0) Downloads a file from the FTP server
 * @method bool login() login(string \$username, string \$password) Logs in to an FTP connection
 * @method int mdtm() mdtm(string \$remote_file) Returns the last modified time of the given file
 * @method string mkdir() mkdir(string \$directory) Creates a directory
 * @method int nb_continue() nb_continue() Continues retrieving/sending a file (non-blocking)
 * @method int nb_fget() nb_fget(resource \$handle, string \$remote_file, int \$mode, int \$resumepos = 0) Retrieves a file from the FTP server and writes it to an open file (non-blocking)
 * @method int nb_fput() nb_fput(string \$remote_file, resource \$handle, int \$mode, int \$startpos = 0) Stores a file from an open file to the FTP server (non-blocking)
 * @method int nb_get() nb_get(string \$local_file, string \$remote_file, int \$mode, int \$resumepos = 0) Retrieves a file from the FTP server and writes it to a local file (non-blocking)
 * @method int nb_put() nb_put(string \$remote_file, string \$local_file, int \$mode, int \$startpos = 0) Stores a file on the FTP server (non-blocking)
 * @method array nlist() nlist(string \$directory) Returns a list of files in the given directory
 * @method bool pasv() pasv(bool \$pasv) Turns passive mode on or off
 * @method bool put() put(string \$remote_file, string \$local_file, int \$mode, int \$startpos = 0) Uploads a file to the FTP server
 * @method string pwd() pwd() Returns the current directory name
 * @method bool quit() quit() Closes an FTP connection
 * @method array raw() raw(string \$command) Sends an arbitrary command to an FTP server
 * @method array rawlist() rawlist(string \$directory, bool \$recursive = false) Returns a detailed list of files in the given directory
 * @method bool rename() rename(string \$oldname, string \$newname) Renames a file or a directory on the FTP server
 * @method bool rmdir() rmdir(string \$directory) Removes a directory
 * @method bool set_option() set_option(int \$option, mixed \$value) Set miscellaneous runtime FTP options
 * @method bool site() site(string \$command) Sends a SITE command to the server
 * @method int size() size(string \$remote_file) Returns the size of the given file
 * @method string systype() systype() Returns the system type identifier of the remote FTP server
 *
 * @author Nicolas Tallefourtane <dev@nicolab.net>
 */
class FtpWrapper
{
    /**
     * The connection with the server
     *
     * @var resource
     */
    protected \$conn;

    /**
     * Constructor.
     *
     * @param resource &\$connection The FTP (or SSL-FTP) connection (takes by reference).
     */
    public function __construct(&\$connection)
    {
        \$this->conn = &\$connection;
    }

    /**
     * Forward the method call to FTP functions
     *
     * @param  string       \$function
     * @param  array        \$arguments
     * @return mixed
     * @throws FtpException When the function is not valid
     */
    public function __call(\$function, array \$arguments)
    {
        \$function = 'ftp_' . \$function;

        if (function_exists(\$function)) {
            array_unshift(\$arguments, \$this->conn);
            return call_user_func_array(\$function, \$arguments);
        }

        throw new FtpException(\"{\$function} is not a valid FTP function\");
    }

    /**
     * Opens a FTP connection
     *
     * @param  string   \$host
     * @param  int      \$port
     * @param  int      \$timeout
     * @return resource
     */
    public function connect(\$host, \$port = 21, \$timeout = 90)
    {
        return ftp_connect(\$host, \$port, \$timeout);
    }

    /**
     * Opens a Secure SSL-FTP connection
     * @param  string   \$host
     * @param  int      \$port
     * @param  int      \$timeout
     * @return resource
     */
    public function ssl_connect(\$host, \$port = 21, \$timeout = 90)
    {
        return ftp_ssl_connect(\$host, \$port, \$timeout);
    }
}
";
        
        $__internal_c6a4a032555d534c60b29ec94bba1d79e3ca840be87138377cede8503833fb73->leave($__internal_c6a4a032555d534c60b29ec94bba1d79e3ca840be87138377cede8503833fb73_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/include/FtpWrapper.php";
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
/*
 * This file is part of the `nicolab/php-ftp-client` package.
 *
 * (c) Nicolas Tallefourtane <dev@nicolab.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Nicolas Tallefourtane http://nicolab.net
 */
namespace FtpClient;

/**
 * Wrap the PHP FTP functions
 *
 * @method bool alloc() alloc(int \$filesize, string &\$result = null) Allocates space for a file to be uploaded
 * @method bool cdup() cdup() Changes to the parent directory
 * @method bool chdir() chdir(string \$directory) Changes the current directory on a FTP server
 * @method int chmod() chmod(int \$mode, string \$filename) Set permissions on a file via FTP
 * @method bool close() close() Closes an FTP connection
 * @method bool delete() delete(string \$path) Deletes a file on the FTP server
 * @method bool exec() exec(string \$command) Requests execution of a command on the FTP server
 * @method bool fget() fget(resource \$handle, string \$remote_file, int \$mode, int \$resumepos = 0) Downloads a file from the FTP server and saves to an open file
 * @method bool fput() fput(string \$remote_file, resource \$handle, int \$mode, int \$startpos = 0) Uploads from an open file to the FTP server
 * @method mixed get_option() get_option(int \$option) Retrieves various runtime behaviours of the current FTP stream
 * @method bool get() get(string \$local_file, string \$remote_file, int \$mode, int \$resumepos = 0) Downloads a file from the FTP server
 * @method bool login() login(string \$username, string \$password) Logs in to an FTP connection
 * @method int mdtm() mdtm(string \$remote_file) Returns the last modified time of the given file
 * @method string mkdir() mkdir(string \$directory) Creates a directory
 * @method int nb_continue() nb_continue() Continues retrieving/sending a file (non-blocking)
 * @method int nb_fget() nb_fget(resource \$handle, string \$remote_file, int \$mode, int \$resumepos = 0) Retrieves a file from the FTP server and writes it to an open file (non-blocking)
 * @method int nb_fput() nb_fput(string \$remote_file, resource \$handle, int \$mode, int \$startpos = 0) Stores a file from an open file to the FTP server (non-blocking)
 * @method int nb_get() nb_get(string \$local_file, string \$remote_file, int \$mode, int \$resumepos = 0) Retrieves a file from the FTP server and writes it to a local file (non-blocking)
 * @method int nb_put() nb_put(string \$remote_file, string \$local_file, int \$mode, int \$startpos = 0) Stores a file on the FTP server (non-blocking)
 * @method array nlist() nlist(string \$directory) Returns a list of files in the given directory
 * @method bool pasv() pasv(bool \$pasv) Turns passive mode on or off
 * @method bool put() put(string \$remote_file, string \$local_file, int \$mode, int \$startpos = 0) Uploads a file to the FTP server
 * @method string pwd() pwd() Returns the current directory name
 * @method bool quit() quit() Closes an FTP connection
 * @method array raw() raw(string \$command) Sends an arbitrary command to an FTP server
 * @method array rawlist() rawlist(string \$directory, bool \$recursive = false) Returns a detailed list of files in the given directory
 * @method bool rename() rename(string \$oldname, string \$newname) Renames a file or a directory on the FTP server
 * @method bool rmdir() rmdir(string \$directory) Removes a directory
 * @method bool set_option() set_option(int \$option, mixed \$value) Set miscellaneous runtime FTP options
 * @method bool site() site(string \$command) Sends a SITE command to the server
 * @method int size() size(string \$remote_file) Returns the size of the given file
 * @method string systype() systype() Returns the system type identifier of the remote FTP server
 *
 * @author Nicolas Tallefourtane <dev@nicolab.net>
 */
class FtpWrapper
{
    /**
     * The connection with the server
     *
     * @var resource
     */
    protected \$conn;

    /**
     * Constructor.
     *
     * @param resource &\$connection The FTP (or SSL-FTP) connection (takes by reference).
     */
    public function __construct(&\$connection)
    {
        \$this->conn = &\$connection;
    }

    /**
     * Forward the method call to FTP functions
     *
     * @param  string       \$function
     * @param  array        \$arguments
     * @return mixed
     * @throws FtpException When the function is not valid
     */
    public function __call(\$function, array \$arguments)
    {
        \$function = 'ftp_' . \$function;

        if (function_exists(\$function)) {
            array_unshift(\$arguments, \$this->conn);
            return call_user_func_array(\$function, \$arguments);
        }

        throw new FtpException(\"{\$function} is not a valid FTP function\");
    }

    /**
     * Opens a FTP connection
     *
     * @param  string   \$host
     * @param  int      \$port
     * @param  int      \$timeout
     * @return resource
     */
    public function connect(\$host, \$port = 21, \$timeout = 90)
    {
        return ftp_connect(\$host, \$port, \$timeout);
    }

    /**
     * Opens a Secure SSL-FTP connection
     * @param  string   \$host
     * @param  int      \$port
     * @param  int      \$timeout
     * @return resource
     */
    public function ssl_connect(\$host, \$port = 21, \$timeout = 90)
    {
        return ftp_ssl_connect(\$host, \$port, \$timeout);
    }
}
", "@MwebAdmin/filemanager/include/FtpWrapper.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/include/FtpWrapper.php");
    }
}
