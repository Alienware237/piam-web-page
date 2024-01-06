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

/* scss/bootstrap/scss/utilities/_api.scss */
class __TwigTemplate_1d1bd39736220e86c55d067809e7b3b5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/utilities/_api.scss"));

        // line 1
        echo "// Loop over each breakpoint
@each \$breakpoint in map-keys(\$grid-breakpoints) {

  // Generate media query if needed
  @include media-breakpoint-up(\$breakpoint) {
    \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);

    // Loop over each utility property
    @each \$key, \$utility in \$utilities {
      // The utility can be disabled with `false`, thus check if the utility is a map first
      // Only proceed if responsive media queries are enabled or if it's the base media query
      @if type-of(\$utility) == \"map\" and (map-get(\$utility, responsive) or \$infix == \"\") {
        @include generate-utility(\$utility, \$infix);
      }
    }
  }
}

// RFS rescaling
@media (min-width: \$rfs-mq-value) {
  @each \$breakpoint in map-keys(\$grid-breakpoints) {
    \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);

    @if (map-get(\$grid-breakpoints, \$breakpoint) < \$rfs-breakpoint) {
      // Loop over each utility property
      @each \$key, \$utility in \$utilities {
        // The utility can be disabled with `false`, thus check if the utility is a map first
        // Only proceed if responsive media queries are enabled or if it's the base media query
        @if type-of(\$utility) == \"map\" and map-get(\$utility, rfs) and (map-get(\$utility, responsive) or \$infix == \"\") {
          @include generate-utility(\$utility, \$infix, true);
        }
      }
    }
  }
}


// Print utilities
@media print {
  @each \$key, \$utility in \$utilities {
    // The utility can be disabled with `false`, thus check if the utility is a map first
    // Then check if the utility needs print styles
    @if type-of(\$utility) == \"map\" and map-get(\$utility, print) == true {
      @include generate-utility(\$utility, \"-print\");
    }
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/utilities/_api.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Loop over each breakpoint
@each \$breakpoint in map-keys(\$grid-breakpoints) {

  // Generate media query if needed
  @include media-breakpoint-up(\$breakpoint) {
    \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);

    // Loop over each utility property
    @each \$key, \$utility in \$utilities {
      // The utility can be disabled with `false`, thus check if the utility is a map first
      // Only proceed if responsive media queries are enabled or if it's the base media query
      @if type-of(\$utility) == \"map\" and (map-get(\$utility, responsive) or \$infix == \"\") {
        @include generate-utility(\$utility, \$infix);
      }
    }
  }
}

// RFS rescaling
@media (min-width: \$rfs-mq-value) {
  @each \$breakpoint in map-keys(\$grid-breakpoints) {
    \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);

    @if (map-get(\$grid-breakpoints, \$breakpoint) < \$rfs-breakpoint) {
      // Loop over each utility property
      @each \$key, \$utility in \$utilities {
        // The utility can be disabled with `false`, thus check if the utility is a map first
        // Only proceed if responsive media queries are enabled or if it's the base media query
        @if type-of(\$utility) == \"map\" and map-get(\$utility, rfs) and (map-get(\$utility, responsive) or \$infix == \"\") {
          @include generate-utility(\$utility, \$infix, true);
        }
      }
    }
  }
}


// Print utilities
@media print {
  @each \$key, \$utility in \$utilities {
    // The utility can be disabled with `false`, thus check if the utility is a map first
    // Then check if the utility needs print styles
    @if type-of(\$utility) == \"map\" and map-get(\$utility, print) == true {
      @include generate-utility(\$utility, \"-print\");
    }
  }
}
", "scss/bootstrap/scss/utilities/_api.scss", "/opt/project/templates/scss/bootstrap/scss/utilities/_api.scss");
    }
}
