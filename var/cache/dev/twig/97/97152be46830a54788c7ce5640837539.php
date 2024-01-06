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

/* scss/bootstrap/scss/forms/_form-text.scss */
class __TwigTemplate_dd9f5a8524edec7d1db9afc0c4df82c7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/forms/_form-text.scss"));

        // line 1
        echo "//
// Form text
//

.form-text {
  margin-top: \$form-text-margin-top;
  @include font-size(\$form-text-font-size);
  font-style: \$form-text-font-style;
  font-weight: \$form-text-font-weight;
  color: \$form-text-color;
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/forms/_form-text.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//
// Form text
//

.form-text {
  margin-top: \$form-text-margin-top;
  @include font-size(\$form-text-font-size);
  font-style: \$form-text-font-style;
  font-weight: \$form-text-font-weight;
  color: \$form-text-color;
}
", "scss/bootstrap/scss/forms/_form-text.scss", "/opt/project/templates/scss/bootstrap/scss/forms/_form-text.scss");
    }
}
