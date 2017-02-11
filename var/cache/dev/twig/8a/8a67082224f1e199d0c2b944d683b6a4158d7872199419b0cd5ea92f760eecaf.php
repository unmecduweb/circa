<?php

/* @MwebAdmin/filemanager/lang/en_EN.php */
class __TwigTemplate_af3d4241f2c794925d2c135423c70c5e6bbeb65ab33c9a0a0bf60fcdfd8f660a extends Twig_Template
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
        $__internal_b07bbbe62c0e88ab68d77c7246e88d0fa0d29040350fcc1901a70e5eaea89b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07bbbe62c0e88ab68d77c7246e88d0fa0d29040350fcc1901a70e5eaea89b14->enter($__internal_b07bbbe62c0e88ab68d77c7246e88d0fa0d29040350fcc1901a70e5eaea89b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/en_EN.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Select',
\t'Erase' => 'Erase',
\t'Open' => 'Open',
\t'Confirm_del' => 'Are you sure you want to delete this file?',
\t'All' => 'All',
\t'Files' => 'Files',
\t'Images' => 'Images',
\t'Archives' => 'Archives',
\t'Error_Upload' => 'The uploaded file exceeds the max size allowed.',
\t'Error_extension' => 'File extension is not allowed.',
\t'Upload_file' => 'Upload',
\t'Filters' => 'Filters',
\t'Videos' => 'Videos',
\t'Music' => 'Music',
\t'New_Folder' => 'New Folder',
\t'Folder_Created' => 'Folder correctly created',
\t'Existing_Folder' => 'Existing folder',
\t'Confirm_Folder_del' => 'Are you sure to delete the folder and all the elements in it?',
\t'Return_Files_List' => 'Return to files list',
\t'Preview' => 'Preview',
\t'Download' => 'Download',
\t'Insert_Folder_Name' => 'Insert folder name:',
\t'Root' => 'root',
\t'Rename' => 'Rename',
\t'Back' => 'back',
\t'View' => 'View',
\t'View_list' => 'List view',
\t'View_columns_list' => 'Columns list view',
\t'View_boxes' => 'Box view',
\t'Toolbar' => 'Toolbar',
\t'Actions' => 'Actions',
\t'Rename_existing_file' => 'The file is already existing',
\t'Rename_existing_folder' => 'The folder is already existing',
\t'Empty_name' => 'The name is empty',
\t'Text_filter' => 'text filter',
\t'Swipe_help' => 'Swipe the name of file/folder to show options',
\t'Upload_base' => 'Base upload',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA upload (big size files)',
\t'Upload_java_help' => \"If the Java Applet doesn't load, 1. make sure you have Java installed, otherwise <a href='http://java.com/en/download/'>[download link]</a>   2. make sure nothing is blocked by your firewall\",
\t'Upload_base_help' => \"Drag & Drop files or click in the area above (modern browsers) and select the file(s). When the upload is complete, click the 'Return to files list' button.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Type',
\t'Dimension' => 'Dimension',
\t'Size' => 'Size',
\t'Date' => 'Date',
\t'Filename' => 'Filename',
\t'Operations' => 'Operations',
\t'Date_type' => 'y-m-d',
\t'OK' => 'OK',
\t'Cancel' => 'Cancel',
\t'Sorting' => 'sorting',
\t'Show_url' => 'Show URL',
\t'Extract' => 'Extract here',
\t'File_info' => 'file info',
\t'Edit_image' => 'Edit image',
\t'Duplicate' => 'Duplicate',
\t'Folders' => 'Folders',
\t'Copy' => 'Copy',
\t'Cut' => 'Cut',
\t'Paste' => 'Paste',
\t'CB' => 'CB', // clipboard
\t'Paste_Here' => 'Paste to this directory',
\t'Paste_Confirm' => 'Are you sure you want to paste to this directory? This will overwrite existing files/folders if encountered any.',
\t'Paste_Failed' => 'Failed to paste file(s)',
\t'Clear_Clipboard' => 'Clear clipboard',
\t'Clear_Clipboard_Confirm' => 'Are you sure you want to clear the clipboard?',
\t'Files_ON_Clipboard' => 'There are files on the clipboard.',
\t'Copy_Cut_Size_Limit' => 'The selected files/folders are too big to %1\$s. Limit: %2\$d MB/operation', // %1\$s = cut or copy, %2\$d = max size
\t'Copy_Cut_Count_Limit' => 'You selected too many files/folders to %1\$s. Limit: %2\$d files/operation', // %1\$s = cut or copy, %2\$d = max count
\t'Copy_Cut_Not_Allowed' => 'You are not allowed to %1\$s %2\$s.', // %12\$s = cut or copy, %2\$s = files or folders
\t'Aviary_No_Save' => 'Could not save image',
\t'Zip_No_Extract' => 'Could not extract. File might be corrupt.',
\t'Zip_Invalid' => 'This extension is not supported. Valid: zip, gz, tar.',
\t'Dir_No_Write' => 'The directory you selected is not writable.',
\t'Function_Disabled' => 'The %s function has been disabled by the server.', // %s = cut or copy
\t'File_Permission' => 'File permission',
\t'File_Permission_Not_Allowed' => 'Changing %s permissions are not allowed.', // %s = files or folders
\t'File_Permission_Recursive' => 'Apply recursively?',
\t'File_Permission_Wrong_Mode' => \"The supplied permission mode is incorrect.\",
\t'User' => 'User',
\t'Group' => 'Group',
\t'Yes' => 'Yes',
\t'No' => 'No',
\t'Lang_Not_Found' => 'Could not find the language.',
\t'Lang_Change' => 'Change the language',
\t'File_Not_Found' => 'Could not find the file.',
\t'File_Open_Edit_Not_Allowed' => 'You are not allowed to %s this file.', // %s = open or edit
\t'Edit' => 'Edit',
\t'Edit_File' => \"Edit file's content\",
\t'File_Save_OK' => \"File successfully saved.\",
\t'File_Save_Error' => \"There was an error while saving the file.\",
\t'New_File' => 'New File',
\t'No_Extension' => 'You have to add a file extension.',
\t'Valid_Extensions' => 'Valid extensions: %s', // %s = txt,log etc.
\t'Upload_message' => \"Drop file here to upload\",

\t'SERVER ERROR' => \"SERVER ERROR\",
\t'forbiden' => \"Forbiden\",
\t'wrong path' => \"Wrong path\",
\t'wrong name' => \"Wrong name\",
\t'wrong extension' => \"Wrong extension\",
\t'wrong option' => \"Wrong option\",
\t'wrong data' => \"Wrong data\",
\t'wrong action' => \"Wrong action\",
\t'wrong sub-action' => \"Wrong sub-actio\",
\t'no action passed' => \"No action passed\",
\t'no path' => \"No path\",
\t'no file' => \"No file\",
\t'view type number missing' => \"View type number missing\",
\t'Not enought Memory' => \"Not enought Memory\",
\t'max_size_reached' => \"Your image folder has reach its maximale size of %d MB.\", //%d = max overall size
\t'B' => \"B\",
\t'KB' => \"KB\",
\t'MB' => \"MB\",
\t'GB' => \"GB\",
\t'TB' => \"TB\",
\t'total size' => \"Total size\",
);
";
        
        $__internal_b07bbbe62c0e88ab68d77c7246e88d0fa0d29040350fcc1901a70e5eaea89b14->leave($__internal_b07bbbe62c0e88ab68d77c7246e88d0fa0d29040350fcc1901a70e5eaea89b14_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/en_EN.php";
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

return array(

\t'Select' => 'Select',
\t'Erase' => 'Erase',
\t'Open' => 'Open',
\t'Confirm_del' => 'Are you sure you want to delete this file?',
\t'All' => 'All',
\t'Files' => 'Files',
\t'Images' => 'Images',
\t'Archives' => 'Archives',
\t'Error_Upload' => 'The uploaded file exceeds the max size allowed.',
\t'Error_extension' => 'File extension is not allowed.',
\t'Upload_file' => 'Upload',
\t'Filters' => 'Filters',
\t'Videos' => 'Videos',
\t'Music' => 'Music',
\t'New_Folder' => 'New Folder',
\t'Folder_Created' => 'Folder correctly created',
\t'Existing_Folder' => 'Existing folder',
\t'Confirm_Folder_del' => 'Are you sure to delete the folder and all the elements in it?',
\t'Return_Files_List' => 'Return to files list',
\t'Preview' => 'Preview',
\t'Download' => 'Download',
\t'Insert_Folder_Name' => 'Insert folder name:',
\t'Root' => 'root',
\t'Rename' => 'Rename',
\t'Back' => 'back',
\t'View' => 'View',
\t'View_list' => 'List view',
\t'View_columns_list' => 'Columns list view',
\t'View_boxes' => 'Box view',
\t'Toolbar' => 'Toolbar',
\t'Actions' => 'Actions',
\t'Rename_existing_file' => 'The file is already existing',
\t'Rename_existing_folder' => 'The folder is already existing',
\t'Empty_name' => 'The name is empty',
\t'Text_filter' => 'text filter',
\t'Swipe_help' => 'Swipe the name of file/folder to show options',
\t'Upload_base' => 'Base upload',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA upload (big size files)',
\t'Upload_java_help' => \"If the Java Applet doesn't load, 1. make sure you have Java installed, otherwise <a href='http://java.com/en/download/'>[download link]</a>   2. make sure nothing is blocked by your firewall\",
\t'Upload_base_help' => \"Drag & Drop files or click in the area above (modern browsers) and select the file(s). When the upload is complete, click the 'Return to files list' button.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Type',
\t'Dimension' => 'Dimension',
\t'Size' => 'Size',
\t'Date' => 'Date',
\t'Filename' => 'Filename',
\t'Operations' => 'Operations',
\t'Date_type' => 'y-m-d',
\t'OK' => 'OK',
\t'Cancel' => 'Cancel',
\t'Sorting' => 'sorting',
\t'Show_url' => 'Show URL',
\t'Extract' => 'Extract here',
\t'File_info' => 'file info',
\t'Edit_image' => 'Edit image',
\t'Duplicate' => 'Duplicate',
\t'Folders' => 'Folders',
\t'Copy' => 'Copy',
\t'Cut' => 'Cut',
\t'Paste' => 'Paste',
\t'CB' => 'CB', // clipboard
\t'Paste_Here' => 'Paste to this directory',
\t'Paste_Confirm' => 'Are you sure you want to paste to this directory? This will overwrite existing files/folders if encountered any.',
\t'Paste_Failed' => 'Failed to paste file(s)',
\t'Clear_Clipboard' => 'Clear clipboard',
\t'Clear_Clipboard_Confirm' => 'Are you sure you want to clear the clipboard?',
\t'Files_ON_Clipboard' => 'There are files on the clipboard.',
\t'Copy_Cut_Size_Limit' => 'The selected files/folders are too big to %1\$s. Limit: %2\$d MB/operation', // %1\$s = cut or copy, %2\$d = max size
\t'Copy_Cut_Count_Limit' => 'You selected too many files/folders to %1\$s. Limit: %2\$d files/operation', // %1\$s = cut or copy, %2\$d = max count
\t'Copy_Cut_Not_Allowed' => 'You are not allowed to %1\$s %2\$s.', // %12\$s = cut or copy, %2\$s = files or folders
\t'Aviary_No_Save' => 'Could not save image',
\t'Zip_No_Extract' => 'Could not extract. File might be corrupt.',
\t'Zip_Invalid' => 'This extension is not supported. Valid: zip, gz, tar.',
\t'Dir_No_Write' => 'The directory you selected is not writable.',
\t'Function_Disabled' => 'The %s function has been disabled by the server.', // %s = cut or copy
\t'File_Permission' => 'File permission',
\t'File_Permission_Not_Allowed' => 'Changing %s permissions are not allowed.', // %s = files or folders
\t'File_Permission_Recursive' => 'Apply recursively?',
\t'File_Permission_Wrong_Mode' => \"The supplied permission mode is incorrect.\",
\t'User' => 'User',
\t'Group' => 'Group',
\t'Yes' => 'Yes',
\t'No' => 'No',
\t'Lang_Not_Found' => 'Could not find the language.',
\t'Lang_Change' => 'Change the language',
\t'File_Not_Found' => 'Could not find the file.',
\t'File_Open_Edit_Not_Allowed' => 'You are not allowed to %s this file.', // %s = open or edit
\t'Edit' => 'Edit',
\t'Edit_File' => \"Edit file's content\",
\t'File_Save_OK' => \"File successfully saved.\",
\t'File_Save_Error' => \"There was an error while saving the file.\",
\t'New_File' => 'New File',
\t'No_Extension' => 'You have to add a file extension.',
\t'Valid_Extensions' => 'Valid extensions: %s', // %s = txt,log etc.
\t'Upload_message' => \"Drop file here to upload\",

\t'SERVER ERROR' => \"SERVER ERROR\",
\t'forbiden' => \"Forbiden\",
\t'wrong path' => \"Wrong path\",
\t'wrong name' => \"Wrong name\",
\t'wrong extension' => \"Wrong extension\",
\t'wrong option' => \"Wrong option\",
\t'wrong data' => \"Wrong data\",
\t'wrong action' => \"Wrong action\",
\t'wrong sub-action' => \"Wrong sub-actio\",
\t'no action passed' => \"No action passed\",
\t'no path' => \"No path\",
\t'no file' => \"No file\",
\t'view type number missing' => \"View type number missing\",
\t'Not enought Memory' => \"Not enought Memory\",
\t'max_size_reached' => \"Your image folder has reach its maximale size of %d MB.\", //%d = max overall size
\t'B' => \"B\",
\t'KB' => \"KB\",
\t'MB' => \"MB\",
\t'GB' => \"GB\",
\t'TB' => \"TB\",
\t'total size' => \"Total size\",
);
", "@MwebAdmin/filemanager/lang/en_EN.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/en_EN.php");
    }
}
