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

/* scss/bootstrap/scss/_button-group.scss */
class __TwigTemplate_831bbcb773b5d631b6ceba5ec24b7102 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_button-group.scss"));

        // line 1
        echo "// Make the div behave like a button
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle; // match .btn alignment given font-size hack above

  > .btn {
    position: relative;
    flex: 1 1 auto;
  }

  // Bring the hover, focused, and \"active\" buttons to the front to overlay
  // the borders properly
  > .btn-check:checked + .btn,
  > .btn-check:focus + .btn,
  > .btn:hover,
  > .btn:focus,
  > .btn:active,
  > .btn.active {
    z-index: 1;
  }
}

// Optional: Group multiple button groups together for a toolbar
.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;

  .input-group {
    width: auto;
  }
}

.btn-group {
  // Prevent double borders when buttons are next to each other
  > .btn:not(:first-child),
  > .btn-group:not(:first-child) {
    margin-left: -\$btn-border-width;
  }

  // Reset rounded corners
  > .btn:not(:last-child):not(.dropdown-toggle),
  > .btn-group:not(:last-child) > .btn {
    @include border-end-radius(0);
  }

  // The left radius should be 0 if the button is:
  // - the \"third or more\" child
  // - the second child and the previous element isn't `.btn-check` (making it the first child visually)
  // - part of a btn-group which isn't the first child
  > .btn:nth-child(n + 3),
  > :not(.btn-check) + .btn,
  > .btn-group:not(:first-child) > .btn {
    @include border-start-radius(0);
  }
}

// Sizing
//
// Remix the default button sizing classes into new ones for easier manipulation.

.btn-group-sm > .btn { @extend .btn-sm; }
.btn-group-lg > .btn { @extend .btn-lg; }


//
// Split button dropdowns
//

.dropdown-toggle-split {
  padding-right: \$btn-padding-x * .75;
  padding-left: \$btn-padding-x * .75;

  &::after,
  .dropup &::after,
  .dropend &::after {
    margin-left: 0;
  }

  .dropstart &::before {
    margin-right: 0;
  }
}

.btn-sm + .dropdown-toggle-split {
  padding-right: \$btn-padding-x-sm * .75;
  padding-left: \$btn-padding-x-sm * .75;
}

.btn-lg + .dropdown-toggle-split {
  padding-right: \$btn-padding-x-lg * .75;
  padding-left: \$btn-padding-x-lg * .75;
}


// The clickable button for toggling the menu
// Set the same inset shadow as the :active state
.btn-group.show .dropdown-toggle {
  @include box-shadow(\$btn-active-box-shadow);

  // Show no shadow for `.btn-link` since it has no other button styles.
  &.btn-link {
    @include box-shadow(none);
  }
}


//
// Vertical button groups
//

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;

  > .btn,
  > .btn-group {
    width: 100%;
  }

  > .btn:not(:first-child),
  > .btn-group:not(:first-child) {
    margin-top: -\$btn-border-width;
  }

  // Reset rounded corners
  > .btn:not(:last-child):not(.dropdown-toggle),
  > .btn-group:not(:last-child) > .btn {
    @include border-bottom-radius(0);
  }

  > .btn ~ .btn,
  > .btn-group:not(:first-child) > .btn {
    @include border-top-radius(0);
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_button-group.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Make the div behave like a button
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle; // match .btn alignment given font-size hack above

  > .btn {
    position: relative;
    flex: 1 1 auto;
  }

  // Bring the hover, focused, and \"active\" buttons to the front to overlay
  // the borders properly
  > .btn-check:checked + .btn,
  > .btn-check:focus + .btn,
  > .btn:hover,
  > .btn:focus,
  > .btn:active,
  > .btn.active {
    z-index: 1;
  }
}

// Optional: Group multiple button groups together for a toolbar
.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;

  .input-group {
    width: auto;
  }
}

.btn-group {
  // Prevent double borders when buttons are next to each other
  > .btn:not(:first-child),
  > .btn-group:not(:first-child) {
    margin-left: -\$btn-border-width;
  }

  // Reset rounded corners
  > .btn:not(:last-child):not(.dropdown-toggle),
  > .btn-group:not(:last-child) > .btn {
    @include border-end-radius(0);
  }

  // The left radius should be 0 if the button is:
  // - the \"third or more\" child
  // - the second child and the previous element isn't `.btn-check` (making it the first child visually)
  // - part of a btn-group which isn't the first child
  > .btn:nth-child(n + 3),
  > :not(.btn-check) + .btn,
  > .btn-group:not(:first-child) > .btn {
    @include border-start-radius(0);
  }
}

// Sizing
//
// Remix the default button sizing classes into new ones for easier manipulation.

.btn-group-sm > .btn { @extend .btn-sm; }
.btn-group-lg > .btn { @extend .btn-lg; }


//
// Split button dropdowns
//

.dropdown-toggle-split {
  padding-right: \$btn-padding-x * .75;
  padding-left: \$btn-padding-x * .75;

  &::after,
  .dropup &::after,
  .dropend &::after {
    margin-left: 0;
  }

  .dropstart &::before {
    margin-right: 0;
  }
}

.btn-sm + .dropdown-toggle-split {
  padding-right: \$btn-padding-x-sm * .75;
  padding-left: \$btn-padding-x-sm * .75;
}

.btn-lg + .dropdown-toggle-split {
  padding-right: \$btn-padding-x-lg * .75;
  padding-left: \$btn-padding-x-lg * .75;
}


// The clickable button for toggling the menu
// Set the same inset shadow as the :active state
.btn-group.show .dropdown-toggle {
  @include box-shadow(\$btn-active-box-shadow);

  // Show no shadow for `.btn-link` since it has no other button styles.
  &.btn-link {
    @include box-shadow(none);
  }
}


//
// Vertical button groups
//

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;

  > .btn,
  > .btn-group {
    width: 100%;
  }

  > .btn:not(:first-child),
  > .btn-group:not(:first-child) {
    margin-top: -\$btn-border-width;
  }

  // Reset rounded corners
  > .btn:not(:last-child):not(.dropdown-toggle),
  > .btn-group:not(:last-child) > .btn {
    @include border-bottom-radius(0);
  }

  > .btn ~ .btn,
  > .btn-group:not(:first-child) > .btn {
    @include border-top-radius(0);
  }
}
", "scss/bootstrap/scss/_button-group.scss", "/opt/project/templates/scss/bootstrap/scss/_button-group.scss");
    }
}