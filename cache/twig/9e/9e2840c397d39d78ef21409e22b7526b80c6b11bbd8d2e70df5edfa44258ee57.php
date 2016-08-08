<?php

/* partials/logo.html.twig */
class __TwigTemplate_3e9c745d25f0aa71f33e0212fff3b7af7b03262487c268f8b303a8ac13c11c91 extends Twig_Template
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
        echo "<img src=\"";
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/iwbi-logo-solid.png");
        echo "\" width=\"100\" height=\"50\" /><div class=\"logo-text\">THE <strong>WELL</strong> Building Standard</div>";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <img src="{{ url('theme://images/iwbi-logo-solid.png') }}" width="100" height="50" /><div class="logo-text">THE <strong>WELL</strong> Building Standard</div>*/
