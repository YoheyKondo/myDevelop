<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @toolbar/eccube.html.twig */
class __TwigTemplate_a1781c22a4bac6469a03ffbc913e131b6c38a8fa26723b2d02bf2165a4132c55 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@toolbar/eccube.html.twig"));

        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "@toolbar/eccube.html.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 124.45 105.65\"><defs><style>.cls-1{fill:#353a4e;}.cls-2{fill:#fc0;}.cls-3{fill:#f2b50a;}</style></defs><title>eccube_logo_basic</title><path class=\"cls-1\" d=\"M106.81,15s6.63,49.2-37.4,62.22c-4.09,0-56.94,6.54-58.6-46.42V81.11L69.4,95,110.81,77V16.58Z\"/><path class=\"cls-2\" d=\"M110.81,63.42V77L69.4,95,10.81,81.11V65C4,69.18,0,74.22,0,79.65c0,14.36,27.86,26,62.22,26s62.22-11.64,62.22-26C124.45,73.51,119.33,67.86,110.81,63.42Z\"/><path class=\"cls-2\" d=\"M69.4,0,10.81,25C9,84.13,61.55,78.42,69.4,77.21Z\"/><path class=\"cls-3\" d=\"M106.81,15,69.4,0V77.21C115.22,65.84,106.81,15,106.81,15Z\"/></svg>
    <span class=\"sf-toolbar-value\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "version", []), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        echo "    ";
        ob_start();
        // line 19
        echo "    <script>
        // Minimize to toolbar
        Sfjs.setPreference('toolbar/displayState', 'none');
    </script>
    <style>
        .sf-toolbar-block .sf-toolbar-info-piece.sf-toolbar-plugins .sf-toolbar-status {
            display: block !important;
            float: left;
            margin-right: 4px !important;
            margin-left: 0 !important;
            margin-top: 4px;
        }
        .sf-toolbar-block .sf-toolbar-info-piece.sf-toolbar-plugins > b {
            vertical-align: middle;
        }
    </style>
    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
            <b>EC-CUBE</b>
            <span><a href=\"https://www.ec-cube.net\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "version", []), "html", null, true);
        echo "</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece sf-toolbar-plugins\">
            <b>Plugins</b>
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "plugins", []));
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 43
            echo "                <div class=\"sf-toolbar-status sf-toolbar-status-";
            echo ((twig_get_attribute($this->env, $this->source, $context["plugin"], "enabled", [])) ? ("green") : ("red"));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", []), "html", null, true);
            echo "\">
                    ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "code", []), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>
    </div>
    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
            <b>Currency</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">
                <abbr title=\"Current ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "currencyCode", []) == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "defaultCurrencyCode", []))) {
            echo "and default ";
        }
        echo "currency\">
                    ";
        // line 54
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "currencyCode", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "currencyCode", []), "Undefined")) : ("Undefined")), "html", null, true);
        echo "
                </abbr>
            </span>
            ";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "currencyCode", []) != twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "defaultCurrencyCode", []))) {
            // line 58
            echo "                <span class=\"sf-toolbar-status\">
                    <abbr title=\"Default locale\">
                        ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "defaultCurrencyCode", []), "html", null, true);
            echo "
                    </abbr>
                </span>
            ";
        }
        // line 64
        echo "        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Locale</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">
                <abbr title=\"Current ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "localeCode", []) == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "defaultLocaleCode", []))) {
            echo "and default ";
        }
        echo "locale\">
                    ";
        // line 69
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "localeCode", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "localeCode", []), "Undefined")) : ("Undefined")), "html", null, true);
        echo "
                </abbr>
            </span>
            ";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "localeCode", []) != twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "defaultLocaleCode", []))) {
            // line 73
            echo "                <span class=\"sf-toolbar-status\">
                    <abbr title=\"Default locale\">
                        ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "defaultLocaleCode", []), "html", null, true);
            echo "
                    </abbr>
                </span>
            ";
        }
        // line 79
        echo "        </div>
    </div>
    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
            <b>Resources</b>
            <span><a href=\"https://doc.ec-cube.net/\" rel=\"help\">EC-CUBE Documentation</a></span>
        </div>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        echo "
    ";
        // line 89
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@toolbar/eccube.html.twig", 89)->display(twig_array_merge($context, ["link" => false, "additional_classes" => "sf-toolbar-block-right"]));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@toolbar/eccube.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 89,  193 => 88,  182 => 79,  175 => 75,  171 => 73,  169 => 72,  163 => 69,  157 => 68,  151 => 64,  144 => 60,  140 => 58,  138 => 57,  132 => 54,  126 => 53,  118 => 47,  109 => 44,  102 => 43,  98 => 42,  91 => 38,  70 => 19,  67 => 18,  62 => 16,  59 => 15,  56 => 14,  50 => 13,  34 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@toolbar/eccube.html.twig", "D:\\xampp\\xampp\\htdocs\\Englearn\\myDev\\tokyosin\\src\\Eccube\\Resource\\template\\toolbar\\eccube.html.twig");
    }
}
