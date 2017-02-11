<?php

/* @MwebAdmin/filemanager/lang/ja.php */
class __TwigTemplate_acda5a47dfedcdc75f975d55b08dd248fe004aa7f8fa4d19a1547a587fdb27a5 extends Twig_Template
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
        $__internal_765a7cb7be8a57fa6347528694cdb165e47de7e4a63ea1e7bba2f7d3a72365b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765a7cb7be8a57fa6347528694cdb165e47de7e4a63ea1e7bba2f7d3a72365b1->enter($__internal_765a7cb7be8a57fa6347528694cdb165e47de7e4a63ea1e7bba2f7d3a72365b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/ja.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => '選択',
\t'Erase' => '消去',
\t'Open' => '開く',
\t'Confirm_del' => 'このファイルを削除しますか?',
\t'All' => '全て',
\t'Files' => 'ファイル',
\t'Images' => 'イメージ',
\t'Archives' => 'アーカイブ',
\t'Error_Upload' => 'アップロード可能な最大サイズを超えています。',
\t'Error_extension' => '拡張子が許可されていません。',
\t'Upload_file' => 'アップロード',
\t'Filters' => 'フィルタ',
\t'Videos' => 'ビデオ',
\t'Music' => '音楽',
\t'New_Folder' => '新規フォルダ',
\t'Folder_Created' => 'フォルダを作成しました',
\t'Existing_Folder' => '存在するフォルダ',
\t'Confirm_Folder_del' => 'フォルダとフォルダの中身を削除しますか?',
\t'Return_Files_List' => 'ファイルの一覧に戻る',
\t'Preview' => 'プレビュー',
\t'Download' => 'ダウンロード',
\t'Insert_Folder_Name' => 'フォルダ名の追加',
\t'Root' => 'ルート',
\t'Rename' => '名称変更',
\t'Back' => '戻る',
\t'View' => 'ビュー',
\t'View_list' => '一覧表示',
\t'View_columns_list' => 'カラム表示',
\t'View_boxes' => 'ボックス表示',
\t'Toolbar' => 'ツールバー',
\t'Actions' => 'アクション',
\t'Rename_existing_file' => 'このファイルはすでに存在しています。',
\t'Rename_existing_folder' => 'このフォルダはすでに存在しています。',
\t'Empty_name' => '名前が空です',
\t'Text_filter' => 'テキストフィルタ',
\t'Swipe_help' => 'ファイル・フォルダ名をスワイプしてオプションを表示する',
\t'Upload_base' => '標準アップロード',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'Java アップロード (大きいファイルサイズ)',
\t'Upload_java_help' => \"Java　Applet がロード出来ない場合１．<a href='http://java.com/en/download/'>[download link]</a> インストールしてください。　2．ファイアウォールでブロックされていないことを確認してください。\",
\t'Upload_base_help' => \"ファイルをドラッグ＆ドロップ（モダンブラウザのみ）または上の領域をクリックしてファイルを選択してください。アップロードが完了したら「ファイルの一覧に戻る」ボタンをクリックしてください。\",
\t'Type_dir' => 'ディレクトリ',
\t'Type' => '種類',
\t'Dimension' => '画像サイズ',
\t'Size' => 'サイズ',
\t'Date' => '日付',
\t'Filename' => 'ファイル名',
\t'Operations' => '操作',
\t'Date_type' => 'Y/m/d',
\t'OK' => 'OK',
\t'Cancel' => 'キャンセル',
\t'Sorting' => 'ソート',
\t'Show_url' => 'URL表示',
\t'Extract' => 'ここに解凍',
\t'File_info' => 'ファイル情報',
\t'Edit_image' => '画像編集',
\t'Duplicate' => '複製',
\t'Folders' => 'フォルダ',
\t'Copy' => 'コピー',
\t'Cut' => 'カット',
\t'Paste' => 'ペースト',
\t'CB' => 'クリップボード', // clipboard
\t'Paste_Here' => 'このディレクトリにペーストする',
\t'Paste_Confirm' => 'このディレクトリにペーストしますか？既存のファイル/フォルダは上書きされます。',
\t'Paste_Failed' => 'ペーストできませんでした。',
\t'Clear_Clipboard' => 'クリップボードの消去',
\t'Clear_Clipboard_Confirm' => 'クリップボード内のデータを消去しますか?',
\t'Files_ON_Clipboard' => 'クリップボードにファイルがあります。',
\t'Copy_Cut_Size_Limit' => '選択したファイルが/フォルダを％sするには大きすぎます。 リミット: %d MB/操作', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => '選択したファイルが/フォルダを％sするには大きすぎます。 リミット: %d ファイル/操作', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'ファイルを %s する許可がありません。', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'イメージを保存できませんでした',
\t'Zip_No_Extract' => '解凍できませんでした。ファイルが破損している可能性があります。',
\t'Zip_Invalid' => '拡張子がサポートされてません。有効：　zip, gz, tar.',
\t'Dir_No_Write' => '選択したディレクトリに書き込み権限がありません',
\t'Function_Disabled' => '%s はサーバによって無効にされています。', // %s = cut or copy
\t'File_Permission' => 'ファイルの権限',
\t'File_Permission_Not_Allowed' => '%s の権限変更は許可されていません。', // %s = files or folders
\t'File_Permission_Recursive' => '内包するファイルに適用しますか?',
\t'File_Permission_Wrong_Mode' => \"供給された権限が正しくありません。\",
\t'User' => 'ユーザー',
\t'Group' => 'グループ',
\t'Yes' => 'はい',
\t'No' => 'いいえ',
\t'Lang_Not_Found' => '言語がみつかりませんでした。',
\t'Lang_Change' => '言語の変更',
\t'File_Not_Found' => '言語ファイルがみつかりませんでした。',
\t'File_Open_Edit_Not_Allowed' => 'このファイルを%sことができませんでした。', // %s = open or edit
\t'Edit' => '編集する',
\t'Edit_File' => \"ファイルを編集\",
\t'File_Save_OK' => \"ファイルの保存が完了しました。\",
\t'File_Save_Error' => \"ファイルの保存時にエラーが発生しました。\",
\t'New_File' => '新規ファイル',
\t'No_Extension' => 'ファイルの拡張子を指定してください。',
\t'Valid_Extensions' => '有効な拡張子: %s', // %s = txt,log etc.
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
        
        $__internal_765a7cb7be8a57fa6347528694cdb165e47de7e4a63ea1e7bba2f7d3a72365b1->leave($__internal_765a7cb7be8a57fa6347528694cdb165e47de7e4a63ea1e7bba2f7d3a72365b1_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/ja.php";
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

\t'Select' => '選択',
\t'Erase' => '消去',
\t'Open' => '開く',
\t'Confirm_del' => 'このファイルを削除しますか?',
\t'All' => '全て',
\t'Files' => 'ファイル',
\t'Images' => 'イメージ',
\t'Archives' => 'アーカイブ',
\t'Error_Upload' => 'アップロード可能な最大サイズを超えています。',
\t'Error_extension' => '拡張子が許可されていません。',
\t'Upload_file' => 'アップロード',
\t'Filters' => 'フィルタ',
\t'Videos' => 'ビデオ',
\t'Music' => '音楽',
\t'New_Folder' => '新規フォルダ',
\t'Folder_Created' => 'フォルダを作成しました',
\t'Existing_Folder' => '存在するフォルダ',
\t'Confirm_Folder_del' => 'フォルダとフォルダの中身を削除しますか?',
\t'Return_Files_List' => 'ファイルの一覧に戻る',
\t'Preview' => 'プレビュー',
\t'Download' => 'ダウンロード',
\t'Insert_Folder_Name' => 'フォルダ名の追加',
\t'Root' => 'ルート',
\t'Rename' => '名称変更',
\t'Back' => '戻る',
\t'View' => 'ビュー',
\t'View_list' => '一覧表示',
\t'View_columns_list' => 'カラム表示',
\t'View_boxes' => 'ボックス表示',
\t'Toolbar' => 'ツールバー',
\t'Actions' => 'アクション',
\t'Rename_existing_file' => 'このファイルはすでに存在しています。',
\t'Rename_existing_folder' => 'このフォルダはすでに存在しています。',
\t'Empty_name' => '名前が空です',
\t'Text_filter' => 'テキストフィルタ',
\t'Swipe_help' => 'ファイル・フォルダ名をスワイプしてオプションを表示する',
\t'Upload_base' => '標準アップロード',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'Java アップロード (大きいファイルサイズ)',
\t'Upload_java_help' => \"Java　Applet がロード出来ない場合１．<a href='http://java.com/en/download/'>[download link]</a> インストールしてください。　2．ファイアウォールでブロックされていないことを確認してください。\",
\t'Upload_base_help' => \"ファイルをドラッグ＆ドロップ（モダンブラウザのみ）または上の領域をクリックしてファイルを選択してください。アップロードが完了したら「ファイルの一覧に戻る」ボタンをクリックしてください。\",
\t'Type_dir' => 'ディレクトリ',
\t'Type' => '種類',
\t'Dimension' => '画像サイズ',
\t'Size' => 'サイズ',
\t'Date' => '日付',
\t'Filename' => 'ファイル名',
\t'Operations' => '操作',
\t'Date_type' => 'Y/m/d',
\t'OK' => 'OK',
\t'Cancel' => 'キャンセル',
\t'Sorting' => 'ソート',
\t'Show_url' => 'URL表示',
\t'Extract' => 'ここに解凍',
\t'File_info' => 'ファイル情報',
\t'Edit_image' => '画像編集',
\t'Duplicate' => '複製',
\t'Folders' => 'フォルダ',
\t'Copy' => 'コピー',
\t'Cut' => 'カット',
\t'Paste' => 'ペースト',
\t'CB' => 'クリップボード', // clipboard
\t'Paste_Here' => 'このディレクトリにペーストする',
\t'Paste_Confirm' => 'このディレクトリにペーストしますか？既存のファイル/フォルダは上書きされます。',
\t'Paste_Failed' => 'ペーストできませんでした。',
\t'Clear_Clipboard' => 'クリップボードの消去',
\t'Clear_Clipboard_Confirm' => 'クリップボード内のデータを消去しますか?',
\t'Files_ON_Clipboard' => 'クリップボードにファイルがあります。',
\t'Copy_Cut_Size_Limit' => '選択したファイルが/フォルダを％sするには大きすぎます。 リミット: %d MB/操作', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => '選択したファイルが/フォルダを％sするには大きすぎます。 リミット: %d ファイル/操作', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'ファイルを %s する許可がありません。', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'イメージを保存できませんでした',
\t'Zip_No_Extract' => '解凍できませんでした。ファイルが破損している可能性があります。',
\t'Zip_Invalid' => '拡張子がサポートされてません。有効：　zip, gz, tar.',
\t'Dir_No_Write' => '選択したディレクトリに書き込み権限がありません',
\t'Function_Disabled' => '%s はサーバによって無効にされています。', // %s = cut or copy
\t'File_Permission' => 'ファイルの権限',
\t'File_Permission_Not_Allowed' => '%s の権限変更は許可されていません。', // %s = files or folders
\t'File_Permission_Recursive' => '内包するファイルに適用しますか?',
\t'File_Permission_Wrong_Mode' => \"供給された権限が正しくありません。\",
\t'User' => 'ユーザー',
\t'Group' => 'グループ',
\t'Yes' => 'はい',
\t'No' => 'いいえ',
\t'Lang_Not_Found' => '言語がみつかりませんでした。',
\t'Lang_Change' => '言語の変更',
\t'File_Not_Found' => '言語ファイルがみつかりませんでした。',
\t'File_Open_Edit_Not_Allowed' => 'このファイルを%sことができませんでした。', // %s = open or edit
\t'Edit' => '編集する',
\t'Edit_File' => \"ファイルを編集\",
\t'File_Save_OK' => \"ファイルの保存が完了しました。\",
\t'File_Save_Error' => \"ファイルの保存時にエラーが発生しました。\",
\t'New_File' => '新規ファイル',
\t'No_Extension' => 'ファイルの拡張子を指定してください。',
\t'Valid_Extensions' => '有効な拡張子: %s', // %s = txt,log etc.
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
", "@MwebAdmin/filemanager/lang/ja.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/ja.php");
    }
}
