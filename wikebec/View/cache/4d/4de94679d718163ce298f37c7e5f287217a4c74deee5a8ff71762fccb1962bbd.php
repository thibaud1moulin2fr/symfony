<?php

/* oneTerm.html.twig */

class __TwigTemplate_e5b1bef3fe2e911c6d5199cdce465f2cdb0e6d6e5a7df7a831dcbf4cdc45357f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array();
    }

    public function getTemplateName()
    {
        return "oneTerm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(70 => 14, 66 => 13, 62 => 12, 58 => 11, 54 => 10, 50 => 9, 46 => 8, 42 => 7, 38 => 6, 34 => 5, 30 => 4, 26 => 3, 22 => 2, 19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table>
    <tr>  <td>Terme</td> <td>{{ term.term }}</td>  </tr>
    <tr>  <td>Définition</td> <td>{{ term.definition1 ~ '/n' ~ term.definition2 }}</td>  </tr>
    <tr>  <td>Exemple</td> <td>{{ term.example }}</td>  </tr>
    <tr>  <td>Traduction</td> <td>{{ term.translation }}</td>  </tr>
    <tr>  <td>Variations</td> <td>{{ term.variations }}</td>  </tr>
    <tr>  <td>Prononciation</td> <td>{{ term.pronunciation }}</td>  </tr>
    <tr>  <td>Nature</td> <td>{{ term.nature }}</td>  </tr>
    <tr>  <td>Genre</td> <td>{{ term.gender }}</td>  </tr>
    <tr>  <td>Pluriel</td> <td>{{ term.number }}</td>  </tr>
    <tr>  <td>Origine</td> <td>{{ term.origin }}</td>  </tr>
    <tr>  <td>Date de création</td> <td>{{ term.createdDate }}</td>  </tr>
    <tr>  <td>Date de la dernière modification</td> <td>{{ term.editedDate }}</td>  </tr>
    <tr>  <td>Nombre de votes</td> <td>{{ term.votesCount }}</td>  </tr>
</table>", "oneTerm.html.twig", "C:\\Users\\tmoulin2016\\Desktop\\php\\tools\\wamp64\\www\\wikebec\\View\\templates\\oneTerm.html.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table>
    <tr>  <td>Terme</td> <td>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term", array()), "html", null, true);
        echo "</td>  </tr>
    <tr>  <td>Définition</td> <td>";
        // line 3
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "definition1", array()) . "/n") . $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "definition2", array())), "html", null, true);
        echo "</td>  </tr>
    <tr>  <td>Exemple</td> <td>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "example", array()), "html", null, true);
        echo "</td>  </tr>
    <tr>  <td>Traduction</td> <td>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "translation", array()), "html", null, true);
        echo "</td>  </tr>
    <tr>  <td>Variations</td> <td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "variations", array()), "html", null, true);
        echo "</td>  </tr>
    <tr>  <td>Prononciation</td> <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "pronunciation", array()), "html", null, true);
        echo "</td>  </tr>
    <tr>  <td>Nature</td> <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "nature", array()), "html", null, true);
        echo "</td>  </tr>
    <tr>  <td>Genre</td> <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "gender", array()), "html", null, true);
        echo "</td>  </tr>
    <tr>  <td>Pluriel</td> <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "number", array()), "html", null, true);
        echo "</td>  </tr>
    <tr>  <td>Origine</td> <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "origin", array()), "html", null, true);
        echo "</td>  </tr>
    <tr>  <td>Date de création</td> <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "createdDate", array()), "html", null, true);
        echo "</td>  </tr>
    <tr>  <td>Date de la dernière modification</td> <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "editedDate", array()), "html", null, true);
        echo "</td>  </tr>
    <tr>  <td>Nombre de votes</td> <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "votesCount", array()), "html", null, true);
        echo "</td>  </tr>
</table>";
    }
}
