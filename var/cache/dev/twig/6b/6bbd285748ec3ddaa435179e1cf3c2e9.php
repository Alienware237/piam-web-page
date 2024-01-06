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

/* scss/bootstrap/scss/mixins/_deprecate.scss */
class __TwigTemplate_73295e579a9e8ada44040f7bccabd78f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_deprecate.scss"));

        // line 1
        echo "// Deprecate mixin
//
// This mixin can be used to deprecate mixins or functions.
// `\$enable-deprecation-messages` is a global variable, `\$ignore-warning` is a variable that can be passed to
// some deprecated mixins to suppress the warning (for example if the mixin is still be used in the current version of Bootstrap)
@mixin deprecate(\$name, \$deprecate-version, \$remove-version, \$ignore-warning: false) {
  @if (\$enable-deprecation-messages != false and \$ignore-warning != true) {
    @warn \"#{\$name} has been deprecated as of #{\$deprecate-version}. It will be removed entirely in #{\$remove-version}.\";
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/mixins/_deprecate.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Deprecate mixin
//
// This mixin can be used to deprecate mixins or functions.
// `\$enable-deprecation-messages` is a global variable, `\$ignore-warning` is a variable that can be passed to
// some deprecated mixins to suppress the warning (for example if the mixin is still be used in the current version of Bootstrap)
@mixin deprecate(\$name, \$deprecate-version, \$remove-version, \$ignore-warning: false) {
  @if (\$enable-deprecation-messages != false and \$ignore-warning != true) {
    @warn \"#{\$name} has been deprecated as of #{\$deprecate-version}. It will be removed entirely in #{\$remove-version}.\";
  }
}
", "scss/bootstrap/scss/mixins/_deprecate.scss", "/opt/project/templates/scss/bootstrap/scss/mixins/_deprecate.scss");
    }
}
