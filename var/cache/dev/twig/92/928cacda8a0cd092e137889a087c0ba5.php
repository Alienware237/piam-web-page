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

/* styles/bootstrap/scss/forms/_form-select.scss */
class __TwigTemplate_22ee47492a8549607bacb2d1d5371035 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "styles/bootstrap/scss/forms/_form-select.scss"));

        // line 1
        echo "// Select
//
// Replaces the browser default select with a custom one, mostly pulled from
// https://primer.github.io/.

.form-select {
  display: block;
  width: 100%;
  padding: \$form-select-padding-y \$form-select-indicator-padding \$form-select-padding-y \$form-select-padding-x;
  font-family: \$form-select-font-family;
  @include font-size(\$form-select-font-size);
  font-weight: \$form-select-font-weight;
  line-height: \$form-select-line-height;
  color: \$form-select-color;
  background-color: \$form-select-bg;
  background-image: escape-svg(\$form-select-indicator);
  background-repeat: no-repeat;
  background-position: \$form-select-bg-position;
  background-size: \$form-select-bg-size;
  border: \$form-select-border-width solid \$form-select-border-color;
  @include border-radius(\$form-select-border-radius, 0);
  @include box-shadow(\$form-select-box-shadow);
  appearance: none;

  &:focus {
    border-color: \$form-select-focus-border-color;
    outline: 0;
    @if \$enable-shadows {
      @include box-shadow(\$form-select-box-shadow, \$form-select-focus-box-shadow);
    } @else {
      // Avoid using mixin so we can pass custom focus shadow properly
      box-shadow: \$form-select-focus-box-shadow;
    }
  }

  &[multiple],
  &[size]:not([size=\"1\"]) {
    padding-right: \$form-select-padding-x;
    background-image: none;
  }

  &:disabled {
    color: \$form-select-disabled-color;
    background-color: \$form-select-disabled-bg;
    border-color: \$form-select-disabled-border-color;
  }

  // Remove outline from select box in FF
  &:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 \$form-select-color;
  }
}

.form-select-sm {
  padding-top: \$form-select-padding-y-sm;
  padding-bottom: \$form-select-padding-y-sm;
  padding-left: \$form-select-padding-x-sm;
  @include font-size(\$form-select-font-size-sm);
}

.form-select-lg {
  padding-top: \$form-select-padding-y-lg;
  padding-bottom: \$form-select-padding-y-lg;
  padding-left: \$form-select-padding-x-lg;
  @include font-size(\$form-select-font-size-lg);
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "styles/bootstrap/scss/forms/_form-select.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Select
//
// Replaces the browser default select with a custom one, mostly pulled from
// https://primer.github.io/.

.form-select {
  display: block;
  width: 100%;
  padding: \$form-select-padding-y \$form-select-indicator-padding \$form-select-padding-y \$form-select-padding-x;
  font-family: \$form-select-font-family;
  @include font-size(\$form-select-font-size);
  font-weight: \$form-select-font-weight;
  line-height: \$form-select-line-height;
  color: \$form-select-color;
  background-color: \$form-select-bg;
  background-image: escape-svg(\$form-select-indicator);
  background-repeat: no-repeat;
  background-position: \$form-select-bg-position;
  background-size: \$form-select-bg-size;
  border: \$form-select-border-width solid \$form-select-border-color;
  @include border-radius(\$form-select-border-radius, 0);
  @include box-shadow(\$form-select-box-shadow);
  appearance: none;

  &:focus {
    border-color: \$form-select-focus-border-color;
    outline: 0;
    @if \$enable-shadows {
      @include box-shadow(\$form-select-box-shadow, \$form-select-focus-box-shadow);
    } @else {
      // Avoid using mixin so we can pass custom focus shadow properly
      box-shadow: \$form-select-focus-box-shadow;
    }
  }

  &[multiple],
  &[size]:not([size=\"1\"]) {
    padding-right: \$form-select-padding-x;
    background-image: none;
  }

  &:disabled {
    color: \$form-select-disabled-color;
    background-color: \$form-select-disabled-bg;
    border-color: \$form-select-disabled-border-color;
  }

  // Remove outline from select box in FF
  &:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 \$form-select-color;
  }
}

.form-select-sm {
  padding-top: \$form-select-padding-y-sm;
  padding-bottom: \$form-select-padding-y-sm;
  padding-left: \$form-select-padding-x-sm;
  @include font-size(\$form-select-font-size-sm);
}

.form-select-lg {
  padding-top: \$form-select-padding-y-lg;
  padding-bottom: \$form-select-padding-y-lg;
  padding-left: \$form-select-padding-x-lg;
  @include font-size(\$form-select-font-size-lg);
}
", "styles/bootstrap/scss/forms/_form-select.scss", "/opt/project/templates/styles/bootstrap/scss/forms/_form-select.scss");
    }
}
