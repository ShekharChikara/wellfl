<?php

/* partials/base.html.twig */
class __TwigTemplate_19e1de88b864a5e51759ea8517719fd42e854baec1d68c1415c21f8fea338dc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'topbar' => array($this, 'block_topbar'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'navigation' => array($this, 'block_navigation'),
            'analytics' => array($this, 'block_analytics'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 42
        echo "</head>
<body class=\"searchbox-hidden ";
        // line 43
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\" data-url=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "route", array());
        echo "\">
    ";
        // line 44
        $this->displayBlock('sidebar', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 94
        echo "    ";
        $this->displayBlock('analytics', $context, $blocks);
        // line 99
        echo " </body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 10
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/feed:atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"";
        // line 11
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/feed:rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\">

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "
    ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/theme.css", 1 => 101), "method");
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 18
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/featherlight.min.css"), "method");
        // line 20
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/styles.css"), "method");
        // line 21
        echo "
        ";
        // line 22
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 23
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 24
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css"), "method");
            // line 25
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 26
            echo "        ";
        }
        // line 27
        echo "
        ";
        // line 28
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
    ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/featherlight.min.js"), "method");
        // line 35
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/clipboard.min.js"), "method");
        // line 36
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.scrollbar.min.js"), "method");
        // line 37
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/learn.js"), "method");
        // line 38
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    ";
    }

    // line 44
    public function block_sidebar($context, array $blocks = array())
    {
        // line 45
        echo "    <nav id=\"sidebar\">
        <div id=\"header-wrapper\">
            <div id=\"header\">
                <a id=\"logo\" href=\"";
        // line 48
        echo (($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "home_url", array())) ? ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "home_url", array())) : ((isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null)));
        echo "\">";
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 48)->display($context);
        echo "</a>
                <div class=\"searchbox\">
                    <label for=\"search-by\"><i class=\"fa fa-search\"></i></label>
                    <input id=\"search-by\" type=\"text\" placeholder=\"";
        // line 51
        echo $this->env->getExtension('GravTwigExtension')->translate("THEME_LEARN2_SEARCH_DOCUMENTATION");
        echo "\"
                           data-search-input=\"";
        // line 52
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/search.json/query\"/>
                    <span data-search-clear><i class=\"fa fa-close\"></i></span>
                </div>
            </div>
        </div>
        ";
        // line 57
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 57)->display($context);
        // line 58
        echo "    </nav>
    ";
    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        // line 62
        echo "    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            ";
        // line 68
        $this->displayBlock('topbar', $context, $blocks);
        // line 81
        echo "
            ";
        // line 82
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "
            ";
        // line 84
        $this->displayBlock('footer', $context, $blocks);
        // line 89
        echo "
        </div>
        ";
        // line 91
        $this->displayBlock('navigation', $context, $blocks);
        // line 92
        echo "    </section>
    ";
    }

    // line 68
    public function block_topbar($context, array $blocks = array())
    {
        if ((($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "github", array()), "position", array()) == "top") || $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array()))) {
            // line 69
            echo "            <div id=\"top-bar\">
                ";
            // line 70
            if (($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "github", array()), "position", array()) == "top")) {
                // line 71
                echo "                <div id=\"top-github-link\">
                ";
                // line 72
                $this->loadTemplate("partials/github_link.html.twig", "partials/base.html.twig", 72)->display($context);
                // line 73
                echo "                </div>
                ";
            }
            // line 75
            echo "
                ";
            // line 76
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
                // line 77
                echo "                ";
                $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 77)->display($context);
                // line 78
                echo "                ";
            }
            // line 79
            echo "            </div>
            ";
        }
    }

    // line 82
    public function block_content($context, array $blocks = array())
    {
    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        // line 85
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "github", array()), "position", array()) == "bottom")) {
            // line 86
            echo "                ";
            $this->loadTemplate("partials/github_note.html.twig", "partials/base.html.twig", 86)->display($context);
            // line 87
            echo "                ";
        }
        // line 88
        echo "            ";
    }

    // line 91
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 94
    public function block_analytics($context, array $blocks = array())
    {
        // line 95
        echo "        ";
        if ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "google_analytics_code", array())) {
            // line 96
            echo "        ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 96)->display($context);
            // line 97
            echo "        ";
        }
        // line 98
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 98,  324 => 97,  321 => 96,  318 => 95,  315 => 94,  310 => 91,  306 => 88,  303 => 87,  300 => 86,  297 => 85,  294 => 84,  289 => 82,  283 => 79,  280 => 78,  277 => 77,  275 => 76,  272 => 75,  268 => 73,  266 => 72,  263 => 71,  261 => 70,  258 => 69,  254 => 68,  249 => 92,  247 => 91,  243 => 89,  241 => 84,  238 => 83,  236 => 82,  233 => 81,  231 => 68,  223 => 62,  220 => 61,  215 => 58,  213 => 57,  205 => 52,  201 => 51,  193 => 48,  188 => 45,  185 => 44,  178 => 38,  175 => 37,  172 => 36,  169 => 35,  166 => 34,  163 => 33,  160 => 32,  157 => 31,  151 => 28,  148 => 27,  145 => 26,  142 => 25,  139 => 24,  136 => 23,  134 => 22,  131 => 21,  128 => 20,  125 => 19,  122 => 18,  119 => 17,  116 => 16,  113 => 15,  110 => 14,  105 => 40,  103 => 31,  100 => 30,  98 => 14,  93 => 12,  89 => 11,  85 => 10,  82 => 9,  80 => 8,  72 => 7,  69 => 6,  66 => 5,  60 => 99,  57 => 94,  55 => 61,  52 => 60,  50 => 44,  44 => 43,  41 => 42,  39 => 5,  34 => 3,  31 => 2,  29 => 1,);
    }
}
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getLanguage ?: 'en' }}">*/
/* <head>*/
/*     {% block head %}*/
/*     <meta charset="utf-8" />*/
/*     <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/*     {% include 'partials/metadata.html.twig' %}*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />*/
/*     <link rel="alternate" type="application/atom+xml" href="{{ base_url_absolute}}/feed:atom" title="Atom Feed" />*/
/*     <link rel="alternate" type="application/rss+xml" href="{{ base_url_absolute}}/feed:rss" title="RSS Feed" />*/
/*     <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png') }}">*/
/* */
/*     {% block stylesheets %}*/
/*         {% do assets.addCss('theme://css-compiled/nucleus.css',102) %}*/
/*         {% do assets.addCss('theme://css-compiled/theme.css',101) %}*/
/*         {% do assets.addCss('theme://css/custom.css',100) %}*/
/*         {% do assets.addCss('theme://css/font-awesome.min.css',100) %}*/
/*         {% do assets.addCss('theme://css/featherlight.min.css') %}*/
/*         {% do assets.addCss('theme://css/styles.css') %}*/
/* */
/*         {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie9.css') %}*/
/*             {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css') %}*/
/*             {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}*/
/*         {% endif %}*/
/* */
/*         {{ assets.css() }}*/
/*     {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/*         {% do assets.addJs('jquery',101) %}*/
/*         {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}*/
/*         {% do assets.addJs('theme://js/featherlight.min.js') %}*/
/*         {% do assets.addJs('theme://js/clipboard.min.js') %}*/
/*         {% do assets.addJs('theme://js/jquery.scrollbar.min.js') %}*/
/*         {% do assets.addJs('theme://js/learn.js') %}*/
/*         {{ assets.js() }}*/
/*     {% endblock %}*/
/* */
/*     {% endblock %}*/
/* </head>*/
/* <body class="searchbox-hidden {{ page.header.body_classes }}" data-url="{{ page.route }}">*/
/*     {% block sidebar %}*/
/*     <nav id="sidebar">*/
/*         <div id="header-wrapper">*/
/*             <div id="header">*/
/*                 <a id="logo" href="{{ theme_config.home_url ?: base_url_absolute }}">{% include 'partials/logo.html.twig' %}</a>*/
/*                 <div class="searchbox">*/
/*                     <label for="search-by"><i class="fa fa-search"></i></label>*/
/*                     <input id="search-by" type="text" placeholder="{{ 'THEME_LEARN2_SEARCH_DOCUMENTATION'|t }}"*/
/*                            data-search-input="{{ base_url_relative }}/search.json/query"/>*/
/*                     <span data-search-clear><i class="fa fa-close"></i></span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% include 'partials/sidebar.html.twig' %}*/
/*     </nav>*/
/*     {% endblock %}*/
/* */
/*     {% block body %}*/
/*     <section id="body">*/
/*         <div id="overlay"></div>*/
/* */
/*         <div class="padding highlightable">*/
/*             <a href="#" id="sidebar-toggle" data-sidebar-toggle><i class="fa fa-2x fa-bars"></i></a>*/
/* */
/*             {% block topbar %}{% if theme_config.github.position == 'top' or config.plugins.breadcrumbs.enabled %}*/
/*             <div id="top-bar">*/
/*                 {% if theme_config.github.position == 'top' %}*/
/*                 <div id="top-github-link">*/
/*                 {% include 'partials/github_link.html.twig' %}*/
/*                 </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if config.plugins.breadcrumbs.enabled %}*/
/*                 {% include 'partials/breadcrumbs.html.twig' %}*/
/*                 {% endif %}*/
/*             </div>*/
/*             {% endif %}{% endblock %}*/
/* */
/*             {% block content %}{% endblock %}*/
/* */
/*             {% block footer %}*/
/*                 {% if theme_config.github.position == 'bottom' %}*/
/*                 {% include 'partials/github_note.html.twig' %}*/
/*                 {% endif %}*/
/*             {% endblock %}*/
/* */
/*         </div>*/
/*         {% block navigation %}{% endblock %}*/
/*     </section>*/
/*     {% endblock %}*/
/*     {% block analytics %}*/
/*         {% if theme_config.google_analytics_code %}*/
/*         {% include 'partials/analytics.html.twig' %}*/
/*         {% endif %}*/
/*     {% endblock %}*/
/*  </body>*/
/* </html>*/
/* */
