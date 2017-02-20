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
        $__internal_b9697ae72017da4d1304302d9fc4a6d0075251c14abcb850fcbcc8ad44d5bf27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9697ae72017da4d1304302d9fc4a6d0075251c14abcb850fcbcc8ad44d5bf27->enter($__internal_b9697ae72017da4d1304302d9fc4a6d0075251c14abcb850fcbcc8ad44d5bf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9697ae72017da4d1304302d9fc4a6d0075251c14abcb850fcbcc8ad44d5bf27->leave($__internal_b9697ae72017da4d1304302d9fc4a6d0075251c14abcb850fcbcc8ad44d5bf27_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e8e9c710a80211a32dc7839c843f315ec7f1a21a73cb641d7130c34b0251d2ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e9c710a80211a32dc7839c843f315ec7f1a21a73cb641d7130c34b0251d2ad->enter($__internal_e8e9c710a80211a32dc7839c843f315ec7f1a21a73cb641d7130c34b0251d2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e8e9c710a80211a32dc7839c843f315ec7f1a21a73cb641d7130c34b0251d2ad->leave($__internal_e8e9c710a80211a32dc7839c843f315ec7f1a21a73cb641d7130c34b0251d2ad_prof);

    }

    // line 5
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_4369f60f14ef8b4b0c6b5946f2096fe8008afa345d490cda9735c87a31b43644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4369f60f14ef8b4b0c6b5946f2096fe8008afa345d490cda9735c87a31b43644->enter($__internal_4369f60f14ef8b4b0c6b5946f2096fe8008afa345d490cda9735c87a31b43644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.title"), "html", null, true);
        
        $__internal_4369f60f14ef8b4b0c6b5946f2096fe8008afa345d490cda9735c87a31b43644->leave($__internal_4369f60f14ef8b4b0c6b5946f2096fe8008afa345d490cda9735c87a31b43644_prof);

    }

    // line 7
    public function block_meta($context, array $blocks = array())
    {
        $__internal_f7e417be49341011c0da5114d6a60bb7151da4fcd674b8c7592ff86e9891f052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e417be49341011c0da5114d6a60bb7151da4fcd674b8c7592ff86e9891f052->enter($__internal_f7e417be49341011c0da5114d6a60bb7151da4fcd674b8c7592ff86e9891f052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 8
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('metaDescription', $context, $blocks);
        echo "\" />
    ";
        
        $__internal_f7e417be49341011c0da5114d6a60bb7151da4fcd674b8c7592ff86e9891f052->leave($__internal_f7e417be49341011c0da5114d6a60bb7151da4fcd674b8c7592ff86e9891f052_prof);

    }

    public function block_metaDescription($context, array $blocks = array())
    {
        $__internal_214185a8e3aec5384668247202e7b6115d1b1329a348fc6c127b5f1cd9ee69da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214185a8e3aec5384668247202e7b6115d1b1329a348fc6c127b5f1cd9ee69da->enter($__internal_214185a8e3aec5384668247202e7b6115d1b1329a348fc6c127b5f1cd9ee69da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metaDescription"));

        
        $__internal_214185a8e3aec5384668247202e7b6115d1b1329a348fc6c127b5f1cd9ee69da->leave($__internal_214185a8e3aec5384668247202e7b6115d1b1329a348fc6c127b5f1cd9ee69da_prof);

    }

    // line 14
    public function block_lexik_stylesheets($context, array $blocks = array())
    {
        $__internal_203b41aae25e5d252e6f769abe48ad9614e4388dd557f8f51102d3cbe6e6814c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203b41aae25e5d252e6f769abe48ad9614e4388dd557f8f51102d3cbe6e6814c->enter($__internal_203b41aae25e5d252e6f769abe48ad9614e4388dd557f8f51102d3cbe6e6814c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_stylesheets"));

        
        $__internal_203b41aae25e5d252e6f769abe48ad9614e4388dd557f8f51102d3cbe6e6814c->leave($__internal_203b41aae25e5d252e6f769abe48ad9614e4388dd557f8f51102d3cbe6e6814c_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_758851963bec4b114c44c3e5d838e9ac62bf25264dcdab38010d140d80455c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758851963bec4b114c44c3e5d838e9ac62bf25264dcdab38010d140d80455c51->enter($__internal_758851963bec4b114c44c3e5d838e9ac62bf25264dcdab38010d140d80455c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_758851963bec4b114c44c3e5d838e9ac62bf25264dcdab38010d140d80455c51->leave($__internal_758851963bec4b114c44c3e5d838e9ac62bf25264dcdab38010d140d80455c51_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_25bf7a489e01253fb4c9c8f47169020638f9a95c504c8cf79cfbb8bfd38dcd4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25bf7a489e01253fb4c9c8f47169020638f9a95c504c8cf79cfbb8bfd38dcd4e->enter($__internal_25bf7a489e01253fb4c9c8f47169020638f9a95c504c8cf79cfbb8bfd38dcd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_25bf7a489e01253fb4c9c8f47169020638f9a95c504c8cf79cfbb8bfd38dcd4e->leave($__internal_25bf7a489e01253fb4c9c8f47169020638f9a95c504c8cf79cfbb8bfd38dcd4e_prof);

    }

    // line 34
    public function block_container($context, array $blocks = array())
    {
        $__internal_9512a8a78134edca9c725fcf45a893185c1547a8ff0fee0fa36414957468357f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9512a8a78134edca9c725fcf45a893185c1547a8ff0fee0fa36414957468357f->enter($__internal_9512a8a78134edca9c725fcf45a893185c1547a8ff0fee0fa36414957468357f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_9512a8a78134edca9c725fcf45a893185c1547a8ff0fee0fa36414957468357f->leave($__internal_9512a8a78134edca9c725fcf45a893185c1547a8ff0fee0fa36414957468357f_prof);

    }

    // line 36
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_51463c89ba0dde39eb6b09e87f402bf9d8b6c6426fe6a915646f250d2b3e4509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51463c89ba0dde39eb6b09e87f402bf9d8b6c6426fe6a915646f250d2b3e4509->enter($__internal_51463c89ba0dde39eb6b09e87f402bf9d8b6c6426fe6a915646f250d2b3e4509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        
        $__internal_51463c89ba0dde39eb6b09e87f402bf9d8b6c6426fe6a915646f250d2b3e4509->leave($__internal_51463c89ba0dde39eb6b09e87f402bf9d8b6c6426fe6a915646f250d2b3e4509_prof);

    }

    // line 37
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_f6d6594fe03dfae9cde9676fc04dc06f3e9e9117db476cdcfd36aa5ec759bac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d6594fe03dfae9cde9676fc04dc06f3e9e9117db476cdcfd36aa5ec759bac4->enter($__internal_f6d6594fe03dfae9cde9676fc04dc06f3e9e9117db476cdcfd36aa5ec759bac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        // line 38
        echo "
                ";
        
        $__internal_f6d6594fe03dfae9cde9676fc04dc06f3e9e9117db476cdcfd36aa5ec759bac4->leave($__internal_f6d6594fe03dfae9cde9676fc04dc06f3e9e9117db476cdcfd36aa5ec759bac4_prof);

    }

    // line 40
    public function block_lexik_content($context, array $blocks = array())
    {
        $__internal_b1cb432030aead5611552bacf1e134e834bd50d3ae8172b638dfee21e5f3c73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1cb432030aead5611552bacf1e134e834bd50d3ae8172b638dfee21e5f3c73a->enter($__internal_b1cb432030aead5611552bacf1e134e834bd50d3ae8172b638dfee21e5f3c73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_content"));

        
        $__internal_b1cb432030aead5611552bacf1e134e834bd50d3ae8172b638dfee21e5f3c73a->leave($__internal_b1cb432030aead5611552bacf1e134e834bd50d3ae8172b638dfee21e5f3c73a_prof);

    }

    // line 41
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3193a654de18baa170fbc39be16781d7dc647b9ecf508869834e786c1bf31c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3193a654de18baa170fbc39be16781d7dc647b9ecf508869834e786c1bf31c5->enter($__internal_a3193a654de18baa170fbc39be16781d7dc647b9ecf508869834e786c1bf31c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_a3193a654de18baa170fbc39be16781d7dc647b9ecf508869834e786c1bf31c5->leave($__internal_a3193a654de18baa170fbc39be16781d7dc647b9ecf508869834e786c1bf31c5_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d9f07728d37add33479b8ba573b8204abb35af6fd59feb394d2214c307348ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f07728d37add33479b8ba573b8204abb35af6fd59feb394d2214c307348ae5->enter($__internal_d9f07728d37add33479b8ba573b8204abb35af6fd59feb394d2214c307348ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_d9f07728d37add33479b8ba573b8204abb35af6fd59feb394d2214c307348ae5->leave($__internal_d9f07728d37add33479b8ba573b8204abb35af6fd59feb394d2214c307348ae5_prof);

    }

    // line 47
    public function block_modal($context, array $blocks = array())
    {
        $__internal_903ee8b241487c87ee0df9eb5598a9da339176ad80cd1bcd94b592c43f1e0495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903ee8b241487c87ee0df9eb5598a9da339176ad80cd1bcd94b592c43f1e0495->enter($__internal_903ee8b241487c87ee0df9eb5598a9da339176ad80cd1bcd94b592c43f1e0495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_903ee8b241487c87ee0df9eb5598a9da339176ad80cd1bcd94b592c43f1e0495->leave($__internal_903ee8b241487c87ee0df9eb5598a9da339176ad80cd1bcd94b592c43f1e0495_prof);

    }

    // line 56
    public function block_js($context, array $blocks = array())
    {
        $__internal_8a8964d931165c2d1669129af54085990290a241d7ea36c8e9435ba6a7f4e3a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8964d931165c2d1669129af54085990290a241d7ea36c8e9435ba6a7f4e3a2->enter($__internal_8a8964d931165c2d1669129af54085990290a241d7ea36c8e9435ba6a7f4e3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_8a8964d931165c2d1669129af54085990290a241d7ea36c8e9435ba6a7f4e3a2->leave($__internal_8a8964d931165c2d1669129af54085990290a241d7ea36c8e9435ba6a7f4e3a2_prof);

    }

    // line 74
    public function block_lexik_javascript_footer($context, array $blocks = array())
    {
        $__internal_3cf985065ac9bc8fa2e1451b768296aa603eea2f11dcb9fc493588009eb5d0c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf985065ac9bc8fa2e1451b768296aa603eea2f11dcb9fc493588009eb5d0c8->enter($__internal_3cf985065ac9bc8fa2e1451b768296aa603eea2f11dcb9fc493588009eb5d0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_javascript_footer"));

        
        $__internal_3cf985065ac9bc8fa2e1451b768296aa603eea2f11dcb9fc493588009eb5d0c8->leave($__internal_3cf985065ac9bc8fa2e1451b768296aa603eea2f11dcb9fc493588009eb5d0c8_prof);

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
