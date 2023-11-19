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

/* styles/bootstrap/scss/mixins/_table-variants.scss */
class __TwigTemplate_72de3f59b123d1d503c94cd2ae598ca8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "styles/bootstrap/scss/mixins/_table-variants.scss"));

        // line 1
        echo "// scss-docs-start table-variant
@mixin table-variant(\$state, \$background) {
  .table-#{\$state} {
    \$color: color-contrast(opaque(\$body-bg, \$background));
    \$hover-bg: mix(\$color, \$background, percentage(\$table-hover-bg-factor));
    \$striped-bg: mix(\$color, \$background, percentage(\$table-striped-bg-factor));
    \$active-bg: mix(\$color, \$background, percentage(\$table-active-bg-factor));

    --#{\$variable-prefix}table-bg: #{\$background};
    --#{\$variable-prefix}table-striped-bg: #{\$striped-bg};
    --#{\$variable-prefix}table-striped-color: #{color-contrast(\$striped-bg)};
    --#{\$variable-prefix}table-active-bg: #{\$active-bg};
    --#{\$variable-prefix}table-active-color: #{color-contrast(\$active-bg)};
    --#{\$variable-prefix}table-hover-bg: #{\$hover-bg};
    --#{\$variable-prefix}table-hover-color: #{color-contrast(\$hover-bg)};

    color: \$color;
    border-color: mix(\$color, \$background, percentage(\$table-border-factor));
  }
}
// scss-docs-end table-variant
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "styles/bootstrap/scss/mixins/_table-variants.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// scss-docs-start table-variant
@mixin table-variant(\$state, \$background) {
  .table-#{\$state} {
    \$color: color-contrast(opaque(\$body-bg, \$background));
    \$hover-bg: mix(\$color, \$background, percentage(\$table-hover-bg-factor));
    \$striped-bg: mix(\$color, \$background, percentage(\$table-striped-bg-factor));
    \$active-bg: mix(\$color, \$background, percentage(\$table-active-bg-factor));

    --#{\$variable-prefix}table-bg: #{\$background};
    --#{\$variable-prefix}table-striped-bg: #{\$striped-bg};
    --#{\$variable-prefix}table-striped-color: #{color-contrast(\$striped-bg)};
    --#{\$variable-prefix}table-active-bg: #{\$active-bg};
    --#{\$variable-prefix}table-active-color: #{color-contrast(\$active-bg)};
    --#{\$variable-prefix}table-hover-bg: #{\$hover-bg};
    --#{\$variable-prefix}table-hover-color: #{color-contrast(\$hover-bg)};

    color: \$color;
    border-color: mix(\$color, \$background, percentage(\$table-border-factor));
  }
}
// scss-docs-end table-variant
", "styles/bootstrap/scss/mixins/_table-variants.scss", "/opt/project/templates/styles/bootstrap/scss/mixins/_table-variants.scss");
    }
}
