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

/* /partials/header.html.twig */
class __TwigTemplate_d92a759828486a6c76e74acdeba44d818b47dc2bac1206d0117630c46e1579d1 extends Template
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
        echo "<header class=\"sticky-top\">
    <nav class=\"navbar navbar-dark navbar-expand-md bg-dark m-0 p-0\">
        <div class=\"container-fluid m-0 p-0 menunavigation \">
            <div class=\"navbar-brand m-0 p-3\">Menu</div>
            <div id=\"buttonMenu\">
                <button class=\"d-block navbar-toggler m-3 p-1\" data-toggle=\"collapse\" data-target=\"#navbarText\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                <ul class=\"menu\">
                    <li class=\"menu-item\">
                        <a class=\"item nav-link\" href=\"/\">Accueil</a>
                    </li>
                    <li class=\"menu-item\">
                        <a class=\"item nav-link\" href=\"/blogs\">Blogs</a>
                    </li>

                    ";
        // line 19
        if ((0 === twig_compare(($context["session"] ?? null), false))) {
            // line 20
            echo "                        <li class=\"menu-item\">
                            <a class=\"item nav-link\" href=\"/se-connecter\">Connexion</a>
                        </li>
                    ";
        } elseif ((0 === twig_compare(        // line 23
($context["session"] ?? null), true))) {
            // line 24
            echo "                        <li class=\"menu-item\">
                            <a class=\"item nav-link\" href=\"/deconnecter\">déconnexion</a>
                        </li>
                    ";
        }
        // line 28
        echo "                </ul>
            </div>
        </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 28,  66 => 24,  64 => 23,  59 => 20,  57 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"sticky-top\">
    <nav class=\"navbar navbar-dark navbar-expand-md bg-dark m-0 p-0\">
        <div class=\"container-fluid m-0 p-0 menunavigation \">
            <div class=\"navbar-brand m-0 p-3\">Menu</div>
            <div id=\"buttonMenu\">
                <button class=\"d-block navbar-toggler m-3 p-1\" data-toggle=\"collapse\" data-target=\"#navbarText\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                <ul class=\"menu\">
                    <li class=\"menu-item\">
                        <a class=\"item nav-link\" href=\"/\">Accueil</a>
                    </li>
                    <li class=\"menu-item\">
                        <a class=\"item nav-link\" href=\"/blogs\">Blogs</a>
                    </li>

                    {% if session == false %}
                        <li class=\"menu-item\">
                            <a class=\"item nav-link\" href=\"/se-connecter\">Connexion</a>
                        </li>
                    {% elseif session == true %}
                        <li class=\"menu-item\">
                            <a class=\"item nav-link\" href=\"/deconnecter\">déconnexion</a>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </nav>
</header>", "/partials/header.html.twig", "C:\\Users\\laure\\Documents\\ProjectPhp\\Site_portfolio_laurent_V1\\templates\\partials\\header.html.twig");
    }
}
