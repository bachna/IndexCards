<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c02a7e5427300dce82fa28a77016b4bee6a87c7815367ac853adfa0b75d3945b extends Twig_Template
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
        $__internal_64de716c48b5c5ef021836820caabe6a71c096f91f2bd51839ecc297752f0c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64de716c48b5c5ef021836820caabe6a71c096f91f2bd51839ecc297752f0c57->enter($__internal_64de716c48b5c5ef021836820caabe6a71c096f91f2bd51839ecc297752f0c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64de716c48b5c5ef021836820caabe6a71c096f91f2bd51839ecc297752f0c57->leave($__internal_64de716c48b5c5ef021836820caabe6a71c096f91f2bd51839ecc297752f0c57_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3b16e7e1df90a7707625130875e95881b310f31ed053dcb688d448a1dbd552d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b16e7e1df90a7707625130875e95881b310f31ed053dcb688d448a1dbd552d->enter($__internal_d3b16e7e1df90a7707625130875e95881b310f31ed053dcb688d448a1dbd552d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_d3b16e7e1df90a7707625130875e95881b310f31ed053dcb688d448a1dbd552d->leave($__internal_d3b16e7e1df90a7707625130875e95881b310f31ed053dcb688d448a1dbd552d_prof);

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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/barbara/Workspace/Warsztat_6/index_project/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
