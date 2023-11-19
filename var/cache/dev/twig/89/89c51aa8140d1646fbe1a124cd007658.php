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

/* scss/bootstrap/scss/_breadcrumb.scss */
class __TwigTemplate_0571a39148c7272387302736a8053057 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_breadcrumb.scss"));

        // line 1
        echo ".breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: \$breadcrumb-padding-y \$breadcrumb-padding-x;
  margin-bottom: \$breadcrumb-margin-bottom;
  @include font-size(\$breadcrumb-font-size);
  list-style: none;
  background-color: \$breadcrumb-bg;
  @include border-radius(\$breadcrumb-border-radius);
}

.breadcrumb-item {
  // The separator between breadcrumbs (by default, a forward-slash: \"/\")
  + .breadcrumb-item {
    padding-left: \$breadcrumb-item-padding-x;

    &::before {
      float: left; // Suppress inline spacings and underlining of the separator
      padding-right: \$breadcrumb-item-padding-x;
      color: \$breadcrumb-divider-color;
      content: var(--#{\$variable-prefix}breadcrumb-divider, escape-svg(\$breadcrumb-divider)) #{\"/* rtl:\"} var(--#{\$variable-prefix}breadcrumb-divider, escape-svg(\$breadcrumb-divider-flipped)) #{\"*/\"};
    }
  }

  &.active {
    color: \$breadcrumb-active-color;
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_breadcrumb.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: \$breadcrumb-padding-y \$breadcrumb-padding-x;
  margin-bottom: \$breadcrumb-margin-bottom;
  @include font-size(\$breadcrumb-font-size);
  list-style: none;
  background-color: \$breadcrumb-bg;
  @include border-radius(\$breadcrumb-border-radius);
}

.breadcrumb-item {
  // The separator between breadcrumbs (by default, a forward-slash: \"/\")
  + .breadcrumb-item {
    padding-left: \$breadcrumb-item-padding-x;

    &::before {
      float: left; // Suppress inline spacings and underlining of the separator
      padding-right: \$breadcrumb-item-padding-x;
      color: \$breadcrumb-divider-color;
      content: var(--#{\$variable-prefix}breadcrumb-divider, escape-svg(\$breadcrumb-divider)) #{\"/* rtl:\"} var(--#{\$variable-prefix}breadcrumb-divider, escape-svg(\$breadcrumb-divider-flipped)) #{\"*/\"};
    }
  }

  &.active {
    color: \$breadcrumb-active-color;
  }
}
", "scss/bootstrap/scss/_breadcrumb.scss", "/opt/project/templates/scss/bootstrap/scss/_breadcrumb.scss");
    }
}
