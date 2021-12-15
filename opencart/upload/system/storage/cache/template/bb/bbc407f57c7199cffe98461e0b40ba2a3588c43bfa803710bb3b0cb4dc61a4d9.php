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

/* boutique/template/common/footer.twig */
class __TwigTemplate_2f82a8d1e4debf2f36aa4f7787f41b450001cfd0425511064620ca63c10c7030 extends \Twig\Template
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
        echo "      <footer class=\"bg-dark text-white\">
        <div class=\"container py-4\">
          <div class=\"row py-5\">
            <div class=\"col-md-4 mb-3 mb-md-0\">
              <h6 class=\"text-uppercase mb-3\">Customer services</h6>
              <ul class=\"list-unstyled mb-0\">
                <li><a class=\"footer-link\" href=\"#\">Help &amp; Contact Us</a></li>
                <li><a class=\"footer-link\" href=\"#\">Returns &amp; Refunds</a></li>
                <li><a class=\"footer-link\" href=\"#\">Online Stores</a></li>
                <li><a class=\"footer-link\" href=\"#\">Terms &amp; Conditions</a></li>
              </ul>
            </div>
            <div class=\"col-md-4 mb-3 mb-md-0\">
              <h6 class=\"text-uppercase mb-3\">Company</h6>
              <ul class=\"list-unstyled mb-0\">
                <li><a class=\"footer-link\" href=\"#\">What We Do</a></li>
                <li><a class=\"footer-link\" href=\"#\">Available Services</a></li>
                <li><a class=\"footer-link\" href=\"#\">Latest Posts</a></li>
                <li><a class=\"footer-link\" href=\"#\">FAQs</a></li>
              </ul>
            </div>
            <div class=\"col-md-4\">
              <h6 class=\"text-uppercase mb-3\">Social media</h6>
              <ul class=\"list-unstyled mb-0\">
                <li><a class=\"footer-link\" href=\"#\">Twitter</a></li>
                <li><a class=\"footer-link\" href=\"#\">Instagram</a></li>
                <li><a class=\"footer-link\" href=\"#\">Tumblr</a></li>
                <li><a class=\"footer-link\" href=\"#\">Pinterest</a></li>
              </ul>
            </div>
          </div>
          <div class=\"border-top pt-4\" style=\"border-color: #1d1d1d !important\">
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <p class=\"small text-muted mb-0\">&copy; 2020 All rights reserved.</p>
              </div>
              <div class=\"col-lg-6 text-lg-right\">
                <p class=\"small text-muted mb-0\">Template designed by <a class=\"text-white reset-anchor\" href=\"https://bootstraptemple.com/p/bootstrap-ecommerce\">Bootstrap Temple</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- JavaScript files-->
      <script src=\"vendor/jquery/jquery.min.js\"></script>
      <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
      <script src=\"vendor/lightbox2/js/lightbox.min.js\"></script>
      <script src=\"vendor/nouislider/nouislider.min.js\"></script>
      <script src=\"vendor/bootstrap-select/js/bootstrap-select.min.js\"></script>
      <script src=\"vendor/owl.carousel2/owl.carousel.min.js\"></script>
      <script src=\"vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js\"></script>
      <script src=\"js/front.js\"></script>
      <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {
        
            var ajax = new XMLHttpRequest();
            ajax.open(\"GET\", path, true);
            ajax.send();
            ajax.onload = function(e) {
            var div = document.createElement(\"div\");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
        
      </script>
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    </div>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "boutique/template/common/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "boutique/template/common/footer.twig", "");
    }
}
