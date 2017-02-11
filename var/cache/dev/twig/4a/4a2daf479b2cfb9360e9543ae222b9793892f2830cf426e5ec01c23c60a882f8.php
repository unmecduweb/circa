<?php

/* @MwebAdmin/filemanager/lang/sl.php */
class __TwigTemplate_30f9879940b4b4782ace7a39643ec52ae0ca868f735bd720488720c1a1425586 extends Twig_Template
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
        $__internal_dec45861eebbd0ec4df8644b844c44bac381201f02018bce64c7d683671fede2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec45861eebbd0ec4df8644b844c44bac381201f02018bce64c7d683671fede2->enter($__internal_dec45861eebbd0ec4df8644b844c44bac381201f02018bce64c7d683671fede2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/sl.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Označi',
\t'Erase' => 'Izbriši',
\t'Open' => 'Odpri',
\t'Confirm_del' => 'Ali res želite izbrisati to datoteko?',
\t'All' => 'Vse',
\t'Files' => 'Datoteke',
\t'Images' => 'Slike',
\t'Archives' => 'Arhiv',
\t'Error_Upload' => 'Velikost datoteke presega maksimalno dovoljeno velikost.',
\t'Error_extension' => 'Izbrana vrsta datoteke ni dovoljena.',
\t'Upload_file' => 'Naloži datoteke na strežnik',
\t'Filters' => 'Filtri',
\t'Videos' => 'Video',
\t'Music' => 'Glasba',
\t'New_Folder' => 'Nova mapa',
\t'Folder_Created' => 'Mapa je bila ustvarjena',
\t'Existing_Folder' => 'Obstoječa mapa',
\t'Confirm_Folder_del' => 'Ali res želite izbrisati mapo in vso vsebino, ki je v mapi?',
\t'Return_Files_List' => 'Nazaj na seznam datotek',
\t'Preview' => 'Predogled',
\t'Download' => 'Prenesi',
\t'Insert_Folder_Name' => 'Vpište ime mape:',
\t'Root' => 'Domov',
\t'Rename' => 'Preimenuj',
\t'Back' => 'Nazaj',
\t'View' => 'Prikaz',
\t'View_list' => 'Seznam',
\t'View_columns_list' => 'Stolpci',
\t'View_boxes' => 'Okvirji',
\t'Toolbar' => 'Orodna vrstica',
\t'Actions' => 'Akcije',
\t'Rename_existing_file' => 'Datoteka že obstaja',
\t'Rename_existing_folder' => 'Mapa že obstaja',
\t'Empty_name' => 'Ime je prazno',
\t'Text_filter' => 'išči',
\t'Swipe_help' => 'Izmakni ime datoteke/mape za prikaz možnosti',
\t'Upload_base' => 'Osnovni način',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA prenos (za velike datoteke)',
\t'Upload_java_help' => \"Če se Java ne zažene, preverite če imate Javo naloženo (če je nimate jo <a href='http://java.com/en/download/'>[naložite]</a>) in preverite da je ne blokira vaš požarni zid.\",
\t'Upload_base_help' => 'Povlecite in spustite datoteke ali kliknite v okvir (pri sodobnih brskalnikih) in izberite datoteke. Ko bo nalaganje končano, kliknite gumb \"Nazaj na seznam datotek\".',
\t'Type_dir' => 'Mapa',
\t'Type' => 'Vrsta',
\t'Dimension' => 'Dimenzija',
\t'Size' => 'Velikost',
\t'Date' => 'Datum',
\t'Filename' => 'Ime',
\t'Operations' => 'Ukazi',
\t'Date_type' => 'd.m.y',
\t'OK' => 'Potrdi',
\t'Cancel' => 'Prekliči',
\t'Sorting' => 'Razvrsti po:',
\t'Show_url' => 'Prikaži povezavo',
\t'Extract' => 'Razširi sem',
\t'File_info' => 'Podatki o datoteki',
\t'Edit_image' => 'Uredi sliko',
\t'Duplicate' => 'Podvoji',
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
        
        $__internal_dec45861eebbd0ec4df8644b844c44bac381201f02018bce64c7d683671fede2->leave($__internal_dec45861eebbd0ec4df8644b844c44bac381201f02018bce64c7d683671fede2_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/sl.php";
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

\t'Select' => 'Označi',
\t'Erase' => 'Izbriši',
\t'Open' => 'Odpri',
\t'Confirm_del' => 'Ali res želite izbrisati to datoteko?',
\t'All' => 'Vse',
\t'Files' => 'Datoteke',
\t'Images' => 'Slike',
\t'Archives' => 'Arhiv',
\t'Error_Upload' => 'Velikost datoteke presega maksimalno dovoljeno velikost.',
\t'Error_extension' => 'Izbrana vrsta datoteke ni dovoljena.',
\t'Upload_file' => 'Naloži datoteke na strežnik',
\t'Filters' => 'Filtri',
\t'Videos' => 'Video',
\t'Music' => 'Glasba',
\t'New_Folder' => 'Nova mapa',
\t'Folder_Created' => 'Mapa je bila ustvarjena',
\t'Existing_Folder' => 'Obstoječa mapa',
\t'Confirm_Folder_del' => 'Ali res želite izbrisati mapo in vso vsebino, ki je v mapi?',
\t'Return_Files_List' => 'Nazaj na seznam datotek',
\t'Preview' => 'Predogled',
\t'Download' => 'Prenesi',
\t'Insert_Folder_Name' => 'Vpište ime mape:',
\t'Root' => 'Domov',
\t'Rename' => 'Preimenuj',
\t'Back' => 'Nazaj',
\t'View' => 'Prikaz',
\t'View_list' => 'Seznam',
\t'View_columns_list' => 'Stolpci',
\t'View_boxes' => 'Okvirji',
\t'Toolbar' => 'Orodna vrstica',
\t'Actions' => 'Akcije',
\t'Rename_existing_file' => 'Datoteka že obstaja',
\t'Rename_existing_folder' => 'Mapa že obstaja',
\t'Empty_name' => 'Ime je prazno',
\t'Text_filter' => 'išči',
\t'Swipe_help' => 'Izmakni ime datoteke/mape za prikaz možnosti',
\t'Upload_base' => 'Osnovni način',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA prenos (za velike datoteke)',
\t'Upload_java_help' => \"Če se Java ne zažene, preverite če imate Javo naloženo (če je nimate jo <a href='http://java.com/en/download/'>[naložite]</a>) in preverite da je ne blokira vaš požarni zid.\",
\t'Upload_base_help' => 'Povlecite in spustite datoteke ali kliknite v okvir (pri sodobnih brskalnikih) in izberite datoteke. Ko bo nalaganje končano, kliknite gumb \"Nazaj na seznam datotek\".',
\t'Type_dir' => 'Mapa',
\t'Type' => 'Vrsta',
\t'Dimension' => 'Dimenzija',
\t'Size' => 'Velikost',
\t'Date' => 'Datum',
\t'Filename' => 'Ime',
\t'Operations' => 'Ukazi',
\t'Date_type' => 'd.m.y',
\t'OK' => 'Potrdi',
\t'Cancel' => 'Prekliči',
\t'Sorting' => 'Razvrsti po:',
\t'Show_url' => 'Prikaži povezavo',
\t'Extract' => 'Razširi sem',
\t'File_info' => 'Podatki o datoteki',
\t'Edit_image' => 'Uredi sliko',
\t'Duplicate' => 'Podvoji',
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
", "@MwebAdmin/filemanager/lang/sl.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/sl.php");
    }
}
