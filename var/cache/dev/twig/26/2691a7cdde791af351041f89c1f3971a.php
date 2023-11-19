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

/* scss/bootstrap/scss/mixins/_container.scss */
class __TwigTemplate_d1a0ee2fa4ef63f9637ac5e04dffc5f4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_container.scss"));

        // line 1
        echo "// Container mixins

@mixin make-container(\$gutter: \$container-padding-x) {
  width: 100%;
  padding-right: var(--#{\$variable-prefix}gutter-x, #{\$gutter});
  padding-left: var(--#{\$variable-prefix}gutter-x, #{\$gutter});
  margin-right: auto;
  margin-left: auto;
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/mixins/_container.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Container mixins

@mixin make-container(\$gutter: \$container-padding-x) {
  width: 100%;
  padding-right: var(--#{\$variable-prefix}gutter-x, #{\$gutter});
  padding-left: var(--#{\$variable-prefix}gutter-x, #{\$gutter});
  margin-right: auto;
  margin-left: auto;
}
", "scss/bootstrap/scss/mixins/_container.scss", "/opt/project/templates/scss/bootstrap/scss/mixins/_container.scss");
    }
}
