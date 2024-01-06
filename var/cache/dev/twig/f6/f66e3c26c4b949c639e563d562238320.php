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

/* scss/bootstrap/scss/_pagination.scss */
class __TwigTemplate_cce9d9ea4fe0f9eb4a10203ccb8b488f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_pagination.scss"));

        // line 1
        echo ".pagination {
  display: flex;
  @include list-unstyled();
}

.page-link {
  position: relative;
  display: block;
  color: \$pagination-color;
  text-decoration: if(\$link-decoration == none, null, none);
  background-color: \$pagination-bg;
  border: \$pagination-border-width solid \$pagination-border-color;
  @include transition(\$pagination-transition);

  &:hover {
    z-index: 2;
    color: \$pagination-hover-color;
    text-decoration: if(\$link-hover-decoration == underline, none, null);
    background-color: \$pagination-hover-bg;
    border-color: \$pagination-hover-border-color;
  }

  &:focus {
    z-index: 3;
    color: \$pagination-focus-color;
    background-color: \$pagination-focus-bg;
    outline: \$pagination-focus-outline;
    box-shadow: \$pagination-focus-box-shadow;
  }
}

.page-item {
  &:not(:first-child) .page-link {
    margin-left: \$pagination-margin-start;
  }

  &.active .page-link {
    z-index: 3;
    color: \$pagination-active-color;
    @include gradient-bg(\$pagination-active-bg);
    border-color: \$pagination-active-border-color;
  }

  &.disabled .page-link {
    color: \$pagination-disabled-color;
    pointer-events: none;
    background-color: \$pagination-disabled-bg;
    border-color: \$pagination-disabled-border-color;
  }
}


//
// Sizing
//
@include pagination-size(\$pagination-padding-y, \$pagination-padding-x, null, \$pagination-border-radius);

.pagination-lg {
  @include pagination-size(\$pagination-padding-y-lg, \$pagination-padding-x-lg, \$font-size-lg, \$pagination-border-radius-lg);
}

.pagination-sm {
  @include pagination-size(\$pagination-padding-y-sm, \$pagination-padding-x-sm, \$font-size-sm, \$pagination-border-radius-sm);
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_pagination.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".pagination {
  display: flex;
  @include list-unstyled();
}

.page-link {
  position: relative;
  display: block;
  color: \$pagination-color;
  text-decoration: if(\$link-decoration == none, null, none);
  background-color: \$pagination-bg;
  border: \$pagination-border-width solid \$pagination-border-color;
  @include transition(\$pagination-transition);

  &:hover {
    z-index: 2;
    color: \$pagination-hover-color;
    text-decoration: if(\$link-hover-decoration == underline, none, null);
    background-color: \$pagination-hover-bg;
    border-color: \$pagination-hover-border-color;
  }

  &:focus {
    z-index: 3;
    color: \$pagination-focus-color;
    background-color: \$pagination-focus-bg;
    outline: \$pagination-focus-outline;
    box-shadow: \$pagination-focus-box-shadow;
  }
}

.page-item {
  &:not(:first-child) .page-link {
    margin-left: \$pagination-margin-start;
  }

  &.active .page-link {
    z-index: 3;
    color: \$pagination-active-color;
    @include gradient-bg(\$pagination-active-bg);
    border-color: \$pagination-active-border-color;
  }

  &.disabled .page-link {
    color: \$pagination-disabled-color;
    pointer-events: none;
    background-color: \$pagination-disabled-bg;
    border-color: \$pagination-disabled-border-color;
  }
}


//
// Sizing
//
@include pagination-size(\$pagination-padding-y, \$pagination-padding-x, null, \$pagination-border-radius);

.pagination-lg {
  @include pagination-size(\$pagination-padding-y-lg, \$pagination-padding-x-lg, \$font-size-lg, \$pagination-border-radius-lg);
}

.pagination-sm {
  @include pagination-size(\$pagination-padding-y-sm, \$pagination-padding-x-sm, \$font-size-sm, \$pagination-border-radius-sm);
}
", "scss/bootstrap/scss/_pagination.scss", "/opt/project/templates/scss/bootstrap/scss/_pagination.scss");
    }
}
