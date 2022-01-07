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
        <div class=\"container-fluid mx-0 pl-3 pr-2 menunavigation\">
            <div class=\"navbar-brand m-3\">Menu</div>
            <div id=\"buttonMenu\">
                <button class=\"d-block navbar-toggler m-3 \" data-toggle=\"collapse\" data-target=\"#navbarText\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                <ul class=\"menu\">
                    <li class=\"menu-item\">
                        <div class=\"block-item\">
                            <a class=\"item nav-link\" href=\"/\">Accueil</a>
                        </div>
                    </li>
                    <li class=\"menu-item\">
                        <div class=\"block-item\">
                            <a class=\"item nav-link\" href=\"/competences\">Compétences</a>
                        </div>
                    </li>
                    <li class=\"menu-item\">
                        <div class=\"block-item\">
                            <a class=\"item nav-link\" href=\"/formations\">Formations</a>
                        </div>
                    </li>
                    <li class=\"menu-item\">
                        <div class=\"block-item\">
                            <a class=\"item nav-link\" href=\"/a_propos\">A propos</a>
                        </div>
                    </li>
                    <li class=\"menu-item\">
                        <div class=\"block-item\">
                            <a class=\"item nav-link\" href=\"/blogs\">Blogs</a>
                        </div>
                    </li>

                    ";
        // line 38
        if ((0 === twig_compare(($context["session"] ?? null), false))) {
            // line 39
            echo "                        <li class=\"menu-item\">
                            <div class=\"block-item\">
                                <a class=\"item nav-link\" href=\"/se-connecter\">Connexion</a>
                            </div>                            
                        </li>
                    ";
        } elseif ((0 === twig_compare(        // line 44
($context["session"] ?? null), true))) {
            // line 45
            echo "                        <li class=\"menu-item\">
                            <div class=\"block-item\">
                                <a class=\"item nav-link\" href=\"/deconnecter\">déconnexion</a>
                            </div>
                        </li>
                    ";
        }
        // line 51
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
        return array (  95 => 51,  87 => 45,  85 => 44,  78 => 39,  76 => 38,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"sticky-top\">
    <nav class=\"navbar navbar-dark navbar-expand-md bg-dark m-0 p-0\">
        <div class=\"container-fluid mx-0 pl-3 pr-2 menunavigation\">
            <div class=\"navbar-brand m-3\">Menu</div>
            <div id=\"buttonMenu\">
                <button class=\"d-block navbar-toggler m-3 \" data-toggle=\"collapse\" data-target=\"#navbarText\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                <ul class=\"menu\">
                    <li class=\"menu-item\">
                        <div class=\"block-item\">
                            <a class=\"item nav-link\" href=\"/\">Accueil</a>
                        </div>
                    </li>
                    <li class=\"menu-item\">
                        <div class=\"block-item\">
                            <a class=\"item nav-link\" href=\"/competences\">Compétences</a>
                        </div>
                    </li>
                    <li class=\"menu-item\">
                        <div class=\"block-item\">
                            <a class=\"item nav-link\" href=\"/formations\">Formations</a>
                        </div>
                    </li>
                    <li class=\"menu-item\">
                        <div class=\"block-item\">
                            <a class=\"item nav-link\" href=\"/a_propos\">A propos</a>
                        </div>
                    </li>
                    <li class=\"menu-item\">
                        <div class=\"block-item\">
                            <a class=\"item nav-link\" href=\"/blogs\">Blogs</a>
                        </div>
                    </li>

                    {% if session == false %}
                        <li class=\"menu-item\">
                            <div class=\"block-item\">
                                <a class=\"item nav-link\" href=\"/se-connecter\">Connexion</a>
                            </div>                            
                        </li>
                    {% elseif session == true %}
                        <li class=\"menu-item\">
                            <div class=\"block-item\">
                                <a class=\"item nav-link\" href=\"/deconnecter\">déconnexion</a>
                            </div>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </nav>
</header>", "/partials/header.html.twig", "C:\\Users\\laure\\Documents\\ProjectPhp\\Site_portfolio_laurent_V1\\templates\\partials\\header.html.twig");
    }
}
