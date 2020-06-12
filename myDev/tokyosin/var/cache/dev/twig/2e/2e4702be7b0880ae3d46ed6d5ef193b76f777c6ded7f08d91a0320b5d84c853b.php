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

/* @Doctrine/Collector/db.html.twig */
class __TwigTemplate_26abf98c6b3f70fc0953a80d4187e51e30e5a60ef2fb51e73cf0052d6234aa51 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'queries' => [$this, 'block_queries'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "isXmlHttpRequest", [])) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "@Doctrine/Collector/db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", []) > 0) || (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", []) > 0))) {
            // line 7
            echo "
        ";
            // line 8
            $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
            // line 9
            echo "
        ";
            // line 10
            ob_start();
            // line 11
            echo "            ";
            if ((($context["profiler_markup_version"] ?? null) == 1)) {
                // line 12
                echo "
                <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
                    <span class=\"sf-toolbar-value sf-toolbar-status ";
                // line 14
                if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", []) > 50)) {
                    echo "sf-toolbar-status-yellow";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", []), "html", null, true);
                echo "</span>
                    ";
                // line 15
                if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", []) > 0)) {
                    // line 16
                    echo "                        <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", []) * 1000)), "html", null, true);
                    echo " ms</span>
                    ";
                }
                // line 18
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", []) > 0)) {
                    // line 19
                    echo "                        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", []), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 21
                echo "
            ";
            } else {
                // line 23
                echo "
                ";
                // line 24
                $context["status"] = (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", []) > 0)) ? ("red") : ((((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", []) > 50)) ? ("yellow") : (""))));
                // line 25
                echo "
                ";
                // line 26
                echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
                echo "

                ";
                // line 28
                if (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", []) == 0) && (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", []) > 0))) {
                    // line 29
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", []), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-label\">errors</span>
                ";
                } else {
                    // line 32
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", []), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">";
                    // line 35
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", []) * 1000)), "html", null, true);
                    echo "</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
                ";
                }
                // line 39
                echo "
            ";
            }
            // line 41
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 42
            echo "
        ";
            // line 43
            ob_start();
            // line 44
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status ";
            // line 46
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", []) > 50)) ? ("sf-toolbar-status-yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", []), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
            // line 50
            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", []) * 1000)), "html", null, true);
            echo " ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status ";
            // line 54
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", []) > 0)) ? ("sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", []), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [])) {
                // line 57
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheHitsCount", []), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status ";
                // line 63
                echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", []) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", []), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status ";
                // line 67
                echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", []) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", []), "html", null, true);
                echo "</span>
                </div>
            ";
            } else {
                // line 70
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            ";
            }
            // line 75
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            echo "
        ";
            // line 77
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => (((isset($context["status"]) || array_key_exists("status", $context))) ? (_twig_default_filter(($context["status"] ?? null), "")) : (""))]);
            echo "

    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 83
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 84
        echo "
    ";
        // line 85
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 86
            echo "
        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>Doctrine</strong>
            <span class=\"count\">
                <span>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", []), "html", null, true);
            echo "</span>
                <span>";
            // line 92
            echo twig_escape_filter($this->env, sprintf("%0.0f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", []) * 1000)), "html", null, true);
            echo " ms</span>
            </span>
        </span>

    ";
        } else {
            // line 97
            echo "
        <span class=\"label ";
            // line 98
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", []) > 0)) ? ("label-status-error") : (""));
            echo " ";
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", []) == 0)) ? ("disabled") : (""));
            echo "\">
            <span class=\"icon\">";
            // line 99
            echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
            echo "</span>
            <strong>Doctrine</strong>
            ";
            // line 101
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [])) {
                // line 102
                echo "                <span class=\"count\">
                    <span>";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", []), "html", null, true);
                echo "</span>
                </span>
            ";
            }
            // line 106
            echo "        </span>

    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_panel($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 112
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 113
        echo "
    ";
        // line 114
        if (("explain" == ($context["page"] ?? null))) {
            // line 115
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctrineBundle:Profiler:explain", ["token" =>             // line 116
($context["token"] ?? null), "panel" => "db", "connectionName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 118
($context["request"] ?? null), "query", []), "get", [0 => "connection"], "method"), "query" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 119
($context["request"] ?? null), "query", []), "get", [0 => "query"], "method")]));
            // line 120
            echo "
    ";
        } else {
            // line 122
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_queries($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "queries"));

        // line 127
        echo "    <style>
        ";
        // line 128
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 129
            echo "            .hidden { display: none; }
            .queries-table td, .queries-table th { vertical-align: top; }
            .queries-table td > div { margin-bottom: 6px; }
            .highlight pre { margin: 0; white-space: pre-wrap; }
            .highlight .keyword   { color: #8959A8; font-weight: bold; }
            .highlight .word      { color: #222222; }
            .highlight .variable  { color: #916319; }
            .highlight .symbol    { color: #222222; }
            .highlight .comment   { color: #999999; }
            .highlight .backtick  { color: #718C00; }
            .highlight .string    { color: #718C00; }
            .highlight .number    { color: #F5871F; font-weight: bold; }
            .highlight .error     { color: #C82829; }
        ";
        }
        // line 143
        echo "
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
    </style>

    ";
        // line 149
        if ((($context["profiler_markup_version"] ?? null) > 1)) {
            // line 150
            echo "        <h2>Query Metrics</h2>
    
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", []), "html", null, true);
            echo "</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "groupedQueryCount", []), "html", null, true);
            echo "</span>
                <span class=\"label\">Different statements</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">";
            // line 164
            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", []) * 1000)), "html", null, true);
            echo " ms</span>
                <span class=\"label\">Query time</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", []), "html", null, true);
            echo "</span>
                <span class=\"label\">Invalid entities</span>
            </div>
    
            ";
            // line 173
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [])) {
                // line 174
                echo "                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheHitsCount", []), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", []), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 183
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", []), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache puts</span>
                </div>
            ";
            }
            // line 187
            echo "        </div>
    ";
        }
        // line 189
        echo "
    ";
        // line 190
        $context["group_queries"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", []), "getBoolean", [0 => "group"], "method");
        // line 191
        echo "    ";
        if (($context["group_queries"] ?? null)) {
            // line 192
            echo "        <h2>Grouped Statements</h2>
        <p><a href=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null)]), "html", null, true);
            echo "\">Show all queries</a></p>
    ";
        } else {
            // line 195
            echo "        <h2>Queries</h2>
        <p><a href=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null), "group" => true]), "html", null, true);
            echo "\">Group similar statements</a></p>
    ";
        }
        // line 198
        echo "
    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "queries", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 200
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [])) > 1)) {
                // line 201
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                echo " <small>connection</small></h3>
        ";
            }
            // line 203
            echo "
        ";
            // line 204
            if (twig_test_empty($context["queries"])) {
                // line 205
                echo "            <div class=\"empty\">
                <p>No database queries were performed.</p>
            </div>
        ";
            } else {
                // line 209
                echo "            ";
                if (($context["group_queries"] ?? null)) {
                    // line 210
                    echo "                ";
                    $context["queries"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "groupedQueries", [])) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["connection"]] ?? null) : null);
                    // line 211
                    echo "            ";
                }
                // line 212
                echo "            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    ";
                // line 215
                if (($context["group_queries"] ?? null)) {
                    // line 216
                    echo "                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                    echo "')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                    // line 217
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                    echo "')\" style=\"cursor: pointer;\">Count<span></span></th>
                    ";
                } else {
                    // line 219
                    echo "                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                    echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                    // line 220
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                    echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                    ";
                }
                // line 222
                echo "                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-";
                // line 225
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                echo "\">
                    ";
                // line 226
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["queries"]);
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 227
                    echo "                        ";
                    $context["i"] = ((($context["group_queries"] ?? null)) ? (twig_get_attribute($this->env, $this->source, $context["query"], "index", [])) : ($context["i"]));
                    // line 228
                    echo "                        <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", []), "loop", []), "index", []), "html", null, true);
                    echo "\">
                            ";
                    // line 229
                    if (($context["group_queries"] ?? null)) {
                        // line 230
                        echo "                                <td class=\"time-container\">
                                    <span class=\"time-bar\" style=\"width:";
                        // line 231
                        echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, $context["query"], "executionPercent", [])), "html", null, true);
                        echo "%\"></span>
                                    <span class=\"nowrap\">";
                        // line 232
                        echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["query"], "executionMS", []) * 1000)), "html", null, true);
                        echo "&nbsp;ms<br />(";
                        echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, $context["query"], "executionPercent", [])), "html", null, true);
                        echo "%)</span>
                                </td>
                                <td class=\"nowrap\">";
                        // line 234
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "count", []), "html", null, true);
                        echo "</td>
                            ";
                    } else {
                        // line 236
                        echo "                                <td class=\"nowrap\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                        echo "</td>
                                <td class=\"nowrap\">";
                        // line 237
                        echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["query"], "executionMS", []) * 1000)), "html", null, true);
                        echo "&nbsp;ms</td>
                            ";
                    }
                    // line 239
                    echo "                            <td>
                                ";
                    // line 240
                    echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatQuery(twig_get_attribute($this->env, $this->source, $context["query"], "sql", []), true);
                    echo "

                                <div>
                                    <strong class=\"font-normal text-small\">Parameters</strong>: ";
                    // line 243
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), [$this->env, twig_get_attribute($this->env, $this->source, $context["query"], "params", []), 2]);
                    echo "
                                </div>

                                <div class=\"text-small font-normal\">
                                    <a href=\"#\" ";
                    // line 247
                    echo (((($context["profiler_markup_version"] ?? null) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                    echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", []), "loop", []), "index", []), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                    &nbsp;&nbsp;

                                    <a href=\"#\" ";
                    // line 251
                    echo (((($context["profiler_markup_version"] ?? null) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                    echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", []), "loop", []), "index", []), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>

                                    ";
                    // line 253
                    if (twig_get_attribute($this->env, $this->source, $context["query"], "explainable", [])) {
                        // line 254
                        echo "                                        &nbsp;&nbsp;
                                        <a class=\"link-inverse\" href=\"";
                        // line 255
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"]]), "html", null, true);
                        echo "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", []), "loop", []), "index", []), "html", null, true);
                        echo "\">Explain query</a>
                                    ";
                    }
                    // line 257
                    echo "                                </div>

                                <div id=\"formatted-query-";
                    // line 259
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", []), "loop", []), "index", []), "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                    ";
                    // line 260
                    echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatQuery(twig_get_attribute($this->env, $this->source, $context["query"], "sql", []));
                    echo "
                                </div>

                                <div id=\"original-query-";
                    // line 263
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", []), "loop", []), "index", []), "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                    ";
                    // line 264
                    echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatQuery($this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->replaceQueryParameters((twig_get_attribute($this->env, $this->source, $context["query"], "sql", []) . ";"), twig_get_attribute($this->env, $this->source, $context["query"], "params", [])), true);
                    echo "
                                </div>

                                ";
                    // line 267
                    if (twig_get_attribute($this->env, $this->source, $context["query"], "explainable", [])) {
                        // line 268
                        echo "                                    <div id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", []), "loop", []), "index", []), "html", null, true);
                        echo "\" class=\"sql-explain\"></div>
                                ";
                    }
                    // line 270
                    echo "                            </td>
                        </tr>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 273
                echo "                </tbody>
            </table>
        ";
            }
            // line 276
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "
    <h2>Database Connections</h2>

    ";
        // line 280
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [])) {
            // line 281
            echo "        <div class=\"empty\">
            <p>There are no configured database connections.</p>
        </div>
    ";
        } else {
            // line 285
            echo "        ";
            echo $context["helper"]->macro_render_simple_table("Name", "Service", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "connections", []));
            echo "
    ";
        }
        // line 287
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 290
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [])) {
            // line 291
            echo "        <div class=\"empty\">
            <p>There are no configured entity managers.</p>
        </div>
    ";
        } else {
            // line 295
            echo "        ";
            echo $context["helper"]->macro_render_simple_table("Name", "Service", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "managers", []));
            echo "
    ";
        }
        // line 297
        echo "
    <h2>Second Level Cache</h2>

    ";
        // line 300
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [])) {
            // line 301
            echo "        <div class=\"empty\">
            <p>Second Level Cache is not enabled.</p>
        </div>
    ";
        } else {
            // line 305
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [])) {
                // line 306
                echo "            <div class=\"empty\">
                <p>Second level cache information is not available.</p>
            </div>
        ";
            } else {
                // line 310
                echo "            ";
                if ((($context["profiler_markup_version"] ?? null) == 1)) {
                    // line 311
                    echo "                ";
                    echo $context["helper"]->macro_render_simple_table("Key", "Value", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", []));
                    echo "
            ";
                } else {
                    // line 313
                    echo "                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 315
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", []), "hits", []), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Hits</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 320
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", []), "misses", []), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Misses</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 325
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", []), "puts", []), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Puts</span>
                    </div>
                </div>
            ";
                }
                // line 330
                echo "
            ";
                // line 331
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", []), "hits", [])) {
                    // line 332
                    echo "                <h3>Number of cache hits</h3>
                ";
                    // line 333
                    echo $context["helper"]->macro_render_simple_table("Region", "Hits", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", []), "hits", []));
                    echo "
            ";
                }
                // line 335
                echo "
            ";
                // line 336
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", []), "misses", [])) {
                    // line 337
                    echo "                <h3>Number of cache misses</h3>
                ";
                    // line 338
                    echo $context["helper"]->macro_render_simple_table("Region", "Misses", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", []), "misses", []));
                    echo "
            ";
                }
                // line 340
                echo "
            ";
                // line 341
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", []), "puts", [])) {
                    // line 342
                    echo "                <h3>Number of cache puts</h3>
                ";
                    // line 343
                    echo $context["helper"]->macro_render_simple_table("Region", "Puts", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", []), "puts", []));
                    echo "
            ";
                }
                // line 345
                echo "        ";
            }
            // line 346
            echo "    ";
        }
        // line 347
        echo "
    <h2>Entities Mapping</h2>

    ";
        // line 350
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "entities", []));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 351
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [])) > 1)) {
                // line 352
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
                echo " <small>entity manager</small></h3>
        ";
            }
            // line 354
            echo "
        ";
            // line 355
            if (twig_test_empty($context["classes"])) {
                // line 356
                echo "            <div class=\"empty\">
                <p>No loaded entities.</p>
            </div>
        ";
            } else {
                // line 360
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 368
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["classes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 369
                    echo "                    ";
                    $context["contains_errors"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true), $context["manager"], [], "array", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true), $context["manager"], [], "array", false, true), $context["class"], [], "array", true, true));
                    // line 370
                    echo "                    <tr class=\"";
                    echo ((($context["contains_errors"] ?? null)) ? ("status-error") : (""));
                    echo "\">
                        <td>";
                    // line 371
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</td>
                        <td class=\"font-normal\">
                            ";
                    // line 373
                    if (($context["contains_errors"] ?? null)) {
                        // line 374
                        echo "                                <ul>
                                    ";
                        // line 375
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [])) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["manager"]] ?? null) : null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["class"]] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 376
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 378
                        echo "                                </ul>
                            ";
                    } else {
                        // line 380
                        echo "                                No errors.
                            ";
                    }
                    // line 382
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 385
                echo "                </tbody>
            </table>
        ";
            }
            // line 388
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 389
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        ";
        // line 447
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 448
            echo "            function toggleRunnableQuery(target) {
                var targetSelector = target.getAttribute('data-toggle-selector');
                var targetDataAltContent = target.getAttribute('data-toggle-alt-content');
                var targetElement = document.querySelector(targetSelector);
                target.setAttribute('data-toggle-alt-content', target.innerHTML);

                if (targetElement.style.display != 'block') {
                    targetElement.style.display = 'block';
                    target.innerHTML = targetDataAltContent;
                } else {
                    targetElement.style.display = 'none';
                    target.innerHTML = targetDataAltContent;
                }

                return false;
            }
        ";
        }
        // line 465
        echo "
        //]]></script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 469
    public function macro_render_simple_table($__label1__ = null, $__label2__ = null, $__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "label1" => $__label1__,
            "label2" => $__label2__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_simple_table"));

            // line 470
            echo "    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
            // line 473
            echo twig_escape_filter($this->env, ($context["label1"] ?? null), "html", null, true);
            echo "</th>
            <th scope=\"col\">";
            // line 474
            echo twig_escape_filter($this->env, ($context["label2"] ?? null), "html", null, true);
            echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 478
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 479
                echo "            <tr>
                <th scope=\"row\">";
                // line 480
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</th>
                <td>";
                // line 481
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 484
            echo "        </tbody>
    </table>
";
            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@Doctrine/Collector/db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1122 => 484,  1113 => 481,  1109 => 480,  1106 => 479,  1102 => 478,  1095 => 474,  1091 => 473,  1086 => 470,  1069 => 469,  1060 => 465,  1041 => 448,  1039 => 447,  979 => 389,  973 => 388,  968 => 385,  960 => 382,  956 => 380,  952 => 378,  943 => 376,  939 => 375,  936 => 374,  934 => 373,  929 => 371,  924 => 370,  921 => 369,  917 => 368,  907 => 360,  901 => 356,  899 => 355,  896 => 354,  890 => 352,  887 => 351,  883 => 350,  878 => 347,  875 => 346,  872 => 345,  867 => 343,  864 => 342,  862 => 341,  859 => 340,  854 => 338,  851 => 337,  849 => 336,  846 => 335,  841 => 333,  838 => 332,  836 => 331,  833 => 330,  825 => 325,  817 => 320,  809 => 315,  805 => 313,  799 => 311,  796 => 310,  790 => 306,  787 => 305,  781 => 301,  779 => 300,  774 => 297,  768 => 295,  762 => 291,  760 => 290,  755 => 287,  749 => 285,  743 => 281,  741 => 280,  736 => 277,  722 => 276,  717 => 273,  701 => 270,  693 => 268,  691 => 267,  685 => 264,  679 => 263,  673 => 260,  667 => 259,  663 => 257,  654 => 255,  651 => 254,  649 => 253,  640 => 251,  629 => 247,  622 => 243,  616 => 240,  613 => 239,  608 => 237,  603 => 236,  598 => 234,  591 => 232,  587 => 231,  584 => 230,  582 => 229,  575 => 228,  572 => 227,  555 => 226,  551 => 225,  546 => 222,  541 => 220,  536 => 219,  531 => 217,  526 => 216,  524 => 215,  519 => 212,  516 => 211,  513 => 210,  510 => 209,  504 => 205,  502 => 204,  499 => 203,  493 => 201,  490 => 200,  473 => 199,  470 => 198,  465 => 196,  462 => 195,  457 => 193,  454 => 192,  451 => 191,  449 => 190,  446 => 189,  442 => 187,  435 => 183,  428 => 179,  421 => 175,  418 => 174,  416 => 173,  409 => 169,  401 => 164,  393 => 159,  385 => 154,  379 => 150,  377 => 149,  369 => 143,  353 => 129,  351 => 128,  348 => 127,  342 => 126,  331 => 122,  327 => 120,  325 => 119,  324 => 118,  323 => 116,  321 => 115,  319 => 114,  316 => 113,  313 => 112,  307 => 111,  297 => 106,  291 => 103,  288 => 102,  286 => 101,  281 => 99,  275 => 98,  272 => 97,  264 => 92,  260 => 91,  253 => 86,  251 => 85,  248 => 84,  245 => 83,  239 => 82,  228 => 77,  225 => 76,  222 => 75,  215 => 70,  207 => 67,  198 => 63,  191 => 59,  187 => 57,  185 => 56,  178 => 54,  171 => 50,  162 => 46,  158 => 44,  156 => 43,  153 => 42,  150 => 41,  146 => 39,  139 => 35,  132 => 32,  125 => 29,  123 => 28,  118 => 26,  115 => 25,  113 => 24,  110 => 23,  106 => 21,  100 => 19,  97 => 18,  91 => 16,  89 => 15,  81 => 14,  77 => 12,  74 => 11,  72 => 10,  69 => 9,  67 => 8,  64 => 7,  61 => 6,  55 => 5,  48 => 1,  46 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Doctrine/Collector/db.html.twig", "D:\\xampp\\xampp\\htdocs\\Englearn\\myDev\\tokyosin\\vendor\\doctrine\\doctrine-bundle\\Resources\\views\\Collector\\db.html.twig");
    }
}
