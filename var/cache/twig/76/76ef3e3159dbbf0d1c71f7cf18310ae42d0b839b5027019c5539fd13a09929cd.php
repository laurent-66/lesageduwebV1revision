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

/* credits.html.twig */
class __TwigTemplate_21ef00405143653e917f49558a2b801cd0f25ddf728fb628cba44ed6fb73d795 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "credits.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Licences logos";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<div class=\"container-fluid\">
    <div class=\"container-credits\">
        <h2> Attribution licences logos :</h2>
        <div class=\"divider\"></div>
        <h3>Logos front-end :</h3><br/>
        <p>W3C / CC BY (https://creativecommons.org/licenses/by/3.0)</p>
        <p>Rudloff / CC BY (https://creativecommons.org/licenses/by/3.0)</p>
        <p>Google, Public domain, via Wikimedia Commons</p>

        <h3>Logos back-end :</h3><br/>
        <p>Colin Viebrock / CC BY-SA (https://creativecommons.org/licenses/by-sa/4.0)</p>
        <p>The phpMyAdmin Project / CC BY-SA (https://creativecommons.org/licenses/by-sa/3.0)</p>
        <p>Official screenshot as published on MySQL.com [GPL (http://www.gnu.org/licenses/gpl.html) or GPL (http://www.gnu.org/licenses/gpl.html)]</p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "credits.html.twig";
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

{% block title %}Licences logos{% endblock %}

{% block body %} 
<div class=\"container-fluid\">
    <div class=\"container-credits\">
        <h2> Attribution licences logos :</h2>
        <div class=\"divider\"></div>
        <h3>Logos front-end :</h3><br/>
        <p>W3C / CC BY (https://creativecommons.org/licenses/by/3.0)</p>
        <p>Rudloff / CC BY (https://creativecommons.org/licenses/by/3.0)</p>
        <p>Google, Public domain, via Wikimedia Commons</p>

        <h3>Logos back-end :</h3><br/>
        <p>Colin Viebrock / CC BY-SA (https://creativecommons.org/licenses/by-sa/4.0)</p>
        <p>The phpMyAdmin Project / CC BY-SA (https://creativecommons.org/licenses/by-sa/3.0)</p>
        <p>Official screenshot as published on MySQL.com [GPL (http://www.gnu.org/licenses/gpl.html) or GPL (http://www.gnu.org/licenses/gpl.html)]</p>
    </div>
</div>
{% endblock %} ", "credits.html.twig", "C:\\wamp64\\www\\Site_portfolio_laurent_V1\\templates\\credits.html.twig");
    }
}
