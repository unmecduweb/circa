<?php

/* @MwebAdmin/filemanager/ajax_calls.php */
class __TwigTemplate_a8b9a4bd1de8ebde00edf3e0d9f0bdc742d04cdcf40214757ccd47eebdc0bcaa extends Twig_Template
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
        $__internal_fdd4c77d2f83d36155d59f7eb44282e617e5dbfaee086aa2b35cf3b3e655dab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd4c77d2f83d36155d59f7eb44282e617e5dbfaee086aa2b35cf3b3e655dab8->enter($__internal_fdd4c77d2f83d36155d59f7eb44282e617e5dbfaee086aa2b35cf3b3e655dab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/ajax_calls.php"));

        // line 1
        echo "<?php

\$config = include 'config/config.php';
//TODO switch to array
extract(\$config, EXTR_OVERWRITE);

require_once 'include/utils.php';

if (\$_SESSION['RF'][\"verify\"] != \"RESPONSIVEfilemanager\")
{
\tresponse(trans('forbiden').AddErrorLocation())->send();
\texit;
}
\$languages = include 'lang/languages.php';


if (isset(\$_SESSION['RF']['language']) && file_exists(__DIR__.'/lang/' . basename(\$_SESSION['RF']['language']) . '.php'))
{
\tif(array_key_exists(\$_SESSION['RF']['language'],\$languages)){
\t\tinclude 'lang/' . basename(\$_SESSION['RF']['language']) . '.php';
\t}else{
\t\tresponse(trans('Lang_Not_Found').AddErrorLocation())->send();
\t\texit;
\t}
} else {
\tresponse(trans('Lang_Not_Found').AddErrorLocation())->send();
\texit;
}
\$ftp = ftp_con(\$config);

if(isset(\$_GET['action']))
{
\tswitch(\$_GET['action'])
\t{
\t\tcase 'new_file_form':
\t\t\techo trans('Filename') . ': <input type=\"text\" id=\"create_text_file_name\" style=\"height:30px\"> <select id=\"create_text_file_extension\" style=\"margin:0;width:100px;\">';
\t\t\tforeach(\$config['editable_text_file_exts'] as \$ext){
\t\t\t\techo '<option value=\".'.\$ext.'\">.'.\$ext.'</option>';
\t\t\t}
\t\t\techo '</select><br><hr><textarea id=\"textfile_create_area\" style=\"width:100%;height:150px;\"></textarea>';
\t\tbreak;
\t\tcase 'view':
\t\t\tif(isset(\$_GET['type']))
\t\t\t{
\t\t\t\t\$_SESSION['RF'][\"view_type\"] = \$_GET['type'];
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tresponse(trans('view type number missing').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\tbreak;
\t\tcase 'filter':
\t\t\tif (isset(\$_GET['type']))
\t\t\t{
\t\t\t\tif (isset(\$remember_text_filter) && \$remember_text_filter)
\t\t\t\t{
\t\t\t\t\t\$_SESSION['RF'][\"filter\"] = \$_GET['type'];
\t\t\t\t}
\t\t\t}
\t\t\telse {
\t\t\t\tresponse(trans('view type number missing').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\tbreak;
\t\tcase 'sort':
\t\t\tif (isset(\$_GET['sort_by']))
\t\t\t{
\t\t\t\t\$_SESSION['RF'][\"sort_by\"] = \$_GET['sort_by'];
\t\t\t}

\t\t\tif (isset(\$_GET['descending']))
\t\t\t{
\t\t\t\t\$_SESSION['RF'][\"descending\"] = \$_GET['descending'];
\t\t\t}
\t\t\tbreak;
\t\tcase 'image_size': // not used
\t\t\t\$pos = strpos(\$_POST['path'], \$upload_dir);
\t\t\tif (\$pos !== false)
\t\t\t{
\t\t\t\t\$info = getimagesize(substr_replace(\$_POST['path'], \$current_path, \$pos, strlen(\$upload_dir)));
\t\t\t\tresponse(\$info)->send();
\t\t\t\texit;
\t\t\t}
\t\t\tbreak;
\t\tcase 'save_img':
\t\t\t\$info = pathinfo(\$_POST['name']);

\t\t\tif (
\t\t\t\tstrpos(\$_POST['path'], '/') === 0
\t\t\t\t|| strpos(\$_POST['path'], '../') !== false
\t\t\t\t|| strpos(\$_POST['path'], './') === 0
\t\t\t\t|| (strpos(\$_POST['url'], 'http://s3.amazonaws.com/feather') !== 0
\t\t\t\t&& strpos(\$_POST['url'], 'https://s3.amazonaws.com/feather') !== 0)
\t\t\t\t|| \$_POST['name'] != fix_filename(\$_POST['name'], \$config)
\t\t\t\t|| ! in_array(strtolower(\$info['extension']), array( 'jpg', 'jpeg', 'png' ))
\t\t\t)
\t\t\t{
\t\t\t\tresponse(trans('wrong data').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\t\$image_data = get_file_by_url(\$_POST['url']);
\t\t\tif (\$image_data === false)
\t\t\t{
\t\t\t\tresponse(trans('Aviary_No_Save').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\tif (!checkresultingsize(strlen(\$image_data))) {
\t\t\t\tresponse(sprintf(trans('max_size_reached'),\$MaxSizeTotal).AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\tif(\$ftp){

\t\t\t\t\$temp = tempnam('/tmp','RF');
\t\t\t\tunlink(\$temp);
\t\t\t\t\$temp .=\".\".substr(strrchr(\$_POST['url'],'.'),1);
\t\t\t\tfile_put_contents(\$temp,\$image_data);

\t\t\t\t\$ftp->put(\$ftp_base_folder.\$upload_dir . \$_POST['path'] . \$_POST['name'], \$temp, FTP_BINARY);

\t\t\t\tcreate_img(\$temp,\$temp,122,91);
\t\t\t\t\$ftp->put(\$ftp_base_folder.\$ftp_thumbs_dir. \$_POST['path'] . \$_POST['name'], \$temp, FTP_BINARY);

\t\t\t\tunlink(\$temp);
\t\t\t}else{

\t\t\t\tfile_put_contents(\$current_path . \$_POST['path'] . \$_POST['name'],\$image_data);
\t\t\t\tcreate_img(\$current_path . \$_POST['path'] . \$_POST['name'], \$thumbs_base_path.\$_POST['path'].\$_POST['name'], 122, 91);
\t\t\t\t// TODO something with this function cause its blowing my mind
\t\t\t\tnew_thumbnails_creation(
\t\t\t\t\t\$current_path.\$_POST['path'],
\t\t\t\t\t\$current_path.\$_POST['path'].\$_POST['name'],
\t\t\t\t\t\$_POST['name'],
\t\t\t\t\t\$current_path,
\t\t\t\t\t\$relative_image_creation,
\t\t\t\t\t\$relative_path_from_current_pos,
\t\t\t\t\t\$relative_image_creation_name_to_prepend,
\t\t\t\t\t\$relative_image_creation_name_to_append,
\t\t\t\t\t\$relative_image_creation_width,
\t\t\t\t\t\$relative_image_creation_height,
\t\t\t\t\t\$relative_image_creation_option,
\t\t\t\t\t\$fixed_image_creation,
\t\t\t\t\t\$fixed_path_from_filemanager,
\t\t\t\t\t\$fixed_image_creation_name_to_prepend,
\t\t\t\t\t\$fixed_image_creation_to_append,
\t\t\t\t\t\$fixed_image_creation_width,
\t\t\t\t\t\$fixed_image_creation_height,
\t\t\t\t\t\$fixed_image_creation_option
\t\t\t\t);
\t\t\t}
\t\t\tbreak;
\t\tcase 'extract':
\t\t\tif (strpos(\$_POST['path'], '/') === 0 || strpos(\$_POST['path'], '../') !== false || strpos(\$_POST['path'], './') === 0)
\t\t\t{
\t\t\t\tresponse(trans('wrong path'.AddErrorLocation()))->send();
\t\t\t\texit;
\t\t\t}

\t\t\tif(\$ftp){
\t\t\t\t\$path = \$ftp_base_url.\$upload_dir . \$_POST['path'];
\t\t\t\t\$base_folder = \$ftp_base_url.\$upload_dir . fix_dirname(\$_POST['path']) . \"/\";
\t\t\t}else{
\t\t\t\t\$path = \$current_path . \$_POST['path'];
\t\t\t\t\$base_folder = \$current_path . fix_dirname(\$_POST['path']) . \"/\";
\t\t\t}

\t\t\t\$info = pathinfo(\$path);

\t\t\tif(\$ftp){
\t\t\t\t\$tempDir = tempdir();
\t\t\t\t\$temp = tempnam(\$tempDir,'RF');
\t\t\t\tunlink(\$temp);
\t\t\t\t\$temp .=\".\".\$info['extension'];
\t\t\t\t\$handle = fopen(\$temp, \"w\");
\t\t\t\tfwrite(\$handle, file_get_contents(\$path));
\t\t\t\tfclose(\$handle);
\t\t\t\t\$path = \$temp;
\t\t\t\t\$base_folder = \$tempDir.\"/\";
\t\t\t}

\t\t\t\$info = pathinfo(\$path);

\t\t\tswitch (\$info['extension'])
\t\t\t{
\t\t\t\tcase \"zip\":
\t\t\t\t\t\$zip = new ZipArchive;
\t\t\t\t\tif (\$zip->open(\$path) === true)
\t\t\t\t\t{
\t\t\t\t\t\t//get total size
\t\t\t\t\t\t\$sizeTotalFinal = 0;
\t\t\t\t\t\tfor (\$i = 0; \$i < \$zip->numFiles; \$i++)
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\$aStat = \$zip->statIndex(\$i);
\t\t\t\t\t\t\t\$sizeTotalFinal += \$aStat['size'];
\t\t\t\t\t\t}
\t\t\t\t\t\tif (!checkresultingsize(\$sizeTotalFinal)) {
\t\t\t\t\t\t\tresponse(sprintf(trans('max_size_reached'),\$MaxSizeTotal).AddErrorLocation())->send();
\t\t\t\t\t\t\texit;
\t\t\t\t\t\t}

\t\t\t\t\t\t//make all the folders
\t\t\t\t\t\tfor (\$i = 0; \$i < \$zip->numFiles; \$i++)
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\$OnlyFileName = \$zip->getNameIndex(\$i);
\t\t\t\t\t\t\t\$FullFileName = \$zip->statIndex(\$i);
\t\t\t\t\t\t\tif (substr(\$FullFileName['name'], -1, 1) == \"/\")
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tcreate_folder(\$base_folder . \$FullFileName['name']);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t//unzip into the folders
\t\t\t\t\t\tfor (\$i = 0; \$i < \$zip->numFiles; \$i++)
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\$OnlyFileName = \$zip->getNameIndex(\$i);
\t\t\t\t\t\t\t\$FullFileName = \$zip->statIndex(\$i);

\t\t\t\t\t\t\tif ( ! (substr(\$FullFileName['name'], -1, 1) == \"/\"))
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\$fileinfo = pathinfo(\$OnlyFileName);
\t\t\t\t\t\t\t\tif (in_array(strtolower(\$fileinfo['extension']), \$ext))
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tcopy('zip://' . \$path . '#' . \$OnlyFileName, \$base_folder . \$FullFileName['name']);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t\$zip->close();
\t\t\t\t\t} else {
\t\t\t\t\t\tresponse(trans('Zip_No_Extract').AddErrorLocation())->send();
\t\t\t\t\t\texit;
\t\t\t\t\t}

\t\t\t\t\tbreak;

\t\t\t\tcase \"gz\":
\t\t\t\t\t// No resulting size pre-control available
\t\t\t\t\t\$p = new PharData(\$path);
\t\t\t\t\t\$p->decompress(); // creates files.tar

\t\t\t\t\tbreak;

\t\t\t\tcase \"tar\":
\t\t\t\t\t// No resulting size pre-control available
\t\t\t\t\t// unarchive from the tar
\t\t\t\t\t\$phar = new PharData(\$path);
\t\t\t\t\t\$phar->decompressFiles();
\t\t\t\t\t\$files = array();
\t\t\t\t\tcheck_files_extensions_on_phar(\$phar, \$files, '', \$ext);
\t\t\t\t\t\$phar->extractTo(\$base_folder, \$files, true);

\t\t\t\t\tbreak;

\t\t\t\tdefault:
\t\t\t\t\tresponse(trans('Zip_Invalid').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t}

\t\t\tif(\$ftp){
\t\t\t\tunlink(\$path);
\t\t\t\t\$ftp->putAll(\$base_folder, \"/\".\$ftp_base_folder . \$upload_dir . fix_dirname(\$_POST['path']), FTP_BINARY);
\t\t\t\tdeleteDir(\$base_folder);
\t\t\t}


\t\t\tbreak;
\t\tcase 'media_preview':
\t\t\tif(\$ftp){
\t\t\t\t\$preview_file = \$ftp_base_url.\$upload_dir . \$_GET['file'];
\t\t\t}else{
\t\t\t\t\$preview_file = \$current_path . \$_GET[\"file\"];
\t\t\t}
\t\t\t\$info = pathinfo(\$preview_file);
\t\t\tob_start();
\t\t\t?>
\t\t\t<div id=\"jp_container_1\" class=\"jp-video \" style=\"margin:0 auto;\">
\t\t\t\t<div class=\"jp-type-single\">
\t\t\t\t<div id=\"jquery_jplayer_1\" class=\"jp-jplayer\"></div>
\t\t\t\t<div class=\"jp-gui\">
\t\t\t\t\t<div class=\"jp-video-play\">
\t\t\t\t\t<a href=\"javascript:;\" class=\"jp-video-play-icon\" tabindex=\"1\">play</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"jp-interface\">
\t\t\t\t\t<div class=\"jp-progress\">
\t\t\t\t\t\t<div class=\"jp-seek-bar\">
\t\t\t\t\t\t<div class=\"jp-play-bar\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"jp-current-time\"></div>
\t\t\t\t\t<div class=\"jp-duration\"></div>
\t\t\t\t\t<div class=\"jp-controls-holder\">
\t\t\t\t\t\t<ul class=\"jp-controls\">
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-play\" tabindex=\"1\">play</a></li>
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-pause\" tabindex=\"1\">pause</a></li>
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-stop\" tabindex=\"1\">stop</a></li>
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-mute\" tabindex=\"1\" title=\"mute\">mute</a></li>
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-unmute\" tabindex=\"1\" title=\"unmute\">unmute</a></li>
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-volume-max\" tabindex=\"1\" title=\"max volume\">max volume</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"jp-volume-bar\">
\t\t\t\t\t\t<div class=\"jp-volume-bar-value\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"jp-toggles\">
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-full-screen\" tabindex=\"1\" title=\"full screen\">full screen</a></li>
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-restore-screen\" tabindex=\"1\" title=\"restore screen\">restore screen</a></li>
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-repeat\" tabindex=\"1\" title=\"repeat\">repeat</a></li>
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-repeat-off\" tabindex=\"1\" title=\"repeat off\">repeat off</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"jp-title\" style=\"display:none;\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"jp-no-solution\">
\t\t\t\t\t<span>Update Required</span>
\t\t\t\t\tTo play the media you will need to either update your browser to a recent version or update your <a href=\"http://get.adobe.com/flashplayer/\" target=\"_blank\">Flash plugin</a>.
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<?php if(in_array(strtolower(\$info['extension']), \$ext_music)): ?>

\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\$(document).ready(function(){

\t\t\t\t\t\$(\"#jquery_jplayer_1\").jPlayer({
\t\t\t\t\t\tready: function () {
\t\t\t\t\t\t\$(this).jPlayer(\"setMedia\", {
\t\t\t\t\t\ttitle:\"<?php \$_GET['title']; ?>\",
\t\t\t\t\t\t\tmp3: \"<?php echo \$preview_file; ?>\",
\t\t\t\t\t\t\tm4a: \"<?php echo \$preview_file; ?>\",
\t\t\t\t\t\toga: \"<?php echo \$preview_file; ?>\",
\t\t\t\t\t\t\twav: \"<?php echo \$preview_file; ?>\"
\t\t\t\t\t\t});
\t\t\t\t\t\t},
\t\t\t\t\t\tswfPath: \"js\",
\t\t\t\t\tsolution:\"html,flash\",
\t\t\t\t\t\tsupplied: \"mp3, m4a, midi, mid, oga,webma, ogg, wav\",
\t\t\t\t\tsmoothPlayBar: true,
\t\t\t\t\tkeyEnabled: false
\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t</script>

\t\t\t<?php elseif(in_array(strtolower(\$info['extension']), \$ext_video)):\t?>

\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(document).ready(function(){

\t\t\t\t\$(\"#jquery_jplayer_1\").jPlayer({
\t\t\t\t\tready: function () {
\t\t\t\t\t\$(this).jPlayer(\"setMedia\", {
\t\t\t\t\t\ttitle:\"<?php \$_GET['title']; ?>\",
\t\t\t\t\t\tm4v: \"<?php echo \$preview_file; ?>\",
\t\t\t\t\t\togv: \"<?php echo \$preview_file; ?>\",
\t\t\t\t\t\tflv: \"<?php echo \$preview_file; ?>\"
\t\t\t\t\t});
\t\t\t\t\t},
\t\t\t\t\tswfPath: \"js\",
\t\t\t\t\tsolution:\"html,flash\",
\t\t\t\t\tsupplied: \"mp4, m4v, ogv, flv, webmv, webm\",
\t\t\t\t\tsmoothPlayBar: true,
\t\t\t\t\tkeyEnabled: false
\t\t\t\t});

\t\t\t\t});
\t\t\t</script>

\t\t\t<?php endif;

\t\t\t\$content = ob_get_clean();

\t\t\tresponse(\$content)->send();
\t\t\texit;

\t\t\tbreak;
\t\tcase 'copy_cut':
\t\t\tif (\$_POST['sub_action'] != 'copy' && \$_POST['sub_action'] != 'cut')
\t\t\t{
\t\t\t\tresponse(trans('wrong sub-action').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\tif (trim(\$_POST['path']) == '')
\t\t\t{
\t\t\t\tresponse(trans('no path').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\t\$msg_sub_action = (\$_POST['sub_action'] == 'copy' ? trans('Copy') : trans('Cut'));
\t\t\t\$path = \$current_path . \$_POST['path'];

\t\t\tif (is_dir(\$path))
\t\t\t{
\t\t\t\t// can't copy/cut dirs
\t\t\t\tif (\$copy_cut_dirs === false)
\t\t\t\t{
\t\t\t\t\tresponse(sprintf(trans('Copy_Cut_Not_Allowed'), \$msg_sub_action, trans('Folders')).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}

\t\t\t\tlist(\$sizeFolderToCopy,\$fileNum,\$foldersCount) = folder_info(\$path,false);
\t\t\t\t// size over limit
\t\t\t\tif (\$copy_cut_max_size !== false && is_int(\$copy_cut_max_size)) {
\t\t\t\t\tif ((\$copy_cut_max_size * 1024 * 1024) < \$sizeFolderToCopy) {
\t\t\t\t\t\tresponse(sprintf(trans('Copy_Cut_Size_Limit'), \$msg_sub_action, \$copy_cut_max_size).AddErrorLocation())->send();
\t\t\t\t\t\texit;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// file count over limit
\t\t\t\tif (\$copy_cut_max_count !== false && is_int(\$copy_cut_max_count))
\t\t\t\t{
\t\t\t\t\tif (\$copy_cut_max_count < \$fileNum)
\t\t\t\t\t{
\t\t\t\t\t\tresponse(sprintf(trans('Copy_Cut_Count_Limit'), \$msg_sub_action, \$copy_cut_max_count).AddErrorLocation())->send();
\t\t\t\t\t\texit;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (!checkresultingsize(\$sizeFolderToCopy)) {
\t\t\t\t\tresponse(sprintf(trans('max_size_reached'),\$MaxSizeTotal).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t} else {
\t\t\t\t// can't copy/cut files
\t\t\t\tif (\$copy_cut_files === false)
\t\t\t\t{
\t\t\t\t\tresponse(sprintf(trans('Copy_Cut_Not_Allowed'), \$msg_sub_action, trans('Files')).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t}

\t\t\t\$_SESSION['RF']['clipboard']['path'] = \$_POST['path'];
\t\t\t\$_SESSION['RF']['clipboard_action'] = \$_POST['sub_action'];
\t\t\tbreak;
\t\tcase 'clear_clipboard':
\t\t\t\$_SESSION['RF']['clipboard'] = null;
\t\t\t\$_SESSION['RF']['clipboard_action'] = null;
\t\t\tbreak;
\t\tcase 'chmod':
\t\t\tif(\$ftp){
\t\t\t\t\$path = \$ftp_base_url . \$upload_dir . \$_POST['path'];
\t\t\t\tif (
\t\t\t\t\t(\$_POST['folder']==1 && \$chmod_dirs === false)
\t\t\t\t\t|| (\$_POST['folder']==0 && \$chmod_files === false)
\t\t\t\t\t|| (is_function_callable(\"chmod\") === false) )
\t\t\t\t{
\t\t\t\t\tresponse(sprintf(trans('File_Permission_Not_Allowed'), (is_dir(\$path) ? trans('Folders') : trans('Files')), 403).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t\t\$info = \$_POST['permissions'];
\t\t\t}else{
\t\t\t\t\$path = \$current_path . \$_POST['path'];
\t\t\t\tif (
\t\t\t\t\t(is_dir(\$path) && \$chmod_dirs === false)
\t\t\t\t\t|| (is_file(\$path) && \$chmod_files === false)
\t\t\t\t\t|| (is_function_callable(\"chmod\") === false) )
\t\t\t\t{
\t\t\t\t\tresponse(sprintf(trans('File_Permission_Not_Allowed'), (is_dir(\$path) ? trans('Folders') : trans('Files')), 403).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}

\t\t\t\t\$perms = fileperms(\$path) & 0777;

\t\t\t    \$info = '-';

\t\t\t\t// Owner
\t\t\t\t\$info .= ((\$perms & 0x0100) ? 'r' : '-');
\t\t\t\t\$info .= ((\$perms & 0x0080) ? 'w' : '-');
\t\t\t\t\$info .= ((\$perms & 0x0040) ?
\t\t\t\t            ((\$perms & 0x0800) ? 's' : 'x' ) :
\t\t\t\t            ((\$perms & 0x0800) ? 'S' : '-'));

\t\t\t\t// Group
\t\t\t\t\$info .= ((\$perms & 0x0020) ? 'r' : '-');
\t\t\t\t\$info .= ((\$perms & 0x0010) ? 'w' : '-');
\t\t\t\t\$info .= ((\$perms & 0x0008) ?
\t\t\t\t            ((\$perms & 0x0400) ? 's' : 'x' ) :
\t\t\t\t            ((\$perms & 0x0400) ? 'S' : '-'));

\t\t\t\t// World
\t\t\t\t\$info .= ((\$perms & 0x0004) ? 'r' : '-');
\t\t\t\t\$info .= ((\$perms & 0x0002) ? 'w' : '-');
\t\t\t\t\$info .= ((\$perms & 0x0001) ?
\t\t\t\t            ((\$perms & 0x0200) ? 't' : 'x' ) :
\t\t\t\t            ((\$perms & 0x0200) ? 'T' : '-'));

\t\t\t}


\t\t\t\$ret = '<div id=\"files_permission_start\">
\t\t\t<form id=\"chmod_form\">
\t\t\t\t<table class=\"table file-perms-table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>r&nbsp;&nbsp;</td>
\t\t\t\t\t\t\t<td>w&nbsp;&nbsp;</td>
\t\t\t\t\t\t\t<td>x&nbsp;&nbsp;</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>'.trans('User').'</td>
\t\t\t\t\t\t\t<td><input id=\"u_4\" type=\"checkbox\" data-value=\"4\" data-group=\"user\" '.(substr(\$info, 1,1)=='r' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t\t<td><input id=\"u_2\" type=\"checkbox\" data-value=\"2\" data-group=\"user\" '.(substr(\$info, 2,1)=='w' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t\t<td><input id=\"u_1\" type=\"checkbox\" data-value=\"1\" data-group=\"user\" '.(substr(\$info, 3,1)=='x' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>'.trans('Group').'</td>
\t\t\t\t\t\t\t<td><input id=\"g_4\" type=\"checkbox\" data-value=\"4\" data-group=\"group\" '.(substr(\$info, 4,1)=='r' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t\t<td><input id=\"g_2\" type=\"checkbox\" data-value=\"2\" data-group=\"group\" '.(substr(\$info, 5,1)=='w' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t\t<td><input id=\"g_1\" type=\"checkbox\" data-value=\"1\" data-group=\"group\" '.(substr(\$info, 6,1)=='x' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>'.trans('All').'</td>
\t\t\t\t\t\t\t<td><input id=\"a_4\" type=\"checkbox\" data-value=\"4\" data-group=\"all\" '.(substr(\$info, 7,1)=='r' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t\t<td><input id=\"a_2\" type=\"checkbox\" data-value=\"2\" data-group=\"all\" '.(substr(\$info, 8,1)=='w' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t\t<td><input id=\"a_1\" type=\"checkbox\" data-value=\"1\" data-group=\"all\" '.(substr(\$info, 9,1)=='x' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td colspan=\"3\"><input type=\"text\" class=\"input-block-level\" name=\"chmod_value\" id=\"chmod_value\" value=\"\" data-def-value=\"\"></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>';

\t\t\tif ((!\$ftp && is_dir(\$path)) )
\t\t\t{
\t\t\t\t\$ret .= '<div class=\"hero-unit\" style=\"padding:10px;\">'.trans('File_Permission_Recursive').'<br/><br/>
\t\t\t\t\t\t<ul class=\"unstyled\">
\t\t\t\t\t\t\t<li><label class=\"radio\"><input value=\"none\" name=\"apply_recursive\" type=\"radio\" checked> '.trans('No').'</label></li>
\t\t\t\t\t\t\t<li><label class=\"radio\"><input value=\"files\" name=\"apply_recursive\" type=\"radio\"> '.trans('Files').'</label></li>
\t\t\t\t\t\t\t<li><label class=\"radio\"><input value=\"folders\" name=\"apply_recursive\" type=\"radio\"> '.trans('Folders').'</label></li>
\t\t\t\t\t\t\t<li><label class=\"radio\"><input value=\"both\" name=\"apply_recursive\" type=\"radio\"> '.trans('Files').' & '.trans('Folders').'</label></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>';
\t\t\t}

\t\t\t\$ret .= '</form></div>';

\t\t\tresponse(\$ret)->send();
\t\t\texit;

\t\t\tbreak;
\t\tcase 'get_lang':
\t\t\tif ( ! file_exists('lang/languages.php'))
\t\t\t{
\t\t\t\tresponse(trans('Lang_Not_Found').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\t\$languages = include 'lang/languages.php';
\t\t\tif ( ! isset(\$languages) || ! is_array(\$languages))
\t\t\t{
\t\t\t\tresponse(trans('Lang_Not_Found').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\t\$curr = \$_SESSION['RF']['language'];

\t\t\t\$ret = '<select id=\"new_lang_select\">';
\t\t\tforeach (\$languages as \$code => \$name)
\t\t\t{
\t\t\t\t\$ret .= '<option value=\"' . \$code . '\"' . (\$code == \$curr ? ' selected' : '') . '>' . \$name . '</option>';
\t\t\t}
\t\t\t\$ret .= '</select>';

\t\t\tresponse(\$ret)->send();
\t\t\texit;

\t\t\tbreak;
\t\tcase 'change_lang':
\t\t\t\$choosen_lang = (!empty(\$_POST['choosen_lang']))? \$_POST['choosen_lang']:\"en_EN\";

\t\t\tif(array_key_exists(\$choosen_lang,\$languages)){
\t\t\t\tif ( ! file_exists('lang/' . \$choosen_lang . '.php'))
\t\t\t\t{
\t\t\t\t\tresponse(trans('Lang_Not_Found').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}else{
\t\t\t\t\t\$_SESSION['RF']['language'] = \$choosen_lang;
\t\t\t\t}
\t\t\t}

\t\t\tbreak;
\t\tcase 'get_file': // preview or edit
\t\t\t\$sub_action = \$_GET['sub_action'];
\t\t\t\$preview_mode = \$_GET[\"preview_mode\"];

\t\t\tif (\$sub_action != 'preview' && \$sub_action != 'edit')
\t\t\t{
\t\t\t\tresponse(trans('wrong action').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\tif(\$ftp){
\t\t\t\t\$selected_file = (\$sub_action == 'preview' ? \$ftp_base_url.\$upload_dir . \$_GET['file'] : \$ftp_base_url.\$upload_dir . \$_POST['path']);
\t\t\t}else{
\t\t\t\t\$selected_file = (\$sub_action == 'preview' ? \$current_path . \$_GET['file'] : \$current_path . \$_POST['path']);

\t\t\t\tif ( ! file_exists(\$selected_file))
\t\t\t\t{
\t\t\t\t\tresponse(trans('File_Not_Found').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t}

\t\t\t\$info = pathinfo(\$selected_file);

\t\t\tif (\$preview_mode == 'text')
\t\t\t{
\t\t\t\t\$is_allowed = (\$sub_action == 'preview' ? \$preview_text_files : \$edit_text_files);
\t\t\t\t\$allowed_file_exts = (\$sub_action == 'preview' ? \$previewable_text_file_exts : \$editable_text_file_exts);
\t\t\t} elseif (\$preview_mode == 'viewerjs') {
\t\t\t\t\$is_allowed = \$viewerjs_enabled;
\t\t\t\t\$allowed_file_exts = \$viewerjs_file_exts;
\t\t\t} elseif (\$preview_mode == 'google') {
\t\t\t\t\$is_allowed = \$googledoc_enabled;
\t\t\t\t\$allowed_file_exts = \$googledoc_file_exts;
\t\t\t}

\t\t\tif ( ! isset(\$allowed_file_exts) || ! is_array(\$allowed_file_exts))
\t\t\t{
\t\t\t\t\$allowed_file_exts = array();
\t\t\t}

\t\t\tif ( ! in_array(\$info['extension'], \$allowed_file_exts)
\t\t\t\t|| ! isset(\$is_allowed)
\t\t\t\t|| \$is_allowed === false
\t\t\t\t|| (!\$ftp && ! is_readable(\$selected_file))
\t\t\t)
\t\t\t{
\t\t\t\tresponse(sprintf(trans('File_Open_Edit_Not_Allowed'), (\$sub_action == 'preview' ? strtolower(trans('Open')) : strtolower(trans('Edit')))).AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\tif (\$sub_action == 'preview')
\t\t\t{
\t\t\t\tif (\$preview_mode == 'text')
\t\t\t\t{
\t\t\t\t\t// get and sanities
\t\t\t\t\t\$data = stripslashes(htmlspecialchars(file_get_contents(\$selected_file)));

\t\t\t\t\t\$ret = '';

\t\t\t\t\tif ( ! in_array(\$info['extension'],\$previewable_text_file_exts_no_prettify))
\t\t\t\t\t{
\t\t\t\t\t\t\$ret .= '<script src=\"https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang='.\$info['extension'].'&skin=sunburst\"></script>';
\t\t\t\t\t\t\$ret .= '<pre class=\"prettyprint\">'.\$data.'</pre>';
\t\t\t\t\t} else {
\t\t\t\t\t\t\$ret .= '<pre class=\"no-prettify\">'.\$data.'</pre>';
\t\t\t\t\t}

\t\t\t\t} 
\t\t\t\t// elseif (\$preview_mode == 'viewerjs') {
\t\t\t\t// \tif(\$ftp){
\t\t\t\t// \t\t\$ret = '<iframe id=\"viewer\" src=\"'.\$selected_file.'\" allowfullscreen=\"\" webkitallowfullscreen=\"\" class=\"viewer-iframe\"></iframe>';
\t\t\t\t// \t}else{
\t\t\t\t// \t\t\$ret = '<iframe id=\"viewer\" src=\"js/ViewerJS/#../../'.\$selected_file.'\" allowfullscreen=\"\" webkitallowfullscreen=\"\" class=\"viewer-iframe\"></iframe>';
\t\t\t\t// \t}

\t\t\t\t// } 
\t\t\t\telseif (\$preview_mode == 'google' || \$preview_mode == 'viewerjs') {
\t\t\t\t\tif(\$ftp){
\t\t\t\t\t\t\$url_file = \$selected_file;
\t\t\t\t\t}else{
\t\t\t\t\t\t\$url_file = \$base_url . \$upload_dir . str_replace(\$current_path, '', \$_GET[\"file\"]);
\t\t\t\t\t}

\t\t\t\t\t\$googledoc_url = urlencode(\$url_file);
\t\t\t\t\t\$googledoc_html = \"<iframe src=\\\"http://docs.google.com/viewer?url=\" . \$url_file . \"&embedded=true\\\" class=\\\"google-iframe\\\"></iframe>\";
\t\t\t\t\t\$ret = \$googledoc_html;
\t\t\t\t}
\t\t\t} else {
\t\t\t\t\$data = stripslashes(htmlspecialchars(file_get_contents(\$selected_file)));
\t\t\t\t\$ret = '<textarea id=\"textfile_edit_area\" style=\"width:100%;height:300px;\">'.\$data.'</textarea>';
\t\t\t}

\t\t\tresponse(\$ret)->send();
\t\t\texit;

\t\t\tbreak;
\t\tdefault:
\t\t\tresponse(trans('no action passed').AddErrorLocation())->send();
\t\t\texit;
\t}
} else {
\tresponse(trans('no action passed').AddErrorLocation())->send();
\texit;
}
?>";
        
        $__internal_fdd4c77d2f83d36155d59f7eb44282e617e5dbfaee086aa2b35cf3b3e655dab8->leave($__internal_fdd4c77d2f83d36155d59f7eb44282e617e5dbfaee086aa2b35cf3b3e655dab8_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/ajax_calls.php";
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

require_once 'include/utils.php';

if (\$_SESSION['RF'][\"verify\"] != \"RESPONSIVEfilemanager\")
{
\tresponse(trans('forbiden').AddErrorLocation())->send();
\texit;
}
\$languages = include 'lang/languages.php';


if (isset(\$_SESSION['RF']['language']) && file_exists(__DIR__.'/lang/' . basename(\$_SESSION['RF']['language']) . '.php'))
{
\tif(array_key_exists(\$_SESSION['RF']['language'],\$languages)){
\t\tinclude 'lang/' . basename(\$_SESSION['RF']['language']) . '.php';
\t}else{
\t\tresponse(trans('Lang_Not_Found').AddErrorLocation())->send();
\t\texit;
\t}
} else {
\tresponse(trans('Lang_Not_Found').AddErrorLocation())->send();
\texit;
}
\$ftp = ftp_con(\$config);

if(isset(\$_GET['action']))
{
\tswitch(\$_GET['action'])
\t{
\t\tcase 'new_file_form':
\t\t\techo trans('Filename') . ': <input type=\"text\" id=\"create_text_file_name\" style=\"height:30px\"> <select id=\"create_text_file_extension\" style=\"margin:0;width:100px;\">';
\t\t\tforeach(\$config['editable_text_file_exts'] as \$ext){
\t\t\t\techo '<option value=\".'.\$ext.'\">.'.\$ext.'</option>';
\t\t\t}
\t\t\techo '</select><br><hr><textarea id=\"textfile_create_area\" style=\"width:100%;height:150px;\"></textarea>';
\t\tbreak;
\t\tcase 'view':
\t\t\tif(isset(\$_GET['type']))
\t\t\t{
\t\t\t\t\$_SESSION['RF'][\"view_type\"] = \$_GET['type'];
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tresponse(trans('view type number missing').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\tbreak;
\t\tcase 'filter':
\t\t\tif (isset(\$_GET['type']))
\t\t\t{
\t\t\t\tif (isset(\$remember_text_filter) && \$remember_text_filter)
\t\t\t\t{
\t\t\t\t\t\$_SESSION['RF'][\"filter\"] = \$_GET['type'];
\t\t\t\t}
\t\t\t}
\t\t\telse {
\t\t\t\tresponse(trans('view type number missing').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\tbreak;
\t\tcase 'sort':
\t\t\tif (isset(\$_GET['sort_by']))
\t\t\t{
\t\t\t\t\$_SESSION['RF'][\"sort_by\"] = \$_GET['sort_by'];
\t\t\t}

\t\t\tif (isset(\$_GET['descending']))
\t\t\t{
\t\t\t\t\$_SESSION['RF'][\"descending\"] = \$_GET['descending'];
\t\t\t}
\t\t\tbreak;
\t\tcase 'image_size': // not used
\t\t\t\$pos = strpos(\$_POST['path'], \$upload_dir);
\t\t\tif (\$pos !== false)
\t\t\t{
\t\t\t\t\$info = getimagesize(substr_replace(\$_POST['path'], \$current_path, \$pos, strlen(\$upload_dir)));
\t\t\t\tresponse(\$info)->send();
\t\t\t\texit;
\t\t\t}
\t\t\tbreak;
\t\tcase 'save_img':
\t\t\t\$info = pathinfo(\$_POST['name']);

\t\t\tif (
\t\t\t\tstrpos(\$_POST['path'], '/') === 0
\t\t\t\t|| strpos(\$_POST['path'], '../') !== false
\t\t\t\t|| strpos(\$_POST['path'], './') === 0
\t\t\t\t|| (strpos(\$_POST['url'], 'http://s3.amazonaws.com/feather') !== 0
\t\t\t\t&& strpos(\$_POST['url'], 'https://s3.amazonaws.com/feather') !== 0)
\t\t\t\t|| \$_POST['name'] != fix_filename(\$_POST['name'], \$config)
\t\t\t\t|| ! in_array(strtolower(\$info['extension']), array( 'jpg', 'jpeg', 'png' ))
\t\t\t)
\t\t\t{
\t\t\t\tresponse(trans('wrong data').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\t\$image_data = get_file_by_url(\$_POST['url']);
\t\t\tif (\$image_data === false)
\t\t\t{
\t\t\t\tresponse(trans('Aviary_No_Save').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\tif (!checkresultingsize(strlen(\$image_data))) {
\t\t\t\tresponse(sprintf(trans('max_size_reached'),\$MaxSizeTotal).AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\tif(\$ftp){

\t\t\t\t\$temp = tempnam('/tmp','RF');
\t\t\t\tunlink(\$temp);
\t\t\t\t\$temp .=\".\".substr(strrchr(\$_POST['url'],'.'),1);
\t\t\t\tfile_put_contents(\$temp,\$image_data);

\t\t\t\t\$ftp->put(\$ftp_base_folder.\$upload_dir . \$_POST['path'] . \$_POST['name'], \$temp, FTP_BINARY);

\t\t\t\tcreate_img(\$temp,\$temp,122,91);
\t\t\t\t\$ftp->put(\$ftp_base_folder.\$ftp_thumbs_dir. \$_POST['path'] . \$_POST['name'], \$temp, FTP_BINARY);

\t\t\t\tunlink(\$temp);
\t\t\t}else{

\t\t\t\tfile_put_contents(\$current_path . \$_POST['path'] . \$_POST['name'],\$image_data);
\t\t\t\tcreate_img(\$current_path . \$_POST['path'] . \$_POST['name'], \$thumbs_base_path.\$_POST['path'].\$_POST['name'], 122, 91);
\t\t\t\t// TODO something with this function cause its blowing my mind
\t\t\t\tnew_thumbnails_creation(
\t\t\t\t\t\$current_path.\$_POST['path'],
\t\t\t\t\t\$current_path.\$_POST['path'].\$_POST['name'],
\t\t\t\t\t\$_POST['name'],
\t\t\t\t\t\$current_path,
\t\t\t\t\t\$relative_image_creation,
\t\t\t\t\t\$relative_path_from_current_pos,
\t\t\t\t\t\$relative_image_creation_name_to_prepend,
\t\t\t\t\t\$relative_image_creation_name_to_append,
\t\t\t\t\t\$relative_image_creation_width,
\t\t\t\t\t\$relative_image_creation_height,
\t\t\t\t\t\$relative_image_creation_option,
\t\t\t\t\t\$fixed_image_creation,
\t\t\t\t\t\$fixed_path_from_filemanager,
\t\t\t\t\t\$fixed_image_creation_name_to_prepend,
\t\t\t\t\t\$fixed_image_creation_to_append,
\t\t\t\t\t\$fixed_image_creation_width,
\t\t\t\t\t\$fixed_image_creation_height,
\t\t\t\t\t\$fixed_image_creation_option
\t\t\t\t);
\t\t\t}
\t\t\tbreak;
\t\tcase 'extract':
\t\t\tif (strpos(\$_POST['path'], '/') === 0 || strpos(\$_POST['path'], '../') !== false || strpos(\$_POST['path'], './') === 0)
\t\t\t{
\t\t\t\tresponse(trans('wrong path'.AddErrorLocation()))->send();
\t\t\t\texit;
\t\t\t}

\t\t\tif(\$ftp){
\t\t\t\t\$path = \$ftp_base_url.\$upload_dir . \$_POST['path'];
\t\t\t\t\$base_folder = \$ftp_base_url.\$upload_dir . fix_dirname(\$_POST['path']) . \"/\";
\t\t\t}else{
\t\t\t\t\$path = \$current_path . \$_POST['path'];
\t\t\t\t\$base_folder = \$current_path . fix_dirname(\$_POST['path']) . \"/\";
\t\t\t}

\t\t\t\$info = pathinfo(\$path);

\t\t\tif(\$ftp){
\t\t\t\t\$tempDir = tempdir();
\t\t\t\t\$temp = tempnam(\$tempDir,'RF');
\t\t\t\tunlink(\$temp);
\t\t\t\t\$temp .=\".\".\$info['extension'];
\t\t\t\t\$handle = fopen(\$temp, \"w\");
\t\t\t\tfwrite(\$handle, file_get_contents(\$path));
\t\t\t\tfclose(\$handle);
\t\t\t\t\$path = \$temp;
\t\t\t\t\$base_folder = \$tempDir.\"/\";
\t\t\t}

\t\t\t\$info = pathinfo(\$path);

\t\t\tswitch (\$info['extension'])
\t\t\t{
\t\t\t\tcase \"zip\":
\t\t\t\t\t\$zip = new ZipArchive;
\t\t\t\t\tif (\$zip->open(\$path) === true)
\t\t\t\t\t{
\t\t\t\t\t\t//get total size
\t\t\t\t\t\t\$sizeTotalFinal = 0;
\t\t\t\t\t\tfor (\$i = 0; \$i < \$zip->numFiles; \$i++)
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\$aStat = \$zip->statIndex(\$i);
\t\t\t\t\t\t\t\$sizeTotalFinal += \$aStat['size'];
\t\t\t\t\t\t}
\t\t\t\t\t\tif (!checkresultingsize(\$sizeTotalFinal)) {
\t\t\t\t\t\t\tresponse(sprintf(trans('max_size_reached'),\$MaxSizeTotal).AddErrorLocation())->send();
\t\t\t\t\t\t\texit;
\t\t\t\t\t\t}

\t\t\t\t\t\t//make all the folders
\t\t\t\t\t\tfor (\$i = 0; \$i < \$zip->numFiles; \$i++)
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\$OnlyFileName = \$zip->getNameIndex(\$i);
\t\t\t\t\t\t\t\$FullFileName = \$zip->statIndex(\$i);
\t\t\t\t\t\t\tif (substr(\$FullFileName['name'], -1, 1) == \"/\")
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tcreate_folder(\$base_folder . \$FullFileName['name']);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t//unzip into the folders
\t\t\t\t\t\tfor (\$i = 0; \$i < \$zip->numFiles; \$i++)
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\$OnlyFileName = \$zip->getNameIndex(\$i);
\t\t\t\t\t\t\t\$FullFileName = \$zip->statIndex(\$i);

\t\t\t\t\t\t\tif ( ! (substr(\$FullFileName['name'], -1, 1) == \"/\"))
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\$fileinfo = pathinfo(\$OnlyFileName);
\t\t\t\t\t\t\t\tif (in_array(strtolower(\$fileinfo['extension']), \$ext))
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tcopy('zip://' . \$path . '#' . \$OnlyFileName, \$base_folder . \$FullFileName['name']);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t\$zip->close();
\t\t\t\t\t} else {
\t\t\t\t\t\tresponse(trans('Zip_No_Extract').AddErrorLocation())->send();
\t\t\t\t\t\texit;
\t\t\t\t\t}

\t\t\t\t\tbreak;

\t\t\t\tcase \"gz\":
\t\t\t\t\t// No resulting size pre-control available
\t\t\t\t\t\$p = new PharData(\$path);
\t\t\t\t\t\$p->decompress(); // creates files.tar

\t\t\t\t\tbreak;

\t\t\t\tcase \"tar\":
\t\t\t\t\t// No resulting size pre-control available
\t\t\t\t\t// unarchive from the tar
\t\t\t\t\t\$phar = new PharData(\$path);
\t\t\t\t\t\$phar->decompressFiles();
\t\t\t\t\t\$files = array();
\t\t\t\t\tcheck_files_extensions_on_phar(\$phar, \$files, '', \$ext);
\t\t\t\t\t\$phar->extractTo(\$base_folder, \$files, true);

\t\t\t\t\tbreak;

\t\t\t\tdefault:
\t\t\t\t\tresponse(trans('Zip_Invalid').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t}

\t\t\tif(\$ftp){
\t\t\t\tunlink(\$path);
\t\t\t\t\$ftp->putAll(\$base_folder, \"/\".\$ftp_base_folder . \$upload_dir . fix_dirname(\$_POST['path']), FTP_BINARY);
\t\t\t\tdeleteDir(\$base_folder);
\t\t\t}


\t\t\tbreak;
\t\tcase 'media_preview':
\t\t\tif(\$ftp){
\t\t\t\t\$preview_file = \$ftp_base_url.\$upload_dir . \$_GET['file'];
\t\t\t}else{
\t\t\t\t\$preview_file = \$current_path . \$_GET[\"file\"];
\t\t\t}
\t\t\t\$info = pathinfo(\$preview_file);
\t\t\tob_start();
\t\t\t?>
\t\t\t<div id=\"jp_container_1\" class=\"jp-video \" style=\"margin:0 auto;\">
\t\t\t\t<div class=\"jp-type-single\">
\t\t\t\t<div id=\"jquery_jplayer_1\" class=\"jp-jplayer\"></div>
\t\t\t\t<div class=\"jp-gui\">
\t\t\t\t\t<div class=\"jp-video-play\">
\t\t\t\t\t<a href=\"javascript:;\" class=\"jp-video-play-icon\" tabindex=\"1\">play</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"jp-interface\">
\t\t\t\t\t<div class=\"jp-progress\">
\t\t\t\t\t\t<div class=\"jp-seek-bar\">
\t\t\t\t\t\t<div class=\"jp-play-bar\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"jp-current-time\"></div>
\t\t\t\t\t<div class=\"jp-duration\"></div>
\t\t\t\t\t<div class=\"jp-controls-holder\">
\t\t\t\t\t\t<ul class=\"jp-controls\">
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-play\" tabindex=\"1\">play</a></li>
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-pause\" tabindex=\"1\">pause</a></li>
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-stop\" tabindex=\"1\">stop</a></li>
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-mute\" tabindex=\"1\" title=\"mute\">mute</a></li>
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-unmute\" tabindex=\"1\" title=\"unmute\">unmute</a></li>
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-volume-max\" tabindex=\"1\" title=\"max volume\">max volume</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"jp-volume-bar\">
\t\t\t\t\t\t<div class=\"jp-volume-bar-value\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"jp-toggles\">
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-full-screen\" tabindex=\"1\" title=\"full screen\">full screen</a></li>
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-restore-screen\" tabindex=\"1\" title=\"restore screen\">restore screen</a></li>
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-repeat\" tabindex=\"1\" title=\"repeat\">repeat</a></li>
\t\t\t\t\t\t<li><a href=\"javascript:;\" class=\"jp-repeat-off\" tabindex=\"1\" title=\"repeat off\">repeat off</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"jp-title\" style=\"display:none;\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"jp-no-solution\">
\t\t\t\t\t<span>Update Required</span>
\t\t\t\t\tTo play the media you will need to either update your browser to a recent version or update your <a href=\"http://get.adobe.com/flashplayer/\" target=\"_blank\">Flash plugin</a>.
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<?php if(in_array(strtolower(\$info['extension']), \$ext_music)): ?>

\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\$(document).ready(function(){

\t\t\t\t\t\$(\"#jquery_jplayer_1\").jPlayer({
\t\t\t\t\t\tready: function () {
\t\t\t\t\t\t\$(this).jPlayer(\"setMedia\", {
\t\t\t\t\t\ttitle:\"<?php \$_GET['title']; ?>\",
\t\t\t\t\t\t\tmp3: \"<?php echo \$preview_file; ?>\",
\t\t\t\t\t\t\tm4a: \"<?php echo \$preview_file; ?>\",
\t\t\t\t\t\toga: \"<?php echo \$preview_file; ?>\",
\t\t\t\t\t\t\twav: \"<?php echo \$preview_file; ?>\"
\t\t\t\t\t\t});
\t\t\t\t\t\t},
\t\t\t\t\t\tswfPath: \"js\",
\t\t\t\t\tsolution:\"html,flash\",
\t\t\t\t\t\tsupplied: \"mp3, m4a, midi, mid, oga,webma, ogg, wav\",
\t\t\t\t\tsmoothPlayBar: true,
\t\t\t\t\tkeyEnabled: false
\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t</script>

\t\t\t<?php elseif(in_array(strtolower(\$info['extension']), \$ext_video)):\t?>

\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(document).ready(function(){

\t\t\t\t\$(\"#jquery_jplayer_1\").jPlayer({
\t\t\t\t\tready: function () {
\t\t\t\t\t\$(this).jPlayer(\"setMedia\", {
\t\t\t\t\t\ttitle:\"<?php \$_GET['title']; ?>\",
\t\t\t\t\t\tm4v: \"<?php echo \$preview_file; ?>\",
\t\t\t\t\t\togv: \"<?php echo \$preview_file; ?>\",
\t\t\t\t\t\tflv: \"<?php echo \$preview_file; ?>\"
\t\t\t\t\t});
\t\t\t\t\t},
\t\t\t\t\tswfPath: \"js\",
\t\t\t\t\tsolution:\"html,flash\",
\t\t\t\t\tsupplied: \"mp4, m4v, ogv, flv, webmv, webm\",
\t\t\t\t\tsmoothPlayBar: true,
\t\t\t\t\tkeyEnabled: false
\t\t\t\t});

\t\t\t\t});
\t\t\t</script>

\t\t\t<?php endif;

\t\t\t\$content = ob_get_clean();

\t\t\tresponse(\$content)->send();
\t\t\texit;

\t\t\tbreak;
\t\tcase 'copy_cut':
\t\t\tif (\$_POST['sub_action'] != 'copy' && \$_POST['sub_action'] != 'cut')
\t\t\t{
\t\t\t\tresponse(trans('wrong sub-action').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\tif (trim(\$_POST['path']) == '')
\t\t\t{
\t\t\t\tresponse(trans('no path').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\t\$msg_sub_action = (\$_POST['sub_action'] == 'copy' ? trans('Copy') : trans('Cut'));
\t\t\t\$path = \$current_path . \$_POST['path'];

\t\t\tif (is_dir(\$path))
\t\t\t{
\t\t\t\t// can't copy/cut dirs
\t\t\t\tif (\$copy_cut_dirs === false)
\t\t\t\t{
\t\t\t\t\tresponse(sprintf(trans('Copy_Cut_Not_Allowed'), \$msg_sub_action, trans('Folders')).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}

\t\t\t\tlist(\$sizeFolderToCopy,\$fileNum,\$foldersCount) = folder_info(\$path,false);
\t\t\t\t// size over limit
\t\t\t\tif (\$copy_cut_max_size !== false && is_int(\$copy_cut_max_size)) {
\t\t\t\t\tif ((\$copy_cut_max_size * 1024 * 1024) < \$sizeFolderToCopy) {
\t\t\t\t\t\tresponse(sprintf(trans('Copy_Cut_Size_Limit'), \$msg_sub_action, \$copy_cut_max_size).AddErrorLocation())->send();
\t\t\t\t\t\texit;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// file count over limit
\t\t\t\tif (\$copy_cut_max_count !== false && is_int(\$copy_cut_max_count))
\t\t\t\t{
\t\t\t\t\tif (\$copy_cut_max_count < \$fileNum)
\t\t\t\t\t{
\t\t\t\t\t\tresponse(sprintf(trans('Copy_Cut_Count_Limit'), \$msg_sub_action, \$copy_cut_max_count).AddErrorLocation())->send();
\t\t\t\t\t\texit;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (!checkresultingsize(\$sizeFolderToCopy)) {
\t\t\t\t\tresponse(sprintf(trans('max_size_reached'),\$MaxSizeTotal).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t} else {
\t\t\t\t// can't copy/cut files
\t\t\t\tif (\$copy_cut_files === false)
\t\t\t\t{
\t\t\t\t\tresponse(sprintf(trans('Copy_Cut_Not_Allowed'), \$msg_sub_action, trans('Files')).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t}

\t\t\t\$_SESSION['RF']['clipboard']['path'] = \$_POST['path'];
\t\t\t\$_SESSION['RF']['clipboard_action'] = \$_POST['sub_action'];
\t\t\tbreak;
\t\tcase 'clear_clipboard':
\t\t\t\$_SESSION['RF']['clipboard'] = null;
\t\t\t\$_SESSION['RF']['clipboard_action'] = null;
\t\t\tbreak;
\t\tcase 'chmod':
\t\t\tif(\$ftp){
\t\t\t\t\$path = \$ftp_base_url . \$upload_dir . \$_POST['path'];
\t\t\t\tif (
\t\t\t\t\t(\$_POST['folder']==1 && \$chmod_dirs === false)
\t\t\t\t\t|| (\$_POST['folder']==0 && \$chmod_files === false)
\t\t\t\t\t|| (is_function_callable(\"chmod\") === false) )
\t\t\t\t{
\t\t\t\t\tresponse(sprintf(trans('File_Permission_Not_Allowed'), (is_dir(\$path) ? trans('Folders') : trans('Files')), 403).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t\t\$info = \$_POST['permissions'];
\t\t\t}else{
\t\t\t\t\$path = \$current_path . \$_POST['path'];
\t\t\t\tif (
\t\t\t\t\t(is_dir(\$path) && \$chmod_dirs === false)
\t\t\t\t\t|| (is_file(\$path) && \$chmod_files === false)
\t\t\t\t\t|| (is_function_callable(\"chmod\") === false) )
\t\t\t\t{
\t\t\t\t\tresponse(sprintf(trans('File_Permission_Not_Allowed'), (is_dir(\$path) ? trans('Folders') : trans('Files')), 403).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}

\t\t\t\t\$perms = fileperms(\$path) & 0777;

\t\t\t    \$info = '-';

\t\t\t\t// Owner
\t\t\t\t\$info .= ((\$perms & 0x0100) ? 'r' : '-');
\t\t\t\t\$info .= ((\$perms & 0x0080) ? 'w' : '-');
\t\t\t\t\$info .= ((\$perms & 0x0040) ?
\t\t\t\t            ((\$perms & 0x0800) ? 's' : 'x' ) :
\t\t\t\t            ((\$perms & 0x0800) ? 'S' : '-'));

\t\t\t\t// Group
\t\t\t\t\$info .= ((\$perms & 0x0020) ? 'r' : '-');
\t\t\t\t\$info .= ((\$perms & 0x0010) ? 'w' : '-');
\t\t\t\t\$info .= ((\$perms & 0x0008) ?
\t\t\t\t            ((\$perms & 0x0400) ? 's' : 'x' ) :
\t\t\t\t            ((\$perms & 0x0400) ? 'S' : '-'));

\t\t\t\t// World
\t\t\t\t\$info .= ((\$perms & 0x0004) ? 'r' : '-');
\t\t\t\t\$info .= ((\$perms & 0x0002) ? 'w' : '-');
\t\t\t\t\$info .= ((\$perms & 0x0001) ?
\t\t\t\t            ((\$perms & 0x0200) ? 't' : 'x' ) :
\t\t\t\t            ((\$perms & 0x0200) ? 'T' : '-'));

\t\t\t}


\t\t\t\$ret = '<div id=\"files_permission_start\">
\t\t\t<form id=\"chmod_form\">
\t\t\t\t<table class=\"table file-perms-table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>r&nbsp;&nbsp;</td>
\t\t\t\t\t\t\t<td>w&nbsp;&nbsp;</td>
\t\t\t\t\t\t\t<td>x&nbsp;&nbsp;</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>'.trans('User').'</td>
\t\t\t\t\t\t\t<td><input id=\"u_4\" type=\"checkbox\" data-value=\"4\" data-group=\"user\" '.(substr(\$info, 1,1)=='r' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t\t<td><input id=\"u_2\" type=\"checkbox\" data-value=\"2\" data-group=\"user\" '.(substr(\$info, 2,1)=='w' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t\t<td><input id=\"u_1\" type=\"checkbox\" data-value=\"1\" data-group=\"user\" '.(substr(\$info, 3,1)=='x' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>'.trans('Group').'</td>
\t\t\t\t\t\t\t<td><input id=\"g_4\" type=\"checkbox\" data-value=\"4\" data-group=\"group\" '.(substr(\$info, 4,1)=='r' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t\t<td><input id=\"g_2\" type=\"checkbox\" data-value=\"2\" data-group=\"group\" '.(substr(\$info, 5,1)=='w' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t\t<td><input id=\"g_1\" type=\"checkbox\" data-value=\"1\" data-group=\"group\" '.(substr(\$info, 6,1)=='x' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>'.trans('All').'</td>
\t\t\t\t\t\t\t<td><input id=\"a_4\" type=\"checkbox\" data-value=\"4\" data-group=\"all\" '.(substr(\$info, 7,1)=='r' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t\t<td><input id=\"a_2\" type=\"checkbox\" data-value=\"2\" data-group=\"all\" '.(substr(\$info, 8,1)=='w' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t\t<td><input id=\"a_1\" type=\"checkbox\" data-value=\"1\" data-group=\"all\" '.(substr(\$info, 9,1)=='x' ? \" checked\" : \"\").'></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td colspan=\"3\"><input type=\"text\" class=\"input-block-level\" name=\"chmod_value\" id=\"chmod_value\" value=\"\" data-def-value=\"\"></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>';

\t\t\tif ((!\$ftp && is_dir(\$path)) )
\t\t\t{
\t\t\t\t\$ret .= '<div class=\"hero-unit\" style=\"padding:10px;\">'.trans('File_Permission_Recursive').'<br/><br/>
\t\t\t\t\t\t<ul class=\"unstyled\">
\t\t\t\t\t\t\t<li><label class=\"radio\"><input value=\"none\" name=\"apply_recursive\" type=\"radio\" checked> '.trans('No').'</label></li>
\t\t\t\t\t\t\t<li><label class=\"radio\"><input value=\"files\" name=\"apply_recursive\" type=\"radio\"> '.trans('Files').'</label></li>
\t\t\t\t\t\t\t<li><label class=\"radio\"><input value=\"folders\" name=\"apply_recursive\" type=\"radio\"> '.trans('Folders').'</label></li>
\t\t\t\t\t\t\t<li><label class=\"radio\"><input value=\"both\" name=\"apply_recursive\" type=\"radio\"> '.trans('Files').' & '.trans('Folders').'</label></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>';
\t\t\t}

\t\t\t\$ret .= '</form></div>';

\t\t\tresponse(\$ret)->send();
\t\t\texit;

\t\t\tbreak;
\t\tcase 'get_lang':
\t\t\tif ( ! file_exists('lang/languages.php'))
\t\t\t{
\t\t\t\tresponse(trans('Lang_Not_Found').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\t\$languages = include 'lang/languages.php';
\t\t\tif ( ! isset(\$languages) || ! is_array(\$languages))
\t\t\t{
\t\t\t\tresponse(trans('Lang_Not_Found').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\t\$curr = \$_SESSION['RF']['language'];

\t\t\t\$ret = '<select id=\"new_lang_select\">';
\t\t\tforeach (\$languages as \$code => \$name)
\t\t\t{
\t\t\t\t\$ret .= '<option value=\"' . \$code . '\"' . (\$code == \$curr ? ' selected' : '') . '>' . \$name . '</option>';
\t\t\t}
\t\t\t\$ret .= '</select>';

\t\t\tresponse(\$ret)->send();
\t\t\texit;

\t\t\tbreak;
\t\tcase 'change_lang':
\t\t\t\$choosen_lang = (!empty(\$_POST['choosen_lang']))? \$_POST['choosen_lang']:\"en_EN\";

\t\t\tif(array_key_exists(\$choosen_lang,\$languages)){
\t\t\t\tif ( ! file_exists('lang/' . \$choosen_lang . '.php'))
\t\t\t\t{
\t\t\t\t\tresponse(trans('Lang_Not_Found').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}else{
\t\t\t\t\t\$_SESSION['RF']['language'] = \$choosen_lang;
\t\t\t\t}
\t\t\t}

\t\t\tbreak;
\t\tcase 'get_file': // preview or edit
\t\t\t\$sub_action = \$_GET['sub_action'];
\t\t\t\$preview_mode = \$_GET[\"preview_mode\"];

\t\t\tif (\$sub_action != 'preview' && \$sub_action != 'edit')
\t\t\t{
\t\t\t\tresponse(trans('wrong action').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\tif(\$ftp){
\t\t\t\t\$selected_file = (\$sub_action == 'preview' ? \$ftp_base_url.\$upload_dir . \$_GET['file'] : \$ftp_base_url.\$upload_dir . \$_POST['path']);
\t\t\t}else{
\t\t\t\t\$selected_file = (\$sub_action == 'preview' ? \$current_path . \$_GET['file'] : \$current_path . \$_POST['path']);

\t\t\t\tif ( ! file_exists(\$selected_file))
\t\t\t\t{
\t\t\t\t\tresponse(trans('File_Not_Found').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t}

\t\t\t\$info = pathinfo(\$selected_file);

\t\t\tif (\$preview_mode == 'text')
\t\t\t{
\t\t\t\t\$is_allowed = (\$sub_action == 'preview' ? \$preview_text_files : \$edit_text_files);
\t\t\t\t\$allowed_file_exts = (\$sub_action == 'preview' ? \$previewable_text_file_exts : \$editable_text_file_exts);
\t\t\t} elseif (\$preview_mode == 'viewerjs') {
\t\t\t\t\$is_allowed = \$viewerjs_enabled;
\t\t\t\t\$allowed_file_exts = \$viewerjs_file_exts;
\t\t\t} elseif (\$preview_mode == 'google') {
\t\t\t\t\$is_allowed = \$googledoc_enabled;
\t\t\t\t\$allowed_file_exts = \$googledoc_file_exts;
\t\t\t}

\t\t\tif ( ! isset(\$allowed_file_exts) || ! is_array(\$allowed_file_exts))
\t\t\t{
\t\t\t\t\$allowed_file_exts = array();
\t\t\t}

\t\t\tif ( ! in_array(\$info['extension'], \$allowed_file_exts)
\t\t\t\t|| ! isset(\$is_allowed)
\t\t\t\t|| \$is_allowed === false
\t\t\t\t|| (!\$ftp && ! is_readable(\$selected_file))
\t\t\t)
\t\t\t{
\t\t\t\tresponse(sprintf(trans('File_Open_Edit_Not_Allowed'), (\$sub_action == 'preview' ? strtolower(trans('Open')) : strtolower(trans('Edit')))).AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\tif (\$sub_action == 'preview')
\t\t\t{
\t\t\t\tif (\$preview_mode == 'text')
\t\t\t\t{
\t\t\t\t\t// get and sanities
\t\t\t\t\t\$data = stripslashes(htmlspecialchars(file_get_contents(\$selected_file)));

\t\t\t\t\t\$ret = '';

\t\t\t\t\tif ( ! in_array(\$info['extension'],\$previewable_text_file_exts_no_prettify))
\t\t\t\t\t{
\t\t\t\t\t\t\$ret .= '<script src=\"https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang='.\$info['extension'].'&skin=sunburst\"></script>';
\t\t\t\t\t\t\$ret .= '<pre class=\"prettyprint\">'.\$data.'</pre>';
\t\t\t\t\t} else {
\t\t\t\t\t\t\$ret .= '<pre class=\"no-prettify\">'.\$data.'</pre>';
\t\t\t\t\t}

\t\t\t\t} 
\t\t\t\t// elseif (\$preview_mode == 'viewerjs') {
\t\t\t\t// \tif(\$ftp){
\t\t\t\t// \t\t\$ret = '<iframe id=\"viewer\" src=\"'.\$selected_file.'\" allowfullscreen=\"\" webkitallowfullscreen=\"\" class=\"viewer-iframe\"></iframe>';
\t\t\t\t// \t}else{
\t\t\t\t// \t\t\$ret = '<iframe id=\"viewer\" src=\"js/ViewerJS/#../../'.\$selected_file.'\" allowfullscreen=\"\" webkitallowfullscreen=\"\" class=\"viewer-iframe\"></iframe>';
\t\t\t\t// \t}

\t\t\t\t// } 
\t\t\t\telseif (\$preview_mode == 'google' || \$preview_mode == 'viewerjs') {
\t\t\t\t\tif(\$ftp){
\t\t\t\t\t\t\$url_file = \$selected_file;
\t\t\t\t\t}else{
\t\t\t\t\t\t\$url_file = \$base_url . \$upload_dir . str_replace(\$current_path, '', \$_GET[\"file\"]);
\t\t\t\t\t}

\t\t\t\t\t\$googledoc_url = urlencode(\$url_file);
\t\t\t\t\t\$googledoc_html = \"<iframe src=\\\"http://docs.google.com/viewer?url=\" . \$url_file . \"&embedded=true\\\" class=\\\"google-iframe\\\"></iframe>\";
\t\t\t\t\t\$ret = \$googledoc_html;
\t\t\t\t}
\t\t\t} else {
\t\t\t\t\$data = stripslashes(htmlspecialchars(file_get_contents(\$selected_file)));
\t\t\t\t\$ret = '<textarea id=\"textfile_edit_area\" style=\"width:100%;height:300px;\">'.\$data.'</textarea>';
\t\t\t}

\t\t\tresponse(\$ret)->send();
\t\t\texit;

\t\t\tbreak;
\t\tdefault:
\t\t\tresponse(trans('no action passed').AddErrorLocation())->send();
\t\t\texit;
\t}
} else {
\tresponse(trans('no action passed').AddErrorLocation())->send();
\texit;
}
?>", "@MwebAdmin/filemanager/ajax_calls.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/ajax_calls.php");
    }
}
