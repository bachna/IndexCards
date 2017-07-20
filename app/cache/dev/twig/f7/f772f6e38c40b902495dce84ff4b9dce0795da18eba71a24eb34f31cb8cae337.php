<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_ae3d92ef408bba462fb7681c2dd93dda7875e98c1492e3070678678b9c1e39b2 extends Twig_Template
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
        $__internal_55efd542dbab0f326005fe946bf6d006e728814dd586752479b94c288a4fc494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55efd542dbab0f326005fe946bf6d006e728814dd586752479b94c288a4fc494->enter($__internal_55efd542dbab0f326005fe946bf6d006e728814dd586752479b94c288a4fc494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55efd542dbab0f326005fe946bf6d006e728814dd586752479b94c288a4fc494->leave($__internal_55efd542dbab0f326005fe946bf6d006e728814dd586752479b94c288a4fc494_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cbe276467e72267f4693d7779dc1668dfdce0bcefee030d19eb0689d948bcbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe276467e72267f4693d7779dc1668dfdce0bcefee030d19eb0689d948bcbbd->enter($__internal_cbe276467e72267f4693d7779dc1668dfdce0bcefee030d19eb0689d948bcbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_cbe276467e72267f4693d7779dc1668dfdce0bcefee030d19eb0689d948bcbbd->leave($__internal_cbe276467e72267f4693d7779dc1668dfdce0bcefee030d19eb0689d948bcbbd_prof);

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
", "@FOSUser/Registration/register.html.twig", "/home/barbara/Workspace/Warsztat_6/index_project/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
