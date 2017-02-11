<?php

/* @MwebAdmin/filemanager/lang/da.php */
class __TwigTemplate_d9ae3f9da09fb6d760b874afe3de595ee2569e4435dbf39e748a0dbe5bfb8c23 extends Twig_Template
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
        $__internal_9bb70d2a17d9b0df78b95ce23f43e9a2381997d08ba2c95a3717b8d1c64ec07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb70d2a17d9b0df78b95ce23f43e9a2381997d08ba2c95a3717b8d1c64ec07d->enter($__internal_9bb70d2a17d9b0df78b95ce23f43e9a2381997d08ba2c95a3717b8d1c64ec07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/da.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Vælg',
\t'Erase' => 'Slet',
\t'Open' => 'Åbn',
\t'Confirm_del' => 'Er du sikker på at du vil slette denne fil?',
\t'All' => 'Alle',
\t'Files' => 'Filer',
\t'Images' => 'Billeder',
\t'Archives' => 'Mapper',
\t'Error_Upload' => 'Den uploadede fil er større end tilladt (100MB).',
\t'Error_extension' => 'Fil typen er ikke tilladt.',
\t'Upload_file' => 'Upload',
\t'Filters' => 'Filter',
\t'Videos' => 'Videoer',
\t'Music' => 'Musik',
\t'New_Folder' => 'Ny mappe',
\t'Folder_Created' => 'Mappen er oprettet korrekt',
\t'Existing_Folder' => 'Mappen findes allerede',
\t'Confirm_Folder_del' => 'Er du sikker på at du vil slette mappen og alt dens indhold?',
\t'Return_Files_List' => 'Tilbage til fil oversigten',
\t'Preview' => 'Preview',
\t'Download' => 'Download',
\t'Insert_Folder_Name' => 'Indsæt mappe navn:',
\t'Root' => 'rod',
\t'Rename' => 'Omdøb',
\t'Back' => 'tilbage',
\t'View' => 'Se',
\t'View_list' => 'Vis liste',
\t'View_columns_list' => 'Søjle liste',
\t'View_boxes' => 'Box list',
\t'Toolbar' => 'Toolbar',
\t'Actions' => 'Handlinger',
\t'Rename_existing_file' => 'Filen findes allerede',
\t'Rename_existing_folder' => 'Mappen findes allerede',
\t'Empty_name' => 'Indsæt et navn',
\t'Text_filter' => 'tekst filter',
\t'Swipe_help' => 'Swipe over navnet på fil/mappe for at se muligheder',
\t'Upload_base' => 'Basis upload',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA upload (store filer)',
\t'Upload_java_help' => \"Hvis Java Appletten ikke starter, så: 1. sørg for at sikre dig at du har Java installeret, alternativt <a href='http://java.com/en/download/'>[download link]</a>   2. sørg for at sikre dig at der ikke er noget der blokeres af din firewall\",
\t'Upload_base_help' => \"Drag & Drop filer eller klik i området herover (moderne browsers) og vælg fil(erne). Når upload er færdigt, så tryk på 'Vend tilbage til filoversigt' knappen.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Type',
\t'Dimension' => 'Dimensioner',
\t'Size' => 'Størrelse',
\t'Date' => 'Dato',
\t'Filename' => 'Filenavn',
\t'Operations' => 'Operationer',
\t'Date_type' => 'år-måned-dag',
\t'OK' => 'OK',
\t'Cancel' => 'Afbryd',
\t'Sorting' => 'sortering',
\t'Show_url' => 'Vis sti',
\t'Extract' => 'Fold ud her',
\t'File_info' => 'fil info',
\t'Edit_image' => 'Redigér billede',
\t'Duplicate' => 'Kopiér',
\t'Folders' => 'Mapper',
\t'Copy' => 'Kopiér',
\t'Cut' => 'Klip',
\t'Paste' => 'Indsæt',
\t'CB' => 'UKH', // clipboard
\t'Paste_Here' => 'Indsæt i denne mappe',
\t'Paste_Confirm' => 'Er du sikker på at du vil indsætte i denne mappe? Det vil overkrive allerede eksisterende filer/mapper, hvis der findes nogen.',
\t'Paste_Failed' => 'Det lykkedes ikke at indsætte fil(en/erne)',
\t'Clear_Clipboard' => 'Slet indholdet af udklipsholderen',
\t'Clear_Clipboard_Confirm' => 'Er du sikker på at du vil slette indholdet af udklipsholderen?',
\t'Files_ON_Clipboard' => 'Der findes filer i udklipsholderen.',
\t'Copy_Cut_Size_Limit' => 'De valgte filer/mapper er for store til at %s. Max.: %d MB/operation', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Du har valgt for mange filer/mapper til at %s. Max.: %d filer/operation', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Du har ikke tilladelse til at %s filer. Tal med din administrator.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Det var ikke muligt at gemme billedet',
\t'Zip_No_Extract' => 'Det var ikke muligt at hente. Filen er muligvis ødelagt.',
\t'Zip_Invalid' => 'Denne filtype understøttes ikke. De mulige filtyper er: zip, gz, tar.',
\t'Dir_No_Write' => 'Der kan ikke skrives til den valgte mappe. Kontakt din administrator.',
\t'Function_Disabled' => 'Denne %s funktion er slået fra af serveren.', // %s = cut or copy
\t'File_Permission' => 'Fil tilladelser',
\t'File_Permission_Not_Allowed' => 'Det er ikke tilladt at ændre tilladelsen for %s.', // %s = files or folders
\t'File_Permission_Recursive' => 'Gøres ved alle mapper og filer (rekursivt)?',
\t'File_Permission_Wrong_Mode' => \"Den anvendte indstilling for tilladelse er ikke korrekt.\",
\t'User' => 'Bruger',
\t'Group' => 'Gruppe',
\t'Yes' => 'Ja',
\t'No' => 'Nej',
\t'Lang_Not_Found' => 'Cet var ikke muligt at finde sprog-filen.',
\t'Lang_Change' => 'Andet sprog',
\t'File_Not_Found' => 'Det var ikke muligt at finde filen.',
\t'File_Open_Edit_Not_Allowed' => 'Du har ikke tiladelse til at %s denne fil.', // %s = open or edit
\t'Edit' => 'Redigér',
\t'Edit_File' => \"Redigér filens indhold\",
\t'File_Save_OK' => \"Filen blev gemt.\",
\t'File_Save_Error' => \"Der opstod en fejl i forsøget på at gemme filen.\",
\t'New_File' => 'Opret ny fil',
\t'No_Extension' => 'Husk at tilføje filtype.',
\t'Valid_Extensions' => 'Gyldige filtyper er: %s', // %s = txt,log etc.
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
        
        $__internal_9bb70d2a17d9b0df78b95ce23f43e9a2381997d08ba2c95a3717b8d1c64ec07d->leave($__internal_9bb70d2a17d9b0df78b95ce23f43e9a2381997d08ba2c95a3717b8d1c64ec07d_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/da.php";
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

\t'Select' => 'Vælg',
\t'Erase' => 'Slet',
\t'Open' => 'Åbn',
\t'Confirm_del' => 'Er du sikker på at du vil slette denne fil?',
\t'All' => 'Alle',
\t'Files' => 'Filer',
\t'Images' => 'Billeder',
\t'Archives' => 'Mapper',
\t'Error_Upload' => 'Den uploadede fil er større end tilladt (100MB).',
\t'Error_extension' => 'Fil typen er ikke tilladt.',
\t'Upload_file' => 'Upload',
\t'Filters' => 'Filter',
\t'Videos' => 'Videoer',
\t'Music' => 'Musik',
\t'New_Folder' => 'Ny mappe',
\t'Folder_Created' => 'Mappen er oprettet korrekt',
\t'Existing_Folder' => 'Mappen findes allerede',
\t'Confirm_Folder_del' => 'Er du sikker på at du vil slette mappen og alt dens indhold?',
\t'Return_Files_List' => 'Tilbage til fil oversigten',
\t'Preview' => 'Preview',
\t'Download' => 'Download',
\t'Insert_Folder_Name' => 'Indsæt mappe navn:',
\t'Root' => 'rod',
\t'Rename' => 'Omdøb',
\t'Back' => 'tilbage',
\t'View' => 'Se',
\t'View_list' => 'Vis liste',
\t'View_columns_list' => 'Søjle liste',
\t'View_boxes' => 'Box list',
\t'Toolbar' => 'Toolbar',
\t'Actions' => 'Handlinger',
\t'Rename_existing_file' => 'Filen findes allerede',
\t'Rename_existing_folder' => 'Mappen findes allerede',
\t'Empty_name' => 'Indsæt et navn',
\t'Text_filter' => 'tekst filter',
\t'Swipe_help' => 'Swipe over navnet på fil/mappe for at se muligheder',
\t'Upload_base' => 'Basis upload',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA upload (store filer)',
\t'Upload_java_help' => \"Hvis Java Appletten ikke starter, så: 1. sørg for at sikre dig at du har Java installeret, alternativt <a href='http://java.com/en/download/'>[download link]</a>   2. sørg for at sikre dig at der ikke er noget der blokeres af din firewall\",
\t'Upload_base_help' => \"Drag & Drop filer eller klik i området herover (moderne browsers) og vælg fil(erne). Når upload er færdigt, så tryk på 'Vend tilbage til filoversigt' knappen.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Type',
\t'Dimension' => 'Dimensioner',
\t'Size' => 'Størrelse',
\t'Date' => 'Dato',
\t'Filename' => 'Filenavn',
\t'Operations' => 'Operationer',
\t'Date_type' => 'år-måned-dag',
\t'OK' => 'OK',
\t'Cancel' => 'Afbryd',
\t'Sorting' => 'sortering',
\t'Show_url' => 'Vis sti',
\t'Extract' => 'Fold ud her',
\t'File_info' => 'fil info',
\t'Edit_image' => 'Redigér billede',
\t'Duplicate' => 'Kopiér',
\t'Folders' => 'Mapper',
\t'Copy' => 'Kopiér',
\t'Cut' => 'Klip',
\t'Paste' => 'Indsæt',
\t'CB' => 'UKH', // clipboard
\t'Paste_Here' => 'Indsæt i denne mappe',
\t'Paste_Confirm' => 'Er du sikker på at du vil indsætte i denne mappe? Det vil overkrive allerede eksisterende filer/mapper, hvis der findes nogen.',
\t'Paste_Failed' => 'Det lykkedes ikke at indsætte fil(en/erne)',
\t'Clear_Clipboard' => 'Slet indholdet af udklipsholderen',
\t'Clear_Clipboard_Confirm' => 'Er du sikker på at du vil slette indholdet af udklipsholderen?',
\t'Files_ON_Clipboard' => 'Der findes filer i udklipsholderen.',
\t'Copy_Cut_Size_Limit' => 'De valgte filer/mapper er for store til at %s. Max.: %d MB/operation', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Du har valgt for mange filer/mapper til at %s. Max.: %d filer/operation', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Du har ikke tilladelse til at %s filer. Tal med din administrator.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Det var ikke muligt at gemme billedet',
\t'Zip_No_Extract' => 'Det var ikke muligt at hente. Filen er muligvis ødelagt.',
\t'Zip_Invalid' => 'Denne filtype understøttes ikke. De mulige filtyper er: zip, gz, tar.',
\t'Dir_No_Write' => 'Der kan ikke skrives til den valgte mappe. Kontakt din administrator.',
\t'Function_Disabled' => 'Denne %s funktion er slået fra af serveren.', // %s = cut or copy
\t'File_Permission' => 'Fil tilladelser',
\t'File_Permission_Not_Allowed' => 'Det er ikke tilladt at ændre tilladelsen for %s.', // %s = files or folders
\t'File_Permission_Recursive' => 'Gøres ved alle mapper og filer (rekursivt)?',
\t'File_Permission_Wrong_Mode' => \"Den anvendte indstilling for tilladelse er ikke korrekt.\",
\t'User' => 'Bruger',
\t'Group' => 'Gruppe',
\t'Yes' => 'Ja',
\t'No' => 'Nej',
\t'Lang_Not_Found' => 'Cet var ikke muligt at finde sprog-filen.',
\t'Lang_Change' => 'Andet sprog',
\t'File_Not_Found' => 'Det var ikke muligt at finde filen.',
\t'File_Open_Edit_Not_Allowed' => 'Du har ikke tiladelse til at %s denne fil.', // %s = open or edit
\t'Edit' => 'Redigér',
\t'Edit_File' => \"Redigér filens indhold\",
\t'File_Save_OK' => \"Filen blev gemt.\",
\t'File_Save_Error' => \"Der opstod en fejl i forsøget på at gemme filen.\",
\t'New_File' => 'Opret ny fil',
\t'No_Extension' => 'Husk at tilføje filtype.',
\t'Valid_Extensions' => 'Gyldige filtyper er: %s', // %s = txt,log etc.
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
", "@MwebAdmin/filemanager/lang/da.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/da.php");
    }
}
