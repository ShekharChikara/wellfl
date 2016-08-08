<?php

/* feature.html.twig */
class __TwigTemplate_66168ddf9d2d54dbd3338d40d77c78b1659db287f5353502c2ffea0fb3192afc extends Twig_Template
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
        $this->loadTemplate("feature-docs.html.twig", "feature.html.twig", 1)->display($context);
        // line 2
        echo "
<style>
#body .padding {
\tpadding-bottom: 0rem !important;\t
}
</style>

<div class=\"feature-summary\">
\t<h4>";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo " Feature Level Matrix </h4>
\t";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 11,  31 => 10,  21 => 2,  19 => 1,);
    }
}
/* {% include 'feature-docs.html.twig' %}*/
/* */
/* <style>*/
/* #body .padding {*/
/* 	padding-bottom: 0rem !important;	*/
/* }*/
/* </style>*/
/* */
/* <div class="feature-summary">*/
/* 	<h4>{{page.title}} Feature Level Matrix </h4>*/
/* 	{{ page.summary }}*/
/* </div>*/
