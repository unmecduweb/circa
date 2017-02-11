<?php

/* @MwebAdmin/filemanager/uploader/index.php */
class __TwigTemplate_1adff0241935a2728d018ff6f5b1fa4fe947a1e360c71e598071f8998c90bfd3 extends Twig_Template
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
        $__internal_4662e547489851d3729c5339e4cc9a262b8c3413eaeac6e18757abf8534c08af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4662e547489851d3729c5339e4cc9a262b8c3413eaeac6e18757abf8534c08af->enter($__internal_4662e547489851d3729c5339e4cc9a262b8c3413eaeac6e18757abf8534c08af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/uploader/index.php"));

        // line 1
        echo "<?php

\$config = include '../config/config.php';
//TODO switch to array
extract(\$config, EXTR_OVERWRITE);

if ( ! \$java_upload)
{
\tdie('forbidden');
}
if (\$_SESSION['RF'][\"verify\"] != \"RESPONSIVEfilemanager\")
{
\tdie('forbidden');
}

//Let's load the 'interesting' stuff ...  ;-)
include 'jupload.php';
include '../include/utils.php';

\$path = \$current_path . \$_GET['path'];
\$cycle = true;
\$max_cycles = 50;
\$i = 0;
while (\$cycle && \$i < \$max_cycles)
{
\t\$i++;
\tif (\$path == \$current_path)
\t{
\t\t\$cycle = false;
\t}

\tif (file_exists(\$path . \"config.php\"))
\t{
\t\trequire_once \$path . \"config.php\";
\t\t\$cycle = false;
\t}
\t\$path = fix_dirname(\$path) . \"/\";
}

\$path = \"../\" . \$current_path . \$_GET['path'];

if (strpos(\$_GET['path'], '../') !== false || strpos(\$_GET['path'], './') !== false || strpos(\$_GET['path'], '/') === 0)
{
\tdie ('path error');
}

\$path = str_replace(' ', '~', \$path);
////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////   The user callback function, that can be called after upload   ////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * This function will be called, once all files are uploaded, with the list of uploaded files as an argument.
 *
 * Condition to have this function called:
 * - Have the applet parameter afterUploadURL unset in this file. This makes the applet use its default behavior, that
 * is: afterUploadURL is the current web page, with the ?afterupload=1 parameter added.
 * - Have the class parameter callbackAfterUploadManagement set to 'handle_uploaded_files', name of this callback. You
 * can use any name you want, but the function must accept one unique parameter: the array that contains the file
 * descriptions.
 *
 * @param \$juploadPhpSupportClass The instance of the JUpload PHP class.
 * @param \$file                   The array wich contains info about all uploaded files.
 */
function handle_uploaded_files(\$juploadPhpSupportClass, \$files)
{
\treturn
\t\t\"<P>We are in the 'handle_uploaded_files' callback function, in the index.php script. To avoid double coding, we \"
\t\t. \"just call the default behavior of the JUpload PHP class. Just replace this by your code...</P>\"
\t\t. \$juploadPhpSupportClass->defaultAfterUploadManagement();;

}

////////////////////////////////////////////////////////////////////////////////////////////////////////


//First: the applet parameters
//
// Default value should work nice on most configuration. In this sample, we use some specific parameters, to show
// how to use this array.
// See comment for the parameters used on this demo page.
//
// You can use all applet parameters in this array.
// see all details http://jupload.sourceforge.net/howto-customization.html
//
\$appletParameters = array(
\t//Default value is ... maximum size for a file on the current FS. 2G is problably too much already.
\t'maxFileSize'           => \$JAVAMaxSizeUpload . 'G',
\t//
\t//In the sourceforge project structure, the applet jar file is one folder below. Default
\t//configuration is ok, if wjhk.jupload.jar is in the same folder as the script containing this call.
\t'archive'               => 'wjhk.jupload.jar',
\t'showLogWindow'         => 'false',
\t'width'                 => '100%',
\t'height'                => '358px',
\t'name'                  => 'No limit Uploader',
\t'allowedFileExtensions' => implode('/', \$ext),
\t//To manage, other jar files, like the ftp jar files if postURL is an FTP URL:
\t//'archive' => 'wjhk.jupload.jar,jakarta-commons-oro.jar,jakarta-commons-net.jar',
\t//
\t//Default afterUploadURL displays the list of uploaded files above the applet (in the <!--JUPLOAD_FILES--> markers, see below)
\t//You can use any page you want, to manage the uploaded files. Here is a sample, that also only shows the list of files.
\t'afterUploadURL'        => 'success.php?path=' . \$_GET['path'],
\t//
\t//This demo expects the md5sum to be sent by the applet. But the parameter is not mandatory
\t//This value should be set to false (or the line commented), for big files, as md5 calculation
\t//may be long  (Note this must be string and *not* boolean true/false)
\t'sendMD5Sum'            => 'false',
\t//
\t'debugLevel'            => 0 // 100 disables redirect after upload, so we keep it below. This still gives a lot of information, in case of problem.
);

// for htaccess protected folders
if ((isset(\$_SERVER['PHP_AUTH_USER']) && \$_SERVER['PHP_AUTH_USER'] != '') && \$_SERVER['PHP_AUTH_USER'] != '' && \$_SERVER['PHP_AUTH_USER'] != '')
{
\t\$appletParameters['specificHeaders'] = 'Authorization: Basic ' . base64_encode(\$_SERVER['PHP_AUTH_USER'] . \":\" . \$_SERVER['PHP_AUTH_PW']);
}

//
//Then: the jupload PHP class parameters
\$classParameters = array(
\t//Files won't be stored on the server. Useful for first tests of the applet behavior ... and sourceforge demo site !
\t'demo_mode'     => false,
\t//
\t//Allow creation of subdirectories, when uploading several folders/files (drag and drop a folder on the applet to use it).
\t'allow_subdirs' => true,
\t//
\t// The callbackAfterUploadManagement function will be called, once all files are uploaded, with the list
\t//of uploaded files as an argument. See the above sample, and change it according to your needs.
\t//'callbackAfterUploadManagement' => 'handle_uploaded_files',
\t//
\t//I work on windows. The default configuration is /var/tmp/jupload_test
\t'destdir'       => \$path  //Where to store the files on the web
\t//'errormail' => 'me@my.domain.org',
);
if ( ! empty(\$convert_spaces))
{
\t\$classParameters['convert_spaces'] = true;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
// Instantiate and initialize JUpload : integration of the applet in your web site.
\$juploadPhpSupportClass = new JUpload(\$appletParameters, \$classParameters);
////////////////////////////////////////////////////////////////////////////////////////////////////////


//Then, a simple HTML page, for the demo
//
// \"<!--JUPLOAD_FILES-->\" is the tag where the list of uploaded files will be written.
// \"<!--JUPLOAD_APPLET-->\" is the place where the applet will be integrated, in the web page.
?>
<html>
<head>
\t<!--JUPLOAD_JSCRIPT-->
\t<title>JUpload RESPONSIVE filemanager</title>
\t<style>
\t\tbody {
\t\t\tpadding: 0px;
\t\t\tmargin: 0px;
\t\t}
\t</style>
</head>
<body>
<div align=\"center\"><!--JUPLOAD_FILES--></div>
<div align=\"center\"><!--JUPLOAD_APPLET--></div>
</body>
</html>";
        
        $__internal_4662e547489851d3729c5339e4cc9a262b8c3413eaeac6e18757abf8534c08af->leave($__internal_4662e547489851d3729c5339e4cc9a262b8c3413eaeac6e18757abf8534c08af_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/uploader/index.php";
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

\$config = include '../config/config.php';
//TODO switch to array
extract(\$config, EXTR_OVERWRITE);

if ( ! \$java_upload)
{
\tdie('forbidden');
}
if (\$_SESSION['RF'][\"verify\"] != \"RESPONSIVEfilemanager\")
{
\tdie('forbidden');
}

//Let's load the 'interesting' stuff ...  ;-)
include 'jupload.php';
include '../include/utils.php';

\$path = \$current_path . \$_GET['path'];
\$cycle = true;
\$max_cycles = 50;
\$i = 0;
while (\$cycle && \$i < \$max_cycles)
{
\t\$i++;
\tif (\$path == \$current_path)
\t{
\t\t\$cycle = false;
\t}

\tif (file_exists(\$path . \"config.php\"))
\t{
\t\trequire_once \$path . \"config.php\";
\t\t\$cycle = false;
\t}
\t\$path = fix_dirname(\$path) . \"/\";
}

\$path = \"../\" . \$current_path . \$_GET['path'];

if (strpos(\$_GET['path'], '../') !== false || strpos(\$_GET['path'], './') !== false || strpos(\$_GET['path'], '/') === 0)
{
\tdie ('path error');
}

\$path = str_replace(' ', '~', \$path);
////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////   The user callback function, that can be called after upload   ////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * This function will be called, once all files are uploaded, with the list of uploaded files as an argument.
 *
 * Condition to have this function called:
 * - Have the applet parameter afterUploadURL unset in this file. This makes the applet use its default behavior, that
 * is: afterUploadURL is the current web page, with the ?afterupload=1 parameter added.
 * - Have the class parameter callbackAfterUploadManagement set to 'handle_uploaded_files', name of this callback. You
 * can use any name you want, but the function must accept one unique parameter: the array that contains the file
 * descriptions.
 *
 * @param \$juploadPhpSupportClass The instance of the JUpload PHP class.
 * @param \$file                   The array wich contains info about all uploaded files.
 */
function handle_uploaded_files(\$juploadPhpSupportClass, \$files)
{
\treturn
\t\t\"<P>We are in the 'handle_uploaded_files' callback function, in the index.php script. To avoid double coding, we \"
\t\t. \"just call the default behavior of the JUpload PHP class. Just replace this by your code...</P>\"
\t\t. \$juploadPhpSupportClass->defaultAfterUploadManagement();;

}

////////////////////////////////////////////////////////////////////////////////////////////////////////


//First: the applet parameters
//
// Default value should work nice on most configuration. In this sample, we use some specific parameters, to show
// how to use this array.
// See comment for the parameters used on this demo page.
//
// You can use all applet parameters in this array.
// see all details http://jupload.sourceforge.net/howto-customization.html
//
\$appletParameters = array(
\t//Default value is ... maximum size for a file on the current FS. 2G is problably too much already.
\t'maxFileSize'           => \$JAVAMaxSizeUpload . 'G',
\t//
\t//In the sourceforge project structure, the applet jar file is one folder below. Default
\t//configuration is ok, if wjhk.jupload.jar is in the same folder as the script containing this call.
\t'archive'               => 'wjhk.jupload.jar',
\t'showLogWindow'         => 'false',
\t'width'                 => '100%',
\t'height'                => '358px',
\t'name'                  => 'No limit Uploader',
\t'allowedFileExtensions' => implode('/', \$ext),
\t//To manage, other jar files, like the ftp jar files if postURL is an FTP URL:
\t//'archive' => 'wjhk.jupload.jar,jakarta-commons-oro.jar,jakarta-commons-net.jar',
\t//
\t//Default afterUploadURL displays the list of uploaded files above the applet (in the <!--JUPLOAD_FILES--> markers, see below)
\t//You can use any page you want, to manage the uploaded files. Here is a sample, that also only shows the list of files.
\t'afterUploadURL'        => 'success.php?path=' . \$_GET['path'],
\t//
\t//This demo expects the md5sum to be sent by the applet. But the parameter is not mandatory
\t//This value should be set to false (or the line commented), for big files, as md5 calculation
\t//may be long  (Note this must be string and *not* boolean true/false)
\t'sendMD5Sum'            => 'false',
\t//
\t'debugLevel'            => 0 // 100 disables redirect after upload, so we keep it below. This still gives a lot of information, in case of problem.
);

// for htaccess protected folders
if ((isset(\$_SERVER['PHP_AUTH_USER']) && \$_SERVER['PHP_AUTH_USER'] != '') && \$_SERVER['PHP_AUTH_USER'] != '' && \$_SERVER['PHP_AUTH_USER'] != '')
{
\t\$appletParameters['specificHeaders'] = 'Authorization: Basic ' . base64_encode(\$_SERVER['PHP_AUTH_USER'] . \":\" . \$_SERVER['PHP_AUTH_PW']);
}

//
//Then: the jupload PHP class parameters
\$classParameters = array(
\t//Files won't be stored on the server. Useful for first tests of the applet behavior ... and sourceforge demo site !
\t'demo_mode'     => false,
\t//
\t//Allow creation of subdirectories, when uploading several folders/files (drag and drop a folder on the applet to use it).
\t'allow_subdirs' => true,
\t//
\t// The callbackAfterUploadManagement function will be called, once all files are uploaded, with the list
\t//of uploaded files as an argument. See the above sample, and change it according to your needs.
\t//'callbackAfterUploadManagement' => 'handle_uploaded_files',
\t//
\t//I work on windows. The default configuration is /var/tmp/jupload_test
\t'destdir'       => \$path  //Where to store the files on the web
\t//'errormail' => 'me@my.domain.org',
);
if ( ! empty(\$convert_spaces))
{
\t\$classParameters['convert_spaces'] = true;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
// Instantiate and initialize JUpload : integration of the applet in your web site.
\$juploadPhpSupportClass = new JUpload(\$appletParameters, \$classParameters);
////////////////////////////////////////////////////////////////////////////////////////////////////////


//Then, a simple HTML page, for the demo
//
// \"<!--JUPLOAD_FILES-->\" is the tag where the list of uploaded files will be written.
// \"<!--JUPLOAD_APPLET-->\" is the place where the applet will be integrated, in the web page.
?>
<html>
<head>
\t<!--JUPLOAD_JSCRIPT-->
\t<title>JUpload RESPONSIVE filemanager</title>
\t<style>
\t\tbody {
\t\t\tpadding: 0px;
\t\t\tmargin: 0px;
\t\t}
\t</style>
</head>
<body>
<div align=\"center\"><!--JUPLOAD_FILES--></div>
<div align=\"center\"><!--JUPLOAD_APPLET--></div>
</body>
</html>", "@MwebAdmin/filemanager/uploader/index.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/uploader/index.php");
    }
}
