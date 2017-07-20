<?php

/* quiz/index.html.twig */
class __TwigTemplate_5dd1d2f682fdef1e5942280a2ab7e43f73ddda682f966fa6548302b4cf8ac491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "quiz/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d29bdce35feca03ae29b678a40e57912604f908187f51cfec5ff816087438af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d29bdce35feca03ae29b678a40e57912604f908187f51cfec5ff816087438af->enter($__internal_8d29bdce35feca03ae29b678a40e57912604f908187f51cfec5ff816087438af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "quiz/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d29bdce35feca03ae29b678a40e57912604f908187f51cfec5ff816087438af->leave($__internal_8d29bdce35feca03ae29b678a40e57912604f908187f51cfec5ff816087438af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e82c77c79ecbbd434cbc161fdf67e0b7624ca6ac5b5ff02d5a90517496404d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e82c77c79ecbbd434cbc161fdf67e0b7624ca6ac5b5ff02d5a90517496404d0->enter($__internal_6e82c77c79ecbbd434cbc161fdf67e0b7624ca6ac5b5ff02d5a90517496404d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Quizzes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>User</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quizzes"] ?? $this->getContext($context, "quizzes")));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_show", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quiz"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["quiz"], "user", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["quiz"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quiz"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_show", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_edit", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_new");
        echo "\">Create a new quiz</a>
        </li>
    </ul>
";
        
        $__internal_6e82c77c79ecbbd434cbc161fdf67e0b7624ca6ac5b5ff02d5a90517496404d0->leave($__internal_6e82c77c79ecbbd434cbc161fdf67e0b7624ca6ac5b5ff02d5a90517496404d0_prof);

    }

    public function getTemplateName()
    {
        return "quiz/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  98 => 33,  86 => 27,  80 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Quizzes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>User</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for quiz in quizzes %}
            <tr>
                <td><a href=\"{{ path('quiz_show', { 'id': quiz.id }) }}\">{{ quiz.id }}</a></td>
                <td>{{ quiz.user }}</td>
                <td>{% if quiz.date %}{{ quiz.date|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('quiz_show', { 'id': quiz.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('quiz_edit', { 'id': quiz.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('quiz_new') }}\">Create a new quiz</a>
        </li>
    </ul>
{% endblock %}
", "quiz/index.html.twig", "/home/barbara/Workspace/Warsztat_6/index_project/app/Resources/views/quiz/index.html.twig");
    }
}
