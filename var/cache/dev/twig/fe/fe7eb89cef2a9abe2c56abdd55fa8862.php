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

/* scss/bootstrap/scss/forms/_validation.scss */
class __TwigTemplate_7e230aa5baf7c9e4af7325e16713aaef extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/forms/_validation.scss"));

        // line 1
        echo "// Form validation
//
// Provide feedback to users when form field values are valid or invalid. Works
// primarily for client-side validation via scoped `:invalid` and `:valid`
// pseudo-classes but also includes `.is-invalid` and `.is-valid` classes for
// server-side validation.

// scss-docs-start form-validation-states-loop
@each \$state, \$data in \$form-validation-states {
  @include form-validation-state(\$state, \$data...);
}
// scss-docs-end form-validation-states-loop
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/forms/_validation.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Form validation
//
// Provide feedback to users when form field values are valid or invalid. Works
// primarily for client-side validation via scoped `:invalid` and `:valid`
// pseudo-classes but also includes `.is-invalid` and `.is-valid` classes for
// server-side validation.

// scss-docs-start form-validation-states-loop
@each \$state, \$data in \$form-validation-states {
  @include form-validation-state(\$state, \$data...);
}
// scss-docs-end form-validation-states-loop
", "scss/bootstrap/scss/forms/_validation.scss", "/opt/project/templates/scss/bootstrap/scss/forms/_validation.scss");
    }
}
