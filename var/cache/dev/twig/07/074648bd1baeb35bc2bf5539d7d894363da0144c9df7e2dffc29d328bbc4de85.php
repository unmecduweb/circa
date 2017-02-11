<?php

/* @MwebAdmin/filemanager/lang/az_AZ.php */
class __TwigTemplate_60550fcb4e0f43f38cf7c95b45309353918292bf6772c14217341ba8e64c1835 extends Twig_Template
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
        $__internal_97d38cdabb8316af6b2ce5667b82c087d684c1d979c7002ffa06697f5a9389b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d38cdabb8316af6b2ce5667b82c087d684c1d979c7002ffa06697f5a9389b4->enter($__internal_97d38cdabb8316af6b2ce5667b82c087d684c1d979c7002ffa06697f5a9389b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/az_AZ.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Seç',
\t'Erase' => 'Sil',
\t'Open' => 'Aç',
\t'Confirm_del' => 'Bu faylı silmek istədiyinizdə əminsinizmi?',
\t'All' => 'Hamısı',
\t'Files' => 'Fayllar',
\t'Images' => 'Şəkillər',
\t'Archives' => 'Arxivlər',
\t'Error_Upload' => 'Yükləmək istədiyiniz fayl maksimum limiti keçdi.',
\t'Error_extension' => 'Fayl uzantısı icazəsi yoxdur.',
\t'Upload_file' => 'Fayl Yüklə',
\t'Filters' => 'Filtrlər',
\t'Videos' => 'Videolar',
\t'Music' => 'Mahnılar',
\t'New_Folder' => 'Yeni Folder',
\t'Folder_Created' => 'Folder müvəffəqiyyətlə yaradıldı.',
\t'Existing_Folder' => 'Mövcud folder',
\t'Confirm_Folder_del' => 'Bu folderi və içindəkiləri silmək istədiyinizə əminsinizmi?',
\t'Return_Files_List' => 'Faylların siyahısına geri qayıt',
\t'Preview' => 'İlk baxış',
\t'Download' => 'Yüklə',
\t'Insert_Folder_Name' => 'Folder adı əlavə et:',
\t'Root' => 'kök',
\t'Rename' => 'Yenidən Adlandır',
\t'Back' => 'geri',
\t'View' => 'Görünüş',
\t'View_list' => 'List görünüşü',
\t'View_columns_list' => 'Sütunlu list görünüşü',
\t'View_boxes' => 'Qutu görünüşü',
\t'Toolbar' => 'Alətlər Paneli',
\t'Actions' => 'Fəaliyyətlər',
\t'Rename_existing_file' => 'Bu fayl var artıq',
\t'Rename_existing_folder' => 'Bu folder var artıq',
\t'Empty_name' => 'Ad sahəsi boşdur.',
\t'Text_filter' => 'filtrlə...',
\t'Swipe_help' => 'Variantları görmək üçün file/folder adına tıklayın',
\t'Upload_base' => 'Normal Yükləmə',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA Yükləmə (Böyük fayllar üçün)',
\t'Upload_java_help' => \"Əgər Java tətbiqi yüklənmədisə; 1- Kompüterinizdə Java yüklənmiş olduğundan əmin olun yada <a href='http://java.com/en/download/'>[Java'nı Buradan Yükləyin]</a> 2- Təhlükəsizlik divarının heç bir şeyə mane olmadığından əmin olun.\",
\t'Upload_base_help' => \"Faylları aşağıdakı sahəyə Gətir & Burax ve ya tıklayaraq açılan pəncərədən fayllarınızı seçin. Yükləmə başa çatdığında 'Return to files list' düyməsinə tıklayın.\",
\t'Type_dir' => 'Kataloq',
\t'Type' => 'Növ',
\t'Dimension' => 'Ölçü',
\t'Size' => 'Çəki',
\t'Date' => 'Tarix',
\t'Filename' => 'Fayl adı',
\t'Operations' => 'Əməliyyatlar',
\t'Date_type' => 'd-m-Y',
\t'OK' => 'Razıyam',
\t'Cancel' => 'Ləğv Et',
\t'Sorting' => 'sıralama',
\t'Show_url' => 'URL göstər',
\t'Extract' => 'bura çıxart',
\t'File_info' => 'fayl məlumatı',
\t'Edit_image' => 'şəkli redaktə et',
\t'Duplicate' => 'Dublikat',
\t'Folders' =>  'Folders',
\t'Copy' => 'Copy',
\t'Cut' => 'Cut',
\t'Paste' => 'Paste',
\t'CB' =>  'CB', // clipboard
\t'Paste_Here' => 'Paste to this directory',
\t'Paste_Confirm' => 'Are you sure you want to paste to this directory? This will overwrite existing files/folders if encountered any.',
\t'Paste_Failed' => 'Failed to paste file(s)',
\t'Clear_Clipboard' => 'Clear clipboard',
\t'Clear_Clipboard_Confirm' => 'Are you sure you want to clear the clipboard?',
\t'Files_ON_Clipboard' => 'There are files on the clipboard.',
\t'Copy_Cut_Size_Limit' => 'The selected files/folders are too big to %s. Limit: %d MB/operation', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'You selected too many files/folders to %s. Limit: %d files/operation', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'You are not allowed to %s files.', // %s(1) = cut or copy =>  %s(2) = files or folders
\t'Aviary_No_Save' =>  'Could not save image',
\t'Zip_No_Extract' =>  'Could not extract. File might be corrupt.',
\t'Zip_Invalid' =>  'This extension is not supported. Valid: zip, gz, tar.',
\t'Dir_No_Write' =>  'The directory you selected is not writable.',
\t'Function_Disabled' =>  'The %s function has been disabled by the server.', // %s = cut or copy
\t'File_Permission' =>  'File permission',
\t'File_Permission_Not_Allowed' =>  'Changing %s permissions are not allowed.', // %s = files or folders
\t'File_Permission_Recursive' =>  'Apply recursively?',
\t'File_Permission_Wrong_Mode' =>  \"The supplied permission mode is incorrect.\",
\t'User' =>  'User',
\t'Group' =>  'Group',
\t'Yes' =>  'Yes',
\t'No' =>  'No',
\t'Lang_Not_Found' =>  'Could not find language.',
\t'Lang_Change' =>  'Change the language',
\t'File_Not_Found' =>  'Could not find the file.',
\t'File_Open_Edit_Not_Allowed' =>  'You are not allowed to %s this file.', // %s = open or edit
\t'Edit' =>  'Edit',
\t'Edit_File' =>  \"Edit file's content\",
\t'File_Save_OK' =>  \"File successfully saved.\",
\t'File_Save_Error' =>  \"There was an error while saving the file.\",
\t'New_File' => 'New File',
\t'No_Extension' => 'You have to add a file extension.',
\t'Valid_Extensions' => 'Valid extensions: %s', // %s = txt => log etc.
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
        
        $__internal_97d38cdabb8316af6b2ce5667b82c087d684c1d979c7002ffa06697f5a9389b4->leave($__internal_97d38cdabb8316af6b2ce5667b82c087d684c1d979c7002ffa06697f5a9389b4_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/az_AZ.php";
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

\t'Select' => 'Seç',
\t'Erase' => 'Sil',
\t'Open' => 'Aç',
\t'Confirm_del' => 'Bu faylı silmek istədiyinizdə əminsinizmi?',
\t'All' => 'Hamısı',
\t'Files' => 'Fayllar',
\t'Images' => 'Şəkillər',
\t'Archives' => 'Arxivlər',
\t'Error_Upload' => 'Yükləmək istədiyiniz fayl maksimum limiti keçdi.',
\t'Error_extension' => 'Fayl uzantısı icazəsi yoxdur.',
\t'Upload_file' => 'Fayl Yüklə',
\t'Filters' => 'Filtrlər',
\t'Videos' => 'Videolar',
\t'Music' => 'Mahnılar',
\t'New_Folder' => 'Yeni Folder',
\t'Folder_Created' => 'Folder müvəffəqiyyətlə yaradıldı.',
\t'Existing_Folder' => 'Mövcud folder',
\t'Confirm_Folder_del' => 'Bu folderi və içindəkiləri silmək istədiyinizə əminsinizmi?',
\t'Return_Files_List' => 'Faylların siyahısına geri qayıt',
\t'Preview' => 'İlk baxış',
\t'Download' => 'Yüklə',
\t'Insert_Folder_Name' => 'Folder adı əlavə et:',
\t'Root' => 'kök',
\t'Rename' => 'Yenidən Adlandır',
\t'Back' => 'geri',
\t'View' => 'Görünüş',
\t'View_list' => 'List görünüşü',
\t'View_columns_list' => 'Sütunlu list görünüşü',
\t'View_boxes' => 'Qutu görünüşü',
\t'Toolbar' => 'Alətlər Paneli',
\t'Actions' => 'Fəaliyyətlər',
\t'Rename_existing_file' => 'Bu fayl var artıq',
\t'Rename_existing_folder' => 'Bu folder var artıq',
\t'Empty_name' => 'Ad sahəsi boşdur.',
\t'Text_filter' => 'filtrlə...',
\t'Swipe_help' => 'Variantları görmək üçün file/folder adına tıklayın',
\t'Upload_base' => 'Normal Yükləmə',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA Yükləmə (Böyük fayllar üçün)',
\t'Upload_java_help' => \"Əgər Java tətbiqi yüklənmədisə; 1- Kompüterinizdə Java yüklənmiş olduğundan əmin olun yada <a href='http://java.com/en/download/'>[Java'nı Buradan Yükləyin]</a> 2- Təhlükəsizlik divarının heç bir şeyə mane olmadığından əmin olun.\",
\t'Upload_base_help' => \"Faylları aşağıdakı sahəyə Gətir & Burax ve ya tıklayaraq açılan pəncərədən fayllarınızı seçin. Yükləmə başa çatdığında 'Return to files list' düyməsinə tıklayın.\",
\t'Type_dir' => 'Kataloq',
\t'Type' => 'Növ',
\t'Dimension' => 'Ölçü',
\t'Size' => 'Çəki',
\t'Date' => 'Tarix',
\t'Filename' => 'Fayl adı',
\t'Operations' => 'Əməliyyatlar',
\t'Date_type' => 'd-m-Y',
\t'OK' => 'Razıyam',
\t'Cancel' => 'Ləğv Et',
\t'Sorting' => 'sıralama',
\t'Show_url' => 'URL göstər',
\t'Extract' => 'bura çıxart',
\t'File_info' => 'fayl məlumatı',
\t'Edit_image' => 'şəkli redaktə et',
\t'Duplicate' => 'Dublikat',
\t'Folders' =>  'Folders',
\t'Copy' => 'Copy',
\t'Cut' => 'Cut',
\t'Paste' => 'Paste',
\t'CB' =>  'CB', // clipboard
\t'Paste_Here' => 'Paste to this directory',
\t'Paste_Confirm' => 'Are you sure you want to paste to this directory? This will overwrite existing files/folders if encountered any.',
\t'Paste_Failed' => 'Failed to paste file(s)',
\t'Clear_Clipboard' => 'Clear clipboard',
\t'Clear_Clipboard_Confirm' => 'Are you sure you want to clear the clipboard?',
\t'Files_ON_Clipboard' => 'There are files on the clipboard.',
\t'Copy_Cut_Size_Limit' => 'The selected files/folders are too big to %s. Limit: %d MB/operation', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'You selected too many files/folders to %s. Limit: %d files/operation', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'You are not allowed to %s files.', // %s(1) = cut or copy =>  %s(2) = files or folders
\t'Aviary_No_Save' =>  'Could not save image',
\t'Zip_No_Extract' =>  'Could not extract. File might be corrupt.',
\t'Zip_Invalid' =>  'This extension is not supported. Valid: zip, gz, tar.',
\t'Dir_No_Write' =>  'The directory you selected is not writable.',
\t'Function_Disabled' =>  'The %s function has been disabled by the server.', // %s = cut or copy
\t'File_Permission' =>  'File permission',
\t'File_Permission_Not_Allowed' =>  'Changing %s permissions are not allowed.', // %s = files or folders
\t'File_Permission_Recursive' =>  'Apply recursively?',
\t'File_Permission_Wrong_Mode' =>  \"The supplied permission mode is incorrect.\",
\t'User' =>  'User',
\t'Group' =>  'Group',
\t'Yes' =>  'Yes',
\t'No' =>  'No',
\t'Lang_Not_Found' =>  'Could not find language.',
\t'Lang_Change' =>  'Change the language',
\t'File_Not_Found' =>  'Could not find the file.',
\t'File_Open_Edit_Not_Allowed' =>  'You are not allowed to %s this file.', // %s = open or edit
\t'Edit' =>  'Edit',
\t'Edit_File' =>  \"Edit file's content\",
\t'File_Save_OK' =>  \"File successfully saved.\",
\t'File_Save_Error' =>  \"There was an error while saving the file.\",
\t'New_File' => 'New File',
\t'No_Extension' => 'You have to add a file extension.',
\t'Valid_Extensions' => 'Valid extensions: %s', // %s = txt => log etc.
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
", "@MwebAdmin/filemanager/lang/az_AZ.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/az_AZ.php");
    }
}
