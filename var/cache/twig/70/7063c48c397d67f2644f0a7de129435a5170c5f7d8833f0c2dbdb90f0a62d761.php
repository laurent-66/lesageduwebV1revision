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

/* home.html.twig */
class __TwigTemplate_352dd26d0046efa8eefe30cc355e6675e08ad63c9340dc003721b8059cde97d2 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<div class=\"container-fluid\" id=\"home\">
    <div class=\"row section1-accueil\">
        <div class=\"col-sm-12 col-md-6 col-lg-6 profile-picture\">
            <img src=\"/images/laurent.jpg\" alt=\"photo laurent\" class=\"rounded-circle w-50\">
        </div>
        <div class=\"heading col-sm-12 col-md-6 col-lg-6\">
            <h1>Laurent LESAGE</h1></br>
            <h3>Développeur web junior fullstack<br /><br /> JavaScript et PHP/Symfony</h3>
            <p>\"Actuellement j'effectue une formation en alternance <br /> de développeur d'application PHP/symfony
                        avec Openclassrooms\"</p>
        </div>
    </div>  

    <div class=\"row section2-accueil\">
        <div class=\"container-activite col-sm-12 col-md-6 col-lg-6 col-xl-6 px-0 py-0 mx-0 my-0\">
            <h3>Mes activités complémentaires en entreprise :</h3>  
            <div class=\"activites\">
      
                <ul class=\"activite-entreprise\"> 
                    <li>Site web vitrine et e-commerce: CMS wordpress thème AVADA</li>
                    <li>Application front-end: Angular 11.</li> 
                    <li>Application Back-end: PHP et nestjs</li> 
                </ul>
            </div>
        </div>
        <div class=\"container-activite col-sm-12 col-md-6 col-lg-6 col-xl-6 px-0 py-0 mx-0 my-0\">
            <a href=\"/docs/CV-laurent-Lesage.pdf\" class='button-download' target='blank'>Télécharger CV</a>
        </div>
    </div>


</div>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}

{% block title %}Accueil{% endblock %}

{% block body %} 
<div class=\"container-fluid\" id=\"home\">
    <div class=\"row section1-accueil\">
        <div class=\"col-sm-12 col-md-6 col-lg-6 profile-picture\">
            <img src=\"/images/laurent.jpg\" alt=\"photo laurent\" class=\"rounded-circle w-50\">
        </div>
        <div class=\"heading col-sm-12 col-md-6 col-lg-6\">
            <h1>Laurent LESAGE</h1></br>
            <h3>Développeur web junior fullstack<br /><br /> JavaScript et PHP/Symfony</h3>
            <p>\"Actuellement j'effectue une formation en alternance <br /> de développeur d'application PHP/symfony
                        avec Openclassrooms\"</p>
        </div>
    </div>  

    <div class=\"row section2-accueil\">
        <div class=\"container-activite col-sm-12 col-md-6 col-lg-6 col-xl-6 px-0 py-0 mx-0 my-0\">
            <h3>Mes activités complémentaires en entreprise :</h3>  
            <div class=\"activites\">
      
                <ul class=\"activite-entreprise\"> 
                    <li>Site web vitrine et e-commerce: CMS wordpress thème AVADA</li>
                    <li>Application front-end: Angular 11.</li> 
                    <li>Application Back-end: PHP et nestjs</li> 
                </ul>
            </div>
        </div>
        <div class=\"container-activite col-sm-12 col-md-6 col-lg-6 col-xl-6 px-0 py-0 mx-0 my-0\">
            <a href=\"/docs/CV-laurent-Lesage.pdf\" class='button-download' target='blank'>Télécharger CV</a>
        </div>
    </div>


</div>
{% endblock %} ", "home.html.twig", "C:\\wamp64\\www\\Site_portfolio_laurent_V1\\templates\\home.html.twig");
    }
}
