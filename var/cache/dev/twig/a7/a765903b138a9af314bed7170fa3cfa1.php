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

/* styles/bootstrap/scss/vendor/_rfs.scss */
class __TwigTemplate_d6e8883675a1076579d3517c855edca9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "styles/bootstrap/scss/vendor/_rfs.scss"));

        // line 1
        echo "// stylelint-disable property-blacklist, scss/dollar-variable-default

// SCSS RFS mixin
//
// Automated responsive values for font sizes, paddings, margins and much more
//
// Licensed under MIT (https://github.com/twbs/rfs/blob/master/LICENSE)

// Configuration

// Base value
\$rfs-base-value: 1.25rem !default;
\$rfs-unit: rem !default;

@if \$rfs-unit != rem and \$rfs-unit != px {
  @error \"`#{\$rfs-unit}` is not a valid unit for \$rfs-unit. Use `px` or `rem`.\";
}

// Breakpoint at where values start decreasing if screen width is smaller
\$rfs-breakpoint: 1200px !default;
\$rfs-breakpoint-unit: px !default;

@if \$rfs-breakpoint-unit != px and \$rfs-breakpoint-unit != em and \$rfs-breakpoint-unit != rem {
  @error \"`#{\$rfs-breakpoint-unit}` is not a valid unit for \$rfs-breakpoint-unit. Use `px`, `em` or `rem`.\";
}

// Resize values based on screen height and width
\$rfs-two-dimensional: false !default;

// Factor of decrease
\$rfs-factor: 10 !default;

@if type-of(\$rfs-factor) != number or \$rfs-factor <= 1 {
  @error \"`#{\$rfs-factor}` is not a valid  \$rfs-factor, it must be greater than 1.\";
}

// Mode. Possibilities: \"min-media-query\", \"max-media-query\"
\$rfs-mode: min-media-query !default;

// Generate enable or disable classes. Possibilities: false, \"enable\" or \"disable\"
\$rfs-class: false !default;

// 1 rem = \$rfs-rem-value px
\$rfs-rem-value: 16 !default;

// Safari iframe resize bug: https://github.com/twbs/rfs/issues/14
\$rfs-safari-iframe-resize-bug-fix: false !default;

// Disable RFS by setting \$enable-rfs to false
\$enable-rfs: true !default;

// Cache \$rfs-base-value unit
\$rfs-base-value-unit: unit(\$rfs-base-value);

// Remove px-unit from \$rfs-base-value for calculations
@if \$rfs-base-value-unit == px {
  \$rfs-base-value: \$rfs-base-value / (\$rfs-base-value * 0 + 1);
}
@else if \$rfs-base-value-unit == rem {
  \$rfs-base-value: \$rfs-base-value / (\$rfs-base-value * 0 + 1 / \$rfs-rem-value);
}

// Cache \$rfs-breakpoint unit to prevent multiple calls
\$rfs-breakpoint-unit-cache: unit(\$rfs-breakpoint);

// Remove unit from \$rfs-breakpoint for calculations
@if \$rfs-breakpoint-unit-cache == px {
  \$rfs-breakpoint: \$rfs-breakpoint / (\$rfs-breakpoint * 0 + 1);
}
@else if \$rfs-breakpoint-unit-cache == rem or \$rfs-breakpoint-unit-cache == \"em\" {
  \$rfs-breakpoint: \$rfs-breakpoint / (\$rfs-breakpoint * 0 + 1 / \$rfs-rem-value);
}

// Calculate the media query value
\$rfs-mq-value: if(\$rfs-breakpoint-unit == px, #{\$rfs-breakpoint}px, #{\$rfs-breakpoint / \$rfs-rem-value}#{\$rfs-breakpoint-unit});
\$rfs-mq-property-width: if(\$rfs-mode == max-media-query, max-width, min-width);
\$rfs-mq-property-height: if(\$rfs-mode == max-media-query, max-height, min-height);

// Internal mixin used to determine which media query needs to be used
@mixin _rfs-media-query {
  @if \$rfs-two-dimensional {
    @if \$rfs-mode == max-media-query {
      @media (#{\$rfs-mq-property-width}: #{\$rfs-mq-value}), (#{\$rfs-mq-property-height}: #{\$rfs-mq-value}) {
        @content;
      }
    }
    @else {
      @media (#{\$rfs-mq-property-width}: #{\$rfs-mq-value}) and (#{\$rfs-mq-property-height}: #{\$rfs-mq-value}) {
        @content;
      }
    }
  }
  @else {
    @media (#{\$rfs-mq-property-width}: #{\$rfs-mq-value}) {
      @content;
    }
  }
}

// Internal mixin that adds disable classes to the selector if needed.
@mixin _rfs-rule {
  @if \$rfs-class == disable and \$rfs-mode == max-media-query {
    // Adding an extra class increases specificity, which prevents the media query to override the property
    &,
    .disable-rfs &,
    &.disable-rfs {
      @content;
    }
  }
  @else if \$rfs-class == enable and \$rfs-mode == min-media-query {
    .enable-rfs &,
    &.enable-rfs {
      @content;
    }
  }
  @else {
    @content;
  }
}

// Internal mixin that adds enable classes to the selector if needed.
@mixin _rfs-media-query-rule {

  @if \$rfs-class == enable {
    @if \$rfs-mode == min-media-query {
      @content;
    }

    @include _rfs-media-query {
      .enable-rfs &,
      &.enable-rfs {
        @content;
      }
    }
  }
  @else {
    @if \$rfs-class == disable and \$rfs-mode == min-media-query {
      .disable-rfs &,
      &.disable-rfs {
        @content;
      }
    }
    @include _rfs-media-query {
      @content;
    }
  }
}

// Helper function to get the formatted non-responsive value
@function rfs-value(\$values) {
  // Convert to list
  \$values: if(type-of(\$values) != list, (\$values,), \$values);

  \$val: '';

  // Loop over each value and calculate value
  @each \$value in \$values {
    @if \$value == 0 {
      \$val: \$val + ' 0';
    }
    @else {
      // Cache \$value unit
      \$unit: if(type-of(\$value) == \"number\", unit(\$value), false);

      @if \$unit == px {
        // Convert to rem if needed
        \$val: \$val + ' ' + if(\$rfs-unit == rem, #{\$value / (\$value * 0 + \$rfs-rem-value)}rem, \$value);
      }
      @else if \$unit == rem {
        // Convert to px if needed
        \$val: \$val + ' ' + if(\$rfs-unit == px, #{\$value / (\$value * 0 + 1) * \$rfs-rem-value}px, \$value);
      }
      @else {
        // If \$value isn't a number (like inherit) or \$value has a unit (not px or rem, like 1.5em) or \$ is 0, just print the value
        \$val: \$val + ' ' + \$value;
      }
    }
  }

  // Remove first space
  @return unquote(str-slice(\$val, 2));
}

// Helper function to get the responsive value calculated by RFS
@function rfs-fluid-value(\$values) {
  // Convert to list
  \$values: if(type-of(\$values) != list, (\$values,), \$values);

  \$val: '';

  // Loop over each value and calculate value
  @each \$value in \$values {
    @if \$value == 0 {
      \$val: \$val + ' 0';
    }

    @else {
      // Cache \$value unit
      \$unit: if(type-of(\$value) == \"number\", unit(\$value), false);

      // If \$value isn't a number (like inherit) or \$value has a unit (not px or rem, like 1.5em) or \$ is 0, just print the value
      @if not \$unit or \$unit != px and \$unit != rem {
        \$val: \$val + ' ' + \$value;
      }

      @else {
        // Remove unit from \$value for calculations
        \$value: \$value / (\$value * 0 + if(\$unit == px, 1, 1 / \$rfs-rem-value));

        // Only add the media query if the value is greater than the minimum value
        @if abs(\$value) <= \$rfs-base-value or not \$enable-rfs {
          \$val: \$val + ' ' +  if(\$rfs-unit == rem, #{\$value / \$rfs-rem-value}rem, #{\$value}px);
        }
        @else {
          // Calculate the minimum value
          \$value-min: \$rfs-base-value + (abs(\$value) - \$rfs-base-value) / \$rfs-factor;

          // Calculate difference between \$value and the minimum value
          \$value-diff: abs(\$value) - \$value-min;

          // Base value formatting
          \$min-width: if(\$rfs-unit == rem, #{\$value-min / \$rfs-rem-value}rem, #{\$value-min}px);

          // Use negative value if needed
          \$min-width: if(\$value < 0, -\$min-width, \$min-width);

          // Use `vmin` if two-dimensional is enabled
          \$variable-unit: if(\$rfs-two-dimensional, vmin, vw);

          // Calculate the variable width between 0 and \$rfs-breakpoint
          \$variable-width: #{\$value-diff * 100 / \$rfs-breakpoint}#{\$variable-unit};

          // Return the calculated value
          \$val: \$val + ' calc(' + \$min-width + if(\$value < 0, ' - ', ' + ') + \$variable-width + ')';
        }
      }
    }
  }

  // Remove first space
  @return unquote(str-slice(\$val, 2));
}

// RFS mixin
@mixin rfs(\$values, \$property: font-size) {
  @if \$values != null {
    \$val: rfs-value(\$values);
    \$fluidVal: rfs-fluid-value(\$values);

    // Do not print the media query if responsive & non-responsive values are the same
    @if \$val == \$fluidVal {
      #{\$property}: \$val;
    }
    @else {
      @include _rfs-rule {
        #{\$property}: if(\$rfs-mode == max-media-query, \$val, \$fluidVal);

        // Include safari iframe resize fix if needed
        min-width: if(\$rfs-safari-iframe-resize-bug-fix, (0 * 1vw), null);
      }

      @include _rfs-media-query-rule {
        #{\$property}: if(\$rfs-mode == max-media-query, \$fluidVal, \$val);
      }
    }
  }
}

// Shorthand helper mixins
@mixin font-size(\$value) {
  @include rfs(\$value);
}

@mixin padding(\$value) {
  @include rfs(\$value, padding);
}

@mixin padding-top(\$value) {
  @include rfs(\$value, padding-top);
}

@mixin padding-right(\$value) {
  @include rfs(\$value, padding-right);
}

@mixin padding-bottom(\$value) {
  @include rfs(\$value, padding-bottom);
}

@mixin padding-left(\$value) {
  @include rfs(\$value, padding-left);
}

@mixin margin(\$value) {
  @include rfs(\$value, margin);
}

@mixin margin-top(\$value) {
  @include rfs(\$value, margin-top);
}

@mixin margin-right(\$value) {
  @include rfs(\$value, margin-right);
}

@mixin margin-bottom(\$value) {
  @include rfs(\$value, margin-bottom);
}

@mixin margin-left(\$value) {
  @include rfs(\$value, margin-left);
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "styles/bootstrap/scss/vendor/_rfs.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// stylelint-disable property-blacklist, scss/dollar-variable-default

// SCSS RFS mixin
//
// Automated responsive values for font sizes, paddings, margins and much more
//
// Licensed under MIT (https://github.com/twbs/rfs/blob/master/LICENSE)

// Configuration

// Base value
\$rfs-base-value: 1.25rem !default;
\$rfs-unit: rem !default;

@if \$rfs-unit != rem and \$rfs-unit != px {
  @error \"`#{\$rfs-unit}` is not a valid unit for \$rfs-unit. Use `px` or `rem`.\";
}

// Breakpoint at where values start decreasing if screen width is smaller
\$rfs-breakpoint: 1200px !default;
\$rfs-breakpoint-unit: px !default;

@if \$rfs-breakpoint-unit != px and \$rfs-breakpoint-unit != em and \$rfs-breakpoint-unit != rem {
  @error \"`#{\$rfs-breakpoint-unit}` is not a valid unit for \$rfs-breakpoint-unit. Use `px`, `em` or `rem`.\";
}

// Resize values based on screen height and width
\$rfs-two-dimensional: false !default;

// Factor of decrease
\$rfs-factor: 10 !default;

@if type-of(\$rfs-factor) != number or \$rfs-factor <= 1 {
  @error \"`#{\$rfs-factor}` is not a valid  \$rfs-factor, it must be greater than 1.\";
}

// Mode. Possibilities: \"min-media-query\", \"max-media-query\"
\$rfs-mode: min-media-query !default;

// Generate enable or disable classes. Possibilities: false, \"enable\" or \"disable\"
\$rfs-class: false !default;

// 1 rem = \$rfs-rem-value px
\$rfs-rem-value: 16 !default;

// Safari iframe resize bug: https://github.com/twbs/rfs/issues/14
\$rfs-safari-iframe-resize-bug-fix: false !default;

// Disable RFS by setting \$enable-rfs to false
\$enable-rfs: true !default;

// Cache \$rfs-base-value unit
\$rfs-base-value-unit: unit(\$rfs-base-value);

// Remove px-unit from \$rfs-base-value for calculations
@if \$rfs-base-value-unit == px {
  \$rfs-base-value: \$rfs-base-value / (\$rfs-base-value * 0 + 1);
}
@else if \$rfs-base-value-unit == rem {
  \$rfs-base-value: \$rfs-base-value / (\$rfs-base-value * 0 + 1 / \$rfs-rem-value);
}

// Cache \$rfs-breakpoint unit to prevent multiple calls
\$rfs-breakpoint-unit-cache: unit(\$rfs-breakpoint);

// Remove unit from \$rfs-breakpoint for calculations
@if \$rfs-breakpoint-unit-cache == px {
  \$rfs-breakpoint: \$rfs-breakpoint / (\$rfs-breakpoint * 0 + 1);
}
@else if \$rfs-breakpoint-unit-cache == rem or \$rfs-breakpoint-unit-cache == \"em\" {
  \$rfs-breakpoint: \$rfs-breakpoint / (\$rfs-breakpoint * 0 + 1 / \$rfs-rem-value);
}

// Calculate the media query value
\$rfs-mq-value: if(\$rfs-breakpoint-unit == px, #{\$rfs-breakpoint}px, #{\$rfs-breakpoint / \$rfs-rem-value}#{\$rfs-breakpoint-unit});
\$rfs-mq-property-width: if(\$rfs-mode == max-media-query, max-width, min-width);
\$rfs-mq-property-height: if(\$rfs-mode == max-media-query, max-height, min-height);

// Internal mixin used to determine which media query needs to be used
@mixin _rfs-media-query {
  @if \$rfs-two-dimensional {
    @if \$rfs-mode == max-media-query {
      @media (#{\$rfs-mq-property-width}: #{\$rfs-mq-value}), (#{\$rfs-mq-property-height}: #{\$rfs-mq-value}) {
        @content;
      }
    }
    @else {
      @media (#{\$rfs-mq-property-width}: #{\$rfs-mq-value}) and (#{\$rfs-mq-property-height}: #{\$rfs-mq-value}) {
        @content;
      }
    }
  }
  @else {
    @media (#{\$rfs-mq-property-width}: #{\$rfs-mq-value}) {
      @content;
    }
  }
}

// Internal mixin that adds disable classes to the selector if needed.
@mixin _rfs-rule {
  @if \$rfs-class == disable and \$rfs-mode == max-media-query {
    // Adding an extra class increases specificity, which prevents the media query to override the property
    &,
    .disable-rfs &,
    &.disable-rfs {
      @content;
    }
  }
  @else if \$rfs-class == enable and \$rfs-mode == min-media-query {
    .enable-rfs &,
    &.enable-rfs {
      @content;
    }
  }
  @else {
    @content;
  }
}

// Internal mixin that adds enable classes to the selector if needed.
@mixin _rfs-media-query-rule {

  @if \$rfs-class == enable {
    @if \$rfs-mode == min-media-query {
      @content;
    }

    @include _rfs-media-query {
      .enable-rfs &,
      &.enable-rfs {
        @content;
      }
    }
  }
  @else {
    @if \$rfs-class == disable and \$rfs-mode == min-media-query {
      .disable-rfs &,
      &.disable-rfs {
        @content;
      }
    }
    @include _rfs-media-query {
      @content;
    }
  }
}

// Helper function to get the formatted non-responsive value
@function rfs-value(\$values) {
  // Convert to list
  \$values: if(type-of(\$values) != list, (\$values,), \$values);

  \$val: '';

  // Loop over each value and calculate value
  @each \$value in \$values {
    @if \$value == 0 {
      \$val: \$val + ' 0';
    }
    @else {
      // Cache \$value unit
      \$unit: if(type-of(\$value) == \"number\", unit(\$value), false);

      @if \$unit == px {
        // Convert to rem if needed
        \$val: \$val + ' ' + if(\$rfs-unit == rem, #{\$value / (\$value * 0 + \$rfs-rem-value)}rem, \$value);
      }
      @else if \$unit == rem {
        // Convert to px if needed
        \$val: \$val + ' ' + if(\$rfs-unit == px, #{\$value / (\$value * 0 + 1) * \$rfs-rem-value}px, \$value);
      }
      @else {
        // If \$value isn't a number (like inherit) or \$value has a unit (not px or rem, like 1.5em) or \$ is 0, just print the value
        \$val: \$val + ' ' + \$value;
      }
    }
  }

  // Remove first space
  @return unquote(str-slice(\$val, 2));
}

// Helper function to get the responsive value calculated by RFS
@function rfs-fluid-value(\$values) {
  // Convert to list
  \$values: if(type-of(\$values) != list, (\$values,), \$values);

  \$val: '';

  // Loop over each value and calculate value
  @each \$value in \$values {
    @if \$value == 0 {
      \$val: \$val + ' 0';
    }

    @else {
      // Cache \$value unit
      \$unit: if(type-of(\$value) == \"number\", unit(\$value), false);

      // If \$value isn't a number (like inherit) or \$value has a unit (not px or rem, like 1.5em) or \$ is 0, just print the value
      @if not \$unit or \$unit != px and \$unit != rem {
        \$val: \$val + ' ' + \$value;
      }

      @else {
        // Remove unit from \$value for calculations
        \$value: \$value / (\$value * 0 + if(\$unit == px, 1, 1 / \$rfs-rem-value));

        // Only add the media query if the value is greater than the minimum value
        @if abs(\$value) <= \$rfs-base-value or not \$enable-rfs {
          \$val: \$val + ' ' +  if(\$rfs-unit == rem, #{\$value / \$rfs-rem-value}rem, #{\$value}px);
        }
        @else {
          // Calculate the minimum value
          \$value-min: \$rfs-base-value + (abs(\$value) - \$rfs-base-value) / \$rfs-factor;

          // Calculate difference between \$value and the minimum value
          \$value-diff: abs(\$value) - \$value-min;

          // Base value formatting
          \$min-width: if(\$rfs-unit == rem, #{\$value-min / \$rfs-rem-value}rem, #{\$value-min}px);

          // Use negative value if needed
          \$min-width: if(\$value < 0, -\$min-width, \$min-width);

          // Use `vmin` if two-dimensional is enabled
          \$variable-unit: if(\$rfs-two-dimensional, vmin, vw);

          // Calculate the variable width between 0 and \$rfs-breakpoint
          \$variable-width: #{\$value-diff * 100 / \$rfs-breakpoint}#{\$variable-unit};

          // Return the calculated value
          \$val: \$val + ' calc(' + \$min-width + if(\$value < 0, ' - ', ' + ') + \$variable-width + ')';
        }
      }
    }
  }

  // Remove first space
  @return unquote(str-slice(\$val, 2));
}

// RFS mixin
@mixin rfs(\$values, \$property: font-size) {
  @if \$values != null {
    \$val: rfs-value(\$values);
    \$fluidVal: rfs-fluid-value(\$values);

    // Do not print the media query if responsive & non-responsive values are the same
    @if \$val == \$fluidVal {
      #{\$property}: \$val;
    }
    @else {
      @include _rfs-rule {
        #{\$property}: if(\$rfs-mode == max-media-query, \$val, \$fluidVal);

        // Include safari iframe resize fix if needed
        min-width: if(\$rfs-safari-iframe-resize-bug-fix, (0 * 1vw), null);
      }

      @include _rfs-media-query-rule {
        #{\$property}: if(\$rfs-mode == max-media-query, \$fluidVal, \$val);
      }
    }
  }
}

// Shorthand helper mixins
@mixin font-size(\$value) {
  @include rfs(\$value);
}

@mixin padding(\$value) {
  @include rfs(\$value, padding);
}

@mixin padding-top(\$value) {
  @include rfs(\$value, padding-top);
}

@mixin padding-right(\$value) {
  @include rfs(\$value, padding-right);
}

@mixin padding-bottom(\$value) {
  @include rfs(\$value, padding-bottom);
}

@mixin padding-left(\$value) {
  @include rfs(\$value, padding-left);
}

@mixin margin(\$value) {
  @include rfs(\$value, margin);
}

@mixin margin-top(\$value) {
  @include rfs(\$value, margin-top);
}

@mixin margin-right(\$value) {
  @include rfs(\$value, margin-right);
}

@mixin margin-bottom(\$value) {
  @include rfs(\$value, margin-bottom);
}

@mixin margin-left(\$value) {
  @include rfs(\$value, margin-left);
}
", "styles/bootstrap/scss/vendor/_rfs.scss", "/opt/project/templates/styles/bootstrap/scss/vendor/_rfs.scss");
    }
}
