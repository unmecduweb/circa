<?php

/* @MwebAdmin/filemanager/lang/tr_TR.php */
class __TwigTemplate_5e8881b3a24dd753d4ef9df14b03f5c6dad96827abad6cdacde6d5f8668947f9 extends Twig_Template
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
        $__internal_1e81a269af984d65284944d93a3a2af93f92ff3bc84d9f21ad2a50a65994a886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e81a269af984d65284944d93a3a2af93f92ff3bc84d9f21ad2a50a65994a886->enter($__internal_1e81a269af984d65284944d93a3a2af93f92ff3bc84d9f21ad2a50a65994a886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/tr_TR.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Seç',
\t'Erase' => 'Sil',
\t'Open' => 'Aç',
\t'Confirm_del' => 'Bu dosyayı silmek istediğinizden emin misiniz?',
\t'All' => 'Tümü',
\t'Files' => 'Dosyalar',
\t'Images' => 'Resimler',
\t'Archives' => 'Arşivler',
\t'Error_Upload' => 'Yüklemeye çalıştığınız dosya maximum yükleme limitini aştı.',
\t'Error_extension' => 'Dosya uzantısına izin yok.',
\t'Upload_file' => 'Dosya Yükle',
\t'Filters' => 'Filtreler',
\t'Videos' => 'Videolar',
\t'Music' => 'Müzikler',
\t'New_Folder' => 'Yeni Klasör',
\t'Folder_Created' => 'Klasör başarıyla oluşturuldu.',
\t'Existing_Folder' => 'Mevcut Klasör',
\t'Confirm_Folder_del' => 'Bu klasörü ve içindekileri silmek istediğinizden emin misiniz?',
\t'Return_Files_List' => 'Dosya Listesine Geri Dön',
\t'Preview' => 'Önizleme',
\t'Download' => 'İndir',
\t'Insert_Folder_Name' => 'Klasör Adı Ekle:',
\t'Root' => 'kök',
\t'Rename' => 'Yeniden Adlandır',
\t'Back' => 'Geri',
\t'View' => 'Görünüm',
\t'View_list' => 'Liste Görünümü',
\t'View_columns_list' => 'Kolonlu Liste Görünümü',
\t'View_boxes' => 'Kutu Görünümü',
\t'Toolbar' => 'Araç Çubuğu',
\t'Actions' => 'Eylemler',
\t'Rename_existing_file' => 'Bu dosya zaten mevcut',
\t'Rename_existing_folder' => 'Bu klasör zaten mevcut',
\t'Empty_name' => 'İsim Alanı Boş.',
\t'Text_filter' => 'Filtrele...',
\t'Swipe_help' => 'Seçenekleri görüntülemek için dosya/klasör ismine tıklayın',
\t'Upload_base' => 'Normal Yükleme',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA Yükleme (Büyük dosyalar için)',
\t'Upload_java_help' => \"Eğer Java uygulaması yüklenmediyse; <br />1- Bilgisayarınızda Java yüklü olduğundan emin olun yada <a href='http://java.com/en/download/'>[Java'yı Buradan İndirin]</a> <br />2- Güvenlik duvarının hiçbir şeye engel olmadığından emin olun.\",
\t'Upload_base_help' => \"Dosyaları aşağıdaki alana Taşı & Bırak veya tıklayarak açılan pencereden dosyalarınızı seçin. Yükleme bittiğinde 'Return to files list' butonuna tıklayın.\",
\t'Type_dir' => 'Dizin',
\t'Type' => 'Tür',
\t'Dimension' => 'Ebat',
\t'Size' => 'Boyut',
\t'Date' => 'Tarih',
\t'Filename' => 'Dosya Adı',
\t'Operations' => 'İşlemler',
\t'Date_type' => 'd-m-Y',
\t'OK' => 'Tamam',
\t'Cancel' => 'İptal',
\t'Sorting' => 'Sıralama',
\t'Show_url' => 'URL Göster',
\t'Extract' => 'Buraya Çıkart',
\t'File_info' => 'Dosya Bilgisi',
\t'Edit_image' => 'Resmi Düzenle',
\t'Duplicate' => 'Çoğalt',
\t'Folders' => 'Klasörler',
\t'Copy' => 'Kopyala',
\t'Cut' => 'Kes',
\t'Paste' => 'Yapıştır',
\t'CB' => 'Pano', // clipboard
\t'Paste_Here' => 'Bu dizine yapıştırın',
\t'Paste_Confirm' => 'Siz bu dizine yapıştırmak istediğinizden emin misiniz? Önceki dosyalar/klasörler silinecek ve yerine bu dosyalar/klasörler yazılacaktır.',
\t'Paste_Failed' => 'Dosyaları yapıştırma işlemi başarısız.',
\t'Clear_Clipboard' => 'Panoyu Temizle',
\t'Clear_Clipboard_Confirm' => 'Panoya silmek istediğinizden emin misiniz?',
\t'Files_ON_Clipboard' => 'Panoda dosyalar vardır.',
\t'Copy_Cut_Size_Limit' => 'Seçilen dosyalar/klasörler için çok büyük  %s. Limit: %d MB/İşlemi', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Siz çok fazla dosya/klasör seçtiniz %s. Limit:%d Dosyalar/İşlemler', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => '%s Dosyaları için izin verilmez.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Bu görüntü kaydedilemedi',
\t'Zip_No_Extract' => 'Dışa çıkarma işlemi yapılamadı. Dosya bozuk olabilir.',
\t'Zip_Invalid' => 'Bu dosya uzantısı desteklenmiyor. Geçerli Uzantılar: zip, gz, tar.',
\t'Dir_No_Write' => 'Seçtiğiniz dizin yazılabilir değil.',
\t'Function_Disabled' => '%s İşlevi sunucu tarafından devre dışı bırakıldı.', // %s = cut or copy
\t'File_Permission' => 'Dosya İzinleri',
\t'File_Permission_Not_Allowed' => '%s Dosya İzinlerinin değiştirilmesine izin verilmiyor.', // %s = files or folders
\t'File_Permission_Recursive' => 'Değişlikler uygulansın mı?',
\t'File_Permission_Wrong_Mode' => \"Girilen izin modu hatalı.\",
\t'User' => 'Kullanıcı',
\t'Group' => 'Grup',
\t'Yes' => 'Evet',
\t'No' => 'Hayır',
\t'Lang_Not_Found' => 'Dil dosyası bulunamadı.',
\t'Lang_Change' => 'Dili değiştir',
\t'File_Not_Found' => 'Dosya bulunamadı.',
\t'File_Open_Edit_Not_Allowed' => 'Bu dosyayı %s izniniz bulunmuyor.', // %s = open or edit
\t'Edit' => 'Düzenle',
\t'Edit_File' => \"Dosyanın içeriğini düzenle\",
\t'File_Save_OK' => \"Dosya başarıyla kaydedildi.\",
\t'File_Save_Error' => \"Dosya kaydedilirken bir hata oluştu.\",
\t'New_File' => 'Yeni Dosya',
\t'No_Extension' => 'Lütfen bir dosya uzantısı ekleyiniz.',
\t'Valid_Extensions' => 'Geçerli eklentiler: %s', // %s = txt,log etc.
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
        
        $__internal_1e81a269af984d65284944d93a3a2af93f92ff3bc84d9f21ad2a50a65994a886->leave($__internal_1e81a269af984d65284944d93a3a2af93f92ff3bc84d9f21ad2a50a65994a886_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/tr_TR.php";
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

\t'Select' => 'Seç',
\t'Erase' => 'Sil',
\t'Open' => 'Aç',
\t'Confirm_del' => 'Bu dosyayı silmek istediğinizden emin misiniz?',
\t'All' => 'Tümü',
\t'Files' => 'Dosyalar',
\t'Images' => 'Resimler',
\t'Archives' => 'Arşivler',
\t'Error_Upload' => 'Yüklemeye çalıştığınız dosya maximum yükleme limitini aştı.',
\t'Error_extension' => 'Dosya uzantısına izin yok.',
\t'Upload_file' => 'Dosya Yükle',
\t'Filters' => 'Filtreler',
\t'Videos' => 'Videolar',
\t'Music' => 'Müzikler',
\t'New_Folder' => 'Yeni Klasör',
\t'Folder_Created' => 'Klasör başarıyla oluşturuldu.',
\t'Existing_Folder' => 'Mevcut Klasör',
\t'Confirm_Folder_del' => 'Bu klasörü ve içindekileri silmek istediğinizden emin misiniz?',
\t'Return_Files_List' => 'Dosya Listesine Geri Dön',
\t'Preview' => 'Önizleme',
\t'Download' => 'İndir',
\t'Insert_Folder_Name' => 'Klasör Adı Ekle:',
\t'Root' => 'kök',
\t'Rename' => 'Yeniden Adlandır',
\t'Back' => 'Geri',
\t'View' => 'Görünüm',
\t'View_list' => 'Liste Görünümü',
\t'View_columns_list' => 'Kolonlu Liste Görünümü',
\t'View_boxes' => 'Kutu Görünümü',
\t'Toolbar' => 'Araç Çubuğu',
\t'Actions' => 'Eylemler',
\t'Rename_existing_file' => 'Bu dosya zaten mevcut',
\t'Rename_existing_folder' => 'Bu klasör zaten mevcut',
\t'Empty_name' => 'İsim Alanı Boş.',
\t'Text_filter' => 'Filtrele...',
\t'Swipe_help' => 'Seçenekleri görüntülemek için dosya/klasör ismine tıklayın',
\t'Upload_base' => 'Normal Yükleme',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA Yükleme (Büyük dosyalar için)',
\t'Upload_java_help' => \"Eğer Java uygulaması yüklenmediyse; <br />1- Bilgisayarınızda Java yüklü olduğundan emin olun yada <a href='http://java.com/en/download/'>[Java'yı Buradan İndirin]</a> <br />2- Güvenlik duvarının hiçbir şeye engel olmadığından emin olun.\",
\t'Upload_base_help' => \"Dosyaları aşağıdaki alana Taşı & Bırak veya tıklayarak açılan pencereden dosyalarınızı seçin. Yükleme bittiğinde 'Return to files list' butonuna tıklayın.\",
\t'Type_dir' => 'Dizin',
\t'Type' => 'Tür',
\t'Dimension' => 'Ebat',
\t'Size' => 'Boyut',
\t'Date' => 'Tarih',
\t'Filename' => 'Dosya Adı',
\t'Operations' => 'İşlemler',
\t'Date_type' => 'd-m-Y',
\t'OK' => 'Tamam',
\t'Cancel' => 'İptal',
\t'Sorting' => 'Sıralama',
\t'Show_url' => 'URL Göster',
\t'Extract' => 'Buraya Çıkart',
\t'File_info' => 'Dosya Bilgisi',
\t'Edit_image' => 'Resmi Düzenle',
\t'Duplicate' => 'Çoğalt',
\t'Folders' => 'Klasörler',
\t'Copy' => 'Kopyala',
\t'Cut' => 'Kes',
\t'Paste' => 'Yapıştır',
\t'CB' => 'Pano', // clipboard
\t'Paste_Here' => 'Bu dizine yapıştırın',
\t'Paste_Confirm' => 'Siz bu dizine yapıştırmak istediğinizden emin misiniz? Önceki dosyalar/klasörler silinecek ve yerine bu dosyalar/klasörler yazılacaktır.',
\t'Paste_Failed' => 'Dosyaları yapıştırma işlemi başarısız.',
\t'Clear_Clipboard' => 'Panoyu Temizle',
\t'Clear_Clipboard_Confirm' => 'Panoya silmek istediğinizden emin misiniz?',
\t'Files_ON_Clipboard' => 'Panoda dosyalar vardır.',
\t'Copy_Cut_Size_Limit' => 'Seçilen dosyalar/klasörler için çok büyük  %s. Limit: %d MB/İşlemi', // %s = cut or copy
\t'Copy_Cut_Count_Limit' => 'Siz çok fazla dosya/klasör seçtiniz %s. Limit:%d Dosyalar/İşlemler', // %s = cut or copy
\t'Copy_Cut_Not_Allowed' => '%s Dosyaları için izin verilmez.', // %s(1) = cut or copy, %s(2) = files or folders
\t'Aviary_No_Save' => 'Bu görüntü kaydedilemedi',
\t'Zip_No_Extract' => 'Dışa çıkarma işlemi yapılamadı. Dosya bozuk olabilir.',
\t'Zip_Invalid' => 'Bu dosya uzantısı desteklenmiyor. Geçerli Uzantılar: zip, gz, tar.',
\t'Dir_No_Write' => 'Seçtiğiniz dizin yazılabilir değil.',
\t'Function_Disabled' => '%s İşlevi sunucu tarafından devre dışı bırakıldı.', // %s = cut or copy
\t'File_Permission' => 'Dosya İzinleri',
\t'File_Permission_Not_Allowed' => '%s Dosya İzinlerinin değiştirilmesine izin verilmiyor.', // %s = files or folders
\t'File_Permission_Recursive' => 'Değişlikler uygulansın mı?',
\t'File_Permission_Wrong_Mode' => \"Girilen izin modu hatalı.\",
\t'User' => 'Kullanıcı',
\t'Group' => 'Grup',
\t'Yes' => 'Evet',
\t'No' => 'Hayır',
\t'Lang_Not_Found' => 'Dil dosyası bulunamadı.',
\t'Lang_Change' => 'Dili değiştir',
\t'File_Not_Found' => 'Dosya bulunamadı.',
\t'File_Open_Edit_Not_Allowed' => 'Bu dosyayı %s izniniz bulunmuyor.', // %s = open or edit
\t'Edit' => 'Düzenle',
\t'Edit_File' => \"Dosyanın içeriğini düzenle\",
\t'File_Save_OK' => \"Dosya başarıyla kaydedildi.\",
\t'File_Save_Error' => \"Dosya kaydedilirken bir hata oluştu.\",
\t'New_File' => 'Yeni Dosya',
\t'No_Extension' => 'Lütfen bir dosya uzantısı ekleyiniz.',
\t'Valid_Extensions' => 'Geçerli eklentiler: %s', // %s = txt,log etc.
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
", "@MwebAdmin/filemanager/lang/tr_TR.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/tr_TR.php");
    }
}
