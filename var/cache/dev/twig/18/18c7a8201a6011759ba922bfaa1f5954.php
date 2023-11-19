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

/* scss/bootstrap/scss/forms/_form-range.scss */
class __TwigTemplate_d919eaa0e8f766d85bc33189ca61dbb5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/forms/_form-range.scss"));

        // line 1
        echo "// Range
//
// Style range inputs the same across browsers. Vendor-specific rules for pseudo
// elements cannot be mixed. As such, there are no shared styles for focus or
// active states on prefixed selectors.

.form-range {
  width: 100%;
  height: add(\$form-range-thumb-height, \$form-range-thumb-focus-box-shadow-width * 2);
  padding: 0; // Need to reset padding
  background-color: transparent;
  appearance: none;

  &:focus {
    outline: 0;

    // Pseudo-elements must be split across multiple rulesets to have an effect.
    // No box-shadow() mixin for focus accessibility.
    &::-webkit-slider-thumb { box-shadow: \$form-range-thumb-focus-box-shadow; }
    &::-moz-range-thumb     { box-shadow: \$form-range-thumb-focus-box-shadow; }
  }

  &::-moz-focus-outer {
    border: 0;
  }

  &::-webkit-slider-thumb {
    width: \$form-range-thumb-width;
    height: \$form-range-thumb-height;
    margin-top: (\$form-range-track-height - \$form-range-thumb-height) / 2; // Webkit specific
    @include gradient-bg(\$form-range-thumb-bg);
    border: \$form-range-thumb-border;
    @include border-radius(\$form-range-thumb-border-radius);
    @include box-shadow(\$form-range-thumb-box-shadow);
    @include transition(\$form-range-thumb-transition);
    appearance: none;

    &:active {
      @include gradient-bg(\$form-range-thumb-active-bg);
    }
  }

  &::-webkit-slider-runnable-track {
    width: \$form-range-track-width;
    height: \$form-range-track-height;
    color: transparent; // Why?
    cursor: \$form-range-track-cursor;
    background-color: \$form-range-track-bg;
    border-color: transparent;
    @include border-radius(\$form-range-track-border-radius);
    @include box-shadow(\$form-range-track-box-shadow);
  }

  &::-moz-range-thumb {
    width: \$form-range-thumb-width;
    height: \$form-range-thumb-height;
    @include gradient-bg(\$form-range-thumb-bg);
    border: \$form-range-thumb-border;
    @include border-radius(\$form-range-thumb-border-radius);
    @include box-shadow(\$form-range-thumb-box-shadow);
    @include transition(\$form-range-thumb-transition);
    appearance: none;

    &:active {
      @include gradient-bg(\$form-range-thumb-active-bg);
    }
  }

  &::-moz-range-track {
    width: \$form-range-track-width;
    height: \$form-range-track-height;
    color: transparent;
    cursor: \$form-range-track-cursor;
    background-color: \$form-range-track-bg;
    border-color: transparent; // Firefox specific?
    @include border-radius(\$form-range-track-border-radius);
    @include box-shadow(\$form-range-track-box-shadow);
  }

  &:disabled {
    pointer-events: none;

    &::-webkit-slider-thumb {
      background-color: \$form-range-thumb-disabled-bg;
    }

    &::-moz-range-thumb {
      background-color: \$form-range-thumb-disabled-bg;
    }
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/forms/_form-range.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Range
//
// Style range inputs the same across browsers. Vendor-specific rules for pseudo
// elements cannot be mixed. As such, there are no shared styles for focus or
// active states on prefixed selectors.

.form-range {
  width: 100%;
  height: add(\$form-range-thumb-height, \$form-range-thumb-focus-box-shadow-width * 2);
  padding: 0; // Need to reset padding
  background-color: transparent;
  appearance: none;

  &:focus {
    outline: 0;

    // Pseudo-elements must be split across multiple rulesets to have an effect.
    // No box-shadow() mixin for focus accessibility.
    &::-webkit-slider-thumb { box-shadow: \$form-range-thumb-focus-box-shadow; }
    &::-moz-range-thumb     { box-shadow: \$form-range-thumb-focus-box-shadow; }
  }

  &::-moz-focus-outer {
    border: 0;
  }

  &::-webkit-slider-thumb {
    width: \$form-range-thumb-width;
    height: \$form-range-thumb-height;
    margin-top: (\$form-range-track-height - \$form-range-thumb-height) / 2; // Webkit specific
    @include gradient-bg(\$form-range-thumb-bg);
    border: \$form-range-thumb-border;
    @include border-radius(\$form-range-thumb-border-radius);
    @include box-shadow(\$form-range-thumb-box-shadow);
    @include transition(\$form-range-thumb-transition);
    appearance: none;

    &:active {
      @include gradient-bg(\$form-range-thumb-active-bg);
    }
  }

  &::-webkit-slider-runnable-track {
    width: \$form-range-track-width;
    height: \$form-range-track-height;
    color: transparent; // Why?
    cursor: \$form-range-track-cursor;
    background-color: \$form-range-track-bg;
    border-color: transparent;
    @include border-radius(\$form-range-track-border-radius);
    @include box-shadow(\$form-range-track-box-shadow);
  }

  &::-moz-range-thumb {
    width: \$form-range-thumb-width;
    height: \$form-range-thumb-height;
    @include gradient-bg(\$form-range-thumb-bg);
    border: \$form-range-thumb-border;
    @include border-radius(\$form-range-thumb-border-radius);
    @include box-shadow(\$form-range-thumb-box-shadow);
    @include transition(\$form-range-thumb-transition);
    appearance: none;

    &:active {
      @include gradient-bg(\$form-range-thumb-active-bg);
    }
  }

  &::-moz-range-track {
    width: \$form-range-track-width;
    height: \$form-range-track-height;
    color: transparent;
    cursor: \$form-range-track-cursor;
    background-color: \$form-range-track-bg;
    border-color: transparent; // Firefox specific?
    @include border-radius(\$form-range-track-border-radius);
    @include box-shadow(\$form-range-track-box-shadow);
  }

  &:disabled {
    pointer-events: none;

    &::-webkit-slider-thumb {
      background-color: \$form-range-thumb-disabled-bg;
    }

    &::-moz-range-thumb {
      background-color: \$form-range-thumb-disabled-bg;
    }
  }
}
", "scss/bootstrap/scss/forms/_form-range.scss", "/opt/project/templates/scss/bootstrap/scss/forms/_form-range.scss");
    }
}
