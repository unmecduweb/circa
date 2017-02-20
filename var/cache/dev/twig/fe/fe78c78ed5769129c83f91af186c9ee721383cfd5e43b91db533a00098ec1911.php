<?php

/* @MwebAdmin/filemanager/lang/sv_SE.php */
class __TwigTemplate_0895714af1f13cc6f2ac77ece86a70eaa75a6d0ac12197994333c1fe59865db2 extends Twig_Template
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
        $__internal_ea149e7dab684c689c5004b2648d35693e7926523d897ac73b68220b17701a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea149e7dab684c689c5004b2648d35693e7926523d897ac73b68220b17701a4a->enter($__internal_ea149e7dab684c689c5004b2648d35693e7926523d897ac73b68220b17701a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/sv_SE.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Välj', // Select
\t'Erase' => 'Radera', // Erase
\t'Open' => 'Öppna', // Open
\t'Confirm_del' => 'Är du säker på att du vill radera denna fil?', //Are you sure you want to delete this file?
\t'All' => 'Alla', // All
\t'Files' => 'Filer', // Files
\t'Images' => 'Bilder', // Images
\t'Archives' => 'Arkiv', // Archives
\t'Error_Upload' => 'Den uppladdade filen överskrider max storleken.', // The uploaded file exceeds the max size allowed.
\t'Error_extension' => 'Filtypen är ej tillåten.', // File extension is not allowed.
\t'Upload_file' => 'Ladda upp', // Upload
\t'Filters' => 'Filter', // Filters
\t'Videos' => 'Videor', // Videos
\t'Music' => 'Musik', // Music
\t'New_Folder' => 'Ny katalog', // New Folder
\t'Folder_Created' => 'Katalogen har skapats', // Folder correctly created
\t'Existing_Folder' => 'Befintlig katalog', // Existing folder
\t'Confirm_Folder_del' => 'Är du säker på att du vill radera denna katalog samt dess innehåll?', // Are you sure to delete the folder and all the elements in it?
\t'Return_Files_List' => 'Tillbaka till filvisaren', // Return to files list
\t'Preview' => 'Förhandsgranska', // Preview
\t'Download' => 'Ladda hem', // Download
\t'Insert_Folder_Name' => 'Ange katalog namn:', // Insert folder name:
\t'Root' => 'root', // root
\t'Rename' => 'Byt namn', // Rename
\t'Back' => 'tillbaka', // back
\t'View' => 'Visa', // View
\t'View_list' => 'Listvy', // List view
\t'View_columns_list' => 'Columnvy', // Columns list view
\t'View_boxes' => 'Boxvy', // Box view
\t'Toolbar' => 'Verktygsfält', // Toolbar
\t'Actions' => 'Åtgärder', // Actions
\t'Rename_existing_file' => 'Det finns redan en fil med det namnet', // The file is already existing
\t'Rename_existing_folder' => 'Det finns redan en katalog med det namnet', // The folder is already existing
\t'Empty_name' => 'Du har ej angivet något namn', // The name is empty
\t'Text_filter' => 'text filter', // text filter
\t'Swipe_help' => 'Svep över filnamnet/katalognamnet för att visa åtgärder', // Swipe the name of file/folder to show options
\t'Upload_base' => 'Basal uppladdning', // Base upload
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA uppladdning (för stora filer)', // JAVA upload (big size files)
\t'Upload_java_help' => \"Om Java Appleten inte laddar, 1. säkerställ att Java är installerat, <a href='http://java.com/en/download/'>ladda hem</a> och installera om det saknas  2. säkerställ att programmet inte blokeras av din brandvägg\", // If the Java Applet doesn't load, 1. make sure you have Java installed, otherwise <a href='http://java.com/en/download/'>[download link]</a>   2. make sure nothing is blocked by your firewall
\t'Upload_base_help' => \"Dra och släpa filer eller klicka ovan och välj en eller flera filer. När uppladningen är klar, klicka på 'Tillbaka till filvisaren' knappen.\", // Drag & Drop files or click in the area above (modern browsers) and select the file(s). When the upload is complete, click the 'Return to files list' button.
\t'Type_dir' => 'katalog', // dir
\t'Type' => 'Typ', // Type
\t'Dimension' => 'Dimension', // Dimension
\t'Size' => 'Storlek', // Size
\t'Date' => 'Datum', // Date
\t'Filename' => 'Filname', // Filename
\t'Operations' => 'Handlingar', // Operations
\t'Date_type' => 'y-m-d', // y-m-d
\t'OK' => 'OK', // OK
\t'Cancel' => 'Avbryt', // Cancel
\t'Sorting' => 'sortering', // sorting
\t'Show_url' => 'visa sökväg', // show URL
\t'Extract' => 'packa upp här', // extract here
\t'File_info' => 'fil information', // file info
\t'Edit_image' => 'editera bild', // edit image
\t'Duplicate' => 'Duplicera', // Duplicate
\t'Folders' => 'Folders', // Folders
\t'Copy' => 'Kopiera', // Copy
\t'Cut' => 'Klipp ut', // Cut
\t'Paste' => 'Klistra in', // Paste
\t'CB' => 'Urklipp', //CB,  clipboard
\t'Paste_Here' => 'Klistra in i denna mapp', // Paste to this directory
\t'Paste_Confirm' => 'Är du säker på att du vill klistra in i denna mapp? Befintliga filer och mappar kan bli överskrivna.', // Are you sure you want to paste to this directory? This will overwrite existing files/folders if encountered any.
\t'Paste_Failed' => 'Misslyckades med att klistra in fil(er)', // Failed to paste file(s)
\t'Clear_Clipboard' => 'Rensa urklipp', // Clear clipboard
\t'Clear_Clipboard_Confirm' => 'Är du säker på att du vill rensa urklipp?', // Are you sure you want to clear the clipboard?
\t'Files_ON_Clipboard' => 'Det finns filer i urklipp.', // There are files on the clipboard.
\t'Copy_Cut_Size_Limit' => 'De valda filerna/mapparna är för stora för att %s. Gräns: %d MB per operation', // The selected files/folders are too big to %s. Limit: %d MB/operation      %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'För många filer/mappar är valda för att de ska kunna %s. Gräns: #d filer per operation', // You selected too many files/folders to %s. Limit: %d files/operation     %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Du har ej behörighet att %s filer.', // You are not allowed to %s files.        %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Misslyckades med att spara bild', // Could not save image
\t'Zip_No_Extract' => 'Misslyckades med att packa upp. Filen kan eventuellt vara korrupt.', // Could not extract. File might be corrupt.
\t'Zip_Invalid' => 'Filtypen stöds ej. Stödja filtyper: zip, gz och tar.', // This extension is not supported. Valid: zip, gz, tar.
\t'Dir_No_Write' => 'Det går ej att skriva till den valda sökvägen.', // The directory you selected is not writable.
\t'Function_Disabled' => 'Funktionen för att %s är inaktiverad.', // The %s function has been disabled by the server.       %s = cut or copy
\t'File_Permission' => 'File permission',
\t'File_Permission_Not_Allowed' => 'Changing %s permissions are not allowed.', // %s = files or folders
\t'File_Permission_Recursive' => 'Tillämpa rekursivt', // 'Apply recursively?'
\t'File_Permission_Wrong_Mode' => 'Felaktiga filrättigheter.', // \"The supplied permission mode is incorrect.\"
\t'User' => 'Användare', // 'User'
\t'Group' => 'Grupp', // 'Group'
\t'Yes' => 'Ja', // 'Yes'
\t'No' => 'Nej', // 'No'
\t'Lang_Not_Found' => 'Kunde inte hitta språk.', // 'Could not find language.'
\t'Lang_Change' => 'Växla språk', // 'Change the language'
\t'File_Not_Found' => 'Kunde inte hitta fil', // 'Could not find the file.'
\t'File_Open_Edit_Not_Allowed' => 'Du har inte rättigheter till %s den här filen.', // 'You are not allowed to %s this file.', // %s = open or edit
\t'Edit' => 'Redigera', // 'Edit'
\t'Edit_File' => 'Redigera filens innehåll', // \"Edit file's content\"
\t'File_Save_OK' => 'Filen sparades', // \"File successfully saved.\"
\t'File_Save_Error' => 'Det uppstod ett fel när filen sparades.', // \"There was an error while saving the file.\"
\t'New_File' => 'Ny fil', // 'New File'
\t'No_Extension' => 'Du måste lägga till en filändelse', // 'You have to add a file extension.'
\t'Valid_Extensions' => 'Tillåtna filändelser: %s', // 'Valid extensions: %s', // %s = txt,log etc.
\t'Upload_message' => 'Släpp fil här för att ladda upp', // \"Drop file here to upload\"

\t'SERVER ERROR' => 'SERVER FEL', // \"SERVER ERROR\",
\t'forbiden' => 'Förbjudet', // \"Forbiden\",
\t'wrong path' => 'Fel sökväg', // \"Wrong path\",
\t'wrong name' => 'Fel namn', // \"Wrong name\",
\t'wrong extension' => 'Fel filändelse', // \"Wrong extension\",
\t'wrong option' => 'Fel alternativ', // \"Wrong option\",
\t'wrong data' => 'Fel data', // \"Wrong data\",
\t'wrong action' => 'Fel åtgärd', // \"Wrong action\",
\t'wrong sub-action' => 'Fel delåtgärd', // \"Wrong sub-actio\",
\t'no action passed' => 'Ingen åtgärd skickad', // \"No action passed\",
\t'no path' => 'Ingen sökväg', //\"No path\",
\t'no file' => 'Ingen fil', //\"No file\",
\t'view type number missing' => 'Vytypsnummer saknas', // \"View type number missing\",
\t'Not enought Memory' => 'Inte tillräckligt med minne', // \"Not enought Memory\",
\t'max_size_reached' => 'Din bildkatalog har nått den maximala storleken av %d MB', // \"Your image folder has reach its maximale size of %d MB.\", //%d = max overall size
\t'B' => \"B\",
\t'KB' => \"KB\",
\t'MB' => \"MB\",
\t'GB' => \"GB\",
\t'TB' => \"TB\",
\t'total size' => 'Total storlek', // \"Total size\",
);
";
        
        $__internal_ea149e7dab684c689c5004b2648d35693e7926523d897ac73b68220b17701a4a->leave($__internal_ea149e7dab684c689c5004b2648d35693e7926523d897ac73b68220b17701a4a_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/sv_SE.php";
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

\t'Select' => 'Välj', // Select
\t'Erase' => 'Radera', // Erase
\t'Open' => 'Öppna', // Open
\t'Confirm_del' => 'Är du säker på att du vill radera denna fil?', //Are you sure you want to delete this file?
\t'All' => 'Alla', // All
\t'Files' => 'Filer', // Files
\t'Images' => 'Bilder', // Images
\t'Archives' => 'Arkiv', // Archives
\t'Error_Upload' => 'Den uppladdade filen överskrider max storleken.', // The uploaded file exceeds the max size allowed.
\t'Error_extension' => 'Filtypen är ej tillåten.', // File extension is not allowed.
\t'Upload_file' => 'Ladda upp', // Upload
\t'Filters' => 'Filter', // Filters
\t'Videos' => 'Videor', // Videos
\t'Music' => 'Musik', // Music
\t'New_Folder' => 'Ny katalog', // New Folder
\t'Folder_Created' => 'Katalogen har skapats', // Folder correctly created
\t'Existing_Folder' => 'Befintlig katalog', // Existing folder
\t'Confirm_Folder_del' => 'Är du säker på att du vill radera denna katalog samt dess innehåll?', // Are you sure to delete the folder and all the elements in it?
\t'Return_Files_List' => 'Tillbaka till filvisaren', // Return to files list
\t'Preview' => 'Förhandsgranska', // Preview
\t'Download' => 'Ladda hem', // Download
\t'Insert_Folder_Name' => 'Ange katalog namn:', // Insert folder name:
\t'Root' => 'root', // root
\t'Rename' => 'Byt namn', // Rename
\t'Back' => 'tillbaka', // back
\t'View' => 'Visa', // View
\t'View_list' => 'Listvy', // List view
\t'View_columns_list' => 'Columnvy', // Columns list view
\t'View_boxes' => 'Boxvy', // Box view
\t'Toolbar' => 'Verktygsfält', // Toolbar
\t'Actions' => 'Åtgärder', // Actions
\t'Rename_existing_file' => 'Det finns redan en fil med det namnet', // The file is already existing
\t'Rename_existing_folder' => 'Det finns redan en katalog med det namnet', // The folder is already existing
\t'Empty_name' => 'Du har ej angivet något namn', // The name is empty
\t'Text_filter' => 'text filter', // text filter
\t'Swipe_help' => 'Svep över filnamnet/katalognamnet för att visa åtgärder', // Swipe the name of file/folder to show options
\t'Upload_base' => 'Basal uppladdning', // Base upload
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA uppladdning (för stora filer)', // JAVA upload (big size files)
\t'Upload_java_help' => \"Om Java Appleten inte laddar, 1. säkerställ att Java är installerat, <a href='http://java.com/en/download/'>ladda hem</a> och installera om det saknas  2. säkerställ att programmet inte blokeras av din brandvägg\", // If the Java Applet doesn't load, 1. make sure you have Java installed, otherwise <a href='http://java.com/en/download/'>[download link]</a>   2. make sure nothing is blocked by your firewall
\t'Upload_base_help' => \"Dra och släpa filer eller klicka ovan och välj en eller flera filer. När uppladningen är klar, klicka på 'Tillbaka till filvisaren' knappen.\", // Drag & Drop files or click in the area above (modern browsers) and select the file(s). When the upload is complete, click the 'Return to files list' button.
\t'Type_dir' => 'katalog', // dir
\t'Type' => 'Typ', // Type
\t'Dimension' => 'Dimension', // Dimension
\t'Size' => 'Storlek', // Size
\t'Date' => 'Datum', // Date
\t'Filename' => 'Filname', // Filename
\t'Operations' => 'Handlingar', // Operations
\t'Date_type' => 'y-m-d', // y-m-d
\t'OK' => 'OK', // OK
\t'Cancel' => 'Avbryt', // Cancel
\t'Sorting' => 'sortering', // sorting
\t'Show_url' => 'visa sökväg', // show URL
\t'Extract' => 'packa upp här', // extract here
\t'File_info' => 'fil information', // file info
\t'Edit_image' => 'editera bild', // edit image
\t'Duplicate' => 'Duplicera', // Duplicate
\t'Folders' => 'Folders', // Folders
\t'Copy' => 'Kopiera', // Copy
\t'Cut' => 'Klipp ut', // Cut
\t'Paste' => 'Klistra in', // Paste
\t'CB' => 'Urklipp', //CB,  clipboard
\t'Paste_Here' => 'Klistra in i denna mapp', // Paste to this directory
\t'Paste_Confirm' => 'Är du säker på att du vill klistra in i denna mapp? Befintliga filer och mappar kan bli överskrivna.', // Are you sure you want to paste to this directory? This will overwrite existing files/folders if encountered any.
\t'Paste_Failed' => 'Misslyckades med att klistra in fil(er)', // Failed to paste file(s)
\t'Clear_Clipboard' => 'Rensa urklipp', // Clear clipboard
\t'Clear_Clipboard_Confirm' => 'Är du säker på att du vill rensa urklipp?', // Are you sure you want to clear the clipboard?
\t'Files_ON_Clipboard' => 'Det finns filer i urklipp.', // There are files on the clipboard.
\t'Copy_Cut_Size_Limit' => 'De valda filerna/mapparna är för stora för att %s. Gräns: %d MB per operation', // The selected files/folders are too big to %s. Limit: %d MB/operation      %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'För många filer/mappar är valda för att de ska kunna %s. Gräns: #d filer per operation', // You selected too many files/folders to %s. Limit: %d files/operation     %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Du har ej behörighet att %s filer.', // You are not allowed to %s files.        %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Misslyckades med att spara bild', // Could not save image
\t'Zip_No_Extract' => 'Misslyckades med att packa upp. Filen kan eventuellt vara korrupt.', // Could not extract. File might be corrupt.
\t'Zip_Invalid' => 'Filtypen stöds ej. Stödja filtyper: zip, gz och tar.', // This extension is not supported. Valid: zip, gz, tar.
\t'Dir_No_Write' => 'Det går ej att skriva till den valda sökvägen.', // The directory you selected is not writable.
\t'Function_Disabled' => 'Funktionen för att %s är inaktiverad.', // The %s function has been disabled by the server.       %s = cut or copy
\t'File_Permission' => 'File permission',
\t'File_Permission_Not_Allowed' => 'Changing %s permissions are not allowed.', // %s = files or folders
\t'File_Permission_Recursive' => 'Tillämpa rekursivt', // 'Apply recursively?'
\t'File_Permission_Wrong_Mode' => 'Felaktiga filrättigheter.', // \"The supplied permission mode is incorrect.\"
\t'User' => 'Användare', // 'User'
\t'Group' => 'Grupp', // 'Group'
\t'Yes' => 'Ja', // 'Yes'
\t'No' => 'Nej', // 'No'
\t'Lang_Not_Found' => 'Kunde inte hitta språk.', // 'Could not find language.'
\t'Lang_Change' => 'Växla språk', // 'Change the language'
\t'File_Not_Found' => 'Kunde inte hitta fil', // 'Could not find the file.'
\t'File_Open_Edit_Not_Allowed' => 'Du har inte rättigheter till %s den här filen.', // 'You are not allowed to %s this file.', // %s = open or edit
\t'Edit' => 'Redigera', // 'Edit'
\t'Edit_File' => 'Redigera filens innehåll', // \"Edit file's content\"
\t'File_Save_OK' => 'Filen sparades', // \"File successfully saved.\"
\t'File_Save_Error' => 'Det uppstod ett fel när filen sparades.', // \"There was an error while saving the file.\"
\t'New_File' => 'Ny fil', // 'New File'
\t'No_Extension' => 'Du måste lägga till en filändelse', // 'You have to add a file extension.'
\t'Valid_Extensions' => 'Tillåtna filändelser: %s', // 'Valid extensions: %s', // %s = txt,log etc.
\t'Upload_message' => 'Släpp fil här för att ladda upp', // \"Drop file here to upload\"

\t'SERVER ERROR' => 'SERVER FEL', // \"SERVER ERROR\",
\t'forbiden' => 'Förbjudet', // \"Forbiden\",
\t'wrong path' => 'Fel sökväg', // \"Wrong path\",
\t'wrong name' => 'Fel namn', // \"Wrong name\",
\t'wrong extension' => 'Fel filändelse', // \"Wrong extension\",
\t'wrong option' => 'Fel alternativ', // \"Wrong option\",
\t'wrong data' => 'Fel data', // \"Wrong data\",
\t'wrong action' => 'Fel åtgärd', // \"Wrong action\",
\t'wrong sub-action' => 'Fel delåtgärd', // \"Wrong sub-actio\",
\t'no action passed' => 'Ingen åtgärd skickad', // \"No action passed\",
\t'no path' => 'Ingen sökväg', //\"No path\",
\t'no file' => 'Ingen fil', //\"No file\",
\t'view type number missing' => 'Vytypsnummer saknas', // \"View type number missing\",
\t'Not enought Memory' => 'Inte tillräckligt med minne', // \"Not enought Memory\",
\t'max_size_reached' => 'Din bildkatalog har nått den maximala storleken av %d MB', // \"Your image folder has reach its maximale size of %d MB.\", //%d = max overall size
\t'B' => \"B\",
\t'KB' => \"KB\",
\t'MB' => \"MB\",
\t'GB' => \"GB\",
\t'TB' => \"TB\",
\t'total size' => 'Total storlek', // \"Total size\",
);
", "@MwebAdmin/filemanager/lang/sv_SE.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/sv_SE.php");
    }
}
