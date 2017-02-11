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
        $__internal_25bb35912456ca4de637f62a57eb6e6a9b35f8d4c6ca2aa4610978d24beaa3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25bb35912456ca4de637f62a57eb6e6a9b35f8d4c6ca2aa4610978d24beaa3aa->enter($__internal_25bb35912456ca4de637f62a57eb6e6a9b35f8d4c6ca2aa4610978d24beaa3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/include/FtpException.php"));

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
        
        $__internal_25bb35912456ca4de637f62a57eb6e6a9b35f8d4c6ca2aa4610978d24beaa3aa->leave($__internal_25bb35912456ca4de637f62a57eb6e6a9b35f8d4c6ca2aa4610978d24beaa3aa_prof);

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
