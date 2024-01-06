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

/* scss/bootstrap/scss/_buttons.scss */
class __TwigTemplate_2faa44eef0dad59a9718408146bdece1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_buttons.scss"));

        // line 1
        echo "//
// Base styles
//

.btn {
  display: inline-block;
  font-family: \$btn-font-family;
  font-weight: \$btn-font-weight;
  line-height: \$btn-line-height;
  color: \$body-color;
  text-align: center;
  text-decoration: if(\$link-decoration == none, null, none);
  white-space: \$btn-white-space;
  vertical-align: middle;
  cursor: if(\$enable-button-pointers, pointer, null);
  user-select: none;
  background-color: transparent;
  border: \$btn-border-width solid transparent;
  @include button-size(\$btn-padding-y, \$btn-padding-x, \$btn-font-size, \$btn-border-radius);
  @include transition(\$btn-transition);

  &:hover {
    color: \$body-color;
    text-decoration: if(\$link-hover-decoration == underline, none, null);
  }

  .btn-check:focus + &,
  &:focus {
    outline: 0;
    box-shadow: \$btn-focus-box-shadow;
  }

  .btn-check:checked + &,
  .btn-check:active + &,
  &:active,
  &.active {
    @include box-shadow(\$btn-active-box-shadow);

    &:focus {
      @include box-shadow(\$btn-focus-box-shadow, \$btn-active-box-shadow);
    }
  }

  &:disabled,
  &.disabled,
  fieldset:disabled & {
    pointer-events: none;
    opacity: \$btn-disabled-opacity;
    @include box-shadow(none);
  }
}


//
// Alternate buttons
//

// scss-docs-start btn-variant-loops
@each \$color, \$value in \$theme-colors {
  .btn-#{\$color} {
    @include button-variant(\$value, \$value);
  }
}

@each \$color, \$value in \$theme-colors {
  .btn-outline-#{\$color} {
    @include button-outline-variant(\$value);
  }
}
// scss-docs-end btn-variant-loops


//
// Link buttons
//

// Make a button look and behave like a link
.btn-link {
  font-weight: \$font-weight-normal;
  color: \$btn-link-color;
  text-decoration: \$link-decoration;

  &:hover {
    color: \$btn-link-hover-color;
    text-decoration: \$link-hover-decoration;
  }

  &:focus {
    text-decoration: \$link-hover-decoration;
  }

  &:disabled,
  &.disabled {
    color: \$btn-link-disabled-color;
  }

  // No need for an active state here
}


//
// Button Sizes
//

.btn-lg {
  @include button-size(\$btn-padding-y-lg, \$btn-padding-x-lg, \$btn-font-size-lg, \$btn-border-radius-lg);
}

.btn-sm {
  @include button-size(\$btn-padding-y-sm, \$btn-padding-x-sm, \$btn-font-size-sm, \$btn-border-radius-sm);
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_buttons.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//
// Base styles
//

.btn {
  display: inline-block;
  font-family: \$btn-font-family;
  font-weight: \$btn-font-weight;
  line-height: \$btn-line-height;
  color: \$body-color;
  text-align: center;
  text-decoration: if(\$link-decoration == none, null, none);
  white-space: \$btn-white-space;
  vertical-align: middle;
  cursor: if(\$enable-button-pointers, pointer, null);
  user-select: none;
  background-color: transparent;
  border: \$btn-border-width solid transparent;
  @include button-size(\$btn-padding-y, \$btn-padding-x, \$btn-font-size, \$btn-border-radius);
  @include transition(\$btn-transition);

  &:hover {
    color: \$body-color;
    text-decoration: if(\$link-hover-decoration == underline, none, null);
  }

  .btn-check:focus + &,
  &:focus {
    outline: 0;
    box-shadow: \$btn-focus-box-shadow;
  }

  .btn-check:checked + &,
  .btn-check:active + &,
  &:active,
  &.active {
    @include box-shadow(\$btn-active-box-shadow);

    &:focus {
      @include box-shadow(\$btn-focus-box-shadow, \$btn-active-box-shadow);
    }
  }

  &:disabled,
  &.disabled,
  fieldset:disabled & {
    pointer-events: none;
    opacity: \$btn-disabled-opacity;
    @include box-shadow(none);
  }
}


//
// Alternate buttons
//

// scss-docs-start btn-variant-loops
@each \$color, \$value in \$theme-colors {
  .btn-#{\$color} {
    @include button-variant(\$value, \$value);
  }
}

@each \$color, \$value in \$theme-colors {
  .btn-outline-#{\$color} {
    @include button-outline-variant(\$value);
  }
}
// scss-docs-end btn-variant-loops


//
// Link buttons
//

// Make a button look and behave like a link
.btn-link {
  font-weight: \$font-weight-normal;
  color: \$btn-link-color;
  text-decoration: \$link-decoration;

  &:hover {
    color: \$btn-link-hover-color;
    text-decoration: \$link-hover-decoration;
  }

  &:focus {
    text-decoration: \$link-hover-decoration;
  }

  &:disabled,
  &.disabled {
    color: \$btn-link-disabled-color;
  }

  // No need for an active state here
}


//
// Button Sizes
//

.btn-lg {
  @include button-size(\$btn-padding-y-lg, \$btn-padding-x-lg, \$btn-font-size-lg, \$btn-border-radius-lg);
}

.btn-sm {
  @include button-size(\$btn-padding-y-sm, \$btn-padding-x-sm, \$btn-font-size-sm, \$btn-border-radius-sm);
}
", "scss/bootstrap/scss/_buttons.scss", "/opt/project/templates/scss/bootstrap/scss/_buttons.scss");
    }
}
