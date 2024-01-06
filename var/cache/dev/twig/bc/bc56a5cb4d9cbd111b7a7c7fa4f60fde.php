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

/* scss/bootstrap/scss/_navbar.scss */
class __TwigTemplate_ac54d1f257955651aad0362390567743 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_navbar.scss"));

        // line 1
        echo "// Contents
//
// Navbar
// Navbar brand
// Navbar nav
// Navbar text
// Responsive navbar
// Navbar position
// Navbar themes


// Navbar
//
// Provide a static navbar from which we expand to create full-width, fixed, and
// other navbar variations.

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap; // allow us to do the line break for collapsing content
  align-items: center;
  justify-content: space-between; // space out brand from logo
  padding-top: \$navbar-padding-y;
  padding-right: \$navbar-padding-x; // default: null
  padding-bottom: \$navbar-padding-y;
  padding-left: \$navbar-padding-x; // default: null
  @include gradient-bg();

  // Because flex properties aren't inherited, we need to redeclare these first
  // few properties so that content nested within behave properly.
  // The `flex-wrap` property is inherited to simplify the expanded navbars
  %container-flex-properties {
    display: flex;
    flex-wrap: inherit;
    align-items: center;
    justify-content: space-between;
  }

  > .container,
  > .container-fluid {
    @extend %container-flex-properties;
  }

  @each \$breakpoint, \$container-max-width in \$container-max-widths {
    > .container#{breakpoint-infix(\$breakpoint, \$container-max-widths)} {
      @extend %container-flex-properties;
    }
  }
}


// Navbar brand
//
// Used for brand, project, or site names.

.navbar-brand {
  padding-top: \$navbar-brand-padding-y;
  padding-bottom: \$navbar-brand-padding-y;
  margin-right: \$navbar-brand-margin-end;
  @include font-size(\$navbar-brand-font-size);
  text-decoration: if(\$link-decoration == none, null, none);
  white-space: nowrap;

  &:hover,
  &:focus {
    text-decoration: if(\$link-hover-decoration == underline, none, null);
  }
}


// Navbar nav
//
// Custom navbar navigation (doesn't require `.nav`, but does make use of `.nav-link`).

.navbar-nav {
  display: flex;
  flex-direction: column; // cannot use `inherit` to get the `.navbar`s value
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;

  .nav-link {
    padding-right: 0;
    padding-left: 0;
  }

  .dropdown-menu {
    position: static;
  }
}


// Navbar text
//
//

.navbar-text {
  padding-top: \$nav-link-padding-y;
  padding-bottom: \$nav-link-padding-y;
}


// Responsive navbar
//
// Custom styles for responsive collapsing and toggling of navbar contents.
// Powered by the collapse Bootstrap JavaScript plugin.

// When collapsed, prevent the toggleable navbar contents from appearing in
// the default flexbox row orientation. Requires the use of `flex-wrap: wrap`
// on the `.navbar` parent.
.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  // For always expanded or extra full navbars, ensure content aligns itself
  // properly vertically. Can be easily overridden with flex utilities.
  align-items: center;
}

// Button for toggling the navbar when in its collapsed state
.navbar-toggler {
  padding: \$navbar-toggler-padding-y \$navbar-toggler-padding-x;
  @include font-size(\$navbar-toggler-font-size);
  line-height: 1;
  background-color: transparent; // remove default button style
  border: \$border-width solid transparent; // remove default button style
  @include border-radius(\$navbar-toggler-border-radius);
  @include transition(\$navbar-toggler-transition);

  &:hover {
    text-decoration: none;
  }

  &:focus {
    text-decoration: none;
    outline: 0;
    box-shadow: 0 0 0 \$navbar-toggler-focus-width;
  }
}

// Keep as a separate element so folks can easily override it with another icon
// or image file as needed.
.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}

.navbar-nav-scroll {
  max-height: var(--#{\$variable-prefix}scroll-height, 75vh);
  overflow-y: auto;
}

// scss-docs-start navbar-expand-loop
// Generate series of `.navbar-expand-*` responsive classes for configuring
// where your navbar collapses.
.navbar-expand {
  @each \$breakpoint in map-keys(\$grid-breakpoints) {
    \$next: breakpoint-next(\$breakpoint, \$grid-breakpoints);
    \$infix: breakpoint-infix(\$next, \$grid-breakpoints);

    // stylelint-disable-next-line scss/selector-no-union-class-name
    &#{\$infix} {
      @include media-breakpoint-up(\$next) {
        flex-wrap: nowrap;
        justify-content: flex-start;

        .navbar-nav {
          flex-direction: row;

          .dropdown-menu {
            position: absolute;
          }

          .nav-link {
            padding-right: \$navbar-nav-link-padding-x;
            padding-left: \$navbar-nav-link-padding-x;
          }
        }

        .navbar-nav-scroll {
          overflow: visible;
        }

        .navbar-collapse {
          display: flex !important; // stylelint-disable-line declaration-no-important
          flex-basis: auto;
        }

        .navbar-toggler {
          display: none;
        }
      }
    }
  }
}
// scss-docs-end navbar-expand-loop


// Navbar themes
//
// Styles for switching between navbars with light or dark background.

// Dark links against a light background
.navbar-light {
  .navbar-brand {
    color: \$navbar-light-brand-color;

    &:hover,
    &:focus {
      color: \$navbar-light-brand-hover-color;
    }
  }

  .navbar-nav {
    .nav-link {
      color: \$navbar-light-color;

      &:hover,
      &:focus {
        color: \$navbar-light-hover-color;
      }

      &.disabled {
        color: \$navbar-light-disabled-color;
      }
    }

    .show > .nav-link,
    .nav-link.active {
      color: \$navbar-light-active-color;
    }
  }

  .navbar-toggler {
    color: \$navbar-light-color;
    border-color: \$navbar-light-toggler-border-color;
  }

  .navbar-toggler-icon {
    background-image: escape-svg(\$navbar-light-toggler-icon-bg);
  }

  .navbar-text {
    color: \$navbar-light-color;

    a,
    a:hover,
    a:focus  {
      color: \$navbar-light-active-color;
    }
  }
}

// White links against a dark background
.navbar-dark {
  .navbar-brand {
    color: \$navbar-dark-brand-color;

    &:hover,
    &:focus {
      color: \$navbar-dark-brand-hover-color;
    }
  }

  .navbar-nav {
    .nav-link {
      color: \$navbar-dark-color;

      &:hover,
      &:focus {
        color: \$navbar-dark-hover-color;
      }

      &.disabled {
        color: \$navbar-dark-disabled-color;
      }
    }

    .show > .nav-link,
    .nav-link.active {
      color: \$navbar-dark-active-color;
    }
  }

  .navbar-toggler {
    color: \$navbar-dark-color;
    border-color: \$navbar-dark-toggler-border-color;
  }

  .navbar-toggler-icon {
    background-image: escape-svg(\$navbar-dark-toggler-icon-bg);
  }

  .navbar-text {
    color: \$navbar-dark-color;
    a,
    a:hover,
    a:focus {
      color: \$navbar-dark-active-color;
    }
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_navbar.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Contents
//
// Navbar
// Navbar brand
// Navbar nav
// Navbar text
// Responsive navbar
// Navbar position
// Navbar themes


// Navbar
//
// Provide a static navbar from which we expand to create full-width, fixed, and
// other navbar variations.

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap; // allow us to do the line break for collapsing content
  align-items: center;
  justify-content: space-between; // space out brand from logo
  padding-top: \$navbar-padding-y;
  padding-right: \$navbar-padding-x; // default: null
  padding-bottom: \$navbar-padding-y;
  padding-left: \$navbar-padding-x; // default: null
  @include gradient-bg();

  // Because flex properties aren't inherited, we need to redeclare these first
  // few properties so that content nested within behave properly.
  // The `flex-wrap` property is inherited to simplify the expanded navbars
  %container-flex-properties {
    display: flex;
    flex-wrap: inherit;
    align-items: center;
    justify-content: space-between;
  }

  > .container,
  > .container-fluid {
    @extend %container-flex-properties;
  }

  @each \$breakpoint, \$container-max-width in \$container-max-widths {
    > .container#{breakpoint-infix(\$breakpoint, \$container-max-widths)} {
      @extend %container-flex-properties;
    }
  }
}


// Navbar brand
//
// Used for brand, project, or site names.

.navbar-brand {
  padding-top: \$navbar-brand-padding-y;
  padding-bottom: \$navbar-brand-padding-y;
  margin-right: \$navbar-brand-margin-end;
  @include font-size(\$navbar-brand-font-size);
  text-decoration: if(\$link-decoration == none, null, none);
  white-space: nowrap;

  &:hover,
  &:focus {
    text-decoration: if(\$link-hover-decoration == underline, none, null);
  }
}


// Navbar nav
//
// Custom navbar navigation (doesn't require `.nav`, but does make use of `.nav-link`).

.navbar-nav {
  display: flex;
  flex-direction: column; // cannot use `inherit` to get the `.navbar`s value
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;

  .nav-link {
    padding-right: 0;
    padding-left: 0;
  }

  .dropdown-menu {
    position: static;
  }
}


// Navbar text
//
//

.navbar-text {
  padding-top: \$nav-link-padding-y;
  padding-bottom: \$nav-link-padding-y;
}


// Responsive navbar
//
// Custom styles for responsive collapsing and toggling of navbar contents.
// Powered by the collapse Bootstrap JavaScript plugin.

// When collapsed, prevent the toggleable navbar contents from appearing in
// the default flexbox row orientation. Requires the use of `flex-wrap: wrap`
// on the `.navbar` parent.
.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  // For always expanded or extra full navbars, ensure content aligns itself
  // properly vertically. Can be easily overridden with flex utilities.
  align-items: center;
}

// Button for toggling the navbar when in its collapsed state
.navbar-toggler {
  padding: \$navbar-toggler-padding-y \$navbar-toggler-padding-x;
  @include font-size(\$navbar-toggler-font-size);
  line-height: 1;
  background-color: transparent; // remove default button style
  border: \$border-width solid transparent; // remove default button style
  @include border-radius(\$navbar-toggler-border-radius);
  @include transition(\$navbar-toggler-transition);

  &:hover {
    text-decoration: none;
  }

  &:focus {
    text-decoration: none;
    outline: 0;
    box-shadow: 0 0 0 \$navbar-toggler-focus-width;
  }
}

// Keep as a separate element so folks can easily override it with another icon
// or image file as needed.
.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}

.navbar-nav-scroll {
  max-height: var(--#{\$variable-prefix}scroll-height, 75vh);
  overflow-y: auto;
}

// scss-docs-start navbar-expand-loop
// Generate series of `.navbar-expand-*` responsive classes for configuring
// where your navbar collapses.
.navbar-expand {
  @each \$breakpoint in map-keys(\$grid-breakpoints) {
    \$next: breakpoint-next(\$breakpoint, \$grid-breakpoints);
    \$infix: breakpoint-infix(\$next, \$grid-breakpoints);

    // stylelint-disable-next-line scss/selector-no-union-class-name
    &#{\$infix} {
      @include media-breakpoint-up(\$next) {
        flex-wrap: nowrap;
        justify-content: flex-start;

        .navbar-nav {
          flex-direction: row;

          .dropdown-menu {
            position: absolute;
          }

          .nav-link {
            padding-right: \$navbar-nav-link-padding-x;
            padding-left: \$navbar-nav-link-padding-x;
          }
        }

        .navbar-nav-scroll {
          overflow: visible;
        }

        .navbar-collapse {
          display: flex !important; // stylelint-disable-line declaration-no-important
          flex-basis: auto;
        }

        .navbar-toggler {
          display: none;
        }
      }
    }
  }
}
// scss-docs-end navbar-expand-loop


// Navbar themes
//
// Styles for switching between navbars with light or dark background.

// Dark links against a light background
.navbar-light {
  .navbar-brand {
    color: \$navbar-light-brand-color;

    &:hover,
    &:focus {
      color: \$navbar-light-brand-hover-color;
    }
  }

  .navbar-nav {
    .nav-link {
      color: \$navbar-light-color;

      &:hover,
      &:focus {
        color: \$navbar-light-hover-color;
      }

      &.disabled {
        color: \$navbar-light-disabled-color;
      }
    }

    .show > .nav-link,
    .nav-link.active {
      color: \$navbar-light-active-color;
    }
  }

  .navbar-toggler {
    color: \$navbar-light-color;
    border-color: \$navbar-light-toggler-border-color;
  }

  .navbar-toggler-icon {
    background-image: escape-svg(\$navbar-light-toggler-icon-bg);
  }

  .navbar-text {
    color: \$navbar-light-color;

    a,
    a:hover,
    a:focus  {
      color: \$navbar-light-active-color;
    }
  }
}

// White links against a dark background
.navbar-dark {
  .navbar-brand {
    color: \$navbar-dark-brand-color;

    &:hover,
    &:focus {
      color: \$navbar-dark-brand-hover-color;
    }
  }

  .navbar-nav {
    .nav-link {
      color: \$navbar-dark-color;

      &:hover,
      &:focus {
        color: \$navbar-dark-hover-color;
      }

      &.disabled {
        color: \$navbar-dark-disabled-color;
      }
    }

    .show > .nav-link,
    .nav-link.active {
      color: \$navbar-dark-active-color;
    }
  }

  .navbar-toggler {
    color: \$navbar-dark-color;
    border-color: \$navbar-dark-toggler-border-color;
  }

  .navbar-toggler-icon {
    background-image: escape-svg(\$navbar-dark-toggler-icon-bg);
  }

  .navbar-text {
    color: \$navbar-dark-color;
    a,
    a:hover,
    a:focus {
      color: \$navbar-dark-active-color;
    }
  }
}
", "scss/bootstrap/scss/_navbar.scss", "/opt/project/templates/scss/bootstrap/scss/_navbar.scss");
    }
}
