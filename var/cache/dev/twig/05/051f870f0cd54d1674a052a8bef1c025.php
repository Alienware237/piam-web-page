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

/* styles/bootstrap/scss/forms/_labels.scss */
class __TwigTemplate_032fdc56eea0224f425d31c46e2960e0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "styles/bootstrap/scss/forms/_labels.scss"));

        // line 1
        echo "//
// Labels
//

.form-label {
  margin-bottom: \$form-label-margin-bottom;
  @include font-size(\$form-label-font-size);
  font-style: \$form-label-font-style;
  font-weight: \$form-label-font-weight;
  color: \$form-label-color;
}

// For use with horizontal and inline forms, when you need the label (or legend)
// text to align with the form controls.
.col-form-label {
  padding-top: add(\$input-padding-y, \$input-border-width);
  padding-bottom: add(\$input-padding-y, \$input-border-width);
  margin-bottom: 0; // Override the `<legend>` default
  @include font-size(inherit); // Override the `<legend>` default
  font-style: \$form-label-font-style;
  font-weight: \$form-label-font-weight;
  line-height: \$input-line-height;
  color: \$form-label-color;
}

.col-form-label-lg {
  padding-top: add(\$input-padding-y-lg, \$input-border-width);
  padding-bottom: add(\$input-padding-y-lg, \$input-border-width);
  @include font-size(\$input-font-size-lg);
}

.col-form-label-sm {
  padding-top: add(\$input-padding-y-sm, \$input-border-width);
  padding-bottom: add(\$input-padding-y-sm, \$input-border-width);
  @include font-size(\$input-font-size-sm);
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "styles/bootstrap/scss/forms/_labels.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//
// Labels
//

.form-label {
  margin-bottom: \$form-label-margin-bottom;
  @include font-size(\$form-label-font-size);
  font-style: \$form-label-font-style;
  font-weight: \$form-label-font-weight;
  color: \$form-label-color;
}

// For use with horizontal and inline forms, when you need the label (or legend)
// text to align with the form controls.
.col-form-label {
  padding-top: add(\$input-padding-y, \$input-border-width);
  padding-bottom: add(\$input-padding-y, \$input-border-width);
  margin-bottom: 0; // Override the `<legend>` default
  @include font-size(inherit); // Override the `<legend>` default
  font-style: \$form-label-font-style;
  font-weight: \$form-label-font-weight;
  line-height: \$input-line-height;
  color: \$form-label-color;
}

.col-form-label-lg {
  padding-top: add(\$input-padding-y-lg, \$input-border-width);
  padding-bottom: add(\$input-padding-y-lg, \$input-border-width);
  @include font-size(\$input-font-size-lg);
}

.col-form-label-sm {
  padding-top: add(\$input-padding-y-sm, \$input-border-width);
  padding-bottom: add(\$input-padding-y-sm, \$input-border-width);
  @include font-size(\$input-font-size-sm);
}
", "styles/bootstrap/scss/forms/_labels.scss", "/opt/project/templates/styles/bootstrap/scss/forms/_labels.scss");
    }
}
