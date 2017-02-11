<?php

/* @MwebAdmin/filemanager/lang/fa.php */
class __TwigTemplate_ba9f55ff89ce1ef5b72f3d5c55b422b50307f853e1712381cddc760cf5d42aa1 extends Twig_Template
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
        $__internal_e2354f80f51b655eb30ce3f33372ca2f9c03e48fdf777c379e446b79d622a816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2354f80f51b655eb30ce3f33372ca2f9c03e48fdf777c379e446b79d622a816->enter($__internal_e2354f80f51b655eb30ce3f33372ca2f9c03e48fdf777c379e446b79d622a816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/fa.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'انتخاب',
\t'Erase' => 'حذف',
\t'Open' => 'بازگشایی',
\t'Confirm_del' => 'میخواهید این فایل را حذف کنید؟',
\t'All' => 'همه',
\t'Files' => 'فایلها',
\t'Images' => 'تصاویر',
\t'Archives' => 'آرشیو',
\t'Error_Upload' => 'فایل آپلود شده بیش از حداکثر اندازه مجاز است.',
\t'Error_extension' => 'نوع فایل مجاز نیست.',
\t'Upload_file' => 'آپلود',
\t'Filters' => 'فیلترها',
\t'Videos' => 'ویدئوها',
\t'Music' => 'موزیک',
\t'New_Folder' => 'فولدر جدید',
\t'Folder_Created' => 'پوشه به درستی ایجاد شد',
\t'Existing_Folder' => 'پوشه های موجود',
\t'Confirm_Folder_del' => 'آیا میخواهید این فولدر را با تمام محتوایش حذف کنید؟',
\t'Return_Files_List' => 'برگشت به لیست فایلها',
\t'Preview' => 'پیش نمایش',
\t'Download' => 'دانلود',
\t'Insert_Folder_Name' => 'نام فولدر:',
\t'Root' => 'شاخه اصلی',
\t'Rename' => 'تغییر نام',
\t'Back' => 'برگشت',
\t'View' => 'نمایش',
\t'View_list' => 'نمایش لیست',
\t'View_columns_list' => 'نمایش لیست ستونی',
\t'View_boxes' => 'نمایش باکسها',
\t'Toolbar' => 'نوار ابزار',
\t'Actions' => 'عملیات',
\t'Rename_existing_file' => 'فایل از قبل موجود است',
\t'Rename_existing_folder' => 'فولدر از قبل موجود است',
\t'Empty_name' => 'نام خالی است',
\t'Text_filter' => 'فیلتر نوشته',
\t'Swipe_help' => 'Swipe the name of file/folder to show options',
\t'Upload_base' => 'آپلودر اصلی',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'آپلودر جاوا (فایلهای حجیم)',
\t'Upload_java_help' => \"If the Java Applet doesn't load, 1. make sure you have Java installed, otherwise <a href='http://java.com/en/download/'>[download link]</a>   2. make sure nothing is blocked by your firewall\",
\t'Upload_base_help' => \"فایلها را از سیستم خود بکشید و اینجا رها کنید یا اینجا کلیک کنید و فایل انتخاب کنید و هنگامی که آپلود تمام شد، روی کلید \\\"برگشت به لیست فایلها\\\" کلیک کنید.\",
\t'Type_dir' => 'مسیر',
\t'Type' => 'نوع',
\t'Dimension' => 'بعد',
\t'Size' => 'اندازه',
\t'Date' => 'تاریخ',
\t'Filename' => 'نام فایل',
\t'Operations' => 'عملیات',
\t'Date_type' => 'y-m-d',
\t'OK' => 'باشه',
\t'Cancel' => 'لغو',
\t'Sorting' => 'مرتب سازی',
\t'Show_url' => 'نمایش آدرس',
\t'Extract' => 'استخراج در اینجا',
\t'File_info' => 'اطلاعات فایل',
\t'Edit_image' => 'ویرایش تصویر',
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
\t'Copy_Cut_Size_Limit' => 'The selected files/folders are too big to %s. Limit: %d MB/operation', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'You selected too many files/folders to %s. Limit: %d files/operation', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'You are not allowed to %s files.', // %s(1) = cut or copy, %s(2) = files or folders
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
\t'Lang_Not_Found' => 'Could not find language.',
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
        
        $__internal_e2354f80f51b655eb30ce3f33372ca2f9c03e48fdf777c379e446b79d622a816->leave($__internal_e2354f80f51b655eb30ce3f33372ca2f9c03e48fdf777c379e446b79d622a816_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/fa.php";
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

\t'Select' => 'انتخاب',
\t'Erase' => 'حذف',
\t'Open' => 'بازگشایی',
\t'Confirm_del' => 'میخواهید این فایل را حذف کنید؟',
\t'All' => 'همه',
\t'Files' => 'فایلها',
\t'Images' => 'تصاویر',
\t'Archives' => 'آرشیو',
\t'Error_Upload' => 'فایل آپلود شده بیش از حداکثر اندازه مجاز است.',
\t'Error_extension' => 'نوع فایل مجاز نیست.',
\t'Upload_file' => 'آپلود',
\t'Filters' => 'فیلترها',
\t'Videos' => 'ویدئوها',
\t'Music' => 'موزیک',
\t'New_Folder' => 'فولدر جدید',
\t'Folder_Created' => 'پوشه به درستی ایجاد شد',
\t'Existing_Folder' => 'پوشه های موجود',
\t'Confirm_Folder_del' => 'آیا میخواهید این فولدر را با تمام محتوایش حذف کنید؟',
\t'Return_Files_List' => 'برگشت به لیست فایلها',
\t'Preview' => 'پیش نمایش',
\t'Download' => 'دانلود',
\t'Insert_Folder_Name' => 'نام فولدر:',
\t'Root' => 'شاخه اصلی',
\t'Rename' => 'تغییر نام',
\t'Back' => 'برگشت',
\t'View' => 'نمایش',
\t'View_list' => 'نمایش لیست',
\t'View_columns_list' => 'نمایش لیست ستونی',
\t'View_boxes' => 'نمایش باکسها',
\t'Toolbar' => 'نوار ابزار',
\t'Actions' => 'عملیات',
\t'Rename_existing_file' => 'فایل از قبل موجود است',
\t'Rename_existing_folder' => 'فولدر از قبل موجود است',
\t'Empty_name' => 'نام خالی است',
\t'Text_filter' => 'فیلتر نوشته',
\t'Swipe_help' => 'Swipe the name of file/folder to show options',
\t'Upload_base' => 'آپلودر اصلی',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'آپلودر جاوا (فایلهای حجیم)',
\t'Upload_java_help' => \"If the Java Applet doesn't load, 1. make sure you have Java installed, otherwise <a href='http://java.com/en/download/'>[download link]</a>   2. make sure nothing is blocked by your firewall\",
\t'Upload_base_help' => \"فایلها را از سیستم خود بکشید و اینجا رها کنید یا اینجا کلیک کنید و فایل انتخاب کنید و هنگامی که آپلود تمام شد، روی کلید \\\"برگشت به لیست فایلها\\\" کلیک کنید.\",
\t'Type_dir' => 'مسیر',
\t'Type' => 'نوع',
\t'Dimension' => 'بعد',
\t'Size' => 'اندازه',
\t'Date' => 'تاریخ',
\t'Filename' => 'نام فایل',
\t'Operations' => 'عملیات',
\t'Date_type' => 'y-m-d',
\t'OK' => 'باشه',
\t'Cancel' => 'لغو',
\t'Sorting' => 'مرتب سازی',
\t'Show_url' => 'نمایش آدرس',
\t'Extract' => 'استخراج در اینجا',
\t'File_info' => 'اطلاعات فایل',
\t'Edit_image' => 'ویرایش تصویر',
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
\t'Copy_Cut_Size_Limit' => 'The selected files/folders are too big to %s. Limit: %d MB/operation', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'You selected too many files/folders to %s. Limit: %d files/operation', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'You are not allowed to %s files.', // %s(1) = cut or copy, %s(2) = files or folders
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
\t'Lang_Not_Found' => 'Could not find language.',
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
", "@MwebAdmin/filemanager/lang/fa.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/fa.php");
    }
}
