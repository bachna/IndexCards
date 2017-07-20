<?php

/* default/result.html.twig */
class __TwigTemplate_15ed591ceb35366dffd4496fdc5b10d2181e6ace9bc927407f77129b36ff78c3 extends Twig_Template
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
        $__internal_931a9b16c80b4983e7d43168953c4d04ad473c82a89660b79aeabb9ffe226011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931a9b16c80b4983e7d43168953c4d04ad473c82a89660b79aeabb9ffe226011->enter($__internal_931a9b16c80b4983e7d43168953c4d04ad473c82a89660b79aeabb9ffe226011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/result.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_931a9b16c80b4983e7d43168953c4d04ad473c82a89660b79aeabb9ffe226011->leave($__internal_931a9b16c80b4983e7d43168953c4d04ad473c82a89660b79aeabb9ffe226011_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_71f099b8cc84347ae8988f7f73874bad7cb5a39df6fd83a505ae23f1c073b8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f099b8cc84347ae8988f7f73874bad7cb5a39df6fd83a505ae23f1c073b8db->enter($__internal_71f099b8cc84347ae8988f7f73874bad7cb5a39df6fd83a505ae23f1c073b8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_71f099b8cc84347ae8988f7f73874bad7cb5a39df6fd83a505ae23f1c073b8db->leave($__internal_71f099b8cc84347ae8988f7f73874bad7cb5a39df6fd83a505ae23f1c073b8db_prof);

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

{% endblock %}", "default/result.html.twig", "/home/barbara/Workspace/IndexCards/app/Resources/views/default/result.html.twig");
    }
}
