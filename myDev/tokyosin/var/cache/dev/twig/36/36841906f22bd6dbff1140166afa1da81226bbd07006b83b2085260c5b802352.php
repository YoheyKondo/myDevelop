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

/* __string_template__01c1b2d1369ade52b91025e4edcb367fa5f2438611874c879d710f61881d59f1 */
class __TwigTemplate_24c7613631492965589cf0ec9805385f1e4a3fad622968d006684812c648b8cc extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__01c1b2d1369ade52b91025e4edcb367fa5f2438611874c879d710f61881d59f1"));

        // line 13
        $context["menus"] = [0 => "content", 1 => "layout"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "__string_template__01c1b2d1369ade52b91025e4edcb367fa5f2438611874c879d710f61881d59f1", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_management"), "html", null, true);
        
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
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 19
        echo "    <script>
        \$(function() {
            // 削除モーダルのhrefとmessageの変更
            \$('#DeleteModal').on('shown.bs.modal', function(event) {
                var target = \$(event.relatedTarget);
                // hrefの変更
                \$(this).find('[data-method=\"delete\"]').attr('href', target.data('url'));

                // messageの変更
                \$(this).find('p.modal-message').text(target.data('message'));
            });
        });
    </script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 35
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"d-block mb-3\">
                    <a class=\"btn btn-ec-regular\" href=\"";
        // line 39
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_layout_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                </div>
                ";
        // line 42
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Layout"]) {
            // line 43
            echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Layout"], "DeviceType", []), "id", []) == twig_constant("Eccube\\Entity\\Master\\DeviceType::DEVICE_TYPE_PC"))) {
                // line 48
                echo "                                        ";
                $context["icon"] = "fa-desktop";
                // line 49
                echo "                                    ";
            } else {
                // line 50
                echo "                                        ";
                $context["icon"] = "fa-mobile";
                // line 51
                echo "                                    ";
            }
            // line 52
            echo "                                    <i class=\"fa fa-fw ";
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo " fa-lg mr-2\"></i>
                                    <a class=\"card-title align-middle\"
                                       href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_layout_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Layout"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Layout"], "name", []), "html", null, true);
            echo "</a>
                                </div>
                                <div class=\"col-4 text-right\">
                                    ";
            // line 57
            if ((twig_get_attribute($this->env, $this->source, $context["Layout"], "isDefault", [], "method") == false)) {
                // line 58
                echo "                                        <button class=\"btn btn-ec-sub mr-3\" type=\"button\" data-toggle=\"modal\" data-target=\"#DeleteModal\"
                                                data-url=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_layout_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Layout"], "id", [])]), "html", null, true);
                echo "\"
                                                data-message=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Layout"], "name", [])]), "html", null, true);
                echo "\">
                                            <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                            ";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_delete"), "html", null, true);
                echo "
                                        </button>
                                    ";
            }
            // line 65
            echo "                                    <a href=\"#layout-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Layout"], "id", []), "html", null, true);
            echo "\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"layout-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Layout"], "id", []), "html", null, true);
            echo "\">
                                        <i class=\"fa fa-angle-down fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        ";
            // line 73
            echo "                        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Layout"], "pages", [])) > 0)) {
                // line 74
                echo "                            <div class=\"collapse ec-cardCollapse\" id=\"layout-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Layout"], "id", []), "html", null, true);
                echo "\">
                                ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Layout"], "pages", []));
                foreach ($context['_seq'] as $context["_key"] => $context["Page"]) {
                    // line 76
                    echo "                                    <div class=\"card-body p-0\">
                                        <div class=\"row justify-content-between p-3\">
                                            <div class=\"col-auto\">
                                                <a href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_page_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Page"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "name", []), "html", null, true);
                    echo "</a>
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "                            </div>
                        ";
            } else {
                // line 86
                echo "                            <div class=\"collapse ec-cardCollapse\" id=\"layout-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Layout"], "id", []), "html", null, true);
                echo "\">
                                <div class=\"p-0 empty-item\">
                                    <div class=\"d-block p-3\">
                                        <span class=\"text-muted\">";
                // line 89
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_no_page"), "html", null, true);
                echo "</span>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 94
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
                <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
        echo "</h5>
                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            </div>
                            <div class=\"modal-body\">
                                <p class=\"modal-message\"><!-- jsでメッセージを挿入 --></p>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn btn-ec-sub w-25\" type=\"button\" data-dismiss=\"modal\">";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <a href=\"#\" class=\"btn btn-ec-delete\" ";
        // line 109
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo " data-method=\"delete\" data-confirm=\"false\">
                                    ";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                                </a>
                            </div>
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
        return "__string_template__01c1b2d1369ade52b91025e4edcb367fa5f2438611874c879d710f61881d59f1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 110,  274 => 109,  270 => 108,  260 => 101,  253 => 96,  246 => 94,  238 => 89,  231 => 86,  227 => 84,  214 => 79,  209 => 76,  205 => 75,  200 => 74,  197 => 73,  184 => 65,  178 => 62,  173 => 60,  169 => 59,  166 => 58,  164 => 57,  156 => 54,  150 => 52,  147 => 51,  144 => 50,  141 => 49,  138 => 48,  136 => 47,  130 => 43,  125 => 42,  118 => 39,  112 => 35,  106 => 34,  86 => 19,  80 => 18,  68 => 16,  56 => 15,  48 => 11,  46 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__01c1b2d1369ade52b91025e4edcb367fa5f2438611874c879d710f61881d59f1", "");
    }
}
