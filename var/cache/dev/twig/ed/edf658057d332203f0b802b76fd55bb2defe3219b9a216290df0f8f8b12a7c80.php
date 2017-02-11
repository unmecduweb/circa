<?php

/* @MwebAdmin/filemanager/lang/it.php */
class __TwigTemplate_9d5b00ab3a8ad9b7e617fa1731d27a54bbefa1182ab8436b02db37dee159ad54 extends Twig_Template
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
        $__internal_8bdf5c6e24834601e6fbf24f40f7af0b0f3d11758ac5d0f0843e917078723267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bdf5c6e24834601e6fbf24f40f7af0b0f3d11758ac5d0f0843e917078723267->enter($__internal_8bdf5c6e24834601e6fbf24f40f7af0b0f3d11758ac5d0f0843e917078723267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/it.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Seleziona',
\t'Erase' => 'Cancella',
\t'Open' => 'Apri',
\t'Confirm_del' => 'Sei sicuro di volere cancellare questo file?',
\t'All' => 'Tutti',
\t'Files' => 'File',
\t'Images' => 'Immagini',
\t'Archives' => 'Archivi',
\t'Error_Upload' => 'Il file caricato supera i limiti imposti.',
\t'Error_extension' => 'Il tipo del file caricato non è permesso.',
\t'Upload_file' => 'Carica',
\t'Filters' => 'Filtri',
\t'Videos' => 'Video',
\t'Music' => 'Musica',
\t'New_Folder' => 'Nuova Cartella',
\t'Folder_Created' => 'Cartella creata correttamente',
\t'Existing_Folder' => 'Cartella già esistente',
\t'Confirm_Folder_del' => 'Sei sicuro di voler cancellare la cartella e tutti i file in essa contenuti?',
\t'Return_Files_List' => 'Ritorna alla lista dei file',
\t'Preview' => 'Anteprima',
\t'Download' => 'Download',
\t'Insert_Folder_Name' => 'Inserisci il nome della cartella:',
\t'Root' => 'base',
\t'Rename' => 'Rinomina',
\t'Back' => 'indietro',
\t'View' => 'Vista',
\t'View_list' => 'Vista a lista',
\t'View_columns_list' => 'Vista a colonne',
\t'View_boxes' => 'Vista a box',
\t'Toolbar' => 'Toolbar',
\t'Actions' => 'Azioni',
\t'Rename_existing_file' => 'Il file esiste già',
\t'Rename_existing_folder' => 'La cartella esiste già',
\t'Empty_name' => 'Il nome è vuoto',
\t'Text_filter' => 'filtro di testo',
\t'Swipe_help' => 'Esegui uno Swipe sul nome del file/cartella per mostrare le opzioni',
\t'Upload_base' => 'Upload Base',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA upload (file di grosse dimensioni)',
\t'Upload_java_help' => \"Se non si carica l'applet java 1. assicurati di aver installato java nel computer altrimenti <a href='http://java.com/en/download/'>[download link]</a> 2. asscurati di non essere bloccato da un firewall\",
\t'Upload_base_help' => \"Trascina i file nell'area superiore o clicca in essa (per i moderni browser) altrimenti seleziona il file e clicca sul bottone. Quando il caricamento dei file è terminato clicca sul bottone di ritorno in alto.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Tipo',
\t'Dimension' => 'Dimensione',
\t'Size' => 'Peso',
\t'Date' => 'Data',
\t'Filename' => 'Nome',
\t'Operations' => 'Operazioni',
\t'Date_type' => 'd/m/y',
\t'OK' => 'OK',
\t'Cancel' => 'Annulla',
\t'Sorting' => 'ordina',
\t'Show_url' => 'Mostra URL',
\t'Extract' => 'estrai qui',
\t'File_info' => 'informazioni file',
\t'Edit_image' => 'Modifica immagine',
\t'Duplicate' => 'Duplica',
\t'Folders' => 'Cartelle',
\t'Copy' => 'Copia',
\t'Cut' => 'Taglia',
\t'Paste' => 'Incolla',
\t'CB' => 'CB', // clipboard
\t'Paste_Here' => 'Incolla su questa cartella',
\t'Paste_Confirm' => 'Sei sicuro di voler incollare in questa cartella? Questo file sovrascriverà i file/cartelle esistenti qual\\'ora ci fossero.',
\t'Paste_Failed' => 'Errore nell\\'incollare il/i file',
\t'Clear_Clipboard' => 'Pulisci clipboard',
\t'Clear_Clipboard_Confirm' => 'Sei sicuro di voler cancellare la clipboard?',
\t'Files_ON_Clipboard' => 'Ci sono file nella clipboard.',
\t'Copy_Cut_Size_Limit' => 'I file o cartelle selezionati sono troppo grandi per %s. Il limite è: %d MB/operazione', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Hai selezionato troppi file/cartelle da %s. Il limite è: %d file/operazione', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Non hai i permessi per %s %s.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Non è stato possibile salvare l\\'immagine',
\t'Zip_No_Extract' => 'Non si può estrarre il pacchetto perchè sembra corrotto',
\t'Zip_Invalid' => 'Questa estensione non è supportata. Le estensioni valide sono: zip, gz, tar.',
\t'Dir_No_Write' => 'La cartella selezionata non è scrivibile.',
\t'Function_Disabled' => 'La funzione %s è stata disabilitata.', // %s = cut or copy
\t'File_Permission' => 'Permessi file',
\t'File_Permission_Not_Allowed' => 'Il cambiamento dei permessi di %s non è permesso.', // %s = files or folders
\t'File_Permission_Recursive' => 'Applica ricorsivamente?',
\t'File_Permission_Wrong_Mode' => \"La modalità di autorizzazione non è corretta.\",
\t'User' => 'Utente',
\t'Group' => 'Gruppo',
\t'Yes' => 'Si',
\t'No' => 'No',
\t'Lang_Not_Found' => 'La lingua non è stata trovata.',
\t'Lang_Change' => 'Cambia la lingua',
\t'File_Not_Found' => 'Il file non è stato trovato.',
\t'File_Open_Edit_Not_Allowed' => 'Non hai il permesso di %s questo file.', // %s = open or edit
\t'Edit' => 'Modifica',
\t'Edit_File' => \"Modifica il contenuto di questo file\",
\t'File_Save_OK' => \"Il file è stato salvato con successo.\",
\t'File_Save_Error' => \"C'è stato un errore nel salvataggio del file.\",
\t'New_File' => 'Nuovo file',
\t'No_Extension',\"Non hai inserito l'estensione del file.\",
\t'Valid_Extensions' => 'Estensioni valide: %s', // %s = txt,log etc.
\t'Upload_message' => \"Trascina qui i file per l'upload\",

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
        
        $__internal_8bdf5c6e24834601e6fbf24f40f7af0b0f3d11758ac5d0f0843e917078723267->leave($__internal_8bdf5c6e24834601e6fbf24f40f7af0b0f3d11758ac5d0f0843e917078723267_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/it.php";
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

\t'Select' => 'Seleziona',
\t'Erase' => 'Cancella',
\t'Open' => 'Apri',
\t'Confirm_del' => 'Sei sicuro di volere cancellare questo file?',
\t'All' => 'Tutti',
\t'Files' => 'File',
\t'Images' => 'Immagini',
\t'Archives' => 'Archivi',
\t'Error_Upload' => 'Il file caricato supera i limiti imposti.',
\t'Error_extension' => 'Il tipo del file caricato non è permesso.',
\t'Upload_file' => 'Carica',
\t'Filters' => 'Filtri',
\t'Videos' => 'Video',
\t'Music' => 'Musica',
\t'New_Folder' => 'Nuova Cartella',
\t'Folder_Created' => 'Cartella creata correttamente',
\t'Existing_Folder' => 'Cartella già esistente',
\t'Confirm_Folder_del' => 'Sei sicuro di voler cancellare la cartella e tutti i file in essa contenuti?',
\t'Return_Files_List' => 'Ritorna alla lista dei file',
\t'Preview' => 'Anteprima',
\t'Download' => 'Download',
\t'Insert_Folder_Name' => 'Inserisci il nome della cartella:',
\t'Root' => 'base',
\t'Rename' => 'Rinomina',
\t'Back' => 'indietro',
\t'View' => 'Vista',
\t'View_list' => 'Vista a lista',
\t'View_columns_list' => 'Vista a colonne',
\t'View_boxes' => 'Vista a box',
\t'Toolbar' => 'Toolbar',
\t'Actions' => 'Azioni',
\t'Rename_existing_file' => 'Il file esiste già',
\t'Rename_existing_folder' => 'La cartella esiste già',
\t'Empty_name' => 'Il nome è vuoto',
\t'Text_filter' => 'filtro di testo',
\t'Swipe_help' => 'Esegui uno Swipe sul nome del file/cartella per mostrare le opzioni',
\t'Upload_base' => 'Upload Base',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA upload (file di grosse dimensioni)',
\t'Upload_java_help' => \"Se non si carica l'applet java 1. assicurati di aver installato java nel computer altrimenti <a href='http://java.com/en/download/'>[download link]</a> 2. asscurati di non essere bloccato da un firewall\",
\t'Upload_base_help' => \"Trascina i file nell'area superiore o clicca in essa (per i moderni browser) altrimenti seleziona il file e clicca sul bottone. Quando il caricamento dei file è terminato clicca sul bottone di ritorno in alto.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Tipo',
\t'Dimension' => 'Dimensione',
\t'Size' => 'Peso',
\t'Date' => 'Data',
\t'Filename' => 'Nome',
\t'Operations' => 'Operazioni',
\t'Date_type' => 'd/m/y',
\t'OK' => 'OK',
\t'Cancel' => 'Annulla',
\t'Sorting' => 'ordina',
\t'Show_url' => 'Mostra URL',
\t'Extract' => 'estrai qui',
\t'File_info' => 'informazioni file',
\t'Edit_image' => 'Modifica immagine',
\t'Duplicate' => 'Duplica',
\t'Folders' => 'Cartelle',
\t'Copy' => 'Copia',
\t'Cut' => 'Taglia',
\t'Paste' => 'Incolla',
\t'CB' => 'CB', // clipboard
\t'Paste_Here' => 'Incolla su questa cartella',
\t'Paste_Confirm' => 'Sei sicuro di voler incollare in questa cartella? Questo file sovrascriverà i file/cartelle esistenti qual\\'ora ci fossero.',
\t'Paste_Failed' => 'Errore nell\\'incollare il/i file',
\t'Clear_Clipboard' => 'Pulisci clipboard',
\t'Clear_Clipboard_Confirm' => 'Sei sicuro di voler cancellare la clipboard?',
\t'Files_ON_Clipboard' => 'Ci sono file nella clipboard.',
\t'Copy_Cut_Size_Limit' => 'I file o cartelle selezionati sono troppo grandi per %s. Il limite è: %d MB/operazione', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Hai selezionato troppi file/cartelle da %s. Il limite è: %d file/operazione', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Non hai i permessi per %s %s.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Non è stato possibile salvare l\\'immagine',
\t'Zip_No_Extract' => 'Non si può estrarre il pacchetto perchè sembra corrotto',
\t'Zip_Invalid' => 'Questa estensione non è supportata. Le estensioni valide sono: zip, gz, tar.',
\t'Dir_No_Write' => 'La cartella selezionata non è scrivibile.',
\t'Function_Disabled' => 'La funzione %s è stata disabilitata.', // %s = cut or copy
\t'File_Permission' => 'Permessi file',
\t'File_Permission_Not_Allowed' => 'Il cambiamento dei permessi di %s non è permesso.', // %s = files or folders
\t'File_Permission_Recursive' => 'Applica ricorsivamente?',
\t'File_Permission_Wrong_Mode' => \"La modalità di autorizzazione non è corretta.\",
\t'User' => 'Utente',
\t'Group' => 'Gruppo',
\t'Yes' => 'Si',
\t'No' => 'No',
\t'Lang_Not_Found' => 'La lingua non è stata trovata.',
\t'Lang_Change' => 'Cambia la lingua',
\t'File_Not_Found' => 'Il file non è stato trovato.',
\t'File_Open_Edit_Not_Allowed' => 'Non hai il permesso di %s questo file.', // %s = open or edit
\t'Edit' => 'Modifica',
\t'Edit_File' => \"Modifica il contenuto di questo file\",
\t'File_Save_OK' => \"Il file è stato salvato con successo.\",
\t'File_Save_Error' => \"C'è stato un errore nel salvataggio del file.\",
\t'New_File' => 'Nuovo file',
\t'No_Extension',\"Non hai inserito l'estensione del file.\",
\t'Valid_Extensions' => 'Estensioni valide: %s', // %s = txt,log etc.
\t'Upload_message' => \"Trascina qui i file per l'upload\",

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
", "@MwebAdmin/filemanager/lang/it.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/it.php");
    }
}
