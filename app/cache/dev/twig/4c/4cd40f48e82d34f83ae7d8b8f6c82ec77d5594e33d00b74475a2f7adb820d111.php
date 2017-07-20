<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5ceddc7d2dfd8bd4b32cb2046617b4678c8b3e2da92814c595613b4c671ad864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4be6c9061c563950ada2b1667446829af1dbf9444d42fc6cf9d19d76abc96bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be6c9061c563950ada2b1667446829af1dbf9444d42fc6cf9d19d76abc96bd3->enter($__internal_4be6c9061c563950ada2b1667446829af1dbf9444d42fc6cf9d19d76abc96bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4be6c9061c563950ada2b1667446829af1dbf9444d42fc6cf9d19d76abc96bd3->leave($__internal_4be6c9061c563950ada2b1667446829af1dbf9444d42fc6cf9d19d76abc96bd3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f10bd6f9c324d8669f4506be9aba10b0539ffcb2fe3c7e6c4561d0fad2be5c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10bd6f9c324d8669f4506be9aba10b0539ffcb2fe3c7e6c4561d0fad2be5c04->enter($__internal_f10bd6f9c324d8669f4506be9aba10b0539ffcb2fe3c7e6c4561d0fad2be5c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f10bd6f9c324d8669f4506be9aba10b0539ffcb2fe3c7e6c4561d0fad2be5c04->leave($__internal_f10bd6f9c324d8669f4506be9aba10b0539ffcb2fe3c7e6c4561d0fad2be5c04_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9fd10f37b89104a22dcb9a8eacd7b5b6e2cb0efb8b474699308acead39104f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9fd10f37b89104a22dcb9a8eacd7b5b6e2cb0efb8b474699308acead39104f8->enter($__internal_f9fd10f37b89104a22dcb9a8eacd7b5b6e2cb0efb8b474699308acead39104f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f9fd10f37b89104a22dcb9a8eacd7b5b6e2cb0efb8b474699308acead39104f8->leave($__internal_f9fd10f37b89104a22dcb9a8eacd7b5b6e2cb0efb8b474699308acead39104f8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_17f3889aa2b17543cc80c9f2e3b0ce003c97f161212210370d2e08703668e344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f3889aa2b17543cc80c9f2e3b0ce003c97f161212210370d2e08703668e344->enter($__internal_17f3889aa2b17543cc80c9f2e3b0ce003c97f161212210370d2e08703668e344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_17f3889aa2b17543cc80c9f2e3b0ce003c97f161212210370d2e08703668e344->leave($__internal_17f3889aa2b17543cc80c9f2e3b0ce003c97f161212210370d2e08703668e344_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/barbara/Workspace/Warsztat_6/index_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
