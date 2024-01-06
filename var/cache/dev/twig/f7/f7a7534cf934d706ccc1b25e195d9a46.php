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

/* scss/bootstrap/scss/_forms.scss */
class __TwigTemplate_51c5e5b775f547fa3a0b13b6871c6977 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_forms.scss"));

        // line 1
        echo "@import \"forms/labels\";
@import \"forms/form-text\";
@import \"forms/form-control\";
@import \"forms/form-select\";
@import \"forms/form-check\";
@import \"forms/form-range\";
@import \"forms/floating-labels\";
@import \"forms/input-group\";
@import \"forms/validation\";
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_forms.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import \"forms/labels\";
@import \"forms/form-text\";
@import \"forms/form-control\";
@import \"forms/form-select\";
@import \"forms/form-check\";
@import \"forms/form-range\";
@import \"forms/floating-labels\";
@import \"forms/input-group\";
@import \"forms/validation\";
", "scss/bootstrap/scss/_forms.scss", "/opt/project/templates/scss/bootstrap/scss/_forms.scss");
    }
}
