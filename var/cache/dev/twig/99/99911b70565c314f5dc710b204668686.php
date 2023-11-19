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

/* scss/bootstrap/scss/_mixins.scss */
class __TwigTemplate_98ad405b6d4a4b97640d64c2fb7f3eec extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_mixins.scss"));

        // line 1
        echo "// Toggles
//
// Used in conjunction with global variables to enable certain theme features.

// Vendor
@import \"vendor/rfs\";

// Deprecate
@import \"mixins/deprecate\";

// Helpers
@import \"mixins/breakpoints\";
@import \"mixins/color-scheme\";
@import \"mixins/image\";
@import \"mixins/resize\";
@import \"mixins/visually-hidden\";
@import \"mixins/reset-text\";
@import \"mixins/text-truncate\";

// Utilities
@import \"mixins/utilities\";

// Components
@import \"mixins/alert\";
@import \"mixins/buttons\";
@import \"mixins/caret\";
@import \"mixins/pagination\";
@import \"mixins/lists\";
@import \"mixins/list-group\";
@import \"mixins/forms\";
@import \"mixins/table-variants\";

// Skins
@import \"mixins/border-radius\";
@import \"mixins/box-shadow\";
@import \"mixins/gradients\";
@import \"mixins/transition\";

// Layout
@import \"mixins/clearfix\";
@import \"mixins/container\";
@import \"mixins/grid\";
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_mixins.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Toggles
//
// Used in conjunction with global variables to enable certain theme features.

// Vendor
@import \"vendor/rfs\";

// Deprecate
@import \"mixins/deprecate\";

// Helpers
@import \"mixins/breakpoints\";
@import \"mixins/color-scheme\";
@import \"mixins/image\";
@import \"mixins/resize\";
@import \"mixins/visually-hidden\";
@import \"mixins/reset-text\";
@import \"mixins/text-truncate\";

// Utilities
@import \"mixins/utilities\";

// Components
@import \"mixins/alert\";
@import \"mixins/buttons\";
@import \"mixins/caret\";
@import \"mixins/pagination\";
@import \"mixins/lists\";
@import \"mixins/list-group\";
@import \"mixins/forms\";
@import \"mixins/table-variants\";

// Skins
@import \"mixins/border-radius\";
@import \"mixins/box-shadow\";
@import \"mixins/gradients\";
@import \"mixins/transition\";

// Layout
@import \"mixins/clearfix\";
@import \"mixins/container\";
@import \"mixins/grid\";
", "scss/bootstrap/scss/_mixins.scss", "/opt/project/templates/scss/bootstrap/scss/_mixins.scss");
    }
}
