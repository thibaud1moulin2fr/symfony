<?php

/* home.html.twig */

class __TwigTemplate_47737d185073bf41df1828c9538d5a629bbfa0436ccb97637decf089c1b5df49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "    <h2>Bienvenue sur Wikebec;)</h2>
    ";
        // line 4
        $this->loadTemplate("oneTerm.html.twig", "home.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    // line 2

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(34 => 4, 31 => 3, 28 => 2, 11 => 1,);
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
    <h2>Bienvenue sur Wikebec;)</h2>
    {% include 'oneTerm.html.twig' %}
{% endblock %}", "home.html.twig", "C:\\Users\\tmoulin2016\\Desktop\\php\\tools\\wamp64\\www\\wikebec\\View\\templates\\home.html.twig");
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
