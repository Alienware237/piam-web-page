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

/* scss/bootstrap/scss/_spinners.scss */
class __TwigTemplate_604bc637a715f725e7af051ef19cdd2d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_spinners.scss"));

        // line 1
        echo "//
// Rotating border
//

// scss-docs-start spinner-border-keyframes
@keyframes spinner-border {
  to { transform: rotate(360deg) #{\"/* rtl:ignore */\"}; }
}
// scss-docs-end spinner-border-keyframes

.spinner-border {
  display: inline-block;
  width: \$spinner-width;
  height: \$spinner-height;
  vertical-align: \$spinner-vertical-align;
  border: \$spinner-border-width solid currentColor;
  border-right-color: transparent;
  // stylelint-disable-next-line property-disallowed-list
  border-radius: 50%;
  animation: \$spinner-animation-speed linear infinite spinner-border;
}

.spinner-border-sm {
  width: \$spinner-width-sm;
  height: \$spinner-height-sm;
  border-width: \$spinner-border-width-sm;
}

//
// Growing circle
//

// scss-docs-start spinner-grow-keyframes
@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}
// scss-docs-end spinner-grow-keyframes

.spinner-grow {
  display: inline-block;
  width: \$spinner-width;
  height: \$spinner-height;
  vertical-align: \$spinner-vertical-align;
  background-color: currentColor;
  // stylelint-disable-next-line property-disallowed-list
  border-radius: 50%;
  opacity: 0;
  animation: \$spinner-animation-speed linear infinite spinner-grow;
}

.spinner-grow-sm {
  width: \$spinner-width-sm;
  height: \$spinner-height-sm;
}

@if \$enable-reduced-motion {
  @media (prefers-reduced-motion: reduce) {
    .spinner-border,
    .spinner-grow {
      animation-duration: \$spinner-animation-speed * 2;
    }
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_spinners.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//
// Rotating border
//

// scss-docs-start spinner-border-keyframes
@keyframes spinner-border {
  to { transform: rotate(360deg) #{\"/* rtl:ignore */\"}; }
}
// scss-docs-end spinner-border-keyframes

.spinner-border {
  display: inline-block;
  width: \$spinner-width;
  height: \$spinner-height;
  vertical-align: \$spinner-vertical-align;
  border: \$spinner-border-width solid currentColor;
  border-right-color: transparent;
  // stylelint-disable-next-line property-disallowed-list
  border-radius: 50%;
  animation: \$spinner-animation-speed linear infinite spinner-border;
}

.spinner-border-sm {
  width: \$spinner-width-sm;
  height: \$spinner-height-sm;
  border-width: \$spinner-border-width-sm;
}

//
// Growing circle
//

// scss-docs-start spinner-grow-keyframes
@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}
// scss-docs-end spinner-grow-keyframes

.spinner-grow {
  display: inline-block;
  width: \$spinner-width;
  height: \$spinner-height;
  vertical-align: \$spinner-vertical-align;
  background-color: currentColor;
  // stylelint-disable-next-line property-disallowed-list
  border-radius: 50%;
  opacity: 0;
  animation: \$spinner-animation-speed linear infinite spinner-grow;
}

.spinner-grow-sm {
  width: \$spinner-width-sm;
  height: \$spinner-height-sm;
}

@if \$enable-reduced-motion {
  @media (prefers-reduced-motion: reduce) {
    .spinner-border,
    .spinner-grow {
      animation-duration: \$spinner-animation-speed * 2;
    }
  }
}
", "scss/bootstrap/scss/_spinners.scss", "/opt/project/templates/scss/bootstrap/scss/_spinners.scss");
    }
}
