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

/* scss/bootstrap/scss/bootstrap-grid.scss */
class __TwigTemplate_ef2248ad5bbd23d6a7aed6c1b59f3718 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/bootstrap-grid.scss"));

        // line 1
        echo "/*!
 * Bootstrap Grid v5.0.0 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */

\$include-column-box-sizing: true !default;

@import \"functions\";
@import \"variables\";

@import \"mixins/lists\";
@import \"mixins/breakpoints\";
@import \"mixins/container\";
@import \"mixins/grid\";
@import \"mixins/utilities\";

@import \"vendor/rfs\";

@import \"containers\";
@import \"grid\";

@import \"utilities\";
// Only use the utilities we need
// stylelint-disable-next-line scss/dollar-variable-default
\$utilities: map-get-multiple(
  \$utilities,
  (
    \"display\",
    \"order\",
    \"flex\",
    \"flex-direction\",
    \"flex-grow\",
    \"flex-shrink\",
    \"flex-wrap\",
    \"justify-content\",
    \"align-items\",
    \"align-content\",
    \"align-self\",
    \"margin\",
    \"margin-x\",
    \"margin-y\",
    \"margin-top\",
    \"margin-end\",
    \"margin-bottom\",
    \"margin-start\",
    \"negative-margin\",
    \"negative-margin-x\",
    \"negative-margin-y\",
    \"negative-margin-top\",
    \"negative-margin-end\",
    \"negative-margin-bottom\",
    \"negative-margin-start\",
    \"padding\",
    \"padding-x\",
    \"padding-y\",
    \"padding-top\",
    \"padding-end\",
    \"padding-bottom\",
    \"padding-start\",
  )
);

@import \"utilities/api\";
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/bootstrap-grid.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*!
 * Bootstrap Grid v5.0.0 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */

\$include-column-box-sizing: true !default;

@import \"functions\";
@import \"variables\";

@import \"mixins/lists\";
@import \"mixins/breakpoints\";
@import \"mixins/container\";
@import \"mixins/grid\";
@import \"mixins/utilities\";

@import \"vendor/rfs\";

@import \"containers\";
@import \"grid\";

@import \"utilities\";
// Only use the utilities we need
// stylelint-disable-next-line scss/dollar-variable-default
\$utilities: map-get-multiple(
  \$utilities,
  (
    \"display\",
    \"order\",
    \"flex\",
    \"flex-direction\",
    \"flex-grow\",
    \"flex-shrink\",
    \"flex-wrap\",
    \"justify-content\",
    \"align-items\",
    \"align-content\",
    \"align-self\",
    \"margin\",
    \"margin-x\",
    \"margin-y\",
    \"margin-top\",
    \"margin-end\",
    \"margin-bottom\",
    \"margin-start\",
    \"negative-margin\",
    \"negative-margin-x\",
    \"negative-margin-y\",
    \"negative-margin-top\",
    \"negative-margin-end\",
    \"negative-margin-bottom\",
    \"negative-margin-start\",
    \"padding\",
    \"padding-x\",
    \"padding-y\",
    \"padding-top\",
    \"padding-end\",
    \"padding-bottom\",
    \"padding-start\",
  )
);

@import \"utilities/api\";
", "scss/bootstrap/scss/bootstrap-grid.scss", "/opt/project/templates/scss/bootstrap/scss/bootstrap-grid.scss");
    }
}
