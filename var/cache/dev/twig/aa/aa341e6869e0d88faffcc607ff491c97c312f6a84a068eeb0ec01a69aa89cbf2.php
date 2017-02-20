<?php

/* @MwebAdmin/filemanager/lang/sk.php */
class __TwigTemplate_e9d3e19858fe830cec5ff8a40d66e8f5bd77aec26a6499660c65b286395a24be extends Twig_Template
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
        $__internal_53d0da8de4c5abb8bfd05a211d1fed3197bf8e42136b257436b92d8ebdfd1f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d0da8de4c5abb8bfd05a211d1fed3197bf8e42136b257436b92d8ebdfd1f99->enter($__internal_53d0da8de4c5abb8bfd05a211d1fed3197bf8e42136b257436b92d8ebdfd1f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/sk.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Vybrať',
\t'Erase' => 'Odstrániť',
\t'Open' => 'Otvoriť',
\t'Confirm_del' => 'Naozaj odstrániť tento súbor?',
\t'All' => 'Všetky',
\t'Files' => 'Súbory',
\t'Images' => 'Obrázky',
\t'Archives' => 'Archívy',
\t'Error_Upload' => 'Súbor presahuje maximálnu možnú veľkosť.',
\t'Error_extension' => 'Typ súboru nie je podporovaný.',
\t'Upload_file' => 'Súbor',
\t'Filters' => 'Filtrovať',
\t'Videos' => 'Videá',
\t'Music' => 'Hudba',
\t'New_Folder' => 'Adresár',
\t'Folder_Created' => 'Adresár bol vytvorený',
\t'Existing_Folder' => 'Adresár už existuje',
\t'Confirm_Folder_del' => 'Naozaj chcete vymazať adresár a odstrániť tak všetky súbory v ňom?',
\t'Return_Files_List' => 'Späť na zoznam súborov',
\t'Preview' => 'Náhľad',
\t'Download' => 'Stiahnuť',
\t'Insert_Folder_Name' => 'Názov adresára:',
\t'Root' => 'root',
\t'Rename' => 'Premenovať',
\t'Back' => 'späť',
\t'View' => 'Zobraziť',
\t'View_list' => 'Zoznam',
\t'View_columns_list' => 'Stĺpce',
\t'View_boxes' => 'Ikony',
\t'Toolbar' => 'Nástroje',
\t'Actions' => 'Pridať',
\t'Rename_existing_file' => 'Súbor už existuje',
\t'Rename_existing_folder' => 'Adresár už existuje',
\t'Empty_name' => 'Názov je prázdny',
\t'Text_filter' => 'Vyhľadať',
\t'Swipe_help' => 'Pre viac možností prejdite myšou na súbor/adresár',
\t'Upload_base' => 'Klasické nahratie súborov',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'Nahrať súbory cez JAVA (veľké súbory)',
\t'Upload_java_help' => \"Ak sa vám nezobrazí Java Applet uistite sa, že máte nainštalovanú Java (<a href='http://java.com/en/download/'>stiahnuť</a>) a skontrolujte blokovanie cez bránu Firewall.\",
\t'Upload_base_help' => \"Myšou presuňte súbory alebo kliknite na plochu a vyberte súbory. Keď je nahrávanie dokončené, kliknite na tlačidlo 'Späť na zoznam súborov'.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Typ',
\t'Dimension' => 'Rozlíšenie',
\t'Size' => 'Veľkosť',
\t'Date' => 'Dátum',
\t'Filename' => 'Názov',
\t'Operations' => 'Operácie',
\t'Date_type' => 'd.m.Y',
\t'OK' => 'OK',
\t'Cancel' => 'Zrušiť',
\t'Sorting' => 'Zoradiť',
\t'Show_url' => 'Zobratiť URL',
\t'Extract' => 'Rozbaliť sem',
\t'File_info' => 'Informácie o súbore',
\t'Edit_image' => 'Upraviť obrázok',
\t'Duplicate' => 'Duplikovať',
\t'Folders' => 'Adresáre',
\t'Copy' => 'Kopírovať',
\t'Cut' => 'Vystrihnúť',
\t'Paste' => 'Prilepiť',
\t'CB' => 'Schránka', // clipboard
\t'Paste_Here' => 'Prilepiť do tohto adresára',
\t'Paste_Confirm' => 'Naozaj chcete prilepiť súbory do tohto adresára? Existujúce súbory sa prepíšu.',
\t'Paste_Failed' => 'Zlyhalo prilepenie súborov',
\t'Clear_Clipboard' => 'Vyčistiť schránku',
\t'Clear_Clipboard_Confirm' => 'Naozaj chcete vyčistiť schránku?',
\t'Files_ON_Clipboard' => 'Máte súbory v schránke.',
\t'Copy_Cut_Size_Limit' => 'Vybrané položky sú príliš veľké na to aby boli vystrihnuté alebo kopírované. Limit: %d MB/operácia', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Vybrali ste príliš veľa položiek na to aby boli vystrihnuté alebo kopírované. Limit: %d files/operácia', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Nemáte povolenie na vystrihnutie alebo kopírovanie položiek.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Obrázok nebol uložený.',
\t'Zip_No_Extract' => 'Súbor nemožno rozbaliť. Môže byť poškodený.',
\t'Zip_Invalid' => 'Tento typ súboru nemožno rozbaliť. Povolené formáty: zip, gz, tar.',
\t'Dir_No_Write' => 'Do vybraného adresára nemožno zapisovať.',
\t'Function_Disabled' => 'Funkciu vystrihnúť alebo kopírovať nepodporuje Vás webhosting.', // %s = cut or copy
\t'File_Permission' => 'Povolenia súborov',
\t'File_Permission_Not_Allowed' => 'Zmena povolení súborov alebo adresárov nie je povolená.', // %s = files or folders
\t'File_Permission_Recursive' => 'Použiť na vnorené súbory a adresáre?',
\t'File_Permission_Wrong_Mode' => \"Nesprávny mód povolenia\",
\t'User' => 'Užívateľ',
\t'Group' => 'Skupina',
\t'Yes' => 'Áno',
\t'No' => 'Nie',
\t'Lang_Not_Found' => 'Jazyk nebol nájdený.',
\t'Lang_Change' => 'Zmeniť jazyk',
\t'File_Not_Found' => 'Súbor sa nenašiel.',
\t'File_Open_Edit_Not_Allowed' => 'Nemáte právo otvoriť alebo upravovať tento súbor.', // %s = open or edit
\t'Edit' => 'Upraviť',
\t'Edit_File' => \"Upraviť obsah súboru\",
\t'File_Save_OK' => \"Súbor bol uložený.\",
\t'File_Save_Error' => \"Nastala chyba! Súbor nebol uložený.\",
\t'New_File' => 'Nový súbor',
\t'No_Extension' => 'Musíte pridať príponu súboru.',
\t'Valid_Extensions' => 'Povolené prípony: %s', // %s = txt,log etc.
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
        
        $__internal_53d0da8de4c5abb8bfd05a211d1fed3197bf8e42136b257436b92d8ebdfd1f99->leave($__internal_53d0da8de4c5abb8bfd05a211d1fed3197bf8e42136b257436b92d8ebdfd1f99_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/sk.php";
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

\t'Select' => 'Vybrať',
\t'Erase' => 'Odstrániť',
\t'Open' => 'Otvoriť',
\t'Confirm_del' => 'Naozaj odstrániť tento súbor?',
\t'All' => 'Všetky',
\t'Files' => 'Súbory',
\t'Images' => 'Obrázky',
\t'Archives' => 'Archívy',
\t'Error_Upload' => 'Súbor presahuje maximálnu možnú veľkosť.',
\t'Error_extension' => 'Typ súboru nie je podporovaný.',
\t'Upload_file' => 'Súbor',
\t'Filters' => 'Filtrovať',
\t'Videos' => 'Videá',
\t'Music' => 'Hudba',
\t'New_Folder' => 'Adresár',
\t'Folder_Created' => 'Adresár bol vytvorený',
\t'Existing_Folder' => 'Adresár už existuje',
\t'Confirm_Folder_del' => 'Naozaj chcete vymazať adresár a odstrániť tak všetky súbory v ňom?',
\t'Return_Files_List' => 'Späť na zoznam súborov',
\t'Preview' => 'Náhľad',
\t'Download' => 'Stiahnuť',
\t'Insert_Folder_Name' => 'Názov adresára:',
\t'Root' => 'root',
\t'Rename' => 'Premenovať',
\t'Back' => 'späť',
\t'View' => 'Zobraziť',
\t'View_list' => 'Zoznam',
\t'View_columns_list' => 'Stĺpce',
\t'View_boxes' => 'Ikony',
\t'Toolbar' => 'Nástroje',
\t'Actions' => 'Pridať',
\t'Rename_existing_file' => 'Súbor už existuje',
\t'Rename_existing_folder' => 'Adresár už existuje',
\t'Empty_name' => 'Názov je prázdny',
\t'Text_filter' => 'Vyhľadať',
\t'Swipe_help' => 'Pre viac možností prejdite myšou na súbor/adresár',
\t'Upload_base' => 'Klasické nahratie súborov',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'Nahrať súbory cez JAVA (veľké súbory)',
\t'Upload_java_help' => \"Ak sa vám nezobrazí Java Applet uistite sa, že máte nainštalovanú Java (<a href='http://java.com/en/download/'>stiahnuť</a>) a skontrolujte blokovanie cez bránu Firewall.\",
\t'Upload_base_help' => \"Myšou presuňte súbory alebo kliknite na plochu a vyberte súbory. Keď je nahrávanie dokončené, kliknite na tlačidlo 'Späť na zoznam súborov'.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Typ',
\t'Dimension' => 'Rozlíšenie',
\t'Size' => 'Veľkosť',
\t'Date' => 'Dátum',
\t'Filename' => 'Názov',
\t'Operations' => 'Operácie',
\t'Date_type' => 'd.m.Y',
\t'OK' => 'OK',
\t'Cancel' => 'Zrušiť',
\t'Sorting' => 'Zoradiť',
\t'Show_url' => 'Zobratiť URL',
\t'Extract' => 'Rozbaliť sem',
\t'File_info' => 'Informácie o súbore',
\t'Edit_image' => 'Upraviť obrázok',
\t'Duplicate' => 'Duplikovať',
\t'Folders' => 'Adresáre',
\t'Copy' => 'Kopírovať',
\t'Cut' => 'Vystrihnúť',
\t'Paste' => 'Prilepiť',
\t'CB' => 'Schránka', // clipboard
\t'Paste_Here' => 'Prilepiť do tohto adresára',
\t'Paste_Confirm' => 'Naozaj chcete prilepiť súbory do tohto adresára? Existujúce súbory sa prepíšu.',
\t'Paste_Failed' => 'Zlyhalo prilepenie súborov',
\t'Clear_Clipboard' => 'Vyčistiť schránku',
\t'Clear_Clipboard_Confirm' => 'Naozaj chcete vyčistiť schránku?',
\t'Files_ON_Clipboard' => 'Máte súbory v schránke.',
\t'Copy_Cut_Size_Limit' => 'Vybrané položky sú príliš veľké na to aby boli vystrihnuté alebo kopírované. Limit: %d MB/operácia', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Vybrali ste príliš veľa položiek na to aby boli vystrihnuté alebo kopírované. Limit: %d files/operácia', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Nemáte povolenie na vystrihnutie alebo kopírovanie položiek.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Obrázok nebol uložený.',
\t'Zip_No_Extract' => 'Súbor nemožno rozbaliť. Môže byť poškodený.',
\t'Zip_Invalid' => 'Tento typ súboru nemožno rozbaliť. Povolené formáty: zip, gz, tar.',
\t'Dir_No_Write' => 'Do vybraného adresára nemožno zapisovať.',
\t'Function_Disabled' => 'Funkciu vystrihnúť alebo kopírovať nepodporuje Vás webhosting.', // %s = cut or copy
\t'File_Permission' => 'Povolenia súborov',
\t'File_Permission_Not_Allowed' => 'Zmena povolení súborov alebo adresárov nie je povolená.', // %s = files or folders
\t'File_Permission_Recursive' => 'Použiť na vnorené súbory a adresáre?',
\t'File_Permission_Wrong_Mode' => \"Nesprávny mód povolenia\",
\t'User' => 'Užívateľ',
\t'Group' => 'Skupina',
\t'Yes' => 'Áno',
\t'No' => 'Nie',
\t'Lang_Not_Found' => 'Jazyk nebol nájdený.',
\t'Lang_Change' => 'Zmeniť jazyk',
\t'File_Not_Found' => 'Súbor sa nenašiel.',
\t'File_Open_Edit_Not_Allowed' => 'Nemáte právo otvoriť alebo upravovať tento súbor.', // %s = open or edit
\t'Edit' => 'Upraviť',
\t'Edit_File' => \"Upraviť obsah súboru\",
\t'File_Save_OK' => \"Súbor bol uložený.\",
\t'File_Save_Error' => \"Nastala chyba! Súbor nebol uložený.\",
\t'New_File' => 'Nový súbor',
\t'No_Extension' => 'Musíte pridať príponu súboru.',
\t'Valid_Extensions' => 'Povolené prípony: %s', // %s = txt,log etc.
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
", "@MwebAdmin/filemanager/lang/sk.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/sk.php");
    }
}
