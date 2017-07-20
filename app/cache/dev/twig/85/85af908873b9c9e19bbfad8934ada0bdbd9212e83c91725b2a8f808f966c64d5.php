<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_357049e341fecfed79077c5263b48428225f223aba62777c4e443c9c3615831b extends Twig_Template
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
        $__internal_d170b72ce8509efd78bff481fe700fa58b67d44a4cbd1a71351f7d6f10b2e96e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d170b72ce8509efd78bff481fe700fa58b67d44a4cbd1a71351f7d6f10b2e96e->enter($__internal_d170b72ce8509efd78bff481fe700fa58b67d44a4cbd1a71351f7d6f10b2e96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d170b72ce8509efd78bff481fe700fa58b67d44a4cbd1a71351f7d6f10b2e96e->leave($__internal_d170b72ce8509efd78bff481fe700fa58b67d44a4cbd1a71351f7d6f10b2e96e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3faa3ace13c82412e4e06983afa88d820c05d5f45201a7d7e1cf6abb404df3b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3faa3ace13c82412e4e06983afa88d820c05d5f45201a7d7e1cf6abb404df3b3->enter($__internal_3faa3ace13c82412e4e06983afa88d820c05d5f45201a7d7e1cf6abb404df3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_3faa3ace13c82412e4e06983afa88d820c05d5f45201a7d7e1cf6abb404df3b3->leave($__internal_3faa3ace13c82412e4e06983afa88d820c05d5f45201a7d7e1cf6abb404df3b3_prof);

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
", "@FOSUser/Registration/register.html.twig", "/home/barbara/Workspace/IndexCards/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
