<?php

/* @MwebAdmin/filemanager/lang/vi.php */
class __TwigTemplate_d121757259a31b4cb725d2517ae6ddb39c5468a066376eaaccd985630af0f862 extends Twig_Template
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
        $__internal_d1d43129258c4497e173aaf7f85d90cd3ee28bf79a35a8bdc7327493804a9842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d43129258c4497e173aaf7f85d90cd3ee28bf79a35a8bdc7327493804a9842->enter($__internal_d1d43129258c4497e173aaf7f85d90cd3ee28bf79a35a8bdc7327493804a9842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/vi.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Chọn',
\t'Erase' => 'Xóa',
\t'Open' => 'Mở',
\t'Confirm_del' => 'Bạn có chắc chắn muốn xóa file này không?',
\t'All' => 'Tất cả',
\t'Files' => 'File',
\t'Images' => 'Images',
\t'Archives' => 'Archives',
\t'Error_Upload' => 'File được upload vượt quá dung lượng cho phép.',
\t'Error_extension' => 'Định dạng file không được chấp nhận.',
\t'Upload_file' => 'Upload',
\t'Filters' => 'Lọc',
\t'Videos' => 'Videos',
\t'Music' => 'Music',
\t'New_Folder' => 'Tạo thư mục',
\t'Folder_Created' => 'Thư mục đã được tạo',
\t'Existing_Folder' => 'Thư mục đã tồn tại',
\t'Confirm_Folder_del' => 'Bạn có chắc chắn muốn xóa Thư mục này cùng với mọi thứ bên trong?',
\t'Return_Files_List' => 'Quay lại danh sách file',
\t'Preview' => 'Preview',
\t'Download' => 'Download',
\t'Insert_Folder_Name' => 'Nhập tên thư mục:',
\t'Root' => 'root',
\t'Rename' => 'Đổi tên',
\t'Back' => 'back',
\t'View' => 'Xem',
\t'View_list' => 'Xem dạng danh sách',
\t'View_columns_list' => 'Xem dạng cột',
\t'View_boxes' => 'Xem dạng lưới',
\t'Toolbar' => 'Thanh công cụ',
\t'Actions' => 'Actions',
\t'Rename_existing_file' => 'File này đã tồn tại',
\t'Rename_existing_folder' => 'Thư mục này đã tồn tại',
\t'Empty_name' => 'Tên để trống',
\t'Text_filter' => 'Lọc theo tên',
\t'Swipe_help' => 'Swipe the name of file/folder to show options',
\t'Upload_base' => 'Upload thông thường',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA upload (file cỡ lớn)',
\t'Upload_java_help' => \"Nếu Java Applet không tải dược, 1. Hãy chắc chắn Java đã được cài đặt, nếu không <a href='http://java.com/en/download/'>[download tại đây]</a>   2. Không có gì bị chẳn bởi firewall của bạn\",
\t'Upload_base_help' => \"Kéo và Thả file hoặc click vào khu vực phía trên (modern browsers) và chọn file. Sau khi upload thành công, click vào nút 'Quay lại danh sách file'.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Loại File',
\t'Dimension' => 'Kích thước',
\t'Size' => 'Size',
\t'Date' => 'Ngày tạo',
\t'Filename' => 'Tên File',
\t'Operations' => 'Tùy chọn',
\t'Date_type' => 'y-m-d',
\t'OK' => 'OK',
\t'Cancel' => 'Hủy',
\t'Sorting' => 'sorting',
\t'Show_url' => 'Xem URL',
\t'Extract' => 'Giải nén tại đây',
\t'File_info' => 'Thông tin file',
\t'Edit_image' => 'Sửa image',
\t'Duplicate' => 'Nhân bản',
\t'Folders' => 'Thư mục',
\t'Copy' => 'Copy',
\t'Cut' => 'Cut',
\t'Paste' => 'Paste',
\t'CB' => 'CB', // clipboard
\t'Paste_Here' => 'Paste vào thư mục này',
\t'Paste_Confirm' => 'Bạn có chắc chắn muốn Paste vào thư mục này? Việc này sẽ ghe đè lên cáo file/folder cũ nếu có.',
\t'Paste_Failed' => 'Lỗi khi paste file',
\t'Clear_Clipboard' => 'Xóa clipboard',
\t'Clear_Clipboard_Confirm' => 'Bạn có chắc chắn muốn xóa clipboard?',
\t'Files_ON_Clipboard' => 'Danh sách file trong clipboard.',
\t'Copy_Cut_Size_Limit' => 'File/folder được chọn quá lớn để %s. Giới hạn: %d MB/thao tác', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Bạn đã chọn quá nhiều file/folder để %s. Giới hạn: %d files/thao tác', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Bạn không được phép để %s file.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Không thể lưu image',
\t'Zip_No_Extract' => 'Không thể giải nén. File có thể bị lỗi.',
\t'Zip_Invalid' => 'Định dạng này không được hỗ trợ. Chấp nhận: zip, gz, tar.',
\t'Dir_No_Write' => 'Thư mục bạn chọn không cho phép ghi dữ liệu vào.',
\t'Function_Disabled' => 'Chức năng %s đã bị Tắt bơi server.', // %s = cut or copy
\t'File_Permission' => 'File permission',
\t'File_Permission_Not_Allowed' => 'Đổi permissions của %s không được chấp nhận.', // %s = files or folders
\t'File_Permission_Recursive' => 'Apply recursively?',
\t'File_Permission_Wrong_Mode' => \"Các permission bạn chọn không chính xác.\",
\t'User' => 'User',
\t'Group' => 'Group',
\t'Yes' => 'Yes',
\t'No' => 'No',
\t'Lang_Not_Found' => 'Không tìm thấy ngôn ngữ.',
\t'Lang_Change' => 'Đổi ngôn ngữ',
\t'File_Not_Found' => 'Không tìm thấy file.',
\t'File_Open_Edit_Not_Allowed' => 'Bạn không được phép để %s file này.', // %s = open or edit
\t'Edit' => 'Sửa',
\t'Edit_File' => \"Sửa nội dung file\",
\t'File_Save_OK' => \"File được lưu thành công.\",
\t'File_Save_Error' => \"Đã có lỗi khi lưu file.\",
\t'New_File' => 'Tạo File mới',
\t'No_Extension' => 'You have to add a file extension.',
\t'Valid_Extensions' => 'Extension được chấp nhận: %s', // %s = txt,log etc.
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
);";
        
        $__internal_d1d43129258c4497e173aaf7f85d90cd3ee28bf79a35a8bdc7327493804a9842->leave($__internal_d1d43129258c4497e173aaf7f85d90cd3ee28bf79a35a8bdc7327493804a9842_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/vi.php";
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

\t'Select' => 'Chọn',
\t'Erase' => 'Xóa',
\t'Open' => 'Mở',
\t'Confirm_del' => 'Bạn có chắc chắn muốn xóa file này không?',
\t'All' => 'Tất cả',
\t'Files' => 'File',
\t'Images' => 'Images',
\t'Archives' => 'Archives',
\t'Error_Upload' => 'File được upload vượt quá dung lượng cho phép.',
\t'Error_extension' => 'Định dạng file không được chấp nhận.',
\t'Upload_file' => 'Upload',
\t'Filters' => 'Lọc',
\t'Videos' => 'Videos',
\t'Music' => 'Music',
\t'New_Folder' => 'Tạo thư mục',
\t'Folder_Created' => 'Thư mục đã được tạo',
\t'Existing_Folder' => 'Thư mục đã tồn tại',
\t'Confirm_Folder_del' => 'Bạn có chắc chắn muốn xóa Thư mục này cùng với mọi thứ bên trong?',
\t'Return_Files_List' => 'Quay lại danh sách file',
\t'Preview' => 'Preview',
\t'Download' => 'Download',
\t'Insert_Folder_Name' => 'Nhập tên thư mục:',
\t'Root' => 'root',
\t'Rename' => 'Đổi tên',
\t'Back' => 'back',
\t'View' => 'Xem',
\t'View_list' => 'Xem dạng danh sách',
\t'View_columns_list' => 'Xem dạng cột',
\t'View_boxes' => 'Xem dạng lưới',
\t'Toolbar' => 'Thanh công cụ',
\t'Actions' => 'Actions',
\t'Rename_existing_file' => 'File này đã tồn tại',
\t'Rename_existing_folder' => 'Thư mục này đã tồn tại',
\t'Empty_name' => 'Tên để trống',
\t'Text_filter' => 'Lọc theo tên',
\t'Swipe_help' => 'Swipe the name of file/folder to show options',
\t'Upload_base' => 'Upload thông thường',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA upload (file cỡ lớn)',
\t'Upload_java_help' => \"Nếu Java Applet không tải dược, 1. Hãy chắc chắn Java đã được cài đặt, nếu không <a href='http://java.com/en/download/'>[download tại đây]</a>   2. Không có gì bị chẳn bởi firewall của bạn\",
\t'Upload_base_help' => \"Kéo và Thả file hoặc click vào khu vực phía trên (modern browsers) và chọn file. Sau khi upload thành công, click vào nút 'Quay lại danh sách file'.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Loại File',
\t'Dimension' => 'Kích thước',
\t'Size' => 'Size',
\t'Date' => 'Ngày tạo',
\t'Filename' => 'Tên File',
\t'Operations' => 'Tùy chọn',
\t'Date_type' => 'y-m-d',
\t'OK' => 'OK',
\t'Cancel' => 'Hủy',
\t'Sorting' => 'sorting',
\t'Show_url' => 'Xem URL',
\t'Extract' => 'Giải nén tại đây',
\t'File_info' => 'Thông tin file',
\t'Edit_image' => 'Sửa image',
\t'Duplicate' => 'Nhân bản',
\t'Folders' => 'Thư mục',
\t'Copy' => 'Copy',
\t'Cut' => 'Cut',
\t'Paste' => 'Paste',
\t'CB' => 'CB', // clipboard
\t'Paste_Here' => 'Paste vào thư mục này',
\t'Paste_Confirm' => 'Bạn có chắc chắn muốn Paste vào thư mục này? Việc này sẽ ghe đè lên cáo file/folder cũ nếu có.',
\t'Paste_Failed' => 'Lỗi khi paste file',
\t'Clear_Clipboard' => 'Xóa clipboard',
\t'Clear_Clipboard_Confirm' => 'Bạn có chắc chắn muốn xóa clipboard?',
\t'Files_ON_Clipboard' => 'Danh sách file trong clipboard.',
\t'Copy_Cut_Size_Limit' => 'File/folder được chọn quá lớn để %s. Giới hạn: %d MB/thao tác', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Bạn đã chọn quá nhiều file/folder để %s. Giới hạn: %d files/thao tác', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => 'Bạn không được phép để %s file.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Không thể lưu image',
\t'Zip_No_Extract' => 'Không thể giải nén. File có thể bị lỗi.',
\t'Zip_Invalid' => 'Định dạng này không được hỗ trợ. Chấp nhận: zip, gz, tar.',
\t'Dir_No_Write' => 'Thư mục bạn chọn không cho phép ghi dữ liệu vào.',
\t'Function_Disabled' => 'Chức năng %s đã bị Tắt bơi server.', // %s = cut or copy
\t'File_Permission' => 'File permission',
\t'File_Permission_Not_Allowed' => 'Đổi permissions của %s không được chấp nhận.', // %s = files or folders
\t'File_Permission_Recursive' => 'Apply recursively?',
\t'File_Permission_Wrong_Mode' => \"Các permission bạn chọn không chính xác.\",
\t'User' => 'User',
\t'Group' => 'Group',
\t'Yes' => 'Yes',
\t'No' => 'No',
\t'Lang_Not_Found' => 'Không tìm thấy ngôn ngữ.',
\t'Lang_Change' => 'Đổi ngôn ngữ',
\t'File_Not_Found' => 'Không tìm thấy file.',
\t'File_Open_Edit_Not_Allowed' => 'Bạn không được phép để %s file này.', // %s = open or edit
\t'Edit' => 'Sửa',
\t'Edit_File' => \"Sửa nội dung file\",
\t'File_Save_OK' => \"File được lưu thành công.\",
\t'File_Save_Error' => \"Đã có lỗi khi lưu file.\",
\t'New_File' => 'Tạo File mới',
\t'No_Extension' => 'You have to add a file extension.',
\t'Valid_Extensions' => 'Extension được chấp nhận: %s', // %s = txt,log etc.
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
);", "@MwebAdmin/filemanager/lang/vi.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/vi.php");
    }
}
