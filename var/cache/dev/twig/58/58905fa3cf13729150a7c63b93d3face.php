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

/* styles/bootstrap/scss/mixins/_list-group.scss */
class __TwigTemplate_528c9b8bbca431d0aef1ae071105886c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "styles/bootstrap/scss/mixins/_list-group.scss"));

        // line 1
        echo "// List Groups

// scss-docs-start list-group-mixin
@mixin list-group-item-variant(\$state, \$background, \$color) {
  .list-group-item-#{\$state} {
    color: \$color;
    background-color: \$background;

    &.list-group-item-action {
      &:hover,
      &:focus {
        color: \$color;
        background-color: shade-color(\$background, 10%);
      }

      &.active {
        color: \$white;
        background-color: \$color;
        border-color: \$color;
      }
    }
  }
}
// scss-docs-end list-group-mixin
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "styles/bootstrap/scss/mixins/_list-group.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// List Groups

// scss-docs-start list-group-mixin
@mixin list-group-item-variant(\$state, \$background, \$color) {
  .list-group-item-#{\$state} {
    color: \$color;
    background-color: \$background;

    &.list-group-item-action {
      &:hover,
      &:focus {
        color: \$color;
        background-color: shade-color(\$background, 10%);
      }

      &.active {
        color: \$white;
        background-color: \$color;
        border-color: \$color;
      }
    }
  }
}
// scss-docs-end list-group-mixin
", "styles/bootstrap/scss/mixins/_list-group.scss", "/opt/project/templates/styles/bootstrap/scss/mixins/_list-group.scss");
    }
}
