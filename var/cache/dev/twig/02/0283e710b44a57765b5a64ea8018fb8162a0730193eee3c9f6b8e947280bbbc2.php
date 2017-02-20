<?php

/* @MwebAdmin/filemanager/execute.php */
class __TwigTemplate_6b8b92d41e0feb9977389307def0dab8f2a91c790a3bf50104c07cd8306042f9 extends Twig_Template
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
        $__internal_71308c656780fd2637389b7b73b6f71fa3cf5d3770d144f08f0167a06fb562d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71308c656780fd2637389b7b73b6f71fa3cf5d3770d144f08f0167a06fb562d4->enter($__internal_71308c656780fd2637389b7b73b6f71fa3cf5d3770d144f08f0167a06fb562d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/execute.php"));

        // line 1
        echo "<?php
\$config = include 'config/config.php';
//TODO switch to array
extract(\$config, EXTR_OVERWRITE);

include 'include/utils.php';

if (\$_SESSION['RF'][\"verify\"] != \"RESPONSIVEfilemanager\")
{
\tresponse(trans('forbiden').AddErrorLocation())->send();
\texit;
}

if (strpos(\$_POST['path'],'/')===0
\t|| strpos(\$_POST['path'],'../')!==FALSE
\t|| strpos(\$_POST['path'],'./')===0)
{
\tresponse(trans('wrong path'.AddErrorLocation()))->send();
\texit;
}

if (isset(\$_SESSION['RF']['language']) && file_exists('lang/' . basename(\$_SESSION['RF']['language']) . '.php'))
{
\t\$languages = include 'lang/languages.php';
\tif(array_key_exists(\$_SESSION['RF']['language'],\$languages)){
\t\tinclude 'lang/' . basename(\$_SESSION['RF']['language']) . '.php';
\t}else{
                if(file_exists('lang/' .\$default_language. '.php')) {
                        include 'lang/' . \$default_language . '.php';
                }else {
                        response(trans('Lang_Not_Found') . AddErrorLocation())->send();
                        exit;
                }
\t}
}
else
{
        // Update by unmecduweb
//        die(\$default_language);
//        if(file_exists('lang/' .\$default_language. '.php')) {
                include 'lang/' . \$default_language . '.php';
//        }else {
//                response(trans('Lang_Not_Found') . AddErrorLocation())->send();
//                exit;
//        }
}

\$ftp = ftp_con(\$config);

\$base = \$current_path;
\$path = \$base.\$_POST['path'];
\$cycle = TRUE;
\$max_cycles = 50;
\$i = 0;
while(\$cycle && \$i<\$max_cycles)
{
\t\$i++;
\tif (\$path == \$base)  \$cycle=FALSE;

\tif (file_exists(\$path.\"config.php\"))
\t{
\t\trequire_once \$path.\"config.php\";
\t\t\$cycle = FALSE;
\t}
\t\$path = fix_dirname(\$path).\"/\";
}

\$path = \$current_path.\$_POST['path'];
\$path_thumb = \$thumbs_base_path.\$_POST['path'];

if(\$ftp){
\t\$path = \$ftp_base_folder.\$upload_dir.\$_POST['path'];
\t\$path_thumb = \$ftp_base_folder.\$ftp_thumbs_dir.\$_POST['path'];
}

if (isset(\$_POST['name']))
{
\t\$name = fix_filename(\$_POST['name'],\$config);
\tif (strpos(\$name,'../') !== FALSE)
\t{
\t\tresponse(trans('wrong name').AddErrorLocation())->send();
\t\texit;
\t}
}

\$info = pathinfo(\$path);
if (isset(\$info['extension']) && !(isset(\$_GET['action']) && \$_GET['action']=='delete_folder') && !in_array(strtolower(\$info['extension']), \$ext) && \$_GET['action'] != 'create_file')
{
\tresponse(trans('wrong extension').AddErrorLocation())->send();
\texit;
}

if (isset(\$_GET['action']))
{
\tswitch(\$_GET['action'])
\t{
\t\tcase 'delete_file':
\t\t\tif (\$delete_files){
\t\t\t\tif(\$ftp){
\t\t\t\t\ttry{
\t\t\t\t\t\t\$ftp->delete(\"/\".\$path);
\t\t\t\t\t\t@\$ftp->delete(\"/\".\$path_thumb);
\t\t\t\t\t}catch(FtpClient\\FtpException \$e){
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t}else{

\t\t\t\t\tunlink(\$path);
\t\t\t\t\tif (file_exists(\$path_thumb)){
\t\t\t\t\t\tunlink(\$path_thumb);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t\$info=pathinfo(\$path);
\t\t\t\tif (!\$ftp && \$relative_image_creation){
\t\t\t\t\tforeach(\$relative_path_from_current_pos as \$k=>\$path)
\t\t\t\t\t{
\t\t\t\t\t\tif (\$path!=\"\" && \$path[strlen(\$path)-1]!=\"/\") \$path.=\"/\";

\t\t\t\t\t\tif (file_exists(\$info['dirname'].\"/\".\$path.\$relative_image_creation_name_to_prepend[\$k].\$info['filename'].\$relative_image_creation_name_to_append[\$k].\".\".\$info['extension']))
\t\t\t\t\t\t{
\t\t\t\t\t\t\tunlink(\$info['dirname'].\"/\".\$path.\$relative_image_creation_name_to_prepend[\$k].\$info['filename'].\$relative_image_creation_name_to_append[\$k].\".\".\$info['extension']);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (!\$ftp && \$fixed_image_creation)
\t\t\t\t{
\t\t\t\t\tforeach(\$fixed_path_from_filemanager as \$k=>\$path)
\t\t\t\t\t{
\t\t\t\t\t\tif (\$path!=\"\" && \$path[strlen(\$path)-1] != \"/\") \$path.=\"/\";

\t\t\t\t\t\t\$base_dir=\$path.substr_replace(\$info['dirname'].\"/\", '', 0, strlen(\$current_path));
\t\t\t\t\t\tif (file_exists(\$base_dir.\$fixed_image_creation_name_to_prepend[\$k].\$info['filename'].\$fixed_image_creation_to_append[\$k].\".\".\$info['extension']))
\t\t\t\t\t\t{
\t\t\t\t\t\t\tunlink(\$base_dir.\$fixed_image_creation_name_to_prepend[\$k].\$info['filename'].\$fixed_image_creation_to_append[\$k].\".\".\$info['extension']);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tbreak;
\t\tcase 'delete_folder':
\t\t\tif (\$delete_folders){

\t\t\t\tif(\$ftp){
\t\t\t\t\tdeleteDir(\$path,\$ftp,\$config);
\t\t\t\t\tdeleteDir(\$path_thumb,\$ftp,\$config);
\t\t\t\t}else{
\t\t\t\t\tif (is_dir(\$path_thumb))
\t\t\t\t\t{
\t\t\t\t\t\tdeleteDir(\$path_thumb);
\t\t\t\t\t}

\t\t\t\t\tif (is_dir(\$path))
\t\t\t\t\t{
\t\t\t\t\t\tdeleteDir(\$path);
\t\t\t\t\t\tif (\$fixed_image_creation)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tforeach(\$fixed_path_from_filemanager as \$k=>\$paths){
\t\t\t\t\t\t\t\tif (\$paths!=\"\" && \$paths[strlen(\$paths)-1] != \"/\") \$paths.=\"/\";

\t\t\t\t\t\t\t\t\$base_dir=\$paths.substr_replace(\$path, '', 0, strlen(\$current_path));
\t\t\t\t\t\t\t\tif (is_dir(\$base_dir)) deleteDir(\$base_dir);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tbreak;
\t\tcase 'create_folder':
\t\t\tif (\$create_folders)
\t\t\t{

\t\t\t\t\$name = fix_filename(\$_POST['name'],\$config);
\t\t\t\t\$path .= \$name;
\t\t\t\t\$path_thumb .= \$name;
\t\t\t\tcreate_folder(fix_path(\$path,\$config),fix_path(\$path_thumb,\$config),\$ftp,\$config);
\t\t\t}
\t\t\tbreak;
\t\tcase 'rename_folder':
\t\t\tif (\$rename_folders){
\t\t\t\t\$name=fix_filename(\$name,\$config);
\t\t\t\t\$name=str_replace('.','',\$name);

\t\t\t\tif (!empty(\$name)){
\t\t\t\t\tif (!rename_folder(\$path,\$name,\$ftp,\$config))
\t\t\t\t\t{
\t\t\t\t\t\tresponse(trans('Rename_existing_folder').AddErrorLocation())->send();
\t\t\t\t\t\texit;
\t\t\t\t\t}
\t\t\t\t\trename_folder(\$path_thumb,\$name,\$ftp,\$config);
\t\t\t\t\tif (!\$ftp && \$fixed_image_creation){
\t\t\t\t\t\tforeach(\$fixed_path_from_filemanager as \$k=>\$paths){
\t\t\t\t\t\t\tif (\$paths!=\"\" && \$paths[strlen(\$paths)-1] != \"/\") \$paths.=\"/\";

\t\t\t\t\t\t\t\$base_dir=\$paths.substr_replace(\$path, '', 0, strlen(\$current_path));
\t\t\t\t\t\t\trename_folder(\$base_dir,\$name,\$ftp,\$config);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tresponse(trans('Empty_name').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t}
\t\t\tbreak;
\t\tcase 'create_file':
\t\t\tif (\$create_text_files === FALSE) {
\t\t\t\tresponse(sprintf(trans('File_Open_Edit_Not_Allowed'), strtolower(trans('Edit'))).AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\tif (!isset(\$editable_text_file_exts) || !is_array(\$editable_text_file_exts)){
\t\t\t\t\$editable_text_file_exts = array();
\t\t\t}

\t\t\t// check if user supplied extension
\t\t\tif (strpos(\$name, '.') === FALSE){
\t\t\t\tresponse(trans('No_Extension').' '.sprintf(trans('Valid_Extensions'), implode(', ', \$editable_text_file_exts)).AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\t// correct name
\t\t\t\$old_name = \$name;
\t\t\t\$name=fix_filename(\$name,\$config);
\t\t\tif (empty(\$name))
\t\t\t{
\t\t\t\tresponse(trans('Empty_name').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\t// check extension
\t\t\t\$parts = explode('.', \$name);
\t\t\tif (!in_array(end(\$parts), \$editable_text_file_exts)) {
\t\t\t\tresponse(trans('Error_extension').' '.sprintf(trans('Valid_Extensions'), implode(', ', \$editable_text_file_exts)), 400)->send();
\t\t\t\texit;
\t\t\t}

\t\t\t\$content = \$_POST['new_content'];

\t\t\tif(\$ftp){
\t\t\t\t\$tmp = time().\$name;
\t\t\t\tfile_put_contents(\$tmp, \$content);
\t\t\t\t\$ftp->put(\"/\".\$path.\$name, \$tmp, FTP_BINARY);
\t\t\t\tunlink(\$tmp);
\t\t\t\tresponse(trans('File_Save_OK'))->send();
\t\t\t}else{
\t\t\t\tif (!checkresultingsize(strlen(\$content))) {
\t\t\t\t\tresponse(sprintf(trans('max_size_reached'),\$MaxSizeTotal).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t\t// file already exists
\t\t\t\tif (file_exists(\$path.\$name)) {
\t\t\t\t\tresponse(trans('Rename_existing_file').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}

\t\t\t\tif (@file_put_contents(\$path.\$name, \$content) === FALSE) {
\t\t\t\t\tresponse(trans('File_Save_Error').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t} else {
\t\t\t\t\tif (is_function_callable('chmod') !== FALSE){
\t\t\t\t\t\tchmod(\$path.\$name, 0644);
\t\t\t\t\t}
\t\t\t\t\tresponse(trans('File_Save_OK'))->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t}

\t\t\tbreak;
\t\tcase 'rename_file':
\t\t\tif (\$rename_files){
\t\t\t\t\$name=fix_filename(\$name,\$config);
\t\t\t\tif (!empty(\$name))
\t\t\t\t{
\t\t\t\t\tif (!rename_file(\$path,\$name,\$ftp,\$config))
\t\t\t\t\t{
\t\t\t\t\t\tresponse(trans('Rename_existing_file').AddErrorLocation())->send();
\t\t\t\t\t\texit;
\t\t\t\t\t}

\t\t\t\t\trename_file(\$path_thumb,\$name,\$ftp,\$config);

\t\t\t\t\tif (\$fixed_image_creation)
\t\t\t\t\t{
\t\t\t\t\t\t\$info=pathinfo(\$path);

\t\t\t\t\t\tforeach(\$fixed_path_from_filemanager as \$k=>\$paths)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tif (\$paths!=\"\" && \$paths[strlen(\$paths)-1] != \"/\") \$paths.=\"/\";

\t\t\t\t\t\t\t\$base_dir = \$paths.substr_replace(\$info['dirname'].\"/\", '', 0, strlen(\$current_path));
\t\t\t\t\t\t\tif (file_exists(\$base_dir.\$fixed_image_creation_name_to_prepend[\$k].\$info['filename'].\$fixed_image_creation_to_append[\$k].\".\".\$info['extension']))
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\trename_file(\$base_dir.\$fixed_image_creation_name_to_prepend[\$k].\$info['filename'].\$fixed_image_creation_to_append[\$k].\".\".\$info['extension'],\$fixed_image_creation_name_to_prepend[\$k].\$name.\$fixed_image_creation_to_append[\$k],\$ftp,\$config);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tresponse(trans('Empty_name').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t}
\t\t\tbreak;
\t\tcase 'duplicate_file':
\t\t\tif (\$duplicate_files)
\t\t\t{
\t\t\t\t\$name=fix_filename(\$name,\$config);
\t\t\t\tif (!empty(\$name))
\t\t\t\t{
\t\t\t\t\tif (!\$ftp && !checkresultingsize(filesize(\$path))) {
\t\t\t\t\t\tresponse(sprintf(trans('max_size_reached'),\$MaxSizeTotal).AddErrorLocation())->send();
\t\t\t\t\t\texit;
\t\t\t\t\t}
\t\t\t\t\tif (!duplicate_file(\$path,\$name,\$ftp,\$config))
\t\t\t\t\t{
\t\t\t\t\t\tresponse(trans('Rename_existing_file').AddErrorLocation())->send();
\t\t\t\t\t\texit;
\t\t\t\t\t}

\t\t\t\t\tduplicate_file(\$path_thumb,\$name,\$ftp,\$config);

\t\t\t\t\tif (!\$ftp && \$fixed_image_creation)
\t\t\t\t\t{
\t\t\t\t\t\t\$info=pathinfo(\$path);
\t\t\t\t\t\tforeach(\$fixed_path_from_filemanager as \$k=>\$paths)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tif (\$paths!=\"\" && \$paths[strlen(\$paths)-1] != \"/\") \$paths.= \"/\";

\t\t\t\t\t\t\t\$base_dir=\$paths.substr_replace(\$info['dirname'].\"/\", '', 0, strlen(\$current_path));

\t\t\t\t\t\t\tif (file_exists(\$base_dir.\$fixed_image_creation_name_to_prepend[\$k].\$info['filename'].\$fixed_image_creation_to_append[\$k].\".\".\$info['extension']))
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tduplicate_file(\$base_dir.\$fixed_image_creation_name_to_prepend[\$k].\$info['filename'].\$fixed_image_creation_to_append[\$k].\".\".\$info['extension'],\$fixed_image_creation_name_to_prepend[\$k].\$name.\$fixed_image_creation_to_append[\$k]);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tresponse(trans('Empty_name').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t}
\t\t\tbreak;

\t\tcase 'paste_clipboard':
\t\t\tif ( ! isset(\$_SESSION['RF']['clipboard_action'], \$_SESSION['RF']['clipboard']['path'])
\t\t\t\t|| \$_SESSION['RF']['clipboard_action'] == ''
\t\t\t\t|| \$_SESSION['RF']['clipboard']['path'] == '')
\t\t\t{
\t\t\t\tresponse()->send();
\t\t\t\texit;
\t\t\t}

\t\t\t\$action = \$_SESSION['RF']['clipboard_action'];
\t\t\t\$data = \$_SESSION['RF']['clipboard'];


\t\t\tif(\$ftp){
\t\t\t\tif(\$_POST['path']!=\"\"){
\t\t\t\t\t\$path.=DIRECTORY_SEPARATOR;
\t\t\t\t\t\$path_thumb.=DIRECTORY_SEPARATOR;
\t\t\t\t}
\t\t\t\t\$path_thumb .= basename(\$data['path']);
\t\t\t\t\$path .= basename(\$data['path']) ;
\t\t\t\t\$data['path_thumb'] = DIRECTORY_SEPARATOR.\$config['ftp_base_folder'].\$config['ftp_thumbs_dir'].\$data['path'];
\t\t\t\t\$data['path'] = DIRECTORY_SEPARATOR.\$config['ftp_base_folder'].\$config['upload_dir'].\$data['path'];
\t\t\t}else{
\t\t\t\t\$data['path_thumb'] = \$thumbs_base_path.\$data['path'];
\t\t\t\t\$data['path'] = \$current_path.\$data['path'];
\t\t\t}

\t\t\t\$pinfo = pathinfo(\$data['path']);

\t\t\t// user wants to paste to the same dir. nothing to do here...
\t\t\tif (\$pinfo['dirname'] == rtrim(\$path, DIRECTORY_SEPARATOR)) {
\t\t\t\tresponse()->send();
\t\t\t\texit;
\t\t\t}

\t\t\t// user wants to paste folder to it's own sub folder.. baaaah.
\t\t\tif (is_dir(\$data['path']) && strpos(\$path, \$data['path']) !== FALSE){
\t\t\t\tresponse()->send();
\t\t\t\texit;
\t\t\t}

\t\t\t// something terribly gone wrong
\t\t\tif (\$action != 'copy' && \$action != 'cut'){
\t\t\t\tresponse(trans('wrong action').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\tif(\$ftp){
\t\t\t\tif (\$action == 'copy')
\t\t\t\t{
\t\t\t\t\t\$tmp = time().basename(\$data['path']);
\t\t\t\t\t\$ftp->get(\$tmp, \$data['path'], FTP_BINARY);
\t\t\t\t\t\$ftp->put(DIRECTORY_SEPARATOR.\$path, \$tmp, FTP_BINARY);
\t\t\t\t\tunlink(\$tmp);

\t\t\t\t\tif(url_exists(\$data['path_thumb'])){
\t\t\t\t\t\t\$tmp = time().basename(\$data['path_thumb']);
\t\t\t\t\t\t@\$ftp->get(\$tmp, \$data['path_thumb'], FTP_BINARY);
\t\t\t\t\t\t@\$ftp->put(DIRECTORY_SEPARATOR.\$path_thumb, \$tmp, FTP_BINARY);
\t\t\t\t\t\tunlink(\$tmp);
\t\t\t\t\t}

\t\t\t\t} elseif (\$action == 'cut') {
\t\t\t\t\t\$ftp->rename(\$data['path'], DIRECTORY_SEPARATOR.\$path);
\t\t\t\t\tif(url_exists(\$data['path_thumb'])){
\t\t\t\t\t\t@\$ftp->rename(\$data['path_thumb'], DIRECTORY_SEPARATOR.\$path_thumb);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}else{
\t\t\t\t// check for writability
\t\t\t\tif (is_really_writable(\$path) === FALSE || is_really_writable(\$path_thumb) === FALSE){
\t\t\t\t\tresponse(trans('Dir_No_Write').'<br/>'.str_replace('../','',\$path).'<br/>'.str_replace('../','',\$path_thumb).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}

\t\t\t\t// check if server disables copy or rename
\t\t\t\tif (is_function_callable((\$action == 'copy' ? 'copy' : 'rename')) === FALSE){
\t\t\t\t\tresponse(sprintf(trans('Function_Disabled'), (\$action == 'copy' ? (trans('Copy')) : (trans('Cut')))).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t\tif (\$action == 'copy')
\t\t\t\t{
\t\t\t\t\tlist(\$sizeFolderToCopy,\$fileNum,\$foldersCount) = folder_info(\$path,false);
\t\t\t\t\tif (!checkresultingsize(\$sizeFolderToCopy)) {
\t\t\t\t\t\tresponse(sprintf(trans('max_size_reached'),\$MaxSizeTotal).AddErrorLocation())->send();
\t\t\t\t\t\texit;
\t\t\t\t\t}
\t\t\t\t\trcopy(\$data['path'], \$path);
\t\t\t\t\trcopy(\$data['path_thumb'], \$path_thumb);
\t\t\t\t} elseif (\$action == 'cut') {
\t\t\t\t\trrename(\$data['path'], \$path);
\t\t\t\t\trrename(\$data['path_thumb'], \$path_thumb);

\t\t\t\t\t// cleanup
\t\t\t\t\tif (is_dir(\$data['path']) === TRUE){
\t\t\t\t\t\trrename_after_cleaner(\$data['path']);
\t\t\t\t\t\trrename_after_cleaner(\$data['path_thumb']);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// cleanup
\t\t\t\$_SESSION['RF']['clipboard']['path'] = NULL;
\t\t\t\$_SESSION['RF']['clipboard_action'] = NULL;

\t\t\tbreak;
\t\tcase 'chmod':
\t\t\t\$mode = \$_POST['new_mode'];
\t\t\t\$rec_option = \$_POST['is_recursive'];
\t\t\t\$valid_options = array('none', 'files', 'folders', 'both');
\t\t\t\$chmod_perm = (\$_POST['folder'] ? \$chmod_dirs : \$chmod_files);

\t\t\t// check perm
\t\t\tif (\$chmod_perm === FALSE) {
\t\t\t\tresponse(sprintf(trans('File_Permission_Not_Allowed'), (is_dir(\$path) ? (trans('Folders')) : (trans('Files')) )).AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\t// check mode
\t\t\tif (!preg_match(\"/^[0-7]{3}\$/\", \$mode)){
\t\t\t\tresponse(trans('File_Permission_Wrong_Mode').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\t// check recursive option
\t\t\tif (!in_array(\$rec_option, \$valid_options)){
\t\t\t\tresponse(trans(\"wrong option\").AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\t// check if server disabled chmod
\t\t\tif (!\$ftp && is_function_callable('chmod') === FALSE){
\t\t\t\tresponse(sprintf(trans('Function_Disabled'), 'chmod').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\t\$mode = \"0\".\$mode;
\t\t\t\$mode = octdec(\$mode);
\t\t\tif(\$ftp){
\t\t\t\t\$ftp->chmod(\$mode, \"/\".\$path);
\t\t\t}else{
\t\t\t\trchmod(\$path, \$mode, \$rec_option);
\t\t\t}

\t\t\tbreak;
\t\tcase 'save_text_file':
\t\t\t\$content = \$_POST['new_content'];
\t\t\t// \$content = htmlspecialchars(\$content); not needed
\t\t\t// \$content = stripslashes(\$content);

\t\t\tif(\$ftp){
\t\t\t\t\$tmp = time();
\t\t\t\tfile_put_contents(\$tmp, \$content);
\t\t\t\ttry{
\t\t\t\t\t\$ftp->put(\"/\".\$path, \$tmp, FTP_BINARY);
\t\t\t\t}catch(FtpClient\\FtpException \$e){
\t\t\t\t\techo \$e->getMessage();
\t\t\t\t}
\t\t\t\tunlink(\$tmp);
\t\t\t\tresponse(trans('File_Save_OK'))->send();
\t\t\t}else{
\t\t\t\t// no file
\t\t\t\tif (!file_exists(\$path)) {
\t\t\t\t\tresponse(trans('File_Not_Found').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}

\t\t\t\t// not writable or edit not allowed
\t\t\t\tif (!is_writable(\$path) || \$edit_text_files === FALSE) {
\t\t\t\t\tresponse(sprintf(trans('File_Open_Edit_Not_Allowed'), strtolower(trans('Edit'))).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}

\t\t\t\tif (!checkresultingsize(strlen(\$content))) {
\t\t\t\t\tresponse(sprintf(trans('max_size_reached'),\$MaxSizeTotal).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t\tif (@file_put_contents(\$path, \$content) === FALSE) {
\t\t\t\t\tresponse(trans('File_Save_Error').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t} else {
\t\t\t\t\tresponse(trans('File_Save_OK'))->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t}

\t\t\tbreak;
\t\tdefault:
\t\t\tresponse(trans('wrong action').AddErrorLocation())->send();
\t\t\texit;
\t}
}
?>";
        
        $__internal_71308c656780fd2637389b7b73b6f71fa3cf5d3770d144f08f0167a06fb562d4->leave($__internal_71308c656780fd2637389b7b73b6f71fa3cf5d3770d144f08f0167a06fb562d4_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/execute.php";
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

if (\$_SESSION['RF'][\"verify\"] != \"RESPONSIVEfilemanager\")
{
\tresponse(trans('forbiden').AddErrorLocation())->send();
\texit;
}

if (strpos(\$_POST['path'],'/')===0
\t|| strpos(\$_POST['path'],'../')!==FALSE
\t|| strpos(\$_POST['path'],'./')===0)
{
\tresponse(trans('wrong path'.AddErrorLocation()))->send();
\texit;
}

if (isset(\$_SESSION['RF']['language']) && file_exists('lang/' . basename(\$_SESSION['RF']['language']) . '.php'))
{
\t\$languages = include 'lang/languages.php';
\tif(array_key_exists(\$_SESSION['RF']['language'],\$languages)){
\t\tinclude 'lang/' . basename(\$_SESSION['RF']['language']) . '.php';
\t}else{
                if(file_exists('lang/' .\$default_language. '.php')) {
                        include 'lang/' . \$default_language . '.php';
                }else {
                        response(trans('Lang_Not_Found') . AddErrorLocation())->send();
                        exit;
                }
\t}
}
else
{
        // Update by unmecduweb
//        die(\$default_language);
//        if(file_exists('lang/' .\$default_language. '.php')) {
                include 'lang/' . \$default_language . '.php';
//        }else {
//                response(trans('Lang_Not_Found') . AddErrorLocation())->send();
//                exit;
//        }
}

\$ftp = ftp_con(\$config);

\$base = \$current_path;
\$path = \$base.\$_POST['path'];
\$cycle = TRUE;
\$max_cycles = 50;
\$i = 0;
while(\$cycle && \$i<\$max_cycles)
{
\t\$i++;
\tif (\$path == \$base)  \$cycle=FALSE;

\tif (file_exists(\$path.\"config.php\"))
\t{
\t\trequire_once \$path.\"config.php\";
\t\t\$cycle = FALSE;
\t}
\t\$path = fix_dirname(\$path).\"/\";
}

\$path = \$current_path.\$_POST['path'];
\$path_thumb = \$thumbs_base_path.\$_POST['path'];

if(\$ftp){
\t\$path = \$ftp_base_folder.\$upload_dir.\$_POST['path'];
\t\$path_thumb = \$ftp_base_folder.\$ftp_thumbs_dir.\$_POST['path'];
}

if (isset(\$_POST['name']))
{
\t\$name = fix_filename(\$_POST['name'],\$config);
\tif (strpos(\$name,'../') !== FALSE)
\t{
\t\tresponse(trans('wrong name').AddErrorLocation())->send();
\t\texit;
\t}
}

\$info = pathinfo(\$path);
if (isset(\$info['extension']) && !(isset(\$_GET['action']) && \$_GET['action']=='delete_folder') && !in_array(strtolower(\$info['extension']), \$ext) && \$_GET['action'] != 'create_file')
{
\tresponse(trans('wrong extension').AddErrorLocation())->send();
\texit;
}

if (isset(\$_GET['action']))
{
\tswitch(\$_GET['action'])
\t{
\t\tcase 'delete_file':
\t\t\tif (\$delete_files){
\t\t\t\tif(\$ftp){
\t\t\t\t\ttry{
\t\t\t\t\t\t\$ftp->delete(\"/\".\$path);
\t\t\t\t\t\t@\$ftp->delete(\"/\".\$path_thumb);
\t\t\t\t\t}catch(FtpClient\\FtpException \$e){
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t}else{

\t\t\t\t\tunlink(\$path);
\t\t\t\t\tif (file_exists(\$path_thumb)){
\t\t\t\t\t\tunlink(\$path_thumb);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t\$info=pathinfo(\$path);
\t\t\t\tif (!\$ftp && \$relative_image_creation){
\t\t\t\t\tforeach(\$relative_path_from_current_pos as \$k=>\$path)
\t\t\t\t\t{
\t\t\t\t\t\tif (\$path!=\"\" && \$path[strlen(\$path)-1]!=\"/\") \$path.=\"/\";

\t\t\t\t\t\tif (file_exists(\$info['dirname'].\"/\".\$path.\$relative_image_creation_name_to_prepend[\$k].\$info['filename'].\$relative_image_creation_name_to_append[\$k].\".\".\$info['extension']))
\t\t\t\t\t\t{
\t\t\t\t\t\t\tunlink(\$info['dirname'].\"/\".\$path.\$relative_image_creation_name_to_prepend[\$k].\$info['filename'].\$relative_image_creation_name_to_append[\$k].\".\".\$info['extension']);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (!\$ftp && \$fixed_image_creation)
\t\t\t\t{
\t\t\t\t\tforeach(\$fixed_path_from_filemanager as \$k=>\$path)
\t\t\t\t\t{
\t\t\t\t\t\tif (\$path!=\"\" && \$path[strlen(\$path)-1] != \"/\") \$path.=\"/\";

\t\t\t\t\t\t\$base_dir=\$path.substr_replace(\$info['dirname'].\"/\", '', 0, strlen(\$current_path));
\t\t\t\t\t\tif (file_exists(\$base_dir.\$fixed_image_creation_name_to_prepend[\$k].\$info['filename'].\$fixed_image_creation_to_append[\$k].\".\".\$info['extension']))
\t\t\t\t\t\t{
\t\t\t\t\t\t\tunlink(\$base_dir.\$fixed_image_creation_name_to_prepend[\$k].\$info['filename'].\$fixed_image_creation_to_append[\$k].\".\".\$info['extension']);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tbreak;
\t\tcase 'delete_folder':
\t\t\tif (\$delete_folders){

\t\t\t\tif(\$ftp){
\t\t\t\t\tdeleteDir(\$path,\$ftp,\$config);
\t\t\t\t\tdeleteDir(\$path_thumb,\$ftp,\$config);
\t\t\t\t}else{
\t\t\t\t\tif (is_dir(\$path_thumb))
\t\t\t\t\t{
\t\t\t\t\t\tdeleteDir(\$path_thumb);
\t\t\t\t\t}

\t\t\t\t\tif (is_dir(\$path))
\t\t\t\t\t{
\t\t\t\t\t\tdeleteDir(\$path);
\t\t\t\t\t\tif (\$fixed_image_creation)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tforeach(\$fixed_path_from_filemanager as \$k=>\$paths){
\t\t\t\t\t\t\t\tif (\$paths!=\"\" && \$paths[strlen(\$paths)-1] != \"/\") \$paths.=\"/\";

\t\t\t\t\t\t\t\t\$base_dir=\$paths.substr_replace(\$path, '', 0, strlen(\$current_path));
\t\t\t\t\t\t\t\tif (is_dir(\$base_dir)) deleteDir(\$base_dir);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tbreak;
\t\tcase 'create_folder':
\t\t\tif (\$create_folders)
\t\t\t{

\t\t\t\t\$name = fix_filename(\$_POST['name'],\$config);
\t\t\t\t\$path .= \$name;
\t\t\t\t\$path_thumb .= \$name;
\t\t\t\tcreate_folder(fix_path(\$path,\$config),fix_path(\$path_thumb,\$config),\$ftp,\$config);
\t\t\t}
\t\t\tbreak;
\t\tcase 'rename_folder':
\t\t\tif (\$rename_folders){
\t\t\t\t\$name=fix_filename(\$name,\$config);
\t\t\t\t\$name=str_replace('.','',\$name);

\t\t\t\tif (!empty(\$name)){
\t\t\t\t\tif (!rename_folder(\$path,\$name,\$ftp,\$config))
\t\t\t\t\t{
\t\t\t\t\t\tresponse(trans('Rename_existing_folder').AddErrorLocation())->send();
\t\t\t\t\t\texit;
\t\t\t\t\t}
\t\t\t\t\trename_folder(\$path_thumb,\$name,\$ftp,\$config);
\t\t\t\t\tif (!\$ftp && \$fixed_image_creation){
\t\t\t\t\t\tforeach(\$fixed_path_from_filemanager as \$k=>\$paths){
\t\t\t\t\t\t\tif (\$paths!=\"\" && \$paths[strlen(\$paths)-1] != \"/\") \$paths.=\"/\";

\t\t\t\t\t\t\t\$base_dir=\$paths.substr_replace(\$path, '', 0, strlen(\$current_path));
\t\t\t\t\t\t\trename_folder(\$base_dir,\$name,\$ftp,\$config);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tresponse(trans('Empty_name').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t}
\t\t\tbreak;
\t\tcase 'create_file':
\t\t\tif (\$create_text_files === FALSE) {
\t\t\t\tresponse(sprintf(trans('File_Open_Edit_Not_Allowed'), strtolower(trans('Edit'))).AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\tif (!isset(\$editable_text_file_exts) || !is_array(\$editable_text_file_exts)){
\t\t\t\t\$editable_text_file_exts = array();
\t\t\t}

\t\t\t// check if user supplied extension
\t\t\tif (strpos(\$name, '.') === FALSE){
\t\t\t\tresponse(trans('No_Extension').' '.sprintf(trans('Valid_Extensions'), implode(', ', \$editable_text_file_exts)).AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\t// correct name
\t\t\t\$old_name = \$name;
\t\t\t\$name=fix_filename(\$name,\$config);
\t\t\tif (empty(\$name))
\t\t\t{
\t\t\t\tresponse(trans('Empty_name').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\t// check extension
\t\t\t\$parts = explode('.', \$name);
\t\t\tif (!in_array(end(\$parts), \$editable_text_file_exts)) {
\t\t\t\tresponse(trans('Error_extension').' '.sprintf(trans('Valid_Extensions'), implode(', ', \$editable_text_file_exts)), 400)->send();
\t\t\t\texit;
\t\t\t}

\t\t\t\$content = \$_POST['new_content'];

\t\t\tif(\$ftp){
\t\t\t\t\$tmp = time().\$name;
\t\t\t\tfile_put_contents(\$tmp, \$content);
\t\t\t\t\$ftp->put(\"/\".\$path.\$name, \$tmp, FTP_BINARY);
\t\t\t\tunlink(\$tmp);
\t\t\t\tresponse(trans('File_Save_OK'))->send();
\t\t\t}else{
\t\t\t\tif (!checkresultingsize(strlen(\$content))) {
\t\t\t\t\tresponse(sprintf(trans('max_size_reached'),\$MaxSizeTotal).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t\t// file already exists
\t\t\t\tif (file_exists(\$path.\$name)) {
\t\t\t\t\tresponse(trans('Rename_existing_file').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}

\t\t\t\tif (@file_put_contents(\$path.\$name, \$content) === FALSE) {
\t\t\t\t\tresponse(trans('File_Save_Error').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t} else {
\t\t\t\t\tif (is_function_callable('chmod') !== FALSE){
\t\t\t\t\t\tchmod(\$path.\$name, 0644);
\t\t\t\t\t}
\t\t\t\t\tresponse(trans('File_Save_OK'))->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t}

\t\t\tbreak;
\t\tcase 'rename_file':
\t\t\tif (\$rename_files){
\t\t\t\t\$name=fix_filename(\$name,\$config);
\t\t\t\tif (!empty(\$name))
\t\t\t\t{
\t\t\t\t\tif (!rename_file(\$path,\$name,\$ftp,\$config))
\t\t\t\t\t{
\t\t\t\t\t\tresponse(trans('Rename_existing_file').AddErrorLocation())->send();
\t\t\t\t\t\texit;
\t\t\t\t\t}

\t\t\t\t\trename_file(\$path_thumb,\$name,\$ftp,\$config);

\t\t\t\t\tif (\$fixed_image_creation)
\t\t\t\t\t{
\t\t\t\t\t\t\$info=pathinfo(\$path);

\t\t\t\t\t\tforeach(\$fixed_path_from_filemanager as \$k=>\$paths)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tif (\$paths!=\"\" && \$paths[strlen(\$paths)-1] != \"/\") \$paths.=\"/\";

\t\t\t\t\t\t\t\$base_dir = \$paths.substr_replace(\$info['dirname'].\"/\", '', 0, strlen(\$current_path));
\t\t\t\t\t\t\tif (file_exists(\$base_dir.\$fixed_image_creation_name_to_prepend[\$k].\$info['filename'].\$fixed_image_creation_to_append[\$k].\".\".\$info['extension']))
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\trename_file(\$base_dir.\$fixed_image_creation_name_to_prepend[\$k].\$info['filename'].\$fixed_image_creation_to_append[\$k].\".\".\$info['extension'],\$fixed_image_creation_name_to_prepend[\$k].\$name.\$fixed_image_creation_to_append[\$k],\$ftp,\$config);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tresponse(trans('Empty_name').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t}
\t\t\tbreak;
\t\tcase 'duplicate_file':
\t\t\tif (\$duplicate_files)
\t\t\t{
\t\t\t\t\$name=fix_filename(\$name,\$config);
\t\t\t\tif (!empty(\$name))
\t\t\t\t{
\t\t\t\t\tif (!\$ftp && !checkresultingsize(filesize(\$path))) {
\t\t\t\t\t\tresponse(sprintf(trans('max_size_reached'),\$MaxSizeTotal).AddErrorLocation())->send();
\t\t\t\t\t\texit;
\t\t\t\t\t}
\t\t\t\t\tif (!duplicate_file(\$path,\$name,\$ftp,\$config))
\t\t\t\t\t{
\t\t\t\t\t\tresponse(trans('Rename_existing_file').AddErrorLocation())->send();
\t\t\t\t\t\texit;
\t\t\t\t\t}

\t\t\t\t\tduplicate_file(\$path_thumb,\$name,\$ftp,\$config);

\t\t\t\t\tif (!\$ftp && \$fixed_image_creation)
\t\t\t\t\t{
\t\t\t\t\t\t\$info=pathinfo(\$path);
\t\t\t\t\t\tforeach(\$fixed_path_from_filemanager as \$k=>\$paths)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tif (\$paths!=\"\" && \$paths[strlen(\$paths)-1] != \"/\") \$paths.= \"/\";

\t\t\t\t\t\t\t\$base_dir=\$paths.substr_replace(\$info['dirname'].\"/\", '', 0, strlen(\$current_path));

\t\t\t\t\t\t\tif (file_exists(\$base_dir.\$fixed_image_creation_name_to_prepend[\$k].\$info['filename'].\$fixed_image_creation_to_append[\$k].\".\".\$info['extension']))
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tduplicate_file(\$base_dir.\$fixed_image_creation_name_to_prepend[\$k].\$info['filename'].\$fixed_image_creation_to_append[\$k].\".\".\$info['extension'],\$fixed_image_creation_name_to_prepend[\$k].\$name.\$fixed_image_creation_to_append[\$k]);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tresponse(trans('Empty_name').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t}
\t\t\tbreak;

\t\tcase 'paste_clipboard':
\t\t\tif ( ! isset(\$_SESSION['RF']['clipboard_action'], \$_SESSION['RF']['clipboard']['path'])
\t\t\t\t|| \$_SESSION['RF']['clipboard_action'] == ''
\t\t\t\t|| \$_SESSION['RF']['clipboard']['path'] == '')
\t\t\t{
\t\t\t\tresponse()->send();
\t\t\t\texit;
\t\t\t}

\t\t\t\$action = \$_SESSION['RF']['clipboard_action'];
\t\t\t\$data = \$_SESSION['RF']['clipboard'];


\t\t\tif(\$ftp){
\t\t\t\tif(\$_POST['path']!=\"\"){
\t\t\t\t\t\$path.=DIRECTORY_SEPARATOR;
\t\t\t\t\t\$path_thumb.=DIRECTORY_SEPARATOR;
\t\t\t\t}
\t\t\t\t\$path_thumb .= basename(\$data['path']);
\t\t\t\t\$path .= basename(\$data['path']) ;
\t\t\t\t\$data['path_thumb'] = DIRECTORY_SEPARATOR.\$config['ftp_base_folder'].\$config['ftp_thumbs_dir'].\$data['path'];
\t\t\t\t\$data['path'] = DIRECTORY_SEPARATOR.\$config['ftp_base_folder'].\$config['upload_dir'].\$data['path'];
\t\t\t}else{
\t\t\t\t\$data['path_thumb'] = \$thumbs_base_path.\$data['path'];
\t\t\t\t\$data['path'] = \$current_path.\$data['path'];
\t\t\t}

\t\t\t\$pinfo = pathinfo(\$data['path']);

\t\t\t// user wants to paste to the same dir. nothing to do here...
\t\t\tif (\$pinfo['dirname'] == rtrim(\$path, DIRECTORY_SEPARATOR)) {
\t\t\t\tresponse()->send();
\t\t\t\texit;
\t\t\t}

\t\t\t// user wants to paste folder to it's own sub folder.. baaaah.
\t\t\tif (is_dir(\$data['path']) && strpos(\$path, \$data['path']) !== FALSE){
\t\t\t\tresponse()->send();
\t\t\t\texit;
\t\t\t}

\t\t\t// something terribly gone wrong
\t\t\tif (\$action != 'copy' && \$action != 'cut'){
\t\t\t\tresponse(trans('wrong action').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\tif(\$ftp){
\t\t\t\tif (\$action == 'copy')
\t\t\t\t{
\t\t\t\t\t\$tmp = time().basename(\$data['path']);
\t\t\t\t\t\$ftp->get(\$tmp, \$data['path'], FTP_BINARY);
\t\t\t\t\t\$ftp->put(DIRECTORY_SEPARATOR.\$path, \$tmp, FTP_BINARY);
\t\t\t\t\tunlink(\$tmp);

\t\t\t\t\tif(url_exists(\$data['path_thumb'])){
\t\t\t\t\t\t\$tmp = time().basename(\$data['path_thumb']);
\t\t\t\t\t\t@\$ftp->get(\$tmp, \$data['path_thumb'], FTP_BINARY);
\t\t\t\t\t\t@\$ftp->put(DIRECTORY_SEPARATOR.\$path_thumb, \$tmp, FTP_BINARY);
\t\t\t\t\t\tunlink(\$tmp);
\t\t\t\t\t}

\t\t\t\t} elseif (\$action == 'cut') {
\t\t\t\t\t\$ftp->rename(\$data['path'], DIRECTORY_SEPARATOR.\$path);
\t\t\t\t\tif(url_exists(\$data['path_thumb'])){
\t\t\t\t\t\t@\$ftp->rename(\$data['path_thumb'], DIRECTORY_SEPARATOR.\$path_thumb);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}else{
\t\t\t\t// check for writability
\t\t\t\tif (is_really_writable(\$path) === FALSE || is_really_writable(\$path_thumb) === FALSE){
\t\t\t\t\tresponse(trans('Dir_No_Write').'<br/>'.str_replace('../','',\$path).'<br/>'.str_replace('../','',\$path_thumb).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}

\t\t\t\t// check if server disables copy or rename
\t\t\t\tif (is_function_callable((\$action == 'copy' ? 'copy' : 'rename')) === FALSE){
\t\t\t\t\tresponse(sprintf(trans('Function_Disabled'), (\$action == 'copy' ? (trans('Copy')) : (trans('Cut')))).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t\tif (\$action == 'copy')
\t\t\t\t{
\t\t\t\t\tlist(\$sizeFolderToCopy,\$fileNum,\$foldersCount) = folder_info(\$path,false);
\t\t\t\t\tif (!checkresultingsize(\$sizeFolderToCopy)) {
\t\t\t\t\t\tresponse(sprintf(trans('max_size_reached'),\$MaxSizeTotal).AddErrorLocation())->send();
\t\t\t\t\t\texit;
\t\t\t\t\t}
\t\t\t\t\trcopy(\$data['path'], \$path);
\t\t\t\t\trcopy(\$data['path_thumb'], \$path_thumb);
\t\t\t\t} elseif (\$action == 'cut') {
\t\t\t\t\trrename(\$data['path'], \$path);
\t\t\t\t\trrename(\$data['path_thumb'], \$path_thumb);

\t\t\t\t\t// cleanup
\t\t\t\t\tif (is_dir(\$data['path']) === TRUE){
\t\t\t\t\t\trrename_after_cleaner(\$data['path']);
\t\t\t\t\t\trrename_after_cleaner(\$data['path_thumb']);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// cleanup
\t\t\t\$_SESSION['RF']['clipboard']['path'] = NULL;
\t\t\t\$_SESSION['RF']['clipboard_action'] = NULL;

\t\t\tbreak;
\t\tcase 'chmod':
\t\t\t\$mode = \$_POST['new_mode'];
\t\t\t\$rec_option = \$_POST['is_recursive'];
\t\t\t\$valid_options = array('none', 'files', 'folders', 'both');
\t\t\t\$chmod_perm = (\$_POST['folder'] ? \$chmod_dirs : \$chmod_files);

\t\t\t// check perm
\t\t\tif (\$chmod_perm === FALSE) {
\t\t\t\tresponse(sprintf(trans('File_Permission_Not_Allowed'), (is_dir(\$path) ? (trans('Folders')) : (trans('Files')) )).AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\t// check mode
\t\t\tif (!preg_match(\"/^[0-7]{3}\$/\", \$mode)){
\t\t\t\tresponse(trans('File_Permission_Wrong_Mode').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\t// check recursive option
\t\t\tif (!in_array(\$rec_option, \$valid_options)){
\t\t\t\tresponse(trans(\"wrong option\").AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}
\t\t\t// check if server disabled chmod
\t\t\tif (!\$ftp && is_function_callable('chmod') === FALSE){
\t\t\t\tresponse(sprintf(trans('Function_Disabled'), 'chmod').AddErrorLocation())->send();
\t\t\t\texit;
\t\t\t}

\t\t\t\$mode = \"0\".\$mode;
\t\t\t\$mode = octdec(\$mode);
\t\t\tif(\$ftp){
\t\t\t\t\$ftp->chmod(\$mode, \"/\".\$path);
\t\t\t}else{
\t\t\t\trchmod(\$path, \$mode, \$rec_option);
\t\t\t}

\t\t\tbreak;
\t\tcase 'save_text_file':
\t\t\t\$content = \$_POST['new_content'];
\t\t\t// \$content = htmlspecialchars(\$content); not needed
\t\t\t// \$content = stripslashes(\$content);

\t\t\tif(\$ftp){
\t\t\t\t\$tmp = time();
\t\t\t\tfile_put_contents(\$tmp, \$content);
\t\t\t\ttry{
\t\t\t\t\t\$ftp->put(\"/\".\$path, \$tmp, FTP_BINARY);
\t\t\t\t}catch(FtpClient\\FtpException \$e){
\t\t\t\t\techo \$e->getMessage();
\t\t\t\t}
\t\t\t\tunlink(\$tmp);
\t\t\t\tresponse(trans('File_Save_OK'))->send();
\t\t\t}else{
\t\t\t\t// no file
\t\t\t\tif (!file_exists(\$path)) {
\t\t\t\t\tresponse(trans('File_Not_Found').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}

\t\t\t\t// not writable or edit not allowed
\t\t\t\tif (!is_writable(\$path) || \$edit_text_files === FALSE) {
\t\t\t\t\tresponse(sprintf(trans('File_Open_Edit_Not_Allowed'), strtolower(trans('Edit'))).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}

\t\t\t\tif (!checkresultingsize(strlen(\$content))) {
\t\t\t\t\tresponse(sprintf(trans('max_size_reached'),\$MaxSizeTotal).AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t\tif (@file_put_contents(\$path, \$content) === FALSE) {
\t\t\t\t\tresponse(trans('File_Save_Error').AddErrorLocation())->send();
\t\t\t\t\texit;
\t\t\t\t} else {
\t\t\t\t\tresponse(trans('File_Save_OK'))->send();
\t\t\t\t\texit;
\t\t\t\t}
\t\t\t}

\t\t\tbreak;
\t\tdefault:
\t\t\tresponse(trans('wrong action').AddErrorLocation())->send();
\t\t\texit;
\t}
}
?>", "@MwebAdmin/filemanager/execute.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/execute.php");
    }
}
