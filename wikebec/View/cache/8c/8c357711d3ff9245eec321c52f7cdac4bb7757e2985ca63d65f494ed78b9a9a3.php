<?php

/* error404.html.twig */

class __TwigTemplate_e9bb9c3d1264617787e093685558849d354ac6209f785748ddbc236518d116e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "error404.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'title' => array($this, 'block_title'),
        );
    }

    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "    <h1>Error 404 !</h1>
";
    }

    public function block_title($context, array $blocks = array())
    {
        echo "404 /o\\";
    }

    // line 2

    public function getTemplateName()
    {
        return "error404.html.twig";
    }

    // line 5

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(37 => 5, 32 => 3, 29 => 2, 11 => 1,);
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
    <h1>Error 404 !</h1>
{% endblock %}
{% block title '404 /o\\\\' %}", "error404.html.twig", "C:\\Users\\tmoulin2016\\Desktop\\php\\tools\\wamp64\\www\\wikebec\\View\\templates\\error404.html.twig");
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
