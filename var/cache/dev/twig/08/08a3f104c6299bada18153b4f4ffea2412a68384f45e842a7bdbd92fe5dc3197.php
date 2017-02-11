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
        $__internal_d904d7c9d40df358613b651bac77877e638bec2cb0ef428d6827fe994769e598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d904d7c9d40df358613b651bac77877e638bec2cb0ef428d6827fe994769e598->enter($__internal_d904d7c9d40df358613b651bac77877e638bec2cb0ef428d6827fe994769e598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d904d7c9d40df358613b651bac77877e638bec2cb0ef428d6827fe994769e598->leave($__internal_d904d7c9d40df358613b651bac77877e638bec2cb0ef428d6827fe994769e598_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_29009d548edbdeb8e23da025f30fd192494aa1507319060975b4594924ee37f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29009d548edbdeb8e23da025f30fd192494aa1507319060975b4594924ee37f8->enter($__internal_29009d548edbdeb8e23da025f30fd192494aa1507319060975b4594924ee37f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_29009d548edbdeb8e23da025f30fd192494aa1507319060975b4594924ee37f8->leave($__internal_29009d548edbdeb8e23da025f30fd192494aa1507319060975b4594924ee37f8_prof);

    }

    // line 5
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_7d70540dd376f0dff93aea3af193a3d7370bbe3b65c201d8b8ad87755288c6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d70540dd376f0dff93aea3af193a3d7370bbe3b65c201d8b8ad87755288c6c8->enter($__internal_7d70540dd376f0dff93aea3af193a3d7370bbe3b65c201d8b8ad87755288c6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.title"), "html", null, true);
        
        $__internal_7d70540dd376f0dff93aea3af193a3d7370bbe3b65c201d8b8ad87755288c6c8->leave($__internal_7d70540dd376f0dff93aea3af193a3d7370bbe3b65c201d8b8ad87755288c6c8_prof);

    }

    // line 7
    public function block_meta($context, array $blocks = array())
    {
        $__internal_439f07c9f0176951fe2e7ff60f4e21af22a2978b7ea10ac608e916bb3f81a0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439f07c9f0176951fe2e7ff60f4e21af22a2978b7ea10ac608e916bb3f81a0ca->enter($__internal_439f07c9f0176951fe2e7ff60f4e21af22a2978b7ea10ac608e916bb3f81a0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 8
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('metaDescription', $context, $blocks);
        echo "\" />
    ";
        
        $__internal_439f07c9f0176951fe2e7ff60f4e21af22a2978b7ea10ac608e916bb3f81a0ca->leave($__internal_439f07c9f0176951fe2e7ff60f4e21af22a2978b7ea10ac608e916bb3f81a0ca_prof);

    }

    public function block_metaDescription($context, array $blocks = array())
    {
        $__internal_5efc6960b88d59a93687bb04c65215ed6b6a1d1d6a18e084d29c51ef7edfb34f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efc6960b88d59a93687bb04c65215ed6b6a1d1d6a18e084d29c51ef7edfb34f->enter($__internal_5efc6960b88d59a93687bb04c65215ed6b6a1d1d6a18e084d29c51ef7edfb34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metaDescription"));

        
        $__internal_5efc6960b88d59a93687bb04c65215ed6b6a1d1d6a18e084d29c51ef7edfb34f->leave($__internal_5efc6960b88d59a93687bb04c65215ed6b6a1d1d6a18e084d29c51ef7edfb34f_prof);

    }

    // line 14
    public function block_lexik_stylesheets($context, array $blocks = array())
    {
        $__internal_08488867d03616824bc5e11c7196c45c5751b438690c6fd9cfc79c8b3ada4449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08488867d03616824bc5e11c7196c45c5751b438690c6fd9cfc79c8b3ada4449->enter($__internal_08488867d03616824bc5e11c7196c45c5751b438690c6fd9cfc79c8b3ada4449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_stylesheets"));

        
        $__internal_08488867d03616824bc5e11c7196c45c5751b438690c6fd9cfc79c8b3ada4449->leave($__internal_08488867d03616824bc5e11c7196c45c5751b438690c6fd9cfc79c8b3ada4449_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c9918912f2a5f306a5409c6ed0a9d907c1a56a4bacabc968ed29135edf9b1663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9918912f2a5f306a5409c6ed0a9d907c1a56a4bacabc968ed29135edf9b1663->enter($__internal_c9918912f2a5f306a5409c6ed0a9d907c1a56a4bacabc968ed29135edf9b1663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c9918912f2a5f306a5409c6ed0a9d907c1a56a4bacabc968ed29135edf9b1663->leave($__internal_c9918912f2a5f306a5409c6ed0a9d907c1a56a4bacabc968ed29135edf9b1663_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fb96fc75642f0b2544371886f25371601b9e242dcb757adeea111bc5501a5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb96fc75642f0b2544371886f25371601b9e242dcb757adeea111bc5501a5f4->enter($__internal_8fb96fc75642f0b2544371886f25371601b9e242dcb757adeea111bc5501a5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8fb96fc75642f0b2544371886f25371601b9e242dcb757adeea111bc5501a5f4->leave($__internal_8fb96fc75642f0b2544371886f25371601b9e242dcb757adeea111bc5501a5f4_prof);

    }

    // line 34
    public function block_container($context, array $blocks = array())
    {
        $__internal_26d24d218904c4eff99241eb934a0b8e3c6e08d156e88da4aba598e11871136f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d24d218904c4eff99241eb934a0b8e3c6e08d156e88da4aba598e11871136f->enter($__internal_26d24d218904c4eff99241eb934a0b8e3c6e08d156e88da4aba598e11871136f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_26d24d218904c4eff99241eb934a0b8e3c6e08d156e88da4aba598e11871136f->leave($__internal_26d24d218904c4eff99241eb934a0b8e3c6e08d156e88da4aba598e11871136f_prof);

    }

    // line 36
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_cd9c3ec3b0710e98121ec249e481a37904af2de9697bf9b6e5220b7447cec0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9c3ec3b0710e98121ec249e481a37904af2de9697bf9b6e5220b7447cec0e4->enter($__internal_cd9c3ec3b0710e98121ec249e481a37904af2de9697bf9b6e5220b7447cec0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        
        $__internal_cd9c3ec3b0710e98121ec249e481a37904af2de9697bf9b6e5220b7447cec0e4->leave($__internal_cd9c3ec3b0710e98121ec249e481a37904af2de9697bf9b6e5220b7447cec0e4_prof);

    }

    // line 37
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_b5b37e2f0a3f13419eea5a4232949b4b0593c1fb79f2a8d7d08fd43453b218b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b37e2f0a3f13419eea5a4232949b4b0593c1fb79f2a8d7d08fd43453b218b1->enter($__internal_b5b37e2f0a3f13419eea5a4232949b4b0593c1fb79f2a8d7d08fd43453b218b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        // line 38
        echo "
                ";
        
        $__internal_b5b37e2f0a3f13419eea5a4232949b4b0593c1fb79f2a8d7d08fd43453b218b1->leave($__internal_b5b37e2f0a3f13419eea5a4232949b4b0593c1fb79f2a8d7d08fd43453b218b1_prof);

    }

    // line 40
    public function block_lexik_content($context, array $blocks = array())
    {
        $__internal_0cadafb45dc34b273caf74f3f52ac7ec5f06ce84c57cfd648ba52179bf5e7923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cadafb45dc34b273caf74f3f52ac7ec5f06ce84c57cfd648ba52179bf5e7923->enter($__internal_0cadafb45dc34b273caf74f3f52ac7ec5f06ce84c57cfd648ba52179bf5e7923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_content"));

        
        $__internal_0cadafb45dc34b273caf74f3f52ac7ec5f06ce84c57cfd648ba52179bf5e7923->leave($__internal_0cadafb45dc34b273caf74f3f52ac7ec5f06ce84c57cfd648ba52179bf5e7923_prof);

    }

    // line 41
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc11930974a6b63e9baed5477e053a326dd42004a25dc55a6bafdc4bce5fc6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc11930974a6b63e9baed5477e053a326dd42004a25dc55a6bafdc4bce5fc6fa->enter($__internal_bc11930974a6b63e9baed5477e053a326dd42004a25dc55a6bafdc4bce5fc6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_bc11930974a6b63e9baed5477e053a326dd42004a25dc55a6bafdc4bce5fc6fa->leave($__internal_bc11930974a6b63e9baed5477e053a326dd42004a25dc55a6bafdc4bce5fc6fa_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2aaabd15d5a6e4c53d40ea9b796c13f8f536cde1b62d02f20531b7ecc1716cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aaabd15d5a6e4c53d40ea9b796c13f8f536cde1b62d02f20531b7ecc1716cb8->enter($__internal_2aaabd15d5a6e4c53d40ea9b796c13f8f536cde1b62d02f20531b7ecc1716cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_2aaabd15d5a6e4c53d40ea9b796c13f8f536cde1b62d02f20531b7ecc1716cb8->leave($__internal_2aaabd15d5a6e4c53d40ea9b796c13f8f536cde1b62d02f20531b7ecc1716cb8_prof);

    }

    // line 47
    public function block_modal($context, array $blocks = array())
    {
        $__internal_f9f205bca97a6ecb2eb53865a22ec746d06859740c600f2e08fb6a320219d33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f205bca97a6ecb2eb53865a22ec746d06859740c600f2e08fb6a320219d33c->enter($__internal_f9f205bca97a6ecb2eb53865a22ec746d06859740c600f2e08fb6a320219d33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_f9f205bca97a6ecb2eb53865a22ec746d06859740c600f2e08fb6a320219d33c->leave($__internal_f9f205bca97a6ecb2eb53865a22ec746d06859740c600f2e08fb6a320219d33c_prof);

    }

    // line 56
    public function block_js($context, array $blocks = array())
    {
        $__internal_d7672346c0f340438b4c0dc31ce8604ca482570b6bc5bccdd5ec562ab4446549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7672346c0f340438b4c0dc31ce8604ca482570b6bc5bccdd5ec562ab4446549->enter($__internal_d7672346c0f340438b4c0dc31ce8604ca482570b6bc5bccdd5ec562ab4446549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_d7672346c0f340438b4c0dc31ce8604ca482570b6bc5bccdd5ec562ab4446549->leave($__internal_d7672346c0f340438b4c0dc31ce8604ca482570b6bc5bccdd5ec562ab4446549_prof);

    }

    // line 74
    public function block_lexik_javascript_footer($context, array $blocks = array())
    {
        $__internal_26f1c96bc83dbe42f688d73f4dd266b8029c9cb18e2d585bc315e63427bfe452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f1c96bc83dbe42f688d73f4dd266b8029c9cb18e2d585bc315e63427bfe452->enter($__internal_26f1c96bc83dbe42f688d73f4dd266b8029c9cb18e2d585bc315e63427bfe452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_javascript_footer"));

        
        $__internal_26f1c96bc83dbe42f688d73f4dd266b8029c9cb18e2d585bc315e63427bfe452->leave($__internal_26f1c96bc83dbe42f688d73f4dd266b8029c9cb18e2d585bc315e63427bfe452_prof);

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
