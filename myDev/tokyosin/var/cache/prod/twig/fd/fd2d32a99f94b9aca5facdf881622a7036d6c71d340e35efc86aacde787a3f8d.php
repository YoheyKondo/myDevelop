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

/* @admin/default_frame.twig */
class __TwigTemplate_ac7b08da12ab085842c784cdafd5a69ba576cc83345a358c01182452bbb47fdc extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'main' => [$this, 'block_main'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!doctype html>
";
        // line 12
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", []), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"eccube-csrf-token\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
        echo "\">
    <title>";
        // line 17
        $this->displayBlock("sub_title", $context, $blocks);
        echo " ";
        $this->displayBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", []), "html", null, true);
        echo "</title>
    <link rel=\"icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico", "admin"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.css", "admin"), "html", null, true);
        echo "\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/v4-shims.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/ladda-themeless.min.css", "admin"), "html", null, true);
        echo "\"></link>
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.css", "admin"), "html", null, true);
        echo "\">
    ";
        // line 25
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 26
        echo "    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
    <script>
        \$(function() {
            \$.ajaxSetup({
                'headers': {
                    'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content')
                }
            });
        });
    </script>
    ";
        // line 37
        echo "    ";
        if ((isset($context["plugin_assets"]) || array_key_exists("plugin_assets", $context))) {
            echo twig_include($this->env, $context, "@admin/snippet.twig", ["snippets" => ($context["plugin_assets"] ?? null)]);
        }
        // line 38
        echo "</head>
<body id=\"page_";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "_route"], "method"), "html", null, true);
        echo "\">
<header class=\"c-headerBar\">
    <div class=\"c-headerBar__container\">
        <div class=\"c-headerBar__logo\">
            <h1><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo@2x.png", "admin"), "html", null, true);
        echo "\"></h1>
        </div>
        <a class=\"c-headerBar__toggleBtn\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></a>
        <a class=\"c-headerBar__shopTitle\" href=\"";
        // line 46
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\" target=\"_blank\"><span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", []), "html", null, true);
        echo "</span><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
        <a class=\"c-headerBar__userMenu\"
           data-container=\"body\"
           data-toggle=\"popover\"
           data-placement=\"bottom\"
           title=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.header.last_login"), "html", null, true);
        echo "\"
           data-content=\"&lt;p&gt;";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []), "login_date", [])), "html", null, true);
        echo "&lt;/p&gt;&lt;a href='";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_change_password");
        echo "' class='btn btn-ec-regular btn-block'&gt;";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.header.change_password"), "html", null, true);
        echo "&lt;/a&gt;&lt;a href='";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_logout");
        echo "' class='btn btn-ec-sub btn-block'&gt;";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.header.logout"), "html", null, true);
        echo "&lt;/a&gt;\"
           data-html=\"true\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i><span>";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.header.user_name", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []), "name", [])]), "html", null, true);
        echo "</span><i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
    </div>
</header>
<div class=\"c-container\">
    <div class=\"c-mainNavArea\">
        ";
        // line 58
        echo twig_include($this->env, $context, "@admin/nav.twig");
        echo "
    </div>
    <div class=\"c-curtain\"></div>
    <div class=\"c-contentsArea\">
        <div class=\"c-pageTitle\">
            <div class=\"c-pageTitle__titles\">
                <h2 class=\"c-pageTitle__title\">";
        // line 64
        $this->displayBlock("title", $context, $blocks);
        echo "</h2><span class=\"c-pageTitle__subTitle\">";
        $this->displayBlock("sub_title", $context, $blocks);
        echo "</span>
            </div>
        </div>

        ";
        // line 68
        echo twig_include($this->env, $context, "@admin/alert.twig");
        echo "

        ";
        // line 70
        $this->displayBlock('main', $context, $blocks);
        // line 71
        echo "
    </div>
</div>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/spin.min.js", "admin"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/ladda.min.js", "admin"), "html", null, true);
        echo "\"></script>
";
        // line 78
        $this->loadTemplate("@common/lang.twig", "@admin/default_frame.twig", 78)->display($context);
        // line 79
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/function.js", "admin"), "html", null, true);
        echo "\"></script>
";
        // line 80
        $this->displayBlock('javascript', $context, $blocks);
        // line 82
        if ((isset($context["plugin_snippets"]) || array_key_exists("plugin_snippets", $context))) {
            // line 83
            echo "    ";
            echo twig_include($this->env, $context, "@admin/snippet.twig", ["snippets" => ($context["plugin_snippets"] ?? null)]);
            echo "
";
        }
        // line 85
        echo "</body>
</html>
";
    }

    // line 25
    public function block_stylesheet($context, array $blocks = [])
    {
    }

    // line 70
    public function block_main($context, array $blocks = [])
    {
    }

    // line 80
    public function block_javascript($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@admin/default_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 80,  217 => 70,  212 => 25,  206 => 85,  200 => 83,  198 => 82,  196 => 80,  191 => 79,  189 => 78,  185 => 77,  181 => 76,  174 => 71,  172 => 70,  167 => 68,  158 => 64,  149 => 58,  141 => 53,  129 => 52,  125 => 51,  115 => 46,  109 => 43,  102 => 39,  99 => 38,  94 => 37,  82 => 26,  80 => 25,  76 => 24,  72 => 23,  65 => 19,  61 => 18,  53 => 17,  49 => 16,  41 => 12,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/default_frame.twig", "D:\\xampp\\xampp\\htdocs\\Englearn\\myDev\\tokyosin\\src\\Eccube\\Resource\\template\\admin\\default_frame.twig");
    }
}
