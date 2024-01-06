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

/* scss/bootstrap/scss/bootstrap-reboot.scss */
class __TwigTemplate_73893c2984202b2f587e3a49e632a62a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/bootstrap-reboot.scss"));

        // line 1
        echo "/*!
 * Bootstrap Reboot v5.0.0 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * Forked from Normalize.css, licensed MIT (https://github.com/necolas/normalize.css/blob/master/LICENSE.md)
 */

@import \"functions\";
@import \"variables\";
// Prevent the usage of custom properties since we don't add them to `:root` in reboot
\$font-family-base: \$font-family-sans-serif; // stylelint-disable-line scss/dollar-variable-default
\$font-family-code: \$font-family-monospace; // stylelint-disable-line scss/dollar-variable-default
@import \"mixins\";
@import \"reboot\";
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/bootstrap-reboot.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*!
 * Bootstrap Reboot v5.0.0 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * Forked from Normalize.css, licensed MIT (https://github.com/necolas/normalize.css/blob/master/LICENSE.md)
 */

@import \"functions\";
@import \"variables\";
// Prevent the usage of custom properties since we don't add them to `:root` in reboot
\$font-family-base: \$font-family-sans-serif; // stylelint-disable-line scss/dollar-variable-default
\$font-family-code: \$font-family-monospace; // stylelint-disable-line scss/dollar-variable-default
@import \"mixins\";
@import \"reboot\";
", "scss/bootstrap/scss/bootstrap-reboot.scss", "/opt/project/templates/scss/bootstrap/scss/bootstrap-reboot.scss");
    }
}
