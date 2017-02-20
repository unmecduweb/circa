<?php

/* @MwebAdmin/filemanager/lang/pl.php */
class __TwigTemplate_5d254d3d7b1a86c9af5482640574ad2d3e4ee51895507fd84d19b3077810d824 extends Twig_Template
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
        $__internal_7a580b8c48ebb7b74529ca8b0a2984bf17ee87c3401377cd972c681bd250792b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a580b8c48ebb7b74529ca8b0a2984bf17ee87c3401377cd972c681bd250792b->enter($__internal_7a580b8c48ebb7b74529ca8b0a2984bf17ee87c3401377cd972c681bd250792b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/pl.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Wybierz',
\t'Erase' => 'Usuń',
\t'Open' => 'Otwórz',
\t'Confirm_del' => 'Czy jesteś pewien, że chcesz usunąć ten plik?',
\t'All' => 'Wszystkie',
\t'Files' => 'Pliki',
\t'Images' => 'Zdjęcia',
\t'Archives' => 'Archiwa',
\t'Error_Upload' => 'Plik przekracza maksymalny dozwolony rozmiar.',
\t'Error_extension' => 'Niedozwolone rozszerzenie pliku.',
\t'Upload_file' => 'Wgraj plik',
\t'Filters' => 'Filtr widoku',
\t'Videos' => 'Filmy',
\t'Music' => 'Muzyka',
\t'New_Folder' => 'Nowy folder',
\t'Folder_Created' => 'Folder został utworzony poprawnie',
\t'Existing_Folder' => 'Istniejący folder',
\t'Confirm_Folder_del' => 'Czy jesteś pewien, że chcesz usunąć folder i wszystko co znajduje się w nim?',
\t'Return_Files_List' => 'Powrót do listy plików',
\t'Preview' => 'Podgląd',
\t'Download' => 'Pobierz',
\t'Insert_Folder_Name' => 'Podaj nazwę folderu:',
\t'Root' => 'root',
\t'Rename' => 'Zmień nazwę',
\t'Back' => '[..]',
\t'View' => 'Widok',
\t'View_list' => 'Lista',
\t'View_columns_list' => 'Kolumnowy',
\t'View_boxes' => 'Blokowy',
\t'Toolbar' => 'Pasek',
\t'Actions' => 'Opcje',
\t'Rename_existing_file' => 'Ten plik już tutaj umieszczono',
\t'Rename_existing_folder' => 'Ten folder już tutaj utworzono',
\t'Empty_name' => 'Nie podano wymaganej nazwy',
\t'Text_filter' => 'wpisz txt',
\t'Swipe_help' => 'Kliknij w nazwę pliku/folderu by wyświetlić dostępne opcje',
\t'Upload_base' => 'Wgrywanie standardowe',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'Wgrywanie przez skrypty JS (dla dużych plików)',
\t'Upload_java_help' => \"Jeżeli ten aplet JS nie powoduje wgrywania 1. Sprawdź czy masz pobraną i uruchomioną obsługę skryptów w JAVA na stronie JAVA <a href='http://java.com/en/download/'>[pobierz]</a> 2. Upewnij się, że nie jest to blokada wynikająca z ustawień zapory firewall\",
\t'Upload_base_help' => \"Zastosuj metodę Przeciągnij & Upuść w obszar powyżej, lub kliknij tam (opcja dotyczy tylko najnowszych przeglądarek). Wybierz plik i kliknij Otwórz. Kiedy zakończy się proces wgrywania, kliknij Powrót do listy plików na górze, by zakończyć.\",
\t'Type_dir' => 'FLD',
\t'Type' => 'Roz.',
\t'Dimension' => 'Rozmiar',
\t'Size' => 'Wlk.',
\t'Date' => ' Czas',
\t'Filename' => 'Nazwa',
\t'Operations' => 'Opcje',
\t'Date_type' => 'd-m-y',
\t'OK' => 'OK',
\t'Cancel' => 'Anuluj',
\t'Sorting' => 'SORTOWANIE',
\t'Show_url' => 'pokaż URL',
\t'Extract' => 'rozpakuj tutaj',
\t'File_info' => 'info o pliku',
\t'Edit_image' => 'edycja obrazu',
\t'Duplicate' => 'Powiel',
\t'Folders' => 'Foldery',
\t'Copy' => 'Kopiuj',
\t'Cut' => 'Wytnij',
\t'Paste' => 'Wklej',
\t'CB' => 'Schowek', // clipboard
\t'Paste_Here' => 'Wklej do tego folderu',
\t'Paste_Confirm' => 'Czy jesteś pewien, że chcesz wkleić to do tego folderu? Operacja nadpisze istniejące już wczesniej pliki/podfoldery bez możliwości ich odzyskania.',
\t'Paste_Failed' => 'Operacja wklejenia plików nie powiodła się',
\t'Clear_Clipboard' => 'Wyczyść schowek',
\t'Clear_Clipboard_Confirm' => 'Czy jesteś pewien, że chcesz wyczyścić zasoby schowka?',
\t'Files_ON_Clipboard' => 'Do schowka zostały dodane pliki.',
\t'Copy_Cut_Size_Limit' => 'Wybrane pliki/foldery mają zbyt duży rozmiar by wykonać operację %s. Obowiązuje ograniczenie do: %d MB/etap operacji', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Wybrałeś zbyt wiele plików/folderów by wykonać operację %s. Limit: %d plików/etap operacji', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Nie masz uprawnień do wykonania działania %s na tych plikach.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Nie można zapisać obrazka',
\t'Zip_No_Extract' => 'Archiwum ZIP nie może zostać rozpakowane tam. Plik może być uszkodzony.',
\t'Zip_Invalid' => 'Te rozszerzenia plików nie posiadają tutaj naszego wspierane. Dopuszczamy tylko format: zip, gz, tar.',
\t'Dir_No_Write' => 'Folder który wybrałeś, nie posiada uprawnień chmod umożliwiających poprawny zapis.',
\t'Function_Disabled' => 'Operacja %s została zablokowana przez oprogramowanie Twojego serwera.', // %s = cut or copy
\t'File_Permission' => 'Uprawnienia pliku',
\t'File_Permission_Not_Allowed' => 'Zmiana uprawnień dla %s jest niedozwolona.', // %s = files or folders
\t'File_Permission_Recursive' => 'Zastosować rekursywnie?',
\t'File_Permission_Wrong_Mode' => \"Zastosowane uprawnienia są niepoprawne.\",
\t'User' => 'Użytkownik',
\t'Group' => 'Grupa',
\t'Yes' => 'Tak',
\t'No' => 'Nie',
\t'Lang_Not_Found' => 'Nie znaleziono języka.',
\t'Lang_Change' => 'Zmień język',
\t'File_Not_Found' => 'Nie można znaleźć pliku.',
\t'File_Open_Edit_Not_Allowed' => 'Nie masz uprawnien do pliku %s.', // %s = open or edit
\t'Edit' => 'Edytuj',
\t'Edit_File' => \"Edytuj zawartość pliku\",
\t'File_Save_OK' => \"Plik został zapisany.\",
\t'File_Save_Error' => \"Wystąpił błąd podczas zapisywania pliku.\",
\t'New_File' => 'Utwórz plik',
\t'No_Extension' => 'Musisz dodać rozszerzenie do pliku.',
\t'Valid_Extensions' => 'Poprawne rozszerzenia: %s', // %s = txt,log etc.
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
        
        $__internal_7a580b8c48ebb7b74529ca8b0a2984bf17ee87c3401377cd972c681bd250792b->leave($__internal_7a580b8c48ebb7b74529ca8b0a2984bf17ee87c3401377cd972c681bd250792b_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/pl.php";
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

\t'Select' => 'Wybierz',
\t'Erase' => 'Usuń',
\t'Open' => 'Otwórz',
\t'Confirm_del' => 'Czy jesteś pewien, że chcesz usunąć ten plik?',
\t'All' => 'Wszystkie',
\t'Files' => 'Pliki',
\t'Images' => 'Zdjęcia',
\t'Archives' => 'Archiwa',
\t'Error_Upload' => 'Plik przekracza maksymalny dozwolony rozmiar.',
\t'Error_extension' => 'Niedozwolone rozszerzenie pliku.',
\t'Upload_file' => 'Wgraj plik',
\t'Filters' => 'Filtr widoku',
\t'Videos' => 'Filmy',
\t'Music' => 'Muzyka',
\t'New_Folder' => 'Nowy folder',
\t'Folder_Created' => 'Folder został utworzony poprawnie',
\t'Existing_Folder' => 'Istniejący folder',
\t'Confirm_Folder_del' => 'Czy jesteś pewien, że chcesz usunąć folder i wszystko co znajduje się w nim?',
\t'Return_Files_List' => 'Powrót do listy plików',
\t'Preview' => 'Podgląd',
\t'Download' => 'Pobierz',
\t'Insert_Folder_Name' => 'Podaj nazwę folderu:',
\t'Root' => 'root',
\t'Rename' => 'Zmień nazwę',
\t'Back' => '[..]',
\t'View' => 'Widok',
\t'View_list' => 'Lista',
\t'View_columns_list' => 'Kolumnowy',
\t'View_boxes' => 'Blokowy',
\t'Toolbar' => 'Pasek',
\t'Actions' => 'Opcje',
\t'Rename_existing_file' => 'Ten plik już tutaj umieszczono',
\t'Rename_existing_folder' => 'Ten folder już tutaj utworzono',
\t'Empty_name' => 'Nie podano wymaganej nazwy',
\t'Text_filter' => 'wpisz txt',
\t'Swipe_help' => 'Kliknij w nazwę pliku/folderu by wyświetlić dostępne opcje',
\t'Upload_base' => 'Wgrywanie standardowe',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'Wgrywanie przez skrypty JS (dla dużych plików)',
\t'Upload_java_help' => \"Jeżeli ten aplet JS nie powoduje wgrywania 1. Sprawdź czy masz pobraną i uruchomioną obsługę skryptów w JAVA na stronie JAVA <a href='http://java.com/en/download/'>[pobierz]</a> 2. Upewnij się, że nie jest to blokada wynikająca z ustawień zapory firewall\",
\t'Upload_base_help' => \"Zastosuj metodę Przeciągnij & Upuść w obszar powyżej, lub kliknij tam (opcja dotyczy tylko najnowszych przeglądarek). Wybierz plik i kliknij Otwórz. Kiedy zakończy się proces wgrywania, kliknij Powrót do listy plików na górze, by zakończyć.\",
\t'Type_dir' => 'FLD',
\t'Type' => 'Roz.',
\t'Dimension' => 'Rozmiar',
\t'Size' => 'Wlk.',
\t'Date' => ' Czas',
\t'Filename' => 'Nazwa',
\t'Operations' => 'Opcje',
\t'Date_type' => 'd-m-y',
\t'OK' => 'OK',
\t'Cancel' => 'Anuluj',
\t'Sorting' => 'SORTOWANIE',
\t'Show_url' => 'pokaż URL',
\t'Extract' => 'rozpakuj tutaj',
\t'File_info' => 'info o pliku',
\t'Edit_image' => 'edycja obrazu',
\t'Duplicate' => 'Powiel',
\t'Folders' => 'Foldery',
\t'Copy' => 'Kopiuj',
\t'Cut' => 'Wytnij',
\t'Paste' => 'Wklej',
\t'CB' => 'Schowek', // clipboard
\t'Paste_Here' => 'Wklej do tego folderu',
\t'Paste_Confirm' => 'Czy jesteś pewien, że chcesz wkleić to do tego folderu? Operacja nadpisze istniejące już wczesniej pliki/podfoldery bez możliwości ich odzyskania.',
\t'Paste_Failed' => 'Operacja wklejenia plików nie powiodła się',
\t'Clear_Clipboard' => 'Wyczyść schowek',
\t'Clear_Clipboard_Confirm' => 'Czy jesteś pewien, że chcesz wyczyścić zasoby schowka?',
\t'Files_ON_Clipboard' => 'Do schowka zostały dodane pliki.',
\t'Copy_Cut_Size_Limit' => 'Wybrane pliki/foldery mają zbyt duży rozmiar by wykonać operację %s. Obowiązuje ograniczenie do: %d MB/etap operacji', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Wybrałeś zbyt wiele plików/folderów by wykonać operację %s. Limit: %d plików/etap operacji', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Nie masz uprawnień do wykonania działania %s na tych plikach.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Nie można zapisać obrazka',
\t'Zip_No_Extract' => 'Archiwum ZIP nie może zostać rozpakowane tam. Plik może być uszkodzony.',
\t'Zip_Invalid' => 'Te rozszerzenia plików nie posiadają tutaj naszego wspierane. Dopuszczamy tylko format: zip, gz, tar.',
\t'Dir_No_Write' => 'Folder który wybrałeś, nie posiada uprawnień chmod umożliwiających poprawny zapis.',
\t'Function_Disabled' => 'Operacja %s została zablokowana przez oprogramowanie Twojego serwera.', // %s = cut or copy
\t'File_Permission' => 'Uprawnienia pliku',
\t'File_Permission_Not_Allowed' => 'Zmiana uprawnień dla %s jest niedozwolona.', // %s = files or folders
\t'File_Permission_Recursive' => 'Zastosować rekursywnie?',
\t'File_Permission_Wrong_Mode' => \"Zastosowane uprawnienia są niepoprawne.\",
\t'User' => 'Użytkownik',
\t'Group' => 'Grupa',
\t'Yes' => 'Tak',
\t'No' => 'Nie',
\t'Lang_Not_Found' => 'Nie znaleziono języka.',
\t'Lang_Change' => 'Zmień język',
\t'File_Not_Found' => 'Nie można znaleźć pliku.',
\t'File_Open_Edit_Not_Allowed' => 'Nie masz uprawnien do pliku %s.', // %s = open or edit
\t'Edit' => 'Edytuj',
\t'Edit_File' => \"Edytuj zawartość pliku\",
\t'File_Save_OK' => \"Plik został zapisany.\",
\t'File_Save_Error' => \"Wystąpił błąd podczas zapisywania pliku.\",
\t'New_File' => 'Utwórz plik',
\t'No_Extension' => 'Musisz dodać rozszerzenie do pliku.',
\t'Valid_Extensions' => 'Poprawne rozszerzenia: %s', // %s = txt,log etc.
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
", "@MwebAdmin/filemanager/lang/pl.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/pl.php");
    }
}
