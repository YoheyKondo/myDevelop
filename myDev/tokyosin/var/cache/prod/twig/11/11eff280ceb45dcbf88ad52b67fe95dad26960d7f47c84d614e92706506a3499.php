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

/* __string_template__2800cd15a2ab04d2843707ec52c6d17a3dd59fb5d2ffc0c9eb18c5e8d9cda32a */
class __TwigTemplate_7bd58aed0a27610f96d25e862b06f3aa92a2e4089c4ace1f880662aece1b3f91 extends \Twig\Template
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
        $context["Categories"] = twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('repository')->getCallable(), ["Eccube\\Entity\\Category"]), "getList", [], "method");
        // line 12
        echo "
";
        // line 28
        echo "
";
        // line 30
        $context["__internal_bc642de1d6e4727b2f53abaaafabca91dd4ffbe457c61a76466a7c5791af84cd"] = $this;
        // line 31
        echo "
<div class=\"ec-categoryNaviRole\">
    <div class=\"ec-itemNav\">
        <ul class=\"ec-itemNav__nav\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
            // line 36
            echo "                <li>
                    ";
            // line 37
            echo $context["__internal_bc642de1d6e4727b2f53abaaafabca91dd4ffbe457c61a76466a7c5791af84cd"]->macro_tree($context["Category"]);
            echo "
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </ul>
    </div>
</div>
";
    }

    // line 13
    public function macro_tree($__Category__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "Category" => $__Category__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 14
            echo "    ";
            $context["__internal_7739eca6b114a709ba0216832556e2dfcbeb7181cc871b454ec91aa46bb4d95d"] = $this;
            // line 15
            echo "    <a href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
            echo "?category_id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", []), "html", null, true);
            echo "\">
        ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", []), "html", null, true);
            echo "
    </a>
    ";
            // line 18
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [])) > 0)) {
                // line 19
                echo "        <ul>
            ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 21
                    echo "                <li>
                    ";
                    // line 22
                    echo $context["__internal_7739eca6b114a709ba0216832556e2dfcbeb7181cc871b454ec91aa46bb4d95d"]->macro_tree($context["ChildCategory"]);
                    echo "
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "        </ul>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "__string_template__2800cd15a2ab04d2843707ec52c6d17a3dd59fb5d2ffc0c9eb18c5e8d9cda32a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 25,  113 => 22,  110 => 21,  106 => 20,  103 => 19,  101 => 18,  96 => 16,  89 => 15,  86 => 14,  74 => 13,  67 => 40,  58 => 37,  55 => 36,  51 => 35,  45 => 31,  43 => 30,  40 => 28,  37 => 12,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2800cd15a2ab04d2843707ec52c6d17a3dd59fb5d2ffc0c9eb18c5e8d9cda32a", "");
    }
}
