<?php

/* @MwebAdmin/filemanager/lang/zh_CN.php */
class __TwigTemplate_e3e6b1b53cd477c173c4b7f815b99af4f2e985bf11aaaa7a62b87b39005b5cac extends Twig_Template
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
        $__internal_3781d5367185778aad83cf684ef149a6a9c83961c09ccbe99ceafa03a8c2db4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3781d5367185778aad83cf684ef149a6a9c83961c09ccbe99ceafa03a8c2db4d->enter($__internal_3781d5367185778aad83cf684ef149a6a9c83961c09ccbe99ceafa03a8c2db4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/zh_CN.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => '选择',
\t'Erase' => '删除',
\t'Open' => '打开',
\t'Confirm_del' => '确定删除此文件?',
\t'All' => '所有',
\t'Files' => '文件',
\t'Images' => '图片',
\t'Archives' => '存档',
\t'Error_Upload' => '上传的文件超过了允许的最大尺寸',
\t'Error_extension' => '此类文件不被支持',
\t'Upload_file' => '上传',
\t'Filters' => '过滤',
\t'Videos' => '视频',
\t'Music' => '音乐',
\t'New_Folder' => '新文件夹',
\t'Folder_Created' => '文件夹创建成功',
\t'Existing_Folder' => '文件夹已经存在',
\t'Confirm_Folder_del' => '确定删除此文件夹和里面的所有文件?',
\t'Return_Files_List' => '返回文件列表',
\t'Preview' => '预览',
\t'Download' => '下载',
\t'Insert_Folder_Name' => '填写文件夹名称:',
\t'Root' => 'root',
\t'Rename' => '改名',
\t'Back' => '返回',
\t'View' => '视图',
\t'View_list' => '列表视图',
\t'View_columns_list' => '列视图',
\t'View_boxes' => '方块视图',
\t'Toolbar' => '工具栏',
\t'Actions' => '操作',
\t'Rename_existing_file' => '文件已存在',
\t'Rename_existing_folder' => '文件夹已存在',
\t'Empty_name' => '请输入文件名',
\t'Text_filter' => '文字过滤',
\t'Swipe_help' => '在文件或文件夹的名称上划过已显示更多选项',
\t'Upload_base' => '普通上传',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA上传(适用于大文件上传)',
\t'Upload_java_help' => \"如果Java Applet没有加载，你可以：1. 请确认你的电脑安装了Java。如果没有安装，在这里下载安装 <a href='http://java.com/en/download/'>[下载链接]</a>   2. 确保您电脑的防火墙没有阻挡Java上传\",
\t'Upload_base_help' => \"将需要上传的文件拖动到以上区域 (需要比较新的浏览器才支持)，并选择相关文件。当上传完成，点击'返回文件列表'按钮\",
\t'Type_dir' => 'dir',
\t'Type' => '类型',
\t'Dimension' => '尺寸',
\t'Size' => '大小',
\t'Date' => '日期',
\t'Filename' => '文件名',
\t'Operations' => '操作',
\t'Date_type' => 'y-m-d',
\t'OK' => 'OK',
\t'Cancel' => '取消',
\t'Sorting' => '排序',
\t'Show_url' => '显示URL',
\t'Extract' => '解压缩到这里',
\t'File_info' => '文件信息',
\t'Edit_image' => '编辑图片',
\t'Duplicate' => '复制',
\t'Folders' => '文件夹',
\t'Copy' => '拷贝',
\t'Cut' => '剪切',
\t'Paste' => '粘贴',
\t'CB' => '粘贴板', // clipboard
\t'Paste_Here' => '粘贴到这个目录',
\t'Paste_Confirm' => '确定粘贴到这个目录? 这有可能会覆盖已经存在的文件或文件夹',
\t'Paste_Failed' => '文件粘贴失败',
\t'Clear_Clipboard' => '清除粘贴板',
\t'Clear_Clipboard_Confirm' => '确定清除粘贴板?',
\t'Files_ON_Clipboard' => '粘贴板上还有文件存在',
\t'Copy_Cut_Size_Limit' => '无法 %s 选择的文件，选择的文件太大，超过了允许的大小: %d MB', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => '无法 %s 选择的文件，您选择的文件和文件夹数目超过限制: %d 个文件', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => ' 您没有权限 %s 文件', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => '无法保存图片',
\t'Zip_No_Extract' => '文件解压缩失败。文件可能已经损坏',
\t'Zip_Invalid' => '不支持此文件后缀，支持的后缀名: zip, gz, tar.',
\t'Dir_No_Write' => '您选择的目录没有写权限',
\t'Function_Disabled' => '%s 功能已经被服务器禁用。', // %s = cut or copy
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
        
        $__internal_3781d5367185778aad83cf684ef149a6a9c83961c09ccbe99ceafa03a8c2db4d->leave($__internal_3781d5367185778aad83cf684ef149a6a9c83961c09ccbe99ceafa03a8c2db4d_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/zh_CN.php";
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

\t'Select' => '选择',
\t'Erase' => '删除',
\t'Open' => '打开',
\t'Confirm_del' => '确定删除此文件?',
\t'All' => '所有',
\t'Files' => '文件',
\t'Images' => '图片',
\t'Archives' => '存档',
\t'Error_Upload' => '上传的文件超过了允许的最大尺寸',
\t'Error_extension' => '此类文件不被支持',
\t'Upload_file' => '上传',
\t'Filters' => '过滤',
\t'Videos' => '视频',
\t'Music' => '音乐',
\t'New_Folder' => '新文件夹',
\t'Folder_Created' => '文件夹创建成功',
\t'Existing_Folder' => '文件夹已经存在',
\t'Confirm_Folder_del' => '确定删除此文件夹和里面的所有文件?',
\t'Return_Files_List' => '返回文件列表',
\t'Preview' => '预览',
\t'Download' => '下载',
\t'Insert_Folder_Name' => '填写文件夹名称:',
\t'Root' => 'root',
\t'Rename' => '改名',
\t'Back' => '返回',
\t'View' => '视图',
\t'View_list' => '列表视图',
\t'View_columns_list' => '列视图',
\t'View_boxes' => '方块视图',
\t'Toolbar' => '工具栏',
\t'Actions' => '操作',
\t'Rename_existing_file' => '文件已存在',
\t'Rename_existing_folder' => '文件夹已存在',
\t'Empty_name' => '请输入文件名',
\t'Text_filter' => '文字过滤',
\t'Swipe_help' => '在文件或文件夹的名称上划过已显示更多选项',
\t'Upload_base' => '普通上传',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA上传(适用于大文件上传)',
\t'Upload_java_help' => \"如果Java Applet没有加载，你可以：1. 请确认你的电脑安装了Java。如果没有安装，在这里下载安装 <a href='http://java.com/en/download/'>[下载链接]</a>   2. 确保您电脑的防火墙没有阻挡Java上传\",
\t'Upload_base_help' => \"将需要上传的文件拖动到以上区域 (需要比较新的浏览器才支持)，并选择相关文件。当上传完成，点击'返回文件列表'按钮\",
\t'Type_dir' => 'dir',
\t'Type' => '类型',
\t'Dimension' => '尺寸',
\t'Size' => '大小',
\t'Date' => '日期',
\t'Filename' => '文件名',
\t'Operations' => '操作',
\t'Date_type' => 'y-m-d',
\t'OK' => 'OK',
\t'Cancel' => '取消',
\t'Sorting' => '排序',
\t'Show_url' => '显示URL',
\t'Extract' => '解压缩到这里',
\t'File_info' => '文件信息',
\t'Edit_image' => '编辑图片',
\t'Duplicate' => '复制',
\t'Folders' => '文件夹',
\t'Copy' => '拷贝',
\t'Cut' => '剪切',
\t'Paste' => '粘贴',
\t'CB' => '粘贴板', // clipboard
\t'Paste_Here' => '粘贴到这个目录',
\t'Paste_Confirm' => '确定粘贴到这个目录? 这有可能会覆盖已经存在的文件或文件夹',
\t'Paste_Failed' => '文件粘贴失败',
\t'Clear_Clipboard' => '清除粘贴板',
\t'Clear_Clipboard_Confirm' => '确定清除粘贴板?',
\t'Files_ON_Clipboard' => '粘贴板上还有文件存在',
\t'Copy_Cut_Size_Limit' => '无法 %s 选择的文件，选择的文件太大，超过了允许的大小: %d MB', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => '无法 %s 选择的文件，您选择的文件和文件夹数目超过限制: %d 个文件', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => ' 您没有权限 %s 文件', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => '无法保存图片',
\t'Zip_No_Extract' => '文件解压缩失败。文件可能已经损坏',
\t'Zip_Invalid' => '不支持此文件后缀，支持的后缀名: zip, gz, tar.',
\t'Dir_No_Write' => '您选择的目录没有写权限',
\t'Function_Disabled' => '%s 功能已经被服务器禁用。', // %s = cut or copy
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
", "@MwebAdmin/filemanager/lang/zh_CN.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/zh_CN.php");
    }
}
