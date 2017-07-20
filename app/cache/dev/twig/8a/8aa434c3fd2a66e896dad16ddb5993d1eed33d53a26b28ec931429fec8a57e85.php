<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_27398ce18794ce9d64f6ae988a531570133e6cc874a1903850ba265e2505956c extends Twig_Template
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
        $__internal_5871b07d431d66c711784fc76654309e24463bf2eb8605d0e0180db8dc6fe7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5871b07d431d66c711784fc76654309e24463bf2eb8605d0e0180db8dc6fe7d1->enter($__internal_5871b07d431d66c711784fc76654309e24463bf2eb8605d0e0180db8dc6fe7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5871b07d431d66c711784fc76654309e24463bf2eb8605d0e0180db8dc6fe7d1->leave($__internal_5871b07d431d66c711784fc76654309e24463bf2eb8605d0e0180db8dc6fe7d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd167a4c331b8a72bb3538a2a58c5b81dd0043ca024c7d25c828902840d02df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd167a4c331b8a72bb3538a2a58c5b81dd0043ca024c7d25c828902840d02df7->enter($__internal_dd167a4c331b8a72bb3538a2a58c5b81dd0043ca024c7d25c828902840d02df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_dd167a4c331b8a72bb3538a2a58c5b81dd0043ca024c7d25c828902840d02df7->leave($__internal_dd167a4c331b8a72bb3538a2a58c5b81dd0043ca024c7d25c828902840d02df7_prof);

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
", "@FOSUser/Security/login.html.twig", "/home/barbara/Workspace/Warsztat_6/index_project/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
