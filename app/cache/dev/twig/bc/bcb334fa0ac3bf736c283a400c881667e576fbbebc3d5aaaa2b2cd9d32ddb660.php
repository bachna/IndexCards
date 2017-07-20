<?php

/* default/index.html.twig */
class __TwigTemplate_7116ed6e3570187b1895f6ff85f76241df9bf0e2f0df1cb2ea51d5846e485ac1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_01abcd8aa7b7d5bcf45e03b91e3236ed1dff391b07cb0cdbd57668c1b74e70d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01abcd8aa7b7d5bcf45e03b91e3236ed1dff391b07cb0cdbd57668c1b74e70d7->enter($__internal_01abcd8aa7b7d5bcf45e03b91e3236ed1dff391b07cb0cdbd57668c1b74e70d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01abcd8aa7b7d5bcf45e03b91e3236ed1dff391b07cb0cdbd57668c1b74e70d7->leave($__internal_01abcd8aa7b7d5bcf45e03b91e3236ed1dff391b07cb0cdbd57668c1b74e70d7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_098872513d950be70d41200cd8b54326a200aa0232e40f895b983982c9308297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098872513d950be70d41200cd8b54326a200aa0232e40f895b983982c9308297->enter($__internal_098872513d950be70d41200cd8b54326a200aa0232e40f895b983982c9308297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        <i class=\"hand massive peace icon\"></i>
        <p>
            <h2> Learn new words easily </h2>
        </p>
    </div>
    <br>
    <br>
    <br>
    <div>
        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pltoen");
        echo "\" class=\"fluid massive ui button\">
            <div class=\"ui red header\">
                <h1> PL </h1>
            </div>
            <div class=\"ui horizontal divider\">
                <i class=\"chevron massive circle down icon\"></i>
            </div>
            <div class=\"ui blue header\">
                <h1> EN </h1>
            </div>
        </a>
    </div>
    <br>
    <div>
        <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entopl");
        echo "\" class=\"fluid massive ui button\">
            <div class=\"ui blue header\">
                <h1> EN </h1>
            </div>
            <div class=\"ui horizontal divider\">
                <i class=\"chevron massive circle down icon\"></i>
            </div>
            <div class=\"ui red header\">
                <h1> PL </h1>
            </div>
        </a>
    </div>

";
        
        $__internal_098872513d950be70d41200cd8b54326a200aa0232e40f895b983982c9308297->leave($__internal_098872513d950be70d41200cd8b54326a200aa0232e40f895b983982c9308297_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 28,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
        <i class=\"hand massive peace icon\"></i>
        <p>
            <h2> Learn new words easily </h2>
        </p>
    </div>
    <br>
    <br>
    <br>
    <div>
        <a href=\"{{ path(\"pltoen\") }}\" class=\"fluid massive ui button\">
            <div class=\"ui red header\">
                <h1> PL </h1>
            </div>
            <div class=\"ui horizontal divider\">
                <i class=\"chevron massive circle down icon\"></i>
            </div>
            <div class=\"ui blue header\">
                <h1> EN </h1>
            </div>
        </a>
    </div>
    <br>
    <div>
        <a href=\"{{ path(\"entopl\") }}\" class=\"fluid massive ui button\">
            <div class=\"ui blue header\">
                <h1> EN </h1>
            </div>
            <div class=\"ui horizontal divider\">
                <i class=\"chevron massive circle down icon\"></i>
            </div>
            <div class=\"ui red header\">
                <h1> PL </h1>
            </div>
        </a>
    </div>

{% endblock %}


", "default/index.html.twig", "/home/barbara/Workspace/Warsztat_6/index_project/app/Resources/views/default/index.html.twig");
    }
}
