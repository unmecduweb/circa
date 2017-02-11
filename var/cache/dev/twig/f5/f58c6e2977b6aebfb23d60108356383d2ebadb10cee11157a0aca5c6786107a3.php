<?php

/* @MwebAdmin/filemanager/uploader/success.php */
class __TwigTemplate_d90258850e2426d013d6a2389c3f3a645a3829eee49bed69e9909706ff09de9e extends Twig_Template
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
        $__internal_338aa967bbe3fe674aff95b59068fbd89dff4419ac5809f25543c5a4957a4bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338aa967bbe3fe674aff95b59068fbd89dff4419ac5809f25543c5a4957a4bc7->enter($__internal_338aa967bbe3fe674aff95b59068fbd89dff4419ac5809f25543c5a4957a4bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/uploader/success.php"));

        // line 1
        echo "<html>
<head>
\t<!--JUPLOAD_JSCRIPT-->
\t<title>JUpload RESPONSIVE filemanager</title>
\t<style>
\t\tbody {
\t\t\tpadding: 0px;
\t\t\tmargin: 0px;
\t\t}
\t</style>
\t<meta http-equiv=\"refresh\"
\t\t  content=\"3;url=index.php?path=<?php echo strip_tags(preg_replace(\"/[^a-zA-Z0-9\\.\\[\\]_| -]/\", '', \$_GET['path'])); ?>\">
</head>
<body>
<center><br/><br/>
\t<img src=\"success.jpg\" alt=\"success\">
</center>
</body>
</html>";
        
        $__internal_338aa967bbe3fe674aff95b59068fbd89dff4419ac5809f25543c5a4957a4bc7->leave($__internal_338aa967bbe3fe674aff95b59068fbd89dff4419ac5809f25543c5a4957a4bc7_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/uploader/success.php";
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
        return new Twig_Source("<html>
<head>
\t<!--JUPLOAD_JSCRIPT-->
\t<title>JUpload RESPONSIVE filemanager</title>
\t<style>
\t\tbody {
\t\t\tpadding: 0px;
\t\t\tmargin: 0px;
\t\t}
\t</style>
\t<meta http-equiv=\"refresh\"
\t\t  content=\"3;url=index.php?path=<?php echo strip_tags(preg_replace(\"/[^a-zA-Z0-9\\.\\[\\]_| -]/\", '', \$_GET['path'])); ?>\">
</head>
<body>
<center><br/><br/>
\t<img src=\"success.jpg\" alt=\"success\">
</center>
</body>
</html>", "@MwebAdmin/filemanager/uploader/success.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/uploader/success.php");
    }
}
