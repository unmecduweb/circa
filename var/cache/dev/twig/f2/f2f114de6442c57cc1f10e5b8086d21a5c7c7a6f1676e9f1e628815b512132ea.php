<?php

/* @MwebAdmin/filemanager/lang/he_IL.php */
class __TwigTemplate_5b6bbd74876ff77b0d5bad6f636da0fc3a90de05e1179d1c3a8a9f410cc828c7 extends Twig_Template
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
        $__internal_b0b79b0bbbe1395b505ac06b4796225b1922680e9127d7d5ef8d8b6c3f3a5beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b79b0bbbe1395b505ac06b4796225b1922680e9127d7d5ef8d8b6c3f3a5beb->enter($__internal_b0b79b0bbbe1395b505ac06b4796225b1922680e9127d7d5ef8d8b6c3f3a5beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/he_IL.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'בחר',
\t'Erase' => 'מחק',
\t'Open' => 'פתח',
\t'Confirm_del' => 'האם אתה בטוח שברצונך למחוק את הקובץ ?',
\t'All' => 'הכל',
\t'Files' => 'קבצים',
\t'Images' => 'תמונות',
\t'Archives' => 'ארכיונים',
\t'Error_Upload' => 'גודל הקובץ המצורף חורג מן הגבול המותר .',
\t'Error_extension' => 'תבנית הקובץ או סיומת הקובץ אינן חוקיות .',
\t'Upload_file' => 'העלה',
\t'Filters' => 'סננים',
\t'Videos' => 'וידאו',
\t'Music' => 'מוזיקה',
\t'New_Folder' => 'תיקיה חדשה',
\t'Folder_Created' => 'התיקיה נוצרה .',
\t'Existing_Folder' => 'התיקיה קיימת',
\t'Confirm_Folder_del' => 'האם אתה בטוח שברצונך למחוק את התיקיה וכל קבציה ?',
\t'Return_Files_List' => 'חזור לרשימת קבצים',
\t'Preview' => 'תצוגה מקדימה',
\t'Download' => 'הורד',
\t'Insert_Folder_Name' => 'הכנס שם תיקיה:',
\t'Root' => 'root',
\t'Rename' => 'שנה שם',
\t'Back' => 'חזור',
\t'View' => 'צפה',
\t'View_list' => 'תצוגת רשימה',
\t'View_columns_list' => 'תצוגת רשימה בטורים',
\t'View_boxes' => 'תצוגת קופסאות',
\t'Toolbar' => 'סרגל כלים',
\t'Actions' => 'פעולות',
\t'Rename_existing_file' => 'הקובץ כבר קיים',
\t'Rename_existing_folder' => 'התיקיה כבר קיימת',
\t'Empty_name' => 'שם הקובץ ריק',
\t'Text_filter' => 'סנן טקסט',
\t'Swipe_help' => 'סמן את הקובץ / תיקיה על מנת להציג אפשריות',
\t'Upload_base' => 'רגיל',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA (לקבצים גדולים)',
\t'Upload_java_help' => \"אם אפליקצית הJAVA לא נטענת , 1. וודא שJAVA מותקנת במחשבך , אחר <a href='http://java.com/en/download/'>לחץ להורדה</a>   2. וודא שהכל מאופשר בחומת האש .\",
\t'Upload_base_help' => \"גרור ושחרר את הקבוצים אשר הינך מעוניין לעלות . בסיום יש ללחוץ על \\\"חזור אל רשימת קבצים\\\"\",
\t'Type_dir' => 'תיקיה',
\t'Type' => 'סוג',
\t'Dimension' => 'מימדים',
\t'Size' => 'גודל',
\t'Date' => 'תאריך',
\t'Filename' => 'שם הקובץ',
\t'Operations' => 'פעולות',
\t'Date_type' => 'd-m-y',
\t'OK' => 'אישור',
\t'Cancel' => 'ביטול',
\t'Sorting' => 'מיון',
\t'Show_url' => 'הצג כתובת',
\t'Extract' => 'חלץ לכאן',
\t'File_info' => 'מאפיינים',
\t'Edit_image' => 'ערוך תמונה',
\t'Duplicate' => 'שכפל',
\t'Folders', 'תיקיות',
\t'Copy' => 'העתק',
\t'Cut' => 'גזור',
\t'Paste' => 'הדבק',
\t'CB', 'לוח עריכה', // clipboard
\t'Paste_Here' => 'הדבק לתיקיה זו',
\t'Paste_Confirm' => 'האם אתה בטוח שברצונך להדביק לתיקיה זו ? פעולה זו תחליף בין הקבצים במקרה של התנגשות',
\t'Paste_Failed' => 'נכשל בהעתקת קבצים',
\t'Clear_Clipboard' => 'נקה לוח עריכה',
\t'Clear_Clipboard_Confirm' => 'האם אתה בטוח שברצונך לנקות את לוח העריכה ?',
\t'Files_ON_Clipboard' => 'ישנם קבצים בלוח העריכה.',
\t'Copy_Cut_Size_Limit' => 'גודל הקובצים / התיקיה גדולים מדי %s. הגבלה: %d MB/לפעולה', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'בחר יותר מדי תיקיות/קבצים לפעולה %s. הגבלה: %d files/operation', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'אינך ראשי ל%s קבצים.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save', 'לא ניתן לשמור את התמונה .',
\t'Zip_No_Extract', 'לא ניתן לחלץ , הקבץ פגום.',
\t'Zip_Invalid', 'סוג או פורמט הקובץ אינו נתמך. חוקי: zip, gz, tar.',
\t'Dir_No_Write', 'התיקיה שבחרת אינה ניתנת לכתיבה',
\t'Function_Disabled', 'ה %s פונקציה אינה פעילה.', // %s = cut or copy
\t'File_Permission', 'הראשות קובץ',
\t'File_Permission_Not_Allowed', 'שינוי %s הראשות לא ניתנת לעריכה.', // %s = files or folders
\t'File_Permission_Recursive', 'החל רקורסיביות?',
\t'File_Permission_Wrong_Mode', \"הרשאות שנתנו אינן חוקיות.\",
\t'User', 'משתמשים',
\t'Group', 'קבוצות',
\t'Yes', 'כן',
\t'No', 'לא',
\t'Lang_Not_Found', 'לא ניתן למצוא את השפה המבוקשת .',
\t'Lang_Change', 'החלף שפה',
\t'File_Not_Found', 'לא ניתן לאתר את הקובץ המבוקש.',
\t'File_Open_Edit_Not_Allowed', 'אינך מורשה ל%s את הקובץ.', // %s = open or edit
\t'Edit', 'ערוך',
\t'Edit_File', \"ערוך את תוכן הקובץ\",
\t'File_Save_OK', \"הקובץ נשמר בהצלחה .\",
\t'File_Save_Error', \"שגיאה בעת שמירת הקובץ.\",
\t'New_File' => 'קובץ חדש',
\t'No_Extension' => 'חובה לציין את סיומת הקובץ.', 
\t'Valid_Extensions' => 'סיומות חוקיות: %s', // %s = txt,log etc.
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
        
        $__internal_b0b79b0bbbe1395b505ac06b4796225b1922680e9127d7d5ef8d8b6c3f3a5beb->leave($__internal_b0b79b0bbbe1395b505ac06b4796225b1922680e9127d7d5ef8d8b6c3f3a5beb_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/he_IL.php";
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

\t'Select' => 'בחר',
\t'Erase' => 'מחק',
\t'Open' => 'פתח',
\t'Confirm_del' => 'האם אתה בטוח שברצונך למחוק את הקובץ ?',
\t'All' => 'הכל',
\t'Files' => 'קבצים',
\t'Images' => 'תמונות',
\t'Archives' => 'ארכיונים',
\t'Error_Upload' => 'גודל הקובץ המצורף חורג מן הגבול המותר .',
\t'Error_extension' => 'תבנית הקובץ או סיומת הקובץ אינן חוקיות .',
\t'Upload_file' => 'העלה',
\t'Filters' => 'סננים',
\t'Videos' => 'וידאו',
\t'Music' => 'מוזיקה',
\t'New_Folder' => 'תיקיה חדשה',
\t'Folder_Created' => 'התיקיה נוצרה .',
\t'Existing_Folder' => 'התיקיה קיימת',
\t'Confirm_Folder_del' => 'האם אתה בטוח שברצונך למחוק את התיקיה וכל קבציה ?',
\t'Return_Files_List' => 'חזור לרשימת קבצים',
\t'Preview' => 'תצוגה מקדימה',
\t'Download' => 'הורד',
\t'Insert_Folder_Name' => 'הכנס שם תיקיה:',
\t'Root' => 'root',
\t'Rename' => 'שנה שם',
\t'Back' => 'חזור',
\t'View' => 'צפה',
\t'View_list' => 'תצוגת רשימה',
\t'View_columns_list' => 'תצוגת רשימה בטורים',
\t'View_boxes' => 'תצוגת קופסאות',
\t'Toolbar' => 'סרגל כלים',
\t'Actions' => 'פעולות',
\t'Rename_existing_file' => 'הקובץ כבר קיים',
\t'Rename_existing_folder' => 'התיקיה כבר קיימת',
\t'Empty_name' => 'שם הקובץ ריק',
\t'Text_filter' => 'סנן טקסט',
\t'Swipe_help' => 'סמן את הקובץ / תיקיה על מנת להציג אפשריות',
\t'Upload_base' => 'רגיל',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA (לקבצים גדולים)',
\t'Upload_java_help' => \"אם אפליקצית הJAVA לא נטענת , 1. וודא שJAVA מותקנת במחשבך , אחר <a href='http://java.com/en/download/'>לחץ להורדה</a>   2. וודא שהכל מאופשר בחומת האש .\",
\t'Upload_base_help' => \"גרור ושחרר את הקבוצים אשר הינך מעוניין לעלות . בסיום יש ללחוץ על \\\"חזור אל רשימת קבצים\\\"\",
\t'Type_dir' => 'תיקיה',
\t'Type' => 'סוג',
\t'Dimension' => 'מימדים',
\t'Size' => 'גודל',
\t'Date' => 'תאריך',
\t'Filename' => 'שם הקובץ',
\t'Operations' => 'פעולות',
\t'Date_type' => 'd-m-y',
\t'OK' => 'אישור',
\t'Cancel' => 'ביטול',
\t'Sorting' => 'מיון',
\t'Show_url' => 'הצג כתובת',
\t'Extract' => 'חלץ לכאן',
\t'File_info' => 'מאפיינים',
\t'Edit_image' => 'ערוך תמונה',
\t'Duplicate' => 'שכפל',
\t'Folders', 'תיקיות',
\t'Copy' => 'העתק',
\t'Cut' => 'גזור',
\t'Paste' => 'הדבק',
\t'CB', 'לוח עריכה', // clipboard
\t'Paste_Here' => 'הדבק לתיקיה זו',
\t'Paste_Confirm' => 'האם אתה בטוח שברצונך להדביק לתיקיה זו ? פעולה זו תחליף בין הקבצים במקרה של התנגשות',
\t'Paste_Failed' => 'נכשל בהעתקת קבצים',
\t'Clear_Clipboard' => 'נקה לוח עריכה',
\t'Clear_Clipboard_Confirm' => 'האם אתה בטוח שברצונך לנקות את לוח העריכה ?',
\t'Files_ON_Clipboard' => 'ישנם קבצים בלוח העריכה.',
\t'Copy_Cut_Size_Limit' => 'גודל הקובצים / התיקיה גדולים מדי %s. הגבלה: %d MB/לפעולה', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'בחר יותר מדי תיקיות/קבצים לפעולה %s. הגבלה: %d files/operation', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'אינך ראשי ל%s קבצים.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save', 'לא ניתן לשמור את התמונה .',
\t'Zip_No_Extract', 'לא ניתן לחלץ , הקבץ פגום.',
\t'Zip_Invalid', 'סוג או פורמט הקובץ אינו נתמך. חוקי: zip, gz, tar.',
\t'Dir_No_Write', 'התיקיה שבחרת אינה ניתנת לכתיבה',
\t'Function_Disabled', 'ה %s פונקציה אינה פעילה.', // %s = cut or copy
\t'File_Permission', 'הראשות קובץ',
\t'File_Permission_Not_Allowed', 'שינוי %s הראשות לא ניתנת לעריכה.', // %s = files or folders
\t'File_Permission_Recursive', 'החל רקורסיביות?',
\t'File_Permission_Wrong_Mode', \"הרשאות שנתנו אינן חוקיות.\",
\t'User', 'משתמשים',
\t'Group', 'קבוצות',
\t'Yes', 'כן',
\t'No', 'לא',
\t'Lang_Not_Found', 'לא ניתן למצוא את השפה המבוקשת .',
\t'Lang_Change', 'החלף שפה',
\t'File_Not_Found', 'לא ניתן לאתר את הקובץ המבוקש.',
\t'File_Open_Edit_Not_Allowed', 'אינך מורשה ל%s את הקובץ.', // %s = open or edit
\t'Edit', 'ערוך',
\t'Edit_File', \"ערוך את תוכן הקובץ\",
\t'File_Save_OK', \"הקובץ נשמר בהצלחה .\",
\t'File_Save_Error', \"שגיאה בעת שמירת הקובץ.\",
\t'New_File' => 'קובץ חדש',
\t'No_Extension' => 'חובה לציין את סיומת הקובץ.', 
\t'Valid_Extensions' => 'סיומות חוקיות: %s', // %s = txt,log etc.
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

", "@MwebAdmin/filemanager/lang/he_IL.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/he_IL.php");
    }
}
