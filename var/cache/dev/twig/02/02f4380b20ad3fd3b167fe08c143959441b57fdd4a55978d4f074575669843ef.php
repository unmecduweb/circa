<?php

/* @MwebAdmin/filemanager/lang/pt_BR.php */
class __TwigTemplate_c55165c4503443461812a48bc5ab28c0d80f6fd978f709fbceab8d5c5e6f5d88 extends Twig_Template
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
        $__internal_504f6583cc29e0ba51562bcf08bd48e95dbad1327cf7485d01b2a92e4a02d709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504f6583cc29e0ba51562bcf08bd48e95dbad1327cf7485d01b2a92e4a02d709->enter($__internal_504f6583cc29e0ba51562bcf08bd48e95dbad1327cf7485d01b2a92e4a02d709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/pt_BR.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Selecionar',
\t'Erase' => 'Apagar',
\t'Open' => 'Abrir',
\t'Confirm_del' => 'Tem certeza que quer deletar este arquivo?',
\t'All' => 'Todos',
\t'Files' => 'Arquivos',
\t'Images' => 'Imagens',
\t'Archives' => 'Compactados',
\t'Error_Upload' => 'O arquivo enviado é maior que o limite permitido.',
\t'Error_extension' => 'Extensão não permitida.',
\t'Upload_file' => 'Enviar um arquivo',
\t'Filters' => 'Filtro',
\t'Videos' => 'Vídeos',
\t'Music' => 'Musica',
\t'New_Folder' => 'Nova pasta',
\t'Folder_Created' => 'Pasta criada corretamente',
\t'Existing_Folder' => 'Pasta existente',
\t'Confirm_Folder_del' => 'Tem certeza que você quer deletar a pasta e todo o seu conteúdo?',
\t'Return_Files_List' => 'Voltar à lista de arquivos',
\t'Preview' => 'Prévia',
\t'Download' => 'Baixar',
\t'Insert_Folder_Name' => 'Insira o nome da pasta:',
\t'Root' => 'root',
\t'Rename' => 'Mudar o nome',
\t'Back' => 'de volta',
\t'View' => 'Modo de Visualização',
\t'View_list' => 'Lista',
\t'View_columns_list' => 'Lista de Colunas',
\t'View_boxes' => 'Box',
\t'Toolbar' => 'Toolbar',
\t'Actions' => 'Ações',
\t'Rename_existing_file' => 'O arquivo já existe!',
\t'Rename_existing_folder' => 'A pasta já existe!',
\t'Empty_name' => 'O nome está vazio!',
\t'Text_filter' => 'Filtrar',
\t'Swipe_help' => 'Passe o nome do arquivo/pasta para ver as opções',
\t'Upload_base' => 'Base upload',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA upload (Arquivos grandes)',
\t'Upload_java_help' => \"Se o Java Applet não carregar: 1. Certifique-se de ter o Java instalado de outra forma <a href='http://java.com/en/download/'>[download link]</a> 2. Certifique-se que nada é impedido pelo firewall\",
\t'Upload_base_help' => \"Arraste e Solta os arquivos dentro área acima ou clique nele (para navegadores modernos), caso contrário, selecione o arquivo e clique no botão. Quando terminar o upload, clique no botão de retorno superior.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Tipo',
\t'Dimension' => 'Dimensão',
\t'Size' => 'Tamanho',
\t'Date' => 'Data',
\t'Filename' => 'Nome',
\t'Operations' => 'Operações',
\t'Date_type' => 'd/m/Y',
\t'OK' => 'OK',
\t'Cancel' => 'Cancelar',
\t'Sorting' => 'Ordenar',
\t'Show_url' => 'Mostrar URL',
\t'Extract' => 'Extrair aqui',
\t'File_info' => 'Informação do Arquivo',
\t'Edit_image' => 'Editar a imagem',
\t'Duplicate' => 'Duplicar',
\t'Folders' => 'Pastas',
\t'Copy' => 'Copiar',
\t'Cut' => 'Recortar',
\t'Paste' => 'Colar',
\t'CB' => 'Área de Transferência', // clipboard
\t'Paste_Here' => 'Copiar para este diretório',
\t'Paste_Confirm' => 'Você tem certeza quer copiar para este diretório? Isso sobrescreverá pastas/arquivos existentes se encontrar alguma coisa.',
\t'Paste_Failed' => 'Não foi possível colar o(s) arquivo(s)',
\t'Clear_Clipboard' => 'Limpar área de transferência',
\t'Clear_Clipboard_Confirm' => 'Tem certeza de que deseja limpar a área de transferência?',
\t'Files_ON_Clipboard' => 'Há arquivos na área de transferência.',
\t'Copy_Cut_Size_Limit' => 'Os arquivos/pastas selecionados são grandes demais para %s. Limite: %d MB/operação', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Você selecionou muitos arquivos/pastas para %s. Limite: %d arquivos/operação', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Você não tem permissão para %s arquivos.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Não foi possível salvar a imagem',
\t'Zip_No_Extract' => 'Não foi possível extrair. Arquivo pode estar corrompido.',
\t'Zip_Invalid' => 'Esta extensão não é suportada. Válidos: zip, gz, tar.',
\t'Dir_No_Write' => 'O diretório selecionado não é gravável.',
\t'Function_Disabled' => 'A função %s foi desativado pelo servidor.', // %s = cut or copy
\t'File_Permission' => 'Permissão arquivo',
\t'File_Permission_Not_Allowed' => 'Mudanças de permissões de %s não são permitidos.', // %s = files or folders
\t'File_Permission_Recursive' => 'Aplicar recursivamente?',
\t'File_Permission_Wrong_Mode' => \"O modo de permissão fornecido está incorreto.\",
\t'User' => 'Usuário',
\t'Group' => 'Grupo',
\t'Yes' => 'Sim',
\t'No' => 'Não',
\t'Lang_Not_Found' => 'Não foi possível encontrar uma linguagem.',
\t'Lang_Change' => 'Alterar o idioma',
\t'File_Not_Found' => 'Não foi possível encontrar o arquivo.',
\t'File_Open_Edit_Not_Allowed' => 'Você não tem permissão para %s este arquivo.', // %s = open or edit
\t'Edit' => 'Editar',
\t'Edit_File' => \"Editar conteúdo do arquivo\",
\t'File_Save_OK' => \"Arquivo salvo com sucesso.\",
\t'File_Save_Error' => \"Houve um erro ao salvar o arquivo.\",
\t'New_File' => 'Novo Arquivo',
\t'No_Extension' => 'Você tem que adicionar uma extensão de arquivo.',
\t'Valid_Extensions' => 'Extensões válidas: %s', // %s = txt,log etc.
\t'Upload_message' => \"Arraste arquivo aqui para enviar\",

\t'SERVER ERROR' => \"ERRO SERVIDOR\",
\t'forbiden' => \"proibido\",
\t'wrong path' => \"caminho errado\",
\t'wrong name' => \"nome errado\",
\t'wrong extension' => \"extensão errada\",
\t'wrong option' => \"opção errada\",
\t'wrong data' => \"dados errados\",
\t'wrong action' => \"ação errada\",
\t'wrong sub-action' => \"sub-ação errada\",
\t'no action passed' => \"nenhuma ação passada\",
\t'no path' => \"nenhum caminho\",
\t'no file' => \"nenhum arquivo\",
\t'view type number missing' => \"Ver tipo de número faltando\",
\t'Not enought Memory' => \"Memória insuficiente\",
\t'max_size_reached' => \"Sua pasta de imagens atingiu seu tamanho máximo de %d MB.\", //%d = max overall size
\t'B' => \"B\",
\t'KB' => \"KB\",
\t'MB' => \"MB\",
\t'GB' => \"GB\",
\t'TB' => \"TB\",
\t'total size' => \"Tamanho total\",
);
";
        
        $__internal_504f6583cc29e0ba51562bcf08bd48e95dbad1327cf7485d01b2a92e4a02d709->leave($__internal_504f6583cc29e0ba51562bcf08bd48e95dbad1327cf7485d01b2a92e4a02d709_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/pt_BR.php";
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

\t'Select' => 'Selecionar',
\t'Erase' => 'Apagar',
\t'Open' => 'Abrir',
\t'Confirm_del' => 'Tem certeza que quer deletar este arquivo?',
\t'All' => 'Todos',
\t'Files' => 'Arquivos',
\t'Images' => 'Imagens',
\t'Archives' => 'Compactados',
\t'Error_Upload' => 'O arquivo enviado é maior que o limite permitido.',
\t'Error_extension' => 'Extensão não permitida.',
\t'Upload_file' => 'Enviar um arquivo',
\t'Filters' => 'Filtro',
\t'Videos' => 'Vídeos',
\t'Music' => 'Musica',
\t'New_Folder' => 'Nova pasta',
\t'Folder_Created' => 'Pasta criada corretamente',
\t'Existing_Folder' => 'Pasta existente',
\t'Confirm_Folder_del' => 'Tem certeza que você quer deletar a pasta e todo o seu conteúdo?',
\t'Return_Files_List' => 'Voltar à lista de arquivos',
\t'Preview' => 'Prévia',
\t'Download' => 'Baixar',
\t'Insert_Folder_Name' => 'Insira o nome da pasta:',
\t'Root' => 'root',
\t'Rename' => 'Mudar o nome',
\t'Back' => 'de volta',
\t'View' => 'Modo de Visualização',
\t'View_list' => 'Lista',
\t'View_columns_list' => 'Lista de Colunas',
\t'View_boxes' => 'Box',
\t'Toolbar' => 'Toolbar',
\t'Actions' => 'Ações',
\t'Rename_existing_file' => 'O arquivo já existe!',
\t'Rename_existing_folder' => 'A pasta já existe!',
\t'Empty_name' => 'O nome está vazio!',
\t'Text_filter' => 'Filtrar',
\t'Swipe_help' => 'Passe o nome do arquivo/pasta para ver as opções',
\t'Upload_base' => 'Base upload',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA upload (Arquivos grandes)',
\t'Upload_java_help' => \"Se o Java Applet não carregar: 1. Certifique-se de ter o Java instalado de outra forma <a href='http://java.com/en/download/'>[download link]</a> 2. Certifique-se que nada é impedido pelo firewall\",
\t'Upload_base_help' => \"Arraste e Solta os arquivos dentro área acima ou clique nele (para navegadores modernos), caso contrário, selecione o arquivo e clique no botão. Quando terminar o upload, clique no botão de retorno superior.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Tipo',
\t'Dimension' => 'Dimensão',
\t'Size' => 'Tamanho',
\t'Date' => 'Data',
\t'Filename' => 'Nome',
\t'Operations' => 'Operações',
\t'Date_type' => 'd/m/Y',
\t'OK' => 'OK',
\t'Cancel' => 'Cancelar',
\t'Sorting' => 'Ordenar',
\t'Show_url' => 'Mostrar URL',
\t'Extract' => 'Extrair aqui',
\t'File_info' => 'Informação do Arquivo',
\t'Edit_image' => 'Editar a imagem',
\t'Duplicate' => 'Duplicar',
\t'Folders' => 'Pastas',
\t'Copy' => 'Copiar',
\t'Cut' => 'Recortar',
\t'Paste' => 'Colar',
\t'CB' => 'Área de Transferência', // clipboard
\t'Paste_Here' => 'Copiar para este diretório',
\t'Paste_Confirm' => 'Você tem certeza quer copiar para este diretório? Isso sobrescreverá pastas/arquivos existentes se encontrar alguma coisa.',
\t'Paste_Failed' => 'Não foi possível colar o(s) arquivo(s)',
\t'Clear_Clipboard' => 'Limpar área de transferência',
\t'Clear_Clipboard_Confirm' => 'Tem certeza de que deseja limpar a área de transferência?',
\t'Files_ON_Clipboard' => 'Há arquivos na área de transferência.',
\t'Copy_Cut_Size_Limit' => 'Os arquivos/pastas selecionados são grandes demais para %s. Limite: %d MB/operação', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Você selecionou muitos arquivos/pastas para %s. Limite: %d arquivos/operação', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Você não tem permissão para %s arquivos.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Não foi possível salvar a imagem',
\t'Zip_No_Extract' => 'Não foi possível extrair. Arquivo pode estar corrompido.',
\t'Zip_Invalid' => 'Esta extensão não é suportada. Válidos: zip, gz, tar.',
\t'Dir_No_Write' => 'O diretório selecionado não é gravável.',
\t'Function_Disabled' => 'A função %s foi desativado pelo servidor.', // %s = cut or copy
\t'File_Permission' => 'Permissão arquivo',
\t'File_Permission_Not_Allowed' => 'Mudanças de permissões de %s não são permitidos.', // %s = files or folders
\t'File_Permission_Recursive' => 'Aplicar recursivamente?',
\t'File_Permission_Wrong_Mode' => \"O modo de permissão fornecido está incorreto.\",
\t'User' => 'Usuário',
\t'Group' => 'Grupo',
\t'Yes' => 'Sim',
\t'No' => 'Não',
\t'Lang_Not_Found' => 'Não foi possível encontrar uma linguagem.',
\t'Lang_Change' => 'Alterar o idioma',
\t'File_Not_Found' => 'Não foi possível encontrar o arquivo.',
\t'File_Open_Edit_Not_Allowed' => 'Você não tem permissão para %s este arquivo.', // %s = open or edit
\t'Edit' => 'Editar',
\t'Edit_File' => \"Editar conteúdo do arquivo\",
\t'File_Save_OK' => \"Arquivo salvo com sucesso.\",
\t'File_Save_Error' => \"Houve um erro ao salvar o arquivo.\",
\t'New_File' => 'Novo Arquivo',
\t'No_Extension' => 'Você tem que adicionar uma extensão de arquivo.',
\t'Valid_Extensions' => 'Extensões válidas: %s', // %s = txt,log etc.
\t'Upload_message' => \"Arraste arquivo aqui para enviar\",

\t'SERVER ERROR' => \"ERRO SERVIDOR\",
\t'forbiden' => \"proibido\",
\t'wrong path' => \"caminho errado\",
\t'wrong name' => \"nome errado\",
\t'wrong extension' => \"extensão errada\",
\t'wrong option' => \"opção errada\",
\t'wrong data' => \"dados errados\",
\t'wrong action' => \"ação errada\",
\t'wrong sub-action' => \"sub-ação errada\",
\t'no action passed' => \"nenhuma ação passada\",
\t'no path' => \"nenhum caminho\",
\t'no file' => \"nenhum arquivo\",
\t'view type number missing' => \"Ver tipo de número faltando\",
\t'Not enought Memory' => \"Memória insuficiente\",
\t'max_size_reached' => \"Sua pasta de imagens atingiu seu tamanho máximo de %d MB.\", //%d = max overall size
\t'B' => \"B\",
\t'KB' => \"KB\",
\t'MB' => \"MB\",
\t'GB' => \"GB\",
\t'TB' => \"TB\",
\t'total size' => \"Tamanho total\",
);
", "@MwebAdmin/filemanager/lang/pt_BR.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/pt_BR.php");
    }
}
