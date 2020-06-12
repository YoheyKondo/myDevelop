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

/* __string_template__a8710b88b937e760739a659c09cbaf11cb05d673e7078150953d33111e3a0d06 */
class __TwigTemplate_a09a0e014ea9e77a694b3cb1a87e221e856c8c2cf110cba877d76e41a7f17e76 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__a8710b88b937e760739a659c09cbaf11cb05d673e7078150953d33111e3a0d06"));

        // line 11
        echo "
<div class=\"ec-role\">
    <div class=\"ec-eyecatchRole\">
        <div class=\"ec-eyecatchRole__image\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/img_about.jpg"), "html", null, true);
        echo "\" alt=\"\" role=\"presentation\"/>
        </div>
        <div class=\"ec-eyecatchRole__intro\">
            <p class=\"ec-eyecatchRole__introEnTitle\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CUBE GELATO ICE"), "html", null, true);
        echo "</p>
            <p class=\"ec-eyecatchRole__introTitle\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("彩のジェラート\"CUBE\"をご堪能ください。"), "html", null, true);
        echo "</p>
            <p class=\"ec-eyecatchRole__introDescriptiron\">";
        // line 20
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ジェラートとはイタリアン・アイスクリームのことで、一般的なアイスクリームに比べて、乳脂肪分が低くいのが特徴です。
当店では厳選した旬の果物のおいしさをそのままジェラートに仕上げました。風味が濃厚でありながら、甘さ控えめでヘルシーなキューブジェラートをご堪能ください。
さらにジェラートの製法を活かした、アイスキャンディ・アイスサンドも販売しております。
"), "html", null, true));
        // line 23
        echo "</p>
            <a class=\"ec-blockBtn--top\" href=\"";
        // line 24
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=4\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("一覧を見る"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__a8710b88b937e760739a659c09cbaf11cb05d673e7078150953d33111e3a0d06";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 24,  63 => 23,  58 => 20,  54 => 19,  50 => 18,  44 => 15,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a8710b88b937e760739a659c09cbaf11cb05d673e7078150953d33111e3a0d06", "");
    }
}
