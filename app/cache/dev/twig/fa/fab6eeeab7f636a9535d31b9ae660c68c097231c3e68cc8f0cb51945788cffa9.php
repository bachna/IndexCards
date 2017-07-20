<?php

/* default/new.html.twig */
class __TwigTemplate_40a626a967a01bf0934053742adbd0f2cd7321a4589d3165f23e24eea94035a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a06cb3f5f51a55487ded3622ff2cd556fdb5b630fe8a3ea42fa7fad88b205b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06cb3f5f51a55487ded3622ff2cd556fdb5b630fe8a3ea42fa7fad88b205b6c->enter($__internal_a06cb3f5f51a55487ded3622ff2cd556fdb5b630fe8a3ea42fa7fad88b205b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a06cb3f5f51a55487ded3622ff2cd556fdb5b630fe8a3ea42fa7fad88b205b6c->leave($__internal_a06cb3f5f51a55487ded3622ff2cd556fdb5b630fe8a3ea42fa7fad88b205b6c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db71d67b2be231a99d82064699891bc700f991daee211b51f82990fd52933672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db71d67b2be231a99d82064699891bc700f991daee211b51f82990fd52933672->enter($__internal_db71d67b2be231a99d82064699891bc700f991daee211b51f82990fd52933672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
    <div>
        <i class=\"hand massive peace icon\"></i>
        <p>
        <h2> Learn new words easily </h2>
        </p>
    </div>
    <br>
    <br>
    <br>
    <div>
        ";
        // line 15
        if ((($context["language"] ?? $this->getContext($context, "language")) == "PlToEn")) {
            // line 16
            echo "            ";
            if ( !($context["translated"] ?? $this->getContext($context, "translated"))) {
                // line 17
                echo "                <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_show_anonymous", array("translated" => true));
                echo "\" class=\"fluid massive ui red basic button\">
                    <br>
                    <h1> ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute(($context["word"] ?? $this->getContext($context, "word")), "original", array()), "html", null, true);
                echo " </h1>
                    <br><br>
                </a>
            ";
            } else {
                // line 23
                echo "                <span class=\"fluid disabled massive ui blue basic button\">
                    <br>
                    <h1> ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute(($context["word"] ?? $this->getContext($context, "word")), "foreign", array()), "html", null, true);
                echo " </h1>
                    <br><br>
                </span>
                <br>
                <a href=\"";
                // line 29
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_good_anonymous");
                echo "\" class=\"ui icon button\">
                    <i class=\"checkmark big icon\"></i>
                </a>
                <a href=\"";
                // line 32
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_bad_anonymous");
                echo "\" class=\"ui icon button\">
                    <i class=\"remove big icon\"></i>
                </a>
            ";
            }
            // line 36
            echo "        ";
        } elseif ((($context["language"] ?? $this->getContext($context, "language")) == "EnToPl")) {
            // line 37
            echo "            ";
            if ( !($context["translated"] ?? $this->getContext($context, "translated"))) {
                // line 38
                echo "                <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_show_anonymous", array("translated" => true));
                echo "\" class=\"fluid massive ui blue basic button\">
                    <br>
                    <h1> ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute(($context["word"] ?? $this->getContext($context, "word")), "foreign", array()), "html", null, true);
                echo " </h1>
                    <br><br>
                </a>
            ";
            } else {
                // line 44
                echo "                <span class=\"fluid disabled massive ui red basic button\">
                    <br>
                    <h1> ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute(($context["word"] ?? $this->getContext($context, "word")), "original", array()), "html", null, true);
                echo " </h1>
                    <br><br>
                </span>
                <br>
                <a href=\"";
                // line 50
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_good_anonymous");
                echo "\" class=\"ui icon button\">
                    <i class=\"checkmark big icon\"></i>
                </a>
                <a href=\"";
                // line 53
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_bad_anonymous");
                echo "\" class=\"ui icon button\">
                    <i class=\"remove big icon\"></i>
                </a>
            ";
            }
            // line 57
            echo "        ";
        }
        // line 58
        echo "    </div>
";
        
        $__internal_db71d67b2be231a99d82064699891bc700f991daee211b51f82990fd52933672->leave($__internal_db71d67b2be231a99d82064699891bc700f991daee211b51f82990fd52933672_prof);

    }

    public function getTemplateName()
    {
        return "default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 58,  138 => 57,  131 => 53,  125 => 50,  118 => 46,  114 => 44,  107 => 40,  101 => 38,  98 => 37,  95 => 36,  88 => 32,  82 => 29,  75 => 25,  71 => 23,  64 => 19,  58 => 17,  55 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div>
    <div>
        <i class=\"hand massive peace icon\"></i>
        <p>
        <h2> Learn new words easily </h2>
        </p>
    </div>
    <br>
    <br>
    <br>
    <div>
        {% if language == \"PlToEn\" %}
            {% if not translated %}
                <a href=\"{{ path('quiz_show_anonymous', {'translated': true}) }}\" class=\"fluid massive ui red basic button\">
                    <br>
                    <h1> {{ word.original }} </h1>
                    <br><br>
                </a>
            {% else  %}
                <span class=\"fluid disabled massive ui blue basic button\">
                    <br>
                    <h1> {{ word.foreign }} </h1>
                    <br><br>
                </span>
                <br>
                <a href=\"{{ path('quiz_good_anonymous') }}\" class=\"ui icon button\">
                    <i class=\"checkmark big icon\"></i>
                </a>
                <a href=\"{{ path('quiz_bad_anonymous') }}\" class=\"ui icon button\">
                    <i class=\"remove big icon\"></i>
                </a>
            {% endif %}
        {% elseif language == \"EnToPl\" %}
            {% if not translated %}
                <a href=\"{{ path('quiz_show_anonymous', {'translated': true}) }}\" class=\"fluid massive ui blue basic button\">
                    <br>
                    <h1> {{ word.foreign }} </h1>
                    <br><br>
                </a>
            {% else  %}
                <span class=\"fluid disabled massive ui red basic button\">
                    <br>
                    <h1> {{ word.original }} </h1>
                    <br><br>
                </span>
                <br>
                <a href=\"{{ path('quiz_good_anonymous') }}\" class=\"ui icon button\">
                    <i class=\"checkmark big icon\"></i>
                </a>
                <a href=\"{{ path('quiz_bad_anonymous') }}\" class=\"ui icon button\">
                    <i class=\"remove big icon\"></i>
                </a>
            {% endif %}
        {%  endif %}
    </div>
{% endblock %}

{#{{ test }}#}
{#{{ language }}#}

", "default/new.html.twig", "/home/barbara/Workspace/IndexCards/app/Resources/views/default/new.html.twig");
    }
}
