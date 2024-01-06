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

/* styles/bootstrap/scss/mixins/_transition.scss */
class __TwigTemplate_7ec91b65ad0f97d3b6a9bcf5121ea975 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "styles/bootstrap/scss/mixins/_transition.scss"));

        // line 1
        echo "// stylelint-disable property-disallowed-list
@mixin transition(\$transition...) {
  @if length(\$transition) == 0 {
    \$transition: \$transition-base;
  }

  @if length(\$transition) > 1 {
    @each \$value in \$transition {
      @if \$value == null or \$value == none {
        @warn \"The keyword 'none' or 'null' must be used as a single argument.\";
      }
    }
  }

  @if \$enable-transitions {
    @if nth(\$transition, 1) != null {
      transition: \$transition;
    }

    @if \$enable-reduced-motion and nth(\$transition, 1) != null and nth(\$transition, 1) != none {
      @media (prefers-reduced-motion: reduce) {
        transition: none;
      }
    }
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "styles/bootstrap/scss/mixins/_transition.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// stylelint-disable property-disallowed-list
@mixin transition(\$transition...) {
  @if length(\$transition) == 0 {
    \$transition: \$transition-base;
  }

  @if length(\$transition) > 1 {
    @each \$value in \$transition {
      @if \$value == null or \$value == none {
        @warn \"The keyword 'none' or 'null' must be used as a single argument.\";
      }
    }
  }

  @if \$enable-transitions {
    @if nth(\$transition, 1) != null {
      transition: \$transition;
    }

    @if \$enable-reduced-motion and nth(\$transition, 1) != null and nth(\$transition, 1) != none {
      @media (prefers-reduced-motion: reduce) {
        transition: none;
      }
    }
  }
}
", "styles/bootstrap/scss/mixins/_transition.scss", "/opt/project/templates/styles/bootstrap/scss/mixins/_transition.scss");
    }
}
