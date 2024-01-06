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

/* scss/bootstrap/scss/bootstrap.scss */
class __TwigTemplate_067520506df8775b64cdee724ea47bc6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/bootstrap.scss"));

        // line 1
        echo "/*!
 * Bootstrap v5.0.0 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */

// scss-docs-start import-stack
// Configuration
@import \"functions\";
@import \"variables\";
@import \"mixins\";
@import \"utilities\";

// Layout & components
@import \"root\";
@import \"reboot\";
@import \"type\";
@import \"images\";
@import \"containers\";
@import \"grid\";
@import \"tables\";
@import \"forms\";
@import \"buttons\";
@import \"transitions\";
@import \"dropdown\";
@import \"button-group\";
@import \"nav\";
@import \"navbar\";
@import \"card\";
@import \"accordion\";
@import \"breadcrumb\";
@import \"pagination\";
@import \"badge\";
@import \"alert\";
@import \"progress\";
@import \"list-group\";
@import \"close\";
@import \"toasts\";
@import \"modal\";
@import \"tooltip\";
@import \"popover\";
@import \"carousel\";
@import \"spinners\";
@import \"offcanvas\";

// Helpers
@import \"helpers\";

// Utilities
@import \"utilities/api\";
// scss-docs-end import-stack
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/bootstrap.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*!
 * Bootstrap v5.0.0 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */

// scss-docs-start import-stack
// Configuration
@import \"functions\";
@import \"variables\";
@import \"mixins\";
@import \"utilities\";

// Layout & components
@import \"root\";
@import \"reboot\";
@import \"type\";
@import \"images\";
@import \"containers\";
@import \"grid\";
@import \"tables\";
@import \"forms\";
@import \"buttons\";
@import \"transitions\";
@import \"dropdown\";
@import \"button-group\";
@import \"nav\";
@import \"navbar\";
@import \"card\";
@import \"accordion\";
@import \"breadcrumb\";
@import \"pagination\";
@import \"badge\";
@import \"alert\";
@import \"progress\";
@import \"list-group\";
@import \"close\";
@import \"toasts\";
@import \"modal\";
@import \"tooltip\";
@import \"popover\";
@import \"carousel\";
@import \"spinners\";
@import \"offcanvas\";

// Helpers
@import \"helpers\";

// Utilities
@import \"utilities/api\";
// scss-docs-end import-stack
", "scss/bootstrap/scss/bootstrap.scss", "/opt/project/templates/scss/bootstrap/scss/bootstrap.scss");
    }
}
