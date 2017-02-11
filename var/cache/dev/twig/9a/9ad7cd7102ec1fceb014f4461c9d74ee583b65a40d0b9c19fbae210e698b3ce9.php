<?php

/* MwebCoreBundle::index.html.twig */
class __TwigTemplate_62c83f89fbe3141b880622ca283522bd9277a39be354533861cd3ee50b25d8fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MwebCoreBundle::layout.html.twig", "MwebCoreBundle::index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MwebCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75c481ea04e942b4038265a5c5cea808bd80b8b2804c54ddd59c7847ef6cd5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c481ea04e942b4038265a5c5cea808bd80b8b2804c54ddd59c7847ef6cd5ca->enter($__internal_75c481ea04e942b4038265a5c5cea808bd80b8b2804c54ddd59c7847ef6cd5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebCoreBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75c481ea04e942b4038265a5c5cea808bd80b8b2804c54ddd59c7847ef6cd5ca->leave($__internal_75c481ea04e942b4038265a5c5cea808bd80b8b2804c54ddd59c7847ef6cd5ca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1304b6e0c5024918543365638d412142f6d161fa7ff4f7e1b9136ca260d433ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1304b6e0c5024918543365638d412142f6d161fa7ff4f7e1b9136ca260d433ab->enter($__internal_1304b6e0c5024918543365638d412142f6d161fa7ff4f7e1b9136ca260d433ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_1304b6e0c5024918543365638d412142f6d161fa7ff4f7e1b9136ca260d433ab->leave($__internal_1304b6e0c5024918543365638d412142f6d161fa7ff4f7e1b9136ca260d433ab_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_be8c0eaeeeebb249aff8edc8288becbdc0d1ab5b6abbef2d9cd0030aca395c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8c0eaeeeebb249aff8edc8288becbdc0d1ab5b6abbef2d9cd0030aca395c50->enter($__internal_be8c0eaeeeebb249aff8edc8288becbdc0d1ab5b6abbef2d9cd0030aca395c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    ";
        // line 10
        echo "    <section id=\"section-info\" class=\"paralax-wrap\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/illu1.jpg"), "html", null, true);
        echo "')\">
        <div class=\"section-container\" style=\"height: 100%;\">
            <div class=\"container-fluid\">
                <div class=\"block-title right\">
                    <h2>
                        <span class=\"main\"><span class=\"line\"></span>Festival Besançon</span>
                        <span class=\"back\">Electro-DUB</span>
                    </h2>
                </div>
                <div class=\"block-title right\">
                    <h2>
                        <span class=\"main\">
                            <span class=\"line\"></span>
                            <span style=\"font-family: 'number'\">4.5.6</span>
                            Mai
                            <span style=\"font-family: 'number'\">2017</span>
                        </span>

                        <span class=\"back\">Rock'n cirk</span>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class=\"content\" id=\"section-befores\">
        <div class=\"container-fluid\">
            <div class=\"wrap\">
                <div class=\"block-title center col-xs-12 black\">
                    <h2>
                        <span class=\"main\"><span class=\"line\"></span>Les actu du circa<span class=\"line\"></span></span>
                        <span class=\"back\">News</span>
                    </h2>
                    <div class=\"clear\"></div>
                </div>
                ";
        // line 45
        $this->loadTemplate("MwebCoreBundle::sidebar.html.twig", "MwebCoreBundle::index.html.twig", 45)->display(array_merge($context, array("col" => "6")));
        // line 46
        echo "                <div class=\"clear\"></div>
            </div>

        </div>
    </section>

    <section id=\"section-festival\" class=\"paralax-wrap\" style=\"background-image: url(";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/illu3.jpg"), "html", null, true);
        echo ")\">
        <div class=\"section-container\">
            <div class=\"container-fluid\">
                <div class=\"block-title center col-xs-12\">
                    <h2>
                        <span class=\"main\"><span class=\"line\"></span>Edition 2017<span class=\"line\"></span></span>
                        <span class=\"back\">Circasismic</span>
                    </h2>
                </div>
                <div class=\"col-xs-4\">
                    <p>Ohé, du bateau, le Festival Circasismic amarrera bien à Besançon pour une troisième édition en
                        mai

                        2017 ! Changement de décor et de lieu, cette année l’évènement change de friche et se déploiera

                        aux Prés-De- Vaux sur les vestiges de la Rodiaceta en conservant la vue imprenable sur la
                        Citadelle

                        mais sur l’autre versant. La formule évolue aussi puisque 3 soirées seront proposées au public
                        qui

                        débarquera ébahi parmi gredins, flibustiers et artistes internationaux. Les amateurs de cirque

                        pourront s’accoquiner au choix avec une ambiance dub le jeudi «Rock’N’Cirk» le vendredi et
                        «Electro

                        Circus» le samedi . Les musiciens et circassiens se mêleront aux marins d’eau douce pour
                        festoyer

                        avec les visiteurs sous l’égide du Jolly Roger.</p>

                </div>
                <div class=\"col-xs-4\">
                    <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/illu.png"), "html", null, true);
        echo "\" alt=\"\"/>
                </div>
                <div class=\"col-xs-4\">
                    <p>On hissera haut les toiles des deux grands chapiteaux permettant aux nombreux spectateurs de

                        profiter des concerts et représentations par tous temps et tous vents…. (contre vents et marées)

                        Les échoppes et tavernes abritées et animées par des vieux loups de mer et autres boit-sans-
                        soif

                        proposeront de quoi se restaurer et se divertir toute la nuit.</p>
                    <p>

                        Toujours de manière éco-responsable, les organisateurs proposeront des toilettes sèches, le tri
                        des

                        déchets, l’utilisation d’écocups réutilisables et encourageront le covoiturage et les modes de

                        déplacements doux étant donné l’emplacement du site.</p>
                    <p>

                    </p>

                </div>
                <div class=\"clear\"></div>
                <div class=\"col-xs-1\"></div>
                <div class=\"col-xs-2 logo\">
                    <a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circa_page", array("slug" => "les-associations"));
        echo "\"><img
                                src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/img/logo-citron.png"), "html", null, true);
        echo "\" alt=\"\"/> </a>
                </div>
                <div class=\"col-xs-2 logo\">
                    <a href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circa_page", array("slug" => "les-associations"));
        echo "\"><img
                                src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/img/logo-bastion.png"), "html", null, true);
        echo "\" alt=\"\"/> </a>
                </div>
                <div class=\"col-xs-2\"></div>
                <div class=\"col-xs-2 logo\">
                    <a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circa_page", array("slug" => "les-associations"));
        echo "\"><img
                                src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/img/logo-nushy.png"), "html", null, true);
        echo "\" alt=\"\"/> </a>
                </div>
                <div class=\"col-xs-2 logo\">
                    <a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circa_page", array("slug" => "les-associations"));
        echo "\"><img
                                src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/img/logo-5sens.png"), "html", null, true);
        echo "\" alt=\"\"/> </a>
                </div>
                <div class=\"col-xs-1\"></div>

            </div>
        </div>

    </section>




";
        
        $__internal_be8c0eaeeeebb249aff8edc8288becbdc0d1ab5b6abbef2d9cd0030aca395c50->leave($__internal_be8c0eaeeeebb249aff8edc8288becbdc0d1ab5b6abbef2d9cd0030aca395c50_prof);

    }

    public function getTemplateName()
    {
        return "MwebCoreBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 126,  201 => 125,  195 => 122,  191 => 121,  184 => 117,  180 => 116,  174 => 113,  170 => 112,  140 => 85,  104 => 52,  96 => 46,  94 => 45,  55 => 10,  53 => 9,  47 => 8,  35 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MwebCoreBundle::layout.html.twig\" %}



{% block title %}Accueil{% endblock %}


{% block content %}
    {#{{ liip(page, 'paralax', paralax) }}#}
    <section id=\"section-info\" class=\"paralax-wrap\" style=\"background-image: url('{{ asset('uploads/illu1.jpg') }}')\">
        <div class=\"section-container\" style=\"height: 100%;\">
            <div class=\"container-fluid\">
                <div class=\"block-title right\">
                    <h2>
                        <span class=\"main\"><span class=\"line\"></span>Festival Besançon</span>
                        <span class=\"back\">Electro-DUB</span>
                    </h2>
                </div>
                <div class=\"block-title right\">
                    <h2>
                        <span class=\"main\">
                            <span class=\"line\"></span>
                            <span style=\"font-family: 'number'\">4.5.6</span>
                            Mai
                            <span style=\"font-family: 'number'\">2017</span>
                        </span>

                        <span class=\"back\">Rock'n cirk</span>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class=\"content\" id=\"section-befores\">
        <div class=\"container-fluid\">
            <div class=\"wrap\">
                <div class=\"block-title center col-xs-12 black\">
                    <h2>
                        <span class=\"main\"><span class=\"line\"></span>Les actu du circa<span class=\"line\"></span></span>
                        <span class=\"back\">News</span>
                    </h2>
                    <div class=\"clear\"></div>
                </div>
                {% include 'MwebCoreBundle::sidebar.html.twig'  with {'col': '6'} %}
                <div class=\"clear\"></div>
            </div>

        </div>
    </section>

    <section id=\"section-festival\" class=\"paralax-wrap\" style=\"background-image: url({{ asset('uploads/illu3.jpg') }})\">
        <div class=\"section-container\">
            <div class=\"container-fluid\">
                <div class=\"block-title center col-xs-12\">
                    <h2>
                        <span class=\"main\"><span class=\"line\"></span>Edition 2017<span class=\"line\"></span></span>
                        <span class=\"back\">Circasismic</span>
                    </h2>
                </div>
                <div class=\"col-xs-4\">
                    <p>Ohé, du bateau, le Festival Circasismic amarrera bien à Besançon pour une troisième édition en
                        mai

                        2017 ! Changement de décor et de lieu, cette année l’évènement change de friche et se déploiera

                        aux Prés-De- Vaux sur les vestiges de la Rodiaceta en conservant la vue imprenable sur la
                        Citadelle

                        mais sur l’autre versant. La formule évolue aussi puisque 3 soirées seront proposées au public
                        qui

                        débarquera ébahi parmi gredins, flibustiers et artistes internationaux. Les amateurs de cirque

                        pourront s’accoquiner au choix avec une ambiance dub le jeudi «Rock’N’Cirk» le vendredi et
                        «Electro

                        Circus» le samedi . Les musiciens et circassiens se mêleront aux marins d’eau douce pour
                        festoyer

                        avec les visiteurs sous l’égide du Jolly Roger.</p>

                </div>
                <div class=\"col-xs-4\">
                    <img src=\"{{ asset('uploads/illu.png') }}\" alt=\"\"/>
                </div>
                <div class=\"col-xs-4\">
                    <p>On hissera haut les toiles des deux grands chapiteaux permettant aux nombreux spectateurs de

                        profiter des concerts et représentations par tous temps et tous vents…. (contre vents et marées)

                        Les échoppes et tavernes abritées et animées par des vieux loups de mer et autres boit-sans-
                        soif

                        proposeront de quoi se restaurer et se divertir toute la nuit.</p>
                    <p>

                        Toujours de manière éco-responsable, les organisateurs proposeront des toilettes sèches, le tri
                        des

                        déchets, l’utilisation d’écocups réutilisables et encourageront le covoiturage et les modes de

                        déplacements doux étant donné l’emplacement du site.</p>
                    <p>

                    </p>

                </div>
                <div class=\"clear\"></div>
                <div class=\"col-xs-1\"></div>
                <div class=\"col-xs-2 logo\">
                    <a href=\"{{ path('circa_page', {'slug': 'les-associations'}) }}\"><img
                                src=\"{{ asset('bundles/mwebcore/img/logo-citron.png') }}\" alt=\"\"/> </a>
                </div>
                <div class=\"col-xs-2 logo\">
                    <a href=\"{{ path('circa_page', {'slug': 'les-associations'}) }}\"><img
                                src=\"{{ asset('bundles/mwebcore/img/logo-bastion.png') }}\" alt=\"\"/> </a>
                </div>
                <div class=\"col-xs-2\"></div>
                <div class=\"col-xs-2 logo\">
                    <a href=\"{{ path('circa_page', {'slug': 'les-associations'}) }}\"><img
                                src=\"{{ asset('bundles/mwebcore/img/logo-nushy.png') }}\" alt=\"\"/> </a>
                </div>
                <div class=\"col-xs-2 logo\">
                    <a href=\"{{ path('circa_page', {'slug': 'les-associations'}) }}\"><img
                                src=\"{{ asset('bundles/mwebcore/img/logo-5sens.png') }}\" alt=\"\"/> </a>
                </div>
                <div class=\"col-xs-1\"></div>

            </div>
        </div>

    </section>




{% endblock %}", "MwebCoreBundle::index.html.twig", "/home/fab/Documents/Pro/www/circa/src/Mweb/CoreBundle/Resources/views/index.html.twig");
    }
}
