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

/* @admin/alert.twig */
class __TwigTemplate_d407c6aef403bc2c875af335f17338674641a08736e1efbdfe324c7c9b148fcc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/alert.twig"));

        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "eccube.admin.info"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "    <div class=\"alert alert-primary alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-comment fa-lg mr-2\"></i>
        <span class=\"font-weight-bold\">";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "</span>
        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "eccube.admin.success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-check fa-lg mr-2\"></i>
        <span class=\"font-weight-bold\">";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "</span>
        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "eccube.admin.danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 32
            echo "    <div class=\"alert alert-danger alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-warning fa-lg mr-2\"></i>
        <span class=\"font-weight-bold\">";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "</span>
        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "eccube.admin.error"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 42
            echo "    <div class=\"alert alert-danger alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-warning fa-lg mr-2\"></i>
        <span class=\"font-weight-bold\">";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "</span>
        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "eccube.admin.warning"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 52
            echo "    <div class=\"alert alert-warning alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-warning fa-lg mr-2\"></i>
        <span class=\"font-weight-bold\">";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "</span>
        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@admin/alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 54,  134 => 52,  130 => 51,  127 => 50,  115 => 44,  111 => 42,  107 => 41,  104 => 40,  92 => 34,  88 => 32,  84 => 31,  81 => 30,  69 => 24,  65 => 22,  61 => 21,  58 => 20,  46 => 14,  42 => 12,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/alert.twig", "D:\\xampp\\xampp\\htdocs\\Englearn\\myDev\\tokyosin\\src\\Eccube\\Resource\\template\\admin\\alert.twig");
    }
}
