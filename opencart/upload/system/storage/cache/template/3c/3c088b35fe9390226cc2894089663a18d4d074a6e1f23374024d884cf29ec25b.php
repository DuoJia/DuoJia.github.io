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

/* boutique/template/common/header.twig */
class __TwigTemplate_16b3e9a430f9016f621773ae842e81f943c2e010b5d06da627558851ce22b884 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 6
        echo ($context["title"] ?? null);
        echo "</title>
    ";
        // line 7
        if (($context["description"] ?? null)) {
            // line 8
            echo "    <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
    ";
        }
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"all,follow\">
    <!-- Bootstrap CSS-->
    <link rel=\"stylesheet\" href=\"catalog/view/theme/boutique/vendor/bootstrap/css/bootstrap.min.css\">
    <!-- Lightbox-->
    <link rel=\"stylesheet\" href=\"catalog/view/theme/boutique/vendor/lightbox2/css/lightbox.min.css\">
    <!-- Range slider-->
    <link rel=\"stylesheet\" href=\"catalog/view/theme/boutique/vendor/nouislider/nouislider.min.css\">
    <!-- Bootstrap select-->
    <link rel=\"stylesheet\" href=\"catalog/view/theme/boutique/vendor/bootstrap-select/css/bootstrap-select.min.css\">
    <!-- Owl Carousel-->
    <link rel=\"stylesheet\" href=\"catalog/view/theme/boutique/vendor/owl.carousel2/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/boutique/vendor/owl.carousel2/assets/owl.theme.default.css\">
    <!-- Google fonts-->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\"css/style.default.css\" id=\"theme-stylesheet\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\"css/custom.css\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"img/favicon.png\">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script><![endif]-->
  </head>
  <body>
    <div class=\"page-holder\">
      <!-- navbar-->
      <header class=\"header bg-white\">
        <div class=\"container px-0 px-lg-3\">
          <nav class=\"navbar navbar-expand-lg navbar-light py-3 px-lg-0\"><a class=\"navbar-brand\" href=\"index.html\"><span class=\"font-weight-bold text-uppercase text-dark\">Boutique</span></a>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
              <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                  <!-- Link--><a class=\"nav-link active\" href=\"index.html\">Home</a>
                </li>
                <li class=\"nav-item\">
                  <!-- Link--><a class=\"nav-link\" href=\"shop.html\">Shop</a>
                </li>
                <li class=\"nav-item\">
                  <!-- Link--><a class=\"nav-link\" href=\"detail.html\">Product detail</a>
                </li>
                <li class=\"nav-item dropdown\"><a class=\"nav-link dropdown-toggle\" id=\"pagesDropdown\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Pages</a>
                  <div class=\"dropdown-menu mt-3\" aria-labelledby=\"pagesDropdown\"><a class=\"dropdown-item border-0 transition-link\" href=\"index.html\">Homepage</a><a class=\"dropdown-item border-0 transition-link\" href=\"shop.html\">Category</a><a class=\"dropdown-item border-0 transition-link\" href=\"detail.html\">Product detail</a><a class=\"dropdown-item border-0 transition-link\" href=\"cart.html\">Shopping cart</a><a class=\"dropdown-item border-0 transition-link\" href=\"checkout.html\">Checkout</a></div>
                </li>
              </ul>
              <ul class=\"navbar-nav ml-auto\">               
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"cart.html\"> <i class=\"fas fa-dolly-flatbed mr-1 text-gray\"></i>Cart<small class=\"text-gray\">(2)</small></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"> <i class=\"far fa-heart mr-1\"></i><small class=\"text-gray\"> (0)</small></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"> <i class=\"fas fa-user-alt mr-1 text-gray\"></i>Login</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
";
        // line 67
        echo ($context["menu"] ?? null);
    }

    public function getTemplateName()
    {
        return "boutique/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 67,  56 => 10,  50 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "boutique/template/common/header.twig", "");
    }
}
