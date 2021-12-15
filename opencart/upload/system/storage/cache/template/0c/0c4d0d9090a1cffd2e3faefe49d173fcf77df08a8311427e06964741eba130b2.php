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

/* extension/dashboard/recent_info.twig */
class __TwigTemplate_e5699a85129c3503b0343c4fc7bd9858e2e495399909fc39cf48e34c32cbda33 extends \Twig\Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"fa fa-shopping-cart\"></i> ";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h3>
  </div>
  <div class=\"table-responsive\">
    <table class=\"table\">
      <thead>
        <tr>
          <td class=\"text-right\">";
        // line 9
        echo ($context["column_order_id"] ?? null);
        echo "</td>
          <td>";
        // line 10
        echo ($context["column_customer"] ?? null);
        echo "</td>
          <td>";
        // line 11
        echo ($context["column_status"] ?? null);
        echo "</td>
          <td>";
        // line 12
        echo ($context["column_date_added"] ?? null);
        echo "</td>
          <td class=\"text-right\">";
        // line 13
        echo ($context["column_total"] ?? null);
        echo "</td>
          <td class=\"text-right\">";
        // line 14
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 18
        if (($context["orders"] ?? null)) {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 20
                echo "        <tr>
          <td class=\"text-right\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 21);
                echo "</td>
          <td>";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 22);
                echo "</td>
          <td>";
                // line 23
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "text_color", [], "any", false, false, false, 23) || twig_get_attribute($this->env, $this->source, $context["order"], "backgrond_color", [], "any", false, false, false, 23))) {
                    echo "<label style=\"padding: 5px; border-radius: 4px;";
                    if (twig_get_attribute($this->env, $this->source, $context["order"], "backgrond_color", [], "any", false, false, false, 23)) {
                        echo "background: ";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "backgrond_color", [], "any", false, false, false, 23);
                        echo ";";
                    }
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, $context["order"], "text_color", [], "any", false, false, false, 23)) {
                        echo "color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "text_color", [], "any", false, false, false, 23);
                        echo ";";
                    }
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 23);
                    echo "</label>";
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 23);
                }
                echo "</td>
          <td>";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 24);
                echo "</td>
          <td class=\"text-right\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 25);
                echo "</td>
          <td class=\"text-right\"><a href=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 26);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
        } else {
            // line 30
            echo "        <tr>
          <td class=\"text-center\" colspan=\"6\">";
            // line 31
            echo ($context["text_no_results"] ?? null);
            echo "</td>
        </tr>
        ";
        }
        // line 34
        echo "      </tbody>
    </table>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/recent_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 34,  142 => 31,  139 => 30,  136 => 29,  125 => 26,  121 => 25,  117 => 24,  95 => 23,  91 => 22,  87 => 21,  84 => 20,  79 => 19,  77 => 18,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/dashboard/recent_info.twig", "");
    }
}
