<?php

/* @MwebAdmin/filemanager/lang/mn_MN.php */
class __TwigTemplate_48fee99b3f99f3d9ca2465a1b49c1325a1285408bf69f3203f7684e44c1ef52e extends Twig_Template
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
        $__internal_9d84ee906faa8b1d9445b3f4ca9ae6f87207dd914c20bc2eaaf5aa15ccc79f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d84ee906faa8b1d9445b3f4ca9ae6f87207dd914c20bc2eaaf5aa15ccc79f32->enter($__internal_9d84ee906faa8b1d9445b3f4ca9ae6f87207dd914c20bc2eaaf5aa15ccc79f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/mn_MN.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Сонгох',
\t'Erase' => 'Устгах',
\t'Open' => 'Нээх',
\t'Confirm_del' => 'Та энэ файлыг устгахдаа итгэлтэй байна уу?',
\t'All' => 'Бүгд',
\t'Files' => 'Файлууд',
\t'Images' => 'Зурагнууд',
\t'Archives' => 'Архивлагдсан файлууд',
\t'Error_Upload' => 'Хуулсан файл зөвшөөрөгдөх хэмжээнээс их байна.',
\t'Error_extension' => 'Файлын өргөтгөх зөвшөөрөгдөөгүй.',
\t'Upload_file' => 'Хуулах',
\t'Filters' => 'Шүүлтүүрүүд',
\t'Videos' => 'Бичлэгнүүд',
\t'Music' => 'Дуунууд',
\t'New_Folder' => 'Шинэ хавтас',
\t'Folder_Created' => 'Хавтас амжилттай үүслээ',
\t'Existing_Folder' => 'Давхардсан хавтас',
\t'Confirm_Folder_del' => 'Хавтас болон доторх бүх файлуудыг устгахдаа итгэлтэй байна уу?',
\t'Return_Files_List' => 'Файлын жагсаалт руу буцах',
\t'Preview' => 'Урьдчилан харах',
\t'Download' => 'Татаж авах',
\t'Insert_Folder_Name' => 'Хавтасны нэрийг оруулна уу:',
\t'Root' => 'root',
\t'Rename' => 'Нэрлэх',
\t'Back' => 'буцах',
\t'View' => 'Үзэх',
\t'View_list' => 'Жагсаалтаар харах',
\t'View_columns_list' => 'Баганаар харах',
\t'View_boxes' => 'Хайрцгаар харах',
\t'Toolbar' => 'Товчилсон товчнууд',
\t'Actions' => 'Үйлдэл',
\t'Rename_existing_file' => 'Файл аль хэдийнэ үүссэн байна',
\t'Rename_existing_folder' => 'Хавтас аль хэдийнэ үүсэн байна',
\t'Empty_name' => 'Нэр хоосон байна',
\t'Text_filter' => 'текстэн шүүлтүүр',
\t'Swipe_help' => 'Файл/Хавтасны нэрийг товшоод тохиргоог харна уу',
\t'Upload_base' => 'Энгийнээр хуулах',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA-гаар хуулах (их хэмжээтэй файл)',
\t'Upload_java_help' => \"Хэрэв Java Applet уншихгүй бол 1. Java суусан эсэхийг шалгана уу, үгүй бол <a href='http://java.com/en/download/'>[эндээс татаж авна уу]</a>   2. Галт хана дээр хаалт хийсэн эсэхийг шалгана уу\",
\t'Upload_base_help' => \"Хуулах хэсэг дээр файлыг зөөж тавих болон дээр нь дарж хуулж болно (орчин үеийн хөтөч дээр). Хуулж дууссан бол 'Файлын жагсаалт руу буцах' товчин дээр дарна уу.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Төрөл',
\t'Dimension' => 'Харьцаа',
\t'Size' => 'Хэмжээ',
\t'Date' => 'Огноо',
\t'Filename' => 'Файлын нэр',
\t'Operations' => 'Үйлдэлүүд',
\t'Date_type' => 'y-m-d',
\t'OK' => 'ОК',
\t'Cancel' => 'Буцах',
\t'Sorting' => 'эрэмбэлэх',
\t'Show_url' => 'URL-г харах',
\t'Extract' => 'энд задла',
\t'File_info' => 'файлын мэдээлэл',
\t'Edit_image' => 'зураг засварлах',
\t'Duplicate' => 'Давхардуулах',
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
        
        $__internal_9d84ee906faa8b1d9445b3f4ca9ae6f87207dd914c20bc2eaaf5aa15ccc79f32->leave($__internal_9d84ee906faa8b1d9445b3f4ca9ae6f87207dd914c20bc2eaaf5aa15ccc79f32_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/mn_MN.php";
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

\t'Select' => 'Сонгох',
\t'Erase' => 'Устгах',
\t'Open' => 'Нээх',
\t'Confirm_del' => 'Та энэ файлыг устгахдаа итгэлтэй байна уу?',
\t'All' => 'Бүгд',
\t'Files' => 'Файлууд',
\t'Images' => 'Зурагнууд',
\t'Archives' => 'Архивлагдсан файлууд',
\t'Error_Upload' => 'Хуулсан файл зөвшөөрөгдөх хэмжээнээс их байна.',
\t'Error_extension' => 'Файлын өргөтгөх зөвшөөрөгдөөгүй.',
\t'Upload_file' => 'Хуулах',
\t'Filters' => 'Шүүлтүүрүүд',
\t'Videos' => 'Бичлэгнүүд',
\t'Music' => 'Дуунууд',
\t'New_Folder' => 'Шинэ хавтас',
\t'Folder_Created' => 'Хавтас амжилттай үүслээ',
\t'Existing_Folder' => 'Давхардсан хавтас',
\t'Confirm_Folder_del' => 'Хавтас болон доторх бүх файлуудыг устгахдаа итгэлтэй байна уу?',
\t'Return_Files_List' => 'Файлын жагсаалт руу буцах',
\t'Preview' => 'Урьдчилан харах',
\t'Download' => 'Татаж авах',
\t'Insert_Folder_Name' => 'Хавтасны нэрийг оруулна уу:',
\t'Root' => 'root',
\t'Rename' => 'Нэрлэх',
\t'Back' => 'буцах',
\t'View' => 'Үзэх',
\t'View_list' => 'Жагсаалтаар харах',
\t'View_columns_list' => 'Баганаар харах',
\t'View_boxes' => 'Хайрцгаар харах',
\t'Toolbar' => 'Товчилсон товчнууд',
\t'Actions' => 'Үйлдэл',
\t'Rename_existing_file' => 'Файл аль хэдийнэ үүссэн байна',
\t'Rename_existing_folder' => 'Хавтас аль хэдийнэ үүсэн байна',
\t'Empty_name' => 'Нэр хоосон байна',
\t'Text_filter' => 'текстэн шүүлтүүр',
\t'Swipe_help' => 'Файл/Хавтасны нэрийг товшоод тохиргоог харна уу',
\t'Upload_base' => 'Энгийнээр хуулах',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA-гаар хуулах (их хэмжээтэй файл)',
\t'Upload_java_help' => \"Хэрэв Java Applet уншихгүй бол 1. Java суусан эсэхийг шалгана уу, үгүй бол <a href='http://java.com/en/download/'>[эндээс татаж авна уу]</a>   2. Галт хана дээр хаалт хийсэн эсэхийг шалгана уу\",
\t'Upload_base_help' => \"Хуулах хэсэг дээр файлыг зөөж тавих болон дээр нь дарж хуулж болно (орчин үеийн хөтөч дээр). Хуулж дууссан бол 'Файлын жагсаалт руу буцах' товчин дээр дарна уу.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Төрөл',
\t'Dimension' => 'Харьцаа',
\t'Size' => 'Хэмжээ',
\t'Date' => 'Огноо',
\t'Filename' => 'Файлын нэр',
\t'Operations' => 'Үйлдэлүүд',
\t'Date_type' => 'y-m-d',
\t'OK' => 'ОК',
\t'Cancel' => 'Буцах',
\t'Sorting' => 'эрэмбэлэх',
\t'Show_url' => 'URL-г харах',
\t'Extract' => 'энд задла',
\t'File_info' => 'файлын мэдээлэл',
\t'Edit_image' => 'зураг засварлах',
\t'Duplicate' => 'Давхардуулах',
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
", "@MwebAdmin/filemanager/lang/mn_MN.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/mn_MN.php");
    }
}
