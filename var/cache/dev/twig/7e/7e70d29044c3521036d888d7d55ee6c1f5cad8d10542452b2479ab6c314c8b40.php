<?php

/* @MwebAdmin/filemanager/lang/id.php */
class __TwigTemplate_52fa4e7bdd92123aeedde0e0750275bbc824432f502d6d3739932f1be8762dab extends Twig_Template
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
        $__internal_81794a8799af6946f7fe5b5e005961675db7497379f12c7b2c6c9e2611b662a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81794a8799af6946f7fe5b5e005961675db7497379f12c7b2c6c9e2611b662a6->enter($__internal_81794a8799af6946f7fe5b5e005961675db7497379f12c7b2c6c9e2611b662a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/id.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Pilih',
\t'Erase' => 'Hapus',
\t'Open' => 'Buka',
\t'Confirm_del' => 'Apakah anda yakin menghapus berkas ini?',
\t'All' => 'Semua',
\t'Files' => 'Berkas',
\t'Images' => 'Gambar',
\t'Archives' => 'Arsip',
\t'Error_Upload' => 'Berkas yang diubah melebihi batas ukuran yang diperbolehkan.',
\t'Error_extension' => 'Ekstensi berkas tidak diperbolehkan.',
\t'Upload_file' => 'Unggah',
\t'Filters' => 'Saring',
\t'Videos' => 'Video',
\t'Music' => 'Musik',
\t'New_Folder' => 'Folder Baru',
\t'Folder_Created' => 'Folder Telah Dibuat',
\t'Existing_Folder' => 'Folder yang ada',
\t'Confirm_Folder_del' => 'Apakah anda yakin menghapus folder dan semua isi didalamnya?',
\t'Return_Files_List' => 'Kembali ke daftar',
\t'Preview' => 'Pratampil',
\t'Download' => 'Unduh',
\t'Insert_Folder_Name' => 'Masukkan nama folder:',
\t'Root' => 'root',
\t'Rename' => 'Ubah nama',
\t'Back' => 'kembali',
\t'View' => 'lihat',
\t'View_list' => 'Tampilan Daftar',
\t'View_columns_list' => 'Tampilan Daftar kolom',
\t'View_boxes' => 'Tampilan Kotak',
\t'Toolbar' => 'Toolbar',
\t'Actions' => 'Aksi',
\t'Rename_existing_file' => 'Berkas Sudah ada',
\t'Rename_existing_folder' => 'Folder sudah ada',
\t'Empty_name' => 'Nama Kosong',
\t'Text_filter' => 'saring teks',
\t'Swipe_help' => 'Arahkan pada nama berkas/folder untuk melihat pilihan',
\t'Upload_base' => 'Basis Unggah',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'Unggahan dengan JAVA (Berkas Ukuran Besar)',
\t'Upload_java_help' => \"Jika JAVA applet tidak muncul maka, 1. Pastikan JAVA sudah terinstal, jika tidak <a href='http://java.com/en/download/'>[download link]</a>   2. Pastikan firewall anda tidak memblok aksi tersebut\",
\t'Upload_base_help' => \"Seret & letakkan berkas atau klik area di atas (browser terbaru) dan pilih berkasnya. ketika proses unggah selesai, Klik tombol 'Kembali ke daftar'.\",
\t'Type_dir' => 'direktori',
\t'Type' => 'Tipe',
\t'Dimension' => 'Dimensi',
\t'Size' => 'Ukuran',
\t'Date' => 'Tanggal',
\t'Filename' => 'Nama_berkas',
\t'Operations' => 'Operasi',
\t'Date_type' => 'y-m-d',
\t'OK' => 'OK',
\t'Cancel' => 'Cancel',
\t'Sorting' => 'Sortir',
\t'Show_url' => 'lihat URL',
\t'Extract' => 'extract disini',
\t'File_info' => 'info berkas',
\t'Edit_image' => 'edit gambar',
\t'Duplicate' => 'Duplikat',
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
        
        $__internal_81794a8799af6946f7fe5b5e005961675db7497379f12c7b2c6c9e2611b662a6->leave($__internal_81794a8799af6946f7fe5b5e005961675db7497379f12c7b2c6c9e2611b662a6_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/id.php";
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

\t'Select' => 'Pilih',
\t'Erase' => 'Hapus',
\t'Open' => 'Buka',
\t'Confirm_del' => 'Apakah anda yakin menghapus berkas ini?',
\t'All' => 'Semua',
\t'Files' => 'Berkas',
\t'Images' => 'Gambar',
\t'Archives' => 'Arsip',
\t'Error_Upload' => 'Berkas yang diubah melebihi batas ukuran yang diperbolehkan.',
\t'Error_extension' => 'Ekstensi berkas tidak diperbolehkan.',
\t'Upload_file' => 'Unggah',
\t'Filters' => 'Saring',
\t'Videos' => 'Video',
\t'Music' => 'Musik',
\t'New_Folder' => 'Folder Baru',
\t'Folder_Created' => 'Folder Telah Dibuat',
\t'Existing_Folder' => 'Folder yang ada',
\t'Confirm_Folder_del' => 'Apakah anda yakin menghapus folder dan semua isi didalamnya?',
\t'Return_Files_List' => 'Kembali ke daftar',
\t'Preview' => 'Pratampil',
\t'Download' => 'Unduh',
\t'Insert_Folder_Name' => 'Masukkan nama folder:',
\t'Root' => 'root',
\t'Rename' => 'Ubah nama',
\t'Back' => 'kembali',
\t'View' => 'lihat',
\t'View_list' => 'Tampilan Daftar',
\t'View_columns_list' => 'Tampilan Daftar kolom',
\t'View_boxes' => 'Tampilan Kotak',
\t'Toolbar' => 'Toolbar',
\t'Actions' => 'Aksi',
\t'Rename_existing_file' => 'Berkas Sudah ada',
\t'Rename_existing_folder' => 'Folder sudah ada',
\t'Empty_name' => 'Nama Kosong',
\t'Text_filter' => 'saring teks',
\t'Swipe_help' => 'Arahkan pada nama berkas/folder untuk melihat pilihan',
\t'Upload_base' => 'Basis Unggah',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'Unggahan dengan JAVA (Berkas Ukuran Besar)',
\t'Upload_java_help' => \"Jika JAVA applet tidak muncul maka, 1. Pastikan JAVA sudah terinstal, jika tidak <a href='http://java.com/en/download/'>[download link]</a>   2. Pastikan firewall anda tidak memblok aksi tersebut\",
\t'Upload_base_help' => \"Seret & letakkan berkas atau klik area di atas (browser terbaru) dan pilih berkasnya. ketika proses unggah selesai, Klik tombol 'Kembali ke daftar'.\",
\t'Type_dir' => 'direktori',
\t'Type' => 'Tipe',
\t'Dimension' => 'Dimensi',
\t'Size' => 'Ukuran',
\t'Date' => 'Tanggal',
\t'Filename' => 'Nama_berkas',
\t'Operations' => 'Operasi',
\t'Date_type' => 'y-m-d',
\t'OK' => 'OK',
\t'Cancel' => 'Cancel',
\t'Sorting' => 'Sortir',
\t'Show_url' => 'lihat URL',
\t'Extract' => 'extract disini',
\t'File_info' => 'info berkas',
\t'Edit_image' => 'edit gambar',
\t'Duplicate' => 'Duplikat',
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
", "@MwebAdmin/filemanager/lang/id.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/id.php");
    }
}
