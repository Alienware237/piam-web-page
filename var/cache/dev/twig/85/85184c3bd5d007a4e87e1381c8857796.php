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

/* styles/bootstrap/scss/helpers/_position.scss */
class __TwigTemplate_f76653807f81faa78c321a3a4357cbd6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "styles/bootstrap/scss/helpers/_position.scss"));

        // line 1
        echo "// Shorthand

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: \$zindex-fixed;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: \$zindex-fixed;
}

// Responsive sticky top
@each \$breakpoint in map-keys(\$grid-breakpoints) {
  @include media-breakpoint-up(\$breakpoint) {
    \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);

    .sticky#{\$infix}-top {
      position: sticky;
      top: 0;
      z-index: \$zindex-sticky;
    }
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "styles/bootstrap/scss/helpers/_position.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Shorthand

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: \$zindex-fixed;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: \$zindex-fixed;
}

// Responsive sticky top
@each \$breakpoint in map-keys(\$grid-breakpoints) {
  @include media-breakpoint-up(\$breakpoint) {
    \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);

    .sticky#{\$infix}-top {
      position: sticky;
      top: 0;
      z-index: \$zindex-sticky;
    }
  }
}
", "styles/bootstrap/scss/helpers/_position.scss", "/opt/project/templates/styles/bootstrap/scss/helpers/_position.scss");
    }
}
