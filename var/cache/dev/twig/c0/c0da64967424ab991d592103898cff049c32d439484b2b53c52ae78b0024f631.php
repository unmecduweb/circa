<?php

/* @MwebAdmin/filemanager/lang/nl.php */
class __TwigTemplate_66e46a78e07f23a119630e80c80737fc8e9416c47446fc7c4e8be4e32ff84652 extends Twig_Template
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
        $__internal_eb828038bfc3e83c63dcdd36995fdefbc5ae7f77a7c6b75599ed6233a8e78f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb828038bfc3e83c63dcdd36995fdefbc5ae7f77a7c6b75599ed6233a8e78f7e->enter($__internal_eb828038bfc3e83c63dcdd36995fdefbc5ae7f77a7c6b75599ed6233a8e78f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/nl.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Selecteren',
\t'Erase' => 'Verwijderen',
\t'Open' => 'Openen',
\t'Confirm_del' => 'Weet u zeker dat u dit bestand wilt verwijderen?',
\t'All' => 'Alles Weergeven',
\t'Files' => 'Bestanden',
\t'Images' => 'Afbeeldingen',
\t'Archives' => 'Archieven',
\t'Error_Upload' => 'Het bestand overschrijdt de maximum toegestane grootte.',
\t'Error_extension' => 'Bestand extensie is niet toegestaan',
\t'Upload_file' => 'Bestand uploaden',
\t'Filters' => 'Filter',
\t'Videos' => 'Videos',
\t'Music' => 'Muziek',
\t'New_File' => 'Nieuw bestand',
\t'New_Folder' => 'Nieuwe map',
\t'Folder_Created' => 'Map aangemaakt',
\t'Existing_Folder' => 'Bestaande map',
\t'Confirm_Folder_del' => 'Weet u zeker dat u deze map en alle bestanden hierin wilt verwijderen?',
\t'Return_Files_List' => 'Terug naar bestanden',
\t'Preview' => 'Voorbeeld',
\t'Download' => 'Download',
\t'Insert_Folder_Name' => 'Map naam:',
\t'Root' => 'root',
\t'Rename' => 'Hernoemen',
\t'Back' => 'Terug',
\t'View' => 'Weergave',
\t'View_list' => 'Lijst weergave',
\t'View_columns_list' => 'Kolom-lijst weergave',
\t'View_boxes' => 'Tegel weergave',
\t'Toolbar' => 'Werkbalk',
\t'Actions' => 'Acties',
\t'Rename_existing_file' => 'Het bestand bestaat al',
\t'Rename_existing_folder' => 'De map bestaat al',
\t'Empty_name' => 'De bestandsnaam is leeg',
\t'Text_filter' => 'Zoeken...',
\t'Swipe_help' => 'Swipe over de naam van een bestand of map om opties te zien',
\t'Upload_base' => 'Standaard uploader',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA upload (voor grote bestanden)',
\t'Upload_java_help' => \"Als de Java Applet niet laadt: 1. Heeft u JAVA geinstalleerd? Zo niet, download het hier: <a href='http://java.com/en/download/'>java.com/en/download/</a> 2. Wees er zeker van dat de firewall deze actie accepteert\",
\t'Upload_base_help' => \"Klik en sleep (meerdere) bestanden vanaf uw computer naar het \\\"Drop files\\\" vlak hierboven om bestanden toe te voegen.<br/> Ook is het mogelijk om in een dialoogvenster (meerdere) bestanden te selecteren, klik hiervoor op \\\"Drop files\\\"<br/><br/><i>Als alle uploads voltooid zijn kunt u terugkeren met de knop \\\"Terug naar bestanden\\\"</i>\",
\t'Type_dir' => 'map',
\t'Type' => 'Type',
\t'Dimension' => 'Afmetingen',
\t'Size' => 'Grootte',
\t'Date' => 'Datum',
\t'Filename' => 'Naam',
\t'Operations' => 'Bewerkingen',
\t'Date_type' => 'd-m-y',
\t'OK' => 'OK',
\t'Cancel' => 'Annuleren',
\t'Sorting' => 'Sorteren op',
\t'Show_url' => 'Toon URL',
\t'Extract' => 'Hier uitpakken',
\t'File_info' => 'Bestands-info',
\t'Edit_image' => 'Afbeelding bewerken',
\t'Duplicate' => 'Dupliceren',
\t'Folders' => 'Folders',
\t'Copy' => 'Kopiëren',
\t'Cut' => 'Knippen',
\t'Paste' => 'Plakken',
\t'CB' => 'Klembord', // clipboard
\t'Paste_Here' => 'Hier plakken',
\t'Paste_Confirm' => 'Weet u zeker dat u in deze map wilt plakken? Dit overschrijft mappen/bestanden met dezelfde naam indien deze voorkomen.',
\t'Paste_Failed' => 'Niet gelukt de bestanden te plakken',
\t'Clear_Clipboard' => 'Wis klembord',
\t'Clear_Clipboard_Confirm' => 'Weet u zeker dat u het klembord wilt wissen?',
\t'Files_ON_Clipboard' => 'Er staan bestanden op het klembord.',
\t'Copy_Cut_Size_Limit' => 'De geselecteerde mappen/bestanden zijn te groot om te %s. Maximaal: %d MB/operation', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'er zijn teveel mappen/bestanden geselecteerd om te %s. Maximaal: %d files/operation', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Het is niet toegestaan bestanden te %s.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Kan de afbeelding niet opslaan',
\t'Zip_No_Extract' => 'Kan niet uitpakken. Bestand is wellicht beschadigt.',
\t'Zip_Invalid' => 'Deze extensie is niet toegestaan. Valid: zip, gz, tar.',
\t'Dir_No_Write' => 'De geselecteerde map is niet beschrijfbaar.',
\t'Function_Disabled' => 'De functie %s is uitgeschakeld door de server.', // %s = cut or copy
\t'File_Permission' => 'Rechten',
\t'File_Permission_Not_Allowed' => 'Aanpassen van de rechten van %s is niet toegestaan.', // %s = files or folders
\t'File_Permission_Recursive' => 'Toepassen voor alles binnen deze map?',
\t'File_Permission_Wrong_Mode' => \"De gewenste rechten zijn niet juist.\",
\t'User' => 'Gebruiker',
\t'Group' => 'Groep',
\t'Yes' => 'Ja',
\t'No' => 'Nee',
\t'Lang_Not_Found' => 'Kan de taal niet vinden.',
\t'Lang_Change' => 'Verander de taal',
\t'File_Not_Found' => 'Kan het bestand niet vinden.',
\t'File_Open_Edit_Not_Allowed' => 'Je bent niet bevoegd dit bestand te %s.', // %s = open or edit
\t'Edit' => 'Bewerken',
\t'Edit_File' => \"Bewerkt de inhoud van dit bestand\",
\t'File_Save_OK' => \"Bestand is opgeslagen.\",
\t'File_Save_Error' => \"Er is een fout opgetreden tijdens het opslaan van het bestand.\",
\t'No_Extension' => 'Je moet een bestands-extensie toevoegen.',
\t'Valid_Extensions' => 'Geldige extensies: %s', // %s = txt,log etc.
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
        
        $__internal_eb828038bfc3e83c63dcdd36995fdefbc5ae7f77a7c6b75599ed6233a8e78f7e->leave($__internal_eb828038bfc3e83c63dcdd36995fdefbc5ae7f77a7c6b75599ed6233a8e78f7e_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/nl.php";
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

\t'Select' => 'Selecteren',
\t'Erase' => 'Verwijderen',
\t'Open' => 'Openen',
\t'Confirm_del' => 'Weet u zeker dat u dit bestand wilt verwijderen?',
\t'All' => 'Alles Weergeven',
\t'Files' => 'Bestanden',
\t'Images' => 'Afbeeldingen',
\t'Archives' => 'Archieven',
\t'Error_Upload' => 'Het bestand overschrijdt de maximum toegestane grootte.',
\t'Error_extension' => 'Bestand extensie is niet toegestaan',
\t'Upload_file' => 'Bestand uploaden',
\t'Filters' => 'Filter',
\t'Videos' => 'Videos',
\t'Music' => 'Muziek',
\t'New_File' => 'Nieuw bestand',
\t'New_Folder' => 'Nieuwe map',
\t'Folder_Created' => 'Map aangemaakt',
\t'Existing_Folder' => 'Bestaande map',
\t'Confirm_Folder_del' => 'Weet u zeker dat u deze map en alle bestanden hierin wilt verwijderen?',
\t'Return_Files_List' => 'Terug naar bestanden',
\t'Preview' => 'Voorbeeld',
\t'Download' => 'Download',
\t'Insert_Folder_Name' => 'Map naam:',
\t'Root' => 'root',
\t'Rename' => 'Hernoemen',
\t'Back' => 'Terug',
\t'View' => 'Weergave',
\t'View_list' => 'Lijst weergave',
\t'View_columns_list' => 'Kolom-lijst weergave',
\t'View_boxes' => 'Tegel weergave',
\t'Toolbar' => 'Werkbalk',
\t'Actions' => 'Acties',
\t'Rename_existing_file' => 'Het bestand bestaat al',
\t'Rename_existing_folder' => 'De map bestaat al',
\t'Empty_name' => 'De bestandsnaam is leeg',
\t'Text_filter' => 'Zoeken...',
\t'Swipe_help' => 'Swipe over de naam van een bestand of map om opties te zien',
\t'Upload_base' => 'Standaard uploader',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA upload (voor grote bestanden)',
\t'Upload_java_help' => \"Als de Java Applet niet laadt: 1. Heeft u JAVA geinstalleerd? Zo niet, download het hier: <a href='http://java.com/en/download/'>java.com/en/download/</a> 2. Wees er zeker van dat de firewall deze actie accepteert\",
\t'Upload_base_help' => \"Klik en sleep (meerdere) bestanden vanaf uw computer naar het \\\"Drop files\\\" vlak hierboven om bestanden toe te voegen.<br/> Ook is het mogelijk om in een dialoogvenster (meerdere) bestanden te selecteren, klik hiervoor op \\\"Drop files\\\"<br/><br/><i>Als alle uploads voltooid zijn kunt u terugkeren met de knop \\\"Terug naar bestanden\\\"</i>\",
\t'Type_dir' => 'map',
\t'Type' => 'Type',
\t'Dimension' => 'Afmetingen',
\t'Size' => 'Grootte',
\t'Date' => 'Datum',
\t'Filename' => 'Naam',
\t'Operations' => 'Bewerkingen',
\t'Date_type' => 'd-m-y',
\t'OK' => 'OK',
\t'Cancel' => 'Annuleren',
\t'Sorting' => 'Sorteren op',
\t'Show_url' => 'Toon URL',
\t'Extract' => 'Hier uitpakken',
\t'File_info' => 'Bestands-info',
\t'Edit_image' => 'Afbeelding bewerken',
\t'Duplicate' => 'Dupliceren',
\t'Folders' => 'Folders',
\t'Copy' => 'Kopiëren',
\t'Cut' => 'Knippen',
\t'Paste' => 'Plakken',
\t'CB' => 'Klembord', // clipboard
\t'Paste_Here' => 'Hier plakken',
\t'Paste_Confirm' => 'Weet u zeker dat u in deze map wilt plakken? Dit overschrijft mappen/bestanden met dezelfde naam indien deze voorkomen.',
\t'Paste_Failed' => 'Niet gelukt de bestanden te plakken',
\t'Clear_Clipboard' => 'Wis klembord',
\t'Clear_Clipboard_Confirm' => 'Weet u zeker dat u het klembord wilt wissen?',
\t'Files_ON_Clipboard' => 'Er staan bestanden op het klembord.',
\t'Copy_Cut_Size_Limit' => 'De geselecteerde mappen/bestanden zijn te groot om te %s. Maximaal: %d MB/operation', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'er zijn teveel mappen/bestanden geselecteerd om te %s. Maximaal: %d files/operation', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Het is niet toegestaan bestanden te %s.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Kan de afbeelding niet opslaan',
\t'Zip_No_Extract' => 'Kan niet uitpakken. Bestand is wellicht beschadigt.',
\t'Zip_Invalid' => 'Deze extensie is niet toegestaan. Valid: zip, gz, tar.',
\t'Dir_No_Write' => 'De geselecteerde map is niet beschrijfbaar.',
\t'Function_Disabled' => 'De functie %s is uitgeschakeld door de server.', // %s = cut or copy
\t'File_Permission' => 'Rechten',
\t'File_Permission_Not_Allowed' => 'Aanpassen van de rechten van %s is niet toegestaan.', // %s = files or folders
\t'File_Permission_Recursive' => 'Toepassen voor alles binnen deze map?',
\t'File_Permission_Wrong_Mode' => \"De gewenste rechten zijn niet juist.\",
\t'User' => 'Gebruiker',
\t'Group' => 'Groep',
\t'Yes' => 'Ja',
\t'No' => 'Nee',
\t'Lang_Not_Found' => 'Kan de taal niet vinden.',
\t'Lang_Change' => 'Verander de taal',
\t'File_Not_Found' => 'Kan het bestand niet vinden.',
\t'File_Open_Edit_Not_Allowed' => 'Je bent niet bevoegd dit bestand te %s.', // %s = open or edit
\t'Edit' => 'Bewerken',
\t'Edit_File' => \"Bewerkt de inhoud van dit bestand\",
\t'File_Save_OK' => \"Bestand is opgeslagen.\",
\t'File_Save_Error' => \"Er is een fout opgetreden tijdens het opslaan van het bestand.\",
\t'No_Extension' => 'Je moet een bestands-extensie toevoegen.',
\t'Valid_Extensions' => 'Geldige extensies: %s', // %s = txt,log etc.
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
", "@MwebAdmin/filemanager/lang/nl.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/nl.php");
    }
}
