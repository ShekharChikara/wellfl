<?php

/* overview.html.twig */
class __TwigTemplate_48c3876eff95548cd8f5acd254093aa39d2428f4fd1e9eadcd00d6437122c854 extends Twig_Template
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
        $this->loadTemplate("docs.html.twig", "overview.html.twig", 1)->display($context);
        // line 2
        echo "
<style>
#body .padding {
\tpadding-bottom: 0rem !important;\t
}
#top-bar {
\tdisplay: none;
}
</style>

<section id=\"overviewConcepts\">
\t<ul class=\"concepts-list\">
\t    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 15
            echo "\t        ";
            if ((($this->getAttribute($context["page"], "title", array()) != "Overview") && ($this->getAttribute($context["page"], "title", array()) != "Glossary"))) {
                // line 16
                echo "\t            <li><a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\"><h4 class=\"concept-title\">";
                echo $this->getAttribute($context["page"], "title", array());
                echo "</h4></a>
\t            <p>";
                // line 17
                echo $this->getAttribute($context["page"], "summary", array());
                echo "</p></li>
\t        ";
            }
            // line 19
            echo "\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t</ul>
</section>";
    }

    public function getTemplateName()
    {
        return "overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 20,  54 => 19,  49 => 17,  42 => 16,  39 => 15,  35 => 14,  21 => 2,  19 => 1,);
    }
}
/* {% include 'docs.html.twig' %}*/
/* */
/* <style>*/
/* #body .padding {*/
/* 	padding-bottom: 0rem !important;	*/
/* }*/
/* #top-bar {*/
/* 	display: none;*/
/* }*/
/* </style>*/
/* */
/* <section id="overviewConcepts">*/
/* 	<ul class="concepts-list">*/
/* 	    {% for page in pages.children %}*/
/* 	        {% if page.title != 'Overview' and page.title !='Glossary' %}*/
/* 	            <li><a href="{{ page.url }}"><h4 class="concept-title">{{ page.title }}</h4></a>*/
/* 	            <p>{{ page.summary }}</p></li>*/
/* 	        {% endif %}*/
/* 	    {% endfor %}*/
/* 	</ul>*/
/* </section>*/
