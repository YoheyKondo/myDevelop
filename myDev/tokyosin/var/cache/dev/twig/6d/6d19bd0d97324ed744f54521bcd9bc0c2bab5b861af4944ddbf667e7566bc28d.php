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

/* __string_template__d21c30341e9ad47eb2e457ccb6c133222bf6ec192a33130596b00d53516cf391 */
class __TwigTemplate_0de33b7f638fdd72a3b87c4cf4aac927cf8027f2ea5ec508453779e0cf0e264f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__d21c30341e9ad47eb2e457ccb6c133222bf6ec192a33130596b00d53516cf391"));

        // line 11
        echo "
<div class=\"ec-topicRole\">
    <div class=\"ec-role\">
        <div class=\"ec-secHeading\">
            <span class=\"ec-secHeading__en\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TOPICS"), "html", null, true);
        echo "</span>
            <span class=\"ec-secHeading__line\"></span>
            <span class=\"ec-secHeading__ja\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("特集"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"ec-topicRole__list\">
            <div class=\"ec-topicRole__listItem\">
                <a href=\"";
        // line 21
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=1\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/img_bnr01.jpg"), "html", null, true);
        echo "\">
                </a>
                <p class=\"ec-topicRole__listItemTitle\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("濃厚なのにアイスよりヘルシー!! ジェラート特集"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"ec-topicRole__listItem\">
                <a href=\"";
        // line 27
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=5\">
                    <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/img_bnr02.jpg"), "html", null, true);
        echo "\">
                </a>
                <p class=\"ec-topicRole__listItemTitle\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("サクサク食感が魅力!! コーンアイス特集"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__d21c30341e9ad47eb2e457ccb6c133222bf6ec192a33130596b00d53516cf391";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 30,  75 => 28,  71 => 27,  65 => 24,  60 => 22,  56 => 21,  49 => 17,  44 => 15,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d21c30341e9ad47eb2e457ccb6c133222bf6ec192a33130596b00d53516cf391", "");
    }
}
