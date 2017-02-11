<?php

/* @MwebAdmin/filemanager/lang/ca.php */
class __TwigTemplate_a5d6938f6c121d963e457a1284f051afe9f78a58594a9be1cd36b7715bc86224 extends Twig_Template
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
        $__internal_f0f5426756458d4d574b9dd91a86f470c531114fd275727bbc0a92ac5d50b48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f5426756458d4d574b9dd91a86f470c531114fd275727bbc0a92ac5d50b48c->enter($__internal_f0f5426756458d4d574b9dd91a86f470c531114fd275727bbc0a92ac5d50b48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/ca.php"));

        // line 1
        echo "<?php

return array(
\t'Select' => 'Seleccionar',
\t'Erase' => 'Eliminar',
\t'Open' => 'Obrir',
\t'Confirm_del' => 'Segur que desitges eliminar aquest arxiu?',
\t'All' => 'Tots',
\t'Files' => 'Arxius',
\t'Images' => 'Imatges',
\t'Archives' => 'Fitxers',
\t'Error_Upload' => 'L\\'arxiu que intenta pujar excedeix el màxim permès.',
\t'Error_extension' => 'L\\'extensió de l\\'arxiu no està permesa.',
\t'Upload_file' => 'Pujar',
\t'Filters' => 'Filtres',
\t'Videos' => 'Vídeos',
\t'Music' => 'Musica',
\t'New_Folder' => 'Nova carpeta',
\t'Folder_Created' => 'La carpeta ha estat creada exitosament.',
\t'Existing_Folder' => 'Carpeta existent',
\t'Confirm_Folder_del' => 'Segur que desitges eliminar la carpeta i tots els elements que conté?',
\t'Return_Files_List' => 'Tornar a la llista d\\'arxius',
\t'Preview' => 'Vista prèvia',
\t'Download' => 'Descarregar',
\t'Insert_Folder_Name' => 'Nom de la carpeta:',
\t'Root' => 'arrel',
\t'Rename' => 'Renombrar',
\t'Back' => 'enrere',
\t'View' => 'Vista',
\t'View_list' => 'Vista de llista',
\t'View_columns_list' => 'Vista de columnes',
\t'View_boxes' => 'Vista de miniatures',
\t'Toolbar' => 'Barra d\\'eines',
\t'Actions' => 'Accions',
\t'Rename_existing_file' => 'L\\'arxiu ja existeix',
\t'Rename_existing_folder' => 'La carpeta ja existeix',
\t'Empty_name' => 'El nom es troba buit',
\t'Text_filter' => 'filtre de text',
\t'Swipe_help' => 'Deslize el nom de l\\'arxiu/carpeta per mostrar les opcions',
\t'Upload_base' => 'Pujada d\\'arxius SIMPLE',
\t'Upload_java' => 'Pujada d\\'arxius JAVA (para arxius pesats)',
\t'Upload_url' => 'URL',
\t'Upload_java_help' => \"Si el applet no carrega: 1. Assegura't de tenir Java instal·lat; sinó descarrega-ho i instal·la-ho <a href='http://java.com/en/download/'>des d'aquí</a> 2. Assegura't que el teu firewall no estigui bloquejant res.\",
\t'Upload_base_help' => \"Arrossega i deixa anar els arxius dins d'aquesta àrea o faci clic en ella (per a navegadors moderns) en cas contrari, seleccioni l'arxiu i faci clic en el botó. Quan finalitzi la pujada, faci clic en el botó superior per tornar.\",
\t'Type_dir' => 'Carpeta',
\t'Type' => 'Tipus',
\t'Dimension' => 'Dimensions',
\t'Size' => 'Pes',
\t'Date' => 'Data',
\t'Filename' => 'Nom',
\t'Operations' => 'Operacions',
\t'Date_type' => 'd-m-y',
\t'OK' => 'OK',
\t'Cancel' => 'Cancel·lar',
\t'Sorting' => 'Ordenar',
\t'Show_url' => 'Mostrar URL',
\t'Extract' => 'Extreure aquí',
\t'File_info' => 'Informació',
\t'Edit_image' => 'Editar imatge',
\t'Duplicate' => 'Duplicar',
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
        
        $__internal_f0f5426756458d4d574b9dd91a86f470c531114fd275727bbc0a92ac5d50b48c->leave($__internal_f0f5426756458d4d574b9dd91a86f470c531114fd275727bbc0a92ac5d50b48c_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/ca.php";
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
\t'Select' => 'Seleccionar',
\t'Erase' => 'Eliminar',
\t'Open' => 'Obrir',
\t'Confirm_del' => 'Segur que desitges eliminar aquest arxiu?',
\t'All' => 'Tots',
\t'Files' => 'Arxius',
\t'Images' => 'Imatges',
\t'Archives' => 'Fitxers',
\t'Error_Upload' => 'L\\'arxiu que intenta pujar excedeix el màxim permès.',
\t'Error_extension' => 'L\\'extensió de l\\'arxiu no està permesa.',
\t'Upload_file' => 'Pujar',
\t'Filters' => 'Filtres',
\t'Videos' => 'Vídeos',
\t'Music' => 'Musica',
\t'New_Folder' => 'Nova carpeta',
\t'Folder_Created' => 'La carpeta ha estat creada exitosament.',
\t'Existing_Folder' => 'Carpeta existent',
\t'Confirm_Folder_del' => 'Segur que desitges eliminar la carpeta i tots els elements que conté?',
\t'Return_Files_List' => 'Tornar a la llista d\\'arxius',
\t'Preview' => 'Vista prèvia',
\t'Download' => 'Descarregar',
\t'Insert_Folder_Name' => 'Nom de la carpeta:',
\t'Root' => 'arrel',
\t'Rename' => 'Renombrar',
\t'Back' => 'enrere',
\t'View' => 'Vista',
\t'View_list' => 'Vista de llista',
\t'View_columns_list' => 'Vista de columnes',
\t'View_boxes' => 'Vista de miniatures',
\t'Toolbar' => 'Barra d\\'eines',
\t'Actions' => 'Accions',
\t'Rename_existing_file' => 'L\\'arxiu ja existeix',
\t'Rename_existing_folder' => 'La carpeta ja existeix',
\t'Empty_name' => 'El nom es troba buit',
\t'Text_filter' => 'filtre de text',
\t'Swipe_help' => 'Deslize el nom de l\\'arxiu/carpeta per mostrar les opcions',
\t'Upload_base' => 'Pujada d\\'arxius SIMPLE',
\t'Upload_java' => 'Pujada d\\'arxius JAVA (para arxius pesats)',
\t'Upload_url' => 'URL',
\t'Upload_java_help' => \"Si el applet no carrega: 1. Assegura't de tenir Java instal·lat; sinó descarrega-ho i instal·la-ho <a href='http://java.com/en/download/'>des d'aquí</a> 2. Assegura't que el teu firewall no estigui bloquejant res.\",
\t'Upload_base_help' => \"Arrossega i deixa anar els arxius dins d'aquesta àrea o faci clic en ella (per a navegadors moderns) en cas contrari, seleccioni l'arxiu i faci clic en el botó. Quan finalitzi la pujada, faci clic en el botó superior per tornar.\",
\t'Type_dir' => 'Carpeta',
\t'Type' => 'Tipus',
\t'Dimension' => 'Dimensions',
\t'Size' => 'Pes',
\t'Date' => 'Data',
\t'Filename' => 'Nom',
\t'Operations' => 'Operacions',
\t'Date_type' => 'd-m-y',
\t'OK' => 'OK',
\t'Cancel' => 'Cancel·lar',
\t'Sorting' => 'Ordenar',
\t'Show_url' => 'Mostrar URL',
\t'Extract' => 'Extreure aquí',
\t'File_info' => 'Informació',
\t'Edit_image' => 'Editar imatge',
\t'Duplicate' => 'Duplicar',
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
", "@MwebAdmin/filemanager/lang/ca.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/ca.php");
    }
}
