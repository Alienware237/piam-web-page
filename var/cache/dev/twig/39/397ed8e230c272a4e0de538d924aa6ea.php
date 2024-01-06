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

/* scss/bootstrap/scss/_containers.scss */
class __TwigTemplate_afba584ddc9c3ed1330536c7566910dd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_containers.scss"));

        // line 1
        echo "// Container widths
//
// Set the container width, and override it for fixed navbars in media queries.

@if \$enable-grid-classes {
  // Single container class with breakpoint max-widths
  .container,
  // 100% wide container at all breakpoints
  .container-fluid {
    @include make-container();
  }

  // Responsive containers that are 100% wide until a breakpoint
  @each \$breakpoint, \$container-max-width in \$container-max-widths {
    .container-#{\$breakpoint} {
      @extend .container-fluid;
    }

    @include media-breakpoint-up(\$breakpoint, \$grid-breakpoints) {
      %responsive-container-#{\$breakpoint} {
        max-width: \$container-max-width;
      }

      // Extend each breakpoint which is smaller or equal to the current breakpoint
      \$extend-breakpoint: true;

      @each \$name, \$width in \$grid-breakpoints {
        @if (\$extend-breakpoint) {
          .container#{breakpoint-infix(\$name, \$grid-breakpoints)} {
            @extend %responsive-container-#{\$breakpoint};
          }

          // Once the current breakpoint is reached, stop extending
          @if (\$breakpoint == \$name) {
            \$extend-breakpoint: false;
          }
        }
      }
    }
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_containers.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Container widths
//
// Set the container width, and override it for fixed navbars in media queries.

@if \$enable-grid-classes {
  // Single container class with breakpoint max-widths
  .container,
  // 100% wide container at all breakpoints
  .container-fluid {
    @include make-container();
  }

  // Responsive containers that are 100% wide until a breakpoint
  @each \$breakpoint, \$container-max-width in \$container-max-widths {
    .container-#{\$breakpoint} {
      @extend .container-fluid;
    }

    @include media-breakpoint-up(\$breakpoint, \$grid-breakpoints) {
      %responsive-container-#{\$breakpoint} {
        max-width: \$container-max-width;
      }

      // Extend each breakpoint which is smaller or equal to the current breakpoint
      \$extend-breakpoint: true;

      @each \$name, \$width in \$grid-breakpoints {
        @if (\$extend-breakpoint) {
          .container#{breakpoint-infix(\$name, \$grid-breakpoints)} {
            @extend %responsive-container-#{\$breakpoint};
          }

          // Once the current breakpoint is reached, stop extending
          @if (\$breakpoint == \$name) {
            \$extend-breakpoint: false;
          }
        }
      }
    }
  }
}
", "scss/bootstrap/scss/_containers.scss", "/opt/project/templates/scss/bootstrap/scss/_containers.scss");
    }
}
