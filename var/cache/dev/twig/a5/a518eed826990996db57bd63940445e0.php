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

/* scss/bootstrap/scss/_progress.scss */
class __TwigTemplate_fa805687c335fa39eb465d670322c781 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_progress.scss"));

        // line 1
        echo "// Disable animation if transitions are disabled

// scss-docs-start progress-keyframes
@if \$enable-transitions {
  @keyframes progress-bar-stripes {
    0% { background-position-x: \$progress-height; }
  }
}
// scss-docs-end progress-keyframes

.progress {
  display: flex;
  height: \$progress-height;
  overflow: hidden; // force rounded corners by cropping it
  @include font-size(\$progress-font-size);
  background-color: \$progress-bg;
  @include border-radius(\$progress-border-radius);
  @include box-shadow(\$progress-box-shadow);
}

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: \$progress-bar-color;
  text-align: center;
  white-space: nowrap;
  background-color: \$progress-bar-bg;
  @include transition(\$progress-bar-transition);
}

.progress-bar-striped {
  @include gradient-striped();
  background-size: \$progress-height \$progress-height;
}

@if \$enable-transitions {
  .progress-bar-animated {
    animation: \$progress-bar-animation-timing progress-bar-stripes;

    @if \$enable-reduced-motion {
      @media (prefers-reduced-motion: reduce) {
        animation: none;
      }
    }
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_progress.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Disable animation if transitions are disabled

// scss-docs-start progress-keyframes
@if \$enable-transitions {
  @keyframes progress-bar-stripes {
    0% { background-position-x: \$progress-height; }
  }
}
// scss-docs-end progress-keyframes

.progress {
  display: flex;
  height: \$progress-height;
  overflow: hidden; // force rounded corners by cropping it
  @include font-size(\$progress-font-size);
  background-color: \$progress-bg;
  @include border-radius(\$progress-border-radius);
  @include box-shadow(\$progress-box-shadow);
}

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: \$progress-bar-color;
  text-align: center;
  white-space: nowrap;
  background-color: \$progress-bar-bg;
  @include transition(\$progress-bar-transition);
}

.progress-bar-striped {
  @include gradient-striped();
  background-size: \$progress-height \$progress-height;
}

@if \$enable-transitions {
  .progress-bar-animated {
    animation: \$progress-bar-animation-timing progress-bar-stripes;

    @if \$enable-reduced-motion {
      @media (prefers-reduced-motion: reduce) {
        animation: none;
      }
    }
  }
}
", "scss/bootstrap/scss/_progress.scss", "/opt/project/templates/scss/bootstrap/scss/_progress.scss");
    }
}
