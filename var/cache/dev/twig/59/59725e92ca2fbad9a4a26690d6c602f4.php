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

/* scss/bootstrap.scss */
class __TwigTemplate_e2285220dfa9d6a05e1a59325a0f5041 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap.scss"));

        // line 1
        echo "/******* Customized Bootstrap ********/

\$primary: #6244C5;
\$secondary: #FFC448;
\$light: #FAFAFB;
\$dark: #12141D;

\$font-family-base: 'Open Sans', sans-serif;

\$body-color: #5A5A5A;

\$headings-color: \$dark;

\$headings-font-weight: 600;

\$display-font-weight: 700;

\$enable-responsive-font-sizes: true;

\$border-radius: 10px;

\$border-radius-sm: \$border-radius;

\$border-radius-lg: \$border-radius;

\$link-decoration: none;

\$enable-negative-margins: true;

@import \"bootstrap/scss/bootstrap\";";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/******* Customized Bootstrap ********/

\$primary: #6244C5;
\$secondary: #FFC448;
\$light: #FAFAFB;
\$dark: #12141D;

\$font-family-base: 'Open Sans', sans-serif;

\$body-color: #5A5A5A;

\$headings-color: \$dark;

\$headings-font-weight: 600;

\$display-font-weight: 700;

\$enable-responsive-font-sizes: true;

\$border-radius: 10px;

\$border-radius-sm: \$border-radius;

\$border-radius-lg: \$border-radius;

\$link-decoration: none;

\$enable-negative-margins: true;

@import \"bootstrap/scss/bootstrap\";", "scss/bootstrap.scss", "/opt/project/templates/scss/bootstrap.scss");
    }
}
