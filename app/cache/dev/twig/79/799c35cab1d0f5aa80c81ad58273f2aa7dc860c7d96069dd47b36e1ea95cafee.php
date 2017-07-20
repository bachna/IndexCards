<?php

/* base.html.twig */
class __TwigTemplate_2d914c19d4b82d87cf7ca89097f44f0e04c54a9ad913012886310c29fe69807c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1c2765e8044e2db256be93c6279e1412daba52c681ead2dca2fbfb272e2dc68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c2765e8044e2db256be93c6279e1412daba52c681ead2dca2fbfb272e2dc68->enter($__internal_f1c2765e8044e2db256be93c6279e1412daba52c681ead2dca2fbfb272e2dc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        <br>
        <div class=\"ui center aligned container\">
            <br>
            <div class=\"ui grid\">
                <div class=\"four wide column\"></div>
                <div class=\"eight wide column\" style=\"background-color: white\">
                    <div class=\"ui attached stackable menu\">
                        <div class=\"ui container\">
                            <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"item\">
                                <i class=\"comments outline icon\"></i>
                                New quiz
                            </a>
                        </div>
                        <div class=\"right menu\">
                            ";
        // line 28
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("AppBundle:Builder:mainMenu");
        echo "
                        </div>
                    </div>
                    <br>
                    <br>
                    ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "                </div>
                <div class=\"four wide column\"></div>
            </div>
        </div>
    </body>
</html>
";
        
        $__internal_f1c2765e8044e2db256be93c6279e1412daba52c681ead2dca2fbfb272e2dc68->leave($__internal_f1c2765e8044e2db256be93c6279e1412daba52c681ead2dca2fbfb272e2dc68_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_725c9f486a5552128cd280aa8ee00131d519ea2b05668c18cb61a006c36ec2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725c9f486a5552128cd280aa8ee00131d519ea2b05668c18cb61a006c36ec2b0->enter($__internal_725c9f486a5552128cd280aa8ee00131d519ea2b05668c18cb61a006c36ec2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Index Cards ";
        
        $__internal_725c9f486a5552128cd280aa8ee00131d519ea2b05668c18cb61a006c36ec2b0->leave($__internal_725c9f486a5552128cd280aa8ee00131d519ea2b05668c18cb61a006c36ec2b0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a76e824d6e430c25d28e9aa5fad0cf3e6d0e6cfff233745d2c3269ba7c9d7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a76e824d6e430c25d28e9aa5fad0cf3e6d0e6cfff233745d2c3269ba7c9d7b4->enter($__internal_5a76e824d6e430c25d28e9aa5fad0cf3e6d0e6cfff233745d2c3269ba7c9d7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/semantic/semantic.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        ";
        
        $__internal_5a76e824d6e430c25d28e9aa5fad0cf3e6d0e6cfff233745d2c3269ba7c9d7b4->leave($__internal_5a76e824d6e430c25d28e9aa5fad0cf3e6d0e6cfff233745d2c3269ba7c9d7b4_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d87d134957dac84d05a9cc08c49ab7bd1b05ac8dcef41a364c4378b05d160266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87d134957dac84d05a9cc08c49ab7bd1b05ac8dcef41a364c4378b05d160266->enter($__internal_d87d134957dac84d05a9cc08c49ab7bd1b05ac8dcef41a364c4378b05d160266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/semantic/semantic.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_d87d134957dac84d05a9cc08c49ab7bd1b05ac8dcef41a364c4378b05d160266->leave($__internal_d87d134957dac84d05a9cc08c49ab7bd1b05ac8dcef41a364c4378b05d160266_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_86ae83ea075bb953672045293047bc1704a9f0cd5a5e27fc9b7c0c24cf2f09dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ae83ea075bb953672045293047bc1704a9f0cd5a5e27fc9b7c0c24cf2f09dc->enter($__internal_86ae83ea075bb953672045293047bc1704a9f0cd5a5e27fc9b7c0c24cf2f09dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_86ae83ea075bb953672045293047bc1704a9f0cd5a5e27fc9b7c0c24cf2f09dc->leave($__internal_86ae83ea075bb953672045293047bc1704a9f0cd5a5e27fc9b7c0c24cf2f09dc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  119 => 10,  113 => 9,  103 => 7,  97 => 6,  85 => 5,  72 => 34,  70 => 33,  62 => 28,  53 => 22,  41 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %} Index Cards {% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('/semantic/semantic.css') }}\" rel=\"stylesheet\"/>
        {% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('/semantic/semantic.js') }}\"></script>
        {% endblock %}
    </head>
    <body>
        <br>
        <div class=\"ui center aligned container\">
            <br>
            <div class=\"ui grid\">
                <div class=\"four wide column\"></div>
                <div class=\"eight wide column\" style=\"background-color: white\">
                    <div class=\"ui attached stackable menu\">
                        <div class=\"ui container\">
                            <a href=\"{{ path('homepage') }}\" class=\"item\">
                                <i class=\"comments outline icon\"></i>
                                New quiz
                            </a>
                        </div>
                        <div class=\"right menu\">
                            {{ knp_menu_render('AppBundle:Builder:mainMenu') }}
                        </div>
                    </div>
                    <br>
                    <br>
                    {% block body %}{% endblock %}
                </div>
                <div class=\"four wide column\"></div>
            </div>
        </div>
    </body>
</html>
", "base.html.twig", "/home/barbara/Workspace/IndexCards/app/Resources/views/base.html.twig");
    }
}
