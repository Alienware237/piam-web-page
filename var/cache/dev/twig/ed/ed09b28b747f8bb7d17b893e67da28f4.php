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

/* scss/bootstrap/scss/helpers/_colored-links.scss */
class __TwigTemplate_554e1786238e7ef66653f413fcf745d4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/helpers/_colored-links.scss"));

        // line 1
        echo "@each \$color, \$value in \$theme-colors {
  .link-#{\$color} {
    color: \$value;

    @if \$link-shade-percentage != 0 {
      &:hover,
      &:focus {
        color: if(color-contrast(\$value) == \$color-contrast-light, shade-color(\$value, \$link-shade-percentage), tint-color(\$value, \$link-shade-percentage));
      }
    }
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/helpers/_colored-links.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@each \$color, \$value in \$theme-colors {
  .link-#{\$color} {
    color: \$value;

    @if \$link-shade-percentage != 0 {
      &:hover,
      &:focus {
        color: if(color-contrast(\$value) == \$color-contrast-light, shade-color(\$value, \$link-shade-percentage), tint-color(\$value, \$link-shade-percentage));
      }
    }
  }
}
", "scss/bootstrap/scss/helpers/_colored-links.scss", "/opt/project/templates/scss/bootstrap/scss/helpers/_colored-links.scss");
    }
}
