<?php

/* plugins.html.twig */
class __TwigTemplate_fdd4ab492186daf56ef1742452dcd80ff768b36b46675971810e4ced976f80e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "plugins.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["plugin_slug"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array());
        // line 5
        if ((isset($context["plugin_slug"]) ? $context["plugin_slug"] : null)) {
            // line 6
            $context["installing"] = (is_string($__internal_0abff30dca573fffbddc33df029039e8e4a66bb246544f0d44be829a5b129d17 = (isset($context["plugin_slug"]) ? $context["plugin_slug"] : null)) && is_string($__internal_6694c1a9ed4bebf06b69dd978331056446e8618b76f623accd5c0691869b30fd = "install") && ('' === $__internal_6694c1a9ed4bebf06b69dd978331056446e8618b76f623accd5c0691869b30fd || 0 === strpos($__internal_0abff30dca573fffbddc33df029039e8e4a66bb246544f0d44be829a5b129d17, $__internal_6694c1a9ed4bebf06b69dd978331056446e8618b76f623accd5c0691869b30fd)));
            // line 8
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                // line 9
                $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGINS");
            } else {
                // line 11
                $context["installed"] = true;
                // line 14
                $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array(0 => true), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
                // line 15
                if ( !(isset($context["package"]) ? $context["package"] : null)) {
                    // line 16
                    $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array(0 => false), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
                    // line 17
                    $context["installed"] = false;
                }
                // line 20
                $context["plugin"] = $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "toArray", array(), "method");
                // line 21
                $context["title"] = (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN") . ": ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name", array())));
            }
        } else {
            // line 24
            $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGINS");
        }
        // line 27
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
        // line 30
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    // line 38
    public function block_titlebar($context, array $blocks = array())
    {
        // line 39
        echo "
    ";
        // line 40
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 41
            echo "        <div class=\"button-bar\">
        ";
            // line 42
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                // line 43
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/plugins\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 45
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
            <a class=\"button\" href=\"";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/plugins/install\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "</a>
            ";
                // line 47
                if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
                    // line 48
                    echo "                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES"), "html", null, true);
                    echo "</button>
            ";
                }
                // line 50
                echo "        ";
            }
            // line 51
            echo "        </div>
        <h1><i class=\"fa fa-fw fa-plug\"></i> ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGINS"), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 54
            echo "        ";
            if ((isset($context["installed"]) ? $context["installed"] : null)) {
                // line 55
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 56
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/plugins\"><i class=\"fa fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_PLUGINS"), "html", null, true);
                echo "</a>
            ";
                // line 57
                try {
                    $this->loadTemplate((("plugins/" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) . "-buttons.html.twig"), "plugins.html.twig", 57)->display($context);
                } catch (Twig_Error_Loader $e) {
                    // ignore missing template
                }

                // line 58
                echo "            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
                echo "</button>
        </div>
        ";
            } else {
                // line 61
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 62
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/plugins/install\"><i class=\"fa fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_PLUGINS"), "html", null, true);
                echo "</a>
        </div>
        ";
            }
            // line 65
            echo "
        <h1><i class=\"fa fa-fw fa-plug\"></i> ";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name", array()));
            echo "</h1>

    ";
        }
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
        // line 72
        echo "    <div class=\"gpm gpm-plugins\">
        ";
        // line 73
        $this->loadTemplate("partials/messages.html.twig", "plugins.html.twig", 73)->display($context);
        // line 74
        echo "
        ";
        // line 75
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 76
            echo "            ";
            $this->loadTemplate("partials/plugins-list.html.twig", "plugins.html.twig", 76)->display($context);
            // line 77
            echo "        ";
        } else {
            // line 78
            echo "            ";
            $this->loadTemplate("partials/plugins-details.html.twig", "plugins.html.twig", 78)->display($context);
            // line 79
            echo "        ";
        }
        // line 80
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "plugins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 80,  214 => 79,  211 => 78,  208 => 77,  205 => 76,  203 => 75,  200 => 74,  198 => 73,  195 => 72,  192 => 71,  182 => 66,  179 => 65,  171 => 62,  168 => 61,  161 => 58,  154 => 57,  148 => 56,  145 => 55,  142 => 54,  137 => 52,  134 => 51,  131 => 50,  125 => 48,  123 => 47,  117 => 46,  110 => 45,  102 => 43,  100 => 42,  97 => 41,  95 => 40,  92 => 39,  89 => 38,  82 => 34,  79 => 33,  72 => 30,  69 => 29,  66 => 28,  62 => 1,  59 => 27,  56 => 24,  52 => 21,  50 => 20,  47 => 17,  45 => 16,  43 => 15,  41 => 14,  39 => 11,  36 => 9,  34 => 8,  32 => 6,  30 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% set plugin_slug = admin.route %}*/
/* */
/* {% if plugin_slug %}*/
/*     {% set installing = plugin_slug starts with 'install' %}*/
/* */
/*     {% if installing %}*/
/*         {% set title = "PLUGIN_ADMIN.PLUGINS"|tu %}*/
/*     {% else %}*/
/*         {% set installed = true %}*/
/* */
/*         {# Try installed packages first, then remote #}*/
/*         {% set package = admin.plugins(true)[admin.route] %}*/
/*         {% if (not package) %}*/
/*             {% set package = admin.plugins(false)[admin.route] %}*/
/*             {% set installed = false %}*/
/*         {% endif %}*/
/* */
/*         {% set plugin = package.toArray() %}*/
/*         {% set title = "PLUGIN_ADMIN.PLUGIN"|tu ~ ": " ~ plugin.name|e %}*/
/*     {% endif %}*/
/* {% else %}*/
/*     {% set title = "PLUGIN_ADMIN.PLUGINS"|tu %}*/
/* {% endif %}*/
/* */
/* {% if admin.route or installing %}*/
/*     {% block stylesheets %}*/
/*         {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endif %}*/
/* */
/* {% block titlebar %}*/
/* */
/*     {% if not admin.route or installing %}*/
/*         <div class="button-bar">*/
/*         {% if (installing) %}*/
/*             <a class="button" href="{{ base_url_relative }}/plugins"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*         {% else %}*/
/*             <a class="button" href="{{ base_url }}"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             <a class="button" href="{{ base_url_relative }}/plugins/install"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD"|tu }}</a>*/
/*             {% if authorize(['admin.maintenance', 'admin.super']) %}*/
/*                 <button data-gpm-checkupdates="" class="button"><i class="fa fa-refresh"></i> {{ "PLUGIN_ADMIN.CHECK_FOR_UPDATES"|tu }}</button>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         </div>*/
/*         <h1><i class="fa fa-fw fa-plug"></i> {{ "PLUGIN_ADMIN.PLUGINS"|tu }}</h1>*/
/*     {% else %}*/
/*         {% if (installed) %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/plugins"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_PLUGINS"|tu }}</a>*/
/*             {% include 'plugins/'~admin.route~'-buttons.html.twig' ignore missing %}*/
/*             <button class="button" type="submit" name="task" value="save" form="blueprints"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/plugins/install"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_PLUGINS"|tu }}</a>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         <h1><i class="fa fa-fw fa-plug"></i> {{ "PLUGIN_ADMIN.PLUGIN"|tu }}: {{ plugin.name|e }}</h1>*/
/* */
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="gpm gpm-plugins">*/
/*         {% include 'partials/messages.html.twig' %}*/
/* */
/*         {% if not admin.route or installing %}*/
/*             {% include 'partials/plugins-list.html.twig' %}*/
/*         {% else %}*/
/*             {% include 'partials/plugins-details.html.twig' %}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
