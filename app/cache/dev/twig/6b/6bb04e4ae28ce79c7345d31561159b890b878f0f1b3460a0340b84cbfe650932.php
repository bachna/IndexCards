<?php

/* default/result.html.twig */
class __TwigTemplate_29f25a7fc1e21b595ae507fd30a9e83367abcbad3f68937d9fee72789acb9780 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/result.html.twig", 1);
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
        $__internal_3e716dbc2bbf975cb407c06ee7a10947288706919c2e905dd5577223fc829503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e716dbc2bbf975cb407c06ee7a10947288706919c2e905dd5577223fc829503->enter($__internal_3e716dbc2bbf975cb407c06ee7a10947288706919c2e905dd5577223fc829503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/result.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e716dbc2bbf975cb407c06ee7a10947288706919c2e905dd5577223fc829503->leave($__internal_3e716dbc2bbf975cb407c06ee7a10947288706919c2e905dd5577223fc829503_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e65a7bd4fc3f659cfcdb28cb6ac8d058ad5dfc58a91fb2e88776e7f5e8a887b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65a7bd4fc3f659cfcdb28cb6ac8d058ad5dfc58a91fb2e88776e7f5e8a887b8->enter($__internal_e65a7bd4fc3f659cfcdb28cb6ac8d058ad5dfc58a91fb2e88776e7f5e8a887b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2> your score: ";
        // line 14
        echo twig_escape_filter($this->env, ($context["good_answers"] ?? $this->getContext($context, "good_answers")), "html", null, true);
        echo " / 10 </h2>
    </div>
    <br>
    <br>
    <div>
        <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"fluid massive ui button\">
            <br>
            <h1> PLAY AGAIN </h1>
            <br><br>
        </a>
    </div>

";
        
        $__internal_e65a7bd4fc3f659cfcdb28cb6ac8d058ad5dfc58a91fb2e88776e7f5e8a887b8->leave($__internal_e65a7bd4fc3f659cfcdb28cb6ac8d058ad5dfc58a91fb2e88776e7f5e8a887b8_prof);

    }

    public function getTemplateName()
    {
        return "default/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
        <h2> your score: {{ good_answers }} / 10 </h2>
    </div>
    <br>
    <br>
    <div>
        <a href=\"{{ path(\"homepage\") }}\" class=\"fluid massive ui button\">
            <br>
            <h1> PLAY AGAIN </h1>
            <br><br>
        </a>
    </div>

{% endblock %}", "default/result.html.twig", "/home/barbara/Workspace/Warsztat_6/index_project/app/Resources/views/default/result.html.twig");
    }
}
