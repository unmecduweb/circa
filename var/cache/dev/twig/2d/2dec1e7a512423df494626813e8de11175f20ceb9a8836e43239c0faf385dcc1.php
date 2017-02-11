<?php

/* @MwebAdmin/filemanager/include/FtpException.php */
class __TwigTemplate_d924bab09a244177f94e8d7e5a78e03722cd1c2060cc33a83f4e60165f4e644f extends Twig_Template
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
        $__internal_0c10c84e79af1a8cb6fbea4bfefa8df41b57873b1c1dadc7c4d1f04df9a26b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c10c84e79af1a8cb6fbea4bfefa8df41b57873b1c1dadc7c4d1f04df9a26b17->enter($__internal_0c10c84e79af1a8cb6fbea4bfefa8df41b57873b1c1dadc7c4d1f04df9a26b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/include/FtpException.php"));

        // line 1
        echo "<?php
/*
 * This file is part of the `nicolab/php-ftp-client` package.
 *
 * (c) Nicolas Tallefourtane <dev@nicolab.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Nicolas Tallefourtane http://nicolab.net
 */
namespace FtpClient;

/**
 * The FtpException class.
 * Exception thrown if an error on runtime of the FTP client occurs.
 * @inheritDoc
 * @author Nicolas Tallefourtane <dev@nicolab.net>
 */
class FtpException extends \\Exception {}
";
        
        $__internal_0c10c84e79af1a8cb6fbea4bfefa8df41b57873b1c1dadc7c4d1f04df9a26b17->leave($__internal_0c10c84e79af1a8cb6fbea4bfefa8df41b57873b1c1dadc7c4d1f04df9a26b17_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/include/FtpException.php";
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
/*
 * This file is part of the `nicolab/php-ftp-client` package.
 *
 * (c) Nicolas Tallefourtane <dev@nicolab.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Nicolas Tallefourtane http://nicolab.net
 */
namespace FtpClient;

/**
 * The FtpException class.
 * Exception thrown if an error on runtime of the FTP client occurs.
 * @inheritDoc
 * @author Nicolas Tallefourtane <dev@nicolab.net>
 */
class FtpException extends \\Exception {}
", "@MwebAdmin/filemanager/include/FtpException.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/include/FtpException.php");
    }
}
