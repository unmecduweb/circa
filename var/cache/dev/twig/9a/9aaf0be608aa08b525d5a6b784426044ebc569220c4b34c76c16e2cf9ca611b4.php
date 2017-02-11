<?php

/* @MwebAdmin/filemanager/upload.php */
class __TwigTemplate_297da6178f0f164ac8b9a4a81decee3f88cb2d630be99bbc2cee5860b11376d3 extends Twig_Template
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
        $__internal_878bc48d1c6af31fe979376e9a2d6807cca5d09cb9d04cfc8d66888075cfb78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878bc48d1c6af31fe979376e9a2d6807cca5d09cb9d04cfc8d66888075cfb78e->enter($__internal_878bc48d1c6af31fe979376e9a2d6807cca5d09cb9d04cfc8d66888075cfb78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/upload.php"));

        // line 1
        echo "<?php
if (!isset(\$config)){

  \$config = include 'config/config.php';
  //TODO switch to array
  extract(\$config, EXTR_OVERWRITE);
}
include 'include/utils.php';

if (\$_SESSION['RF'][\"verify\"] != \"RESPONSIVEfilemanager\")
{
\tresponse(trans('forbiden').AddErrorLocation(), 403)->send();
\texit;
}

include 'include/mime_type_lib.php';

if (isset(\$_POST['path']))
{
   \$storeFolder = \$_POST['path'];
   \$storeFolderThumb = \$_POST['path_thumb'];
}
else
{
   \$storeFolder = \$current_path.\$_POST[\"fldr\"]; // correct for when IE is in Compatibility mode
   \$storeFolderThumb = \$thumbs_base_path.\$_POST[\"fldr\"];
}

\$ftp=ftp_con(\$config);
if(\$ftp){
\t\$source_base = \$ftp_base_folder.\$upload_dir;
\t\$thumb_base = \$ftp_base_folder.\$ftp_thumbs_dir;
\t\$path_pos  = strpos(\$storeFolder,\$source_base);
\t\$thumb_pos = strpos(\$storeFolderThumb,\$thumb_base);

}else{
\t\$source_base = \$current_path;
\t\$thumb_base = \$thumbs_base_path;
\t\$path_pos  = strpos(\$storeFolder,\$source_base);
\t\$thumb_pos = strpos(\$storeFolderThumb,\$thumb_base);
}

if (\$path_pos!==0
\t|| \$thumb_pos !==0
\t|| strpos(\$storeFolderThumb,'../',strlen(\$thumb_base)) !== FALSE
\t|| strpos(\$storeFolderThumb,'./',strlen(\$thumb_base)) !== FALSE
\t|| strpos(\$storeFolder,'../',strlen(\$source_base)) !== FALSE
\t|| strpos(\$storeFolder,'./',strlen(\$source_base)) !== FALSE )
{
\tresponse(trans('wrong path'.AddErrorLocation()))->send();
\texit;
}

\$path = \$storeFolder;
\$cycle = TRUE;
\$max_cycles = 50;
\$i = 0;
while (\$cycle && \$i < \$max_cycles)
{
\t\$i++;
\tif (\$path == \$current_path) \$cycle = FALSE;
\tif (file_exists(\$path.\"config.php\"))
\t{
\t\trequire_once \$path.\"config.php\";
\t\t\$cycle = FALSE;
\t}
\t\$path = fix_dirname(\$path).'/';
}


if ( ! empty(\$_FILES) || isset(\$_POST['url']))
{
\tif(isset(\$_POST['url'])){
\t\t\$temp = tempnam('/tmp','RF');
\t\t\$handle = fopen(\$temp, \"w\");
\t\tfwrite(\$handle, file_get_contents(\$_POST['url']));
\t\tfclose(\$handle);
\t\t\$_FILES['file']= array(
\t\t\t'name' => basename(\$_POST['url']),
\t\t\t'tmp_name' => \$temp,
\t\t\t'size' => filesize(\$temp)
\t\t);
\t}

\t\$info = pathinfo(\$_FILES['file']['name']);
\t\$mime_type = \$_FILES['file']['type'];
\tif (function_exists('mime_content_type')){
\t\t\$mime_type = mime_content_type(\$_FILES['file']['tmp_name']);
\t}elseif(function_exists('finfo_open')){
\t\t\$finfo = finfo_open(FILEINFO_MIME_TYPE);
\t\t\$mime_type = finfo_file(\$finfo, \$_FILES['file']['tmp_name']);
\t}else{
\t\tinclude 'include/mime_type_lib.php';
\t\t\$mime_type = get_file_mime_type(\$_FILES['file']['tmp_name']);
\t}

\t\$extension = get_extension_from_mime(\$mime_type);

\tif(\$extension=='so'){
\t\t\$extension = \$info['extension'];
\t}

\tif (in_array(fix_strtolower(\$extension), \$ext))
\t{
\t\t\$tempFile = \$_FILES['file']['tmp_name'];
\t\t\$targetPath = \$storeFolder;
\t\t\$targetPathThumb = \$storeFolderThumb;
\t\t\$_FILES['file']['name'] = fix_filename(\$info['filename'].\".\".\$extension,\$transliteration,\$convert_spaces, \$replace_with);
\t\t// LowerCase
\t\tif (\$lower_case)
\t\t{
\t\t\t\$_FILES['file']['name'] = fix_strtolower(\$_FILES['file']['name']);
\t\t}
\t\t// Gen. new file name if exists
\t\tif (file_exists(\$targetPath.\$_FILES['file']['name']))
\t\t{
\t\t\t\$i = 1;
\t\t\t\$info = pathinfo(\$_FILES['file']['name']);

\t\t\t// append number
\t\t\twhile(file_exists(\$targetPath.\$info['filename'].\"_\".\$i.\".\".\$extension)) {
\t\t\t\t\$i++;
\t\t\t}
\t\t\t\$_FILES['file']['name'] = \$info['filename'].\"_\".\$i.\".\".\$extension;
\t\t}

\t\t\$targetFile =  \$targetPath. \$_FILES['file']['name'];
\t\t\$targetFileThumb =  \$targetPathThumb. \$_FILES['file']['name'];

\t\t// check if image (and supported)
\t\tif (in_array(fix_strtolower(\$extension),\$ext_img)) \$is_img=TRUE;
\t\telse \$is_img=FALSE;

\t\tif (!checkresultingsize(\$_FILES['file']['size'])) {
\t\t\tresponse(sprintf(trans('max_size_reached'),\$MaxSizeTotal).AddErrorLocation(), 406)->send();
\t\t\texit;
\t\t}

\t\t// upload
\t\tif(\$ftp){
\t\t\t\$targetFile =  tempnam('/tmp','RF').\$_FILES['file']['name'];
\t\t\tif (\$is_img)
\t\t\t{
\t\t\t\t\$targetFileThumb =  tempnam('/tmp','RF').\$_FILES['file']['name'];
\t\t\t}
\t\t}

\t\tif(is_uploaded_file(\$tempFile)){
\t\t\tmove_uploaded_file(\$tempFile,\$targetFile);
\t\t}else{
\t\t\tcopy(\$tempFile,\$targetFile);
\t\t\tunlink(\$tempFile);
\t\t}
\t\tchmod(\$targetFile, \$fileFolderPermission);

\t\tif (\$is_img)
\t\t{
\t\t\tif(isset(\$image_watermark) && \$image_watermark){
\t\t\t\trequire_once('include/php_image_magician.php');

\t\t\t\t\$magicianObj = new imageLib(\$targetFile);
\t\t\t\t\$magicianObj -> addWatermark(\$image_watermark, \$image_watermark_position,  \$image_watermark_padding);

\t\t\t\t\$magicianObj -> saveImage(\$targetFile);
\t\t\t}

\t\t\t\$memory_error = FALSE;
\t\t\tif ( ! create_img(\$targetFile, \$targetFileThumb, 122, 91))
\t\t\t{
\t\t\t\t\$memory_error = TRUE;
\t\t\t}
\t\t\telse
\t\t\t{

\t\t\t\t// TODO something with this long function baaaah...
\t\t\t\tif( !\$ftp && ! new_thumbnails_creation(\$targetPath,\$targetFile,\$_FILES['file']['name'],\$current_path,\$relative_image_creation,\$relative_path_from_current_pos,\$relative_image_creation_name_to_prepend,\$relative_image_creation_name_to_append,\$relative_image_creation_width,\$relative_image_creation_height,\$relative_image_creation_option,\$fixed_image_creation,\$fixed_path_from_filemanager,\$fixed_image_creation_name_to_prepend,\$fixed_image_creation_to_append,\$fixed_image_creation_width,\$fixed_image_creation_height,\$fixed_image_creation_option))
\t\t\t\t{
\t\t\t\t\t\$memory_error = TRUE;
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$imginfo = getimagesize(\$targetFile);
\t\t\t\t\t\$srcWidth = \$imginfo[0];
\t\t\t\t\t\$srcHeight = \$imginfo[1];

\t\t\t\t\t// resize images if set
\t\t\t\t\tif (\$image_resizing)
\t\t\t\t\t{
\t\t\t\t\t\tif (\$image_resizing_width == 0) // if width not set
\t\t\t\t\t\t{
\t\t\t\t\t\t\tif (\$image_resizing_height == 0)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\$image_resizing_width = \$srcWidth;
\t\t\t\t\t\t\t\t\$image_resizing_height = \$srcHeight;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\$image_resizing_width = \$image_resizing_height*\$srcWidth/\$srcHeight;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\telseif (\$image_resizing_height == 0) // if height not set
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\$image_resizing_height = \$image_resizing_width*\$srcHeight/\$srcWidth;
\t\t\t\t\t\t}

\t\t\t\t\t\t// new dims and create
\t\t\t\t\t\t\$srcWidth = \$image_resizing_width;
\t\t\t\t\t\t\$srcHeight = \$image_resizing_height;
\t\t\t\t\t\tcreate_img(\$targetFile, \$targetFile, \$image_resizing_width, \$image_resizing_height, \$image_resizing_mode);
\t\t\t\t\t}

\t\t\t\t\t//max resizing limit control
\t\t\t\t\t\$resize = FALSE;
\t\t\t\t\tif (\$image_max_width != 0 && \$srcWidth > \$image_max_width && \$image_resizing_override === FALSE)
\t\t\t\t\t{
\t\t\t\t\t\t\$resize = TRUE;
\t\t\t\t\t\t\$srcWidth = \$image_max_width;

\t\t\t\t\t\tif (\$image_max_height == 0) \$srcHeight = \$image_max_width*\$srcHeight/\$srcWidth;
\t\t\t\t\t}

\t\t\t\t\tif (\$image_max_height != 0 && \$srcHeight > \$image_max_height && \$image_resizing_override === FALSE){
\t\t\t\t\t\t\$resize = TRUE;
\t\t\t\t\t\t\$srcHeight = \$image_max_height;

\t\t\t\t\t\tif (\$image_max_width == 0) \$srcWidth = \$image_max_height*\$srcWidth/\$srcHeight;
\t\t\t\t\t}

\t\t\t\t\tif (\$resize){ create_img(\$targetFile, \$targetFile, \$srcWidth, \$srcHeight, \$image_max_mode); }
\t\t\t\t}
\t\t\t}

\t\t\t// not enough memory
\t\t\tif (\$memory_error)
\t\t\t{
\t\t\t\tunlink(\$targetFile);
\t\t\t\tresponse(trans(\"Not enought Memory\").AddErrorLocation(), 406)->send();
\t\t\t\texit();
\t\t\t}
\t\t}

\t\tif(\$ftp){

\t\t\t\$ftp->put(\$targetPath. \$_FILES['file']['name'], \$targetFile, FTP_BINARY);
\t\t\tunlink(\$targetFile);
\t\t\tif (\$is_img)
\t\t\t{
\t\t\t\t\$ftp->put(\$targetPathThumb. \$_FILES['file']['name'], \$targetFileThumb, FTP_BINARY);
\t\t\t\tunlink(\$targetFileThumb);
\t\t\t}
\t\t}
\t\techo \$_FILES['file']['name'];
\t}
\telse // file ext. is not in the allowed list
\t{
\t\tresponse(\"Thumbnails creation: \".trans(\"Error_extension\").AddErrorLocation(), 406)->send();
\t\texit();
\t}
}
else // no files to upload
{
\tresponse(trans(\"no file\").AddErrorLocation(), 405)->send();
\texit();
}

// redirect
if (isset(\$_POST['submit']))
{
\t\$query = http_build_query(array(
\t\t'type'\t  \t=> \$_POST['type'],
\t\t'lang'\t  \t=> \$_POST['lang'],
\t\t'popup'\t\t\t=> \$_POST['popup'],
\t\t'field_id'  => \$_POST['field_id'],
\t\t'fldr'\t  \t=> \$_POST['fldr'],
\t));

\theader(\"location: dialog.php?\" . \$query);
}
";
        
        $__internal_878bc48d1c6af31fe979376e9a2d6807cca5d09cb9d04cfc8d66888075cfb78e->leave($__internal_878bc48d1c6af31fe979376e9a2d6807cca5d09cb9d04cfc8d66888075cfb78e_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/upload.php";
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
if (!isset(\$config)){

  \$config = include 'config/config.php';
  //TODO switch to array
  extract(\$config, EXTR_OVERWRITE);
}
include 'include/utils.php';

if (\$_SESSION['RF'][\"verify\"] != \"RESPONSIVEfilemanager\")
{
\tresponse(trans('forbiden').AddErrorLocation(), 403)->send();
\texit;
}

include 'include/mime_type_lib.php';

if (isset(\$_POST['path']))
{
   \$storeFolder = \$_POST['path'];
   \$storeFolderThumb = \$_POST['path_thumb'];
}
else
{
   \$storeFolder = \$current_path.\$_POST[\"fldr\"]; // correct for when IE is in Compatibility mode
   \$storeFolderThumb = \$thumbs_base_path.\$_POST[\"fldr\"];
}

\$ftp=ftp_con(\$config);
if(\$ftp){
\t\$source_base = \$ftp_base_folder.\$upload_dir;
\t\$thumb_base = \$ftp_base_folder.\$ftp_thumbs_dir;
\t\$path_pos  = strpos(\$storeFolder,\$source_base);
\t\$thumb_pos = strpos(\$storeFolderThumb,\$thumb_base);

}else{
\t\$source_base = \$current_path;
\t\$thumb_base = \$thumbs_base_path;
\t\$path_pos  = strpos(\$storeFolder,\$source_base);
\t\$thumb_pos = strpos(\$storeFolderThumb,\$thumb_base);
}

if (\$path_pos!==0
\t|| \$thumb_pos !==0
\t|| strpos(\$storeFolderThumb,'../',strlen(\$thumb_base)) !== FALSE
\t|| strpos(\$storeFolderThumb,'./',strlen(\$thumb_base)) !== FALSE
\t|| strpos(\$storeFolder,'../',strlen(\$source_base)) !== FALSE
\t|| strpos(\$storeFolder,'./',strlen(\$source_base)) !== FALSE )
{
\tresponse(trans('wrong path'.AddErrorLocation()))->send();
\texit;
}

\$path = \$storeFolder;
\$cycle = TRUE;
\$max_cycles = 50;
\$i = 0;
while (\$cycle && \$i < \$max_cycles)
{
\t\$i++;
\tif (\$path == \$current_path) \$cycle = FALSE;
\tif (file_exists(\$path.\"config.php\"))
\t{
\t\trequire_once \$path.\"config.php\";
\t\t\$cycle = FALSE;
\t}
\t\$path = fix_dirname(\$path).'/';
}


if ( ! empty(\$_FILES) || isset(\$_POST['url']))
{
\tif(isset(\$_POST['url'])){
\t\t\$temp = tempnam('/tmp','RF');
\t\t\$handle = fopen(\$temp, \"w\");
\t\tfwrite(\$handle, file_get_contents(\$_POST['url']));
\t\tfclose(\$handle);
\t\t\$_FILES['file']= array(
\t\t\t'name' => basename(\$_POST['url']),
\t\t\t'tmp_name' => \$temp,
\t\t\t'size' => filesize(\$temp)
\t\t);
\t}

\t\$info = pathinfo(\$_FILES['file']['name']);
\t\$mime_type = \$_FILES['file']['type'];
\tif (function_exists('mime_content_type')){
\t\t\$mime_type = mime_content_type(\$_FILES['file']['tmp_name']);
\t}elseif(function_exists('finfo_open')){
\t\t\$finfo = finfo_open(FILEINFO_MIME_TYPE);
\t\t\$mime_type = finfo_file(\$finfo, \$_FILES['file']['tmp_name']);
\t}else{
\t\tinclude 'include/mime_type_lib.php';
\t\t\$mime_type = get_file_mime_type(\$_FILES['file']['tmp_name']);
\t}

\t\$extension = get_extension_from_mime(\$mime_type);

\tif(\$extension=='so'){
\t\t\$extension = \$info['extension'];
\t}

\tif (in_array(fix_strtolower(\$extension), \$ext))
\t{
\t\t\$tempFile = \$_FILES['file']['tmp_name'];
\t\t\$targetPath = \$storeFolder;
\t\t\$targetPathThumb = \$storeFolderThumb;
\t\t\$_FILES['file']['name'] = fix_filename(\$info['filename'].\".\".\$extension,\$transliteration,\$convert_spaces, \$replace_with);
\t\t// LowerCase
\t\tif (\$lower_case)
\t\t{
\t\t\t\$_FILES['file']['name'] = fix_strtolower(\$_FILES['file']['name']);
\t\t}
\t\t// Gen. new file name if exists
\t\tif (file_exists(\$targetPath.\$_FILES['file']['name']))
\t\t{
\t\t\t\$i = 1;
\t\t\t\$info = pathinfo(\$_FILES['file']['name']);

\t\t\t// append number
\t\t\twhile(file_exists(\$targetPath.\$info['filename'].\"_\".\$i.\".\".\$extension)) {
\t\t\t\t\$i++;
\t\t\t}
\t\t\t\$_FILES['file']['name'] = \$info['filename'].\"_\".\$i.\".\".\$extension;
\t\t}

\t\t\$targetFile =  \$targetPath. \$_FILES['file']['name'];
\t\t\$targetFileThumb =  \$targetPathThumb. \$_FILES['file']['name'];

\t\t// check if image (and supported)
\t\tif (in_array(fix_strtolower(\$extension),\$ext_img)) \$is_img=TRUE;
\t\telse \$is_img=FALSE;

\t\tif (!checkresultingsize(\$_FILES['file']['size'])) {
\t\t\tresponse(sprintf(trans('max_size_reached'),\$MaxSizeTotal).AddErrorLocation(), 406)->send();
\t\t\texit;
\t\t}

\t\t// upload
\t\tif(\$ftp){
\t\t\t\$targetFile =  tempnam('/tmp','RF').\$_FILES['file']['name'];
\t\t\tif (\$is_img)
\t\t\t{
\t\t\t\t\$targetFileThumb =  tempnam('/tmp','RF').\$_FILES['file']['name'];
\t\t\t}
\t\t}

\t\tif(is_uploaded_file(\$tempFile)){
\t\t\tmove_uploaded_file(\$tempFile,\$targetFile);
\t\t}else{
\t\t\tcopy(\$tempFile,\$targetFile);
\t\t\tunlink(\$tempFile);
\t\t}
\t\tchmod(\$targetFile, \$fileFolderPermission);

\t\tif (\$is_img)
\t\t{
\t\t\tif(isset(\$image_watermark) && \$image_watermark){
\t\t\t\trequire_once('include/php_image_magician.php');

\t\t\t\t\$magicianObj = new imageLib(\$targetFile);
\t\t\t\t\$magicianObj -> addWatermark(\$image_watermark, \$image_watermark_position,  \$image_watermark_padding);

\t\t\t\t\$magicianObj -> saveImage(\$targetFile);
\t\t\t}

\t\t\t\$memory_error = FALSE;
\t\t\tif ( ! create_img(\$targetFile, \$targetFileThumb, 122, 91))
\t\t\t{
\t\t\t\t\$memory_error = TRUE;
\t\t\t}
\t\t\telse
\t\t\t{

\t\t\t\t// TODO something with this long function baaaah...
\t\t\t\tif( !\$ftp && ! new_thumbnails_creation(\$targetPath,\$targetFile,\$_FILES['file']['name'],\$current_path,\$relative_image_creation,\$relative_path_from_current_pos,\$relative_image_creation_name_to_prepend,\$relative_image_creation_name_to_append,\$relative_image_creation_width,\$relative_image_creation_height,\$relative_image_creation_option,\$fixed_image_creation,\$fixed_path_from_filemanager,\$fixed_image_creation_name_to_prepend,\$fixed_image_creation_to_append,\$fixed_image_creation_width,\$fixed_image_creation_height,\$fixed_image_creation_option))
\t\t\t\t{
\t\t\t\t\t\$memory_error = TRUE;
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$imginfo = getimagesize(\$targetFile);
\t\t\t\t\t\$srcWidth = \$imginfo[0];
\t\t\t\t\t\$srcHeight = \$imginfo[1];

\t\t\t\t\t// resize images if set
\t\t\t\t\tif (\$image_resizing)
\t\t\t\t\t{
\t\t\t\t\t\tif (\$image_resizing_width == 0) // if width not set
\t\t\t\t\t\t{
\t\t\t\t\t\t\tif (\$image_resizing_height == 0)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\$image_resizing_width = \$srcWidth;
\t\t\t\t\t\t\t\t\$image_resizing_height = \$srcHeight;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\$image_resizing_width = \$image_resizing_height*\$srcWidth/\$srcHeight;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\telseif (\$image_resizing_height == 0) // if height not set
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\$image_resizing_height = \$image_resizing_width*\$srcHeight/\$srcWidth;
\t\t\t\t\t\t}

\t\t\t\t\t\t// new dims and create
\t\t\t\t\t\t\$srcWidth = \$image_resizing_width;
\t\t\t\t\t\t\$srcHeight = \$image_resizing_height;
\t\t\t\t\t\tcreate_img(\$targetFile, \$targetFile, \$image_resizing_width, \$image_resizing_height, \$image_resizing_mode);
\t\t\t\t\t}

\t\t\t\t\t//max resizing limit control
\t\t\t\t\t\$resize = FALSE;
\t\t\t\t\tif (\$image_max_width != 0 && \$srcWidth > \$image_max_width && \$image_resizing_override === FALSE)
\t\t\t\t\t{
\t\t\t\t\t\t\$resize = TRUE;
\t\t\t\t\t\t\$srcWidth = \$image_max_width;

\t\t\t\t\t\tif (\$image_max_height == 0) \$srcHeight = \$image_max_width*\$srcHeight/\$srcWidth;
\t\t\t\t\t}

\t\t\t\t\tif (\$image_max_height != 0 && \$srcHeight > \$image_max_height && \$image_resizing_override === FALSE){
\t\t\t\t\t\t\$resize = TRUE;
\t\t\t\t\t\t\$srcHeight = \$image_max_height;

\t\t\t\t\t\tif (\$image_max_width == 0) \$srcWidth = \$image_max_height*\$srcWidth/\$srcHeight;
\t\t\t\t\t}

\t\t\t\t\tif (\$resize){ create_img(\$targetFile, \$targetFile, \$srcWidth, \$srcHeight, \$image_max_mode); }
\t\t\t\t}
\t\t\t}

\t\t\t// not enough memory
\t\t\tif (\$memory_error)
\t\t\t{
\t\t\t\tunlink(\$targetFile);
\t\t\t\tresponse(trans(\"Not enought Memory\").AddErrorLocation(), 406)->send();
\t\t\t\texit();
\t\t\t}
\t\t}

\t\tif(\$ftp){

\t\t\t\$ftp->put(\$targetPath. \$_FILES['file']['name'], \$targetFile, FTP_BINARY);
\t\t\tunlink(\$targetFile);
\t\t\tif (\$is_img)
\t\t\t{
\t\t\t\t\$ftp->put(\$targetPathThumb. \$_FILES['file']['name'], \$targetFileThumb, FTP_BINARY);
\t\t\t\tunlink(\$targetFileThumb);
\t\t\t}
\t\t}
\t\techo \$_FILES['file']['name'];
\t}
\telse // file ext. is not in the allowed list
\t{
\t\tresponse(\"Thumbnails creation: \".trans(\"Error_extension\").AddErrorLocation(), 406)->send();
\t\texit();
\t}
}
else // no files to upload
{
\tresponse(trans(\"no file\").AddErrorLocation(), 405)->send();
\texit();
}

// redirect
if (isset(\$_POST['submit']))
{
\t\$query = http_build_query(array(
\t\t'type'\t  \t=> \$_POST['type'],
\t\t'lang'\t  \t=> \$_POST['lang'],
\t\t'popup'\t\t\t=> \$_POST['popup'],
\t\t'field_id'  => \$_POST['field_id'],
\t\t'fldr'\t  \t=> \$_POST['fldr'],
\t));

\theader(\"location: dialog.php?\" . \$query);
}
", "@MwebAdmin/filemanager/upload.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/upload.php");
    }
}
