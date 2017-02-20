<?php

/* @MwebAdmin/filemanager/lang/ru.php */
class __TwigTemplate_779f700c39d8f2755a970c946a4bce3bb1e4916404ab16ffca0f3c1475df38a7 extends Twig_Template
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
        $__internal_6bbb29ef471350bca1b7e9bff5a9127b01d59e9092398d3c7c5a9847847c4385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bbb29ef471350bca1b7e9bff5a9127b01d59e9092398d3c7c5a9847847c4385->enter($__internal_6bbb29ef471350bca1b7e9bff5a9127b01d59e9092398d3c7c5a9847847c4385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/ru.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Выбрать',
\t'Erase' => 'Удалить',
\t'Open' => 'Открыть',
\t'Confirm_del' => 'Вы уверены, что хотите удалить этот файл?',
\t'All' => 'Очистить фильтр',
\t'Files' => 'Файлы',
\t'Images' => 'Изображения',
\t'Archives' => 'Архивы',
\t'Error_Upload' => 'Загружаемый файл превышает допустимый размер.',
\t'Error_extension' => 'Недопустимый формат файла.',
\t'Upload_file' => 'Загрузить файл',
\t'Filters' => 'Фильтр',
\t'Videos' => 'Видео',
\t'Music' => 'Музыка',
\t'New_Folder' => 'Новая папка',
\t'Folder_Created' => 'Папка успешно создана',
\t'Existing_Folder' => 'Существующая папка',
\t'Confirm_Folder_del' => 'Вы уверены, что хотите удалить эту папку и все файлы в ней?',
\t'Return_Files_List' => 'Вернуться к списку файлов',
\t'Preview' => 'Просмотр',
\t'Download' => 'Загрузить',
\t'Insert_Folder_Name' => 'Введите имя папки:',
\t'Root' => 'Корневая папка',
\t'Rename' => 'Переименовать',
\t'Back' => 'Назад',
\t'View' => 'Вид',
\t'View_list' => 'Список',
\t'View_columns_list' => 'Столбцы',
\t'View_boxes' => 'Плитка',
\t'Toolbar' => 'Панель',
\t'Actions' => 'Действия',
\t'Rename_existing_file' => 'Файл уже существует',
\t'Rename_existing_folder' => 'Папка уже существует',
\t'Empty_name' => 'Не заполнено имя',
\t'Text_filter' => 'фильтр',
\t'Swipe_help' => 'Наведите на имя файла/папки, чтобы увидеть опции',
\t'Upload_base' => 'Основная загрузка',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA загрузка (для файлов больших размеров)',
\t'Upload_java_help' => \"Если Java-апплет не загружается: 1. Убедитесь, что установлена Java, в противном случае <a href='http://java.com/en/download/'>[скачайте]</a> 2. Убедитесь, что фаервол ничего не блокирует\",
\t'Upload_base_help' => \"Перетащите файлы в область выше или щелкните по ней мышкой (для современных браузеров) и выберите файл(ы). После завершения загрузки нажмите кнопку &laquo;Вернуться к списку файлов&raquo;.\",
\t'Type_dir' => 'папка',
\t'Type' => 'Тип',
\t'Dimension' => 'Разрешение',
\t'Size' => 'Размер',
\t'Date' => 'Дата',
\t'Filename' => 'Имя&nbsp;файла',
\t'Operations' => 'Действие',
\t'Date_type' => 'd-m-Y',
\t'OK' => 'OK',
\t'Cancel' => 'Отмена',
\t'Sorting' => 'Сортировка',
\t'Show_url' => 'Показать URL',
\t'Extract' => 'Распаковать здесь',
\t'File_info' => 'Свойства файла',
\t'Edit_image' => 'Редактировать',
\t'Duplicate' => 'Создать копию',
\t'Folders' => 'Папки',
\t'Copy' => 'Копировать',
\t'Cut' => 'Вырезать',
\t'Paste' => 'Вставить',
\t'CB' => 'Буфер обмена', // clipboard
\t'Paste_Here' => 'Вставить в текущую папку',
\t'Paste_Confirm' => 'Вы хотите вставить в эту папку? При совпадении имён файлы будут перезаписаны',
\t'Paste_Failed' => 'Не удалось вставить файл(ы).',
\t'Clear_Clipboard' => 'Очистить буфер обмена',
\t'Clear_Clipboard_Confirm' => 'Очистить буфер обмена?',
\t'Files_ON_Clipboard' => 'Есть файлы в буфере обмена.',
\t'Copy_Cut_Size_Limit' => 'Выбранные файлы/папки слишком большие для %s. Ограничение: %d Мб за одну операцию', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Выбрано слишком много файлов/папок для %s. Ограничение: %d файлов за одну операцию', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Вы не можете %s файлы.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Невозможно сохранить изображение.',
\t'Zip_No_Extract' => 'Извлечь невозможно. Возможно файл повреждён.',
\t'Zip_Invalid' => 'Это расширение не поддерживается.  Разрешённые: zip, gz, tar.',
\t'Dir_No_Write' => 'Выбранный каталог недоступен для записи.',
\t'Function_Disabled' => 'Функция %s была отключена на сервере.', // %s = cut or copy
\t'File_Permission' => 'Разрешения на файл',
\t'File_Permission_Not_Allowed' => 'Изменение разрешений %s не допускается.', // %s = files or folders
\t'File_Permission_Recursive' => 'Применить рекурсивно?',
\t'File_Permission_Wrong_Mode' => \"Выбранные режим разрешений некорректен.\",
\t'User' => 'Пользователь',
\t'Group' => 'Группа',
\t'Yes' => 'Да',
\t'No' => 'Нет',
\t'Lang_Not_Found' => 'Невозможно найти язык',
\t'Lang_Change' => 'Сменить язык',
\t'File_Not_Found' => 'Невозможно найти файл',
\t'File_Open_Edit_Not_Allowed' => 'Вы не можете %s этот файл.', // %s = open or edit
\t'Edit' => 'Редактировать',
\t'Edit_File' => \"Редактировать содержимое файла\",
\t'File_Save_OK' => \"Файл успешно сохранён\",
\t'File_Save_Error' => \"Произошла ошибка при сохранении файла\",
\t'New_File' => 'Новый файл',
\t'No_Extension' => 'Необходимо добавить расширение файла',
\t'Valid_Extensions' => 'Разрешённые расширения файла: %s', // %s = txt,log etc.
\t'Upload_message' => \"Перетащите файл сюда, чтобы загрузить\",
\t'SERVER ERROR' => \"СЕРВЕРНАЯ ОШИБКА\",
\t'forbiden' => \"Запрещено\",
\t'wrong path' => \"Неверный путь\",
\t'wrong name' => \"Неверное имя\",
\t'wrong extension' => \"Неверное расширение\",
\t'wrong option' => \"Неверная опция\",
\t'wrong data' => \"Неверные данные\",
\t'wrong action' => \"Неверное действие\",
\t'wrong sub-action' => \"Неверное доп.действие\",
\t'no action passed' => \"Действие не сработало\",
\t'no path' => \"Путь не существует\",
\t'no file' => \"Файл не существует\",
\t'view type number missing' => \"Данный тип отсутствует\",
\t'Not enought Memory' => \"Недостаточно памяти\",
\t'max_size_reached' => \"Папка достигла максимального размера в %d MB.\", //%d = max overall size
\t'B' => \"B\",
\t'KB' => \"KB\",
\t'MB' => \"MB\",
\t'GB' => \"GB\",
\t'TB' => \"TB\",
\t'total size' => \"Общий размер\",
);
";
        
        $__internal_6bbb29ef471350bca1b7e9bff5a9127b01d59e9092398d3c7c5a9847847c4385->leave($__internal_6bbb29ef471350bca1b7e9bff5a9127b01d59e9092398d3c7c5a9847847c4385_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/ru.php";
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

\t'Select' => 'Выбрать',
\t'Erase' => 'Удалить',
\t'Open' => 'Открыть',
\t'Confirm_del' => 'Вы уверены, что хотите удалить этот файл?',
\t'All' => 'Очистить фильтр',
\t'Files' => 'Файлы',
\t'Images' => 'Изображения',
\t'Archives' => 'Архивы',
\t'Error_Upload' => 'Загружаемый файл превышает допустимый размер.',
\t'Error_extension' => 'Недопустимый формат файла.',
\t'Upload_file' => 'Загрузить файл',
\t'Filters' => 'Фильтр',
\t'Videos' => 'Видео',
\t'Music' => 'Музыка',
\t'New_Folder' => 'Новая папка',
\t'Folder_Created' => 'Папка успешно создана',
\t'Existing_Folder' => 'Существующая папка',
\t'Confirm_Folder_del' => 'Вы уверены, что хотите удалить эту папку и все файлы в ней?',
\t'Return_Files_List' => 'Вернуться к списку файлов',
\t'Preview' => 'Просмотр',
\t'Download' => 'Загрузить',
\t'Insert_Folder_Name' => 'Введите имя папки:',
\t'Root' => 'Корневая папка',
\t'Rename' => 'Переименовать',
\t'Back' => 'Назад',
\t'View' => 'Вид',
\t'View_list' => 'Список',
\t'View_columns_list' => 'Столбцы',
\t'View_boxes' => 'Плитка',
\t'Toolbar' => 'Панель',
\t'Actions' => 'Действия',
\t'Rename_existing_file' => 'Файл уже существует',
\t'Rename_existing_folder' => 'Папка уже существует',
\t'Empty_name' => 'Не заполнено имя',
\t'Text_filter' => 'фильтр',
\t'Swipe_help' => 'Наведите на имя файла/папки, чтобы увидеть опции',
\t'Upload_base' => 'Основная загрузка',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA загрузка (для файлов больших размеров)',
\t'Upload_java_help' => \"Если Java-апплет не загружается: 1. Убедитесь, что установлена Java, в противном случае <a href='http://java.com/en/download/'>[скачайте]</a> 2. Убедитесь, что фаервол ничего не блокирует\",
\t'Upload_base_help' => \"Перетащите файлы в область выше или щелкните по ней мышкой (для современных браузеров) и выберите файл(ы). После завершения загрузки нажмите кнопку &laquo;Вернуться к списку файлов&raquo;.\",
\t'Type_dir' => 'папка',
\t'Type' => 'Тип',
\t'Dimension' => 'Разрешение',
\t'Size' => 'Размер',
\t'Date' => 'Дата',
\t'Filename' => 'Имя&nbsp;файла',
\t'Operations' => 'Действие',
\t'Date_type' => 'd-m-Y',
\t'OK' => 'OK',
\t'Cancel' => 'Отмена',
\t'Sorting' => 'Сортировка',
\t'Show_url' => 'Показать URL',
\t'Extract' => 'Распаковать здесь',
\t'File_info' => 'Свойства файла',
\t'Edit_image' => 'Редактировать',
\t'Duplicate' => 'Создать копию',
\t'Folders' => 'Папки',
\t'Copy' => 'Копировать',
\t'Cut' => 'Вырезать',
\t'Paste' => 'Вставить',
\t'CB' => 'Буфер обмена', // clipboard
\t'Paste_Here' => 'Вставить в текущую папку',
\t'Paste_Confirm' => 'Вы хотите вставить в эту папку? При совпадении имён файлы будут перезаписаны',
\t'Paste_Failed' => 'Не удалось вставить файл(ы).',
\t'Clear_Clipboard' => 'Очистить буфер обмена',
\t'Clear_Clipboard_Confirm' => 'Очистить буфер обмена?',
\t'Files_ON_Clipboard' => 'Есть файлы в буфере обмена.',
\t'Copy_Cut_Size_Limit' => 'Выбранные файлы/папки слишком большие для %s. Ограничение: %d Мб за одну операцию', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Выбрано слишком много файлов/папок для %s. Ограничение: %d файлов за одну операцию', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Вы не можете %s файлы.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Невозможно сохранить изображение.',
\t'Zip_No_Extract' => 'Извлечь невозможно. Возможно файл повреждён.',
\t'Zip_Invalid' => 'Это расширение не поддерживается.  Разрешённые: zip, gz, tar.',
\t'Dir_No_Write' => 'Выбранный каталог недоступен для записи.',
\t'Function_Disabled' => 'Функция %s была отключена на сервере.', // %s = cut or copy
\t'File_Permission' => 'Разрешения на файл',
\t'File_Permission_Not_Allowed' => 'Изменение разрешений %s не допускается.', // %s = files or folders
\t'File_Permission_Recursive' => 'Применить рекурсивно?',
\t'File_Permission_Wrong_Mode' => \"Выбранные режим разрешений некорректен.\",
\t'User' => 'Пользователь',
\t'Group' => 'Группа',
\t'Yes' => 'Да',
\t'No' => 'Нет',
\t'Lang_Not_Found' => 'Невозможно найти язык',
\t'Lang_Change' => 'Сменить язык',
\t'File_Not_Found' => 'Невозможно найти файл',
\t'File_Open_Edit_Not_Allowed' => 'Вы не можете %s этот файл.', // %s = open or edit
\t'Edit' => 'Редактировать',
\t'Edit_File' => \"Редактировать содержимое файла\",
\t'File_Save_OK' => \"Файл успешно сохранён\",
\t'File_Save_Error' => \"Произошла ошибка при сохранении файла\",
\t'New_File' => 'Новый файл',
\t'No_Extension' => 'Необходимо добавить расширение файла',
\t'Valid_Extensions' => 'Разрешённые расширения файла: %s', // %s = txt,log etc.
\t'Upload_message' => \"Перетащите файл сюда, чтобы загрузить\",
\t'SERVER ERROR' => \"СЕРВЕРНАЯ ОШИБКА\",
\t'forbiden' => \"Запрещено\",
\t'wrong path' => \"Неверный путь\",
\t'wrong name' => \"Неверное имя\",
\t'wrong extension' => \"Неверное расширение\",
\t'wrong option' => \"Неверная опция\",
\t'wrong data' => \"Неверные данные\",
\t'wrong action' => \"Неверное действие\",
\t'wrong sub-action' => \"Неверное доп.действие\",
\t'no action passed' => \"Действие не сработало\",
\t'no path' => \"Путь не существует\",
\t'no file' => \"Файл не существует\",
\t'view type number missing' => \"Данный тип отсутствует\",
\t'Not enought Memory' => \"Недостаточно памяти\",
\t'max_size_reached' => \"Папка достигла максимального размера в %d MB.\", //%d = max overall size
\t'B' => \"B\",
\t'KB' => \"KB\",
\t'MB' => \"MB\",
\t'GB' => \"GB\",
\t'TB' => \"TB\",
\t'total size' => \"Общий размер\",
);
", "@MwebAdmin/filemanager/lang/ru.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/ru.php");
    }
}
