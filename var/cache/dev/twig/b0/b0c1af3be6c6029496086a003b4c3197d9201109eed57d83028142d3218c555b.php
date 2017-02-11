<?php

/* @MwebAdmin/filemanager/lang/nb_NO.php */
class __TwigTemplate_b5a30c8c6ba6c14d8d75064dfc416d75a1edfddf78c41623de3838319756d000 extends Twig_Template
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
        $__internal_7f5d6bb8ec6002e9a7e0338814b93c1087b95f029cb757cd0d76129fe5fa8cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5d6bb8ec6002e9a7e0338814b93c1087b95f029cb757cd0d76129fe5fa8cb3->enter($__internal_7f5d6bb8ec6002e9a7e0338814b93c1087b95f029cb757cd0d76129fe5fa8cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/nb_NO.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Velg',
\t'Erase' => 'Slett',
\t'Open' => 'Åpne',
\t'Confirm_del' => 'Er du sikker på at du vil slette denne filen?',
\t'All' => 'Alle',
\t'Files' => 'Filer',
\t'Images' => 'Bilder',
\t'Archives' => 'Arkiv',
\t'Error_Upload' => 'Den opplastede filen overskrider maksimal tillatt størrelse.',
\t'Error_extension' => 'Filtypen er ikke tillatt.',
\t'Upload_file' => 'Last opp fil',
\t'Filters' => 'Filter',
\t'Videos' => 'Videoer',
\t'Music' => 'Musikk',
\t'New_Folder' => 'Ny mappe',
\t'Folder_Created' => 'Mappe opprettet',
\t'Existing_Folder' => 'Eksisterende mappe',
\t'Confirm_Folder_del' => 'Er du sikker på at du vil slette mappen og alt innholdet?',
\t'Return_Files_List' => 'Tilbake til filoversikten',
\t'Preview' => 'Forhåndsvisning',
\t'Download' => 'Last ned',
\t'Insert_Folder_Name' => 'Gi mappen et navn:',
\t'Root' => 'Rot',
\t'Rename' => 'Gi nytt navn',
\t'Back' => 'Tilbake',
\t'View' => 'Visning',
\t'View_list' => 'Listevisning',
\t'View_columns_list' => 'Side ved side',
\t'View_boxes' => 'Boksvisning',
\t'Toolbar' => 'Verktøylinje',
\t'Actions' => 'Gjøremål',
\t'Rename_existing_file' => 'Filen er allerede opprettet',
\t'Rename_existing_folder' => 'Mappen er allerede opprettet',
\t'Empty_name' => 'Tomt navn',
\t'Text_filter' => 'Tekst-filter',
\t'Swipe_help' => 'Sveip filnavnet/mappenavnet for å vise alternativer',
\t'Upload_base' => 'Vanlig opplasting',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'Java-opplasting (store filer)',
\t'Upload_java_help' => \"Hvis java-appleten ikke lastes: 1. Sjekk om Java er installert, hvis ikke <a href='http://java.com/en/download/'>last ned Java</a> 2. Sjekk brannmur-innstillingene.\",
\t'Upload_base_help' => \"Dra og slipp filen(e) i området over eller klikk (virker for moderne nettlesere). Ved bruk av gammel nettleser: Velg filen og klikk på knappen. Når opplastingen er ferdig, klikk på tilbake-knappen øverst.\",
\t'Type_dir' => 'Mappe',
\t'Type' => 'Type',
\t'Dimension' => 'Dimensjoner',
\t'Size' => 'Størrelse',
\t'Date' => 'Dato',
\t'Filename' => 'Filnavn',
\t'Operations' => 'Handlinger',
\t'Date_type' => 'd.m.y',
\t'OK' => 'OK',
\t'Cancel' => 'Avbryt',
\t'Sorting' => 'Sortering',
\t'Show_url' => 'Vis URL',
\t'Extract' => 'Pakk ut her',
\t'File_info' => 'Fil-info',
\t'Edit_image' => 'Rediger bilde',
\t'Duplicate' => 'Duplikat',
\t'Folders' => 'Mapper',
\t'Copy' => 'Kopier',
\t'Cut' => 'Klipp ut',
\t'Paste' => 'Lim inn',
\t'CB' => 'Utklippstavle', // clipboard
\t'Paste_Here' => 'Lim inn i denne mappen',
\t'Paste_Confirm' => 'Er du sikker på at du vil lime inn i denne mappen? Dette vil overskrive eventuelle eksisterende filer eller mapper.',
\t'Paste_Failed' => 'Lim inn feilet',
\t'Clear_Clipboard' => 'Tøm utklippstavlen',
\t'Clear_Clipboard_Confirm' => 'Er du sikker på at du vil tømme utklippstavlen?',
\t'Files_ON_Clipboard' => 'Der er filer på utklippstavlen.',
\t'Copy_Cut_Size_Limit' => 'De valgte filene/mappene er for store for %s. Grense: %d MB/operasjon', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Du valgte for mange filer/mapper for %s. Grense: %d filer/operasjon', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Du har ikke lov til å %s filer.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Kunne ikke lagre bildet',
\t'Zip_No_Extract' => 'Kunne ikke pakke ut. Filen er muligens ødelagt.',
\t'Zip_Invalid' => 'Dette filetternavnet er ikke støttet. Gyldige filer: zip, gz, tar.',
\t'Dir_No_Write' => 'Mappen du valgte er ikke skrivbar.',
\t'Function_Disabled' => 'Funksjonen %s er blitt deaktivert av serveren.', // %s = cut or copy
\t'File_Permission' => 'Filrettigheter',
\t'File_Permission_Not_Allowed' => 'Forandring av %s rettigheter er ikke tillatt.', // %s = files or folders
\t'File_Permission_Recursive' => 'Utfør rekursivt?',
\t'File_Permission_Wrong_Mode' => \"Filrettigheten er feil.\",
\t'User' => 'Bruker',
\t'Group' => 'Gruppe',
\t'Yes' => 'Ja',
\t'No' => 'Nei',
\t'Lang_Not_Found' => 'Kunne ikke finne språk.',
\t'Lang_Change' => 'Forandre språk',
\t'File_Not_Found' => 'Fant ikke filen.',
\t'File_Open_Edit_Not_Allowed' => 'Du har ikke tillatelse til å %s denne filen.', // %s = open or edit
\t'Edit' => 'Rediger',
\t'Edit_File' => \"Rediger filens innhold\",
\t'File_Save_OK' => \"Filen ble lagret.\",
\t'File_Save_Error' => \"Det oppstod en feil når filen ble lagret.\",
\t'New_File' => 'Ny fil',
\t'No_Extension' => 'Du må legge til et fil-etternavn.',
\t'Valid_Extensions' => 'Gyldige fil-etternavn: %s', // %s = txt,log etc.
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
        
        $__internal_7f5d6bb8ec6002e9a7e0338814b93c1087b95f029cb757cd0d76129fe5fa8cb3->leave($__internal_7f5d6bb8ec6002e9a7e0338814b93c1087b95f029cb757cd0d76129fe5fa8cb3_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/nb_NO.php";
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

\t'Select' => 'Velg',
\t'Erase' => 'Slett',
\t'Open' => 'Åpne',
\t'Confirm_del' => 'Er du sikker på at du vil slette denne filen?',
\t'All' => 'Alle',
\t'Files' => 'Filer',
\t'Images' => 'Bilder',
\t'Archives' => 'Arkiv',
\t'Error_Upload' => 'Den opplastede filen overskrider maksimal tillatt størrelse.',
\t'Error_extension' => 'Filtypen er ikke tillatt.',
\t'Upload_file' => 'Last opp fil',
\t'Filters' => 'Filter',
\t'Videos' => 'Videoer',
\t'Music' => 'Musikk',
\t'New_Folder' => 'Ny mappe',
\t'Folder_Created' => 'Mappe opprettet',
\t'Existing_Folder' => 'Eksisterende mappe',
\t'Confirm_Folder_del' => 'Er du sikker på at du vil slette mappen og alt innholdet?',
\t'Return_Files_List' => 'Tilbake til filoversikten',
\t'Preview' => 'Forhåndsvisning',
\t'Download' => 'Last ned',
\t'Insert_Folder_Name' => 'Gi mappen et navn:',
\t'Root' => 'Rot',
\t'Rename' => 'Gi nytt navn',
\t'Back' => 'Tilbake',
\t'View' => 'Visning',
\t'View_list' => 'Listevisning',
\t'View_columns_list' => 'Side ved side',
\t'View_boxes' => 'Boksvisning',
\t'Toolbar' => 'Verktøylinje',
\t'Actions' => 'Gjøremål',
\t'Rename_existing_file' => 'Filen er allerede opprettet',
\t'Rename_existing_folder' => 'Mappen er allerede opprettet',
\t'Empty_name' => 'Tomt navn',
\t'Text_filter' => 'Tekst-filter',
\t'Swipe_help' => 'Sveip filnavnet/mappenavnet for å vise alternativer',
\t'Upload_base' => 'Vanlig opplasting',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'Java-opplasting (store filer)',
\t'Upload_java_help' => \"Hvis java-appleten ikke lastes: 1. Sjekk om Java er installert, hvis ikke <a href='http://java.com/en/download/'>last ned Java</a> 2. Sjekk brannmur-innstillingene.\",
\t'Upload_base_help' => \"Dra og slipp filen(e) i området over eller klikk (virker for moderne nettlesere). Ved bruk av gammel nettleser: Velg filen og klikk på knappen. Når opplastingen er ferdig, klikk på tilbake-knappen øverst.\",
\t'Type_dir' => 'Mappe',
\t'Type' => 'Type',
\t'Dimension' => 'Dimensjoner',
\t'Size' => 'Størrelse',
\t'Date' => 'Dato',
\t'Filename' => 'Filnavn',
\t'Operations' => 'Handlinger',
\t'Date_type' => 'd.m.y',
\t'OK' => 'OK',
\t'Cancel' => 'Avbryt',
\t'Sorting' => 'Sortering',
\t'Show_url' => 'Vis URL',
\t'Extract' => 'Pakk ut her',
\t'File_info' => 'Fil-info',
\t'Edit_image' => 'Rediger bilde',
\t'Duplicate' => 'Duplikat',
\t'Folders' => 'Mapper',
\t'Copy' => 'Kopier',
\t'Cut' => 'Klipp ut',
\t'Paste' => 'Lim inn',
\t'CB' => 'Utklippstavle', // clipboard
\t'Paste_Here' => 'Lim inn i denne mappen',
\t'Paste_Confirm' => 'Er du sikker på at du vil lime inn i denne mappen? Dette vil overskrive eventuelle eksisterende filer eller mapper.',
\t'Paste_Failed' => 'Lim inn feilet',
\t'Clear_Clipboard' => 'Tøm utklippstavlen',
\t'Clear_Clipboard_Confirm' => 'Er du sikker på at du vil tømme utklippstavlen?',
\t'Files_ON_Clipboard' => 'Der er filer på utklippstavlen.',
\t'Copy_Cut_Size_Limit' => 'De valgte filene/mappene er for store for %s. Grense: %d MB/operasjon', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Du valgte for mange filer/mapper for %s. Grense: %d filer/operasjon', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Du har ikke lov til å %s filer.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Kunne ikke lagre bildet',
\t'Zip_No_Extract' => 'Kunne ikke pakke ut. Filen er muligens ødelagt.',
\t'Zip_Invalid' => 'Dette filetternavnet er ikke støttet. Gyldige filer: zip, gz, tar.',
\t'Dir_No_Write' => 'Mappen du valgte er ikke skrivbar.',
\t'Function_Disabled' => 'Funksjonen %s er blitt deaktivert av serveren.', // %s = cut or copy
\t'File_Permission' => 'Filrettigheter',
\t'File_Permission_Not_Allowed' => 'Forandring av %s rettigheter er ikke tillatt.', // %s = files or folders
\t'File_Permission_Recursive' => 'Utfør rekursivt?',
\t'File_Permission_Wrong_Mode' => \"Filrettigheten er feil.\",
\t'User' => 'Bruker',
\t'Group' => 'Gruppe',
\t'Yes' => 'Ja',
\t'No' => 'Nei',
\t'Lang_Not_Found' => 'Kunne ikke finne språk.',
\t'Lang_Change' => 'Forandre språk',
\t'File_Not_Found' => 'Fant ikke filen.',
\t'File_Open_Edit_Not_Allowed' => 'Du har ikke tillatelse til å %s denne filen.', // %s = open or edit
\t'Edit' => 'Rediger',
\t'Edit_File' => \"Rediger filens innhold\",
\t'File_Save_OK' => \"Filen ble lagret.\",
\t'File_Save_Error' => \"Det oppstod en feil når filen ble lagret.\",
\t'New_File' => 'Ny fil',
\t'No_Extension' => 'Du må legge til et fil-etternavn.',
\t'Valid_Extensions' => 'Gyldige fil-etternavn: %s', // %s = txt,log etc.
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
", "@MwebAdmin/filemanager/lang/nb_NO.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/nb_NO.php");
    }
}
