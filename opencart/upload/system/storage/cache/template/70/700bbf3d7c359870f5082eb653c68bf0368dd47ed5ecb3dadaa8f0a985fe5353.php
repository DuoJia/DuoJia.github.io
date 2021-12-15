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

/* localisation/order_status_list.twig */
class __TwigTemplate_db5039acde751a3eecf528f7ff796826a08418d291a4a7c1b2fe50bbaf96e551 extends \Twig\Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-order-status').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-order-status\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 38
        if ((($context["sort"] ?? null) == "name")) {
            // line 39
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 41
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 42
        echo "</td>

            <td class=\"text-right\">";
        // line 44
        echo ($context["column_backgrond_color"] ?? null);
        echo "</td>
            <td class=\"text-right\">";
        // line 45
        echo ($context["column_text_color"] ?? null);
        echo "</td>
\t\t\t
                  <td class=\"text-right\">";
        // line 47
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 51
        if (($context["order_statuses"] ?? null)) {
            // line 52
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
                // line 53
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 54
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 54), ($context["selected"] ?? null))) {
                    // line 55
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 55);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 57
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 57);
                    echo "\" />
                    ";
                }
                // line 58
                echo "</td>
                  <td class=\"text-left\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 59);
                echo "</td>

            <td class=\"text-left\"><div class=\"form-group os-colorpicker\"><div class=\"input-group\"><input type=\"text\" class=\"form-control jcolor\" data-action=\"background_color\" data-order-status-id=\"";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 61);
                echo "\" name=\"jcolor[background_color]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "background_color", [], "any", false, false, false, 61);
                echo "\" /> <span class=\"input-group-addon jcolor_o\" style=\"";
                if (twig_get_attribute($this->env, $this->source, $context["order_status"], "background_color", [], "any", false, false, false, 61)) {
                    echo "background-color: ";
                    echo twig_get_attribute($this->env, $this->source, $context["order_status"], "background_color", [], "any", false, false, false, 61);
                    echo ";";
                }
                echo "\"></span> </div></div></td>
            <td class=\"text-left\"><div class=\"form-group os-colorpicker\"><div class=\"input-group\"><input type=\"text\" class=\"form-control jcolor\" data-action=\"text_color\" data-order-status-id=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 62);
                echo "\" name=\"jcolor[text_color]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "text_color", [], "any", false, false, false, 62);
                echo "\" /> <span class=\"input-group-addon jcolor_o\" style=\"";
                if (twig_get_attribute($this->env, $this->source, $context["order_status"], "text_color", [], "any", false, false, false, 62)) {
                    echo "background-color: ";
                    echo twig_get_attribute($this->env, $this->source, $context["order_status"], "text_color", [], "any", false, false, false, 62);
                    echo ";";
                }
                echo "\"></span> </div></div></td>
\t\t\t
                  <td class=\"text-right\"><a href=\"";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "edit", [], "any", false, false, false, 64);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                ";
        } else {
            // line 68
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"3\">";
            // line 69
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 72
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 77
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 78
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>

\t\t\t<script type=\"text/javascript\"><!--
\t\t\t  // Color Picker
\t\t\t  ";
        // line 88
        echo "\t\t\t  \$(function() {
\t\t\t    var colorpicker = \$('.jcolor').colorpicker({
\t\t\t      'align': 'left',
\t\t\t    });
\t\t\t    colorpicker.on('changeColor', function(e) {
\t\t\t      var clr = \$(this).data('colorpicker').getValue();
\t\t\t      \$(this).parents('.os-colorpicker').first().find('.jcolor_o').css('background-color' , clr);
\t\t\t    }).on('hidePicker', function(e) {
\t\t\t      var clr = \$(this).val(); //\$(this).data('colorpicker').getValue();
\t\t\t      var order_status_id = \$(this).attr('data-order-status-id');
\t\t\t      var action = \$(this).attr('data-action');
\t\t\t      \$.ajax({
\t\t\t        url: 'index.php?route=localisation/order_status/setOrderStatusColor&user_token=";
        // line 100
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t        type: 'post',
\t\t\t        data: 'order_status_id=' + order_status_id + '&action=' + action  + '&color='+ clr,
\t\t\t        dataType: 'json',
\t\t\t        beforeSend: function() {
\t\t\t        },
\t\t\t        complete: function() {
\t\t\t        },
\t\t\t        success: function(json) {
\t\t\t        },
\t\t\t        error: function(xhr, ajaxOptions, thrownError) {
\t\t\t          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t        }
\t\t\t      });
\t\t\t    });
\t\t\t  });
\t\t\t//--></script>
\t\t\t
";
        // line 118
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "localisation/order_status_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 118,  281 => 100,  267 => 88,  255 => 78,  251 => 77,  244 => 72,  238 => 69,  235 => 68,  232 => 67,  221 => 64,  208 => 62,  196 => 61,  191 => 59,  188 => 58,  182 => 57,  176 => 55,  174 => 54,  171 => 53,  166 => 52,  164 => 51,  157 => 47,  152 => 45,  148 => 44,  144 => 42,  136 => 41,  126 => 39,  124 => 38,  115 => 32,  109 => 29,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "localisation/order_status_list.twig", "");
    }
}
