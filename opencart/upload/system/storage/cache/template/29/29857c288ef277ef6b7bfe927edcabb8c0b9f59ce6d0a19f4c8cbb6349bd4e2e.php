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

/* boutique/template/information/information.twig */
class __TwigTemplate_40c2e8bb2b675bbb30977dd774d79274ac420deb33255862cd3a01e1d91b4f3c extends \Twig\Template
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
        echo "
      <div class=\"container\">
        <section class=\"py-5 bg-light\">
          <div class=\"container\">
            <div class=\"row px-4 px-lg-5 py-lg-4 align-items-center\">
              <div class=\"col-lg-6\">
                <h1 class=\"h2 text-uppercase mb-0\">Shop</h1>
              </div>
              <div class=\"col-lg-6 text-lg-right\">
                <nav aria-label=\"breadcrumb\">
                  <ol class=\"breadcrumb justify-content-lg-end mb-0 px-0\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Shop</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class=\"py-5\">
          <div class=\"container\">
            <div class=\"row text-left\">
";
        // line 23
        echo ($context["description"] ?? null);
        echo "
            </div>
          </div>
        </section>
      </div>
</div>
";
        // line 29
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "boutique/template/information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 29,  62 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "boutique/template/information/information.twig", "");
    }
}