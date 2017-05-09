<?php

/* detail.html.twig */

class __TwigTemplate_826fc4a389cda2e623f5124a06630b7862b36b819ca6c5d97cc9ae0ae55b53cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "detail.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "    <h2>Détail</h2>
    <button id=\"like\">Like</button>
    ";
        // line 5
        $this->loadTemplate("oneTerm.html.twig", "detail.html.twig", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "detail.html.twig";
    }

    // line 2

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(35 => 5, 31 => 3, 28 => 2, 11 => 1,);
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
    <h2>Détail</h2>
    <button id=\"like\">Like</button>
    {% include 'oneTerm.html.twig' %}
{% endblock %}", "detail.html.twig", "C:\\Users\\tmoulin2016\\Desktop\\php\\tools\\wamp64\\www\\wikebec\\View\\templates\\detail.html.twig");
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
