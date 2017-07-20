<?php

/* default/index.html.twig */
class __TwigTemplate_99d0382c869309e3294c235364d403df2bbac254a055ce17263ae45adf8548a4 extends Twig_Template
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
        $__internal_5f294818130dfd9206d91c605951645cb82a6e987e485c33f9c7b3f3a3373249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f294818130dfd9206d91c605951645cb82a6e987e485c33f9c7b3f3a3373249->enter($__internal_5f294818130dfd9206d91c605951645cb82a6e987e485c33f9c7b3f3a3373249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f294818130dfd9206d91c605951645cb82a6e987e485c33f9c7b3f3a3373249->leave($__internal_5f294818130dfd9206d91c605951645cb82a6e987e485c33f9c7b3f3a3373249_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff1c67e13f9b71c3ee188212cca7885988c6f5b696fbeb6df2b07eba7e4954bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1c67e13f9b71c3ee188212cca7885988c6f5b696fbeb6df2b07eba7e4954bf->enter($__internal_ff1c67e13f9b71c3ee188212cca7885988c6f5b696fbeb6df2b07eba7e4954bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ff1c67e13f9b71c3ee188212cca7885988c6f5b696fbeb6df2b07eba7e4954bf->leave($__internal_ff1c67e13f9b71c3ee188212cca7885988c6f5b696fbeb6df2b07eba7e4954bf_prof);

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


", "default/index.html.twig", "/home/barbara/Workspace/IndexCards/app/Resources/views/default/index.html.twig");
    }
}
