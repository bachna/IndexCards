<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_7e766e55c0d5ed89d593f1c27beccffee1607448dc96461709d11c7d03af2b8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6604588cdd04d66361c26bb2a0b07ea060a9c830ba9e16b81ccb951b02f7b0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6604588cdd04d66361c26bb2a0b07ea060a9c830ba9e16b81ccb951b02f7b0d8->enter($__internal_6604588cdd04d66361c26bb2a0b07ea060a9c830ba9e16b81ccb951b02f7b0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6604588cdd04d66361c26bb2a0b07ea060a9c830ba9e16b81ccb951b02f7b0d8->leave($__internal_6604588cdd04d66361c26bb2a0b07ea060a9c830ba9e16b81ccb951b02f7b0d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e9ef7e41cf09bdde48e4d8e33d4ce6af7fc44b6b23739d92f9dc4da91b3b66d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9ef7e41cf09bdde48e4d8e33d4ce6af7fc44b6b23739d92f9dc4da91b3b66d->enter($__internal_2e9ef7e41cf09bdde48e4d8e33d4ce6af7fc44b6b23739d92f9dc4da91b3b66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 6
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 7
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 8
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    <div>
        ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "    </div>

";
        
        $__internal_2e9ef7e41cf09bdde48e4d8e33d4ce6af7fc44b6b23739d92f9dc4da91b3b66d->leave($__internal_2e9ef7e41cf09bdde48e4d8e33d4ce6af7fc44b6b23739d92f9dc4da91b3b66d_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1d21bf531a06838821d4e01244041bc5006825153cde97a92ab866622eb6ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d21bf531a06838821d4e01244041bc5006825153cde97a92ab866622eb6ae3->enter($__internal_a1d21bf531a06838821d4e01244041bc5006825153cde97a92ab866622eb6ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "        ";
        
        $__internal_a1d21bf531a06838821d4e01244041bc5006825153cde97a92ab866622eb6ae3->leave($__internal_a1d21bf531a06838821d4e01244041bc5006825153cde97a92ab866622eb6ae3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 16,  92 => 15,  83 => 17,  81 => 15,  77 => 13,  74 => 12,  68 => 11,  59 => 8,  54 => 7,  49 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>

{% endblock %}", "@FOSUser/layout.html.twig", "/home/barbara/Workspace/Warsztat_6/index_project/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
