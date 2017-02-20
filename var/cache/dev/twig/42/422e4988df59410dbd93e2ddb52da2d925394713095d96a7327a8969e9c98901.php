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
        $__internal_45a44a8fffb89df4ab348bbcd01d5b03a41c26472638a567d46e09e544de3f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a44a8fffb89df4ab348bbcd01d5b03a41c26472638a567d46e09e544de3f43->enter($__internal_45a44a8fffb89df4ab348bbcd01d5b03a41c26472638a567d46e09e544de3f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45a44a8fffb89df4ab348bbcd01d5b03a41c26472638a567d46e09e544de3f43->leave($__internal_45a44a8fffb89df4ab348bbcd01d5b03a41c26472638a567d46e09e544de3f43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe99cefdcba470ab4571e7d4193589f6cbeeea0a5621f272b30352761cb0f00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe99cefdcba470ab4571e7d4193589f6cbeeea0a5621f272b30352761cb0f00f->enter($__internal_fe99cefdcba470ab4571e7d4193589f6cbeeea0a5621f272b30352761cb0f00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fe99cefdcba470ab4571e7d4193589f6cbeeea0a5621f272b30352761cb0f00f->leave($__internal_fe99cefdcba470ab4571e7d4193589f6cbeeea0a5621f272b30352761cb0f00f_prof);

    }

    // line 5
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_ba8ab82de7cbced1b3d2d62b2f502232e28ac0ba951d55fbc7995f04b091dfd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8ab82de7cbced1b3d2d62b2f502232e28ac0ba951d55fbc7995f04b091dfd7->enter($__internal_ba8ab82de7cbced1b3d2d62b2f502232e28ac0ba951d55fbc7995f04b091dfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.title"), "html", null, true);
        
        $__internal_ba8ab82de7cbced1b3d2d62b2f502232e28ac0ba951d55fbc7995f04b091dfd7->leave($__internal_ba8ab82de7cbced1b3d2d62b2f502232e28ac0ba951d55fbc7995f04b091dfd7_prof);

    }

    // line 7
    public function block_meta($context, array $blocks = array())
    {
        $__internal_5aceabfd8a65a343afed65f568bc2a2ea0b54702ec3e72f0d03f0fabc04f4b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aceabfd8a65a343afed65f568bc2a2ea0b54702ec3e72f0d03f0fabc04f4b87->enter($__internal_5aceabfd8a65a343afed65f568bc2a2ea0b54702ec3e72f0d03f0fabc04f4b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 8
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('metaDescription', $context, $blocks);
        echo "\" />
    ";
        
        $__internal_5aceabfd8a65a343afed65f568bc2a2ea0b54702ec3e72f0d03f0fabc04f4b87->leave($__internal_5aceabfd8a65a343afed65f568bc2a2ea0b54702ec3e72f0d03f0fabc04f4b87_prof);

    }

    public function block_metaDescription($context, array $blocks = array())
    {
        $__internal_843178acb9b07fe560708973dc1769ace016f1d737d9d685a28a4de0d44206cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843178acb9b07fe560708973dc1769ace016f1d737d9d685a28a4de0d44206cc->enter($__internal_843178acb9b07fe560708973dc1769ace016f1d737d9d685a28a4de0d44206cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metaDescription"));

        
        $__internal_843178acb9b07fe560708973dc1769ace016f1d737d9d685a28a4de0d44206cc->leave($__internal_843178acb9b07fe560708973dc1769ace016f1d737d9d685a28a4de0d44206cc_prof);

    }

    // line 14
    public function block_lexik_stylesheets($context, array $blocks = array())
    {
        $__internal_7ebad869945d39929ee5e84c53965efc0986d689547eebd9440ca619cfedb9ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebad869945d39929ee5e84c53965efc0986d689547eebd9440ca619cfedb9ca->enter($__internal_7ebad869945d39929ee5e84c53965efc0986d689547eebd9440ca619cfedb9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_stylesheets"));

        
        $__internal_7ebad869945d39929ee5e84c53965efc0986d689547eebd9440ca619cfedb9ca->leave($__internal_7ebad869945d39929ee5e84c53965efc0986d689547eebd9440ca619cfedb9ca_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_609d52b039f719686d0b5388bef18236d91a6cb0916d23aaeb8d16e47b9af5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609d52b039f719686d0b5388bef18236d91a6cb0916d23aaeb8d16e47b9af5fe->enter($__internal_609d52b039f719686d0b5388bef18236d91a6cb0916d23aaeb8d16e47b9af5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_609d52b039f719686d0b5388bef18236d91a6cb0916d23aaeb8d16e47b9af5fe->leave($__internal_609d52b039f719686d0b5388bef18236d91a6cb0916d23aaeb8d16e47b9af5fe_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_e443ac361ae48b34491edb0d05edafa07a15a229513eab1f347cebf5c5ddb74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e443ac361ae48b34491edb0d05edafa07a15a229513eab1f347cebf5c5ddb74a->enter($__internal_e443ac361ae48b34491edb0d05edafa07a15a229513eab1f347cebf5c5ddb74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e443ac361ae48b34491edb0d05edafa07a15a229513eab1f347cebf5c5ddb74a->leave($__internal_e443ac361ae48b34491edb0d05edafa07a15a229513eab1f347cebf5c5ddb74a_prof);

    }

    // line 34
    public function block_container($context, array $blocks = array())
    {
        $__internal_3ececb9cefcbc87343d428c7155c56795a385a18e4b6163216643623d0cc63b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ececb9cefcbc87343d428c7155c56795a385a18e4b6163216643623d0cc63b4->enter($__internal_3ececb9cefcbc87343d428c7155c56795a385a18e4b6163216643623d0cc63b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_3ececb9cefcbc87343d428c7155c56795a385a18e4b6163216643623d0cc63b4->leave($__internal_3ececb9cefcbc87343d428c7155c56795a385a18e4b6163216643623d0cc63b4_prof);

    }

    // line 36
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_8a6a4ab64e7ae10088d3710eb52650f81f73dcb160b7430bfb5f31c1bf5faf8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6a4ab64e7ae10088d3710eb52650f81f73dcb160b7430bfb5f31c1bf5faf8f->enter($__internal_8a6a4ab64e7ae10088d3710eb52650f81f73dcb160b7430bfb5f31c1bf5faf8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        
        $__internal_8a6a4ab64e7ae10088d3710eb52650f81f73dcb160b7430bfb5f31c1bf5faf8f->leave($__internal_8a6a4ab64e7ae10088d3710eb52650f81f73dcb160b7430bfb5f31c1bf5faf8f_prof);

    }

    // line 37
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_268b37b637809d3162ad23b2b88c402aa668675a453cdd14fde844219c648312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268b37b637809d3162ad23b2b88c402aa668675a453cdd14fde844219c648312->enter($__internal_268b37b637809d3162ad23b2b88c402aa668675a453cdd14fde844219c648312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        // line 38
        echo "
                ";
        
        $__internal_268b37b637809d3162ad23b2b88c402aa668675a453cdd14fde844219c648312->leave($__internal_268b37b637809d3162ad23b2b88c402aa668675a453cdd14fde844219c648312_prof);

    }

    // line 40
    public function block_lexik_content($context, array $blocks = array())
    {
        $__internal_dde7bd1a72e22f1adb4ca49a74cb35e6e7554291a101aa630179830c2e2c8e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde7bd1a72e22f1adb4ca49a74cb35e6e7554291a101aa630179830c2e2c8e2e->enter($__internal_dde7bd1a72e22f1adb4ca49a74cb35e6e7554291a101aa630179830c2e2c8e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_content"));

        
        $__internal_dde7bd1a72e22f1adb4ca49a74cb35e6e7554291a101aa630179830c2e2c8e2e->leave($__internal_dde7bd1a72e22f1adb4ca49a74cb35e6e7554291a101aa630179830c2e2c8e2e_prof);

    }

    // line 41
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52fd62679fc9fd6ff4d3c7fc2f7cb71f4982764022ed027b08173fd237fd16e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52fd62679fc9fd6ff4d3c7fc2f7cb71f4982764022ed027b08173fd237fd16e9->enter($__internal_52fd62679fc9fd6ff4d3c7fc2f7cb71f4982764022ed027b08173fd237fd16e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_52fd62679fc9fd6ff4d3c7fc2f7cb71f4982764022ed027b08173fd237fd16e9->leave($__internal_52fd62679fc9fd6ff4d3c7fc2f7cb71f4982764022ed027b08173fd237fd16e9_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_deeb6a9f6d6664c0c3ee140cf84295b9043218b082e6c62317ec51a2f58b213a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deeb6a9f6d6664c0c3ee140cf84295b9043218b082e6c62317ec51a2f58b213a->enter($__internal_deeb6a9f6d6664c0c3ee140cf84295b9043218b082e6c62317ec51a2f58b213a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_deeb6a9f6d6664c0c3ee140cf84295b9043218b082e6c62317ec51a2f58b213a->leave($__internal_deeb6a9f6d6664c0c3ee140cf84295b9043218b082e6c62317ec51a2f58b213a_prof);

    }

    // line 47
    public function block_modal($context, array $blocks = array())
    {
        $__internal_d9ead81ec14ccd8cb3750ee71224fb9a9bb15e2296c1923c9ab20d575f720f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ead81ec14ccd8cb3750ee71224fb9a9bb15e2296c1923c9ab20d575f720f98->enter($__internal_d9ead81ec14ccd8cb3750ee71224fb9a9bb15e2296c1923c9ab20d575f720f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_d9ead81ec14ccd8cb3750ee71224fb9a9bb15e2296c1923c9ab20d575f720f98->leave($__internal_d9ead81ec14ccd8cb3750ee71224fb9a9bb15e2296c1923c9ab20d575f720f98_prof);

    }

    // line 56
    public function block_js($context, array $blocks = array())
    {
        $__internal_e0e1a663b419cbb3c6f22cf217cbd873873d9895399086899ec0f4cf5ec5e67e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e1a663b419cbb3c6f22cf217cbd873873d9895399086899ec0f4cf5ec5e67e->enter($__internal_e0e1a663b419cbb3c6f22cf217cbd873873d9895399086899ec0f4cf5ec5e67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_e0e1a663b419cbb3c6f22cf217cbd873873d9895399086899ec0f4cf5ec5e67e->leave($__internal_e0e1a663b419cbb3c6f22cf217cbd873873d9895399086899ec0f4cf5ec5e67e_prof);

    }

    // line 74
    public function block_lexik_javascript_footer($context, array $blocks = array())
    {
        $__internal_d531a5fc25b479c3c0cd013680af3d00ebd911abcd226944eefcd068a0b3d5bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d531a5fc25b479c3c0cd013680af3d00ebd911abcd226944eefcd068a0b3d5bf->enter($__internal_d531a5fc25b479c3c0cd013680af3d00ebd911abcd226944eefcd068a0b3d5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_javascript_footer"));

        
        $__internal_d531a5fc25b479c3c0cd013680af3d00ebd911abcd226944eefcd068a0b3d5bf->leave($__internal_d531a5fc25b479c3c0cd013680af3d00ebd911abcd226944eefcd068a0b3d5bf_prof);

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
