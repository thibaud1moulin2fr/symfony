<?php

/* faq.html.twig */

class __TwigTemplate_96b530736c442eb5d7c8f18a9df265ff752efcdedc8e22a25dba0902947e41ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "faq.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "\t<h2>FAQ !</h2>
";
    }

    public function getTemplateName()
    {
        return "faq.html.twig";
    }

    // line 2

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(31 => 3, 28 => 2, 11 => 1,);
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
\t<h2>FAQ !</h2>
{% endblock %}", "faq.html.twig", "C:\\Users\\tmoulin2016\\Desktop\\php\\tools\\wamp64\\www\\wikebec\\View\\templates\\faq.html.twig");
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
