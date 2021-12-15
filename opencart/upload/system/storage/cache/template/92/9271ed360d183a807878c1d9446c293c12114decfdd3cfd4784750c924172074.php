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
class __TwigTemplate_7c2f1a1b8728e169294f33cb16e48ad68bcdc3372f43fb55e022862eec180933 extends \Twig\Template
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
            <div class=\"row text-center\">
";
        // line 6
        echo ($context["content_top"] ?? null);
        echo "
            </div>
          </div>
        </section>
      </div>
</div>
";
        // line 12
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
        return array (  54 => 12,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "boutique/template/information/information.twig", "");
    }
}
