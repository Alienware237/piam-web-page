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

/* scss/bootstrap/scss/_grid.scss */
class __TwigTemplate_43facad8f524a66c2cc4519da5c68892 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_grid.scss"));

        // line 1
        echo "// Row
//
// Rows contain your columns.

@if \$enable-grid-classes {
  .row {
    @include make-row();

    > * {
      @include make-col-ready();
    }
  }
}


// Columns
//
// Common styles for small and large grid columns

@if \$enable-grid-classes {
  @include make-grid-columns();
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_grid.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Row
//
// Rows contain your columns.

@if \$enable-grid-classes {
  .row {
    @include make-row();

    > * {
      @include make-col-ready();
    }
  }
}


// Columns
//
// Common styles for small and large grid columns

@if \$enable-grid-classes {
  @include make-grid-columns();
}
", "scss/bootstrap/scss/_grid.scss", "/opt/project/templates/scss/bootstrap/scss/_grid.scss");
    }
}
