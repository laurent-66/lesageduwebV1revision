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

/* blog.html.twig */
class __TwigTemplate_00f6a880f6546c91f1beee0cc3254fc0ef381786b45b458d0cce1104342f178d extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Blog";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<div class=\"container-fluid\" id=\"blog\">
    <div class=\"container container-next-blog\">
        <h2> Bientôt le Blog !</h2>
        <div class=\"divider\"></div>
        <i class=\"fas fa-cogs fa-9x\"></i><br/>
        <p>Vous y trouverez très prochainement dans cette rubrique des articles traitant des différents projets réalisés.</p>
        <p>Vous allez pouvoir également vous connecter et y laisser des petits commentaires ;-) </p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
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

{% block title %}Blog{% endblock %}

{% block body %} 
<div class=\"container-fluid\" id=\"blog\">
    <div class=\"container container-next-blog\">
        <h2> Bientôt le Blog !</h2>
        <div class=\"divider\"></div>
        <i class=\"fas fa-cogs fa-9x\"></i><br/>
        <p>Vous y trouverez très prochainement dans cette rubrique des articles traitant des différents projets réalisés.</p>
        <p>Vous allez pouvoir également vous connecter et y laisser des petits commentaires ;-) </p>
    </div>
</div>
{% endblock %} 
", "blog.html.twig", "C:\\wamp64\\www\\Site_portfolio_laurent_V1\\templates\\blog.html.twig");
    }
}
