<?php

/* @MwebAdmin/filemanager/lang/es.php */
class __TwigTemplate_a42ca4355b711b7835b66cdbac2c3f9681cc60e2d851528a140a50f2c502d0d1 extends Twig_Template
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
        $__internal_11fa2d7a59bdc489e615cfcd3e291bd8cefc7e0df29daad7826db3655c9f8c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11fa2d7a59bdc489e615cfcd3e291bd8cefc7e0df29daad7826db3655c9f8c68->enter($__internal_11fa2d7a59bdc489e615cfcd3e291bd8cefc7e0df29daad7826db3655c9f8c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/es.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Seleccionar',
\t'Erase' => 'Eliminar',
\t'Open' => 'Abrir',
\t'Confirm_del' => '¿Seguro que deseas eliminar este archivo?',
\t'All' => 'Todos',
\t'Files' => 'Archivos',
\t'Images' => 'Imágenes',
\t'Archives' => 'Ficheros',
\t'Error_Upload' => 'El archivo que intenta subir excede el máximo permitido.',
\t'Error_extension' => 'La extensión del archivo no está permitida.',
\t'Upload_file' => 'Subir',
\t'Filters' => 'Filtros',
\t'Videos' => 'Videos',
\t'Music' => 'Música',
\t'New_Folder' => 'Nueva carpeta',
\t'Folder_Created' => 'La carpeta ha sido creada exitosamente.',
\t'Existing_Folder' => 'Carpeta existente',
\t'Confirm_Folder_del' => '¿Seguro que deseas eliminar la carpeta y todos los elementos que contiene?',
\t'Return_Files_List' => 'Regresar a la lista de archivos',
\t'Preview' => 'Vista previa',
\t'Download' => 'Descargar',
\t'Insert_Folder_Name' => 'Nombre de la carpeta:',
\t'Root' => 'raíz',
\t'Rename' => 'Renombrar',
\t'Back' => 'Atrás',
\t'View' => 'Vista',
\t'View_list' => 'Vista de lista',
\t'View_columns_list' => 'Vista de columnas',
\t'View_boxes' => 'Vista de miniaturas',
\t'Toolbar' => 'Barra de herramientas',
\t'Actions' => 'Acciones',
\t'Rename_existing_file' => 'El archivo ya existe',
\t'Rename_existing_folder' => 'La carpeta ya existe',
\t'Empty_name' => 'El nombre se encuentra vacío',
\t'Text_filter' => 'filtro de texto',
\t'Swipe_help' => 'Deslize el nombre del archivo/carpeta para mostrar las opciones',
\t'Upload_base' => 'Subida de archivos SIMPLE',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'Subida de archivos JAVA (para archivos pesados)',
\t'Upload_java_help' => \"Si el applet no carga: 1. Asegúrate de tener Java instalado; sino descárgalo e instálalo <a href='http://java.com/en/download/'>desde aquí</a> 2. Asegúrate que tu firewall no esté bloqueando nada.\",
\t'Upload_base_help' => \"Arrastra y suelta los archivos dentro de esta área o haga clic en ella (para navegadores modernos) de lo contrario, seleccione el archivo y haga clic en el botón. Cuando finalice la subida, haga clic en el botón superior para regresar.\",
\t'Type_dir' => 'Carpeta',
\t'Type' => 'Tipo',
\t'Dimension' => 'Dimensiones',
\t'Size' => 'Peso',
\t'Date' => 'Fecha',
\t'Filename' => 'Nombre',
\t'Operations' => 'Operaciones',
\t'Date_type' => 'y-m-d',
\t'OK' => 'OK',
\t'Cancel' => 'Cancelar',
\t'Sorting' => 'Ordenar',
\t'Show_url' => 'Mostrar URL',
\t'Extract' => 'Extraer aquí',
\t'File_info' => 'Información',
\t'Edit_image' => 'Editar imagen',
\t'Duplicate' => 'Duplicar',
\t'Folders' => 'Carpetas',
\t'Copy' => 'Copiar',
\t'Cut' => 'Cortar',
\t'Paste' => 'Pegar',
\t'CB' => 'Portapapeles', // clipboard
\t'Paste_Here' => 'Pegar en esta carpeta',
\t'Paste_Confirm' => '¿Está seguro de pegar el contenido en esta carpeta? Esta acción sobreescribirá los archivos y carpetas existentes.',
\t'Paste_Failed' => 'Error al pegar los archivos',
\t'Clear_Clipboard' => 'Limpiar el portapapeles',
\t'Clear_Clipboard_Confirm' => '¿Está seguro que desea limpiar el portapapeles?',
\t'Files_ON_Clipboard' => 'Existen archivos en el portapapeles',
\t'Copy_Cut_Size_Limit' => 'Los archivos/carpetas seleccionados son demasiado grandes para %s. Límite: %d MB/operación', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Ha seleccionado demasiados archivos/carpetas para %s. Límite: %d archivos/operación', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'No está permitido de %s archivos.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'No fue posible guardar la imagen',
\t'Zip_No_Extract' => 'No fue posible extraer los archivos. Es posible que el archivo esté corrupto.',
\t'Zip_Invalid' => 'Esta extensión no es soportada. Extensiones válidas: zip, gz, tar.',
\t'Dir_No_Write' => 'El directorio que ha seleccionado no tiene permisos de escritura.',
\t'Function_Disabled' => 'La función %s ha sido deshabilitada en el servidor.', // %s = cut or copy
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
        
        $__internal_11fa2d7a59bdc489e615cfcd3e291bd8cefc7e0df29daad7826db3655c9f8c68->leave($__internal_11fa2d7a59bdc489e615cfcd3e291bd8cefc7e0df29daad7826db3655c9f8c68_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/es.php";
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
\t'Open' => 'Abrir',
\t'Confirm_del' => '¿Seguro que deseas eliminar este archivo?',
\t'All' => 'Todos',
\t'Files' => 'Archivos',
\t'Images' => 'Imágenes',
\t'Archives' => 'Ficheros',
\t'Error_Upload' => 'El archivo que intenta subir excede el máximo permitido.',
\t'Error_extension' => 'La extensión del archivo no está permitida.',
\t'Upload_file' => 'Subir',
\t'Filters' => 'Filtros',
\t'Videos' => 'Videos',
\t'Music' => 'Música',
\t'New_Folder' => 'Nueva carpeta',
\t'Folder_Created' => 'La carpeta ha sido creada exitosamente.',
\t'Existing_Folder' => 'Carpeta existente',
\t'Confirm_Folder_del' => '¿Seguro que deseas eliminar la carpeta y todos los elementos que contiene?',
\t'Return_Files_List' => 'Regresar a la lista de archivos',
\t'Preview' => 'Vista previa',
\t'Download' => 'Descargar',
\t'Insert_Folder_Name' => 'Nombre de la carpeta:',
\t'Root' => 'raíz',
\t'Rename' => 'Renombrar',
\t'Back' => 'Atrás',
\t'View' => 'Vista',
\t'View_list' => 'Vista de lista',
\t'View_columns_list' => 'Vista de columnas',
\t'View_boxes' => 'Vista de miniaturas',
\t'Toolbar' => 'Barra de herramientas',
\t'Actions' => 'Acciones',
\t'Rename_existing_file' => 'El archivo ya existe',
\t'Rename_existing_folder' => 'La carpeta ya existe',
\t'Empty_name' => 'El nombre se encuentra vacío',
\t'Text_filter' => 'filtro de texto',
\t'Swipe_help' => 'Deslize el nombre del archivo/carpeta para mostrar las opciones',
\t'Upload_base' => 'Subida de archivos SIMPLE',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'Subida de archivos JAVA (para archivos pesados)',
\t'Upload_java_help' => \"Si el applet no carga: 1. Asegúrate de tener Java instalado; sino descárgalo e instálalo <a href='http://java.com/en/download/'>desde aquí</a> 2. Asegúrate que tu firewall no esté bloqueando nada.\",
\t'Upload_base_help' => \"Arrastra y suelta los archivos dentro de esta área o haga clic en ella (para navegadores modernos) de lo contrario, seleccione el archivo y haga clic en el botón. Cuando finalice la subida, haga clic en el botón superior para regresar.\",
\t'Type_dir' => 'Carpeta',
\t'Type' => 'Tipo',
\t'Dimension' => 'Dimensiones',
\t'Size' => 'Peso',
\t'Date' => 'Fecha',
\t'Filename' => 'Nombre',
\t'Operations' => 'Operaciones',
\t'Date_type' => 'y-m-d',
\t'OK' => 'OK',
\t'Cancel' => 'Cancelar',
\t'Sorting' => 'Ordenar',
\t'Show_url' => 'Mostrar URL',
\t'Extract' => 'Extraer aquí',
\t'File_info' => 'Información',
\t'Edit_image' => 'Editar imagen',
\t'Duplicate' => 'Duplicar',
\t'Folders' => 'Carpetas',
\t'Copy' => 'Copiar',
\t'Cut' => 'Cortar',
\t'Paste' => 'Pegar',
\t'CB' => 'Portapapeles', // clipboard
\t'Paste_Here' => 'Pegar en esta carpeta',
\t'Paste_Confirm' => '¿Está seguro de pegar el contenido en esta carpeta? Esta acción sobreescribirá los archivos y carpetas existentes.',
\t'Paste_Failed' => 'Error al pegar los archivos',
\t'Clear_Clipboard' => 'Limpiar el portapapeles',
\t'Clear_Clipboard_Confirm' => '¿Está seguro que desea limpiar el portapapeles?',
\t'Files_ON_Clipboard' => 'Existen archivos en el portapapeles',
\t'Copy_Cut_Size_Limit' => 'Los archivos/carpetas seleccionados son demasiado grandes para %s. Límite: %d MB/operación', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Ha seleccionado demasiados archivos/carpetas para %s. Límite: %d archivos/operación', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'No está permitido de %s archivos.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'No fue posible guardar la imagen',
\t'Zip_No_Extract' => 'No fue posible extraer los archivos. Es posible que el archivo esté corrupto.',
\t'Zip_Invalid' => 'Esta extensión no es soportada. Extensiones válidas: zip, gz, tar.',
\t'Dir_No_Write' => 'El directorio que ha seleccionado no tiene permisos de escritura.',
\t'Function_Disabled' => 'La función %s ha sido deshabilitada en el servidor.', // %s = cut or copy
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
", "@MwebAdmin/filemanager/lang/es.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/es.php");
    }
}
