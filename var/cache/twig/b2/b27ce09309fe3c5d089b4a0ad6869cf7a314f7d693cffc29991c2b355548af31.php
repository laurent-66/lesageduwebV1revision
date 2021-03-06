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

/* login.html.twig */
class __TwigTemplate_36ea5b80c3fa65c23709f87360b73039820d9d9762d3e574535e45c22557a76f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template.html.twig", "login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Connexion";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"connexion\">
      <div class=\"heading\">
          <h2>Connexion</h2>
      </div>
    <div class=\"container_updateBlog\">
        <div class=\"box_connexion\">
            ";
        // line 10
        if (($context["error"] ?? null)) {
            // line 11
            echo "                <div class=\"alert alert-danger\" role=\"alert\">
                    ";
            // line 12
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 15
        echo "            <form class=\"form-signin\" method=\"POST\">
                <label for=\"email\" class=\"sr-only\">Identifiant</label>
                <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control mt-3\" placeholder=\"email\">
                <label for=\"inputPassword\" class=\"sr-only\">Mot de passe</label>
                <input type=\"password\" id=\"inputPassword\" name=\"inputPassword\" class=\"form-control my-3\" placeholder=\"Mot de passe\">
                <button class=\"btn btn-lg btn-primary btn-block mb-3\" type=\"submit\">Se connecter</button>
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  71 => 12,  68 => 11,  66 => 10,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block title %}Connexion{% endblock %}
{% block body %} 
<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"connexion\">
      <div class=\"heading\">
          <h2>Connexion</h2>
      </div>
    <div class=\"container_updateBlog\">
        <div class=\"box_connexion\">
            {% if error %}
                <div class=\"alert alert-danger\" role=\"alert\">
                    {{ error }}
                </div>
            {% endif %}
            <form class=\"form-signin\" method=\"POST\">
                <label for=\"email\" class=\"sr-only\">Identifiant</label>
                <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control mt-3\" placeholder=\"email\">
                <label for=\"inputPassword\" class=\"sr-only\">Mot de passe</label>
                <input type=\"password\" id=\"inputPassword\" name=\"inputPassword\" class=\"form-control my-3\" placeholder=\"Mot de passe\">
                <button class=\"btn btn-lg btn-primary btn-block mb-3\" type=\"submit\">Se connecter</button>
            </form>
        </div>
    </div>
</div>
{% endblock %} ", "login.html.twig", "C:\\Users\\laure\\Documents\\ProjectPhp\\Site_portfolio_laurent_V1\\templates\\login.html.twig");
    }
}
