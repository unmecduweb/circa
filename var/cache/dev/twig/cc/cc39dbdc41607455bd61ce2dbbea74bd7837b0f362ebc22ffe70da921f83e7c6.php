<?php

/* @MwebAdmin/filemanager/lang/cs.php */
class __TwigTemplate_b26699c53e16bec4b25ac0e1c34a26bdbdf6b310e59a5e977cda0ce6d8944c89 extends Twig_Template
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
        $__internal_4358e253fe1674d87153f75638f196f959fa5f299595390cb52cb05455b8f6ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4358e253fe1674d87153f75638f196f959fa5f299595390cb52cb05455b8f6ab->enter($__internal_4358e253fe1674d87153f75638f196f959fa5f299595390cb52cb05455b8f6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/cs.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Vybrat',
\t'Erase' => 'Smazat',
\t'Open' => 'Otevřít',
\t'Confirm_del' => 'Opravdu chcete smazat tento soubor?',
\t'All' => 'Vše',
\t'Files' => 'Soubory',
\t'Images' => 'Obrázky',
\t'Archives' => 'Archivy',
\t'Error_Upload' => 'Nahrávaný soubor je příliš velký.',
\t'Error_extension' => 'Nahrávání souborů s touto příponou není povoleno.',
\t'Upload_file' => 'Nahrát soubor',
\t'Filters' => 'Filtr',
\t'Videos' => 'Videa',
\t'Music' => 'Hudba',
\t'New_Folder' => 'Nová složka',
\t'Folder_Created' => 'Složka vytvořena',
\t'Existing_Folder' => 'Existující složka',
\t'Confirm_Folder_del' => 'Opravdu chcete smazat tuto složku a její obsah?',
\t'Return_Files_List' => 'Zpět k seznamu souborů',
\t'Preview' => 'Náhled',
\t'Download' => 'Stáhnout',
\t'Insert_Folder_Name' => 'Vložte název složky:',
\t'Root' => 'root',
\t'Rename' => 'Přejmenovat',
\t'Back' => 'zpět',
\t'View' => 'Zobrazení',
\t'View_list' => 'Seznam souborů',
\t'View_columns_list' => 'Dvousloupcový seznam souborů',
\t'View_boxes' => 'Dlaždicové zobrazení',
\t'Toolbar' => 'Panel nástrojů',
\t'Actions' => 'Akce',
\t'Rename_existing_file' => 'Tento soubor již existuje',
\t'Rename_existing_folder' => 'Tato složka již existuje',
\t'Empty_name' => 'Zadali jste prázdný název',
\t'Text_filter' => 'textový filtr',
\t'Swipe_help' => 'Pro zobrazení možností klikněte na název souboru/složky.',
\t'Upload_base' => 'Základní nahrávání',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA upload (pro velké soubory)',
\t'Upload_java_help' => \"Pokud se Java Applet nenačítá, ujistěte se, že: 1. je ve vašem počítači nainstalována Java <a href='http://java.com/en/download/'>[odkaz pro stažení]</a> 2. nic není blokováno firewallem\",
\t'Upload_base_help' => \"Přetáhněte soubor(y) do prostoru výše nebo do něj klikněte myší (moderní prohlížeče) a vyberte soubory. Po dokončení nahrávání klikněte na tlačítko 'Zpět k seznamu souborů'.\",
\t'Type_dir' => 'složka',
\t'Type' => 'Typ',
\t'Dimension' => 'Rozměr',
\t'Size' => 'Velikost',
\t'Date' => 'Datum',
\t'Filename' => 'Název',
\t'Operations' => 'Operace',
\t'Date_type' => 'd.m.Y',
\t'OK' => 'OK',
\t'Cancel' => 'Zrušit',
\t'Sorting' => 'Řazení',
\t'Show_url' => 'Zobrazit URL adresu',
\t'Extract' => 'Rozbalit zde',
\t'File_info' => 'Informace o souboru',
\t'Edit_image' => 'Upravit obrázek',
\t'Duplicate' => 'Duplikovat',
\t'Folders' => 'Složky',
\t'Copy' => 'Kopírovat',
\t'Cut' => 'Vyjmout',
\t'Paste' => 'Vložit',
\t'CB' => 'Schránka', // clipboard
\t'Paste_Here' => 'Vložit do této složky',
\t'Paste_Confirm' => 'Skutečně chcete vložit obsah schránky do této složky? Existující soubory či složky budou přepsány.',
\t'Paste_Failed' => 'Vložení selhalo',
\t'Clear_Clipboard' => 'Vymazat schránku',
\t'Clear_Clipboard_Confirm' => 'Skutečně chcete vymazat obsah schránky?',
\t'Files_ON_Clipboard' => 'Ve schránce jsou soubory.',
\t'Copy_Cut_Size_Limit' => 'Zvolené soubory/složky jsou příliš velké pro operaci %s. Limit: %d MB/operace', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Zvolili jste příliš mnoho souborů/složek pro operaci %s. Limit: %d souborů/operace', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Nemáte oprávnění %s.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Obrázek nelze uložit',
\t'Zip_No_Extract' => 'Archív nelze rozbalit. Soubor může být poškozen.',
\t'Zip_Invalid' => 'Přípona není podporována. Povolené: zip, gz, tar.',
\t'Dir_No_Write' => 'Vybraná složka není zapisovatelná.',
\t'Function_Disabled' => 'Funkce %s byla zamítnuta serverem.', // %s = cut or copy
\t'File_Permission' => 'Práva souboru',
\t'File_Permission_Not_Allowed' => 'Změna oprávnění pro %s není povolena.', // %s = files or folders
\t'File_Permission_Recursive' => 'Použít rekurzivně?',
\t'File_Permission_Wrong_Mode' => \"Zadaný kód oprávnění není platný.\",
\t'User' => 'Uživatel',
\t'Group' => 'Skupina',
\t'Yes' => 'Ano',
\t'No' => 'Ne',
\t'Lang_Not_Found' => 'Jazyk nebyl nalezen.',
\t'Lang_Change' => 'Změnit jazyk',
\t'File_Not_Found' => 'Soubor nebyl nalezen.',
\t'File_Open_Edit_Not_Allowed' => 'Nemáte oprávnění %s tento soubor.', // %s = open or edit
\t'Edit' => 'Upravit',
\t'Edit_File' => \"Upravit obsah souboru\",
\t'File_Save_OK' => \"Soubor byl úspěšně uložen.\",
\t'File_Save_Error' => \"Došlo k chybě při ukládání souboru.\",
\t'New_File' => 'Nový soubor',
\t'No_Extension' => 'Musíte doplnit příponu souboru.',
\t'Valid_Extensions' => 'Povolené přípony: %s', // %s = txt,log etc.
\t'Upload_message' => \"Pro nahrání přetáhněte soubor(y) sem\",

\t'SERVER ERROR' => \"CHYBA SERVERU\",
\t'forbiden' => \"Zakázáno\",
\t'wrong path' => \"Neplatná cesta\",
\t'wrong name' => \"Neplatná název\",
\t'wrong extension' => \"Neplatná přípona\",
\t'wrong option' => \"Neplatná volba\",
\t'wrong data' => \"Neplatná data\",
\t'wrong action' => \"Neplatná akce\",
\t'wrong sub-action' => \"Neplatná podakce\",
\t'no action passed' => \"Nebyla předána žádná akce\",
\t'no path' => \"Žádná cesta\",
\t'no file' => \"Žádný soubor\",
\t'view type number missing' => \"Chybí číslo typu pro zobrazení\",
\t'Not enought Memory' => \"Nedostatek paměti\",
\t'max_size_reached' => \"Vaše složka s obrázky dosáhla maximální velikosti %d MB.\", //%d = max overall size
\t'B' => \"B\",
\t'KB' => \"KB\",
\t'MB' => \"MB\",
\t'GB' => \"GB\",
\t'TB' => \"TB\",
\t'total size' => \"Celková velikost\",
);
";
        
        $__internal_4358e253fe1674d87153f75638f196f959fa5f299595390cb52cb05455b8f6ab->leave($__internal_4358e253fe1674d87153f75638f196f959fa5f299595390cb52cb05455b8f6ab_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/cs.php";
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

\t'Select' => 'Vybrat',
\t'Erase' => 'Smazat',
\t'Open' => 'Otevřít',
\t'Confirm_del' => 'Opravdu chcete smazat tento soubor?',
\t'All' => 'Vše',
\t'Files' => 'Soubory',
\t'Images' => 'Obrázky',
\t'Archives' => 'Archivy',
\t'Error_Upload' => 'Nahrávaný soubor je příliš velký.',
\t'Error_extension' => 'Nahrávání souborů s touto příponou není povoleno.',
\t'Upload_file' => 'Nahrát soubor',
\t'Filters' => 'Filtr',
\t'Videos' => 'Videa',
\t'Music' => 'Hudba',
\t'New_Folder' => 'Nová složka',
\t'Folder_Created' => 'Složka vytvořena',
\t'Existing_Folder' => 'Existující složka',
\t'Confirm_Folder_del' => 'Opravdu chcete smazat tuto složku a její obsah?',
\t'Return_Files_List' => 'Zpět k seznamu souborů',
\t'Preview' => 'Náhled',
\t'Download' => 'Stáhnout',
\t'Insert_Folder_Name' => 'Vložte název složky:',
\t'Root' => 'root',
\t'Rename' => 'Přejmenovat',
\t'Back' => 'zpět',
\t'View' => 'Zobrazení',
\t'View_list' => 'Seznam souborů',
\t'View_columns_list' => 'Dvousloupcový seznam souborů',
\t'View_boxes' => 'Dlaždicové zobrazení',
\t'Toolbar' => 'Panel nástrojů',
\t'Actions' => 'Akce',
\t'Rename_existing_file' => 'Tento soubor již existuje',
\t'Rename_existing_folder' => 'Tato složka již existuje',
\t'Empty_name' => 'Zadali jste prázdný název',
\t'Text_filter' => 'textový filtr',
\t'Swipe_help' => 'Pro zobrazení možností klikněte na název souboru/složky.',
\t'Upload_base' => 'Základní nahrávání',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA upload (pro velké soubory)',
\t'Upload_java_help' => \"Pokud se Java Applet nenačítá, ujistěte se, že: 1. je ve vašem počítači nainstalována Java <a href='http://java.com/en/download/'>[odkaz pro stažení]</a> 2. nic není blokováno firewallem\",
\t'Upload_base_help' => \"Přetáhněte soubor(y) do prostoru výše nebo do něj klikněte myší (moderní prohlížeče) a vyberte soubory. Po dokončení nahrávání klikněte na tlačítko 'Zpět k seznamu souborů'.\",
\t'Type_dir' => 'složka',
\t'Type' => 'Typ',
\t'Dimension' => 'Rozměr',
\t'Size' => 'Velikost',
\t'Date' => 'Datum',
\t'Filename' => 'Název',
\t'Operations' => 'Operace',
\t'Date_type' => 'd.m.Y',
\t'OK' => 'OK',
\t'Cancel' => 'Zrušit',
\t'Sorting' => 'Řazení',
\t'Show_url' => 'Zobrazit URL adresu',
\t'Extract' => 'Rozbalit zde',
\t'File_info' => 'Informace o souboru',
\t'Edit_image' => 'Upravit obrázek',
\t'Duplicate' => 'Duplikovat',
\t'Folders' => 'Složky',
\t'Copy' => 'Kopírovat',
\t'Cut' => 'Vyjmout',
\t'Paste' => 'Vložit',
\t'CB' => 'Schránka', // clipboard
\t'Paste_Here' => 'Vložit do této složky',
\t'Paste_Confirm' => 'Skutečně chcete vložit obsah schránky do této složky? Existující soubory či složky budou přepsány.',
\t'Paste_Failed' => 'Vložení selhalo',
\t'Clear_Clipboard' => 'Vymazat schránku',
\t'Clear_Clipboard_Confirm' => 'Skutečně chcete vymazat obsah schránky?',
\t'Files_ON_Clipboard' => 'Ve schránce jsou soubory.',
\t'Copy_Cut_Size_Limit' => 'Zvolené soubory/složky jsou příliš velké pro operaci %s. Limit: %d MB/operace', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Zvolili jste příliš mnoho souborů/složek pro operaci %s. Limit: %d souborů/operace', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Nemáte oprávnění %s.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Obrázek nelze uložit',
\t'Zip_No_Extract' => 'Archív nelze rozbalit. Soubor může být poškozen.',
\t'Zip_Invalid' => 'Přípona není podporována. Povolené: zip, gz, tar.',
\t'Dir_No_Write' => 'Vybraná složka není zapisovatelná.',
\t'Function_Disabled' => 'Funkce %s byla zamítnuta serverem.', // %s = cut or copy
\t'File_Permission' => 'Práva souboru',
\t'File_Permission_Not_Allowed' => 'Změna oprávnění pro %s není povolena.', // %s = files or folders
\t'File_Permission_Recursive' => 'Použít rekurzivně?',
\t'File_Permission_Wrong_Mode' => \"Zadaný kód oprávnění není platný.\",
\t'User' => 'Uživatel',
\t'Group' => 'Skupina',
\t'Yes' => 'Ano',
\t'No' => 'Ne',
\t'Lang_Not_Found' => 'Jazyk nebyl nalezen.',
\t'Lang_Change' => 'Změnit jazyk',
\t'File_Not_Found' => 'Soubor nebyl nalezen.',
\t'File_Open_Edit_Not_Allowed' => 'Nemáte oprávnění %s tento soubor.', // %s = open or edit
\t'Edit' => 'Upravit',
\t'Edit_File' => \"Upravit obsah souboru\",
\t'File_Save_OK' => \"Soubor byl úspěšně uložen.\",
\t'File_Save_Error' => \"Došlo k chybě při ukládání souboru.\",
\t'New_File' => 'Nový soubor',
\t'No_Extension' => 'Musíte doplnit příponu souboru.',
\t'Valid_Extensions' => 'Povolené přípony: %s', // %s = txt,log etc.
\t'Upload_message' => \"Pro nahrání přetáhněte soubor(y) sem\",

\t'SERVER ERROR' => \"CHYBA SERVERU\",
\t'forbiden' => \"Zakázáno\",
\t'wrong path' => \"Neplatná cesta\",
\t'wrong name' => \"Neplatná název\",
\t'wrong extension' => \"Neplatná přípona\",
\t'wrong option' => \"Neplatná volba\",
\t'wrong data' => \"Neplatná data\",
\t'wrong action' => \"Neplatná akce\",
\t'wrong sub-action' => \"Neplatná podakce\",
\t'no action passed' => \"Nebyla předána žádná akce\",
\t'no path' => \"Žádná cesta\",
\t'no file' => \"Žádný soubor\",
\t'view type number missing' => \"Chybí číslo typu pro zobrazení\",
\t'Not enought Memory' => \"Nedostatek paměti\",
\t'max_size_reached' => \"Vaše složka s obrázky dosáhla maximální velikosti %d MB.\", //%d = max overall size
\t'B' => \"B\",
\t'KB' => \"KB\",
\t'MB' => \"MB\",
\t'GB' => \"GB\",
\t'TB' => \"TB\",
\t'total size' => \"Celková velikost\",
);
", "@MwebAdmin/filemanager/lang/cs.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/cs.php");
    }
}
