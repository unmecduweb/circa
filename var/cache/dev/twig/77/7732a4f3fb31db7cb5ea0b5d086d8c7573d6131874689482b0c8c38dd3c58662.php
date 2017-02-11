<?php

/* @MwebAdmin/filemanager/include/mime_type_lib.php */
class __TwigTemplate_9f535ee9b6c8b58c084300b166d1f12aa3ad777363ab737655c69d599e60db70 extends Twig_Template
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
        $__internal_316b745235e68b65003bec56d4b6e8338fefc0de74722dae7cbf40f439fe2ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316b745235e68b65003bec56d4b6e8338fefc0de74722dae7cbf40f439fe2ae1->enter($__internal_316b745235e68b65003bec56d4b6e8338fefc0de74722dae7cbf40f439fe2ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/include/mime_type_lib.php"));

        // line 1
        echo "<?php

/********************************
 * The following commented code can be uncommented if you wish
 * to quickly find information about your system's MIME setup.
 *
 * Simply remove the \"REMOVE ME TO TEST\" lines below to have
 * the code run when this file runs.
 *
 * In addition to these tests, you'll find some commented code
 * at the bottom of the file that can be used to test the
 * function.
 *
 * Run the code with this command:
 * php mime_type_lib.php
 ********************************/


/* REMOVE ME TO TEST
echo \"magicfile: \" . ini_get( 'mime_magic.magicfile' ) . \"\\n\";

if ( function_exists( 'finfo_open' ) )
\techo \"Found finfo_open function\\n\";
else
\techo \"Did not find finfo_open function\\n\";

if ( function_exists( 'mime_content_type' ) )
\techo \"Found mime_content_type function\\n\";
else
\techo \"Did not find mime_content_type function\\n\";
REMOVE ME TO TEST */

\$mime_types = array(
\t'ai'      => 'application/postscript',
\t'aif'     => 'audio/x-aiff',
\t'aifc'    => 'audio/x-aiff',
\t'aiff'    => 'audio/x-aiff',
\t'asc'     => 'text/plain',
\t'asf'     => 'video/x-ms-asf',
\t'asx'     => 'video/x-ms-asf',
\t'au'      => 'audio/basic',
\t'avi'     => 'video/x-msvideo',
\t'bcpio'   => 'application/x-bcpio',
\t'bin'     => 'application/octet-stream',
\t'bmp'     => 'image/bmp',
\t'bz2'     => 'application/x-bzip2',
\t'cdf'     => 'application/x-netcdf',
\t'chrt'    => 'application/x-kchart',
\t'class'   => 'application/octet-stream',
\t'cpio'    => 'application/x-cpio',
\t'cpt'     => 'application/mac-compactpro',
\t'csh'     => 'application/x-csh',
\t'css'     => 'text/css',
\t'dcr'     => 'application/x-director',
\t'dir'     => 'application/x-director',
\t'djv'     => 'image/vnd.djvu',
\t'djvu'    => 'image/vnd.djvu',
\t'dll'     => 'application/octet-stream',
\t'dms'     => 'application/octet-stream',
\t'dvi'     => 'application/x-dvi',
\t'dxr'     => 'application/x-director',
\t'eps'     => 'application/postscript',
\t'etx'     => 'text/x-setext',
\t'exe'     => 'application/octet-stream',
\t'ez'      => 'application/andrew-inset',
\t'flv'     => 'video/x-flv',
\t'gif'     => 'image/gif',
\t'gtar'    => 'application/x-gtar',
\t'gz'      => 'application/x-gzip',
\t'hdf'     => 'application/x-hdf',
\t'hqx'     => 'application/mac-binhex40',
\t'htm'     => 'text/html',
\t'html'    => 'text/html',
\t'ice'     => 'x-conference/x-cooltalk',
\t'ief'     => 'image/ief',
\t'iges'    => 'model/iges',
\t'igs'     => 'model/iges',
\t'img'     => 'application/octet-stream',
\t'iso'     => 'application/octet-stream',
\t'jad'     => 'text/vnd.sun.j2me.app-descriptor',
\t'jar'     => 'application/x-java-archive',
\t'jnlp'    => 'application/x-java-jnlp-file',
\t'jpe'     => 'image/jpeg',
\t'jpeg'    => 'image/jpeg',
\t'jpg'     => 'image/jpeg',
\t'js'      => 'application/x-javascript',
\t'kar'     => 'audio/midi',
\t'kil'     => 'application/x-killustrator',
\t'kpr'     => 'application/x-kpresenter',
\t'kpt'     => 'application/x-kpresenter',
\t'ksp'     => 'application/x-kspread',
\t'kwd'     => 'application/x-kword',
\t'kwt'     => 'application/x-kword',
    'kml'     => 'application/vnd.google-earth.kml+xml',
    'kmz'     => 'application/vnd.google-earth.kmz',
\t'latex'   => 'application/x-latex',
\t'lha'     => 'application/octet-stream',
\t'lzh'     => 'application/octet-stream',
\t'm3u'     => 'audio/x-mpegurl',
\t'man'     => 'application/x-troff-man',
\t'me'      => 'application/x-troff-me',
\t'mesh'    => 'model/mesh',
\t'mid'     => 'audio/midi',
\t'midi'    => 'audio/midi',
\t'mif'     => 'application/vnd.mif',
\t'mov'     => 'video/quicktime',
\t'movie'   => 'video/x-sgi-movie',
\t'mp2'     => 'audio/mpeg',
\t'mp3'     => 'audio/mpeg',
\t'mpe'     => 'video/mpeg',
\t'mpg'     => 'video/mpeg',
\t'mpeg'    => 'video/mpeg',
\t'ms'      => 'application/x-troff-ms',
\t'msh'     => 'model/mesh',
\t'mxu'     => 'video/vnd.mpegurl',
\t'nc'      => 'application/x-netcdf',
\t'odb'     => 'application/vnd.oasis.opendocument.database',
\t'odc'     => 'application/vnd.oasis.opendocument.chart',
\t'odf'     => 'application/vnd.oasis.opendocument.formula',
\t'odg'     => 'application/vnd.oasis.opendocument.graphics',
\t'odi'     => 'application/vnd.oasis.opendocument.image',
\t'odm'     => 'application/vnd.oasis.opendocument.text-master',
\t'odp'     => 'application/vnd.oasis.opendocument.presentation',
\t'ods'     => 'application/vnd.oasis.opendocument.spreadsheet',
\t'odt'     => 'application/vnd.oasis.opendocument.text',
\t'ogg'     => 'application/ogg',
\t'otg'     => 'application/vnd.oasis.opendocument.graphics-template',
\t'oth'     => 'application/vnd.oasis.opendocument.text-web',
\t'otp'     => 'application/vnd.oasis.opendocument.presentation-template',
\t'ots'     => 'application/vnd.oasis.opendocument.spreadsheet-template',
\t'ott'     => 'application/vnd.oasis.opendocument.text-template',
\t'pbm'     => 'image/x-portable-bitmap',
\t'pdb'     => 'chemical/x-pdb',
\t'pdf'     => 'application/pdf',
\t'pgm'     => 'image/x-portable-graymap',
\t'pgn'     => 'application/x-chess-pgn',
\t'php'     => 'text/x-php',
\t'png'     => 'image/png',
\t'pnm'     => 'image/x-portable-anymap',
\t'ppm'     => 'image/x-portable-pixmap',
\t'ppt'     => 'application/vnd.ms-powerpoint',
\t'ps'      => 'application/postscript',
\t'qt'      => 'video/quicktime',
\t'ra'      => 'audio/x-realaudio',
\t'ram'     => 'audio/x-pn-realaudio',
\t'ras'     => 'image/x-cmu-raster',
\t'rgb'     => 'image/x-rgb',
\t'rm'      => 'audio/x-pn-realaudio',
\t'roff'    => 'application/x-troff',
\t'rpm'     => 'application/x-rpm',
\t'rtf'     => 'text/rtf',
\t'rtx'     => 'text/richtext',
\t'sgm'     => 'text/sgml',
\t'sgml'    => 'text/sgml',
\t'sh'      => 'application/x-sh',
\t'shar'    => 'application/x-shar',
\t'silo'    => 'model/mesh',
\t'sis'     => 'application/vnd.symbian.install',
\t'sit'     => 'application/x-stuffit',
\t'skd'     => 'application/x-koan',
\t'skm'     => 'application/x-koan',
\t'skp'     => 'application/x-koan',
\t'skt'     => 'application/x-koan',
\t'smi'     => 'application/smil',
\t'smil'    => 'application/smil',
\t'snd'     => 'audio/basic',
\t'so'      => 'application/octet-stream',
\t'spl'     => 'application/x-futuresplash',
\t'src'     => 'application/x-wais-source',
\t'stc'     => 'application/vnd.sun.xml.calc.template',
\t'std'     => 'application/vnd.sun.xml.draw.template',
\t'sti'     => 'application/vnd.sun.xml.impress.template',
\t'stw'     => 'application/vnd.sun.xml.writer.template',
\t'sv4cpio' => 'application/x-sv4cpio',
\t'sv4crc'  => 'application/x-sv4crc',
\t'swf'     => 'application/x-shockwave-flash',
\t'sxc'     => 'application/vnd.sun.xml.calc',
\t'sxd'     => 'application/vnd.sun.xml.draw',
\t'sxg'     => 'application/vnd.sun.xml.writer.global',
\t'sxi'     => 'application/vnd.sun.xml.impress',
\t'sxm'     => 'application/vnd.sun.xml.math',
\t'sxw'     => 'application/vnd.sun.xml.writer',
\t't'       => 'application/x-troff',
\t'tar'     => 'application/x-tar',
\t'tcl'     => 'application/x-tcl',
\t'tex'     => 'application/x-tex',
\t'texi'    => 'application/x-texinfo',
\t'texinfo' => 'application/x-texinfo',
\t'tgz'     => 'application/x-gzip',
\t'tif'     => 'image/tiff',
\t'tiff'    => 'image/tiff',
\t'torrent' => 'application/x-bittorrent',
\t'tr'      => 'application/x-troff',
\t'tsv'     => 'text/tab-separated-values',
\t'txt'     => 'text/plain',
\t'ustar'   => 'application/x-ustar',
\t'vcd'     => 'application/x-cdlink',
\t'vrml'    => 'model/vrml',
\t'wav'     => 'audio/x-wav',
\t'wax'     => 'audio/x-ms-wax',
\t'wbmp'    => 'image/vnd.wap.wbmp',
\t'wbxml'   => 'application/vnd.wap.wbxml',
\t'wm'      => 'video/x-ms-wm',
\t'wma'     => 'audio/x-ms-wma',
\t'wml'     => 'text/vnd.wap.wml',
\t'wmlc'    => 'application/vnd.wap.wmlc',
\t'wmls'    => 'text/vnd.wap.wmlscript',
\t'wmlsc'   => 'application/vnd.wap.wmlscriptc',
\t'wmv'     => 'video/x-ms-wmv',
\t'wmx'     => 'video/x-ms-wmx',
\t'wrl'     => 'model/vrml',
\t'wvx'     => 'video/x-ms-wvx',
\t'xbm'     => 'image/x-xbitmap',
\t'xht'     => 'application/xhtml+xml',
\t'xhtml'   => 'application/xhtml+xml',
\t'xml'     => 'text/xml',
\t'xpm'     => 'image/x-xpixmap',
\t'xsl'     => 'text/xml',
\t'xwd'     => 'image/x-xwindowdump',
\t'xyz'     => 'chemical/x-xyz',
\t'zip'     => 'application/zip',
\t'doc'      => 'application/msword',
\t'docx'     => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
\t'dotx'     => 'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
\t'docm'     => 'application/vnd.ms-word.document.macroEnabled.12',
\t'xls'      => 'application/vnd.ms-excel',
\t'xlsx'     => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
\t'xltx'     => 'application/vnd.openxmlformats-officedocument.spreadsheetml.template',
\t'xlsm'     => 'application/vnd.ms-excel.sheet.macroEnabled.12',
\t'xltm'     => 'application/vnd.ms-excel.template.macroEnabled.12',
\t'xlam'     => 'application/vnd.ms-excel.addin.macroEnabled.12',
\t'xlsb'     => 'application/vnd.ms-excel.sheet.binary.macroEnabled.12',
\t'ppt'      => 'application/vnd.ms-powerpoint',
\t'pptx'     => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
\t'potx'     => 'application/vnd.openxmlformats-officedocument.presentationml.template',
\t'ppsx'     => 'application/vnd.openxmlformats-officedocument.presentationml.slideshow',
\t'ppam'     => 'application/vnd.ms-powerpoint.addin.macroEnabled.12',
\t'pptm'     => 'application/vnd.ms-powerpoint.presentation.macroEnabled.12',
\t'potm'     => 'application/vnd.ms-powerpoint.template.macroEnabled.12',
\t'ppsm'     => 'application/vnd.ms-powerpoint.slideshow.macroEnabled.12',
);

// nyro update
\$GLOBALS['mime_types'] = \$mime_types;

if ( ! function_exists('get_extension_from_mime'))
{
\tfunction get_extension_from_mime(\$mime){
\t\tglobal \$mime_types;
\t\tif(strpos(\$mime, ';')!==FALSE){
\t\t\t\$mime = substr(\$mime, 0,strpos(\$mime, ';'));
\t\t}
\t\t\$mime_types_conv = array_flip(\$mime_types);
\t\tif(isset(\$mime_types_conv[\$mime])){
\t\t\treturn \$mime_types_conv[\$mime];
\t\t}
\t\treturn '';
\t}
}

if ( ! function_exists('get_file_mime_type'))
{
\tfunction get_file_mime_type(\$filename, \$debug = false)
\t{
\t\tif (function_exists('finfo_open') && function_exists('finfo_file') && function_exists('finfo_close'))
\t\t{
\t\t\t\$fileinfo = finfo_open(FILEINFO_MIME_TYPE);
\t\t\t\$mime_type = finfo_file(\$fileinfo, \$filename);
\t\t\tfinfo_close(\$fileinfo);

\t\t\tif ( ! empty(\$mime_type))
\t\t\t{
\t\t\t\tif (true === \$debug)
\t\t\t\t{
\t\t\t\t\treturn array( 'mime_type' => \$mime_type, 'method' => 'fileinfo' );
\t\t\t\t}

\t\t\t\treturn \$mime_type;
\t\t\t}
\t\t}

\t\tif (function_exists('mime_content_type'))
\t\t{
\t\t\t\$mime_type = mime_content_type(\$filename);

\t\t\tif ( ! empty(\$mime_type))
\t\t\t{
\t\t\t\tif (true === \$debug)
\t\t\t\t{
\t\t\t\t\treturn array( 'mime_type' => \$mime_type, 'method' => 'mime_content_type' );
\t\t\t\t}

\t\t\t\treturn \$mime_type;
\t\t\t}
\t\t}

\t\tglobal \$mime_types;

\t\t\$tmp_array = explode('.', \$filename);
\t\t\$ext = strtolower(array_pop(\$tmp_array));

\t\tif ( ! empty(\$mime_types[ \$ext ]))
\t\t{
\t\t\tif (true === \$debug)
\t\t\t{
\t\t\t\treturn array( 'mime_type' => \$mime_types[ \$ext ], 'method' => 'from_array' );
\t\t\t}

\t\t\treturn \$mime_types[ \$ext ];
\t\t}

\t\tif (true === \$debug)
\t\t{
\t\t\treturn array( 'mime_type' => 'application/octet-stream', 'method' => 'last_resort' );
\t\t}

\t\treturn 'application/octet-stream';
\t}
}


/********************
 * The following code can be used to test the function.
 * First put a plain text file named \"test.txt\" and a
 * JPEG image file named \"image.jpg\" in the same folder
 * as this file.
 *
 * Simply remove the \"REMOVE ME TO TEST\" lines below to have
 * the code run when this file runs.
 *
 * Run the code with this command:
 * php mime_type_lib.php
 ********************/


/* REMOVE ME TO TEST
echo get_file_mime_type( 'test.txt' ) . \"\\n\";
echo print_r( get_file_mime_type( 'image.jpg', true ), true ) . \"\\n\";
REMOVE ME TO TEST */
";
        
        $__internal_316b745235e68b65003bec56d4b6e8338fefc0de74722dae7cbf40f439fe2ae1->leave($__internal_316b745235e68b65003bec56d4b6e8338fefc0de74722dae7cbf40f439fe2ae1_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/include/mime_type_lib.php";
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

/********************************
 * The following commented code can be uncommented if you wish
 * to quickly find information about your system's MIME setup.
 *
 * Simply remove the \"REMOVE ME TO TEST\" lines below to have
 * the code run when this file runs.
 *
 * In addition to these tests, you'll find some commented code
 * at the bottom of the file that can be used to test the
 * function.
 *
 * Run the code with this command:
 * php mime_type_lib.php
 ********************************/


/* REMOVE ME TO TEST
echo \"magicfile: \" . ini_get( 'mime_magic.magicfile' ) . \"\\n\";

if ( function_exists( 'finfo_open' ) )
\techo \"Found finfo_open function\\n\";
else
\techo \"Did not find finfo_open function\\n\";

if ( function_exists( 'mime_content_type' ) )
\techo \"Found mime_content_type function\\n\";
else
\techo \"Did not find mime_content_type function\\n\";
REMOVE ME TO TEST */

\$mime_types = array(
\t'ai'      => 'application/postscript',
\t'aif'     => 'audio/x-aiff',
\t'aifc'    => 'audio/x-aiff',
\t'aiff'    => 'audio/x-aiff',
\t'asc'     => 'text/plain',
\t'asf'     => 'video/x-ms-asf',
\t'asx'     => 'video/x-ms-asf',
\t'au'      => 'audio/basic',
\t'avi'     => 'video/x-msvideo',
\t'bcpio'   => 'application/x-bcpio',
\t'bin'     => 'application/octet-stream',
\t'bmp'     => 'image/bmp',
\t'bz2'     => 'application/x-bzip2',
\t'cdf'     => 'application/x-netcdf',
\t'chrt'    => 'application/x-kchart',
\t'class'   => 'application/octet-stream',
\t'cpio'    => 'application/x-cpio',
\t'cpt'     => 'application/mac-compactpro',
\t'csh'     => 'application/x-csh',
\t'css'     => 'text/css',
\t'dcr'     => 'application/x-director',
\t'dir'     => 'application/x-director',
\t'djv'     => 'image/vnd.djvu',
\t'djvu'    => 'image/vnd.djvu',
\t'dll'     => 'application/octet-stream',
\t'dms'     => 'application/octet-stream',
\t'dvi'     => 'application/x-dvi',
\t'dxr'     => 'application/x-director',
\t'eps'     => 'application/postscript',
\t'etx'     => 'text/x-setext',
\t'exe'     => 'application/octet-stream',
\t'ez'      => 'application/andrew-inset',
\t'flv'     => 'video/x-flv',
\t'gif'     => 'image/gif',
\t'gtar'    => 'application/x-gtar',
\t'gz'      => 'application/x-gzip',
\t'hdf'     => 'application/x-hdf',
\t'hqx'     => 'application/mac-binhex40',
\t'htm'     => 'text/html',
\t'html'    => 'text/html',
\t'ice'     => 'x-conference/x-cooltalk',
\t'ief'     => 'image/ief',
\t'iges'    => 'model/iges',
\t'igs'     => 'model/iges',
\t'img'     => 'application/octet-stream',
\t'iso'     => 'application/octet-stream',
\t'jad'     => 'text/vnd.sun.j2me.app-descriptor',
\t'jar'     => 'application/x-java-archive',
\t'jnlp'    => 'application/x-java-jnlp-file',
\t'jpe'     => 'image/jpeg',
\t'jpeg'    => 'image/jpeg',
\t'jpg'     => 'image/jpeg',
\t'js'      => 'application/x-javascript',
\t'kar'     => 'audio/midi',
\t'kil'     => 'application/x-killustrator',
\t'kpr'     => 'application/x-kpresenter',
\t'kpt'     => 'application/x-kpresenter',
\t'ksp'     => 'application/x-kspread',
\t'kwd'     => 'application/x-kword',
\t'kwt'     => 'application/x-kword',
    'kml'     => 'application/vnd.google-earth.kml+xml',
    'kmz'     => 'application/vnd.google-earth.kmz',
\t'latex'   => 'application/x-latex',
\t'lha'     => 'application/octet-stream',
\t'lzh'     => 'application/octet-stream',
\t'm3u'     => 'audio/x-mpegurl',
\t'man'     => 'application/x-troff-man',
\t'me'      => 'application/x-troff-me',
\t'mesh'    => 'model/mesh',
\t'mid'     => 'audio/midi',
\t'midi'    => 'audio/midi',
\t'mif'     => 'application/vnd.mif',
\t'mov'     => 'video/quicktime',
\t'movie'   => 'video/x-sgi-movie',
\t'mp2'     => 'audio/mpeg',
\t'mp3'     => 'audio/mpeg',
\t'mpe'     => 'video/mpeg',
\t'mpg'     => 'video/mpeg',
\t'mpeg'    => 'video/mpeg',
\t'ms'      => 'application/x-troff-ms',
\t'msh'     => 'model/mesh',
\t'mxu'     => 'video/vnd.mpegurl',
\t'nc'      => 'application/x-netcdf',
\t'odb'     => 'application/vnd.oasis.opendocument.database',
\t'odc'     => 'application/vnd.oasis.opendocument.chart',
\t'odf'     => 'application/vnd.oasis.opendocument.formula',
\t'odg'     => 'application/vnd.oasis.opendocument.graphics',
\t'odi'     => 'application/vnd.oasis.opendocument.image',
\t'odm'     => 'application/vnd.oasis.opendocument.text-master',
\t'odp'     => 'application/vnd.oasis.opendocument.presentation',
\t'ods'     => 'application/vnd.oasis.opendocument.spreadsheet',
\t'odt'     => 'application/vnd.oasis.opendocument.text',
\t'ogg'     => 'application/ogg',
\t'otg'     => 'application/vnd.oasis.opendocument.graphics-template',
\t'oth'     => 'application/vnd.oasis.opendocument.text-web',
\t'otp'     => 'application/vnd.oasis.opendocument.presentation-template',
\t'ots'     => 'application/vnd.oasis.opendocument.spreadsheet-template',
\t'ott'     => 'application/vnd.oasis.opendocument.text-template',
\t'pbm'     => 'image/x-portable-bitmap',
\t'pdb'     => 'chemical/x-pdb',
\t'pdf'     => 'application/pdf',
\t'pgm'     => 'image/x-portable-graymap',
\t'pgn'     => 'application/x-chess-pgn',
\t'php'     => 'text/x-php',
\t'png'     => 'image/png',
\t'pnm'     => 'image/x-portable-anymap',
\t'ppm'     => 'image/x-portable-pixmap',
\t'ppt'     => 'application/vnd.ms-powerpoint',
\t'ps'      => 'application/postscript',
\t'qt'      => 'video/quicktime',
\t'ra'      => 'audio/x-realaudio',
\t'ram'     => 'audio/x-pn-realaudio',
\t'ras'     => 'image/x-cmu-raster',
\t'rgb'     => 'image/x-rgb',
\t'rm'      => 'audio/x-pn-realaudio',
\t'roff'    => 'application/x-troff',
\t'rpm'     => 'application/x-rpm',
\t'rtf'     => 'text/rtf',
\t'rtx'     => 'text/richtext',
\t'sgm'     => 'text/sgml',
\t'sgml'    => 'text/sgml',
\t'sh'      => 'application/x-sh',
\t'shar'    => 'application/x-shar',
\t'silo'    => 'model/mesh',
\t'sis'     => 'application/vnd.symbian.install',
\t'sit'     => 'application/x-stuffit',
\t'skd'     => 'application/x-koan',
\t'skm'     => 'application/x-koan',
\t'skp'     => 'application/x-koan',
\t'skt'     => 'application/x-koan',
\t'smi'     => 'application/smil',
\t'smil'    => 'application/smil',
\t'snd'     => 'audio/basic',
\t'so'      => 'application/octet-stream',
\t'spl'     => 'application/x-futuresplash',
\t'src'     => 'application/x-wais-source',
\t'stc'     => 'application/vnd.sun.xml.calc.template',
\t'std'     => 'application/vnd.sun.xml.draw.template',
\t'sti'     => 'application/vnd.sun.xml.impress.template',
\t'stw'     => 'application/vnd.sun.xml.writer.template',
\t'sv4cpio' => 'application/x-sv4cpio',
\t'sv4crc'  => 'application/x-sv4crc',
\t'swf'     => 'application/x-shockwave-flash',
\t'sxc'     => 'application/vnd.sun.xml.calc',
\t'sxd'     => 'application/vnd.sun.xml.draw',
\t'sxg'     => 'application/vnd.sun.xml.writer.global',
\t'sxi'     => 'application/vnd.sun.xml.impress',
\t'sxm'     => 'application/vnd.sun.xml.math',
\t'sxw'     => 'application/vnd.sun.xml.writer',
\t't'       => 'application/x-troff',
\t'tar'     => 'application/x-tar',
\t'tcl'     => 'application/x-tcl',
\t'tex'     => 'application/x-tex',
\t'texi'    => 'application/x-texinfo',
\t'texinfo' => 'application/x-texinfo',
\t'tgz'     => 'application/x-gzip',
\t'tif'     => 'image/tiff',
\t'tiff'    => 'image/tiff',
\t'torrent' => 'application/x-bittorrent',
\t'tr'      => 'application/x-troff',
\t'tsv'     => 'text/tab-separated-values',
\t'txt'     => 'text/plain',
\t'ustar'   => 'application/x-ustar',
\t'vcd'     => 'application/x-cdlink',
\t'vrml'    => 'model/vrml',
\t'wav'     => 'audio/x-wav',
\t'wax'     => 'audio/x-ms-wax',
\t'wbmp'    => 'image/vnd.wap.wbmp',
\t'wbxml'   => 'application/vnd.wap.wbxml',
\t'wm'      => 'video/x-ms-wm',
\t'wma'     => 'audio/x-ms-wma',
\t'wml'     => 'text/vnd.wap.wml',
\t'wmlc'    => 'application/vnd.wap.wmlc',
\t'wmls'    => 'text/vnd.wap.wmlscript',
\t'wmlsc'   => 'application/vnd.wap.wmlscriptc',
\t'wmv'     => 'video/x-ms-wmv',
\t'wmx'     => 'video/x-ms-wmx',
\t'wrl'     => 'model/vrml',
\t'wvx'     => 'video/x-ms-wvx',
\t'xbm'     => 'image/x-xbitmap',
\t'xht'     => 'application/xhtml+xml',
\t'xhtml'   => 'application/xhtml+xml',
\t'xml'     => 'text/xml',
\t'xpm'     => 'image/x-xpixmap',
\t'xsl'     => 'text/xml',
\t'xwd'     => 'image/x-xwindowdump',
\t'xyz'     => 'chemical/x-xyz',
\t'zip'     => 'application/zip',
\t'doc'      => 'application/msword',
\t'docx'     => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
\t'dotx'     => 'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
\t'docm'     => 'application/vnd.ms-word.document.macroEnabled.12',
\t'xls'      => 'application/vnd.ms-excel',
\t'xlsx'     => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
\t'xltx'     => 'application/vnd.openxmlformats-officedocument.spreadsheetml.template',
\t'xlsm'     => 'application/vnd.ms-excel.sheet.macroEnabled.12',
\t'xltm'     => 'application/vnd.ms-excel.template.macroEnabled.12',
\t'xlam'     => 'application/vnd.ms-excel.addin.macroEnabled.12',
\t'xlsb'     => 'application/vnd.ms-excel.sheet.binary.macroEnabled.12',
\t'ppt'      => 'application/vnd.ms-powerpoint',
\t'pptx'     => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
\t'potx'     => 'application/vnd.openxmlformats-officedocument.presentationml.template',
\t'ppsx'     => 'application/vnd.openxmlformats-officedocument.presentationml.slideshow',
\t'ppam'     => 'application/vnd.ms-powerpoint.addin.macroEnabled.12',
\t'pptm'     => 'application/vnd.ms-powerpoint.presentation.macroEnabled.12',
\t'potm'     => 'application/vnd.ms-powerpoint.template.macroEnabled.12',
\t'ppsm'     => 'application/vnd.ms-powerpoint.slideshow.macroEnabled.12',
);

// nyro update
\$GLOBALS['mime_types'] = \$mime_types;

if ( ! function_exists('get_extension_from_mime'))
{
\tfunction get_extension_from_mime(\$mime){
\t\tglobal \$mime_types;
\t\tif(strpos(\$mime, ';')!==FALSE){
\t\t\t\$mime = substr(\$mime, 0,strpos(\$mime, ';'));
\t\t}
\t\t\$mime_types_conv = array_flip(\$mime_types);
\t\tif(isset(\$mime_types_conv[\$mime])){
\t\t\treturn \$mime_types_conv[\$mime];
\t\t}
\t\treturn '';
\t}
}

if ( ! function_exists('get_file_mime_type'))
{
\tfunction get_file_mime_type(\$filename, \$debug = false)
\t{
\t\tif (function_exists('finfo_open') && function_exists('finfo_file') && function_exists('finfo_close'))
\t\t{
\t\t\t\$fileinfo = finfo_open(FILEINFO_MIME_TYPE);
\t\t\t\$mime_type = finfo_file(\$fileinfo, \$filename);
\t\t\tfinfo_close(\$fileinfo);

\t\t\tif ( ! empty(\$mime_type))
\t\t\t{
\t\t\t\tif (true === \$debug)
\t\t\t\t{
\t\t\t\t\treturn array( 'mime_type' => \$mime_type, 'method' => 'fileinfo' );
\t\t\t\t}

\t\t\t\treturn \$mime_type;
\t\t\t}
\t\t}

\t\tif (function_exists('mime_content_type'))
\t\t{
\t\t\t\$mime_type = mime_content_type(\$filename);

\t\t\tif ( ! empty(\$mime_type))
\t\t\t{
\t\t\t\tif (true === \$debug)
\t\t\t\t{
\t\t\t\t\treturn array( 'mime_type' => \$mime_type, 'method' => 'mime_content_type' );
\t\t\t\t}

\t\t\t\treturn \$mime_type;
\t\t\t}
\t\t}

\t\tglobal \$mime_types;

\t\t\$tmp_array = explode('.', \$filename);
\t\t\$ext = strtolower(array_pop(\$tmp_array));

\t\tif ( ! empty(\$mime_types[ \$ext ]))
\t\t{
\t\t\tif (true === \$debug)
\t\t\t{
\t\t\t\treturn array( 'mime_type' => \$mime_types[ \$ext ], 'method' => 'from_array' );
\t\t\t}

\t\t\treturn \$mime_types[ \$ext ];
\t\t}

\t\tif (true === \$debug)
\t\t{
\t\t\treturn array( 'mime_type' => 'application/octet-stream', 'method' => 'last_resort' );
\t\t}

\t\treturn 'application/octet-stream';
\t}
}


/********************
 * The following code can be used to test the function.
 * First put a plain text file named \"test.txt\" and a
 * JPEG image file named \"image.jpg\" in the same folder
 * as this file.
 *
 * Simply remove the \"REMOVE ME TO TEST\" lines below to have
 * the code run when this file runs.
 *
 * Run the code with this command:
 * php mime_type_lib.php
 ********************/


/* REMOVE ME TO TEST
echo get_file_mime_type( 'test.txt' ) . \"\\n\";
echo print_r( get_file_mime_type( 'image.jpg', true ), true ) . \"\\n\";
REMOVE ME TO TEST */
", "@MwebAdmin/filemanager/include/mime_type_lib.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/include/mime_type_lib.php");
    }
}
