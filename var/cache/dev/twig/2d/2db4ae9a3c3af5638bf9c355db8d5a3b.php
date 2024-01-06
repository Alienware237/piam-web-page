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

/* styles/bootstrap/scss/mixins/_visually-hidden.scss */
class __TwigTemplate_1a754732f243020c0c0cb829eae207be extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "styles/bootstrap/scss/mixins/_visually-hidden.scss"));

        // line 1
        echo "// stylelint-disable declaration-no-important

// Hide content visually while keeping it accessible to assistive technologies
//
// See: https://www.a11yproject.com/posts/2013-01-11-how-to-hide-content/
// See: https://hugogiraudel.com/2016/10/13/css-hide-and-seek/

@mixin visually-hidden() {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important; // Fix for https://github.com/twbs/bootstrap/issues/25686
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}

// Use to only display content when it's focused, or one of its child elements is focused
// (i.e. when focus is within the element/container that the class was applied to)
//
// Useful for \"Skip to main content\" links; see https://www.w3.org/TR/2013/NOTE-WCAG20-TECHS-20130905/G1

@mixin visually-hidden-focusable() {
  &:not(:focus):not(:focus-within) {
    @include visually-hidden();
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "styles/bootstrap/scss/mixins/_visually-hidden.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// stylelint-disable declaration-no-important

// Hide content visually while keeping it accessible to assistive technologies
//
// See: https://www.a11yproject.com/posts/2013-01-11-how-to-hide-content/
// See: https://hugogiraudel.com/2016/10/13/css-hide-and-seek/

@mixin visually-hidden() {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important; // Fix for https://github.com/twbs/bootstrap/issues/25686
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}

// Use to only display content when it's focused, or one of its child elements is focused
// (i.e. when focus is within the element/container that the class was applied to)
//
// Useful for \"Skip to main content\" links; see https://www.w3.org/TR/2013/NOTE-WCAG20-TECHS-20130905/G1

@mixin visually-hidden-focusable() {
  &:not(:focus):not(:focus-within) {
    @include visually-hidden();
  }
}
", "styles/bootstrap/scss/mixins/_visually-hidden.scss", "/opt/project/templates/styles/bootstrap/scss/mixins/_visually-hidden.scss");
    }
}
