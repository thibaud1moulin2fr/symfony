<?php

/* layout.html.twig */

class __TwigTemplate_21347e3bd8771731e967a61b9fa2c12022761ac15f80869ce2cef54580e037c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    public function block_main($context, array $blocks = array())
    {
        echo "<h2>Bonjour !</h2>";
    }

    // line 17

    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
    }

    // line 22

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array(63 => 23, 60 => 22, 54 => 17, 49 => 25, 47 => 22, 41 => 18, 38 => 17, 21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
    <head>
        <link href=\"../../dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <title>wikebec</title>
    </head>
    <body>
        <header>
            <nav>
                <a href=\"index.php?page=accueil\">Accueil</a>
                <a href=\"index.php?page=termes\">Liste de toutes les expressions</a>
                <a href=\"index.php?page=faq\">Aller à FAQ</a>
            </nav>
        </header>
        <main>
            {# Comment #}
            {% block main %}<h2>Bonjour !</h2>{% endblock %}
        </main>
        <footer>

        </footer>
        {% block javascripts %}
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        {% endblock %}
    </body>
</html>", "layout.html.twig", "C:\\Users\\tmoulin2016\\Desktop\\php\\tools\\wamp64\\www\\wikebec\\View\\templates\\layout.html.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
    <head>
        <link href=\"../../dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <title>wikebec</title>
    </head>
    <body>
        <header>
            <nav>
                <a href=\"index.php?page=accueil\">Accueil</a>
                <a href=\"index.php?page=termes\">Liste de toutes les expressions</a>
                <a href=\"index.php?page=faq\">Aller à FAQ</a>
            </nav>
        </header>
        <main>
            ";
        // line 17
        echo "            ";
        $this->displayBlock('main', $context, $blocks);
        // line 18
        echo "        </main>
        <footer>

        </footer>
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>";
    }
}
