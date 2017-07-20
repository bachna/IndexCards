<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_49b802a39537a34196ed819667a95e5c4d0e6f88e520ad2af1d156a3e53d07dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_d5f508febb41f41cc0291478b7efca3f8cb3c006e5d1dcb50d62191accec849b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f508febb41f41cc0291478b7efca3f8cb3c006e5d1dcb50d62191accec849b->enter($__internal_d5f508febb41f41cc0291478b7efca3f8cb3c006e5d1dcb50d62191accec849b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5f508febb41f41cc0291478b7efca3f8cb3c006e5d1dcb50d62191accec849b->leave($__internal_d5f508febb41f41cc0291478b7efca3f8cb3c006e5d1dcb50d62191accec849b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ace1633fb4f9943a8ae8ef9167ae415ad30941ee579259bbfb621960c4d32789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace1633fb4f9943a8ae8ef9167ae415ad30941ee579259bbfb621960c4d32789->enter($__internal_ace1633fb4f9943a8ae8ef9167ae415ad30941ee579259bbfb621960c4d32789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_ace1633fb4f9943a8ae8ef9167ae415ad30941ee579259bbfb621960c4d32789->leave($__internal_ace1633fb4f9943a8ae8ef9167ae415ad30941ee579259bbfb621960c4d32789_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
    {% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/barbara/Workspace/Warsztat_6/index_project/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
