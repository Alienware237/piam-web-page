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

/* scss/bootstrap/scss/mixins/_gradients.scss */
class __TwigTemplate_dfa2ddfa7139b96364615f28fd910b7f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_gradients.scss"));

        // line 1
        echo "// Gradients

// scss-docs-start gradient-bg-mixin
@mixin gradient-bg(\$color: null) {
  background-color: \$color;

  @if \$enable-gradients {
    background-image: var(--#{\$variable-prefix}gradient);
  }
}
// scss-docs-end gradient-bg-mixin

// scss-docs-start gradient-mixins
// Horizontal gradient, from left to right
//
// Creates two color stops, start and end, by specifying a color and position for each color stop.
@mixin gradient-x(\$start-color: \$gray-700, \$end-color: \$gray-800, \$start-percent: 0%, \$end-percent: 100%) {
  background-image: linear-gradient(to right, \$start-color \$start-percent, \$end-color \$end-percent);
}

// Vertical gradient, from top to bottom
//
// Creates two color stops, start and end, by specifying a color and position for each color stop.
@mixin gradient-y(\$start-color: \$gray-700, \$end-color: \$gray-800, \$start-percent: null, \$end-percent: null) {
  background-image: linear-gradient(to bottom, \$start-color \$start-percent, \$end-color \$end-percent);
}

@mixin gradient-directional(\$start-color: \$gray-700, \$end-color: \$gray-800, \$deg: 45deg) {
  background-image: linear-gradient(\$deg, \$start-color, \$end-color);
}

@mixin gradient-x-three-colors(\$start-color: \$blue, \$mid-color: \$purple, \$color-stop: 50%, \$end-color: \$red) {
  background-image: linear-gradient(to right, \$start-color, \$mid-color \$color-stop, \$end-color);
}

@mixin gradient-y-three-colors(\$start-color: \$blue, \$mid-color: \$purple, \$color-stop: 50%, \$end-color: \$red) {
  background-image: linear-gradient(\$start-color, \$mid-color \$color-stop, \$end-color);
}

@mixin gradient-radial(\$inner-color: \$gray-700, \$outer-color: \$gray-800) {
  background-image: radial-gradient(circle, \$inner-color, \$outer-color);
}

@mixin gradient-striped(\$color: rgba(\$white, .15), \$angle: 45deg) {
  background-image: linear-gradient(\$angle, \$color 25%, transparent 25%, transparent 50%, \$color 50%, \$color 75%, transparent 75%, transparent);
}
// scss-docs-end gradient-mixins
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/mixins/_gradients.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Gradients

// scss-docs-start gradient-bg-mixin
@mixin gradient-bg(\$color: null) {
  background-color: \$color;

  @if \$enable-gradients {
    background-image: var(--#{\$variable-prefix}gradient);
  }
}
// scss-docs-end gradient-bg-mixin

// scss-docs-start gradient-mixins
// Horizontal gradient, from left to right
//
// Creates two color stops, start and end, by specifying a color and position for each color stop.
@mixin gradient-x(\$start-color: \$gray-700, \$end-color: \$gray-800, \$start-percent: 0%, \$end-percent: 100%) {
  background-image: linear-gradient(to right, \$start-color \$start-percent, \$end-color \$end-percent);
}

// Vertical gradient, from top to bottom
//
// Creates two color stops, start and end, by specifying a color and position for each color stop.
@mixin gradient-y(\$start-color: \$gray-700, \$end-color: \$gray-800, \$start-percent: null, \$end-percent: null) {
  background-image: linear-gradient(to bottom, \$start-color \$start-percent, \$end-color \$end-percent);
}

@mixin gradient-directional(\$start-color: \$gray-700, \$end-color: \$gray-800, \$deg: 45deg) {
  background-image: linear-gradient(\$deg, \$start-color, \$end-color);
}

@mixin gradient-x-three-colors(\$start-color: \$blue, \$mid-color: \$purple, \$color-stop: 50%, \$end-color: \$red) {
  background-image: linear-gradient(to right, \$start-color, \$mid-color \$color-stop, \$end-color);
}

@mixin gradient-y-three-colors(\$start-color: \$blue, \$mid-color: \$purple, \$color-stop: 50%, \$end-color: \$red) {
  background-image: linear-gradient(\$start-color, \$mid-color \$color-stop, \$end-color);
}

@mixin gradient-radial(\$inner-color: \$gray-700, \$outer-color: \$gray-800) {
  background-image: radial-gradient(circle, \$inner-color, \$outer-color);
}

@mixin gradient-striped(\$color: rgba(\$white, .15), \$angle: 45deg) {
  background-image: linear-gradient(\$angle, \$color 25%, transparent 25%, transparent 50%, \$color 50%, \$color 75%, transparent 75%, transparent);
}
// scss-docs-end gradient-mixins
", "scss/bootstrap/scss/mixins/_gradients.scss", "/opt/project/templates/scss/bootstrap/scss/mixins/_gradients.scss");
    }
}
