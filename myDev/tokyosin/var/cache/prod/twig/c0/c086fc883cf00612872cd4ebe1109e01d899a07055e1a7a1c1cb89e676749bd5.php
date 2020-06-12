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

/* @admin/Form/bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_0ff4a24195c521690098dac5f66c8bb419af18e17439c1f72ce6df4330d84e31 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toggle_switch_widget' => [$this, 'block_toggle_switch_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("bootstrap_4_horizontal_layout.html.twig", "@admin/Form/bootstrap_4_horizontal_layout.html.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_toggle_switch_widget($context, array $blocks = [])
    {
        // line 14
        echo "<div class=\"c-toggleSwitch\">
        <div class=\"c-toggleSwitch__btn\">
            <input type=\"checkbox\"
                   id=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\"
                   name=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
        echo "\"
                   value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "value", []), "html", null, true);
        echo "\"";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "data", [])) ? (" checked") : (""));
        echo ">
            <label for=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\"></label>
        </div>
        <div class=\"c-toggleSwitch__label\">
            <span class=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-on text-dark ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "data", [])) ? ("") : ("d-none"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "label_on", [])), "html", null, true);
        echo "</span>
            <span class=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-off text-dark ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "data", [])) ? ("d-none") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "label_off", [])), "html", null, true);
        echo "</span>
        </div>
        <script>
            \$('#";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "').on('change', function (e) {
                if (\$(this).prop('checked')) {
                    \$('.";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-on').removeClass('d-none');
                    \$('.";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-off').addClass('d-none');
                } else {
                    \$('.";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-on').addClass('d-none');
                    \$('.";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-off').removeClass('d-none');
                }
            });
        </script>
    </div>";
    }

    // line 40
    public function block_choice_widget($context, array $blocks = [])
    {
        // line 41
        echo "    ";
        if (((isset($context["type"]) || array_key_exists("type", $context)) && (($context["type"] ?? null) == "hidden"))) {
            // line 42
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 44
            echo "        ";
            $this->displayParentBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "@admin/Form/bootstrap_4_horizontal_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 44,  124 => 42,  121 => 41,  118 => 40,  109 => 33,  105 => 32,  100 => 30,  96 => 29,  91 => 27,  81 => 24,  73 => 23,  67 => 20,  61 => 19,  57 => 18,  53 => 17,  48 => 14,  45 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Form/bootstrap_4_horizontal_layout.html.twig", "D:\\xampp\\xampp\\htdocs\\Englearn\\myDev\\tokyosin\\src\\Eccube\\Resource\\template\\admin\\Form\\bootstrap_4_horizontal_layout.html.twig");
    }
}
