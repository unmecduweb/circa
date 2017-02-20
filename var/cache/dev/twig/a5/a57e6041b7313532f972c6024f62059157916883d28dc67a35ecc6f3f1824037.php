<?php

/* @MwebAdmin/filemanager/lang/uk_UA.php */
class __TwigTemplate_174d2a3e61b10dc9d0d59f519bf5857e8237dea528a2766b061219d4eaa6d0e5 extends Twig_Template
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
        $__internal_a319d16547c5010c8bf364740241269f2d77d04929290397102b1240014ce7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a319d16547c5010c8bf364740241269f2d77d04929290397102b1240014ce7da->enter($__internal_a319d16547c5010c8bf364740241269f2d77d04929290397102b1240014ce7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/uk_UA.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Вибрати',
\t'Erase' => 'Видалити',
\t'Open' => 'Відкрити',
\t'Confirm_del' => 'Впевнені, що хочете видалити цей файл?',
\t'All' => 'Всі',
\t'Files' => 'Файли',
\t'Images' => 'Зображення',
\t'Archives' => 'Архіви',
\t'Error_Upload' => 'Файл, що завантажується перевищує дозволений розмір.',
\t'Error_extension' => 'Неприпустимий формат файлу.',
\t'Upload_file' => 'Завантажити файл',
\t'Filters' => 'Фільтр',
\t'Videos' => 'Відео',
\t'Music' => 'Музика',
\t'New_Folder' => 'Нова тека',
\t'Folder_Created' => 'Теку успішно створено',
\t'Existing_Folder' => 'Існуюча тека',
\t'Confirm_Folder_del' => 'Впевнені, що хочете видалити цю теку і всі файли в ній?',
\t'Return_Files_List' => 'Повернутися до списку файлів',
\t'Preview' => 'Перегляд',
\t'Download' => 'Завантажити',
\t'Insert_Folder_Name' => 'Введіть ім`я папки:',
\t'Root' => 'Коренева тека',
\t'Rename' => 'Переіменувати',
\t'Back' => 'назад',
\t'View' => 'Вигляд',
\t'View_list' => 'Список',
\t'View_columns_list' => 'Стовпчики',
\t'View_boxes' => 'Плиткою',
\t'Toolbar' => 'Панель',
\t'Actions' => 'Дії',
\t'Rename_existing_file' => 'Файл вже існує',
\t'Rename_existing_folder' => 'Тека вже існує',
\t'Empty_name' => 'Не заповнено ім`я',
\t'Text_filter' => 'фільтр',
\t'Swipe_help' => 'Наведіть на ім`я файлу/папки, щоб побачити опції',
\t'Upload_base' => 'Основне завантаження',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA-завантаження (для файлів великих розмірів)',
\t'Upload_java_help' => \"Якщо Java-апплет не завантажується: 1. переконайтесь, що Java встановлено на вашому комп`ютері, інакше <a href='http://java.com/en/download/'>[завантажте]</a> 2. переконайтесь, що фаєрвол нічого не блокує\",
\t'Upload_base_help' => \"Перетягніть файли в область, що вище або клікніть по ній мишкою (для сучасних браузерів), в іншому разі виберіть файл та натисніть кнопку. Коли завантаження закінчиться - натисніть кнопку повернення.\",
\t'Type_dir' => 'Тека',
\t'Type' => 'Тип',
\t'Dimension' => 'Розмір',
\t'Size' => 'Об`єм',
\t'Date' => 'Дата',
\t'Filename' => 'Ім`я файлу',
\t'Operations' => 'Дії',
\t'Date_type' => 'd-m-y',
\t'OK' => 'OK',
\t'Cancel' => 'Відміна',
\t'Sorting' => 'Сортування',
\t'Show_url' => 'Показати URL',
\t'Extract' => 'Видобути тут',
\t'File_info' => 'Інфо файла',
\t'Edit_image' => 'Редагувати зображення',
\t'Duplicate' => 'Дублікати',
\t'Folders' => 'Папки',
\t'Copy' => 'Копіювати',
\t'Cut' => 'Вирізати',
\t'Paste' => 'Вставити',
\t'CB' => 'БО', // clipboard
\t'Paste_Here' => 'Вставити в цю теку',
\t'Paste_Confirm' => 'Ви впевнені, що хочете вставити в цю теку? Це перезапише всі файли/папки, якщо такі будуть.',
\t'Paste_Failed' => 'Помилка вставки файлів',
\t'Clear_Clipboard' => 'Очистити буфер обміну',
\t'Clear_Clipboard_Confirm' => 'Ви впевнені, що хочете очистити буфер обміну?',
\t'Files_ON_Clipboard' => 'Немає файлів у буфері обміну.',
\t'Copy_Cut_Size_Limit' => 'Вибрані файли/папки завеликі для %s. Обмеження: %d MB/операцію', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Ви вибрали забагато файлів/папок для %s. Обмеження: %d файлів/операцію', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'У вас немає прав доступу для %s файлів.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Неможливо зберегти зображення',
\t'Zip_No_Extract' => 'Неможливо видобути. Файл може бути пошкодженим',
\t'Zip_Invalid' => 'Це розширення не підтримується. Можливі: zip, gz, tar.',
\t'Dir_No_Write' => 'Обрана тека захищена від запису.',
\t'Function_Disabled' => 'Функція %s заборонена сервером.', // %s = cut or copy
\t'File_Permission' => 'Права доступу',
\t'File_Permission_Not_Allowed' => 'Зміна прав доступу для %s заборонена.', // %s = files or folders
\t'File_Permission_Recursive' => 'Застосувати рекурсивно?',
\t'File_Permission_Wrong_Mode' => \"Наданы права доступу невірні.\",
\t'User' => 'Користувач',
\t'Group' => 'Група',
\t'Yes' => 'Так',
\t'No' => 'Ні',
\t'Lang_Not_Found' => 'Не можу знайти мову.',
\t'Lang_Change' => 'Зміна мови',
\t'File_Not_Found' => 'Не можу знайти файл.',
\t'File_Open_Edit_Not_Allowed' => 'У вас немає прав для відкриття цього файлу %s.', // %s = open or edit
\t'Edit' => 'Редагувати',
\t'Edit_File' => \"Редагувати вміст файлу\",
\t'File_Save_OK' => \"Файл успішно збережено.\",
\t'File_Save_Error' => \"Виникла помилка при збереженні файлу.\",
\t'New_File' => 'Новий файл',
\t'No_Extension' => 'Вам необхідно додати розширення файлу.',
\t'Valid_Extensions' => 'Дозволені розширення: %s', // %s = txt,log etc.
\t'Upload_message' => \"Перетягніть сюди файл для завантаження\",

\t'SERVER ERROR' => \"ПОМИЛКА СЕРВЕРА\",
\t'forbiden' => \"Заборонено\",
\t'wrong path' => \"Хибний шлях\",
\t'wrong name' => \"Хибне ім`я\",
\t'wrong extension' => \"Хибне розширення\",
\t'wrong option' => \"Хибна операція\",
\t'wrong data' => \"Хибні дані\",
\t'wrong action' => \"Хибна дія\",
\t'wrong sub-action' => \"Хибна під-дія\",
\t'no action passed' => \"Жодної дії не передано\",
\t'no path' => \"Немає шляху\",
\t'no file' => \"Немає файлу\",
\t'view type number missing' => \"Відсутній номер типу перегляду\",
\t'Not enought Memory' => \"Недостатньо пам`яті\",
\t'max_size_reached' => \"Ваша тека досягла максимального ліміту у %d Мб.\", //%d = max overall size
\t'B' => \"Б\",
\t'KB' => \"Кб\",
\t'MB' => \"Мб\",
\t'GB' => \"Гб\",
\t'TB' => \"Тб\",
\t'total size' => \"Загальний розмір\",
);
";
        
        $__internal_a319d16547c5010c8bf364740241269f2d77d04929290397102b1240014ce7da->leave($__internal_a319d16547c5010c8bf364740241269f2d77d04929290397102b1240014ce7da_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/uk_UA.php";
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

\t'Select' => 'Вибрати',
\t'Erase' => 'Видалити',
\t'Open' => 'Відкрити',
\t'Confirm_del' => 'Впевнені, що хочете видалити цей файл?',
\t'All' => 'Всі',
\t'Files' => 'Файли',
\t'Images' => 'Зображення',
\t'Archives' => 'Архіви',
\t'Error_Upload' => 'Файл, що завантажується перевищує дозволений розмір.',
\t'Error_extension' => 'Неприпустимий формат файлу.',
\t'Upload_file' => 'Завантажити файл',
\t'Filters' => 'Фільтр',
\t'Videos' => 'Відео',
\t'Music' => 'Музика',
\t'New_Folder' => 'Нова тека',
\t'Folder_Created' => 'Теку успішно створено',
\t'Existing_Folder' => 'Існуюча тека',
\t'Confirm_Folder_del' => 'Впевнені, що хочете видалити цю теку і всі файли в ній?',
\t'Return_Files_List' => 'Повернутися до списку файлів',
\t'Preview' => 'Перегляд',
\t'Download' => 'Завантажити',
\t'Insert_Folder_Name' => 'Введіть ім`я папки:',
\t'Root' => 'Коренева тека',
\t'Rename' => 'Переіменувати',
\t'Back' => 'назад',
\t'View' => 'Вигляд',
\t'View_list' => 'Список',
\t'View_columns_list' => 'Стовпчики',
\t'View_boxes' => 'Плиткою',
\t'Toolbar' => 'Панель',
\t'Actions' => 'Дії',
\t'Rename_existing_file' => 'Файл вже існує',
\t'Rename_existing_folder' => 'Тека вже існує',
\t'Empty_name' => 'Не заповнено ім`я',
\t'Text_filter' => 'фільтр',
\t'Swipe_help' => 'Наведіть на ім`я файлу/папки, щоб побачити опції',
\t'Upload_base' => 'Основне завантаження',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA-завантаження (для файлів великих розмірів)',
\t'Upload_java_help' => \"Якщо Java-апплет не завантажується: 1. переконайтесь, що Java встановлено на вашому комп`ютері, інакше <a href='http://java.com/en/download/'>[завантажте]</a> 2. переконайтесь, що фаєрвол нічого не блокує\",
\t'Upload_base_help' => \"Перетягніть файли в область, що вище або клікніть по ній мишкою (для сучасних браузерів), в іншому разі виберіть файл та натисніть кнопку. Коли завантаження закінчиться - натисніть кнопку повернення.\",
\t'Type_dir' => 'Тека',
\t'Type' => 'Тип',
\t'Dimension' => 'Розмір',
\t'Size' => 'Об`єм',
\t'Date' => 'Дата',
\t'Filename' => 'Ім`я файлу',
\t'Operations' => 'Дії',
\t'Date_type' => 'd-m-y',
\t'OK' => 'OK',
\t'Cancel' => 'Відміна',
\t'Sorting' => 'Сортування',
\t'Show_url' => 'Показати URL',
\t'Extract' => 'Видобути тут',
\t'File_info' => 'Інфо файла',
\t'Edit_image' => 'Редагувати зображення',
\t'Duplicate' => 'Дублікати',
\t'Folders' => 'Папки',
\t'Copy' => 'Копіювати',
\t'Cut' => 'Вирізати',
\t'Paste' => 'Вставити',
\t'CB' => 'БО', // clipboard
\t'Paste_Here' => 'Вставити в цю теку',
\t'Paste_Confirm' => 'Ви впевнені, що хочете вставити в цю теку? Це перезапише всі файли/папки, якщо такі будуть.',
\t'Paste_Failed' => 'Помилка вставки файлів',
\t'Clear_Clipboard' => 'Очистити буфер обміну',
\t'Clear_Clipboard_Confirm' => 'Ви впевнені, що хочете очистити буфер обміну?',
\t'Files_ON_Clipboard' => 'Немає файлів у буфері обміну.',
\t'Copy_Cut_Size_Limit' => 'Вибрані файли/папки завеликі для %s. Обмеження: %d MB/операцію', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Ви вибрали забагато файлів/папок для %s. Обмеження: %d файлів/операцію', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'У вас немає прав доступу для %s файлів.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Неможливо зберегти зображення',
\t'Zip_No_Extract' => 'Неможливо видобути. Файл може бути пошкодженим',
\t'Zip_Invalid' => 'Це розширення не підтримується. Можливі: zip, gz, tar.',
\t'Dir_No_Write' => 'Обрана тека захищена від запису.',
\t'Function_Disabled' => 'Функція %s заборонена сервером.', // %s = cut or copy
\t'File_Permission' => 'Права доступу',
\t'File_Permission_Not_Allowed' => 'Зміна прав доступу для %s заборонена.', // %s = files or folders
\t'File_Permission_Recursive' => 'Застосувати рекурсивно?',
\t'File_Permission_Wrong_Mode' => \"Наданы права доступу невірні.\",
\t'User' => 'Користувач',
\t'Group' => 'Група',
\t'Yes' => 'Так',
\t'No' => 'Ні',
\t'Lang_Not_Found' => 'Не можу знайти мову.',
\t'Lang_Change' => 'Зміна мови',
\t'File_Not_Found' => 'Не можу знайти файл.',
\t'File_Open_Edit_Not_Allowed' => 'У вас немає прав для відкриття цього файлу %s.', // %s = open or edit
\t'Edit' => 'Редагувати',
\t'Edit_File' => \"Редагувати вміст файлу\",
\t'File_Save_OK' => \"Файл успішно збережено.\",
\t'File_Save_Error' => \"Виникла помилка при збереженні файлу.\",
\t'New_File' => 'Новий файл',
\t'No_Extension' => 'Вам необхідно додати розширення файлу.',
\t'Valid_Extensions' => 'Дозволені розширення: %s', // %s = txt,log etc.
\t'Upload_message' => \"Перетягніть сюди файл для завантаження\",

\t'SERVER ERROR' => \"ПОМИЛКА СЕРВЕРА\",
\t'forbiden' => \"Заборонено\",
\t'wrong path' => \"Хибний шлях\",
\t'wrong name' => \"Хибне ім`я\",
\t'wrong extension' => \"Хибне розширення\",
\t'wrong option' => \"Хибна операція\",
\t'wrong data' => \"Хибні дані\",
\t'wrong action' => \"Хибна дія\",
\t'wrong sub-action' => \"Хибна під-дія\",
\t'no action passed' => \"Жодної дії не передано\",
\t'no path' => \"Немає шляху\",
\t'no file' => \"Немає файлу\",
\t'view type number missing' => \"Відсутній номер типу перегляду\",
\t'Not enought Memory' => \"Недостатньо пам`яті\",
\t'max_size_reached' => \"Ваша тека досягла максимального ліміту у %d Мб.\", //%d = max overall size
\t'B' => \"Б\",
\t'KB' => \"Кб\",
\t'MB' => \"Мб\",
\t'GB' => \"Гб\",
\t'TB' => \"Тб\",
\t'total size' => \"Загальний розмір\",
);
", "@MwebAdmin/filemanager/lang/uk_UA.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/uk_UA.php");
    }
}
