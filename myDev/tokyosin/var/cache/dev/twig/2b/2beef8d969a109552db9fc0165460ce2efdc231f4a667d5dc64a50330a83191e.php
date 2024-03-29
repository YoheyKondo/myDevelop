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

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_fb566cbcef07de240c05adbf5d28a95dd49f489a028b1b633889392a0b1bebe1 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        // line 1
        echo "<div class=\"sf-toolbar-block sf-toolbar-block-";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " sf-toolbar-status-";
        echo twig_escape_filter($this->env, (((isset($context["status"]) || array_key_exists("status", $context))) ? (_twig_default_filter(($context["status"] ?? null), "normal")) : ("normal")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (((isset($context["additional_classes"]) || array_key_exists("additional_classes", $context))) ? (_twig_default_filter(($context["additional_classes"] ?? null), "")) : ("")), "html", null, true);
        echo "\" ";
        echo (((isset($context["block_attrs"]) || array_key_exists("block_attrs", $context))) ? (_twig_default_filter(($context["block_attrs"] ?? null), "")) : (""));
        echo ">
    ";
        // line 2
        if (( !(isset($context["link"]) || array_key_exists("link", $context)) || ($context["link"] ?? null))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["token" => ($context["token"] ?? null), "panel" => ($context["name"] ?? null)]), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "        <div class=\"sf-toolbar-icon\">";
        echo twig_escape_filter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter(($context["icon"] ?? null), "")) : ("")), "html", null, true);
        echo "</div>
    ";
        // line 4
        if ((((isset($context["link"]) || array_key_exists("link", $context))) ? (_twig_default_filter(($context["link"] ?? null), false)) : (false))) {
            echo "</a>";
        }
        // line 5
        echo "        <div class=\"sf-toolbar-info\">";
        echo twig_escape_filter($this->env, (((isset($context["text"]) || array_key_exists("text", $context))) ? (_twig_default_filter(($context["text"] ?? null), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 5,  60 => 4,  55 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/toolbar_item.html.twig", "D:\\xampp\\xampp\\htdocs\\Englearn\\myDev\\tokyosin\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar_item.html.twig");
    }
}
