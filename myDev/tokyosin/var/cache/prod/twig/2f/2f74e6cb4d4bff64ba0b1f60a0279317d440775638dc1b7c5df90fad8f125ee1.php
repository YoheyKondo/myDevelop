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

/* __string_template__a2d2a88ffb00a2afc41cc3e5fdd4f638930140ecef3c0cdf88719f5f1015cb63 */
class __TwigTemplate_b6d0b1169e60b81ea02b76fcaaa171aa0b735294ce5ca6e977457895c6fa5f5e extends \Twig\Template
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
        echo "<div class=\"ec-headerNaviRole\">
    <div class=\"ec-headerNaviRole__left\">
        <div class=\"ec-headerNaviRole__search\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("block_search_product"));
        echo "
        </div>
        <div class=\"ec-headerRole__navSP\">
            ";
        // line 17
        echo twig_include($this->env, $context, "Block/nav_sp.twig");
        echo "
        </div>
    </div>
    <div class=\"ec-headerNaviRole__right\">
        <div class=\"ec-headerNaviRole__nav\">
            ";
        // line 22
        echo twig_include($this->env, $context, "Block/login.twig");
        echo "
        </div>
        <div class=\"ec-headerRole__cart\">
            ";
        // line 25
        echo twig_include($this->env, $context, "Block/cart.twig");
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__a2d2a88ffb00a2afc41cc3e5fdd4f638930140ecef3c0cdf88719f5f1015cb63";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 25,  54 => 22,  46 => 17,  40 => 14,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a2d2a88ffb00a2afc41cc3e5fdd4f638930140ecef3c0cdf88719f5f1015cb63", "");
    }
}
