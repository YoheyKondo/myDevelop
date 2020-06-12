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

/* __string_template__f4a514b8b36d667d8522901e6763e2d57e2d3c4627727e8fa95da90776a5e103 */
class __TwigTemplate_089017349e3ed60bb2bdd31792c49d66e699b1d1dc145d5f8ef05c6681713f31 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__f4a514b8b36d667d8522901e6763e2d57e2d3c4627727e8fa95da90776a5e103"));

        // line 13
        $context["menus"] = [0 => "content", 1 => "block"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "__string_template__f4a514b8b36d667d8522901e6763e2d57e2d3c4627727e8fa95da90776a5e103", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.block_management"), "html", null, true);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_stylesheet($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 19
        echo "    <style type=\"text/css\">
        li.list-group-item {
            z-index: inherit !important;
        }
    </style>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 27
        echo "    <script>
        // searchWordの実行
        \$('#search-block').on('input', function () {
            searchWord(\$(this).val(), \$(\".list-group li\"));
        });
    </script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 36
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"row justify-content-between mb-2\">
                    <div class=\"col-9\">
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 41
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_block_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                    </div>
                    <div class=\"col-3\">
                        <div class=\"form-row\">
                            <div class=\"col\">
                                <div class=\"input-group mb-3\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\" id=\"basic-addon1\"><i class=\"fa fa-search\"></i></span>
                                    </div>
                                    <input id=\"search-block\" class=\"form-control\" type=\"search\" aria-label=\"Search\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <div class=\"card rounded border-0\">
                            <ul class=\"list-group list-group-flush\">
                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Blocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Block"]) {
            // line 61
            echo "                                    <li id=\"ex-block-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Block"], "id", []), "html", null, true);
            echo "\" class=\"list-group-item\">
                                        <div class=\"row\">
                                            <div class=\"col-7 col-md-10 d-flex align-items-center\">
                                                <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_block_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Block"], "id", [])]), "html", null, true);
            echo "\">
                                                    ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Block"], "name", []), "html", null, true);
            echo "
                                                </a>
                                            </div>
                                            <div class=\"col-5 col-md-2\">
                                                <div class=\"row\">
                                                    <div class=\"col-6 text-right\">
                                                        <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_block_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Block"], "id", [])]), "html", null, true);
            echo "\"
                                                           class=\"btn btn-ec-actionIcon mr-3\" data-tooltip=\"true\"
                                                           data-placement=\"top\" title=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "\">
                                                            <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                        </a>
                                                    </div>
                                                    ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, $context["Block"], "deletable", [])) {
                // line 78
                echo "                                                        <div class=\"col-6\">
                                                            <div class=\"d-inline-block mr-3\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#confirmModal-";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Block"], "id", []), "html", null, true);
                echo "\" class=\"btn btn-ec-actionIcon\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"modal fade\" id=\"confirmModal-";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Block"], "id", []), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\"
                                                             aria-labelledby=\"confirmModal-";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Block"], "id", []), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title font-weight-bold\">";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                            <span aria-hidden=\"true\">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-left\">
                                                                        <p class=\"text-left\">";
                // line 96
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Block"], "name", [])]), "html", null, true);
                echo "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                        <a href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_block_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Block"], "Id", [])]), "html", null, true);
                echo "\"
                                                                           class=\"btn btn-ec-delete\" data-confirm=\"false\" ";
                // line 101
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">
                                                                            ";
                // line 102
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
            }
            // line 109
            echo "                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__f4a514b8b36d667d8522901e6763e2d57e2d3c4627727e8fa95da90776a5e103";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 114,  256 => 109,  246 => 102,  242 => 101,  238 => 100,  234 => 99,  228 => 96,  219 => 90,  212 => 86,  208 => 85,  200 => 80,  196 => 79,  193 => 78,  191 => 77,  184 => 73,  179 => 71,  170 => 65,  166 => 64,  159 => 61,  155 => 60,  131 => 41,  124 => 36,  118 => 35,  105 => 27,  99 => 26,  87 => 19,  81 => 18,  69 => 16,  57 => 15,  49 => 11,  47 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f4a514b8b36d667d8522901e6763e2d57e2d3c4627727e8fa95da90776a5e103", "");
    }
}
