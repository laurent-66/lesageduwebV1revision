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

/* about.html.twig */
class __TwigTemplate_09d7946b96845aa0777e160e597e454b755b45636d8d334c44a2aac19b95fd15 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "A propos";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<div class=\"container-fluid\" id=\"about\">
    <h2> A propos</h2>
        <div>
            <h3>Qui suis-je ?</h3>
            <p>Je me présente Laurent LESAGE, j'habite à PERPIGNAN.</p>
   
            <h3>Ma personnalité</h3>
            <p>Je suis une personne organisée, logique et curieuse. Je suis autonome sur les missions qui me sont confiées.
                J'aime également travailler en équipe et échanger sur un projet.</p>
            <h3>Mes loisirs</h3>
            <p> J'affectionne les jeux de sociétés particulièrement ceux de stratégie, gestion et coopératif.</p>
            <p>Je pratique la randonnée, la marche nordique et parfois du city foot avec des amis.<br>
                Enfin je suis portraitiste animalier et humain, mon domaine de prédilection est le pastel sec.</p>
            <h3>Mon passé professionnel</h3>
            <p>Après une quinzaine d'années passées dans le secteur du bâtiment (Architecture, Urbanisme, Bureaux d'étude fluides) en tant que dessinateur projeteur et BIM modeleur,
                j'avais besoin de changement et de nouveaux challenges.
                Depuis très longtemps je voulais apprendre à coder, j'ai donc décidé de sauter le pas et faire une reconversion professionnelle en faisant une formation de développeur web.
            </p> 
            <h3>Mon objectif professionnel</h3>
            <p>J'ai terminé ma formation de développeur web fin juillet 2020 et je souhaiterais intégrer une équipe de développeur.<br>
            J'aime faire du développement en front comme en back-end et je suis prêt à apprendre de nouveaux langages pour m'ajuster au mieux à la spécificité du poste proposé.</p>
        </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "about.html.twig";
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

{% block title %}A propos{% endblock %}

{% block body %} 
<div class=\"container-fluid\" id=\"about\">
    <h2> A propos</h2>
        <div>
            <h3>Qui suis-je ?</h3>
            <p>Je me présente Laurent LESAGE, j'habite à PERPIGNAN.</p>
   
            <h3>Ma personnalité</h3>
            <p>Je suis une personne organisée, logique et curieuse. Je suis autonome sur les missions qui me sont confiées.
                J'aime également travailler en équipe et échanger sur un projet.</p>
            <h3>Mes loisirs</h3>
            <p> J'affectionne les jeux de sociétés particulièrement ceux de stratégie, gestion et coopératif.</p>
            <p>Je pratique la randonnée, la marche nordique et parfois du city foot avec des amis.<br>
                Enfin je suis portraitiste animalier et humain, mon domaine de prédilection est le pastel sec.</p>
            <h3>Mon passé professionnel</h3>
            <p>Après une quinzaine d'années passées dans le secteur du bâtiment (Architecture, Urbanisme, Bureaux d'étude fluides) en tant que dessinateur projeteur et BIM modeleur,
                j'avais besoin de changement et de nouveaux challenges.
                Depuis très longtemps je voulais apprendre à coder, j'ai donc décidé de sauter le pas et faire une reconversion professionnelle en faisant une formation de développeur web.
            </p> 
            <h3>Mon objectif professionnel</h3>
            <p>J'ai terminé ma formation de développeur web fin juillet 2020 et je souhaiterais intégrer une équipe de développeur.<br>
            J'aime faire du développement en front comme en back-end et je suis prêt à apprendre de nouveaux langages pour m'ajuster au mieux à la spécificité du poste proposé.</p>
        </div>

</div>
{% endblock %} ", "about.html.twig", "C:\\wamp64\\www\\Site_portfolio_laurent_V1\\templates\\about.html.twig");
    }
}
