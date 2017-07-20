<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_5fc399e6e854a2b3a483077e8deceb6650d480d545dd2100e6ef573faf2f6b0d extends Twig_Template
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
        $__internal_8f9909fb112a052fa39e50c9f70822eafea1723f655b718587bcdeb7ef85794c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9909fb112a052fa39e50c9f70822eafea1723f655b718587bcdeb7ef85794c->enter($__internal_8f9909fb112a052fa39e50c9f70822eafea1723f655b718587bcdeb7ef85794c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        // line 8
        echo "    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "



";
        // line 14
        echo "
";
        // line 16
        echo "    ";
        // line 17
        echo "        ";
        // line 18
        echo "    ";
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        // line 21
        echo "        ";
        // line 22
        echo "            ";
        // line 23
        echo "                ";
        // line 24
        echo "                ";
        // line 25
        echo "            ";
        // line 26
        echo "            ";
        // line 27
        echo "                ";
        // line 28
        echo "                ";
        // line 29
        echo "            ";
        // line 30
        echo "        ";
        // line 31
        echo "        ";
        // line 32
        echo "            ";
        // line 33
        echo "            ";
        // line 34
        echo "            ";
        // line 35
        echo "        ";
        // line 36
        echo "    ";
        // line 37
        echo "    ";
        // line 38
        echo "        ";
        // line 39
        echo "    ";
        // line 41
        echo "
";
        
        $__internal_8f9909fb112a052fa39e50c9f70822eafea1723f655b718587bcdeb7ef85794c->leave($__internal_8f9909fb112a052fa39e50c9f70822eafea1723f655b718587bcdeb7ef85794c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 41,  95 => 39,  93 => 38,  91 => 37,  89 => 36,  87 => 35,  85 => 34,  83 => 33,  81 => 32,  79 => 31,  77 => 30,  75 => 29,  73 => 28,  71 => 27,  69 => 26,  67 => 25,  65 => 24,  63 => 23,  61 => 22,  59 => 21,  57 => 20,  55 => 19,  53 => 18,  51 => 17,  49 => 16,  46 => 14,  39 => 9,  37 => 8,  35 => 7,  33 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    {#<br>#}
    {#{{ form_widget(form.username) }}#}
    {#{{ form_widget(form.email) }}#}
    {#{{ form_widget(form.password) }}#}
{{ form_end(form) }}



{#Do ostylowanie później#}

{#<form class=\"ui form\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">#}
    {#<div class=\"ui horizontal divider\">#}
        {#<h2> Log in </h2>#}
    {#</div>#}
    {#<br>#}
    {#<div class=\"field\">#}
        {#<div class=\"two fields ui left aligned container\">#}
            {#<div class=\"field\">#}
                {#<label for=\"username\">{{ 'security.login.username'|trans }}</label>#}
                {#<input type=\"text\" id=\"username\" name=\"_username\" value=\"\" required=\"required\" />#}
            {#</div>#}
            {#<div class=\"field\">#}
                {#<label for=\"password\">{{ 'security.login.password'|trans }}</label>#}
                {#<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />#}
            {#</div>#}
        {#</div>#}
        {#<div class=\"ui right aligned container\">#}
            {#<button type=\"Log in\" class=\"positive ui button\" id=\"_submit\" name=\"_submit\" value=\"\" />#}
            {#Log in#}
            {#</button>#}
        {#</div>#}
    {#</div>#}
    {#<div>#}
        {#<input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />#}
    {#</div>#}
{#</form>#}

", "@FOSUser/Registration/register_content.html.twig", "/home/barbara/Workspace/IndexCards/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
