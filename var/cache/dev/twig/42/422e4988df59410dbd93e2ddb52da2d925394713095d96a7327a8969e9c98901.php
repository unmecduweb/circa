<?php

/* MwebAdminBundle::layout.html.twig */
class __TwigTemplate_d119db817d76919ea1af2dd64754dc0ee184fada903ca4eadad1f576c32147f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MwebAdminBundle::base.html.twig", "MwebAdminBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'headTitle' => array($this, 'block_headTitle'),
            'meta' => array($this, 'block_meta'),
            'metaDescription' => array($this, 'block_metaDescription'),
            'lexik_stylesheets' => array($this, 'block_lexik_stylesheets'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
            'pageH1' => array($this, 'block_pageH1'),
            'admin_container' => array($this, 'block_admin_container'),
            'lexik_content' => array($this, 'block_lexik_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'footer' => array($this, 'block_footer'),
            'modal' => array($this, 'block_modal'),
            'js' => array($this, 'block_js'),
            'lexik_javascript_footer' => array($this, 'block_lexik_javascript_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MwebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a67fe6460d55cfd4a3e0104afca6291de42aef252f160ab0184b4b90c2dab8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a67fe6460d55cfd4a3e0104afca6291de42aef252f160ab0184b4b90c2dab8a->enter($__internal_0a67fe6460d55cfd4a3e0104afca6291de42aef252f160ab0184b4b90c2dab8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a67fe6460d55cfd4a3e0104afca6291de42aef252f160ab0184b4b90c2dab8a->leave($__internal_0a67fe6460d55cfd4a3e0104afca6291de42aef252f160ab0184b4b90c2dab8a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8fb5fb7c599053688516452cfca4c8ad312785961e7a82305f009517268c81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fb5fb7c599053688516452cfca4c8ad312785961e7a82305f009517268c81b->enter($__internal_f8fb5fb7c599053688516452cfca4c8ad312785961e7a82305f009517268c81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "
    <title>";
        // line 5
        $this->displayBlock('headTitle', $context, $blocks);
        echo "</title>

    ";
        // line 7
        $this->displayBlock('meta', $context, $blocks);
        // line 11
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("files/image/favicon.png"), "html", null, true);
        echo "\" />

    ";
        // line 14
        $this->displayBlock('lexik_stylesheets', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        


";
        
        $__internal_f8fb5fb7c599053688516452cfca4c8ad312785961e7a82305f009517268c81b->leave($__internal_f8fb5fb7c599053688516452cfca4c8ad312785961e7a82305f009517268c81b_prof);

    }

    // line 5
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_305cfd6c352281b6819434e875fb5d13c6a9af73e33db3d9271dbe8b46a6639b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305cfd6c352281b6819434e875fb5d13c6a9af73e33db3d9271dbe8b46a6639b->enter($__internal_305cfd6c352281b6819434e875fb5d13c6a9af73e33db3d9271dbe8b46a6639b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.title"), "html", null, true);
        
        $__internal_305cfd6c352281b6819434e875fb5d13c6a9af73e33db3d9271dbe8b46a6639b->leave($__internal_305cfd6c352281b6819434e875fb5d13c6a9af73e33db3d9271dbe8b46a6639b_prof);

    }

    // line 7
    public function block_meta($context, array $blocks = array())
    {
        $__internal_1a1536f953de3390b974d4723337fcdc6bc748ca9c02f53cd7e9cb09e0616280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1536f953de3390b974d4723337fcdc6bc748ca9c02f53cd7e9cb09e0616280->enter($__internal_1a1536f953de3390b974d4723337fcdc6bc748ca9c02f53cd7e9cb09e0616280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 8
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('metaDescription', $context, $blocks);
        echo "\" />
    ";
        
        $__internal_1a1536f953de3390b974d4723337fcdc6bc748ca9c02f53cd7e9cb09e0616280->leave($__internal_1a1536f953de3390b974d4723337fcdc6bc748ca9c02f53cd7e9cb09e0616280_prof);

    }

    public function block_metaDescription($context, array $blocks = array())
    {
        $__internal_7f00000c14aa35857f69b51f3f3a91e4ba53e89c949a4fdbeeb4a6c7e4c13fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f00000c14aa35857f69b51f3f3a91e4ba53e89c949a4fdbeeb4a6c7e4c13fbd->enter($__internal_7f00000c14aa35857f69b51f3f3a91e4ba53e89c949a4fdbeeb4a6c7e4c13fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metaDescription"));

        
        $__internal_7f00000c14aa35857f69b51f3f3a91e4ba53e89c949a4fdbeeb4a6c7e4c13fbd->leave($__internal_7f00000c14aa35857f69b51f3f3a91e4ba53e89c949a4fdbeeb4a6c7e4c13fbd_prof);

    }

    // line 14
    public function block_lexik_stylesheets($context, array $blocks = array())
    {
        $__internal_113d9202854bf9259be13582b3c25a77d712fd78e6b0da4f3a7c94d511b45adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113d9202854bf9259be13582b3c25a77d712fd78e6b0da4f3a7c94d511b45adc->enter($__internal_113d9202854bf9259be13582b3c25a77d712fd78e6b0da4f3a7c94d511b45adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_stylesheets"));

        
        $__internal_113d9202854bf9259be13582b3c25a77d712fd78e6b0da4f3a7c94d511b45adc->leave($__internal_113d9202854bf9259be13582b3c25a77d712fd78e6b0da4f3a7c94d511b45adc_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_039d431c793afbe30ae0521019bc24f33ace53133327bff0dd059e3e3a501f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039d431c793afbe30ae0521019bc24f33ace53133327bff0dd059e3e3a501f11->enter($__internal_039d431c793afbe30ae0521019bc24f33ace53133327bff0dd059e3e3a501f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/css/bootstrap.min.css"), "html", null, true);
        echo "\"  type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/css/bootstrap-datepicker.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/css/forms.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/css/jquery.dataTables_themeroller.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/css/jquery-ui.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/css/mweb.css"), "html", null, true);
        echo "\" type=\"text/css\" />



    ";
        
        $__internal_039d431c793afbe30ae0521019bc24f33ace53133327bff0dd059e3e3a501f11->leave($__internal_039d431c793afbe30ae0521019bc24f33ace53133327bff0dd059e3e3a501f11_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_1210f3f718b51dbaf6094cc1b33499655c4f4ca7b16474536f52a5543a2652fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1210f3f718b51dbaf6094cc1b33499655c4f4ca7b16474536f52a5543a2652fc->enter($__internal_1210f3f718b51dbaf6094cc1b33499655c4f4ca7b16474536f52a5543a2652fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "    <body>
        ";
        // line 34
        $this->displayBlock('container', $context, $blocks);
        // line 44
        echo "
    ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('modal', $context, $blocks);
        // line 48
        echo "
";
        // line 50
        echo "<div id=\"modal-container\"></div>

<div id=\"loading-wrap\">
    <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/img/loader.gif"), "html", null, true);
        echo "\" alt=\"loader\" />
</div>

";
        // line 56
        $this->displayBlock('js', $context, $blocks);
        // line 74
        echo "    ";
        $this->displayBlock('lexik_javascript_footer', $context, $blocks);
        // line 75
        echo "
</body>

";
        
        $__internal_1210f3f718b51dbaf6094cc1b33499655c4f4ca7b16474536f52a5543a2652fc->leave($__internal_1210f3f718b51dbaf6094cc1b33499655c4f4ca7b16474536f52a5543a2652fc_prof);

    }

    // line 34
    public function block_container($context, array $blocks = array())
    {
        $__internal_adb119173f8f29279080c8bcba1837961108855e0124e2a885c12fa7a65470ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb119173f8f29279080c8bcba1837961108855e0124e2a885c12fa7a65470ee->enter($__internal_adb119173f8f29279080c8bcba1837961108855e0124e2a885c12fa7a65470ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 35
        echo "            <div class=\"container-fluid\">
                <h1>";
        // line 36
        $this->displayBlock('pageH1', $context, $blocks);
        echo "<span class=\"pink\">.</span> </h1>
                ";
        // line 37
        $this->displayBlock('admin_container', $context, $blocks);
        // line 40
        echo "                ";
        $this->displayBlock('lexik_content', $context, $blocks);
        // line 41
        echo "                ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 42
        echo "            </div>
        ";
        
        $__internal_adb119173f8f29279080c8bcba1837961108855e0124e2a885c12fa7a65470ee->leave($__internal_adb119173f8f29279080c8bcba1837961108855e0124e2a885c12fa7a65470ee_prof);

    }

    // line 36
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_4a85c9f35049a7bad2c905bdf1fe3cb62b696ec1f2be1927e8dacc40d20f7b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a85c9f35049a7bad2c905bdf1fe3cb62b696ec1f2be1927e8dacc40d20f7b5c->enter($__internal_4a85c9f35049a7bad2c905bdf1fe3cb62b696ec1f2be1927e8dacc40d20f7b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        
        $__internal_4a85c9f35049a7bad2c905bdf1fe3cb62b696ec1f2be1927e8dacc40d20f7b5c->leave($__internal_4a85c9f35049a7bad2c905bdf1fe3cb62b696ec1f2be1927e8dacc40d20f7b5c_prof);

    }

    // line 37
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_6776c8404d4d28ec6ed2c44bb6d55b1c1ec025fb9402477df5fa46c96ae149e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6776c8404d4d28ec6ed2c44bb6d55b1c1ec025fb9402477df5fa46c96ae149e5->enter($__internal_6776c8404d4d28ec6ed2c44bb6d55b1c1ec025fb9402477df5fa46c96ae149e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        // line 38
        echo "
                ";
        
        $__internal_6776c8404d4d28ec6ed2c44bb6d55b1c1ec025fb9402477df5fa46c96ae149e5->leave($__internal_6776c8404d4d28ec6ed2c44bb6d55b1c1ec025fb9402477df5fa46c96ae149e5_prof);

    }

    // line 40
    public function block_lexik_content($context, array $blocks = array())
    {
        $__internal_fcc872a50553c1e74b7fb5c5c2edc19eb91e6538ec81ae8a06dfa367e6af5390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc872a50553c1e74b7fb5c5c2edc19eb91e6538ec81ae8a06dfa367e6af5390->enter($__internal_fcc872a50553c1e74b7fb5c5c2edc19eb91e6538ec81ae8a06dfa367e6af5390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_content"));

        
        $__internal_fcc872a50553c1e74b7fb5c5c2edc19eb91e6538ec81ae8a06dfa367e6af5390->leave($__internal_fcc872a50553c1e74b7fb5c5c2edc19eb91e6538ec81ae8a06dfa367e6af5390_prof);

    }

    // line 41
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a489827c96de34818e9448da480a3098fb446a6867935bf0f582bcc6b6cae8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a489827c96de34818e9448da480a3098fb446a6867935bf0f582bcc6b6cae8b->enter($__internal_0a489827c96de34818e9448da480a3098fb446a6867935bf0f582bcc6b6cae8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_0a489827c96de34818e9448da480a3098fb446a6867935bf0f582bcc6b6cae8b->leave($__internal_0a489827c96de34818e9448da480a3098fb446a6867935bf0f582bcc6b6cae8b_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_98f919cbe58d1862e587fe5b387114f96627172e0752cf41f4b7d0f19c370872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f919cbe58d1862e587fe5b387114f96627172e0752cf41f4b7d0f19c370872->enter($__internal_98f919cbe58d1862e587fe5b387114f96627172e0752cf41f4b7d0f19c370872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_98f919cbe58d1862e587fe5b387114f96627172e0752cf41f4b7d0f19c370872->leave($__internal_98f919cbe58d1862e587fe5b387114f96627172e0752cf41f4b7d0f19c370872_prof);

    }

    // line 47
    public function block_modal($context, array $blocks = array())
    {
        $__internal_b17a585d1bd71327c7a8514ac30fbf50845505708f93848f91b5cb1361ec0e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17a585d1bd71327c7a8514ac30fbf50845505708f93848f91b5cb1361ec0e26->enter($__internal_b17a585d1bd71327c7a8514ac30fbf50845505708f93848f91b5cb1361ec0e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_b17a585d1bd71327c7a8514ac30fbf50845505708f93848f91b5cb1361ec0e26->leave($__internal_b17a585d1bd71327c7a8514ac30fbf50845505708f93848f91b5cb1361ec0e26_prof);

    }

    // line 56
    public function block_js($context, array $blocks = array())
    {
        $__internal_1ced34a18bd2e3d7ea40730dfe526a1fe4c63eb9fd4c3efede838e628d4b631a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ced34a18bd2e3d7ea40730dfe526a1fe4c63eb9fd4c3efede838e628d4b631a->enter($__internal_1ced34a18bd2e3d7ea40730dfe526a1fe4c63eb9fd4c3efede838e628d4b631a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 57
        echo "    <script  type=\"text/javascript\">
            var DOMAIN = \" ";
        // line 58
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "\";
    </script>

    <script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/js/plugin/a_jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/js/plugin/a_mw-library.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/js/plugin/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/js/plugin/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/js/plugin/jquery.mjs.nestedSortable.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/js/plugin/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/js/plugin/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 69
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/js/script/list.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/js/script/script.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_1ced34a18bd2e3d7ea40730dfe526a1fe4c63eb9fd4c3efede838e628d4b631a->leave($__internal_1ced34a18bd2e3d7ea40730dfe526a1fe4c63eb9fd4c3efede838e628d4b631a_prof);

    }

    // line 74
    public function block_lexik_javascript_footer($context, array $blocks = array())
    {
        $__internal_3bd90ff6c0b37859eaf04c224343551edc1b33dde9f12c4bf1731880b65fee05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd90ff6c0b37859eaf04c224343551edc1b33dde9f12c4bf1731880b65fee05->enter($__internal_3bd90ff6c0b37859eaf04c224343551edc1b33dde9f12c4bf1731880b65fee05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_javascript_footer"));

        
        $__internal_3bd90ff6c0b37859eaf04c224343551edc1b33dde9f12c4bf1731880b65fee05->leave($__internal_3bd90ff6c0b37859eaf04c224343551edc1b33dde9f12c4bf1731880b65fee05_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 74,  382 => 71,  378 => 70,  375 => 69,  371 => 67,  367 => 66,  363 => 65,  359 => 64,  355 => 63,  351 => 62,  347 => 61,  341 => 58,  338 => 57,  332 => 56,  321 => 47,  310 => 45,  299 => 41,  288 => 40,  280 => 38,  274 => 37,  263 => 36,  255 => 42,  252 => 41,  249 => 40,  247 => 37,  243 => 36,  240 => 35,  234 => 34,  224 => 75,  221 => 74,  219 => 56,  213 => 53,  208 => 50,  205 => 48,  203 => 47,  200 => 46,  198 => 45,  195 => 44,  193 => 34,  190 => 33,  184 => 32,  172 => 23,  168 => 22,  164 => 21,  160 => 20,  156 => 19,  152 => 18,  148 => 17,  145 => 16,  139 => 15,  128 => 14,  109 => 9,  106 => 8,  100 => 7,  88 => 5,  78 => 27,  75 => 15,  73 => 14,  68 => 12,  65 => 11,  63 => 7,  58 => 5,  55 => 4,  49 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MwebAdminBundle::base.html.twig\" %}

{% block head %}

    <title>{% block headTitle %}{{ 'admin.title'|trans }}{% endblock %}</title>

    {% block meta %}
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"description\" content=\"{% block metaDescription %}{% endblock metaDescription %}\" />
    {% endblock %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('files/image/favicon.png') }}\" />

    {% block lexik_stylesheets %}{% endblock %}
    {% block stylesheets %}

        <link rel=\"stylesheet\" href=\"{{ asset('bundles/mwebadmin/css/bootstrap.min.css') }}\"  type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/mwebadmin/css/bootstrap-datepicker.css') }}\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/mwebadmin/css/forms.css') }}\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/mwebadmin/css/jquery.dataTables.min.css') }}\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/mwebadmin/css/jquery.dataTables_themeroller.css') }}\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/mwebadmin/css/jquery-ui.min.css') }}\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/mwebadmin/css/mweb.css') }}\" type=\"text/css\" />



    {% endblock %}        


{% endblock %}        

{% block body %}
    <body>
        {% block container %}
            <div class=\"container-fluid\">
                <h1>{%block pageH1 %}{%endblock%}<span class=\"pink\">.</span> </h1>
                {% block admin_container %}

                {% endblock %}
                {% block lexik_content %}{% endblock %}
                {% block fos_user_content %}{% endblock %}
            </div>
        {% endblock %}

    {% block footer %}{% endblock %}

{% block modal %}{% endblock %}

{# Container des modal chargé en ajax #}
<div id=\"modal-container\"></div>

<div id=\"loading-wrap\">
    <img src=\"{{ asset('bundles/mwebadmin/img/loader.gif') }}\" alt=\"loader\" />
</div>

{% block js %}
    <script  type=\"text/javascript\">
            var DOMAIN = \" {{  app.request.getSchemeAndHttpHost() ~ asset('') }}\";
    </script>

    <script type=\"text/javascript\" src=\"{{ asset('bundles/mwebadmin/js/plugin/a_jquery-3.1.1.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/mwebadmin/js/plugin/a_mw-library.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/mwebadmin/js/plugin/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/mwebadmin/js/plugin/jquery.dataTables.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/mwebadmin/js/plugin/jquery.mjs.nestedSortable.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/mwebadmin/js/plugin/jquery-ui.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/mwebadmin/js/plugin/tinymce/tinymce.min.js') }}\"></script>
    {#<script type=\"text/javascript\" charset=\"UTF-8\" src=\"{{ asset('bundles/mwebadmin/js/locales/bootstrap-datepicker.'~ app.request.getLocale() ~'.min.js' ) }}\"></script>#}

    <script type=\"text/javascript\" src=\"{{ asset('bundles/mwebadmin/js/script/list.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/mwebadmin/js/script/script.js') }}\"></script>

{% endblock %}
    {% block lexik_javascript_footer %}{% endblock %}

</body>

{% endblock %}", "MwebAdminBundle::layout.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/layout.html.twig");
    }
}
