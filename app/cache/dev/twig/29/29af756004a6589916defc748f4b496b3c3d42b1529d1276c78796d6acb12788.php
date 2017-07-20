<?php

/* menu.html.twig */
class __TwigTemplate_6dc861e07f7a23b886077fb7735bebe14bd9e8f3d02ffbb2b1b2bc77c964b07f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KnpMenuBundle::menu.html.twig", "menu.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6a26229bb92fa59411678a56c852090179204c09b94d3f0b2e0f018e65a01e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a26229bb92fa59411678a56c852090179204c09b94d3f0b2e0f018e65a01e2->enter($__internal_f6a26229bb92fa59411678a56c852090179204c09b94d3f0b2e0f018e65a01e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6a26229bb92fa59411678a56c852090179204c09b94d3f0b2e0f018e65a01e2->leave($__internal_f6a26229bb92fa59411678a56c852090179204c09b94d3f0b2e0f018e65a01e2_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_64cbe6db6444c097ed3102bbd390f537354f2f98f298a6699c18193ca7f36ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64cbe6db6444c097ed3102bbd390f537354f2f98f298a6699c18193ca7f36ce3->enter($__internal_64cbe6db6444c097ed3102bbd390f537354f2f98f298a6699c18193ca7f36ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 4
        echo "    ";
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 5
            echo "        ";
            $context["knp_menu"] = $this;
            // line 6
            echo "        ";
            $this->displayBlock("children", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_64cbe6db6444c097ed3102bbd390f537354f2f98f298a6699c18193ca7f36ce3->leave($__internal_64cbe6db6444c097ed3102bbd390f537354f2f98f298a6699c18193ca7f36ce3_prof);

    }

    // line 10
    public function block_item($context, array $blocks = array())
    {
        $__internal_c24be8ce0fbcd7001d58ccfba19c4b26b92da3a926b77552ac942f1789f12ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24be8ce0fbcd7001d58ccfba19c4b26b92da3a926b77552ac942f1789f12ee3->enter($__internal_c24be8ce0fbcd7001d58ccfba19c4b26b92da3a926b77552ac942f1789f12ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 11
        echo "    ";
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            echo "        ";
            // line 13
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 14
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 15
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 16
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 17
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 19
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 20
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 22
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 23
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 25
            echo "
        ";
            // line 27
            echo "        ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 28
                echo "            ";
                if (( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 29
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())));
                    // line 30
                    echo "            ";
                }
                // line 31
                echo "        ";
            } elseif ( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 32
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 35
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 36
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 37
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 39
            echo "        ";
            // line 40
            echo "        ";
            $context["knp_menu"] = $this;
            // line 41
            echo "        <span>";
            // line 42
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method") || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 43
                echo "                ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 45
                echo "                ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 47
            echo "            ";
            // line 48
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 49
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 50
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 51
            echo "            ";
            $this->displayBlock("list", $context, $blocks);
            echo "
        </span>
    ";
        }
        
        $__internal_c24be8ce0fbcd7001d58ccfba19c4b26b92da3a926b77552ac942f1789f12ee3->leave($__internal_c24be8ce0fbcd7001d58ccfba19c4b26b92da3a926b77552ac942f1789f12ee3_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 51,  140 => 50,  138 => 49,  136 => 48,  134 => 47,  130 => 45,  126 => 43,  124 => 42,  122 => 41,  119 => 40,  117 => 39,  114 => 37,  112 => 36,  110 => 35,  107 => 32,  104 => 31,  101 => 30,  99 => 29,  96 => 28,  93 => 27,  90 => 25,  87 => 23,  85 => 22,  82 => 20,  80 => 19,  77 => 17,  75 => 16,  73 => 15,  71 => 14,  69 => 13,  67 => 12,  64 => 11,  58 => 10,  47 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'KnpMenuBundle::menu.html.twig' %}

{% block list %}
    {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
        {% import _self as knp_menu %}
        {{ block('children') }}
    {% endif %}
{% endblock %}

{% block item %}
    {% if item.displayed %}
        {# building the class of the item #}
        {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
        {%- if item.actsLikeFirst %}
            {%- set classes = classes|merge([options.firstClass]) %}
        {%- endif %}
        {%- if item.actsLikeLast %}
            {%- set classes = classes|merge([options.lastClass]) %}
        {%- endif %}

        {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
        {% if item.hasChildren and options.depth is not same as(0) %}
            {% if options.branch_class is not empty and item.displayChildren %}
                {%- set classes = classes|merge([options.branch_class]) %}
            {% endif %}
        {% elseif options.leaf_class is not empty %}
            {%- set classes = classes|merge([options.leaf_class]) %}
        {%- endif %}

        {%- set attributes = item.attributes %}
        {%- if classes is not empty %}
            {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
        {%- endif %}
        {# displaying the item #}
        {% import _self as knp_menu %}
        <span>
            {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
                {{ block('linkElement') }}
            {%- else %}
                {{ block('spanElement') }}
            {%- endif %}
            {# render the list of children#}
            {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
            {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
            {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
            {{ block('list') }}
        </span>
    {% endif %}
{% endblock %}", "menu.html.twig", "/home/barbara/Workspace/Warsztat_6/index_project/app/Resources/views/menu.html.twig");
    }
}
