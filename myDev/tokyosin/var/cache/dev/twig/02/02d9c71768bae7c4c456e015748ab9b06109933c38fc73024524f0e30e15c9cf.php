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

/* __string_template__01c8d71462d686322acd55574df76cae5a5fd2ce14bef6bd8a6211f55257e302 */
class __TwigTemplate_5622a3981fceb8ea1b02b4cdb423ec85431f95918539f5416df1fc56cadad959 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__01c8d71462d686322acd55574df76cae5a5fd2ce14bef6bd8a6211f55257e302"));

        // line 11
        echo "
<div class=\"ec-headerLinkArea\">
    <div class=\"ec-headerLink__list\">
        <a class=\"ec-headerLink__item\" href=\"";
        // line 14
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
        echo "\">
            <div class=\"ec-headerLink__icon\">
                <i class=\"fas fa-shopping-cart fa-fw\"></i>
            </div>
            <span>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートを見る"), "html", null, true);
        echo "</span>
        </a>
        ";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 21
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-user fa-fw\"></i>
                </div>
                <span>";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
            echo "</span>
            </a>
            ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_favorite_product", [])) {
                // line 28
                echo "                <a class=\"ec-headerLink__item\" href=\"";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_favorite");
                echo "\">
                    <div class=\"ec-headerLink__icon\">
                        <i class=\"fas fa-heart fa-fw\"></i>
                    </div>
                    <span>";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り"), "html", null, true);
                echo "</span>
                </a>
            ";
            }
            // line 35
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("logout");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-lock fa-fw\"></i>
                </div>
                <span>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログアウト"), "html", null, true);
            echo "</span>
            </a>
        ";
        } else {
            // line 42
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("entry");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-user fa-fw\"></i>
                </div>
                <span>";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録"), "html", null, true);
            echo "</span>
            </a>
            ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_favorite_product", [])) {
                // line 49
                echo "                <a class=\"ec-headerLink__item\" href=\"";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_favorite");
                echo "\">
                    <div class=\"ec-headerLink__icon\">
                        <i class=\"fas fa-heart fa-fw\"></i>
                    </div>
                    <span>";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り"), "html", null, true);
                echo "</span>
                </a>
            ";
            }
            // line 56
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_login");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-lock fa-fw\"></i>
                </div>
                <span>";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログイン"), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        // line 63
        echo "        <a class=\"ec-headerLink__item\" href=\"";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\">
            <div class=\"ec-headerLink__icon\">
                <i class=\"fas fa-home fa-fw\"></i>
            </div>
            <span>";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ホームに戻る"), "html", null, true);
        echo "</span>
        </a>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__01c8d71462d686322acd55574df76cae5a5fd2ce14bef6bd8a6211f55257e302";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 67,  143 => 63,  137 => 60,  129 => 56,  123 => 53,  115 => 49,  113 => 48,  108 => 46,  100 => 42,  94 => 39,  86 => 35,  80 => 32,  72 => 28,  70 => 27,  65 => 25,  57 => 21,  55 => 20,  50 => 18,  43 => 14,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__01c8d71462d686322acd55574df76cae5a5fd2ce14bef6bd8a6211f55257e302", "");
    }
}
