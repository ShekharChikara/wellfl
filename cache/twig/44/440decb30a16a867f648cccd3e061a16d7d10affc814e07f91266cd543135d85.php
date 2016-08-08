<?php

/* concept.html.twig */
class __TwigTemplate_54006aa4a7e7a68f130307f77e6b0cd8b97b182251c492d42b8e38f6ee789256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("docs.html.twig", "concept.html.twig", 1)->display($context);
        // line 2
        echo "
<style>
#body .padding {
\tpadding-bottom: 0rem !important;\t
}
</style>

<section id=\"conceptFeatures\">
\t<h3>";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo " Feature Level Matrix</h2>
\t<table class=\"features-compliance\">
\t\t<tr>
\t\t\t<td>COMPLIANCE</td>
\t\t\t<td class=\"text-center comp-pre\">PRECONDITION</td>
\t\t\t<td class=\"text-center comp-opt\">OPTIMIZATION</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>CERTIFICATION</td>
\t\t\t<td class=\"text-center cert-pre\">PRECONDITION</td>
\t\t\t<td class=\"text-center cert-opt\">OPTIMIZATION</td>
\t\t</tr>
\t</table>

\t<ul class=\"features-list\">
\t    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 26
            echo "\t    \t";
            $context["order"] = trim($this->getAttribute($context["feature"], "order", array()), ".");
            // line 27
            echo "\t            <li><a href=\"";
            echo $this->getAttribute($context["feature"], "url", array());
            echo "\"><h4 class=\"feature-title\">";
            echo twig_number_format_filter($this->env, (isset($context["order"]) ? $context["order"] : null), 0, ".", "");
            echo ". ";
            echo $this->getAttribute($context["feature"], "title", array());
            echo "</h4></a>
\t            <p>";
            // line 28
            echo $this->getAttribute($context["feature"], "summary", array());
            echo "</p></li>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t</ul>
</section>";
    }

    public function getTemplateName()
    {
        return "concept.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 30,  65 => 28,  56 => 27,  53 => 26,  49 => 25,  31 => 10,  21 => 2,  19 => 1,);
    }
}
/* {% include 'docs.html.twig' %}*/
/* */
/* <style>*/
/* #body .padding {*/
/* 	padding-bottom: 0rem !important;	*/
/* }*/
/* </style>*/
/* */
/* <section id="conceptFeatures">*/
/* 	<h3>{{page.title}} Feature Level Matrix</h2>*/
/* 	<table class="features-compliance">*/
/* 		<tr>*/
/* 			<td>COMPLIANCE</td>*/
/* 			<td class="text-center comp-pre">PRECONDITION</td>*/
/* 			<td class="text-center comp-opt">OPTIMIZATION</td>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>CERTIFICATION</td>*/
/* 			<td class="text-center cert-pre">PRECONDITION</td>*/
/* 			<td class="text-center cert-opt">OPTIMIZATION</td>*/
/* 		</tr>*/
/* 	</table>*/
/* */
/* 	<ul class="features-list">*/
/* 	    {% for feature in page.children %}*/
/* 	    	{% set order = feature.order|trim('.') %}*/
/* 	            <li><a href="{{ feature.url }}"><h4 class="feature-title">{{ order|number_format(0,'.','') }}. {{ feature.title }}</h4></a>*/
/* 	            <p>{{ feature.summary }}</p></li>*/
/* 	    {% endfor %}*/
/* 	</ul>*/
/* </section>*/
