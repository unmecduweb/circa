<?php

/* @MwebAdmin/filemanager/config/config.php */
class __TwigTemplate_cfbc8b717858060979ead111526508f2fde556945c7c3b089f56295ae89c2b0f extends Twig_Template
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
        $__internal_5a626614b57e7875c4ea4a943f4a72a090d051ffe25e9abe82c97c42cfe9c9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a626614b57e7875c4ea4a943f4a72a090d051ffe25e9abe82c97c42cfe9c9d7->enter($__internal_5a626614b57e7875c4ea4a943f4a72a090d051ffe25e9abe82c97c42cfe9c9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/config/config.php"));

        // line 1
        echo "<?php

// Comment for skinSoft/Utility-bundle
//if (session_id() == '') session_start();

mb_internal_encoding('UTF-8');
// Comment for skinSoft/Utility-bundle
//date_default_timezone_set('Europe/Rome');

// Useful to put variable in global scope
foreach(\$mwebConfig as \$k=>\$v) {
\t\$GLOBALS[\$k] = \$v;
}

return \$mwebConfig;
";
        
        $__internal_5a626614b57e7875c4ea4a943f4a72a090d051ffe25e9abe82c97c42cfe9c9d7->leave($__internal_5a626614b57e7875c4ea4a943f4a72a090d051ffe25e9abe82c97c42cfe9c9d7_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/config/config.php";
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

// Comment for skinSoft/Utility-bundle
//if (session_id() == '') session_start();

mb_internal_encoding('UTF-8');
// Comment for skinSoft/Utility-bundle
//date_default_timezone_set('Europe/Rome');

// Useful to put variable in global scope
foreach(\$mwebConfig as \$k=>\$v) {
\t\$GLOBALS[\$k] = \$v;
}

return \$mwebConfig;
", "@MwebAdmin/filemanager/config/config.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/config/config.php");
    }
}
