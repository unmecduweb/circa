<?php

/* @MwebAdmin/filemanager/lang/lt.php */
class __TwigTemplate_41df372808cd700afdb6ce8a4381f34c9f890ffc62da2122718ab7c66d2e254e extends Twig_Template
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
        $__internal_8bda5064058a1f740439d9e8c7a8811e00fb2a1f1e395b57e50ee2b261d39ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bda5064058a1f740439d9e8c7a8811e00fb2a1f1e395b57e50ee2b261d39ee6->enter($__internal_8bda5064058a1f740439d9e8c7a8811e00fb2a1f1e395b57e50ee2b261d39ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/lt.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Pasirinkti',
\t'Erase' => 'Ištrinti',
\t'Open' => 'Atidaryti',
\t'Confirm_del' => 'Ar tikrai norite ištrinti šį failą?',
\t'All' => 'Visi',
\t'Files' => 'Failai',
\t'Images' => 'Nuotraukos',
\t'Archives' => 'Archyvai',
\t'Error_Upload' => 'Failo dydis viršija nustatytą limitą.',
\t'Error_extension' => 'Toks failo formatas yra negalimas.',
\t'Upload_file' => 'Įkelti failus',
\t'Filters' => 'Filtruoti',
\t'Videos' => 'Video failai',
\t'Music' => 'Muzika',
\t'New_Folder' => 'Sukurti katalogą',
\t'Folder_Created' => 'Katalogas sėkmingai sukurtas',
\t'Existing_Folder' => 'Egzistuojantis katalogas',
\t'Confirm_Folder_del' => 'Ar tikrai norite ištrinti šį katalogą su visais jame esančiais failais?',
\t'Return_Files_List' => 'Grįžti į failų sąrašą',
\t'Preview' => 'Peržiūrėti',
\t'Download' => 'Atsisiųsti',
\t'Insert_Folder_Name' => 'Katalogo pavadinimas:',
\t'Root' => 'root',
\t'Rename' => 'Pervadinti',
\t'Back' => 'grįžti',
\t'View' => 'Rodymas',
\t'View_list' => 'Sąrašas',
\t'View_columns_list' => 'Stulpeliai',
\t'View_boxes' => 'Tinklelis',
\t'Toolbar' => 'Įrankių juosta',
\t'Actions' => 'Veiksmai',
\t'Rename_existing_file' => 'Toks failas jau yra sukurtas',
\t'Rename_existing_folder' => 'Toks katalogas jau yra sukurtas',
\t'Empty_name' => 'Pavadinimas negali būti tuščias',
\t'Text_filter' => 'ieškoti',
\t'Swipe_help' => 'Tempkite failo/katalogo pavadinimą, kad pamatytumėte informaciją',
\t'Upload_base' => 'Pagrindinis įkėlimas',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA įkėlimas (dideliems failams)',
\t'Upload_java_help' => \"Jei JAVA plėtinys neužsikrauna įsitikinkite, kad: 1. esate instaliavę JAVA, kitu atveju <a href='http://java.com/en/download/'>[atsisiųskite]</a>   2. Įsitikinkite, kad jūsų ugniasienė neblokuoja\",
\t'Upload_base_help' => \"Tempkite ir paleiskite iš kompiuterio failus arba spauskite ir pasirinkite, ką įkelti. Kai įkėlimas bus baigtas, spauskite 'Grįžti į failų sąrašą'.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Tipas',
\t'Dimension' => 'Matmenys',
\t'Size' => 'Dydis',
\t'Date' => 'Data',
\t'Filename' => 'Pavadinimas',
\t'Operations' => 'Operacijos',
\t'Date_type' => 'Y-m-d',
\t'OK' => 'Gerai',
\t'Cancel' => 'Atšaukti',
\t'Sorting' => 'rikiuoti',
\t'Show_url' => 'rodyti nuorodą',
\t'Extract' => 'Ištraukti čia',
\t'File_info' => 'Failo informacija',
\t'Edit_image' => 'redaguoti nuotrauką',
\t'Duplicate' => 'Sukurti kopiją',
\t'Folders' => 'Katalogai',
\t'Copy' => 'Kopijuoti',
\t'Cut' => 'Iškirpti',
\t'Paste' => 'Įklijuoti',
\t'CB' => 'CB', // clipboard
\t'Paste_Here' => 'Įklijuoti dabartiniame kataloge',
\t'Paste_Confirm' => 'Ar tikrai norite įklijuoti į šį katalogą? Visi failai/katalogai tokiais pačiais pavadinimais bus perrašyti.',
\t'Paste_Failed' => 'Nepavyko įklijuoti',
\t'Clear_Clipboard' => 'Išvalyti iškarpinę',
\t'Clear_Clipboard_Confirm' => 'Ar tikrai norite išvalyti iškarpinę?',
\t'Files_ON_Clipboard' => 'Iškarpinėje yra failų.',
\t'Copy_Cut_Size_Limit' => 'Pasirinkti failai/katalogai yra per dideli atlikti \"%s\" operacijai. Limitas: %d MB', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Pasirinkote per daug failų/katalogų atlikti \"%s\" operacijai. Limitas: %d failų/katalogų', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Jūs neturite teisių atlikti \"%s\" funkcijos failams.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Nepavyko išsaugoti nuotraukos',
\t'Zip_No_Extract' => 'Nepavyko ištraukti. Failas gali būti sugadintas.',
\t'Zip_Invalid' => 'Toks formatas yra neleidžiamas. Galimi formatai: zip, gz, tar.',
\t'Dir_No_Write' => 'Katalogas, kurį pasirinkote neturi įrašymo teisių.',
\t'Function_Disabled' => 'Funkcija \"%s\" šiame serveryje yra išjungta.', // %s = cut or copy
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
        
        $__internal_8bda5064058a1f740439d9e8c7a8811e00fb2a1f1e395b57e50ee2b261d39ee6->leave($__internal_8bda5064058a1f740439d9e8c7a8811e00fb2a1f1e395b57e50ee2b261d39ee6_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/lt.php";
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

\t'Select' => 'Pasirinkti',
\t'Erase' => 'Ištrinti',
\t'Open' => 'Atidaryti',
\t'Confirm_del' => 'Ar tikrai norite ištrinti šį failą?',
\t'All' => 'Visi',
\t'Files' => 'Failai',
\t'Images' => 'Nuotraukos',
\t'Archives' => 'Archyvai',
\t'Error_Upload' => 'Failo dydis viršija nustatytą limitą.',
\t'Error_extension' => 'Toks failo formatas yra negalimas.',
\t'Upload_file' => 'Įkelti failus',
\t'Filters' => 'Filtruoti',
\t'Videos' => 'Video failai',
\t'Music' => 'Muzika',
\t'New_Folder' => 'Sukurti katalogą',
\t'Folder_Created' => 'Katalogas sėkmingai sukurtas',
\t'Existing_Folder' => 'Egzistuojantis katalogas',
\t'Confirm_Folder_del' => 'Ar tikrai norite ištrinti šį katalogą su visais jame esančiais failais?',
\t'Return_Files_List' => 'Grįžti į failų sąrašą',
\t'Preview' => 'Peržiūrėti',
\t'Download' => 'Atsisiųsti',
\t'Insert_Folder_Name' => 'Katalogo pavadinimas:',
\t'Root' => 'root',
\t'Rename' => 'Pervadinti',
\t'Back' => 'grįžti',
\t'View' => 'Rodymas',
\t'View_list' => 'Sąrašas',
\t'View_columns_list' => 'Stulpeliai',
\t'View_boxes' => 'Tinklelis',
\t'Toolbar' => 'Įrankių juosta',
\t'Actions' => 'Veiksmai',
\t'Rename_existing_file' => 'Toks failas jau yra sukurtas',
\t'Rename_existing_folder' => 'Toks katalogas jau yra sukurtas',
\t'Empty_name' => 'Pavadinimas negali būti tuščias',
\t'Text_filter' => 'ieškoti',
\t'Swipe_help' => 'Tempkite failo/katalogo pavadinimą, kad pamatytumėte informaciją',
\t'Upload_base' => 'Pagrindinis įkėlimas',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA įkėlimas (dideliems failams)',
\t'Upload_java_help' => \"Jei JAVA plėtinys neužsikrauna įsitikinkite, kad: 1. esate instaliavę JAVA, kitu atveju <a href='http://java.com/en/download/'>[atsisiųskite]</a>   2. Įsitikinkite, kad jūsų ugniasienė neblokuoja\",
\t'Upload_base_help' => \"Tempkite ir paleiskite iš kompiuterio failus arba spauskite ir pasirinkite, ką įkelti. Kai įkėlimas bus baigtas, spauskite 'Grįžti į failų sąrašą'.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Tipas',
\t'Dimension' => 'Matmenys',
\t'Size' => 'Dydis',
\t'Date' => 'Data',
\t'Filename' => 'Pavadinimas',
\t'Operations' => 'Operacijos',
\t'Date_type' => 'Y-m-d',
\t'OK' => 'Gerai',
\t'Cancel' => 'Atšaukti',
\t'Sorting' => 'rikiuoti',
\t'Show_url' => 'rodyti nuorodą',
\t'Extract' => 'Ištraukti čia',
\t'File_info' => 'Failo informacija',
\t'Edit_image' => 'redaguoti nuotrauką',
\t'Duplicate' => 'Sukurti kopiją',
\t'Folders' => 'Katalogai',
\t'Copy' => 'Kopijuoti',
\t'Cut' => 'Iškirpti',
\t'Paste' => 'Įklijuoti',
\t'CB' => 'CB', // clipboard
\t'Paste_Here' => 'Įklijuoti dabartiniame kataloge',
\t'Paste_Confirm' => 'Ar tikrai norite įklijuoti į šį katalogą? Visi failai/katalogai tokiais pačiais pavadinimais bus perrašyti.',
\t'Paste_Failed' => 'Nepavyko įklijuoti',
\t'Clear_Clipboard' => 'Išvalyti iškarpinę',
\t'Clear_Clipboard_Confirm' => 'Ar tikrai norite išvalyti iškarpinę?',
\t'Files_ON_Clipboard' => 'Iškarpinėje yra failų.',
\t'Copy_Cut_Size_Limit' => 'Pasirinkti failai/katalogai yra per dideli atlikti \"%s\" operacijai. Limitas: %d MB', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Pasirinkote per daug failų/katalogų atlikti \"%s\" operacijai. Limitas: %d failų/katalogų', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Jūs neturite teisių atlikti \"%s\" funkcijos failams.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Nepavyko išsaugoti nuotraukos',
\t'Zip_No_Extract' => 'Nepavyko ištraukti. Failas gali būti sugadintas.',
\t'Zip_Invalid' => 'Toks formatas yra neleidžiamas. Galimi formatai: zip, gz, tar.',
\t'Dir_No_Write' => 'Katalogas, kurį pasirinkote neturi įrašymo teisių.',
\t'Function_Disabled' => 'Funkcija \"%s\" šiame serveryje yra išjungta.', // %s = cut or copy
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
", "@MwebAdmin/filemanager/lang/lt.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/lt.php");
    }
}
