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

/* block.twig */
class __TwigTemplate_e66406093ef6d47fd1534bb3837f587e5c9bc4900d89116ffe2abc0cb61db38a extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Blocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Block"]) {
            // line 12
            echo "    <!-- ▼";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Block"], "name", []), "html", null, true);
            echo " -->
    ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["Block"], "use_controller", [])) {
                // line 14
                echo "        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(("block_" . twig_get_attribute($this->env, $this->source, $context["Block"], "file_name", []))));
                echo "
    ";
            } else {
                // line 16
                echo "        ";
                echo $this->extensions['Eccube\Twig\Extension\TwigIncludeExtension']->include_dispatch($context, (("Block/" . twig_get_attribute($this->env, $this->source, $context["Block"], "file_name", [])) . ".twig"));
                echo "
    ";
            }
            // line 18
            echo "    <!-- ▲";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Block"], "name", []), "html", null, true);
            echo " -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  52 => 16,  46 => 14,  44 => 13,  39 => 12,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "block.twig", "D:\\xampp\\xampp\\htdocs\\Englearn\\myDev\\tokyosin\\src\\Eccube\\Resource\\template\\default\\block.twig");
    }
}
