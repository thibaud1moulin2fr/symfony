<?php

/* all.html.twig */

class __TwigTemplate_822e5cd58d4faefd55be7904dc9a4c7058e1e59c73566f0b70dfb80cdcd3c989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "all.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "    <h2>Liste des expressions</h2>
    <input type=\"text\" id=\"filter-field\" />
    <table id='term-list'>
        <thead>
            <tr>
                <td>Terme</td>
                <td>Définition</td>
                <td>Exemple</td>
                <td>Nombre de votes</td>
            </tr>
        </thead>
        <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allTerms"]) ? $context["allTerms"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 16
            echo "                <tr>
                    <td><a href=\"index.php?page=detail&term=";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["term"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["term"], "term", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, ($this->getAttribute($context["term"], "definition1", array()) . $this->getAttribute($context["term"], "definition2", array())), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["term"], "example", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["term"], "votesCount", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>
";
    }

    public function block_javascripts($context, array $blocks = array())
    {
        echo "\$
            ";
        // line 27
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            <script src=\"assets/filter.js\"></script>
        ";
    }

    // line 2

    public function getTemplateName()
    {
        return "all.html.twig";
    }

    // line 26

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(87 => 27, 82 => 26, 76 => 23, 67 => 20, 63 => 19, 59 => 18, 53 => 17, 50 => 16, 46 => 15, 32 => 3, 29 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% block main %}
    <h2>Liste des expressions</h2>
    <input type=\"text\" id=\"filter-field\" />
    <table id='term-list'>
        <thead>
            <tr>
                <td>Terme</td>
                <td>Définition</td>
                <td>Exemple</td>
                <td>Nombre de votes</td>
            </tr>
        </thead>
        <tbody>
            {% for term in allTerms %}
                <tr>
                    <td><a href=\"index.php?page=detail&term={{ term.id }}\">{{ term.term }}</a></td>
                    <td>{{ term.definition1 ~ term.definition2 }}</td>
                    <td>{{ term.example }}</td>
                    <td>{{ term.votesCount }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
        {% block javascripts %}\$
            {{ parent() }}
            <script src=\"assets/filter.js\"></script>
        {% endblock %}", "all.html.twig", "C:\\Users\\tmoulin2016\\Desktop\\php\\tools\\wamp64\\www\\wikebec\\View\\templates\\all.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }
}
