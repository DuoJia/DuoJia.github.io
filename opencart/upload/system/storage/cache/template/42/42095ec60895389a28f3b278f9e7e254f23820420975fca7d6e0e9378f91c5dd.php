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

/* sale/order_info.twig */
class __TwigTemplate_edaccd55d1c361d0950d2f7cee1a3bff7587d7b06ea6ceee8a6b9848db363ab1 extends \Twig\Template
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
        echo ($context["invoice"] ?? null);
        echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a> <a href=\"";
        echo ($context["shipping"] ?? null);
        echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></a> <a href=\"";
        echo ($context["edit"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_edit"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a> <a href=\"";
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-shopping-cart\"></i> ";
        // line 19
        echo ($context["text_order_detail"] ?? null);
        echo "</h3>
          </div>
          <table class=\"table\">
            <tbody>
              <tr>
                <td style=\"width: 1%;\"><button data-toggle=\"tooltip\" title=\"";
        // line 24
        echo ($context["text_store"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-shopping-cart fa-fw\"></i></button></td>
                <td><a href=\"";
        // line 25
        echo ($context["store_url"] ?? null);
        echo "\" target=\"_blank\">";
        echo ($context["store_name"] ?? null);
        echo "</a></td>
              </tr>
              <tr>
                <td><button data-toggle=\"tooltip\" title=\"";
        // line 28
        echo ($context["text_date_added"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-calendar fa-fw\"></i></button></td>
                <td>";
        // line 29
        echo ($context["date_added"] ?? null);
        echo "</td>
              </tr>
              <tr>
                <td><button data-toggle=\"tooltip\" title=\"";
        // line 32
        echo ($context["text_payment_method"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-credit-card fa-fw\"></i></button></td>
                <td>";
        // line 33
        echo ($context["payment_method"] ?? null);
        echo "</td>
              </tr>
              ";
        // line 35
        if (($context["shipping_method"] ?? null)) {
            // line 36
            echo "                <tr>
                  <td><button data-toggle=\"tooltip\" title=\"";
            // line 37
            echo ($context["text_shipping_method"] ?? null);
            echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-truck fa-fw\"></i></button></td>
                  <td>";
            // line 38
            echo ($context["shipping_method"] ?? null);
            echo "</td>
                </tr>
              ";
        }
        // line 41
        echo "            </tbody>

          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-user\"></i> ";
        // line 49
        echo ($context["text_customer_detail"] ?? null);
        echo "</h3>
          </div>
          <table class=\"table\">
            <tr>
              <td style=\"width: 1%;\"><button data-toggle=\"tooltip\" title=\"";
        // line 53
        echo ($context["text_customer"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-user fa-fw\"></i></button></td>
              <td>";
        // line 54
        if (($context["customer"] ?? null)) {
            echo " <a href=\"";
            echo ($context["customer"] ?? null);
            echo "\" target=\"_blank\">";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "</a> ";
        } else {
            // line 55
            echo "                  ";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "
                ";
        }
        // line 56
        echo "</td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 59
        echo ($context["text_customer_group"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-group fa-fw\"></i></button></td>
              <td>";
        // line 60
        echo ($context["customer_group"] ?? null);
        echo "</td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 63
        echo ($context["text_email"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-envelope-o fa-fw\"></i></button></td>
              <td><a href=\"mailto:";
        // line 64
        echo ($context["email"] ?? null);
        echo "\">";
        echo ($context["email"] ?? null);
        echo "</a></td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 67
        echo ($context["text_telephone"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-phone fa-fw\"></i></button></td>
              <td>";
        // line 68
        echo ($context["telephone"] ?? null);
        echo "</td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-cog\"></i> ";
        // line 76
        echo ($context["text_option"] ?? null);
        echo "</h3>
          </div>
          <table class=\"table\">
            <tbody>
              <tr>
                <td>";
        // line 81
        echo ($context["text_invoice"] ?? null);
        echo "</td>
                <td id=\"invoice\" class=\"text-right\">";
        // line 82
        echo ($context["invoice_no"] ?? null);
        echo "</td>
                <td style=\"width: 1%;\" class=\"text-center\">";
        // line 83
        if ( !($context["invoice_no"] ?? null)) {
            // line 84
            echo "                    <button id=\"button-invoice\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_generate"] ?? null);
            echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-cog\"></i></button>
                  ";
        } else {
            // line 86
            echo "                    <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-refresh\"></i></button>
                  ";
        }
        // line 87
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 90
        echo ($context["text_reward"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 91
        echo ($context["reward"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 92
        if ((($context["customer"] ?? null) && ($context["reward"] ?? null))) {
            // line 93
            echo "                    ";
            if ( !($context["reward_total"] ?? null)) {
                // line 94
                echo "                      <button id=\"button-reward-add\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reward_add"] ?? null);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                    ";
            } else {
                // line 96
                echo "                      <button id=\"button-reward-remove\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reward_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>
                    ";
            }
            // line 98
            echo "                  ";
        } else {
            // line 99
            echo "                    <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
        }
        // line 100
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 103
        echo ($context["text_affiliate"] ?? null);
        echo "
                  ";
        // line 104
        if (($context["affiliate"] ?? null)) {
            // line 105
            echo "                    (<a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["affiliate_firstname"] ?? null);
            echo " ";
            echo ($context["affiliate_lastname"] ?? null);
            echo "</a>)
                  ";
        }
        // line 106
        echo "</td>
                <td class=\"text-right\">";
        // line 107
        echo ($context["commission"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 108
        if (($context["affiliate"] ?? null)) {
            // line 109
            echo "                    ";
            if ( !($context["commission_total"] ?? null)) {
                // line 110
                echo "                      <button id=\"button-commission-add\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_commission_add"] ?? null);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                    ";
            } else {
                // line 112
                echo "                      <button id=\"button-commission-remove\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_commission_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>
                    ";
            }
            // line 114
            echo "                  ";
        } else {
            // line 115
            echo "                    <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
        }
        // line 116
        echo "</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-info-circle\"></i> ";
        // line 125
        echo ($context["text_order"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td style=\"width: 50%;\" class=\"text-left\">";
        // line 131
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
              ";
        // line 132
        if (($context["shipping_method"] ?? null)) {
            // line 133
            echo "                <td style=\"width: 50%;\" class=\"text-left\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
              ";
        }
        // line 134
        echo " </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\">";
        // line 138
        echo ($context["payment_address"] ?? null);
        echo "</td>
              ";
        // line 139
        if (($context["shipping_method"] ?? null)) {
            // line 140
            echo "                <td class=\"text-left\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
              ";
        }
        // line 141
        echo " </tr>
          </tbody>
        </table>
        <table class=\"table table-bordered\">
          <thead>
            <tr>

        <td class=\"text-left\">";
        // line 148
        echo ($context["column_image"] ?? null);
        echo "</td>
          
              <td class=\"text-left\">";
        // line 150
        echo ($context["column_product"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 151
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 152
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 153
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 154
        echo ($context["column_total"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>

            ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 160
            echo "              <tr>

       <td class=\"text-conter\"><img src=\"";
            // line 162
            echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 162);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 162);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 162);
            echo "\" class=\"img-thumbnail\" /></td>
          
                <td class=\"text-left\"><a href=\"";
            // line 164
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 164);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 164);
            echo "</a> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 164));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 165
                echo "                    <br/>
                    ";
                // line 166
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 166) != "file")) {
                    // line 167
                    echo "                      &nbsp;
                      <small> - ";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 168);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 168);
                    echo "</small> ";
                } else {
                    // line 169
                    echo "                      &nbsp;
                      <small> - ";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 170);
                    echo ": <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "href", [], "any", false, false, false, 170);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 170);
                    echo "</a></small> ";
                }
                // line 171
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                <td class=\"text-left\">";
            // line 172
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 172);
            echo "</td>
                <td class=\"text-right\">";
            // line 173
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 173);
            echo "</td>
                <td class=\"text-right\">";
            // line 174
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 174);
            echo "</td>
                <td class=\"text-right\">";
            // line 175
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 175);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 179
            echo "              <tr>
                <td class=\"text-left\"><a href=\"";
            // line 180
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "href", [], "any", false, false, false, 180);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 180);
            echo "</a></td>
                <td class=\"text-left\"></td>
                <td class=\"text-right\">1</td>
                <td class=\"text-right\">";
            // line 183
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 183);
            echo "</td>
                <td class=\"text-right\">";
            // line 184
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 184);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 188
            echo "              <tr>
                
       <td colspan=\"5\" class=\"text-right\">
          ";
            // line 191
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 191);
            echo "</td>
                <td class=\"text-right\">";
            // line 192
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 192);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "          </tbody>

        </table>
        ";
        // line 198
        if (($context["comment"] ?? null)) {
            // line 199
            echo "          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td>";
            // line 202
            echo ($context["text_comment"] ?? null);
            echo "</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
            // line 207
            echo ($context["comment"] ?? null);
            echo "</td>
              </tr>
            </tbody>
          </table>
        ";
        }
        // line 211
        echo " </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-comment-o\"></i> ";
        // line 215
        echo ($context["text_history"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-history\" data-toggle=\"tab\">";
        // line 219
        echo ($context["tab_history"] ?? null);
        echo "</a></li>
          <li><a href=\"#tab-additional\" data-toggle=\"tab\">";
        // line 220
        echo ($context["tab_additional"] ?? null);
        echo "</a></li>
          ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 222
            echo "            <li><a href=\"#tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 222);
            echo "\" data-toggle=\"tab\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 222);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-history\">
            <div id=\"history\"></div>
            <br/>
            <fieldset>
              <legend>";
        // line 230
        echo ($context["text_history_add"] ?? null);
        echo "</legend>
              <form class=\"form-horizontal\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 233
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-control\">


                      ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["order_statuses"]);
        foreach ($context['_seq'] as $context["_key"] => $context["order_statuses"]) {
            // line 239
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 239) == ($context["order_status_id"] ?? null))) {
                // line 240
                echo "

                          <option value=\"";
                // line 242
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 242);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "name", [], "any", false, false, false, 242);
                echo "</option>


                        ";
            } else {
                // line 246
                echo "

                          <option value=\"";
                // line 248
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 248);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "name", [], "any", false, false, false, 248);
                echo "</option>


                        ";
            }
            // line 252
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_statuses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-override\"><span data-toggle=\"tooltip\" title=\"";
        // line 259
        echo ($context["help_override"] ?? null);
        echo "\">";
        echo ($context["entry_override"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      <input type=\"checkbox\" name=\"override\" value=\"1\" id=\"input-override\"/>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-notify\">";
        // line 267
        echo ($context["entry_notify"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\"/>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 275
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                </div>
              </form>
            </fieldset>
            <div class=\"text-right\">
              <button id=\"button-history\" data-loading-text=\"";
        // line 283
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["button_history_add"] ?? null);
        echo "</button>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-additional\"> ";
        // line 286
        if (($context["account_custom_fields"] ?? null)) {
            // line 287
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 291
            echo ($context["text_account_custom_field"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["account_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 297
                echo "                      <tr>
                        <td>";
                // line 298
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 298);
                echo "</td>
                        <td>";
                // line 299
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 299);
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 302
            echo "                  </tbody>

                </table>
              </div>
            ";
        }
        // line 307
        echo "            ";
        if (($context["payment_custom_fields"] ?? null)) {
            // line 308
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 312
            echo ($context["text_payment_custom_field"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
            // line 317
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 318
                echo "                      <tr>
                        <td>";
                // line 319
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 319);
                echo "</td>
                        <td>";
                // line 320
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 320);
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 323
            echo "                  </tbody>

                </table>
              </div>
            ";
        }
        // line 328
        echo "            ";
        if ((($context["shipping_method"] ?? null) && ($context["shipping_custom_fields"] ?? null))) {
            // line 329
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 333
            echo ($context["text_shipping_custom_field"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 339
                echo "                      <tr>
                        <td>";
                // line 340
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 340);
                echo "</td>
                        <td>";
                // line 341
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 341);
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 344
            echo "                  </tbody>

                </table>
              </div>
            ";
        }
        // line 349
        echo "            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
        // line 353
        echo ($context["text_browser"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>";
        // line 358
        echo ($context["text_ip"] ?? null);
        echo "</td>
                    <td>";
        // line 359
        echo ($context["ip"] ?? null);
        echo "</td>
                  </tr>
                  ";
        // line 361
        if (($context["forwarded_ip"] ?? null)) {
            // line 362
            echo "                    <tr>
                      <td>";
            // line 363
            echo ($context["text_forwarded_ip"] ?? null);
            echo "</td>
                      <td>";
            // line 364
            echo ($context["forwarded_ip"] ?? null);
            echo "</td>
                    </tr>
                  ";
        }
        // line 367
        echo "                  <tr>
                    <td>";
        // line 368
        echo ($context["text_user_agent"] ?? null);
        echo "</td>
                    <td>";
        // line 369
        echo ($context["user_agent"] ?? null);
        echo "</td>
                  </tr>
                  <tr>
                    <td>";
        // line 372
        echo ($context["text_accept_language"] ?? null);
        echo "</td>
                    <td>";
        // line 373
        echo ($context["accept_language"] ?? null);
        echo "</td>
                  </tr>
                </tbody>

              </table>
            </div>
          </div>
          ";
        // line 380
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 381
            echo "            <div class=\"tab-pane\" id=\"tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 381);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 381);
            echo "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 382
        echo " </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$(document).delegate('#button-invoice', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/createinvoiceno&user_token=";
        // line 389
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-invoice').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-invoice').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['invoice_no']) {
\t\t\t\t  \$('#invoice').html(json['invoice_no']);

\t\t\t\t  \$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-cog\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$(document).delegate('#button-reward-add', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/addreward&user_token=";
        // line 418
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-reward-add').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-reward-add').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t  \$('#button-reward-add').replaceWith('<button id=\"button-reward-remove\" data-toggle=\"tooltip\" title=\"";
        // line 437
        echo ($context["button_reward_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$(document).delegate('#button-reward-remove', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/removereward&user_token=";
        // line 448
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-reward-remove').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-reward-remove').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t  \$('#button-reward-remove').replaceWith('<button id=\"button-reward-add\" data-toggle=\"tooltip\" title=\"";
        // line 467
        echo ($context["button_reward_add"] ?? null);
        echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$(document).delegate('#button-commission-add', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/addcommission&user_token=";
        // line 478
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-commission-add').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-commission-add').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t  \$('#button-commission-add').replaceWith('<button id=\"button-commission-remove\" data-toggle=\"tooltip\" title=\"";
        // line 497
        echo ($context["button_commission_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$(document).delegate('#button-commission-remove', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/removecommission&user_token=";
        // line 508
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-commission-remove').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-commission-remove').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t  \$('#button-commission-remove').replaceWith('<button id=\"button-commission-add\" data-toggle=\"tooltip\" title=\"";
        // line 527
        echo ($context["button_commission_add"] ?? null);
        echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  var api_token = '';

  \$.ajax({
\t  url: '";
        // line 539
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/login',
\t  type: 'post',
\t  dataType: 'json',
\t  data: 'key=";
        // line 542
        echo ($context["api_key"] ?? null);
        echo "',
\t  crossDomain: true,
\t  success: function(json) {
\t\t  \$('.alert').remove();
\t\t  if (json['error']) {
\t\t\t  if (json['error']['key']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['key'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t  }
\t\t\t  if (json['error']['ip']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['ip'] + ' <button type=\"button\" id=\"button-ip-add\" data-loading-text=\"";
        // line 551
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-danger btn-xs pull-right\"><i class=\"fa fa-plus\"></i>";
        echo ($context["button_ip_add"] ?? null);
        echo "</button></div>');
\t\t\t  }
\t\t  }
\t\t  if (json['token']) {
\t\t\t  api_token = json['token'];
\t\t  }
\t  },
\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t  }
  });

  \$('#history').delegate('.pagination a', 'click', function(e) {
\t  e.preventDefault();

\t  \$('#history').load(this.href);
  });

  \$('#history').load('index.php?route=sale/order/history&user_token=";
        // line 569
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "');

  \$('#button-history').on('click', function() {
\t  \$.ajax({
\t\t  url: '";
        // line 573
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/history&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  data: 'order_status_id=' + encodeURIComponent(\$('select[name=\\'order_status_id\\']').val()) + '&notify=' + (\$('input[name=\\'notify\\']').prop('checked') ? 1 : 0) + '&override=' + (\$('input[name=\\'override\\']').prop('checked') ? 1 : 0) + '&append=' + (\$('input[name=\\'append\\']').prop('checked') ? 1 : 0) + '&comment=' + encodeURIComponent(\$('textarea[name=\\'comment\\']').val()),
\t\t  beforeSend: function() {
\t\t\t  \$('#button-history').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-history').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#history').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#history').load('index.php?route=sale/order/history&user_token=";
        // line 591
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "');

\t\t\t\t  \$('#history').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t  \$('textarea[name=\\'comment\\']').val('');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });
  //--></script>
</div>
";
        // line 605
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1253 => 605,  1234 => 591,  1207 => 573,  1198 => 569,  1175 => 551,  1163 => 542,  1157 => 539,  1142 => 527,  1118 => 508,  1104 => 497,  1080 => 478,  1066 => 467,  1042 => 448,  1028 => 437,  1004 => 418,  970 => 389,  961 => 382,  950 => 381,  946 => 380,  936 => 373,  932 => 372,  926 => 369,  922 => 368,  919 => 367,  913 => 364,  909 => 363,  906 => 362,  904 => 361,  899 => 359,  895 => 358,  887 => 353,  881 => 349,  874 => 344,  865 => 341,  861 => 340,  858 => 339,  854 => 338,  846 => 333,  840 => 329,  837 => 328,  830 => 323,  821 => 320,  817 => 319,  814 => 318,  810 => 317,  802 => 312,  796 => 308,  793 => 307,  786 => 302,  777 => 299,  773 => 298,  770 => 297,  766 => 296,  758 => 291,  752 => 287,  750 => 286,  742 => 283,  731 => 275,  720 => 267,  707 => 259,  699 => 253,  693 => 252,  684 => 248,  680 => 246,  671 => 242,  667 => 240,  664 => 239,  660 => 238,  652 => 233,  646 => 230,  638 => 224,  627 => 222,  623 => 221,  619 => 220,  615 => 219,  608 => 215,  602 => 211,  594 => 207,  586 => 202,  581 => 199,  579 => 198,  574 => 195,  565 => 192,  561 => 191,  556 => 188,  551 => 187,  542 => 184,  538 => 183,  530 => 180,  527 => 179,  522 => 178,  513 => 175,  509 => 174,  505 => 173,  501 => 172,  493 => 171,  485 => 170,  482 => 169,  476 => 168,  473 => 167,  471 => 166,  468 => 165,  460 => 164,  451 => 162,  447 => 160,  443 => 159,  435 => 154,  431 => 153,  427 => 152,  423 => 151,  419 => 150,  414 => 148,  405 => 141,  399 => 140,  397 => 139,  393 => 138,  387 => 134,  381 => 133,  379 => 132,  375 => 131,  366 => 125,  355 => 116,  351 => 115,  348 => 114,  340 => 112,  332 => 110,  329 => 109,  327 => 108,  323 => 107,  320 => 106,  310 => 105,  308 => 104,  304 => 103,  299 => 100,  295 => 99,  292 => 98,  284 => 96,  276 => 94,  273 => 93,  271 => 92,  267 => 91,  263 => 90,  258 => 87,  254 => 86,  246 => 84,  244 => 83,  240 => 82,  236 => 81,  228 => 76,  217 => 68,  213 => 67,  205 => 64,  201 => 63,  195 => 60,  191 => 59,  186 => 56,  178 => 55,  168 => 54,  164 => 53,  157 => 49,  147 => 41,  141 => 38,  137 => 37,  134 => 36,  132 => 35,  127 => 33,  123 => 32,  117 => 29,  113 => 28,  105 => 25,  101 => 24,  93 => 19,  83 => 11,  72 => 9,  68 => 8,  63 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_info.twig", "");
    }
}
