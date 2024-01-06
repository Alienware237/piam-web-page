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

/* scss/bootstrap/scss/mixins/_alert.scss */
class __TwigTemplate_6e57b53f06d231bf5ba47116f236980a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_alert.scss"));

        // line 1
        echo "// scss-docs-start alert-variant-mixin
@mixin alert-variant(\$background, \$border, \$color) {
  color: \$color;
  @include gradient-bg(\$background);
  border-color: \$border;

  .alert-link {
    color: shade-color(\$color, 20%);
  }
}
// scss-docs-end alert-variant-mixin
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/mixins/_alert.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// scss-docs-start alert-variant-mixin
@mixin alert-variant(\$background, \$border, \$color) {
  color: \$color;
  @include gradient-bg(\$background);
  border-color: \$border;

  .alert-link {
    color: shade-color(\$color, 20%);
  }
}
// scss-docs-end alert-variant-mixin
", "scss/bootstrap/scss/mixins/_alert.scss", "/opt/project/templates/scss/bootstrap/scss/mixins/_alert.scss");
    }
}
