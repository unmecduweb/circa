<?php

/* @MwebAdmin/filemanager/lang/pt_PT.php */
class __TwigTemplate_ef4fe64ae8c16656303d37b2ff436d07b8a76f8d4dfd1d1ac633b679dc7581bb extends Twig_Template
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
        $__internal_83348f60359e11ef9191fa812b7f02317f49ecb3bd875f378d0d7a8c1c918b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83348f60359e11ef9191fa812b7f02317f49ecb3bd875f378d0d7a8c1c918b13->enter($__internal_83348f60359e11ef9191fa812b7f02317f49ecb3bd875f378d0d7a8c1c918b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/pt_PT.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Seleccionar',
\t'Erase' => 'Eliminar',
\t'Open' => 'Abrir',
\t'Confirm_del' => 'Tem certeza que pretende eliminar este arquivo?',
\t'All' => 'Todos',
\t'Files' => 'Ficheiros',
\t'Images' => 'Imagens',
\t'Archives' => 'Compactados',
\t'Error_Upload' => 'O ficheiro enviado é maior que o limite permitido.',
\t'Error_extension' => 'Extensão não permitida.',
\t'Upload_file' => 'Carregar ficheiro',
\t'Filters' => 'Filtro',
\t'Videos' => 'Vídeos',
\t'Music' => 'Música',
\t'New_Folder' => 'Nova pasta',
\t'Folder_Created' => 'Pasta criada com sucesso',
\t'Existing_Folder' => 'Pasta existente',
\t'Confirm_Folder_del' => 'Tem certeza que pretende eliminar a pasta e todo o seu conteúdo?',
\t'Return_Files_List' => 'Voltar à lista de ficheiros',
\t'Preview' => 'Pré-visualizar',
\t'Download' => 'Descarregar',
\t'Insert_Folder_Name' => 'Insira o nome da pasta:',
\t'Root' => 'root',
\t'Rename' => 'Mudar o nome',
\t'Back' => 'de volta',
\t'View' => 'Vista',
\t'View_list' => 'Vista de lista',
\t'View_columns_list' => 'Vista de coluna',
\t'View_boxes' => 'Vista de caixas',
\t'Toolbar' => 'Barra de Ferramentas',
\t'Actions' => 'Acções',
\t'Rename_existing_file' => 'O ficheiro já existe',
\t'Rename_existing_folder' => 'A pasta já existe',
\t'Empty_name' => 'Nome está vazio',
\t'Text_filter' => 'filtro por texto',
\t'Swipe_help' => 'Passe o nome do arquivo / pasta para ver as opções',
\t'Upload_base' => 'Envio básico',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'Envio via JAVA (ficheiros grandes)',
\t'Upload_java_help' => \"Se o Java não carrega 1. Certifique-se que tem o Java instalado, caso contrário <a href='http://java.com/en/download/'>[descarregue aqui]</a> 2. Certifique-se que não tem nenhuma firewall a bloquear\",
\t'Upload_base_help' => \"Arraste & Largue ficheiros dentro da área acima ou clique-a (para browsers modernos) caso contrário escolha o ficheiro e clique no botão. Quando o envio terminar, clique no botão de regresso acima.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Tipo',
\t'Dimension' => 'Dimensão',
\t'Size' => 'Tamanho',
\t'Date' => 'Date',
\t'Filename' => 'Data',
\t'Operations' => 'Operações',
\t'Date_type' => 'd-m-y',
\t'OK' => 'OK',
\t'Cancel' => 'Cancelar',
\t'Sorting' => 'ordenar',
\t'Show_url' => 'mostrar URL',
\t'Extract' => 'extrair here',
\t'File_info' => 'info. ficheiro',
\t'Edit_image' => 'editar imagem',
\t'Duplicate' => 'Duplicar',
\t'Folders' => 'Pastas',
\t'Copy' => 'Copiar',
\t'Cut' => 'Cortar',
\t'Paste' => 'Colar',
\t'CB' => 'AT', // clipboard
\t'Paste_Here' => 'Colar para esta directoria',
\t'Paste_Confirm' => 'Você tem a certeza que deseja colar a este diretório? Isso substituirá os arquivos existentes ou pastas se existirem',
\t'Paste_Failed' => 'Falha ao colar ficheiros(s)',
\t'Clear_Clipboard' => 'Limpar área de transferência',
\t'Clear_Clipboard_Confirm' => 'Você tem certeza que deseja limpar a área de transferência?',
\t'Files_ON_Clipboard' => 'Há arquivos na área de transferência.',
\t'Copy_Cut_Size_Limit' => 'Os ficheiros/pastas são demasiado grandes para %s. Limite: %d MB/operação', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Você selecionou muitos arquivos / pastas para %s. Limit: %d ficheiros/operação', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Não te permissão para %s ficheiros.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Não foi possível gravar imagem',
\t'Zip_No_Extract' => 'Não foi possível extrair. O arquivo pode estar corrompido.',
\t'Zip_Invalid' => 'Extensão não suportada. Válidas: zip, gz, tar.',
\t'Dir_No_Write' => 'A pasta escolhida não tem permissões para escrever.',
\t'Function_Disabled' => 'A função %s foi desligada pelo servidor.', // %s = cut or copy
\t'File_Permission' => 'Permissão do Ficheiro',
\t'File_Permission_Not_Allowed' => 'Mudar as permissões dos %s não é permitido.', // %s = files or folders
\t'File_Permission_Recursive' => 'AAplicar de forma recursiva?',
\t'File_Permission_Wrong_Mode' => \"O modo de permissão fornecido está incorreto.\",
\t'User' => 'Utilizador',
\t'Group' => 'Grupo',
\t'Yes' => 'Sim',
\t'No' => 'Não',
\t'Lang_Not_Found' => 'Não foi possível encontrar o idioma.',
\t'Lang_Change' => 'Alterar o idioma',
\t'File_Not_Found' => 'Não foi possível encontrar o arquivo.',
\t'File_Open_Edit_Not_Allowed' => 'Não tem permissão para %s este ficheiro.', // %s = open or edit
\t'Edit' => 'Editar',
\t'Edit_File' => \"Editar conteúdo do ficheiro\",
\t'File_Save_OK' => \"Ficheiro gravado com sucesso.\",
\t'File_Save_Error' => \"Ocorreu um erro durante a gravação do ficheiro.\",
\t'New_File' => 'Novo ficheiro',
\t'No_Extension' => 'Tem de adicionar uma extensão ao ficheiro.',
\t'Valid_Extensions' => 'Extensões válidas: %s', // %s = txt,log etc.
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
        
        $__internal_83348f60359e11ef9191fa812b7f02317f49ecb3bd875f378d0d7a8c1c918b13->leave($__internal_83348f60359e11ef9191fa812b7f02317f49ecb3bd875f378d0d7a8c1c918b13_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/pt_PT.php";
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
\t'Confirm_del' => 'Tem certeza que pretende eliminar este arquivo?',
\t'All' => 'Todos',
\t'Files' => 'Ficheiros',
\t'Images' => 'Imagens',
\t'Archives' => 'Compactados',
\t'Error_Upload' => 'O ficheiro enviado é maior que o limite permitido.',
\t'Error_extension' => 'Extensão não permitida.',
\t'Upload_file' => 'Carregar ficheiro',
\t'Filters' => 'Filtro',
\t'Videos' => 'Vídeos',
\t'Music' => 'Música',
\t'New_Folder' => 'Nova pasta',
\t'Folder_Created' => 'Pasta criada com sucesso',
\t'Existing_Folder' => 'Pasta existente',
\t'Confirm_Folder_del' => 'Tem certeza que pretende eliminar a pasta e todo o seu conteúdo?',
\t'Return_Files_List' => 'Voltar à lista de ficheiros',
\t'Preview' => 'Pré-visualizar',
\t'Download' => 'Descarregar',
\t'Insert_Folder_Name' => 'Insira o nome da pasta:',
\t'Root' => 'root',
\t'Rename' => 'Mudar o nome',
\t'Back' => 'de volta',
\t'View' => 'Vista',
\t'View_list' => 'Vista de lista',
\t'View_columns_list' => 'Vista de coluna',
\t'View_boxes' => 'Vista de caixas',
\t'Toolbar' => 'Barra de Ferramentas',
\t'Actions' => 'Acções',
\t'Rename_existing_file' => 'O ficheiro já existe',
\t'Rename_existing_folder' => 'A pasta já existe',
\t'Empty_name' => 'Nome está vazio',
\t'Text_filter' => 'filtro por texto',
\t'Swipe_help' => 'Passe o nome do arquivo / pasta para ver as opções',
\t'Upload_base' => 'Envio básico',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'Envio via JAVA (ficheiros grandes)',
\t'Upload_java_help' => \"Se o Java não carrega 1. Certifique-se que tem o Java instalado, caso contrário <a href='http://java.com/en/download/'>[descarregue aqui]</a> 2. Certifique-se que não tem nenhuma firewall a bloquear\",
\t'Upload_base_help' => \"Arraste & Largue ficheiros dentro da área acima ou clique-a (para browsers modernos) caso contrário escolha o ficheiro e clique no botão. Quando o envio terminar, clique no botão de regresso acima.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Tipo',
\t'Dimension' => 'Dimensão',
\t'Size' => 'Tamanho',
\t'Date' => 'Date',
\t'Filename' => 'Data',
\t'Operations' => 'Operações',
\t'Date_type' => 'd-m-y',
\t'OK' => 'OK',
\t'Cancel' => 'Cancelar',
\t'Sorting' => 'ordenar',
\t'Show_url' => 'mostrar URL',
\t'Extract' => 'extrair here',
\t'File_info' => 'info. ficheiro',
\t'Edit_image' => 'editar imagem',
\t'Duplicate' => 'Duplicar',
\t'Folders' => 'Pastas',
\t'Copy' => 'Copiar',
\t'Cut' => 'Cortar',
\t'Paste' => 'Colar',
\t'CB' => 'AT', // clipboard
\t'Paste_Here' => 'Colar para esta directoria',
\t'Paste_Confirm' => 'Você tem a certeza que deseja colar a este diretório? Isso substituirá os arquivos existentes ou pastas se existirem',
\t'Paste_Failed' => 'Falha ao colar ficheiros(s)',
\t'Clear_Clipboard' => 'Limpar área de transferência',
\t'Clear_Clipboard_Confirm' => 'Você tem certeza que deseja limpar a área de transferência?',
\t'Files_ON_Clipboard' => 'Há arquivos na área de transferência.',
\t'Copy_Cut_Size_Limit' => 'Os ficheiros/pastas são demasiado grandes para %s. Limite: %d MB/operação', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Você selecionou muitos arquivos / pastas para %s. Limit: %d ficheiros/operação', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Não te permissão para %s ficheiros.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Não foi possível gravar imagem',
\t'Zip_No_Extract' => 'Não foi possível extrair. O arquivo pode estar corrompido.',
\t'Zip_Invalid' => 'Extensão não suportada. Válidas: zip, gz, tar.',
\t'Dir_No_Write' => 'A pasta escolhida não tem permissões para escrever.',
\t'Function_Disabled' => 'A função %s foi desligada pelo servidor.', // %s = cut or copy
\t'File_Permission' => 'Permissão do Ficheiro',
\t'File_Permission_Not_Allowed' => 'Mudar as permissões dos %s não é permitido.', // %s = files or folders
\t'File_Permission_Recursive' => 'AAplicar de forma recursiva?',
\t'File_Permission_Wrong_Mode' => \"O modo de permissão fornecido está incorreto.\",
\t'User' => 'Utilizador',
\t'Group' => 'Grupo',
\t'Yes' => 'Sim',
\t'No' => 'Não',
\t'Lang_Not_Found' => 'Não foi possível encontrar o idioma.',
\t'Lang_Change' => 'Alterar o idioma',
\t'File_Not_Found' => 'Não foi possível encontrar o arquivo.',
\t'File_Open_Edit_Not_Allowed' => 'Não tem permissão para %s este ficheiro.', // %s = open or edit
\t'Edit' => 'Editar',
\t'Edit_File' => \"Editar conteúdo do ficheiro\",
\t'File_Save_OK' => \"Ficheiro gravado com sucesso.\",
\t'File_Save_Error' => \"Ocorreu um erro durante a gravação do ficheiro.\",
\t'New_File' => 'Novo ficheiro',
\t'No_Extension' => 'Tem de adicionar uma extensão ao ficheiro.',
\t'Valid_Extensions' => 'Extensões válidas: %s', // %s = txt,log etc.
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
", "@MwebAdmin/filemanager/lang/pt_PT.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/pt_PT.php");
    }
}
