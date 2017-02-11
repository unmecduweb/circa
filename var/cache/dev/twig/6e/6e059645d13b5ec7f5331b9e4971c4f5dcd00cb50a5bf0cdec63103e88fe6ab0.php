<?php

/* @MwebAdmin/filemanager/lang/fr_FR.php */
class __TwigTemplate_3dc412409b115c90dd9256bea448f75d76e58f68d022e0e98ceda5968524bc95 extends Twig_Template
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
        $__internal_6a01016caba4c34d8f212c9d7dfb6219fcdc3a730ffbbb5fe8ccb439e6cde9e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a01016caba4c34d8f212c9d7dfb6219fcdc3a730ffbbb5fe8ccb439e6cde9e0->enter($__internal_6a01016caba4c34d8f212c9d7dfb6219fcdc3a730ffbbb5fe8ccb439e6cde9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/lang/fr_FR.php"));

        // line 1
        echo "<?php

return array(

\t'Select' => 'Sélectionner',
\t'Erase' => 'Effacer',
\t'Open' => 'Ouvrir',
\t'Confirm_del' => 'Êtes-vous sûr de vouloir effacer ce fichier ?',
\t'All' => 'Tous',
\t'Files' => 'Fichiers',
\t'Images' => 'Images',
\t'Archives' => 'Archives',
\t'Error_Upload' => 'Votre fichier dépasse la taille maximum autorisée.',
\t'Error_extension' => 'Extension de fichier non autorisée.',
\t'Upload_file' => 'Envoyer un fichier',
\t'Filters' => 'Filtrer',
\t'Videos' => 'Vidéos',
\t'Music' => 'Musique',
\t'New_Folder' => 'Nouveau dossier',
\t'Folder_Created' => 'Dossier correctement créé',
\t'Existing_Folder' => 'Dossier existant',
\t'Confirm_Folder_del' => 'Êtes-vous sûr de vouloir supprimer le dossier ainsi que tous ses éléments ?',
\t'Return_Files_List' => 'Revenir à la liste des fichiers',
\t'Preview' => 'Aperçu',
\t'Download' => 'Télécharger',
\t'Insert_Folder_Name' => 'Insérer le nom du dossier :',
\t'Root' => 'Racine',
\t'Rename' => 'Renommer',
\t'Back' => 'Retour',
\t'View' => 'Vue',
\t'View_list' => 'Vue par liste',
\t'View_columns_list' => 'Vue par listes de colonne',
\t'View_boxes' => 'Vue par icônes',
\t'Toolbar' => 'Barre d\\'outils',
\t'Actions' => 'Actions',
\t'Rename_existing_file' => 'Ce fichier existe déjà',
\t'Rename_existing_folder' => 'Ce dossier existe déjà',
\t'Empty_name' => 'Le nom est vide',
\t'Text_filter' => 'Texte de filtrage',
\t'Swipe_help' => 'Glissez le nom du fichier/dossier pour afficher les options',
\t'Upload_base' => 'Upload classique',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA upload (fichiers de grandes tailles)',
\t'Upload_java_help' => \"Si l'applet Java Applet ne charge pas 1. Assurez-vous que vous avez bien installé Java <a href='http://java.com/en/download/'>[download link]</a> 2. Assurez-vous que votre pare-feu ne bloque pas la connexion.\",
\t'Upload_base_help' => \"Glisser & Déposer le(s) fichier(s) à l'intérieur de la zone ou cliquez dessus (pour les derniers navigateurs), sinon sélectionnez le fichier. Lorsque l'upload est terminé, cliquez sur le bouton retour.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Type',
\t'Dimension' => 'Dimension',
\t'Size' => 'Taille',
\t'Date' => 'Date',
\t'Filename' => 'Nom',
\t'Operations' => 'Opérations',
\t'Date_type' => 'd/m/Y',
\t'OK' => 'OK',
\t'Cancel' => 'Annuler',
\t'Sorting' => 'Trier',
\t'Show_url' => 'Afficher l\\'URL',
\t'Extract' => 'Extraire ici',
\t'File_info' => 'Information',
\t'Edit_image' => 'Editer l\\'image',
\t'Duplicate' => 'Dupliquer',
\t'Folders' => 'Dossiers',
\t'Copy' => 'Copier',
\t'Cut' => 'Couper',
\t'Paste' => 'Coller',
\t'CB' => 'PP', // Presse-papiers
\t'Paste_Here' => 'Coller dans ce dossier',
\t'Paste_Confirm' => 'Êtes-vous sûr de vouloir coller dans ce répertoire. Cette action remplacera les fichiers/dossiers déjà existants.',
\t'Paste_Failed' => 'Impossible de coller les fichier(s)',
\t'Clear_Clipboard' => 'Vider le presse-papiers',
\t'Clear_Clipboard_Confirm' => 'Êtes-vous sûr de vouloir vider le presse-papiers ?',
\t'Files_ON_Clipboard' => 'Le presse-papiers contient des fichiers.',
\t'Copy_Cut_Size_Limit' => 'Les fichiers/dossiers sélectionnés sont trop gros pour %1\$s. Limite: %2\$d MB/opération', // %1\$s = cut or copy, %2\$d = max size
\t'Copy_Cut_Count_Limit' => 'Vous avez sélectionné trop de fichiers/dossier pour %1\$s. Limite: %2\$d fichiers/opération', // %1\$s = cut or copy, %2\$d = max count
\t'Copy_Cut_Not_Allowed' => 'Vous n\\'êtes pas autorisé à %1\$s des %2\$s.', // %12\$s = cut or copy, %2\$s = files or folders
\t'Aviary_No_Save' => 'Impossible d\\'enregistrer l\\'image',
\t'Zip_No_Extract' => 'Extraction impossible. Le fichier est peut-être corrompu.',
\t'Zip_Invalid' => 'Cette extension n\\'est pas supportée. Extensions valides: zip, gz, tar.',
\t'Dir_No_Write' => 'Le répertoire que vous avez sélectionné n\\'est pas accessible en écriture.',
\t'Function_Disabled' => 'La fonction %s a été désactivée sur le serveur.', // %s = cut or copy
\t'File_Permission' => 'Permission du fichier',
\t'File_Permission_Not_Allowed' => 'Le changement de permission %s n\\'est pas autorisé.', // %s = files or folders
\t'File_Permission_Recursive' => 'Appliquez recursivement ?',
\t'File_Permission_Wrong_Mode' => 'Les permissions saisies sont incorrectes.',
\t'User' => 'Utilisateur',
\t'Group' => 'Groupe',
\t'Yes' => 'Oui',
\t'No' => 'Non',
\t'Lang_Not_Found' => 'Le fichier de langue est introuvable.',
\t'Lang_Change' => 'Changer la langue',
\t'File_Not_Found' => 'Le fichier est introuvable.',
\t'File_Open_Edit_Not_Allowed' => 'Vous ne disposez pas des autorisations sur le fichier %s.', // %s = open or edit
\t'Edit' => 'Editer',
\t'Edit_File' => 'Editer le contenu du fichier',
\t'File_Save_OK' => 'Fichier enregistré avec succès.',
\t'File_Save_Error' => 'Une erreur s\\'est produite lors de l\\'enregistrement du fichier.',
\t'New_File' => 'Nouveau fichier',
\t'No_Extension' => 'Vous devez ajouter une extension au fichier.',
\t'Valid_Extensions' => 'Extensions valides: %s', // %s = txt,log etc.
\t'Upload_message' => \"Glissez les fichier ici pour les ajouter\",

\t'SERVER ERROR' => \"ERREUR SERVEUR\",
\t'forbiden' => \"Interdit\",
\t'wrong path' => \"Chemin invalide\",
\t'wrong name' => \"Nom invalide\",
\t'wrong extension' => \"Extension invalide\",
\t'wrong option' => \"Option invalide\",
\t'wrong data' => \"Données invalides\",
\t'wrong action' => \"Action invalide\",
\t'wrong sub-action' => \"Sous-action invalide\",
\t'no action passed' => \"Aucune action demandée\",
\t'no path' => \"Chemin manquant\",
\t'no file' => \"Fichier manquant\",
\t'view type number missing' => \"Type de vue manquant\",
\t'Not enought Memory' => \"Mémoire insuffisante\",
\t'max_size_reached' => \"Votre répertoire d'image a déjà atteind sa taille maximale de %d mo.\", //%d = max overall size
\t'B' => \"o\",
\t'KB' => \"ko\",
\t'MB' => \"mo\",
\t'GB' => \"go\",
\t'TB' => \"to\",
\t'total size' => \"Taille totale\",
);
";
        
        $__internal_6a01016caba4c34d8f212c9d7dfb6219fcdc3a730ffbbb5fe8ccb439e6cde9e0->leave($__internal_6a01016caba4c34d8f212c9d7dfb6219fcdc3a730ffbbb5fe8ccb439e6cde9e0_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/lang/fr_FR.php";
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

\t'Select' => 'Sélectionner',
\t'Erase' => 'Effacer',
\t'Open' => 'Ouvrir',
\t'Confirm_del' => 'Êtes-vous sûr de vouloir effacer ce fichier ?',
\t'All' => 'Tous',
\t'Files' => 'Fichiers',
\t'Images' => 'Images',
\t'Archives' => 'Archives',
\t'Error_Upload' => 'Votre fichier dépasse la taille maximum autorisée.',
\t'Error_extension' => 'Extension de fichier non autorisée.',
\t'Upload_file' => 'Envoyer un fichier',
\t'Filters' => 'Filtrer',
\t'Videos' => 'Vidéos',
\t'Music' => 'Musique',
\t'New_Folder' => 'Nouveau dossier',
\t'Folder_Created' => 'Dossier correctement créé',
\t'Existing_Folder' => 'Dossier existant',
\t'Confirm_Folder_del' => 'Êtes-vous sûr de vouloir supprimer le dossier ainsi que tous ses éléments ?',
\t'Return_Files_List' => 'Revenir à la liste des fichiers',
\t'Preview' => 'Aperçu',
\t'Download' => 'Télécharger',
\t'Insert_Folder_Name' => 'Insérer le nom du dossier :',
\t'Root' => 'Racine',
\t'Rename' => 'Renommer',
\t'Back' => 'Retour',
\t'View' => 'Vue',
\t'View_list' => 'Vue par liste',
\t'View_columns_list' => 'Vue par listes de colonne',
\t'View_boxes' => 'Vue par icônes',
\t'Toolbar' => 'Barre d\\'outils',
\t'Actions' => 'Actions',
\t'Rename_existing_file' => 'Ce fichier existe déjà',
\t'Rename_existing_folder' => 'Ce dossier existe déjà',
\t'Empty_name' => 'Le nom est vide',
\t'Text_filter' => 'Texte de filtrage',
\t'Swipe_help' => 'Glissez le nom du fichier/dossier pour afficher les options',
\t'Upload_base' => 'Upload classique',
\t'Upload_url' => 'URL',
\t'Upload_java' => 'JAVA upload (fichiers de grandes tailles)',
\t'Upload_java_help' => \"Si l'applet Java Applet ne charge pas 1. Assurez-vous que vous avez bien installé Java <a href='http://java.com/en/download/'>[download link]</a> 2. Assurez-vous que votre pare-feu ne bloque pas la connexion.\",
\t'Upload_base_help' => \"Glisser & Déposer le(s) fichier(s) à l'intérieur de la zone ou cliquez dessus (pour les derniers navigateurs), sinon sélectionnez le fichier. Lorsque l'upload est terminé, cliquez sur le bouton retour.\",
\t'Type_dir' => 'dir',
\t'Type' => 'Type',
\t'Dimension' => 'Dimension',
\t'Size' => 'Taille',
\t'Date' => 'Date',
\t'Filename' => 'Nom',
\t'Operations' => 'Opérations',
\t'Date_type' => 'd/m/Y',
\t'OK' => 'OK',
\t'Cancel' => 'Annuler',
\t'Sorting' => 'Trier',
\t'Show_url' => 'Afficher l\\'URL',
\t'Extract' => 'Extraire ici',
\t'File_info' => 'Information',
\t'Edit_image' => 'Editer l\\'image',
\t'Duplicate' => 'Dupliquer',
\t'Folders' => 'Dossiers',
\t'Copy' => 'Copier',
\t'Cut' => 'Couper',
\t'Paste' => 'Coller',
\t'CB' => 'PP', // Presse-papiers
\t'Paste_Here' => 'Coller dans ce dossier',
\t'Paste_Confirm' => 'Êtes-vous sûr de vouloir coller dans ce répertoire. Cette action remplacera les fichiers/dossiers déjà existants.',
\t'Paste_Failed' => 'Impossible de coller les fichier(s)',
\t'Clear_Clipboard' => 'Vider le presse-papiers',
\t'Clear_Clipboard_Confirm' => 'Êtes-vous sûr de vouloir vider le presse-papiers ?',
\t'Files_ON_Clipboard' => 'Le presse-papiers contient des fichiers.',
\t'Copy_Cut_Size_Limit' => 'Les fichiers/dossiers sélectionnés sont trop gros pour %1\$s. Limite: %2\$d MB/opération', // %1\$s = cut or copy, %2\$d = max size
\t'Copy_Cut_Count_Limit' => 'Vous avez sélectionné trop de fichiers/dossier pour %1\$s. Limite: %2\$d fichiers/opération', // %1\$s = cut or copy, %2\$d = max count
\t'Copy_Cut_Not_Allowed' => 'Vous n\\'êtes pas autorisé à %1\$s des %2\$s.', // %12\$s = cut or copy, %2\$s = files or folders
\t'Aviary_No_Save' => 'Impossible d\\'enregistrer l\\'image',
\t'Zip_No_Extract' => 'Extraction impossible. Le fichier est peut-être corrompu.',
\t'Zip_Invalid' => 'Cette extension n\\'est pas supportée. Extensions valides: zip, gz, tar.',
\t'Dir_No_Write' => 'Le répertoire que vous avez sélectionné n\\'est pas accessible en écriture.',
\t'Function_Disabled' => 'La fonction %s a été désactivée sur le serveur.', // %s = cut or copy
\t'File_Permission' => 'Permission du fichier',
\t'File_Permission_Not_Allowed' => 'Le changement de permission %s n\\'est pas autorisé.', // %s = files or folders
\t'File_Permission_Recursive' => 'Appliquez recursivement ?',
\t'File_Permission_Wrong_Mode' => 'Les permissions saisies sont incorrectes.',
\t'User' => 'Utilisateur',
\t'Group' => 'Groupe',
\t'Yes' => 'Oui',
\t'No' => 'Non',
\t'Lang_Not_Found' => 'Le fichier de langue est introuvable.',
\t'Lang_Change' => 'Changer la langue',
\t'File_Not_Found' => 'Le fichier est introuvable.',
\t'File_Open_Edit_Not_Allowed' => 'Vous ne disposez pas des autorisations sur le fichier %s.', // %s = open or edit
\t'Edit' => 'Editer',
\t'Edit_File' => 'Editer le contenu du fichier',
\t'File_Save_OK' => 'Fichier enregistré avec succès.',
\t'File_Save_Error' => 'Une erreur s\\'est produite lors de l\\'enregistrement du fichier.',
\t'New_File' => 'Nouveau fichier',
\t'No_Extension' => 'Vous devez ajouter une extension au fichier.',
\t'Valid_Extensions' => 'Extensions valides: %s', // %s = txt,log etc.
\t'Upload_message' => \"Glissez les fichier ici pour les ajouter\",

\t'SERVER ERROR' => \"ERREUR SERVEUR\",
\t'forbiden' => \"Interdit\",
\t'wrong path' => \"Chemin invalide\",
\t'wrong name' => \"Nom invalide\",
\t'wrong extension' => \"Extension invalide\",
\t'wrong option' => \"Option invalide\",
\t'wrong data' => \"Données invalides\",
\t'wrong action' => \"Action invalide\",
\t'wrong sub-action' => \"Sous-action invalide\",
\t'no action passed' => \"Aucune action demandée\",
\t'no path' => \"Chemin manquant\",
\t'no file' => \"Fichier manquant\",
\t'view type number missing' => \"Type de vue manquant\",
\t'Not enought Memory' => \"Mémoire insuffisante\",
\t'max_size_reached' => \"Votre répertoire d'image a déjà atteind sa taille maximale de %d mo.\", //%d = max overall size
\t'B' => \"o\",
\t'KB' => \"ko\",
\t'MB' => \"mo\",
\t'GB' => \"go\",
\t'TB' => \"to\",
\t'total size' => \"Taille totale\",
);
", "@MwebAdmin/filemanager/lang/fr_FR.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/lang/fr_FR.php");
    }
}
