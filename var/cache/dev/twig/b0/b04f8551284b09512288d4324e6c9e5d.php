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

/* scss/bootstrap/scss/mixins/_breakpoints.scss */
class __TwigTemplate_bf8694f0b4dd6890530f44a4bcf3c366 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_breakpoints.scss"));

        // line 1
        echo "// Breakpoint viewport sizes and media queries.
//
// Breakpoints are defined as a map of (name: minimum width), order from small to large:
//
//    (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px)
//
// The map defined in the `\$grid-breakpoints` global variable is used as the `\$breakpoints` argument by default.

// Name of the next breakpoint, or null for the last breakpoint.
//
//    >> breakpoint-next(sm)
//    md
//    >> breakpoint-next(sm, (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px))
//    md
//    >> breakpoint-next(sm, \$breakpoint-names: (xs sm md lg xl))
//    md
@function breakpoint-next(\$name, \$breakpoints: \$grid-breakpoints, \$breakpoint-names: map-keys(\$breakpoints)) {
  \$n: index(\$breakpoint-names, \$name);
  @if not \$n {
    @error \"breakpoint `#{\$name}` not found in `#{\$breakpoints}`\";
  }
  @return if(\$n < length(\$breakpoint-names), nth(\$breakpoint-names, \$n + 1), null);
}

// Minimum breakpoint width. Null for the smallest (first) breakpoint.
//
//    >> breakpoint-min(sm, (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px))
//    576px
@function breakpoint-min(\$name, \$breakpoints: \$grid-breakpoints) {
  \$min: map-get(\$breakpoints, \$name);
  @return if(\$min != 0, \$min, null);
}

// Maximum breakpoint width.
// The maximum value is reduced by 0.02px to work around the limitations of
// `min-` and `max-` prefixes and viewports with fractional widths.
// See https://www.w3.org/TR/mediaqueries-4/#mq-min-max
// Uses 0.02px rather than 0.01px to work around a current rounding bug in Safari.
// See https://bugs.webkit.org/show_bug.cgi?id=178261
//
//    >> breakpoint-max(md, (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px))
//    767.98px
@function breakpoint-max(\$name, \$breakpoints: \$grid-breakpoints) {
  \$max: map-get(\$breakpoints, \$name);
  @return if(\$max and \$max > 0, \$max - .02, null);
}

// Returns a blank string if smallest breakpoint, otherwise returns the name with a dash in front.
// Useful for making responsive utilities.
//
//    >> breakpoint-infix(xs, (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px))
//    \"\"  (Returns a blank string)
//    >> breakpoint-infix(sm, (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px))
//    \"-sm\"
@function breakpoint-infix(\$name, \$breakpoints: \$grid-breakpoints) {
  @return if(breakpoint-min(\$name, \$breakpoints) == null, \"\", \"-#{\$name}\");
}

// Media of at least the minimum breakpoint width. No query for the smallest breakpoint.
// Makes the @content apply to the given breakpoint and wider.
@mixin media-breakpoint-up(\$name, \$breakpoints: \$grid-breakpoints) {
  \$min: breakpoint-min(\$name, \$breakpoints);
  @if \$min {
    @media (min-width: \$min) {
      @content;
    }
  } @else {
    @content;
  }
}

// Media of at most the maximum breakpoint width. No query for the largest breakpoint.
// Makes the @content apply to the given breakpoint and narrower.
@mixin media-breakpoint-down(\$name, \$breakpoints: \$grid-breakpoints) {
  \$max: breakpoint-max(\$name, \$breakpoints);
  @if \$max {
    @media (max-width: \$max) {
      @content;
    }
  } @else {
    @content;
  }
}

// Media that spans multiple breakpoint widths.
// Makes the @content apply between the min and max breakpoints
@mixin media-breakpoint-between(\$lower, \$upper, \$breakpoints: \$grid-breakpoints) {
  \$min: breakpoint-min(\$lower, \$breakpoints);
  \$max: breakpoint-max(\$upper, \$breakpoints);

  @if \$min != null and \$max != null {
    @media (min-width: \$min) and (max-width: \$max) {
      @content;
    }
  } @else if \$max == null {
    @include media-breakpoint-up(\$lower, \$breakpoints) {
      @content;
    }
  } @else if \$min == null {
    @include media-breakpoint-down(\$upper, \$breakpoints) {
      @content;
    }
  }
}

// Media between the breakpoint's minimum and maximum widths.
// No minimum for the smallest breakpoint, and no maximum for the largest one.
// Makes the @content apply only to the given breakpoint, not viewports any wider or narrower.
@mixin media-breakpoint-only(\$name, \$breakpoints: \$grid-breakpoints) {
  \$min:  breakpoint-min(\$name, \$breakpoints);
  \$next: breakpoint-next(\$name, \$breakpoints);
  \$max:  breakpoint-max(\$next);

  @if \$min != null and \$max != null {
    @media (min-width: \$min) and (max-width: \$max) {
      @content;
    }
  } @else if \$max == null {
    @include media-breakpoint-up(\$name, \$breakpoints) {
      @content;
    }
  } @else if \$min == null {
    @include media-breakpoint-down(\$next, \$breakpoints) {
      @content;
    }
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/mixins/_breakpoints.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Breakpoint viewport sizes and media queries.
//
// Breakpoints are defined as a map of (name: minimum width), order from small to large:
//
//    (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px)
//
// The map defined in the `\$grid-breakpoints` global variable is used as the `\$breakpoints` argument by default.

// Name of the next breakpoint, or null for the last breakpoint.
//
//    >> breakpoint-next(sm)
//    md
//    >> breakpoint-next(sm, (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px))
//    md
//    >> breakpoint-next(sm, \$breakpoint-names: (xs sm md lg xl))
//    md
@function breakpoint-next(\$name, \$breakpoints: \$grid-breakpoints, \$breakpoint-names: map-keys(\$breakpoints)) {
  \$n: index(\$breakpoint-names, \$name);
  @if not \$n {
    @error \"breakpoint `#{\$name}` not found in `#{\$breakpoints}`\";
  }
  @return if(\$n < length(\$breakpoint-names), nth(\$breakpoint-names, \$n + 1), null);
}

// Minimum breakpoint width. Null for the smallest (first) breakpoint.
//
//    >> breakpoint-min(sm, (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px))
//    576px
@function breakpoint-min(\$name, \$breakpoints: \$grid-breakpoints) {
  \$min: map-get(\$breakpoints, \$name);
  @return if(\$min != 0, \$min, null);
}

// Maximum breakpoint width.
// The maximum value is reduced by 0.02px to work around the limitations of
// `min-` and `max-` prefixes and viewports with fractional widths.
// See https://www.w3.org/TR/mediaqueries-4/#mq-min-max
// Uses 0.02px rather than 0.01px to work around a current rounding bug in Safari.
// See https://bugs.webkit.org/show_bug.cgi?id=178261
//
//    >> breakpoint-max(md, (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px))
//    767.98px
@function breakpoint-max(\$name, \$breakpoints: \$grid-breakpoints) {
  \$max: map-get(\$breakpoints, \$name);
  @return if(\$max and \$max > 0, \$max - .02, null);
}

// Returns a blank string if smallest breakpoint, otherwise returns the name with a dash in front.
// Useful for making responsive utilities.
//
//    >> breakpoint-infix(xs, (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px))
//    \"\"  (Returns a blank string)
//    >> breakpoint-infix(sm, (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px))
//    \"-sm\"
@function breakpoint-infix(\$name, \$breakpoints: \$grid-breakpoints) {
  @return if(breakpoint-min(\$name, \$breakpoints) == null, \"\", \"-#{\$name}\");
}

// Media of at least the minimum breakpoint width. No query for the smallest breakpoint.
// Makes the @content apply to the given breakpoint and wider.
@mixin media-breakpoint-up(\$name, \$breakpoints: \$grid-breakpoints) {
  \$min: breakpoint-min(\$name, \$breakpoints);
  @if \$min {
    @media (min-width: \$min) {
      @content;
    }
  } @else {
    @content;
  }
}

// Media of at most the maximum breakpoint width. No query for the largest breakpoint.
// Makes the @content apply to the given breakpoint and narrower.
@mixin media-breakpoint-down(\$name, \$breakpoints: \$grid-breakpoints) {
  \$max: breakpoint-max(\$name, \$breakpoints);
  @if \$max {
    @media (max-width: \$max) {
      @content;
    }
  } @else {
    @content;
  }
}

// Media that spans multiple breakpoint widths.
// Makes the @content apply between the min and max breakpoints
@mixin media-breakpoint-between(\$lower, \$upper, \$breakpoints: \$grid-breakpoints) {
  \$min: breakpoint-min(\$lower, \$breakpoints);
  \$max: breakpoint-max(\$upper, \$breakpoints);

  @if \$min != null and \$max != null {
    @media (min-width: \$min) and (max-width: \$max) {
      @content;
    }
  } @else if \$max == null {
    @include media-breakpoint-up(\$lower, \$breakpoints) {
      @content;
    }
  } @else if \$min == null {
    @include media-breakpoint-down(\$upper, \$breakpoints) {
      @content;
    }
  }
}

// Media between the breakpoint's minimum and maximum widths.
// No minimum for the smallest breakpoint, and no maximum for the largest one.
// Makes the @content apply only to the given breakpoint, not viewports any wider or narrower.
@mixin media-breakpoint-only(\$name, \$breakpoints: \$grid-breakpoints) {
  \$min:  breakpoint-min(\$name, \$breakpoints);
  \$next: breakpoint-next(\$name, \$breakpoints);
  \$max:  breakpoint-max(\$next);

  @if \$min != null and \$max != null {
    @media (min-width: \$min) and (max-width: \$max) {
      @content;
    }
  } @else if \$max == null {
    @include media-breakpoint-up(\$name, \$breakpoints) {
      @content;
    }
  } @else if \$min == null {
    @include media-breakpoint-down(\$next, \$breakpoints) {
      @content;
    }
  }
}
", "scss/bootstrap/scss/mixins/_breakpoints.scss", "/opt/project/templates/scss/bootstrap/scss/mixins/_breakpoints.scss");
    }
}
