<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b80571573442d7ad76f2f48a77ca53b45a01e09d269a848af495c6542c34e211 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b204735c4d234c37eac5564bd2d742c9a2684c09367f9e7f9fd885bde911a280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b204735c4d234c37eac5564bd2d742c9a2684c09367f9e7f9fd885bde911a280->enter($__internal_b204735c4d234c37eac5564bd2d742c9a2684c09367f9e7f9fd885bde911a280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b204735c4d234c37eac5564bd2d742c9a2684c09367f9e7f9fd885bde911a280->leave($__internal_b204735c4d234c37eac5564bd2d742c9a2684c09367f9e7f9fd885bde911a280_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_117bcb232ce864e6ac029686f8aae3eddcd06cc15efe632569356ccea56ed3c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117bcb232ce864e6ac029686f8aae3eddcd06cc15efe632569356ccea56ed3c2->enter($__internal_117bcb232ce864e6ac029686f8aae3eddcd06cc15efe632569356ccea56ed3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_117bcb232ce864e6ac029686f8aae3eddcd06cc15efe632569356ccea56ed3c2->leave($__internal_117bcb232ce864e6ac029686f8aae3eddcd06cc15efe632569356ccea56ed3c2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_055ea4bf7ee3841e46487f030a024d05774f3849ee342c210362c98c1a9d3652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055ea4bf7ee3841e46487f030a024d05774f3849ee342c210362c98c1a9d3652->enter($__internal_055ea4bf7ee3841e46487f030a024d05774f3849ee342c210362c98c1a9d3652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_055ea4bf7ee3841e46487f030a024d05774f3849ee342c210362c98c1a9d3652->leave($__internal_055ea4bf7ee3841e46487f030a024d05774f3849ee342c210362c98c1a9d3652_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e2af775fbc81ee45b31c33633a3d0859a090ec58b475954c47c1df77692a79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2af775fbc81ee45b31c33633a3d0859a090ec58b475954c47c1df77692a79b->enter($__internal_2e2af775fbc81ee45b31c33633a3d0859a090ec58b475954c47c1df77692a79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2e2af775fbc81ee45b31c33633a3d0859a090ec58b475954c47c1df77692a79b->leave($__internal_2e2af775fbc81ee45b31c33633a3d0859a090ec58b475954c47c1df77692a79b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/barbara/Workspace/Warsztat_6/index_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
