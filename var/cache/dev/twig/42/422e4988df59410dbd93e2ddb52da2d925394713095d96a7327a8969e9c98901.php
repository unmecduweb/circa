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
        $__internal_11f6bca70fdbfec59c33c8e2ffdc6b9ca9e8aba36f58f4748f470d2207cabef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f6bca70fdbfec59c33c8e2ffdc6b9ca9e8aba36f58f4748f470d2207cabef0->enter($__internal_11f6bca70fdbfec59c33c8e2ffdc6b9ca9e8aba36f58f4748f470d2207cabef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11f6bca70fdbfec59c33c8e2ffdc6b9ca9e8aba36f58f4748f470d2207cabef0->leave($__internal_11f6bca70fdbfec59c33c8e2ffdc6b9ca9e8aba36f58f4748f470d2207cabef0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d57c53e41cf2f1af2c0d904666a78dc1fe4b9c86b9a88d4a9001880b1d32807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d57c53e41cf2f1af2c0d904666a78dc1fe4b9c86b9a88d4a9001880b1d32807->enter($__internal_5d57c53e41cf2f1af2c0d904666a78dc1fe4b9c86b9a88d4a9001880b1d32807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5d57c53e41cf2f1af2c0d904666a78dc1fe4b9c86b9a88d4a9001880b1d32807->leave($__internal_5d57c53e41cf2f1af2c0d904666a78dc1fe4b9c86b9a88d4a9001880b1d32807_prof);

    }

    // line 5
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_7eac984128d424d26c0c97af279f4696774ebfee3ec4024f8c490865006f4e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eac984128d424d26c0c97af279f4696774ebfee3ec4024f8c490865006f4e06->enter($__internal_7eac984128d424d26c0c97af279f4696774ebfee3ec4024f8c490865006f4e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.title"), "html", null, true);
        
        $__internal_7eac984128d424d26c0c97af279f4696774ebfee3ec4024f8c490865006f4e06->leave($__internal_7eac984128d424d26c0c97af279f4696774ebfee3ec4024f8c490865006f4e06_prof);

    }

    // line 7
    public function block_meta($context, array $blocks = array())
    {
        $__internal_2f10b92f787dac62f124a5046518af66578ec3c3f7de76eab3586ebc3d0b76dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f10b92f787dac62f124a5046518af66578ec3c3f7de76eab3586ebc3d0b76dc->enter($__internal_2f10b92f787dac62f124a5046518af66578ec3c3f7de76eab3586ebc3d0b76dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 8
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('metaDescription', $context, $blocks);
        echo "\" />
    ";
        
        $__internal_2f10b92f787dac62f124a5046518af66578ec3c3f7de76eab3586ebc3d0b76dc->leave($__internal_2f10b92f787dac62f124a5046518af66578ec3c3f7de76eab3586ebc3d0b76dc_prof);

    }

    public function block_metaDescription($context, array $blocks = array())
    {
        $__internal_fbe73e4bff8895b261654ab99d0d5f73874d143413fe6b3538d8e3c4fbfb93c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe73e4bff8895b261654ab99d0d5f73874d143413fe6b3538d8e3c4fbfb93c0->enter($__internal_fbe73e4bff8895b261654ab99d0d5f73874d143413fe6b3538d8e3c4fbfb93c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metaDescription"));

        
        $__internal_fbe73e4bff8895b261654ab99d0d5f73874d143413fe6b3538d8e3c4fbfb93c0->leave($__internal_fbe73e4bff8895b261654ab99d0d5f73874d143413fe6b3538d8e3c4fbfb93c0_prof);

    }

    // line 14
    public function block_lexik_stylesheets($context, array $blocks = array())
    {
        $__internal_acb32fbdec18020b3d3d30ef915728e4a3464d583e1a4ad921694426426222e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb32fbdec18020b3d3d30ef915728e4a3464d583e1a4ad921694426426222e3->enter($__internal_acb32fbdec18020b3d3d30ef915728e4a3464d583e1a4ad921694426426222e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_stylesheets"));

        
        $__internal_acb32fbdec18020b3d3d30ef915728e4a3464d583e1a4ad921694426426222e3->leave($__internal_acb32fbdec18020b3d3d30ef915728e4a3464d583e1a4ad921694426426222e3_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4b898d9023cfe06ffb939e32fead7e6e5906f525b547d51d866e9597972bf75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b898d9023cfe06ffb939e32fead7e6e5906f525b547d51d866e9597972bf75->enter($__internal_c4b898d9023cfe06ffb939e32fead7e6e5906f525b547d51d866e9597972bf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c4b898d9023cfe06ffb939e32fead7e6e5906f525b547d51d866e9597972bf75->leave($__internal_c4b898d9023cfe06ffb939e32fead7e6e5906f525b547d51d866e9597972bf75_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_962cf0ba78b05a3d5e5686133d04e958abe4c3d008b72f570b22313decf9453a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962cf0ba78b05a3d5e5686133d04e958abe4c3d008b72f570b22313decf9453a->enter($__internal_962cf0ba78b05a3d5e5686133d04e958abe4c3d008b72f570b22313decf9453a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_962cf0ba78b05a3d5e5686133d04e958abe4c3d008b72f570b22313decf9453a->leave($__internal_962cf0ba78b05a3d5e5686133d04e958abe4c3d008b72f570b22313decf9453a_prof);

    }

    // line 34
    public function block_container($context, array $blocks = array())
    {
        $__internal_4be74597e2c1a9bd380770decb958f5fa8e8cba7fc86fa69690a3523dd09f29a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be74597e2c1a9bd380770decb958f5fa8e8cba7fc86fa69690a3523dd09f29a->enter($__internal_4be74597e2c1a9bd380770decb958f5fa8e8cba7fc86fa69690a3523dd09f29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_4be74597e2c1a9bd380770decb958f5fa8e8cba7fc86fa69690a3523dd09f29a->leave($__internal_4be74597e2c1a9bd380770decb958f5fa8e8cba7fc86fa69690a3523dd09f29a_prof);

    }

    // line 36
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_056a5c45295a7680d328dc2d92de7a62efe9e9ded7c001318ce539dec34c5d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056a5c45295a7680d328dc2d92de7a62efe9e9ded7c001318ce539dec34c5d53->enter($__internal_056a5c45295a7680d328dc2d92de7a62efe9e9ded7c001318ce539dec34c5d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        
        $__internal_056a5c45295a7680d328dc2d92de7a62efe9e9ded7c001318ce539dec34c5d53->leave($__internal_056a5c45295a7680d328dc2d92de7a62efe9e9ded7c001318ce539dec34c5d53_prof);

    }

    // line 37
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_ea981bf5f29e2d837b61e7f2fd12959cf22db2c2785a8e3f61e9d3b8dd905250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea981bf5f29e2d837b61e7f2fd12959cf22db2c2785a8e3f61e9d3b8dd905250->enter($__internal_ea981bf5f29e2d837b61e7f2fd12959cf22db2c2785a8e3f61e9d3b8dd905250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        // line 38
        echo "
                ";
        
        $__internal_ea981bf5f29e2d837b61e7f2fd12959cf22db2c2785a8e3f61e9d3b8dd905250->leave($__internal_ea981bf5f29e2d837b61e7f2fd12959cf22db2c2785a8e3f61e9d3b8dd905250_prof);

    }

    // line 40
    public function block_lexik_content($context, array $blocks = array())
    {
        $__internal_df522baf5dcaec2f08cde2cb7a5c4795d6fcaafae44c7a31214acf5ebe330451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df522baf5dcaec2f08cde2cb7a5c4795d6fcaafae44c7a31214acf5ebe330451->enter($__internal_df522baf5dcaec2f08cde2cb7a5c4795d6fcaafae44c7a31214acf5ebe330451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_content"));

        
        $__internal_df522baf5dcaec2f08cde2cb7a5c4795d6fcaafae44c7a31214acf5ebe330451->leave($__internal_df522baf5dcaec2f08cde2cb7a5c4795d6fcaafae44c7a31214acf5ebe330451_prof);

    }

    // line 41
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e9af8bb029f419d6daff2fd6b14d2ca4731f0d9d2370d28d644189305540877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9af8bb029f419d6daff2fd6b14d2ca4731f0d9d2370d28d644189305540877->enter($__internal_3e9af8bb029f419d6daff2fd6b14d2ca4731f0d9d2370d28d644189305540877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_3e9af8bb029f419d6daff2fd6b14d2ca4731f0d9d2370d28d644189305540877->leave($__internal_3e9af8bb029f419d6daff2fd6b14d2ca4731f0d9d2370d28d644189305540877_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_765ba1f018d1c33d248fbb6aa29c95e551331a415a9e8a29ec73c59b7901555f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765ba1f018d1c33d248fbb6aa29c95e551331a415a9e8a29ec73c59b7901555f->enter($__internal_765ba1f018d1c33d248fbb6aa29c95e551331a415a9e8a29ec73c59b7901555f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_765ba1f018d1c33d248fbb6aa29c95e551331a415a9e8a29ec73c59b7901555f->leave($__internal_765ba1f018d1c33d248fbb6aa29c95e551331a415a9e8a29ec73c59b7901555f_prof);

    }

    // line 47
    public function block_modal($context, array $blocks = array())
    {
        $__internal_e74cbdb915c19c5b15691d98ac891ae771457814652e451bbd6ad750e7cfb6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74cbdb915c19c5b15691d98ac891ae771457814652e451bbd6ad750e7cfb6d5->enter($__internal_e74cbdb915c19c5b15691d98ac891ae771457814652e451bbd6ad750e7cfb6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_e74cbdb915c19c5b15691d98ac891ae771457814652e451bbd6ad750e7cfb6d5->leave($__internal_e74cbdb915c19c5b15691d98ac891ae771457814652e451bbd6ad750e7cfb6d5_prof);

    }

    // line 56
    public function block_js($context, array $blocks = array())
    {
        $__internal_ed29a8d8a98d764870c615697d0277391ac989a3e3c16f45627e57c355c72f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed29a8d8a98d764870c615697d0277391ac989a3e3c16f45627e57c355c72f0a->enter($__internal_ed29a8d8a98d764870c615697d0277391ac989a3e3c16f45627e57c355c72f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_ed29a8d8a98d764870c615697d0277391ac989a3e3c16f45627e57c355c72f0a->leave($__internal_ed29a8d8a98d764870c615697d0277391ac989a3e3c16f45627e57c355c72f0a_prof);

    }

    // line 74
    public function block_lexik_javascript_footer($context, array $blocks = array())
    {
        $__internal_d2913d6fc24e67d747fa69b081f6587c8d3f5fa81e6136ba9c433b9d48ce5adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2913d6fc24e67d747fa69b081f6587c8d3f5fa81e6136ba9c433b9d48ce5adc->enter($__internal_d2913d6fc24e67d747fa69b081f6587c8d3f5fa81e6136ba9c433b9d48ce5adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_javascript_footer"));

        
        $__internal_d2913d6fc24e67d747fa69b081f6587c8d3f5fa81e6136ba9c433b9d48ce5adc->leave($__internal_d2913d6fc24e67d747fa69b081f6587c8d3f5fa81e6136ba9c433b9d48ce5adc_prof);

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
