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

/* scss/bootstrap/scss/_badge.scss */
class __TwigTemplate_57428a1c4bc93f4fd9101dce4cdeeb76 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_badge.scss"));

        // line 1
        echo "// Base class
//
// Requires one of the contextual, color modifier classes for `color` and
// `background-color`.

.badge {
  display: inline-block;
  padding: \$badge-padding-y \$badge-padding-x;
  @include font-size(\$badge-font-size);
  font-weight: \$badge-font-weight;
  line-height: 1;
  color: \$badge-color;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  @include border-radius(\$badge-border-radius);
  @include gradient-bg();

  // Empty badges collapse automatically
  &:empty {
    display: none;
  }
}

// Quick fix for badges in buttons
.btn .badge {
  position: relative;
  top: -1px;
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_badge.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Base class
//
// Requires one of the contextual, color modifier classes for `color` and
// `background-color`.

.badge {
  display: inline-block;
  padding: \$badge-padding-y \$badge-padding-x;
  @include font-size(\$badge-font-size);
  font-weight: \$badge-font-weight;
  line-height: 1;
  color: \$badge-color;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  @include border-radius(\$badge-border-radius);
  @include gradient-bg();

  // Empty badges collapse automatically
  &:empty {
    display: none;
  }
}

// Quick fix for badges in buttons
.btn .badge {
  position: relative;
  top: -1px;
}
", "scss/bootstrap/scss/_badge.scss", "/opt/project/templates/scss/bootstrap/scss/_badge.scss");
    }
}
