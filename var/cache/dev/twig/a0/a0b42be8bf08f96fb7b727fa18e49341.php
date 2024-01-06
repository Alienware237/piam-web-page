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

/* styles/bootstrap/scss/forms/_form-check.scss */
class __TwigTemplate_3c989bdad7f596a1de7593797445acba extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "styles/bootstrap/scss/forms/_form-check.scss"));

        // line 1
        echo "//
// Check/radio
//

.form-check {
  display: block;
  min-height: \$form-check-min-height;
  padding-left: \$form-check-padding-start;
  margin-bottom: \$form-check-margin-bottom;

  .form-check-input {
    float: left;
    margin-left: \$form-check-padding-start * -1;
  }
}

.form-check-input {
  width: \$form-check-input-width;
  height: \$form-check-input-width;
  margin-top: (\$line-height-base - \$form-check-input-width) / 2; // line-height minus check height
  vertical-align: top;
  background-color: \$form-check-input-bg;
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: \$form-check-input-border;
  appearance: none;
  color-adjust: exact; // Keep themed appearance for print
  @include transition(\$form-check-transition);

  &[type=\"checkbox\"] {
    @include border-radius(\$form-check-input-border-radius);
  }

  &[type=\"radio\"] {
    // stylelint-disable-next-line property-disallowed-list
    border-radius: \$form-check-radio-border-radius;
  }

  &:active {
    filter: \$form-check-input-active-filter;
  }

  &:focus {
    border-color: \$form-check-input-focus-border;
    outline: 0;
    box-shadow: \$form-check-input-focus-box-shadow;
  }

  &:checked {
    background-color: \$form-check-input-checked-bg-color;
    border-color: \$form-check-input-checked-border-color;

    &[type=\"checkbox\"] {
      @if \$enable-gradients {
        background-image: escape-svg(\$form-check-input-checked-bg-image), var(--#{\$variable-prefix}gradient);
      } @else {
        background-image: escape-svg(\$form-check-input-checked-bg-image);
      }
    }

    &[type=\"radio\"] {
      @if \$enable-gradients {
        background-image: escape-svg(\$form-check-radio-checked-bg-image), var(--#{\$variable-prefix}gradient);
      } @else {
        background-image: escape-svg(\$form-check-radio-checked-bg-image);
      }
    }
  }

  &[type=\"checkbox\"]:indeterminate {
    background-color: \$form-check-input-indeterminate-bg-color;
    border-color: \$form-check-input-indeterminate-border-color;

    @if \$enable-gradients {
      background-image: escape-svg(\$form-check-input-indeterminate-bg-image), var(--#{\$variable-prefix}gradient);
    } @else {
      background-image: escape-svg(\$form-check-input-indeterminate-bg-image);
    }
  }

  &:disabled {
    pointer-events: none;
    filter: none;
    opacity: \$form-check-input-disabled-opacity;
  }

  // Use disabled attribute in addition of :disabled pseudo-class
  // See: https://github.com/twbs/bootstrap/issues/28247
  &[disabled],
  &:disabled {
    ~ .form-check-label {
      opacity: \$form-check-label-disabled-opacity;
    }
  }
}

.form-check-label {
  color: \$form-check-label-color;
  cursor: \$form-check-label-cursor;
}

//
// Switch
//

.form-switch {
  padding-left: \$form-switch-padding-start;

  .form-check-input {
    width: \$form-switch-width;
    margin-left: \$form-switch-padding-start * -1;
    background-image: escape-svg(\$form-switch-bg-image);
    background-position: left center;
    @include border-radius(\$form-switch-border-radius);
    @include transition(\$form-switch-transition);

    &:focus {
      background-image: escape-svg(\$form-switch-focus-bg-image);
    }

    &:checked {
      background-position: \$form-switch-checked-bg-position;

      @if \$enable-gradients {
        background-image: escape-svg(\$form-switch-checked-bg-image), var(--#{\$variable-prefix}gradient);
      } @else {
        background-image: escape-svg(\$form-switch-checked-bg-image);
      }
    }
  }
}

.form-check-inline {
  display: inline-block;
  margin-right: \$form-check-inline-margin-end;
}

.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;

  &[disabled],
  &:disabled {
    + .btn {
      pointer-events: none;
      filter: none;
      opacity: \$form-check-btn-check-disabled-opacity;
    }
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "styles/bootstrap/scss/forms/_form-check.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//
// Check/radio
//

.form-check {
  display: block;
  min-height: \$form-check-min-height;
  padding-left: \$form-check-padding-start;
  margin-bottom: \$form-check-margin-bottom;

  .form-check-input {
    float: left;
    margin-left: \$form-check-padding-start * -1;
  }
}

.form-check-input {
  width: \$form-check-input-width;
  height: \$form-check-input-width;
  margin-top: (\$line-height-base - \$form-check-input-width) / 2; // line-height minus check height
  vertical-align: top;
  background-color: \$form-check-input-bg;
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: \$form-check-input-border;
  appearance: none;
  color-adjust: exact; // Keep themed appearance for print
  @include transition(\$form-check-transition);

  &[type=\"checkbox\"] {
    @include border-radius(\$form-check-input-border-radius);
  }

  &[type=\"radio\"] {
    // stylelint-disable-next-line property-disallowed-list
    border-radius: \$form-check-radio-border-radius;
  }

  &:active {
    filter: \$form-check-input-active-filter;
  }

  &:focus {
    border-color: \$form-check-input-focus-border;
    outline: 0;
    box-shadow: \$form-check-input-focus-box-shadow;
  }

  &:checked {
    background-color: \$form-check-input-checked-bg-color;
    border-color: \$form-check-input-checked-border-color;

    &[type=\"checkbox\"] {
      @if \$enable-gradients {
        background-image: escape-svg(\$form-check-input-checked-bg-image), var(--#{\$variable-prefix}gradient);
      } @else {
        background-image: escape-svg(\$form-check-input-checked-bg-image);
      }
    }

    &[type=\"radio\"] {
      @if \$enable-gradients {
        background-image: escape-svg(\$form-check-radio-checked-bg-image), var(--#{\$variable-prefix}gradient);
      } @else {
        background-image: escape-svg(\$form-check-radio-checked-bg-image);
      }
    }
  }

  &[type=\"checkbox\"]:indeterminate {
    background-color: \$form-check-input-indeterminate-bg-color;
    border-color: \$form-check-input-indeterminate-border-color;

    @if \$enable-gradients {
      background-image: escape-svg(\$form-check-input-indeterminate-bg-image), var(--#{\$variable-prefix}gradient);
    } @else {
      background-image: escape-svg(\$form-check-input-indeterminate-bg-image);
    }
  }

  &:disabled {
    pointer-events: none;
    filter: none;
    opacity: \$form-check-input-disabled-opacity;
  }

  // Use disabled attribute in addition of :disabled pseudo-class
  // See: https://github.com/twbs/bootstrap/issues/28247
  &[disabled],
  &:disabled {
    ~ .form-check-label {
      opacity: \$form-check-label-disabled-opacity;
    }
  }
}

.form-check-label {
  color: \$form-check-label-color;
  cursor: \$form-check-label-cursor;
}

//
// Switch
//

.form-switch {
  padding-left: \$form-switch-padding-start;

  .form-check-input {
    width: \$form-switch-width;
    margin-left: \$form-switch-padding-start * -1;
    background-image: escape-svg(\$form-switch-bg-image);
    background-position: left center;
    @include border-radius(\$form-switch-border-radius);
    @include transition(\$form-switch-transition);

    &:focus {
      background-image: escape-svg(\$form-switch-focus-bg-image);
    }

    &:checked {
      background-position: \$form-switch-checked-bg-position;

      @if \$enable-gradients {
        background-image: escape-svg(\$form-switch-checked-bg-image), var(--#{\$variable-prefix}gradient);
      } @else {
        background-image: escape-svg(\$form-switch-checked-bg-image);
      }
    }
  }
}

.form-check-inline {
  display: inline-block;
  margin-right: \$form-check-inline-margin-end;
}

.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;

  &[disabled],
  &:disabled {
    + .btn {
      pointer-events: none;
      filter: none;
      opacity: \$form-check-btn-check-disabled-opacity;
    }
  }
}
", "styles/bootstrap/scss/forms/_form-check.scss", "/opt/project/templates/styles/bootstrap/scss/forms/_form-check.scss");
    }
}
