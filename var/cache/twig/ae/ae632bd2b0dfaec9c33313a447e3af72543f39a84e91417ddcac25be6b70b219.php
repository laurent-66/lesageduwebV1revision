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

/* template.html.twig */
class __TwigTemplate_79f703e01944751494d2ae46e6ee67cdbce060dac79f42982d77c9405def4322 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <script src=\"https://kit.fontawesome.com/e48fcf7626.js\" crossorigin=\"anonymous\"></script>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"../public/css/style.css\">
        <link rel=\"stylesheet\" href=\"../src/fonts\">
</head>

<body>

        <header class=\"sticky-top\">
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
                                    <a class=\"item nav-link\" href=\"/competences\">Compétences</a>
                                </li>
            
                                <li class=\"menu-item\">
                                    <a class=\"item nav-link\" href=\"/formations\">Formations</a>
                                </li>

                                <li class=\"menu-item\">
                                    <a class=\"item nav-link\" href=\"/a_propos\">A propos</a>
                                </li>

                                <li class=\"menu-item\">
                                    <a class=\"item nav-link\" href=\"/blog\">Blog</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </header>


            ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "

        <footer class=\"sticky-footer\">
                <div class=\"container-fluid bg-dark m-0 p-0\">
                    <div id=\"row_footer\" class=\"row m-0 px-0 py-3\">

                        <div id=\"block_mail\" class=\"col-12 col-sm-12 col-md-4 my-2 px-0 text-white text-center\">
                            <div id=\"logo_linkedin\"><a href=\"https://fr.linkedin.com/in/laurent-lesage-795599113\" target=\"_blank\"><img src=\"../public/images/LinkedIn_Logo.png\"/></a></div>
                        </div>
                        <div id=\"block_arrow\" class=\"col-12 col-sm-12 col-md-4 my-2 px-0 text-center\">
                            
                            <div id=\"arrow-top\"class=\"mx-auto my-3\"> <a href=\"#\"><img src=\"../public/images/iconarrow.png\"/></a></div>
                            <h5 class=\"my-3\">Cliquez, haut de la page</h5>
                        </div>

                        <div id=\"block_linkedin\" class=\"col-12 col-sm-12 col-md-4 my-2 px-0\">
                            <div id=\"logo_linkedin\"><a href=\"https://github.com/laurent-66/lesageduwebV1revision\" target=\"_blank\"><img src=\"../public/images/GitHub-Mark-Light-64px.png\"/></a></div>
                        </div>
                    </div>
                </div>
            </footer>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script> 
   
</body>

</html> ";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 53,  137 => 52,  131 => 6,  97 => 55,  95 => 52,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}{% endblock %}</title>
        <script src=\"https://kit.fontawesome.com/e48fcf7626.js\" crossorigin=\"anonymous\"></script>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"../public/css/style.css\">
        <link rel=\"stylesheet\" href=\"../src/fonts\">
</head>

<body>

        <header class=\"sticky-top\">
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
                                    <a class=\"item nav-link\" href=\"/competences\">Compétences</a>
                                </li>
            
                                <li class=\"menu-item\">
                                    <a class=\"item nav-link\" href=\"/formations\">Formations</a>
                                </li>

                                <li class=\"menu-item\">
                                    <a class=\"item nav-link\" href=\"/a_propos\">A propos</a>
                                </li>

                                <li class=\"menu-item\">
                                    <a class=\"item nav-link\" href=\"/blog\">Blog</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </header>


            {% block body %}

            {% endblock %}


        <footer class=\"sticky-footer\">
                <div class=\"container-fluid bg-dark m-0 p-0\">
                    <div id=\"row_footer\" class=\"row m-0 px-0 py-3\">

                        <div id=\"block_mail\" class=\"col-12 col-sm-12 col-md-4 my-2 px-0 text-white text-center\">
                            <div id=\"logo_linkedin\"><a href=\"https://fr.linkedin.com/in/laurent-lesage-795599113\" target=\"_blank\"><img src=\"../public/images/LinkedIn_Logo.png\"/></a></div>
                        </div>
                        <div id=\"block_arrow\" class=\"col-12 col-sm-12 col-md-4 my-2 px-0 text-center\">
                            
                            <div id=\"arrow-top\"class=\"mx-auto my-3\"> <a href=\"#\"><img src=\"../public/images/iconarrow.png\"/></a></div>
                            <h5 class=\"my-3\">Cliquez, haut de la page</h5>
                        </div>

                        <div id=\"block_linkedin\" class=\"col-12 col-sm-12 col-md-4 my-2 px-0\">
                            <div id=\"logo_linkedin\"><a href=\"https://github.com/laurent-66/lesageduwebV1revision\" target=\"_blank\"><img src=\"../public/images/GitHub-Mark-Light-64px.png\"/></a></div>
                        </div>
                    </div>
                </div>
            </footer>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script> 
   
</body>

</html> ", "template.html.twig", "C:\\wamp64\\www\\Site_portfolio_laurent_V1\\templates\\template.html.twig");
    }
}