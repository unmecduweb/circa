<?php

/* @MwebAdmin/filemanager/force_download.php */
class __TwigTemplate_25b27de036d25b70d02c4a8f23334fd7bbe01e5fb37e717b62da820d347f4d7f extends Twig_Template
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
        $__internal_4dc7318a7e03f44f02d89980d7fb81fd27cc436920ab4164d87961fc63e2e4ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc7318a7e03f44f02d89980d7fb81fd27cc436920ab4164d87961fc63e2e4ed->enter($__internal_4dc7318a7e03f44f02d89980d7fb81fd27cc436920ab4164d87961fc63e2e4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/force_download.php"));

        // line 1
        echo "<?php

\$config = include 'config/config.php';


//TODO switch to array
extract(\$config, EXTR_OVERWRITE);

include 'include/utils.php';

\$ftp = ftp_con(\$config);

if (\$_SESSION['RF'][\"verify\"] != \"RESPONSIVEfilemanager\")
{
\tresponse(trans('forbiden').AddErrorLocation(), 403)->send();
\texit;
}

include 'include/mime_type_lib.php';


if (
\tstrpos(\$_POST['path'], '/') === 0
\t|| strpos(\$_POST['path'], '../') !== false
\t|| strpos(\$_POST['path'], './') === 0
)
{
\tresponse(trans('wrong path'.AddErrorLocation()), 400)->send();
\texit;
}


if (strpos(\$_POST['name'], '/') !== false)
{
\tresponse(trans('wrong path'.AddErrorLocation()), 400)->send();
\texit;
}
if(\$ftp){
    \$path = \$ftp_base_url . \$upload_dir . \$_POST['path'];
}else{
    \$path = \$current_path . \$_POST['path'];
}

\$name = \$_POST['name'];

\$info = pathinfo(\$name);

if ( ! in_array(fix_strtolower(\$info['extension']), \$ext))
{
\tresponse(trans('wrong extension'.AddErrorLocation()), 400)->send();
\texit;
}



\$file_name  = \$info['basename'];
\$file_ext   = \$info['extension'];
\$file_path  = \$path . \$name;

// make sure the file exists
if(\$ftp){
    \$file_url = 'http://www.myremoteserver.com/file.exe';
    header('Content-Type: application/octet-stream');
    header(\"Content-Transfer-Encoding: Binary\"); 
    header(\"Content-disposition: attachment; filename=\\\"\" . \$file_name . \"\\\"\"); 
    readfile(\$file_path);
}elseif (is_file(\$file_path) && is_readable(\$file_path))
{
    if ( ! file_exists(\$path . \$name))
    {
        response(trans('File_Not_Found'.AddErrorLocation()), 404)->send();
        exit;
    }

    \$size = filesize(\$file_path);
    \$file_name = rawurldecode(\$file_name);
    if (function_exists('mime_content_type')){
        \$mime_type = mime_content_type(\$file_path);
    }elseif(function_exists('finfo_open')){
        \$finfo = finfo_open(FILEINFO_MIME_TYPE);
        \$mime_type = finfo_file(\$finfo, \$file_path);
    }else{
        include 'include/mime_type_lib.php';
        \$mime_type = get_file_mime_type(\$file_path);
    }

    @ob_end_clean();
    if(ini_get('zlib.output_compression')){
        ini_set('zlib.output_compression', 'Off');
    }
    header('Content-Type: ' . \$mime_type);
    header('Content-Disposition: attachment; filename=\"'.\$file_name.'\"');
    header(\"Content-Transfer-Encoding: binary\");
    header('Accept-Ranges: bytes');

    if(isset(\$_SERVER['HTTP_RANGE']))
    {
        list(\$a, \$range) = explode(\"=\",\$_SERVER['HTTP_RANGE'],2);
        list(\$range) = explode(\",\",\$range,2);
        list(\$range, \$range_end) = explode(\"-\", \$range);
        \$range=intval(\$range);
        if(!\$range_end) {
            \$range_end=\$size-1;
        } else {
            \$range_end=intval(\$range_end);
        }

        \$new_length = \$range_end-\$range+1;
        header(\"HTTP/1.1 206 Partial Content\");
        header(\"Content-Length: \$new_length\");
        header(\"Content-Range: bytes \$range-\$range_end/\$size\");
    } else {
        \$new_length=\$size;
        header(\"Content-Length: \".\$size);
    }

    \$chunksize = 1*(1024*1024);
    \$bytes_send = 0;
    if (\$file = fopen(\$file_path, 'r'))
    {
        if(isset(\$_SERVER['HTTP_RANGE']))
        fseek(\$file, \$range);

        while(!feof(\$file) &&
            (!connection_aborted()) &&
            (\$bytes_send<\$new_length)
        )
        {
            \$buffer = fread(\$file, \$chunksize);
            echo(\$buffer);
            flush();
            \$bytes_send += strlen(\$buffer);
        }
        fclose(\$file);
    } else {
        die('Error - can not open file.');
    }

    die();

}
else
{
\t// file does not exist
\theader(\"HTTP/1.0 404 Not Found\");
\texit;
}

exit;";
        
        $__internal_4dc7318a7e03f44f02d89980d7fb81fd27cc436920ab4164d87961fc63e2e4ed->leave($__internal_4dc7318a7e03f44f02d89980d7fb81fd27cc436920ab4164d87961fc63e2e4ed_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/force_download.php";
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

\$config = include 'config/config.php';


//TODO switch to array
extract(\$config, EXTR_OVERWRITE);

include 'include/utils.php';

\$ftp = ftp_con(\$config);

if (\$_SESSION['RF'][\"verify\"] != \"RESPONSIVEfilemanager\")
{
\tresponse(trans('forbiden').AddErrorLocation(), 403)->send();
\texit;
}

include 'include/mime_type_lib.php';


if (
\tstrpos(\$_POST['path'], '/') === 0
\t|| strpos(\$_POST['path'], '../') !== false
\t|| strpos(\$_POST['path'], './') === 0
)
{
\tresponse(trans('wrong path'.AddErrorLocation()), 400)->send();
\texit;
}


if (strpos(\$_POST['name'], '/') !== false)
{
\tresponse(trans('wrong path'.AddErrorLocation()), 400)->send();
\texit;
}
if(\$ftp){
    \$path = \$ftp_base_url . \$upload_dir . \$_POST['path'];
}else{
    \$path = \$current_path . \$_POST['path'];
}

\$name = \$_POST['name'];

\$info = pathinfo(\$name);

if ( ! in_array(fix_strtolower(\$info['extension']), \$ext))
{
\tresponse(trans('wrong extension'.AddErrorLocation()), 400)->send();
\texit;
}



\$file_name  = \$info['basename'];
\$file_ext   = \$info['extension'];
\$file_path  = \$path . \$name;

// make sure the file exists
if(\$ftp){
    \$file_url = 'http://www.myremoteserver.com/file.exe';
    header('Content-Type: application/octet-stream');
    header(\"Content-Transfer-Encoding: Binary\"); 
    header(\"Content-disposition: attachment; filename=\\\"\" . \$file_name . \"\\\"\"); 
    readfile(\$file_path);
}elseif (is_file(\$file_path) && is_readable(\$file_path))
{
    if ( ! file_exists(\$path . \$name))
    {
        response(trans('File_Not_Found'.AddErrorLocation()), 404)->send();
        exit;
    }

    \$size = filesize(\$file_path);
    \$file_name = rawurldecode(\$file_name);
    if (function_exists('mime_content_type')){
        \$mime_type = mime_content_type(\$file_path);
    }elseif(function_exists('finfo_open')){
        \$finfo = finfo_open(FILEINFO_MIME_TYPE);
        \$mime_type = finfo_file(\$finfo, \$file_path);
    }else{
        include 'include/mime_type_lib.php';
        \$mime_type = get_file_mime_type(\$file_path);
    }

    @ob_end_clean();
    if(ini_get('zlib.output_compression')){
        ini_set('zlib.output_compression', 'Off');
    }
    header('Content-Type: ' . \$mime_type);
    header('Content-Disposition: attachment; filename=\"'.\$file_name.'\"');
    header(\"Content-Transfer-Encoding: binary\");
    header('Accept-Ranges: bytes');

    if(isset(\$_SERVER['HTTP_RANGE']))
    {
        list(\$a, \$range) = explode(\"=\",\$_SERVER['HTTP_RANGE'],2);
        list(\$range) = explode(\",\",\$range,2);
        list(\$range, \$range_end) = explode(\"-\", \$range);
        \$range=intval(\$range);
        if(!\$range_end) {
            \$range_end=\$size-1;
        } else {
            \$range_end=intval(\$range_end);
        }

        \$new_length = \$range_end-\$range+1;
        header(\"HTTP/1.1 206 Partial Content\");
        header(\"Content-Length: \$new_length\");
        header(\"Content-Range: bytes \$range-\$range_end/\$size\");
    } else {
        \$new_length=\$size;
        header(\"Content-Length: \".\$size);
    }

    \$chunksize = 1*(1024*1024);
    \$bytes_send = 0;
    if (\$file = fopen(\$file_path, 'r'))
    {
        if(isset(\$_SERVER['HTTP_RANGE']))
        fseek(\$file, \$range);

        while(!feof(\$file) &&
            (!connection_aborted()) &&
            (\$bytes_send<\$new_length)
        )
        {
            \$buffer = fread(\$file, \$chunksize);
            echo(\$buffer);
            flush();
            \$bytes_send += strlen(\$buffer);
        }
        fclose(\$file);
    } else {
        die('Error - can not open file.');
    }

    die();

}
else
{
\t// file does not exist
\theader(\"HTTP/1.0 404 Not Found\");
\texit;
}

exit;", "@MwebAdmin/filemanager/force_download.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/force_download.php");
    }
}
