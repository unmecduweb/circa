<?php

/* @MwebAdmin/filemanager/lang/bg_BG.php */
class __TwigTemplate_d8f78a575eb1e37d55514a5bd1bfda9a8f11bd51e09e0024692bd7590fd78a59 extends Twig_Template
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
        $__internal_ce64d41026a2c17a96995adc31ddd6d7ca0942153479bca23abfefca076a3415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce64d41026a2c17a96995adc31ddd6d7ca0942153479bca23abfefca076a3415->enter($__internal_ce64d41026a2c17a96995adc31ddd6d7ca0942153479bca23abfefca076a3415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/bg_BG.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Избери',
\t'Erase' => 'Изтрий',
\t'Open' => 'Отваряне',
\t'Confirm_del' => 'Сигурни ли сте, че искате да изтриете този файл?',
\t'All' => 'Всичко',
\t'Files' => 'Файла',
\t'Images' => 'Изображения',
\t'Archives' => 'Архиви',
\t'Error_Upload' => 'Каченият файл надминава максимално разрешената големина.',
\t'Error_extension' => 'Това файлово разширение не е позволено.',
\t'Upload_file' => 'Качете файл',
\t'Filters' => 'Папка',
\t'Videos' => 'Видео',
\t'Music' => 'Музика',
\t'New_Folder' => 'Нова папка',
\t'Folder_Created' => 'Папката е правилно създадена',
\t'Existing_Folder' => 'Съществуваща папка',
\t'Confirm_Folder_del' => 'Сигурни ли сте, че искате да изтриете папката и всичко =>  което се съдържа с нея?',
\t'Return_Files_List' => 'Връщане към списъка с файлове',
\t'Preview' => 'Преглед',
\t'Download' => 'Свали',
\t'Insert_Folder_Name' => 'Въведете име на папката:',
\t'Root' => 'Основна',
\t'Rename' => 'Преименуване',
\t'Back' => 'Обратно',
\t'View' => 'Изглед',
\t'View_list' => 'Списък',
\t'View_columns_list' => 'Колони',
\t'View_boxes' => 'Кутии',
\t'Toolbar' => 'Лента с инструменти',
\t'Actions' => 'Действия',
\t'Rename_existing_file' => 'Файлът вече съществува',
\t'Rename_existing_folder' => 'Папката вече съществува',
\t'Empty_name' => 'Името на файла е празно',
\t'Text_filter' => 'текстов филтър',
\t'Swipe_help' => 'Плъзнете името на файла/папката за опции',
\t'Upload_base' => 'Базово качване',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA качване (за големи файлове)',
\t'Upload_java_help' => \"Ако Java аплета не се зарежда 1. убедете се, че имате инсталирана Java, в противен случай <a href='http://java.com/en/download/'>[линк за сваляне]</a> 2. убедете се, че нищо не се блокира от защитна стена\",
\t'Upload_base_help' => \"Спуснете файла/овете в горната област или кликнете на нея (за модерните браузъри) в противен случай изберете файла и кликнете бутона. Когато качването завърши, кликнете на горният бутон за връщане.\",
\t'Type_dir' => 'папка',
\t'Type' => 'Тип',
\t'Dimension' => 'Размер',
\t'Size' => 'Големина',
\t'Date' => 'Дата',
\t'Filename' => 'Име',
\t'Operations' => 'Операции',
\t'Date_type' => 'y-m-d',
\t'OK' => 'ОК',
\t'Cancel' => 'Отказ',
\t'Sorting' => 'сортиране',
\t'Show_url' => 'покажи URL',
\t'Extract' => 'разархивирай тук',
\t'File_info' => 'информация за файл',
\t'Edit_image' => 'редактирай изображение',
\t'Duplicate' => 'Дубликат',
\t'Folders' =>  'Папки',
\t'Copy' => 'Копиране',
\t'Cut' => 'Изрязване',
\t'Paste' => 'Поставяне',
\t'CB' =>  'CB', // clipboard
\t'Paste_Here' => 'Постави в тази папка',
\t'Paste_Confirm' => 'Сигурни ли сте, че искате да поставите в тази папка? Това може да презапише файловете в нея.',
\t'Paste_Failed' => 'Грешка при поставянето на файла/овете',
\t'Clear_Clipboard' => 'Изчисти клипборда',
\t'Clear_Clipboard_Confirm' => 'Сигурни ли сте, че искате да изчистите клипборда?',
\t'Files_ON_Clipboard' => 'Има файлове в клипборда.',
\t'Copy_Cut_Size_Limit' => 'Избраните файлове/папки са прекалено големи за %s. Лимит: %d MB/действие', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Избрали сте прекаленено много файлове/папки за %s. Лимит: %d файла/действие', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Нямате право за %s на файлове.', // %s(1) = cut or copy =>  %s(2) = files or folders
\t'Aviary_No_Save' =>  'Изображението не може да бъде записано',
\t'Zip_No_Extract' =>  'Невъзможно разархивиране. Файлът вероятно е повреден.',
\t'Zip_Invalid' =>  'Това разширене не се поддържа. Валидни: zip, gz, tar.',
\t'Dir_No_Write' =>  'Нямате права за запис в избраната папка.',
\t'Function_Disabled' =>  '%s-то е забранено на сървъра.', // %s = cut or copy
\t'File_Permission' =>  'Файлови права',
\t'File_Permission_Not_Allowed' =>  'Не е разрешена промяната на права за %s.', // %s = files or folders
\t'File_Permission_Recursive' =>  'Рекурсивно прилагане?',
\t'File_Permission_Wrong_Mode' =>  \"Зададените права са грешни.\",
\t'User' =>  'Потребител',
\t'Group' =>  'Група',
\t'Yes' =>  'Да',
\t'No' =>  'Не',
\t'Lang_Not_Found' =>  'Езикът не може да бъде намерен.',
\t'Lang_Change' =>  'Смени езика',
\t'File_Not_Found' =>  'Файлът не може да бъде намерен.',
\t'File_Open_Edit_Not_Allowed' =>  'Нямате разрешение за %s на този файл.', // %s = open or edit
\t'Edit' =>  'Редакция',
\t'Edit_File' =>  \"Редакция на съдържанието на файла\",
\t'File_Save_OK' =>  \"Файлът е успешно записан.\",
\t'File_Save_Error' =>  \"Възникна грешка при записването на файла.\",
\t'New_File' => 'Нов файл',
\t'No_Extension' => 'Трябва да зададете разширение на файла.',
\t'Valid_Extensions' => 'Валидни разширения: %s', // %s = txt => log etc.
\t'Upload_message' => \"Провлачете и спуснете файла тук за да го качите.\",

\t'SERVER ERROR' => \"СЪРВЪРНА ГРЕШКА\",
\t'forbiden' => \"Забранено\",
\t'wrong path' => \"Грешен път\",
\t'wrong name' => \"Грешно име\",
\t'wrong extension' => \"Грешно разширение\",
\t'wrong option' => \"Грешна опция\",
\t'wrong data' => \"Грешни данни\",
\t'wrong action' => \"Грешно действие\",
\t'wrong sub-action' => \"Грешно вторично действие\",
\t'no action passed' => \"Не е подадено действие\",
\t'no path' => \"Няма път\",
\t'no file' => \"Няма файл\",
\t'view type number missing' => \"Номерът на прегледа липсва\",
\t'Not enought Memory' => \"Недостатъчна памет\",
\t'max_size_reached' => \"Вашата папка за изображения достигна максимумът от %d MB.\", //%d = max overall size
\t'B' => \"B\",
\t'KB' => \"KB\",
\t'MB' => \"MB\",
\t'GB' => \"GB\",
\t'TB' => \"TB\",
\t'total size' => \"Общ размер\",
);
";
        
        $__internal_ce64d41026a2c17a96995adc31ddd6d7ca0942153479bca23abfefca076a3415->leave($__internal_ce64d41026a2c17a96995adc31ddd6d7ca0942153479bca23abfefca076a3415_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/bg_BG.php";
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

\t'Select' => 'Избери',
\t'Erase' => 'Изтрий',
\t'Open' => 'Отваряне',
\t'Confirm_del' => 'Сигурни ли сте, че искате да изтриете този файл?',
\t'All' => 'Всичко',
\t'Files' => 'Файла',
\t'Images' => 'Изображения',
\t'Archives' => 'Архиви',
\t'Error_Upload' => 'Каченият файл надминава максимално разрешената големина.',
\t'Error_extension' => 'Това файлово разширение не е позволено.',
\t'Upload_file' => 'Качете файл',
\t'Filters' => 'Папка',
\t'Videos' => 'Видео',
\t'Music' => 'Музика',
\t'New_Folder' => 'Нова папка',
\t'Folder_Created' => 'Папката е правилно създадена',
\t'Existing_Folder' => 'Съществуваща папка',
\t'Confirm_Folder_del' => 'Сигурни ли сте, че искате да изтриете папката и всичко =>  което се съдържа с нея?',
\t'Return_Files_List' => 'Връщане към списъка с файлове',
\t'Preview' => 'Преглед',
\t'Download' => 'Свали',
\t'Insert_Folder_Name' => 'Въведете име на папката:',
\t'Root' => 'Основна',
\t'Rename' => 'Преименуване',
\t'Back' => 'Обратно',
\t'View' => 'Изглед',
\t'View_list' => 'Списък',
\t'View_columns_list' => 'Колони',
\t'View_boxes' => 'Кутии',
\t'Toolbar' => 'Лента с инструменти',
\t'Actions' => 'Действия',
\t'Rename_existing_file' => 'Файлът вече съществува',
\t'Rename_existing_folder' => 'Папката вече съществува',
\t'Empty_name' => 'Името на файла е празно',
\t'Text_filter' => 'текстов филтър',
\t'Swipe_help' => 'Плъзнете името на файла/папката за опции',
\t'Upload_base' => 'Базово качване',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA качване (за големи файлове)',
\t'Upload_java_help' => \"Ако Java аплета не се зарежда 1. убедете се, че имате инсталирана Java, в противен случай <a href='http://java.com/en/download/'>[линк за сваляне]</a> 2. убедете се, че нищо не се блокира от защитна стена\",
\t'Upload_base_help' => \"Спуснете файла/овете в горната област или кликнете на нея (за модерните браузъри) в противен случай изберете файла и кликнете бутона. Когато качването завърши, кликнете на горният бутон за връщане.\",
\t'Type_dir' => 'папка',
\t'Type' => 'Тип',
\t'Dimension' => 'Размер',
\t'Size' => 'Големина',
\t'Date' => 'Дата',
\t'Filename' => 'Име',
\t'Operations' => 'Операции',
\t'Date_type' => 'y-m-d',
\t'OK' => 'ОК',
\t'Cancel' => 'Отказ',
\t'Sorting' => 'сортиране',
\t'Show_url' => 'покажи URL',
\t'Extract' => 'разархивирай тук',
\t'File_info' => 'информация за файл',
\t'Edit_image' => 'редактирай изображение',
\t'Duplicate' => 'Дубликат',
\t'Folders' =>  'Папки',
\t'Copy' => 'Копиране',
\t'Cut' => 'Изрязване',
\t'Paste' => 'Поставяне',
\t'CB' =>  'CB', // clipboard
\t'Paste_Here' => 'Постави в тази папка',
\t'Paste_Confirm' => 'Сигурни ли сте, че искате да поставите в тази папка? Това може да презапише файловете в нея.',
\t'Paste_Failed' => 'Грешка при поставянето на файла/овете',
\t'Clear_Clipboard' => 'Изчисти клипборда',
\t'Clear_Clipboard_Confirm' => 'Сигурни ли сте, че искате да изчистите клипборда?',
\t'Files_ON_Clipboard' => 'Има файлове в клипборда.',
\t'Copy_Cut_Size_Limit' => 'Избраните файлове/папки са прекалено големи за %s. Лимит: %d MB/действие', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Избрали сте прекаленено много файлове/папки за %s. Лимит: %d файла/действие', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Нямате право за %s на файлове.', // %s(1) = cut or copy =>  %s(2) = files or folders
\t'Aviary_No_Save' =>  'Изображението не може да бъде записано',
\t'Zip_No_Extract' =>  'Невъзможно разархивиране. Файлът вероятно е повреден.',
\t'Zip_Invalid' =>  'Това разширене не се поддържа. Валидни: zip, gz, tar.',
\t'Dir_No_Write' =>  'Нямате права за запис в избраната папка.',
\t'Function_Disabled' =>  '%s-то е забранено на сървъра.', // %s = cut or copy
\t'File_Permission' =>  'Файлови права',
\t'File_Permission_Not_Allowed' =>  'Не е разрешена промяната на права за %s.', // %s = files or folders
\t'File_Permission_Recursive' =>  'Рекурсивно прилагане?',
\t'File_Permission_Wrong_Mode' =>  \"Зададените права са грешни.\",
\t'User' =>  'Потребител',
\t'Group' =>  'Група',
\t'Yes' =>  'Да',
\t'No' =>  'Не',
\t'Lang_Not_Found' =>  'Езикът не може да бъде намерен.',
\t'Lang_Change' =>  'Смени езика',
\t'File_Not_Found' =>  'Файлът не може да бъде намерен.',
\t'File_Open_Edit_Not_Allowed' =>  'Нямате разрешение за %s на този файл.', // %s = open or edit
\t'Edit' =>  'Редакция',
\t'Edit_File' =>  \"Редакция на съдържанието на файла\",
\t'File_Save_OK' =>  \"Файлът е успешно записан.\",
\t'File_Save_Error' =>  \"Възникна грешка при записването на файла.\",
\t'New_File' => 'Нов файл',
\t'No_Extension' => 'Трябва да зададете разширение на файла.',
\t'Valid_Extensions' => 'Валидни разширения: %s', // %s = txt => log etc.
\t'Upload_message' => \"Провлачете и спуснете файла тук за да го качите.\",

\t'SERVER ERROR' => \"СЪРВЪРНА ГРЕШКА\",
\t'forbiden' => \"Забранено\",
\t'wrong path' => \"Грешен път\",
\t'wrong name' => \"Грешно име\",
\t'wrong extension' => \"Грешно разширение\",
\t'wrong option' => \"Грешна опция\",
\t'wrong data' => \"Грешни данни\",
\t'wrong action' => \"Грешно действие\",
\t'wrong sub-action' => \"Грешно вторично действие\",
\t'no action passed' => \"Не е подадено действие\",
\t'no path' => \"Няма път\",
\t'no file' => \"Няма файл\",
\t'view type number missing' => \"Номерът на прегледа липсва\",
\t'Not enought Memory' => \"Недостатъчна памет\",
\t'max_size_reached' => \"Вашата папка за изображения достигна максимумът от %d MB.\", //%d = max overall size
\t'B' => \"B\",
\t'KB' => \"KB\",
\t'MB' => \"MB\",
\t'GB' => \"GB\",
\t'TB' => \"TB\",
\t'total size' => \"Общ размер\",
);
", "@MwebAdmin/filemanager/lang/bg_BG.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/bg_BG.php");
    }
}
