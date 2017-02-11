<?php

/* @MwebAdmin/filemanager/lang/de.php */
class __TwigTemplate_7c097702a50ea2628b0b61e0269828044233048f5fef30af4bd5c87b50930dd7 extends Twig_Template
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
        $__internal_9829930949049d5a7cf38ac6c90f7d65e436fa416d9322e8a25acc9445080859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9829930949049d5a7cf38ac6c90f7d65e436fa416d9322e8a25acc9445080859->enter($__internal_9829930949049d5a7cf38ac6c90f7d65e436fa416d9322e8a25acc9445080859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/de.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Ausw&auml;hlen',
\t'Erase' => 'L&ouml;schen',
\t'Open' => '&Ouml;ffnen',
\t'Confirm_del' => 'Sind Sie sicher das Sie die Datei l&ouml;schen wollen?',
\t'All' => 'Alle',
\t'Files' => 'Dateien',
\t'Images' => 'Bilder',
\t'Archives' => 'Archive',
\t'Error_Upload' => 'Die Datei &uuml;berschreitet die maximal erlaubte Gr&ouml;ße.',
\t'Error_extension' => 'Dieser Dateityp ist nicht erlaubt.',
\t'Upload_file' => 'Hochladen',
\t'Filters' => 'Filter',
\t'Videos' => 'Videos',
\t'Music' => 'Musik',
\t'New_Folder' => 'Neues Verzeichniss',
\t'Folder_Created' => 'Verzeichnis erfolgreich erstellt',
\t'Existing_Folder' => 'Verzeichnis schließen',
\t'Confirm_Folder_del' => 'Sind Sie sicher das Sie dieses Verzeichnis inklusive aller darin enthaltenen Dateien l&ouml;schen m&ouml;chten?',
\t'Return_Files_List' => 'Zur&uuml;ck zur Datei&uuml;bersicht',
\t'Preview' => 'Vorschau',
\t'Download' => 'Download',
\t'Insert_Folder_Name' => 'Verzeichnisnamen angeben:',
\t'Root' => 'Basisverzeichnis',
\t'Rename' => 'Umbenenen',
\t'Back' => 'zur&uuml;ck',
\t'View' => 'Ansicht',
\t'View_list' => 'Listenansicht',
\t'View_columns_list' => 'Spaltenansicht',
\t'View_boxes' => 'Box Ansicht',
\t'Toolbar' => 'Werkzeugleiste',
\t'Actions' => 'Aktionen',
\t'Rename_existing_file' => 'Die Datei existiert bereits',
\t'Rename_existing_folder' => 'Das Verzeichnis existiert bereits',
\t'Empty_name' => 'Der Name ist leer',
\t'Text_filter' => 'Text Filter',
\t'Swipe_help' => 'Fahren Sie mit der Maus über die Datei um Details anzeigen zu lassen.',
\t'Upload_base' => 'Basis Upload',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'Java upload (gro&szlig;e Dateien)',
\t'Upload_java_help' => \"Wenn das Java Applet nicht geladen wird, dann stellen Sie sicher, 1. dass Java richtig installiert ist (falls nicht, dann <a href='http://java.com/en/download/'>[download link]</a>) 2. dass Ihre Firewall die aktuelle Aktion nicht blockiert.\",
\t'Upload_base_help' => \"Klicken Sie in dieses Feld oder ziehen Sie die gew&uuml;nschte Datei(en) per Drag & Drop.\",
\t'Type_dir' => 'Verzeichnis',
\t'Type' => 'Typ',
\t'Dimension' => 'Dimensionen',
\t'Size' => 'Grö&szlig;e',
\t'Date' => 'Datum',
\t'Filename' => 'Dateiname',
\t'Operations' => 'Operationen',
\t'Date_type' => 'd.m.y',
\t'OK' => 'OK',
\t'Cancel' => 'Abbrechen',
\t'Sorting' => 'Sortiere',
\t'Show_url' => 'zeige URL',
\t'Extract' => 'hier entpacken',
\t'File_info' => 'Datei Info',
\t'Edit_image' => 'Bild editieren',
\t'Duplicate' => 'Duplizieren',
\t'Folders' => 'Ordner',
\t'Copy' => 'Kopieren',
\t'Cut' => 'Aussschneiden',
\t'Paste' => 'Einf&uuml;gen',
\t'CB' => 'Zwischenablage', // clipboard
\t'Paste_Here' => 'Aus der Zwischenablage einf&uuml;gen',
\t'Paste_Confirm' => 'Sind Sie sicher, dass Sie es in diesen Ordner einf&uuml;gen möchten? Existierende Dateien/Verzeichnisse werden überschrieben.',
\t'Paste_Failed' => 'Einf&uuml;gen fehgeschlagen!',
\t'Clear_Clipboard' => 'Zwischenablage leeren',
\t'Clear_Clipboard_Confirm' => 'Zwischenablage wirkich leeren?',
\t'Files_ON_Clipboard' => 'Sie haben bereits Dateien in der Zwischenablage!',
\t'Copy_Cut_Size_Limit' => 'Die Dateien sind zu gross zum %s. Limit: %d MB pro Aktion', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Sie haben zu viele Dateien/Ordner zum %s ausgew&auml;lt. Limit: %d Dateien pro Aktion', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Sie haben nicht die Berechtigungen zum %s von Dateien..', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Das Bild konnte nicht gespeichert werden.',
\t'Zip_No_Extract' => 'Zip Datei konnte nicht entpackt werden. Die Datei ist m&ouml;glicherweise besch&auml;digt.',
\t'Zip_Invalid' => 'Dieses Dateiformat wird nicht unterst&uuml;zt. Zugelassene Formate: zip, gz und tar.',
\t'Dir_No_Write' => 'Dieses Dateiverzeichis ist schreibgesch&uuml;tzt.',
\t'Function_Disabled' => 'Die Funktion %s ist serverseitig deaktiviert.', // %s = cut or copy
\t'File_Permission' => 'Datei Berechtigung',
\t'File_Permission_Not_Allowed' => 'Changing %s permissions are not allowed.', // %s = files or folders
\t'File_Permission_Recursive' => 'Rekursiv anwenden?',
\t'File_Permission_Wrong_Mode' => \"The supplied permission mode is incorrect.\",
\t'User' => 'Benutzer',
\t'Group' => 'Gruppe',
\t'Yes' => 'Ja',
\t'No' => 'Nein',
\t'Lang_Not_Found' => 'Sprache wurde nicht gefunden.',
\t'Lang_Change' => 'Sprache wechseln',
\t'File_Not_Found' => 'Datei wurde nicht gefunden.',
\t'File_Open_Edit_Not_Allowed' => 'Sie sind nicht berechtigt diese Datei zu %.', // %s = open or edit
\t'Edit' => 'Bearbeiten',
\t'Edit_File' => \"Dateiinhalt bearbeiten\",
\t'File_Save_OK' => \"Datei erfolgreich gespeichert.\",
\t'File_Save_Error' => \"Beim Speichern der Datei ist ein Fehler aufgetreten.\",
\t'New_File' => 'Neue Datei',
\t'No_Extension' => 'Dateiendung muss hinzugef&uuml;gt werden.',
\t'Valid_Extensions' => 'Erlaubte Dateiendungen: %s', // %s = txt,log etc.
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
        
        $__internal_9829930949049d5a7cf38ac6c90f7d65e436fa416d9322e8a25acc9445080859->leave($__internal_9829930949049d5a7cf38ac6c90f7d65e436fa416d9322e8a25acc9445080859_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/de.php";
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

\t'Select' => 'Ausw&auml;hlen',
\t'Erase' => 'L&ouml;schen',
\t'Open' => '&Ouml;ffnen',
\t'Confirm_del' => 'Sind Sie sicher das Sie die Datei l&ouml;schen wollen?',
\t'All' => 'Alle',
\t'Files' => 'Dateien',
\t'Images' => 'Bilder',
\t'Archives' => 'Archive',
\t'Error_Upload' => 'Die Datei &uuml;berschreitet die maximal erlaubte Gr&ouml;ße.',
\t'Error_extension' => 'Dieser Dateityp ist nicht erlaubt.',
\t'Upload_file' => 'Hochladen',
\t'Filters' => 'Filter',
\t'Videos' => 'Videos',
\t'Music' => 'Musik',
\t'New_Folder' => 'Neues Verzeichniss',
\t'Folder_Created' => 'Verzeichnis erfolgreich erstellt',
\t'Existing_Folder' => 'Verzeichnis schließen',
\t'Confirm_Folder_del' => 'Sind Sie sicher das Sie dieses Verzeichnis inklusive aller darin enthaltenen Dateien l&ouml;schen m&ouml;chten?',
\t'Return_Files_List' => 'Zur&uuml;ck zur Datei&uuml;bersicht',
\t'Preview' => 'Vorschau',
\t'Download' => 'Download',
\t'Insert_Folder_Name' => 'Verzeichnisnamen angeben:',
\t'Root' => 'Basisverzeichnis',
\t'Rename' => 'Umbenenen',
\t'Back' => 'zur&uuml;ck',
\t'View' => 'Ansicht',
\t'View_list' => 'Listenansicht',
\t'View_columns_list' => 'Spaltenansicht',
\t'View_boxes' => 'Box Ansicht',
\t'Toolbar' => 'Werkzeugleiste',
\t'Actions' => 'Aktionen',
\t'Rename_existing_file' => 'Die Datei existiert bereits',
\t'Rename_existing_folder' => 'Das Verzeichnis existiert bereits',
\t'Empty_name' => 'Der Name ist leer',
\t'Text_filter' => 'Text Filter',
\t'Swipe_help' => 'Fahren Sie mit der Maus über die Datei um Details anzeigen zu lassen.',
\t'Upload_base' => 'Basis Upload',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'Java upload (gro&szlig;e Dateien)',
\t'Upload_java_help' => \"Wenn das Java Applet nicht geladen wird, dann stellen Sie sicher, 1. dass Java richtig installiert ist (falls nicht, dann <a href='http://java.com/en/download/'>[download link]</a>) 2. dass Ihre Firewall die aktuelle Aktion nicht blockiert.\",
\t'Upload_base_help' => \"Klicken Sie in dieses Feld oder ziehen Sie die gew&uuml;nschte Datei(en) per Drag & Drop.\",
\t'Type_dir' => 'Verzeichnis',
\t'Type' => 'Typ',
\t'Dimension' => 'Dimensionen',
\t'Size' => 'Grö&szlig;e',
\t'Date' => 'Datum',
\t'Filename' => 'Dateiname',
\t'Operations' => 'Operationen',
\t'Date_type' => 'd.m.y',
\t'OK' => 'OK',
\t'Cancel' => 'Abbrechen',
\t'Sorting' => 'Sortiere',
\t'Show_url' => 'zeige URL',
\t'Extract' => 'hier entpacken',
\t'File_info' => 'Datei Info',
\t'Edit_image' => 'Bild editieren',
\t'Duplicate' => 'Duplizieren',
\t'Folders' => 'Ordner',
\t'Copy' => 'Kopieren',
\t'Cut' => 'Aussschneiden',
\t'Paste' => 'Einf&uuml;gen',
\t'CB' => 'Zwischenablage', // clipboard
\t'Paste_Here' => 'Aus der Zwischenablage einf&uuml;gen',
\t'Paste_Confirm' => 'Sind Sie sicher, dass Sie es in diesen Ordner einf&uuml;gen möchten? Existierende Dateien/Verzeichnisse werden überschrieben.',
\t'Paste_Failed' => 'Einf&uuml;gen fehgeschlagen!',
\t'Clear_Clipboard' => 'Zwischenablage leeren',
\t'Clear_Clipboard_Confirm' => 'Zwischenablage wirkich leeren?',
\t'Files_ON_Clipboard' => 'Sie haben bereits Dateien in der Zwischenablage!',
\t'Copy_Cut_Size_Limit' => 'Die Dateien sind zu gross zum %s. Limit: %d MB pro Aktion', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Sie haben zu viele Dateien/Ordner zum %s ausgew&auml;lt. Limit: %d Dateien pro Aktion', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Sie haben nicht die Berechtigungen zum %s von Dateien..', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Das Bild konnte nicht gespeichert werden.',
\t'Zip_No_Extract' => 'Zip Datei konnte nicht entpackt werden. Die Datei ist m&ouml;glicherweise besch&auml;digt.',
\t'Zip_Invalid' => 'Dieses Dateiformat wird nicht unterst&uuml;zt. Zugelassene Formate: zip, gz und tar.',
\t'Dir_No_Write' => 'Dieses Dateiverzeichis ist schreibgesch&uuml;tzt.',
\t'Function_Disabled' => 'Die Funktion %s ist serverseitig deaktiviert.', // %s = cut or copy
\t'File_Permission' => 'Datei Berechtigung',
\t'File_Permission_Not_Allowed' => 'Changing %s permissions are not allowed.', // %s = files or folders
\t'File_Permission_Recursive' => 'Rekursiv anwenden?',
\t'File_Permission_Wrong_Mode' => \"The supplied permission mode is incorrect.\",
\t'User' => 'Benutzer',
\t'Group' => 'Gruppe',
\t'Yes' => 'Ja',
\t'No' => 'Nein',
\t'Lang_Not_Found' => 'Sprache wurde nicht gefunden.',
\t'Lang_Change' => 'Sprache wechseln',
\t'File_Not_Found' => 'Datei wurde nicht gefunden.',
\t'File_Open_Edit_Not_Allowed' => 'Sie sind nicht berechtigt diese Datei zu %.', // %s = open or edit
\t'Edit' => 'Bearbeiten',
\t'Edit_File' => \"Dateiinhalt bearbeiten\",
\t'File_Save_OK' => \"Datei erfolgreich gespeichert.\",
\t'File_Save_Error' => \"Beim Speichern der Datei ist ein Fehler aufgetreten.\",
\t'New_File' => 'Neue Datei',
\t'No_Extension' => 'Dateiendung muss hinzugef&uuml;gt werden.',
\t'Valid_Extensions' => 'Erlaubte Dateiendungen: %s', // %s = txt,log etc.
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
", "@MwebAdmin/filemanager/lang/de.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/de.php");
    }
}
