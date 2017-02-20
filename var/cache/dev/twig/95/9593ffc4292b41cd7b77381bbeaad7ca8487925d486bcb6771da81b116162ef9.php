<?php

/* @MwebAdmin/filemanager/include/utils.php */
class __TwigTemplate_2aaf8570c44925a00c03cbd530649d5fd44b16d9a5bb194cb0378da672503cc8 extends Twig_Template
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
        $__internal_49f5ee74d2ae2626b54d8dafe07da42f553d0ed390df1c973093f551fcf5646b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f5ee74d2ae2626b54d8dafe07da42f553d0ed390df1c973093f551fcf5646b->enter($__internal_49f5ee74d2ae2626b54d8dafe07da42f553d0ed390df1c973093f551fcf5646b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/include/utils.php"));

        // line 1
        echo "<?php

if (\$_SESSION['RF'][\"verify\"] != \"RESPONSIVEfilemanager\")
{
\tdie('forbiden');
}
require dirname(__FILE__) . '/Response.php';

if ( ! function_exists('response'))
{
\t/**
\t* Response construction helper
\t*
\t* @param string \$content
\t* @param int    \$statusCode
\t* @param array  \$headers
\t*
\t* @return \\Response|\\Illuminate\\Http\\Response
\t*/
\tfunction response(\$content = '', \$statusCode = 200, \$headers = array())
\t{
\t\t\$responseClass = class_exists('Illuminate\\Http\\Response') ? '\\Illuminate\\Http\\Response' : 'Response';

\t\treturn new \$responseClass(\$content, \$statusCode, \$headers);
\t}
}

if ( ! function_exists('trans'))
{
\t// language
\tif ( ! isset(\$_SESSION['RF']['language'])
\t\t|| file_exists('lang/' . basename(\$_SESSION['RF']['language']) . '.php') === false
\t\t|| ! is_readable('lang/' . basename(\$_SESSION['RF']['language']) . '.php')
\t)
\t{
\t\t\$lang = \$default_language;

\t\tif (isset(\$_GET['lang']) && \$_GET['lang'] != 'undefined' && \$_GET['lang'] != '')
\t\t{
\t\t\t\$lang = fix_get_params(\$_GET['lang']);
\t\t\t\$lang = trim(\$lang);
\t\t}

\t\tif (\$lang != \$default_language)
\t\t{
\t\t\t\$path_parts = pathinfo(\$lang);
\t\t\t\$lang = \$path_parts['basename'];
\t\t\t\$languages = include 'lang/languages.php';
\t\t}

\t\t// add lang file to session for easy include
\t\t\$_SESSION['RF']['language'] = \$lang;
\t}
\telse
\t{
\t\tif(file_exists('lang/languages.php')){
\t\t\t\$languages = include 'lang/languages.php';
\t\t}else{
\t\t\t\$languages = include '../lang/languages.php';
\t\t}

\t\tif(array_key_exists(\$_SESSION['RF']['language'],\$languages)){
\t\t\t\$lang = \$_SESSION['RF']['language'];
\t\t}else{
\t\t\tresponse(trans('Lang_Not_Found').AddErrorLocation())->send();
\t\t\texit;
\t\t}

\t}
\tif(file_exists('lang/' . \$lang . '.php')){
\t\t\$lang_vars = include 'lang/' . \$lang . '.php';
\t}else{
\t\t\$lang_vars = include (dirname(dirname(__FILE__)) . '/lang/' . \$lang . '.php');
\t}

\tif ( ! is_array(\$lang_vars))
\t{
\t\t\$lang_vars = array();
\t}

\t\$GLOBALS['lang_vars'] = \$lang_vars;
\t\$GLOBALS['default_language'] = \$default_language;

\t/**
\t* Translate language variable
\t*
\t* @param \$var string name
\t*
\t* @return string translated variable
\t*/
\tfunction trans(\$var)
\t{
\t\tglobal \$lang_vars;

\t\treturn (array_key_exists(\$var, \$lang_vars)) ? \$lang_vars[ \$var ] : \$var;
\t}
}

/**
* Delete directory
*
* @param  string  \$dir
*
* @return  bool
*/
function deleteDir(\$dir,\$ftp = null, \$config = null)
{
\tif(\$ftp){

\t\ttry{
\t\t\t\$ftp->rmdir(\$dir);
\t\t\treturn true;

\t\t}catch(FtpClient\\FtpException \$e){
\t\t\treturn null;
\t\t}

\t}else{
\t\tif ( ! file_exists(\$dir))
\t\t{
\t\t\treturn false;
\t\t}
\t\tif ( ! is_dir(\$dir))
\t\t{
\t\t\treturn unlink(\$dir);
\t\t}
\t\tforeach (scandir(\$dir) as \$item)
\t\t{
\t\t\tif (\$item == '.' || \$item == '..')
\t\t\t{
\t\t\t\tcontinue;
\t\t\t}
\t\t\tif ( ! deleteDir(\$dir . DIRECTORY_SEPARATOR . \$item))
\t\t\t{
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t}

\treturn rmdir(\$dir);
}

/**
* Make a file copy
*
* @param  string  \$old_path
* @param  string  \$name      New file name without extension
*
* @return  bool
*/
function duplicate_file( \$old_path, \$name, \$ftp = null, \$config = null )
{
\t\$info = pathinfo(\$old_path);
\t\$new_path = \$info['dirname'] . \"/\" . \$name . \".\" . \$info['extension'];
\tif(\$ftp){
\t\ttry{
\t\t\t\$tmp = time().\$name . \".\" . \$info['extension'];
\t\t\t\$ftp->get(\$tmp, \"/\".\$old_path, FTP_BINARY);
\t\t\t\$ftp->put(\"/\".\$new_path, \$tmp, FTP_BINARY);
\t\t\tunlink(\$tmp);
\t\t\treturn true;

\t\t}catch(FtpClient\\FtpException \$e){
\t\t\treturn null;
\t\t}
\t}else{
\t\tif (file_exists(\$old_path))
\t\t{
\t\t\tif (file_exists(\$new_path) && \$old_path == \$new_path)
\t\t\t{
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn copy(\$old_path, \$new_path);
\t\t}
\t}
}


/**
* Rename file
*
* @param  string  \$old_path         File to rename
* @param  string  \$name             New file name without extension
* @param  bool    \$transliteration
*
* @return bool
*/
function rename_file(\$old_path, \$name, \$ftp = null, \$config = null)
{
\t\$name = fix_filename(\$name, \$config);
\t\$info = pathinfo(\$old_path);
\t\$new_path = \$info['dirname'] . \"/\" . \$name . \".\" . \$info['extension'];
\tif(\$ftp){
\t\ttry{
\t\t\treturn \$ftp->rename(\"/\".\$old_path, \"/\".\$new_path);
\t\t}catch(FtpClient\\FtpException \$e){
\t\t\treturn false;
\t\t}
\t}else{
\t\tif (file_exists(\$old_path))
\t\t{
\t\t\t\$new_path = \$info['dirname'] . \"/\" . \$name . \".\" . \$info['extension'];
\t\t\tif (file_exists(\$new_path) && \$old_path == \$new_path)
\t\t\t{
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn rename(\$old_path, \$new_path);
\t\t}
\t}
}


function url_exists(\$url){
    if (!\$fp = curl_init(\$url)) return false;
    return true;
}


function tempdir() {
    \$tempfile=tempnam(sys_get_temp_dir(),'');
    if (file_exists(\$tempfile)) { unlink(\$tempfile); }
    mkdir(\$tempfile);
    if (is_dir(\$tempfile)) { return \$tempfile; }
}


/**
* Rename directory
*
* @param  string  \$old_path         Directory to rename
* @param  string  \$name             New directory name
* @param  bool    \$transliteration
*
* @return bool
*/
function rename_folder(\$old_path, \$name, \$ftp = null, \$config = null)
{
\t\$name = fix_filename(\$name, \$config, true);
\t\$new_path = fix_dirname(\$old_path) . \"/\" . \$name;
\tif(\$ftp){
\t\tif(\$ftp->chdir(\"/\".\$old_path)){
\t\t\tif(@\$ftp->chdir(\$new_path)){
\t\t\t\treturn false;
\t\t\t}
\t\t\treturn \$ftp->rename(\"/\".\$old_path, \"/\".\$new_path);
\t\t}
\t}else{
\t\tif (file_exists(\$old_path))
\t\t{
\t\t\tif (file_exists(\$new_path) && \$old_path == \$new_path)
\t\t\t{
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn rename(\$old_path, \$new_path);
\t\t}
\t}
}

function ftp_con(\$config){
\tif(isset(\$config['ftp_host']) && \$config['ftp_host']){
\t\t// *** Include the class
\t\tinclude('include/FtpClient.php');
\t\tinclude('include/FtpException.php');
\t\tinclude('include/FtpWrapper.php');

\t\t\$ftp = new \\FtpClient\\FtpClient();
\t\ttry{
\t\t\t\$ftp->connect(\$config['ftp_host'],\$config['ftp_ssl'],\$config['ftp_port']);
\t\t\t\$ftp->login(\$config['ftp_user'], \$config['ftp_pass']);
\t\t\t\$ftp->pasv(true);
\t\t\treturn \$ftp;
\t\t}catch(FtpClient\\FtpException \$e){
\t\t\techo \"Error: \";
\t\t\techo \$e->getMessage();
\t\t\techo \" to server \";
\t\t\t\$tmp = \$e->getTrace();
\t\t\techo \$tmp[0]['args'][0];
\t\t\techo \"<br/>Please check configurations\";
\t\t\tdie();
\t\t}
\t}else{
\t\treturn false;
\t}
}

/**
* Create new image from existing file
*
* @param  string  \$imgfile    Source image file name
* @param  string  \$imgthumb   Thumbnail file name
* @param  int     \$newwidth   Thumbnail width
* @param  int     \$newheight  Optional thumbnail height
* @param  string  \$option     Type of resize
*
* @return bool
* @throws \\Exception
*/
function create_img(\$imgfile, \$imgthumb, \$newwidth, \$newheight = null, \$option = \"crop\", \$ftp=false,\$config = array())
{
\t\$result = false;
\tif(\$ftp ){
\t\tif(url_exists(\$imgfile)){
\t\t\t\$temp = tempnam('/tmp','RF');
\t\t\tunlink(\$temp);
\t\t\t\$temp .=\".\".substr(strrchr(\$imgfile,'.'),1);
\t\t\t\$handle = fopen(\$temp, \"w\");
\t\t\tfwrite(\$handle, file_get_contents(\$imgfile));
\t\t\tfclose(\$handle);
\t\t\t\$imgfile= \$temp;
\t\t\t\$save_ftp = \$imgthumb;
\t\t\t\$imgthumb = \$temp;
\t\t}
\t}
\tif(file_exists(\$imgfile) || strpos(\$imgfile,'http')===0){
\t\tif (strpos(\$imgfile,'http')===0 || image_check_memory_usage(\$imgfile, \$newwidth, \$newheight))
\t\t{
\t\t\trequire_once('php_image_magician.php');
\t\t\ttry{
\t\t\t\t\$magicianObj = new imageLib(\$imgfile);
\t\t\t\t\$magicianObj->resizeImage(\$newwidth, \$newheight, \$option);
\t\t\t\t\$magicianObj->saveImage(\$imgthumb, 80);
\t\t\t}catch (Exception \$e){
\t\t\t\treturn false;
\t\t\t}
\t\t\t\$result = true;
\t\t}
\t}
\tif(\$result && \$ftp ){
\t\t\$ftp->put(\$save_ftp, \$imgthumb, FTP_BINARY);
\t\tunlink(\$imgthumb);
\t}

\treturn \$result;
}

/**
* Convert convert size in bytes to human readable
*
* @param  int  \$size
*
* @return  string
*/
function makeSize(\$size)
{
\t\$units = array( 'B', 'KB', 'MB', 'GB', 'TB' );
\t\$u = 0;
\twhile ((round(\$size / 1024) > 0) && (\$u < 4))
\t{
\t\t\$size = \$size / 1024;
\t\t\$u++;
\t}

\treturn (number_format(\$size, 0) . \" \" . trans(\$units[ \$u ]));
}

/**
* Determine directory size
*
* @param  string  \$path
*
* @return  int
*/
function folder_info(\$path,\$count_hidden=true)
{
\tglobal \$hidden_folders,\$hidden_files;
\t\$total_size = 0;
\t\$files = scandir(\$path);
\t\$cleanPath = rtrim(\$path, '/') . '/';
\t\$files_count = 0;
\t\$folders_count = 0;
\tforeach (\$files as \$t)
\t{
\t\tif (\$t != \".\" && \$t != \"..\")
\t\t{
\t\t\tif (\$count_hidden or !(in_array(\$t,\$hidden_folders) or in_array(\$t,\$hidden_files)))
\t\t\t{
\t\t\t\t\$currentFile = \$cleanPath . \$t;
\t\t\t\tif (is_dir(\$currentFile))
\t\t\t\t{
\t\t\t\t\tlist(\$size,\$tmp,\$tmp1) = folder_info(\$currentFile);
\t\t\t\t\t\$total_size += \$size;
\t\t\t\t\t\$folders_count ++;
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$size = filesize(\$currentFile);
\t\t\t\t\t\$total_size += \$size;
\t\t\t\t\t\$files_count++;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn array(\$total_size,\$files_count,\$folders_count);
}
/**
* Get number of files in a directory
*
* @param  string  \$path
*
* @return  int
*/
function filescount(\$path,\$count_hidden=true)
{
\tglobal \$hidden_folders,\$hidden_files;
\t\$total_count = 0;
\t\$files = scandir(\$path);
\t\$cleanPath = rtrim(\$path, '/') . '/';

\tforeach (\$files as \$t)
\t{
\t\tif (\$t != \".\" && \$t != \"..\")
\t\t{
\t\t\tif (\$count_hidden or !(in_array(\$t,\$hidden_folders) or in_array(\$t,\$hidden_files)))
\t\t\t{
\t\t\t\t\$currentFile = \$cleanPath . \$t;
\t\t\t\tif (is_dir(\$currentFile))
\t\t\t\t{
\t\t\t\t\t\$size = filescount(\$currentFile);
\t\t\t\t\t\$total_count += \$size;
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$total_count += 1;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn \$total_count;
}
/**
* check if the current folder size plus the added size is over the overall size limite
*
* @param  int  \$sizeAdded
*
* @return  bool
*/
function checkresultingsize(\$sizeAdded)
{
\tglobal \$MaxSizeTotal,\$current_path;
\tif (\$MaxSizeTotal !== false && is_int(\$MaxSizeTotal)) {
\t\tlist(\$sizeCurrentFolder,\$fileCurrentNum,\$foldersCurrentCount) = folder_info(\$current_path,false);
\t\t// overall size over limit
\t\tif ((\$MaxSizeTotal * 1024 * 1024) < (\$sizeCurrentFolder + \$sizeAdded)) {
\t\t\treturn false;
\t\t}
\t}
\treturn true;
}

/**
* Create directory for images and/or thumbnails
*
* @param  string  \$path
* @param  string  \$path_thumbs
*/
function create_folder(\$path = null, \$path_thumbs = null,\$ftp = null,\$config = null)
{
\tif(\$ftp){
\t\t\$ftp->mkdir(\$path);
\t\t\$ftp->mkdir(\$path_thumbs);
\t}else{
\t\t\$oldumask = umask(0);
\t\tif (\$path && ! file_exists(\$path))
\t\t{
\t\t\tmkdir(\$path, 0755, true);
\t\t} // or even 01777 so you get the sticky bit set
\t\tif (\$path_thumbs && ! file_exists(\$path_thumbs))
\t\t{
\t\t\tmkdir(\$path_thumbs, 0755, true) or die(\"\$path_thumbs cannot be found\");
\t\t} // or even 01777 so you get the sticky bit set
\t\tumask(\$oldumask);
\t}
}

/**
* Get file extension present in directory
*
* @param  string  \$path
* @param  string  \$ext
*/
function check_files_extensions_on_path(\$path, \$ext)
{
\tif ( ! is_dir(\$path))
\t{
\t\t\$fileinfo = pathinfo(\$path);
\t\tif ( ! in_array(mb_strtolower(\$fileinfo['extension']), \$ext))
\t\t{
\t\t\tunlink(\$path);
\t\t}
\t}
\telse
\t{
\t\t\$files = scandir(\$path);
\t\tforeach (\$files as \$file)
\t\t{
\t\t\tcheck_files_extensions_on_path(trim(\$path, '/') . \"/\" . \$file, \$ext);
\t\t}
\t}
}

/**
* Get file extension present in PHAR file
*
* @param  string  \$phar
* @param  array   \$files
* @param  string  \$basepath
* @param  string  \$ext
*/
function check_files_extensions_on_phar(\$phar, &\$files, \$basepath, \$ext)
{
\tforeach (\$phar as \$file)
\t{
\t\tif (\$file->isFile())
\t\t{
\t\t\tif (in_array(mb_strtolower(\$file->getExtension()), \$ext))
\t\t\t{
\t\t\t\t\$files[] = \$basepath . \$file->getFileName();
\t\t\t}
\t\t}
\t\telse
\t\t{
\t\t\tif (\$file->isDir())
\t\t\t{
\t\t\t\t\$iterator = new DirectoryIterator(\$file);
\t\t\t\tcheck_files_extensions_on_phar(\$iterator, \$files, \$basepath . \$file->getFileName() . '/', \$ext);
\t\t\t}
\t\t}
\t}
}

/**
* Cleanup input
*
* @param  string  \$str
*
* @return  string
*/
function fix_get_params(\$str)
{
\treturn strip_tags(preg_replace(\"/[^a-zA-Z0-9\\.\\[\\]_| -]/\", '', \$str));
}

/**
* Cleanup filename
*
* @param  string  \$str
* @param  bool    \$transliteration
* @param  bool    \$convert_spaces
* @param  string  \$replace_with
* @param  bool    \$is_folder
*
* @return string
*/
function fix_filename(\$str, \$config, \$is_folder = false)
{
\tif (\$config['convert_spaces'])
\t{
\t\t\$str = str_replace(' ', \$config['replace_with'], \$str);
\t}

\tif (\$config['transliteration'])
\t{
\t\tif (!mb_detect_encoding(\$str, 'UTF-8', true))
\t\t{
\t\t\t\$str = utf8_encode(\$str);
\t\t}
\t\tif (function_exists('transliterator_transliterate'))
\t\t{
\t\t\t\$str = transliterator_transliterate('Any-Latin; Latin-ASCII', \$str);
\t\t}
\t\telse
\t\t{
\t\t\t\$str = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', \$str);
\t\t}

\t\t\$str = preg_replace(\"/[^a-zA-Z0-9\\.\\[\\]_| -]/\", '', \$str);
\t}

\t\$str = str_replace(array( '\"', \"'\", \"/\", \"\\\\\" ), \"\", \$str);
\t\$str = strip_tags(\$str);

\t// Empty or incorrectly transliterated filename.
\t// Here is a point: a good file UNKNOWN_LANGUAGE.jpg could become .jpg in previous code.
\t// So we add that default 'file' name to fix that issue.
\tif (strpos(\$str, '.') === 0 && \$is_folder === false)
\t{
\t\t\$str = 'file' . \$str;
\t}

\treturn trim(\$str);
}

/**
* Cleanup directory name
*
* @param  string  \$str
*
* @return  string
*/
function fix_dirname(\$str)
{
\treturn str_replace('~', ' ', dirname(str_replace(' ', '~', \$str)));
}

/**
* Correct strtoupper handling
*
* @param  string  \$str
*
* @return  string
*/
function fix_strtoupper(\$str)
{
\tif (function_exists('mb_strtoupper'))
\t{
\t\treturn mb_strtoupper(\$str);
\t}
\telse
\t{
\t\treturn strtoupper(\$str);
\t}
}

/**
* Correct strtolower handling
*
* @param  string  \$str
*
* @return  string
*/
function fix_strtolower(\$str)
{
\tif (function_exists('mb_strtoupper'))
\t{
\t\treturn mb_strtolower(\$str);
\t}
\telse
\t{
\t\treturn strtolower(\$str);
\t}
}

function fix_path(\$path, \$config)
{
\t\$info = pathinfo(\$path);
\t\$tmp_path = \$info['dirname'];
\t\$str = fix_filename(\$info['filename'], \$config);
\tif (\$tmp_path != \"\")
\t{
\t\treturn \$tmp_path . DIRECTORY_SEPARATOR . \$str;
\t}
\telse
\t{
\t\treturn \$str;
\t}
}

/**
* @param  \$current_path
* @param  \$fld
*
* @return  bool
*/
function config_loading(\$current_path, \$fld)
{
\tif (file_exists(\$current_path . \$fld . \".config\"))
\t{
\t\trequire_once(\$current_path . \$fld . \".config\");

\t\treturn true;
\t}
\techo \"!!!!\" . \$parent = fix_dirname(\$fld);
\tif (\$parent != \".\" && ! empty(\$parent))
\t{
\t\tconfig_loading(\$current_path, \$parent);
\t}

\treturn false;
}

/**
* Check if memory is enough to process image
*
* @param  string  \$img
* @param  int     \$max_breedte
* @param  int     \$max_hoogte
*
* @return bool
*/
function image_check_memory_usage(\$img, \$max_breedte, \$max_hoogte)
{
\tif (file_exists(\$img))
\t{
\t\t\$K64 = 65536; // number of bytes in 64K
\t\t\$memory_usage = memory_get_usage();
\t\t\$memory_limit = abs(intval(str_replace('M', '', ini_get('memory_limit')) * 1024 * 1024));
\t\t\$image_properties = getimagesize(\$img);
\t\t\$image_width = \$image_properties[0];
\t\t\$image_height = \$image_properties[1];
\t\tif (isset(\$image_properties['bits']))
\t\t\t\$image_bits = \$image_properties['bits'];
\t\telse
\t\t\t\$image_bits = 0;
\t\t\$image_memory_usage = \$K64 + (\$image_width * \$image_height * (\$image_bits) * 2);
\t\t\$thumb_memory_usage = \$K64 + (\$max_breedte * \$max_hoogte * (\$image_bits) * 2);
\t\t\$memory_needed = abs(intval(\$memory_usage + \$image_memory_usage + \$thumb_memory_usage));

\t\tif (\$memory_needed > \$memory_limit)
\t\t{
\t\t\treturn false;
\t\t}
\t\telse
\t\t{
\t\t\treturn true;
\t\t}
\t}
\telse
\t{
\t\treturn false;
\t}
}

/**
* Check is string is ended with needle
*
* @param  string  \$haystack
* @param  string  \$needle
*
* @return  bool
*/
function endsWith(\$haystack, \$needle)
{
\treturn \$needle === \"\" || substr(\$haystack, -strlen(\$needle)) === \$needle;
}

/**
* TODO REFACTOR THIS!
*
* @param \$targetPath
* @param \$targetFile
* @param \$name
* @param \$current_path
* @param \$relative_image_creation
* @param \$relative_path_from_current_pos
* @param \$relative_image_creation_name_to_prepend
* @param \$relative_image_creation_name_to_append
* @param \$relative_image_creation_width
* @param \$relative_image_creation_height
* @param \$relative_image_creation_option
* @param \$fixed_image_creation
* @param \$fixed_path_from_filemanager
* @param \$fixed_image_creation_name_to_prepend
* @param \$fixed_image_creation_to_append
* @param \$fixed_image_creation_width
* @param \$fixed_image_creation_height
* @param \$fixed_image_creation_option
*
* @return bool
*/
function new_thumbnails_creation(\$targetPath, \$targetFile, \$name, \$current_path, \$relative_image_creation, \$relative_path_from_current_pos, \$relative_image_creation_name_to_prepend, \$relative_image_creation_name_to_append, \$relative_image_creation_width, \$relative_image_creation_height, \$relative_image_creation_option, \$fixed_image_creation, \$fixed_path_from_filemanager, \$fixed_image_creation_name_to_prepend, \$fixed_image_creation_to_append, \$fixed_image_creation_width, \$fixed_image_creation_height, \$fixed_image_creation_option)
{
\t//create relative thumbs
\t\$all_ok = true;
\tif (\$relative_image_creation)
\t{
\t\tforeach (\$relative_path_from_current_pos as \$k => \$path)
\t\t{
\t\t\tif (\$path != \"\" && \$path[ strlen(\$path) - 1 ] != \"/\")
\t\t\t{
\t\t\t\t\$path .= \"/\";
\t\t\t}
\t\t\tif ( ! file_exists(\$targetPath . \$path))
\t\t\t{
\t\t\t\tcreate_folder(\$targetPath . \$path, false);
\t\t\t}
\t\t\t\$info = pathinfo(\$name);
\t\t\tif ( ! endsWith(\$targetPath, \$path))
\t\t\t{
\t\t\t\tif ( ! create_img(\$targetFile, \$targetPath . \$path . \$relative_image_creation_name_to_prepend[ \$k ] . \$info['filename'] . \$relative_image_creation_name_to_append[ \$k ] . \".\" . \$info['extension'], \$relative_image_creation_width[ \$k ], \$relative_image_creation_height[ \$k ], \$relative_image_creation_option[ \$k ]))
\t\t\t\t{
\t\t\t\t\t\$all_ok = false;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t//create fixed thumbs
\tif (\$fixed_image_creation)
\t{
\t\tforeach (\$fixed_path_from_filemanager as \$k => \$path)
\t\t{
\t\t\tif (\$path != \"\" && \$path[ strlen(\$path) - 1 ] != \"/\")
\t\t\t{
\t\t\t\t\$path .= \"/\";
\t\t\t}
\t\t\t\$base_dir = \$path . substr_replace(\$targetPath, '', 0, strlen(\$current_path));
\t\t\tif ( ! file_exists(\$base_dir))
\t\t\t{
\t\t\t\tcreate_folder(\$base_dir, false);
\t\t\t}
\t\t\t\$info = pathinfo(\$name);
\t\t\tif ( ! create_img(\$targetFile, \$base_dir . \$fixed_image_creation_name_to_prepend[ \$k ] . \$info['filename'] . \$fixed_image_creation_to_append[ \$k ] . \".\" . \$info['extension'], \$fixed_image_creation_width[ \$k ], \$fixed_image_creation_height[ \$k ], \$fixed_image_creation_option[ \$k ]))
\t\t\t{
\t\t\t\t\$all_ok = false;
\t\t\t}
\t\t}
\t}

\treturn \$all_ok;
}


/**
* Get a remote file, using whichever mechanism is enabled
*
* @param  string  \$url
*
* @return  bool|mixed|string
*/
function get_file_by_url(\$url)
{
\tif (ini_get('allow_url_fopen'))
\t{
\t\t\$arrContextOptions=array(
\t\t    \"ssl\"=>array(
\t\t        \"verify_peer\"=>false,
\t\t        \"verify_peer_name\"=>false,
\t\t    ),
\t\t);
\t\treturn file_get_contents(\$url, false, stream_context_create(\$arrContextOptions));
\t}
\tif ( ! function_exists('curl_version'))
\t{
\t\treturn false;
\t}

\t\$ch = curl_init();

\tcurl_setopt(\$ch, CURLOPT_HEADER, 0);
\tcurl_setopt(\$ch, CURLOPT_RETURNTRANSFER, 1);
\tcurl_setopt(\$ch, CURLOPT_URL, \$url);

\t\$data = curl_exec(\$ch);
\tcurl_close(\$ch);

\treturn \$data;
}

/**
* test for dir/file writability properly
*
* @param  string  \$dir
*
* @return  bool
*/
function is_really_writable(\$dir)
{
\t\$dir = rtrim(\$dir, '/');
\t// linux, safe off
\tif (DIRECTORY_SEPARATOR == '/' && @ini_get(\"safe_mode\") == false)
\t{
\t\treturn is_writable(\$dir);
\t}

\t// Windows, safe ON. (have to write a file :S)
\tif (is_dir(\$dir))
\t{
\t\t\$dir = \$dir . '/' . md5(mt_rand(1, 1000) . mt_rand(1, 1000));

\t\tif ((\$fp = @fopen(\$dir, 'ab')) === false)
\t\t{
\t\t\treturn false;
\t\t}

\t\tfclose(\$fp);
\t\t@chmod(\$dir, 0755);
\t\t@unlink(\$dir);

\t\treturn true;
\t}
\telseif ( ! is_file(\$dir) || (\$fp = @fopen(\$dir, 'ab')) === false)
\t{
\t\treturn false;
\t}

\tfclose(\$fp);

\treturn true;
}

/**
* Check if a function is callable.
* Some servers disable copy,rename etc.
*
* @parm  string  \$name
*
* @return  bool
*/
function is_function_callable(\$name)
{
\tif (function_exists(\$name) === false)
\t{
\t\treturn false;
\t}
\t\$disabled = explode(',', ini_get('disable_functions'));

\treturn ! in_array(\$name, \$disabled);
}

/**
* recursivly copies everything
*
* @param  string  \$source
* @param  string  \$destination
* @param  bool    \$is_rec
*/
function rcopy(\$source, \$destination, \$is_rec = false)
{
\tif (is_dir(\$source))
\t{
\t\tif (\$is_rec === false)
\t\t{
\t\t\t\$pinfo = pathinfo(\$source);
\t\t\t\$destination = rtrim(\$destination, '/') . DIRECTORY_SEPARATOR . \$pinfo['basename'];
\t\t}
\t\tif (is_dir(\$destination) === false)
\t\t{
\t\t\tmkdir(\$destination, 0755, true);
\t\t}

\t\t\$files = scandir(\$source);
\t\tforeach (\$files as \$file)
\t\t{
\t\t\tif (\$file != \".\" && \$file != \"..\")
\t\t\t{
\t\t\t\trcopy(\$source . DIRECTORY_SEPARATOR . \$file, rtrim(\$destination, '/') . DIRECTORY_SEPARATOR . \$file, true);
\t\t\t}
\t\t}
\t}
\telse
\t{
\t\tif (file_exists(\$source))
\t\t{
\t\t\tif (is_dir(\$destination) === true)
\t\t\t{
\t\t\t\t\$pinfo = pathinfo(\$source);
\t\t\t\t\$dest2 = rtrim(\$destination, '/') . DIRECTORY_SEPARATOR . \$pinfo['basename'];
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t\$dest2 = \$destination;
\t\t\t}

\t\t\tcopy(\$source, \$dest2);
\t\t}
\t}
}




/**
* recursivly renames everything
*
* I know copy and rename could be done with just one function
* but i split the 2 because sometimes rename fails on windows
* Need more feedback from users and refactor if needed
*
* @param  string  \$source
* @param  string  \$destination
* @param  bool    \$is_rec
*/
function rrename(\$source, \$destination, \$is_rec = false)
{
\tif (is_dir(\$source))
\t{
\t\tif (\$is_rec === false)
\t\t{
\t\t\t\$pinfo = pathinfo(\$source);
\t\t\t\$destination = rtrim(\$destination, '/') . DIRECTORY_SEPARATOR . \$pinfo['basename'];
\t\t}
\t\tif (is_dir(\$destination) === false)
\t\t{
\t\t\tmkdir(\$destination, 0755, true);
\t\t}

\t\t\$files = scandir(\$source);
\t\tforeach (\$files as \$file)
\t\t{
\t\t\tif (\$file != \".\" && \$file != \"..\")
\t\t\t{
\t\t\t\trrename(\$source . DIRECTORY_SEPARATOR . \$file, rtrim(\$destination, '/') . DIRECTORY_SEPARATOR . \$file, true);
\t\t\t}
\t\t}
\t}
\telse
\t{
\t\tif (file_exists(\$source))
\t\t{
\t\t\tif (is_dir(\$destination) === true)
\t\t\t{
\t\t\t\t\$pinfo = pathinfo(\$source);
\t\t\t\t\$dest2 = rtrim(\$destination, '/') . DIRECTORY_SEPARATOR . \$pinfo['basename'];
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t\$dest2 = \$destination;
\t\t\t}

\t\t\trename(\$source, \$dest2);
\t\t}
\t}
}

// On windows rename leaves folders sometime
// This will clear leftover folders
// After more feedback will merge it with rrename
function rrename_after_cleaner(\$source)
{
\t\$files = scandir(\$source);

\tforeach (\$files as \$file)
\t{
\t\tif (\$file != \".\" && \$file != \"..\")
\t\t{
\t\t\tif (is_dir(\$source . DIRECTORY_SEPARATOR . \$file))
\t\t\t{
\t\t\t\trrename_after_cleaner(\$source . DIRECTORY_SEPARATOR . \$file);
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tunlink(\$source . DIRECTORY_SEPARATOR . \$file);
\t\t\t}
\t\t}
\t}

\treturn rmdir(\$source);
}

/**
* Recursive chmod
* @param  string  \$source
* @param  int     \$mode
* @param  string  \$rec_option
* @param  bool    \$is_rec
*/
function rchmod(\$source, \$mode, \$rec_option = \"none\", \$is_rec = false)
{
\tif (\$rec_option == \"none\")
\t{
\t\tchmod(\$source, \$mode);
\t}
\telse
\t{
\t\tif (\$is_rec === false)
\t\t{
\t\t\tchmod(\$source, \$mode);
\t\t}

\t\t\$files = scandir(\$source);

\t\tforeach (\$files as \$file)
\t\t{
\t\t\tif (\$file != \".\" && \$file != \"..\")
\t\t\t{
\t\t\t\tif (is_dir(\$source . DIRECTORY_SEPARATOR . \$file))
\t\t\t\t{
\t\t\t\t\tif (\$rec_option == \"folders\" || \$rec_option == \"both\")
\t\t\t\t\t{
\t\t\t\t\t\tchmod(\$source . DIRECTORY_SEPARATOR . \$file, \$mode);
\t\t\t\t\t}
\t\t\t\t\trchmod(\$source . DIRECTORY_SEPARATOR . \$file, \$mode, \$rec_option, true);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tif (\$rec_option == \"files\" || \$rec_option == \"both\")
\t\t\t\t\t{
\t\t\t\t\t\tchmod(\$source . DIRECTORY_SEPARATOR . \$file, \$mode);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}
}

/**
* @param  string  \$input
* @param  bool    \$trace
* @param  bool    \$halt
*/
function debugger(\$input, \$trace = false, \$halt = false)
{
\tob_start();

\techo \"<br>----- DEBUG DUMP -----\";
\techo \"<pre>\";
\tvar_dump(\$input);
\techo \"</pre>\";

\tif (\$trace)
\t{
\t\tif (is_php('5.3.6'))
\t\t{
\t\t\t\$debug = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
\t\t}
\t\telse
\t\t{
\t\t\t\$debug = debug_backtrace(false);
\t\t}

\t\techo \"<br>-----STACK TRACE-----\";
\t\techo \"<pre>\";
\t\tvar_dump(\$debug);
\t\techo \"</pre>\";
\t}

\techo \"</pre>\";
\techo \"---------------------------<br>\";

\t\$ret = ob_get_contents();
\tob_end_clean();

\techo \$ret;

\tif (\$halt == true)
\t{
\t\texit();
\t}
}

/**
* @param  string  \$version
*
* @return  bool
*/
function is_php(\$version = '5.0.0')
{
\tstatic \$phpVer;
\t\$version = (string) \$version;

\tif ( ! isset(\$phpVer[ \$version ]))
\t{
\t\t\$phpVer[ \$version ] = (version_compare(PHP_VERSION, \$version) < 0) ? false : true;
\t}

\treturn \$phpVer[ \$version ];
}

/**
* Return the caller location if set in config.php
* @param  string  \$version
*
* @return  bool
*/
function AddErrorLocation()
{
\tif (defined('DEBUG_ERROR_MESSAGE') and DEBUG_ERROR_MESSAGE) {
\t\t\$pile=debug_backtrace();
\t\treturn \" (@\".\$pile[0][\"file\"].\"#\".\$pile[0][\"line\"].\")\";
\t}
\treturn \"\";
}
?>
";
        
        $__internal_49f5ee74d2ae2626b54d8dafe07da42f553d0ed390df1c973093f551fcf5646b->leave($__internal_49f5ee74d2ae2626b54d8dafe07da42f553d0ed390df1c973093f551fcf5646b_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/include/utils.php";
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

if (\$_SESSION['RF'][\"verify\"] != \"RESPONSIVEfilemanager\")
{
\tdie('forbiden');
}
require dirname(__FILE__) . '/Response.php';

if ( ! function_exists('response'))
{
\t/**
\t* Response construction helper
\t*
\t* @param string \$content
\t* @param int    \$statusCode
\t* @param array  \$headers
\t*
\t* @return \\Response|\\Illuminate\\Http\\Response
\t*/
\tfunction response(\$content = '', \$statusCode = 200, \$headers = array())
\t{
\t\t\$responseClass = class_exists('Illuminate\\Http\\Response') ? '\\Illuminate\\Http\\Response' : 'Response';

\t\treturn new \$responseClass(\$content, \$statusCode, \$headers);
\t}
}

if ( ! function_exists('trans'))
{
\t// language
\tif ( ! isset(\$_SESSION['RF']['language'])
\t\t|| file_exists('lang/' . basename(\$_SESSION['RF']['language']) . '.php') === false
\t\t|| ! is_readable('lang/' . basename(\$_SESSION['RF']['language']) . '.php')
\t)
\t{
\t\t\$lang = \$default_language;

\t\tif (isset(\$_GET['lang']) && \$_GET['lang'] != 'undefined' && \$_GET['lang'] != '')
\t\t{
\t\t\t\$lang = fix_get_params(\$_GET['lang']);
\t\t\t\$lang = trim(\$lang);
\t\t}

\t\tif (\$lang != \$default_language)
\t\t{
\t\t\t\$path_parts = pathinfo(\$lang);
\t\t\t\$lang = \$path_parts['basename'];
\t\t\t\$languages = include 'lang/languages.php';
\t\t}

\t\t// add lang file to session for easy include
\t\t\$_SESSION['RF']['language'] = \$lang;
\t}
\telse
\t{
\t\tif(file_exists('lang/languages.php')){
\t\t\t\$languages = include 'lang/languages.php';
\t\t}else{
\t\t\t\$languages = include '../lang/languages.php';
\t\t}

\t\tif(array_key_exists(\$_SESSION['RF']['language'],\$languages)){
\t\t\t\$lang = \$_SESSION['RF']['language'];
\t\t}else{
\t\t\tresponse(trans('Lang_Not_Found').AddErrorLocation())->send();
\t\t\texit;
\t\t}

\t}
\tif(file_exists('lang/' . \$lang . '.php')){
\t\t\$lang_vars = include 'lang/' . \$lang . '.php';
\t}else{
\t\t\$lang_vars = include (dirname(dirname(__FILE__)) . '/lang/' . \$lang . '.php');
\t}

\tif ( ! is_array(\$lang_vars))
\t{
\t\t\$lang_vars = array();
\t}

\t\$GLOBALS['lang_vars'] = \$lang_vars;
\t\$GLOBALS['default_language'] = \$default_language;

\t/**
\t* Translate language variable
\t*
\t* @param \$var string name
\t*
\t* @return string translated variable
\t*/
\tfunction trans(\$var)
\t{
\t\tglobal \$lang_vars;

\t\treturn (array_key_exists(\$var, \$lang_vars)) ? \$lang_vars[ \$var ] : \$var;
\t}
}

/**
* Delete directory
*
* @param  string  \$dir
*
* @return  bool
*/
function deleteDir(\$dir,\$ftp = null, \$config = null)
{
\tif(\$ftp){

\t\ttry{
\t\t\t\$ftp->rmdir(\$dir);
\t\t\treturn true;

\t\t}catch(FtpClient\\FtpException \$e){
\t\t\treturn null;
\t\t}

\t}else{
\t\tif ( ! file_exists(\$dir))
\t\t{
\t\t\treturn false;
\t\t}
\t\tif ( ! is_dir(\$dir))
\t\t{
\t\t\treturn unlink(\$dir);
\t\t}
\t\tforeach (scandir(\$dir) as \$item)
\t\t{
\t\t\tif (\$item == '.' || \$item == '..')
\t\t\t{
\t\t\t\tcontinue;
\t\t\t}
\t\t\tif ( ! deleteDir(\$dir . DIRECTORY_SEPARATOR . \$item))
\t\t\t{
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t}

\treturn rmdir(\$dir);
}

/**
* Make a file copy
*
* @param  string  \$old_path
* @param  string  \$name      New file name without extension
*
* @return  bool
*/
function duplicate_file( \$old_path, \$name, \$ftp = null, \$config = null )
{
\t\$info = pathinfo(\$old_path);
\t\$new_path = \$info['dirname'] . \"/\" . \$name . \".\" . \$info['extension'];
\tif(\$ftp){
\t\ttry{
\t\t\t\$tmp = time().\$name . \".\" . \$info['extension'];
\t\t\t\$ftp->get(\$tmp, \"/\".\$old_path, FTP_BINARY);
\t\t\t\$ftp->put(\"/\".\$new_path, \$tmp, FTP_BINARY);
\t\t\tunlink(\$tmp);
\t\t\treturn true;

\t\t}catch(FtpClient\\FtpException \$e){
\t\t\treturn null;
\t\t}
\t}else{
\t\tif (file_exists(\$old_path))
\t\t{
\t\t\tif (file_exists(\$new_path) && \$old_path == \$new_path)
\t\t\t{
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn copy(\$old_path, \$new_path);
\t\t}
\t}
}


/**
* Rename file
*
* @param  string  \$old_path         File to rename
* @param  string  \$name             New file name without extension
* @param  bool    \$transliteration
*
* @return bool
*/
function rename_file(\$old_path, \$name, \$ftp = null, \$config = null)
{
\t\$name = fix_filename(\$name, \$config);
\t\$info = pathinfo(\$old_path);
\t\$new_path = \$info['dirname'] . \"/\" . \$name . \".\" . \$info['extension'];
\tif(\$ftp){
\t\ttry{
\t\t\treturn \$ftp->rename(\"/\".\$old_path, \"/\".\$new_path);
\t\t}catch(FtpClient\\FtpException \$e){
\t\t\treturn false;
\t\t}
\t}else{
\t\tif (file_exists(\$old_path))
\t\t{
\t\t\t\$new_path = \$info['dirname'] . \"/\" . \$name . \".\" . \$info['extension'];
\t\t\tif (file_exists(\$new_path) && \$old_path == \$new_path)
\t\t\t{
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn rename(\$old_path, \$new_path);
\t\t}
\t}
}


function url_exists(\$url){
    if (!\$fp = curl_init(\$url)) return false;
    return true;
}


function tempdir() {
    \$tempfile=tempnam(sys_get_temp_dir(),'');
    if (file_exists(\$tempfile)) { unlink(\$tempfile); }
    mkdir(\$tempfile);
    if (is_dir(\$tempfile)) { return \$tempfile; }
}


/**
* Rename directory
*
* @param  string  \$old_path         Directory to rename
* @param  string  \$name             New directory name
* @param  bool    \$transliteration
*
* @return bool
*/
function rename_folder(\$old_path, \$name, \$ftp = null, \$config = null)
{
\t\$name = fix_filename(\$name, \$config, true);
\t\$new_path = fix_dirname(\$old_path) . \"/\" . \$name;
\tif(\$ftp){
\t\tif(\$ftp->chdir(\"/\".\$old_path)){
\t\t\tif(@\$ftp->chdir(\$new_path)){
\t\t\t\treturn false;
\t\t\t}
\t\t\treturn \$ftp->rename(\"/\".\$old_path, \"/\".\$new_path);
\t\t}
\t}else{
\t\tif (file_exists(\$old_path))
\t\t{
\t\t\tif (file_exists(\$new_path) && \$old_path == \$new_path)
\t\t\t{
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn rename(\$old_path, \$new_path);
\t\t}
\t}
}

function ftp_con(\$config){
\tif(isset(\$config['ftp_host']) && \$config['ftp_host']){
\t\t// *** Include the class
\t\tinclude('include/FtpClient.php');
\t\tinclude('include/FtpException.php');
\t\tinclude('include/FtpWrapper.php');

\t\t\$ftp = new \\FtpClient\\FtpClient();
\t\ttry{
\t\t\t\$ftp->connect(\$config['ftp_host'],\$config['ftp_ssl'],\$config['ftp_port']);
\t\t\t\$ftp->login(\$config['ftp_user'], \$config['ftp_pass']);
\t\t\t\$ftp->pasv(true);
\t\t\treturn \$ftp;
\t\t}catch(FtpClient\\FtpException \$e){
\t\t\techo \"Error: \";
\t\t\techo \$e->getMessage();
\t\t\techo \" to server \";
\t\t\t\$tmp = \$e->getTrace();
\t\t\techo \$tmp[0]['args'][0];
\t\t\techo \"<br/>Please check configurations\";
\t\t\tdie();
\t\t}
\t}else{
\t\treturn false;
\t}
}

/**
* Create new image from existing file
*
* @param  string  \$imgfile    Source image file name
* @param  string  \$imgthumb   Thumbnail file name
* @param  int     \$newwidth   Thumbnail width
* @param  int     \$newheight  Optional thumbnail height
* @param  string  \$option     Type of resize
*
* @return bool
* @throws \\Exception
*/
function create_img(\$imgfile, \$imgthumb, \$newwidth, \$newheight = null, \$option = \"crop\", \$ftp=false,\$config = array())
{
\t\$result = false;
\tif(\$ftp ){
\t\tif(url_exists(\$imgfile)){
\t\t\t\$temp = tempnam('/tmp','RF');
\t\t\tunlink(\$temp);
\t\t\t\$temp .=\".\".substr(strrchr(\$imgfile,'.'),1);
\t\t\t\$handle = fopen(\$temp, \"w\");
\t\t\tfwrite(\$handle, file_get_contents(\$imgfile));
\t\t\tfclose(\$handle);
\t\t\t\$imgfile= \$temp;
\t\t\t\$save_ftp = \$imgthumb;
\t\t\t\$imgthumb = \$temp;
\t\t}
\t}
\tif(file_exists(\$imgfile) || strpos(\$imgfile,'http')===0){
\t\tif (strpos(\$imgfile,'http')===0 || image_check_memory_usage(\$imgfile, \$newwidth, \$newheight))
\t\t{
\t\t\trequire_once('php_image_magician.php');
\t\t\ttry{
\t\t\t\t\$magicianObj = new imageLib(\$imgfile);
\t\t\t\t\$magicianObj->resizeImage(\$newwidth, \$newheight, \$option);
\t\t\t\t\$magicianObj->saveImage(\$imgthumb, 80);
\t\t\t}catch (Exception \$e){
\t\t\t\treturn false;
\t\t\t}
\t\t\t\$result = true;
\t\t}
\t}
\tif(\$result && \$ftp ){
\t\t\$ftp->put(\$save_ftp, \$imgthumb, FTP_BINARY);
\t\tunlink(\$imgthumb);
\t}

\treturn \$result;
}

/**
* Convert convert size in bytes to human readable
*
* @param  int  \$size
*
* @return  string
*/
function makeSize(\$size)
{
\t\$units = array( 'B', 'KB', 'MB', 'GB', 'TB' );
\t\$u = 0;
\twhile ((round(\$size / 1024) > 0) && (\$u < 4))
\t{
\t\t\$size = \$size / 1024;
\t\t\$u++;
\t}

\treturn (number_format(\$size, 0) . \" \" . trans(\$units[ \$u ]));
}

/**
* Determine directory size
*
* @param  string  \$path
*
* @return  int
*/
function folder_info(\$path,\$count_hidden=true)
{
\tglobal \$hidden_folders,\$hidden_files;
\t\$total_size = 0;
\t\$files = scandir(\$path);
\t\$cleanPath = rtrim(\$path, '/') . '/';
\t\$files_count = 0;
\t\$folders_count = 0;
\tforeach (\$files as \$t)
\t{
\t\tif (\$t != \".\" && \$t != \"..\")
\t\t{
\t\t\tif (\$count_hidden or !(in_array(\$t,\$hidden_folders) or in_array(\$t,\$hidden_files)))
\t\t\t{
\t\t\t\t\$currentFile = \$cleanPath . \$t;
\t\t\t\tif (is_dir(\$currentFile))
\t\t\t\t{
\t\t\t\t\tlist(\$size,\$tmp,\$tmp1) = folder_info(\$currentFile);
\t\t\t\t\t\$total_size += \$size;
\t\t\t\t\t\$folders_count ++;
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$size = filesize(\$currentFile);
\t\t\t\t\t\$total_size += \$size;
\t\t\t\t\t\$files_count++;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn array(\$total_size,\$files_count,\$folders_count);
}
/**
* Get number of files in a directory
*
* @param  string  \$path
*
* @return  int
*/
function filescount(\$path,\$count_hidden=true)
{
\tglobal \$hidden_folders,\$hidden_files;
\t\$total_count = 0;
\t\$files = scandir(\$path);
\t\$cleanPath = rtrim(\$path, '/') . '/';

\tforeach (\$files as \$t)
\t{
\t\tif (\$t != \".\" && \$t != \"..\")
\t\t{
\t\t\tif (\$count_hidden or !(in_array(\$t,\$hidden_folders) or in_array(\$t,\$hidden_files)))
\t\t\t{
\t\t\t\t\$currentFile = \$cleanPath . \$t;
\t\t\t\tif (is_dir(\$currentFile))
\t\t\t\t{
\t\t\t\t\t\$size = filescount(\$currentFile);
\t\t\t\t\t\$total_count += \$size;
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$total_count += 1;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn \$total_count;
}
/**
* check if the current folder size plus the added size is over the overall size limite
*
* @param  int  \$sizeAdded
*
* @return  bool
*/
function checkresultingsize(\$sizeAdded)
{
\tglobal \$MaxSizeTotal,\$current_path;
\tif (\$MaxSizeTotal !== false && is_int(\$MaxSizeTotal)) {
\t\tlist(\$sizeCurrentFolder,\$fileCurrentNum,\$foldersCurrentCount) = folder_info(\$current_path,false);
\t\t// overall size over limit
\t\tif ((\$MaxSizeTotal * 1024 * 1024) < (\$sizeCurrentFolder + \$sizeAdded)) {
\t\t\treturn false;
\t\t}
\t}
\treturn true;
}

/**
* Create directory for images and/or thumbnails
*
* @param  string  \$path
* @param  string  \$path_thumbs
*/
function create_folder(\$path = null, \$path_thumbs = null,\$ftp = null,\$config = null)
{
\tif(\$ftp){
\t\t\$ftp->mkdir(\$path);
\t\t\$ftp->mkdir(\$path_thumbs);
\t}else{
\t\t\$oldumask = umask(0);
\t\tif (\$path && ! file_exists(\$path))
\t\t{
\t\t\tmkdir(\$path, 0755, true);
\t\t} // or even 01777 so you get the sticky bit set
\t\tif (\$path_thumbs && ! file_exists(\$path_thumbs))
\t\t{
\t\t\tmkdir(\$path_thumbs, 0755, true) or die(\"\$path_thumbs cannot be found\");
\t\t} // or even 01777 so you get the sticky bit set
\t\tumask(\$oldumask);
\t}
}

/**
* Get file extension present in directory
*
* @param  string  \$path
* @param  string  \$ext
*/
function check_files_extensions_on_path(\$path, \$ext)
{
\tif ( ! is_dir(\$path))
\t{
\t\t\$fileinfo = pathinfo(\$path);
\t\tif ( ! in_array(mb_strtolower(\$fileinfo['extension']), \$ext))
\t\t{
\t\t\tunlink(\$path);
\t\t}
\t}
\telse
\t{
\t\t\$files = scandir(\$path);
\t\tforeach (\$files as \$file)
\t\t{
\t\t\tcheck_files_extensions_on_path(trim(\$path, '/') . \"/\" . \$file, \$ext);
\t\t}
\t}
}

/**
* Get file extension present in PHAR file
*
* @param  string  \$phar
* @param  array   \$files
* @param  string  \$basepath
* @param  string  \$ext
*/
function check_files_extensions_on_phar(\$phar, &\$files, \$basepath, \$ext)
{
\tforeach (\$phar as \$file)
\t{
\t\tif (\$file->isFile())
\t\t{
\t\t\tif (in_array(mb_strtolower(\$file->getExtension()), \$ext))
\t\t\t{
\t\t\t\t\$files[] = \$basepath . \$file->getFileName();
\t\t\t}
\t\t}
\t\telse
\t\t{
\t\t\tif (\$file->isDir())
\t\t\t{
\t\t\t\t\$iterator = new DirectoryIterator(\$file);
\t\t\t\tcheck_files_extensions_on_phar(\$iterator, \$files, \$basepath . \$file->getFileName() . '/', \$ext);
\t\t\t}
\t\t}
\t}
}

/**
* Cleanup input
*
* @param  string  \$str
*
* @return  string
*/
function fix_get_params(\$str)
{
\treturn strip_tags(preg_replace(\"/[^a-zA-Z0-9\\.\\[\\]_| -]/\", '', \$str));
}

/**
* Cleanup filename
*
* @param  string  \$str
* @param  bool    \$transliteration
* @param  bool    \$convert_spaces
* @param  string  \$replace_with
* @param  bool    \$is_folder
*
* @return string
*/
function fix_filename(\$str, \$config, \$is_folder = false)
{
\tif (\$config['convert_spaces'])
\t{
\t\t\$str = str_replace(' ', \$config['replace_with'], \$str);
\t}

\tif (\$config['transliteration'])
\t{
\t\tif (!mb_detect_encoding(\$str, 'UTF-8', true))
\t\t{
\t\t\t\$str = utf8_encode(\$str);
\t\t}
\t\tif (function_exists('transliterator_transliterate'))
\t\t{
\t\t\t\$str = transliterator_transliterate('Any-Latin; Latin-ASCII', \$str);
\t\t}
\t\telse
\t\t{
\t\t\t\$str = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', \$str);
\t\t}

\t\t\$str = preg_replace(\"/[^a-zA-Z0-9\\.\\[\\]_| -]/\", '', \$str);
\t}

\t\$str = str_replace(array( '\"', \"'\", \"/\", \"\\\\\" ), \"\", \$str);
\t\$str = strip_tags(\$str);

\t// Empty or incorrectly transliterated filename.
\t// Here is a point: a good file UNKNOWN_LANGUAGE.jpg could become .jpg in previous code.
\t// So we add that default 'file' name to fix that issue.
\tif (strpos(\$str, '.') === 0 && \$is_folder === false)
\t{
\t\t\$str = 'file' . \$str;
\t}

\treturn trim(\$str);
}

/**
* Cleanup directory name
*
* @param  string  \$str
*
* @return  string
*/
function fix_dirname(\$str)
{
\treturn str_replace('~', ' ', dirname(str_replace(' ', '~', \$str)));
}

/**
* Correct strtoupper handling
*
* @param  string  \$str
*
* @return  string
*/
function fix_strtoupper(\$str)
{
\tif (function_exists('mb_strtoupper'))
\t{
\t\treturn mb_strtoupper(\$str);
\t}
\telse
\t{
\t\treturn strtoupper(\$str);
\t}
}

/**
* Correct strtolower handling
*
* @param  string  \$str
*
* @return  string
*/
function fix_strtolower(\$str)
{
\tif (function_exists('mb_strtoupper'))
\t{
\t\treturn mb_strtolower(\$str);
\t}
\telse
\t{
\t\treturn strtolower(\$str);
\t}
}

function fix_path(\$path, \$config)
{
\t\$info = pathinfo(\$path);
\t\$tmp_path = \$info['dirname'];
\t\$str = fix_filename(\$info['filename'], \$config);
\tif (\$tmp_path != \"\")
\t{
\t\treturn \$tmp_path . DIRECTORY_SEPARATOR . \$str;
\t}
\telse
\t{
\t\treturn \$str;
\t}
}

/**
* @param  \$current_path
* @param  \$fld
*
* @return  bool
*/
function config_loading(\$current_path, \$fld)
{
\tif (file_exists(\$current_path . \$fld . \".config\"))
\t{
\t\trequire_once(\$current_path . \$fld . \".config\");

\t\treturn true;
\t}
\techo \"!!!!\" . \$parent = fix_dirname(\$fld);
\tif (\$parent != \".\" && ! empty(\$parent))
\t{
\t\tconfig_loading(\$current_path, \$parent);
\t}

\treturn false;
}

/**
* Check if memory is enough to process image
*
* @param  string  \$img
* @param  int     \$max_breedte
* @param  int     \$max_hoogte
*
* @return bool
*/
function image_check_memory_usage(\$img, \$max_breedte, \$max_hoogte)
{
\tif (file_exists(\$img))
\t{
\t\t\$K64 = 65536; // number of bytes in 64K
\t\t\$memory_usage = memory_get_usage();
\t\t\$memory_limit = abs(intval(str_replace('M', '', ini_get('memory_limit')) * 1024 * 1024));
\t\t\$image_properties = getimagesize(\$img);
\t\t\$image_width = \$image_properties[0];
\t\t\$image_height = \$image_properties[1];
\t\tif (isset(\$image_properties['bits']))
\t\t\t\$image_bits = \$image_properties['bits'];
\t\telse
\t\t\t\$image_bits = 0;
\t\t\$image_memory_usage = \$K64 + (\$image_width * \$image_height * (\$image_bits) * 2);
\t\t\$thumb_memory_usage = \$K64 + (\$max_breedte * \$max_hoogte * (\$image_bits) * 2);
\t\t\$memory_needed = abs(intval(\$memory_usage + \$image_memory_usage + \$thumb_memory_usage));

\t\tif (\$memory_needed > \$memory_limit)
\t\t{
\t\t\treturn false;
\t\t}
\t\telse
\t\t{
\t\t\treturn true;
\t\t}
\t}
\telse
\t{
\t\treturn false;
\t}
}

/**
* Check is string is ended with needle
*
* @param  string  \$haystack
* @param  string  \$needle
*
* @return  bool
*/
function endsWith(\$haystack, \$needle)
{
\treturn \$needle === \"\" || substr(\$haystack, -strlen(\$needle)) === \$needle;
}

/**
* TODO REFACTOR THIS!
*
* @param \$targetPath
* @param \$targetFile
* @param \$name
* @param \$current_path
* @param \$relative_image_creation
* @param \$relative_path_from_current_pos
* @param \$relative_image_creation_name_to_prepend
* @param \$relative_image_creation_name_to_append
* @param \$relative_image_creation_width
* @param \$relative_image_creation_height
* @param \$relative_image_creation_option
* @param \$fixed_image_creation
* @param \$fixed_path_from_filemanager
* @param \$fixed_image_creation_name_to_prepend
* @param \$fixed_image_creation_to_append
* @param \$fixed_image_creation_width
* @param \$fixed_image_creation_height
* @param \$fixed_image_creation_option
*
* @return bool
*/
function new_thumbnails_creation(\$targetPath, \$targetFile, \$name, \$current_path, \$relative_image_creation, \$relative_path_from_current_pos, \$relative_image_creation_name_to_prepend, \$relative_image_creation_name_to_append, \$relative_image_creation_width, \$relative_image_creation_height, \$relative_image_creation_option, \$fixed_image_creation, \$fixed_path_from_filemanager, \$fixed_image_creation_name_to_prepend, \$fixed_image_creation_to_append, \$fixed_image_creation_width, \$fixed_image_creation_height, \$fixed_image_creation_option)
{
\t//create relative thumbs
\t\$all_ok = true;
\tif (\$relative_image_creation)
\t{
\t\tforeach (\$relative_path_from_current_pos as \$k => \$path)
\t\t{
\t\t\tif (\$path != \"\" && \$path[ strlen(\$path) - 1 ] != \"/\")
\t\t\t{
\t\t\t\t\$path .= \"/\";
\t\t\t}
\t\t\tif ( ! file_exists(\$targetPath . \$path))
\t\t\t{
\t\t\t\tcreate_folder(\$targetPath . \$path, false);
\t\t\t}
\t\t\t\$info = pathinfo(\$name);
\t\t\tif ( ! endsWith(\$targetPath, \$path))
\t\t\t{
\t\t\t\tif ( ! create_img(\$targetFile, \$targetPath . \$path . \$relative_image_creation_name_to_prepend[ \$k ] . \$info['filename'] . \$relative_image_creation_name_to_append[ \$k ] . \".\" . \$info['extension'], \$relative_image_creation_width[ \$k ], \$relative_image_creation_height[ \$k ], \$relative_image_creation_option[ \$k ]))
\t\t\t\t{
\t\t\t\t\t\$all_ok = false;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t//create fixed thumbs
\tif (\$fixed_image_creation)
\t{
\t\tforeach (\$fixed_path_from_filemanager as \$k => \$path)
\t\t{
\t\t\tif (\$path != \"\" && \$path[ strlen(\$path) - 1 ] != \"/\")
\t\t\t{
\t\t\t\t\$path .= \"/\";
\t\t\t}
\t\t\t\$base_dir = \$path . substr_replace(\$targetPath, '', 0, strlen(\$current_path));
\t\t\tif ( ! file_exists(\$base_dir))
\t\t\t{
\t\t\t\tcreate_folder(\$base_dir, false);
\t\t\t}
\t\t\t\$info = pathinfo(\$name);
\t\t\tif ( ! create_img(\$targetFile, \$base_dir . \$fixed_image_creation_name_to_prepend[ \$k ] . \$info['filename'] . \$fixed_image_creation_to_append[ \$k ] . \".\" . \$info['extension'], \$fixed_image_creation_width[ \$k ], \$fixed_image_creation_height[ \$k ], \$fixed_image_creation_option[ \$k ]))
\t\t\t{
\t\t\t\t\$all_ok = false;
\t\t\t}
\t\t}
\t}

\treturn \$all_ok;
}


/**
* Get a remote file, using whichever mechanism is enabled
*
* @param  string  \$url
*
* @return  bool|mixed|string
*/
function get_file_by_url(\$url)
{
\tif (ini_get('allow_url_fopen'))
\t{
\t\t\$arrContextOptions=array(
\t\t    \"ssl\"=>array(
\t\t        \"verify_peer\"=>false,
\t\t        \"verify_peer_name\"=>false,
\t\t    ),
\t\t);
\t\treturn file_get_contents(\$url, false, stream_context_create(\$arrContextOptions));
\t}
\tif ( ! function_exists('curl_version'))
\t{
\t\treturn false;
\t}

\t\$ch = curl_init();

\tcurl_setopt(\$ch, CURLOPT_HEADER, 0);
\tcurl_setopt(\$ch, CURLOPT_RETURNTRANSFER, 1);
\tcurl_setopt(\$ch, CURLOPT_URL, \$url);

\t\$data = curl_exec(\$ch);
\tcurl_close(\$ch);

\treturn \$data;
}

/**
* test for dir/file writability properly
*
* @param  string  \$dir
*
* @return  bool
*/
function is_really_writable(\$dir)
{
\t\$dir = rtrim(\$dir, '/');
\t// linux, safe off
\tif (DIRECTORY_SEPARATOR == '/' && @ini_get(\"safe_mode\") == false)
\t{
\t\treturn is_writable(\$dir);
\t}

\t// Windows, safe ON. (have to write a file :S)
\tif (is_dir(\$dir))
\t{
\t\t\$dir = \$dir . '/' . md5(mt_rand(1, 1000) . mt_rand(1, 1000));

\t\tif ((\$fp = @fopen(\$dir, 'ab')) === false)
\t\t{
\t\t\treturn false;
\t\t}

\t\tfclose(\$fp);
\t\t@chmod(\$dir, 0755);
\t\t@unlink(\$dir);

\t\treturn true;
\t}
\telseif ( ! is_file(\$dir) || (\$fp = @fopen(\$dir, 'ab')) === false)
\t{
\t\treturn false;
\t}

\tfclose(\$fp);

\treturn true;
}

/**
* Check if a function is callable.
* Some servers disable copy,rename etc.
*
* @parm  string  \$name
*
* @return  bool
*/
function is_function_callable(\$name)
{
\tif (function_exists(\$name) === false)
\t{
\t\treturn false;
\t}
\t\$disabled = explode(',', ini_get('disable_functions'));

\treturn ! in_array(\$name, \$disabled);
}

/**
* recursivly copies everything
*
* @param  string  \$source
* @param  string  \$destination
* @param  bool    \$is_rec
*/
function rcopy(\$source, \$destination, \$is_rec = false)
{
\tif (is_dir(\$source))
\t{
\t\tif (\$is_rec === false)
\t\t{
\t\t\t\$pinfo = pathinfo(\$source);
\t\t\t\$destination = rtrim(\$destination, '/') . DIRECTORY_SEPARATOR . \$pinfo['basename'];
\t\t}
\t\tif (is_dir(\$destination) === false)
\t\t{
\t\t\tmkdir(\$destination, 0755, true);
\t\t}

\t\t\$files = scandir(\$source);
\t\tforeach (\$files as \$file)
\t\t{
\t\t\tif (\$file != \".\" && \$file != \"..\")
\t\t\t{
\t\t\t\trcopy(\$source . DIRECTORY_SEPARATOR . \$file, rtrim(\$destination, '/') . DIRECTORY_SEPARATOR . \$file, true);
\t\t\t}
\t\t}
\t}
\telse
\t{
\t\tif (file_exists(\$source))
\t\t{
\t\t\tif (is_dir(\$destination) === true)
\t\t\t{
\t\t\t\t\$pinfo = pathinfo(\$source);
\t\t\t\t\$dest2 = rtrim(\$destination, '/') . DIRECTORY_SEPARATOR . \$pinfo['basename'];
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t\$dest2 = \$destination;
\t\t\t}

\t\t\tcopy(\$source, \$dest2);
\t\t}
\t}
}




/**
* recursivly renames everything
*
* I know copy and rename could be done with just one function
* but i split the 2 because sometimes rename fails on windows
* Need more feedback from users and refactor if needed
*
* @param  string  \$source
* @param  string  \$destination
* @param  bool    \$is_rec
*/
function rrename(\$source, \$destination, \$is_rec = false)
{
\tif (is_dir(\$source))
\t{
\t\tif (\$is_rec === false)
\t\t{
\t\t\t\$pinfo = pathinfo(\$source);
\t\t\t\$destination = rtrim(\$destination, '/') . DIRECTORY_SEPARATOR . \$pinfo['basename'];
\t\t}
\t\tif (is_dir(\$destination) === false)
\t\t{
\t\t\tmkdir(\$destination, 0755, true);
\t\t}

\t\t\$files = scandir(\$source);
\t\tforeach (\$files as \$file)
\t\t{
\t\t\tif (\$file != \".\" && \$file != \"..\")
\t\t\t{
\t\t\t\trrename(\$source . DIRECTORY_SEPARATOR . \$file, rtrim(\$destination, '/') . DIRECTORY_SEPARATOR . \$file, true);
\t\t\t}
\t\t}
\t}
\telse
\t{
\t\tif (file_exists(\$source))
\t\t{
\t\t\tif (is_dir(\$destination) === true)
\t\t\t{
\t\t\t\t\$pinfo = pathinfo(\$source);
\t\t\t\t\$dest2 = rtrim(\$destination, '/') . DIRECTORY_SEPARATOR . \$pinfo['basename'];
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t\$dest2 = \$destination;
\t\t\t}

\t\t\trename(\$source, \$dest2);
\t\t}
\t}
}

// On windows rename leaves folders sometime
// This will clear leftover folders
// After more feedback will merge it with rrename
function rrename_after_cleaner(\$source)
{
\t\$files = scandir(\$source);

\tforeach (\$files as \$file)
\t{
\t\tif (\$file != \".\" && \$file != \"..\")
\t\t{
\t\t\tif (is_dir(\$source . DIRECTORY_SEPARATOR . \$file))
\t\t\t{
\t\t\t\trrename_after_cleaner(\$source . DIRECTORY_SEPARATOR . \$file);
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tunlink(\$source . DIRECTORY_SEPARATOR . \$file);
\t\t\t}
\t\t}
\t}

\treturn rmdir(\$source);
}

/**
* Recursive chmod
* @param  string  \$source
* @param  int     \$mode
* @param  string  \$rec_option
* @param  bool    \$is_rec
*/
function rchmod(\$source, \$mode, \$rec_option = \"none\", \$is_rec = false)
{
\tif (\$rec_option == \"none\")
\t{
\t\tchmod(\$source, \$mode);
\t}
\telse
\t{
\t\tif (\$is_rec === false)
\t\t{
\t\t\tchmod(\$source, \$mode);
\t\t}

\t\t\$files = scandir(\$source);

\t\tforeach (\$files as \$file)
\t\t{
\t\t\tif (\$file != \".\" && \$file != \"..\")
\t\t\t{
\t\t\t\tif (is_dir(\$source . DIRECTORY_SEPARATOR . \$file))
\t\t\t\t{
\t\t\t\t\tif (\$rec_option == \"folders\" || \$rec_option == \"both\")
\t\t\t\t\t{
\t\t\t\t\t\tchmod(\$source . DIRECTORY_SEPARATOR . \$file, \$mode);
\t\t\t\t\t}
\t\t\t\t\trchmod(\$source . DIRECTORY_SEPARATOR . \$file, \$mode, \$rec_option, true);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tif (\$rec_option == \"files\" || \$rec_option == \"both\")
\t\t\t\t\t{
\t\t\t\t\t\tchmod(\$source . DIRECTORY_SEPARATOR . \$file, \$mode);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}
}

/**
* @param  string  \$input
* @param  bool    \$trace
* @param  bool    \$halt
*/
function debugger(\$input, \$trace = false, \$halt = false)
{
\tob_start();

\techo \"<br>----- DEBUG DUMP -----\";
\techo \"<pre>\";
\tvar_dump(\$input);
\techo \"</pre>\";

\tif (\$trace)
\t{
\t\tif (is_php('5.3.6'))
\t\t{
\t\t\t\$debug = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
\t\t}
\t\telse
\t\t{
\t\t\t\$debug = debug_backtrace(false);
\t\t}

\t\techo \"<br>-----STACK TRACE-----\";
\t\techo \"<pre>\";
\t\tvar_dump(\$debug);
\t\techo \"</pre>\";
\t}

\techo \"</pre>\";
\techo \"---------------------------<br>\";

\t\$ret = ob_get_contents();
\tob_end_clean();

\techo \$ret;

\tif (\$halt == true)
\t{
\t\texit();
\t}
}

/**
* @param  string  \$version
*
* @return  bool
*/
function is_php(\$version = '5.0.0')
{
\tstatic \$phpVer;
\t\$version = (string) \$version;

\tif ( ! isset(\$phpVer[ \$version ]))
\t{
\t\t\$phpVer[ \$version ] = (version_compare(PHP_VERSION, \$version) < 0) ? false : true;
\t}

\treturn \$phpVer[ \$version ];
}

/**
* Return the caller location if set in config.php
* @param  string  \$version
*
* @return  bool
*/
function AddErrorLocation()
{
\tif (defined('DEBUG_ERROR_MESSAGE') and DEBUG_ERROR_MESSAGE) {
\t\t\$pile=debug_backtrace();
\t\treturn \" (@\".\$pile[0][\"file\"].\"#\".\$pile[0][\"line\"].\")\";
\t}
\treturn \"\";
}
?>
", "@MwebAdmin/filemanager/include/utils.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/include/utils.php");
    }
}
