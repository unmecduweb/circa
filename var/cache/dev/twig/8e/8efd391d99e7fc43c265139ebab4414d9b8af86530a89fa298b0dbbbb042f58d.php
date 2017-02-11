<?php

/* @MwebAdmin/filemanager/lang/hu_HU.php */
class __TwigTemplate_3527442eccee7be87cf0ab94ab1faa56d403bd202fb90c484d0c5b47ccba5c83 extends Twig_Template
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
        $__internal_0e7db5e6601b7e4d63576ed0df65b9bb8ec0f9e52ecadd8a9e23f99067ace2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7db5e6601b7e4d63576ed0df65b9bb8ec0f9e52ecadd8a9e23f99067ace2c4->enter($__internal_0e7db5e6601b7e4d63576ed0df65b9bb8ec0f9e52ecadd8a9e23f99067ace2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/hu_HU.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Tallózás',
\t'Erase' => 'Törlés',
\t'Open' => 'Megnyitás',
\t'Confirm_del' => 'Biztos vagy benne, hogy törlöd ezt a fájlt?',
\t'All' => 'Összes',
\t'Files' => 'Fájlok',
\t'Images' => 'Képek',
\t'Archives' => 'Tömörített',
\t'Error_Upload' => 'A kiválasztott fájl mérete túl nagy!',
\t'Error_extension' => 'A megadott kiterjesztésű fájl nem engedélyezett.',
\t'Upload_file' => 'Fájl feltöltése',
\t'Filters' => 'Szűrő',
\t'Videos' => 'Videó',
\t'Music' => 'Zene',
\t'New_Folder' => 'Új mappa',
\t'Folder_Created' => 'Mappa létrehozva',
\t'Existing_Folder' => 'Mappa már létezik',
\t'Confirm_Folder_del' => 'Biztos, hogy törlöd a könyvtárat és annak tartalmát?',
\t'Return_Files_List' => 'Vissza a fájllistához',
\t'Preview' => 'Előnézet',
\t'Download' => 'Letöltés',
\t'Insert_Folder_Name' => 'Mappa neve:',
\t'Root' => 'root',
\t'Rename' => 'Átnevezés',
\t'Back' => 'vissza',
\t'View' => 'Nézet',
\t'View_list' => 'Lista',
\t'View_columns_list' => 'Oszlopok',
\t'View_boxes' => 'Miniatűrök',
\t'Toolbar' => 'Eszközök',
\t'Actions' => 'Műveletek',
\t'Rename_existing_file' => 'A fájl már létezik',
\t'Rename_existing_folder' => 'A mappa már létezik',
\t'Empty_name' => 'A név nincs megadva',
\t'Text_filter' => 'szűrés',
\t'Swipe_help' => 'Húzd az egered a fájl/mappa nevére, hogy lásd az opciókat.',
\t'Upload_base' => 'Alapértelmezett feltöltő',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA feltöltő (nagyméretű fájlokhoz)',
\t'Upload_java_help' => \"Ha a Java Applet nem töltődik be: 1. ellenőrizze, hogy a JAVA telepítve van-e, ha nincs: <a href='http://java.com/en/download/'>[letöltés]</a> 2. ellenőrizze, hogy a tűzfal nem blokkolja-e\",
\t'Upload_base_help' => \"Fogd meg és húzd az ablakba a fájlt vagy kattints bele és válaszd ki majd nyomd meg a megnyitás gombot (modern böngészők). Amikor a feltöltés befejeződött kattints a fenti gombra a visszatéréshez.\",
\t'Type_dir' => 'Mappa',
\t'Type' => 'Típus',
\t'Dimension' => 'Felbontás',
\t'Size' => 'Méret',
\t'Date' => 'Dátum',
\t'Filename' => 'Név',
\t'Operations' => 'Műveletek',
\t'Date_type' => 'y-m-d',
\t'OK' => 'OK',
\t'Cancel' => 'Mégse',
\t'Sorting' => 'rendezés',
\t'Show_url' => 'URL mutatása',
\t'Extract' => 'kibontás ide',
\t'File_info' => 'fájl info',
\t'Edit_image' => 'kép szerkesztése',
\t'Duplicate' => 'Klónozás',
\t'Folders' => 'Mappák',
\t'Copy' => 'Másolás',
\t'Cut' => 'Kivágás',
\t'Paste' => 'Beillesztés',
\t'CB' => 'VL', // clipboard
\t'Paste_Here' => 'Beillesztés ebbe a mappába.',
\t'Paste_Confirm' => 'Biztos vagy benne, hogy ebbe a mappába szeretnéd beilleszteni a fájlokat? A létező fájlok/mappák felül lesznek írva.',
\t'Paste_Failed' => 'A beillesztés sikertelen!',
\t'Clear_Clipboard' => 'Vágólap törlése',
\t'Clear_Clipboard_Confirm' => 'Biztos törlöd a vágólap tartalmát?',
\t'Files_ON_Clipboard' => 'Fájlok találhatóak a vágólapon.',
\t'Copy_Cut_Size_Limit' => 'A kiválasztott fájlok/mappák túl nagyok a %shoz. Limit: %d MB/művelet', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Túl sok fájlt választottál ki a %shoz. Limit: %d fájl/művelet', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'A %s nem engedélyezett.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'A kép mentése sikertelen.',
\t'Zip_No_Extract' => 'Kicsomagolás sikertelen. Lehet, hogy korrupt a fájl.',
\t'Zip_Invalid' => 'Ez a kiterjesztés nem támogatott. Támogatott: zip, gz, tar.',
\t'Dir_No_Write' => 'A kiválasztott mappa nem írható.',
\t'Function_Disabled' => 'A %s funkciót letiltotta a szerver.', // %s = cut or copy
\t'File_Permission' => 'Engedélyek',
\t'File_Permission_Not_Allowed' => 'A %s jogainak a megváltoztatása nem engedélyezett.', // %s = files or folders
\t'File_Permission_Recursive' => 'Rekurzív beállítás az almappákra?',
\t'File_Permission_Wrong_Mode' => \"A beírt engedély nem megfelelő.\",
\t'User' => 'Felhasználó',
\t'Group' => 'Csoport',
\t'Yes' => 'Igen',
\t'No' => 'Nem',
\t'Lang_Not_Found' => 'A nyelv nem található.',
\t'Lang_Change' => 'Nyelv megváltoztatása',
\t'File_Not_Found' => 'A fájl nem található.',
\t'File_Open_Edit_Not_Allowed' => 'Nincs jogod %s a fájlt.', // %s = open or edit
\t'Edit' => 'Szerkesztés',
\t'Edit_File' => \"Fájl szerkesztése\",
\t'File_Save_OK' => \"Fájl sikeresen mentve.\",
\t'File_Save_Error' => \"Hiba történt a fájl mentése közben.\",
\t'New_File' => 'Új fájl',
\t'No_Extension' => 'Meg kell adnod a fájl kiterjesztését.',
\t'Valid_Extensions' => 'Elfogadott kiterjesztések: %s', // %s = txt,log etc.
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
        
        $__internal_0e7db5e6601b7e4d63576ed0df65b9bb8ec0f9e52ecadd8a9e23f99067ace2c4->leave($__internal_0e7db5e6601b7e4d63576ed0df65b9bb8ec0f9e52ecadd8a9e23f99067ace2c4_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/hu_HU.php";
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

\t'Select' => 'Tallózás',
\t'Erase' => 'Törlés',
\t'Open' => 'Megnyitás',
\t'Confirm_del' => 'Biztos vagy benne, hogy törlöd ezt a fájlt?',
\t'All' => 'Összes',
\t'Files' => 'Fájlok',
\t'Images' => 'Képek',
\t'Archives' => 'Tömörített',
\t'Error_Upload' => 'A kiválasztott fájl mérete túl nagy!',
\t'Error_extension' => 'A megadott kiterjesztésű fájl nem engedélyezett.',
\t'Upload_file' => 'Fájl feltöltése',
\t'Filters' => 'Szűrő',
\t'Videos' => 'Videó',
\t'Music' => 'Zene',
\t'New_Folder' => 'Új mappa',
\t'Folder_Created' => 'Mappa létrehozva',
\t'Existing_Folder' => 'Mappa már létezik',
\t'Confirm_Folder_del' => 'Biztos, hogy törlöd a könyvtárat és annak tartalmát?',
\t'Return_Files_List' => 'Vissza a fájllistához',
\t'Preview' => 'Előnézet',
\t'Download' => 'Letöltés',
\t'Insert_Folder_Name' => 'Mappa neve:',
\t'Root' => 'root',
\t'Rename' => 'Átnevezés',
\t'Back' => 'vissza',
\t'View' => 'Nézet',
\t'View_list' => 'Lista',
\t'View_columns_list' => 'Oszlopok',
\t'View_boxes' => 'Miniatűrök',
\t'Toolbar' => 'Eszközök',
\t'Actions' => 'Műveletek',
\t'Rename_existing_file' => 'A fájl már létezik',
\t'Rename_existing_folder' => 'A mappa már létezik',
\t'Empty_name' => 'A név nincs megadva',
\t'Text_filter' => 'szűrés',
\t'Swipe_help' => 'Húzd az egered a fájl/mappa nevére, hogy lásd az opciókat.',
\t'Upload_base' => 'Alapértelmezett feltöltő',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA feltöltő (nagyméretű fájlokhoz)',
\t'Upload_java_help' => \"Ha a Java Applet nem töltődik be: 1. ellenőrizze, hogy a JAVA telepítve van-e, ha nincs: <a href='http://java.com/en/download/'>[letöltés]</a> 2. ellenőrizze, hogy a tűzfal nem blokkolja-e\",
\t'Upload_base_help' => \"Fogd meg és húzd az ablakba a fájlt vagy kattints bele és válaszd ki majd nyomd meg a megnyitás gombot (modern böngészők). Amikor a feltöltés befejeződött kattints a fenti gombra a visszatéréshez.\",
\t'Type_dir' => 'Mappa',
\t'Type' => 'Típus',
\t'Dimension' => 'Felbontás',
\t'Size' => 'Méret',
\t'Date' => 'Dátum',
\t'Filename' => 'Név',
\t'Operations' => 'Műveletek',
\t'Date_type' => 'y-m-d',
\t'OK' => 'OK',
\t'Cancel' => 'Mégse',
\t'Sorting' => 'rendezés',
\t'Show_url' => 'URL mutatása',
\t'Extract' => 'kibontás ide',
\t'File_info' => 'fájl info',
\t'Edit_image' => 'kép szerkesztése',
\t'Duplicate' => 'Klónozás',
\t'Folders' => 'Mappák',
\t'Copy' => 'Másolás',
\t'Cut' => 'Kivágás',
\t'Paste' => 'Beillesztés',
\t'CB' => 'VL', // clipboard
\t'Paste_Here' => 'Beillesztés ebbe a mappába.',
\t'Paste_Confirm' => 'Biztos vagy benne, hogy ebbe a mappába szeretnéd beilleszteni a fájlokat? A létező fájlok/mappák felül lesznek írva.',
\t'Paste_Failed' => 'A beillesztés sikertelen!',
\t'Clear_Clipboard' => 'Vágólap törlése',
\t'Clear_Clipboard_Confirm' => 'Biztos törlöd a vágólap tartalmát?',
\t'Files_ON_Clipboard' => 'Fájlok találhatóak a vágólapon.',
\t'Copy_Cut_Size_Limit' => 'A kiválasztott fájlok/mappák túl nagyok a %shoz. Limit: %d MB/művelet', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Túl sok fájlt választottál ki a %shoz. Limit: %d fájl/művelet', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'A %s nem engedélyezett.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'A kép mentése sikertelen.',
\t'Zip_No_Extract' => 'Kicsomagolás sikertelen. Lehet, hogy korrupt a fájl.',
\t'Zip_Invalid' => 'Ez a kiterjesztés nem támogatott. Támogatott: zip, gz, tar.',
\t'Dir_No_Write' => 'A kiválasztott mappa nem írható.',
\t'Function_Disabled' => 'A %s funkciót letiltotta a szerver.', // %s = cut or copy
\t'File_Permission' => 'Engedélyek',
\t'File_Permission_Not_Allowed' => 'A %s jogainak a megváltoztatása nem engedélyezett.', // %s = files or folders
\t'File_Permission_Recursive' => 'Rekurzív beállítás az almappákra?',
\t'File_Permission_Wrong_Mode' => \"A beírt engedély nem megfelelő.\",
\t'User' => 'Felhasználó',
\t'Group' => 'Csoport',
\t'Yes' => 'Igen',
\t'No' => 'Nem',
\t'Lang_Not_Found' => 'A nyelv nem található.',
\t'Lang_Change' => 'Nyelv megváltoztatása',
\t'File_Not_Found' => 'A fájl nem található.',
\t'File_Open_Edit_Not_Allowed' => 'Nincs jogod %s a fájlt.', // %s = open or edit
\t'Edit' => 'Szerkesztés',
\t'Edit_File' => \"Fájl szerkesztése\",
\t'File_Save_OK' => \"Fájl sikeresen mentve.\",
\t'File_Save_Error' => \"Hiba történt a fájl mentése közben.\",
\t'New_File' => 'Új fájl',
\t'No_Extension' => 'Meg kell adnod a fájl kiterjesztését.',
\t'Valid_Extensions' => 'Elfogadott kiterjesztések: %s', // %s = txt,log etc.
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
", "@MwebAdmin/filemanager/lang/hu_HU.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/hu_HU.php");
    }
}
