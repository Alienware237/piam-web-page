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

/* scss/bootstrap/scss/forms/_floating-labels.scss */
class __TwigTemplate_d73e10af774eac567174d9d7a65d09b9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/forms/_floating-labels.scss"));

        // line 1
        echo ".form-floating {
  position: relative;

  > .form-control,
  > .form-select {
    height: \$form-floating-height;
    padding: \$form-floating-padding-y \$form-floating-padding-x;
  }

  > label {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%; // allow textareas
    padding: \$form-floating-padding-y \$form-floating-padding-x;
    pointer-events: none;
    border: \$input-border-width solid transparent; // Required for aligning label's text with the input as it affects inner box model
    transform-origin: 0 0;
    @include transition(\$form-floating-transition);
  }

  // stylelint-disable no-duplicate-selectors
  > .form-control {
    &::placeholder {
      color: transparent;
    }

    &:focus,
    &:not(:placeholder-shown) {
      padding-top: \$form-floating-input-padding-t;
      padding-bottom: \$form-floating-input-padding-b;
    }
    // Duplicated because `:-webkit-autofill` invalidates other selectors when grouped
    &:-webkit-autofill {
      padding-top: \$form-floating-input-padding-t;
      padding-bottom: \$form-floating-input-padding-b;
    }
  }

  > .form-select {
    padding-top: \$form-floating-input-padding-t;
    padding-bottom: \$form-floating-input-padding-b;
  }

  > .form-control:focus,
  > .form-control:not(:placeholder-shown),
  > .form-select {
    ~ label {
      opacity: \$form-floating-label-opacity;
      transform: \$form-floating-label-transform;
    }
  }
  // Duplicated because `:-webkit-autofill` invalidates other selectors when grouped
  > .form-control:-webkit-autofill {
    ~ label {
      opacity: \$form-floating-label-opacity;
      transform: \$form-floating-label-transform;
    }
  }
  // stylelint-enable no-duplicate-selectors
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/forms/_floating-labels.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".form-floating {
  position: relative;

  > .form-control,
  > .form-select {
    height: \$form-floating-height;
    padding: \$form-floating-padding-y \$form-floating-padding-x;
  }

  > label {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%; // allow textareas
    padding: \$form-floating-padding-y \$form-floating-padding-x;
    pointer-events: none;
    border: \$input-border-width solid transparent; // Required for aligning label's text with the input as it affects inner box model
    transform-origin: 0 0;
    @include transition(\$form-floating-transition);
  }

  // stylelint-disable no-duplicate-selectors
  > .form-control {
    &::placeholder {
      color: transparent;
    }

    &:focus,
    &:not(:placeholder-shown) {
      padding-top: \$form-floating-input-padding-t;
      padding-bottom: \$form-floating-input-padding-b;
    }
    // Duplicated because `:-webkit-autofill` invalidates other selectors when grouped
    &:-webkit-autofill {
      padding-top: \$form-floating-input-padding-t;
      padding-bottom: \$form-floating-input-padding-b;
    }
  }

  > .form-select {
    padding-top: \$form-floating-input-padding-t;
    padding-bottom: \$form-floating-input-padding-b;
  }

  > .form-control:focus,
  > .form-control:not(:placeholder-shown),
  > .form-select {
    ~ label {
      opacity: \$form-floating-label-opacity;
      transform: \$form-floating-label-transform;
    }
  }
  // Duplicated because `:-webkit-autofill` invalidates other selectors when grouped
  > .form-control:-webkit-autofill {
    ~ label {
      opacity: \$form-floating-label-opacity;
      transform: \$form-floating-label-transform;
    }
  }
  // stylelint-enable no-duplicate-selectors
}
", "scss/bootstrap/scss/forms/_floating-labels.scss", "/opt/project/templates/scss/bootstrap/scss/forms/_floating-labels.scss");
    }
}
