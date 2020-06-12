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

/* @admin/Content/layout_block.twig */
class __TwigTemplate_31f1442863b377a39f141cadab9fc3ae7bdd50e41bf2d72c26658c9649019ad9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/layout_block.twig"));

        // line 11
        echo "<div id=\"detail_box__layout_item--";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", []), "id", []), "html", null, true);
        echo "\" class=\"block sort border border-ec-gray bg-ec-lightGray p-2 mb-2\">
    <div class=\"row justify-content-between\">
        <div class=\"col\">
            <i class=\"fa fa-bars text-ec-gray mr-3\"></i>
            <span class=\"view_readme\" data-toggle=\"modal\"
               data-target=\"#blockModal\"
               data-id=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", []), "id", []), "html", null, true);
        echo "\"
               data-name=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", []), "name", []), "html", null, true);
        echo "\"
               title=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", []), "name", []), "html", null, true);
        echo "\"
            >";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", []), "name", []), "html", null, true);
        echo "</span>
        </div>
        <div class=\"col-auto text-right\">
            <div class=\"d-inline-block px-3 sort";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "first", [])) {
            echo " first";
        }
        echo "\">
                <input type=\"hidden\" class=\"name\" name=\"name_";
        // line 24
        echo twig_escape_filter($this->env, ($context["loop_index"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", []), "name", []), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" class=\"block-id\" name=\"block_id_";
        // line 25
        echo twig_escape_filter($this->env, ($context["loop_index"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", []), "id", []), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" class=\"target-id\" name=\"section_";
        // line 26
        echo twig_escape_filter($this->env, ($context["loop_index"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "section", []), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" class=\"block-row\" name=\"block_row_";
        // line 27
        echo twig_escape_filter($this->env, ($context["loop_index"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "block_row", []), "html", null, true);
        echo "\"/>
                <div class=\"block-context-menu d-inline-block px-3\"><i class=\"fa fa-ellipsis-v fa-lg text-secondary\"></i></div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Content/layout_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  84 => 26,  78 => 25,  72 => 24,  66 => 23,  60 => 20,  56 => 19,  52 => 18,  48 => 17,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Content/layout_block.twig", "D:\\xampp\\xampp\\htdocs\\Englearn\\myDev\\tokyosin\\src\\Eccube\\Resource\\template\\admin\\Content\\layout_block.twig");
    }
}
