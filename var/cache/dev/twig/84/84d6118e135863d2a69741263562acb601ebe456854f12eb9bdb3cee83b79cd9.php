<?php

/* @MwebAdmin/filemanager/uploader/jupload.php */
class __TwigTemplate_757c92b43f9e12989375c472ebf6277ead81c8b30ae452afd242f73346b06033 extends Twig_Template
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
        $__internal_951ec287015961e18ee0c3ef25c9ed23ec1139d3f955c3ff2af24ae3afc59e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951ec287015961e18ee0c3ef25c9ed23ec1139d3f955c3ff2af24ae3afc59e9b->enter($__internal_951ec287015961e18ee0c3ef25c9ed23ec1139d3f955c3ff2af24ae3afc59e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/uploader/jupload.php"));

        // line 1
        echo "<?php

/**
 * This class manage upload, with use of the JUpload applet. It's both a sample to show how to use the applet, and
 * a class you can use directly into your own application.
 *
 * Recommandation: Don't update its code !
 *
 * By doing this, you'll be able to reuse directly any update coming from the JUpload project, instead of reporting your
 * modifications into any new version of this class. This guarantees you that your project can use the last version of
 * JUpload, without any code modification. We work so that the applet behavior remains unchanged, but from time to time,
 * a change can appear.
 *
 * Sample:
 * - See the index.php samples, in the same folder.
 *
 * Notes:
 * - maxChunkSize: this class use a default maxChunkSize of 500K (or less, depending on the script max size). This allows
 * upload of FILES OF ANY SIZE on quite all ISP hosting. If it's too big for you (the max upload size of your ISP is less
 * than 500K), or if you want no chunk at all, you can, of course, override this default value.
 *
 *
 *
 * Parameters:
 * - \$appletparams contains a map for applet parameters: key is the applet parameter name. The value is the value to transmit
 * \t\tto the applet. See the applet documentation for information on all applet parameters.
 * - \$classparams contains the parameter specific for the JUpload class below. Here are the main class parameters:
 * \t\t- demo_mode. Files are uploaded to the server, but not stored on its hard drive. That is: you can simulate the global
 * \t\tbehavior, but won't consume hard drive space. This mode is used on sourceforge web site.
 *
 *
 * Output generated for uploaded files:
 * - \$files is an array of array. This can be managed by (a) the function given in the callbackAfterUploadManagement class
 * \t\tparameter, or (b) within the page whose URL is given in the afterUploadURL applet parameter, or (c) you can Extend the
 * \t\tclass and redeclare defaultAfterUploadManagement() to your needs.
 * \tSee the defaultAfterUploadManagement() for a sample on howto manage this array.
 *
 *   This array contains:
 *     - One entry per file. Each entry is an array, that contains all files properties, stored as \$key=>\$value.
 * \t\tThe available keys are:
 * \t\t  - name: the filename, as it is now stored on the system.
 * \t\t  - size: the file size
 * \t\t  - path: the absolute path, where the file has been stored.
 * \t\t\t- fullName: the canonical file name (i.e. including the absolute path)
 * \t\t  - md5sum: the md5sum of the file, if further control is needed.
 * \t\t\t- mimetype: the calculated mime type of the file
 * \t\t  - If the formData applet parameter is used: all attributes (key and value) uploaded by the applet, are put here,
 * \t\t\trepeated for each file.
 *
 * \t\tNote: if you are using a callback function (i.e. callbackAfterUploadManagement) and you do not see a global 'object' you
 * \t\t\t\t\tare expecting then it might have been destroyed by PHP - c.f. http://bugs.php.net/bug.php?id=39693
 *
 */

class JUpload {

\tvar \$appletparams;
\tvar \$classparams;
\tvar \$files;

\tpublic function JUpload(\$appletparams = array(), \$classparams = array()) {
\t\tif (gettype(\$classparams) != 'array')
\t\t\$this->abort('Invalid type of parameter classparams: Expecting an array');
\t\tif (gettype(\$appletparams) != 'array')
\t\t\$this->abort('Invalid type of parameter appletparams: Expecting an array');

\t\t// set some defaults for the applet params
\t\tif (!isset(\$appletparams['afterUploadURL']))
\t\t\$appletparams['afterUploadURL'] = \$_SERVER['PHP_SELF'] . '?afterupload=1';
\t\tif (!isset(\$appletparams['name']))
\t\t\$appletparams['name'] = 'JUpload';
\t\tif (!isset(\$appletparams['archive']))
\t\t\$appletparams['archive'] = 'wjhk.jupload.jar';
\t\tif (!isset(\$appletparams['code']))
\t\t\$appletparams['code'] = 'wjhk.jupload2.JUploadApplet';
\t\tif (!isset(\$appletparams['debugLevel']))
\t\t\$appletparams['debugLevel'] = 0;
\t\tif (!isset(\$appletparams['httpUploadParameterType']))
\t\t\$appletparams['httpUploadParameterType'] = 'array';
\t\tif (!isset(\$appletparams['showLogWindow']))
\t\t\$appletparams['showLogWindow'] = (\$appletparams['debugLevel'] > 0) ? 'true' : 'false';
\t\tif (!isset(\$appletparams['width']))
\t\t\$appletparams['width'] = 640;
\t\tif (!isset(\$appletparams['height']))
\t\t\$appletparams['height'] = (\$appletparams['showLogWindow'] == 'true') ? 500 : 300;
\t\tif (!isset(\$appletparams['mayscript']))
\t\t\$appletparams['mayscript'] = 'true';
\t\tif (!isset(\$appletparams['scriptable']))
\t\t\$appletparams['scriptable'] = 'false';
\t\t//if (!isset(\$appletparams['stringUploadSuccess']))
\t\t\$appletparams['stringUploadSuccess'] = 'SUCCESS';
\t\t//if (!isset(\$appletparams['stringUploadError']))
\t\t\$appletparams['stringUploadError'] = 'ERROR: (.*)';
\t\t\$maxpost = \$this->tobytes(ini_get('post_max_size'));
\t\t\$maxmem = \$this->tobytes(ini_get('memory_limit'));
\t\t\$maxfs = \$this->tobytes(ini_get('upload_max_filesize'));
\t\t\$obd = ini_get('open_basedir');
\t\tif (!isset(\$appletparams['maxChunkSize'])) {
\t\t\t\$maxchunk = (\$maxpost < \$maxmem) ? \$maxpost : \$maxmem;
\t\t\t\$maxchunk = (\$maxchunk < \$maxfs) ? \$maxchunk : \$maxfs;
\t\t\t\$maxchunk /= 4;
\t\t\t\$optchunk = (500000 > \$maxchunk) ? \$maxchunk : 500000;
\t\t\t\$appletparams['maxChunkSize'] = \$optchunk;
\t\t}
\t\t\$appletparams['maxChunkSize'] = \$this->tobytes(\$appletparams['maxChunkSize']);
\t\tif (!isset(\$appletparams['maxFileSize']))
\t\t\$appletparams['maxFileSize'] = \$maxfs;
\t\t\$appletparams['maxFileSize'] = \$this->tobytes(\$appletparams['maxFileSize']);
\t\tif (isset(\$classparams['errormail'])) {
\t\t\t\$appletparams['urlToSendErrorTo'] = \$_SERVER[\"PHP_SELF\"] . '?errormail';
\t\t}

\t\t// Same for class parameters
\t\tif (!isset(\$classparams['demo_mode']))
\t\t\$classparams['demo_mode'] = false;
\t\tif (\$classparams['demo_mode']) {
\t\t\t\$classparams['create_destdir'] = false;
\t\t\t\$classparams['allow_subdirs'] = true;
\t\t\t\$classparams['allow_zerosized'] = true;
\t\t\t\$classparams['duplicate'] = 'overwrite';
\t\t}
\t\tif (!isset(\$classparams['debug_php']))\t\t\t\t\t\t\t\t\t\t\t// set true to log some messages in PHP log
\t\t\$classparams['debug_php'] = false;
\t\tif (!isset(\$this->classparams['allowed_mime_types']))\t\t\t\t// array of allowed MIME type
\t\t\$classparams['allowed_mime_types'] = 'all';
\t\tif (!isset(\$this->classparams['allowed_file_extensions'])) \t// array of allowed file extensions
\t\t\$classparams['allowed_file_extensions'] = 'all';
\t\tif (!isset(\$classparams['verbose_errors']))\t\t\t\t\t\t// shouldn't display server info on a production site!
\t\t\$classparams['verbose_errors'] = true;
\t\tif (!isset(\$classparams['session_regenerate']))
\t\t\$classparams['session_regenerate'] = false;
\t\tif (!isset(\$classparams['create_destdir']))
\t\t\$classparams['create_destdir'] = true;
\t\tif (!isset(\$classparams['allow_subdirs']))
\t\t\$classparams['allow_subdirs'] = false;
\t\tif (!isset(\$classparams['spaces_in_subdirs']))
\t\t\$classparams['spaces_in_subdirs'] = false;
\t\tif (!isset(\$classparams['convert_spaces']))         // set to true to convert spaces in filenames to _
\t\t\$classparams['convert_spaces'] = false;
\t\tif (!isset(\$classparams['allow_zerosized']))
\t\t\$classparams['allow_zerosized'] = false;
\t\tif (!isset(\$classparams['duplicate']))
\t\t\$classparams['duplicate'] = 'rename';
\t\tif (!isset(\$classparams['dirperm']))
\t\t\$classparams['dirperm'] = 0755;
\t\tif (!isset(\$classparams['fileperm']))
\t\t\$classparams['fileperm'] = 0644;
\t\tif (!isset(\$classparams['destdir'])) {
\t\t\tif (\$obd != '')
\t\t\t\$classparams['destdir'] = \$obd;
\t\t\telse
\t\t\t\$classparams['destdir'] = '/var/tmp/jupload_test';
\t\t}else{
\t\t\t\$classparams['destdir']=str_replace('~',' ',\$classparams['destdir']);
\t\t}
\t\tif (\$classparams['create_destdir']) {
\t\t\t\$_umask = umask(0); \t// override the system mask
\t\t\t@mkdir(\$classparams['destdir'], \$classparams['dirperm']);
\t\t\tumask(\$_umask);
\t\t}
\t\tif (!is_dir(\$classparams['destdir']) && is_writable(\$classparams['destdir']))
\t\t\$this->abort('Destination dir not accessible');
\t\tif (!isset(\$classparams['tmp_prefix']))
\t\t\$classparams['tmp_prefix'] = 'jutmp.';
\t\tif (!isset(\$classparams['var_prefix']))
\t\t\$classparams['var_prefix'] = 'juvar.';
\t\tif (!isset(\$classparams['jscript_wrapper']))
\t\t\$classparams['jscript_wrapper'] = 'JUploadSetProperty';
\t\tif (!isset(\$classparams['tag_jscript']))
\t\t\$classparams['tag_jscript'] = '<!--JUPLOAD_JSCRIPT-->';
\t\tif (!isset(\$classparams['tag_applet']))
\t\t\$classparams['tag_applet'] = '<!--JUPLOAD_APPLET-->';
\t\tif (!isset(\$classparams['tag_flist']))
\t\t\$classparams['tag_flist'] = '<!--JUPLOAD_FILES-->';
\t\tif (!isset(\$classparams['http_flist_start']))
\t\t\$classparams['http_flist_start'] =
            \t\t\"<table border='1'><TR><TH>Filename</TH><TH>file size</TH><TH>Relative path</TH><TH>Full name</TH><TH>md5sum</TH><TH>Specific parameters</TH></TR>\";
\t\tif (!isset(\$classparams['http_flist_end']))
\t\t\$classparams['http_flist_end'] = \"</table>\\n\";
\t\tif (!isset(\$classparams['http_flist_file_before']))
\t\t\$classparams['http_flist_file_before'] = \"<tr><td>\";
\t\tif (!isset(\$classparams['http_flist_file_between']))
\t\t\$classparams['http_flist_file_between'] = \"</td><td>\";
\t\tif (!isset(\$classparams['http_flist_file_after']))
\t\t\$classparams['http_flist_file_after'] = \"</td></tr>\\n\";

\t\t\$this->appletparams = \$appletparams;
\t\t\$this->classparams = \$classparams;
\t\t\$this->page_start();
\t}

\t/**
\t * Return an array of uploaded files * The array contains: name, size, tmp_name, error,
\t * relativePath, md5sum, mimetype, fullName, path
\t */
\tpublic function uploadedfiles() {
\t\treturn \$this->files;
\t}

\t/**
\t * Log a message on the current output, as a HTML comment.
\t */
\tprotected function logDebug(\$function, \$msg, \$htmlComment=true) {
\t\t\$output = \"[DEBUG] [\$function] \$msg\";
\t\tif (\$htmlComment) {
\t\t\techo(\"<!-- \$output -->\\r\\n\");
\t\t} else {
\t\t\techo(\"\$output\\r\\n\");
\t\t}
\t}

\t/**
\t * Log a message to the PHP log.
\t * Declared \"protected\" so it may be Extended if you require customised logging (e.g. particular log file location).
\t */
\tprotected function logPHPDebug(\$function, \$msg) {
\t\tif (\$this->classparams['debug_php'] === true) {
\t\t\t\$output = \"[DEBUG] [\$function] \".\$this->arrayexpand(\$msg);
\t\t\terror_log(\$output);
\t\t}
\t}

\tprivate function arrayexpand(\$array) {
\t\t\$output = '';
\t\tif (is_array(\$array)) {
\t\t\tforeach (\$array as \$key => \$value) {
\t\t\t\t\$output .= \"\\n \".\$key.' => '.\$this->arrayexpand(\$value);
\t\t\t}
\t\t} else {
\t\t\t\$output .= \$array;
\t\t}
\t\treturn \$output;
\t}


\t/**
\t * Convert a value ending in 'G','M' or 'K' to bytes
\t *
\t */
\tprivate function tobytes(\$val) {
\t\t\$val = trim(\$val);
\t\t\$last = fix_strtolower(\$val{strlen(\$val)-1});
\t\tswitch(\$last) {
\t\t\tcase 'g':
\t\t\t\t\$val *= 1024;
\t\t\tcase 'm':
\t\t\t\t\$val *= 1024;
\t\t\tcase 'k':
\t\t\t\t\$val *= 1024;
\t\t}
\t\treturn \$val;
\t}

\t/**
\t * Build a string, containing a javascript wrapper function
\t * for setting applet properties via JavaScript. This is necessary,
\t * because we use the \"modern\" method of including the applet (using
\t * <object> resp. <embed> tags) in order to trigger automatic JRE downloading.
\t * Therefore, in Netscape-like browsers, the applet is accessible via
\t * the document.embeds[] array while in others, it is accessible via the
\t * document.applets[] array.
\t *
\t * @return A string, containing the necessary wrapper function (named JUploadSetProperty)
\t */
\tprivate function str_jsinit() {
\t\t\$N = \"\\n\";
\t\t\$name = \$this->appletparams['name'];
\t\t\$ret = '<script type=\"text/javascript\">'.\$N;
\t\t\$ret .= '<!--'.\$N;
\t\t\$ret .= 'function '.\$this->classparams['jscript_wrapper'].'(name, value) {'.\$N;
\t\t\$ret .= '  document.applets[\"'.\$name.'\"] == null || document.applets[\"'.\$name.'\"].setProperty(name,value);'.\$N;
\t\t\$ret .= '  document.embeds[\"'.\$name.'\"] == null || document.embeds[\"'.\$name.'\"].setProperty(name,value);'.\$N;
\t\t\$ret .= '}'.\$N;
\t\t\$ret .= '//-->'.\$N;
\t\t\$ret .= '</script>';
\t\treturn \$ret;
\t}

\t/**
\t * Build a string, containing the applet tag with all parameters.
\t *
\t * @return A string, containing the applet tag
\t */
\tprivate function str_applet() {
\t\t\$N = \"\\n\";
\t\t\$params = \$this->appletparams;
\t\t// return the actual applet tag
\t\t\$ret = '<object classid = \"clsid:8AD9C840-044E-11D1-B3E9-00805F499D93\"'.\$N;
\t\t\$ret .= '  codebase = \"http://java.sun.com/update/1.5.0/jinstall-1_5-windows-i586.cab#Version=5,0,0,3\"'.\$N;
\t\t\$ret .= '  width = \"'.\$params['width'].'\"'.\$N;
\t\t\$ret .= '  height = \"'.\$params['height'].'\"'.\$N;
\t\t\$ret .= '  name = \"'.\$params['name'].'\">'.\$N;
\t\tforeach (\$params as \$key => \$val) {
\t\t\tif (\$key != 'width' && \$key != 'height')
\t\t\t\$ret .= '  <param name = \"'.\$key.'\" value = \"'.\$val.'\" />'.\$N;
\t\t}
\t\t\$ret .= '  <comment>'.\$N;
\t\t\$ret .= '    <embed'.\$N;
\t\t\$ret .= '      type = \"application/x-java-applet;version=1.5\"'.\$N;
\t\tforeach (\$params as \$key => \$val)
\t\t\$ret .= '      '.\$key.' = \"'.\$val.'\"'.\$N;
\t\t\$ret .= '      pluginspage = \"http://java.sun.com/products/plugin/index.html#download\">'.\$N;
\t\t\$ret .= '      <noembed>'.\$N;
\t\t\$ret .= '        Java 1.5 or higher plugin required.'.\$N;
\t\t\$ret .= '      </noembed>'.\$N;
\t\t\$ret .= '    </embed>'.\$N;
\t\t\$ret .= '  </comment>'.\$N;
\t\t\$ret .= '</object>';
\t\treturn \$ret;
\t}

\tprivate function abort(\$msg = '') {
\t\t\$this->cleanup();
\t\tif (\$msg != '')
\t\tdie(str_replace('(.*)',\$msg,\$this->appletparams['stringUploadError']).\"\\n\");
\t\texit;
\t}

\tprivate function warning(\$msg = '') {
\t\t\$this->cleanup();
\t\tif (\$msg != '')
\t\techo('WARNING: '.\$msg.\"\\n\");
\t\techo \$this->appletparams['stringUploadSuccess'].\"\\n\";
\t\texit;
\t}

\tprivate function cleanup() {
\t\t// remove all uploaded files of *this* request
\t\tif (isset(\$_FILES)) {
\t\t\tforeach (\$_FILES as \$key => \$val)
\t\t\t@unlink(\$val['tmp_name']);
\t\t}
\t\t// remove accumulated file, if any.
\t\t@unlink(\$this->classparams['destdir'].'/'.\$this->classparams['tmp_prefix'].session_id());
\t\t@unlink(\$this->classparams['destdir'].'/'.\$this->classparams['tmp_prefix'].'tmp'.session_id());
\t\t// reset session var
\t\t\$_SESSION['RF'][\$this->classparams['var_prefix'].'size'] = 0;
\t\treturn;
\t}

\tprivate function mkdirp(\$path) {
\t\t// create subdir (hierary) below destdir;
\t\t\$dirs = explode('/', \$path);
\t\t\$path = \$this->classparams['destdir'];
\t\tforeach (\$dirs as \$dir) {
\t\t\t\$path .= '/'.\$dir;
\t\t\tif (!file_exists(\$path)) {  // @ does NOT always supress the error!
\t\t\t\t\$_umask = umask(0); \t// override the system mask
\t\t\t\t@mkdir(\$path, \$this->classparams['dirperm']);
\t\t\t\tumask(\$_umask);
\t\t\t}
\t\t}
\t\tif (!is_dir(\$path) && is_writable(\$path))
\t\t\$this->abort('Destination dir not accessible');
\t}

\t/**
\t * This method:
\t * - Replaces some potentially dangerous characters by '_' (in the given name an relative path)
\t * - Checks if a files of the same name already exists.
\t * \t\t- If no: no problem.
\t * \t\t- If yes, and the duplicate class param is set to rename, the file is renamed.
\t * \t\t- If yes, and the duplicate class param is set to overwrite, the file is not renamed. The existing one will be erased.
\t * \t\t- If yes, and the duplicate class param is set to reject, an error is thrown.
\t */
\tprivate function dstfinal(&\$name, &\$subdir) {
\t\t\$name = preg_replace('![`\$\\\\\\\\/|]!', '_', \$name);
\t\tif (\$this->classparams['convert_spaces']) {
            \$name = str_replace(' ', '_', \$name);
\t\t}
\t\tif (\$this->classparams['allow_subdirs'] && (\$subdir != '')) {
\t\t\t\$subdir = trim(preg_replace('!\\\\\\\\!','/',\$subdir),'/');
\t\t\t\$subdir = preg_replace('![`\$|]!', '_', \$subdir);
\t\t\tif (!\$this->classparams['spaces_in_subdirs']) {
\t\t\t\t\$subdir = str_replace(' ','_',\$subdir);
\t\t\t}
\t\t\t// recursively create subdir
\t\t\tif (!\$this->classparams['demo_mode'])
\t\t\t\$this->mkdirp(\$subdir);
\t\t\t// append a slash
\t\t\t\$subdir .= '/';
\t\t} else {
\t\t\t\$subdir = '';
\t\t}
\t\t\$ret = \$this->classparams['destdir'].'/'.\$subdir.\$name;
\t\tif (file_exists(\$ret)) {
\t\t\tif (\$this->classparams['duplicate'] == 'overwrite') {
\t\t\t\treturn \$ret;
\t\t\t}
\t\t\tif (\$this->classparams['duplicate'] == 'reject') {
\t\t\t\t\$this->abort('A file with the same name already exists');
\t\t\t}
\t\t\tif (\$this->classparams['duplicate'] == 'warning') {
\t\t\t\t\$this->warning(\"File \$name already exists - rejected\");
\t\t\t}
\t\t\tif (\$this->classparams['duplicate'] == 'rename') {
\t\t\t\t\$cnt = 1;
\t\t\t\t\$dir = \$this->classparams['destdir'].'/'.\$subdir;
\t\t\t\t\$ext = strrchr(\$name, '.');
\t\t\t\tif (\$ext) {
\t\t\t\t\t\$nameWithoutExtension = substr(\$name, 0, strlen(\$name) - strlen(\$ext));
\t\t\t\t} else {
\t\t\t\t\t\$ext = '';
\t\t\t\t\t\$nameWithoutExtension = \$name;
\t\t\t\t}

\t\t\t\t\$rtry = \$dir.\$nameWithoutExtension.'_'.\$cnt.\$ext;
\t\t\t\twhile (file_exists(\$rtry)) {
\t\t\t\t\t\$cnt++;
\t\t\t\t\t\$rtry = \$dir.\$nameWithoutExtension.'._'.\$cnt.\$ext;
\t\t\t\t}
\t\t\t\t//We store the result name in the byReference name parameter.
\t\t\t\t\$name = \$nameWithoutExtension.'_'.\$cnt.\$ext;
\t\t\t\t\$ret = \$rtry;
\t\t\t}
\t\t}
\t\treturn \$ret;
\t}

\t/**
\t * Example function to process the files uploaded.  This one simply displays the files' data.
\t *
\t */
\tpublic function defaultAfterUploadManagement() {
\t\t\$flist = '[defaultAfterUploadManagement] Nb uploaded files is: ' . sizeof(\$this->files);
\t\t\$flist = \$this->classparams['http_flist_start'];
\t\tforeach (\$this->files as \$f) {
\t\t\t//\$f is an array, that contains all info about the uploaded file.
\t\t\t\$this->logDebug('defaultAfterUploadManagement', \"  Reading file \${f['name']}\");
\t\t\t\$flist .= \$this->classparams['http_flist_file_before'];
\t\t\t\$flist .= \$f['name'];
\t\t\t\$flist .= \$this->classparams['http_flist_file_between'];
\t\t\t\$flist .= \$f['size'];
\t\t\t\$flist .= \$this->classparams['http_flist_file_between'];
\t\t\t\$flist .= \$f['relativePath'];
\t\t\t\$flist .= \$this->classparams['http_flist_file_between'];
\t\t\t\$flist .= \$f['fullName'];
\t\t\t\$flist .= \$this->classparams['http_flist_file_between'];
\t\t\t\$flist .= \$f['md5sum'];
\t\t\t\$addBR = false;
\t\t\tforeach (\$f as \$key=>\$value) {
\t\t\t\t//If it's a specific key, let's display it:
\t\t\t\tif (\$key != 'name' && \$key != 'size' && \$key != 'relativePath' && \$key != 'fullName' && \$key != 'md5sum') {
\t\t\t\t\tif (\$addBR) {
\t\t\t\t\t\t\$flist .= \"<br>\";
\t\t\t\t\t} else {
\t\t\t\t\t\t// First line. We must add a new 'official' list separator.
\t\t\t\t\t\t\$flist .= \$this->classparams['http_flist_file_between'];
\t\t\t\t\t\t\$addBR = true;
\t\t\t\t\t}
\t\t\t\t\t\$flist .= \"\$key => \$value\";
\t\t\t\t}
\t\t\t}
\t\t\t\$flist .= \$this->classparams['http_flist_file_after'];
\t}
\t\$flist .= \$this->classparams['http_flist_end'];

\treturn \$flist;
}

/**
 * Generation of the applet tag, and necessary things around (js content). Insertion of this into the content of the
 * page.
 * See the tag_jscript and tag_applet class parameters.
 */
private function generateAppletTag(\$str) {
\t\$this->logDebug('generateAppletTag', 'Entering function');
\t\$str = preg_replace('/'.\$this->classparams['tag_jscript'].'/', \$this->str_jsinit(), \$str);
\treturn preg_replace('/'.\$this->classparams['tag_applet'].'/', \$this->str_applet(), \$str);
}

/**
 * This function is called when constructing the page, when we're not reveiving uploaded files. It 'just' construct
 * the applet tag, by calling the relevant function.
 *
 * This *must* be public, because it is called from PHP's output buffering
 */
public function interceptBeforeUpload(\$str) {
\t\$this->logDebug('interceptBeforeUpload', 'Entering function');
\treturn \$this->generateAppletTag(\$str);
}

/**
 * This function displays the uploaded files description in the current page (see tag_flist class parameter)
 *
 * This *must* be public, because it is called from PHP's output buffering.
 */
public function interceptAfterUpload(\$str) {
\t\$this->logDebug('interceptAfterUpload', 'Entering function');
\t\$this->logPHPDebug('interceptAfterUpload', \$this->files);

\tif (count(\$this->files) > 0) {
\t\tif (isset(\$this->classparams['callbackAfterUploadManagement'])) {
\t\t\t\$this->logDebug('interceptAfterUpload', 'Before call of ' .\$this->classparams['callbackAfterUploadManagement']);
\t\t\t\$strForFListContent = call_user_func(\$this->classparams['callbackAfterUploadManagement'], \$this, \$this->files);
\t\t} else {
\t\t\t\$strForFListContent = \$this->defaultAfterUploadManagement();
\t\t}
\t\t\$str = preg_replace('/'.\$this->classparams['tag_flist'].'/', \$strForFListContent, \$str);
\t}
\treturn \$this->generateAppletTag(\$str);
}

/**
 * This method manages the receiving of the debug log, when an error occurs.
 */
private function receive_debug_log() {
\t// handle error report
\tif (isset(\$_POST['description']) && isset(\$_POST['log'])) {
\t\t\$msg = \$_POST['log'];
\t\tmail(\$this->classparams['errormail'], \$_POST['description'], \$msg);
\t} else {
\t\tif (isset(\$_SERVER['SERVER_ADMIN']))
\t\tmail(\$_SERVER['SERVER_ADMIN'], 'Empty jupload error log',
                    'An empty log has just been posted.');
\t\t\$this->logPHPDebug('receive_debug_log', 'Empty error log received');
\t}
\texit;
}

/**
 * This method is the heart of the system. It manage the files sent by the applet, check the incoming parameters (md5sum) and
 * reconstruct the files sent in chunk mode.
 *
 * The result is stored in the \$files array, and can then be managed by the function given in the callbackAfterUploadManagement
 * class parameter, or within the page whose URL is given in the afterUploadURL applet parameter.
 * Or you can Extend the class and redeclare defaultAfterUploadManagement() to your needs.
 */
private function receive_uploaded_files() {
\t\$this->logDebug('receive_uploaded_files', 'Entering POST management');

\tif (session_id() == '') {
\t\tsession_start();
\t}
\t// we check for the session *after* handling possible error log
\t// because an error could have happened because the session-id is missing.
\tif (!isset(\$_SESSION['RF'][\$this->classparams['var_prefix'].'size'])) {
\t\t\$this->abort('Invalid session (in afterupload, POST, check of size)');
\t}
\tif (!isset(\$_SESSION['RF'][\$this->classparams['var_prefix'].'files'])) {
\t\t\$this->abort('Invalid session (in afterupload, POST, check of files)');
\t}
\t\$this->files = \$_SESSION['RF'][\$this->classparams['var_prefix'].'files'];
\tif (!is_array(\$this->files)) {
\t\t\$this->abort('Invalid session (in afterupload, POST, is_array(files))');
\t}
\tif (\$this->appletparams['sendMD5Sum'] == 'true'  &&  !isset(\$_POST['md5sum'])) {
\t\t\$this->abort('Required POST variable md5sum is missing');
\t}
\t\$cnt = 0;
\tforeach (\$_FILES as \$key => \$value) {
\t\t//Let's read the \$_FILES data
\t\tif (isset(\$files_data)) {
\t\t\tunset(\$files_data);
\t\t}
\t\t\$jupart\t\t\t= (isset(\$_POST['jupart']))\t\t \t\t? (int)\$_POST['jupart']\t\t: 0;
\t\t\$jufinal\t\t= (isset(\$_POST['jufinal']))\t \t\t? (int)\$_POST['jufinal']\t: 1;
\t\t\$relpaths\t\t= (isset(\$_POST['relpathinfo'])) \t? \$_POST['relpathinfo']\t\t: null;
\t\t\$md5sums\t\t= (isset(\$_POST['md5sum']))\t\t\t\t? \$_POST['md5sum']\t\t\t\t: null;
\t\t\$mimetypes \t= (isset(\$_POST['mimetype'])) \t \t? \$_POST['mimetype'] \t\t\t: null;
\t\t//\$relpaths = (isset(\$_POST[\"relpathinfo\$cnt\"])) ? \$_POST[\"relpathinfo\$cnt\"] : null;
\t\t//\$md5sums = (isset(\$_POST[\"md5sum\$cnt\"])) ? \$_POST[\"md5sum\$cnt\"] : null;

\t\tif (gettype(\$relpaths) == 'string') {
\t\t\t\$relpaths = array(\$relpaths);
\t\t}
\t\tif (gettype(\$md5sums) == 'string') {
\t\t\t\$md5sums = array(\$md5sums);
\t\t}
\t\tif (\$this->appletparams['sendMD5Sum'] == 'true'  && !is_array(\$md5sums)) {
\t\t\t\$this->abort('Expecting an array of MD5 checksums');
\t\t}
\t\tif (!is_array(\$relpaths)) {
\t\t\t\$this->abort('Expecting an array of relative paths');
\t\t}
\t\tif (!is_array(\$mimetypes)) {
\t\t\t\$this->abort('Expecting an array of MIME types');
\t\t}
\t\t// Check the MIME type (note: this is easily forged!)
\t\tif (isset(\$this->classparams['allowed_mime_types']) && is_array(\$this->classparams['allowed_mime_types'])) {
\t\t\tif (!in_array(\$mimetypes[\$cnt], \$this->classparams['allowed_mime_types'])) {
\t\t\t\t\$this->abort('MIME type '.\$mimetypes[\$cnt].' not allowed');
\t\t\t}
\t\t}
\t\tif (isset(\$this->classparams['allowed_file_extensions']) && is_array(\$this->classparams['allowed_file_extensions'])) {
\t\t\t\$fileExtension = substr(strrchr(\$value['name'][\$cnt], \".\"), 1);
\t\t\tif (!in_array(\$fileExtension, \$this->classparams['allowed_file_extensions'])) {
\t\t\t\t\$this->abort('File extension '.\$fileExtension.' not allowed');
\t\t\t}
\t\t}

\t\t\$dstdir = \$this->classparams['destdir'];
\t\t\$dstname = \$dstdir.'/'.\$this->classparams['tmp_prefix'].session_id();
\t\t\$tmpname = \$dstdir.'/'.\$this->classparams['tmp_prefix'].'tmp'.session_id();

\t\t// Controls are now done. Let's store the current uploaded files properties in an array, for future use.
\t\t\$files_data['name']\t\t\t\t\t= \$value['name'][\$cnt];
\t\t\$files_data['size']\t\t\t\t\t= 'not calculated yet';
\t\t\$files_data['tmp_name']\t\t\t= \$value['tmp_name'][\$cnt];
\t\t\$files_data['error']    \t\t= \$value['error'][\$cnt];
\t\t\$files_data['relativePath'] = \$relpaths[\$cnt];
\t\t\$files_data['md5sum']  \t\t\t= \$md5sums[\$cnt];
\t\t\$files_data['mimetype']  \t\t= \$mimetypes[\$cnt];

\t\tif (!move_uploaded_file(\$files_data['tmp_name'], \$tmpname)) {
\t\t\tif (\$classparams['verbose_errors']) {
\t\t\t\t\$this->abort(\"Unable to move uploaded file (from \${files_data['tmp_name']} to \$tmpname)\");
\t\t} else {
\t\t\ttrigger_error(\"Unable to move uploaded file (from \${files_data['tmp_name']} to \$tmpname)\",E_USER_WARNING);
\t\t\t\$this->abort(\"Unable to move uploaded file\");
\t}
}

// In demo mode, no file storing is done. We just delete the newly uploaded file.
if (\$this->classparams['demo_mode']) {
\tif (\$jufinal || (!\$jupart)) {
\t\tif (\$jupart) {
\t\t\t\$files_data['size']\t\t= (\$jupart-1) * \$this->appletparams['maxChunkSize'] + filesize(\$tmpname);
\t\t} else {
\t\t\t\$files_data['size']\t\t= filesize(\$tmpname);
\t\t}
\t\t\$files_data['fullName']\t= 'Demo mode<BR>No file storing';
\t\tarray_push(\$this->files, \$files_data);
\t}
\tunlink(\$tmpname);
\t\$cnt++;
\tcontinue;
}
//If we get here, the upload is a real one (no demo)
if (\$jupart) {
\t// got a chunk of a multi-part upload
\t\$len = filesize(\$tmpname);
\t\$_SESSION['RF'][\$this->classparams['var_prefix'].'size'] += \$len;
\tif (\$len > 0) {
\t\t\$src = fopen(\$tmpname, 'rb');
\t\t\$dst = fopen(\$dstname, (\$jupart == 1) ? 'wb' : 'ab');
\t\twhile (\$len > 0) {
\t\t\t\$rlen = (\$len > 8192) ? 8192 : \$len;
\t\t\t\$buf = fread(\$src, \$rlen);
\t\t\tif (!\$buf) {
\t\t\t\tfclose(\$src);
\t\t\t\tfclose(\$dst);
\t\t\t\tunlink(\$dstname);
\t\t\t\t\$this->abort('read IO error');
\t\t\t}
\t\t\tif (!fwrite(\$dst, \$buf, \$rlen)) {
\t\t\t\tfclose(\$src);
\t\t\t\tfclose(\$dst);
\t\t\t\tunlink(\$dstname);
\t\t\t\t\$this->abort('write IO error');
\t\t\t}
\t\t\t\$len -= \$rlen;
\t\t}
\t\tfclose(\$src);
\t\tfclose(\$dst);
\t\tunlink(\$tmpname);
\t}
\tif (\$jufinal) {
\t\t// This is the last chunk. Check total lenght and
\t\t// rename it to it's final name.
\t\t\$dlen = filesize(\$dstname);
\t\tif (\$dlen != \$_SESSION['RF'][\$this->classparams['var_prefix'].'size'])
\t\t\$this->abort('file size mismatch');
\t\tif (\$this->appletparams['sendMD5Sum'] == 'true' ) {
\t\t\tif (\$md5sums[\$cnt] != md5_file(\$dstname))
\t\t\t\$this->abort('MD5 checksum mismatch');
\t\t}
\t\t// remove zero sized files
\t\tif ((\$dlen > 0) || \$this->classparams['allow_zerosized']) {
\t\t\t\$dstfinal = \$this->dstfinal(\$files_data['name'],\$files_data['relativePath']);
\t\t\tif (!rename(\$dstname, \$dstfinal))
\t\t\t\$this->abort('rename IO error');
\t\t\t\$_umask = umask(0); \t// override the system mask
\t\t\tif (!chmod(\$dstfinal, \$this->classparams['fileperm']))
\t\t\t\t\$this->abort('chmod IO error');
\t\t\tumask(\$_umask);
\t\t\t\$files_data['size']\t\t= filesize(\$dstfinal);
\t\t\t\$files_data['fullName']\t= \$dstfinal;
\t\t\t\$files_data['path']\t= fix_dirname(\$dstfinal);
\t\t\tarray_push(\$this->files, \$files_data);
\t\t} else {
\t\t\tunlink(\$dstname);
\t\t}
\t\t// reset session var
\t\t\$_SESSION['RF'][\$this->classparams['var_prefix'].'size'] = 0;
\t}
} else {
\t// Got a single file upload. Trivial.
\tif (\$this->appletparams['sendMD5Sum'] == 'true' ) {
\t\tif (\$md5sums[\$cnt] != md5_file(\$tmpname))
\t\t\t\$this->abort('MD5 checksum mismatch');
\t}
\t\$dstfinal = \$this->dstfinal(\$files_data['name'],\$files_data['relativePath']);
\tif (!rename(\$tmpname, \$dstfinal))
\t\$this->abort('rename IO error');
\t\$_umask = umask(0); \t// override the system mask
\tif (!chmod(\$dstfinal, \$this->classparams['fileperm']))
\t\t\$this->abort('chmod IO error');
\tumask(\$_umask);
\t\$files_data['size']\t\t= filesize(\$dstfinal);
\t\$files_data['fullName']\t= \$dstfinal;
\t\$files_data['path']\t= fix_dirname(\$dstfinal);
\tarray_push(\$this->files, \$files_data);
}
\$cnt++;
}

echo \$this->appletparams['stringUploadSuccess'].\"\\n\";
\$_SESSION['RF'][\$this->classparams['var_prefix'].'files'] = \$this->files;
session_write_close();
exit;
}

/**
 *
 *
 */
private function page_start() {
\t\$this->logDebug('page_start', 'Entering function');

\t// If the applet checks for the serverProtocol, it issues a HEAD request
\t// -> Simply return an empty doc.
\tif (\$_SERVER['REQUEST_METHOD'] == 'HEAD') {
\t\t// Nothing to do

\t} else if (\$_SERVER['REQUEST_METHOD'] == 'GET') {
\t\t// A GET request means: return upload page
\t\t\$this->logDebug('page_start', 'Entering GET management');

\t\tif (session_id() == '') {
\t\t\tsession_start();
\t\t}
\t\tif (isset(\$_GET['afterupload'])) {
\t\t\t\$this->logDebug('page_start', 'afterupload is set');
\t\t\tif (!isset(\$_SESSION['RF'][\$this->classparams['var_prefix'].'files'])) {
\t\t\t\t\$this->abort('Invalid session (in afterupload, GET, check of \$_SESSION[\"RF\"]): files array is not set');
\t\t\t}
\t\t\t\$this->files = \$_SESSION['RF'][\$this->classparams['var_prefix'].'files'];
\t\t\tif (!is_array(\$this->files)) {
\t\t\t\t\$this->abort('Invalid session (in afterupload, GET, check of is_array(files)): files is not an array');
\t\t\t}
\t\t\t// clear session data ready for new upload
\t\t\t\$_SESSION['RF'][\$this->classparams['var_prefix'].'files'] = array();

\t\t\t// start intercepting the content of the calling page, to display the upload result.
\t\t\tob_start(array(& \$this, 'interceptAfterUpload'));

\t\t} else {
\t\t\t\$this->logDebug('page_start', 'afterupload is not set');
\t\t\tif (\$this->classparams['session_regenerate']) {
\t\t\t\tsession_regenerate_id(true);
\t\t\t}
\t\t\t\$this->files = array();
\t\t\t\$_SESSION['RF'][\$this->classparams['var_prefix'].'size'] = 0;
\t\t\t\$_SESSION['RF'][\$this->classparams['var_prefix'].'files'] = \$this->files;
\t\t\t// start intercepting the content of the calling page, to display the applet tag.
\t\t\tob_start(array(& \$this, 'interceptBeforeUpload'));
\t\t}

\t} else if (\$_SERVER['REQUEST_METHOD'] == 'POST') {
\t\t// If we got a POST request, this is the real work.
\t\tif (isset(\$_GET['errormail'])) {
\t\t\t//Hum, an error occurs on server side. Let's manage the debug log, that we just received.
\t\t\t\$this->receive_debug_log();
\t\t} else {
\t\t\t\$this->receive_uploaded_files();
\t\t}
\t}
}
}

// PHP end tag omitted intentionally!!
";
        
        $__internal_951ec287015961e18ee0c3ef25c9ed23ec1139d3f955c3ff2af24ae3afc59e9b->leave($__internal_951ec287015961e18ee0c3ef25c9ed23ec1139d3f955c3ff2af24ae3afc59e9b_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/uploader/jupload.php";
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

/**
 * This class manage upload, with use of the JUpload applet. It's both a sample to show how to use the applet, and
 * a class you can use directly into your own application.
 *
 * Recommandation: Don't update its code !
 *
 * By doing this, you'll be able to reuse directly any update coming from the JUpload project, instead of reporting your
 * modifications into any new version of this class. This guarantees you that your project can use the last version of
 * JUpload, without any code modification. We work so that the applet behavior remains unchanged, but from time to time,
 * a change can appear.
 *
 * Sample:
 * - See the index.php samples, in the same folder.
 *
 * Notes:
 * - maxChunkSize: this class use a default maxChunkSize of 500K (or less, depending on the script max size). This allows
 * upload of FILES OF ANY SIZE on quite all ISP hosting. If it's too big for you (the max upload size of your ISP is less
 * than 500K), or if you want no chunk at all, you can, of course, override this default value.
 *
 *
 *
 * Parameters:
 * - \$appletparams contains a map for applet parameters: key is the applet parameter name. The value is the value to transmit
 * \t\tto the applet. See the applet documentation for information on all applet parameters.
 * - \$classparams contains the parameter specific for the JUpload class below. Here are the main class parameters:
 * \t\t- demo_mode. Files are uploaded to the server, but not stored on its hard drive. That is: you can simulate the global
 * \t\tbehavior, but won't consume hard drive space. This mode is used on sourceforge web site.
 *
 *
 * Output generated for uploaded files:
 * - \$files is an array of array. This can be managed by (a) the function given in the callbackAfterUploadManagement class
 * \t\tparameter, or (b) within the page whose URL is given in the afterUploadURL applet parameter, or (c) you can Extend the
 * \t\tclass and redeclare defaultAfterUploadManagement() to your needs.
 * \tSee the defaultAfterUploadManagement() for a sample on howto manage this array.
 *
 *   This array contains:
 *     - One entry per file. Each entry is an array, that contains all files properties, stored as \$key=>\$value.
 * \t\tThe available keys are:
 * \t\t  - name: the filename, as it is now stored on the system.
 * \t\t  - size: the file size
 * \t\t  - path: the absolute path, where the file has been stored.
 * \t\t\t- fullName: the canonical file name (i.e. including the absolute path)
 * \t\t  - md5sum: the md5sum of the file, if further control is needed.
 * \t\t\t- mimetype: the calculated mime type of the file
 * \t\t  - If the formData applet parameter is used: all attributes (key and value) uploaded by the applet, are put here,
 * \t\t\trepeated for each file.
 *
 * \t\tNote: if you are using a callback function (i.e. callbackAfterUploadManagement) and you do not see a global 'object' you
 * \t\t\t\t\tare expecting then it might have been destroyed by PHP - c.f. http://bugs.php.net/bug.php?id=39693
 *
 */

class JUpload {

\tvar \$appletparams;
\tvar \$classparams;
\tvar \$files;

\tpublic function JUpload(\$appletparams = array(), \$classparams = array()) {
\t\tif (gettype(\$classparams) != 'array')
\t\t\$this->abort('Invalid type of parameter classparams: Expecting an array');
\t\tif (gettype(\$appletparams) != 'array')
\t\t\$this->abort('Invalid type of parameter appletparams: Expecting an array');

\t\t// set some defaults for the applet params
\t\tif (!isset(\$appletparams['afterUploadURL']))
\t\t\$appletparams['afterUploadURL'] = \$_SERVER['PHP_SELF'] . '?afterupload=1';
\t\tif (!isset(\$appletparams['name']))
\t\t\$appletparams['name'] = 'JUpload';
\t\tif (!isset(\$appletparams['archive']))
\t\t\$appletparams['archive'] = 'wjhk.jupload.jar';
\t\tif (!isset(\$appletparams['code']))
\t\t\$appletparams['code'] = 'wjhk.jupload2.JUploadApplet';
\t\tif (!isset(\$appletparams['debugLevel']))
\t\t\$appletparams['debugLevel'] = 0;
\t\tif (!isset(\$appletparams['httpUploadParameterType']))
\t\t\$appletparams['httpUploadParameterType'] = 'array';
\t\tif (!isset(\$appletparams['showLogWindow']))
\t\t\$appletparams['showLogWindow'] = (\$appletparams['debugLevel'] > 0) ? 'true' : 'false';
\t\tif (!isset(\$appletparams['width']))
\t\t\$appletparams['width'] = 640;
\t\tif (!isset(\$appletparams['height']))
\t\t\$appletparams['height'] = (\$appletparams['showLogWindow'] == 'true') ? 500 : 300;
\t\tif (!isset(\$appletparams['mayscript']))
\t\t\$appletparams['mayscript'] = 'true';
\t\tif (!isset(\$appletparams['scriptable']))
\t\t\$appletparams['scriptable'] = 'false';
\t\t//if (!isset(\$appletparams['stringUploadSuccess']))
\t\t\$appletparams['stringUploadSuccess'] = 'SUCCESS';
\t\t//if (!isset(\$appletparams['stringUploadError']))
\t\t\$appletparams['stringUploadError'] = 'ERROR: (.*)';
\t\t\$maxpost = \$this->tobytes(ini_get('post_max_size'));
\t\t\$maxmem = \$this->tobytes(ini_get('memory_limit'));
\t\t\$maxfs = \$this->tobytes(ini_get('upload_max_filesize'));
\t\t\$obd = ini_get('open_basedir');
\t\tif (!isset(\$appletparams['maxChunkSize'])) {
\t\t\t\$maxchunk = (\$maxpost < \$maxmem) ? \$maxpost : \$maxmem;
\t\t\t\$maxchunk = (\$maxchunk < \$maxfs) ? \$maxchunk : \$maxfs;
\t\t\t\$maxchunk /= 4;
\t\t\t\$optchunk = (500000 > \$maxchunk) ? \$maxchunk : 500000;
\t\t\t\$appletparams['maxChunkSize'] = \$optchunk;
\t\t}
\t\t\$appletparams['maxChunkSize'] = \$this->tobytes(\$appletparams['maxChunkSize']);
\t\tif (!isset(\$appletparams['maxFileSize']))
\t\t\$appletparams['maxFileSize'] = \$maxfs;
\t\t\$appletparams['maxFileSize'] = \$this->tobytes(\$appletparams['maxFileSize']);
\t\tif (isset(\$classparams['errormail'])) {
\t\t\t\$appletparams['urlToSendErrorTo'] = \$_SERVER[\"PHP_SELF\"] . '?errormail';
\t\t}

\t\t// Same for class parameters
\t\tif (!isset(\$classparams['demo_mode']))
\t\t\$classparams['demo_mode'] = false;
\t\tif (\$classparams['demo_mode']) {
\t\t\t\$classparams['create_destdir'] = false;
\t\t\t\$classparams['allow_subdirs'] = true;
\t\t\t\$classparams['allow_zerosized'] = true;
\t\t\t\$classparams['duplicate'] = 'overwrite';
\t\t}
\t\tif (!isset(\$classparams['debug_php']))\t\t\t\t\t\t\t\t\t\t\t// set true to log some messages in PHP log
\t\t\$classparams['debug_php'] = false;
\t\tif (!isset(\$this->classparams['allowed_mime_types']))\t\t\t\t// array of allowed MIME type
\t\t\$classparams['allowed_mime_types'] = 'all';
\t\tif (!isset(\$this->classparams['allowed_file_extensions'])) \t// array of allowed file extensions
\t\t\$classparams['allowed_file_extensions'] = 'all';
\t\tif (!isset(\$classparams['verbose_errors']))\t\t\t\t\t\t// shouldn't display server info on a production site!
\t\t\$classparams['verbose_errors'] = true;
\t\tif (!isset(\$classparams['session_regenerate']))
\t\t\$classparams['session_regenerate'] = false;
\t\tif (!isset(\$classparams['create_destdir']))
\t\t\$classparams['create_destdir'] = true;
\t\tif (!isset(\$classparams['allow_subdirs']))
\t\t\$classparams['allow_subdirs'] = false;
\t\tif (!isset(\$classparams['spaces_in_subdirs']))
\t\t\$classparams['spaces_in_subdirs'] = false;
\t\tif (!isset(\$classparams['convert_spaces']))         // set to true to convert spaces in filenames to _
\t\t\$classparams['convert_spaces'] = false;
\t\tif (!isset(\$classparams['allow_zerosized']))
\t\t\$classparams['allow_zerosized'] = false;
\t\tif (!isset(\$classparams['duplicate']))
\t\t\$classparams['duplicate'] = 'rename';
\t\tif (!isset(\$classparams['dirperm']))
\t\t\$classparams['dirperm'] = 0755;
\t\tif (!isset(\$classparams['fileperm']))
\t\t\$classparams['fileperm'] = 0644;
\t\tif (!isset(\$classparams['destdir'])) {
\t\t\tif (\$obd != '')
\t\t\t\$classparams['destdir'] = \$obd;
\t\t\telse
\t\t\t\$classparams['destdir'] = '/var/tmp/jupload_test';
\t\t}else{
\t\t\t\$classparams['destdir']=str_replace('~',' ',\$classparams['destdir']);
\t\t}
\t\tif (\$classparams['create_destdir']) {
\t\t\t\$_umask = umask(0); \t// override the system mask
\t\t\t@mkdir(\$classparams['destdir'], \$classparams['dirperm']);
\t\t\tumask(\$_umask);
\t\t}
\t\tif (!is_dir(\$classparams['destdir']) && is_writable(\$classparams['destdir']))
\t\t\$this->abort('Destination dir not accessible');
\t\tif (!isset(\$classparams['tmp_prefix']))
\t\t\$classparams['tmp_prefix'] = 'jutmp.';
\t\tif (!isset(\$classparams['var_prefix']))
\t\t\$classparams['var_prefix'] = 'juvar.';
\t\tif (!isset(\$classparams['jscript_wrapper']))
\t\t\$classparams['jscript_wrapper'] = 'JUploadSetProperty';
\t\tif (!isset(\$classparams['tag_jscript']))
\t\t\$classparams['tag_jscript'] = '<!--JUPLOAD_JSCRIPT-->';
\t\tif (!isset(\$classparams['tag_applet']))
\t\t\$classparams['tag_applet'] = '<!--JUPLOAD_APPLET-->';
\t\tif (!isset(\$classparams['tag_flist']))
\t\t\$classparams['tag_flist'] = '<!--JUPLOAD_FILES-->';
\t\tif (!isset(\$classparams['http_flist_start']))
\t\t\$classparams['http_flist_start'] =
            \t\t\"<table border='1'><TR><TH>Filename</TH><TH>file size</TH><TH>Relative path</TH><TH>Full name</TH><TH>md5sum</TH><TH>Specific parameters</TH></TR>\";
\t\tif (!isset(\$classparams['http_flist_end']))
\t\t\$classparams['http_flist_end'] = \"</table>\\n\";
\t\tif (!isset(\$classparams['http_flist_file_before']))
\t\t\$classparams['http_flist_file_before'] = \"<tr><td>\";
\t\tif (!isset(\$classparams['http_flist_file_between']))
\t\t\$classparams['http_flist_file_between'] = \"</td><td>\";
\t\tif (!isset(\$classparams['http_flist_file_after']))
\t\t\$classparams['http_flist_file_after'] = \"</td></tr>\\n\";

\t\t\$this->appletparams = \$appletparams;
\t\t\$this->classparams = \$classparams;
\t\t\$this->page_start();
\t}

\t/**
\t * Return an array of uploaded files * The array contains: name, size, tmp_name, error,
\t * relativePath, md5sum, mimetype, fullName, path
\t */
\tpublic function uploadedfiles() {
\t\treturn \$this->files;
\t}

\t/**
\t * Log a message on the current output, as a HTML comment.
\t */
\tprotected function logDebug(\$function, \$msg, \$htmlComment=true) {
\t\t\$output = \"[DEBUG] [\$function] \$msg\";
\t\tif (\$htmlComment) {
\t\t\techo(\"<!-- \$output -->\\r\\n\");
\t\t} else {
\t\t\techo(\"\$output\\r\\n\");
\t\t}
\t}

\t/**
\t * Log a message to the PHP log.
\t * Declared \"protected\" so it may be Extended if you require customised logging (e.g. particular log file location).
\t */
\tprotected function logPHPDebug(\$function, \$msg) {
\t\tif (\$this->classparams['debug_php'] === true) {
\t\t\t\$output = \"[DEBUG] [\$function] \".\$this->arrayexpand(\$msg);
\t\t\terror_log(\$output);
\t\t}
\t}

\tprivate function arrayexpand(\$array) {
\t\t\$output = '';
\t\tif (is_array(\$array)) {
\t\t\tforeach (\$array as \$key => \$value) {
\t\t\t\t\$output .= \"\\n \".\$key.' => '.\$this->arrayexpand(\$value);
\t\t\t}
\t\t} else {
\t\t\t\$output .= \$array;
\t\t}
\t\treturn \$output;
\t}


\t/**
\t * Convert a value ending in 'G','M' or 'K' to bytes
\t *
\t */
\tprivate function tobytes(\$val) {
\t\t\$val = trim(\$val);
\t\t\$last = fix_strtolower(\$val{strlen(\$val)-1});
\t\tswitch(\$last) {
\t\t\tcase 'g':
\t\t\t\t\$val *= 1024;
\t\t\tcase 'm':
\t\t\t\t\$val *= 1024;
\t\t\tcase 'k':
\t\t\t\t\$val *= 1024;
\t\t}
\t\treturn \$val;
\t}

\t/**
\t * Build a string, containing a javascript wrapper function
\t * for setting applet properties via JavaScript. This is necessary,
\t * because we use the \"modern\" method of including the applet (using
\t * <object> resp. <embed> tags) in order to trigger automatic JRE downloading.
\t * Therefore, in Netscape-like browsers, the applet is accessible via
\t * the document.embeds[] array while in others, it is accessible via the
\t * document.applets[] array.
\t *
\t * @return A string, containing the necessary wrapper function (named JUploadSetProperty)
\t */
\tprivate function str_jsinit() {
\t\t\$N = \"\\n\";
\t\t\$name = \$this->appletparams['name'];
\t\t\$ret = '<script type=\"text/javascript\">'.\$N;
\t\t\$ret .= '<!--'.\$N;
\t\t\$ret .= 'function '.\$this->classparams['jscript_wrapper'].'(name, value) {'.\$N;
\t\t\$ret .= '  document.applets[\"'.\$name.'\"] == null || document.applets[\"'.\$name.'\"].setProperty(name,value);'.\$N;
\t\t\$ret .= '  document.embeds[\"'.\$name.'\"] == null || document.embeds[\"'.\$name.'\"].setProperty(name,value);'.\$N;
\t\t\$ret .= '}'.\$N;
\t\t\$ret .= '//-->'.\$N;
\t\t\$ret .= '</script>';
\t\treturn \$ret;
\t}

\t/**
\t * Build a string, containing the applet tag with all parameters.
\t *
\t * @return A string, containing the applet tag
\t */
\tprivate function str_applet() {
\t\t\$N = \"\\n\";
\t\t\$params = \$this->appletparams;
\t\t// return the actual applet tag
\t\t\$ret = '<object classid = \"clsid:8AD9C840-044E-11D1-B3E9-00805F499D93\"'.\$N;
\t\t\$ret .= '  codebase = \"http://java.sun.com/update/1.5.0/jinstall-1_5-windows-i586.cab#Version=5,0,0,3\"'.\$N;
\t\t\$ret .= '  width = \"'.\$params['width'].'\"'.\$N;
\t\t\$ret .= '  height = \"'.\$params['height'].'\"'.\$N;
\t\t\$ret .= '  name = \"'.\$params['name'].'\">'.\$N;
\t\tforeach (\$params as \$key => \$val) {
\t\t\tif (\$key != 'width' && \$key != 'height')
\t\t\t\$ret .= '  <param name = \"'.\$key.'\" value = \"'.\$val.'\" />'.\$N;
\t\t}
\t\t\$ret .= '  <comment>'.\$N;
\t\t\$ret .= '    <embed'.\$N;
\t\t\$ret .= '      type = \"application/x-java-applet;version=1.5\"'.\$N;
\t\tforeach (\$params as \$key => \$val)
\t\t\$ret .= '      '.\$key.' = \"'.\$val.'\"'.\$N;
\t\t\$ret .= '      pluginspage = \"http://java.sun.com/products/plugin/index.html#download\">'.\$N;
\t\t\$ret .= '      <noembed>'.\$N;
\t\t\$ret .= '        Java 1.5 or higher plugin required.'.\$N;
\t\t\$ret .= '      </noembed>'.\$N;
\t\t\$ret .= '    </embed>'.\$N;
\t\t\$ret .= '  </comment>'.\$N;
\t\t\$ret .= '</object>';
\t\treturn \$ret;
\t}

\tprivate function abort(\$msg = '') {
\t\t\$this->cleanup();
\t\tif (\$msg != '')
\t\tdie(str_replace('(.*)',\$msg,\$this->appletparams['stringUploadError']).\"\\n\");
\t\texit;
\t}

\tprivate function warning(\$msg = '') {
\t\t\$this->cleanup();
\t\tif (\$msg != '')
\t\techo('WARNING: '.\$msg.\"\\n\");
\t\techo \$this->appletparams['stringUploadSuccess'].\"\\n\";
\t\texit;
\t}

\tprivate function cleanup() {
\t\t// remove all uploaded files of *this* request
\t\tif (isset(\$_FILES)) {
\t\t\tforeach (\$_FILES as \$key => \$val)
\t\t\t@unlink(\$val['tmp_name']);
\t\t}
\t\t// remove accumulated file, if any.
\t\t@unlink(\$this->classparams['destdir'].'/'.\$this->classparams['tmp_prefix'].session_id());
\t\t@unlink(\$this->classparams['destdir'].'/'.\$this->classparams['tmp_prefix'].'tmp'.session_id());
\t\t// reset session var
\t\t\$_SESSION['RF'][\$this->classparams['var_prefix'].'size'] = 0;
\t\treturn;
\t}

\tprivate function mkdirp(\$path) {
\t\t// create subdir (hierary) below destdir;
\t\t\$dirs = explode('/', \$path);
\t\t\$path = \$this->classparams['destdir'];
\t\tforeach (\$dirs as \$dir) {
\t\t\t\$path .= '/'.\$dir;
\t\t\tif (!file_exists(\$path)) {  // @ does NOT always supress the error!
\t\t\t\t\$_umask = umask(0); \t// override the system mask
\t\t\t\t@mkdir(\$path, \$this->classparams['dirperm']);
\t\t\t\tumask(\$_umask);
\t\t\t}
\t\t}
\t\tif (!is_dir(\$path) && is_writable(\$path))
\t\t\$this->abort('Destination dir not accessible');
\t}

\t/**
\t * This method:
\t * - Replaces some potentially dangerous characters by '_' (in the given name an relative path)
\t * - Checks if a files of the same name already exists.
\t * \t\t- If no: no problem.
\t * \t\t- If yes, and the duplicate class param is set to rename, the file is renamed.
\t * \t\t- If yes, and the duplicate class param is set to overwrite, the file is not renamed. The existing one will be erased.
\t * \t\t- If yes, and the duplicate class param is set to reject, an error is thrown.
\t */
\tprivate function dstfinal(&\$name, &\$subdir) {
\t\t\$name = preg_replace('![`\$\\\\\\\\/|]!', '_', \$name);
\t\tif (\$this->classparams['convert_spaces']) {
            \$name = str_replace(' ', '_', \$name);
\t\t}
\t\tif (\$this->classparams['allow_subdirs'] && (\$subdir != '')) {
\t\t\t\$subdir = trim(preg_replace('!\\\\\\\\!','/',\$subdir),'/');
\t\t\t\$subdir = preg_replace('![`\$|]!', '_', \$subdir);
\t\t\tif (!\$this->classparams['spaces_in_subdirs']) {
\t\t\t\t\$subdir = str_replace(' ','_',\$subdir);
\t\t\t}
\t\t\t// recursively create subdir
\t\t\tif (!\$this->classparams['demo_mode'])
\t\t\t\$this->mkdirp(\$subdir);
\t\t\t// append a slash
\t\t\t\$subdir .= '/';
\t\t} else {
\t\t\t\$subdir = '';
\t\t}
\t\t\$ret = \$this->classparams['destdir'].'/'.\$subdir.\$name;
\t\tif (file_exists(\$ret)) {
\t\t\tif (\$this->classparams['duplicate'] == 'overwrite') {
\t\t\t\treturn \$ret;
\t\t\t}
\t\t\tif (\$this->classparams['duplicate'] == 'reject') {
\t\t\t\t\$this->abort('A file with the same name already exists');
\t\t\t}
\t\t\tif (\$this->classparams['duplicate'] == 'warning') {
\t\t\t\t\$this->warning(\"File \$name already exists - rejected\");
\t\t\t}
\t\t\tif (\$this->classparams['duplicate'] == 'rename') {
\t\t\t\t\$cnt = 1;
\t\t\t\t\$dir = \$this->classparams['destdir'].'/'.\$subdir;
\t\t\t\t\$ext = strrchr(\$name, '.');
\t\t\t\tif (\$ext) {
\t\t\t\t\t\$nameWithoutExtension = substr(\$name, 0, strlen(\$name) - strlen(\$ext));
\t\t\t\t} else {
\t\t\t\t\t\$ext = '';
\t\t\t\t\t\$nameWithoutExtension = \$name;
\t\t\t\t}

\t\t\t\t\$rtry = \$dir.\$nameWithoutExtension.'_'.\$cnt.\$ext;
\t\t\t\twhile (file_exists(\$rtry)) {
\t\t\t\t\t\$cnt++;
\t\t\t\t\t\$rtry = \$dir.\$nameWithoutExtension.'._'.\$cnt.\$ext;
\t\t\t\t}
\t\t\t\t//We store the result name in the byReference name parameter.
\t\t\t\t\$name = \$nameWithoutExtension.'_'.\$cnt.\$ext;
\t\t\t\t\$ret = \$rtry;
\t\t\t}
\t\t}
\t\treturn \$ret;
\t}

\t/**
\t * Example function to process the files uploaded.  This one simply displays the files' data.
\t *
\t */
\tpublic function defaultAfterUploadManagement() {
\t\t\$flist = '[defaultAfterUploadManagement] Nb uploaded files is: ' . sizeof(\$this->files);
\t\t\$flist = \$this->classparams['http_flist_start'];
\t\tforeach (\$this->files as \$f) {
\t\t\t//\$f is an array, that contains all info about the uploaded file.
\t\t\t\$this->logDebug('defaultAfterUploadManagement', \"  Reading file \${f['name']}\");
\t\t\t\$flist .= \$this->classparams['http_flist_file_before'];
\t\t\t\$flist .= \$f['name'];
\t\t\t\$flist .= \$this->classparams['http_flist_file_between'];
\t\t\t\$flist .= \$f['size'];
\t\t\t\$flist .= \$this->classparams['http_flist_file_between'];
\t\t\t\$flist .= \$f['relativePath'];
\t\t\t\$flist .= \$this->classparams['http_flist_file_between'];
\t\t\t\$flist .= \$f['fullName'];
\t\t\t\$flist .= \$this->classparams['http_flist_file_between'];
\t\t\t\$flist .= \$f['md5sum'];
\t\t\t\$addBR = false;
\t\t\tforeach (\$f as \$key=>\$value) {
\t\t\t\t//If it's a specific key, let's display it:
\t\t\t\tif (\$key != 'name' && \$key != 'size' && \$key != 'relativePath' && \$key != 'fullName' && \$key != 'md5sum') {
\t\t\t\t\tif (\$addBR) {
\t\t\t\t\t\t\$flist .= \"<br>\";
\t\t\t\t\t} else {
\t\t\t\t\t\t// First line. We must add a new 'official' list separator.
\t\t\t\t\t\t\$flist .= \$this->classparams['http_flist_file_between'];
\t\t\t\t\t\t\$addBR = true;
\t\t\t\t\t}
\t\t\t\t\t\$flist .= \"\$key => \$value\";
\t\t\t\t}
\t\t\t}
\t\t\t\$flist .= \$this->classparams['http_flist_file_after'];
\t}
\t\$flist .= \$this->classparams['http_flist_end'];

\treturn \$flist;
}

/**
 * Generation of the applet tag, and necessary things around (js content). Insertion of this into the content of the
 * page.
 * See the tag_jscript and tag_applet class parameters.
 */
private function generateAppletTag(\$str) {
\t\$this->logDebug('generateAppletTag', 'Entering function');
\t\$str = preg_replace('/'.\$this->classparams['tag_jscript'].'/', \$this->str_jsinit(), \$str);
\treturn preg_replace('/'.\$this->classparams['tag_applet'].'/', \$this->str_applet(), \$str);
}

/**
 * This function is called when constructing the page, when we're not reveiving uploaded files. It 'just' construct
 * the applet tag, by calling the relevant function.
 *
 * This *must* be public, because it is called from PHP's output buffering
 */
public function interceptBeforeUpload(\$str) {
\t\$this->logDebug('interceptBeforeUpload', 'Entering function');
\treturn \$this->generateAppletTag(\$str);
}

/**
 * This function displays the uploaded files description in the current page (see tag_flist class parameter)
 *
 * This *must* be public, because it is called from PHP's output buffering.
 */
public function interceptAfterUpload(\$str) {
\t\$this->logDebug('interceptAfterUpload', 'Entering function');
\t\$this->logPHPDebug('interceptAfterUpload', \$this->files);

\tif (count(\$this->files) > 0) {
\t\tif (isset(\$this->classparams['callbackAfterUploadManagement'])) {
\t\t\t\$this->logDebug('interceptAfterUpload', 'Before call of ' .\$this->classparams['callbackAfterUploadManagement']);
\t\t\t\$strForFListContent = call_user_func(\$this->classparams['callbackAfterUploadManagement'], \$this, \$this->files);
\t\t} else {
\t\t\t\$strForFListContent = \$this->defaultAfterUploadManagement();
\t\t}
\t\t\$str = preg_replace('/'.\$this->classparams['tag_flist'].'/', \$strForFListContent, \$str);
\t}
\treturn \$this->generateAppletTag(\$str);
}

/**
 * This method manages the receiving of the debug log, when an error occurs.
 */
private function receive_debug_log() {
\t// handle error report
\tif (isset(\$_POST['description']) && isset(\$_POST['log'])) {
\t\t\$msg = \$_POST['log'];
\t\tmail(\$this->classparams['errormail'], \$_POST['description'], \$msg);
\t} else {
\t\tif (isset(\$_SERVER['SERVER_ADMIN']))
\t\tmail(\$_SERVER['SERVER_ADMIN'], 'Empty jupload error log',
                    'An empty log has just been posted.');
\t\t\$this->logPHPDebug('receive_debug_log', 'Empty error log received');
\t}
\texit;
}

/**
 * This method is the heart of the system. It manage the files sent by the applet, check the incoming parameters (md5sum) and
 * reconstruct the files sent in chunk mode.
 *
 * The result is stored in the \$files array, and can then be managed by the function given in the callbackAfterUploadManagement
 * class parameter, or within the page whose URL is given in the afterUploadURL applet parameter.
 * Or you can Extend the class and redeclare defaultAfterUploadManagement() to your needs.
 */
private function receive_uploaded_files() {
\t\$this->logDebug('receive_uploaded_files', 'Entering POST management');

\tif (session_id() == '') {
\t\tsession_start();
\t}
\t// we check for the session *after* handling possible error log
\t// because an error could have happened because the session-id is missing.
\tif (!isset(\$_SESSION['RF'][\$this->classparams['var_prefix'].'size'])) {
\t\t\$this->abort('Invalid session (in afterupload, POST, check of size)');
\t}
\tif (!isset(\$_SESSION['RF'][\$this->classparams['var_prefix'].'files'])) {
\t\t\$this->abort('Invalid session (in afterupload, POST, check of files)');
\t}
\t\$this->files = \$_SESSION['RF'][\$this->classparams['var_prefix'].'files'];
\tif (!is_array(\$this->files)) {
\t\t\$this->abort('Invalid session (in afterupload, POST, is_array(files))');
\t}
\tif (\$this->appletparams['sendMD5Sum'] == 'true'  &&  !isset(\$_POST['md5sum'])) {
\t\t\$this->abort('Required POST variable md5sum is missing');
\t}
\t\$cnt = 0;
\tforeach (\$_FILES as \$key => \$value) {
\t\t//Let's read the \$_FILES data
\t\tif (isset(\$files_data)) {
\t\t\tunset(\$files_data);
\t\t}
\t\t\$jupart\t\t\t= (isset(\$_POST['jupart']))\t\t \t\t? (int)\$_POST['jupart']\t\t: 0;
\t\t\$jufinal\t\t= (isset(\$_POST['jufinal']))\t \t\t? (int)\$_POST['jufinal']\t: 1;
\t\t\$relpaths\t\t= (isset(\$_POST['relpathinfo'])) \t? \$_POST['relpathinfo']\t\t: null;
\t\t\$md5sums\t\t= (isset(\$_POST['md5sum']))\t\t\t\t? \$_POST['md5sum']\t\t\t\t: null;
\t\t\$mimetypes \t= (isset(\$_POST['mimetype'])) \t \t? \$_POST['mimetype'] \t\t\t: null;
\t\t//\$relpaths = (isset(\$_POST[\"relpathinfo\$cnt\"])) ? \$_POST[\"relpathinfo\$cnt\"] : null;
\t\t//\$md5sums = (isset(\$_POST[\"md5sum\$cnt\"])) ? \$_POST[\"md5sum\$cnt\"] : null;

\t\tif (gettype(\$relpaths) == 'string') {
\t\t\t\$relpaths = array(\$relpaths);
\t\t}
\t\tif (gettype(\$md5sums) == 'string') {
\t\t\t\$md5sums = array(\$md5sums);
\t\t}
\t\tif (\$this->appletparams['sendMD5Sum'] == 'true'  && !is_array(\$md5sums)) {
\t\t\t\$this->abort('Expecting an array of MD5 checksums');
\t\t}
\t\tif (!is_array(\$relpaths)) {
\t\t\t\$this->abort('Expecting an array of relative paths');
\t\t}
\t\tif (!is_array(\$mimetypes)) {
\t\t\t\$this->abort('Expecting an array of MIME types');
\t\t}
\t\t// Check the MIME type (note: this is easily forged!)
\t\tif (isset(\$this->classparams['allowed_mime_types']) && is_array(\$this->classparams['allowed_mime_types'])) {
\t\t\tif (!in_array(\$mimetypes[\$cnt], \$this->classparams['allowed_mime_types'])) {
\t\t\t\t\$this->abort('MIME type '.\$mimetypes[\$cnt].' not allowed');
\t\t\t}
\t\t}
\t\tif (isset(\$this->classparams['allowed_file_extensions']) && is_array(\$this->classparams['allowed_file_extensions'])) {
\t\t\t\$fileExtension = substr(strrchr(\$value['name'][\$cnt], \".\"), 1);
\t\t\tif (!in_array(\$fileExtension, \$this->classparams['allowed_file_extensions'])) {
\t\t\t\t\$this->abort('File extension '.\$fileExtension.' not allowed');
\t\t\t}
\t\t}

\t\t\$dstdir = \$this->classparams['destdir'];
\t\t\$dstname = \$dstdir.'/'.\$this->classparams['tmp_prefix'].session_id();
\t\t\$tmpname = \$dstdir.'/'.\$this->classparams['tmp_prefix'].'tmp'.session_id();

\t\t// Controls are now done. Let's store the current uploaded files properties in an array, for future use.
\t\t\$files_data['name']\t\t\t\t\t= \$value['name'][\$cnt];
\t\t\$files_data['size']\t\t\t\t\t= 'not calculated yet';
\t\t\$files_data['tmp_name']\t\t\t= \$value['tmp_name'][\$cnt];
\t\t\$files_data['error']    \t\t= \$value['error'][\$cnt];
\t\t\$files_data['relativePath'] = \$relpaths[\$cnt];
\t\t\$files_data['md5sum']  \t\t\t= \$md5sums[\$cnt];
\t\t\$files_data['mimetype']  \t\t= \$mimetypes[\$cnt];

\t\tif (!move_uploaded_file(\$files_data['tmp_name'], \$tmpname)) {
\t\t\tif (\$classparams['verbose_errors']) {
\t\t\t\t\$this->abort(\"Unable to move uploaded file (from \${files_data['tmp_name']} to \$tmpname)\");
\t\t} else {
\t\t\ttrigger_error(\"Unable to move uploaded file (from \${files_data['tmp_name']} to \$tmpname)\",E_USER_WARNING);
\t\t\t\$this->abort(\"Unable to move uploaded file\");
\t}
}

// In demo mode, no file storing is done. We just delete the newly uploaded file.
if (\$this->classparams['demo_mode']) {
\tif (\$jufinal || (!\$jupart)) {
\t\tif (\$jupart) {
\t\t\t\$files_data['size']\t\t= (\$jupart-1) * \$this->appletparams['maxChunkSize'] + filesize(\$tmpname);
\t\t} else {
\t\t\t\$files_data['size']\t\t= filesize(\$tmpname);
\t\t}
\t\t\$files_data['fullName']\t= 'Demo mode<BR>No file storing';
\t\tarray_push(\$this->files, \$files_data);
\t}
\tunlink(\$tmpname);
\t\$cnt++;
\tcontinue;
}
//If we get here, the upload is a real one (no demo)
if (\$jupart) {
\t// got a chunk of a multi-part upload
\t\$len = filesize(\$tmpname);
\t\$_SESSION['RF'][\$this->classparams['var_prefix'].'size'] += \$len;
\tif (\$len > 0) {
\t\t\$src = fopen(\$tmpname, 'rb');
\t\t\$dst = fopen(\$dstname, (\$jupart == 1) ? 'wb' : 'ab');
\t\twhile (\$len > 0) {
\t\t\t\$rlen = (\$len > 8192) ? 8192 : \$len;
\t\t\t\$buf = fread(\$src, \$rlen);
\t\t\tif (!\$buf) {
\t\t\t\tfclose(\$src);
\t\t\t\tfclose(\$dst);
\t\t\t\tunlink(\$dstname);
\t\t\t\t\$this->abort('read IO error');
\t\t\t}
\t\t\tif (!fwrite(\$dst, \$buf, \$rlen)) {
\t\t\t\tfclose(\$src);
\t\t\t\tfclose(\$dst);
\t\t\t\tunlink(\$dstname);
\t\t\t\t\$this->abort('write IO error');
\t\t\t}
\t\t\t\$len -= \$rlen;
\t\t}
\t\tfclose(\$src);
\t\tfclose(\$dst);
\t\tunlink(\$tmpname);
\t}
\tif (\$jufinal) {
\t\t// This is the last chunk. Check total lenght and
\t\t// rename it to it's final name.
\t\t\$dlen = filesize(\$dstname);
\t\tif (\$dlen != \$_SESSION['RF'][\$this->classparams['var_prefix'].'size'])
\t\t\$this->abort('file size mismatch');
\t\tif (\$this->appletparams['sendMD5Sum'] == 'true' ) {
\t\t\tif (\$md5sums[\$cnt] != md5_file(\$dstname))
\t\t\t\$this->abort('MD5 checksum mismatch');
\t\t}
\t\t// remove zero sized files
\t\tif ((\$dlen > 0) || \$this->classparams['allow_zerosized']) {
\t\t\t\$dstfinal = \$this->dstfinal(\$files_data['name'],\$files_data['relativePath']);
\t\t\tif (!rename(\$dstname, \$dstfinal))
\t\t\t\$this->abort('rename IO error');
\t\t\t\$_umask = umask(0); \t// override the system mask
\t\t\tif (!chmod(\$dstfinal, \$this->classparams['fileperm']))
\t\t\t\t\$this->abort('chmod IO error');
\t\t\tumask(\$_umask);
\t\t\t\$files_data['size']\t\t= filesize(\$dstfinal);
\t\t\t\$files_data['fullName']\t= \$dstfinal;
\t\t\t\$files_data['path']\t= fix_dirname(\$dstfinal);
\t\t\tarray_push(\$this->files, \$files_data);
\t\t} else {
\t\t\tunlink(\$dstname);
\t\t}
\t\t// reset session var
\t\t\$_SESSION['RF'][\$this->classparams['var_prefix'].'size'] = 0;
\t}
} else {
\t// Got a single file upload. Trivial.
\tif (\$this->appletparams['sendMD5Sum'] == 'true' ) {
\t\tif (\$md5sums[\$cnt] != md5_file(\$tmpname))
\t\t\t\$this->abort('MD5 checksum mismatch');
\t}
\t\$dstfinal = \$this->dstfinal(\$files_data['name'],\$files_data['relativePath']);
\tif (!rename(\$tmpname, \$dstfinal))
\t\$this->abort('rename IO error');
\t\$_umask = umask(0); \t// override the system mask
\tif (!chmod(\$dstfinal, \$this->classparams['fileperm']))
\t\t\$this->abort('chmod IO error');
\tumask(\$_umask);
\t\$files_data['size']\t\t= filesize(\$dstfinal);
\t\$files_data['fullName']\t= \$dstfinal;
\t\$files_data['path']\t= fix_dirname(\$dstfinal);
\tarray_push(\$this->files, \$files_data);
}
\$cnt++;
}

echo \$this->appletparams['stringUploadSuccess'].\"\\n\";
\$_SESSION['RF'][\$this->classparams['var_prefix'].'files'] = \$this->files;
session_write_close();
exit;
}

/**
 *
 *
 */
private function page_start() {
\t\$this->logDebug('page_start', 'Entering function');

\t// If the applet checks for the serverProtocol, it issues a HEAD request
\t// -> Simply return an empty doc.
\tif (\$_SERVER['REQUEST_METHOD'] == 'HEAD') {
\t\t// Nothing to do

\t} else if (\$_SERVER['REQUEST_METHOD'] == 'GET') {
\t\t// A GET request means: return upload page
\t\t\$this->logDebug('page_start', 'Entering GET management');

\t\tif (session_id() == '') {
\t\t\tsession_start();
\t\t}
\t\tif (isset(\$_GET['afterupload'])) {
\t\t\t\$this->logDebug('page_start', 'afterupload is set');
\t\t\tif (!isset(\$_SESSION['RF'][\$this->classparams['var_prefix'].'files'])) {
\t\t\t\t\$this->abort('Invalid session (in afterupload, GET, check of \$_SESSION[\"RF\"]): files array is not set');
\t\t\t}
\t\t\t\$this->files = \$_SESSION['RF'][\$this->classparams['var_prefix'].'files'];
\t\t\tif (!is_array(\$this->files)) {
\t\t\t\t\$this->abort('Invalid session (in afterupload, GET, check of is_array(files)): files is not an array');
\t\t\t}
\t\t\t// clear session data ready for new upload
\t\t\t\$_SESSION['RF'][\$this->classparams['var_prefix'].'files'] = array();

\t\t\t// start intercepting the content of the calling page, to display the upload result.
\t\t\tob_start(array(& \$this, 'interceptAfterUpload'));

\t\t} else {
\t\t\t\$this->logDebug('page_start', 'afterupload is not set');
\t\t\tif (\$this->classparams['session_regenerate']) {
\t\t\t\tsession_regenerate_id(true);
\t\t\t}
\t\t\t\$this->files = array();
\t\t\t\$_SESSION['RF'][\$this->classparams['var_prefix'].'size'] = 0;
\t\t\t\$_SESSION['RF'][\$this->classparams['var_prefix'].'files'] = \$this->files;
\t\t\t// start intercepting the content of the calling page, to display the applet tag.
\t\t\tob_start(array(& \$this, 'interceptBeforeUpload'));
\t\t}

\t} else if (\$_SERVER['REQUEST_METHOD'] == 'POST') {
\t\t// If we got a POST request, this is the real work.
\t\tif (isset(\$_GET['errormail'])) {
\t\t\t//Hum, an error occurs on server side. Let's manage the debug log, that we just received.
\t\t\t\$this->receive_debug_log();
\t\t} else {
\t\t\t\$this->receive_uploaded_files();
\t\t}
\t}
}
}

// PHP end tag omitted intentionally!!
", "@MwebAdmin/filemanager/uploader/jupload.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/uploader/jupload.php");
    }
}
