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

/* __string_template__47828a35bee004f6b7ffab05efd7bd71ca2daf26875da71d55b0acce67ee641b */
class __TwigTemplate_035b6867ecb42597e53577204695de7c7c63bf87bfe42c9678b62882681b6dee extends \Twig\Template
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
        // line 11
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "Form/form_div_layout.twig"], true);
        // line 12
        echo "
<div class=\"ec-headerSearch\">
    <form method=\"get\" class=\"searchform\" action=\"";
        // line 14
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("product_list");
        echo "\">
        <div class=\"ec-headerSearch__category\">
            <div class=\"ec-select ec-select_search\">
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category_id", []), 'widget', ["id" => null, "attr" => ["class" => "category_id"]]);
        echo "
            </div>
        </div>
        <div class=\"ec-headerSearch__keyword\">
            <div class=\"ec-input\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", []), 'widget', ["id" => null, "attr" => ["class" => "search-name", "placeholder" => "キーワードを入力"]]);
        echo "
                <button class=\"ec-headerSearch__keywordBtn\" type=\"submit\">
                    <div class=\"ec-icon\">
                        <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/search-dark.svg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </button>
            </div>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__47828a35bee004f6b7ffab05efd7bd71ca2daf26875da71d55b0acce67ee641b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 25,  55 => 22,  47 => 17,  41 => 14,  37 => 12,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__47828a35bee004f6b7ffab05efd7bd71ca2daf26875da71d55b0acce67ee641b", "");
    }
}
