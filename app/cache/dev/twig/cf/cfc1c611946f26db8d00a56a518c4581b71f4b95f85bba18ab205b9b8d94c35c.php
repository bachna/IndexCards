<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_46456579b83cf79e1de2332e412498d9189631b9385b62a17d8c27cb2363179d extends Twig_Template
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
        $__internal_48fa5bd56524dca8477654e409328e801ae8ba67671535f6aed2bb5150d3fa18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fa5bd56524dca8477654e409328e801ae8ba67671535f6aed2bb5150d3fa18->enter($__internal_48fa5bd56524dca8477654e409328e801ae8ba67671535f6aed2bb5150d3fa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form class=\"ui form\" action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 8
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "    <div class=\"ui horizontal divider\">
        <h2> Log in </h2>
    </div>
    <br>
    <div class=\"field\">
        <div class=\"two fields ui left aligned container\">
            <div class=\"field\">
                <label for=\"username\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
            </div>
            <div class=\"field\">
                <label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            </div>
        </div>
        ";
        // line 27
        echo "            ";
        // line 28
        echo "            ";
        // line 29
        echo "        ";
        // line 30
        echo "        <div class=\"ui right aligned container\">
            <button type=\"Log in\" class=\"positive ui button\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                Log in
            </button>
        </div>
    </div>
</form>
";
        
        $__internal_48fa5bd56524dca8477654e409328e801ae8ba67671535f6aed2bb5150d3fa18->leave($__internal_48fa5bd56524dca8477654e409328e801ae8ba67671535f6aed2bb5150d3fa18_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 31,  80 => 30,  78 => 29,  76 => 28,  74 => 27,  67 => 22,  61 => 19,  57 => 18,  48 => 11,  42 => 9,  40 => 8,  36 => 7,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
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

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form class=\"ui form\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}
    <div class=\"ui horizontal divider\">
        <h2> Log in </h2>
    </div>
    <br>
    <div class=\"field\">
        <div class=\"two fields ui left aligned container\">
            <div class=\"field\">
                <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
            </div>
            <div class=\"field\">
                <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            </div>
        </div>
        {#<div class=\"ui checkbox left aligned container\">#}
            {#<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />#}
            {#<label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>#}
        {#</div>#}
        <div class=\"ui right aligned container\">
            <button type=\"Log in\" class=\"positive ui button\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                Log in
            </button>
        </div>
    </div>
</form>
", "@FOSUser/Security/login_content.html.twig", "/home/barbara/Workspace/Warsztat_6/index_project/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
