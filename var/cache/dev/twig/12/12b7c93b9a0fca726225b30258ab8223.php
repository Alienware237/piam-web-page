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

/* scss/bootstrap/scss/mixins/_box-shadow.scss */
class __TwigTemplate_e62d1f6186f4facc4e330e98b9eef6a1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_box-shadow.scss"));

        // line 1
        echo "@mixin box-shadow(\$shadow...) {
  @if \$enable-shadows {
    \$result: ();

    @each \$value in \$shadow {
      @if \$value != null {
        \$result: append(\$result, \$value, \"comma\");
      }
      @if \$value == none and length(\$shadow) > 1 {
        @warn \"The keyword 'none' must be used as a single argument.\";
      }
    }

    @if (length(\$result) > 0) {
      box-shadow: \$result;
    }
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/mixins/_box-shadow.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@mixin box-shadow(\$shadow...) {
  @if \$enable-shadows {
    \$result: ();

    @each \$value in \$shadow {
      @if \$value != null {
        \$result: append(\$result, \$value, \"comma\");
      }
      @if \$value == none and length(\$shadow) > 1 {
        @warn \"The keyword 'none' must be used as a single argument.\";
      }
    }

    @if (length(\$result) > 0) {
      box-shadow: \$result;
    }
  }
}
", "scss/bootstrap/scss/mixins/_box-shadow.scss", "/opt/project/templates/scss/bootstrap/scss/mixins/_box-shadow.scss");
    }
}
