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

/* scss/bootstrap/scss/_toasts.scss */
class __TwigTemplate_49bc11807e469ebf74118e935df2f280 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_toasts.scss"));

        // line 1
        echo ".toast {
  width: \$toast-max-width;
  max-width: 100%;
  @include font-size(\$toast-font-size);
  color: \$toast-color;
  pointer-events: auto;
  background-color: \$toast-background-color;
  background-clip: padding-box;
  border: \$toast-border-width solid \$toast-border-color;
  box-shadow: \$toast-box-shadow;
  @include border-radius(\$toast-border-radius);

  &:not(.showing):not(.show) {
    opacity: 0;
  }

  &.hide {
    display: none;
  }
}

.toast-container {
  width: max-content;
  max-width: 100%;
  pointer-events: none;

  > :not(:last-child) {
    margin-bottom: \$toast-spacing;
  }
}

.toast-header {
  display: flex;
  align-items: center;
  padding: \$toast-padding-y \$toast-padding-x;
  color: \$toast-header-color;
  background-color: \$toast-header-background-color;
  background-clip: padding-box;
  border-bottom: \$toast-border-width solid \$toast-header-border-color;
  @include border-top-radius(subtract(\$toast-border-radius, \$toast-border-width));

  .btn-close {
    margin-right: \$toast-padding-x / -2;
    margin-left: \$toast-padding-x;
  }
}

.toast-body {
  padding: \$toast-padding-x; // apply to both vertical and horizontal
  word-wrap: break-word;
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_toasts.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".toast {
  width: \$toast-max-width;
  max-width: 100%;
  @include font-size(\$toast-font-size);
  color: \$toast-color;
  pointer-events: auto;
  background-color: \$toast-background-color;
  background-clip: padding-box;
  border: \$toast-border-width solid \$toast-border-color;
  box-shadow: \$toast-box-shadow;
  @include border-radius(\$toast-border-radius);

  &:not(.showing):not(.show) {
    opacity: 0;
  }

  &.hide {
    display: none;
  }
}

.toast-container {
  width: max-content;
  max-width: 100%;
  pointer-events: none;

  > :not(:last-child) {
    margin-bottom: \$toast-spacing;
  }
}

.toast-header {
  display: flex;
  align-items: center;
  padding: \$toast-padding-y \$toast-padding-x;
  color: \$toast-header-color;
  background-color: \$toast-header-background-color;
  background-clip: padding-box;
  border-bottom: \$toast-border-width solid \$toast-header-border-color;
  @include border-top-radius(subtract(\$toast-border-radius, \$toast-border-width));

  .btn-close {
    margin-right: \$toast-padding-x / -2;
    margin-left: \$toast-padding-x;
  }
}

.toast-body {
  padding: \$toast-padding-x; // apply to both vertical and horizontal
  word-wrap: break-word;
}
", "scss/bootstrap/scss/_toasts.scss", "/opt/project/templates/scss/bootstrap/scss/_toasts.scss");
    }
}
