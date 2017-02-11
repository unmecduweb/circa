<?php

/* MwebAdminBundle::layout.html.twig */
class __TwigTemplate_09514ac56a5f1dd524c4c374df5c21380cffa077893371cf529926149761f06e extends Twig_Template
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
        $__internal_b42334b141d0f77bf3d42964330738c2c1a659616d6aadce6711b849bdeee48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42334b141d0f77bf3d42964330738c2c1a659616d6aadce6711b849bdeee48d->enter($__internal_b42334b141d0f77bf3d42964330738c2c1a659616d6aadce6711b849bdeee48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b42334b141d0f77bf3d42964330738c2c1a659616d6aadce6711b849bdeee48d->leave($__internal_b42334b141d0f77bf3d42964330738c2c1a659616d6aadce6711b849bdeee48d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_45dddec49ae1229f58e24c3d5f646086e70443e76c92b332d611e2da9ac75c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45dddec49ae1229f58e24c3d5f646086e70443e76c92b332d611e2da9ac75c06->enter($__internal_45dddec49ae1229f58e24c3d5f646086e70443e76c92b332d611e2da9ac75c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_45dddec49ae1229f58e24c3d5f646086e70443e76c92b332d611e2da9ac75c06->leave($__internal_45dddec49ae1229f58e24c3d5f646086e70443e76c92b332d611e2da9ac75c06_prof);

    }

    // line 5
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_6511181139241410535069ca19937da38b72d31aff85fff763e4a74721d0a7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6511181139241410535069ca19937da38b72d31aff85fff763e4a74721d0a7e8->enter($__internal_6511181139241410535069ca19937da38b72d31aff85fff763e4a74721d0a7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.title"), "html", null, true);
        
        $__internal_6511181139241410535069ca19937da38b72d31aff85fff763e4a74721d0a7e8->leave($__internal_6511181139241410535069ca19937da38b72d31aff85fff763e4a74721d0a7e8_prof);

    }

    // line 7
    public function block_meta($context, array $blocks = array())
    {
        $__internal_7ddfd894e5e34094c43b0f616373c24ca7c395948e28de57fb7fd8e110f8e5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ddfd894e5e34094c43b0f616373c24ca7c395948e28de57fb7fd8e110f8e5e5->enter($__internal_7ddfd894e5e34094c43b0f616373c24ca7c395948e28de57fb7fd8e110f8e5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 8
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('metaDescription', $context, $blocks);
        echo "\" />
    ";
        
        $__internal_7ddfd894e5e34094c43b0f616373c24ca7c395948e28de57fb7fd8e110f8e5e5->leave($__internal_7ddfd894e5e34094c43b0f616373c24ca7c395948e28de57fb7fd8e110f8e5e5_prof);

    }

    public function block_metaDescription($context, array $blocks = array())
    {
        $__internal_904e282712c0359df390fb2ee3aa62078fadb444eccbe3ff5a0b2b5ed6114e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904e282712c0359df390fb2ee3aa62078fadb444eccbe3ff5a0b2b5ed6114e53->enter($__internal_904e282712c0359df390fb2ee3aa62078fadb444eccbe3ff5a0b2b5ed6114e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metaDescription"));

        
        $__internal_904e282712c0359df390fb2ee3aa62078fadb444eccbe3ff5a0b2b5ed6114e53->leave($__internal_904e282712c0359df390fb2ee3aa62078fadb444eccbe3ff5a0b2b5ed6114e53_prof);

    }

    // line 14
    public function block_lexik_stylesheets($context, array $blocks = array())
    {
        $__internal_4a90cf443d4bac0f0010aff309a849f080fb5097dc9d17a367baa8b41adb90e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a90cf443d4bac0f0010aff309a849f080fb5097dc9d17a367baa8b41adb90e3->enter($__internal_4a90cf443d4bac0f0010aff309a849f080fb5097dc9d17a367baa8b41adb90e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_stylesheets"));

        
        $__internal_4a90cf443d4bac0f0010aff309a849f080fb5097dc9d17a367baa8b41adb90e3->leave($__internal_4a90cf443d4bac0f0010aff309a849f080fb5097dc9d17a367baa8b41adb90e3_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_866a2db474cb254ecf6dc82bbc7b348a23432bd0486c3af10fc2e00adf168026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866a2db474cb254ecf6dc82bbc7b348a23432bd0486c3af10fc2e00adf168026->enter($__internal_866a2db474cb254ecf6dc82bbc7b348a23432bd0486c3af10fc2e00adf168026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_866a2db474cb254ecf6dc82bbc7b348a23432bd0486c3af10fc2e00adf168026->leave($__internal_866a2db474cb254ecf6dc82bbc7b348a23432bd0486c3af10fc2e00adf168026_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_9678d4f1fb6a9404e7b1d680db478ad4bbdd92ec2bb535e381b3d1eafc4ae93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9678d4f1fb6a9404e7b1d680db478ad4bbdd92ec2bb535e381b3d1eafc4ae93a->enter($__internal_9678d4f1fb6a9404e7b1d680db478ad4bbdd92ec2bb535e381b3d1eafc4ae93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9678d4f1fb6a9404e7b1d680db478ad4bbdd92ec2bb535e381b3d1eafc4ae93a->leave($__internal_9678d4f1fb6a9404e7b1d680db478ad4bbdd92ec2bb535e381b3d1eafc4ae93a_prof);

    }

    // line 34
    public function block_container($context, array $blocks = array())
    {
        $__internal_12a1ed37ddb54a97cd07e010bde5fdc57bd8c415c0d9144c0a88a058b636479b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a1ed37ddb54a97cd07e010bde5fdc57bd8c415c0d9144c0a88a058b636479b->enter($__internal_12a1ed37ddb54a97cd07e010bde5fdc57bd8c415c0d9144c0a88a058b636479b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_12a1ed37ddb54a97cd07e010bde5fdc57bd8c415c0d9144c0a88a058b636479b->leave($__internal_12a1ed37ddb54a97cd07e010bde5fdc57bd8c415c0d9144c0a88a058b636479b_prof);

    }

    // line 36
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_c30717ecb5ec021f854eb4e7702f9d869f9abc5686ac3d1cb6b7a8064efba258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30717ecb5ec021f854eb4e7702f9d869f9abc5686ac3d1cb6b7a8064efba258->enter($__internal_c30717ecb5ec021f854eb4e7702f9d869f9abc5686ac3d1cb6b7a8064efba258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        
        $__internal_c30717ecb5ec021f854eb4e7702f9d869f9abc5686ac3d1cb6b7a8064efba258->leave($__internal_c30717ecb5ec021f854eb4e7702f9d869f9abc5686ac3d1cb6b7a8064efba258_prof);

    }

    // line 37
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_46b88f28140ab550f239f78ecbd6969c23a36d8ed703db0025f5c3d180120cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b88f28140ab550f239f78ecbd6969c23a36d8ed703db0025f5c3d180120cf1->enter($__internal_46b88f28140ab550f239f78ecbd6969c23a36d8ed703db0025f5c3d180120cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        // line 38
        echo "
                ";
        
        $__internal_46b88f28140ab550f239f78ecbd6969c23a36d8ed703db0025f5c3d180120cf1->leave($__internal_46b88f28140ab550f239f78ecbd6969c23a36d8ed703db0025f5c3d180120cf1_prof);

    }

    // line 40
    public function block_lexik_content($context, array $blocks = array())
    {
        $__internal_1a08bb848f8555b5defa86b34d25528d2d7fa41801f6326e6f5436614773b1b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a08bb848f8555b5defa86b34d25528d2d7fa41801f6326e6f5436614773b1b4->enter($__internal_1a08bb848f8555b5defa86b34d25528d2d7fa41801f6326e6f5436614773b1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_content"));

        
        $__internal_1a08bb848f8555b5defa86b34d25528d2d7fa41801f6326e6f5436614773b1b4->leave($__internal_1a08bb848f8555b5defa86b34d25528d2d7fa41801f6326e6f5436614773b1b4_prof);

    }

    // line 41
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a98ccaa146c008214929a6ec44959fca0b133717ec612170775e17aa9a7b8225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98ccaa146c008214929a6ec44959fca0b133717ec612170775e17aa9a7b8225->enter($__internal_a98ccaa146c008214929a6ec44959fca0b133717ec612170775e17aa9a7b8225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_a98ccaa146c008214929a6ec44959fca0b133717ec612170775e17aa9a7b8225->leave($__internal_a98ccaa146c008214929a6ec44959fca0b133717ec612170775e17aa9a7b8225_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_fbbaa6542d3784741ba345cab637e5e1fb0fccb95c29484d11c642c842a64787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbbaa6542d3784741ba345cab637e5e1fb0fccb95c29484d11c642c842a64787->enter($__internal_fbbaa6542d3784741ba345cab637e5e1fb0fccb95c29484d11c642c842a64787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_fbbaa6542d3784741ba345cab637e5e1fb0fccb95c29484d11c642c842a64787->leave($__internal_fbbaa6542d3784741ba345cab637e5e1fb0fccb95c29484d11c642c842a64787_prof);

    }

    // line 47
    public function block_modal($context, array $blocks = array())
    {
        $__internal_b81b46fc9d4d67d3267b32fa6dea9bf3cc8262928405539ca82dcee6b534d011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81b46fc9d4d67d3267b32fa6dea9bf3cc8262928405539ca82dcee6b534d011->enter($__internal_b81b46fc9d4d67d3267b32fa6dea9bf3cc8262928405539ca82dcee6b534d011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_b81b46fc9d4d67d3267b32fa6dea9bf3cc8262928405539ca82dcee6b534d011->leave($__internal_b81b46fc9d4d67d3267b32fa6dea9bf3cc8262928405539ca82dcee6b534d011_prof);

    }

    // line 56
    public function block_js($context, array $blocks = array())
    {
        $__internal_81114c98893cee9e3c590d07e59faa8f1c265824887a0872fc8327a869b26419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81114c98893cee9e3c590d07e59faa8f1c265824887a0872fc8327a869b26419->enter($__internal_81114c98893cee9e3c590d07e59faa8f1c265824887a0872fc8327a869b26419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_81114c98893cee9e3c590d07e59faa8f1c265824887a0872fc8327a869b26419->leave($__internal_81114c98893cee9e3c590d07e59faa8f1c265824887a0872fc8327a869b26419_prof);

    }

    // line 74
    public function block_lexik_javascript_footer($context, array $blocks = array())
    {
        $__internal_56998b49e0a3da5b9ecbbecad56197acefce61b4dd6b962088d5c8047f26e73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56998b49e0a3da5b9ecbbecad56197acefce61b4dd6b962088d5c8047f26e73e->enter($__internal_56998b49e0a3da5b9ecbbecad56197acefce61b4dd6b962088d5c8047f26e73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_javascript_footer"));

        
        $__internal_56998b49e0a3da5b9ecbbecad56197acefce61b4dd6b962088d5c8047f26e73e->leave($__internal_56998b49e0a3da5b9ecbbecad56197acefce61b4dd6b962088d5c8047f26e73e_prof);

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
