<?php

/* @MwebAdmin/filemanager/dialog.php */
class __TwigTemplate_9e4d6b09a5f514731bf0550f944cfed1731cc0981bbc9df7286655f5dff7142d extends Twig_Template
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
        $__internal_b7fbdf9ab6515cffeaf3459e8aa6b41f131b53e2ec0dc2b0c7bc70099b59e839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7fbdf9ab6515cffeaf3459e8aa6b41f131b53e2ec0dc2b0c7bc70099b59e839->enter($__internal_b7fbdf9ab6515cffeaf3459e8aa6b41f131b53e2ec0dc2b0c7bc70099b59e839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/dialog.php"));

        // line 1
        echo "<?php
\$time = time();
\$config = include 'config/config.php';
//TODO switch to array
extract(\$config, EXTR_OVERWRITE);

if (USE_ACCESS_KEYS == TRUE){
\tif (!isset(\$_GET['akey'], \$access_keys) || empty(\$access_keys)){
\t\tdie('Access Denied!');
\t}

\t\$_GET['akey'] = strip_tags(preg_replace( \"/[^a-zA-Z0-9\\._-]/\", '', \$_GET['akey']));

\tif (!in_array(\$_GET['akey'], \$access_keys)){
\t\tdie('Access Denied!');
\t}
}

\$_SESSION['RF'][\"verify\"] = \"RESPONSIVEfilemanager\";

if(isset(\$_POST['submit'])){
\tinclude 'upload.php';
}else{

\$lang = \$config['default_language'];
\$languages = include 'lang/languages.php';
if (isset(\$_GET['lang']))
{
\t\$lang = strip_tags(\$_GET['lang']);
\tif(array_key_exists(\$lang,\$languages)){
\t\t\$_SESSION['RF']['language'] = \$lang;
\t}
}elseif(\$_SESSION['RF']['language']){
\t\$lang = strip_tags(\$_SESSION['RF']['language']);
\tif(array_key_exists(\$lang,\$languages)){
\t\t\$_SESSION['RF']['language'] = \$lang;
\t}
}

include 'include/utils.php';

if (isset(\$_GET['fldr'])
\t&& !empty(\$_GET['fldr'])
\t&& strpos(\$_GET['fldr'],'../') === FALSE
\t&& strpos(\$_GET['fldr'],'./') === FALSE)
{
\t\$subdir = rawurldecode(trim(strip_tags(\$_GET['fldr']),\"/\") .\"/\");
\t\$_SESSION['RF'][\"filter\"]='';
}
else { \$subdir = ''; }

if(\$subdir == \"\")
{
\tif(!empty(\$_COOKIE['last_position']) && strpos(\$_COOKIE['last_position'],'.') === FALSE){
\t\t\$subdir= trim(\$_COOKIE['last_position']);
\t}
}
//remember last position
setcookie('last_position',\$subdir,time() + (86400 * 7));

if (\$subdir == \"/\") { \$subdir = \"\"; }

// If hidden folders are specified
if(count(\$hidden_folders)){
\t// If hidden folder appears in the path specified in URL parameter \"fldr\"
\t\$dirs = explode('/', \$subdir);
\tforeach(\$dirs as \$dir){
\t\tif(\$dir !== '' && in_array(\$dir, \$hidden_folders)){
\t\t\t// Ignore the path
\t\t\t\$subdir = \"\";
\t\t\tbreak;
\t\t}
\t}
}

if (\$show_total_size) {
\tlist(\$sizeCurrentFolder,\$fileCurrentNum,\$foldersCurrentCount) = folder_info(\$current_path,false);
}
/***
*SUB-DIR CODE
***/

if (!isset(\$_SESSION['RF'][\"subfolder\"]))
{
\t\$_SESSION['RF'][\"subfolder\"] = '';
}
\$rfm_subfolder = '';

if (!empty(\$_SESSION['RF'][\"subfolder\"]) && strpos(\$_SESSION['RF'][\"subfolder\"],'../') === FALSE
&& strpos(\$_SESSION['RF'][\"subfolder\"],'./') === FALSE && strpos(\$_SESSION['RF'][\"subfolder\"],\"/\") !== 0
&& strpos(\$_SESSION['RF'][\"subfolder\"],'.') === FALSE)
{
\t\$rfm_subfolder = \$_SESSION['RF']['subfolder'];
}

if (\$rfm_subfolder != \"\" && \$rfm_subfolder[strlen(\$rfm_subfolder)-1] != \"/\") { \$rfm_subfolder .= \"/\"; }

\$ftp=ftp_con(\$config);

if ((\$ftp && !\$ftp->isDir(\$ftp_base_folder.\$upload_dir.\$rfm_subfolder.\$subdir)) || (!\$ftp && !file_exists(\$current_path.\$rfm_subfolder.\$subdir)))
{
\t\$subdir = '';
\t\$rfm_subfolder = \"\";
}


if (trim(\$rfm_subfolder) == \"\")
{
\t\$cur_dir\t\t\t= \$upload_dir.\$subdir;
\t\$cur_path\t\t\t= \$current_path.\$subdir;
\t\$thumbs_path\t    = \$thumbs_base_path;
\t\$parent\t\t\t\t= \$subdir;
}
else
{
\t\$cur_dir\t\t\t= \$upload_dir.\$rfm_subfolder.\$subdir;
\t\$cur_path\t\t\t= \$current_path.\$rfm_subfolder.\$subdir;
\t\$thumbs_path\t= \$thumbs_base_path.\$rfm_subfolder;
\t\$parent\t\t\t\t= \$rfm_subfolder.\$subdir;
}

if(\$ftp){
\t\$cur_dir = \$ftp_base_folder.\$cur_dir;
\t\$cur_path = str_replace(array('/..','..'),'',\$cur_dir);
\t\$thumbs_path = str_replace(array('/..','..'),'',\$ftp_base_folder.\$ftp_thumbs_dir.\$rfm_subfolder);
\t\$parent = \$ftp_base_folder.\$parent;
}

if(!\$ftp){
\t\$cycle = TRUE;
\t\$max_cycles = 50;
\t\$i = 0;
\twhile(\$cycle && \$i < \$max_cycles){
\t\t\$i++;
\t\tif (\$parent==\"./\") \$parent=\"\";

\t\tif (file_exists(\$current_path.\$parent.\"config.php\"))
\t\t{
\t\t\trequire_once \$current_path.\$parent.\"config.php\";
\t\t\t\$cycle = FALSE;
\t\t}

\t\tif (\$parent == \"\") \$cycle = FALSE;
\t\telse \$parent = fix_dirname(\$parent).\"/\";
\t}

\tif (!is_dir(\$thumbs_path.\$subdir))
\t{
\t\tcreate_folder(FALSE, \$thumbs_path.\$subdir);
\t}
}

if (isset(\$_GET['popup']))
{
\t\$popup = strip_tags(\$_GET['popup']);
} else \$popup=0;
//Sanitize popup
\$popup=!!\$popup;

if (isset(\$_GET['crossdomain']))
{
\t\$crossdomain = strip_tags(\$_GET['crossdomain']);
} else \$crossdomain=0;

//Sanitize crossdomain
\$crossdomain=!!\$crossdomain;

//view type
if(!isset(\$_SESSION['RF'][\"view_type\"]))
{
\t\$view = \$default_view;
\t\$_SESSION['RF'][\"view_type\"] = \$view;
}

if (isset(\$_GET['view']))
{
\t\$view = fix_get_params(\$_GET['view']);
\t\$_SESSION['RF'][\"view_type\"] = \$view;
}

\$view = \$_SESSION['RF'][\"view_type\"];

//filter
\$filter = \"\";
if(isset(\$_SESSION['RF'][\"filter\"]))
{
\t\$filter = \$_SESSION['RF'][\"filter\"];
}

if(isset(\$_GET[\"filter\"]))
{
\t\$filter = fix_get_params(\$_GET[\"filter\"]);
}

if (!isset(\$_SESSION['RF']['sort_by']))
{
\t\$_SESSION['RF']['sort_by'] = 'name';
}

if (isset(\$_GET[\"sort_by\"]))
{
\t\$sort_by = \$_SESSION['RF']['sort_by'] = fix_get_params(\$_GET[\"sort_by\"]);
} else \$sort_by = \$_SESSION['RF']['sort_by'];


if (!isset(\$_SESSION['RF']['descending']))
{
\t\$_SESSION['RF']['descending'] = TRUE;
}

if (isset(\$_GET[\"descending\"]))
{
\t\$descending = \$_SESSION['RF']['descending'] = fix_get_params(\$_GET[\"descending\"])==1;
} else {
\t\$descending = \$_SESSION['RF']['descending'];
}

\$boolarray = Array(false => 'false', true => 'true');

\$return_relative_url = isset(\$_GET['relative_url']) && \$_GET['relative_url'] == \"1\" ? true : false;

if (!isset(\$_GET['type'])) \$_GET['type'] = 0;

if(\$_GET['type']==1 || \$_GET['type']==3){
\t\$filter='';
}

\$extensions=null;
if (isset(\$_GET['extensions'])){
\t\$extensions = json_decode(urldecode(\$_GET['extensions']));
\tif(\$extensions){
\t\t\$ext = \$extensions;
\t\t\$show_filter_buttons = false;
\t}
}

if (isset(\$_GET['editor']))
{
\t\$editor = strip_tags(\$_GET['editor']);
} else {
\tif(\$_GET['type']==0){
\t\t\$editor=false;
\t} else {
\t\t\$editor='tinymce';
\t}
}

if (!isset(\$_GET['field_id'])) \$_GET['field_id'] = '';

\$field_id = isset(\$_GET['field_id']) ? fix_get_params(\$_GET['field_id']) : '';
\$type_param = fix_get_params(\$_GET['type']);

if (\$type_param==1) \t \$apply = 'apply_img';
elseif(\$type_param==2) \$apply = 'apply_link';
elseif(\$type_param==0 && \$_GET['field_id']=='') \$apply = 'apply_none';
elseif(\$type_param==3) \$apply = 'apply_video';
else \$apply = 'apply';

\$get_params = array(
\t'editor'    => \$editor,
\t'type'      => \$type_param,
\t'lang'      => \$lang,
\t'popup'     => \$popup,
\t'crossdomain' => \$crossdomain,
\t'extensions' => (\$extensions) ? urlencode(json_encode(\$extensions)) : null ,
\t'field_id'  => \$field_id,
\t'relative_url' => \$return_relative_url,
\t'akey' \t\t=> (isset(\$_GET['akey']) && \$_GET['akey'] != '' ? \$_GET['akey'] : 'key')
);
if(isset(\$_GET['CKEditorFuncNum'])){
\t\$get_params['CKEditorFuncNum'] = \$_GET['CKEditorFuncNum'];
\t\$get_params['CKEditor'] = (isset(\$_GET['CKEditor'])? \$_GET['CKEditor'] : '');
}
\$get_params['fldr'] ='';

\$get_params = http_build_query(\$get_params);
?>
<!DOCTYPE html>
<html xmlns=\"https://www.w3.org/1999/xhtml\">
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" >
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
\t\t<meta name=\"robots\" content=\"noindex,nofollow\">
\t\t<title>Responsive FileManager</title>
\t\t<link rel=\"shortcut icon\" href=\"img/ico/favicon.ico\">
\t\t<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"js/jPlayer/skin/blue.monday/jplayer.blue.monday.css\" rel=\"stylesheet\" type=\"text/css\">
\t<!--[if lt IE 8]><style>
\t.img-container span, .img-container-mini span {
\t\tdisplay: inline-block;
\t\theight: 100%;
\t}
\t</style><![endif]-->
\t<script src=\"js/plugins.js\"></script>
\t<script src=\"js/jPlayer/jquery.jplayer/jquery.jplayer.js\"></script>
\t<script src=\"js/modernizr.custom.js\"></script>
\t<?php
\tif (\$aviary_active){
\tif (!empty(\$_SERVER['HTTPS']) && \$_SERVER['HTTPS'] !== 'off' || \$_SERVER['SERVER_PORT'] == 443) { ?>
\t\t<script src=\"https://dme0ih8comzn4.cloudfront.net/imaging/v2/editor.js\"></script>
\t<?php }else{ ?>
\t\t<script src=\"http://feather.aviary.com/imaging/v2/editor.js\"></script>
\t<?php }} ?>

\t<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
\t<!--[if lt IE 9]>
\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js\"></script>
\t<![endif]-->

\t<script>
\t\tvar ext_img=new Array('<?php echo implode(\"','\", \$ext_img)?>');
\t\tvar allowed_ext=new Array('<?php echo implode(\"','\", \$ext)?>');
\t\tvar image_editor=<?php echo \$aviary_active?\"true\":\"false\";?>;
\t\t//dropzone config
\t\tDropzone.options.rfmDropzone = {
\t\t\tdictInvalidFileType: \"<?php echo trans('Error_extension');?>\",
\t\t\tdictFileTooBig: \"<?php echo trans('Error_Upload');?>\",
\t\t\tdictDefaultMessage: \"<?php echo trans('Upload_message');?>\",
\t\t\tdictResponseError: \"<?php echo trans('SERVER ERROR');?>\",
\t\t\tparamName: \"file\", // The name that will be used to transfer the file
\t\t\tmaxFilesize: <?php echo \$MaxSizeUpload;?>, // MB
\t\t\turl: \"upload.php\",
\t\t\t<?php if(\$apply!=\"apply_none\"){ ?>
\t\t\tinit: function() {
\t\t\t\tthis.on(\"success\", function(file,res) {
\t\t\t\t\tfile.previewElement.addEventListener(\"click\", function() {
\t\t\t\t\t\t<?php echo \$apply;?>(res,'<?php echo \$field_id;?>');
\t\t\t\t\t});
\t\t\t\t});
\t\t\t},
\t\t\t<?php } ?>
\t\t\taccept: function(file, done) {
\t\t\t\tvar extension=file.name.split('.').pop();
\t\t\t\textension=extension.toLowerCase();
\t\t\t\tif (\$.inArray(extension, allowed_ext) > -1) {
\t\t\t\t\tdone();
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\tdone(\"<?php echo trans('Error_extension');?>\");
\t\t\t\t}
\t\t\t}
\t\t};
\t\tif (image_editor) {
\t\t\tvar featherEditor = new Aviary.Feather({
\t\t\t<?php
\t\t\t\tforeach (\$aviary_defaults_config as \$aopt_key => \$aopt_val) {
\t\t\t\t\techo \$aopt_key.\": \".json_encode(\$aopt_val).\",\";
\t\t\t\t}
\t\t\t?>
\t\t\tonReady: function() {
\t\t\t\thide_animation();
\t\t\t},
\t\t\tonSave: function(imageID, newURL) {
\t\t\t\tshow_animation();
\t\t\t\tvar img = document.getElementById(imageID);
\t\t\t\timg.src = newURL;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"ajax_calls.php?action=save_img\",
\t\t\t\t\tdata: { url: newURL, path:\$('#sub_folder').val()+\$('#fldr_value').val(), name:\$('#aviary_img').attr('data-name') }
\t\t\t\t}).done(function( msg ) {
\t\t\t\t\tfeatherEditor.close();
\t\t\t\t\td = new Date();
\t\t\t\t\t\$(\"figure[data-name='\"+\$('#aviary_img').attr('data-name')+\"']\").find('img').each(function(){
\t\t\t\t\t\$(this).attr('src',\$(this).attr('src')+\"?\"+d.getTime());
\t\t\t\t\t});
\t\t\t\t\t\$(\"figure[data-name='\"+\$('#aviary_img').attr('data-name')+\"']\").find('figcaption a.preview').each(function(){
\t\t\t\t\t\$(this).attr('data-url',\$(this).data('url')+\"?\"+d.getTime());
\t\t\t\t\t});
\t\t\t\t\thide_animation();
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t},
\t\t\tonError: function(errorObj) {
\t\t\t\t\tbootbox.alert(errorObj.message);
\t\t\t\t\thide_animation();
\t\t\t}

\t\t\t});
\t\t}
\t</script>
\t<script src=\"js/include.js\"></script>
</head>
<body>
\t<input type=\"hidden\" id=\"ftp\" value=\"<?php echo !!\$ftp; ?>\" />
\t<input type=\"hidden\" id=\"popup\" value=\"<?php echo \$popup;?>\" />
\t<input type=\"hidden\" id=\"crossdomain\" value=\"<?php echo \$crossdomain;?>\" />
\t<input type=\"hidden\" id=\"editor\" value=\"<?php echo \$editor;?>\" />
\t<input type=\"hidden\" id=\"view\" value=\"<?php echo \$view;?>\" />
\t<input type=\"hidden\" id=\"subdir\" value=\"<?php echo \$subdir;?>\" />
\t<input type=\"hidden\" id=\"field_id\" value=\"<?php echo \$field_id;?>\" />
\t<input type=\"hidden\" id=\"type_param\" value=\"<?php echo \$type_param;?>\" />
\t<input type=\"hidden\" id=\"upload_dir\" value=\"<?php echo \$upload_dir;?>\" />
\t<input type=\"hidden\" id=\"cur_dir\" value=\"<?php echo \$cur_dir;?>\" />
\t<input type=\"hidden\" id=\"cur_dir_thumb\" value=\"<?php echo \$thumbs_path.\$subdir;?>\" />
\t<input type=\"hidden\" id=\"insert_folder_name\" value=\"<?php echo trans('Insert_Folder_Name');?>\" />
\t<input type=\"hidden\" id=\"new_folder\" value=\"<?php echo trans('New_Folder');?>\" />
\t<input type=\"hidden\" id=\"ok\" value=\"<?php echo trans('OK');?>\" />
\t<input type=\"hidden\" id=\"cancel\" value=\"<?php echo trans('Cancel');?>\" />
\t<input type=\"hidden\" id=\"rename\" value=\"<?php echo trans('Rename');?>\" />
\t<input type=\"hidden\" id=\"lang_duplicate\" value=\"<?php echo trans('Duplicate');?>\" />
\t<input type=\"hidden\" id=\"duplicate\" value=\"<?php if(\$duplicate_files) echo 1; else echo 0;?>\" />
\t<input type=\"hidden\" id=\"base_url\" value=\"<?php echo \$base_url?>\"/>
\t<input type=\"hidden\" id=\"ftp_base_url\" value=\"<?php echo \$ftp_base_url?>\"/>
\t<input type=\"hidden\" id=\"fldr_value\" value=\"<?php echo \$subdir;?>\"/>
\t<input type=\"hidden\" id=\"sub_folder\" value=\"<?php echo \$rfm_subfolder;?>\"/>
\t<input type=\"hidden\" id=\"return_relative_url\" value=\"<?php echo \$return_relative_url == true ? 1 : 0;?>\"/>
\t<input type=\"hidden\" id=\"lazy_loading_file_number_threshold\" value=\"<?php echo \$lazy_loading_file_number_threshold?>\"/>
\t<input type=\"hidden\" id=\"file_number_limit_js\" value=\"<?php echo \$file_number_limit_js;?>\" />
\t<input type=\"hidden\" id=\"sort_by\" value=\"<?php echo \$sort_by;?>\" />
\t<input type=\"hidden\" id=\"descending\" value=\"<?php echo \$descending?1:0;?>\" />
\t<input type=\"hidden\" id=\"current_url\" value=\"<?php echo str_replace(array('&filter='.\$filter,'&sort_by='.\$sort_by,'&descending='.intval(\$descending)),array(''),\$base_url.\$_SERVER['REQUEST_URI']);?>\" />
\t<input type=\"hidden\" id=\"lang_show_url\" value=\"<?php echo trans('Show_url');?>\" />
\t<input type=\"hidden\" id=\"copy_cut_files_allowed\" value=\"<?php if(\$copy_cut_files) echo 1; else echo 0;?>\" />
\t<input type=\"hidden\" id=\"copy_cut_dirs_allowed\" value=\"<?php if(\$copy_cut_dirs) echo 1; else echo 0;?>\" />
\t<input type=\"hidden\" id=\"copy_cut_max_size\" value=\"<?php echo \$copy_cut_max_size;?>\" />
\t<input type=\"hidden\" id=\"copy_cut_max_count\" value=\"<?php echo \$copy_cut_max_count;?>\" />
\t<input type=\"hidden\" id=\"lang_copy\" value=\"<?php echo trans('Copy');?>\" />
\t<input type=\"hidden\" id=\"lang_cut\" value=\"<?php echo trans('Cut');?>\" />
\t<input type=\"hidden\" id=\"lang_paste\" value=\"<?php echo trans('Paste');?>\" />
\t<input type=\"hidden\" id=\"lang_paste_here\" value=\"<?php echo trans('Paste_Here');?>\" />
\t<input type=\"hidden\" id=\"lang_paste_confirm\" value=\"<?php echo trans('Paste_Confirm');?>\" />
\t<input type=\"hidden\" id=\"lang_files\" value=\"<?php echo trans('Files');?>\" />
\t<input type=\"hidden\" id=\"lang_folders\" value=\"<?php echo trans('Folders');?>\" />
\t<input type=\"hidden\" id=\"lang_files_on_clipboard\" value=\"<?php echo trans('Files_ON_Clipboard');?>\" />
\t<input type=\"hidden\" id=\"clipboard\" value=\"<?php echo ((isset(\$_SESSION['RF']['clipboard']['path']) && trim(\$_SESSION['RF']['clipboard']['path']) != null) ? 1 : 0);?>\" />
\t<input type=\"hidden\" id=\"lang_clear_clipboard_confirm\" value=\"<?php echo trans('Clear_Clipboard_Confirm');?>\" />
\t<input type=\"hidden\" id=\"lang_file_permission\" value=\"<?php echo trans('File_Permission');?>\" />
\t<input type=\"hidden\" id=\"chmod_files_allowed\" value=\"<?php if(\$chmod_files) echo 1; else echo 0;?>\" />
\t<input type=\"hidden\" id=\"chmod_dirs_allowed\" value=\"<?php if(\$chmod_dirs) echo 1; else echo 0;?>\" />
\t<input type=\"hidden\" id=\"lang_lang_change\" value=\"<?php echo trans('Lang_Change');?>\" />
\t<input type=\"hidden\" id=\"edit_text_files_allowed\" value=\"<?php if(\$edit_text_files) echo 1; else echo 0;?>\" />
\t<input type=\"hidden\" id=\"lang_edit_file\" value=\"<?php echo trans('Edit_File');?>\" />
\t<input type=\"hidden\" id=\"lang_new_file\" value=\"<?php echo trans('New_File');?>\" />
\t<input type=\"hidden\" id=\"lang_filename\" value=\"<?php echo trans('Filename');?>\" />
\t<input type=\"hidden\" id=\"lang_file_info\" value=\"<?php echo fix_strtoupper(trans('File_info'));?>\" />
\t<input type=\"hidden\" id=\"lang_edit_image\" value=\"<?php echo trans('Edit_image');?>\" />
\t<input type=\"hidden\" id=\"lang_error_upload\" value=\"<?php echo trans('Error_Upload');?>\" />
\t<input type=\"hidden\" id=\"lang_select\" value=\"<?php echo trans('Select');?>\" />
\t<input type=\"hidden\" id=\"lang_extract\" value=\"<?php echo trans('Extract');?>\" />
\t<input type=\"hidden\" id=\"transliteration\" value=\"<?php echo \$transliteration?\"true\":\"false\";?>\" />
\t<input type=\"hidden\" id=\"convert_spaces\" value=\"<?php echo \$convert_spaces?\"true\":\"false\";?>\" />
\t<input type=\"hidden\" id=\"replace_with\" value=\"<?php echo \$convert_spaces? \$replace_with : \"\";?>\" />
\t<input type=\"hidden\" id=\"lower_case\" value=\"<?php echo \$lower_case?\"true\":\"false\";?>\" />
\t<input type=\"hidden\" id=\"show_folder_size\" value=\"<?php echo \$show_folder_size;?>\" />
\t<input type=\"hidden\" id=\"add_time_to_img\" value=\"<?php echo \$add_time_to_img;?>\" />
<?php if(\$upload_files){ ?>
<!-- uploader div start -->
<div class=\"uploader\">
\t<div class=\"text-center\">
\t\t<button class=\"btn btn-inverse close-uploader\"><i class=\"icon-backward icon-white\"></i> <?php echo trans('Return_Files_List')?></button>
\t</div>
\t<div class=\"space10\"></div>
\t<div class=\"space10\"></div>
\t<div class=\"tabbable upload-tabbable\"> <!-- Only required for left/right tabs -->
\t\t<ul class=\"nav nav-tabs\">
\t\t\t<li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\"><?php echo trans('Upload_base');?></a></li>
\t\t\t<li><a href=\"#taburl\" data-toggle=\"tab\"><?php echo trans('Upload_url');?></a></li>
\t\t\t<?php if(\$java_upload){ ?>
\t\t\t<li><a href=\"#tab2\" id=\"uploader-btn\" data-toggle=\"tab\"><?php echo trans('Upload_java');?></a></li>
\t\t\t<?php } ?>
\t\t</ul>
\t\t<div class=\"tab-content\">
\t\t\t<div class=\"tab-pane active\" id=\"tab1\">
\t\t\t\t<form action=\"dialog.php\" method=\"post\" enctype=\"multipart/form-data\" id=\"rfmDropzone\" class=\"dropzone\">
\t\t\t\t\t<input type=\"hidden\" name=\"path\" id=\"cur_path\" value=\"<?php echo \$cur_path?>\"/>
\t\t\t\t\t<input type=\"hidden\" name=\"path_thumb\" value=\"<?php echo \$thumbs_path.\$subdir?>\"/>
\t\t\t\t\t<div class=\"fallback\">
\t\t\t\t\t\t<h3><?php echo  trans('Upload_file')?>:</h3><br/>
\t\t\t\t\t\t<input name=\"file\" type=\"file\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"fldr\" value=\"<?php echo \$subdir;?>\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"view\" value=\"<?php echo \$view;?>\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"type\" value=\"<?php echo \$type_param;?>\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"field_id\" value=\"<?php echo \$field_id;?>\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"relative_url\" value=\"<?php echo \$return_relative_url;?>\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"popup\" value=\"<?php echo \$popup;?>\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"lang\" value=\"<?php echo \$lang;?>\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"filter\" value=\"<?php echo \$filter;?>\"/>
\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"<?php echo trans('OK')?>\" />
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"upload-help\"><?php echo trans('Upload_base_help');?></div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"taburl\">
\t\t\t\t<br/>
\t\t\t\t<form class=\"form-horizontal\">
\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"url\"><?php echo trans('Upload_url');?></label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"input-block-level\" id=\"url\" placeholder=\"<?php echo trans('Upload_url');?>\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\" id=\"uploadURL\"><?php echo  trans('Upload_file');?></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<?php if(\$java_upload){ ?>
\t\t\t<div class=\"tab-pane\" id=\"tab2\">
\t\t\t\t<div id=\"iframe-container\"></div>
\t\t\t\t<div class=\"upload-help\"><?php echo trans('Upload_java_help');?></div>
\t\t\t</div>
\t\t\t<?php } ?>
\t\t</div>
\t</div>

</div>
<!-- uploader div start -->

<?php } ?>
\t\t<div class=\"container-fluid\">

<?php
\$class_ext = '';
\$src = '';
if(\$ftp){
\ttry{
\t\t\$files = \$ftp->scanDir(\"/\".\$ftp_base_folder.\$upload_dir.\$rfm_subfolder.\$subdir);
\t\tif (!\$ftp->isDir(\"/\".\$ftp_base_folder.\$ftp_thumbs_dir.\$rfm_subfolder.\$subdir)){
\t\t\tcreate_folder(false,\"/\".\$ftp_base_folder.\$ftp_thumbs_dir.\$rfm_subfolder.\$subdir,\$ftp,\$config);
\t\t}
\t}catch(FtpClient\\FtpException \$e){
\t\techo \"Error: \";
\t\techo \$e->getMessage();
\t\techo \"<br/>Please check configurations\";
\t\tdie();
\t}
}else{
\t\$files\t= scandir(\$current_path.\$rfm_subfolder.\$subdir);
}

\$n_files= count(\$files);

//php sorting
\$sorted=array();
//\$current_folder=array();
//\$prev_folder=array();
\$current_files_number = 0;
\$current_folders_number = 0;

foreach(\$files as \$k=>\$file){
\tif(\$ftp){
\t\t\$date = strtotime(\$file['day'].\" \".\$file['month'].\" \".date('Y').\" \".\$file['time']);
\t\t\$size = \$file['size'];
\t\tif(\$file['type']=='file'){
\t\t\t\$current_files_number++;
\t\t\t\$file_ext = substr(strrchr(\$file['name'],'.'),1);
\t\t}else{
\t\t\t\$current_folders_number++;
\t\t\t\$file_ext=trans('Type_dir');
\t\t}
\t\t\$sorted[\$k]=array(
\t\t\t'file'=>\$file['name'],
\t\t\t'file_lcase'=>strtolower(\$file['name']),
\t\t\t'date'=>\$date,
\t\t\t'size'=>\$size,
\t\t\t'permissions' => \$file['permissions'],
\t\t\t'extension'=>strtolower(\$file_ext)
\t\t);
\t}else{


\t\tif(\$file!=\".\" && \$file!=\"..\"){
\t\t\tif(is_dir(\$current_path.\$rfm_subfolder.\$subdir.\$file)){
\t\t\t\t\$date=filemtime(\$current_path.\$rfm_subfolder.\$subdir. \$file);
\t\t\t\t\$current_folders_number++;
\t\t\t\tif(\$show_folder_size){
\t\t\t\t\tlist(\$size,\$nfiles,\$nfolders) = folder_info(\$current_path.\$rfm_subfolder.\$subdir.\$file,false);
\t\t\t\t} else {
\t\t\t\t\t\$size=0;
\t\t\t\t}
\t\t\t\t\$file_ext=trans('Type_dir');
\t\t\t\t\$sorted[\$k]=array(
\t\t\t\t\t'file'=>\$file,
\t\t\t\t\t'file_lcase'=>strtolower(\$file),
\t\t\t\t\t'date'=>\$date,
\t\t\t\t\t'size'=>\$size,
\t\t\t\t\t'permissions' =>'',
\t\t\t\t\t'extension'=>strtolower(\$file_ext)
\t\t\t\t);
\t\t\t\tif(\$show_folder_size){
\t\t\t\t\t\$sorted[\$k]['nfiles'] = \$nfiles;
\t\t\t\t\t\$sorted[\$k]['nfolders'] = \$nfolders;
\t\t\t\t}
\t\t\t}else{
\t\t\t\t\$current_files_number++;
\t\t\t\t\$file_path=\$current_path.\$rfm_subfolder.\$subdir.\$file;
\t\t\t\t\$date=filemtime(\$file_path);
\t\t\t\t\$size=filesize(\$file_path);
\t\t\t\t\$file_ext = substr(strrchr(\$file,'.'),1);
\t\t\t\t\$sorted[\$k]=array(
\t\t\t\t\t'file'=>\$file,
\t\t\t\t\t'file_lcase'=>strtolower(\$file),
\t\t\t\t\t'date'=>\$date,
\t\t\t\t\t'size'=>\$size,
\t\t\t\t\t'permissions' =>'',
\t\t\t\t\t'extension'=>strtolower(\$file_ext)
\t\t\t\t);
\t\t\t}
\t\t}
\t}
}


// Should lazy loading be enabled
\$lazy_loading_enabled= (\$lazy_loading_file_number_threshold == 0 || \$lazy_loading_file_number_threshold != -1 && \$n_files > \$lazy_loading_file_number_threshold) ? true : false;

function filenameSort(\$x, \$y) {
\treturn \$x['file_lcase'] <  \$y['file_lcase'];
}
function dateSort(\$x, \$y) {
\treturn \$x['date'] <  \$y['date'];
}
function sizeSort(\$x, \$y) {
\treturn \$x['size'] <  \$y['size'];
}
function extensionSort(\$x, \$y) {
\treturn \$x['extension'] <  \$y['extension'];
}

switch(\$sort_by){
\tcase 'date':
\t\tusort(\$sorted, 'dateSort');
\t\tbreak;
\tcase 'size':
\t\tusort(\$sorted, 'sizeSort');
\t\tbreak;
\tcase 'extension':
\t\tusort(\$sorted, 'extensionSort');
\t\tbreak;
\tdefault:
\t\tusort(\$sorted, 'filenameSort');
\t\tbreak;
}

if(!\$descending){
\t\$sorted=array_reverse(\$sorted);
}

if(\$subdir!=\"\"){
\t\$sorted = array_merge(array(array('file'=>'..')),\$sorted);
}
\$files=\$sorted;

?>
<!-- header div start -->
<div class=\"navbar navbar-fixed-top\">
\t<div class=\"navbar-inner\">
\t\t<div class=\"container-fluid\">
\t\t<button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t<span class=\"icon-bar\"></span>
\t\t<span class=\"icon-bar\"></span>
\t\t<span class=\"icon-bar\"></span>
\t\t</button>
\t\t<div class=\"brand\"><?php echo trans('Toolbar');?></div>
\t\t<div class=\"nav-collapse collapse\">
\t\t<div class=\"filters\">
\t\t\t<div class=\"row-fluid\">
\t\t\t<div class=\"span4 half\">
\t\t\t\t<?php if(\$upload_files){ ?>
\t\t\t\t<button class=\"tip btn upload-btn\" title=\"<?php echo  trans('Upload_file');?>\"><i class=\"rficon-upload\"></i></button>
\t\t\t\t<?php } ?>
\t\t\t\t<?php if(\$create_text_files){ ?>
\t\t\t\t<button class=\"tip btn create-file-btn\" title=\"<?php echo  trans('New_File');?>\"><i class=\"icon-plus\"></i><i class=\"icon-file\"></i></button>
\t\t\t\t<?php } ?>
\t\t\t\t<?php if(\$create_folders){ ?>
\t\t\t\t<button class=\"tip btn new-folder\" title=\"<?php echo  trans('New_Folder')?>\"><i class=\"icon-plus\"></i><i class=\"icon-folder-open\"></i></button>
\t\t\t\t<?php } ?>
\t\t\t\t<?php if(\$copy_cut_files || \$copy_cut_dirs){ ?>
\t\t\t\t<button class=\"tip btn paste-here-btn\" title=\"<?php echo trans('Paste_Here');?>\"><i class=\"rficon-clipboard-apply\"></i></button>
\t\t\t\t<button class=\"tip btn clear-clipboard-btn\" title=\"<?php echo trans('Clear_Clipboard');?>\"><i class=\"rficon-clipboard-clear\"></i></button>
\t\t\t\t<?php } ?>
\t\t\t</div>
\t\t\t<div class=\"span2 half view-controller\">
\t\t\t\t<button class=\"btn tip<?php if(\$view==0) echo \" btn-inverse\";?>\" id=\"view0\" data-value=\"0\" title=\"<?php echo trans('View_boxes');?>\"><i class=\"icon-th <?php if(\$view==0) echo \"icon-white\";?>\"></i></button>
\t\t\t\t<button class=\"btn tip<?php if(\$view==1) echo \" btn-inverse\";?>\" id=\"view1\" data-value=\"1\" title=\"<?php echo trans('View_list');?>\"><i class=\"icon-align-justify <?php if(\$view==1) echo \"icon-white\";?>\"></i></button>
\t\t\t\t<button class=\"btn tip<?php if(\$view==2) echo \" btn-inverse\";?>\" id=\"view2\" data-value=\"2\" title=\"<?php echo trans('View_columns_list');?>\"><i class=\"icon-fire <?php if(\$view==2) echo \"icon-white\";?>\"></i></button>
\t\t\t</div>
\t\t\t<div class=\"span6 entire types\">
\t\t\t\t<span><?php echo trans('Filters');?>:</span>
\t\t\t\t<?php if(\$_GET['type']!=1 && \$_GET['type']!=3 && \$show_filter_buttons){ ?>
\t\t\t\t\t<?php if(count(\$ext_file)>0 or false){ ?>
\t\t\t\t<input id=\"select-type-1\" name=\"radio-sort\" type=\"radio\" data-item=\"ff-item-type-1\" checked=\"checked\"  class=\"hide\"  />
\t\t\t\t<label id=\"ff-item-type-1\" title=\"<?php echo trans('Files');?>\" for=\"select-type-1\" class=\"tip btn ff-label-type-1\"><i class=\"icon-file\"></i></label>
\t\t\t\t\t<?php } ?>
\t\t\t\t\t<?php if(count(\$ext_img)>0 or false){ ?>
\t\t\t\t<input id=\"select-type-2\" name=\"radio-sort\" type=\"radio\" data-item=\"ff-item-type-2\" class=\"hide\"  />
\t\t\t\t<label id=\"ff-item-type-2\" title=\"<?php echo trans('Images');?>\" for=\"select-type-2\" class=\"tip btn ff-label-type-2\"><i class=\"icon-picture\"></i></label>
\t\t\t\t\t<?php } ?>
\t\t\t\t\t<?php if(count(\$ext_misc)>0 or false){ ?>
\t\t\t\t<input id=\"select-type-3\" name=\"radio-sort\" type=\"radio\" data-item=\"ff-item-type-3\" class=\"hide\"  />
\t\t\t\t<label id=\"ff-item-type-3\" title=\"<?php echo trans('Archives');?>\" for=\"select-type-3\" class=\"tip btn ff-label-type-3\"><i class=\"icon-inbox\"></i></label>
\t\t\t\t\t<?php } ?>
\t\t\t\t\t<?php if(count(\$ext_video)>0 or false){ ?>
\t\t\t\t<input id=\"select-type-4\" name=\"radio-sort\" type=\"radio\" data-item=\"ff-item-type-4\" class=\"hide\"  />
\t\t\t\t<label id=\"ff-item-type-4\" title=\"<?php echo trans('Videos');?>\" for=\"select-type-4\" class=\"tip btn ff-label-type-4\"><i class=\"icon-film\"></i></label>
\t\t\t\t\t<?php } ?>
\t\t\t\t\t<?php if(count(\$ext_music)>0 or false){ ?>
\t\t\t\t<input id=\"select-type-5\" name=\"radio-sort\" type=\"radio\" data-item=\"ff-item-type-5\" class=\"hide\"  />
\t\t\t\t<label id=\"ff-item-type-5\" title=\"<?php echo trans('Music');?>\" for=\"select-type-5\" class=\"tip btn ff-label-type-5\"><i class=\"icon-music\"></i></label>
\t\t\t\t\t<?php } ?>
\t\t\t\t<?php } ?>
\t\t\t\t<input accesskey=\"f\" type=\"text\" class=\"filter-input <?php echo ((\$_GET['type']!=1 && \$_GET['type']!=3) ? '' : 'filter-input-notype');?>\" id=\"filter-input\" name=\"filter\" placeholder=\"<?php echo fix_strtolower(trans('Text_filter'));?>...\" value=\"<?php echo \$filter;?>\"/><?php if(\$n_files>\$file_number_limit_js){ ?><label id=\"filter\" class=\"btn\"><i class=\"icon-play\"></i></label><?php } ?>

\t\t\t\t<input id=\"select-type-all\" name=\"radio-sort\" type=\"radio\" data-item=\"ff-item-type-all\" class=\"hide\"  />
\t\t\t\t<label id=\"ff-item-type-all\" title=\"<?php echo trans('All');?>\" <?php if(\$_GET['type']==1 || \$_GET['type']==3){ ?>style=\"visibility: hidden;\" <?php } ?> data-item=\"ff-item-type-all\" for=\"select-type-all\" style=\"margin-rigth:0px;\" class=\"tip btn btn-inverse ff-label-type-all\"><i class=\"icon-remove icon-white\"></i></label>

\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t</div>
\t</div>
</div>

<!-- header div end -->

\t<!-- breadcrumb div start -->

\t<div class=\"row-fluid\">
\t<?php
\t\$link=\"dialog.php?\".\$get_params;
\t?>
\t<ul class=\"breadcrumb\">
\t<li class=\"pull-left\"><a href=\"<?php echo \$link?>/\"><i class=\"icon-home\"></i></a></li>
\t<li><span class=\"divider\">/</span></li>
\t<?php
\t\$bc=explode(\"/\",\$subdir);
\t\$tmp_path='';
\tif(!empty(\$bc))
\tforeach(\$bc as \$k=>\$b){
\t\t\$tmp_path.=\$b.\"/\";
\t\tif(\$k==count(\$bc)-2){
\t?> <li class=\"active\"><?php echo \$b?></li><?php
\t\t}elseif(\$b!=\"\"){ ?>
\t\t<li><a href=\"<?php echo \$link.\$tmp_path?>\"><?php echo \$b?></a></li><li><span class=\"divider\"><?php echo \"/\";?></span></li>
\t<?php }
\t}
\t?>

\t<li class=\"pull-right\"><a class=\"btn-small\" href=\"javascript:void('')\" id=\"info\"><i class=\"icon-question-sign\"></i></a></li>
\t<?php if(\$show_language_selection){ ?>
\t<li class=\"pull-right\"><a class=\"btn-small\" href=\"javascript:void('')\" id=\"change_lang_btn\"><i class=\"icon-globe\"></i></a></li>
\t<?php } ?>
\t<li class=\"pull-right\"><a id=\"refresh\" class=\"btn-small\" href=\"dialog.php?<?php echo \$get_params.\$subdir.\"sorter sort-name\";?> <?php if(\$sort_by==\"name\"){ echo (\$descending)?\"descending\":\"ascending\"; } ?>\" href=\"javascript:void('')\" data-sort=\"name\"><?php echo trans('Filename');?></a></li>
\t\t<li><a class=\"sorter sort-date <?php if(\$sort_by==\"date\"){ echo (\$descending)?\"descending\":\"ascending\"; } ?>\" href=\"javascript:void('')\" data-sort=\"date\"><?php echo trans('Date');?></a></li>
\t\t<li><a class=\"sorter sort-size <?php if(\$sort_by==\"size\"){ echo (\$descending)?\"descending\":\"ascending\"; } ?>\" href=\"javascript:void('')\" data-sort=\"size\"><?php echo trans('Size');?></a></li>
\t\t<li><a class=\"sorter sort-extension <?php if(\$sort_by==\"extension\"){ echo (\$descending)?\"descending\":\"ascending\"; } ?>\" href=\"javascript:void('')\" data-sort=\"extension\"><?php echo trans('Type');?></a></li>
\t\t</ul>
\t\t</div>
\t</li>
\t<li><small class=\"hidden-phone\">(<span id=\"files_number\"><?php echo \$current_files_number.\"</span> \".trans('Files').\" - <span id='folders_number'>\".\$current_folders_number.\"</span> \".trans('Folders');?>)</small></li>
\t<?php if(\$show_total_size){ ?>
\t<li><small class=\"hidden-phone\"><span title=\"<?php echo trans('total size').\$MaxSizeTotal;?>\"><?php echo trans('total size').\": \".makeSize(\$sizeCurrentFolder).((\$MaxSizeTotal !== false && is_int(\$MaxSizeTotal))? '/'.\$MaxSizeTotal.' '.trans('MB'):'');?></span></small>
\t</li>
\t<?php } ?>
\t</ul>
\t</div>
\t<!-- breadcrumb div end -->
\t<div class=\"row-fluid ff-container\">
\t<div class=\"span12\">
\t\t<?php if( (\$ftp && !\$ftp->isDir(\$ftp_base_folder.\$upload_dir.\$rfm_subfolder.\$subdir))  || (!\$ftp && @opendir(\$current_path.\$rfm_subfolder.\$subdir)===FALSE)){ ?>
\t\t<br/>
\t\t<div class=\"alert alert-error\">There is an error! The upload folder there isn't. Check your config.php file. </div>
\t\t<?php }else{ ?>
\t\t<h4 id=\"help\"><?php echo trans('Swipe_help');?></h4>
\t\t<?php if(isset(\$folder_message)){ ?>
\t\t<div class=\"alert alert-block\"><?php echo \$folder_message;?></div>
\t\t<?php } ?>
\t\t<?php if(\$show_sorting_bar){ ?>
\t\t<!-- sorter -->
\t\t<div class=\"sorter-container <?php echo \"list-view\".\$view;?>\">
\t\t<div class=\"file-name\"><a class=\"sorter sort-name <?php if(\$sort_by==\"name\"){ echo (\$descending)?\"descending\":\"ascending\"; } ?>\" href=\"javascript:void('')\" data-sort=\"name\"><?php echo trans('Filename');?></a></div>
\t\t<div class=\"file-date\"><a class=\"sorter sort-date <?php if(\$sort_by==\"date\"){ echo (\$descending)?\"descending\":\"ascending\"; } ?>\" href=\"javascript:void('')\" data-sort=\"date\"><?php echo trans('Date');?></a></div>
\t\t<div class=\"file-size\"><a class=\"sorter sort-size <?php if(\$sort_by==\"size\"){ echo (\$descending)?\"descending\":\"ascending\"; } ?>\" href=\"javascript:void('')\" data-sort=\"size\"><?php echo trans('Size');?></a></div>
\t\t<div class='img-dimension'><?php echo trans('Dimension');?></div>
\t\t<div class='file-extension'><a class=\"sorter sort-extension <?php if(\$sort_by==\"extension\"){ echo (\$descending)?\"descending\":\"ascending\"; } ?>\" href=\"javascript:void('')\" data-sort=\"extension\"><?php echo trans('Type');?></a></div>
\t\t<div class='file-operations'><?php echo trans('Operations');?></div>
\t\t</div>
\t\t<?php } ?>

\t\t<input type=\"hidden\" id=\"file_number\" value=\"<?php echo \$n_files;?>\" />
\t\t<!--ul class=\"thumbnails ff-items\"-->
\t\t<ul class=\"grid cs-style-2 <?php echo \"list-view\".\$view;?>\" id=\"main-item-container\">
\t\t<?php
\t\t\$jplayer_ext=array(\"mp4\",\"flv\",\"webmv\",\"webma\",\"webm\",\"m4a\",\"m4v\",\"ogv\",\"oga\",\"mp3\",\"midi\",\"mid\",\"ogg\",\"wav\");


\t\tforeach (\$files as \$file_array) {
\t\t\t\$file=\$file_array['file'];
\t\t\tif(\$file == '.' || ( substr(\$file, 0, 1) == '.' && isset( \$file_array[ 'extension' ] ) && \$file_array[ 'extension' ] == strtolower(trans( 'Type_dir' ) )) || (isset(\$file_array['extension']) && \$file_array['extension']!=strtolower(trans('Type_dir'))) || (\$file == '..' && \$subdir == '') || in_array(\$file, \$hidden_folders) || (\$filter!='' && \$n_files>\$file_number_limit_js && \$file!=\"..\" && stripos(\$file,\$filter)===false)){
\t\t\t\tcontinue;
\t\t\t}
\t\t\t\$new_name=fix_filename(\$file,\$config);
\t\t\tif(\$ftp && \$file!='..' && \$file!=\$new_name){
\t\t\t\t//rename
\t\t\t\trename_folder(\$current_path.\$subdir.\$file,\$new_name,\$ftp,\$config);
\t\t\t\t\$file=\$new_name;
\t\t\t}
\t\t\t//add in thumbs folder if not exist
\t\t\tif(\$file!='..'){
\t\t\t\tif(!\$ftp && !file_exists(\$thumbs_path.\$subdir.\$file)){
\t\t\t\t\tcreate_folder(false,\$thumbs_path.\$subdir.\$file,\$ftp,\$config);
\t\t\t\t}
\t\t\t}

\t\t\t\$class_ext = 3;
\t\t\tif(\$file=='..' && trim(\$subdir) != '' ){
\t\t\t\$src = explode(\"/\",\$subdir);
\t\t\tunset(\$src[count(\$src)-2]);
\t\t\t\$src=implode(\"/\",\$src);
\t\t\tif(\$src=='') \$src=\"/\";
\t\t\t\t}
\t\t\t\telseif (\$file!='..') {
\t\t\t\t\t\$src = \$subdir . \$file.\"/\";
\t\t\t\t}

\t\t\t?>
\t\t\t\t<li data-name=\"<?php echo \$file ?>\" class=\"<?php if(\$file=='..') echo 'back'; else echo 'dir';?>\" <?php if((\$filter!='' && stripos(\$file,\$filter)===false)) echo ' style=\"display:none;\"';?>><?php
\t\t\t\t\$file_prevent_rename = false;
\t\t\t\t\$file_prevent_delete = false;
\t\t\t\tif (isset(\$filePermissions[\$file])) {
\t\t\t\t\$file_prevent_rename = isset(\$filePermissions[\$file]['prevent_rename']) && \$filePermissions[\$file]['prevent_rename'];
\t\t\t\t\$file_prevent_delete = isset(\$filePermissions[\$file]['prevent_delete']) && \$filePermissions[\$file]['prevent_delete'];
\t\t\t\t}
\t\t\t\t?><figure data-name=\"<?php echo \$file ?>\" class=\"<?php if(\$file==\"..\") echo \"back-\";?>directory\" data-type=\"<?php if(\$file!=\"..\"){ echo \"dir\"; } ?>\">
\t\t\t\t<?php if(\$file==\"..\"){ ?>
\t\t\t\t\t<input type=\"hidden\" class=\"path\" value=\"<?php echo str_replace('.','',dirname(\$rfm_subfolder.\$subdir));?>\"/>
\t\t\t\t\t<input type=\"hidden\" class=\"path_thumb\" value=\"<?php echo dirname(\$thumbs_path.\$subdir).\"/\";?>\"/>
\t\t\t\t<?php } ?>
\t\t\t\t<a class=\"folder-link\" href=\"dialog.php?<?php echo \$get_params.rawurlencode(\$src); ?>\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"img-precontainer-mini directory\">
\t\t\t\t\t\t\t<div class=\"img-container-mini\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<img class=\"directory-img\"  src=\"img/<?php echo \$icon_theme;?>/folder<?php if(\$file==\"..\"){ echo \"_back\"; }?>.png\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t<?php if(\$file==\"..\"){ ?>
\t\t\t\t\t<div class=\"box no-effect\">
\t\t\t\t\t<h4><?php echo trans('Back') ?></h4>
\t\t\t\t\t</div>
\t\t\t\t\t</a>

\t\t\t<?php }else{ ?>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t<h4 class=\"<?php if(\$ellipsis_title_after_first_row){ echo \"ellipsis\"; } ?>\"><a class=\"folder-link\" data-file=\"<?php echo \$file ?>\" href=\"dialog.php?<?php echo \$get_params.rawurlencode(\$src).\"&\".uniqid() ?>\"><?php echo \$file;?></a></h4>
\t\t\t\t\t<input type=\"hidden\" class=\"date\" value=\"<?php echo \$file_array['date'];?>\"/>
\t\t\t\t\t<input type=\"hidden\" class=\"size\" value=\"<?php echo \$file_array['size'];?>\"/>
\t\t\t\t\t<input type=\"hidden\" class=\"extension\" value=\"<?php echo trans('Type_dir');?>\"/>
\t\t\t\t\t<div class=\"file-date\"><?php echo date(trans('Date_type'),\$file_array['date']);?></div>
\t\t\t\t\t<?php if(\$show_folder_size){ ?>
\t\t\t\t\t\t<div class=\"file-size\"><?php echo makeSize(\$file_array['size']);?></div>
\t\t\t\t\t\t<input type=\"hidden\" class=\"nfiles\" value=\"<?php echo \$file_array['nfiles'];?>\"/>
\t\t\t\t\t\t<input type=\"hidden\" class=\"nfolders\" value=\"<?php echo \$file_array['nfolders'];?>\"/>
\t\t\t\t\t<?php } ?>
\t\t\t\t\t<div class='file-extension'><?php echo trans('Type_dir');?></div>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<a href=\"javascript:void('')\" class=\"tip-left edit-button rename-file-paths <?php if(\$rename_folders && !\$file_prevent_rename) echo \"rename-folder\";?>\" title=\"<?php echo trans('Rename')?>\" data-folder=\"1\" data-permissions=\"<?php echo \$file_array['permissions']; ?>\" data-path=\"<?php echo \$rfm_subfolder.\$subdir.\$file;?>\">
\t\t\t\t\t\t<i class=\"icon-pencil <?php if(!\$rename_folders || \$file_prevent_rename) echo 'icon-white';?>\"></i></a>
\t\t\t\t\t\t<a href=\"javascript:void('')\" class=\"tip-left erase-button <?php if(\$delete_folders && !\$file_prevent_delete) echo \"delete-folder\";?>\" title=\"<?php echo trans('Erase')?>\" data-confirm=\"<?php echo trans('Confirm_Folder_del');?>\" data-path=\"<?php echo \$rfm_subfolder.\$subdir.\$file;?>\" >
\t\t\t\t\t\t<i class=\"icon-trash <?php if(!\$delete_folders || \$file_prevent_delete) echo 'icon-white';?>\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</figcaption>
\t\t\t<?php } ?>
\t\t\t\t</figure>
\t\t\t</li>
\t\t\t<?php
\t\t\t}


\t\t\t\$files_prevent_duplicate = array();
\t\t\tforeach (\$files as \$nu=>\$file_array) {
\t\t\t\t\$file=\$file_array['file'];

\t\t\t\tif(\$file == '.' || \$file == '..' || \$file_array['extension']==trans('Type_dir') || in_array(\$file, \$hidden_files) || !in_array(fix_strtolower(\$file_array['extension']), \$ext) || (\$filter!='' && \$n_files>\$file_number_limit_js && stripos(\$file,\$filter)===false))
\t\t\t\t\tcontinue;

\t\t\t\t\$filename=substr(\$file, 0, '-' . (strlen(\$file_array['extension']) + 1));
\t\t\t\tif(!\$ftp){
\t\t\t\t\t\$file_path=\$current_path.\$rfm_subfolder.\$subdir.\$file;
\t\t\t\t\t//check if file have illegal caracter

\t\t\t\t\tif(\$file!=fix_filename(\$file,\$config)){
\t\t\t\t\t\t\$file1=fix_filename(\$file,\$config);
\t\t\t\t\t\t\$file_path1=(\$current_path.\$rfm_subfolder.\$subdir.\$file1);
\t\t\t\t\t\tif(file_exists(\$file_path1)){
\t\t\t\t\t\t\t\$i = 1;
\t\t\t\t\t\t\t\$info=pathinfo(\$file1);
\t\t\t\t\t\t\twhile(file_exists(\$current_path.\$rfm_subfolder.\$subdir.\$info['filename'].\".[\".\$i.\"].\".\$info['extension'])) {
\t\t\t\t\t\t\t\t\$i++;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$file1=\$info['filename'].\".[\".\$i.\"].\".\$info['extension'];
\t\t\t\t\t\t\t\$file_path1=(\$current_path.\$rfm_subfolder.\$subdir.\$file1);
\t\t\t\t\t\t}

\t\t\t\t\t\t\$filename=substr(\$file1, 0, '-' . (strlen(\$file_array['extension']) + 1));
\t\t\t\t\t\trename_file(\$file_path,fix_filename(\$filename,\$config),\$ftp,\$config);
\t\t\t\t\t\t\$file=\$file1;
\t\t\t\t\t\t\$file_array['extension']=fix_filename(\$file_array['extension'],\$config);
\t\t\t\t\t\t\$file_path=\$file_path1;
\t\t\t\t\t}
\t\t\t\t}else{
\t\t\t\t\t\$file_path = \$config['ftp_base_url'].\$upload_dir.\$rfm_subfolder.\$subdir.\$file;
\t\t\t\t}

\t\t\t\t\$is_img=false;
\t\t\t\t\$is_video=false;
\t\t\t\t\$is_audio=false;
\t\t\t\t\$show_original=false;
\t\t\t\t\$show_original_mini=false;
\t\t\t\t\$mini_src=\"\";
\t\t\t\t\$src_thumb=\"\";
\t\t\t\tif(in_array(\$file_array['extension'], \$ext_img)){
\t\t\t\t\t\$src = \$file_path;
\t\t\t\t\t\$is_img=true;

\t\t\t\t\t\$img_width = \$img_height = \"\";
\t\t\t\t\tif(\$ftp){
\t\t\t\t\t\t\$mini_src = \$src_thumb = \$config['ftp_base_url'].\$ftp_thumbs_dir.\$subdir. \$file;
\t\t\t\t\t\t\$creation_thumb_path = \"/\".\$config['ftp_base_folder'].\$ftp_thumbs_dir.\$subdir. \$file;
\t\t\t\t\t}else{

\t\t\t\t\t\t\$creation_thumb_path = \$mini_src = \$src_thumb = \$thumbs_path.\$subdir. \$file;

\t\t\t\t\t\tif(!file_exists(\$src_thumb) ){
\t\t\t\t\t\t\tif(!create_img(\$file_path, \$creation_thumb_path, 122, 91,'crop',\$ftp,\$config)){
\t\t\t\t\t\t\t\t\$src_thumb=\$mini_src=\"\";
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\tnew_thumbnails_creation(\$current_path.\$rfm_subfolder.\$subdir,\$file_path,\$file,\$current_path,'','','','','','','',\$fixed_image_creation,\$fixed_path_from_filemanager,\$fixed_image_creation_name_to_prepend,\$fixed_image_creation_to_append,\$fixed_image_creation_width,\$fixed_image_creation_height,\$fixed_image_creation_option);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t//check if is smaller than thumb
\t\t\t\t\t\tlist(\$img_width, \$img_height, \$img_type, \$attr)=@getimagesize(\$file_path);
\t\t\t\t\t\tif(\$img_width<122 && \$img_height<91){
\t\t\t\t\t\t\t\$src_thumb=\$file_path;
\t\t\t\t\t\t\t\$show_original=true;
\t\t\t\t\t\t}

\t\t\t\t\t\tif(\$img_width<45 && \$img_height<38){
\t\t\t\t\t\t\t\$mini_src=\$current_path.\$rfm_subfolder.\$subdir.\$file;
\t\t\t\t\t\t\t\$show_original_mini=true;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t\$is_icon_thumb=false;
\t\t\t\t\$is_icon_thumb_mini=false;
\t\t\t\t\$no_thumb=false;
\t\t\t\tif(\$src_thumb==\"\"){
\t\t\t\t\t\$no_thumb=true;
\t\t\t\t\tif(file_exists('img/'.\$icon_theme.'/'.\$file_array['extension'].\".jpg\")){
\t\t\t\t\t\t\$src_thumb ='img/'.\$icon_theme.'/'.\$file_array['extension'].\".jpg\";
\t\t\t\t\t}else{
\t\t\t\t\t\t\$src_thumb = \"img/\".\$icon_theme.\"/default.jpg\";
\t\t\t\t\t}
\t\t\t\t\t\$is_icon_thumb=true;
\t\t\t\t}
\t\t\t\tif(\$mini_src==\"\"){
\t\t\t\t\$is_icon_thumb_mini=false;
\t\t\t\t}

\t\t\t\t\$class_ext=0;
\t\t\t\tif (in_array(\$file_array['extension'], \$ext_video)) {
\t\t\t\t\t\$class_ext = 4;
\t\t\t\t\t\$is_video=true;
\t\t\t\t}elseif (in_array(\$file_array['extension'], \$ext_img)) {
\t\t\t\t\t\$class_ext = 2;
\t\t\t\t}elseif (in_array(\$file_array['extension'], \$ext_music)) {
\t\t\t\t\t\$class_ext = 5;
\t\t\t\t\t\$is_audio=true;
\t\t\t\t}elseif (in_array(\$file_array['extension'], \$ext_misc)) {
\t\t\t\t\t\$class_ext = 3;
\t\t\t\t}else{
\t\t\t\t\t\$class_ext = 1;
\t\t\t\t}
\t\t\t\tif((!(\$_GET['type']==1 && !\$is_img) && !((\$_GET['type']==3 && !\$is_video) && (\$_GET['type']==3 && !\$is_audio))) && \$class_ext>0){
?>
\t\t\t<li class=\"ff-item-type-<?php echo \$class_ext;?> file\"  data-name=\"<?php echo \$file;?>\" <?php if((\$filter!='' && stripos(\$file,\$filter)===false)) echo ' style=\"display:none;\"';?>><?php
\t\t\t\$file_prevent_rename = false;
\t\t\t\$file_prevent_delete = false;
\t\t\tif (isset(\$filePermissions[\$file])) {
\t\t\tif (isset(\$filePermissions[\$file]['prevent_duplicate']) && \$filePermissions[\$file]['prevent_duplicate']) {
\t\t\t\t\$files_prevent_duplicate[] = \$file;
\t\t\t}
\t\t\t\$file_prevent_rename = isset(\$filePermissions[\$file]['prevent_rename']) && \$filePermissions[\$file]['prevent_rename'];
\t\t\t\$file_prevent_delete = isset(\$filePermissions[\$file]['prevent_delete']) && \$filePermissions[\$file]['prevent_delete'];
\t\t\t}
\t\t\t?>\t\t<figure data-name=\"<?php echo \$file ?>\" data-type=\"<?php if(\$is_img){ echo \"img\"; }else{ echo \"file\"; } ?>\">
\t\t\t\t<a href=\"javascript:void('')\" class=\"link\" data-file=\"<?php echo \$file;?>\" data-function=\"<?php echo \$apply;?>\">
\t\t\t\t<div class=\"img-precontainer\">
\t\t\t\t\t<?php if(\$is_icon_thumb){ ?><div class=\"filetype\"><?php echo \$file_array['extension'] ?></div><?php } ?>
\t\t\t\t\t<div class=\"img-container\">
\t\t\t\t\t\t<img class=\"<?php echo \$show_original ? \"original\" : \"\" ?><?php echo \$is_icon_thumb ? \" icon\" : \"\" ?><?php echo \$lazy_loading_enabled ? \" lazy-loaded\" : \"\"?>\" <?php echo \$lazy_loading_enabled ? \"data-original\" : \"src\"?>=\"<?php echo \$src_thumb;?>\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"img-precontainer-mini <?php if(\$is_img) echo 'original-thumb' ?>\">
\t\t\t\t\t<div class=\"filetype <?php echo \$file_array['extension'] ?> <?php if(in_array(\$file_array['extension'], \$editable_text_file_exts)) echo 'edit-text-file-allowed' ?> <?php if(!\$is_icon_thumb){ echo \"hide\"; }?>\"><?php echo \$file_array['extension'] ?></div>
\t\t\t\t\t<div class=\"img-container-mini\">
\t\t\t\t\t<?php if(\$mini_src!=\"\"){ ?>
\t\t\t\t\t<img class=\"<?php echo \$show_original_mini ? \"original\" : \"\" ?><?php echo \$is_icon_thumb_mini ? \" icon\" : \"\" ?><?php echo \$lazy_loading_enabled ? \" lazy-loaded\" : \"\"?>\" <?php echo \$lazy_loading_enabled ? \"data-original\" : \"src\"?>=\"<?php echo \$mini_src;?>\">
\t\t\t\t\t<?php } ?>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<?php if(\$is_icon_thumb){ ?>
\t\t\t\t<div class=\"cover\"></div>
\t\t\t\t<?php } ?>
\t\t\t\t</a>
\t\t\t\t<a href=\"javascript:void('')\" class=\"link\" data-file=\"<?php echo \$file;?>\" data-function=\"<?php echo \$apply;?>\">
\t\t\t\t<div class=\"box\">
\t\t\t\t<h4 class=\"<?php if(\$ellipsis_title_after_first_row){ echo \"ellipsis\"; } ?>\">
\t\t\t\t<?php echo \$filename;?></h4>
\t\t\t\t</div></a>
\t\t\t\t<input type=\"hidden\" class=\"date\" value=\"<?php echo \$file_array['date'];?>\"/>
\t\t\t\t<input type=\"hidden\" class=\"size\" value=\"<?php echo \$file_array['size'] ?>\"/>
\t\t\t\t<input type=\"hidden\" class=\"extension\" value=\"<?php echo \$file_array['extension'];?>\"/>
\t\t\t\t<input type=\"hidden\" class=\"name\" value=\"<?php echo \$file_array['file_lcase'];?>\"/>
\t\t\t\t<div class=\"file-date\"><?php echo date(trans('Date_type'),\$file_array['date'])?></div>
\t\t\t\t<div class=\"file-size\"><?php echo makeSize(\$file_array['size'])?></div>
\t\t\t\t<div class='img-dimension'><?php if(\$is_img){ echo \$img_width.\"x\".\$img_height; } ?></div>
\t\t\t\t<div class='file-extension'><?php echo \$file_array['extension'];?></div>
\t\t\t\t<figcaption>
\t\t\t\t\t<form action=\"force_download.php\" method=\"post\" class=\"download-form\" id=\"form<?php echo \$nu;?>\">
\t\t\t\t\t<input type=\"hidden\" name=\"path\" value=\"<?php echo \$rfm_subfolder.\$subdir?>\"/>
\t\t\t\t\t<input type=\"hidden\" class=\"name_download\" name=\"name\" value=\"<?php echo \$file?>\"/>

\t\t\t\t\t<a title=\"<?php echo trans('Download')?>\" class=\"tip-right\" href=\"javascript:void('')\" onclick=\"\$('#form<?php echo \$nu;?>').submit();\"><i class=\"icon-download\"></i></a>
\t\t\t\t\t<?php if(\$is_img && \$src_thumb!=\"\" && \$file_array['extension']!=\"tiff\" && \$file_array['extension']!=\"tif\"){ ?>
\t\t\t\t\t<a class=\"tip-right preview\" title=\"<?php echo trans('Preview')?>\" data-url=\"<?php echo \$src;?>\" data-toggle=\"lightbox\" href=\"#previewLightbox\"><i class=\" icon-eye-open\"></i></a>
\t\t\t\t\t<?php }elseif((\$is_video || \$is_audio) && in_array(\$file_array['extension'],\$jplayer_ext)){ ?>
\t\t\t\t\t<a class=\"tip-right modalAV <?php if(\$is_audio){ echo \"audio\"; }else{ echo \"video\"; } ?>\"
\t\t\t\t\ttitle=\"<?php echo trans('Preview')?>\" data-url=\"ajax_calls.php?action=media_preview&title=<?php echo \$filename;?>&file=<?php echo \$rfm_subfolder.\$subdir.\$file;?>\"
\t\t\t\t\thref=\"javascript:void('');\" ><i class=\" icon-eye-open\"></i></a>
\t\t\t\t\t\t<?php }elseif(\$preview_text_files && in_array(\$file_array['extension'],\$previewable_text_file_exts)){ ?>
\t\t\t\t\t\t<a class=\"tip-right file-preview-btn\" title=\"<?php echo trans('Preview')?>\" data-url=\"ajax_calls.php?action=get_file&sub_action=preview&preview_mode=text&title=<?php echo \$filename;?>&file=<?php echo \$rfm_subfolder.\$subdir.\$file;?>\"
\t\t\t\t\t\thref=\"javascript:void('');\" ><i class=\" icon-eye-open\"></i></a>
\t\t\t\t\t\t<?php }elseif(\$googledoc_enabled && in_array(\$file_array['extension'],\$googledoc_file_exts)){ ?>
\t\t\t\t\t\t<a class=\"tip-right file-preview-btn\" title=\"<?php echo trans('Preview')?>\" data-url=\"ajax_calls.php?action=get_file&sub_action=preview&preview_mode=google&title=<?php echo \$filename;?>&file=<?php echo \$rfm_subfolder.\$subdir.\$file;?>\"
\t\t\t\t\t\thref=\"docs.google.com;\" ><i class=\" icon-eye-open\"></i></a>

\t\t\t\t\t\t<?php }elseif(\$viewerjs_enabled && in_array(\$file_array['extension'],\$viewerjs_file_exts)){ ?>
\t\t\t\t\t\t<a class=\"tip-right file-preview-btn\" title=\"<?php echo trans('Preview')?>\" data-url=\"ajax_calls.php?action=get_file&sub_action=preview&preview_mode=viewerjs&title=<?php echo \$filename;?>&file=<?php echo \$rfm_subfolder.\$subdir.\$file;?>\"
\t\t\t\t\t\thref=\"docs.google.com;\" ><i class=\" icon-eye-open\"></i></a>

\t\t\t\t\t<?php }else{ ?>
\t\t\t\t\t<a class=\"preview disabled\"><i class=\"icon-eye-open icon-white\"></i></a>
\t\t\t\t\t<?php } ?>
\t\t\t\t\t<a href=\"javascript:void('')\" class=\"tip-left edit-button rename-file-paths <?php if(\$rename_files && !\$file_prevent_rename) echo \"rename-file\";?>\" title=\"<?php echo trans('Rename')?>\" data-folder=\"0\" data-permissions=\"<?php echo \$file_array['permissions']; ?>\" data-path=\"<?php echo \$rfm_subfolder.\$subdir .\$file;?>\">
\t\t\t\t\t<i class=\"icon-pencil <?php if(!\$rename_files || \$file_prevent_rename) echo 'icon-white';?>\"></i></a>

\t\t\t\t\t<a href=\"javascript:void('')\" class=\"tip-left erase-button <?php if(\$delete_files && !\$file_prevent_delete) echo \"delete-file\";?>\" title=\"<?php echo trans('Erase')?>\" data-confirm=\"<?php echo trans('Confirm_del');?>\" data-path=\"<?php echo \$rfm_subfolder.\$subdir.\$file;?>\">
\t\t\t\t\t<i class=\"icon-trash <?php if(!\$delete_files || \$file_prevent_delete) echo 'icon-white';?>\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t</form>
\t\t\t\t</figcaption>
\t\t\t</figure>
\t\t</li>
\t\t\t<?php
\t\t\t}
\t\t\t}

\t?></div>
\t\t</ul>
\t\t<?php } ?>
\t</div>
\t</div>
</div>
<script>
\tvar files_prevent_duplicate = new Array();
\t<?php
\tforeach (\$files_prevent_duplicate as \$key => \$value): ?>
\t\tfiles_prevent_duplicate[<?php echo \$key;?>] = '<?php echo \$value;?>';
\t<?php endforeach;?>
</script>

\t<!-- lightbox div start -->
\t<div id=\"previewLightbox\" class=\"lightbox hide fade\"  tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t<div class='lightbox-content'>
\t\t\t<img id=\"full-img\" src=\"\">
\t\t</div>
\t</div>
\t<!-- lightbox div end -->

\t<!-- loading div start -->
\t<div id=\"loading_container\" style=\"display:none;\">
\t\t<div id=\"loading\" style=\"background-color:#000; position:fixed; width:100%; height:100%; top:0px; left:0px;z-index:100000\"></div>
\t\t<img id=\"loading_animation\" src=\"img/storing_animation.gif\" alt=\"loading\" style=\"z-index:10001; margin-left:-32px; margin-top:-32px; position:fixed; left:50%; top:50%\"/>
\t</div>
\t<!-- loading div end -->

\t<!-- player div start -->
\t<div class=\"modal hide fade\" id=\"previewAV\">
\t<div class=\"modal-header\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t<h3><?php echo trans('Preview');?></h3>
\t</div>
\t<div class=\"modal-body\">
\t\t<div class=\"row-fluid body-preview\">
\t\t\t\t</div>
\t</div>

\t</div>
\t<!-- player div end -->
\t<img id='aviary_img' src='' class=\"hide\"/>

\t<?php if (\$lazy_loading_enabled) { ?>
\t\t<script>
\t\t\t\$(function(){
\t\t\t\t\$(\".lazy-loaded\").lazyload({
\t\t\t\t\t\tevent: 'scrollstop'
\t\t\t\t\t});
\t\t\t});
\t\t</script>
\t<?php } ?>
\t<script>
\t\tvar ua = navigator.userAgent.toLowerCase();
\t\tvar isAndroid = ua.indexOf(\"android\") > -1; //&& ua.indexOf(\"mobile\");
\t\tif(isAndroid) {
\t\t\t\$('li').draggable({ disabled: true });
\t\t}
\t</script>
</body>
</html>
<?php }
?>";
        
        $__internal_b7fbdf9ab6515cffeaf3459e8aa6b41f131b53e2ec0dc2b0c7bc70099b59e839->leave($__internal_b7fbdf9ab6515cffeaf3459e8aa6b41f131b53e2ec0dc2b0c7bc70099b59e839_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/dialog.php";
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
\$time = time();
\$config = include 'config/config.php';
//TODO switch to array
extract(\$config, EXTR_OVERWRITE);

if (USE_ACCESS_KEYS == TRUE){
\tif (!isset(\$_GET['akey'], \$access_keys) || empty(\$access_keys)){
\t\tdie('Access Denied!');
\t}

\t\$_GET['akey'] = strip_tags(preg_replace( \"/[^a-zA-Z0-9\\._-]/\", '', \$_GET['akey']));

\tif (!in_array(\$_GET['akey'], \$access_keys)){
\t\tdie('Access Denied!');
\t}
}

\$_SESSION['RF'][\"verify\"] = \"RESPONSIVEfilemanager\";

if(isset(\$_POST['submit'])){
\tinclude 'upload.php';
}else{

\$lang = \$config['default_language'];
\$languages = include 'lang/languages.php';
if (isset(\$_GET['lang']))
{
\t\$lang = strip_tags(\$_GET['lang']);
\tif(array_key_exists(\$lang,\$languages)){
\t\t\$_SESSION['RF']['language'] = \$lang;
\t}
}elseif(\$_SESSION['RF']['language']){
\t\$lang = strip_tags(\$_SESSION['RF']['language']);
\tif(array_key_exists(\$lang,\$languages)){
\t\t\$_SESSION['RF']['language'] = \$lang;
\t}
}

include 'include/utils.php';

if (isset(\$_GET['fldr'])
\t&& !empty(\$_GET['fldr'])
\t&& strpos(\$_GET['fldr'],'../') === FALSE
\t&& strpos(\$_GET['fldr'],'./') === FALSE)
{
\t\$subdir = rawurldecode(trim(strip_tags(\$_GET['fldr']),\"/\") .\"/\");
\t\$_SESSION['RF'][\"filter\"]='';
}
else { \$subdir = ''; }

if(\$subdir == \"\")
{
\tif(!empty(\$_COOKIE['last_position']) && strpos(\$_COOKIE['last_position'],'.') === FALSE){
\t\t\$subdir= trim(\$_COOKIE['last_position']);
\t}
}
//remember last position
setcookie('last_position',\$subdir,time() + (86400 * 7));

if (\$subdir == \"/\") { \$subdir = \"\"; }

// If hidden folders are specified
if(count(\$hidden_folders)){
\t// If hidden folder appears in the path specified in URL parameter \"fldr\"
\t\$dirs = explode('/', \$subdir);
\tforeach(\$dirs as \$dir){
\t\tif(\$dir !== '' && in_array(\$dir, \$hidden_folders)){
\t\t\t// Ignore the path
\t\t\t\$subdir = \"\";
\t\t\tbreak;
\t\t}
\t}
}

if (\$show_total_size) {
\tlist(\$sizeCurrentFolder,\$fileCurrentNum,\$foldersCurrentCount) = folder_info(\$current_path,false);
}
/***
*SUB-DIR CODE
***/

if (!isset(\$_SESSION['RF'][\"subfolder\"]))
{
\t\$_SESSION['RF'][\"subfolder\"] = '';
}
\$rfm_subfolder = '';

if (!empty(\$_SESSION['RF'][\"subfolder\"]) && strpos(\$_SESSION['RF'][\"subfolder\"],'../') === FALSE
&& strpos(\$_SESSION['RF'][\"subfolder\"],'./') === FALSE && strpos(\$_SESSION['RF'][\"subfolder\"],\"/\") !== 0
&& strpos(\$_SESSION['RF'][\"subfolder\"],'.') === FALSE)
{
\t\$rfm_subfolder = \$_SESSION['RF']['subfolder'];
}

if (\$rfm_subfolder != \"\" && \$rfm_subfolder[strlen(\$rfm_subfolder)-1] != \"/\") { \$rfm_subfolder .= \"/\"; }

\$ftp=ftp_con(\$config);

if ((\$ftp && !\$ftp->isDir(\$ftp_base_folder.\$upload_dir.\$rfm_subfolder.\$subdir)) || (!\$ftp && !file_exists(\$current_path.\$rfm_subfolder.\$subdir)))
{
\t\$subdir = '';
\t\$rfm_subfolder = \"\";
}


if (trim(\$rfm_subfolder) == \"\")
{
\t\$cur_dir\t\t\t= \$upload_dir.\$subdir;
\t\$cur_path\t\t\t= \$current_path.\$subdir;
\t\$thumbs_path\t    = \$thumbs_base_path;
\t\$parent\t\t\t\t= \$subdir;
}
else
{
\t\$cur_dir\t\t\t= \$upload_dir.\$rfm_subfolder.\$subdir;
\t\$cur_path\t\t\t= \$current_path.\$rfm_subfolder.\$subdir;
\t\$thumbs_path\t= \$thumbs_base_path.\$rfm_subfolder;
\t\$parent\t\t\t\t= \$rfm_subfolder.\$subdir;
}

if(\$ftp){
\t\$cur_dir = \$ftp_base_folder.\$cur_dir;
\t\$cur_path = str_replace(array('/..','..'),'',\$cur_dir);
\t\$thumbs_path = str_replace(array('/..','..'),'',\$ftp_base_folder.\$ftp_thumbs_dir.\$rfm_subfolder);
\t\$parent = \$ftp_base_folder.\$parent;
}

if(!\$ftp){
\t\$cycle = TRUE;
\t\$max_cycles = 50;
\t\$i = 0;
\twhile(\$cycle && \$i < \$max_cycles){
\t\t\$i++;
\t\tif (\$parent==\"./\") \$parent=\"\";

\t\tif (file_exists(\$current_path.\$parent.\"config.php\"))
\t\t{
\t\t\trequire_once \$current_path.\$parent.\"config.php\";
\t\t\t\$cycle = FALSE;
\t\t}

\t\tif (\$parent == \"\") \$cycle = FALSE;
\t\telse \$parent = fix_dirname(\$parent).\"/\";
\t}

\tif (!is_dir(\$thumbs_path.\$subdir))
\t{
\t\tcreate_folder(FALSE, \$thumbs_path.\$subdir);
\t}
}

if (isset(\$_GET['popup']))
{
\t\$popup = strip_tags(\$_GET['popup']);
} else \$popup=0;
//Sanitize popup
\$popup=!!\$popup;

if (isset(\$_GET['crossdomain']))
{
\t\$crossdomain = strip_tags(\$_GET['crossdomain']);
} else \$crossdomain=0;

//Sanitize crossdomain
\$crossdomain=!!\$crossdomain;

//view type
if(!isset(\$_SESSION['RF'][\"view_type\"]))
{
\t\$view = \$default_view;
\t\$_SESSION['RF'][\"view_type\"] = \$view;
}

if (isset(\$_GET['view']))
{
\t\$view = fix_get_params(\$_GET['view']);
\t\$_SESSION['RF'][\"view_type\"] = \$view;
}

\$view = \$_SESSION['RF'][\"view_type\"];

//filter
\$filter = \"\";
if(isset(\$_SESSION['RF'][\"filter\"]))
{
\t\$filter = \$_SESSION['RF'][\"filter\"];
}

if(isset(\$_GET[\"filter\"]))
{
\t\$filter = fix_get_params(\$_GET[\"filter\"]);
}

if (!isset(\$_SESSION['RF']['sort_by']))
{
\t\$_SESSION['RF']['sort_by'] = 'name';
}

if (isset(\$_GET[\"sort_by\"]))
{
\t\$sort_by = \$_SESSION['RF']['sort_by'] = fix_get_params(\$_GET[\"sort_by\"]);
} else \$sort_by = \$_SESSION['RF']['sort_by'];


if (!isset(\$_SESSION['RF']['descending']))
{
\t\$_SESSION['RF']['descending'] = TRUE;
}

if (isset(\$_GET[\"descending\"]))
{
\t\$descending = \$_SESSION['RF']['descending'] = fix_get_params(\$_GET[\"descending\"])==1;
} else {
\t\$descending = \$_SESSION['RF']['descending'];
}

\$boolarray = Array(false => 'false', true => 'true');

\$return_relative_url = isset(\$_GET['relative_url']) && \$_GET['relative_url'] == \"1\" ? true : false;

if (!isset(\$_GET['type'])) \$_GET['type'] = 0;

if(\$_GET['type']==1 || \$_GET['type']==3){
\t\$filter='';
}

\$extensions=null;
if (isset(\$_GET['extensions'])){
\t\$extensions = json_decode(urldecode(\$_GET['extensions']));
\tif(\$extensions){
\t\t\$ext = \$extensions;
\t\t\$show_filter_buttons = false;
\t}
}

if (isset(\$_GET['editor']))
{
\t\$editor = strip_tags(\$_GET['editor']);
} else {
\tif(\$_GET['type']==0){
\t\t\$editor=false;
\t} else {
\t\t\$editor='tinymce';
\t}
}

if (!isset(\$_GET['field_id'])) \$_GET['field_id'] = '';

\$field_id = isset(\$_GET['field_id']) ? fix_get_params(\$_GET['field_id']) : '';
\$type_param = fix_get_params(\$_GET['type']);

if (\$type_param==1) \t \$apply = 'apply_img';
elseif(\$type_param==2) \$apply = 'apply_link';
elseif(\$type_param==0 && \$_GET['field_id']=='') \$apply = 'apply_none';
elseif(\$type_param==3) \$apply = 'apply_video';
else \$apply = 'apply';

\$get_params = array(
\t'editor'    => \$editor,
\t'type'      => \$type_param,
\t'lang'      => \$lang,
\t'popup'     => \$popup,
\t'crossdomain' => \$crossdomain,
\t'extensions' => (\$extensions) ? urlencode(json_encode(\$extensions)) : null ,
\t'field_id'  => \$field_id,
\t'relative_url' => \$return_relative_url,
\t'akey' \t\t=> (isset(\$_GET['akey']) && \$_GET['akey'] != '' ? \$_GET['akey'] : 'key')
);
if(isset(\$_GET['CKEditorFuncNum'])){
\t\$get_params['CKEditorFuncNum'] = \$_GET['CKEditorFuncNum'];
\t\$get_params['CKEditor'] = (isset(\$_GET['CKEditor'])? \$_GET['CKEditor'] : '');
}
\$get_params['fldr'] ='';

\$get_params = http_build_query(\$get_params);
?>
<!DOCTYPE html>
<html xmlns=\"https://www.w3.org/1999/xhtml\">
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" >
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
\t\t<meta name=\"robots\" content=\"noindex,nofollow\">
\t\t<title>Responsive FileManager</title>
\t\t<link rel=\"shortcut icon\" href=\"img/ico/favicon.ico\">
\t\t<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"js/jPlayer/skin/blue.monday/jplayer.blue.monday.css\" rel=\"stylesheet\" type=\"text/css\">
\t<!--[if lt IE 8]><style>
\t.img-container span, .img-container-mini span {
\t\tdisplay: inline-block;
\t\theight: 100%;
\t}
\t</style><![endif]-->
\t<script src=\"js/plugins.js\"></script>
\t<script src=\"js/jPlayer/jquery.jplayer/jquery.jplayer.js\"></script>
\t<script src=\"js/modernizr.custom.js\"></script>
\t<?php
\tif (\$aviary_active){
\tif (!empty(\$_SERVER['HTTPS']) && \$_SERVER['HTTPS'] !== 'off' || \$_SERVER['SERVER_PORT'] == 443) { ?>
\t\t<script src=\"https://dme0ih8comzn4.cloudfront.net/imaging/v2/editor.js\"></script>
\t<?php }else{ ?>
\t\t<script src=\"http://feather.aviary.com/imaging/v2/editor.js\"></script>
\t<?php }} ?>

\t<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
\t<!--[if lt IE 9]>
\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js\"></script>
\t<![endif]-->

\t<script>
\t\tvar ext_img=new Array('<?php echo implode(\"','\", \$ext_img)?>');
\t\tvar allowed_ext=new Array('<?php echo implode(\"','\", \$ext)?>');
\t\tvar image_editor=<?php echo \$aviary_active?\"true\":\"false\";?>;
\t\t//dropzone config
\t\tDropzone.options.rfmDropzone = {
\t\t\tdictInvalidFileType: \"<?php echo trans('Error_extension');?>\",
\t\t\tdictFileTooBig: \"<?php echo trans('Error_Upload');?>\",
\t\t\tdictDefaultMessage: \"<?php echo trans('Upload_message');?>\",
\t\t\tdictResponseError: \"<?php echo trans('SERVER ERROR');?>\",
\t\t\tparamName: \"file\", // The name that will be used to transfer the file
\t\t\tmaxFilesize: <?php echo \$MaxSizeUpload;?>, // MB
\t\t\turl: \"upload.php\",
\t\t\t<?php if(\$apply!=\"apply_none\"){ ?>
\t\t\tinit: function() {
\t\t\t\tthis.on(\"success\", function(file,res) {
\t\t\t\t\tfile.previewElement.addEventListener(\"click\", function() {
\t\t\t\t\t\t<?php echo \$apply;?>(res,'<?php echo \$field_id;?>');
\t\t\t\t\t});
\t\t\t\t});
\t\t\t},
\t\t\t<?php } ?>
\t\t\taccept: function(file, done) {
\t\t\t\tvar extension=file.name.split('.').pop();
\t\t\t\textension=extension.toLowerCase();
\t\t\t\tif (\$.inArray(extension, allowed_ext) > -1) {
\t\t\t\t\tdone();
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\tdone(\"<?php echo trans('Error_extension');?>\");
\t\t\t\t}
\t\t\t}
\t\t};
\t\tif (image_editor) {
\t\t\tvar featherEditor = new Aviary.Feather({
\t\t\t<?php
\t\t\t\tforeach (\$aviary_defaults_config as \$aopt_key => \$aopt_val) {
\t\t\t\t\techo \$aopt_key.\": \".json_encode(\$aopt_val).\",\";
\t\t\t\t}
\t\t\t?>
\t\t\tonReady: function() {
\t\t\t\thide_animation();
\t\t\t},
\t\t\tonSave: function(imageID, newURL) {
\t\t\t\tshow_animation();
\t\t\t\tvar img = document.getElementById(imageID);
\t\t\t\timg.src = newURL;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"ajax_calls.php?action=save_img\",
\t\t\t\t\tdata: { url: newURL, path:\$('#sub_folder').val()+\$('#fldr_value').val(), name:\$('#aviary_img').attr('data-name') }
\t\t\t\t}).done(function( msg ) {
\t\t\t\t\tfeatherEditor.close();
\t\t\t\t\td = new Date();
\t\t\t\t\t\$(\"figure[data-name='\"+\$('#aviary_img').attr('data-name')+\"']\").find('img').each(function(){
\t\t\t\t\t\$(this).attr('src',\$(this).attr('src')+\"?\"+d.getTime());
\t\t\t\t\t});
\t\t\t\t\t\$(\"figure[data-name='\"+\$('#aviary_img').attr('data-name')+\"']\").find('figcaption a.preview').each(function(){
\t\t\t\t\t\$(this).attr('data-url',\$(this).data('url')+\"?\"+d.getTime());
\t\t\t\t\t});
\t\t\t\t\thide_animation();
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t},
\t\t\tonError: function(errorObj) {
\t\t\t\t\tbootbox.alert(errorObj.message);
\t\t\t\t\thide_animation();
\t\t\t}

\t\t\t});
\t\t}
\t</script>
\t<script src=\"js/include.js\"></script>
</head>
<body>
\t<input type=\"hidden\" id=\"ftp\" value=\"<?php echo !!\$ftp; ?>\" />
\t<input type=\"hidden\" id=\"popup\" value=\"<?php echo \$popup;?>\" />
\t<input type=\"hidden\" id=\"crossdomain\" value=\"<?php echo \$crossdomain;?>\" />
\t<input type=\"hidden\" id=\"editor\" value=\"<?php echo \$editor;?>\" />
\t<input type=\"hidden\" id=\"view\" value=\"<?php echo \$view;?>\" />
\t<input type=\"hidden\" id=\"subdir\" value=\"<?php echo \$subdir;?>\" />
\t<input type=\"hidden\" id=\"field_id\" value=\"<?php echo \$field_id;?>\" />
\t<input type=\"hidden\" id=\"type_param\" value=\"<?php echo \$type_param;?>\" />
\t<input type=\"hidden\" id=\"upload_dir\" value=\"<?php echo \$upload_dir;?>\" />
\t<input type=\"hidden\" id=\"cur_dir\" value=\"<?php echo \$cur_dir;?>\" />
\t<input type=\"hidden\" id=\"cur_dir_thumb\" value=\"<?php echo \$thumbs_path.\$subdir;?>\" />
\t<input type=\"hidden\" id=\"insert_folder_name\" value=\"<?php echo trans('Insert_Folder_Name');?>\" />
\t<input type=\"hidden\" id=\"new_folder\" value=\"<?php echo trans('New_Folder');?>\" />
\t<input type=\"hidden\" id=\"ok\" value=\"<?php echo trans('OK');?>\" />
\t<input type=\"hidden\" id=\"cancel\" value=\"<?php echo trans('Cancel');?>\" />
\t<input type=\"hidden\" id=\"rename\" value=\"<?php echo trans('Rename');?>\" />
\t<input type=\"hidden\" id=\"lang_duplicate\" value=\"<?php echo trans('Duplicate');?>\" />
\t<input type=\"hidden\" id=\"duplicate\" value=\"<?php if(\$duplicate_files) echo 1; else echo 0;?>\" />
\t<input type=\"hidden\" id=\"base_url\" value=\"<?php echo \$base_url?>\"/>
\t<input type=\"hidden\" id=\"ftp_base_url\" value=\"<?php echo \$ftp_base_url?>\"/>
\t<input type=\"hidden\" id=\"fldr_value\" value=\"<?php echo \$subdir;?>\"/>
\t<input type=\"hidden\" id=\"sub_folder\" value=\"<?php echo \$rfm_subfolder;?>\"/>
\t<input type=\"hidden\" id=\"return_relative_url\" value=\"<?php echo \$return_relative_url == true ? 1 : 0;?>\"/>
\t<input type=\"hidden\" id=\"lazy_loading_file_number_threshold\" value=\"<?php echo \$lazy_loading_file_number_threshold?>\"/>
\t<input type=\"hidden\" id=\"file_number_limit_js\" value=\"<?php echo \$file_number_limit_js;?>\" />
\t<input type=\"hidden\" id=\"sort_by\" value=\"<?php echo \$sort_by;?>\" />
\t<input type=\"hidden\" id=\"descending\" value=\"<?php echo \$descending?1:0;?>\" />
\t<input type=\"hidden\" id=\"current_url\" value=\"<?php echo str_replace(array('&filter='.\$filter,'&sort_by='.\$sort_by,'&descending='.intval(\$descending)),array(''),\$base_url.\$_SERVER['REQUEST_URI']);?>\" />
\t<input type=\"hidden\" id=\"lang_show_url\" value=\"<?php echo trans('Show_url');?>\" />
\t<input type=\"hidden\" id=\"copy_cut_files_allowed\" value=\"<?php if(\$copy_cut_files) echo 1; else echo 0;?>\" />
\t<input type=\"hidden\" id=\"copy_cut_dirs_allowed\" value=\"<?php if(\$copy_cut_dirs) echo 1; else echo 0;?>\" />
\t<input type=\"hidden\" id=\"copy_cut_max_size\" value=\"<?php echo \$copy_cut_max_size;?>\" />
\t<input type=\"hidden\" id=\"copy_cut_max_count\" value=\"<?php echo \$copy_cut_max_count;?>\" />
\t<input type=\"hidden\" id=\"lang_copy\" value=\"<?php echo trans('Copy');?>\" />
\t<input type=\"hidden\" id=\"lang_cut\" value=\"<?php echo trans('Cut');?>\" />
\t<input type=\"hidden\" id=\"lang_paste\" value=\"<?php echo trans('Paste');?>\" />
\t<input type=\"hidden\" id=\"lang_paste_here\" value=\"<?php echo trans('Paste_Here');?>\" />
\t<input type=\"hidden\" id=\"lang_paste_confirm\" value=\"<?php echo trans('Paste_Confirm');?>\" />
\t<input type=\"hidden\" id=\"lang_files\" value=\"<?php echo trans('Files');?>\" />
\t<input type=\"hidden\" id=\"lang_folders\" value=\"<?php echo trans('Folders');?>\" />
\t<input type=\"hidden\" id=\"lang_files_on_clipboard\" value=\"<?php echo trans('Files_ON_Clipboard');?>\" />
\t<input type=\"hidden\" id=\"clipboard\" value=\"<?php echo ((isset(\$_SESSION['RF']['clipboard']['path']) && trim(\$_SESSION['RF']['clipboard']['path']) != null) ? 1 : 0);?>\" />
\t<input type=\"hidden\" id=\"lang_clear_clipboard_confirm\" value=\"<?php echo trans('Clear_Clipboard_Confirm');?>\" />
\t<input type=\"hidden\" id=\"lang_file_permission\" value=\"<?php echo trans('File_Permission');?>\" />
\t<input type=\"hidden\" id=\"chmod_files_allowed\" value=\"<?php if(\$chmod_files) echo 1; else echo 0;?>\" />
\t<input type=\"hidden\" id=\"chmod_dirs_allowed\" value=\"<?php if(\$chmod_dirs) echo 1; else echo 0;?>\" />
\t<input type=\"hidden\" id=\"lang_lang_change\" value=\"<?php echo trans('Lang_Change');?>\" />
\t<input type=\"hidden\" id=\"edit_text_files_allowed\" value=\"<?php if(\$edit_text_files) echo 1; else echo 0;?>\" />
\t<input type=\"hidden\" id=\"lang_edit_file\" value=\"<?php echo trans('Edit_File');?>\" />
\t<input type=\"hidden\" id=\"lang_new_file\" value=\"<?php echo trans('New_File');?>\" />
\t<input type=\"hidden\" id=\"lang_filename\" value=\"<?php echo trans('Filename');?>\" />
\t<input type=\"hidden\" id=\"lang_file_info\" value=\"<?php echo fix_strtoupper(trans('File_info'));?>\" />
\t<input type=\"hidden\" id=\"lang_edit_image\" value=\"<?php echo trans('Edit_image');?>\" />
\t<input type=\"hidden\" id=\"lang_error_upload\" value=\"<?php echo trans('Error_Upload');?>\" />
\t<input type=\"hidden\" id=\"lang_select\" value=\"<?php echo trans('Select');?>\" />
\t<input type=\"hidden\" id=\"lang_extract\" value=\"<?php echo trans('Extract');?>\" />
\t<input type=\"hidden\" id=\"transliteration\" value=\"<?php echo \$transliteration?\"true\":\"false\";?>\" />
\t<input type=\"hidden\" id=\"convert_spaces\" value=\"<?php echo \$convert_spaces?\"true\":\"false\";?>\" />
\t<input type=\"hidden\" id=\"replace_with\" value=\"<?php echo \$convert_spaces? \$replace_with : \"\";?>\" />
\t<input type=\"hidden\" id=\"lower_case\" value=\"<?php echo \$lower_case?\"true\":\"false\";?>\" />
\t<input type=\"hidden\" id=\"show_folder_size\" value=\"<?php echo \$show_folder_size;?>\" />
\t<input type=\"hidden\" id=\"add_time_to_img\" value=\"<?php echo \$add_time_to_img;?>\" />
<?php if(\$upload_files){ ?>
<!-- uploader div start -->
<div class=\"uploader\">
\t<div class=\"text-center\">
\t\t<button class=\"btn btn-inverse close-uploader\"><i class=\"icon-backward icon-white\"></i> <?php echo trans('Return_Files_List')?></button>
\t</div>
\t<div class=\"space10\"></div>
\t<div class=\"space10\"></div>
\t<div class=\"tabbable upload-tabbable\"> <!-- Only required for left/right tabs -->
\t\t<ul class=\"nav nav-tabs\">
\t\t\t<li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\"><?php echo trans('Upload_base');?></a></li>
\t\t\t<li><a href=\"#taburl\" data-toggle=\"tab\"><?php echo trans('Upload_url');?></a></li>
\t\t\t<?php if(\$java_upload){ ?>
\t\t\t<li><a href=\"#tab2\" id=\"uploader-btn\" data-toggle=\"tab\"><?php echo trans('Upload_java');?></a></li>
\t\t\t<?php } ?>
\t\t</ul>
\t\t<div class=\"tab-content\">
\t\t\t<div class=\"tab-pane active\" id=\"tab1\">
\t\t\t\t<form action=\"dialog.php\" method=\"post\" enctype=\"multipart/form-data\" id=\"rfmDropzone\" class=\"dropzone\">
\t\t\t\t\t<input type=\"hidden\" name=\"path\" id=\"cur_path\" value=\"<?php echo \$cur_path?>\"/>
\t\t\t\t\t<input type=\"hidden\" name=\"path_thumb\" value=\"<?php echo \$thumbs_path.\$subdir?>\"/>
\t\t\t\t\t<div class=\"fallback\">
\t\t\t\t\t\t<h3><?php echo  trans('Upload_file')?>:</h3><br/>
\t\t\t\t\t\t<input name=\"file\" type=\"file\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"fldr\" value=\"<?php echo \$subdir;?>\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"view\" value=\"<?php echo \$view;?>\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"type\" value=\"<?php echo \$type_param;?>\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"field_id\" value=\"<?php echo \$field_id;?>\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"relative_url\" value=\"<?php echo \$return_relative_url;?>\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"popup\" value=\"<?php echo \$popup;?>\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"lang\" value=\"<?php echo \$lang;?>\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"filter\" value=\"<?php echo \$filter;?>\"/>
\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"<?php echo trans('OK')?>\" />
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"upload-help\"><?php echo trans('Upload_base_help');?></div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"taburl\">
\t\t\t\t<br/>
\t\t\t\t<form class=\"form-horizontal\">
\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"url\"><?php echo trans('Upload_url');?></label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"input-block-level\" id=\"url\" placeholder=\"<?php echo trans('Upload_url');?>\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\" id=\"uploadURL\"><?php echo  trans('Upload_file');?></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<?php if(\$java_upload){ ?>
\t\t\t<div class=\"tab-pane\" id=\"tab2\">
\t\t\t\t<div id=\"iframe-container\"></div>
\t\t\t\t<div class=\"upload-help\"><?php echo trans('Upload_java_help');?></div>
\t\t\t</div>
\t\t\t<?php } ?>
\t\t</div>
\t</div>

</div>
<!-- uploader div start -->

<?php } ?>
\t\t<div class=\"container-fluid\">

<?php
\$class_ext = '';
\$src = '';
if(\$ftp){
\ttry{
\t\t\$files = \$ftp->scanDir(\"/\".\$ftp_base_folder.\$upload_dir.\$rfm_subfolder.\$subdir);
\t\tif (!\$ftp->isDir(\"/\".\$ftp_base_folder.\$ftp_thumbs_dir.\$rfm_subfolder.\$subdir)){
\t\t\tcreate_folder(false,\"/\".\$ftp_base_folder.\$ftp_thumbs_dir.\$rfm_subfolder.\$subdir,\$ftp,\$config);
\t\t}
\t}catch(FtpClient\\FtpException \$e){
\t\techo \"Error: \";
\t\techo \$e->getMessage();
\t\techo \"<br/>Please check configurations\";
\t\tdie();
\t}
}else{
\t\$files\t= scandir(\$current_path.\$rfm_subfolder.\$subdir);
}

\$n_files= count(\$files);

//php sorting
\$sorted=array();
//\$current_folder=array();
//\$prev_folder=array();
\$current_files_number = 0;
\$current_folders_number = 0;

foreach(\$files as \$k=>\$file){
\tif(\$ftp){
\t\t\$date = strtotime(\$file['day'].\" \".\$file['month'].\" \".date('Y').\" \".\$file['time']);
\t\t\$size = \$file['size'];
\t\tif(\$file['type']=='file'){
\t\t\t\$current_files_number++;
\t\t\t\$file_ext = substr(strrchr(\$file['name'],'.'),1);
\t\t}else{
\t\t\t\$current_folders_number++;
\t\t\t\$file_ext=trans('Type_dir');
\t\t}
\t\t\$sorted[\$k]=array(
\t\t\t'file'=>\$file['name'],
\t\t\t'file_lcase'=>strtolower(\$file['name']),
\t\t\t'date'=>\$date,
\t\t\t'size'=>\$size,
\t\t\t'permissions' => \$file['permissions'],
\t\t\t'extension'=>strtolower(\$file_ext)
\t\t);
\t}else{


\t\tif(\$file!=\".\" && \$file!=\"..\"){
\t\t\tif(is_dir(\$current_path.\$rfm_subfolder.\$subdir.\$file)){
\t\t\t\t\$date=filemtime(\$current_path.\$rfm_subfolder.\$subdir. \$file);
\t\t\t\t\$current_folders_number++;
\t\t\t\tif(\$show_folder_size){
\t\t\t\t\tlist(\$size,\$nfiles,\$nfolders) = folder_info(\$current_path.\$rfm_subfolder.\$subdir.\$file,false);
\t\t\t\t} else {
\t\t\t\t\t\$size=0;
\t\t\t\t}
\t\t\t\t\$file_ext=trans('Type_dir');
\t\t\t\t\$sorted[\$k]=array(
\t\t\t\t\t'file'=>\$file,
\t\t\t\t\t'file_lcase'=>strtolower(\$file),
\t\t\t\t\t'date'=>\$date,
\t\t\t\t\t'size'=>\$size,
\t\t\t\t\t'permissions' =>'',
\t\t\t\t\t'extension'=>strtolower(\$file_ext)
\t\t\t\t);
\t\t\t\tif(\$show_folder_size){
\t\t\t\t\t\$sorted[\$k]['nfiles'] = \$nfiles;
\t\t\t\t\t\$sorted[\$k]['nfolders'] = \$nfolders;
\t\t\t\t}
\t\t\t}else{
\t\t\t\t\$current_files_number++;
\t\t\t\t\$file_path=\$current_path.\$rfm_subfolder.\$subdir.\$file;
\t\t\t\t\$date=filemtime(\$file_path);
\t\t\t\t\$size=filesize(\$file_path);
\t\t\t\t\$file_ext = substr(strrchr(\$file,'.'),1);
\t\t\t\t\$sorted[\$k]=array(
\t\t\t\t\t'file'=>\$file,
\t\t\t\t\t'file_lcase'=>strtolower(\$file),
\t\t\t\t\t'date'=>\$date,
\t\t\t\t\t'size'=>\$size,
\t\t\t\t\t'permissions' =>'',
\t\t\t\t\t'extension'=>strtolower(\$file_ext)
\t\t\t\t);
\t\t\t}
\t\t}
\t}
}


// Should lazy loading be enabled
\$lazy_loading_enabled= (\$lazy_loading_file_number_threshold == 0 || \$lazy_loading_file_number_threshold != -1 && \$n_files > \$lazy_loading_file_number_threshold) ? true : false;

function filenameSort(\$x, \$y) {
\treturn \$x['file_lcase'] <  \$y['file_lcase'];
}
function dateSort(\$x, \$y) {
\treturn \$x['date'] <  \$y['date'];
}
function sizeSort(\$x, \$y) {
\treturn \$x['size'] <  \$y['size'];
}
function extensionSort(\$x, \$y) {
\treturn \$x['extension'] <  \$y['extension'];
}

switch(\$sort_by){
\tcase 'date':
\t\tusort(\$sorted, 'dateSort');
\t\tbreak;
\tcase 'size':
\t\tusort(\$sorted, 'sizeSort');
\t\tbreak;
\tcase 'extension':
\t\tusort(\$sorted, 'extensionSort');
\t\tbreak;
\tdefault:
\t\tusort(\$sorted, 'filenameSort');
\t\tbreak;
}

if(!\$descending){
\t\$sorted=array_reverse(\$sorted);
}

if(\$subdir!=\"\"){
\t\$sorted = array_merge(array(array('file'=>'..')),\$sorted);
}
\$files=\$sorted;

?>
<!-- header div start -->
<div class=\"navbar navbar-fixed-top\">
\t<div class=\"navbar-inner\">
\t\t<div class=\"container-fluid\">
\t\t<button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t<span class=\"icon-bar\"></span>
\t\t<span class=\"icon-bar\"></span>
\t\t<span class=\"icon-bar\"></span>
\t\t</button>
\t\t<div class=\"brand\"><?php echo trans('Toolbar');?></div>
\t\t<div class=\"nav-collapse collapse\">
\t\t<div class=\"filters\">
\t\t\t<div class=\"row-fluid\">
\t\t\t<div class=\"span4 half\">
\t\t\t\t<?php if(\$upload_files){ ?>
\t\t\t\t<button class=\"tip btn upload-btn\" title=\"<?php echo  trans('Upload_file');?>\"><i class=\"rficon-upload\"></i></button>
\t\t\t\t<?php } ?>
\t\t\t\t<?php if(\$create_text_files){ ?>
\t\t\t\t<button class=\"tip btn create-file-btn\" title=\"<?php echo  trans('New_File');?>\"><i class=\"icon-plus\"></i><i class=\"icon-file\"></i></button>
\t\t\t\t<?php } ?>
\t\t\t\t<?php if(\$create_folders){ ?>
\t\t\t\t<button class=\"tip btn new-folder\" title=\"<?php echo  trans('New_Folder')?>\"><i class=\"icon-plus\"></i><i class=\"icon-folder-open\"></i></button>
\t\t\t\t<?php } ?>
\t\t\t\t<?php if(\$copy_cut_files || \$copy_cut_dirs){ ?>
\t\t\t\t<button class=\"tip btn paste-here-btn\" title=\"<?php echo trans('Paste_Here');?>\"><i class=\"rficon-clipboard-apply\"></i></button>
\t\t\t\t<button class=\"tip btn clear-clipboard-btn\" title=\"<?php echo trans('Clear_Clipboard');?>\"><i class=\"rficon-clipboard-clear\"></i></button>
\t\t\t\t<?php } ?>
\t\t\t</div>
\t\t\t<div class=\"span2 half view-controller\">
\t\t\t\t<button class=\"btn tip<?php if(\$view==0) echo \" btn-inverse\";?>\" id=\"view0\" data-value=\"0\" title=\"<?php echo trans('View_boxes');?>\"><i class=\"icon-th <?php if(\$view==0) echo \"icon-white\";?>\"></i></button>
\t\t\t\t<button class=\"btn tip<?php if(\$view==1) echo \" btn-inverse\";?>\" id=\"view1\" data-value=\"1\" title=\"<?php echo trans('View_list');?>\"><i class=\"icon-align-justify <?php if(\$view==1) echo \"icon-white\";?>\"></i></button>
\t\t\t\t<button class=\"btn tip<?php if(\$view==2) echo \" btn-inverse\";?>\" id=\"view2\" data-value=\"2\" title=\"<?php echo trans('View_columns_list');?>\"><i class=\"icon-fire <?php if(\$view==2) echo \"icon-white\";?>\"></i></button>
\t\t\t</div>
\t\t\t<div class=\"span6 entire types\">
\t\t\t\t<span><?php echo trans('Filters');?>:</span>
\t\t\t\t<?php if(\$_GET['type']!=1 && \$_GET['type']!=3 && \$show_filter_buttons){ ?>
\t\t\t\t\t<?php if(count(\$ext_file)>0 or false){ ?>
\t\t\t\t<input id=\"select-type-1\" name=\"radio-sort\" type=\"radio\" data-item=\"ff-item-type-1\" checked=\"checked\"  class=\"hide\"  />
\t\t\t\t<label id=\"ff-item-type-1\" title=\"<?php echo trans('Files');?>\" for=\"select-type-1\" class=\"tip btn ff-label-type-1\"><i class=\"icon-file\"></i></label>
\t\t\t\t\t<?php } ?>
\t\t\t\t\t<?php if(count(\$ext_img)>0 or false){ ?>
\t\t\t\t<input id=\"select-type-2\" name=\"radio-sort\" type=\"radio\" data-item=\"ff-item-type-2\" class=\"hide\"  />
\t\t\t\t<label id=\"ff-item-type-2\" title=\"<?php echo trans('Images');?>\" for=\"select-type-2\" class=\"tip btn ff-label-type-2\"><i class=\"icon-picture\"></i></label>
\t\t\t\t\t<?php } ?>
\t\t\t\t\t<?php if(count(\$ext_misc)>0 or false){ ?>
\t\t\t\t<input id=\"select-type-3\" name=\"radio-sort\" type=\"radio\" data-item=\"ff-item-type-3\" class=\"hide\"  />
\t\t\t\t<label id=\"ff-item-type-3\" title=\"<?php echo trans('Archives');?>\" for=\"select-type-3\" class=\"tip btn ff-label-type-3\"><i class=\"icon-inbox\"></i></label>
\t\t\t\t\t<?php } ?>
\t\t\t\t\t<?php if(count(\$ext_video)>0 or false){ ?>
\t\t\t\t<input id=\"select-type-4\" name=\"radio-sort\" type=\"radio\" data-item=\"ff-item-type-4\" class=\"hide\"  />
\t\t\t\t<label id=\"ff-item-type-4\" title=\"<?php echo trans('Videos');?>\" for=\"select-type-4\" class=\"tip btn ff-label-type-4\"><i class=\"icon-film\"></i></label>
\t\t\t\t\t<?php } ?>
\t\t\t\t\t<?php if(count(\$ext_music)>0 or false){ ?>
\t\t\t\t<input id=\"select-type-5\" name=\"radio-sort\" type=\"radio\" data-item=\"ff-item-type-5\" class=\"hide\"  />
\t\t\t\t<label id=\"ff-item-type-5\" title=\"<?php echo trans('Music');?>\" for=\"select-type-5\" class=\"tip btn ff-label-type-5\"><i class=\"icon-music\"></i></label>
\t\t\t\t\t<?php } ?>
\t\t\t\t<?php } ?>
\t\t\t\t<input accesskey=\"f\" type=\"text\" class=\"filter-input <?php echo ((\$_GET['type']!=1 && \$_GET['type']!=3) ? '' : 'filter-input-notype');?>\" id=\"filter-input\" name=\"filter\" placeholder=\"<?php echo fix_strtolower(trans('Text_filter'));?>...\" value=\"<?php echo \$filter;?>\"/><?php if(\$n_files>\$file_number_limit_js){ ?><label id=\"filter\" class=\"btn\"><i class=\"icon-play\"></i></label><?php } ?>

\t\t\t\t<input id=\"select-type-all\" name=\"radio-sort\" type=\"radio\" data-item=\"ff-item-type-all\" class=\"hide\"  />
\t\t\t\t<label id=\"ff-item-type-all\" title=\"<?php echo trans('All');?>\" <?php if(\$_GET['type']==1 || \$_GET['type']==3){ ?>style=\"visibility: hidden;\" <?php } ?> data-item=\"ff-item-type-all\" for=\"select-type-all\" style=\"margin-rigth:0px;\" class=\"tip btn btn-inverse ff-label-type-all\"><i class=\"icon-remove icon-white\"></i></label>

\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t</div>
\t</div>
</div>

<!-- header div end -->

\t<!-- breadcrumb div start -->

\t<div class=\"row-fluid\">
\t<?php
\t\$link=\"dialog.php?\".\$get_params;
\t?>
\t<ul class=\"breadcrumb\">
\t<li class=\"pull-left\"><a href=\"<?php echo \$link?>/\"><i class=\"icon-home\"></i></a></li>
\t<li><span class=\"divider\">/</span></li>
\t<?php
\t\$bc=explode(\"/\",\$subdir);
\t\$tmp_path='';
\tif(!empty(\$bc))
\tforeach(\$bc as \$k=>\$b){
\t\t\$tmp_path.=\$b.\"/\";
\t\tif(\$k==count(\$bc)-2){
\t?> <li class=\"active\"><?php echo \$b?></li><?php
\t\t}elseif(\$b!=\"\"){ ?>
\t\t<li><a href=\"<?php echo \$link.\$tmp_path?>\"><?php echo \$b?></a></li><li><span class=\"divider\"><?php echo \"/\";?></span></li>
\t<?php }
\t}
\t?>

\t<li class=\"pull-right\"><a class=\"btn-small\" href=\"javascript:void('')\" id=\"info\"><i class=\"icon-question-sign\"></i></a></li>
\t<?php if(\$show_language_selection){ ?>
\t<li class=\"pull-right\"><a class=\"btn-small\" href=\"javascript:void('')\" id=\"change_lang_btn\"><i class=\"icon-globe\"></i></a></li>
\t<?php } ?>
\t<li class=\"pull-right\"><a id=\"refresh\" class=\"btn-small\" href=\"dialog.php?<?php echo \$get_params.\$subdir.\"sorter sort-name\";?> <?php if(\$sort_by==\"name\"){ echo (\$descending)?\"descending\":\"ascending\"; } ?>\" href=\"javascript:void('')\" data-sort=\"name\"><?php echo trans('Filename');?></a></li>
\t\t<li><a class=\"sorter sort-date <?php if(\$sort_by==\"date\"){ echo (\$descending)?\"descending\":\"ascending\"; } ?>\" href=\"javascript:void('')\" data-sort=\"date\"><?php echo trans('Date');?></a></li>
\t\t<li><a class=\"sorter sort-size <?php if(\$sort_by==\"size\"){ echo (\$descending)?\"descending\":\"ascending\"; } ?>\" href=\"javascript:void('')\" data-sort=\"size\"><?php echo trans('Size');?></a></li>
\t\t<li><a class=\"sorter sort-extension <?php if(\$sort_by==\"extension\"){ echo (\$descending)?\"descending\":\"ascending\"; } ?>\" href=\"javascript:void('')\" data-sort=\"extension\"><?php echo trans('Type');?></a></li>
\t\t</ul>
\t\t</div>
\t</li>
\t<li><small class=\"hidden-phone\">(<span id=\"files_number\"><?php echo \$current_files_number.\"</span> \".trans('Files').\" - <span id='folders_number'>\".\$current_folders_number.\"</span> \".trans('Folders');?>)</small></li>
\t<?php if(\$show_total_size){ ?>
\t<li><small class=\"hidden-phone\"><span title=\"<?php echo trans('total size').\$MaxSizeTotal;?>\"><?php echo trans('total size').\": \".makeSize(\$sizeCurrentFolder).((\$MaxSizeTotal !== false && is_int(\$MaxSizeTotal))? '/'.\$MaxSizeTotal.' '.trans('MB'):'');?></span></small>
\t</li>
\t<?php } ?>
\t</ul>
\t</div>
\t<!-- breadcrumb div end -->
\t<div class=\"row-fluid ff-container\">
\t<div class=\"span12\">
\t\t<?php if( (\$ftp && !\$ftp->isDir(\$ftp_base_folder.\$upload_dir.\$rfm_subfolder.\$subdir))  || (!\$ftp && @opendir(\$current_path.\$rfm_subfolder.\$subdir)===FALSE)){ ?>
\t\t<br/>
\t\t<div class=\"alert alert-error\">There is an error! The upload folder there isn't. Check your config.php file. </div>
\t\t<?php }else{ ?>
\t\t<h4 id=\"help\"><?php echo trans('Swipe_help');?></h4>
\t\t<?php if(isset(\$folder_message)){ ?>
\t\t<div class=\"alert alert-block\"><?php echo \$folder_message;?></div>
\t\t<?php } ?>
\t\t<?php if(\$show_sorting_bar){ ?>
\t\t<!-- sorter -->
\t\t<div class=\"sorter-container <?php echo \"list-view\".\$view;?>\">
\t\t<div class=\"file-name\"><a class=\"sorter sort-name <?php if(\$sort_by==\"name\"){ echo (\$descending)?\"descending\":\"ascending\"; } ?>\" href=\"javascript:void('')\" data-sort=\"name\"><?php echo trans('Filename');?></a></div>
\t\t<div class=\"file-date\"><a class=\"sorter sort-date <?php if(\$sort_by==\"date\"){ echo (\$descending)?\"descending\":\"ascending\"; } ?>\" href=\"javascript:void('')\" data-sort=\"date\"><?php echo trans('Date');?></a></div>
\t\t<div class=\"file-size\"><a class=\"sorter sort-size <?php if(\$sort_by==\"size\"){ echo (\$descending)?\"descending\":\"ascending\"; } ?>\" href=\"javascript:void('')\" data-sort=\"size\"><?php echo trans('Size');?></a></div>
\t\t<div class='img-dimension'><?php echo trans('Dimension');?></div>
\t\t<div class='file-extension'><a class=\"sorter sort-extension <?php if(\$sort_by==\"extension\"){ echo (\$descending)?\"descending\":\"ascending\"; } ?>\" href=\"javascript:void('')\" data-sort=\"extension\"><?php echo trans('Type');?></a></div>
\t\t<div class='file-operations'><?php echo trans('Operations');?></div>
\t\t</div>
\t\t<?php } ?>

\t\t<input type=\"hidden\" id=\"file_number\" value=\"<?php echo \$n_files;?>\" />
\t\t<!--ul class=\"thumbnails ff-items\"-->
\t\t<ul class=\"grid cs-style-2 <?php echo \"list-view\".\$view;?>\" id=\"main-item-container\">
\t\t<?php
\t\t\$jplayer_ext=array(\"mp4\",\"flv\",\"webmv\",\"webma\",\"webm\",\"m4a\",\"m4v\",\"ogv\",\"oga\",\"mp3\",\"midi\",\"mid\",\"ogg\",\"wav\");


\t\tforeach (\$files as \$file_array) {
\t\t\t\$file=\$file_array['file'];
\t\t\tif(\$file == '.' || ( substr(\$file, 0, 1) == '.' && isset( \$file_array[ 'extension' ] ) && \$file_array[ 'extension' ] == strtolower(trans( 'Type_dir' ) )) || (isset(\$file_array['extension']) && \$file_array['extension']!=strtolower(trans('Type_dir'))) || (\$file == '..' && \$subdir == '') || in_array(\$file, \$hidden_folders) || (\$filter!='' && \$n_files>\$file_number_limit_js && \$file!=\"..\" && stripos(\$file,\$filter)===false)){
\t\t\t\tcontinue;
\t\t\t}
\t\t\t\$new_name=fix_filename(\$file,\$config);
\t\t\tif(\$ftp && \$file!='..' && \$file!=\$new_name){
\t\t\t\t//rename
\t\t\t\trename_folder(\$current_path.\$subdir.\$file,\$new_name,\$ftp,\$config);
\t\t\t\t\$file=\$new_name;
\t\t\t}
\t\t\t//add in thumbs folder if not exist
\t\t\tif(\$file!='..'){
\t\t\t\tif(!\$ftp && !file_exists(\$thumbs_path.\$subdir.\$file)){
\t\t\t\t\tcreate_folder(false,\$thumbs_path.\$subdir.\$file,\$ftp,\$config);
\t\t\t\t}
\t\t\t}

\t\t\t\$class_ext = 3;
\t\t\tif(\$file=='..' && trim(\$subdir) != '' ){
\t\t\t\$src = explode(\"/\",\$subdir);
\t\t\tunset(\$src[count(\$src)-2]);
\t\t\t\$src=implode(\"/\",\$src);
\t\t\tif(\$src=='') \$src=\"/\";
\t\t\t\t}
\t\t\t\telseif (\$file!='..') {
\t\t\t\t\t\$src = \$subdir . \$file.\"/\";
\t\t\t\t}

\t\t\t?>
\t\t\t\t<li data-name=\"<?php echo \$file ?>\" class=\"<?php if(\$file=='..') echo 'back'; else echo 'dir';?>\" <?php if((\$filter!='' && stripos(\$file,\$filter)===false)) echo ' style=\"display:none;\"';?>><?php
\t\t\t\t\$file_prevent_rename = false;
\t\t\t\t\$file_prevent_delete = false;
\t\t\t\tif (isset(\$filePermissions[\$file])) {
\t\t\t\t\$file_prevent_rename = isset(\$filePermissions[\$file]['prevent_rename']) && \$filePermissions[\$file]['prevent_rename'];
\t\t\t\t\$file_prevent_delete = isset(\$filePermissions[\$file]['prevent_delete']) && \$filePermissions[\$file]['prevent_delete'];
\t\t\t\t}
\t\t\t\t?><figure data-name=\"<?php echo \$file ?>\" class=\"<?php if(\$file==\"..\") echo \"back-\";?>directory\" data-type=\"<?php if(\$file!=\"..\"){ echo \"dir\"; } ?>\">
\t\t\t\t<?php if(\$file==\"..\"){ ?>
\t\t\t\t\t<input type=\"hidden\" class=\"path\" value=\"<?php echo str_replace('.','',dirname(\$rfm_subfolder.\$subdir));?>\"/>
\t\t\t\t\t<input type=\"hidden\" class=\"path_thumb\" value=\"<?php echo dirname(\$thumbs_path.\$subdir).\"/\";?>\"/>
\t\t\t\t<?php } ?>
\t\t\t\t<a class=\"folder-link\" href=\"dialog.php?<?php echo \$get_params.rawurlencode(\$src); ?>\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"img-precontainer-mini directory\">
\t\t\t\t\t\t\t<div class=\"img-container-mini\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<img class=\"directory-img\"  src=\"img/<?php echo \$icon_theme;?>/folder<?php if(\$file==\"..\"){ echo \"_back\"; }?>.png\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t<?php if(\$file==\"..\"){ ?>
\t\t\t\t\t<div class=\"box no-effect\">
\t\t\t\t\t<h4><?php echo trans('Back') ?></h4>
\t\t\t\t\t</div>
\t\t\t\t\t</a>

\t\t\t<?php }else{ ?>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t<h4 class=\"<?php if(\$ellipsis_title_after_first_row){ echo \"ellipsis\"; } ?>\"><a class=\"folder-link\" data-file=\"<?php echo \$file ?>\" href=\"dialog.php?<?php echo \$get_params.rawurlencode(\$src).\"&\".uniqid() ?>\"><?php echo \$file;?></a></h4>
\t\t\t\t\t<input type=\"hidden\" class=\"date\" value=\"<?php echo \$file_array['date'];?>\"/>
\t\t\t\t\t<input type=\"hidden\" class=\"size\" value=\"<?php echo \$file_array['size'];?>\"/>
\t\t\t\t\t<input type=\"hidden\" class=\"extension\" value=\"<?php echo trans('Type_dir');?>\"/>
\t\t\t\t\t<div class=\"file-date\"><?php echo date(trans('Date_type'),\$file_array['date']);?></div>
\t\t\t\t\t<?php if(\$show_folder_size){ ?>
\t\t\t\t\t\t<div class=\"file-size\"><?php echo makeSize(\$file_array['size']);?></div>
\t\t\t\t\t\t<input type=\"hidden\" class=\"nfiles\" value=\"<?php echo \$file_array['nfiles'];?>\"/>
\t\t\t\t\t\t<input type=\"hidden\" class=\"nfolders\" value=\"<?php echo \$file_array['nfolders'];?>\"/>
\t\t\t\t\t<?php } ?>
\t\t\t\t\t<div class='file-extension'><?php echo trans('Type_dir');?></div>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<a href=\"javascript:void('')\" class=\"tip-left edit-button rename-file-paths <?php if(\$rename_folders && !\$file_prevent_rename) echo \"rename-folder\";?>\" title=\"<?php echo trans('Rename')?>\" data-folder=\"1\" data-permissions=\"<?php echo \$file_array['permissions']; ?>\" data-path=\"<?php echo \$rfm_subfolder.\$subdir.\$file;?>\">
\t\t\t\t\t\t<i class=\"icon-pencil <?php if(!\$rename_folders || \$file_prevent_rename) echo 'icon-white';?>\"></i></a>
\t\t\t\t\t\t<a href=\"javascript:void('')\" class=\"tip-left erase-button <?php if(\$delete_folders && !\$file_prevent_delete) echo \"delete-folder\";?>\" title=\"<?php echo trans('Erase')?>\" data-confirm=\"<?php echo trans('Confirm_Folder_del');?>\" data-path=\"<?php echo \$rfm_subfolder.\$subdir.\$file;?>\" >
\t\t\t\t\t\t<i class=\"icon-trash <?php if(!\$delete_folders || \$file_prevent_delete) echo 'icon-white';?>\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</figcaption>
\t\t\t<?php } ?>
\t\t\t\t</figure>
\t\t\t</li>
\t\t\t<?php
\t\t\t}


\t\t\t\$files_prevent_duplicate = array();
\t\t\tforeach (\$files as \$nu=>\$file_array) {
\t\t\t\t\$file=\$file_array['file'];

\t\t\t\tif(\$file == '.' || \$file == '..' || \$file_array['extension']==trans('Type_dir') || in_array(\$file, \$hidden_files) || !in_array(fix_strtolower(\$file_array['extension']), \$ext) || (\$filter!='' && \$n_files>\$file_number_limit_js && stripos(\$file,\$filter)===false))
\t\t\t\t\tcontinue;

\t\t\t\t\$filename=substr(\$file, 0, '-' . (strlen(\$file_array['extension']) + 1));
\t\t\t\tif(!\$ftp){
\t\t\t\t\t\$file_path=\$current_path.\$rfm_subfolder.\$subdir.\$file;
\t\t\t\t\t//check if file have illegal caracter

\t\t\t\t\tif(\$file!=fix_filename(\$file,\$config)){
\t\t\t\t\t\t\$file1=fix_filename(\$file,\$config);
\t\t\t\t\t\t\$file_path1=(\$current_path.\$rfm_subfolder.\$subdir.\$file1);
\t\t\t\t\t\tif(file_exists(\$file_path1)){
\t\t\t\t\t\t\t\$i = 1;
\t\t\t\t\t\t\t\$info=pathinfo(\$file1);
\t\t\t\t\t\t\twhile(file_exists(\$current_path.\$rfm_subfolder.\$subdir.\$info['filename'].\".[\".\$i.\"].\".\$info['extension'])) {
\t\t\t\t\t\t\t\t\$i++;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$file1=\$info['filename'].\".[\".\$i.\"].\".\$info['extension'];
\t\t\t\t\t\t\t\$file_path1=(\$current_path.\$rfm_subfolder.\$subdir.\$file1);
\t\t\t\t\t\t}

\t\t\t\t\t\t\$filename=substr(\$file1, 0, '-' . (strlen(\$file_array['extension']) + 1));
\t\t\t\t\t\trename_file(\$file_path,fix_filename(\$filename,\$config),\$ftp,\$config);
\t\t\t\t\t\t\$file=\$file1;
\t\t\t\t\t\t\$file_array['extension']=fix_filename(\$file_array['extension'],\$config);
\t\t\t\t\t\t\$file_path=\$file_path1;
\t\t\t\t\t}
\t\t\t\t}else{
\t\t\t\t\t\$file_path = \$config['ftp_base_url'].\$upload_dir.\$rfm_subfolder.\$subdir.\$file;
\t\t\t\t}

\t\t\t\t\$is_img=false;
\t\t\t\t\$is_video=false;
\t\t\t\t\$is_audio=false;
\t\t\t\t\$show_original=false;
\t\t\t\t\$show_original_mini=false;
\t\t\t\t\$mini_src=\"\";
\t\t\t\t\$src_thumb=\"\";
\t\t\t\tif(in_array(\$file_array['extension'], \$ext_img)){
\t\t\t\t\t\$src = \$file_path;
\t\t\t\t\t\$is_img=true;

\t\t\t\t\t\$img_width = \$img_height = \"\";
\t\t\t\t\tif(\$ftp){
\t\t\t\t\t\t\$mini_src = \$src_thumb = \$config['ftp_base_url'].\$ftp_thumbs_dir.\$subdir. \$file;
\t\t\t\t\t\t\$creation_thumb_path = \"/\".\$config['ftp_base_folder'].\$ftp_thumbs_dir.\$subdir. \$file;
\t\t\t\t\t}else{

\t\t\t\t\t\t\$creation_thumb_path = \$mini_src = \$src_thumb = \$thumbs_path.\$subdir. \$file;

\t\t\t\t\t\tif(!file_exists(\$src_thumb) ){
\t\t\t\t\t\t\tif(!create_img(\$file_path, \$creation_thumb_path, 122, 91,'crop',\$ftp,\$config)){
\t\t\t\t\t\t\t\t\$src_thumb=\$mini_src=\"\";
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\tnew_thumbnails_creation(\$current_path.\$rfm_subfolder.\$subdir,\$file_path,\$file,\$current_path,'','','','','','','',\$fixed_image_creation,\$fixed_path_from_filemanager,\$fixed_image_creation_name_to_prepend,\$fixed_image_creation_to_append,\$fixed_image_creation_width,\$fixed_image_creation_height,\$fixed_image_creation_option);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t//check if is smaller than thumb
\t\t\t\t\t\tlist(\$img_width, \$img_height, \$img_type, \$attr)=@getimagesize(\$file_path);
\t\t\t\t\t\tif(\$img_width<122 && \$img_height<91){
\t\t\t\t\t\t\t\$src_thumb=\$file_path;
\t\t\t\t\t\t\t\$show_original=true;
\t\t\t\t\t\t}

\t\t\t\t\t\tif(\$img_width<45 && \$img_height<38){
\t\t\t\t\t\t\t\$mini_src=\$current_path.\$rfm_subfolder.\$subdir.\$file;
\t\t\t\t\t\t\t\$show_original_mini=true;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t\$is_icon_thumb=false;
\t\t\t\t\$is_icon_thumb_mini=false;
\t\t\t\t\$no_thumb=false;
\t\t\t\tif(\$src_thumb==\"\"){
\t\t\t\t\t\$no_thumb=true;
\t\t\t\t\tif(file_exists('img/'.\$icon_theme.'/'.\$file_array['extension'].\".jpg\")){
\t\t\t\t\t\t\$src_thumb ='img/'.\$icon_theme.'/'.\$file_array['extension'].\".jpg\";
\t\t\t\t\t}else{
\t\t\t\t\t\t\$src_thumb = \"img/\".\$icon_theme.\"/default.jpg\";
\t\t\t\t\t}
\t\t\t\t\t\$is_icon_thumb=true;
\t\t\t\t}
\t\t\t\tif(\$mini_src==\"\"){
\t\t\t\t\$is_icon_thumb_mini=false;
\t\t\t\t}

\t\t\t\t\$class_ext=0;
\t\t\t\tif (in_array(\$file_array['extension'], \$ext_video)) {
\t\t\t\t\t\$class_ext = 4;
\t\t\t\t\t\$is_video=true;
\t\t\t\t}elseif (in_array(\$file_array['extension'], \$ext_img)) {
\t\t\t\t\t\$class_ext = 2;
\t\t\t\t}elseif (in_array(\$file_array['extension'], \$ext_music)) {
\t\t\t\t\t\$class_ext = 5;
\t\t\t\t\t\$is_audio=true;
\t\t\t\t}elseif (in_array(\$file_array['extension'], \$ext_misc)) {
\t\t\t\t\t\$class_ext = 3;
\t\t\t\t}else{
\t\t\t\t\t\$class_ext = 1;
\t\t\t\t}
\t\t\t\tif((!(\$_GET['type']==1 && !\$is_img) && !((\$_GET['type']==3 && !\$is_video) && (\$_GET['type']==3 && !\$is_audio))) && \$class_ext>0){
?>
\t\t\t<li class=\"ff-item-type-<?php echo \$class_ext;?> file\"  data-name=\"<?php echo \$file;?>\" <?php if((\$filter!='' && stripos(\$file,\$filter)===false)) echo ' style=\"display:none;\"';?>><?php
\t\t\t\$file_prevent_rename = false;
\t\t\t\$file_prevent_delete = false;
\t\t\tif (isset(\$filePermissions[\$file])) {
\t\t\tif (isset(\$filePermissions[\$file]['prevent_duplicate']) && \$filePermissions[\$file]['prevent_duplicate']) {
\t\t\t\t\$files_prevent_duplicate[] = \$file;
\t\t\t}
\t\t\t\$file_prevent_rename = isset(\$filePermissions[\$file]['prevent_rename']) && \$filePermissions[\$file]['prevent_rename'];
\t\t\t\$file_prevent_delete = isset(\$filePermissions[\$file]['prevent_delete']) && \$filePermissions[\$file]['prevent_delete'];
\t\t\t}
\t\t\t?>\t\t<figure data-name=\"<?php echo \$file ?>\" data-type=\"<?php if(\$is_img){ echo \"img\"; }else{ echo \"file\"; } ?>\">
\t\t\t\t<a href=\"javascript:void('')\" class=\"link\" data-file=\"<?php echo \$file;?>\" data-function=\"<?php echo \$apply;?>\">
\t\t\t\t<div class=\"img-precontainer\">
\t\t\t\t\t<?php if(\$is_icon_thumb){ ?><div class=\"filetype\"><?php echo \$file_array['extension'] ?></div><?php } ?>
\t\t\t\t\t<div class=\"img-container\">
\t\t\t\t\t\t<img class=\"<?php echo \$show_original ? \"original\" : \"\" ?><?php echo \$is_icon_thumb ? \" icon\" : \"\" ?><?php echo \$lazy_loading_enabled ? \" lazy-loaded\" : \"\"?>\" <?php echo \$lazy_loading_enabled ? \"data-original\" : \"src\"?>=\"<?php echo \$src_thumb;?>\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"img-precontainer-mini <?php if(\$is_img) echo 'original-thumb' ?>\">
\t\t\t\t\t<div class=\"filetype <?php echo \$file_array['extension'] ?> <?php if(in_array(\$file_array['extension'], \$editable_text_file_exts)) echo 'edit-text-file-allowed' ?> <?php if(!\$is_icon_thumb){ echo \"hide\"; }?>\"><?php echo \$file_array['extension'] ?></div>
\t\t\t\t\t<div class=\"img-container-mini\">
\t\t\t\t\t<?php if(\$mini_src!=\"\"){ ?>
\t\t\t\t\t<img class=\"<?php echo \$show_original_mini ? \"original\" : \"\" ?><?php echo \$is_icon_thumb_mini ? \" icon\" : \"\" ?><?php echo \$lazy_loading_enabled ? \" lazy-loaded\" : \"\"?>\" <?php echo \$lazy_loading_enabled ? \"data-original\" : \"src\"?>=\"<?php echo \$mini_src;?>\">
\t\t\t\t\t<?php } ?>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<?php if(\$is_icon_thumb){ ?>
\t\t\t\t<div class=\"cover\"></div>
\t\t\t\t<?php } ?>
\t\t\t\t</a>
\t\t\t\t<a href=\"javascript:void('')\" class=\"link\" data-file=\"<?php echo \$file;?>\" data-function=\"<?php echo \$apply;?>\">
\t\t\t\t<div class=\"box\">
\t\t\t\t<h4 class=\"<?php if(\$ellipsis_title_after_first_row){ echo \"ellipsis\"; } ?>\">
\t\t\t\t<?php echo \$filename;?></h4>
\t\t\t\t</div></a>
\t\t\t\t<input type=\"hidden\" class=\"date\" value=\"<?php echo \$file_array['date'];?>\"/>
\t\t\t\t<input type=\"hidden\" class=\"size\" value=\"<?php echo \$file_array['size'] ?>\"/>
\t\t\t\t<input type=\"hidden\" class=\"extension\" value=\"<?php echo \$file_array['extension'];?>\"/>
\t\t\t\t<input type=\"hidden\" class=\"name\" value=\"<?php echo \$file_array['file_lcase'];?>\"/>
\t\t\t\t<div class=\"file-date\"><?php echo date(trans('Date_type'),\$file_array['date'])?></div>
\t\t\t\t<div class=\"file-size\"><?php echo makeSize(\$file_array['size'])?></div>
\t\t\t\t<div class='img-dimension'><?php if(\$is_img){ echo \$img_width.\"x\".\$img_height; } ?></div>
\t\t\t\t<div class='file-extension'><?php echo \$file_array['extension'];?></div>
\t\t\t\t<figcaption>
\t\t\t\t\t<form action=\"force_download.php\" method=\"post\" class=\"download-form\" id=\"form<?php echo \$nu;?>\">
\t\t\t\t\t<input type=\"hidden\" name=\"path\" value=\"<?php echo \$rfm_subfolder.\$subdir?>\"/>
\t\t\t\t\t<input type=\"hidden\" class=\"name_download\" name=\"name\" value=\"<?php echo \$file?>\"/>

\t\t\t\t\t<a title=\"<?php echo trans('Download')?>\" class=\"tip-right\" href=\"javascript:void('')\" onclick=\"\$('#form<?php echo \$nu;?>').submit();\"><i class=\"icon-download\"></i></a>
\t\t\t\t\t<?php if(\$is_img && \$src_thumb!=\"\" && \$file_array['extension']!=\"tiff\" && \$file_array['extension']!=\"tif\"){ ?>
\t\t\t\t\t<a class=\"tip-right preview\" title=\"<?php echo trans('Preview')?>\" data-url=\"<?php echo \$src;?>\" data-toggle=\"lightbox\" href=\"#previewLightbox\"><i class=\" icon-eye-open\"></i></a>
\t\t\t\t\t<?php }elseif((\$is_video || \$is_audio) && in_array(\$file_array['extension'],\$jplayer_ext)){ ?>
\t\t\t\t\t<a class=\"tip-right modalAV <?php if(\$is_audio){ echo \"audio\"; }else{ echo \"video\"; } ?>\"
\t\t\t\t\ttitle=\"<?php echo trans('Preview')?>\" data-url=\"ajax_calls.php?action=media_preview&title=<?php echo \$filename;?>&file=<?php echo \$rfm_subfolder.\$subdir.\$file;?>\"
\t\t\t\t\thref=\"javascript:void('');\" ><i class=\" icon-eye-open\"></i></a>
\t\t\t\t\t\t<?php }elseif(\$preview_text_files && in_array(\$file_array['extension'],\$previewable_text_file_exts)){ ?>
\t\t\t\t\t\t<a class=\"tip-right file-preview-btn\" title=\"<?php echo trans('Preview')?>\" data-url=\"ajax_calls.php?action=get_file&sub_action=preview&preview_mode=text&title=<?php echo \$filename;?>&file=<?php echo \$rfm_subfolder.\$subdir.\$file;?>\"
\t\t\t\t\t\thref=\"javascript:void('');\" ><i class=\" icon-eye-open\"></i></a>
\t\t\t\t\t\t<?php }elseif(\$googledoc_enabled && in_array(\$file_array['extension'],\$googledoc_file_exts)){ ?>
\t\t\t\t\t\t<a class=\"tip-right file-preview-btn\" title=\"<?php echo trans('Preview')?>\" data-url=\"ajax_calls.php?action=get_file&sub_action=preview&preview_mode=google&title=<?php echo \$filename;?>&file=<?php echo \$rfm_subfolder.\$subdir.\$file;?>\"
\t\t\t\t\t\thref=\"docs.google.com;\" ><i class=\" icon-eye-open\"></i></a>

\t\t\t\t\t\t<?php }elseif(\$viewerjs_enabled && in_array(\$file_array['extension'],\$viewerjs_file_exts)){ ?>
\t\t\t\t\t\t<a class=\"tip-right file-preview-btn\" title=\"<?php echo trans('Preview')?>\" data-url=\"ajax_calls.php?action=get_file&sub_action=preview&preview_mode=viewerjs&title=<?php echo \$filename;?>&file=<?php echo \$rfm_subfolder.\$subdir.\$file;?>\"
\t\t\t\t\t\thref=\"docs.google.com;\" ><i class=\" icon-eye-open\"></i></a>

\t\t\t\t\t<?php }else{ ?>
\t\t\t\t\t<a class=\"preview disabled\"><i class=\"icon-eye-open icon-white\"></i></a>
\t\t\t\t\t<?php } ?>
\t\t\t\t\t<a href=\"javascript:void('')\" class=\"tip-left edit-button rename-file-paths <?php if(\$rename_files && !\$file_prevent_rename) echo \"rename-file\";?>\" title=\"<?php echo trans('Rename')?>\" data-folder=\"0\" data-permissions=\"<?php echo \$file_array['permissions']; ?>\" data-path=\"<?php echo \$rfm_subfolder.\$subdir .\$file;?>\">
\t\t\t\t\t<i class=\"icon-pencil <?php if(!\$rename_files || \$file_prevent_rename) echo 'icon-white';?>\"></i></a>

\t\t\t\t\t<a href=\"javascript:void('')\" class=\"tip-left erase-button <?php if(\$delete_files && !\$file_prevent_delete) echo \"delete-file\";?>\" title=\"<?php echo trans('Erase')?>\" data-confirm=\"<?php echo trans('Confirm_del');?>\" data-path=\"<?php echo \$rfm_subfolder.\$subdir.\$file;?>\">
\t\t\t\t\t<i class=\"icon-trash <?php if(!\$delete_files || \$file_prevent_delete) echo 'icon-white';?>\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t</form>
\t\t\t\t</figcaption>
\t\t\t</figure>
\t\t</li>
\t\t\t<?php
\t\t\t}
\t\t\t}

\t?></div>
\t\t</ul>
\t\t<?php } ?>
\t</div>
\t</div>
</div>
<script>
\tvar files_prevent_duplicate = new Array();
\t<?php
\tforeach (\$files_prevent_duplicate as \$key => \$value): ?>
\t\tfiles_prevent_duplicate[<?php echo \$key;?>] = '<?php echo \$value;?>';
\t<?php endforeach;?>
</script>

\t<!-- lightbox div start -->
\t<div id=\"previewLightbox\" class=\"lightbox hide fade\"  tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t<div class='lightbox-content'>
\t\t\t<img id=\"full-img\" src=\"\">
\t\t</div>
\t</div>
\t<!-- lightbox div end -->

\t<!-- loading div start -->
\t<div id=\"loading_container\" style=\"display:none;\">
\t\t<div id=\"loading\" style=\"background-color:#000; position:fixed; width:100%; height:100%; top:0px; left:0px;z-index:100000\"></div>
\t\t<img id=\"loading_animation\" src=\"img/storing_animation.gif\" alt=\"loading\" style=\"z-index:10001; margin-left:-32px; margin-top:-32px; position:fixed; left:50%; top:50%\"/>
\t</div>
\t<!-- loading div end -->

\t<!-- player div start -->
\t<div class=\"modal hide fade\" id=\"previewAV\">
\t<div class=\"modal-header\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t<h3><?php echo trans('Preview');?></h3>
\t</div>
\t<div class=\"modal-body\">
\t\t<div class=\"row-fluid body-preview\">
\t\t\t\t</div>
\t</div>

\t</div>
\t<!-- player div end -->
\t<img id='aviary_img' src='' class=\"hide\"/>

\t<?php if (\$lazy_loading_enabled) { ?>
\t\t<script>
\t\t\t\$(function(){
\t\t\t\t\$(\".lazy-loaded\").lazyload({
\t\t\t\t\t\tevent: 'scrollstop'
\t\t\t\t\t});
\t\t\t});
\t\t</script>
\t<?php } ?>
\t<script>
\t\tvar ua = navigator.userAgent.toLowerCase();
\t\tvar isAndroid = ua.indexOf(\"android\") > -1; //&& ua.indexOf(\"mobile\");
\t\tif(isAndroid) {
\t\t\t\$('li').draggable({ disabled: true });
\t\t}
\t</script>
</body>
</html>
<?php }
?>", "@MwebAdmin/filemanager/dialog.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/dialog.php");
    }
}
