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

/* scss/bootstrap/scss/_list-group.scss */
class __TwigTemplate_387921780f9af34ba5fca88c598f746a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_list-group.scss"));

        // line 1
        echo "// Base class
//
// Easily usable on <ul>, <ol>, or <div>.

.list-group {
  display: flex;
  flex-direction: column;

  // No need to set list-style: none; since .list-group-item is block level
  padding-left: 0; // reset padding because ul and ol
  margin-bottom: 0;
  @include border-radius(\$list-group-border-radius);
}

.list-group-numbered {
  list-style-type: none;
  counter-reset: section;

  > li::before {
    // Increments only this instance of the section counter
    content: counters(section, \".\") \". \";
    counter-increment: section;
  }
}


// Interactive list items
//
// Use anchor or button elements instead of `li`s or `div`s to create interactive
// list items. Includes an extra `.active` modifier class for selected items.

.list-group-item-action {
  width: 100%; // For `<button>`s (anchors become 100% by default though)
  color: \$list-group-action-color;
  text-align: inherit; // For `<button>`s (anchors inherit)

  // Hover state
  &:hover,
  &:focus {
    z-index: 1; // Place hover/focus items above their siblings for proper border styling
    color: \$list-group-action-hover-color;
    text-decoration: none;
    background-color: \$list-group-hover-bg;
  }

  &:active {
    color: \$list-group-action-active-color;
    background-color: \$list-group-action-active-bg;
  }
}


// Individual list items
//
// Use on `li`s or `div`s within the `.list-group` parent.

.list-group-item {
  position: relative;
  display: block;
  padding: \$list-group-item-padding-y \$list-group-item-padding-x;
  color: \$list-group-color;
  text-decoration: if(\$link-decoration == none, null, none);
  background-color: \$list-group-bg;
  border: \$list-group-border-width solid \$list-group-border-color;

  &:first-child {
    @include border-top-radius(inherit);
  }

  &:last-child {
    @include border-bottom-radius(inherit);
  }

  &.disabled,
  &:disabled {
    color: \$list-group-disabled-color;
    pointer-events: none;
    background-color: \$list-group-disabled-bg;
  }

  // Include both here for `<a>`s and `<button>`s
  &.active {
    z-index: 2; // Place active items above their siblings for proper border styling
    color: \$list-group-active-color;
    background-color: \$list-group-active-bg;
    border-color: \$list-group-active-border-color;
  }

  & + & {
    border-top-width: 0;

    &.active {
      margin-top: -\$list-group-border-width;
      border-top-width: \$list-group-border-width;
    }
  }
}


// Horizontal
//
// Change the layout of list group items from vertical (default) to horizontal.

@each \$breakpoint in map-keys(\$grid-breakpoints) {
  @include media-breakpoint-up(\$breakpoint) {
    \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);

    .list-group-horizontal#{\$infix} {
      flex-direction: row;

      > .list-group-item {
        &:first-child {
          @include border-bottom-start-radius(\$list-group-border-radius);
          @include border-top-end-radius(0);
        }

        &:last-child {
          @include border-top-end-radius(\$list-group-border-radius);
          @include border-bottom-start-radius(0);
        }

        &.active {
          margin-top: 0;
        }

        + .list-group-item {
          border-top-width: \$list-group-border-width;
          border-left-width: 0;

          &.active {
            margin-left: -\$list-group-border-width;
            border-left-width: \$list-group-border-width;
          }
        }
      }
    }
  }
}


// Flush list items
//
// Remove borders and border-radius to keep list group items edge-to-edge. Most
// useful within other components (e.g., cards).

.list-group-flush {
  @include border-radius(0);

  > .list-group-item {
    border-width: 0 0 \$list-group-border-width;

    &:last-child {
      border-bottom-width: 0;
    }
  }
}


// scss-docs-start list-group-modifiers
// List group contextual variants
//
// Add modifier classes to change text and background color on individual items.
// Organizationally, this must come after the `:hover` states.

@each \$state, \$value in \$theme-colors {
  \$list-group-background: shift-color(\$value, \$list-group-item-bg-scale);
  \$list-group-color: shift-color(\$value, \$list-group-item-color-scale);
  @if (contrast-ratio(\$list-group-background, \$list-group-color) < \$min-contrast-ratio) {
    \$list-group-color: mix(\$value, color-contrast(\$list-group-background), abs(\$list-group-item-color-scale));
  }

  @include list-group-item-variant(\$state, \$list-group-background, \$list-group-color);
}
// scss-docs-end list-group-modifiers
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_list-group.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Base class
//
// Easily usable on <ul>, <ol>, or <div>.

.list-group {
  display: flex;
  flex-direction: column;

  // No need to set list-style: none; since .list-group-item is block level
  padding-left: 0; // reset padding because ul and ol
  margin-bottom: 0;
  @include border-radius(\$list-group-border-radius);
}

.list-group-numbered {
  list-style-type: none;
  counter-reset: section;

  > li::before {
    // Increments only this instance of the section counter
    content: counters(section, \".\") \". \";
    counter-increment: section;
  }
}


// Interactive list items
//
// Use anchor or button elements instead of `li`s or `div`s to create interactive
// list items. Includes an extra `.active` modifier class for selected items.

.list-group-item-action {
  width: 100%; // For `<button>`s (anchors become 100% by default though)
  color: \$list-group-action-color;
  text-align: inherit; // For `<button>`s (anchors inherit)

  // Hover state
  &:hover,
  &:focus {
    z-index: 1; // Place hover/focus items above their siblings for proper border styling
    color: \$list-group-action-hover-color;
    text-decoration: none;
    background-color: \$list-group-hover-bg;
  }

  &:active {
    color: \$list-group-action-active-color;
    background-color: \$list-group-action-active-bg;
  }
}


// Individual list items
//
// Use on `li`s or `div`s within the `.list-group` parent.

.list-group-item {
  position: relative;
  display: block;
  padding: \$list-group-item-padding-y \$list-group-item-padding-x;
  color: \$list-group-color;
  text-decoration: if(\$link-decoration == none, null, none);
  background-color: \$list-group-bg;
  border: \$list-group-border-width solid \$list-group-border-color;

  &:first-child {
    @include border-top-radius(inherit);
  }

  &:last-child {
    @include border-bottom-radius(inherit);
  }

  &.disabled,
  &:disabled {
    color: \$list-group-disabled-color;
    pointer-events: none;
    background-color: \$list-group-disabled-bg;
  }

  // Include both here for `<a>`s and `<button>`s
  &.active {
    z-index: 2; // Place active items above their siblings for proper border styling
    color: \$list-group-active-color;
    background-color: \$list-group-active-bg;
    border-color: \$list-group-active-border-color;
  }

  & + & {
    border-top-width: 0;

    &.active {
      margin-top: -\$list-group-border-width;
      border-top-width: \$list-group-border-width;
    }
  }
}


// Horizontal
//
// Change the layout of list group items from vertical (default) to horizontal.

@each \$breakpoint in map-keys(\$grid-breakpoints) {
  @include media-breakpoint-up(\$breakpoint) {
    \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);

    .list-group-horizontal#{\$infix} {
      flex-direction: row;

      > .list-group-item {
        &:first-child {
          @include border-bottom-start-radius(\$list-group-border-radius);
          @include border-top-end-radius(0);
        }

        &:last-child {
          @include border-top-end-radius(\$list-group-border-radius);
          @include border-bottom-start-radius(0);
        }

        &.active {
          margin-top: 0;
        }

        + .list-group-item {
          border-top-width: \$list-group-border-width;
          border-left-width: 0;

          &.active {
            margin-left: -\$list-group-border-width;
            border-left-width: \$list-group-border-width;
          }
        }
      }
    }
  }
}


// Flush list items
//
// Remove borders and border-radius to keep list group items edge-to-edge. Most
// useful within other components (e.g., cards).

.list-group-flush {
  @include border-radius(0);

  > .list-group-item {
    border-width: 0 0 \$list-group-border-width;

    &:last-child {
      border-bottom-width: 0;
    }
  }
}


// scss-docs-start list-group-modifiers
// List group contextual variants
//
// Add modifier classes to change text and background color on individual items.
// Organizationally, this must come after the `:hover` states.

@each \$state, \$value in \$theme-colors {
  \$list-group-background: shift-color(\$value, \$list-group-item-bg-scale);
  \$list-group-color: shift-color(\$value, \$list-group-item-color-scale);
  @if (contrast-ratio(\$list-group-background, \$list-group-color) < \$min-contrast-ratio) {
    \$list-group-color: mix(\$value, color-contrast(\$list-group-background), abs(\$list-group-item-color-scale));
  }

  @include list-group-item-variant(\$state, \$list-group-background, \$list-group-color);
}
// scss-docs-end list-group-modifiers
", "scss/bootstrap/scss/_list-group.scss", "/opt/project/templates/scss/bootstrap/scss/_list-group.scss");
    }
}
