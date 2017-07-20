<?php

/* base.html.twig */
class __TwigTemplate_1bdfeac07e173f862f2b00aea03956e2cadd4c446d63cc899341d835bdc67fcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3743b884666c07feba1046b57365e4df63789b9294298502f8f78662ae9f51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3743b884666c07feba1046b57365e4df63789b9294298502f8f78662ae9f51b->enter($__internal_f3743b884666c07feba1046b57365e4df63789b9294298502f8f78662ae9f51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        <br>
        <div class=\"ui center aligned container\">
            <br>
            <div class=\"ui grid\">
                <div class=\"four wide column\"></div>
                <div class=\"eight wide column\" style=\"background-color: white\">
                    <div class=\"ui attached stackable menu\">
                        <div class=\"ui container\">
                            <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"item\">
                                <i class=\"comments outline icon\"></i>
                                New quiz
                            </a>
                        </div>
                        <div class=\"right menu\">
                            ";
        // line 28
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("AppBundle:Builder:mainMenu");
        echo "
                        </div>
                    </div>
                    <br>
                    <br>
                    ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "                </div>
                <div class=\"four wide column\"></div>
            </div>
        </div>
    </body>
</html>
";
        
        $__internal_f3743b884666c07feba1046b57365e4df63789b9294298502f8f78662ae9f51b->leave($__internal_f3743b884666c07feba1046b57365e4df63789b9294298502f8f78662ae9f51b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e6fa2a3cd5d4a65543282acd3077c8fddac90ca6119401d151f673dc2884353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6fa2a3cd5d4a65543282acd3077c8fddac90ca6119401d151f673dc2884353->enter($__internal_9e6fa2a3cd5d4a65543282acd3077c8fddac90ca6119401d151f673dc2884353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Index Cards ";
        
        $__internal_9e6fa2a3cd5d4a65543282acd3077c8fddac90ca6119401d151f673dc2884353->leave($__internal_9e6fa2a3cd5d4a65543282acd3077c8fddac90ca6119401d151f673dc2884353_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b59abb16945e2652e39f2901901d68fc03c4ed078638a00097bcb659ec432ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59abb16945e2652e39f2901901d68fc03c4ed078638a00097bcb659ec432ef4->enter($__internal_b59abb16945e2652e39f2901901d68fc03c4ed078638a00097bcb659ec432ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/semantic/semantic.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        ";
        
        $__internal_b59abb16945e2652e39f2901901d68fc03c4ed078638a00097bcb659ec432ef4->leave($__internal_b59abb16945e2652e39f2901901d68fc03c4ed078638a00097bcb659ec432ef4_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_176ff50ad8551d3cc5dea0195edeeac158a2265299ac4827b922c6514f21a63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176ff50ad8551d3cc5dea0195edeeac158a2265299ac4827b922c6514f21a63a->enter($__internal_176ff50ad8551d3cc5dea0195edeeac158a2265299ac4827b922c6514f21a63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/semantic/semantic.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_176ff50ad8551d3cc5dea0195edeeac158a2265299ac4827b922c6514f21a63a->leave($__internal_176ff50ad8551d3cc5dea0195edeeac158a2265299ac4827b922c6514f21a63a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7b44b8268ff320d872e9d697d0ecf8e3afd2c84f95fe24ee7de65ba5b44396b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b44b8268ff320d872e9d697d0ecf8e3afd2c84f95fe24ee7de65ba5b44396b->enter($__internal_b7b44b8268ff320d872e9d697d0ecf8e3afd2c84f95fe24ee7de65ba5b44396b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b7b44b8268ff320d872e9d697d0ecf8e3afd2c84f95fe24ee7de65ba5b44396b->leave($__internal_b7b44b8268ff320d872e9d697d0ecf8e3afd2c84f95fe24ee7de65ba5b44396b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  119 => 10,  113 => 9,  103 => 7,  97 => 6,  85 => 5,  72 => 34,  70 => 33,  62 => 28,  53 => 22,  41 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %} Index Cards {% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('/semantic/semantic.css') }}\" rel=\"stylesheet\"/>
        {% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('/semantic/semantic.js') }}\"></script>
        {% endblock %}
    </head>
    <body>
        <br>
        <div class=\"ui center aligned container\">
            <br>
            <div class=\"ui grid\">
                <div class=\"four wide column\"></div>
                <div class=\"eight wide column\" style=\"background-color: white\">
                    <div class=\"ui attached stackable menu\">
                        <div class=\"ui container\">
                            <a href=\"{{ path('homepage') }}\" class=\"item\">
                                <i class=\"comments outline icon\"></i>
                                New quiz
                            </a>
                        </div>
                        <div class=\"right menu\">
                            {{ knp_menu_render('AppBundle:Builder:mainMenu') }}
                        </div>
                    </div>
                    <br>
                    <br>
                    {% block body %}{% endblock %}
                </div>
                <div class=\"four wide column\"></div>
            </div>
        </div>
    </body>
</html>
", "base.html.twig", "/home/barbara/Workspace/Warsztat_6/index_project/app/Resources/views/base.html.twig");
    }
}
