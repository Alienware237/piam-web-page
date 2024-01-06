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

/* styles/bootstrap/scss/mixins/_container.scss */
class __TwigTemplate_1422b5e9749bf73e2e97feb772f5f956 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "styles/bootstrap/scss/mixins/_container.scss"));

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
        return "styles/bootstrap/scss/mixins/_container.scss";
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
", "styles/bootstrap/scss/mixins/_container.scss", "/opt/project/templates/styles/bootstrap/scss/mixins/_container.scss");
    }
}
