<?php

/* filter.js */

class __TwigTemplate_9c7b1370c25a43e46fa3567170826562e4593494f8d138330aa86386d47ace97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array();
    }

    public function getTemplateName()
    {
        return "filter.js";
    }

    public function getDebugInfo()
    {
        return array(19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("\$(\"#filter-field\").on(\"keyup\", function(){
    var userValue = \$(\"#filter-field\").val();
    \$(\"#term-list\").each(function (i, el) {
        var term = \$(el).html();
        if(!term.contains(userValue)) {
            \$(el).parent().hide();
        }
    });
});", "filter.js", "C:\\Users\\tmoulin2016\\Desktop\\php\\tools\\wamp64\\www\\wikebec\\View\\templates\\filter.js");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\$(\"#filter-field\").on(\"keyup\", function(){
    var userValue = \$(\"#filter-field\").val();
    \$(\"#term-list\").each(function (i, el) {
        var term = \$(el).html();
        if(!term.contains(userValue)) {
            \$(el).parent().hide();
        }
    });
});";
    }
}
