<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a2e278dc2f1f3b9cc764ca0a599e25be7cf94e51a73f599521ef6d2009d3d8f6 extends Twig_Template
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
        $__internal_ab3a5c665712395a8ab97477f163e82bf91d0931c5eab2cbcdf6b532450db484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3a5c665712395a8ab97477f163e82bf91d0931c5eab2cbcdf6b532450db484->enter($__internal_ab3a5c665712395a8ab97477f163e82bf91d0931c5eab2cbcdf6b532450db484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab3a5c665712395a8ab97477f163e82bf91d0931c5eab2cbcdf6b532450db484->leave($__internal_ab3a5c665712395a8ab97477f163e82bf91d0931c5eab2cbcdf6b532450db484_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01fa8598d8ac0811b829472c58bf0f423afed681e4c5a73aa2a07e415fb609bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01fa8598d8ac0811b829472c58bf0f423afed681e4c5a73aa2a07e415fb609bb->enter($__internal_01fa8598d8ac0811b829472c58bf0f423afed681e4c5a73aa2a07e415fb609bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_01fa8598d8ac0811b829472c58bf0f423afed681e4c5a73aa2a07e415fb609bb->leave($__internal_01fa8598d8ac0811b829472c58bf0f423afed681e4c5a73aa2a07e415fb609bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0dbd0b535c9cf734500ac0d867459b9b899dbbd9cd29fd4fd46cb26b57ed39f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbd0b535c9cf734500ac0d867459b9b899dbbd9cd29fd4fd46cb26b57ed39f8->enter($__internal_0dbd0b535c9cf734500ac0d867459b9b899dbbd9cd29fd4fd46cb26b57ed39f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0dbd0b535c9cf734500ac0d867459b9b899dbbd9cd29fd4fd46cb26b57ed39f8->leave($__internal_0dbd0b535c9cf734500ac0d867459b9b899dbbd9cd29fd4fd46cb26b57ed39f8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd8073bd2f800169f293d563916bfdb55524b99bf7b2c2e27c13285667b4ee84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8073bd2f800169f293d563916bfdb55524b99bf7b2c2e27c13285667b4ee84->enter($__internal_dd8073bd2f800169f293d563916bfdb55524b99bf7b2c2e27c13285667b4ee84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dd8073bd2f800169f293d563916bfdb55524b99bf7b2c2e27c13285667b4ee84->leave($__internal_dd8073bd2f800169f293d563916bfdb55524b99bf7b2c2e27c13285667b4ee84_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/barbara/Workspace/IndexCards/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
