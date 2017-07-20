<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ca69231563aed1c29f250dc477362173a5c224fde6e3b9f33a38db0d464c73e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6683498e9270ce5d0448427927bb179eab43085f78d1a75fdaf8d764972e0899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6683498e9270ce5d0448427927bb179eab43085f78d1a75fdaf8d764972e0899->enter($__internal_6683498e9270ce5d0448427927bb179eab43085f78d1a75fdaf8d764972e0899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6683498e9270ce5d0448427927bb179eab43085f78d1a75fdaf8d764972e0899->leave($__internal_6683498e9270ce5d0448427927bb179eab43085f78d1a75fdaf8d764972e0899_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41a6f600b916bb8fc209b1fc39e7b141bf017efad50baba12125778aee438467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a6f600b916bb8fc209b1fc39e7b141bf017efad50baba12125778aee438467->enter($__internal_41a6f600b916bb8fc209b1fc39e7b141bf017efad50baba12125778aee438467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_41a6f600b916bb8fc209b1fc39e7b141bf017efad50baba12125778aee438467->leave($__internal_41a6f600b916bb8fc209b1fc39e7b141bf017efad50baba12125778aee438467_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include(\"@FOSUser/Security/login_content.html.twig\") }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/barbara/Workspace/IndexCards/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
