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

/* /partials/footer.html.twig */
class __TwigTemplate_38ea44cd71481e04b4b670a5503299a4bf5b5d04a3b6dfb467bd4803762f848c extends Template
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
        echo "<footer class=\"sticky-footer\">
    <div class=\"container-fluid bg-dark m-0 p-0\">
        <div id=\"row_footer\" class=\"row m-0 px-0 py-3\">
            <div id=\"block_mail\" class=\"col-12 col-sm-12 col-md-4 my-2 px-0 text-white text-center\">
                <div id=\"logo_linkedin\"><a href=\"https://fr.linkedin.com/in/laurent-lesage-795599113\" target=\"_blank\"><img src=\"/public/images/LinkedIn_Logo.png\"/></a></div>
            </div>
            <div id=\"block_arrow\" class=\"col-12 col-sm-12 col-md-4 my-2 px-0 text-center\">         
                <div id=\"arrow-top\"class=\"mx-auto my-3\"> <a href=\"#\"><img src=\"/public/images/iconarrow.png\"/></a></div>     
                <h5 class=\"my-3\">Cliquez, haut de la page</h5>
            </div>
            <div id=\"block_linkedin\" class=\"col-12 col-sm-12 col-md-4 my-2 px-0\">
                <div id=\"logo_linkedin\"><a href=\"https://github.com/laurent-66\" target=\"_blank\"><img src=\"/public/images/GitHub-Mark-Light-64px.png\"/></a></div>
            </div>
        </div>
        <div class=\"row m-0 px-0 py-3\" id=\"connexionAdmin\">
            <a href=\"/blogs/admin/dashboard\">Administration blogs</a>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"sticky-footer\">
    <div class=\"container-fluid bg-dark m-0 p-0\">
        <div id=\"row_footer\" class=\"row m-0 px-0 py-3\">
            <div id=\"block_mail\" class=\"col-12 col-sm-12 col-md-4 my-2 px-0 text-white text-center\">
                <div id=\"logo_linkedin\"><a href=\"https://fr.linkedin.com/in/laurent-lesage-795599113\" target=\"_blank\"><img src=\"/public/images/LinkedIn_Logo.png\"/></a></div>
            </div>
            <div id=\"block_arrow\" class=\"col-12 col-sm-12 col-md-4 my-2 px-0 text-center\">         
                <div id=\"arrow-top\"class=\"mx-auto my-3\"> <a href=\"#\"><img src=\"/public/images/iconarrow.png\"/></a></div>     
                <h5 class=\"my-3\">Cliquez, haut de la page</h5>
            </div>
            <div id=\"block_linkedin\" class=\"col-12 col-sm-12 col-md-4 my-2 px-0\">
                <div id=\"logo_linkedin\"><a href=\"https://github.com/laurent-66\" target=\"_blank\"><img src=\"/public/images/GitHub-Mark-Light-64px.png\"/></a></div>
            </div>
        </div>
        <div class=\"row m-0 px-0 py-3\" id=\"connexionAdmin\">
            <a href=\"/blogs/admin/dashboard\">Administration blogs</a>
        </div>
    </div>
</footer>", "/partials/footer.html.twig", "C:\\Users\\laure\\Documents\\ProjectPhp\\Site_portfolio_laurent_V1\\templates\\partials\\footer.html.twig");
    }
}
