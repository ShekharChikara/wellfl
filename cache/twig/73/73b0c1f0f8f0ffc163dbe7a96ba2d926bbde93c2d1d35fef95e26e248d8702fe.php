<?php

/* partials/page-feature.html.twig */
class __TwigTemplate_32472bb68c4db023c96dc6efc2df5cec488841dea9c9d6e1de6ad2b002d1877e extends Twig_Template
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
        echo "<div id=\"body-inner\">
";
        // line 2
        $context["order"] = trim($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order", array()), ".");
        // line 3
        echo "<h2 class=\"text-center\">Feature ";
        echo twig_number_format_filter($this->env, (isset($context["order"]) ? $context["order"] : null), 0, ".", "");
        echo ": ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
<p>
\t";
        // line 5
        $context["content"] = twig_slice($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), twig_length_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array())));
        // line 6
        echo "\t<div style=\"width: 80%; float:left;\">
\t";
        // line 7
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
\t</div>
\t<div class=\"feature-image\" style=\"width: 20%; float: right;\">
\t\t";
        // line 10
        $context["feature_image"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "feature-image.png", array(), "array");
        // line 11
        echo "\t\t";
        echo (isset($context["feature_image"]) ? $context["feature_image"] : null);
        echo "
\t</div>
</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/page-feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  43 => 10,  37 => 7,  34 => 6,  32 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div id="body-inner">*/
/* {% set order = page.order|trim('.') %}*/
/* <h2 class="text-center">Feature {{ order|number_format(0,'.','') }}: {{ page.title }}</h2>*/
/* <p>*/
/* 	{% set content = page.content|slice(page.summary|length) %}*/
/* 	<div style="width: 80%; float:left;">*/
/* 	{{ content }}*/
/* 	</div>*/
/* 	<div class="feature-image" style="width: 20%; float: right;">*/
/* 		{% set feature_image = page.media['feature-image.png'] %}*/
/* 		{{ feature_image }}*/
/* 	</div>*/
/* </p>*/
/* </div>*/
/* */
