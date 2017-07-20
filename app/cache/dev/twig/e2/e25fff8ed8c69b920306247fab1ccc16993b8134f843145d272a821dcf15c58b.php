<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_1ea7a5b64fc189d3f8ebd7cf39ac81962b886c1efa7939af5091feb6245fba55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31a16e5ef3c28f78c9be1dbdda683a2a08da3e770785f4a44b4f82c3f2014d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a16e5ef3c28f78c9be1dbdda683a2a08da3e770785f4a44b4f82c3f2014d84->enter($__internal_31a16e5ef3c28f78c9be1dbdda683a2a08da3e770785f4a44b4f82c3f2014d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_31a16e5ef3c28f78c9be1dbdda683a2a08da3e770785f4a44b4f82c3f2014d84->leave($__internal_31a16e5ef3c28f78c9be1dbdda683a2a08da3e770785f4a44b4f82c3f2014d84_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/home/barbara/Workspace/Warsztat_6/index_project/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
