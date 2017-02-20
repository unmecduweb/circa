<?php

/* @MwebAdmin/filemanager/lang/hr.php */
class __TwigTemplate_87236fd92618079e4e8248c53d116f5a00767f2aec3dc179318773e1a128355b extends Twig_Template
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
        $__internal_6435dd8df3c9cc892c290bf67b22c36a0f4c2e0605e989e53aa79ad01e804af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6435dd8df3c9cc892c290bf67b22c36a0f4c2e0605e989e53aa79ad01e804af9->enter($__internal_6435dd8df3c9cc892c290bf67b22c36a0f4c2e0605e989e53aa79ad01e804af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/hr.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Odaberi',
\t'Erase' => 'Obriši',
\t'Open' => 'Otvori',
\t'Confirm_del' => 'Jeste li sigurni da želite obrisati ovu datoteku?',
\t'All' => 'Sve',
\t'Files' => 'Datoteke',
\t'Images' => 'Slike',
\t'Archives' => 'Kompresirane arhive',
\t'Error_Upload' => 'Datoteka koju želite prenesti prelazi maximalnu dopuštenu veličinu.',
\t'Error_extension' => 'Datoteka s tom ekstenzijom nije dopuštena.',
\t'Upload_file' => 'Prenesi',
\t'Filters' => 'Filteri',
\t'Videos' => 'Video zapisi',
\t'Music' => 'Glazba',
\t'New_Folder' => 'Nova mapa',
\t'Folder_Created' => 'Mapa je uspješno kreirana',
\t'Existing_Folder' => 'Postojeća mapa',
\t'Confirm_Folder_del' => 'Jeste li sigurni da želite obrisati ovu mapu i sve datoteke u njoj?',
\t'Return_Files_List' => 'Vrati se na pregled datoteka',
\t'Preview' => 'Pogledaj',
\t'Download' => 'Preuzmi',
\t'Insert_Folder_Name' => 'Naziv nove mape:',
\t'Root' => 'polazno',
\t'Rename' => 'Preimenuj',
\t'Back' => 'natrag',
\t'View' => 'Prikaz',
\t'View_list' => 'Prikaz liste',
\t'View_columns_list' => 'Prikaz stupac-liste',
\t'View_boxes' => 'Prikaz grid',
\t'Toolbar' => 'Alatna traka',
\t'Actions' => 'Radnja',
\t'Rename_existing_file' => 'Datoteka već postoji',
\t'Rename_existing_folder' => 'Mapa već postoji',
\t'Empty_name' => 'Naziv nije upisan',
\t'Text_filter' => 'filtriraj po nazivu',
\t'Swipe_help' => 'Povucite prstom ime datoteke / mape za prikaz mogućnosti',
\t'Upload_base' => 'Putanja do mape za prenesene datoteke',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA prijenos (odlično za prijenos velikih datoteka)',
\t'Upload_java_help' => \"Ako se Java dodatak ne učita 1. provjerite imate li instaliran Java dodatak <a href='http://java.com/en/download/'>[link za preuzimanje]</a>   2. provjerite da firewall nije aktiviran i blokira dodatak\",
\t'Upload_base_help' => \"Povucite i ispustite datoteke ili samo kliknite (moderni preglednici) te odaberite datoteku(s). Kad prijenos završi, kliknite 'Natrag na pregled datoteka' gumb.\",
\t'Type_dir' => 'mapa',
\t'Type' => 'Tip',
\t'Dimension' => 'Dimenzije',
\t'Size' => 'Veličina',
\t'Date' => 'Datum',
\t'Filename' => 'Naziv datoteke',
\t'Operations' => 'Radnje',
\t'Date_type' => 'y-m-d',
\t'OK' => 'U redu',
\t'Cancel' => 'Odustani',
\t'Sorting' => 'sortiranje',
\t'Show_url' => 'prikaži URL',
\t'Extract' => 'raspakiraj ovdje',
\t'File_info' => 'informacije',
\t'Edit_image' => 'uredi sliku',
\t'Duplicate' => 'kopiraj',
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
        
        $__internal_6435dd8df3c9cc892c290bf67b22c36a0f4c2e0605e989e53aa79ad01e804af9->leave($__internal_6435dd8df3c9cc892c290bf67b22c36a0f4c2e0605e989e53aa79ad01e804af9_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/hr.php";
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

\t'Select' => 'Odaberi',
\t'Erase' => 'Obriši',
\t'Open' => 'Otvori',
\t'Confirm_del' => 'Jeste li sigurni da želite obrisati ovu datoteku?',
\t'All' => 'Sve',
\t'Files' => 'Datoteke',
\t'Images' => 'Slike',
\t'Archives' => 'Kompresirane arhive',
\t'Error_Upload' => 'Datoteka koju želite prenesti prelazi maximalnu dopuštenu veličinu.',
\t'Error_extension' => 'Datoteka s tom ekstenzijom nije dopuštena.',
\t'Upload_file' => 'Prenesi',
\t'Filters' => 'Filteri',
\t'Videos' => 'Video zapisi',
\t'Music' => 'Glazba',
\t'New_Folder' => 'Nova mapa',
\t'Folder_Created' => 'Mapa je uspješno kreirana',
\t'Existing_Folder' => 'Postojeća mapa',
\t'Confirm_Folder_del' => 'Jeste li sigurni da želite obrisati ovu mapu i sve datoteke u njoj?',
\t'Return_Files_List' => 'Vrati se na pregled datoteka',
\t'Preview' => 'Pogledaj',
\t'Download' => 'Preuzmi',
\t'Insert_Folder_Name' => 'Naziv nove mape:',
\t'Root' => 'polazno',
\t'Rename' => 'Preimenuj',
\t'Back' => 'natrag',
\t'View' => 'Prikaz',
\t'View_list' => 'Prikaz liste',
\t'View_columns_list' => 'Prikaz stupac-liste',
\t'View_boxes' => 'Prikaz grid',
\t'Toolbar' => 'Alatna traka',
\t'Actions' => 'Radnja',
\t'Rename_existing_file' => 'Datoteka već postoji',
\t'Rename_existing_folder' => 'Mapa već postoji',
\t'Empty_name' => 'Naziv nije upisan',
\t'Text_filter' => 'filtriraj po nazivu',
\t'Swipe_help' => 'Povucite prstom ime datoteke / mape za prikaz mogućnosti',
\t'Upload_base' => 'Putanja do mape za prenesene datoteke',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA prijenos (odlično za prijenos velikih datoteka)',
\t'Upload_java_help' => \"Ako se Java dodatak ne učita 1. provjerite imate li instaliran Java dodatak <a href='http://java.com/en/download/'>[link za preuzimanje]</a>   2. provjerite da firewall nije aktiviran i blokira dodatak\",
\t'Upload_base_help' => \"Povucite i ispustite datoteke ili samo kliknite (moderni preglednici) te odaberite datoteku(s). Kad prijenos završi, kliknite 'Natrag na pregled datoteka' gumb.\",
\t'Type_dir' => 'mapa',
\t'Type' => 'Tip',
\t'Dimension' => 'Dimenzije',
\t'Size' => 'Veličina',
\t'Date' => 'Datum',
\t'Filename' => 'Naziv datoteke',
\t'Operations' => 'Radnje',
\t'Date_type' => 'y-m-d',
\t'OK' => 'U redu',
\t'Cancel' => 'Odustani',
\t'Sorting' => 'sortiranje',
\t'Show_url' => 'prikaži URL',
\t'Extract' => 'raspakiraj ovdje',
\t'File_info' => 'informacije',
\t'Edit_image' => 'uredi sliku',
\t'Duplicate' => 'kopiraj',
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
", "@MwebAdmin/filemanager/lang/hr.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/hr.php");
    }
}
