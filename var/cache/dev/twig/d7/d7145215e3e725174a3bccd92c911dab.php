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

/* scss/bootstrap/scss/mixins/_pagination.scss */
class __TwigTemplate_06d6464a09f933b1a2280a0622945442 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_pagination.scss"));

        // line 1
        echo "// Pagination

// scss-docs-start pagination-mixin
@mixin pagination-size(\$padding-y, \$padding-x, \$font-size, \$border-radius) {
  .page-link {
    padding: \$padding-y \$padding-x;
    @include font-size(\$font-size);
  }

  .page-item {
    @if \$pagination-margin-start == (-\$pagination-border-width) {
      &:first-child {
        .page-link {
          @include border-start-radius(\$border-radius);
        }
      }

      &:last-child {
        .page-link {
          @include border-end-radius(\$border-radius);
        }
      }
    } @else {
      //Add border-radius to all pageLinks in case they have left margin
      .page-link {
        @include border-radius(\$border-radius);
      }
    }
  }
}
// scss-docs-end pagination-mixin
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/mixins/_pagination.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Pagination

// scss-docs-start pagination-mixin
@mixin pagination-size(\$padding-y, \$padding-x, \$font-size, \$border-radius) {
  .page-link {
    padding: \$padding-y \$padding-x;
    @include font-size(\$font-size);
  }

  .page-item {
    @if \$pagination-margin-start == (-\$pagination-border-width) {
      &:first-child {
        .page-link {
          @include border-start-radius(\$border-radius);
        }
      }

      &:last-child {
        .page-link {
          @include border-end-radius(\$border-radius);
        }
      }
    } @else {
      //Add border-radius to all pageLinks in case they have left margin
      .page-link {
        @include border-radius(\$border-radius);
      }
    }
  }
}
// scss-docs-end pagination-mixin
", "scss/bootstrap/scss/mixins/_pagination.scss", "/opt/project/templates/scss/bootstrap/scss/mixins/_pagination.scss");
    }
}
